<?php

namespace TMS\Lessons;

use PDO;
use TMS\Lessons\Test;

require_once "../vendor/autoload.php";

//$test = new Test();
//$test->test();


$connection = new PDO("mysql:host=localhost;dbname=courses", "nik", "Qwerty123!");

$sqlBuilder = new MySQLQueryBuilder();
$query = $sqlBuilder
    ->select("students", ["name", "phone"])
    ->where("name", "nik")
    ->orderBy("name", "DESC")
    ->limit(2, 2)
    ->getSQL();

$result = $connection->query($query);
$data = $result->fetchAll();
print_r($data);
