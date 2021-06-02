<?php

namespace Sportsdata\API\NHL\Model;

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
     * @var Period[]
     */
    protected $periods;
    /**
     * 
     *
     * @var TeamGame[]
     */
    protected $teamGames;
    /**
     * 
     *
     * @var PlayerGame[]
     */
    protected $playerGames;
    /**
     * 
     *
     * @var Play[]
     */
    protected $shootoutPlays;
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
     * @return Period[]
     */
    public function getPeriods() : array
    {
        return $this->periods;
    }
    /**
     * 
     *
     * @param Period[] $periods
     *
     * @return self
     */
    public function setPeriods(array $periods) : self
    {
        $this->periods = $periods;
        return $this;
    }
    /**
     * 
     *
     * @return TeamGame[]
     */
    public function getTeamGames() : array
    {
        return $this->teamGames;
    }
    /**
     * 
     *
     * @param TeamGame[] $teamGames
     *
     * @return self
     */
    public function setTeamGames(array $teamGames) : self
    {
        $this->teamGames = $teamGames;
        return $this;
    }
    /**
     * 
     *
     * @return PlayerGame[]
     */
    public function getPlayerGames() : array
    {
        return $this->playerGames;
    }
    /**
     * 
     *
     * @param PlayerGame[] $playerGames
     *
     * @return self
     */
    public function setPlayerGames(array $playerGames) : self
    {
        $this->playerGames = $playerGames;
        return $this;
    }
    /**
     * 
     *
     * @return Play[]
     */
    public function getShootoutPlays() : array
    {
        return $this->shootoutPlays;
    }
    /**
     * 
     *
     * @param Play[] $shootoutPlays
     *
     * @return self
     */
    public function setShootoutPlays(array $shootoutPlays) : self
    {
        $this->shootoutPlays = $shootoutPlays;
        return $this;
    }
}