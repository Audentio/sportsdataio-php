<?php

namespace Sportsdata\API\NHL\Model;

class PlayByPlay
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
     * @var Play[]
     */
    protected $plays;
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
     * @return Play[]
     */
    public function getPlays() : array
    {
        return $this->plays;
    }
    /**
     * 
     *
     * @param Play[] $plays
     *
     * @return self
     */
    public function setPlays(array $plays) : self
    {
        $this->plays = $plays;
        return $this;
    }
}