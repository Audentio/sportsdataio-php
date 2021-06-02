<?php

namespace Sportsdata\API\Soccer\Model;

class Venue
{
    /**
     * 
     *
     * @var int
     */
    protected $venueId;
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
    protected $address;
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
    protected $zip;
    /**
     * 
     *
     * @var string
     */
    protected $country;
    /**
     * 
     *
     * @var bool
     */
    protected $open;
    /**
     * 
     *
     * @var int
     */
    protected $opened;
    /**
     * 
     *
     * @var string
     */
    protected $nickname1;
    /**
     * 
     *
     * @var string
     */
    protected $nickname2;
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
    protected $surface;
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
     * @return int
     */
    public function getVenueId() : int
    {
        return $this->venueId;
    }
    /**
     * 
     *
     * @param int $venueId
     *
     * @return self
     */
    public function setVenueId(int $venueId) : self
    {
        $this->venueId = $venueId;
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
    public function getAddress() : string
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param string $address
     *
     * @return self
     */
    public function setAddress(string $address) : self
    {
        $this->address = $address;
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
    public function getZip() : string
    {
        return $this->zip;
    }
    /**
     * 
     *
     * @param string $zip
     *
     * @return self
     */
    public function setZip(string $zip) : self
    {
        $this->zip = $zip;
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
     * @return bool
     */
    public function getOpen() : bool
    {
        return $this->open;
    }
    /**
     * 
     *
     * @param bool $open
     *
     * @return self
     */
    public function setOpen(bool $open) : self
    {
        $this->open = $open;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpened() : int
    {
        return $this->opened;
    }
    /**
     * 
     *
     * @param int $opened
     *
     * @return self
     */
    public function setOpened(int $opened) : self
    {
        $this->opened = $opened;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNickname1() : string
    {
        return $this->nickname1;
    }
    /**
     * 
     *
     * @param string $nickname1
     *
     * @return self
     */
    public function setNickname1(string $nickname1) : self
    {
        $this->nickname1 = $nickname1;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNickname2() : string
    {
        return $this->nickname2;
    }
    /**
     * 
     *
     * @param string $nickname2
     *
     * @return self
     */
    public function setNickname2(string $nickname2) : self
    {
        $this->nickname2 = $nickname2;
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
    public function getSurface() : string
    {
        return $this->surface;
    }
    /**
     * 
     *
     * @param string $surface
     *
     * @return self
     */
    public function setSurface(string $surface) : self
    {
        $this->surface = $surface;
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
}