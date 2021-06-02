<?php

namespace Sportsdata\API\WNBA\Model;

class Game
{
    /**
     * 
     *
     * @var int
     */
    protected $gameID;
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
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var string
     */
    protected $day;
    /**
     * 
     *
     * @var string
     */
    protected $dateTime;
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
     * @var int
     */
    protected $awayTeamID;
    /**
     * 
     *
     * @var int
     */
    protected $homeTeamID;
    /**
     * 
     *
     * @var int
     */
    protected $stadiumID;
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
     * @var string
     */
    protected $updated;
    /**
     * 
     *
     * @var string
     */
    protected $quarter;
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
    protected $globalGameID;
    /**
     * 
     *
     * @var int
     */
    protected $globalAwayTeamID;
    /**
     * 
     *
     * @var int
     */
    protected $globalHomeTeamID;
    /**
     * 
     *
     * @var Quarter[]
     */
    protected $quarters;
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
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDay() : string
    {
        return $this->day;
    }
    /**
     * 
     *
     * @param string $day
     *
     * @return self
     */
    public function setDay(string $day) : self
    {
        $this->day = $day;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDateTime() : string
    {
        return $this->dateTime;
    }
    /**
     * 
     *
     * @param string $dateTime
     *
     * @return self
     */
    public function setDateTime(string $dateTime) : self
    {
        $this->dateTime = $dateTime;
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
     * @return int
     */
    public function getAwayTeamID() : int
    {
        return $this->awayTeamID;
    }
    /**
     * 
     *
     * @param int $awayTeamID
     *
     * @return self
     */
    public function setAwayTeamID(int $awayTeamID) : self
    {
        $this->awayTeamID = $awayTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeTeamID() : int
    {
        return $this->homeTeamID;
    }
    /**
     * 
     *
     * @param int $homeTeamID
     *
     * @return self
     */
    public function setHomeTeamID(int $homeTeamID) : self
    {
        $this->homeTeamID = $homeTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStadiumID() : int
    {
        return $this->stadiumID;
    }
    /**
     * 
     *
     * @param int $stadiumID
     *
     * @return self
     */
    public function setStadiumID(int $stadiumID) : self
    {
        $this->stadiumID = $stadiumID;
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
    public function getGlobalGameID() : int
    {
        return $this->globalGameID;
    }
    /**
     * 
     *
     * @param int $globalGameID
     *
     * @return self
     */
    public function setGlobalGameID(int $globalGameID) : self
    {
        $this->globalGameID = $globalGameID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGlobalAwayTeamID() : int
    {
        return $this->globalAwayTeamID;
    }
    /**
     * 
     *
     * @param int $globalAwayTeamID
     *
     * @return self
     */
    public function setGlobalAwayTeamID(int $globalAwayTeamID) : self
    {
        $this->globalAwayTeamID = $globalAwayTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGlobalHomeTeamID() : int
    {
        return $this->globalHomeTeamID;
    }
    /**
     * 
     *
     * @param int $globalHomeTeamID
     *
     * @return self
     */
    public function setGlobalHomeTeamID(int $globalHomeTeamID) : self
    {
        $this->globalHomeTeamID = $globalHomeTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return Quarter[]
     */
    public function getQuarters() : array
    {
        return $this->quarters;
    }
    /**
     * 
     *
     * @param Quarter[] $quarters
     *
     * @return self
     */
    public function setQuarters(array $quarters) : self
    {
        $this->quarters = $quarters;
        return $this;
    }
}