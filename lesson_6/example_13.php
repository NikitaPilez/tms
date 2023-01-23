<?php

$text = 'Hello!!!!! My name is Nikita??)))))';
$text = preg_replace('/(\?|!|\(|\)){2,}/', '\1', $text);
//$text = preg_replace(['/!{2,}/', '/\?{2,}/', '/\({2,}/', '/\){2,}/'], ['!', '?', '(', ')'], $text);
print_r($text);

