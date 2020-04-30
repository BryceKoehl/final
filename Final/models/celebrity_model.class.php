<?php

/*
 * Author: Chris, Ashley, Bryce, Maimouna
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


    //display later!
    public function rank_extraversion($celeb_id){
        /*
            SELECT
                celebrity_dimension.celeb_id, celebrity_dimension.frequency
            FROM
                celebrity_dimension
            WHERE celebrity_dimension.dim_id = 1
            ORDER BY celebrity_dimension.frequency DESC


            // Louie's code below: The following code snippet will generate an array called "ranking".
             The elements in the array are ordered by frequencies (# of posts). Each element
             contains celebrity id and frequency.

            $sql = "SELECT celeb_id, frequency from celebrity_dimension where dim_id=1 ORDER BY frequency DESC";

            $query = $conn->query($sql);
            $ranking = [];

            while($row = $query->fetch_assoc()) {
                $ranking[] =[$row['celeb_id']=>$row['frequency']] ;
            }

            var_dump($ranking);
        */

        //grabs extraversion column in intersection table to sort first 10 celebrities by
        $sql = " SELECT " . $this->celebrity_dimension . " .celeb_id " . $this->celebrity_dimension . ".frequency " .
            " FROM " . $this->celebrity_dimension .
            " WHERE " . $this->celebrity_dimension . ".dim_id=1" . " AND " . $this->celebrity_dimension . ".celeb_id<11" .
            " ORDER BY " . $this->celebrity_dimension . ".frequency" . " DESC ";

        //execute the query
        $query = $this->dbConnection->query($sql);

        if ($query && $query->num_rows > 0) {
            $ranking = array();

        //$ranking = [];

            //loop through all the rows
            while($query_row = $query->fetch_assoc()) {
                $ranking = [$query_row['celeb_id']=>$query_row['frequency']];
                //$rankings = $ranking;
            }
            return $ranking;
        }
        return false;
    }

    public function rank_personalities($celeb_id){
        /*
        SELECT celebrity_dimension.celeb_id, celebrity_dimension.frequency
        FROM celebrity_dimension
        WHERE celebrity_dimension.celeb_id = 1 AND celebrity_dimension.dim_id != 1
        ORDER BY celebrity_dimension.frequency DESC
        */

        //grabs all personality dimensions except extraversion
        $sql = " SELECT " . $this->celebrity_dimension . ".celeb_id " . $this->celebrity_dimension . ".frequency " .
            " FROM " . $this->celebrity_dimension .
            " WHERE " . $this->celebrity_dimension . " .celeb_id=$celeb_id" . $this->celebrity_dimension . ".dim_id!=1" .
            " ORDER BY " . $this->celebrity_dimension . ".frequency" . " DESC ";

        //execute the query
        $query = $this->dbConnection->query($sql);

        if ($query && $query->num_rows > 0) {
            $ranking = array();

            //$ranking = [];

            //loop through all the rows
            while($query_row = $query->fetch_assoc()) {
                $ranking = [$query_row['celeb_id']=>$query_row['frequency']] ;
                //$rankings = $ranking;
            }
            return $ranking;
        }
        return false;

    }

    //lists each celebrity personality dimensions
    public function celebrity_personality($celeb_id)
    {
        /* SELECT celebrity.first_name, celebrity.last_name, personality_dimension.dimension, celebrity_dimension.frequency
        FROM celebrity
        INNER JOIN celebrity_dimension ON celebrity.celeb_id = celebrity_dimension.celeb_id
        INNER JOIN personality_dimension ON celebrity_dimension.dim_id = personality_dimension.dim_id
        WHERE celebrity.celeb_id = 1
        */

        //the select sql statement
        $sql = " SELECT " . $this->celebrity . ".first_name, " . $this->celebrity . ".last_name, " . $this->personality_dimension . ".dimension, " . $this->celebrity_dimension . ".frequency " .
            " FROM " . $this->celebrity .
            " INNER JOIN " . $this->celebrity_dimension . " ON " . $this->celebrity . ".celeb_id=" . $this->celebrity_dimension . ".celeb_id" .
            " INNER JOIN " . $this->personality_dimension . " ON " . $this->celebrity_dimension . ".dim_id=" . $this->personality_dimension . ".dim_id" .
            " WHERE " . $this->celebrity . ".celeb_id=$celeb_id";

        //execute the query
        $query = $this->dbConnection->query($sql);

        if ($query && $query->num_rows > 0) {
            $celebPersons = array(); //create an array for celebrity personalities

            //loop through all rows
            while ($query_row = $query->fetch_assoc()) {
                $celebPerson = new CelebrityDimension(
                    $query_row["dimension"],
                    $query_row["frequency"]);
                //push the toy into the array
                $celebPersons[] = $celebPerson;
            }
            return $celebPersons;
        }
        return false;
    }

/*            //create a new object to store frequency data for each celebrity
            $personArr = arr("Extraversion", "Agreeableness", "Conscientiousness", "Neuroticism", "Openness");
            return $personArr;
    }*/

    public function list_celebrity()
    {
        //SQL select statement, grabs all celebs & sorts by extraversion
        $sql = "SELECT * FROM " . $this->db->getCelebrity();

        //execute the query
        $query = $this->dbConnection->query($sql);

        if ($query && $query->num_rows > 0) {
            //array to store all toys
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
     * the viewCelebrity method retrieves the details of the movie specified by its id
     * and returns a celebrity object. Return false if failed.
     */
    public function view_celebrity($celeb_id)
    {
        //the select sql statement
        //$sql = "SELECT * FROM " . $this->celebrity;
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

        //if the script did not received post data, display an error message and then terminite the script immediately
        if (!filter_has_var(INPUT_POST, 'first_name') ||
            !filter_has_var(INPUT_POST, 'last_name') ||
            !filter_has_var(INPUT_POST, 'gender') ||
            !filter_has_var(INPUT_POST, 'age') ||
            !filter_has_var(INPUT_POST, 'web_presence') ||
            !filter_has_var(INPUT_POST, 'most_active') ||
            !filter_has_var(INPUT_POST, 'post_frequency')) {

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

        //COME BACK TO THIS STATEMENT!!! query string for update
        $sql = "UPDATE " . $this->celebrity .
            " SET first_name='$first_name', last_name='$last_name',  gender='$gender',  age='$age', web_presence='$web_presence', "
            . "most_active='$most_active', post_frequency='$post_frequency' WHERE celeb_id='$celeb_id'";

        //execute the query
        return $this->dbConnection->query($sql);
    }


    //add_celeb function
    public function add_celebs(){
        if (!filter_has_var(INPUT_POST, 'first_name') ||
            !filter_has_var(INPUT_POST, 'last_name') ||
            !filter_has_var(INPUT_POST, 'gender') ||
            !filter_has_var(INPUT_POST, 'age') ||
            !filter_has_var(INPUT_POST, 'web_presence') ||
            !filter_has_var(INPUT_POST, 'most_active') ||
            !filter_has_var(INPUT_POST, 'post_frequency')) {

            return false;
        }

        $first_name = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING)));
        $last_name = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING)));
        $gender = $this->dbConnection->real_escape_string(filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING));
        $age = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'age', FILTER_SANITIZE_STRING)));
        $web_presence = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'web_presence', FILTER_SANITIZE_STRING)));
        $most_active = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'most_active', FILTER_SANITIZE_STRING)));
        $post_frequency = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'post_frequency', FILTER_SANITIZE_STRING)));

        //SQL query adds the included values into the products table of the  database
        $sql = "INSERT INTO celebrity VALUES(NULL,'$first_name','$last_name','$gender','$age', '$web_presence', '$most_active', '$post_frequency')";

        //executes the query
        $query = $this->dbConnection->query($sql);

        //determine the id of the newly added product
        $celeb_id = $this->dbConnection->insert_id;

        // close the connection.
        $this->dbConnection->close();

        //display a confirmation message and a link to display details of the new product
        echo "You have successfully inserted the new product";
    }


    //search the database for celebrities that match words in titles. Return an array of movies if succeed; false otherwise.
    public function search_celebs($terms)
    {
        $terms = explode(" ", $terms); //explode multiple terms into an array

        //select statement for AND search
        $sql = "SELECT * FROM " . $this->celebrity .
            " WHERE (1";

        foreach ($terms as $term) { //COME BACK TO THIS!! Search by first & last name? Only works with first
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


//get all celebrity personality demensions
/*    private function get_celebrity_personalitydemensions() {
        $sql = "SELECT * FROM " . $this->personality_dimension;

        //execute the query
        $query = $this->dbConnection->query($sql);

        if (!$query) {
            return false;
        }

        //loop through all rows
        $personality_dimension = array();
        while ($obj = $query->fetch_object()) {
            $personality_dimension[$obj->personality_dimension] = $obj->dim_id;
        }
        return $personality_dimension;
    }

}*/
