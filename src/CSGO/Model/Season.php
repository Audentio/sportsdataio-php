<?php

namespace Sportsdata\API\CSGO\Model;

class Season
{
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
    protected $competitionId;
    /**
     * 
     *
     * @var int
     */
    protected $season;
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
    protected $competitionName;
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
     * @var bool
     */
    protected $currentSeason;
    /**
     * 
     *
     * @var Round[]
     */
    protected $rounds;
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
    public function getCompetitionId() : int
    {
        return $this->competitionId;
    }
    /**
     * 
     *
     * @param int $competitionId
     *
     * @return self
     */
    public function setCompetitionId(int $competitionId) : self
    {
        $this->competitionId = $competitionId;
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
    public function getCompetitionName() : ?string
    {
        return $this->competitionName;
    }
    /**
     * 
     *
     * @param string|null $competitionName
     *
     * @return self
     */
    public function setCompetitionName(?string $competitionName) : self
    {
        $this->competitionName = $competitionName;
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
     * @return bool
     */
    public function getCurrentSeason() : bool
    {
        return $this->currentSeason;
    }
    /**
     * 
     *
     * @param bool $currentSeason
     *
     * @return self
     */
    public function setCurrentSeason(bool $currentSeason) : self
    {
        $this->currentSeason = $currentSeason;
        return $this;
    }
    /**
     * 
     *
     * @return Round[]
     */
    public function getRounds() : array
    {
        return $this->rounds;
    }
    /**
     * 
     *
     * @param Round[] $rounds
     *
     * @return self
     */
    public function setRounds(array $rounds) : self
    {
        $this->rounds = $rounds;
        return $this;
    }
}