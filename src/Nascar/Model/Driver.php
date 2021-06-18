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
     * @var string|null
     */
    protected $firstName;
    /**
     * 
     *
     * @var string|null
     */
    protected $lastName;
    /**
     * 
     *
     * @var int|null
     */
    protected $number;
    /**
     * 
     *
     * @var string|null
     */
    protected $numberDisplay;
    /**
     * 
     *
     * @var string|null
     */
    protected $team;
    /**
     * 
     *
     * @var string|null
     */
    protected $birthDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $birthPlace;
    /**
     * 
     *
     * @var string|null
     */
    protected $gender;
    /**
     * 
     *
     * @var int|null
     */
    protected $height;
    /**
     * 
     *
     * @var int|null
     */
    protected $weight;
    /**
     * 
     *
     * @var string|null
     */
    protected $manufacturer;
    /**
     * 
     *
     * @var string|null
     */
    protected $engine;
    /**
     * 
     *
     * @var string|null
     */
    protected $chassis;
    /**
     * 
     *
     * @var string|null
     */
    protected $sponsors;
    /**
     * 
     *
     * @var string|null
     */
    protected $crewChief;
    /**
     * 
     *
     * @var string|null
     */
    protected $photoUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $updated;
    /**
     * 
     *
     * @var string|null
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
     * @return string|null
     */
    public function getFirstName() : ?string
    {
        return $this->firstName;
    }
    /**
     * 
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setFirstName(?string $firstName) : self
    {
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLastName() : ?string
    {
        return $this->lastName;
    }
    /**
     * 
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setLastName(?string $lastName) : self
    {
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getNumber() : ?int
    {
        return $this->number;
    }
    /**
     * 
     *
     * @param int|null $number
     *
     * @return self
     */
    public function setNumber(?int $number) : self
    {
        $this->number = $number;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNumberDisplay() : ?string
    {
        return $this->numberDisplay;
    }
    /**
     * 
     *
     * @param string|null $numberDisplay
     *
     * @return self
     */
    public function setNumberDisplay(?string $numberDisplay) : self
    {
        $this->numberDisplay = $numberDisplay;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTeam() : ?string
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param string|null $team
     *
     * @return self
     */
    public function setTeam(?string $team) : self
    {
        $this->team = $team;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBirthDate() : ?string
    {
        return $this->birthDate;
    }
    /**
     * 
     *
     * @param string|null $birthDate
     *
     * @return self
     */
    public function setBirthDate(?string $birthDate) : self
    {
        $this->birthDate = $birthDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBirthPlace() : ?string
    {
        return $this->birthPlace;
    }
    /**
     * 
     *
     * @param string|null $birthPlace
     *
     * @return self
     */
    public function setBirthPlace(?string $birthPlace) : self
    {
        $this->birthPlace = $birthPlace;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getGender() : ?string
    {
        return $this->gender;
    }
    /**
     * 
     *
     * @param string|null $gender
     *
     * @return self
     */
    public function setGender(?string $gender) : self
    {
        $this->gender = $gender;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHeight() : ?int
    {
        return $this->height;
    }
    /**
     * 
     *
     * @param int|null $height
     *
     * @return self
     */
    public function setHeight(?int $height) : self
    {
        $this->height = $height;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getWeight() : ?int
    {
        return $this->weight;
    }
    /**
     * 
     *
     * @param int|null $weight
     *
     * @return self
     */
    public function setWeight(?int $weight) : self
    {
        $this->weight = $weight;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getManufacturer() : ?string
    {
        return $this->manufacturer;
    }
    /**
     * 
     *
     * @param string|null $manufacturer
     *
     * @return self
     */
    public function setManufacturer(?string $manufacturer) : self
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEngine() : ?string
    {
        return $this->engine;
    }
    /**
     * 
     *
     * @param string|null $engine
     *
     * @return self
     */
    public function setEngine(?string $engine) : self
    {
        $this->engine = $engine;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getChassis() : ?string
    {
        return $this->chassis;
    }
    /**
     * 
     *
     * @param string|null $chassis
     *
     * @return self
     */
    public function setChassis(?string $chassis) : self
    {
        $this->chassis = $chassis;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSponsors() : ?string
    {
        return $this->sponsors;
    }
    /**
     * 
     *
     * @param string|null $sponsors
     *
     * @return self
     */
    public function setSponsors(?string $sponsors) : self
    {
        $this->sponsors = $sponsors;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCrewChief() : ?string
    {
        return $this->crewChief;
    }
    /**
     * 
     *
     * @param string|null $crewChief
     *
     * @return self
     */
    public function setCrewChief(?string $crewChief) : self
    {
        $this->crewChief = $crewChief;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPhotoUrl() : ?string
    {
        return $this->photoUrl;
    }
    /**
     * 
     *
     * @param string|null $photoUrl
     *
     * @return self
     */
    public function setPhotoUrl(?string $photoUrl) : self
    {
        $this->photoUrl = $photoUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUpdated() : ?string
    {
        return $this->updated;
    }
    /**
     * 
     *
     * @param string|null $updated
     *
     * @return self
     */
    public function setUpdated(?string $updated) : self
    {
        $this->updated = $updated;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCreated() : ?string
    {
        return $this->created;
    }
    /**
     * 
     *
     * @param string|null $created
     *
     * @return self
     */
    public function setCreated(?string $created) : self
    {
        $this->created = $created;
        return $this;
    }
}