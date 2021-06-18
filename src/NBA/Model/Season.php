<?php

namespace Sportsdata\API\NBA\Model;

class Season
{
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
    protected $startYear;
    /**
     * 
     *
     * @var int
     */
    protected $endYear;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var string|null
     */
    protected $regularSeasonStartDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $postSeasonStartDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $seasonType;
    /**
     * 
     *
     * @var string|null
     */
    protected $apiSeason;
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
    public function getStartYear() : int
    {
        return $this->startYear;
    }
    /**
     * 
     *
     * @param int $startYear
     *
     * @return self
     */
    public function setStartYear(int $startYear) : self
    {
        $this->startYear = $startYear;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getEndYear() : int
    {
        return $this->endYear;
    }
    /**
     * 
     *
     * @param int $endYear
     *
     * @return self
     */
    public function setEndYear(int $endYear) : self
    {
        $this->endYear = $endYear;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRegularSeasonStartDate() : ?string
    {
        return $this->regularSeasonStartDate;
    }
    /**
     * 
     *
     * @param string|null $regularSeasonStartDate
     *
     * @return self
     */
    public function setRegularSeasonStartDate(?string $regularSeasonStartDate) : self
    {
        $this->regularSeasonStartDate = $regularSeasonStartDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPostSeasonStartDate() : ?string
    {
        return $this->postSeasonStartDate;
    }
    /**
     * 
     *
     * @param string|null $postSeasonStartDate
     *
     * @return self
     */
    public function setPostSeasonStartDate(?string $postSeasonStartDate) : self
    {
        $this->postSeasonStartDate = $postSeasonStartDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSeasonType() : ?string
    {
        return $this->seasonType;
    }
    /**
     * 
     *
     * @param string|null $seasonType
     *
     * @return self
     */
    public function setSeasonType(?string $seasonType) : self
    {
        $this->seasonType = $seasonType;
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
}