<?php

namespace Emagia;

class WildBeast extends AbstractEntity
{
    public function __construct($name)
    {
        $health = rand (60,90);
        $strength = rand(60,90);
        $defence = rand(40,60);
        $speed = rand(40,60);
        $luck = rand(25,40);

        parent::__construct( 
            $name,
            $health,
            $strength,
            $defence,
            $speed,
            $luck
        );
    }   
}
