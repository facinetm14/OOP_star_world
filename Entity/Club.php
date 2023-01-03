<?php namespace Entity;

class Club
{
    private string $id;
    private string $name;
    private string $country;
    private string $division;

    public function __construct(string $name, string $country, string $division)
    {
        $this->name = $name;
        $this->country = $country;
        $this->division = $division;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getCountry() : string
    {
        return $this->country;
    }

    public function getDivision() : string
    {
        return $this->division;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setDivision($division)
    {
        $this->division = $division;
    }

    public function setCountry(string $country)
    {
        $this->country = $country;
    }

}