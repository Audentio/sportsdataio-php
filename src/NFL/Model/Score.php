<?php

namespace Sportsdata\API\NFL\Model;

class Score
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
    protected $date;
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
     * @var string
     */
    protected $channel;
    /**
     * 
     *
     * @var float
     */
    protected $pointSpread;
    /**
     * 
     *
     * @var float
     */
    protected $overUnder;
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
    protected $possession;
    /**
     * 
     *
     * @var int
     */
    protected $down;
    /**
     * 
     *
     * @var string
     */
    protected $distance;
    /**
     * 
     *
     * @var int
     */
    protected $yardLine;
    /**
     * 
     *
     * @var string
     */
    protected $yardLineTerritory;
    /**
     * 
     *
     * @var string
     */
    protected $redZone;
    /**
     * 
     *
     * @var int
     */
    protected $awayScoreQuarter1;
    /**
     * 
     *
     * @var int
     */
    protected $awayScoreQuarter2;
    /**
     * 
     *
     * @var int
     */
    protected $awayScoreQuarter3;
    /**
     * 
     *
     * @var int
     */
    protected $awayScoreQuarter4;
    /**
     * 
     *
     * @var int
     */
    protected $awayScoreOvertime;
    /**
     * 
     *
     * @var int
     */
    protected $homeScoreQuarter1;
    /**
     * 
     *
     * @var int
     */
    protected $homeScoreQuarter2;
    /**
     * 
     *
     * @var int
     */
    protected $homeScoreQuarter3;
    /**
     * 
     *
     * @var int
     */
    protected $homeScoreQuarter4;
    /**
     * 
     *
     * @var int
     */
    protected $homeScoreOvertime;
    /**
     * 
     *
     * @var bool
     */
    protected $hasStarted;
    /**
     * 
     *
     * @var bool
     */
    protected $isInProgress;
    /**
     * 
     *
     * @var bool
     */
    protected $isOver;
    /**
     * 
     *
     * @var bool
     */
    protected $has1stQuarterStarted;
    /**
     * 
     *
     * @var bool
     */
    protected $has2ndQuarterStarted;
    /**
     * 
     *
     * @var bool
     */
    protected $has3rdQuarterStarted;
    /**
     * 
     *
     * @var bool
     */
    protected $has4thQuarterStarted;
    /**
     * 
     *
     * @var bool
     */
    protected $isOvertime;
    /**
     * 
     *
     * @var string
     */
    protected $downAndDistance;
    /**
     * 
     *
     * @var string
     */
    protected $quarterDescription;
    /**
     * 
     *
     * @var int
     */
    protected $stadiumID;
    /**
     * 
     *
     * @var string
     */
    protected $lastUpdated;
    /**
     * 
     *
     * @var float
     */
    protected $geoLat;
    /**
     * 
     *
     * @var float
     */
    protected $geoLong;
    /**
     * 
     *
     * @var int
     */
    protected $forecastTempLow;
    /**
     * 
     *
     * @var int
     */
    protected $forecastTempHigh;
    /**
     * 
     *
     * @var string
     */
    protected $forecastDescription;
    /**
     * 
     *
     * @var int
     */
    protected $forecastWindChill;
    /**
     * 
     *
     * @var int
     */
    protected $forecastWindSpeed;
    /**
     * 
     *
     * @var int
     */
    protected $awayTeamMoneyLine;
    /**
     * 
     *
     * @var int
     */
    protected $homeTeamMoneyLine;
    /**
     * 
     *
     * @var bool
     */
    protected $canceled;
    /**
     * 
     *
     * @var bool
     */
    protected $closed;
    /**
     * 
     *
     * @var string
     */
    protected $lastPlay;
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
     * @var int
     */
    protected $pointSpreadAwayTeamMoneyLine;
    /**
     * 
     *
     * @var int
     */
    protected $pointSpreadHomeTeamMoneyLine;
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
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var string
     */
    protected $gameEndDateTime;
    /**
     * 
     *
     * @var int
     */
    protected $homeRotationNumber;
    /**
     * 
     *
     * @var int
     */
    protected $awayRotationNumber;
    /**
     * 
     *
     * @var bool
     */
    protected $neutralVenue;
    /**
     * 
     *
     * @var int
     */
    protected $refereeID;
    /**
     * 
     *
     * @var int
     */
    protected $overPayout;
    /**
     * 
     *
     * @var int
     */
    protected $underPayout;
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
     * @return string
     */
    public function getChannel() : string
    {
        return $this->channel;
    }
    /**
     * 
     *
     * @param string $channel
     *
     * @return self
     */
    public function setChannel(string $channel) : self
    {
        $this->channel = $channel;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPointSpread() : float
    {
        return $this->pointSpread;
    }
    /**
     * 
     *
     * @param float $pointSpread
     *
     * @return self
     */
    public function setPointSpread(float $pointSpread) : self
    {
        $this->pointSpread = $pointSpread;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOverUnder() : float
    {
        return $this->overUnder;
    }
    /**
     * 
     *
     * @param float $overUnder
     *
     * @return self
     */
    public function setOverUnder(float $overUnder) : self
    {
        $this->overUnder = $overUnder;
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
    public function getPossession() : string
    {
        return $this->possession;
    }
    /**
     * 
     *
     * @param string $possession
     *
     * @return self
     */
    public function setPossession(string $possession) : self
    {
        $this->possession = $possession;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDown() : int
    {
        return $this->down;
    }
    /**
     * 
     *
     * @param int $down
     *
     * @return self
     */
    public function setDown(int $down) : self
    {
        $this->down = $down;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDistance() : string
    {
        return $this->distance;
    }
    /**
     * 
     *
     * @param string $distance
     *
     * @return self
     */
    public function setDistance(string $distance) : self
    {
        $this->distance = $distance;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getYardLine() : int
    {
        return $this->yardLine;
    }
    /**
     * 
     *
     * @param int $yardLine
     *
     * @return self
     */
    public function setYardLine(int $yardLine) : self
    {
        $this->yardLine = $yardLine;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getYardLineTerritory() : string
    {
        return $this->yardLineTerritory;
    }
    /**
     * 
     *
     * @param string $yardLineTerritory
     *
     * @return self
     */
    public function setYardLineTerritory(string $yardLineTerritory) : self
    {
        $this->yardLineTerritory = $yardLineTerritory;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRedZone() : string
    {
        return $this->redZone;
    }
    /**
     * 
     *
     * @param string $redZone
     *
     * @return self
     */
    public function setRedZone(string $redZone) : self
    {
        $this->redZone = $redZone;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayScoreQuarter1() : int
    {
        return $this->awayScoreQuarter1;
    }
    /**
     * 
     *
     * @param int $awayScoreQuarter1
     *
     * @return self
     */
    public function setAwayScoreQuarter1(int $awayScoreQuarter1) : self
    {
        $this->awayScoreQuarter1 = $awayScoreQuarter1;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayScoreQuarter2() : int
    {
        return $this->awayScoreQuarter2;
    }
    /**
     * 
     *
     * @param int $awayScoreQuarter2
     *
     * @return self
     */
    public function setAwayScoreQuarter2(int $awayScoreQuarter2) : self
    {
        $this->awayScoreQuarter2 = $awayScoreQuarter2;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayScoreQuarter3() : int
    {
        return $this->awayScoreQuarter3;
    }
    /**
     * 
     *
     * @param int $awayScoreQuarter3
     *
     * @return self
     */
    public function setAwayScoreQuarter3(int $awayScoreQuarter3) : self
    {
        $this->awayScoreQuarter3 = $awayScoreQuarter3;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayScoreQuarter4() : int
    {
        return $this->awayScoreQuarter4;
    }
    /**
     * 
     *
     * @param int $awayScoreQuarter4
     *
     * @return self
     */
    public function setAwayScoreQuarter4(int $awayScoreQuarter4) : self
    {
        $this->awayScoreQuarter4 = $awayScoreQuarter4;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayScoreOvertime() : int
    {
        return $this->awayScoreOvertime;
    }
    /**
     * 
     *
     * @param int $awayScoreOvertime
     *
     * @return self
     */
    public function setAwayScoreOvertime(int $awayScoreOvertime) : self
    {
        $this->awayScoreOvertime = $awayScoreOvertime;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeScoreQuarter1() : int
    {
        return $this->homeScoreQuarter1;
    }
    /**
     * 
     *
     * @param int $homeScoreQuarter1
     *
     * @return self
     */
    public function setHomeScoreQuarter1(int $homeScoreQuarter1) : self
    {
        $this->homeScoreQuarter1 = $homeScoreQuarter1;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeScoreQuarter2() : int
    {
        return $this->homeScoreQuarter2;
    }
    /**
     * 
     *
     * @param int $homeScoreQuarter2
     *
     * @return self
     */
    public function setHomeScoreQuarter2(int $homeScoreQuarter2) : self
    {
        $this->homeScoreQuarter2 = $homeScoreQuarter2;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeScoreQuarter3() : int
    {
        return $this->homeScoreQuarter3;
    }
    /**
     * 
     *
     * @param int $homeScoreQuarter3
     *
     * @return self
     */
    public function setHomeScoreQuarter3(int $homeScoreQuarter3) : self
    {
        $this->homeScoreQuarter3 = $homeScoreQuarter3;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeScoreQuarter4() : int
    {
        return $this->homeScoreQuarter4;
    }
    /**
     * 
     *
     * @param int $homeScoreQuarter4
     *
     * @return self
     */
    public function setHomeScoreQuarter4(int $homeScoreQuarter4) : self
    {
        $this->homeScoreQuarter4 = $homeScoreQuarter4;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeScoreOvertime() : int
    {
        return $this->homeScoreOvertime;
    }
    /**
     * 
     *
     * @param int $homeScoreOvertime
     *
     * @return self
     */
    public function setHomeScoreOvertime(int $homeScoreOvertime) : self
    {
        $this->homeScoreOvertime = $homeScoreOvertime;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHasStarted() : bool
    {
        return $this->hasStarted;
    }
    /**
     * 
     *
     * @param bool $hasStarted
     *
     * @return self
     */
    public function setHasStarted(bool $hasStarted) : self
    {
        $this->hasStarted = $hasStarted;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsInProgress() : bool
    {
        return $this->isInProgress;
    }
    /**
     * 
     *
     * @param bool $isInProgress
     *
     * @return self
     */
    public function setIsInProgress(bool $isInProgress) : self
    {
        $this->isInProgress = $isInProgress;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsOver() : bool
    {
        return $this->isOver;
    }
    /**
     * 
     *
     * @param bool $isOver
     *
     * @return self
     */
    public function setIsOver(bool $isOver) : self
    {
        $this->isOver = $isOver;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHas1stQuarterStarted() : bool
    {
        return $this->has1stQuarterStarted;
    }
    /**
     * 
     *
     * @param bool $has1stQuarterStarted
     *
     * @return self
     */
    public function setHas1stQuarterStarted(bool $has1stQuarterStarted) : self
    {
        $this->has1stQuarterStarted = $has1stQuarterStarted;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHas2ndQuarterStarted() : bool
    {
        return $this->has2ndQuarterStarted;
    }
    /**
     * 
     *
     * @param bool $has2ndQuarterStarted
     *
     * @return self
     */
    public function setHas2ndQuarterStarted(bool $has2ndQuarterStarted) : self
    {
        $this->has2ndQuarterStarted = $has2ndQuarterStarted;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHas3rdQuarterStarted() : bool
    {
        return $this->has3rdQuarterStarted;
    }
    /**
     * 
     *
     * @param bool $has3rdQuarterStarted
     *
     * @return self
     */
    public function setHas3rdQuarterStarted(bool $has3rdQuarterStarted) : self
    {
        $this->has3rdQuarterStarted = $has3rdQuarterStarted;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHas4thQuarterStarted() : bool
    {
        return $this->has4thQuarterStarted;
    }
    /**
     * 
     *
     * @param bool $has4thQuarterStarted
     *
     * @return self
     */
    public function setHas4thQuarterStarted(bool $has4thQuarterStarted) : self
    {
        $this->has4thQuarterStarted = $has4thQuarterStarted;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsOvertime() : bool
    {
        return $this->isOvertime;
    }
    /**
     * 
     *
     * @param bool $isOvertime
     *
     * @return self
     */
    public function setIsOvertime(bool $isOvertime) : self
    {
        $this->isOvertime = $isOvertime;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDownAndDistance() : string
    {
        return $this->downAndDistance;
    }
    /**
     * 
     *
     * @param string $downAndDistance
     *
     * @return self
     */
    public function setDownAndDistance(string $downAndDistance) : self
    {
        $this->downAndDistance = $downAndDistance;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getQuarterDescription() : string
    {
        return $this->quarterDescription;
    }
    /**
     * 
     *
     * @param string $quarterDescription
     *
     * @return self
     */
    public function setQuarterDescription(string $quarterDescription) : self
    {
        $this->quarterDescription = $quarterDescription;
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
     * @return string
     */
    public function getLastUpdated() : string
    {
        return $this->lastUpdated;
    }
    /**
     * 
     *
     * @param string $lastUpdated
     *
     * @return self
     */
    public function setLastUpdated(string $lastUpdated) : self
    {
        $this->lastUpdated = $lastUpdated;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getGeoLat() : float
    {
        return $this->geoLat;
    }
    /**
     * 
     *
     * @param float $geoLat
     *
     * @return self
     */
    public function setGeoLat(float $geoLat) : self
    {
        $this->geoLat = $geoLat;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getGeoLong() : float
    {
        return $this->geoLong;
    }
    /**
     * 
     *
     * @param float $geoLong
     *
     * @return self
     */
    public function setGeoLong(float $geoLong) : self
    {
        $this->geoLong = $geoLong;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getForecastTempLow() : int
    {
        return $this->forecastTempLow;
    }
    /**
     * 
     *
     * @param int $forecastTempLow
     *
     * @return self
     */
    public function setForecastTempLow(int $forecastTempLow) : self
    {
        $this->forecastTempLow = $forecastTempLow;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getForecastTempHigh() : int
    {
        return $this->forecastTempHigh;
    }
    /**
     * 
     *
     * @param int $forecastTempHigh
     *
     * @return self
     */
    public function setForecastTempHigh(int $forecastTempHigh) : self
    {
        $this->forecastTempHigh = $forecastTempHigh;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getForecastDescription() : string
    {
        return $this->forecastDescription;
    }
    /**
     * 
     *
     * @param string $forecastDescription
     *
     * @return self
     */
    public function setForecastDescription(string $forecastDescription) : self
    {
        $this->forecastDescription = $forecastDescription;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getForecastWindChill() : int
    {
        return $this->forecastWindChill;
    }
    /**
     * 
     *
     * @param int $forecastWindChill
     *
     * @return self
     */
    public function setForecastWindChill(int $forecastWindChill) : self
    {
        $this->forecastWindChill = $forecastWindChill;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getForecastWindSpeed() : int
    {
        return $this->forecastWindSpeed;
    }
    /**
     * 
     *
     * @param int $forecastWindSpeed
     *
     * @return self
     */
    public function setForecastWindSpeed(int $forecastWindSpeed) : self
    {
        $this->forecastWindSpeed = $forecastWindSpeed;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayTeamMoneyLine() : int
    {
        return $this->awayTeamMoneyLine;
    }
    /**
     * 
     *
     * @param int $awayTeamMoneyLine
     *
     * @return self
     */
    public function setAwayTeamMoneyLine(int $awayTeamMoneyLine) : self
    {
        $this->awayTeamMoneyLine = $awayTeamMoneyLine;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeTeamMoneyLine() : int
    {
        return $this->homeTeamMoneyLine;
    }
    /**
     * 
     *
     * @param int $homeTeamMoneyLine
     *
     * @return self
     */
    public function setHomeTeamMoneyLine(int $homeTeamMoneyLine) : self
    {
        $this->homeTeamMoneyLine = $homeTeamMoneyLine;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getCanceled() : bool
    {
        return $this->canceled;
    }
    /**
     * 
     *
     * @param bool $canceled
     *
     * @return self
     */
    public function setCanceled(bool $canceled) : self
    {
        $this->canceled = $canceled;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getClosed() : bool
    {
        return $this->closed;
    }
    /**
     * 
     *
     * @param bool $closed
     *
     * @return self
     */
    public function setClosed(bool $closed) : self
    {
        $this->closed = $closed;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastPlay() : string
    {
        return $this->lastPlay;
    }
    /**
     * 
     *
     * @param string $lastPlay
     *
     * @return self
     */
    public function setLastPlay(string $lastPlay) : self
    {
        $this->lastPlay = $lastPlay;
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
     * @return int
     */
    public function getPointSpreadAwayTeamMoneyLine() : int
    {
        return $this->pointSpreadAwayTeamMoneyLine;
    }
    /**
     * 
     *
     * @param int $pointSpreadAwayTeamMoneyLine
     *
     * @return self
     */
    public function setPointSpreadAwayTeamMoneyLine(int $pointSpreadAwayTeamMoneyLine) : self
    {
        $this->pointSpreadAwayTeamMoneyLine = $pointSpreadAwayTeamMoneyLine;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPointSpreadHomeTeamMoneyLine() : int
    {
        return $this->pointSpreadHomeTeamMoneyLine;
    }
    /**
     * 
     *
     * @param int $pointSpreadHomeTeamMoneyLine
     *
     * @return self
     */
    public function setPointSpreadHomeTeamMoneyLine(int $pointSpreadHomeTeamMoneyLine) : self
    {
        $this->pointSpreadHomeTeamMoneyLine = $pointSpreadHomeTeamMoneyLine;
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
    public function getGameEndDateTime() : string
    {
        return $this->gameEndDateTime;
    }
    /**
     * 
     *
     * @param string $gameEndDateTime
     *
     * @return self
     */
    public function setGameEndDateTime(string $gameEndDateTime) : self
    {
        $this->gameEndDateTime = $gameEndDateTime;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeRotationNumber() : int
    {
        return $this->homeRotationNumber;
    }
    /**
     * 
     *
     * @param int $homeRotationNumber
     *
     * @return self
     */
    public function setHomeRotationNumber(int $homeRotationNumber) : self
    {
        $this->homeRotationNumber = $homeRotationNumber;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayRotationNumber() : int
    {
        return $this->awayRotationNumber;
    }
    /**
     * 
     *
     * @param int $awayRotationNumber
     *
     * @return self
     */
    public function setAwayRotationNumber(int $awayRotationNumber) : self
    {
        $this->awayRotationNumber = $awayRotationNumber;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getNeutralVenue() : bool
    {
        return $this->neutralVenue;
    }
    /**
     * 
     *
     * @param bool $neutralVenue
     *
     * @return self
     */
    public function setNeutralVenue(bool $neutralVenue) : self
    {
        $this->neutralVenue = $neutralVenue;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRefereeID() : int
    {
        return $this->refereeID;
    }
    /**
     * 
     *
     * @param int $refereeID
     *
     * @return self
     */
    public function setRefereeID(int $refereeID) : self
    {
        $this->refereeID = $refereeID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOverPayout() : int
    {
        return $this->overPayout;
    }
    /**
     * 
     *
     * @param int $overPayout
     *
     * @return self
     */
    public function setOverPayout(int $overPayout) : self
    {
        $this->overPayout = $overPayout;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUnderPayout() : int
    {
        return $this->underPayout;
    }
    /**
     * 
     *
     * @param int $underPayout
     *
     * @return self
     */
    public function setUnderPayout(int $underPayout) : self
    {
        $this->underPayout = $underPayout;
        return $this;
    }
}