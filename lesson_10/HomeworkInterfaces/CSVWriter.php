<?php

class CSVWriter implements Writer
{

    public function generateContent(array $content): string
    {
        $keys = array_keys($content[0]);
        $string = implode(",", array_map('ucfirst', $keys)) . PHP_EOL;
        foreach ($content as $item) {
            $string .= $item['name'] . "," . $item['position'] . "," . $item['description'] . PHP_EOL;
        }
        return $string;
    }

    public function writeToFile(string $fileName, string $content)
    {
        file_put_contents($fileName . ".csv", $content);
    }
}
