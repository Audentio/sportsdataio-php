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
     * @var string|null
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
     * @var string|null
     */
    protected $conferenceName;
    /**
     * 
     *
     * @var string|null
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
     * @return string|null
     */
    public function getConferenceName() : ?string
    {
        return $this->conferenceName;
    }
    /**
     * 
     *
     * @param string|null $conferenceName
     *
     * @return self
     */
    public function setConferenceName(?string $conferenceName) : self
    {
        $this->conferenceName = $conferenceName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDivisionName() : ?string
    {
        return $this->divisionName;
    }
    /**
     * 
     *
     * @param string|null $divisionName
     *
     * @return self
     */
    public function setDivisionName(?string $divisionName) : self
    {
        $this->divisionName = $divisionName;
        return $this;
    }
}