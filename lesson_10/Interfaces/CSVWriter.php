<?php

namespace Interfaces;

class CSVWriter implements Writer
{

    public function generateContent(array $content): array
    {
        return [];
    }

    public function write(string $fileName, array $content): void
    {
        $writeContent = [];

        // TODO

        file_put_contents($fileName . ".csv", $content);
    }
}
