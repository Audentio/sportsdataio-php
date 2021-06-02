<?php

namespace Sportsdata\API\NFL\Model;

class Timeframe
{
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
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $shortName;
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
    protected $endDate;
    /**
     * 
     *
     * @var string
     */
    protected $firstGameStart;
    /**
     * 
     *
     * @var string
     */
    protected $firstGameEnd;
    /**
     * 
     *
     * @var string
     */
    protected $lastGameEnd;
    /**
     * 
     *
     * @var bool
     */
    protected $hasGames;
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
    protected $hasEnded;
    /**
     * 
     *
     * @var bool
     */
    protected $hasFirstGameStarted;
    /**
     * 
     *
     * @var bool
     */
    protected $hasFirstGameEnded;
    /**
     * 
     *
     * @var bool
     */
    protected $hasLastGameEnded;
    /**
     * 
     *
     * @var string
     */
    protected $apiSeason;
    /**
     * 
     *
     * @var string
     */
    protected $apiWeek;
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
     * @return string
     */
    public function getShortName() : string
    {
        return $this->shortName;
    }
    /**
     * 
     *
     * @param string $shortName
     *
     * @return self
     */
    public function setShortName(string $shortName) : self
    {
        $this->shortName = $shortName;
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
    public function getEndDate() : string
    {
        return $this->endDate;
    }
    /**
     * 
     *
     * @param string $endDate
     *
     * @return self
     */
    public function setEndDate(string $endDate) : self
    {
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFirstGameStart() : string
    {
        return $this->firstGameStart;
    }
    /**
     * 
     *
     * @param string $firstGameStart
     *
     * @return self
     */
    public function setFirstGameStart(string $firstGameStart) : self
    {
        $this->firstGameStart = $firstGameStart;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFirstGameEnd() : string
    {
        return $this->firstGameEnd;
    }
    /**
     * 
     *
     * @param string $firstGameEnd
     *
     * @return self
     */
    public function setFirstGameEnd(string $firstGameEnd) : self
    {
        $this->firstGameEnd = $firstGameEnd;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastGameEnd() : string
    {
        return $this->lastGameEnd;
    }
    /**
     * 
     *
     * @param string $lastGameEnd
     *
     * @return self
     */
    public function setLastGameEnd(string $lastGameEnd) : self
    {
        $this->lastGameEnd = $lastGameEnd;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHasGames() : bool
    {
        return $this->hasGames;
    }
    /**
     * 
     *
     * @param bool $hasGames
     *
     * @return self
     */
    public function setHasGames(bool $hasGames) : self
    {
        $this->hasGames = $hasGames;
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
    public function getHasEnded() : bool
    {
        return $this->hasEnded;
    }
    /**
     * 
     *
     * @param bool $hasEnded
     *
     * @return self
     */
    public function setHasEnded(bool $hasEnded) : self
    {
        $this->hasEnded = $hasEnded;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHasFirstGameStarted() : bool
    {
        return $this->hasFirstGameStarted;
    }
    /**
     * 
     *
     * @param bool $hasFirstGameStarted
     *
     * @return self
     */
    public function setHasFirstGameStarted(bool $hasFirstGameStarted) : self
    {
        $this->hasFirstGameStarted = $hasFirstGameStarted;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHasFirstGameEnded() : bool
    {
        return $this->hasFirstGameEnded;
    }
    /**
     * 
     *
     * @param bool $hasFirstGameEnded
     *
     * @return self
     */
    public function setHasFirstGameEnded(bool $hasFirstGameEnded) : self
    {
        $this->hasFirstGameEnded = $hasFirstGameEnded;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHasLastGameEnded() : bool
    {
        return $this->hasLastGameEnded;
    }
    /**
     * 
     *
     * @param bool $hasLastGameEnded
     *
     * @return self
     */
    public function setHasLastGameEnded(bool $hasLastGameEnded) : self
    {
        $this->hasLastGameEnded = $hasLastGameEnded;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getApiSeason() : string
    {
        return $this->apiSeason;
    }
    /**
     * 
     *
     * @param string $apiSeason
     *
     * @return self
     */
    public function setApiSeason(string $apiSeason) : self
    {
        $this->apiSeason = $apiSeason;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getApiWeek() : string
    {
        return $this->apiWeek;
    }
    /**
     * 
     *
     * @param string $apiWeek
     *
     * @return self
     */
    public function setApiWeek(string $apiWeek) : self
    {
        $this->apiWeek = $apiWeek;
        return $this;
    }
}