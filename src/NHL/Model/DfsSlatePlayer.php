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
     * @var int|null
     */
    protected $slateGameID;
    /**
     * 
     *
     * @var int|null
     */
    protected $playerID;
    /**
     * 
     *
     * @var int|null
     */
    protected $playerGameProjectionStatID;
    /**
     * 
     *
     * @var string|null
     */
    protected $operatorPlayerID;
    /**
     * 
     *
     * @var string|null
     */
    protected $operatorSlatePlayerID;
    /**
     * 
     *
     * @var string|null
     */
    protected $operatorPlayerName;
    /**
     * 
     *
     * @var string|null
     */
    protected $operatorPosition;
    /**
     * 
     *
     * @var int|null
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
     * @var bool|null
     */
    protected $removedByOperator;
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
     * @return int|null
     */
    public function getSlateGameID() : ?int
    {
        return $this->slateGameID;
    }
    /**
     * 
     *
     * @param int|null $slateGameID
     *
     * @return self
     */
    public function setSlateGameID(?int $slateGameID) : self
    {
        $this->slateGameID = $slateGameID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPlayerID() : ?int
    {
        return $this->playerID;
    }
    /**
     * 
     *
     * @param int|null $playerID
     *
     * @return self
     */
    public function setPlayerID(?int $playerID) : self
    {
        $this->playerID = $playerID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPlayerGameProjectionStatID() : ?int
    {
        return $this->playerGameProjectionStatID;
    }
    /**
     * 
     *
     * @param int|null $playerGameProjectionStatID
     *
     * @return self
     */
    public function setPlayerGameProjectionStatID(?int $playerGameProjectionStatID) : self
    {
        $this->playerGameProjectionStatID = $playerGameProjectionStatID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOperatorPlayerID() : ?string
    {
        return $this->operatorPlayerID;
    }
    /**
     * 
     *
     * @param string|null $operatorPlayerID
     *
     * @return self
     */
    public function setOperatorPlayerID(?string $operatorPlayerID) : self
    {
        $this->operatorPlayerID = $operatorPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOperatorSlatePlayerID() : ?string
    {
        return $this->operatorSlatePlayerID;
    }
    /**
     * 
     *
     * @param string|null $operatorSlatePlayerID
     *
     * @return self
     */
    public function setOperatorSlatePlayerID(?string $operatorSlatePlayerID) : self
    {
        $this->operatorSlatePlayerID = $operatorSlatePlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOperatorPlayerName() : ?string
    {
        return $this->operatorPlayerName;
    }
    /**
     * 
     *
     * @param string|null $operatorPlayerName
     *
     * @return self
     */
    public function setOperatorPlayerName(?string $operatorPlayerName) : self
    {
        $this->operatorPlayerName = $operatorPlayerName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOperatorPosition() : ?string
    {
        return $this->operatorPosition;
    }
    /**
     * 
     *
     * @param string|null $operatorPosition
     *
     * @return self
     */
    public function setOperatorPosition(?string $operatorPosition) : self
    {
        $this->operatorPosition = $operatorPosition;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOperatorSalary() : ?int
    {
        return $this->operatorSalary;
    }
    /**
     * 
     *
     * @param int|null $operatorSalary
     *
     * @return self
     */
    public function setOperatorSalary(?int $operatorSalary) : self
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
     * @return bool|null
     */
    public function getRemovedByOperator() : ?bool
    {
        return $this->removedByOperator;
    }
    /**
     * 
     *
     * @param bool|null $removedByOperator
     *
     * @return self
     */
    public function setRemovedByOperator(?bool $removedByOperator) : self
    {
        $this->removedByOperator = $removedByOperator;
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
}