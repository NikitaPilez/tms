<?php

class BankBuilder implements BankBuilderInterface
{

    private Bank $bank;

    public function __construct()
    {
        $this->reset();
    }

    public function reset()
    {
        $this->bank = new Bank();
    }

    public function setName(string $name)
    {
        $this->bank->name = $name;
        return $this;
    }

    public function setDescription(string $description)
    {
        $this->bank->description = $description;
        return $this;
    }

    public function setPrivate(bool $isPrivate)
    {
        $this->bank->isPrivate = $isPrivate;
        return $this;
    }

    public function setAddresses(array $addresses)
    {
        $this->bank->addresses = $addresses;
        return $this;
    }

    public function setLogo(string $imageUrl)
    {
        $this->bank->imageUrl = $imageUrl;
        return $this;
    }

    public function siteUrl(string $url)
    {
        $this->bank->url = $url;
        return $this;
    }

    public function setPhones(array $phones)
    {
        $this->bank->phones = $phones;
        return $this;
    }

    public function getBank(): Bank
    {
        $result = $this->bank;
        $this->reset();

        return $result;
    }
}
