<?php

namespace Sportsdata\API\CBB\Model;

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
    protected $school;
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
    protected $apRank;
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
    protected $globalTeamID;
    /**
     * 
     *
     * @var int
     */
    protected $conferenceID;
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
    protected $teamLogoUrl;
    /**
     * 
     *
     * @var string
     */
    protected $shortDisplayName;
    /**
     * 
     *
     * @var Stadium
     */
    protected $stadium;
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
    public function getSchool() : string
    {
        return $this->school;
    }
    /**
     * 
     *
     * @param string $school
     *
     * @return self
     */
    public function setSchool(string $school) : self
    {
        $this->school = $school;
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
    public function getApRank() : int
    {
        return $this->apRank;
    }
    /**
     * 
     *
     * @param int $apRank
     *
     * @return self
     */
    public function setApRank(int $apRank) : self
    {
        $this->apRank = $apRank;
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
    /**
     * 
     *
     * @return int
     */
    public function getConferenceID() : int
    {
        return $this->conferenceID;
    }
    /**
     * 
     *
     * @param int $conferenceID
     *
     * @return self
     */
    public function setConferenceID(int $conferenceID) : self
    {
        $this->conferenceID = $conferenceID;
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
    public function getTeamLogoUrl() : string
    {
        return $this->teamLogoUrl;
    }
    /**
     * 
     *
     * @param string $teamLogoUrl
     *
     * @return self
     */
    public function setTeamLogoUrl(string $teamLogoUrl) : self
    {
        $this->teamLogoUrl = $teamLogoUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getShortDisplayName() : string
    {
        return $this->shortDisplayName;
    }
    /**
     * 
     *
     * @param string $shortDisplayName
     *
     * @return self
     */
    public function setShortDisplayName(string $shortDisplayName) : self
    {
        $this->shortDisplayName = $shortDisplayName;
        return $this;
    }
    /**
     * 
     *
     * @return Stadium
     */
    public function getStadium() : Stadium
    {
        return $this->stadium;
    }
    /**
     * 
     *
     * @param Stadium $stadium
     *
     * @return self
     */
    public function setStadium(Stadium $stadium) : self
    {
        $this->stadium = $stadium;
        return $this;
    }
}