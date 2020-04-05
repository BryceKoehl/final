<?php

/* Author: Louie Zhu
 * Date: 03/15/2016
 * Name: database.class.php
 * Description: the Database class sets the datbase details.
 */

class Database {

    //define database parameters
    private $param = array(
        'host' => 'localhost',
        'login' => 'phpuser',
        'password' => 'phpuser',
        'database' => 'toymvc',
        'tblToy' => 'toy'
    );
    //define the database connection object
    private $objDBConnection = NULL;
    static private $_instance = NULL;

    //constructor
    public function __construct() {

        $this->objDBConnection = @new mysqli(
                        $this->param['host'],
                        $this->param['login'],
                        $this->param['password'],
                        $this->param['database']
        );
        if (mysqli_connect_errno() != 0) {
            echo "Connecting to database failed: " . mysqli_connect_error();
            exit();
        }
    }

    //static method to ensure there is just one Database instance, creates a database object
    static public function getInstance() {
        if (self::$_instance == NULL)
            self::$_instance = new Database();
        return self::$_instance;
    }

    //this function returns the database connection object
    public function getConnection() {
        return $this->objDBConnection;
    }

    //returns the name of the table storing books
    public function getToyTable() {
        return $this->param['tblToy'];
    }

}