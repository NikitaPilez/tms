<?php

require_once "Student.php";

$student = new Student1();
$result = $student->search();
print_r($result);

