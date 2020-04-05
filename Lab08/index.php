<?php
/*
 * Author: Maimouna Diallo, Bryce Koehl, Ashley Nguyen, Christopher Schilling
 * Date: 4/5/2020
 * Name: index.php
 * Description: The homepage of the application. It also contains script to dispatch requests. You need to add code
 *  to retrieve the action (a query string variable) value and then invoke a proper method defined in the UserController
 *  class with a UserController object. This file has been provided and needs to be completed. For security, data
 *  retrieved from a form must be properly sanitized.
 */

//include code in vendor/autoload.php file
require_once ("vendor/autoload.php");

//create an object of UserController
$user_controller = new UserController();

//add your code below this line to complete this file