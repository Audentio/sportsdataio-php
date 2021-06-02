<?php

namespace Sportsdata\API\NBA\Model;

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
     * @var Quarter[]
     */
    protected $quarters;
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
}