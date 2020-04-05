<?php
/**
 * Author: "Ashley Nguyen, Maimouna Diallo, Christopher Schilling"
 * Date: 3/3/2020
 * File: sales_person.class.php
 * Description: SalesPerson class which inherits from/is the child class of Employee class.
 */

class SalesPerson extends Employee
{
    //creating variables for SalesPerson class
    private $sales, $commission_rate;

    //constructor
    public function __construct($person, $emp_id, $year_of_services, $sales, $commission_rate)
    {
        //referencing parent class constructor to prevent code reuse
        parent::__construct($person, $emp_id, $year_of_services);
        $this->sales = $sales;
        $this->commission_rate = $commission_rate;
    }

    /**
     * returns the sales person's sales
     */
    public function getSales()
    {
        return $this->sales;
    }

    /**
     * returns the sales person's commision rate
     */
    public function getCommissionRate()
    {
        return $this->commission_rate;
    }

    //function getPaymentAmount() to calculate the salesperson's total payment
    public function getPaymentAmount()
    {
        //multiply sales by the commission rate percentage
        return $this->getSales() * $this->getCommissionRate();
    }

    //returns the string representation of the object
    public function toString()
    {
        //reference the parent class toString() method to prevent code reuse in child class toString() method
        echo parent::toString(), "Gross sales: ", number_format($this->getSales(), 2), "<br>" .
            "Commission: ", number_format($this->getCommissionRate() * 100, 2), "%<br>" .
            "Earnings: $", number_format($this->getPaymentAmount(), 2);
            //using number_format to format the numbers to two decimal places
    }
}