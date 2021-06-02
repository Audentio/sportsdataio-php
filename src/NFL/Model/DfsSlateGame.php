<?php

namespace Sportsdata\API\NFL\Model;

class DfsSlateGame
{
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
    protected $slateID;
    /**
     * 
     *
     * @var int
     */
    protected $gameID;
    /**
     * 
     *
     * @var int
     */
    protected $operatorGameID;
    /**
     * 
     *
     * @var bool
     */
    protected $removedByOperator;
    /**
     * 
     *
     * @var int
     */
    protected $scoreID;
    /**
     * 
     *
     * @var Schedule
     */
    protected $game;
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
    public function getGameID() : int
    {
        return $this->gameID;
    }
    /**
     * 
     *
     * @param int $gameID
     *
     * @return self
     */
    public function setGameID(int $gameID) : self
    {
        $this->gameID = $gameID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOperatorGameID() : int
    {
        return $this->operatorGameID;
    }
    /**
     * 
     *
     * @param int $operatorGameID
     *
     * @return self
     */
    public function setOperatorGameID(int $operatorGameID) : self
    {
        $this->operatorGameID = $operatorGameID;
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
     * @return int
     */
    public function getScoreID() : int
    {
        return $this->scoreID;
    }
    /**
     * 
     *
     * @param int $scoreID
     *
     * @return self
     */
    public function setScoreID(int $scoreID) : self
    {
        $this->scoreID = $scoreID;
        return $this;
    }
    /**
     * 
     *
     * @return Schedule
     */
    public function getGame() : Schedule
    {
        return $this->game;
    }
    /**
     * 
     *
     * @param Schedule $game
     *
     * @return self
     */
    public function setGame(Schedule $game) : self
    {
        $this->game = $game;
        return $this;
    }
}