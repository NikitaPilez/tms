<?php

class Config
{
    private array $hashmap = [];

    private static $instance = null;

    // конструктор вызывается один раз, файловый ресурс открываем один раз
    private function __construct()
    {

    }

    public static function getInstance(): ?Config
    {
        if (!self::$instance) {
            self::$instance = new Config();
        }

        return self::$instance;
    }

    public function getValue(string $key): string
    {
        return $this->hashmap[$key];
    }

    public function setValue(string $key, string $value): void
    {
        $this->hashmap[$key] = $value;
    }
}
