<?php

namespace Sportsdata\API\Nascar\Model;

class Series
{
    /**
     * 
     *
     * @var int
     */
    protected $seriesID;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @return int
     */
    public function getSeriesID() : int
    {
        return $this->seriesID;
    }
    /**
     * 
     *
     * @param int $seriesID
     *
     * @return self
     */
    public function setSeriesID(int $seriesID) : self
    {
        $this->seriesID = $seriesID;
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
}