<?php

class Logger
{
    private $file;

    private static $instance = null;

    // конструктор вызывается один раз, файловый ресурс открываем один раз
    private function __construct()
    {
        $this->file = fopen('log.txt', 'a+');
    }

    public static function getInstance(): ?Logger
    {
        if (!self::$instance) {
            self::$instance = new Logger();
        }

        return self::$instance;
    }

    public function writeLog(string $message): void
    {
        $date = date('Y-m-d');
        fwrite($this->file, "$date: $message\n");
    }

    public static function log(string $message): void
    {
        $logger = static::getInstance();
        $logger->writeLog($message);
    }

}

Logger::log("test");
