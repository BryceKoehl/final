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

    //To use singleton pattern, this constructor is made private. To get an instance of the class, the getCelebrityModel method must be called.
    private function __construct()
    {
        $this->db = Database::getDatabase();
        $this->dbConnection = $this->db->getConnection();

        //connect to our web_presence database tables
        $this->celebrity = $this->db->getCelebrity();

        //Escapes special characters in a string for use in an SQL statement. This stops SQL inject in POST vars.
        foreach ($_POST as $key => $value) {
            $_POST[$key] = $this->dbConnection->real_escape_string($value);
        }

        //Escapes special characters in a string for use in an SQL statement. This stops SQL Injection in GET vars
        foreach ($_GET as $key => $value) {
            $_GET[$key] = $this->dbConnection->real_escape_string($value);
        }

        //initialize celebrity personality demension
        //if (!isset($_SESSION['_celebrity'])) {
        // $celebrity = $this->getCelebrityModel();
        //// $_SESSION['celebrity'] = $celebrity;
        //}
    }

    //static method to ensure there is just one CelebrityModel instance
    public static function getCelebrityModel()
    {
        if (self::$_instance == NULL) {
            self::$_instance = new CelebrityModel();
        }
        return self::$_instance;
    }

    /*
     * the list_celebrity method retrieves all celebrities from the database and
     * returns an array of Celebrity objects if successful or false if failed.
     * Celebrities should also be filtered by personality demensions and/or sorted by titles or rating if they are available.
     */

    public function list_celebrity()
    {
        //SQL select statement
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
                    $query_row["last_name"]);

                //push the toy into the array
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

    public function view_celebrity($id)
    {
        //the select sql statement
        $sql = "SELECT * FROM " . $this->celebrity;

        //execute the query
        $query = $this->dbConnection->query($sql);

        if ($query && $query->num_rows > 0) {
            $obj = $query->fetch_object();

            //create a celebrity object
            $celeb = new Celebrity(stripslashes($obj->first_name), stripslashes($obj->last_name));

            //set the id for the celebrity
            $celeb->setCelebId($obj->celeb_id);

            return $celeb;
        }

        return false;
    }
}

/*    //the update_celebrity method updates an existing celebrity in the database. Details of the movie are posted in a form. Return true if succeed; false otherwise.
    public function update_celebrity($id)
    {
        //if the script did not received post data, display an error message and then terminite the script immediately
        if (!filter_has_var(INPUT_POST, 'first_name') ||
            !filter_has_var(INPUT_POST, 'last_name')) {

            return false;
        }

        //retrieve data for the new celebrity; data are sanitized and escaped for security.
        $first_name = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING)));
        $last_name = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING)));
        $gender = $this->dbConnection->real_escape_string(filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING));
        $age = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'age', FILTER_SANITIZE_STRING)));
        $web_presence = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'web_presence', FILTER_SANITIZE_STRING)));
        $most_active = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'most_active', FILTER_SANITIZE_STRING)));
        $frequency = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'frequency', FILTER_SANITIZE_STRING)));

        //COME BACK TO THIS STATEMENT!!! query string for update
        $sql = "UPDATE " . $this->celebrity .
            " SET first_name='$first_name', last_name='$last_name',  gender='$gender',  age='$age', web_presence='$web_presence', "
            . "most_active='$most_active', frequency='$frequency' WHERE id='$id'";

        //execute the query
        return $this->dbConnection->query($sql);
    }

    //search the database for celebrities that match words in titles. Return an array of movies if succeed; false otherwise.
    public function search_celebs($terms)
    {
        $terms = explode(" ", $terms); //explode multiple terms into an array

        //COME BACK TO THIS STATEMENT SEARCHING FOR CELEBS BY NAME!!! select statement for AND search
        $sql = "SELECT * FROM " . $this->celebrity . ".celeb_id AND (1";

        foreach ($terms as $term) {
            $sql .= " AND first_name LIKE '%" . $term . "%'";
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
            $celeb = new Celebrity($obj->first_name, $obj->last_name, $obj->personality_dimension);

            //set the id for the celebrity
            $celeb->setId($obj->id);

            //add the celebrity into the array
            $celebs[] = $celeb;
        }
        return $celebs;
    }
}*/

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
