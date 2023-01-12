<?php

// Определить какой день недели был в введеную дату

$days = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];

$inputDate = $argv[1];

$numberDay = date('w', strtotime($inputDate));

print_r($days[$numberDay]);
