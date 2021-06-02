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
     * @var string
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
     * @var string
     */
    protected $city;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var int
     */
    protected $stadiumID;
    /**
     * 
     *
     * @var string
     */
    protected $league;
    /**
     * 
     *
     * @var string
     */
    protected $division;
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
     * @return int
     */
    public function getStadiumID() : int
    {
        return $this->stadiumID;
    }
    /**
     * 
     *
     * @param int $stadiumID
     *
     * @return self
     */
    public function setStadiumID(int $stadiumID) : self
    {
        $this->stadiumID = $stadiumID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLeague() : string
    {
        return $this->league;
    }
    /**
     * 
     *
     * @param string $league
     *
     * @return self
     */
    public function setLeague(string $league) : self
    {
        $this->league = $league;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDivision() : string
    {
        return $this->division;
    }
    /**
     * 
     *
     * @param string $division
     *
     * @return self
     */
    public function setDivision(string $division) : self
    {
        $this->division = $division;
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