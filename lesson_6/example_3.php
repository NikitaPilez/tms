<?php

$html = '<h1> Hello </h1><h3> world </h3>';
$result = preg_match('/<h[1-6]>.*?<\/h[1-6]>/', $html, $matches);
print_r($matches);
