<?php

namespace Sportsdata\API\NHL\Model;

class Standing
{
    /**
     * 
     *
     * @var int
     */
    protected $season;
    /**
     * 
     *
     * @var int
     */
    protected $seasonType;
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
     * @var string
     */
    protected $conference;
    /**
     * 
     *
     * @var string
     */
    protected $division;
    /**
     * 
     *
     * @var int
     */
    protected $wins;
    /**
     * 
     *
     * @var int
     */
    protected $losses;
    /**
     * 
     *
     * @var int
     */
    protected $overtimeLosses;
    /**
     * 
     *
     * @var float
     */
    protected $percentage;
    /**
     * 
     *
     * @var int
     */
    protected $conferenceWins;
    /**
     * 
     *
     * @var int
     */
    protected $conferenceLosses;
    /**
     * 
     *
     * @var int
     */
    protected $divisionWins;
    /**
     * 
     *
     * @var int
     */
    protected $divisionLosses;
    /**
     * 
     *
     * @var int
     */
    protected $shutoutWins;
    /**
     * 
     *
     * @var int
     */
    protected $conferenceRank;
    /**
     * 
     *
     * @var int
     */
    protected $divisionRank;
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
    public function getSeason() : int
    {
        return $this->season;
    }
    /**
     * 
     *
     * @param int $season
     *
     * @return self
     */
    public function setSeason(int $season) : self
    {
        $this->season = $season;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSeasonType() : int
    {
        return $this->seasonType;
    }
    /**
     * 
     *
     * @param int $seasonType
     *
     * @return self
     */
    public function setSeasonType(int $seasonType) : self
    {
        $this->seasonType = $seasonType;
        return $this;
    }
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
     * @return string
     */
    public function getConference() : string
    {
        return $this->conference;
    }
    /**
     * 
     *
     * @param string $conference
     *
     * @return self
     */
    public function setConference(string $conference) : self
    {
        $this->conference = $conference;
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
     * @return int
     */
    public function getWins() : int
    {
        return $this->wins;
    }
    /**
     * 
     *
     * @param int $wins
     *
     * @return self
     */
    public function setWins(int $wins) : self
    {
        $this->wins = $wins;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLosses() : int
    {
        return $this->losses;
    }
    /**
     * 
     *
     * @param int $losses
     *
     * @return self
     */
    public function setLosses(int $losses) : self
    {
        $this->losses = $losses;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOvertimeLosses() : int
    {
        return $this->overtimeLosses;
    }
    /**
     * 
     *
     * @param int $overtimeLosses
     *
     * @return self
     */
    public function setOvertimeLosses(int $overtimeLosses) : self
    {
        $this->overtimeLosses = $overtimeLosses;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPercentage() : float
    {
        return $this->percentage;
    }
    /**
     * 
     *
     * @param float $percentage
     *
     * @return self
     */
    public function setPercentage(float $percentage) : self
    {
        $this->percentage = $percentage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getConferenceWins() : int
    {
        return $this->conferenceWins;
    }
    /**
     * 
     *
     * @param int $conferenceWins
     *
     * @return self
     */
    public function setConferenceWins(int $conferenceWins) : self
    {
        $this->conferenceWins = $conferenceWins;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getConferenceLosses() : int
    {
        return $this->conferenceLosses;
    }
    /**
     * 
     *
     * @param int $conferenceLosses
     *
     * @return self
     */
    public function setConferenceLosses(int $conferenceLosses) : self
    {
        $this->conferenceLosses = $conferenceLosses;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDivisionWins() : int
    {
        return $this->divisionWins;
    }
    /**
     * 
     *
     * @param int $divisionWins
     *
     * @return self
     */
    public function setDivisionWins(int $divisionWins) : self
    {
        $this->divisionWins = $divisionWins;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDivisionLosses() : int
    {
        return $this->divisionLosses;
    }
    /**
     * 
     *
     * @param int $divisionLosses
     *
     * @return self
     */
    public function setDivisionLosses(int $divisionLosses) : self
    {
        $this->divisionLosses = $divisionLosses;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getShutoutWins() : int
    {
        return $this->shutoutWins;
    }
    /**
     * 
     *
     * @param int $shutoutWins
     *
     * @return self
     */
    public function setShutoutWins(int $shutoutWins) : self
    {
        $this->shutoutWins = $shutoutWins;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getConferenceRank() : int
    {
        return $this->conferenceRank;
    }
    /**
     * 
     *
     * @param int $conferenceRank
     *
     * @return self
     */
    public function setConferenceRank(int $conferenceRank) : self
    {
        $this->conferenceRank = $conferenceRank;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDivisionRank() : int
    {
        return $this->divisionRank;
    }
    /**
     * 
     *
     * @param int $divisionRank
     *
     * @return self
     */
    public function setDivisionRank(int $divisionRank) : self
    {
        $this->divisionRank = $divisionRank;
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