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
     * @var int|null
     */
    protected $sequence;
    /**
     * 
     *
     * @var int|null
     */
    protected $timeRemainingMinutes;
    /**
     * 
     *
     * @var int|null
     */
    protected $timeRemainingSeconds;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var int|null
     */
    protected $penaltyMinutes;
    /**
     * 
     *
     * @var int|null
     */
    protected $penalizedTeamID;
    /**
     * 
     *
     * @var int|null
     */
    protected $penalizedPlayerID;
    /**
     * 
     *
     * @var int|null
     */
    protected $drawnByTeamID;
    /**
     * 
     *
     * @var int|null
     */
    protected $drawnByPlayerID;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isBenchPenalty;
    /**
     * 
     *
     * @var int|null
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
     * @return int|null
     */
    public function getSequence() : ?int
    {
        return $this->sequence;
    }
    /**
     * 
     *
     * @param int|null $sequence
     *
     * @return self
     */
    public function setSequence(?int $sequence) : self
    {
        $this->sequence = $sequence;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTimeRemainingMinutes() : ?int
    {
        return $this->timeRemainingMinutes;
    }
    /**
     * 
     *
     * @param int|null $timeRemainingMinutes
     *
     * @return self
     */
    public function setTimeRemainingMinutes(?int $timeRemainingMinutes) : self
    {
        $this->timeRemainingMinutes = $timeRemainingMinutes;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTimeRemainingSeconds() : ?int
    {
        return $this->timeRemainingSeconds;
    }
    /**
     * 
     *
     * @param int|null $timeRemainingSeconds
     *
     * @return self
     */
    public function setTimeRemainingSeconds(?int $timeRemainingSeconds) : self
    {
        $this->timeRemainingSeconds = $timeRemainingSeconds;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPenaltyMinutes() : ?int
    {
        return $this->penaltyMinutes;
    }
    /**
     * 
     *
     * @param int|null $penaltyMinutes
     *
     * @return self
     */
    public function setPenaltyMinutes(?int $penaltyMinutes) : self
    {
        $this->penaltyMinutes = $penaltyMinutes;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPenalizedTeamID() : ?int
    {
        return $this->penalizedTeamID;
    }
    /**
     * 
     *
     * @param int|null $penalizedTeamID
     *
     * @return self
     */
    public function setPenalizedTeamID(?int $penalizedTeamID) : self
    {
        $this->penalizedTeamID = $penalizedTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPenalizedPlayerID() : ?int
    {
        return $this->penalizedPlayerID;
    }
    /**
     * 
     *
     * @param int|null $penalizedPlayerID
     *
     * @return self
     */
    public function setPenalizedPlayerID(?int $penalizedPlayerID) : self
    {
        $this->penalizedPlayerID = $penalizedPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDrawnByTeamID() : ?int
    {
        return $this->drawnByTeamID;
    }
    /**
     * 
     *
     * @param int|null $drawnByTeamID
     *
     * @return self
     */
    public function setDrawnByTeamID(?int $drawnByTeamID) : self
    {
        $this->drawnByTeamID = $drawnByTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDrawnByPlayerID() : ?int
    {
        return $this->drawnByPlayerID;
    }
    /**
     * 
     *
     * @param int|null $drawnByPlayerID
     *
     * @return self
     */
    public function setDrawnByPlayerID(?int $drawnByPlayerID) : self
    {
        $this->drawnByPlayerID = $drawnByPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsBenchPenalty() : ?bool
    {
        return $this->isBenchPenalty;
    }
    /**
     * 
     *
     * @param bool|null $isBenchPenalty
     *
     * @return self
     */
    public function setIsBenchPenalty(?bool $isBenchPenalty) : self
    {
        $this->isBenchPenalty = $isBenchPenalty;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBenchPenaltyServedByPlayerID() : ?int
    {
        return $this->benchPenaltyServedByPlayerID;
    }
    /**
     * 
     *
     * @param int|null $benchPenaltyServedByPlayerID
     *
     * @return self
     */
    public function setBenchPenaltyServedByPlayerID(?int $benchPenaltyServedByPlayerID) : self
    {
        $this->benchPenaltyServedByPlayerID = $benchPenaltyServedByPlayerID;
        return $this;
    }
}