<?php

namespace Sportsdata\API\CFB\Model;

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
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var string
     */
    protected $apiSeason;
    /**
     * 
     *
     * @var int
     */
    protected $apiWeek;
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
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
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
     * @return int
     */
    public function getApiWeek() : int
    {
        return $this->apiWeek;
    }
    /**
     * 
     *
     * @param int $apiWeek
     *
     * @return self
     */
    public function setApiWeek(int $apiWeek) : self
    {
        $this->apiWeek = $apiWeek;
        return $this;
    }
}