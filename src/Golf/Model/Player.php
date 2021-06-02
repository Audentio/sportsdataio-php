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
    protected $weight;
    /**
     * 
     *
     * @var string
     */
    protected $swings;
    /**
     * 
     *
     * @var int
     */
    protected $pgaDebut;
    /**
     * 
     *
     * @var string
     */
    protected $country;
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
    protected $birthState;
    /**
     * 
     *
     * @var string
     */
    protected $college;
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
    protected $sportRadarPlayerID;
    /**
     * 
     *
     * @var int
     */
    protected $pgaTourPlayerID;
    /**
     * 
     *
     * @var int
     */
    protected $rotoworldPlayerID;
    /**
     * 
     *
     * @var int
     */
    protected $rotoWirePlayerID;
    /**
     * 
     *
     * @var int
     */
    protected $fantasyAlarmPlayerID;
    /**
     * 
     *
     * @var string
     */
    protected $draftKingsName;
    /**
     * 
     *
     * @var string
     */
    protected $fantasyDraftName;
    /**
     * 
     *
     * @var string
     */
    protected $fanDuelName;
    /**
     * 
     *
     * @var int
     */
    protected $fantasyDraftPlayerID;
    /**
     * 
     *
     * @var int
     */
    protected $draftKingsPlayerID;
    /**
     * 
     *
     * @var int
     */
    protected $fanDuelPlayerID;
    /**
     * 
     *
     * @var int
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
    public function getSwings() : string
    {
        return $this->swings;
    }
    /**
     * 
     *
     * @param string $swings
     *
     * @return self
     */
    public function setSwings(string $swings) : self
    {
        $this->swings = $swings;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPgaDebut() : int
    {
        return $this->pgaDebut;
    }
    /**
     * 
     *
     * @param int $pgaDebut
     *
     * @return self
     */
    public function setPgaDebut(int $pgaDebut) : self
    {
        $this->pgaDebut = $pgaDebut;
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
    public function getBirthState() : string
    {
        return $this->birthState;
    }
    /**
     * 
     *
     * @param string $birthState
     *
     * @return self
     */
    public function setBirthState(string $birthState) : self
    {
        $this->birthState = $birthState;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCollege() : string
    {
        return $this->college;
    }
    /**
     * 
     *
     * @param string $college
     *
     * @return self
     */
    public function setCollege(string $college) : self
    {
        $this->college = $college;
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
    public function getSportRadarPlayerID() : string
    {
        return $this->sportRadarPlayerID;
    }
    /**
     * 
     *
     * @param string $sportRadarPlayerID
     *
     * @return self
     */
    public function setSportRadarPlayerID(string $sportRadarPlayerID) : self
    {
        $this->sportRadarPlayerID = $sportRadarPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPgaTourPlayerID() : int
    {
        return $this->pgaTourPlayerID;
    }
    /**
     * 
     *
     * @param int $pgaTourPlayerID
     *
     * @return self
     */
    public function setPgaTourPlayerID(int $pgaTourPlayerID) : self
    {
        $this->pgaTourPlayerID = $pgaTourPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRotoworldPlayerID() : int
    {
        return $this->rotoworldPlayerID;
    }
    /**
     * 
     *
     * @param int $rotoworldPlayerID
     *
     * @return self
     */
    public function setRotoworldPlayerID(int $rotoworldPlayerID) : self
    {
        $this->rotoworldPlayerID = $rotoworldPlayerID;
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
     * @return int
     */
    public function getFantasyAlarmPlayerID() : int
    {
        return $this->fantasyAlarmPlayerID;
    }
    /**
     * 
     *
     * @param int $fantasyAlarmPlayerID
     *
     * @return self
     */
    public function setFantasyAlarmPlayerID(int $fantasyAlarmPlayerID) : self
    {
        $this->fantasyAlarmPlayerID = $fantasyAlarmPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDraftKingsName() : string
    {
        return $this->draftKingsName;
    }
    /**
     * 
     *
     * @param string $draftKingsName
     *
     * @return self
     */
    public function setDraftKingsName(string $draftKingsName) : self
    {
        $this->draftKingsName = $draftKingsName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFantasyDraftName() : string
    {
        return $this->fantasyDraftName;
    }
    /**
     * 
     *
     * @param string $fantasyDraftName
     *
     * @return self
     */
    public function setFantasyDraftName(string $fantasyDraftName) : self
    {
        $this->fantasyDraftName = $fantasyDraftName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFanDuelName() : string
    {
        return $this->fanDuelName;
    }
    /**
     * 
     *
     * @param string $fanDuelName
     *
     * @return self
     */
    public function setFanDuelName(string $fanDuelName) : self
    {
        $this->fanDuelName = $fanDuelName;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFantasyDraftPlayerID() : int
    {
        return $this->fantasyDraftPlayerID;
    }
    /**
     * 
     *
     * @param int $fantasyDraftPlayerID
     *
     * @return self
     */
    public function setFantasyDraftPlayerID(int $fantasyDraftPlayerID) : self
    {
        $this->fantasyDraftPlayerID = $fantasyDraftPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDraftKingsPlayerID() : int
    {
        return $this->draftKingsPlayerID;
    }
    /**
     * 
     *
     * @param int $draftKingsPlayerID
     *
     * @return self
     */
    public function setDraftKingsPlayerID(int $draftKingsPlayerID) : self
    {
        $this->draftKingsPlayerID = $draftKingsPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFanDuelPlayerID() : int
    {
        return $this->fanDuelPlayerID;
    }
    /**
     * 
     *
     * @param int $fanDuelPlayerID
     *
     * @return self
     */
    public function setFanDuelPlayerID(int $fanDuelPlayerID) : self
    {
        $this->fanDuelPlayerID = $fanDuelPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getYahooPlayerID() : int
    {
        return $this->yahooPlayerID;
    }
    /**
     * 
     *
     * @param int $yahooPlayerID
     *
     * @return self
     */
    public function setYahooPlayerID(int $yahooPlayerID) : self
    {
        $this->yahooPlayerID = $yahooPlayerID;
        return $this;
    }
}