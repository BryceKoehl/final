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
public function __construct() {
  $this->user_model = new UserModel();
}

//index function to display the registration form
public function index(){
  $view = new Index();
  $view->display();
}

//register function that registers a user account
public function register(){

$bonk = $this->user_model->add_user();
//display result
$view = new Register();
$view->display($bonk)
}

//login function that handles a user's login activity
public function login(){
  $view = new Index();
  $view->display();
}

//verify function
public function verify(){
$verify = $this->user_model->verify_user();
}

public function logout(){
$logout = $this->user_model->logout();
$view = new logout();
$view->display();
}

public function reset(){
if (!isset($_COOKIE['user'])) {
  $this->error("Please log in to reset your password");
}else {
  $user = $_COOKIE['user'];
  $view = display($user);
}
}

public function do_reset(){
$result = $this->user_model->reset_password();
//
$view = new ResetConfirm();
$view->display($result);
}

public function error($message) {
  $error = new UserError();
  error->display($message);
}
}
