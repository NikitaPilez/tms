<?php

$connection = new PDO("mysql:host=localhost;dbname=courses", "nik", "Qwerty123!");

$sql = "CREATE TABLE `products` (
    `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` varchar(30) NOT NULL,
    `manufacturer` varchar(20) NOT NULL,
    `count` int DEFAULT '0',
    `price` decimal(10,0) NOT NULL,
    `currency` varchar(15) NOT NULL
);
";

$connection->exec($sql);
