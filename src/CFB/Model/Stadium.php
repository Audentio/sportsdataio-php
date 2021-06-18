<?php

namespace Sportsdata\API\CFB\Model;

class Stadium
{
    /**
     * 
     *
     * @var int
     */
    protected $stadiumID;
    /**
     * 
     *
     * @var bool
     */
    protected $active;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var bool
     */
    protected $dome;
    /**
     * 
     *
     * @var string|null
     */
    protected $city;
    /**
     * 
     *
     * @var string|null
     */
    protected $state;
    /**
     * 
     *
     * @var float|null
     */
    protected $geoLat;
    /**
     * 
     *
     * @var float|null
     */
    protected $geoLong;
    /**
     * 
     *
     * @return int
     */
    public function getStadiumID() : int
    {
        return $this->stadiumID;
    }
    /**
     * 
     *
     * @param int $stadiumID
     *
     * @return self
     */
    public function setStadiumID(int $stadiumID) : self
    {
        $this->stadiumID = $stadiumID;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getActive() : bool
    {
        return $this->active;
    }
    /**
     * 
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active) : self
    {
        $this->active = $active;
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
     * @return bool
     */
    public function getDome() : bool
    {
        return $this->dome;
    }
    /**
     * 
     *
     * @param bool $dome
     *
     * @return self
     */
    public function setDome(bool $dome) : self
    {
        $this->dome = $dome;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCity() : ?string
    {
        return $this->city;
    }
    /**
     * 
     *
     * @param string|null $city
     *
     * @return self
     */
    public function setCity(?string $city) : self
    {
        $this->city = $city;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getState() : ?string
    {
        return $this->state;
    }
    /**
     * 
     *
     * @param string|null $state
     *
     * @return self
     */
    public function setState(?string $state) : self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getGeoLat() : ?float
    {
        return $this->geoLat;
    }
    /**
     * 
     *
     * @param float|null $geoLat
     *
     * @return self
     */
    public function setGeoLat(?float $geoLat) : self
    {
        $this->geoLat = $geoLat;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getGeoLong() : ?float
    {
        return $this->geoLong;
    }
    /**
     * 
     *
     * @param float|null $geoLong
     *
     * @return self
     */
    public function setGeoLong(?float $geoLong) : self
    {
        $this->geoLong = $geoLong;
        return $this;
    }
}