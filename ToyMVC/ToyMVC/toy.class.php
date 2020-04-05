<?php
/**
 * Author: "Ashley Nguyen"
 * Date: 4/3/2020
 * File: toy.class.php
 * Description:
 */

class Toy
{
    //private attributes
    private $id, $name, $description, $price;

    /**
     * Toy constructor.
     * @param $id
     * @param $name
     * @param $description
     * @param $price
     */
    public function __construct($id, $name, $description, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

}