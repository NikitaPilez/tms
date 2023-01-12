<?php

// Определить смогу ли я пойти на достопримечательность в ОАЭ если я улетел туда в отпуске с 10 января по 20 января, дата достопримечательности 15 января

$fromDate = "10.01.2023";
$tillDate = "20.01.2023";
$day = "15.01.2023";

$unixFromDate = strtotime($fromDate);
$unixTillDate = strtotime($tillDate);
$unixDay = strtotime($day);

if ($unixDay > $unixFromDate && $unixDay < $unixTillDate) {
    print_r("Получается сходить");
} else {
    print_r("Не получается сходить");
}
