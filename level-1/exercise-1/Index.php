<?php

require('classes/OlympicGames.php');
require_once('classes/Athlete.php');
require_once('classes/Event.php');
require_once('classes/Result.php');
require_once('classes/ResultManager.php');


$olympics = new OlympicGames();

$athletesData = [
    ['name' => 'Usain Bolt', 'country' => 'Jamaica'],
    ['name' => 'Michael Phelps', 'country' => 'USA']
];

$eventsData = [
    ['event' => '100m Sprint', 'date' => '2024-08-01'],
    ['event' => 'Swimming', 'date' => '2024-08-02']
];

$resultsData = [
    ['athlete' => 'Usain Bolt', 'event' => '100m Sprint', 'medal' => 'Gold'],
    ['athlete' => 'Michael Phelps', 'event' => 'Swimming', 'medal' => 'Gold']
];

$athletes = [];
$events = [];
$athletes = Athlete::sortAthletesData($athletesData);
$events = Event::sortEventsData($eventsData);

$results = ResultManager::createResultsData($athletes, $events, $resultsData);
$olympics->displayResults($results);
