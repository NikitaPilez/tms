<?php
// проверить время на формат mm:hh

$time = "10:11";
preg_match('/^([0-1][0-9]|[2][0-3]):([0-5][0-9])$/', $time);

// $pattern = '/^[a-f0-9]{32}$/';