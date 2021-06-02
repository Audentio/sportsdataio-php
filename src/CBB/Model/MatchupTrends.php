<?php

namespace Sportsdata\API\CBB\Model;

class MatchupTrends
{
    /**
     * 
     *
     * @var Game
     */
    protected $upcomingGame;
    /**
     * 
     *
     * @var TeamTrends[]
     */
    protected $teamTrends;
    /**
     * 
     *
     * @var TeamGameTrends[]
     */
    protected $teamMatchupTrends;
    /**
     * 
     *
     * @var TeamGameTrends[]
     */
    protected $opponentMatchupTrends;
    /**
     * 
     *
     * @var Game[]
     */
    protected $previousGames;
    /**
     * 
     *
     * @return Game
     */
    public function getUpcomingGame() : Game
    {
        return $this->upcomingGame;
    }
    /**
     * 
     *
     * @param Game $upcomingGame
     *
     * @return self
     */
    public function setUpcomingGame(Game $upcomingGame) : self
    {
        $this->upcomingGame = $upcomingGame;
        return $this;
    }
    /**
     * 
     *
     * @return TeamTrends[]
     */
    public function getTeamTrends() : array
    {
        return $this->teamTrends;
    }
    /**
     * 
     *
     * @param TeamTrends[] $teamTrends
     *
     * @return self
     */
    public function setTeamTrends(array $teamTrends) : self
    {
        $this->teamTrends = $teamTrends;
        return $this;
    }
    /**
     * 
     *
     * @return TeamGameTrends[]
     */
    public function getTeamMatchupTrends() : array
    {
        return $this->teamMatchupTrends;
    }
    /**
     * 
     *
     * @param TeamGameTrends[] $teamMatchupTrends
     *
     * @return self
     */
    public function setTeamMatchupTrends(array $teamMatchupTrends) : self
    {
        $this->teamMatchupTrends = $teamMatchupTrends;
        return $this;
    }
    /**
     * 
     *
     * @return TeamGameTrends[]
     */
    public function getOpponentMatchupTrends() : array
    {
        return $this->opponentMatchupTrends;
    }
    /**
     * 
     *
     * @param TeamGameTrends[] $opponentMatchupTrends
     *
     * @return self
     */
    public function setOpponentMatchupTrends(array $opponentMatchupTrends) : self
    {
        $this->opponentMatchupTrends = $opponentMatchupTrends;
        return $this;
    }
    /**
     * 
     *
     * @return Game[]
     */
    public function getPreviousGames() : array
    {
        return $this->previousGames;
    }
    /**
     * 
     *
     * @param Game[] $previousGames
     *
     * @return self
     */
    public function setPreviousGames(array $previousGames) : self
    {
        $this->previousGames = $previousGames;
        return $this;
    }
}