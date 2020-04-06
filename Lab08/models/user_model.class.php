<?php
/**
 * Author: "Maimouna Diallo, Bryce Koehl, Ashley Nguyen, Christopher Schilling"
 * Date: 4/5/2020
 * File: user_model.class.php
 * Description: This is the application model. This file defines a class named UserModel with four public methods.
 */

class UserModel
{
    private $db; // database object
    private $dbConnection; // database connection object

    // constructor that initializes the two data members
    public function __construct()
    {
        $this->db = Database::getInstance();
        $this->dbConnection = $this->db->getConnection();
    }

    // function add_user that gets the user's data to add into the database
    public function add_user()
    {
        // to retreive user data
        if (filter_has_var(INPUT_POST, 'username') && filter_has_var(INPUT_POST, 'password')
            && filter_has_var(INPUT_POST, 'email') && filter_has_var(INPUT_POST, 'firstName')
            && filter_has_var(INPUT_POST, 'lastName')) {
            $username = trim(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING));
            $password = trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
            $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
            $firstName = trim(filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING));
            $lastName = trim(filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING));
        }

        //hashed password
        $hashedPass = password_hash($password, PASSWORD_DEFAULT);

        //this adds the user's details to the database
        $sql = "INSERT INTO users VALUES (NULL, '$username', '$hashedPass', '$email', '$firstName', '$lastName')";

        //this executes the query
        $query = $this->dbConnection->query($sql);

        if (!$query) {
            return false;
        }

        return true;
    }

//function verify_user to verify a user's username and password when logging in
        public
        function verify_user()
        {
            if (filter_has_var(INPUT_POST, 'username') && filter_has_var(INPUT_POST, 'password')) {
                $username = trim(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING));
                $password = trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
            }

            //gets the user's username and password from the database
            $sql = "SELECT username, password FROM users WHERE username = '$username'";
            $query = $this->dbConnection->query($sql);

            if ($query->num_rows == 1) {
                $row = $query->fetch_assoc();
                $username_db = $row['username'];
                $password_db = $row['password'];
            } else {
                return false;
            }

            $verify_password = password_verify($password, $password_db);

            if ($username == $username_db && $verify_password) {
                setcookie("username", $username_db);
                return true;
            } else {
                return false;
            }
        }



        public function logout()
        {
            if (isset($_COOKIE['username'])) {
                setcookie("username", time() - 1234);
                return true;
            }
        }

        public
        function reset_password()
        {
            if (isset($_COOKIE['username']) && !empty($_COOKIE['username'])) {
                $username = $_COOKIE['username'];
            }

            $password = trim(filter_input(INPUT_POST, 'password'), FILTER_SANITIZE_STRING);

            $hashedPass = password_hash($password, PASSWORD_DEFAULT);

            $sql = "UPDATE users SET password = '$hashedPass' WHERE username = '$username'";
            //this executes the query
            $query = $this->dbConnection->query($sql);

            if (!$query) {
                return false;
            } else {
                return true;
            }

        }
    }

