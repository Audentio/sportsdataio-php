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
     * @var int|null
     */
    protected $playerId;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
    /**
     * 
     *
     * @var int|null
     */
    protected $assistedByPlayerId1;
    /**
     * 
     *
     * @var string|null
     */
    protected $assistedByPlayerName1;
    /**
     * 
     *
     * @var int|null
     */
    protected $assistedByPlayerId2;
    /**
     * 
     *
     * @var string|null
     */
    protected $assistedByPlayerName2;
    /**
     * 
     *
     * @var int|null
     */
    protected $gameMinute;
    /**
     * 
     *
     * @var int|null
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
     * @return int|null
     */
    public function getPlayerId() : ?int
    {
        return $this->playerId;
    }
    /**
     * 
     *
     * @param int|null $playerId
     *
     * @return self
     */
    public function setPlayerId(?int $playerId) : self
    {
        $this->playerId = $playerId;
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
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAssistedByPlayerId1() : ?int
    {
        return $this->assistedByPlayerId1;
    }
    /**
     * 
     *
     * @param int|null $assistedByPlayerId1
     *
     * @return self
     */
    public function setAssistedByPlayerId1(?int $assistedByPlayerId1) : self
    {
        $this->assistedByPlayerId1 = $assistedByPlayerId1;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAssistedByPlayerName1() : ?string
    {
        return $this->assistedByPlayerName1;
    }
    /**
     * 
     *
     * @param string|null $assistedByPlayerName1
     *
     * @return self
     */
    public function setAssistedByPlayerName1(?string $assistedByPlayerName1) : self
    {
        $this->assistedByPlayerName1 = $assistedByPlayerName1;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAssistedByPlayerId2() : ?int
    {
        return $this->assistedByPlayerId2;
    }
    /**
     * 
     *
     * @param int|null $assistedByPlayerId2
     *
     * @return self
     */
    public function setAssistedByPlayerId2(?int $assistedByPlayerId2) : self
    {
        $this->assistedByPlayerId2 = $assistedByPlayerId2;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAssistedByPlayerName2() : ?string
    {
        return $this->assistedByPlayerName2;
    }
    /**
     * 
     *
     * @param string|null $assistedByPlayerName2
     *
     * @return self
     */
    public function setAssistedByPlayerName2(?string $assistedByPlayerName2) : self
    {
        $this->assistedByPlayerName2 = $assistedByPlayerName2;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getGameMinute() : ?int
    {
        return $this->gameMinute;
    }
    /**
     * 
     *
     * @param int|null $gameMinute
     *
     * @return self
     */
    public function setGameMinute(?int $gameMinute) : self
    {
        $this->gameMinute = $gameMinute;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getGameMinuteExtra() : ?int
    {
        return $this->gameMinuteExtra;
    }
    /**
     * 
     *
     * @param int|null $gameMinuteExtra
     *
     * @return self
     */
    public function setGameMinuteExtra(?int $gameMinuteExtra) : self
    {
        $this->gameMinuteExtra = $gameMinuteExtra;
        return $this;
    }
}