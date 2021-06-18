<?php

namespace Sportsdata\API\NFL\Model;

class Schedule
{
    /**
     * 
     *
     * @var string|null
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
     * @var string|null
     */
    protected $date;
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
     * @var string|null
     */
    protected $channel;
    /**
     * 
     *
     * @var float|null
     */
    protected $pointSpread;
    /**
     * 
     *
     * @var float|null
     */
    protected $overUnder;
    /**
     * 
     *
     * @var int|null
     */
    protected $stadiumID;
    /**
     * 
     *
     * @var bool|null
     */
    protected $canceled;
    /**
     * 
     *
     * @var float|null
     */
    protected $geoLat;
    /**
     * 
     *
     * @var float|null
     */
    protected $geoLong;
    /**
     * 
     *
     * @var int|null
     */
    protected $forecastTempLow;
    /**
     * 
     *
     * @var int|null
     */
    protected $forecastTempHigh;
    /**
     * 
     *
     * @var string|null
     */
    protected $forecastDescription;
    /**
     * 
     *
     * @var int|null
     */
    protected $forecastWindChill;
    /**
     * 
     *
     * @var int|null
     */
    protected $forecastWindSpeed;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayTeamMoneyLine;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeTeamMoneyLine;
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
     * @var int|null
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
     * @var int
     */
    protected $scoreID;
    /**
     * 
     *
     * @var Stadium
     */
    protected $stadiumDetails;
    /**
     * 
     *
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @return string|null
     */
    public function getGameKey() : ?string
    {
        return $this->gameKey;
    }
    /**
     * 
     *
     * @param string|null $gameKey
     *
     * @return self
     */
    public function setGameKey(?string $gameKey) : self
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
     * @return string|null
     */
    public function getDate() : ?string
    {
        return $this->date;
    }
    /**
     * 
     *
     * @param string|null $date
     *
     * @return self
     */
    public function setDate(?string $date) : self
    {
        $this->date = $date;
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
     * @return string|null
     */
    public function getChannel() : ?string
    {
        return $this->channel;
    }
    /**
     * 
     *
     * @param string|null $channel
     *
     * @return self
     */
    public function setChannel(?string $channel) : self
    {
        $this->channel = $channel;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPointSpread() : ?float
    {
        return $this->pointSpread;
    }
    /**
     * 
     *
     * @param float|null $pointSpread
     *
     * @return self
     */
    public function setPointSpread(?float $pointSpread) : self
    {
        $this->pointSpread = $pointSpread;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getOverUnder() : ?float
    {
        return $this->overUnder;
    }
    /**
     * 
     *
     * @param float|null $overUnder
     *
     * @return self
     */
    public function setOverUnder(?float $overUnder) : self
    {
        $this->overUnder = $overUnder;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getStadiumID() : ?int
    {
        return $this->stadiumID;
    }
    /**
     * 
     *
     * @param int|null $stadiumID
     *
     * @return self
     */
    public function setStadiumID(?int $stadiumID) : self
    {
        $this->stadiumID = $stadiumID;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getCanceled() : ?bool
    {
        return $this->canceled;
    }
    /**
     * 
     *
     * @param bool|null $canceled
     *
     * @return self
     */
    public function setCanceled(?bool $canceled) : self
    {
        $this->canceled = $canceled;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getGeoLat() : ?float
    {
        return $this->geoLat;
    }
    /**
     * 
     *
     * @param float|null $geoLat
     *
     * @return self
     */
    public function setGeoLat(?float $geoLat) : self
    {
        $this->geoLat = $geoLat;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getGeoLong() : ?float
    {
        return $this->geoLong;
    }
    /**
     * 
     *
     * @param float|null $geoLong
     *
     * @return self
     */
    public function setGeoLong(?float $geoLong) : self
    {
        $this->geoLong = $geoLong;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getForecastTempLow() : ?int
    {
        return $this->forecastTempLow;
    }
    /**
     * 
     *
     * @param int|null $forecastTempLow
     *
     * @return self
     */
    public function setForecastTempLow(?int $forecastTempLow) : self
    {
        $this->forecastTempLow = $forecastTempLow;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getForecastTempHigh() : ?int
    {
        return $this->forecastTempHigh;
    }
    /**
     * 
     *
     * @param int|null $forecastTempHigh
     *
     * @return self
     */
    public function setForecastTempHigh(?int $forecastTempHigh) : self
    {
        $this->forecastTempHigh = $forecastTempHigh;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getForecastDescription() : ?string
    {
        return $this->forecastDescription;
    }
    /**
     * 
     *
     * @param string|null $forecastDescription
     *
     * @return self
     */
    public function setForecastDescription(?string $forecastDescription) : self
    {
        $this->forecastDescription = $forecastDescription;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getForecastWindChill() : ?int
    {
        return $this->forecastWindChill;
    }
    /**
     * 
     *
     * @param int|null $forecastWindChill
     *
     * @return self
     */
    public function setForecastWindChill(?int $forecastWindChill) : self
    {
        $this->forecastWindChill = $forecastWindChill;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getForecastWindSpeed() : ?int
    {
        return $this->forecastWindSpeed;
    }
    /**
     * 
     *
     * @param int|null $forecastWindSpeed
     *
     * @return self
     */
    public function setForecastWindSpeed(?int $forecastWindSpeed) : self
    {
        $this->forecastWindSpeed = $forecastWindSpeed;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayTeamMoneyLine() : ?int
    {
        return $this->awayTeamMoneyLine;
    }
    /**
     * 
     *
     * @param int|null $awayTeamMoneyLine
     *
     * @return self
     */
    public function setAwayTeamMoneyLine(?int $awayTeamMoneyLine) : self
    {
        $this->awayTeamMoneyLine = $awayTeamMoneyLine;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeTeamMoneyLine() : ?int
    {
        return $this->homeTeamMoneyLine;
    }
    /**
     * 
     *
     * @param int|null $homeTeamMoneyLine
     *
     * @return self
     */
    public function setHomeTeamMoneyLine(?int $homeTeamMoneyLine) : self
    {
        $this->homeTeamMoneyLine = $homeTeamMoneyLine;
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
     * @return int|null
     */
    public function getGlobalGameID() : ?int
    {
        return $this->globalGameID;
    }
    /**
     * 
     *
     * @param int|null $globalGameID
     *
     * @return self
     */
    public function setGlobalGameID(?int $globalGameID) : self
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
    /**
     * 
     *
     * @return Stadium
     */
    public function getStadiumDetails() : Stadium
    {
        return $this->stadiumDetails;
    }
    /**
     * 
     *
     * @param Stadium $stadiumDetails
     *
     * @return self
     */
    public function setStadiumDetails(Stadium $stadiumDetails) : self
    {
        $this->stadiumDetails = $stadiumDetails;
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
}