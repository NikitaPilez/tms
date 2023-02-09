<?php

require_once "Bank.php";
require_once "BankBuilderInterface.php";
require_once "BankBuilder.php";

$builder = new BankBuilder();
$bank = $builder->setName("Alfa bank")
    ->setDescription("We are the best bank")
    ->setPrivate(true)
    ->setLogo("https://alfa-bank/logo.png")
    ->siteUrl("https://alfa-bank.by")
    ->setPhones(["198", "375448765634"])
    ->setAddresses(["Matusevicha 29", "Prityzkogo 108"])
    ->getBank();


