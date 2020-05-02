<?php
/*
 * Author: Maimouna, Bryce, Ashley, Chris
 * Date: April 19, 2020
 * Name: personality.class.php
 * Description: This is the personality class for our personality_dimension table
 */

class Personality
{

    //private properties of a personality object
    private $dim_id, $dimension, $qualities, $description, $keywords, $image;

    //the constructor that initializes all properties
    public function __construct($dimension, $qualities, $description, $keywords, $image)
    {
        $this->dimension = $dimension;
        $this->qualities = $qualities;
        $this->description = $description;
        $this->keywords = $keywords;
        $this->image = $image;
    }

    //get the id of a personality
    public function getDimId()
    {
        return $this->dim_id;
    }

    //get the dimension of a personality
    public function getDimension()
    {
        return $this->dimension;
    }

    //get the qualities of a personality
    public function getQualities()
    {
        return $this->qualities;
    }

    //get the description of a personality
    public function getDescription()
    {
        return $this->description;
    }

    //get the keywords of a personality
    public function getKeywords()
    {
        return $this->keywords;
    }

    public function getImage()
    {
        return $this->image;
    }

    //set personality id
    public function setId($dim_id)
    {
        $this->dim_id = $dim_id;
    }

}
