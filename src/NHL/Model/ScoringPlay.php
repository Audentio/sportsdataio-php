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
     * @var int
     */
    protected $scoredByTeamID;
    /**
     * 
     *
     * @var int
     */
    protected $allowedByTeamID;
    /**
     * 
     *
     * @var int
     */
    protected $scoredByPlayerID;
    /**
     * 
     *
     * @var int
     */
    protected $assistedByPlayerID1;
    /**
     * 
     *
     * @var int
     */
    protected $assistedByPlayerID2;
    /**
     * 
     *
     * @var bool
     */
    protected $powerPlay;
    /**
     * 
     *
     * @var bool
     */
    protected $shortHanded;
    /**
     * 
     *
     * @var bool
     */
    protected $emptyNet;
    /**
     * 
     *
     * @var int
     */
    protected $awayTeamScore;
    /**
     * 
     *
     * @var int
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
     * @return int
     */
    public function getScoredByTeamID() : int
    {
        return $this->scoredByTeamID;
    }
    /**
     * 
     *
     * @param int $scoredByTeamID
     *
     * @return self
     */
    public function setScoredByTeamID(int $scoredByTeamID) : self
    {
        $this->scoredByTeamID = $scoredByTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAllowedByTeamID() : int
    {
        return $this->allowedByTeamID;
    }
    /**
     * 
     *
     * @param int $allowedByTeamID
     *
     * @return self
     */
    public function setAllowedByTeamID(int $allowedByTeamID) : self
    {
        $this->allowedByTeamID = $allowedByTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getScoredByPlayerID() : int
    {
        return $this->scoredByPlayerID;
    }
    /**
     * 
     *
     * @param int $scoredByPlayerID
     *
     * @return self
     */
    public function setScoredByPlayerID(int $scoredByPlayerID) : self
    {
        $this->scoredByPlayerID = $scoredByPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAssistedByPlayerID1() : int
    {
        return $this->assistedByPlayerID1;
    }
    /**
     * 
     *
     * @param int $assistedByPlayerID1
     *
     * @return self
     */
    public function setAssistedByPlayerID1(int $assistedByPlayerID1) : self
    {
        $this->assistedByPlayerID1 = $assistedByPlayerID1;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAssistedByPlayerID2() : int
    {
        return $this->assistedByPlayerID2;
    }
    /**
     * 
     *
     * @param int $assistedByPlayerID2
     *
     * @return self
     */
    public function setAssistedByPlayerID2(int $assistedByPlayerID2) : self
    {
        $this->assistedByPlayerID2 = $assistedByPlayerID2;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPowerPlay() : bool
    {
        return $this->powerPlay;
    }
    /**
     * 
     *
     * @param bool $powerPlay
     *
     * @return self
     */
    public function setPowerPlay(bool $powerPlay) : self
    {
        $this->powerPlay = $powerPlay;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getShortHanded() : bool
    {
        return $this->shortHanded;
    }
    /**
     * 
     *
     * @param bool $shortHanded
     *
     * @return self
     */
    public function setShortHanded(bool $shortHanded) : self
    {
        $this->shortHanded = $shortHanded;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getEmptyNet() : bool
    {
        return $this->emptyNet;
    }
    /**
     * 
     *
     * @param bool $emptyNet
     *
     * @return self
     */
    public function setEmptyNet(bool $emptyNet) : self
    {
        $this->emptyNet = $emptyNet;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayTeamScore() : int
    {
        return $this->awayTeamScore;
    }
    /**
     * 
     *
     * @param int $awayTeamScore
     *
     * @return self
     */
    public function setAwayTeamScore(int $awayTeamScore) : self
    {
        $this->awayTeamScore = $awayTeamScore;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeTeamScore() : int
    {
        return $this->homeTeamScore;
    }
    /**
     * 
     *
     * @param int $homeTeamScore
     *
     * @return self
     */
    public function setHomeTeamScore(int $homeTeamScore) : self
    {
        $this->homeTeamScore = $homeTeamScore;
        return $this;
    }
}