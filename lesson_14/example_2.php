<?php

$connection = new PDO("mysql:host=localhost;dbname=courses", "root", "Qwerty123!");
$result = $connection->query("SELECT * from products");
$data = $result->fetchAll();

foreach ($data as $item) {
    $name = $item["name"];
}


