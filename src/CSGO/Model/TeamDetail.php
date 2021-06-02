<?php

namespace Sportsdata\API\CSGO\Model;

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
     * @var string
     */
    protected $areaName;
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
    protected $shortName;
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
    protected $primaryColor;
    /**
     * 
     *
     * @var string
     */
    protected $secondaryColor;
    /**
     * 
     *
     * @var string
     */
    protected $tertiaryColor;
    /**
     * 
     *
     * @var string
     */
    protected $quaternaryColor;
    /**
     * 
     *
     * @var string
     */
    protected $facebook;
    /**
     * 
     *
     * @var string
     */
    protected $twitter;
    /**
     * 
     *
     * @var string
     */
    protected $youTube;
    /**
     * 
     *
     * @var string
     */
    protected $instagram;
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
    public function getPrimaryColor() : string
    {
        return $this->primaryColor;
    }
    /**
     * 
     *
     * @param string $primaryColor
     *
     * @return self
     */
    public function setPrimaryColor(string $primaryColor) : self
    {
        $this->primaryColor = $primaryColor;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSecondaryColor() : string
    {
        return $this->secondaryColor;
    }
    /**
     * 
     *
     * @param string $secondaryColor
     *
     * @return self
     */
    public function setSecondaryColor(string $secondaryColor) : self
    {
        $this->secondaryColor = $secondaryColor;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTertiaryColor() : string
    {
        return $this->tertiaryColor;
    }
    /**
     * 
     *
     * @param string $tertiaryColor
     *
     * @return self
     */
    public function setTertiaryColor(string $tertiaryColor) : self
    {
        $this->tertiaryColor = $tertiaryColor;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getQuaternaryColor() : string
    {
        return $this->quaternaryColor;
    }
    /**
     * 
     *
     * @param string $quaternaryColor
     *
     * @return self
     */
    public function setQuaternaryColor(string $quaternaryColor) : self
    {
        $this->quaternaryColor = $quaternaryColor;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFacebook() : string
    {
        return $this->facebook;
    }
    /**
     * 
     *
     * @param string $facebook
     *
     * @return self
     */
    public function setFacebook(string $facebook) : self
    {
        $this->facebook = $facebook;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTwitter() : string
    {
        return $this->twitter;
    }
    /**
     * 
     *
     * @param string $twitter
     *
     * @return self
     */
    public function setTwitter(string $twitter) : self
    {
        $this->twitter = $twitter;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getYouTube() : string
    {
        return $this->youTube;
    }
    /**
     * 
     *
     * @param string $youTube
     *
     * @return self
     */
    public function setYouTube(string $youTube) : self
    {
        $this->youTube = $youTube;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInstagram() : string
    {
        return $this->instagram;
    }
    /**
     * 
     *
     * @param string $instagram
     *
     * @return self
     */
    public function setInstagram(string $instagram) : self
    {
        $this->instagram = $instagram;
        return $this;
    }
}