<?php

interface BankBuilderInterface
{
    public function setName(string $name);

    public function setDescription(string $description);

    public function setPrivate(bool $isPrivate);

    public function setAddresses(array $addresses);

    public function setLogo(string $imageUrl);

    public function siteUrl(string $url);

    public function setPhones(array $phones);
}
