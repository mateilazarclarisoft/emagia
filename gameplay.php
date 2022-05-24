<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

spl_autoload_register(function ($className) {
    $file = "public/" . str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
    if (file_exists($file)) {
        require $file;
        return true;
    }
    return false;
});

class Game
{
    public static function Play()
    {
        echo "Start Game \n";
        $ordeus = new Hero("Ordeus");
        $wildBeast = new WildBeast("Lion");

        $attacker = self::GetAttacker($ordeus, $wildBeast);
        $defender = ($attacker instanceof Hero) ? $wildBeast : $ordeus;

        while ($attacker->isAlive() && $defender->isAlive()) {
            $attacker->Attack($defender);
            $nextDefender = $attacker;
            $attacker = $defender;
            $defender = $nextDefender;

            unset($nextDefender);
        }

        echo "{$attacker->GetName()} has won the fight\n";
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
