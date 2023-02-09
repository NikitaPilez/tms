<?php

class JSONWriter implements Writer
{

    public function generateContent(array $content): string
    {
        return json_encode($content);
    }

    public function writeToFile(string $fileName, string $content)
    {
        file_put_contents($fileName . ".json", $content);
    }
}
