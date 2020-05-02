<?php

/*
 * Author: Ashley, Bryce, Chris, Maimouna
 * Date: April 19, 2020
 * File: personality_controller.class.php
 * Description: the personality controller
 *
 */

class PersonalityController
{

    private $personality_model;

    //default constructor
    public function __construct()
    {
        //create an instance of the personalityModel class
        $this->personality_model = PersonalityModel::getPersonalityModel();
    }

    //index action that displays all personalities
    public function index()
    {
        //retrieve all personalities and store them in an array
        $personalities = $this->personality_model->list_personality();

        if (!$personalities) {
            //display an error
            $message = "There was a problem displaying personality dimensions.";
            $this->error($message);
            return;
        }

        // display all personalities
        $view = new PersonalityIndex();
        $view->display($personalities);
    }

    //show details of a personality
    public function detail($dim_id)
    {
        //retrieve the specific personality
        $personality = $this->personality_model->view_personality($dim_id);

        if (!$personality) {
            //display an error
            $message = "There was a problem displaying the personality dimension id='" . $dim_id . "'.";
            $this->error($message);
            return;
        }

        //display personality details
        $view = new PersonalityDetail();
        $view->display($personality);
    }


    //handle an error
    public function error($message)
    {
        //create an object of the Error class
        $error = new PersonalityError();

        //display the error page
        $error->display($message);
    }

    //handle calling inaccessible methods
    public function __call($name, $arguments)
    {
        $message = "Calling method '$name' caused errors. Route does not exist.";

        $this->error($message);
        return;
    }

}
