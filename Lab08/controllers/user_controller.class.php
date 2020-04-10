<?php
/**
 * Author: "Maimouna Diallo, Bryce Koehl, Ashley Nguyen, Christopher Schilling"
 * Date: 4/5/2020
 * File: user_controller.class.php
 * Description: This file defines a class named UserController.  Need to define a method for each of the eight actions
 * described in the previous Application Logic and Organization section. Name each of these methods the same as the action
 * that the method handles.
 */

class UserController
{
    //create an object of user model class
    private $user_model;

    //constructor to create an instance of UserModel
    public function __construct()
    {
        $this->user_model = new UserModel();
    }

    //index function to display the registration form
    public function index()
    {
        $view = new Index();
        $view->display();
    }

    //register function that registers a user account
    public function register()
    {
        $newUser= $this->user_model->add_user();
        $view = new Register();
        $view->display($newUser); //display result
    }

    //login function that handles a user's login activity
    public function login()
    {
        $view = new Login();
        $view->display();
    }

    //verify function to verify user's login
    public function verify()
    {
        $result = $this->user_model->verify_user();
        $view = new Verify();
        $view->display($result); //display the result
    }

    //logout function to confirm logout
    public function logout()
    {
        $this->user_model->logout();
        $view = new Logout();
        $view->display();
    }

    //reset function to reset a user's password
    public function reset()
    {
        $view = new Reset();
        $view->display();
    }

    //do_reset function to confirm the user's reset password
    public function do_reset()
    {
        $reset = $this->user_model->reset_password();
        $view = new ResetConfirm();
        $view->display($reset); //displays the result
    }

    //error function to display any error messages
    public function error($message)
    {
        $error = new UserError();
        $error->display($message); //displays a message
    }
}
