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
     * @var string|null
     */
    protected $commonName;
    /**
     * 
     *
     * @var string|null
     */
    protected $shortName;
    /**
     * 
     *
     * @var string|null
     */
    protected $position;
    /**
     * 
     *
     * @var string|null
     */
    protected $positionCategory;
    /**
     * 
     *
     * @var int|null
     */
    protected $jersey;
    /**
     * 
     *
     * @var string|null
     */
    protected $foot;
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
    protected $gender;
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
    protected $birthCity;
    /**
     * 
     *
     * @var string|null
     */
    protected $birthCountry;
    /**
     * 
     *
     * @var string|null
     */
    protected $nationality;
    /**
     * 
     *
     * @var string|null
     */
    protected $injuryStatus;
    /**
     * 
     *
     * @var string|null
     */
    protected $injuryBodyPart;
    /**
     * 
     *
     * @var string|null
     */
    protected $injuryNotes;
    /**
     * 
     *
     * @var string|null
     */
    protected $injuryStartDate;
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
    protected $photoUrl;
    /**
     * 
     *
     * @var int|null
     */
    protected $rotoWirePlayerID;
    /**
     * 
     *
     * @var string|null
     */
    protected $draftKingsPosition;
    /**
     * 
     *
     * @var int|null
     */
    protected $usaTodayPlayerID;
    /**
     * 
     *
     * @var string|null
     */
    protected $usaTodayHeadshotUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $usaTodayHeadshotNoBackgroundUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $usaTodayHeadshotUpdated;
    /**
     * 
     *
     * @var string|null
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
     * @return string|null
     */
    public function getCommonName() : ?string
    {
        return $this->commonName;
    }
    /**
     * 
     *
     * @param string|null $commonName
     *
     * @return self
     */
    public function setCommonName(?string $commonName) : self
    {
        $this->commonName = $commonName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getShortName() : ?string
    {
        return $this->shortName;
    }
    /**
     * 
     *
     * @param string|null $shortName
     *
     * @return self
     */
    public function setShortName(?string $shortName) : self
    {
        $this->shortName = $shortName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPosition() : ?string
    {
        return $this->position;
    }
    /**
     * 
     *
     * @param string|null $position
     *
     * @return self
     */
    public function setPosition(?string $position) : self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPositionCategory() : ?string
    {
        return $this->positionCategory;
    }
    /**
     * 
     *
     * @param string|null $positionCategory
     *
     * @return self
     */
    public function setPositionCategory(?string $positionCategory) : self
    {
        $this->positionCategory = $positionCategory;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getJersey() : ?int
    {
        return $this->jersey;
    }
    /**
     * 
     *
     * @param int|null $jersey
     *
     * @return self
     */
    public function setJersey(?int $jersey) : self
    {
        $this->jersey = $jersey;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFoot() : ?string
    {
        return $this->foot;
    }
    /**
     * 
     *
     * @param string|null $foot
     *
     * @return self
     */
    public function setFoot(?string $foot) : self
    {
        $this->foot = $foot;
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
    public function getBirthCity() : ?string
    {
        return $this->birthCity;
    }
    /**
     * 
     *
     * @param string|null $birthCity
     *
     * @return self
     */
    public function setBirthCity(?string $birthCity) : self
    {
        $this->birthCity = $birthCity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBirthCountry() : ?string
    {
        return $this->birthCountry;
    }
    /**
     * 
     *
     * @param string|null $birthCountry
     *
     * @return self
     */
    public function setBirthCountry(?string $birthCountry) : self
    {
        $this->birthCountry = $birthCountry;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNationality() : ?string
    {
        return $this->nationality;
    }
    /**
     * 
     *
     * @param string|null $nationality
     *
     * @return self
     */
    public function setNationality(?string $nationality) : self
    {
        $this->nationality = $nationality;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInjuryStatus() : ?string
    {
        return $this->injuryStatus;
    }
    /**
     * 
     *
     * @param string|null $injuryStatus
     *
     * @return self
     */
    public function setInjuryStatus(?string $injuryStatus) : self
    {
        $this->injuryStatus = $injuryStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInjuryBodyPart() : ?string
    {
        return $this->injuryBodyPart;
    }
    /**
     * 
     *
     * @param string|null $injuryBodyPart
     *
     * @return self
     */
    public function setInjuryBodyPart(?string $injuryBodyPart) : self
    {
        $this->injuryBodyPart = $injuryBodyPart;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInjuryNotes() : ?string
    {
        return $this->injuryNotes;
    }
    /**
     * 
     *
     * @param string|null $injuryNotes
     *
     * @return self
     */
    public function setInjuryNotes(?string $injuryNotes) : self
    {
        $this->injuryNotes = $injuryNotes;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInjuryStartDate() : ?string
    {
        return $this->injuryStartDate;
    }
    /**
     * 
     *
     * @param string|null $injuryStartDate
     *
     * @return self
     */
    public function setInjuryStartDate(?string $injuryStartDate) : self
    {
        $this->injuryStartDate = $injuryStartDate;
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
     * @return int|null
     */
    public function getRotoWirePlayerID() : ?int
    {
        return $this->rotoWirePlayerID;
    }
    /**
     * 
     *
     * @param int|null $rotoWirePlayerID
     *
     * @return self
     */
    public function setRotoWirePlayerID(?int $rotoWirePlayerID) : self
    {
        $this->rotoWirePlayerID = $rotoWirePlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDraftKingsPosition() : ?string
    {
        return $this->draftKingsPosition;
    }
    /**
     * 
     *
     * @param string|null $draftKingsPosition
     *
     * @return self
     */
    public function setDraftKingsPosition(?string $draftKingsPosition) : self
    {
        $this->draftKingsPosition = $draftKingsPosition;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUsaTodayPlayerID() : ?int
    {
        return $this->usaTodayPlayerID;
    }
    /**
     * 
     *
     * @param int|null $usaTodayPlayerID
     *
     * @return self
     */
    public function setUsaTodayPlayerID(?int $usaTodayPlayerID) : self
    {
        $this->usaTodayPlayerID = $usaTodayPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUsaTodayHeadshotUrl() : ?string
    {
        return $this->usaTodayHeadshotUrl;
    }
    /**
     * 
     *
     * @param string|null $usaTodayHeadshotUrl
     *
     * @return self
     */
    public function setUsaTodayHeadshotUrl(?string $usaTodayHeadshotUrl) : self
    {
        $this->usaTodayHeadshotUrl = $usaTodayHeadshotUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUsaTodayHeadshotNoBackgroundUrl() : ?string
    {
        return $this->usaTodayHeadshotNoBackgroundUrl;
    }
    /**
     * 
     *
     * @param string|null $usaTodayHeadshotNoBackgroundUrl
     *
     * @return self
     */
    public function setUsaTodayHeadshotNoBackgroundUrl(?string $usaTodayHeadshotNoBackgroundUrl) : self
    {
        $this->usaTodayHeadshotNoBackgroundUrl = $usaTodayHeadshotNoBackgroundUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUsaTodayHeadshotUpdated() : ?string
    {
        return $this->usaTodayHeadshotUpdated;
    }
    /**
     * 
     *
     * @param string|null $usaTodayHeadshotUpdated
     *
     * @return self
     */
    public function setUsaTodayHeadshotUpdated(?string $usaTodayHeadshotUpdated) : self
    {
        $this->usaTodayHeadshotUpdated = $usaTodayHeadshotUpdated;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUsaTodayHeadshotNoBackgroundUpdated() : ?string
    {
        return $this->usaTodayHeadshotNoBackgroundUpdated;
    }
    /**
     * 
     *
     * @param string|null $usaTodayHeadshotNoBackgroundUpdated
     *
     * @return self
     */
    public function setUsaTodayHeadshotNoBackgroundUpdated(?string $usaTodayHeadshotNoBackgroundUpdated) : self
    {
        $this->usaTodayHeadshotNoBackgroundUpdated = $usaTodayHeadshotNoBackgroundUpdated;
        return $this;
    }
}