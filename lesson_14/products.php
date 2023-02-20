<?php

require_once "Product.php";
require_once "ProductHandler.php";

$productHandler = new ProductHandler();
$result = $productHandler->update(id: 3, name: "Work");
$result = $productHandler->getAll();
$result = $productHandler->find(3);
$productHandler->delete(5);
