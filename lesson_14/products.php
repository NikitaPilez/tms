<?php

require_once "Product.php";
require_once "ProductHandler.php";

$productHandler = new ProductHandler();
$product = $productHandler->update(id: 3, name: "test1");
print_r($product);
