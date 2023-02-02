<?php

namespace lesson_9;

class People
{

    private int $id;

    private string $name;
    private string $phone;
    private string $address;
    private string $country;
    private string $state;
    private string $email;

    public function __construct(int $id, string $name, string $phone, string $email, string $address, string $country, string $state)
    {
        $this->id = $id;
        $this->name = $name;
        $this->phone = $phone;
        $this->address = $address;
        $this->country = $country;
        $this->state = $state;
        $this->email = $email;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): void
    {
        $this->state = $state;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
}


