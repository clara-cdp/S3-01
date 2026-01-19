<?php

class Athlete
{
    public string $name;
    public string $country;


    public function __construct(string $name, string $country)
    {
        $this->name = $name;
        $this->country = $country;
    }

    public static function sortAthletesData(array $athletesData): array
    {
        $athletes = [];
        foreach ($athletesData as $data) {
            $athletes[$data['name']] = new self($data['name'], $data['country']);
        }
        return $athletes;
    }
}
