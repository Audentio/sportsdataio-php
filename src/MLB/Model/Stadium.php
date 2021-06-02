<?php

namespace Sportsdata\API\MLB\Model;

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
    protected $surface;
    /**
     * 
     *
     * @var int
     */
    protected $leftField;
    /**
     * 
     *
     * @var int
     */
    protected $midLeftField;
    /**
     * 
     *
     * @var int
     */
    protected $leftCenterField;
    /**
     * 
     *
     * @var int
     */
    protected $midLeftCenterField;
    /**
     * 
     *
     * @var int
     */
    protected $centerField;
    /**
     * 
     *
     * @var int
     */
    protected $midRightCenterField;
    /**
     * 
     *
     * @var int
     */
    protected $rightCenterField;
    /**
     * 
     *
     * @var int
     */
    protected $midRightField;
    /**
     * 
     *
     * @var int
     */
    protected $rightField;
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
     * @var int
     */
    protected $altitude;
    /**
     * 
     *
     * @var int
     */
    protected $homePlateDirection;
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
     * @return int
     */
    public function getLeftField() : int
    {
        return $this->leftField;
    }
    /**
     * 
     *
     * @param int $leftField
     *
     * @return self
     */
    public function setLeftField(int $leftField) : self
    {
        $this->leftField = $leftField;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMidLeftField() : int
    {
        return $this->midLeftField;
    }
    /**
     * 
     *
     * @param int $midLeftField
     *
     * @return self
     */
    public function setMidLeftField(int $midLeftField) : self
    {
        $this->midLeftField = $midLeftField;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLeftCenterField() : int
    {
        return $this->leftCenterField;
    }
    /**
     * 
     *
     * @param int $leftCenterField
     *
     * @return self
     */
    public function setLeftCenterField(int $leftCenterField) : self
    {
        $this->leftCenterField = $leftCenterField;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMidLeftCenterField() : int
    {
        return $this->midLeftCenterField;
    }
    /**
     * 
     *
     * @param int $midLeftCenterField
     *
     * @return self
     */
    public function setMidLeftCenterField(int $midLeftCenterField) : self
    {
        $this->midLeftCenterField = $midLeftCenterField;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCenterField() : int
    {
        return $this->centerField;
    }
    /**
     * 
     *
     * @param int $centerField
     *
     * @return self
     */
    public function setCenterField(int $centerField) : self
    {
        $this->centerField = $centerField;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMidRightCenterField() : int
    {
        return $this->midRightCenterField;
    }
    /**
     * 
     *
     * @param int $midRightCenterField
     *
     * @return self
     */
    public function setMidRightCenterField(int $midRightCenterField) : self
    {
        $this->midRightCenterField = $midRightCenterField;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRightCenterField() : int
    {
        return $this->rightCenterField;
    }
    /**
     * 
     *
     * @param int $rightCenterField
     *
     * @return self
     */
    public function setRightCenterField(int $rightCenterField) : self
    {
        $this->rightCenterField = $rightCenterField;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMidRightField() : int
    {
        return $this->midRightField;
    }
    /**
     * 
     *
     * @param int $midRightField
     *
     * @return self
     */
    public function setMidRightField(int $midRightField) : self
    {
        $this->midRightField = $midRightField;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRightField() : int
    {
        return $this->rightField;
    }
    /**
     * 
     *
     * @param int $rightField
     *
     * @return self
     */
    public function setRightField(int $rightField) : self
    {
        $this->rightField = $rightField;
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
     * @return int
     */
    public function getAltitude() : int
    {
        return $this->altitude;
    }
    /**
     * 
     *
     * @param int $altitude
     *
     * @return self
     */
    public function setAltitude(int $altitude) : self
    {
        $this->altitude = $altitude;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomePlateDirection() : int
    {
        return $this->homePlateDirection;
    }
    /**
     * 
     *
     * @param int $homePlateDirection
     *
     * @return self
     */
    public function setHomePlateDirection(int $homePlateDirection) : self
    {
        $this->homePlateDirection = $homePlateDirection;
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