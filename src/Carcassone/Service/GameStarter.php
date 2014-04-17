<?php

namespace Carcassone\Service;

use Carcassone\Domain\Game;
use Carcassone\Domain\Player;
use Carcassone\Exception\WrongNumPlayers;

class GameStarter
{
    const MIN_PLAYERS = 2;
    const MAX_PLAYERS = 5;

    protected $availableColors = array(
        "blue",
        "yellow",
        "green",
        "red",
        "black"
    );

    protected $numPlayers;

    public function __construct($numPlayers)
    {
        if ($numPlayers < self::MIN_PLAYERS
            || $numPlayers > self::MAX_PLAYERS) {
                throw new WrongNumPlayersException(
                    "Allowed number of players is between "
                    . self::MIN_PLAYERS . " and " . self::MAX_PLAYERS
                );
            }

        $this->numPlayers = $numPlayers;

        $players = array();

        shuffle($this->availableColors);
        for ($i = 1; $i <= $numPlayers; $i++) {
            $players[] = new Player($i, array_pop($this->availableColors));
        }

        $game = new Game($players);

        echo $this->numPlayers;
    }
}
