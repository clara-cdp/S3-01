<?php

require_once('InstrumentPlayer.php');

class Piano implements InstrumentPlayer
{
    public function Play(): string
    {
        return "🎹 Playing the piano";
    }
}
