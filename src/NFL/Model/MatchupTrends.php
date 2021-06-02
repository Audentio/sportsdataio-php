<?php

namespace Sportsdata\API\NFL\Model;

class MatchupTrends
{
    /**
     * 
     *
     * @var Score
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
     * @var Score[]
     */
    protected $previousGames;
    /**
     * 
     *
     * @return Score
     */
    public function getUpcomingGame() : Score
    {
        return $this->upcomingGame;
    }
    /**
     * 
     *
     * @param Score $upcomingGame
     *
     * @return self
     */
    public function setUpcomingGame(Score $upcomingGame) : self
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
     * @return Score[]
     */
    public function getPreviousGames() : array
    {
        return $this->previousGames;
    }
    /**
     * 
     *
     * @param Score[] $previousGames
     *
     * @return self
     */
    public function setPreviousGames(array $previousGames) : self
    {
        $this->previousGames = $previousGames;
        return $this;
    }
}