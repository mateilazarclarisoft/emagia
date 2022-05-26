<?php

namespace Emagia;

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

    protected function LuckyDamage($damage){
        echo "{$this->GetName()} uses magic shield \n";
        return 0;
    }

    public function Attack(Entity $entity)
    {
        parent::Attack($entity);

        $luckFactor = random_int(1,100);
        if ($luckFactor < 10)
        {
            echo "{$this->GetName()} uses rapid strike \n";
            parent::Attack($entity);
        }
    }
}