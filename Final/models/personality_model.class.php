<?php

/*
 * Author: Christopher Schilling
 * Date: 4 20, 2020
 * File: personality_model.class.php
 * Description: the personality model
 *
 */

class PersonalityModel {

    //private data members
    private $db;
    private $dbConnection;
    static private $_instance = NULL;
    private $personality_dimension;

    //To use singleton pattern, this constructor is made private. To get an instance of the class, the getpersonalityModel method must be called.
    private function __construct() {
        $this->db = Database::getDatabase();
        $this->dbConnection = $this->db->getConnection();
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

    //static method to ensure there is just one personalityModel instance
    public static function getPersonalityModel() {
        if (self::$_instance == NULL) {
            self::$_instance = new PersonalityModel();
        }
        return self::$_instance;
    }

    /*
     * the list_personality method retrieves all personalitys from the database and
     * returns an array of personality objects if successful or false if failed.
     * personalitys should also be filtered by ratings and/or sorted by titles or rating if they are available.
     */

    public function list_personality() {
        //SQL select statement
        $sql = "SELECT * FROM " . $this->db->getPersonalityDimension();

        //execute the query
        $query = $this->dbConnection->query($sql);

        if ($query && $query->num_rows > 0) {
            //array to store all toys
            $personalities = array();

            //loop through all rows
            while ($query_row = $query->fetch_assoc()) {
                $personality= new Personality(
                    $query_row["dimension"],
                    $query_row["qualities"],
                    $query_row["description"],
                    $query_row["keywords"]);

                //push the toy into the array
                $personalities[] = $personality;
            }
            return $personalities;
        }
        return false;
    }

    /*
     * the viewpersonality method retrieves the details of the personality specified by its id
     * and returns a personality object. Return false if failed.
     */

    public function view_personality($id) {
        //the select ssql statement
        $sql = "SELECT * FROM " . $this->db->getPersonalityDimension();

        //execute the query
        $query = $this->dbConnection->query($sql);

        if ($query && $query->num_rows > 0) {
            $obj = $query->fetch_object();

            //create a personality object
            $personality = new Personality(stripslashes($obj->dimension), stripslashes($obj->qualities), stripslashes($obj->description), stripslashes($obj->keywords));

            //set the id for the personality
            $personality->setId($obj->dim_id);

            return $personality;
        }

        return false;
    }

}
