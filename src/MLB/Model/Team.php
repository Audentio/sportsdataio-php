<?php

namespace Sportsdata\API\MLB\Model;

class Team
{
    /**
     * 
     *
     * @var int
     */
    protected $teamID;
    /**
     * 
     *
     * @var string|null
     */
    protected $key;
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
    protected $city;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var int|null
     */
    protected $stadiumID;
    /**
     * 
     *
     * @var string|null
     */
    protected $league;
    /**
     * 
     *
     * @var string|null
     */
    protected $division;
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
    protected $wikipediaLogoUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $wikipediaWordMarkUrl;
    /**
     * 
     *
     * @var int
     */
    protected $globalTeamID;
    /**
     * 
     *
     * @return int
     */
    public function getTeamID() : int
    {
        return $this->teamID;
    }
    /**
     * 
     *
     * @param int $teamID
     *
     * @return self
     */
    public function setTeamID(int $teamID) : self
    {
        $this->teamID = $teamID;
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
     * @return int|null
     */
    public function getStadiumID() : ?int
    {
        return $this->stadiumID;
    }
    /**
     * 
     *
     * @param int|null $stadiumID
     *
     * @return self
     */
    public function setStadiumID(?int $stadiumID) : self
    {
        $this->stadiumID = $stadiumID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLeague() : ?string
    {
        return $this->league;
    }
    /**
     * 
     *
     * @param string|null $league
     *
     * @return self
     */
    public function setLeague(?string $league) : self
    {
        $this->league = $league;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDivision() : ?string
    {
        return $this->division;
    }
    /**
     * 
     *
     * @param string|null $division
     *
     * @return self
     */
    public function setDivision(?string $division) : self
    {
        $this->division = $division;
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
    public function getWikipediaLogoUrl() : ?string
    {
        return $this->wikipediaLogoUrl;
    }
    /**
     * 
     *
     * @param string|null $wikipediaLogoUrl
     *
     * @return self
     */
    public function setWikipediaLogoUrl(?string $wikipediaLogoUrl) : self
    {
        $this->wikipediaLogoUrl = $wikipediaLogoUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getWikipediaWordMarkUrl() : ?string
    {
        return $this->wikipediaWordMarkUrl;
    }
    /**
     * 
     *
     * @param string|null $wikipediaWordMarkUrl
     *
     * @return self
     */
    public function setWikipediaWordMarkUrl(?string $wikipediaWordMarkUrl) : self
    {
        $this->wikipediaWordMarkUrl = $wikipediaWordMarkUrl;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGlobalTeamID() : int
    {
        return $this->globalTeamID;
    }
    /**
     * 
     *
     * @param int $globalTeamID
     *
     * @return self
     */
    public function setGlobalTeamID(int $globalTeamID) : self
    {
        $this->globalTeamID = $globalTeamID;
        return $this;
    }
}