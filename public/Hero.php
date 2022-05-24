<?php

class Hero extends AbstractEntity
{    

    private function RapidStrike(){}

    private function MagicShield(){}

    public function __construct($name)
    {
        $health = rand (70,100);
        $strength = rand(70,80);
        $defence = rand(45,55);
        $speed = rand(40,50);
        $luck = rand(10,30);

        parent::__construct( 
            $name,
            $health,
            $strength,
            $defence,
            $speed,
            $luck
        );
    }

    public function Defend(){

    }
}