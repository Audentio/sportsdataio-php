<?php

namespace Sportsdata\API\CFB\Model;

class Conference
{
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
    protected $name;
    /**
     * 
     *
     * @var Team[]
     */
    protected $teams;
    /**
     * 
     *
     * @var string
     */
    protected $conferenceName;
    /**
     * 
     *
     * @var string
     */
    protected $divisionName;
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
     * @return Team[]
     */
    public function getTeams() : array
    {
        return $this->teams;
    }
    /**
     * 
     *
     * @param Team[] $teams
     *
     * @return self
     */
    public function setTeams(array $teams) : self
    {
        $this->teams = $teams;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConferenceName() : string
    {
        return $this->conferenceName;
    }
    /**
     * 
     *
     * @param string $conferenceName
     *
     * @return self
     */
    public function setConferenceName(string $conferenceName) : self
    {
        $this->conferenceName = $conferenceName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDivisionName() : string
    {
        return $this->divisionName;
    }
    /**
     * 
     *
     * @param string $divisionName
     *
     * @return self
     */
    public function setDivisionName(string $divisionName) : self
    {
        $this->divisionName = $divisionName;
        return $this;
    }
}