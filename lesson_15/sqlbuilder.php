<?php

require_once "SQLQueryBuilder.php";
require_once "MySQLQueryBuilder.php";

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
