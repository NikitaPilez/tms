<?php

require_once "Student.php";
require_once "StudentHandler.php";

$studentHandler = new StudentHandler();
$result = $studentHandler->search("name", "%Ni%", "LIKE");
print_r($result);
//$student = new Student1();
//$result = $student->search();

