<?php

namespace Sportsdata\API\CWBB\Model;

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
}