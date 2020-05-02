<?php

/*
 * Author: Christopher Schilling, Ashley, Bryce, Maimouna
 * Date: April 19, 2020
 * File: celebrity_controller.class.php
 * Description: the celebrity controller
 *
 */

class CelebrityController
{

    private $celebrity_model;

    //default constructor
    public function __construct()
    {
        //create an instance of the CelebrityModel class
        $this->celebrity_model = CelebrityModel::getCelebrityModel();
    }

    //index action that displays all celebrities
    public function index()
    {
        //retrieve all celebrities and store them in an array
        $celebs = $this->celebrity_model->list_celebrity();

        if (!$celebs) {
            //display an error
            $message = "There was a problem displaying celebrity.";
            $this->error($message);
            return;
        }

        // display all celebrities
        $view = new CelebrityIndex();
        $view->display($celebs);
    }

    //show details of a celebrity
    public function detail($celeb_id)
    {
        //retrieve the specific celebrity
        $celeb = $this->celebrity_model->view_celebrity($celeb_id);
        $celeb_dim = $this->celebrity_model->celebrity_personality($celeb_id);

        if (!$celeb || !$celeb_dim) {
            //display an error
            $message = "There was a problem displaying the celebrity id='" . $celeb_id . "'.";
            $this->error($message);
            return;
        }

        //display celebrity details
        $view = new CelebrityDetail();
        $view->display($celeb, $celeb_dim);
    }

    //display a celebrity in a form for editing
    public function edit($celeb_id)
    {
        //retrieve the specific celebrity
        $celeb = $this->celebrity_model->view_celebrity($celeb_id);

        if (!$celeb) {
            //display an error
            $message = "There was a problem displaying the celebrity id='" . $celeb_id . "'.";
            $this->error($message);
            return;
        }

        $view = new CelebrityEdit();
        $view->display($celeb);
    }

    //update a celebrity in the database
    public function update($celeb_id)
    {
        //update the celebrity
        $update = $this->celebrity_model->update_celebrity($celeb_id);
        if (!$update) {
            //handle errors
            $message = "There was a problem updating the celeb id='" . $celeb_id . "'.";
            $this->error($message);
            return;
        }

        //display the updateed celebrity details
        $confirm = "The celebrity was successfully updated.";
        $celeb = $this->celebrity_model->view_celebrity($celeb_id);

        $view = new CelebrityDetail();
        $view->display($celeb, $confirm);
    }

    //search celebrity
    public function search()
    {
        //retrieve query terms from search form
        $query_terms = trim($_GET['query-terms']);

        //if search term is empty, list all celebrities
        if ($query_terms == "") {
            $this->index();
        }

        //search the database for matching celebrities
        $celebs = $this->celebrity_model->search_celebs($query_terms);

        if ($celebs === false) {
            //handle error
            $message = "An error has occurred.";
            $this->error($message);
            return;
        }
        //display matched celebrities
        $search = new CelebritySearch();
        $search->display($query_terms, $celebs);
    }

    //autosuggestion
    public function suggest($terms)
    {
        //retrieve query terms
        $query_terms = urldecode(trim($terms));
        $celebs = $this->celebrity_model->search_celebs($query_terms);

        //retrieve all celebrity titles and store them in an array
        $names = array();

        if ($celebs) {
            foreach ($celebs as $celeb) {
                $names[] = $celeb->getFirstName() . " " . $celeb->getLastName();
            }
        }

        echo json_encode($names);
        exit();
    }

    public function goToAdd()
    {
        $view = new CelebrityAdd();
        $view->display();
    }

    public function add()
    {
        $celeb = $this->celebrity_model->add_celebs();
        $view = new CelebrityAdd();
        $view->display();
    }

    public function delete($celeb_id)
    {
        $delete = $this->celebrity_model->delete_celeb($celeb_id);
        $view = new Delete();
        $view->display($delete);
    }

    //handle an error
    public function error($message)
    {
        //create an object of the Error class
        $error = new CelebError();

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
