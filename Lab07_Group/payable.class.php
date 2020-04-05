<?php
/**
 * Author: "Ashley Nguyen, Maimouna Diallo, Christopher Schilling"
 * Date: 3/3/2020
 * File: payable.class.php
 * Description: Payable class file which contains the interface to be implemented by Employee and Invoice class
 */

interface Payable
{
    //abstract functions to be implemented by employee & invoice classes
    public function getPaymentAmount();
    public function toString();
}