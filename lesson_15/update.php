<?php

require_once ("Student.php");
require_once ("StudentHandler.php");

$studentHandler = new StudentHandler();
$studentHandler->update($_REQUEST["id"], $_REQUEST["name"], $_REQUEST["description"], $_REQUEST["email"], $_REQUEST["phone"], $_REQUEST["country"]);

header("Location: index.php");
