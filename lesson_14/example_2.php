<?php

$connection = new PDO("mysql:host=localhost;dbname=courses", "root", "Qwerty123!");
$result = $connection->query("SELECT * from products");

while($row = $result->fetch()){
    $name = $row["name"];
    print_r($name);
}

$connection = null;