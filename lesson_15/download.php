<?php

require_once ("Student.php");
require_once ("StudentHandler.php");

$studentHandler = new StudentHandler();
$studentHandler->download();
