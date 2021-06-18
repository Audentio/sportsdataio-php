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
     * @var string|null
     */
    protected $key;
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
     * @var string|null
     */
    protected $conference;
    /**
     * 
     *
     * @var string|null
     */
    protected $division;
    /**
     * 
     *
     * @var int|null
     */
    protected $wins;
    /**
     * 
     *
     * @var int|null
     */
    protected $losses;
    /**
     * 
     *
     * @var int|null
     */
    protected $overtimeLosses;
    /**
     * 
     *
     * @var float|null
     */
    protected $percentage;
    /**
     * 
     *
     * @var int|null
     */
    protected $conferenceWins;
    /**
     * 
     *
     * @var int|null
     */
    protected $conferenceLosses;
    /**
     * 
     *
     * @var int|null
     */
    protected $divisionWins;
    /**
     * 
     *
     * @var int|null
     */
    protected $divisionLosses;
    /**
     * 
     *
     * @var int|null
     */
    protected $shutoutWins;
    /**
     * 
     *
     * @var int|null
     */
    protected $conferenceRank;
    /**
     * 
     *
     * @var int|null
     */
    protected $divisionRank;
    /**
     * 
     *
     * @var int|null
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
     * @return string|null
     */
    public function getConference() : ?string
    {
        return $this->conference;
    }
    /**
     * 
     *
     * @param string|null $conference
     *
     * @return self
     */
    public function setConference(?string $conference) : self
    {
        $this->conference = $conference;
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
     * @return int|null
     */
    public function getWins() : ?int
    {
        return $this->wins;
    }
    /**
     * 
     *
     * @param int|null $wins
     *
     * @return self
     */
    public function setWins(?int $wins) : self
    {
        $this->wins = $wins;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLosses() : ?int
    {
        return $this->losses;
    }
    /**
     * 
     *
     * @param int|null $losses
     *
     * @return self
     */
    public function setLosses(?int $losses) : self
    {
        $this->losses = $losses;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOvertimeLosses() : ?int
    {
        return $this->overtimeLosses;
    }
    /**
     * 
     *
     * @param int|null $overtimeLosses
     *
     * @return self
     */
    public function setOvertimeLosses(?int $overtimeLosses) : self
    {
        $this->overtimeLosses = $overtimeLosses;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPercentage() : ?float
    {
        return $this->percentage;
    }
    /**
     * 
     *
     * @param float|null $percentage
     *
     * @return self
     */
    public function setPercentage(?float $percentage) : self
    {
        $this->percentage = $percentage;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getConferenceWins() : ?int
    {
        return $this->conferenceWins;
    }
    /**
     * 
     *
     * @param int|null $conferenceWins
     *
     * @return self
     */
    public function setConferenceWins(?int $conferenceWins) : self
    {
        $this->conferenceWins = $conferenceWins;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getConferenceLosses() : ?int
    {
        return $this->conferenceLosses;
    }
    /**
     * 
     *
     * @param int|null $conferenceLosses
     *
     * @return self
     */
    public function setConferenceLosses(?int $conferenceLosses) : self
    {
        $this->conferenceLosses = $conferenceLosses;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDivisionWins() : ?int
    {
        return $this->divisionWins;
    }
    /**
     * 
     *
     * @param int|null $divisionWins
     *
     * @return self
     */
    public function setDivisionWins(?int $divisionWins) : self
    {
        $this->divisionWins = $divisionWins;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDivisionLosses() : ?int
    {
        return $this->divisionLosses;
    }
    /**
     * 
     *
     * @param int|null $divisionLosses
     *
     * @return self
     */
    public function setDivisionLosses(?int $divisionLosses) : self
    {
        $this->divisionLosses = $divisionLosses;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getShutoutWins() : ?int
    {
        return $this->shutoutWins;
    }
    /**
     * 
     *
     * @param int|null $shutoutWins
     *
     * @return self
     */
    public function setShutoutWins(?int $shutoutWins) : self
    {
        $this->shutoutWins = $shutoutWins;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getConferenceRank() : ?int
    {
        return $this->conferenceRank;
    }
    /**
     * 
     *
     * @param int|null $conferenceRank
     *
     * @return self
     */
    public function setConferenceRank(?int $conferenceRank) : self
    {
        $this->conferenceRank = $conferenceRank;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDivisionRank() : ?int
    {
        return $this->divisionRank;
    }
    /**
     * 
     *
     * @param int|null $divisionRank
     *
     * @return self
     */
    public function setDivisionRank(?int $divisionRank) : self
    {
        $this->divisionRank = $divisionRank;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getGlobalTeamID() : ?int
    {
        return $this->globalTeamID;
    }
    /**
     * 
     *
     * @param int|null $globalTeamID
     *
     * @return self
     */
    public function setGlobalTeamID(?int $globalTeamID) : self
    {
        $this->globalTeamID = $globalTeamID;
        return $this;
    }
}