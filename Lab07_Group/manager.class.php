<?php
/**
 * Author: "Ashley Nguyen, Maimouna Diallo, Christopher Schilling"
 * Date: 3/3/2020
 * File: manager.class.php
 * Description: Manager class that inherits from/is the child class of Employee class.
 */

class Manager extends Employee
{
    //creating variables for Manager class
    private $salary, $department;

    //constructor -- referencing Person class attributes using variable $person
    public function __construct($person, $emp_id, $year_of_services, $salary, $department)
    {
        //referencing the parent class constructors using keyword parent -- prevents code repetition
        parent::__construct($person, $emp_id, $year_of_services);
        $this->department = $department;
        $this->salary = $salary;
    }

    /**
     * get manager's department
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * get manager's salary
     */
    public function getSalary()
    {
        return $this->salary;
    }

    //function getPaymentAmount which returns the value entered for function getSalary()
    public function getPaymentAmount(){
        return $this->getSalary();
    }

    //returns the string representation
    public function toString(){
        //referencing parent class's toString() function to prevent code repetition in child class toString() method
        echo parent:: toString() .
            "Department: ", $this->getDepartment(), "<br>" .
            "Salary: $", number_format($this->getSalary(), 2), "<br>" .
            "Earnings: $",  number_format($this->getPaymentAmount(), 2) ;
            //formatted number decimal places using number_format()
    }
}