<?php

namespace Sportsdata\API\CSGO\Model;

class BoxScore
{
    /**
     * 
     *
     * @var Game
     */
    protected $game;
    /**
     * 
     *
     * @var Map[]
     */
    protected $maps;
    /**
     * 
     *
     * @return Game
     */
    public function getGame() : Game
    {
        return $this->game;
    }
    /**
     * 
     *
     * @param Game $game
     *
     * @return self
     */
    public function setGame(Game $game) : self
    {
        $this->game = $game;
        return $this;
    }
    /**
     * 
     *
     * @return Map[]
     */
    public function getMaps() : array
    {
        return $this->maps;
    }
    /**
     * 
     *
     * @param Map[] $maps
     *
     * @return self
     */
    public function setMaps(array $maps) : self
    {
        $this->maps = $maps;
        return $this;
    }
}