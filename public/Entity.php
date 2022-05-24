<?php

interface Entity{
    
    function GetName();

    function Attack(Entity $targetEntity);

    function Defend();

    function GetDefence();

    function GetSpeed();

    function GetStrength();

    function GetLuck();

    function SetDamage($damage);

    function isAlive();   

}