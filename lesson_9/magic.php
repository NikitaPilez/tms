<?php

use lesson_9\Magic;

require_once("Magic.php");

$magic = new Magic();
//$magic = null;
//$magic->run();
//$magic->get;
//$magic->set = 'Set';
//isset($magic->test);
//unset($magic->unset);
//var_dump($magic);
//echo $magic;
$string = "O:14:\"lesson_9\Magic\":1:{s:4:\"prop\";s:9:\"This prop\";}";
print_r(unserialize($string));
