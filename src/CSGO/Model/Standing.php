<?php

namespace Sportsdata\API\CSGO\Model;

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
     * @var int|null
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
    protected $points;
    /**
     * 
     *
     * @var int
     */
    protected $scoreFor;
    /**
     * 
     *
     * @var int
     */
    protected $scoreAgainst;
    /**
     * 
     *
     * @var int
     */
    protected $scoreDifference;
    /**
     * 
     *
     * @var string|null
     */
    protected $group;
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
     * @return int
     */
    public function getScoreFor() : int
    {
        return $this->scoreFor;
    }
    /**
     * 
     *
     * @param int $scoreFor
     *
     * @return self
     */
    public function setScoreFor(int $scoreFor) : self
    {
        $this->scoreFor = $scoreFor;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getScoreAgainst() : int
    {
        return $this->scoreAgainst;
    }
    /**
     * 
     *
     * @param int $scoreAgainst
     *
     * @return self
     */
    public function setScoreAgainst(int $scoreAgainst) : self
    {
        $this->scoreAgainst = $scoreAgainst;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getScoreDifference() : int
    {
        return $this->scoreDifference;
    }
    /**
     * 
     *
     * @param int $scoreDifference
     *
     * @return self
     */
    public function setScoreDifference(int $scoreDifference) : self
    {
        $this->scoreDifference = $scoreDifference;
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
}