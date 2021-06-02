<?php

namespace Sportsdata\API\Soccer\Model;

class TeamDetail
{
    /**
     * 
     *
     * @var Player[]
     */
    protected $players;
    /**
     * 
     *
     * @var int
     */
    protected $teamId;
    /**
     * 
     *
     * @var int
     */
    protected $areaId;
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
    protected $key;
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
    protected $fullName;
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
    protected $areaName;
    /**
     * 
     *
     * @var string
     */
    protected $venueName;
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
    protected $type;
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
    protected $phone;
    /**
     * 
     *
     * @var string
     */
    protected $fax;
    /**
     * 
     *
     * @var string
     */
    protected $website;
    /**
     * 
     *
     * @var string
     */
    protected $email;
    /**
     * 
     *
     * @var int
     */
    protected $founded;
    /**
     * 
     *
     * @var string
     */
    protected $clubColor1;
    /**
     * 
     *
     * @var string
     */
    protected $clubColor2;
    /**
     * 
     *
     * @var string
     */
    protected $clubColor3;
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
     * @var string
     */
    protected $nickname3;
    /**
     * 
     *
     * @var string
     */
    protected $wikipediaLogoUrl;
    /**
     * 
     *
     * @var string
     */
    protected $wikipediaWordMarkUrl;
    /**
     * 
     *
     * @var int
     */
    protected $globalTeamId;
    /**
     * 
     *
     * @return Player[]
     */
    public function getPlayers() : array
    {
        return $this->players;
    }
    /**
     * 
     *
     * @param Player[] $players
     *
     * @return self
     */
    public function setPlayers(array $players) : self
    {
        $this->players = $players;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTeamId() : int
    {
        return $this->teamId;
    }
    /**
     * 
     *
     * @param int $teamId
     *
     * @return self
     */
    public function setTeamId(int $teamId) : self
    {
        $this->teamId = $teamId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAreaId() : int
    {
        return $this->areaId;
    }
    /**
     * 
     *
     * @param int $areaId
     *
     * @return self
     */
    public function setAreaId(int $areaId) : self
    {
        $this->areaId = $areaId;
        return $this;
    }
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
    public function getKey() : string
    {
        return $this->key;
    }
    /**
     * 
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key) : self
    {
        $this->key = $key;
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
    public function getFullName() : string
    {
        return $this->fullName;
    }
    /**
     * 
     *
     * @param string $fullName
     *
     * @return self
     */
    public function setFullName(string $fullName) : self
    {
        $this->fullName = $fullName;
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
    public function getAreaName() : string
    {
        return $this->areaName;
    }
    /**
     * 
     *
     * @param string $areaName
     *
     * @return self
     */
    public function setAreaName(string $areaName) : self
    {
        $this->areaName = $areaName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVenueName() : string
    {
        return $this->venueName;
    }
    /**
     * 
     *
     * @param string $venueName
     *
     * @return self
     */
    public function setVenueName(string $venueName) : self
    {
        $this->venueName = $venueName;
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
    public function getPhone() : string
    {
        return $this->phone;
    }
    /**
     * 
     *
     * @param string $phone
     *
     * @return self
     */
    public function setPhone(string $phone) : self
    {
        $this->phone = $phone;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFax() : string
    {
        return $this->fax;
    }
    /**
     * 
     *
     * @param string $fax
     *
     * @return self
     */
    public function setFax(string $fax) : self
    {
        $this->fax = $fax;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getWebsite() : string
    {
        return $this->website;
    }
    /**
     * 
     *
     * @param string $website
     *
     * @return self
     */
    public function setWebsite(string $website) : self
    {
        $this->website = $website;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFounded() : int
    {
        return $this->founded;
    }
    /**
     * 
     *
     * @param int $founded
     *
     * @return self
     */
    public function setFounded(int $founded) : self
    {
        $this->founded = $founded;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getClubColor1() : string
    {
        return $this->clubColor1;
    }
    /**
     * 
     *
     * @param string $clubColor1
     *
     * @return self
     */
    public function setClubColor1(string $clubColor1) : self
    {
        $this->clubColor1 = $clubColor1;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getClubColor2() : string
    {
        return $this->clubColor2;
    }
    /**
     * 
     *
     * @param string $clubColor2
     *
     * @return self
     */
    public function setClubColor2(string $clubColor2) : self
    {
        $this->clubColor2 = $clubColor2;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getClubColor3() : string
    {
        return $this->clubColor3;
    }
    /**
     * 
     *
     * @param string $clubColor3
     *
     * @return self
     */
    public function setClubColor3(string $clubColor3) : self
    {
        $this->clubColor3 = $clubColor3;
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
     * @return string
     */
    public function getNickname3() : string
    {
        return $this->nickname3;
    }
    /**
     * 
     *
     * @param string $nickname3
     *
     * @return self
     */
    public function setNickname3(string $nickname3) : self
    {
        $this->nickname3 = $nickname3;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getWikipediaLogoUrl() : string
    {
        return $this->wikipediaLogoUrl;
    }
    /**
     * 
     *
     * @param string $wikipediaLogoUrl
     *
     * @return self
     */
    public function setWikipediaLogoUrl(string $wikipediaLogoUrl) : self
    {
        $this->wikipediaLogoUrl = $wikipediaLogoUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getWikipediaWordMarkUrl() : string
    {
        return $this->wikipediaWordMarkUrl;
    }
    /**
     * 
     *
     * @param string $wikipediaWordMarkUrl
     *
     * @return self
     */
    public function setWikipediaWordMarkUrl(string $wikipediaWordMarkUrl) : self
    {
        $this->wikipediaWordMarkUrl = $wikipediaWordMarkUrl;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGlobalTeamId() : int
    {
        return $this->globalTeamId;
    }
    /**
     * 
     *
     * @param int $globalTeamId
     *
     * @return self
     */
    public function setGlobalTeamId(int $globalTeamId) : self
    {
        $this->globalTeamId = $globalTeamId;
        return $this;
    }
}