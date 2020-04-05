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

//Test and retrieve the action from a querystring variable named actions
if (!($action = filter_input(INPUT_GET,"action", FILTER_SANITIZE_STRING))){
    $action = "index";
}

//depending on the action value, a different method will need to be called
switch ($action) {
    case "index": $user_controller->index();
        break;
    case "register": $user_controller->register();
        break;
    case "login": $user_controller->login();
        break;
    case "verify": $user_controller->verify();
        break;
    case "logout": $user_controller->logout();
        break;
    case "reset": $user_controller->reset();
        break;
    case "execute_reset": $user_controller->execute_reset();
        break;
    default : $user_controller->error("Invalid action was requested");
        break;
};
