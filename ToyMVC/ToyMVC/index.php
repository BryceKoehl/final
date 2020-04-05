<?php

/*
 * Author: Louie Zhu
 * Date: 10/15/2017
 * Name: index.php
 * Description: the homepage
 */
require 'vendor/autoload.php';

$toy_controller = new ToyController();

$action = "all";

if(isset($_GET['action'])){
    $action = $_GET['action'];
}

//display all the toys
if ($action == "all"){
    $toy_controller->all();
} else if($action == "error") {
    //display an error
    $message = "We are sorry, but an error has occured.";
    if (isset($message)) {
        $message = $_GET['message'];
    }
    $toy_controller->error($message);
}else{
        $message = "Invalid action was requested.";
        $toy_controller->error($message);
}