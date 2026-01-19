<?php

require('Athlete.php');
require('Event.php');

class Result
{
    public Athlete $athlete;
    public Event $event;
    public string $medal;

    public function __construct(Athlete $athlete, Event $event, string $medal)
    {
        $this->athlete = $athlete;
        $this->event = $event;
        $this->medal = $medal;
    }
}
