<?php

namespace Sportsdata\API\Soccer\Model;

class Player
{
    /**
     * 
     *
     * @var int
     */
    protected $playerId;
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
     * @var string
     */
    protected $commonName;
    /**
     * 
     *
     * @var string
     */
    protected $shortName;
    /**
     * 
     *
     * @var string
     */
    protected $position;
    /**
     * 
     *
     * @var string
     */
    protected $positionCategory;
    /**
     * 
     *
     * @var int
     */
    protected $jersey;
    /**
     * 
     *
     * @var string
     */
    protected $foot;
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
    protected $gender;
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
    protected $birthCity;
    /**
     * 
     *
     * @var string
     */
    protected $birthCountry;
    /**
     * 
     *
     * @var string
     */
    protected $nationality;
    /**
     * 
     *
     * @var string
     */
    protected $injuryStatus;
    /**
     * 
     *
     * @var string
     */
    protected $injuryBodyPart;
    /**
     * 
     *
     * @var string
     */
    protected $injuryNotes;
    /**
     * 
     *
     * @var string
     */
    protected $injuryStartDate;
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
    protected $photoUrl;
    /**
     * 
     *
     * @var int
     */
    protected $rotoWirePlayerID;
    /**
     * 
     *
     * @var string
     */
    protected $draftKingsPosition;
    /**
     * 
     *
     * @var int
     */
    protected $usaTodayPlayerID;
    /**
     * 
     *
     * @var string
     */
    protected $usaTodayHeadshotUrl;
    /**
     * 
     *
     * @var string
     */
    protected $usaTodayHeadshotNoBackgroundUrl;
    /**
     * 
     *
     * @var string
     */
    protected $usaTodayHeadshotUpdated;
    /**
     * 
     *
     * @var string
     */
    protected $usaTodayHeadshotNoBackgroundUpdated;
    /**
     * 
     *
     * @return int
     */
    public function getPlayerId() : int
    {
        return $this->playerId;
    }
    /**
     * 
     *
     * @param int $playerId
     *
     * @return self
     */
    public function setPlayerId(int $playerId) : self
    {
        $this->playerId = $playerId;
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
     * @return string
     */
    public function getCommonName() : string
    {
        return $this->commonName;
    }
    /**
     * 
     *
     * @param string $commonName
     *
     * @return self
     */
    public function setCommonName(string $commonName) : self
    {
        $this->commonName = $commonName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getShortName() : string
    {
        return $this->shortName;
    }
    /**
     * 
     *
     * @param string $shortName
     *
     * @return self
     */
    public function setShortName(string $shortName) : self
    {
        $this->shortName = $shortName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPosition() : string
    {
        return $this->position;
    }
    /**
     * 
     *
     * @param string $position
     *
     * @return self
     */
    public function setPosition(string $position) : self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPositionCategory() : string
    {
        return $this->positionCategory;
    }
    /**
     * 
     *
     * @param string $positionCategory
     *
     * @return self
     */
    public function setPositionCategory(string $positionCategory) : self
    {
        $this->positionCategory = $positionCategory;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getJersey() : int
    {
        return $this->jersey;
    }
    /**
     * 
     *
     * @param int $jersey
     *
     * @return self
     */
    public function setJersey(int $jersey) : self
    {
        $this->jersey = $jersey;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFoot() : string
    {
        return $this->foot;
    }
    /**
     * 
     *
     * @param string $foot
     *
     * @return self
     */
    public function setFoot(string $foot) : self
    {
        $this->foot = $foot;
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
    public function getBirthCity() : string
    {
        return $this->birthCity;
    }
    /**
     * 
     *
     * @param string $birthCity
     *
     * @return self
     */
    public function setBirthCity(string $birthCity) : self
    {
        $this->birthCity = $birthCity;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBirthCountry() : string
    {
        return $this->birthCountry;
    }
    /**
     * 
     *
     * @param string $birthCountry
     *
     * @return self
     */
    public function setBirthCountry(string $birthCountry) : self
    {
        $this->birthCountry = $birthCountry;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNationality() : string
    {
        return $this->nationality;
    }
    /**
     * 
     *
     * @param string $nationality
     *
     * @return self
     */
    public function setNationality(string $nationality) : self
    {
        $this->nationality = $nationality;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInjuryStatus() : string
    {
        return $this->injuryStatus;
    }
    /**
     * 
     *
     * @param string $injuryStatus
     *
     * @return self
     */
    public function setInjuryStatus(string $injuryStatus) : self
    {
        $this->injuryStatus = $injuryStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInjuryBodyPart() : string
    {
        return $this->injuryBodyPart;
    }
    /**
     * 
     *
     * @param string $injuryBodyPart
     *
     * @return self
     */
    public function setInjuryBodyPart(string $injuryBodyPart) : self
    {
        $this->injuryBodyPart = $injuryBodyPart;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInjuryNotes() : string
    {
        return $this->injuryNotes;
    }
    /**
     * 
     *
     * @param string $injuryNotes
     *
     * @return self
     */
    public function setInjuryNotes(string $injuryNotes) : self
    {
        $this->injuryNotes = $injuryNotes;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInjuryStartDate() : string
    {
        return $this->injuryStartDate;
    }
    /**
     * 
     *
     * @param string $injuryStartDate
     *
     * @return self
     */
    public function setInjuryStartDate(string $injuryStartDate) : self
    {
        $this->injuryStartDate = $injuryStartDate;
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
     * @return int
     */
    public function getRotoWirePlayerID() : int
    {
        return $this->rotoWirePlayerID;
    }
    /**
     * 
     *
     * @param int $rotoWirePlayerID
     *
     * @return self
     */
    public function setRotoWirePlayerID(int $rotoWirePlayerID) : self
    {
        $this->rotoWirePlayerID = $rotoWirePlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDraftKingsPosition() : string
    {
        return $this->draftKingsPosition;
    }
    /**
     * 
     *
     * @param string $draftKingsPosition
     *
     * @return self
     */
    public function setDraftKingsPosition(string $draftKingsPosition) : self
    {
        $this->draftKingsPosition = $draftKingsPosition;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUsaTodayPlayerID() : int
    {
        return $this->usaTodayPlayerID;
    }
    /**
     * 
     *
     * @param int $usaTodayPlayerID
     *
     * @return self
     */
    public function setUsaTodayPlayerID(int $usaTodayPlayerID) : self
    {
        $this->usaTodayPlayerID = $usaTodayPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUsaTodayHeadshotUrl() : string
    {
        return $this->usaTodayHeadshotUrl;
    }
    /**
     * 
     *
     * @param string $usaTodayHeadshotUrl
     *
     * @return self
     */
    public function setUsaTodayHeadshotUrl(string $usaTodayHeadshotUrl) : self
    {
        $this->usaTodayHeadshotUrl = $usaTodayHeadshotUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUsaTodayHeadshotNoBackgroundUrl() : string
    {
        return $this->usaTodayHeadshotNoBackgroundUrl;
    }
    /**
     * 
     *
     * @param string $usaTodayHeadshotNoBackgroundUrl
     *
     * @return self
     */
    public function setUsaTodayHeadshotNoBackgroundUrl(string $usaTodayHeadshotNoBackgroundUrl) : self
    {
        $this->usaTodayHeadshotNoBackgroundUrl = $usaTodayHeadshotNoBackgroundUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUsaTodayHeadshotUpdated() : string
    {
        return $this->usaTodayHeadshotUpdated;
    }
    /**
     * 
     *
     * @param string $usaTodayHeadshotUpdated
     *
     * @return self
     */
    public function setUsaTodayHeadshotUpdated(string $usaTodayHeadshotUpdated) : self
    {
        $this->usaTodayHeadshotUpdated = $usaTodayHeadshotUpdated;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUsaTodayHeadshotNoBackgroundUpdated() : string
    {
        return $this->usaTodayHeadshotNoBackgroundUpdated;
    }
    /**
     * 
     *
     * @param string $usaTodayHeadshotNoBackgroundUpdated
     *
     * @return self
     */
    public function setUsaTodayHeadshotNoBackgroundUpdated(string $usaTodayHeadshotNoBackgroundUpdated) : self
    {
        $this->usaTodayHeadshotNoBackgroundUpdated = $usaTodayHeadshotNoBackgroundUpdated;
        return $this;
    }
}