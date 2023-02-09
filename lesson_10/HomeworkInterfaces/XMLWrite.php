<?php

class XMLWrite implements Writer
{

    public function generateContent(array $content)
    {
        $xml = new SimpleXMLElement('<root/>');
        array_walk_recursive($content, array ($xml, 'addChild'));
        return $xml->asXML();
    }

    public function writeToFile(string $fileName, string $content)
    {
        file_put_contents($fileName . ".xml", $content);
    }

    public function readFromFile(string $fileName)
    {
        // TODO: Implement readFromFile() method.
    }
}
