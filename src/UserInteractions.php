<?php

namespace LaravelSchema\UserInteractions;

class UserInteractions
{
    public function holamundo(String $sName)
    {
        return 'Hi ' . $sName . '! How are you doing today?';
    }
}