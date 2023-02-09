<?php

require_once "People.php";
require_once "Developer.php";
require_once "Student.php";
require_once "Teacher.php";

$teacher = new Teacher("Nik", "Web Developer");
$teacher->greeting();
