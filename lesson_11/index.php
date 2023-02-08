<?php

use lesson_11\ChildStatic;
require_once("StaticClass.php");
require_once("ChildStatic.php");
$object = new ChildStatic();
//print_r($object->getStaticVariable());
print_r($object->showDiff());
