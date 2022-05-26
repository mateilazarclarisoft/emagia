<?php

namespace Emagia;

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
        $entity->Defend( $this->GetStrength() - $entity->GetDefence() );
    }

    public function Defend($damage){
        if ($this->IsLucky()){
            $damage = $this->LuckyDamage($damage);            
        }
        $this->health -= $damage;
        if ($this->health < 0){
            $this->health = 0;
        }
    }

    protected function LuckyDamage($damage){
        echo "{$this->GetName()} lucky defensive \n";
        return (int)$damage/2;
    }

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

    public function GetHealth(){
        return $this->health;
    }

    public function IsAlive(){
        return $this->health>0;
    }

    private function IsLucky()
    {
        $luckFactor = random_int(1,100);
        return $luckFactor < $this->luck ;
    }

    
}