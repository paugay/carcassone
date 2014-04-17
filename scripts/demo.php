<?php

error_reporting(E_ALL);
ini_set("display_errors", "1");

require_once dirname(__DIR__) . "/vendor/autoload.php";

use Carcassone\Service\GameStarter;

$gameStarter = new GameStarter(3);
