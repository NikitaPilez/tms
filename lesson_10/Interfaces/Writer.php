<?php

namespace Interfaces;

interface Writer
{
    public function generateContent(array $content): array;

    public function write(string $fileName, array $content): void;
}
