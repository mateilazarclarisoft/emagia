<?php

namespace Emagia;

interface Entity{
    
    function Attack(Entity $targetEntity);

    function Defend($damage);

    function GetDefence();

    function IsAlive();   

}