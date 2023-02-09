<?php

interface Writer
{
    public function generateContent(array $content);

    public function writeToFile(string $fileName, string $content);
}
