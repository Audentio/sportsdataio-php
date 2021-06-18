<?php

namespace Sportsdata\API\NHL\Model;

class ScoringPlay
{
    /**
     * 
     *
     * @var int
     */
    protected $scoringPlayID;
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
     * @var int|null
     */
    protected $scoredByTeamID;
    /**
     * 
     *
     * @var int|null
     */
    protected $allowedByTeamID;
    /**
     * 
     *
     * @var int|null
     */
    protected $scoredByPlayerID;
    /**
     * 
     *
     * @var int|null
     */
    protected $assistedByPlayerID1;
    /**
     * 
     *
     * @var int|null
     */
    protected $assistedByPlayerID2;
    /**
     * 
     *
     * @var bool|null
     */
    protected $powerPlay;
    /**
     * 
     *
     * @var bool|null
     */
    protected $shortHanded;
    /**
     * 
     *
     * @var bool|null
     */
    protected $emptyNet;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayTeamScore;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeTeamScore;
    /**
     * 
     *
     * @return int
     */
    public function getScoringPlayID() : int
    {
        return $this->scoringPlayID;
    }
    /**
     * 
     *
     * @param int $scoringPlayID
     *
     * @return self
     */
    public function setScoringPlayID(int $scoringPlayID) : self
    {
        $this->scoringPlayID = $scoringPlayID;
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
     * @return int|null
     */
    public function getScoredByTeamID() : ?int
    {
        return $this->scoredByTeamID;
    }
    /**
     * 
     *
     * @param int|null $scoredByTeamID
     *
     * @return self
     */
    public function setScoredByTeamID(?int $scoredByTeamID) : self
    {
        $this->scoredByTeamID = $scoredByTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAllowedByTeamID() : ?int
    {
        return $this->allowedByTeamID;
    }
    /**
     * 
     *
     * @param int|null $allowedByTeamID
     *
     * @return self
     */
    public function setAllowedByTeamID(?int $allowedByTeamID) : self
    {
        $this->allowedByTeamID = $allowedByTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getScoredByPlayerID() : ?int
    {
        return $this->scoredByPlayerID;
    }
    /**
     * 
     *
     * @param int|null $scoredByPlayerID
     *
     * @return self
     */
    public function setScoredByPlayerID(?int $scoredByPlayerID) : self
    {
        $this->scoredByPlayerID = $scoredByPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAssistedByPlayerID1() : ?int
    {
        return $this->assistedByPlayerID1;
    }
    /**
     * 
     *
     * @param int|null $assistedByPlayerID1
     *
     * @return self
     */
    public function setAssistedByPlayerID1(?int $assistedByPlayerID1) : self
    {
        $this->assistedByPlayerID1 = $assistedByPlayerID1;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAssistedByPlayerID2() : ?int
    {
        return $this->assistedByPlayerID2;
    }
    /**
     * 
     *
     * @param int|null $assistedByPlayerID2
     *
     * @return self
     */
    public function setAssistedByPlayerID2(?int $assistedByPlayerID2) : self
    {
        $this->assistedByPlayerID2 = $assistedByPlayerID2;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getPowerPlay() : ?bool
    {
        return $this->powerPlay;
    }
    /**
     * 
     *
     * @param bool|null $powerPlay
     *
     * @return self
     */
    public function setPowerPlay(?bool $powerPlay) : self
    {
        $this->powerPlay = $powerPlay;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getShortHanded() : ?bool
    {
        return $this->shortHanded;
    }
    /**
     * 
     *
     * @param bool|null $shortHanded
     *
     * @return self
     */
    public function setShortHanded(?bool $shortHanded) : self
    {
        $this->shortHanded = $shortHanded;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getEmptyNet() : ?bool
    {
        return $this->emptyNet;
    }
    /**
     * 
     *
     * @param bool|null $emptyNet
     *
     * @return self
     */
    public function setEmptyNet(?bool $emptyNet) : self
    {
        $this->emptyNet = $emptyNet;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayTeamScore() : ?int
    {
        return $this->awayTeamScore;
    }
    /**
     * 
     *
     * @param int|null $awayTeamScore
     *
     * @return self
     */
    public function setAwayTeamScore(?int $awayTeamScore) : self
    {
        $this->awayTeamScore = $awayTeamScore;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeTeamScore() : ?int
    {
        return $this->homeTeamScore;
    }
    /**
     * 
     *
     * @param int|null $homeTeamScore
     *
     * @return self
     */
    public function setHomeTeamScore(?int $homeTeamScore) : self
    {
        $this->homeTeamScore = $homeTeamScore;
        return $this;
    }
}