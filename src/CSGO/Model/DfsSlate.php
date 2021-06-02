<?php

namespace Sportsdata\API\CSGO\Model;

class DfsSlate
{
    /**
     * 
     *
     * @var int
     */
    protected $slateID;
    /**
     * 
     *
     * @var string
     */
    protected $operator;
    /**
     * 
     *
     * @var int
     */
    protected $operatorSlateID;
    /**
     * 
     *
     * @var string
     */
    protected $operatorName;
    /**
     * 
     *
     * @var string
     */
    protected $operatorDay;
    /**
     * 
     *
     * @var string
     */
    protected $operatorStartTime;
    /**
     * 
     *
     * @var int
     */
    protected $numberOfGames;
    /**
     * 
     *
     * @var bool
     */
    protected $isMultiDaySlate;
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
    protected $operatorGameType;
    /**
     * 
     *
     * @var DfsSlateGame[]
     */
    protected $dfsSlateGames;
    /**
     * 
     *
     * @var DfsSlatePlayer[]
     */
    protected $dfsSlatePlayers;
    /**
     * 
     *
     * @var string[]
     */
    protected $slateRosterSlots;
    /**
     * 
     *
     * @var int
     */
    protected $salaryCap;
    /**
     * 
     *
     * @var int
     */
    protected $videoGameId;
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
     * @return string
     */
    public function getOperator() : string
    {
        return $this->operator;
    }
    /**
     * 
     *
     * @param string $operator
     *
     * @return self
     */
    public function setOperator(string $operator) : self
    {
        $this->operator = $operator;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOperatorSlateID() : int
    {
        return $this->operatorSlateID;
    }
    /**
     * 
     *
     * @param int $operatorSlateID
     *
     * @return self
     */
    public function setOperatorSlateID(int $operatorSlateID) : self
    {
        $this->operatorSlateID = $operatorSlateID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOperatorName() : string
    {
        return $this->operatorName;
    }
    /**
     * 
     *
     * @param string $operatorName
     *
     * @return self
     */
    public function setOperatorName(string $operatorName) : self
    {
        $this->operatorName = $operatorName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOperatorDay() : string
    {
        return $this->operatorDay;
    }
    /**
     * 
     *
     * @param string $operatorDay
     *
     * @return self
     */
    public function setOperatorDay(string $operatorDay) : self
    {
        $this->operatorDay = $operatorDay;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOperatorStartTime() : string
    {
        return $this->operatorStartTime;
    }
    /**
     * 
     *
     * @param string $operatorStartTime
     *
     * @return self
     */
    public function setOperatorStartTime(string $operatorStartTime) : self
    {
        $this->operatorStartTime = $operatorStartTime;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNumberOfGames() : int
    {
        return $this->numberOfGames;
    }
    /**
     * 
     *
     * @param int $numberOfGames
     *
     * @return self
     */
    public function setNumberOfGames(int $numberOfGames) : self
    {
        $this->numberOfGames = $numberOfGames;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsMultiDaySlate() : bool
    {
        return $this->isMultiDaySlate;
    }
    /**
     * 
     *
     * @param bool $isMultiDaySlate
     *
     * @return self
     */
    public function setIsMultiDaySlate(bool $isMultiDaySlate) : self
    {
        $this->isMultiDaySlate = $isMultiDaySlate;
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
    public function getOperatorGameType() : string
    {
        return $this->operatorGameType;
    }
    /**
     * 
     *
     * @param string $operatorGameType
     *
     * @return self
     */
    public function setOperatorGameType(string $operatorGameType) : self
    {
        $this->operatorGameType = $operatorGameType;
        return $this;
    }
    /**
     * 
     *
     * @return DfsSlateGame[]
     */
    public function getDfsSlateGames() : array
    {
        return $this->dfsSlateGames;
    }
    /**
     * 
     *
     * @param DfsSlateGame[] $dfsSlateGames
     *
     * @return self
     */
    public function setDfsSlateGames(array $dfsSlateGames) : self
    {
        $this->dfsSlateGames = $dfsSlateGames;
        return $this;
    }
    /**
     * 
     *
     * @return DfsSlatePlayer[]
     */
    public function getDfsSlatePlayers() : array
    {
        return $this->dfsSlatePlayers;
    }
    /**
     * 
     *
     * @param DfsSlatePlayer[] $dfsSlatePlayers
     *
     * @return self
     */
    public function setDfsSlatePlayers(array $dfsSlatePlayers) : self
    {
        $this->dfsSlatePlayers = $dfsSlatePlayers;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getSlateRosterSlots() : array
    {
        return $this->slateRosterSlots;
    }
    /**
     * 
     *
     * @param string[] $slateRosterSlots
     *
     * @return self
     */
    public function setSlateRosterSlots(array $slateRosterSlots) : self
    {
        $this->slateRosterSlots = $slateRosterSlots;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSalaryCap() : int
    {
        return $this->salaryCap;
    }
    /**
     * 
     *
     * @param int $salaryCap
     *
     * @return self
     */
    public function setSalaryCap(int $salaryCap) : self
    {
        $this->salaryCap = $salaryCap;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getVideoGameId() : int
    {
        return $this->videoGameId;
    }
    /**
     * 
     *
     * @param int $videoGameId
     *
     * @return self
     */
    public function setVideoGameId(int $videoGameId) : self
    {
        $this->videoGameId = $videoGameId;
        return $this;
    }
}