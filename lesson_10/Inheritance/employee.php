<?php

use lesson_10\Inheritance\Employee;
use lesson_10\Inheritance\TransportEmployee;

require_once "Person.php";
require_once "Employee.php";
require_once "TransportEmployee.php";

//$employee = new Employee("Alex");
$employee = new Employee("Alex", "Microsoft");
$employee->displayInfo();
//print_r($employee instanceof Person);
// final

$busEmployee = new TransportEmployee("Nik", "Minsktrans", 'Bus');
$busEmployee->displayInfo();