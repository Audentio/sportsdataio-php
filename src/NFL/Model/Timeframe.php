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
     * @var int|null
     */
    protected $week;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $shortName;
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
    protected $endDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $firstGameStart;
    /**
     * 
     *
     * @var string|null
     */
    protected $firstGameEnd;
    /**
     * 
     *
     * @var string|null
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
     * @var string|null
     */
    protected $apiSeason;
    /**
     * 
     *
     * @var string|null
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
     * @return int|null
     */
    public function getWeek() : ?int
    {
        return $this->week;
    }
    /**
     * 
     *
     * @param int|null $week
     *
     * @return self
     */
    public function setWeek(?int $week) : self
    {
        $this->week = $week;
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
     * @return string|null
     */
    public function getShortName() : ?string
    {
        return $this->shortName;
    }
    /**
     * 
     *
     * @param string|null $shortName
     *
     * @return self
     */
    public function setShortName(?string $shortName) : self
    {
        $this->shortName = $shortName;
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
    public function getEndDate() : ?string
    {
        return $this->endDate;
    }
    /**
     * 
     *
     * @param string|null $endDate
     *
     * @return self
     */
    public function setEndDate(?string $endDate) : self
    {
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFirstGameStart() : ?string
    {
        return $this->firstGameStart;
    }
    /**
     * 
     *
     * @param string|null $firstGameStart
     *
     * @return self
     */
    public function setFirstGameStart(?string $firstGameStart) : self
    {
        $this->firstGameStart = $firstGameStart;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFirstGameEnd() : ?string
    {
        return $this->firstGameEnd;
    }
    /**
     * 
     *
     * @param string|null $firstGameEnd
     *
     * @return self
     */
    public function setFirstGameEnd(?string $firstGameEnd) : self
    {
        $this->firstGameEnd = $firstGameEnd;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLastGameEnd() : ?string
    {
        return $this->lastGameEnd;
    }
    /**
     * 
     *
     * @param string|null $lastGameEnd
     *
     * @return self
     */
    public function setLastGameEnd(?string $lastGameEnd) : self
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
     * @return string|null
     */
    public function getApiSeason() : ?string
    {
        return $this->apiSeason;
    }
    /**
     * 
     *
     * @param string|null $apiSeason
     *
     * @return self
     */
    public function setApiSeason(?string $apiSeason) : self
    {
        $this->apiSeason = $apiSeason;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getApiWeek() : ?string
    {
        return $this->apiWeek;
    }
    /**
     * 
     *
     * @param string|null $apiWeek
     *
     * @return self
     */
    public function setApiWeek(?string $apiWeek) : self
    {
        $this->apiWeek = $apiWeek;
        return $this;
    }
}