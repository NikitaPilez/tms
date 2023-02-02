<?php

namespace lesson_9;

class Weather
{

    private string $date;

    private int $temperature;

    private bool $isRainy;

    public function __construct(string $date, int $temperature, bool $isRainy)
    {
        $this->date = $date;
        $this->temperature = $temperature;
        $this->isRainy = $isRainy;
    }

    public function getInformation(): string
    {
        $dt = strtotime($this->date);
        $diff = time() - $dt;
        $days = ceil($diff / 86400);

        $result = "это было $days дней назад. В тот день было ";

        $result .= $this->isCold() ? "холодно" : "тепло";

        if ($this->isRainy) {
            $result .= " шел дождь.";
        }
        else {
            $result .= " на небе не было ни облачка.";
        }

        return $result;
    }

    public function isCold(): bool
    {
        return $this->temperature < 0;
    }

    public function setIsRainy(bool $isRainy): void
    {
        $this->isRainy = $isRainy;
    }
}

$firstSeptember = new Weather("01-09-2022",  20, true);
$firstSeptember->setIsRainy(false);
print_r($firstSeptember->getInformation());
