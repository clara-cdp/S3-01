<?php

require_once('InstrumentPlayer.php');

class Guitar implements InstrumentPlayer
{
    public function play(): string
    {
        return  "🎸 Strumming the guitar";
    }
}
