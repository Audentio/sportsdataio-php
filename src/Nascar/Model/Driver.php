<?php

namespace Sportsdata\API\Nascar\Model;

class Driver
{
    /**
     * 
     *
     * @var int
     */
    protected $driverID;
    /**
     * 
     *
     * @var string
     */
    protected $firstName;
    /**
     * 
     *
     * @var string
     */
    protected $lastName;
    /**
     * 
     *
     * @var int
     */
    protected $number;
    /**
     * 
     *
     * @var string
     */
    protected $numberDisplay;
    /**
     * 
     *
     * @var string
     */
    protected $team;
    /**
     * 
     *
     * @var string
     */
    protected $birthDate;
    /**
     * 
     *
     * @var string
     */
    protected $birthPlace;
    /**
     * 
     *
     * @var string
     */
    protected $gender;
    /**
     * 
     *
     * @var int
     */
    protected $height;
    /**
     * 
     *
     * @var int
     */
    protected $weight;
    /**
     * 
     *
     * @var string
     */
    protected $manufacturer;
    /**
     * 
     *
     * @var string
     */
    protected $engine;
    /**
     * 
     *
     * @var string
     */
    protected $chassis;
    /**
     * 
     *
     * @var string
     */
    protected $sponsors;
    /**
     * 
     *
     * @var string
     */
    protected $crewChief;
    /**
     * 
     *
     * @var string
     */
    protected $photoUrl;
    /**
     * 
     *
     * @var string
     */
    protected $updated;
    /**
     * 
     *
     * @var string
     */
    protected $created;
    /**
     * 
     *
     * @return int
     */
    public function getDriverID() : int
    {
        return $this->driverID;
    }
    /**
     * 
     *
     * @param int $driverID
     *
     * @return self
     */
    public function setDriverID(int $driverID) : self
    {
        $this->driverID = $driverID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFirstName() : string
    {
        return $this->firstName;
    }
    /**
     * 
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName) : self
    {
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastName() : string
    {
        return $this->lastName;
    }
    /**
     * 
     *
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(string $lastName) : self
    {
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNumber() : int
    {
        return $this->number;
    }
    /**
     * 
     *
     * @param int $number
     *
     * @return self
     */
    public function setNumber(int $number) : self
    {
        $this->number = $number;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNumberDisplay() : string
    {
        return $this->numberDisplay;
    }
    /**
     * 
     *
     * @param string $numberDisplay
     *
     * @return self
     */
    public function setNumberDisplay(string $numberDisplay) : self
    {
        $this->numberDisplay = $numberDisplay;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTeam() : string
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param string $team
     *
     * @return self
     */
    public function setTeam(string $team) : self
    {
        $this->team = $team;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBirthDate() : string
    {
        return $this->birthDate;
    }
    /**
     * 
     *
     * @param string $birthDate
     *
     * @return self
     */
    public function setBirthDate(string $birthDate) : self
    {
        $this->birthDate = $birthDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBirthPlace() : string
    {
        return $this->birthPlace;
    }
    /**
     * 
     *
     * @param string $birthPlace
     *
     * @return self
     */
    public function setBirthPlace(string $birthPlace) : self
    {
        $this->birthPlace = $birthPlace;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGender() : string
    {
        return $this->gender;
    }
    /**
     * 
     *
     * @param string $gender
     *
     * @return self
     */
    public function setGender(string $gender) : self
    {
        $this->gender = $gender;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHeight() : int
    {
        return $this->height;
    }
    /**
     * 
     *
     * @param int $height
     *
     * @return self
     */
    public function setHeight(int $height) : self
    {
        $this->height = $height;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getWeight() : int
    {
        return $this->weight;
    }
    /**
     * 
     *
     * @param int $weight
     *
     * @return self
     */
    public function setWeight(int $weight) : self
    {
        $this->weight = $weight;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getManufacturer() : string
    {
        return $this->manufacturer;
    }
    /**
     * 
     *
     * @param string $manufacturer
     *
     * @return self
     */
    public function setManufacturer(string $manufacturer) : self
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEngine() : string
    {
        return $this->engine;
    }
    /**
     * 
     *
     * @param string $engine
     *
     * @return self
     */
    public function setEngine(string $engine) : self
    {
        $this->engine = $engine;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getChassis() : string
    {
        return $this->chassis;
    }
    /**
     * 
     *
     * @param string $chassis
     *
     * @return self
     */
    public function setChassis(string $chassis) : self
    {
        $this->chassis = $chassis;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSponsors() : string
    {
        return $this->sponsors;
    }
    /**
     * 
     *
     * @param string $sponsors
     *
     * @return self
     */
    public function setSponsors(string $sponsors) : self
    {
        $this->sponsors = $sponsors;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCrewChief() : string
    {
        return $this->crewChief;
    }
    /**
     * 
     *
     * @param string $crewChief
     *
     * @return self
     */
    public function setCrewChief(string $crewChief) : self
    {
        $this->crewChief = $crewChief;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPhotoUrl() : string
    {
        return $this->photoUrl;
    }
    /**
     * 
     *
     * @param string $photoUrl
     *
     * @return self
     */
    public function setPhotoUrl(string $photoUrl) : self
    {
        $this->photoUrl = $photoUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUpdated() : string
    {
        return $this->updated;
    }
    /**
     * 
     *
     * @param string $updated
     *
     * @return self
     */
    public function setUpdated(string $updated) : self
    {
        $this->updated = $updated;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCreated() : string
    {
        return $this->created;
    }
    /**
     * 
     *
     * @param string $created
     *
     * @return self
     */
    public function setCreated(string $created) : self
    {
        $this->created = $created;
        return $this;
    }
}