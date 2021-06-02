<?php

namespace Sportsdata\API\NFL\Model;

class PlayerOwnership
{
    /**
     * 
     *
     * @var int
     */
    protected $playerID;
    /**
     * 
     *
     * @var int
     */
    protected $season;
    /**
     * 
     *
     * @var int
     */
    protected $seasonType;
    /**
     * 
     *
     * @var int
     */
    protected $week;
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
    protected $position;
    /**
     * 
     *
     * @var string
     */
    protected $team;
    /**
     * 
     *
     * @var int
     */
    protected $teamID;
    /**
     * 
     *
     * @var float
     */
    protected $ownershipPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $deltaOwnershipPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $startPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $deltaStartPercentage;
    /**
     * 
     *
     * @return int
     */
    public function getPlayerID() : int
    {
        return $this->playerID;
    }
    /**
     * 
     *
     * @param int $playerID
     *
     * @return self
     */
    public function setPlayerID(int $playerID) : self
    {
        $this->playerID = $playerID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSeason() : int
    {
        return $this->season;
    }
    /**
     * 
     *
     * @param int $season
     *
     * @return self
     */
    public function setSeason(int $season) : self
    {
        $this->season = $season;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSeasonType() : int
    {
        return $this->seasonType;
    }
    /**
     * 
     *
     * @param int $seasonType
     *
     * @return self
     */
    public function setSeasonType(int $seasonType) : self
    {
        $this->seasonType = $seasonType;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getWeek() : int
    {
        return $this->week;
    }
    /**
     * 
     *
     * @param int $week
     *
     * @return self
     */
    public function setWeek(int $week) : self
    {
        $this->week = $week;
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
    public function getPosition() : string
    {
        return $this->position;
    }
    /**
     * 
     *
     * @param string $position
     *
     * @return self
     */
    public function setPosition(string $position) : self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTeam() : string
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param string $team
     *
     * @return self
     */
    public function setTeam(string $team) : self
    {
        $this->team = $team;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTeamID() : int
    {
        return $this->teamID;
    }
    /**
     * 
     *
     * @param int $teamID
     *
     * @return self
     */
    public function setTeamID(int $teamID) : self
    {
        $this->teamID = $teamID;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOwnershipPercentage() : float
    {
        return $this->ownershipPercentage;
    }
    /**
     * 
     *
     * @param float $ownershipPercentage
     *
     * @return self
     */
    public function setOwnershipPercentage(float $ownershipPercentage) : self
    {
        $this->ownershipPercentage = $ownershipPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDeltaOwnershipPercentage() : float
    {
        return $this->deltaOwnershipPercentage;
    }
    /**
     * 
     *
     * @param float $deltaOwnershipPercentage
     *
     * @return self
     */
    public function setDeltaOwnershipPercentage(float $deltaOwnershipPercentage) : self
    {
        $this->deltaOwnershipPercentage = $deltaOwnershipPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getStartPercentage() : float
    {
        return $this->startPercentage;
    }
    /**
     * 
     *
     * @param float $startPercentage
     *
     * @return self
     */
    public function setStartPercentage(float $startPercentage) : self
    {
        $this->startPercentage = $startPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDeltaStartPercentage() : float
    {
        return $this->deltaStartPercentage;
    }
    /**
     * 
     *
     * @param float $deltaStartPercentage
     *
     * @return self
     */
    public function setDeltaStartPercentage(float $deltaStartPercentage) : self
    {
        $this->deltaStartPercentage = $deltaStartPercentage;
        return $this;
    }
}