<?php

namespace Sportsdata\API\CSGO\Model;

class Round
{
    /**
     * 
     *
     * @var int
     */
    protected $roundId;
    /**
     * 
     *
     * @var int
     */
    protected $seasonId;
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
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
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
     * @var int|null
     */
    protected $currentWeek;
    /**
     * 
     *
     * @var bool
     */
    protected $currentRound;
    /**
     * 
     *
     * @return int
     */
    public function getRoundId() : int
    {
        return $this->roundId;
    }
    /**
     * 
     *
     * @param int $roundId
     *
     * @return self
     */
    public function setRoundId(int $roundId) : self
    {
        $this->roundId = $roundId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSeasonId() : int
    {
        return $this->seasonId;
    }
    /**
     * 
     *
     * @param int $seasonId
     *
     * @return self
     */
    public function setSeasonId(int $seasonId) : self
    {
        $this->seasonId = $seasonId;
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
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->type = $type;
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
     * @return int|null
     */
    public function getCurrentWeek() : ?int
    {
        return $this->currentWeek;
    }
    /**
     * 
     *
     * @param int|null $currentWeek
     *
     * @return self
     */
    public function setCurrentWeek(?int $currentWeek) : self
    {
        $this->currentWeek = $currentWeek;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getCurrentRound() : bool
    {
        return $this->currentRound;
    }
    /**
     * 
     *
     * @param bool $currentRound
     *
     * @return self
     */
    public function setCurrentRound(bool $currentRound) : self
    {
        $this->currentRound = $currentRound;
        return $this;
    }
}