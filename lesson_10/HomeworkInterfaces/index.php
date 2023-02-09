<?php

require_once "Writer.php";
require_once "JSONWriter.php";
require_once "CSVWriter.php";

$content = [
    [
        "name" => "Alex",
        "position" => "Developer",
        "description" => "I am developer"
    ],
    [
        "name" => "Nik",
        "position" => "Manager",
        "description" => "I love my job"
    ]
];

//$writer = new JSONWriter();
//$formattedContent = $writer->generateContent($content);
//$writer->writeToFile("test", $formattedContent);

$writer = new CSVWriter();
$formattedContent = $writer->generateContent($content);
$writer->writeToFile("test", $formattedContent);
