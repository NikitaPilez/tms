<?php
require_once "Config.php";

$config = Config::getInstance();
$login = "test@gmail.com";
$password = "12345678";
$config->setValue("login", $login);
$config->setValue("password", $password);

$config1 = Config::getInstance();
if ($login == $config1->getValue("login")) {
    print_r("Work");
}
