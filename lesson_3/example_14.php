<?php

// Найти следующий рабочий день

$nowDay = date('w');

if ($nowDay < 5) {
    print_r(date('d.m.Y', strtotime("+1 day")));
} else if ($nowDay == 5) {
    print_r(date('d.m.Y', strtotime("+3 day")));
} else if ($nowDay == 6) {
    print_r(date('d.m.Y', strtotime("+2 day")));
}
