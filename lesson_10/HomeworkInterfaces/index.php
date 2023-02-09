<?php

require_once "Writer.php";
require_once "JSONWriter.php";
require_once "CSVWriter.php";
require_once "XMLWrite.php";

$content = [
    [
        "name" => "Alex",
        "position" => "Developer",
        "description" => "Iamdeveloper"
    ],
    [
        "name" => "Nik",
        "position" => "Manager",
        "description" => "Ilovemyjob"
    ]
];

//$writer = new JSONWriter();
//print_r($writer->readFromFile("test"));
//$formattedContent = $writer->generateContent($content);
//$writer->writeToFile("test", $formattedContent);

//$writer = new CSVWriter();
//$writer->readFromFile("test");
//$formattedContent = $writer->generateContent($content);
//$writer->writeToFile("test", $formattedContent);

//$writer = new XMLWrite();
//$formattedContent = $writer->generateContent($content);
//$writer->writeToFile("text", $formattedContent);
