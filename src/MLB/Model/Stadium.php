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
     * @var string|null
     */
    protected $name;
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
     * @var string|null
     */
    protected $country;
    /**
     * 
     *
     * @var int|null
     */
    protected $capacity;
    /**
     * 
     *
     * @var string|null
     */
    protected $surface;
    /**
     * 
     *
     * @var int|null
     */
    protected $leftField;
    /**
     * 
     *
     * @var int|null
     */
    protected $midLeftField;
    /**
     * 
     *
     * @var int|null
     */
    protected $leftCenterField;
    /**
     * 
     *
     * @var int|null
     */
    protected $midLeftCenterField;
    /**
     * 
     *
     * @var int|null
     */
    protected $centerField;
    /**
     * 
     *
     * @var int|null
     */
    protected $midRightCenterField;
    /**
     * 
     *
     * @var int|null
     */
    protected $rightCenterField;
    /**
     * 
     *
     * @var int|null
     */
    protected $midRightField;
    /**
     * 
     *
     * @var int|null
     */
    protected $rightField;
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
     * @var int|null
     */
    protected $altitude;
    /**
     * 
     *
     * @var int|null
     */
    protected $homePlateDirection;
    /**
     * 
     *
     * @var string|null
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
     * @return string|null
     */
    public function getCountry() : ?string
    {
        return $this->country;
    }
    /**
     * 
     *
     * @param string|null $country
     *
     * @return self
     */
    public function setCountry(?string $country) : self
    {
        $this->country = $country;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCapacity() : ?int
    {
        return $this->capacity;
    }
    /**
     * 
     *
     * @param int|null $capacity
     *
     * @return self
     */
    public function setCapacity(?int $capacity) : self
    {
        $this->capacity = $capacity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSurface() : ?string
    {
        return $this->surface;
    }
    /**
     * 
     *
     * @param string|null $surface
     *
     * @return self
     */
    public function setSurface(?string $surface) : self
    {
        $this->surface = $surface;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLeftField() : ?int
    {
        return $this->leftField;
    }
    /**
     * 
     *
     * @param int|null $leftField
     *
     * @return self
     */
    public function setLeftField(?int $leftField) : self
    {
        $this->leftField = $leftField;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMidLeftField() : ?int
    {
        return $this->midLeftField;
    }
    /**
     * 
     *
     * @param int|null $midLeftField
     *
     * @return self
     */
    public function setMidLeftField(?int $midLeftField) : self
    {
        $this->midLeftField = $midLeftField;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLeftCenterField() : ?int
    {
        return $this->leftCenterField;
    }
    /**
     * 
     *
     * @param int|null $leftCenterField
     *
     * @return self
     */
    public function setLeftCenterField(?int $leftCenterField) : self
    {
        $this->leftCenterField = $leftCenterField;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMidLeftCenterField() : ?int
    {
        return $this->midLeftCenterField;
    }
    /**
     * 
     *
     * @param int|null $midLeftCenterField
     *
     * @return self
     */
    public function setMidLeftCenterField(?int $midLeftCenterField) : self
    {
        $this->midLeftCenterField = $midLeftCenterField;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCenterField() : ?int
    {
        return $this->centerField;
    }
    /**
     * 
     *
     * @param int|null $centerField
     *
     * @return self
     */
    public function setCenterField(?int $centerField) : self
    {
        $this->centerField = $centerField;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMidRightCenterField() : ?int
    {
        return $this->midRightCenterField;
    }
    /**
     * 
     *
     * @param int|null $midRightCenterField
     *
     * @return self
     */
    public function setMidRightCenterField(?int $midRightCenterField) : self
    {
        $this->midRightCenterField = $midRightCenterField;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRightCenterField() : ?int
    {
        return $this->rightCenterField;
    }
    /**
     * 
     *
     * @param int|null $rightCenterField
     *
     * @return self
     */
    public function setRightCenterField(?int $rightCenterField) : self
    {
        $this->rightCenterField = $rightCenterField;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMidRightField() : ?int
    {
        return $this->midRightField;
    }
    /**
     * 
     *
     * @param int|null $midRightField
     *
     * @return self
     */
    public function setMidRightField(?int $midRightField) : self
    {
        $this->midRightField = $midRightField;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRightField() : ?int
    {
        return $this->rightField;
    }
    /**
     * 
     *
     * @param int|null $rightField
     *
     * @return self
     */
    public function setRightField(?int $rightField) : self
    {
        $this->rightField = $rightField;
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
    /**
     * 
     *
     * @return int|null
     */
    public function getAltitude() : ?int
    {
        return $this->altitude;
    }
    /**
     * 
     *
     * @param int|null $altitude
     *
     * @return self
     */
    public function setAltitude(?int $altitude) : self
    {
        $this->altitude = $altitude;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomePlateDirection() : ?int
    {
        return $this->homePlateDirection;
    }
    /**
     * 
     *
     * @param int|null $homePlateDirection
     *
     * @return self
     */
    public function setHomePlateDirection(?int $homePlateDirection) : self
    {
        $this->homePlateDirection = $homePlateDirection;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->type = $type;
        return $this;
    }
}