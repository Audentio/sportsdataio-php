<?php

namespace Sportsdata\API\CFB\Model;

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
    protected $gameID;
    /**
     * 
     *
     * @var string
     */
    protected $period;
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
     * @var string
     */
    protected $driveSummary;
    /**
     * 
     *
     * @var int
     */
    protected $homeTeamScore;
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
    protected $scoringTeamID;
    /**
     * 
     *
     * @var string
     */
    protected $scoringType;
    /**
     * 
     *
     * @var int
     */
    protected $sequence;
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
    public function getGameID() : int
    {
        return $this->gameID;
    }
    /**
     * 
     *
     * @param int $gameID
     *
     * @return self
     */
    public function setGameID(int $gameID) : self
    {
        $this->gameID = $gameID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPeriod() : string
    {
        return $this->period;
    }
    /**
     * 
     *
     * @param string $period
     *
     * @return self
     */
    public function setPeriod(string $period) : self
    {
        $this->period = $period;
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
     * @return string
     */
    public function getDriveSummary() : string
    {
        return $this->driveSummary;
    }
    /**
     * 
     *
     * @param string $driveSummary
     *
     * @return self
     */
    public function setDriveSummary(string $driveSummary) : self
    {
        $this->driveSummary = $driveSummary;
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
    public function getScoringTeamID() : int
    {
        return $this->scoringTeamID;
    }
    /**
     * 
     *
     * @param int $scoringTeamID
     *
     * @return self
     */
    public function setScoringTeamID(int $scoringTeamID) : self
    {
        $this->scoringTeamID = $scoringTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getScoringType() : string
    {
        return $this->scoringType;
    }
    /**
     * 
     *
     * @param string $scoringType
     *
     * @return self
     */
    public function setScoringType(string $scoringType) : self
    {
        $this->scoringType = $scoringType;
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
}