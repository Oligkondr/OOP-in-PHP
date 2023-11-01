<?php

namespace Unit11\User;
class Address
{

    private string $country;
    private string $city;
    private string $street;

    public function __construct(string $country, string $city, string $street)
    {
        $this->country = $country;
        $this->city = $city;
        $this->street = $street;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function setCountry($country): void
    {
        $this->country = $country;
    }

    public function setCity($city): void
    {
        $this->city = $city;
    }

    public function setStreet($street): void
    {
        $this->street = $street;
    }

}