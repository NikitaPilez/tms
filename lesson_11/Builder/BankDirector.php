<?php

class BankDirector
{

    public BankBuilderInterface $builder;

    public function setBuilder(BankBuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    public function createBasicBank()
    {

    }
}
