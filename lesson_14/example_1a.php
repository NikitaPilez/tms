<?php

$connection = new PDO("mysql:host=localhost;dbname=courses", "root", "Qwerty123!");

$sql = "INSERT INTO products (name, manufacturer, count, price, currency) VALUES (:name, :manufacturer, :count, :price, :currency)";

$statement = $connection->prepare($sql);
//
$statement->bindValue(":name", "New product");
$statement->bindValue(":manufacturer", "iphone");
$statement->bindValue(":count", 5);
$statement->bindValue(":price", 100);
$statement->bindValue(":currency", 'USD');

$result = $statement->execute();
print_r($result);

//$statement->execute([
//    ":name" => "new product",
//    ":manufacturer" => "iphone",
//    ":count" => 5,
//    ":price" => 100,
//    ":currency" => "USD",
//]);
