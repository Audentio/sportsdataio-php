<?php

namespace Sportsdata\API\MLB\Model;

class BettingEvent
{
    /**
     * 
     *
     * @var int
     */
    protected $bettingEventID;
    /**
     * 
     *
     * @var string
     */
    protected $name;
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
    protected $bettingEventTypeID;
    /**
     * 
     *
     * @var string
     */
    protected $bettingEventType;
    /**
     * 
     *
     * @var string
     */
    protected $startDate;
    /**
     * 
     *
     * @var string
     */
    protected $created;
    /**
     * 
     *
     * @var string
     */
    protected $updated;
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
    protected $globalGameID;
    /**
     * 
     *
     * @var string
     */
    protected $gameStatus;
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
     * @var int
     */
    protected $totalScore;
    /**
     * 
     *
     * @var int
     */
    protected $awayRotationNumber;
    /**
     * 
     *
     * @var int
     */
    protected $homeRotationNumber;
    /**
     * 
     *
     * @var BettingMarket[]
     */
    protected $bettingMarkets;
    /**
     * 
     *
     * @return int
     */
    public function getBettingEventID() : int
    {
        return $this->bettingEventID;
    }
    /**
     * 
     *
     * @param int $bettingEventID
     *
     * @return self
     */
    public function setBettingEventID(int $bettingEventID) : self
    {
        $this->bettingEventID = $bettingEventID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
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
    public function getBettingEventTypeID() : int
    {
        return $this->bettingEventTypeID;
    }
    /**
     * 
     *
     * @param int $bettingEventTypeID
     *
     * @return self
     */
    public function setBettingEventTypeID(int $bettingEventTypeID) : self
    {
        $this->bettingEventTypeID = $bettingEventTypeID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBettingEventType() : string
    {
        return $this->bettingEventType;
    }
    /**
     * 
     *
     * @param string $bettingEventType
     *
     * @return self
     */
    public function setBettingEventType(string $bettingEventType) : self
    {
        $this->bettingEventType = $bettingEventType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStartDate() : string
    {
        return $this->startDate;
    }
    /**
     * 
     *
     * @param string $startDate
     *
     * @return self
     */
    public function setStartDate(string $startDate) : self
    {
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCreated() : string
    {
        return $this->created;
    }
    /**
     * 
     *
     * @param string $created
     *
     * @return self
     */
    public function setCreated(string $created) : self
    {
        $this->created = $created;
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
     * @return string
     */
    public function getGameStatus() : string
    {
        return $this->gameStatus;
    }
    /**
     * 
     *
     * @param string $gameStatus
     *
     * @return self
     */
    public function setGameStatus(string $gameStatus) : self
    {
        $this->gameStatus = $gameStatus;
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
     * @return int
     */
    public function getTotalScore() : int
    {
        return $this->totalScore;
    }
    /**
     * 
     *
     * @param int $totalScore
     *
     * @return self
     */
    public function setTotalScore(int $totalScore) : self
    {
        $this->totalScore = $totalScore;
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
     * @return BettingMarket[]
     */
    public function getBettingMarkets() : array
    {
        return $this->bettingMarkets;
    }
    /**
     * 
     *
     * @param BettingMarket[] $bettingMarkets
     *
     * @return self
     */
    public function setBettingMarkets(array $bettingMarkets) : self
    {
        $this->bettingMarkets = $bettingMarkets;
        return $this;
    }
}