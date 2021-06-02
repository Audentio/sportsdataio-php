<?php

namespace Sportsdata\API\NFL\Model;

class ScoringPlay
{
    /**
     * 
     *
     * @var string
     */
    protected $gameKey;
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
    protected $scoringPlayID;
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
    protected $week;
    /**
     * 
     *
     * @var string
     */
    protected $awayTeam;
    /**
     * 
     *
     * @var string
     */
    protected $homeTeam;
    /**
     * 
     *
     * @var string
     */
    protected $date;
    /**
     * 
     *
     * @var int
     */
    protected $sequence;
    /**
     * 
     *
     * @var string
     */
    protected $team;
    /**
     * 
     *
     * @var string
     */
    protected $quarter;
    /**
     * 
     *
     * @var string
     */
    protected $timeRemaining;
    /**
     * 
     *
     * @var string
     */
    protected $playDescription;
    /**
     * 
     *
     * @var int
     */
    protected $awayScore;
    /**
     * 
     *
     * @var int
     */
    protected $homeScore;
    /**
     * 
     *
     * @var int
     */
    protected $scoreID;
    /**
     * 
     *
     * @return string
     */
    public function getGameKey() : string
    {
        return $this->gameKey;
    }
    /**
     * 
     *
     * @param string $gameKey
     *
     * @return self
     */
    public function setGameKey(string $gameKey) : self
    {
        $this->gameKey = $gameKey;
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
    public function getAwayTeam() : string
    {
        return $this->awayTeam;
    }
    /**
     * 
     *
     * @param string $awayTeam
     *
     * @return self
     */
    public function setAwayTeam(string $awayTeam) : self
    {
        $this->awayTeam = $awayTeam;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHomeTeam() : string
    {
        return $this->homeTeam;
    }
    /**
     * 
     *
     * @param string $homeTeam
     *
     * @return self
     */
    public function setHomeTeam(string $homeTeam) : self
    {
        $this->homeTeam = $homeTeam;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDate() : string
    {
        return $this->date;
    }
    /**
     * 
     *
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date) : self
    {
        $this->date = $date;
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
     * @return string
     */
    public function getQuarter() : string
    {
        return $this->quarter;
    }
    /**
     * 
     *
     * @param string $quarter
     *
     * @return self
     */
    public function setQuarter(string $quarter) : self
    {
        $this->quarter = $quarter;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTimeRemaining() : string
    {
        return $this->timeRemaining;
    }
    /**
     * 
     *
     * @param string $timeRemaining
     *
     * @return self
     */
    public function setTimeRemaining(string $timeRemaining) : self
    {
        $this->timeRemaining = $timeRemaining;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPlayDescription() : string
    {
        return $this->playDescription;
    }
    /**
     * 
     *
     * @param string $playDescription
     *
     * @return self
     */
    public function setPlayDescription(string $playDescription) : self
    {
        $this->playDescription = $playDescription;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayScore() : int
    {
        return $this->awayScore;
    }
    /**
     * 
     *
     * @param int $awayScore
     *
     * @return self
     */
    public function setAwayScore(int $awayScore) : self
    {
        $this->awayScore = $awayScore;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeScore() : int
    {
        return $this->homeScore;
    }
    /**
     * 
     *
     * @param int $homeScore
     *
     * @return self
     */
    public function setHomeScore(int $homeScore) : self
    {
        $this->homeScore = $homeScore;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getScoreID() : int
    {
        return $this->scoreID;
    }
    /**
     * 
     *
     * @param int $scoreID
     *
     * @return self
     */
    public function setScoreID(int $scoreID) : self
    {
        $this->scoreID = $scoreID;
        return $this;
    }
}