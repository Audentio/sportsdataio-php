<?php

namespace Sportsdata\API\CSGO\Model;

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
     * @var Game
     */
    protected $game;
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
     * @return Game
     */
    public function getGame() : Game
    {
        return $this->game;
    }
    /**
     * 
     *
     * @param Game $game
     *
     * @return self
     */
    public function setGame(Game $game) : self
    {
        $this->game = $game;
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
}