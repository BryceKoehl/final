<?php

/*
 * Author: Christopher Schilling, Ashley Nguyen, Bryce Koehl
 * Date: 5/1/2020
 * Name: celebrity.class.php
 * Description: the celebrity class models a real-world celebrity.
 */

class Celebrity
{

    //private data members
    private $celeb_id, $first_name, $last_name, $gender, $age, $web_presence, $most_active, $post_frequency, $images;

    //the constructor
    public function __construct($first_name, $last_name, $gender, $age, $web_presence, $most_active, $post_frequency, $images)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->gender = $gender;
        $this->age = $age;
        $this->web_presence = $web_presence;
        $this->most_active = $most_active;
        $this->post_frequency = $post_frequency;
        $this->images = $images;

    }

    //getters
    public function getCelebId()
    {
        return $this->celeb_id;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getWebPresence()
    {
        return $this->web_presence;
    }

    public function getMostActive()
    {
        return $this->most_active;
    }

    public function getPostFrequency()
    {
        return $this->post_frequency;
    }

    public function getImages()
    {
        return $this->images;
    }

    public function setCelebId($celeb_id)
    {
        $this->celeb_id = $celeb_id;
    }
}
