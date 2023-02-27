<?php

namespace TMS\Lessons;

use PDO;

require_once "../vendor/autoload.php";


$connection = new PDO("mysql:host=localhost;dbname=courses", "root", "Qwerty123!");

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
