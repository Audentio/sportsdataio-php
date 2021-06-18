<?php

namespace Sportsdata\API\CWBB\Model;

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
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @var string|null
     */
    protected $day;
    /**
     * 
     *
     * @var string|null
     */
    protected $dateTime;
    /**
     * 
     *
     * @var string|null
     */
    protected $awayTeam;
    /**
     * 
     *
     * @var string|null
     */
    protected $homeTeam;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayTeamID;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeTeamID;
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
     * @var string|null
     */
    protected $updated;
    /**
     * 
     *
     * @var string|null
     */
    protected $period;
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
     * @var int
     */
    protected $globalGameID;
    /**
     * 
     *
     * @var int|null
     */
    protected $globalAwayTeamID;
    /**
     * 
     *
     * @var int|null
     */
    protected $globalHomeTeamID;
    /**
     * 
     *
     * @var Period[]
     */
    protected $periods;
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
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDay() : ?string
    {
        return $this->day;
    }
    /**
     * 
     *
     * @param string|null $day
     *
     * @return self
     */
    public function setDay(?string $day) : self
    {
        $this->day = $day;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDateTime() : ?string
    {
        return $this->dateTime;
    }
    /**
     * 
     *
     * @param string|null $dateTime
     *
     * @return self
     */
    public function setDateTime(?string $dateTime) : self
    {
        $this->dateTime = $dateTime;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAwayTeam() : ?string
    {
        return $this->awayTeam;
    }
    /**
     * 
     *
     * @param string|null $awayTeam
     *
     * @return self
     */
    public function setAwayTeam(?string $awayTeam) : self
    {
        $this->awayTeam = $awayTeam;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHomeTeam() : ?string
    {
        return $this->homeTeam;
    }
    /**
     * 
     *
     * @param string|null $homeTeam
     *
     * @return self
     */
    public function setHomeTeam(?string $homeTeam) : self
    {
        $this->homeTeam = $homeTeam;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayTeamID() : ?int
    {
        return $this->awayTeamID;
    }
    /**
     * 
     *
     * @param int|null $awayTeamID
     *
     * @return self
     */
    public function setAwayTeamID(?int $awayTeamID) : self
    {
        $this->awayTeamID = $awayTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeTeamID() : ?int
    {
        return $this->homeTeamID;
    }
    /**
     * 
     *
     * @param int|null $homeTeamID
     *
     * @return self
     */
    public function setHomeTeamID(?int $homeTeamID) : self
    {
        $this->homeTeamID = $homeTeamID;
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
    /**
     * 
     *
     * @return string|null
     */
    public function getUpdated() : ?string
    {
        return $this->updated;
    }
    /**
     * 
     *
     * @param string|null $updated
     *
     * @return self
     */
    public function setUpdated(?string $updated) : self
    {
        $this->updated = $updated;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPeriod() : ?string
    {
        return $this->period;
    }
    /**
     * 
     *
     * @param string|null $period
     *
     * @return self
     */
    public function setPeriod(?string $period) : self
    {
        $this->period = $period;
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
     * @return int|null
     */
    public function getGlobalAwayTeamID() : ?int
    {
        return $this->globalAwayTeamID;
    }
    /**
     * 
     *
     * @param int|null $globalAwayTeamID
     *
     * @return self
     */
    public function setGlobalAwayTeamID(?int $globalAwayTeamID) : self
    {
        $this->globalAwayTeamID = $globalAwayTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getGlobalHomeTeamID() : ?int
    {
        return $this->globalHomeTeamID;
    }
    /**
     * 
     *
     * @param int|null $globalHomeTeamID
     *
     * @return self
     */
    public function setGlobalHomeTeamID(?int $globalHomeTeamID) : self
    {
        $this->globalHomeTeamID = $globalHomeTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return Period[]
     */
    public function getPeriods() : array
    {
        return $this->periods;
    }
    /**
     * 
     *
     * @param Period[] $periods
     *
     * @return self
     */
    public function setPeriods(array $periods) : self
    {
        $this->periods = $periods;
        return $this;
    }
}