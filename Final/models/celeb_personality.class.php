<?php
/**
 * Author: "Ashley Nguyen"
 * Date: 4/23/2020
 * File: celeb_personality.class.php
 * Description:
 */

class CelebPersonality
{
    private $celeb_id, $dim_id, $dimension, $frequency;

    public function __construct($dimension, $frequency)
    {
        $this->dimension = $dimension;
        $this->frequency = $frequency;
    }

    /**
     * @param mixed $celeb_id
     */
    public function setCelebId($celeb_id)
    {
        $this->celeb_id = $celeb_id;
    }

    /**
     * @param mixed $dim_id
     */
    public function setDimId($dim_id)
    {
        $this->dim_id = $dim_id;
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
    public function getDimId()
    {
        return $this->dim_id;
    }

    /**
     * @return mixed
     */
    public function getDimension()
    {
        return $this->dimension;
    }

    /**
     * @return mixed
     */
    public function getFrequency()
    {
        return $this->frequency;
    }
}