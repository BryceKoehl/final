<?php
/**
 * Author: "Ashley Nguyen, Maimouna Diallo, Christopher Schilling"
 * Date: 3/3/2020
 * File: test_payable.php
 * Description: This file contains the client program that tests all classes in the Payable class hierarchy.
 */
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
    <meta name="author" content="Admin"/>

    <title>Payroll System Programmed with OOP</title>
</head>

<body>
<!-- webpage header -->
<h2>Payroll System Programmed with OOP</h2>

<?php
//links to autoloading.php file which loads in class files in Payable hierarchy
require_once "autoloading.php";

//generating instances of classes Invoice, Manager, ExecutiveManager, Secretary, and SalesPerson
$i = new Invoice("Samsung Galaxy S11", 1, 525.29);
$i2 = new Invoice("Stainless Steel Dog Bowl", 2, 9.99);
//demonstrating polymorphism by using Person object to call attributes in the Person class
$m = new Manager(new Person("Carter", "Smith", "Male", "111-11-1111"), 10299932, 5, 3800, "Informatics");
$e = new ExecutiveManager(new Person("Karen", "Price", "Female", "330-31-3535"), 10234421, 3, 3200, "Communications", 500);
$s = new Secretary(new Person("Sue", "Jones", "Female", "210-09-7898"), 19002319, 4, 40, 50);
$sp = new SalesPerson(new Person("Bob", "Lewis", "Male", "567-80-1257"), 29092387, 3, 17090, 0.1623);
$sp2 = new SalesPerson(new Person("Katherine", "Lewis", "Female", "567-80-1257"), 29092387, 5, 15090, 0.1598);

//an array of payable employees
$employees = [$i, $i2, $m, $e, $s, $sp, $sp2];

//funtion printEmployees to display the string representation of a person
function printEmployees(Person $person)
{
    //if else conditions to return class name of the object
    if (get_class($person) == "Invoice") {
        echo "<h3>Invoice</h3>";
    } else if (get_class($person) == "Manager") {
        echo "<h3>Manager</h3>";
    } else if (get_class($person) == "ExecutiveManager") {
        echo "<h3>Executive Manager</h3>";
    } else if (get_class($person) == "Secretary") {
        echo "<h3>Secretary</h3>";
    } else if (get_class($person) == "SalesPerson") {
        echo "<h3>Sales Person</h3>";
    }
    echo $person->toString();
}

//for each employee, get the employee's class name
foreach ($employees as $e) {
    echo "<h3>" . get_class($e) . "</h3>";
    echo $e->toString();
}
//outputs the invoice count and employee count objects at the end of webpage
echo "<p>Number of invoices: ", Invoice::getInvoiceCount(), "</p>";
echo "<p>Number of employees: ", Employee::getEmpCount(), "</p>";
?>
</body>
</html>