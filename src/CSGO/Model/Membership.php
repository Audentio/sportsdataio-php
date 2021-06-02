<?php

namespace Sportsdata\API\CSGO\Model;

class Membership
{
    /**
     * 
     *
     * @var int
     */
    protected $membershipId;
    /**
     * 
     *
     * @var int
     */
    protected $teamId;
    /**
     * 
     *
     * @var int
     */
    protected $playerId;
    /**
     * 
     *
     * @var string
     */
    protected $playerName;
    /**
     * 
     *
     * @var string
     */
    protected $teamName;
    /**
     * 
     *
     * @var string
     */
    protected $teamArea;
    /**
     * 
     *
     * @var bool
     */
    protected $active;
    /**
     * 
     *
     * @var string
     */
    protected $startDate;
    /**
     * 
     *
     * @var string
     */
    protected $endDate;
    /**
     * 
     *
     * @var string
     */
    protected $updated;
    /**
     * 
     *
     * @return int
     */
    public function getMembershipId() : int
    {
        return $this->membershipId;
    }
    /**
     * 
     *
     * @param int $membershipId
     *
     * @return self
     */
    public function setMembershipId(int $membershipId) : self
    {
        $this->membershipId = $membershipId;
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
     * @return int
     */
    public function getPlayerId() : int
    {
        return $this->playerId;
    }
    /**
     * 
     *
     * @param int $playerId
     *
     * @return self
     */
    public function setPlayerId(int $playerId) : self
    {
        $this->playerId = $playerId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPlayerName() : string
    {
        return $this->playerName;
    }
    /**
     * 
     *
     * @param string $playerName
     *
     * @return self
     */
    public function setPlayerName(string $playerName) : self
    {
        $this->playerName = $playerName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTeamName() : string
    {
        return $this->teamName;
    }
    /**
     * 
     *
     * @param string $teamName
     *
     * @return self
     */
    public function setTeamName(string $teamName) : self
    {
        $this->teamName = $teamName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTeamArea() : string
    {
        return $this->teamArea;
    }
    /**
     * 
     *
     * @param string $teamArea
     *
     * @return self
     */
    public function setTeamArea(string $teamArea) : self
    {
        $this->teamArea = $teamArea;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getActive() : bool
    {
        return $this->active;
    }
    /**
     * 
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active) : self
    {
        $this->active = $active;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStartDate() : string
    {
        return $this->startDate;
    }
    /**
     * 
     *
     * @param string $startDate
     *
     * @return self
     */
    public function setStartDate(string $startDate) : self
    {
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEndDate() : string
    {
        return $this->endDate;
    }
    /**
     * 
     *
     * @param string $endDate
     *
     * @return self
     */
    public function setEndDate(string $endDate) : self
    {
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUpdated() : string
    {
        return $this->updated;
    }
    /**
     * 
     *
     * @param string $updated
     *
     * @return self
     */
    public function setUpdated(string $updated) : self
    {
        $this->updated = $updated;
        return $this;
    }
}