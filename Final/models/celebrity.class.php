<?php

/*
 * Author: Louie Zhu
 * Date: Mar 6, 2016
 * Name: movie.class.php
 * Description: the Movie class models a real-world movie.
 */

class Celebrity {

    //private data members
    private $celeb_id, $first_name, $last_name, $gender, $age, $web_presence, $most_active, $post_frequency; //$icon;

    //the constructor
    public function __construct($first_name, $last_name, $gender, $age, $web_presence, $most_active, $post_frequency) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->gender = $gender;
        $this->age = $age;
        $this->web_presence = $web_presence;
        $this->most_active = $most_active;
        $this->post_frequency = $post_frequency;
        //$this->icon = $icon;

    }

	//getters
    public function getCelebId() {
        return $this->celeb_id;
    }

    public function getFirstName() {
        return $this->first_name;
    }

    public function getLastName() {
        return $this->last_name;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getAge() {
        return $this->age;
    }

    public function getWebPresence() {
        return $this->web_presence;
    }

    public function getMostActive() {
        return $this->most_active;
    }

    public function getPostFrequency() {
        return $this->post_frequency;
    }

    public function setCelebId($celeb_id){
        $this -> celeb_id = $celeb_id;
    }
}
