<?php

require_once ("Student.php");
require_once ("StudentHandler.php");

if ($id = $_REQUEST["id"]) {
    $studentHandler = new StudentHandler();
    $studentHandler->delete($id);
}

header("Location: crud.php");
