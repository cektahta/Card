<?php

use Cards\Card;
use Cards\DamageCard;
use Cards\HealthCard;
use Cards\ShieldCard;
use Game\Game;
use Player\Player;

require_once 'autoload.php';


 $dmg = new DamageCard(20, 'ST');
 $hlt = new HealthCard(10, "H");
 $sld = new ShieldCard(10, "S");
 $game  = new Game("Ivan","Georgi");
 
 $player = new Player("Petar");
 $game->setPlayerOne($player);
$deck []=$game->setDeck($dmg, $hlt, $sld);
$deckPlayer = $game->setFirstDeck($deck);
print_r($deckPlayer);