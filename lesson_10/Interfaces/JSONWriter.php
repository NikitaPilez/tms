<?php

namespace Interfaces;

class JSONWriter implements Writer
{

    public function generateContent(array $content): array
    {
        return [];
    }

    public function write(string $fileName, array $content): void
    {
        // TODO: Implement generateContent() method.
    }
}
