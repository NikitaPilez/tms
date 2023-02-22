<?php

require_once ("Student.php");
require_once ("StudentHandler.php");

if ($id = $_REQUEST["id"]) {
    $studentHandler = new StudentHandler();
    $studentHandler->create($_REQUEST["name"], $_REQUEST["description"], $_REQUEST["email"], $_REQUEST["phone"], $_REQUEST["country"]);
}

header("Location: index.php");
