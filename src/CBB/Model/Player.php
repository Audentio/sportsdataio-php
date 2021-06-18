<?php

namespace Sportsdata\API\CBB\Model;

class Player
{
    /**
     * 
     *
     * @var int
     */
    protected $playerID;
    /**
     * 
     *
     * @var string|null
     */
    protected $firstName;
    /**
     * 
     *
     * @var string|null
     */
    protected $lastName;
    /**
     * 
     *
     * @var int|null
     */
    protected $teamID;
    /**
     * 
     *
     * @var string|null
     */
    protected $team;
    /**
     * 
     *
     * @var int|null
     */
    protected $jersey;
    /**
     * 
     *
     * @var string|null
     */
    protected $position;
    /**
     * 
     *
     * @var string|null
     */
    protected $class;
    /**
     * 
     *
     * @var int|null
     */
    protected $height;
    /**
     * 
     *
     * @var int|null
     */
    protected $weight;
    /**
     * 
     *
     * @var string|null
     */
    protected $birthCity;
    /**
     * 
     *
     * @var string|null
     */
    protected $birthState;
    /**
     * 
     *
     * @var string|null
     */
    protected $highSchool;
    /**
     * 
     *
     * @var string|null
     */
    protected $sportRadarPlayerID;
    /**
     * 
     *
     * @var int|null
     */
    protected $rotoworldPlayerID;
    /**
     * 
     *
     * @var int|null
     */
    protected $rotoWirePlayerID;
    /**
     * 
     *
     * @var int|null
     */
    protected $fantasyAlarmPlayerID;
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
    public function getPlayerID() : int
    {
        return $this->playerID;
    }
    /**
     * 
     *
     * @param int $playerID
     *
     * @return self
     */
    public function setPlayerID(int $playerID) : self
    {
        $this->playerID = $playerID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFirstName() : ?string
    {
        return $this->firstName;
    }
    /**
     * 
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setFirstName(?string $firstName) : self
    {
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLastName() : ?string
    {
        return $this->lastName;
    }
    /**
     * 
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setLastName(?string $lastName) : self
    {
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTeamID() : ?int
    {
        return $this->teamID;
    }
    /**
     * 
     *
     * @param int|null $teamID
     *
     * @return self
     */
    public function setTeamID(?int $teamID) : self
    {
        $this->teamID = $teamID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTeam() : ?string
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param string|null $team
     *
     * @return self
     */
    public function setTeam(?string $team) : self
    {
        $this->team = $team;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getJersey() : ?int
    {
        return $this->jersey;
    }
    /**
     * 
     *
     * @param int|null $jersey
     *
     * @return self
     */
    public function setJersey(?int $jersey) : self
    {
        $this->jersey = $jersey;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPosition() : ?string
    {
        return $this->position;
    }
    /**
     * 
     *
     * @param string|null $position
     *
     * @return self
     */
    public function setPosition(?string $position) : self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getClass() : ?string
    {
        return $this->class;
    }
    /**
     * 
     *
     * @param string|null $class
     *
     * @return self
     */
    public function setClass(?string $class) : self
    {
        $this->class = $class;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHeight() : ?int
    {
        return $this->height;
    }
    /**
     * 
     *
     * @param int|null $height
     *
     * @return self
     */
    public function setHeight(?int $height) : self
    {
        $this->height = $height;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getWeight() : ?int
    {
        return $this->weight;
    }
    /**
     * 
     *
     * @param int|null $weight
     *
     * @return self
     */
    public function setWeight(?int $weight) : self
    {
        $this->weight = $weight;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBirthCity() : ?string
    {
        return $this->birthCity;
    }
    /**
     * 
     *
     * @param string|null $birthCity
     *
     * @return self
     */
    public function setBirthCity(?string $birthCity) : self
    {
        $this->birthCity = $birthCity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBirthState() : ?string
    {
        return $this->birthState;
    }
    /**
     * 
     *
     * @param string|null $birthState
     *
     * @return self
     */
    public function setBirthState(?string $birthState) : self
    {
        $this->birthState = $birthState;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHighSchool() : ?string
    {
        return $this->highSchool;
    }
    /**
     * 
     *
     * @param string|null $highSchool
     *
     * @return self
     */
    public function setHighSchool(?string $highSchool) : self
    {
        $this->highSchool = $highSchool;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSportRadarPlayerID() : ?string
    {
        return $this->sportRadarPlayerID;
    }
    /**
     * 
     *
     * @param string|null $sportRadarPlayerID
     *
     * @return self
     */
    public function setSportRadarPlayerID(?string $sportRadarPlayerID) : self
    {
        $this->sportRadarPlayerID = $sportRadarPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRotoworldPlayerID() : ?int
    {
        return $this->rotoworldPlayerID;
    }
    /**
     * 
     *
     * @param int|null $rotoworldPlayerID
     *
     * @return self
     */
    public function setRotoworldPlayerID(?int $rotoworldPlayerID) : self
    {
        $this->rotoworldPlayerID = $rotoworldPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRotoWirePlayerID() : ?int
    {
        return $this->rotoWirePlayerID;
    }
    /**
     * 
     *
     * @param int|null $rotoWirePlayerID
     *
     * @return self
     */
    public function setRotoWirePlayerID(?int $rotoWirePlayerID) : self
    {
        $this->rotoWirePlayerID = $rotoWirePlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFantasyAlarmPlayerID() : ?int
    {
        return $this->fantasyAlarmPlayerID;
    }
    /**
     * 
     *
     * @param int|null $fantasyAlarmPlayerID
     *
     * @return self
     */
    public function setFantasyAlarmPlayerID(?int $fantasyAlarmPlayerID) : self
    {
        $this->fantasyAlarmPlayerID = $fantasyAlarmPlayerID;
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