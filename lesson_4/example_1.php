<?php

//$firstArray = ['First element', 1, 5.6, ''];
//$secondArray = array('First element' , 1);
//$thirdExample = [
//    1 => 'a',
//    '1' => 'b',
//    1.4 => 'c',
//    true => 'd'
//];

// пример с вложенным массивом и обращением к нему

// добавление в массив через [], ['test'], unset()

$thirdExample['test_key'] = 'example';
$thirdExample[] = 'example_1';
unset($thirdExample[1]);

