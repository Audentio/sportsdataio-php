<?php

namespace Sportsdata\API\MLB\Model;

class TeamTrends
{
    /**
     * 
     *
     * @var string|null
     */
    protected $team;
    /**
     * 
     *
     * @var int|null
     */
    protected $teamID;
    /**
     * 
     *
     * @var Game
     */
    protected $upcomingGame;
    /**
     * 
     *
     * @var TeamGameTrends[]
     */
    protected $teamGameTrends;
    /**
     * 
     *
     * @return string|null
     */
    public function getTeam() : ?string
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param string|null $team
     *
     * @return self
     */
    public function setTeam(?string $team) : self
    {
        $this->team = $team;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTeamID() : ?int
    {
        return $this->teamID;
    }
    /**
     * 
     *
     * @param int|null $teamID
     *
     * @return self
     */
    public function setTeamID(?int $teamID) : self
    {
        $this->teamID = $teamID;
        return $this;
    }
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
     * @return TeamGameTrends[]
     */
    public function getTeamGameTrends() : array
    {
        return $this->teamGameTrends;
    }
    /**
     * 
     *
     * @param TeamGameTrends[] $teamGameTrends
     *
     * @return self
     */
    public function setTeamGameTrends(array $teamGameTrends) : self
    {
        $this->teamGameTrends = $teamGameTrends;
        return $this;
    }
}