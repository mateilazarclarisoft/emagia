<?php

abstract class AbstractEntity implements Entity{
    private $name;
    private $health;
    private $strength;
    private $defence;
    private $speed;
    private $luck;

    public function __construct(
        $name,
        $health,
        $strength,
        $defence,
        $speed,
        $luck
    ){
        $this->name = $name;
        $this->health = $health;
        $this->strength = $strength;
        $this->defence = $defence;
        $this->strength = $strength;
        $this->speed = $speed;
        $this->luck = $luck;   
    }

    public function Attack(Entity $entity){
        $entity->SetDamage( $this->GetStrength() - $entity->GetDefence() );
    }

    public abstract function Defend();

    public function GetName(){
        return $this->name;
    }

    public function GetDefence(){
        return $this->defence;
    }

    public function GetStrength(){
        return $this->strength;
    }    

    public function GetSpeed(){
        return $this->speed;
    }

    public function GetLuck(){
        return $this->luck;
    }

    public function IsAlive(){
        return $this->health>0;
    }

    public function SetDamage($damage){
        $this->health -= $damage;
        if ($this->health < 0){
            $this->health = 0;
        }
    }
}