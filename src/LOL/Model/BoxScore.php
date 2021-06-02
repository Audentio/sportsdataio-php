<?php

namespace Sportsdata\API\LOL\Model;

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
     * @var Match[]
     */
    protected $matches;
    /**
     * 
     *
     * @var PlayerGame[]
     */
    protected $playerGames;
    /**
     * 
     *
     * @var TeamGame[]
     */
    protected $teamGames;
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
     * @return Match[]
     */
    public function getMatches() : array
    {
        return $this->matches;
    }
    /**
     * 
     *
     * @param Match[] $matches
     *
     * @return self
     */
    public function setMatches(array $matches) : self
    {
        $this->matches = $matches;
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
}