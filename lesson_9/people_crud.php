<?php

use lesson_9\People;
use lesson_9\PeopleHandler;

require_once ("People.php");
require_once ("PeopleHandler.php");

$peopleHandler = new PeopleHandler('peoples.csv');
$people = new People(101,"Nikita", "+3752987654756", "nikita@gmail.com", "Ratomskaya", "Belarus", "Minsk");
$peopleHandler->add($people);
//$peopleHandler->update(); // TODO
//$people = $peopleHandler->get(2);
//print_r($people->getId());
//$peopleHandler->delete(101);
//print_r($peopleHandler->getList());
