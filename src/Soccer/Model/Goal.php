<?php

namespace Sportsdata\API\Soccer\Model;

class Goal
{
    /**
     * 
     *
     * @var int
     */
    protected $goalId;
    /**
     * 
     *
     * @var int
     */
    protected $gameId;
    /**
     * 
     *
     * @var int
     */
    protected $teamId;
    /**
     * 
     *
     * @var int
     */
    protected $playerId;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var int
     */
    protected $assistedByPlayerId1;
    /**
     * 
     *
     * @var string
     */
    protected $assistedByPlayerName1;
    /**
     * 
     *
     * @var int
     */
    protected $assistedByPlayerId2;
    /**
     * 
     *
     * @var string
     */
    protected $assistedByPlayerName2;
    /**
     * 
     *
     * @var int
     */
    protected $gameMinute;
    /**
     * 
     *
     * @var int
     */
    protected $gameMinuteExtra;
    /**
     * 
     *
     * @return int
     */
    public function getGoalId() : int
    {
        return $this->goalId;
    }
    /**
     * 
     *
     * @param int $goalId
     *
     * @return self
     */
    public function setGoalId(int $goalId) : self
    {
        $this->goalId = $goalId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGameId() : int
    {
        return $this->gameId;
    }
    /**
     * 
     *
     * @param int $gameId
     *
     * @return self
     */
    public function setGameId(int $gameId) : self
    {
        $this->gameId = $gameId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTeamId() : int
    {
        return $this->teamId;
    }
    /**
     * 
     *
     * @param int $teamId
     *
     * @return self
     */
    public function setTeamId(int $teamId) : self
    {
        $this->teamId = $teamId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPlayerId() : int
    {
        return $this->playerId;
    }
    /**
     * 
     *
     * @param int $playerId
     *
     * @return self
     */
    public function setPlayerId(int $playerId) : self
    {
        $this->playerId = $playerId;
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
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAssistedByPlayerId1() : int
    {
        return $this->assistedByPlayerId1;
    }
    /**
     * 
     *
     * @param int $assistedByPlayerId1
     *
     * @return self
     */
    public function setAssistedByPlayerId1(int $assistedByPlayerId1) : self
    {
        $this->assistedByPlayerId1 = $assistedByPlayerId1;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAssistedByPlayerName1() : string
    {
        return $this->assistedByPlayerName1;
    }
    /**
     * 
     *
     * @param string $assistedByPlayerName1
     *
     * @return self
     */
    public function setAssistedByPlayerName1(string $assistedByPlayerName1) : self
    {
        $this->assistedByPlayerName1 = $assistedByPlayerName1;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAssistedByPlayerId2() : int
    {
        return $this->assistedByPlayerId2;
    }
    /**
     * 
     *
     * @param int $assistedByPlayerId2
     *
     * @return self
     */
    public function setAssistedByPlayerId2(int $assistedByPlayerId2) : self
    {
        $this->assistedByPlayerId2 = $assistedByPlayerId2;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAssistedByPlayerName2() : string
    {
        return $this->assistedByPlayerName2;
    }
    /**
     * 
     *
     * @param string $assistedByPlayerName2
     *
     * @return self
     */
    public function setAssistedByPlayerName2(string $assistedByPlayerName2) : self
    {
        $this->assistedByPlayerName2 = $assistedByPlayerName2;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGameMinute() : int
    {
        return $this->gameMinute;
    }
    /**
     * 
     *
     * @param int $gameMinute
     *
     * @return self
     */
    public function setGameMinute(int $gameMinute) : self
    {
        $this->gameMinute = $gameMinute;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGameMinuteExtra() : int
    {
        return $this->gameMinuteExtra;
    }
    /**
     * 
     *
     * @param int $gameMinuteExtra
     *
     * @return self
     */
    public function setGameMinuteExtra(int $gameMinuteExtra) : self
    {
        $this->gameMinuteExtra = $gameMinuteExtra;
        return $this;
    }
}