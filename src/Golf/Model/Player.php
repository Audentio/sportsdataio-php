<?php

namespace Sportsdata\API\Golf\Model;

class Player
{
    /**
     * 
     *
     * @var int
     */
    protected $playerID;
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
    protected $weight;
    /**
     * 
     *
     * @var string|null
     */
    protected $swings;
    /**
     * 
     *
     * @var int|null
     */
    protected $pgaDebut;
    /**
     * 
     *
     * @var string|null
     */
    protected $country;
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
    protected $birthState;
    /**
     * 
     *
     * @var string|null
     */
    protected $college;
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
    protected $sportRadarPlayerID;
    /**
     * 
     *
     * @var int|null
     */
    protected $pgaTourPlayerID;
    /**
     * 
     *
     * @var int|null
     */
    protected $rotoworldPlayerID;
    /**
     * 
     *
     * @var int|null
     */
    protected $rotoWirePlayerID;
    /**
     * 
     *
     * @var int|null
     */
    protected $fantasyAlarmPlayerID;
    /**
     * 
     *
     * @var string|null
     */
    protected $draftKingsName;
    /**
     * 
     *
     * @var string|null
     */
    protected $fantasyDraftName;
    /**
     * 
     *
     * @var string|null
     */
    protected $fanDuelName;
    /**
     * 
     *
     * @var int|null
     */
    protected $fantasyDraftPlayerID;
    /**
     * 
     *
     * @var int|null
     */
    protected $draftKingsPlayerID;
    /**
     * 
     *
     * @var int|null
     */
    protected $fanDuelPlayerID;
    /**
     * 
     *
     * @var int|null
     */
    protected $yahooPlayerID;
    /**
     * 
     *
     * @return int
     */
    public function getPlayerID() : int
    {
        return $this->playerID;
    }
    /**
     * 
     *
     * @param int $playerID
     *
     * @return self
     */
    public function setPlayerID(int $playerID) : self
    {
        $this->playerID = $playerID;
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
    public function getSwings() : ?string
    {
        return $this->swings;
    }
    /**
     * 
     *
     * @param string|null $swings
     *
     * @return self
     */
    public function setSwings(?string $swings) : self
    {
        $this->swings = $swings;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPgaDebut() : ?int
    {
        return $this->pgaDebut;
    }
    /**
     * 
     *
     * @param int|null $pgaDebut
     *
     * @return self
     */
    public function setPgaDebut(?int $pgaDebut) : self
    {
        $this->pgaDebut = $pgaDebut;
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
    public function getBirthState() : ?string
    {
        return $this->birthState;
    }
    /**
     * 
     *
     * @param string|null $birthState
     *
     * @return self
     */
    public function setBirthState(?string $birthState) : self
    {
        $this->birthState = $birthState;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCollege() : ?string
    {
        return $this->college;
    }
    /**
     * 
     *
     * @param string|null $college
     *
     * @return self
     */
    public function setCollege(?string $college) : self
    {
        $this->college = $college;
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
    public function getSportRadarPlayerID() : ?string
    {
        return $this->sportRadarPlayerID;
    }
    /**
     * 
     *
     * @param string|null $sportRadarPlayerID
     *
     * @return self
     */
    public function setSportRadarPlayerID(?string $sportRadarPlayerID) : self
    {
        $this->sportRadarPlayerID = $sportRadarPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPgaTourPlayerID() : ?int
    {
        return $this->pgaTourPlayerID;
    }
    /**
     * 
     *
     * @param int|null $pgaTourPlayerID
     *
     * @return self
     */
    public function setPgaTourPlayerID(?int $pgaTourPlayerID) : self
    {
        $this->pgaTourPlayerID = $pgaTourPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRotoworldPlayerID() : ?int
    {
        return $this->rotoworldPlayerID;
    }
    /**
     * 
     *
     * @param int|null $rotoworldPlayerID
     *
     * @return self
     */
    public function setRotoworldPlayerID(?int $rotoworldPlayerID) : self
    {
        $this->rotoworldPlayerID = $rotoworldPlayerID;
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
     * @return int|null
     */
    public function getFantasyAlarmPlayerID() : ?int
    {
        return $this->fantasyAlarmPlayerID;
    }
    /**
     * 
     *
     * @param int|null $fantasyAlarmPlayerID
     *
     * @return self
     */
    public function setFantasyAlarmPlayerID(?int $fantasyAlarmPlayerID) : self
    {
        $this->fantasyAlarmPlayerID = $fantasyAlarmPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDraftKingsName() : ?string
    {
        return $this->draftKingsName;
    }
    /**
     * 
     *
     * @param string|null $draftKingsName
     *
     * @return self
     */
    public function setDraftKingsName(?string $draftKingsName) : self
    {
        $this->draftKingsName = $draftKingsName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFantasyDraftName() : ?string
    {
        return $this->fantasyDraftName;
    }
    /**
     * 
     *
     * @param string|null $fantasyDraftName
     *
     * @return self
     */
    public function setFantasyDraftName(?string $fantasyDraftName) : self
    {
        $this->fantasyDraftName = $fantasyDraftName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFanDuelName() : ?string
    {
        return $this->fanDuelName;
    }
    /**
     * 
     *
     * @param string|null $fanDuelName
     *
     * @return self
     */
    public function setFanDuelName(?string $fanDuelName) : self
    {
        $this->fanDuelName = $fanDuelName;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFantasyDraftPlayerID() : ?int
    {
        return $this->fantasyDraftPlayerID;
    }
    /**
     * 
     *
     * @param int|null $fantasyDraftPlayerID
     *
     * @return self
     */
    public function setFantasyDraftPlayerID(?int $fantasyDraftPlayerID) : self
    {
        $this->fantasyDraftPlayerID = $fantasyDraftPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDraftKingsPlayerID() : ?int
    {
        return $this->draftKingsPlayerID;
    }
    /**
     * 
     *
     * @param int|null $draftKingsPlayerID
     *
     * @return self
     */
    public function setDraftKingsPlayerID(?int $draftKingsPlayerID) : self
    {
        $this->draftKingsPlayerID = $draftKingsPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFanDuelPlayerID() : ?int
    {
        return $this->fanDuelPlayerID;
    }
    /**
     * 
     *
     * @param int|null $fanDuelPlayerID
     *
     * @return self
     */
    public function setFanDuelPlayerID(?int $fanDuelPlayerID) : self
    {
        $this->fanDuelPlayerID = $fanDuelPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getYahooPlayerID() : ?int
    {
        return $this->yahooPlayerID;
    }
    /**
     * 
     *
     * @param int|null $yahooPlayerID
     *
     * @return self
     */
    public function setYahooPlayerID(?int $yahooPlayerID) : self
    {
        $this->yahooPlayerID = $yahooPlayerID;
        return $this;
    }
}