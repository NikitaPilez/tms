<?php

require_once "PizzaInterface.php";
require_once "PizzaBuilder.php";
require_once "Pizza.php";

$builder = new PizzaBuilder();
$pizza = $builder
    ->setSize(Pizza::SMALL_SIZE)
    ->setDough('хот-дог')
    ->setSauce('сырный')
    ->setMushrooms(false)
    ->setTomatoes(true)
    ->setOlives(false)
    ->setPineapples(true)
    ->setCheese(true, 2)
    ->getPizza();

print_r($pizza);
