<?php

use Interfaces\CSVWriter;

$content = [
    [
        'name' => 'Alex',
        'position' => 'Developer',
        'age' => 26
    ],
    [
        'name' => 'Mike',
        'position' => 'QA',
        'age' => 23
    ],
    [
        'name' => 'Dmitry',
        'position' => 'Front end',
        'age' => 32
    ],
];
$writer = new CSVWriter();
$fileName = "data";
$generatedContent = $writer->generateContent($content);
$writer->write($fileName, $generatedContent);
