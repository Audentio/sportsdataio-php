<?php

namespace Sportsdata\API\Soccer\Model;

class Standing
{
    /**
     * 
     *
     * @var int
     */
    protected $standingId;
    /**
     * 
     *
     * @var int
     */
    protected $roundId;
    /**
     * 
     *
     * @var int
     */
    protected $teamId;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $shortName;
    /**
     * 
     *
     * @var string
     */
    protected $scope;
    /**
     * 
     *
     * @var int
     */
    protected $order;
    /**
     * 
     *
     * @var int
     */
    protected $games;
    /**
     * 
     *
     * @var int
     */
    protected $wins;
    /**
     * 
     *
     * @var int
     */
    protected $losses;
    /**
     * 
     *
     * @var int
     */
    protected $draws;
    /**
     * 
     *
     * @var int
     */
    protected $goalsScored;
    /**
     * 
     *
     * @var int
     */
    protected $goalsAgainst;
    /**
     * 
     *
     * @var int
     */
    protected $goalsDifferential;
    /**
     * 
     *
     * @var int
     */
    protected $points;
    /**
     * 
     *
     * @var string
     */
    protected $group;
    /**
     * 
     *
     * @var int
     */
    protected $globalTeamID;
    /**
     * 
     *
     * @return int
     */
    public function getStandingId() : int
    {
        return $this->standingId;
    }
    /**
     * 
     *
     * @param int $standingId
     *
     * @return self
     */
    public function setStandingId(int $standingId) : self
    {
        $this->standingId = $standingId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRoundId() : int
    {
        return $this->roundId;
    }
    /**
     * 
     *
     * @param int $roundId
     *
     * @return self
     */
    public function setRoundId(int $roundId) : self
    {
        $this->roundId = $roundId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTeamId() : int
    {
        return $this->teamId;
    }
    /**
     * 
     *
     * @param int $teamId
     *
     * @return self
     */
    public function setTeamId(int $teamId) : self
    {
        $this->teamId = $teamId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getShortName() : string
    {
        return $this->shortName;
    }
    /**
     * 
     *
     * @param string $shortName
     *
     * @return self
     */
    public function setShortName(string $shortName) : self
    {
        $this->shortName = $shortName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getScope() : string
    {
        return $this->scope;
    }
    /**
     * 
     *
     * @param string $scope
     *
     * @return self
     */
    public function setScope(string $scope) : self
    {
        $this->scope = $scope;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOrder() : int
    {
        return $this->order;
    }
    /**
     * 
     *
     * @param int $order
     *
     * @return self
     */
    public function setOrder(int $order) : self
    {
        $this->order = $order;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGames() : int
    {
        return $this->games;
    }
    /**
     * 
     *
     * @param int $games
     *
     * @return self
     */
    public function setGames(int $games) : self
    {
        $this->games = $games;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getWins() : int
    {
        return $this->wins;
    }
    /**
     * 
     *
     * @param int $wins
     *
     * @return self
     */
    public function setWins(int $wins) : self
    {
        $this->wins = $wins;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLosses() : int
    {
        return $this->losses;
    }
    /**
     * 
     *
     * @param int $losses
     *
     * @return self
     */
    public function setLosses(int $losses) : self
    {
        $this->losses = $losses;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDraws() : int
    {
        return $this->draws;
    }
    /**
     * 
     *
     * @param int $draws
     *
     * @return self
     */
    public function setDraws(int $draws) : self
    {
        $this->draws = $draws;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGoalsScored() : int
    {
        return $this->goalsScored;
    }
    /**
     * 
     *
     * @param int $goalsScored
     *
     * @return self
     */
    public function setGoalsScored(int $goalsScored) : self
    {
        $this->goalsScored = $goalsScored;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGoalsAgainst() : int
    {
        return $this->goalsAgainst;
    }
    /**
     * 
     *
     * @param int $goalsAgainst
     *
     * @return self
     */
    public function setGoalsAgainst(int $goalsAgainst) : self
    {
        $this->goalsAgainst = $goalsAgainst;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGoalsDifferential() : int
    {
        return $this->goalsDifferential;
    }
    /**
     * 
     *
     * @param int $goalsDifferential
     *
     * @return self
     */
    public function setGoalsDifferential(int $goalsDifferential) : self
    {
        $this->goalsDifferential = $goalsDifferential;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPoints() : int
    {
        return $this->points;
    }
    /**
     * 
     *
     * @param int $points
     *
     * @return self
     */
    public function setPoints(int $points) : self
    {
        $this->points = $points;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGroup() : string
    {
        return $this->group;
    }
    /**
     * 
     *
     * @param string $group
     *
     * @return self
     */
    public function setGroup(string $group) : self
    {
        $this->group = $group;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGlobalTeamID() : int
    {
        return $this->globalTeamID;
    }
    /**
     * 
     *
     * @param int $globalTeamID
     *
     * @return self
     */
    public function setGlobalTeamID(int $globalTeamID) : self
    {
        $this->globalTeamID = $globalTeamID;
        return $this;
    }
}