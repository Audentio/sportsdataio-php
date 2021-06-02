<?php

namespace Sportsdata\API\NHL\Model;

class TeamLine
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
     * @var string
     */
    protected $fullName;
    /**
     * 
     *
     * @var PlayerLine[]
     */
    protected $evenStrengthLines;
    /**
     * 
     *
     * @var PlayerLine[]
     */
    protected $powerPlayLines;
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
    public function getFullName() : string
    {
        return $this->fullName;
    }
    /**
     * 
     *
     * @param string $fullName
     *
     * @return self
     */
    public function setFullName(string $fullName) : self
    {
        $this->fullName = $fullName;
        return $this;
    }
    /**
     * 
     *
     * @return PlayerLine[]
     */
    public function getEvenStrengthLines() : array
    {
        return $this->evenStrengthLines;
    }
    /**
     * 
     *
     * @param PlayerLine[] $evenStrengthLines
     *
     * @return self
     */
    public function setEvenStrengthLines(array $evenStrengthLines) : self
    {
        $this->evenStrengthLines = $evenStrengthLines;
        return $this;
    }
    /**
     * 
     *
     * @return PlayerLine[]
     */
    public function getPowerPlayLines() : array
    {
        return $this->powerPlayLines;
    }
    /**
     * 
     *
     * @param PlayerLine[] $powerPlayLines
     *
     * @return self
     */
    public function setPowerPlayLines(array $powerPlayLines) : self
    {
        $this->powerPlayLines = $powerPlayLines;
        return $this;
    }
}