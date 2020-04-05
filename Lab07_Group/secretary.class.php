<?php
/**
 * Author: "Ashley Nguyen, Maimouna Diallo, Christopher Schilling"
 * Date: 3/3/2020
 * File: secretary.class.php
 * Description: Secretary class which inherits from/is the child class of Employee.
 */

class Secretary extends Employee
{
    //creating variables for secretary class
    private $wage, $hours;

    //constructor
    public function __construct($person, $emp_id, $year_of_services, $wage, $hours)
    {
        //referencing parent class constructor to prevent code reuse
        parent::__construct($person, $emp_id, $year_of_services);
        $this->wage = $wage;
        $this->hours = $hours;

    }

    /**
     * gets secretary wage
     */
    public function getWage()
    {
        return $this->wage;
    }

    /**
     * gets secretary hours
     */
    public function getHours()
    {
        return $this->hours;
    }

    //function getPaymentAmount to calculate secretary total payment amount
    public function getPaymentAmount(){
        //if else condition which adds in overtime pay (150%) if hours exceeds 40
        if($this->getHours() > 40){
            return (40 * $this->getWage()) + (($this->getHours()-40) * (1.5 * $this->getWage()));
        } else {
            return ($this->getHours() * $this->getWage());
        }
    }

    //returns the string representation of the object
    public function toString(){
        //referencing parent class toString() method to prevent code reuse in child class toString() method
        echo parent::toString() . "Wage: $", number_format($this->getWage(), 2), "<br>" .
            "Hours: ", $this->getHours(), "<br>" .
            "Earnings: $", number_format($this->getPaymentAmount(), 2);
            //using number_format() to format numbers to two decimal places
    }
}