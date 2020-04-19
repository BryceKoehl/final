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

    // constructor that initializes the two objects
    public function __construct()
    {
        $this->db = Database::getInstance();
        $this->dbConnection = $this->db->getConnection();
    }

    /* function add_user retrieve user details from the registration form and then add them into the users table in
    the usersystem database. The method returns true if the insertion is successful or false if it fails. Passwords
    need to be hashed before they are stored into the database. To hash a password, call password_hash function. */
    public function add_user()
    {
        // retrieves user data
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

        //execute the query
        $query = $this->dbConnection->query($sql);

        if (!$query) {
            return false;
        }
        return true;
    }

    /*function verify_user to retrieve a user’s username and password from the login form and then verify them again
    a database record. If both username and password are valid, create a temporary cookie to store the username and
    return true; If either username or password is invalid, return false. To verify a hashed password, call
    password_verify function. */
    public function verify_user()
    {
        //retrieves the user data
        if (filter_has_var(INPUT_POST, 'username') && filter_has_var(INPUT_POST, 'password')) {
            $username = trim(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING));
            $password = trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
        }

        //gets the user's username and password from the database
        $sql = "SELECT username, password FROM users WHERE username = '$username'";
        $query = $this->dbConnection->query($sql);

        //verifies data with database record
        if ($query->num_rows == 1) {
            $row = $query->fetch_assoc();
            $username_db = $row['username'];
            $password_db = $row['password'];
        } else {
            return false;
        }

        //verifies the hashed password
        $verify_password = password_verify($password, $password_db);

        //when username and password are valid, creates a temporary cookie to store the username
        if ($username == $username_db && $verify_password) {
            setcookie("username", $username_db);
            return true;
        } else {
            return false;
        }
    }

    /*logout() function logout a user by destroying the temporary cookie created when the user signs in. The method
     should return true. */
    public function logout()
    {
        //destroys the temporary cookie created on logout
        if (isset($_COOKIE['username'])) {
            setcookie("username", time() - 1234);
            return true;
        }
    }

    /*reset_password() function retrieve a user’s username and password from the password reset form and then update
     the user’s password in the database. Make sure the password is hashed before it gets updated. Return true if the
     password is successfully updated or false otherwise*/
    public function reset_password()
    {
        //retrieves user data
        if (isset($_COOKIE['username']) && !empty($_COOKIE['username'])) {
            $username = $_COOKIE['username'];
        }

        //retrieves user password
        $password = trim(filter_input(INPUT_POST, 'password'), FILTER_SANITIZE_STRING);

        //makes sure the password is hashed
        $hashedPass = password_hash($password, PASSWORD_DEFAULT);

        //updates the user password in the database
        $sql = "UPDATE users SET password = '$hashedPass' WHERE username = '$username'";

        //executes the query
        $query = $this->dbConnection->query($sql);

        //updates true/false if password change is success/fail
        if (!$query) {
            return false;
        } else {
            return true;
        }

    }
}

