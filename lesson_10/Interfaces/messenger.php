<?php

use Interfaces\Discord;
use Interfaces\Telegram;

require_once("Messenger.php");
require_once("Telegram.php");
require_once("Discord.php");

$messenger = new Telegram();
//$messenger = new Discord();
$messenger->send("Hello world!");
