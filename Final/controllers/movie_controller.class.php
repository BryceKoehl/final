<?php

/*
 * Author: Ashley, Bryce, Chris, Maimouna
 * Date: April 19, 2020
 * File: user_controller.class.php
 * Description: the user controller
 *
 */

class UsersController {

    private $user_model;

    //default constructor
    public function __construct() {
        //create an instance of the UserModel class
        $this->user_model = UserModel::getUserModel();
    }

    //index action that displays all users
    public function index() {
        //retrieve all users and store them in an array
        $users = $this->user_model->list_user();

        if (!$users) {
            //display an error
            $message = "There was a problem displaying users.";
            $this->error($message);
            return;
        }

        // display all users
        $view = new UserIndex();
        $view->display($users);
    }

    //show details of a user
    public function detail($id) {
        //retrieve the specific user
        $user = $this->user_model->view_user($id);

        if (!$user) {
            //display an error
            $message = "There was a problem displaying the user id='" . $id . "'.";
            $this->error($message);
            return;
        }

        //display user details
        $view = new UserDetail();
        $view->display($user);
    }


    //handle an error
    public function error($message) {
        //create an object of the Error class
        $error = new UsersError();

        //display the error page
        $error->display($message);
    }

    //handle calling inaccessible methods
    public function __call($name, $arguments) {
        //$message = "Route does not exist.";
        // Note: value of $name is case sensitive.
        $message = "Calling method '$name' caused errors. Route does not exist.";

        $this->error($message);
        return;
    }

}
