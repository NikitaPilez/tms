<?php

// найти повторяющиеся символы
$string = 'ff';
if (preg_match("/(.)\\1\\1/", $string)) echo "yes"; else echo "no";
