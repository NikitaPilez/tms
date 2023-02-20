<?php

$connection = new PDO("mysql:host=localhost;dbname=courses", "nik", "Qwerty123!");
$result = $connection->query("SELECT * from products");
//$data = $result->fetchAll();

while($row = $result->fetch()) {
    $name = $row["name"];
}
