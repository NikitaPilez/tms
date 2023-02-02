<?php

namespace lesson_9;

class Magic
{

    public $prop;

    public function __construct()
    {
//        print_r('Construct');
    }

    public function __destruct()
    {
//        print_r('Destruct');
    }

    // Call unavailable methods
    public function __call(string $name, array $arguments)
    {
//        print_r('Call');
    }

    // read from private or non exist prop
    public function __get(string $name)
    {
//        print_r('Get');
    }

    // write in private or non exist prop
    public function __set(string $name, $value): void
    {
//        print_r('Set');
    }

    // call isset for private or non exist variable
    public function __isset(string $name): bool
    {
        print_r($name);
        return isset($this->prop);
    }

    // call unset for private or non exist variable
    public function __unset(string $name): void
    {
        print_r($name);
    }

    /**
     * @return mixed
     */
    public function getProp()
    {
        return $this->prop;
    }

    /**
     * @param mixed $prop
     */
    public function setProp($prop): void
    {
        $this->prop = $prop;
    }

    public function __toString(): string
    {
        return 'Magic' . $this->prop;
    }

    public function __debugInfo(): ?array
    {
        return [
            'prop' => 2
        ];
    }
}
