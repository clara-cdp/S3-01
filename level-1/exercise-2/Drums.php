<?php

require_once('InstrumentPlayer.php');

class Drums implements InstrumentPlayer
{
    public  function Play(): String
    {
        return "🥁 Beating the drums";
    }
}
