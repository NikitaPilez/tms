<?php

$text = "My   string    without    spaces";
$text = preg_replace("/\s{2,}/", ' ', $text);
print_r($text);
