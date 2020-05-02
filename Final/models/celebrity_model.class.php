<?php

/*
 * Author: Christopher Schilling, Ashley Nguyen, Maimouna Diallo, Bryce Koehl
 * Date: April 19, 2020
 * File: celebrity_model.class.php
 * Description: the celebrity model
 *
 */

class CelebrityModel
{

    //private data members
    private $db;
    private $dbConnection;
    static private $_instance = NULL;

    //variables to call our web_presence database tables
    private $celebrity;
    private $celebrity_dimension;
    private $personality_dimension;

    //To use singleton pattern, this constructor is made private. To get an instance of the class, the getCelebrityModel method must be called.
    private function __construct()
    {
        $this->db = Database::getDatabase();
        $this->dbConnection = $this->db->getConnection();

        //connect to our web_presence database tables
        $this->celebrity = $this->db->getCelebrity();
        $this->celebrity_dimension = $this->db->getCelebrityDimension();
        $this->personality_dimension = $this->db->getPersonalityDimension();

        //Escapes special characters in a string for use in an SQL statement. This stops SQL inject in POST vars.
        foreach ($_POST as $key => $value) {
            $_POST[$key] = $this->dbConnection->real_escape_string($value);
        }

        //Escapes special characters in a string for use in an SQL statement. This stops SQL Injection in GET vars
        foreach ($_GET as $key => $value) {
            $_GET[$key] = $this->dbConnection->real_escape_string($value);
        }
    }

    //static method to ensure there is just one CelebrityModel instance
    public static function getCelebrityModel()
    {
        if (self::$_instance == NULL) {
            self::$_instance = new CelebrityModel();
        }
        return self::$_instance;
    }

    //lists each celebrity personality dimensions
    public function celebrity_personality($celeb_id)
    {
        //the select sql statement
        $sql = "SELECT frequency, dimension FROM celebrity_dimension, personality_dimension WHERE 
				celebrity_dimension.dim_id = personality_dimension.dim_id AND celeb_id = $celeb_id ORDER BY frequency DESC";

        //execute the query
        $query = $this->dbConnection->query($sql);

        $celebPersons = array(); //create an array for celebrity personalities
        if ($query && $query->num_rows > 0) {
            //loop through all rows
            while ($query_row = $query->fetch_assoc()) {
                $celebPersons[$query_row["dimension"]] = $query_row["frequency"];
            }
        }

        if (empty($celebPersons)) {
            return false;
        }

        //Determine primary and secondary dimension
        $dimensions = array_keys($celebPersons);

        if ($dimensions[0] == "Extraversion") {
            array_shift($dimensions);
        }
        if ($celebPersons["Extraversion"] == 0.00) {
            $celebPersons['Primary'] = "N/A";
            $celebPersons['Secondary'] = "N/A";
        } else {
            $celebPersons['Primary'] = $dimensions[0];
            $celebPersons['Secondary'] = $dimensions[1];
        }

        //Determine ranking on extroversion
        $sql = " SELECT " . $this->celebrity_dimension . ".celeb_id, " . $this->celebrity_dimension . ".frequency " .
            " FROM " . $this->celebrity_dimension .
            " WHERE " . $this->celebrity_dimension . ".dim_id=1" .
            " ORDER BY " . $this->celebrity_dimension . ".frequency" . " DESC ";


        $query = $this->dbConnection->query($sql);


        $ranking = 0;
        while ($query_row = $query->fetch_assoc()) {
            $ranking++;
            if ($query_row['celeb_id'] == $celeb_id) {
                break;
            }
        }
        if ($celebPersons["Extraversion"] == 0.00) {
            $celebPersons['Ranking'] = "N/A";
        } else {
            $celebPersons['Ranking'] = $ranking;
        }

        return $celebPersons;

    }

    public function list_celebrity()
    {
        //SQL select statement, grabs all celebs & sorts by extroversion
        $sql = "SELECT * FROM " . $this->db->getCelebrity();

        //execute the query
        $query = $this->dbConnection->query($sql);

        if ($query && $query->num_rows > 0) {
            //array to store all celebrities
            $celebs = array();

            //loop through all rows
            while ($query_row = $query->fetch_assoc()) {
                $celeb = new Celebrity(
                    $query_row["first_name"],
                    $query_row["last_name"],
                    $query_row["gender"],
                    $query_row["age"],
                    $query_row["web_presence"],
                    $query_row["most_active"],
                    $query_row["post_frequency"],
                    $query_row["images"]);
                //push
                $celebs[] = $celeb;
            }
            return $celebs;
        }
        return false;
    }

    /*
     * the viewCelebrity method retrieves the details of the celebrity specified by its id
     * and returns a celebrity object. Return false if failed.
     */
    public function view_celebrity($celeb_id)
    {

        $sql = "SELECT * FROM " . $this->celebrity .
            " WHERE " . $this->celebrity . ".celeb_id='$celeb_id'";

        //execute the query
        $query = $this->dbConnection->query($sql);

        if ($query && $query->num_rows > 0) {
            $obj = $query->fetch_object();

            //create a celebrity object
            $celeb = new Celebrity(stripslashes($obj->first_name),
                stripslashes($obj->last_name),
                stripslashes($obj->gender),
                stripslashes($obj->age),
                stripslashes($obj->web_presence),
                stripslashes($obj->most_active),
                stripslashes($obj->post_frequency),
                stripslashes($obj->images));

            //set the id for the celebrity
            $celeb->setCelebId($obj->celeb_id);

            return $celeb;
        }

        return false;
    }


    //the update_celebrity method updates an existing celebrity in the database. Details of the movie are posted in a form. Return true if succeed; false otherwise.
    public function update_celebrity($celeb_id)
    {

        //if the script did not received post data, display an error message and then terminate the script immediately
        if (!filter_has_var(INPUT_POST, 'first_name') ||
            !filter_has_var(INPUT_POST, 'last_name') ||
            !filter_has_var(INPUT_POST, 'gender') ||
            !filter_has_var(INPUT_POST, 'age') ||
            !filter_has_var(INPUT_POST, 'web_presence') ||
            !filter_has_var(INPUT_POST, 'most_active') ||
            !filter_has_var(INPUT_POST, 'post_frequency') ||
            !filter_has_var(INPUT_POST, 'images')) {

            return false;
        }

        //retrieve data for the new celebrity; data are sanitized and escaped for security.
        $first_name = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING)));
        $last_name = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING)));
        $gender = $this->dbConnection->real_escape_string(filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING));
        $age = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'age', FILTER_SANITIZE_STRING)));
        $web_presence = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'web_presence', FILTER_SANITIZE_STRING)));
        $most_active = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'most_active', FILTER_SANITIZE_STRING)));
        $post_frequency = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'post_frequency', FILTER_SANITIZE_STRING)));
        $images = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'images', FILTER_SANITIZE_STRING)));

        $sql = "UPDATE " . $this->celebrity .
            " SET first_name='$first_name', last_name='$last_name',  gender='$gender',  age='$age', web_presence='$web_presence', "
            . "most_active='$most_active', post_frequency='$post_frequency', images='$images' WHERE celeb_id='$celeb_id'";

        //execute the query
        return $this->dbConnection->query($sql);

        echo "<div align='center'><h1 style='color:green'><b>You have successfully edit a celebrity! :)</b></h1></div>";
    }


    //add_celeb function
    public function add_celebs()
    {
        if (!filter_has_var(INPUT_POST, 'first_name') ||
            !filter_has_var(INPUT_POST, 'last_name') ||
            !filter_has_var(INPUT_POST, 'gender') ||
            !filter_has_var(INPUT_POST, 'age') ||
            !filter_has_var(INPUT_POST, 'web_presence') ||
            !filter_has_var(INPUT_POST, 'most_active') ||
            !filter_has_var(INPUT_POST, 'post_frequency') ||
            !filter_has_var(INPUT_POST, 'images')) {

            return false;
        }

        $first_name = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING)));
        $last_name = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING)));
        $gender = $this->dbConnection->real_escape_string(filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING));
        $age = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'age', FILTER_SANITIZE_STRING)));
        $web_presence = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'web_presence', FILTER_SANITIZE_STRING)));
        $most_active = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'most_active', FILTER_SANITIZE_STRING)));
        $post_frequency = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'post_frequency', FILTER_SANITIZE_STRING)));
        $images = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'images', FILTER_SANITIZE_STRING)));

        //SQL query adds the included values into the products table of the  database
        $sql = "INSERT INTO celebrity VALUES(NULL,'$first_name','$last_name','$gender','$age', '$web_presence', '$most_active', '$post_frequency', '$images')";

        //executes the query
        $query = $this->dbConnection->query($sql);

        //determine the id of the newly added product
        $celeb_id = $this->dbConnection->insert_id;

        // close the connection.
        $this->dbConnection->close();

        //display a confirmation message and a link to display details of the new product
        echo "<div align='center'><h1 style='color:green'><b>You have successfully added a new celebrity! :)</b></h1></div>";
    }

    public function delete_celeb($celeb_id)
    {

        $sql = "DELETE FROM celebrity WHERE celebrity.celeb_id = $celeb_id";

        //executes the query
        $query = $this->dbConnection->query($sql);

        // close the connection.
        $this->dbConnection->close();

        //display a confirmation message
        echo "<div align='center'><h1 style='color:green'><b>You have successfully deleted a celebrity! :)</b></h1></div>";
    }


    //search the database for celebrities that match words in titles. Return an array of movies if succeed; false otherwise.
    public function search_celebs($terms)
    {
        $terms = explode(" ", $terms); //explode multiple terms into an array

        //select statement for AND search
        $sql = "SELECT * FROM " . $this->celebrity .
            " WHERE (1";

        foreach ($terms as $term) {
            $sql .= " AND first_name LIKE '%" . $term . "%' OR last_name LIKE '%" . $term . "%'";
        }

        $sql .= ")";

        //execute the query
        $query = $this->dbConnection->query($sql);

        // the search failed, return false.
        if (!$query)
            return false;

        //search succeeded, but no celebrity was found.
        if ($query->num_rows == 0)
            return 0;

        //search succeeded, and found at least 1 celebrity found.
        //create an array to store all the returned celebrities
        $celebs = array();

        //loop through all rows in the returned record sets
        while ($obj = $query->fetch_object()) {
            $celeb = new Celebrity(stripslashes($obj->first_name),
                stripslashes($obj->last_name),
                stripslashes($obj->gender),
                stripslashes($obj->age),
                stripslashes($obj->web_presence),
                stripslashes($obj->most_active),
                stripslashes($obj->post_frequency),
                stripslashes($obj->images));

            //set the id for the celebrity
            $celeb->setCelebId($obj->celeb_id);

            //add the celebrity into the array
            $celebs[] = $celeb;
        }
        return $celebs;
    }
}
