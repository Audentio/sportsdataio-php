<?php

namespace Sportsdata\API\NHL\Model;

class Penalty
{
    /**
     * 
     *
     * @var int
     */
    protected $penaltyID;
    /**
     * 
     *
     * @var int
     */
    protected $periodID;
    /**
     * 
     *
     * @var int
     */
    protected $sequence;
    /**
     * 
     *
     * @var int
     */
    protected $timeRemainingMinutes;
    /**
     * 
     *
     * @var int
     */
    protected $timeRemainingSeconds;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var int
     */
    protected $penaltyMinutes;
    /**
     * 
     *
     * @var int
     */
    protected $penalizedTeamID;
    /**
     * 
     *
     * @var int
     */
    protected $penalizedPlayerID;
    /**
     * 
     *
     * @var int
     */
    protected $drawnByTeamID;
    /**
     * 
     *
     * @var int
     */
    protected $drawnByPlayerID;
    /**
     * 
     *
     * @var bool
     */
    protected $isBenchPenalty;
    /**
     * 
     *
     * @var int
     */
    protected $benchPenaltyServedByPlayerID;
    /**
     * 
     *
     * @return int
     */
    public function getPenaltyID() : int
    {
        return $this->penaltyID;
    }
    /**
     * 
     *
     * @param int $penaltyID
     *
     * @return self
     */
    public function setPenaltyID(int $penaltyID) : self
    {
        $this->penaltyID = $penaltyID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPeriodID() : int
    {
        return $this->periodID;
    }
    /**
     * 
     *
     * @param int $periodID
     *
     * @return self
     */
    public function setPeriodID(int $periodID) : self
    {
        $this->periodID = $periodID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSequence() : int
    {
        return $this->sequence;
    }
    /**
     * 
     *
     * @param int $sequence
     *
     * @return self
     */
    public function setSequence(int $sequence) : self
    {
        $this->sequence = $sequence;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTimeRemainingMinutes() : int
    {
        return $this->timeRemainingMinutes;
    }
    /**
     * 
     *
     * @param int $timeRemainingMinutes
     *
     * @return self
     */
    public function setTimeRemainingMinutes(int $timeRemainingMinutes) : self
    {
        $this->timeRemainingMinutes = $timeRemainingMinutes;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTimeRemainingSeconds() : int
    {
        return $this->timeRemainingSeconds;
    }
    /**
     * 
     *
     * @param int $timeRemainingSeconds
     *
     * @return self
     */
    public function setTimeRemainingSeconds(int $timeRemainingSeconds) : self
    {
        $this->timeRemainingSeconds = $timeRemainingSeconds;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPenaltyMinutes() : int
    {
        return $this->penaltyMinutes;
    }
    /**
     * 
     *
     * @param int $penaltyMinutes
     *
     * @return self
     */
    public function setPenaltyMinutes(int $penaltyMinutes) : self
    {
        $this->penaltyMinutes = $penaltyMinutes;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPenalizedTeamID() : int
    {
        return $this->penalizedTeamID;
    }
    /**
     * 
     *
     * @param int $penalizedTeamID
     *
     * @return self
     */
    public function setPenalizedTeamID(int $penalizedTeamID) : self
    {
        $this->penalizedTeamID = $penalizedTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPenalizedPlayerID() : int
    {
        return $this->penalizedPlayerID;
    }
    /**
     * 
     *
     * @param int $penalizedPlayerID
     *
     * @return self
     */
    public function setPenalizedPlayerID(int $penalizedPlayerID) : self
    {
        $this->penalizedPlayerID = $penalizedPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDrawnByTeamID() : int
    {
        return $this->drawnByTeamID;
    }
    /**
     * 
     *
     * @param int $drawnByTeamID
     *
     * @return self
     */
    public function setDrawnByTeamID(int $drawnByTeamID) : self
    {
        $this->drawnByTeamID = $drawnByTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDrawnByPlayerID() : int
    {
        return $this->drawnByPlayerID;
    }
    /**
     * 
     *
     * @param int $drawnByPlayerID
     *
     * @return self
     */
    public function setDrawnByPlayerID(int $drawnByPlayerID) : self
    {
        $this->drawnByPlayerID = $drawnByPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsBenchPenalty() : bool
    {
        return $this->isBenchPenalty;
    }
    /**
     * 
     *
     * @param bool $isBenchPenalty
     *
     * @return self
     */
    public function setIsBenchPenalty(bool $isBenchPenalty) : self
    {
        $this->isBenchPenalty = $isBenchPenalty;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBenchPenaltyServedByPlayerID() : int
    {
        return $this->benchPenaltyServedByPlayerID;
    }
    /**
     * 
     *
     * @param int $benchPenaltyServedByPlayerID
     *
     * @return self
     */
    public function setBenchPenaltyServedByPlayerID(int $benchPenaltyServedByPlayerID) : self
    {
        $this->benchPenaltyServedByPlayerID = $benchPenaltyServedByPlayerID;
        return $this;
    }
}