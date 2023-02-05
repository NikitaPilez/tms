<?php

use lesson_10\Employee;
use lesson_10\Person;

require_once "Person.php";
require_once "Employee.php";

//$employee = new Employee("Alex");
$employee = new Employee("Alex", "Microsoft");
$employee->displayInfo();
//print_r($employee instanceof Person);
// final