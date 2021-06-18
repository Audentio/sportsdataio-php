<?php

namespace Sportsdata\API\NFL\Model;

class Score
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
     * @var int|null
     */
    protected $awayScore;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeScore;
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
     * @var string|null
     */
    protected $quarter;
    /**
     * 
     *
     * @var string|null
     */
    protected $timeRemaining;
    /**
     * 
     *
     * @var string|null
     */
    protected $possession;
    /**
     * 
     *
     * @var int|null
     */
    protected $down;
    /**
     * 
     *
     * @var string|null
     */
    protected $distance;
    /**
     * 
     *
     * @var int|null
     */
    protected $yardLine;
    /**
     * 
     *
     * @var string|null
     */
    protected $yardLineTerritory;
    /**
     * 
     *
     * @var string|null
     */
    protected $redZone;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayScoreQuarter1;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayScoreQuarter2;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayScoreQuarter3;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayScoreQuarter4;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayScoreOvertime;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeScoreQuarter1;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeScoreQuarter2;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeScoreQuarter3;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeScoreQuarter4;
    /**
     * 
     *
     * @var int|null
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
     * @var string|null
     */
    protected $downAndDistance;
    /**
     * 
     *
     * @var string|null
     */
    protected $quarterDescription;
    /**
     * 
     *
     * @var int|null
     */
    protected $stadiumID;
    /**
     * 
     *
     * @var string|null
     */
    protected $lastUpdated;
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
     * @var bool|null
     */
    protected $canceled;
    /**
     * 
     *
     * @var bool|null
     */
    protected $closed;
    /**
     * 
     *
     * @var string|null
     */
    protected $lastPlay;
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
     * @var int|null
     */
    protected $pointSpreadAwayTeamMoneyLine;
    /**
     * 
     *
     * @var int|null
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
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @var string|null
     */
    protected $gameEndDateTime;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeRotationNumber;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayRotationNumber;
    /**
     * 
     *
     * @var bool|null
     */
    protected $neutralVenue;
    /**
     * 
     *
     * @var int|null
     */
    protected $refereeID;
    /**
     * 
     *
     * @var int|null
     */
    protected $overPayout;
    /**
     * 
     *
     * @var int|null
     */
    protected $underPayout;
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
     * @return int|null
     */
    public function getAwayScore() : ?int
    {
        return $this->awayScore;
    }
    /**
     * 
     *
     * @param int|null $awayScore
     *
     * @return self
     */
    public function setAwayScore(?int $awayScore) : self
    {
        $this->awayScore = $awayScore;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeScore() : ?int
    {
        return $this->homeScore;
    }
    /**
     * 
     *
     * @param int|null $homeScore
     *
     * @return self
     */
    public function setHomeScore(?int $homeScore) : self
    {
        $this->homeScore = $homeScore;
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
     * @return string|null
     */
    public function getQuarter() : ?string
    {
        return $this->quarter;
    }
    /**
     * 
     *
     * @param string|null $quarter
     *
     * @return self
     */
    public function setQuarter(?string $quarter) : self
    {
        $this->quarter = $quarter;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTimeRemaining() : ?string
    {
        return $this->timeRemaining;
    }
    /**
     * 
     *
     * @param string|null $timeRemaining
     *
     * @return self
     */
    public function setTimeRemaining(?string $timeRemaining) : self
    {
        $this->timeRemaining = $timeRemaining;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPossession() : ?string
    {
        return $this->possession;
    }
    /**
     * 
     *
     * @param string|null $possession
     *
     * @return self
     */
    public function setPossession(?string $possession) : self
    {
        $this->possession = $possession;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDown() : ?int
    {
        return $this->down;
    }
    /**
     * 
     *
     * @param int|null $down
     *
     * @return self
     */
    public function setDown(?int $down) : self
    {
        $this->down = $down;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDistance() : ?string
    {
        return $this->distance;
    }
    /**
     * 
     *
     * @param string|null $distance
     *
     * @return self
     */
    public function setDistance(?string $distance) : self
    {
        $this->distance = $distance;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getYardLine() : ?int
    {
        return $this->yardLine;
    }
    /**
     * 
     *
     * @param int|null $yardLine
     *
     * @return self
     */
    public function setYardLine(?int $yardLine) : self
    {
        $this->yardLine = $yardLine;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getYardLineTerritory() : ?string
    {
        return $this->yardLineTerritory;
    }
    /**
     * 
     *
     * @param string|null $yardLineTerritory
     *
     * @return self
     */
    public function setYardLineTerritory(?string $yardLineTerritory) : self
    {
        $this->yardLineTerritory = $yardLineTerritory;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRedZone() : ?string
    {
        return $this->redZone;
    }
    /**
     * 
     *
     * @param string|null $redZone
     *
     * @return self
     */
    public function setRedZone(?string $redZone) : self
    {
        $this->redZone = $redZone;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayScoreQuarter1() : ?int
    {
        return $this->awayScoreQuarter1;
    }
    /**
     * 
     *
     * @param int|null $awayScoreQuarter1
     *
     * @return self
     */
    public function setAwayScoreQuarter1(?int $awayScoreQuarter1) : self
    {
        $this->awayScoreQuarter1 = $awayScoreQuarter1;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayScoreQuarter2() : ?int
    {
        return $this->awayScoreQuarter2;
    }
    /**
     * 
     *
     * @param int|null $awayScoreQuarter2
     *
     * @return self
     */
    public function setAwayScoreQuarter2(?int $awayScoreQuarter2) : self
    {
        $this->awayScoreQuarter2 = $awayScoreQuarter2;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayScoreQuarter3() : ?int
    {
        return $this->awayScoreQuarter3;
    }
    /**
     * 
     *
     * @param int|null $awayScoreQuarter3
     *
     * @return self
     */
    public function setAwayScoreQuarter3(?int $awayScoreQuarter3) : self
    {
        $this->awayScoreQuarter3 = $awayScoreQuarter3;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayScoreQuarter4() : ?int
    {
        return $this->awayScoreQuarter4;
    }
    /**
     * 
     *
     * @param int|null $awayScoreQuarter4
     *
     * @return self
     */
    public function setAwayScoreQuarter4(?int $awayScoreQuarter4) : self
    {
        $this->awayScoreQuarter4 = $awayScoreQuarter4;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayScoreOvertime() : ?int
    {
        return $this->awayScoreOvertime;
    }
    /**
     * 
     *
     * @param int|null $awayScoreOvertime
     *
     * @return self
     */
    public function setAwayScoreOvertime(?int $awayScoreOvertime) : self
    {
        $this->awayScoreOvertime = $awayScoreOvertime;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeScoreQuarter1() : ?int
    {
        return $this->homeScoreQuarter1;
    }
    /**
     * 
     *
     * @param int|null $homeScoreQuarter1
     *
     * @return self
     */
    public function setHomeScoreQuarter1(?int $homeScoreQuarter1) : self
    {
        $this->homeScoreQuarter1 = $homeScoreQuarter1;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeScoreQuarter2() : ?int
    {
        return $this->homeScoreQuarter2;
    }
    /**
     * 
     *
     * @param int|null $homeScoreQuarter2
     *
     * @return self
     */
    public function setHomeScoreQuarter2(?int $homeScoreQuarter2) : self
    {
        $this->homeScoreQuarter2 = $homeScoreQuarter2;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeScoreQuarter3() : ?int
    {
        return $this->homeScoreQuarter3;
    }
    /**
     * 
     *
     * @param int|null $homeScoreQuarter3
     *
     * @return self
     */
    public function setHomeScoreQuarter3(?int $homeScoreQuarter3) : self
    {
        $this->homeScoreQuarter3 = $homeScoreQuarter3;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeScoreQuarter4() : ?int
    {
        return $this->homeScoreQuarter4;
    }
    /**
     * 
     *
     * @param int|null $homeScoreQuarter4
     *
     * @return self
     */
    public function setHomeScoreQuarter4(?int $homeScoreQuarter4) : self
    {
        $this->homeScoreQuarter4 = $homeScoreQuarter4;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeScoreOvertime() : ?int
    {
        return $this->homeScoreOvertime;
    }
    /**
     * 
     *
     * @param int|null $homeScoreOvertime
     *
     * @return self
     */
    public function setHomeScoreOvertime(?int $homeScoreOvertime) : self
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
     * @return string|null
     */
    public function getDownAndDistance() : ?string
    {
        return $this->downAndDistance;
    }
    /**
     * 
     *
     * @param string|null $downAndDistance
     *
     * @return self
     */
    public function setDownAndDistance(?string $downAndDistance) : self
    {
        $this->downAndDistance = $downAndDistance;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getQuarterDescription() : ?string
    {
        return $this->quarterDescription;
    }
    /**
     * 
     *
     * @param string|null $quarterDescription
     *
     * @return self
     */
    public function setQuarterDescription(?string $quarterDescription) : self
    {
        $this->quarterDescription = $quarterDescription;
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
     * @return string|null
     */
    public function getLastUpdated() : ?string
    {
        return $this->lastUpdated;
    }
    /**
     * 
     *
     * @param string|null $lastUpdated
     *
     * @return self
     */
    public function setLastUpdated(?string $lastUpdated) : self
    {
        $this->lastUpdated = $lastUpdated;
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
     * @return bool|null
     */
    public function getClosed() : ?bool
    {
        return $this->closed;
    }
    /**
     * 
     *
     * @param bool|null $closed
     *
     * @return self
     */
    public function setClosed(?bool $closed) : self
    {
        $this->closed = $closed;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLastPlay() : ?string
    {
        return $this->lastPlay;
    }
    /**
     * 
     *
     * @param string|null $lastPlay
     *
     * @return self
     */
    public function setLastPlay(?string $lastPlay) : self
    {
        $this->lastPlay = $lastPlay;
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
     * @return int|null
     */
    public function getPointSpreadAwayTeamMoneyLine() : ?int
    {
        return $this->pointSpreadAwayTeamMoneyLine;
    }
    /**
     * 
     *
     * @param int|null $pointSpreadAwayTeamMoneyLine
     *
     * @return self
     */
    public function setPointSpreadAwayTeamMoneyLine(?int $pointSpreadAwayTeamMoneyLine) : self
    {
        $this->pointSpreadAwayTeamMoneyLine = $pointSpreadAwayTeamMoneyLine;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPointSpreadHomeTeamMoneyLine() : ?int
    {
        return $this->pointSpreadHomeTeamMoneyLine;
    }
    /**
     * 
     *
     * @param int|null $pointSpreadHomeTeamMoneyLine
     *
     * @return self
     */
    public function setPointSpreadHomeTeamMoneyLine(?int $pointSpreadHomeTeamMoneyLine) : self
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
    public function getGameEndDateTime() : ?string
    {
        return $this->gameEndDateTime;
    }
    /**
     * 
     *
     * @param string|null $gameEndDateTime
     *
     * @return self
     */
    public function setGameEndDateTime(?string $gameEndDateTime) : self
    {
        $this->gameEndDateTime = $gameEndDateTime;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeRotationNumber() : ?int
    {
        return $this->homeRotationNumber;
    }
    /**
     * 
     *
     * @param int|null $homeRotationNumber
     *
     * @return self
     */
    public function setHomeRotationNumber(?int $homeRotationNumber) : self
    {
        $this->homeRotationNumber = $homeRotationNumber;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayRotationNumber() : ?int
    {
        return $this->awayRotationNumber;
    }
    /**
     * 
     *
     * @param int|null $awayRotationNumber
     *
     * @return self
     */
    public function setAwayRotationNumber(?int $awayRotationNumber) : self
    {
        $this->awayRotationNumber = $awayRotationNumber;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getNeutralVenue() : ?bool
    {
        return $this->neutralVenue;
    }
    /**
     * 
     *
     * @param bool|null $neutralVenue
     *
     * @return self
     */
    public function setNeutralVenue(?bool $neutralVenue) : self
    {
        $this->neutralVenue = $neutralVenue;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRefereeID() : ?int
    {
        return $this->refereeID;
    }
    /**
     * 
     *
     * @param int|null $refereeID
     *
     * @return self
     */
    public function setRefereeID(?int $refereeID) : self
    {
        $this->refereeID = $refereeID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOverPayout() : ?int
    {
        return $this->overPayout;
    }
    /**
     * 
     *
     * @param int|null $overPayout
     *
     * @return self
     */
    public function setOverPayout(?int $overPayout) : self
    {
        $this->overPayout = $overPayout;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUnderPayout() : ?int
    {
        return $this->underPayout;
    }
    /**
     * 
     *
     * @param int|null $underPayout
     *
     * @return self
     */
    public function setUnderPayout(?int $underPayout) : self
    {
        $this->underPayout = $underPayout;
        return $this;
    }
}