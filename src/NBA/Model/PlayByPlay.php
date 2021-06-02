<?php

namespace Sportsdata\API\NBA\Model;

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
     * @var Quarter[]
     */
    protected $quarters;
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
     * @return Quarter[]
     */
    public function getQuarters() : array
    {
        return $this->quarters;
    }
    /**
     * 
     *
     * @param Quarter[] $quarters
     *
     * @return self
     */
    public function setQuarters(array $quarters) : self
    {
        $this->quarters = $quarters;
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