<?php

namespace Sportsdata\API\NHL\Model;

class DfsSlatePlayer
{
    /**
     * 
     *
     * @var int
     */
    protected $slatePlayerID;
    /**
     * 
     *
     * @var int
     */
    protected $slateID;
    /**
     * 
     *
     * @var int
     */
    protected $slateGameID;
    /**
     * 
     *
     * @var int
     */
    protected $playerID;
    /**
     * 
     *
     * @var int
     */
    protected $playerGameProjectionStatID;
    /**
     * 
     *
     * @var string
     */
    protected $operatorPlayerID;
    /**
     * 
     *
     * @var string
     */
    protected $operatorSlatePlayerID;
    /**
     * 
     *
     * @var string
     */
    protected $operatorPlayerName;
    /**
     * 
     *
     * @var string
     */
    protected $operatorPosition;
    /**
     * 
     *
     * @var int
     */
    protected $operatorSalary;
    /**
     * 
     *
     * @var string[]
     */
    protected $operatorRosterSlots;
    /**
     * 
     *
     * @var bool
     */
    protected $removedByOperator;
    /**
     * 
     *
     * @var string
     */
    protected $team;
    /**
     * 
     *
     * @var int
     */
    protected $teamID;
    /**
     * 
     *
     * @return int
     */
    public function getSlatePlayerID() : int
    {
        return $this->slatePlayerID;
    }
    /**
     * 
     *
     * @param int $slatePlayerID
     *
     * @return self
     */
    public function setSlatePlayerID(int $slatePlayerID) : self
    {
        $this->slatePlayerID = $slatePlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSlateID() : int
    {
        return $this->slateID;
    }
    /**
     * 
     *
     * @param int $slateID
     *
     * @return self
     */
    public function setSlateID(int $slateID) : self
    {
        $this->slateID = $slateID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSlateGameID() : int
    {
        return $this->slateGameID;
    }
    /**
     * 
     *
     * @param int $slateGameID
     *
     * @return self
     */
    public function setSlateGameID(int $slateGameID) : self
    {
        $this->slateGameID = $slateGameID;
        return $this;
    }
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
     * @return int
     */
    public function getPlayerGameProjectionStatID() : int
    {
        return $this->playerGameProjectionStatID;
    }
    /**
     * 
     *
     * @param int $playerGameProjectionStatID
     *
     * @return self
     */
    public function setPlayerGameProjectionStatID(int $playerGameProjectionStatID) : self
    {
        $this->playerGameProjectionStatID = $playerGameProjectionStatID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOperatorPlayerID() : string
    {
        return $this->operatorPlayerID;
    }
    /**
     * 
     *
     * @param string $operatorPlayerID
     *
     * @return self
     */
    public function setOperatorPlayerID(string $operatorPlayerID) : self
    {
        $this->operatorPlayerID = $operatorPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOperatorSlatePlayerID() : string
    {
        return $this->operatorSlatePlayerID;
    }
    /**
     * 
     *
     * @param string $operatorSlatePlayerID
     *
     * @return self
     */
    public function setOperatorSlatePlayerID(string $operatorSlatePlayerID) : self
    {
        $this->operatorSlatePlayerID = $operatorSlatePlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOperatorPlayerName() : string
    {
        return $this->operatorPlayerName;
    }
    /**
     * 
     *
     * @param string $operatorPlayerName
     *
     * @return self
     */
    public function setOperatorPlayerName(string $operatorPlayerName) : self
    {
        $this->operatorPlayerName = $operatorPlayerName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOperatorPosition() : string
    {
        return $this->operatorPosition;
    }
    /**
     * 
     *
     * @param string $operatorPosition
     *
     * @return self
     */
    public function setOperatorPosition(string $operatorPosition) : self
    {
        $this->operatorPosition = $operatorPosition;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOperatorSalary() : int
    {
        return $this->operatorSalary;
    }
    /**
     * 
     *
     * @param int $operatorSalary
     *
     * @return self
     */
    public function setOperatorSalary(int $operatorSalary) : self
    {
        $this->operatorSalary = $operatorSalary;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getOperatorRosterSlots() : array
    {
        return $this->operatorRosterSlots;
    }
    /**
     * 
     *
     * @param string[] $operatorRosterSlots
     *
     * @return self
     */
    public function setOperatorRosterSlots(array $operatorRosterSlots) : self
    {
        $this->operatorRosterSlots = $operatorRosterSlots;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getRemovedByOperator() : bool
    {
        return $this->removedByOperator;
    }
    /**
     * 
     *
     * @param bool $removedByOperator
     *
     * @return self
     */
    public function setRemovedByOperator(bool $removedByOperator) : self
    {
        $this->removedByOperator = $removedByOperator;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTeam() : string
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param string $team
     *
     * @return self
     */
    public function setTeam(string $team) : self
    {
        $this->team = $team;
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
}