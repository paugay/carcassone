<?php

namespace Carcassone\Domain;

class Game
{
    /**
     * Players
     *
     * Array of Player objects representing the players of the game.
     *
     * @var Array
     */
    protected $players;

    /**
     * Construct
     *
     * @param Array players
     */
    public function __construct(Array $players)
    {
        $this->players = $players;
    }
}
