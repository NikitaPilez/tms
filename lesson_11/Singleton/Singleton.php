<?php

class Singleton
{
    // делаем массив чтобы мы могли хранить там экзамепляры подклассов.
    private static $instance = null;

    // делаем его не публичным, но protected для подклассов.
    protected function __construct()
    {

    }

    // клонирование запрещаем
    protected function __clone()
    {

    }

    // десереализацию запрещаем
    public function __wakeup()
    {

    }

    // используем для получения экземпляра одиночки
    public static function getInstance(): ?Singleton
    {
        $subclass = static::class;

        if (!self::$instance) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }
}
$instance = Singleton::getInstance();
$instance1 = Singleton::getInstance();
//print_r($instance === $instance1);

//$obj = new DateTimeZone('+3');
//$obj1 = new DateTimeZone('+3');
//print_r($obj === $obj1);
