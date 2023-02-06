<?php

class Mercedes extends Car
{
    use SportCar, PremiumCar;

    public function getInformation()
    {
        return "Model " . $this->getModel() . " color" . $this->getColor() . " power " . $this->power . " tuning " . ($this->isToning() ? "yes" : "no");
    }
}
