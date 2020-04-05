<?php
/**
 * Author: "Ashley Nguyen, Maimouna Diallo, Christpher Schilling"
 * Date: 3/3/2020
 * File: employee.class.php
 * Description: Employee is an abstract class and demonstrates OOP through composition.
 */

//composition relationship
abstract class Employee implements Payable
{
    //creating variables for Employee class
    private $emp_id, $year_of_services, $person;
    //static variable $emp_count to count the number of employee instances occur
    private static $emp_count;

    //constructor
    public function __construct($person, $emp_id, $year_of_services)
    {
        $this->person = $person;
        $this->emp_id = $emp_id;
        $this->year_of_services = $year_of_services;

        //increments $emp_count variable each time an employee object is created
        self::$emp_count++;
    }

    /**
     * gets person variable
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * gets the employee id
     */
    public function getEmpId()
    {
        return $this->emp_id;
    }

    /**
     * gets the years of service
     */
    public function getYears()
    {
        return $this->year_of_services;
    }

    /**
     * function that counts number of employee objects created
     */
    public static function getEmpCount()
    {
        return self::$emp_count;
    }

    //returns the string representation of the object
    public function toString()
    {
        echo $this->getPerson()->toString() .
            "<br>". "Employee ID: " .
            $this->getEmpId() . "<br>".
            "Years of Services : " . $this->getYears() .
            "<br>";
    }
}