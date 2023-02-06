<?php

use lesson_10\Inheritance\Employee;
use lesson_10\Inheritance\Person;
use lesson_10\Inheritance\TransportEmployee;

require_once "Person.php";
require_once "Employee.php";
require_once "TransportEmployee.php";

//$person = new Person("Nikita", 25);
//$person->displayInfo();

//$employee = new Employee("Alex", 20, "Microsoft");
//$employee->displayInfo();
//print_r($employee instanceof Person);
// final

$busEmployee = new TransportEmployee("Nik", 19, "Minsktrans", 'Bus');
$busEmployee->displayInfo();