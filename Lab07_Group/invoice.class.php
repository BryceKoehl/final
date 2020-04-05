<?php
/**
 * Author: "Ashley Nguyen, Maimouna Diallo, Christopher Schilling"
 * Date: 3/3/2020
 * File: invoice.class.php
 * Description: Invoice class file which implements the Payable interface.
 */

class Invoice implements Payable
{
    //declaring variables for Invoice class
    private $part_name, $quantity, $price;
    //static variable invoice_count to count the number of invoice instances and output in test_payable php file
    private static $invoice_count;

    //constructor
    public function __construct($part_name, $quantity, $price)
    {
        $this->part_name = $part_name;
        $this->quantity = $quantity;
        $this->price = $price;

        //increments the invoice_count static variable for each invoice instance created
        self::$invoice_count++;
    }

    /**
     * get invoice part name
     */
    public function getPartName()
    {
        return $this->part_name;
    }

    /**
     * get invoice quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * get invoice price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * get invoice count
     */
    public static function getInvoiceCount()
    {
        return self::$invoice_count;
    }

    //function to calculate the payment amount for invoice
    public function getPaymentAmount()
    {
        return $this->quantity * $this->price;
    }

    //function to output the string representation of invoice class attributes
    public function toString()
    {
        //use number_format to format number with two decimal places
        echo "Part Name: ", $this->getPartName(), "<br>" .
            "Quantity: ", $this->getQuantity(), "<br>" .
            "Price: $", number_format($this->getPrice(), 2), "<br>" .
            "Payment: $", $this->getPaymentAmount();
    }
}