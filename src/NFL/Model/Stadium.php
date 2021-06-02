<?php

namespace Sportsdata\API\NFL\Model;

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
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $city;
    /**
     * 
     *
     * @var string
     */
    protected $state;
    /**
     * 
     *
     * @var string
     */
    protected $country;
    /**
     * 
     *
     * @var int
     */
    protected $capacity;
    /**
     * 
     *
     * @var string
     */
    protected $playingSurface;
    /**
     * 
     *
     * @var float
     */
    protected $geoLat;
    /**
     * 
     *
     * @var float
     */
    protected $geoLong;
    /**
     * 
     *
     * @var string
     */
    protected $type;
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
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * 
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city) : self
    {
        $this->city = $city;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * 
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCountry() : string
    {
        return $this->country;
    }
    /**
     * 
     *
     * @param string $country
     *
     * @return self
     */
    public function setCountry(string $country) : self
    {
        $this->country = $country;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCapacity() : int
    {
        return $this->capacity;
    }
    /**
     * 
     *
     * @param int $capacity
     *
     * @return self
     */
    public function setCapacity(int $capacity) : self
    {
        $this->capacity = $capacity;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPlayingSurface() : string
    {
        return $this->playingSurface;
    }
    /**
     * 
     *
     * @param string $playingSurface
     *
     * @return self
     */
    public function setPlayingSurface(string $playingSurface) : self
    {
        $this->playingSurface = $playingSurface;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getGeoLat() : float
    {
        return $this->geoLat;
    }
    /**
     * 
     *
     * @param float $geoLat
     *
     * @return self
     */
    public function setGeoLat(float $geoLat) : self
    {
        $this->geoLat = $geoLat;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getGeoLong() : float
    {
        return $this->geoLong;
    }
    /**
     * 
     *
     * @param float $geoLong
     *
     * @return self
     */
    public function setGeoLong(float $geoLong) : self
    {
        $this->geoLong = $geoLong;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
}