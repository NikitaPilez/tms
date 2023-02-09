<?php

class Student extends People
{

    public function greeting()
    {
        print_r("Всем привет, меня зовут " . $this->getName() . " ,после того как я окончу университет я буду иметь специальность " . $this->getPosition());
    }
}
