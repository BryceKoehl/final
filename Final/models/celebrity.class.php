<?php

/*
 * Author: Louie Zhu
 * Date: Mar 6, 2016
 * Name: movie.class.php
 * Description: the Movie class models a real-world movie.
 */

class Celebrity {

    //private data members
    private $celeb_id, $first_name, $last_name, $gender, $age, $web_presence, $most_active, $post_frequency;

    //the constructor
    public function __construct($first_name, $last_name, $gender, $age, $web_presence, $most_active, $post_frequency) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->gender = $gender;
        $this->age = $age;
        $this->web_presence = $web_presence;
        $this->most_active = $most_active;
        $this->post_frequency = $post_frequency;

    }

    /**
     * @return mixed
     */
    public function getCelebId()
    {
        return $this->celeb_id;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getWebPresence()
    {
        return $this->web_presence;
    }

    /**
     * @return mixed
     */
    public function getMostActive()
    {
        return $this->most_active;
    }

    /**
     * @return mixed
     */
    public function getPostFrequency()
    {
        return $this->post_frequency;
    }

	//getters


    public function setCelebId($celeb_id)
    {
        $this->celeb_id = $celeb_id;
    }
}
