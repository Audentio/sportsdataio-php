<?php

namespace Sportsdata\API\WNBA\Model;

class Season
{
    /**
     * 
     *
     * @var int
     */
    protected $year;
    /**
     * 
     *
     * @var string
     */
    protected $preseasonStartDate;
    /**
     * 
     *
     * @var string
     */
    protected $regularSeasonStartDate;
    /**
     * 
     *
     * @var string
     */
    protected $postSeasonStartDate;
    /**
     * 
     *
     * @var string
     */
    protected $currentSeasonType;
    /**
     * 
     *
     * @var string
     */
    protected $apiSeason;
    /**
     * 
     *
     * @return int
     */
    public function getYear() : int
    {
        return $this->year;
    }
    /**
     * 
     *
     * @param int $year
     *
     * @return self
     */
    public function setYear(int $year) : self
    {
        $this->year = $year;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPreseasonStartDate() : string
    {
        return $this->preseasonStartDate;
    }
    /**
     * 
     *
     * @param string $preseasonStartDate
     *
     * @return self
     */
    public function setPreseasonStartDate(string $preseasonStartDate) : self
    {
        $this->preseasonStartDate = $preseasonStartDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRegularSeasonStartDate() : string
    {
        return $this->regularSeasonStartDate;
    }
    /**
     * 
     *
     * @param string $regularSeasonStartDate
     *
     * @return self
     */
    public function setRegularSeasonStartDate(string $regularSeasonStartDate) : self
    {
        $this->regularSeasonStartDate = $regularSeasonStartDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPostSeasonStartDate() : string
    {
        return $this->postSeasonStartDate;
    }
    /**
     * 
     *
     * @param string $postSeasonStartDate
     *
     * @return self
     */
    public function setPostSeasonStartDate(string $postSeasonStartDate) : self
    {
        $this->postSeasonStartDate = $postSeasonStartDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCurrentSeasonType() : string
    {
        return $this->currentSeasonType;
    }
    /**
     * 
     *
     * @param string $currentSeasonType
     *
     * @return self
     */
    public function setCurrentSeasonType(string $currentSeasonType) : self
    {
        $this->currentSeasonType = $currentSeasonType;
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
}