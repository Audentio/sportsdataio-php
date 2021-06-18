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
     * @var string|null
     */
    protected $preseasonStartDate;
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
    protected $currentSeasonType;
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
     * @return string|null
     */
    public function getPreseasonStartDate() : ?string
    {
        return $this->preseasonStartDate;
    }
    /**
     * 
     *
     * @param string|null $preseasonStartDate
     *
     * @return self
     */
    public function setPreseasonStartDate(?string $preseasonStartDate) : self
    {
        $this->preseasonStartDate = $preseasonStartDate;
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
    public function getCurrentSeasonType() : ?string
    {
        return $this->currentSeasonType;
    }
    /**
     * 
     *
     * @param string|null $currentSeasonType
     *
     * @return self
     */
    public function setCurrentSeasonType(?string $currentSeasonType) : self
    {
        $this->currentSeasonType = $currentSeasonType;
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