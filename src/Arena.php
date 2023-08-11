<?php

namespace FoxWorn3365\HypixelSays;

class Arena {
    protected array $players = [];
    protected object $points;
    protected int $status = 0;
    protected int $to = 10;
    protected bool $started = false;
    protected object $position; // {"from":"x":"y", "y":"x", "to":ecc...}
    protected array $tasks = [];
    protected object $utils;

    public function __construct(object $position) {
        // Init a new and fresh arena
        $this->position = $position;
    }

    public function isStarted() : bool {
        return $this->started;
    }

    protected function 
}