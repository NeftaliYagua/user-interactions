<?php

namespace LaravelSchema\Interaction;

class Interaction
{
    public function holamundo(String $sName)
    {
        return 'Hi ' . $sName . '! How are you doing today?';
    }
}