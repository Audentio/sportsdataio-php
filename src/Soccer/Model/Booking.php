<?php

namespace Sportsdata\API\Soccer\Model;

class Booking
{
    /**
     * 
     *
     * @var int
     */
    protected $bookingId;
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
    public function getBookingId() : int
    {
        return $this->bookingId;
    }
    /**
     * 
     *
     * @param int $bookingId
     *
     * @return self
     */
    public function setBookingId(int $bookingId) : self
    {
        $this->bookingId = $bookingId;
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