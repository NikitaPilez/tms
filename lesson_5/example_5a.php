<?php

//for ($i = 1; $i < 10; $i++) {
//    for($j = 1; $j < 10; $j++) {
//        print_r('[' . $i . '][' . $j . '] ');
//    }
//    print_r("\n");
//}

for ($i = 1; $i < 10; $i++) {
    for($j = 1; $j < 10; $j++) {
        $offset = strlen((string)($i * $j)) == 2 ? '  | ' : '   | ';
        print_r($i . ' * ' . $j . ' = ' . $i * $j . $offset);
    }
    print_r("\n");
    print_r("_____________________________________________________________________________________________________________________________");
    print_r("\n");
}
