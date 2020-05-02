<?php

/*
 * Author: Christopher Schilling, Ashley Nguyen, Bryce Koehl
 * Date: 5/1/2020
 * File: database,class.php
 * Description: This class contains all of our database information
 *
 */

class Database
{

    //define database parameters
    private $param = array(
        'host' => 'localhost',
        'login' => 'phpuser',
        'password' => 'phpuser',
        'database' => 'web_presence',
        'celebrity' => 'celebrity',
        'celebrity_dimension' => 'celebrity_dimension',
        'personality_dimension' => 'personality_dimension',
        'users' => 'users',
    );
    //define the database connection object
    private $objDBConnection = NULL;
    static private $_instance = NULL;

    //constructor
    private function __construct()
    {
        $this->objDBConnection = @new mysqli(
            $this->param['host'], $this->param['login'], $this->param['password'], $this->param['database']
        );
        if (mysqli_connect_errno() != 0) {
            $message = "Connecting database failed: " . mysqli_connect_error() . ".";
            include 'error.php';
            exit();
        }
    }

    //static method to ensure there is just one Database instance
    static public function getDatabase()
    {
        if (self::$_instance == NULL)
            self::$_instance = new Database();
        return self::$_instance;
    }

    //this function returns the database connection object
    public function getConnection()
    {
        return $this->objDBConnection;
    }

    //returns the name of the table that stores celebrity
    public function getCelebrity()
    {
        return $this->param['celebrity'];
    }

    //returns the name of the table that stores celebrities personality dimension
    public function getCelebrityDimension()
    {
        return $this->param['celebrity_dimension'];
    }

    //returns the name of the table storing personality dimensions
    public function getPersonalityDimension()
    {
        return $this->param['personality_dimension'];
    }

    //returns the name of the table storing cds
    public function getUsers()
    {
        return $this->param['users'];
    }

}
