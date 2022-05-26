<?php

namespace Emagia;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

require_once "autoloader.php";

class Game
{
    public static function Play()
    {
        echo "Start Game \n";
        $ordeus = new Hero("Ordeus");
        $wildBeast = new WildBeast("Lion");

        $attacker = self::GetAttacker($ordeus, $wildBeast);
        $defender = ($attacker instanceof Hero) ? $wildBeast : $ordeus;

        $roundNo = 1;
        while ($attacker->IsAlive() && $defender->IsAlive()) {
            echo "\n";
            echo "Round {$roundNo} \n";
            echo "{$attacker->GetName()} is attacking {$defender->GetName()} \n";
            
            $attacker->Attack($defender);

            echo "{$attacker->GetName()} Health: {$attacker->GetHealth()}\n";
            echo "{$defender->GetName()} Health: {$defender->GetHealth()}\n";

            $nextDefender = $attacker;
            $attacker = $defender;
            $defender = $nextDefender;

            unset($nextDefender);
            $roundNo++;
        }

        echo "\n";
        echo "{$defender->GetName()} has won the fight\n";
    }

    private static function GetAttacker($ordeus, $wildBeast)
    {
        if (($ordeus->GetSpeed() == $wildBeast->GetSpeed() &&
                $ordeus->GetLuck() >= $wildBeast->GetLuck()) ||
            $ordeus->GetSpeed() > $wildBeast->GetSpeed()
        ) {
            return $ordeus;
        } else {
            return $wildBeast;
        }
    }
}

Game::Play();
