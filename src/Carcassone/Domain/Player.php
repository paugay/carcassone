<?php

namespace Carcassone\Domain;

class Player
{
    protected $id;
    protected $color;

    public function __construct($id, $color)
    {
        $this->id = $id;
        $this->color = $color;
    }
}
