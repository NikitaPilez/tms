<?php

use Interfaces\Yandex;

require_once("Mail.php");
require_once("Yandex.php");

$email = new Yandex();
$email->sendEmail();
$email->listEmails();
