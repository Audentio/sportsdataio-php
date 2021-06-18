<?php

namespace Sportsdata\API\CBB\Model;

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
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var int|null
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
     * @var string|null
     */
    protected $bettingEventType;
    /**
     * 
     *
     * @var string|null
     */
    protected $startDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $created;
    /**
     * 
     *
     * @var string|null
     */
    protected $updated;
    /**
     * 
     *
     * @var int|null
     */
    protected $gameID;
    /**
     * 
     *
     * @var int|null
     */
    protected $globalGameID;
    /**
     * 
     *
     * @var string|null
     */
    protected $gameStatus;
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
     * @var int|null
     */
    protected $totalScore;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayRotationNumber;
    /**
     * 
     *
     * @var int|null
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
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSeason() : ?int
    {
        return $this->season;
    }
    /**
     * 
     *
     * @param int|null $season
     *
     * @return self
     */
    public function setSeason(?int $season) : self
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
     * @return string|null
     */
    public function getBettingEventType() : ?string
    {
        return $this->bettingEventType;
    }
    /**
     * 
     *
     * @param string|null $bettingEventType
     *
     * @return self
     */
    public function setBettingEventType(?string $bettingEventType) : self
    {
        $this->bettingEventType = $bettingEventType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStartDate() : ?string
    {
        return $this->startDate;
    }
    /**
     * 
     *
     * @param string|null $startDate
     *
     * @return self
     */
    public function setStartDate(?string $startDate) : self
    {
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCreated() : ?string
    {
        return $this->created;
    }
    /**
     * 
     *
     * @param string|null $created
     *
     * @return self
     */
    public function setCreated(?string $created) : self
    {
        $this->created = $created;
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
     * @return int|null
     */
    public function getGameID() : ?int
    {
        return $this->gameID;
    }
    /**
     * 
     *
     * @param int|null $gameID
     *
     * @return self
     */
    public function setGameID(?int $gameID) : self
    {
        $this->gameID = $gameID;
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
     * @return string|null
     */
    public function getGameStatus() : ?string
    {
        return $this->gameStatus;
    }
    /**
     * 
     *
     * @param string|null $gameStatus
     *
     * @return self
     */
    public function setGameStatus(?string $gameStatus) : self
    {
        $this->gameStatus = $gameStatus;
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
     * @return int|null
     */
    public function getTotalScore() : ?int
    {
        return $this->totalScore;
    }
    /**
     * 
     *
     * @param int|null $totalScore
     *
     * @return self
     */
    public function setTotalScore(?int $totalScore) : self
    {
        $this->totalScore = $totalScore;
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