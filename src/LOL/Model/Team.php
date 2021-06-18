<?php

namespace Sportsdata\API\LOL\Model;

class Team
{
    /**
     * 
     *
     * @var int
     */
    protected $teamId;
    /**
     * 
     *
     * @var int|null
     */
    protected $areaId;
    /**
     * 
     *
     * @var string|null
     */
    protected $areaName;
    /**
     * 
     *
     * @var string|null
     */
    protected $key;
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
     * @var string|null
     */
    protected $gender;
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
    /**
     * 
     *
     * @var string|null
     */
    protected $website;
    /**
     * 
     *
     * @var string|null
     */
    protected $email;
    /**
     * 
     *
     * @var int|null
     */
    protected $founded;
    /**
     * 
     *
     * @var string|null
     */
    protected $primaryColor;
    /**
     * 
     *
     * @var string|null
     */
    protected $secondaryColor;
    /**
     * 
     *
     * @var string|null
     */
    protected $tertiaryColor;
    /**
     * 
     *
     * @var string|null
     */
    protected $quaternaryColor;
    /**
     * 
     *
     * @var string|null
     */
    protected $facebook;
    /**
     * 
     *
     * @var string|null
     */
    protected $twitter;
    /**
     * 
     *
     * @var string|null
     */
    protected $youTube;
    /**
     * 
     *
     * @var string|null
     */
    protected $instagram;
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
     * @return int|null
     */
    public function getAreaId() : ?int
    {
        return $this->areaId;
    }
    /**
     * 
     *
     * @param int|null $areaId
     *
     * @return self
     */
    public function setAreaId(?int $areaId) : self
    {
        $this->areaId = $areaId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAreaName() : ?string
    {
        return $this->areaName;
    }
    /**
     * 
     *
     * @param string|null $areaName
     *
     * @return self
     */
    public function setAreaName(?string $areaName) : self
    {
        $this->areaName = $areaName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getKey() : ?string
    {
        return $this->key;
    }
    /**
     * 
     *
     * @param string|null $key
     *
     * @return self
     */
    public function setKey(?string $key) : self
    {
        $this->key = $key;
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
    /**
     * 
     *
     * @return string|null
     */
    public function getWebsite() : ?string
    {
        return $this->website;
    }
    /**
     * 
     *
     * @param string|null $website
     *
     * @return self
     */
    public function setWebsite(?string $website) : self
    {
        $this->website = $website;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFounded() : ?int
    {
        return $this->founded;
    }
    /**
     * 
     *
     * @param int|null $founded
     *
     * @return self
     */
    public function setFounded(?int $founded) : self
    {
        $this->founded = $founded;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPrimaryColor() : ?string
    {
        return $this->primaryColor;
    }
    /**
     * 
     *
     * @param string|null $primaryColor
     *
     * @return self
     */
    public function setPrimaryColor(?string $primaryColor) : self
    {
        $this->primaryColor = $primaryColor;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSecondaryColor() : ?string
    {
        return $this->secondaryColor;
    }
    /**
     * 
     *
     * @param string|null $secondaryColor
     *
     * @return self
     */
    public function setSecondaryColor(?string $secondaryColor) : self
    {
        $this->secondaryColor = $secondaryColor;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTertiaryColor() : ?string
    {
        return $this->tertiaryColor;
    }
    /**
     * 
     *
     * @param string|null $tertiaryColor
     *
     * @return self
     */
    public function setTertiaryColor(?string $tertiaryColor) : self
    {
        $this->tertiaryColor = $tertiaryColor;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getQuaternaryColor() : ?string
    {
        return $this->quaternaryColor;
    }
    /**
     * 
     *
     * @param string|null $quaternaryColor
     *
     * @return self
     */
    public function setQuaternaryColor(?string $quaternaryColor) : self
    {
        $this->quaternaryColor = $quaternaryColor;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFacebook() : ?string
    {
        return $this->facebook;
    }
    /**
     * 
     *
     * @param string|null $facebook
     *
     * @return self
     */
    public function setFacebook(?string $facebook) : self
    {
        $this->facebook = $facebook;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTwitter() : ?string
    {
        return $this->twitter;
    }
    /**
     * 
     *
     * @param string|null $twitter
     *
     * @return self
     */
    public function setTwitter(?string $twitter) : self
    {
        $this->twitter = $twitter;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getYouTube() : ?string
    {
        return $this->youTube;
    }
    /**
     * 
     *
     * @param string|null $youTube
     *
     * @return self
     */
    public function setYouTube(?string $youTube) : self
    {
        $this->youTube = $youTube;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInstagram() : ?string
    {
        return $this->instagram;
    }
    /**
     * 
     *
     * @param string|null $instagram
     *
     * @return self
     */
    public function setInstagram(?string $instagram) : self
    {
        $this->instagram = $instagram;
        return $this;
    }
}