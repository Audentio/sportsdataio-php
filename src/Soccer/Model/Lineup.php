<?php

namespace Sportsdata\API\Soccer\Model;

class Lineup
{
    /**
     * 
     *
     * @var int
     */
    protected $lineupId;
    /**
     * 
     *
     * @var int
     */
    protected $gameId;
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
    protected $position;
    /**
     * 
     *
     * @var int
     */
    protected $replacedPlayerId;
    /**
     * 
     *
     * @var string
     */
    protected $replacedPlayerName;
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
     * @var int
     */
    protected $pitchPositionHorizontal;
    /**
     * 
     *
     * @var int
     */
    protected $pitchPositionVertical;
    /**
     * 
     *
     * @return int
     */
    public function getLineupId() : int
    {
        return $this->lineupId;
    }
    /**
     * 
     *
     * @param int $lineupId
     *
     * @return self
     */
    public function setLineupId(int $lineupId) : self
    {
        $this->lineupId = $lineupId;
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
    public function getPosition() : string
    {
        return $this->position;
    }
    /**
     * 
     *
     * @param string $position
     *
     * @return self
     */
    public function setPosition(string $position) : self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getReplacedPlayerId() : int
    {
        return $this->replacedPlayerId;
    }
    /**
     * 
     *
     * @param int $replacedPlayerId
     *
     * @return self
     */
    public function setReplacedPlayerId(int $replacedPlayerId) : self
    {
        $this->replacedPlayerId = $replacedPlayerId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReplacedPlayerName() : string
    {
        return $this->replacedPlayerName;
    }
    /**
     * 
     *
     * @param string $replacedPlayerName
     *
     * @return self
     */
    public function setReplacedPlayerName(string $replacedPlayerName) : self
    {
        $this->replacedPlayerName = $replacedPlayerName;
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
    /**
     * 
     *
     * @return int
     */
    public function getPitchPositionHorizontal() : int
    {
        return $this->pitchPositionHorizontal;
    }
    /**
     * 
     *
     * @param int $pitchPositionHorizontal
     *
     * @return self
     */
    public function setPitchPositionHorizontal(int $pitchPositionHorizontal) : self
    {
        $this->pitchPositionHorizontal = $pitchPositionHorizontal;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPitchPositionVertical() : int
    {
        return $this->pitchPositionVertical;
    }
    /**
     * 
     *
     * @param int $pitchPositionVertical
     *
     * @return self
     */
    public function setPitchPositionVertical(int $pitchPositionVertical) : self
    {
        $this->pitchPositionVertical = $pitchPositionVertical;
        return $this;
    }
}