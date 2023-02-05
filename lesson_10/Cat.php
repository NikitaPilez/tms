<?php

namespace lesson_10;

// Механизм сокрытия и защиты методов и данных от внешнего вмешательства или неправильного использования
// Свойство объекта/класса регулировать доступ к определенным своим компонентам извне самого объекта/класса

class Cat
{

    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

}

$cat = new Cat("Murzik");
print_r($cat->getName());