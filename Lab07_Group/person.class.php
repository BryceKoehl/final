<?php
/**
 * Author: "Ashley Nguyen, Maimouna Diallo, Christopher Schilling"
 * Date: 3/3/2020
 * File: person.class.php
 * Description: Person class file which contains information common among all employees.
 */

class Person
{
    //creating variables for Person class
    private $first_name, $last_name, $gender, $ssn;

    //constructor
    public function __construct($first_name, $last_name, $gender, $ssn){
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->gender = $gender;
        $this->ssn = $ssn;
    }

    /**
     * gets the person's first name
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * gets the person's last name
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * gets the person's gender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * gets the person's social security number
     */
    public function getSSN()
    {
        return $this->ssn;
    }

    //returns the string representation of the object
    public function toString(){
        echo "First name: ". $this->getFirstName(). "<br>".
            "Last name: ". $this->getLastName(). "<br>" . "Gender: ".
            $this->getGender(). "<br>" . "SSN: ". $this->getSSN();
    }

}

