<?php

$html = '<h1> Hello world! </h1><h2> Hello world! </h2>';
$regex = '/<h[1-6][^>]*?>(.*?)<\/h[1-6]>/si';
preg_match_all($regex, $html, $arr);
print_r($arr);
