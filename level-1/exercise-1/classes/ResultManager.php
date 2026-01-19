<?php

require('Result.php');

class ResultManager
{

    public static function createResultsData($athletes, $events, array $resultsData): array
    {
        $finalResults = [];

        foreach ($resultsData as $data) {

            $athlete = $athletes[$data['athlete']] ?? null;
            $event = $events[$data['event']] ?? null;

            if ($athlete && $event) {
                $finalResults[] = new Result($athlete, $event, $data['medal']);
            }
        }
        return $finalResults;
    }
}
