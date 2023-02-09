<?php

class Teacher extends People
{

    public function greeting()
    {
        print_r("Добрый день, меня зовут " . $this->getName() . " ,я по специальности " . $this->getPosition() . " и буду преподовать у вас это в школе");
    }
}
