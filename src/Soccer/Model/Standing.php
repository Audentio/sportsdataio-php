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
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $shortName;
    /**
     * 
     *
     * @var string|null
     */
    protected $scope;
    /**
     * 
     *
     * @var int|null
     */
    protected $order;
    /**
     * 
     *
     * @var int|null
     */
    protected $games;
    /**
     * 
     *
     * @var int|null
     */
    protected $wins;
    /**
     * 
     *
     * @var int|null
     */
    protected $losses;
    /**
     * 
     *
     * @var int|null
     */
    protected $draws;
    /**
     * 
     *
     * @var int|null
     */
    protected $goalsScored;
    /**
     * 
     *
     * @var int|null
     */
    protected $goalsAgainst;
    /**
     * 
     *
     * @var int|null
     */
    protected $goalsDifferential;
    /**
     * 
     *
     * @var int|null
     */
    protected $points;
    /**
     * 
     *
     * @var string|null
     */
    protected $group;
    /**
     * 
     *
     * @var int|null
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
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getShortName() : ?string
    {
        return $this->shortName;
    }
    /**
     * 
     *
     * @param string|null $shortName
     *
     * @return self
     */
    public function setShortName(?string $shortName) : self
    {
        $this->shortName = $shortName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getScope() : ?string
    {
        return $this->scope;
    }
    /**
     * 
     *
     * @param string|null $scope
     *
     * @return self
     */
    public function setScope(?string $scope) : self
    {
        $this->scope = $scope;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOrder() : ?int
    {
        return $this->order;
    }
    /**
     * 
     *
     * @param int|null $order
     *
     * @return self
     */
    public function setOrder(?int $order) : self
    {
        $this->order = $order;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getGames() : ?int
    {
        return $this->games;
    }
    /**
     * 
     *
     * @param int|null $games
     *
     * @return self
     */
    public function setGames(?int $games) : self
    {
        $this->games = $games;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getWins() : ?int
    {
        return $this->wins;
    }
    /**
     * 
     *
     * @param int|null $wins
     *
     * @return self
     */
    public function setWins(?int $wins) : self
    {
        $this->wins = $wins;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLosses() : ?int
    {
        return $this->losses;
    }
    /**
     * 
     *
     * @param int|null $losses
     *
     * @return self
     */
    public function setLosses(?int $losses) : self
    {
        $this->losses = $losses;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDraws() : ?int
    {
        return $this->draws;
    }
    /**
     * 
     *
     * @param int|null $draws
     *
     * @return self
     */
    public function setDraws(?int $draws) : self
    {
        $this->draws = $draws;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getGoalsScored() : ?int
    {
        return $this->goalsScored;
    }
    /**
     * 
     *
     * @param int|null $goalsScored
     *
     * @return self
     */
    public function setGoalsScored(?int $goalsScored) : self
    {
        $this->goalsScored = $goalsScored;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getGoalsAgainst() : ?int
    {
        return $this->goalsAgainst;
    }
    /**
     * 
     *
     * @param int|null $goalsAgainst
     *
     * @return self
     */
    public function setGoalsAgainst(?int $goalsAgainst) : self
    {
        $this->goalsAgainst = $goalsAgainst;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getGoalsDifferential() : ?int
    {
        return $this->goalsDifferential;
    }
    /**
     * 
     *
     * @param int|null $goalsDifferential
     *
     * @return self
     */
    public function setGoalsDifferential(?int $goalsDifferential) : self
    {
        $this->goalsDifferential = $goalsDifferential;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPoints() : ?int
    {
        return $this->points;
    }
    /**
     * 
     *
     * @param int|null $points
     *
     * @return self
     */
    public function setPoints(?int $points) : self
    {
        $this->points = $points;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getGroup() : ?string
    {
        return $this->group;
    }
    /**
     * 
     *
     * @param string|null $group
     *
     * @return self
     */
    public function setGroup(?string $group) : self
    {
        $this->group = $group;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getGlobalTeamID() : ?int
    {
        return $this->globalTeamID;
    }
    /**
     * 
     *
     * @param int|null $globalTeamID
     *
     * @return self
     */
    public function setGlobalTeamID(?int $globalTeamID) : self
    {
        $this->globalTeamID = $globalTeamID;
        return $this;
    }
}