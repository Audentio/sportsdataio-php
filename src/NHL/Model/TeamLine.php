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
     * @var string|null
     */
    protected $key;
    /**
     * 
     *
     * @var string|null
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
    public function getFullName() : ?string
    {
        return $this->fullName;
    }
    /**
     * 
     *
     * @param string|null $fullName
     *
     * @return self
     */
    public function setFullName(?string $fullName) : self
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