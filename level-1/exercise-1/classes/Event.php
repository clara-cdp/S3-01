<?php

class Event
{
    public string $name;
    public string $date;

    public function __construct(string $name, string $date)
    {
        $this->name = $name;
        $this->date = $date;
    }

    public static function sortEventsData(array $eventsData): array
    {
        $events = [];
        foreach ($eventsData as $data) {
            $events[$data['event']] = new Event($data['event'], $data['date']);
        }
        return $events;
    }
}
