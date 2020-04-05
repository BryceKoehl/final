<?php
/**
 * Author: "Ashley Nguyen, Maimouna Diallo, Christopher Schilling"
 * Date: 3/3/2020
 * File: executive_manager.class.php
 * Description: ExecutiveManager class which inherits from/is the child class of Manager class.
 */

class ExecutiveManager extends Manager
{
    //creating variable for ExecutiveManager class
    private $bonus;

    //constructor
    public function __construct($person, $emp_id, $year_of_services, $salary, $department, $bonus)
    {
        //referencing parent constructor to prevent code repetition
        parent::__construct($person, $emp_id, $year_of_services, $salary, $department);
        $this->bonus = $bonus;
    }

    /**
     * get executive manager's bonus
     */
    public function getBonus()
    {
        return $this->bonus;
    }

    //function getPaymentAmount to calculate the ExecutiveManager's total payment
    public function getPaymentAmount(){
        //referencing parent class getPaymentAmount() to add the $bonus value into the fixed weekly salary
        return parent::getPaymentAmount() + $this->getBonus();

    }

    //returns the string representation of the object
    public function toString(){
        //formatting decimal places of variable bonus using number_format
        echo parent::toString(). "<br>" . "Bonus: $", number_format($this->getBonus(), 2), "<br>";

    }
}