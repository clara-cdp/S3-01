<?php

require('ResultManager.php');
class OlympicGames
{
    public function displayResults(array $results): void
    {
        echo "Olympic Games Results:\n";
        foreach ($results as $result) {
            echo "Event: {$result->event->name} on {$result->event->date}\n";
            echo "- {$result->athlete->name} from {$result->athlete->country} won {$result->medal}\n\n";
        }
    }
}
