<?php
/**
 * Author: "Ashley Nguyen"
 * Date: 4/3/2020
 * File: toy_controller.class.php
 * Description:
 */

class ToyController //display all toys and display error message! Must have two methods to handle these requests
{
    private $toy_model;
    public function __construct()
    {
        $this->toy_model = new ToyModel(); //new toymodel object
    }

    //list all toys
    public function all(){
        // get all toys and then display all toys
        $toys = $this ->toy_model->getToys(); //retrieves toys and stores in toys object

        //handle errors
        if(!$toys){
            $this->error("No toy was found.");
        }

        //display
        $view = new ToyView();
        $view->display($toys);
    }

    public function error($message){
        $view = new ToyError();
        $view->display($message);
    }
}