<?php

namespace Sportsdata\API\LOL\Model;

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
     * @var string|null
     */
    protected $operator;
    /**
     * 
     *
     * @var int|null
     */
    protected $operatorSlateID;
    /**
     * 
     *
     * @var string|null
     */
    protected $operatorName;
    /**
     * 
     *
     * @var string|null
     */
    protected $operatorDay;
    /**
     * 
     *
     * @var string|null
     */
    protected $operatorStartTime;
    /**
     * 
     *
     * @var int|null
     */
    protected $numberOfGames;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isMultiDaySlate;
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
     * @var int|null
     */
    protected $salaryCap;
    /**
     * 
     *
     * @var int|null
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
     * @return string|null
     */
    public function getOperator() : ?string
    {
        return $this->operator;
    }
    /**
     * 
     *
     * @param string|null $operator
     *
     * @return self
     */
    public function setOperator(?string $operator) : self
    {
        $this->operator = $operator;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOperatorSlateID() : ?int
    {
        return $this->operatorSlateID;
    }
    /**
     * 
     *
     * @param int|null $operatorSlateID
     *
     * @return self
     */
    public function setOperatorSlateID(?int $operatorSlateID) : self
    {
        $this->operatorSlateID = $operatorSlateID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOperatorName() : ?string
    {
        return $this->operatorName;
    }
    /**
     * 
     *
     * @param string|null $operatorName
     *
     * @return self
     */
    public function setOperatorName(?string $operatorName) : self
    {
        $this->operatorName = $operatorName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOperatorDay() : ?string
    {
        return $this->operatorDay;
    }
    /**
     * 
     *
     * @param string|null $operatorDay
     *
     * @return self
     */
    public function setOperatorDay(?string $operatorDay) : self
    {
        $this->operatorDay = $operatorDay;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOperatorStartTime() : ?string
    {
        return $this->operatorStartTime;
    }
    /**
     * 
     *
     * @param string|null $operatorStartTime
     *
     * @return self
     */
    public function setOperatorStartTime(?string $operatorStartTime) : self
    {
        $this->operatorStartTime = $operatorStartTime;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getNumberOfGames() : ?int
    {
        return $this->numberOfGames;
    }
    /**
     * 
     *
     * @param int|null $numberOfGames
     *
     * @return self
     */
    public function setNumberOfGames(?int $numberOfGames) : self
    {
        $this->numberOfGames = $numberOfGames;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsMultiDaySlate() : ?bool
    {
        return $this->isMultiDaySlate;
    }
    /**
     * 
     *
     * @param bool|null $isMultiDaySlate
     *
     * @return self
     */
    public function setIsMultiDaySlate(?bool $isMultiDaySlate) : self
    {
        $this->isMultiDaySlate = $isMultiDaySlate;
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
    public function getOperatorGameType() : ?string
    {
        return $this->operatorGameType;
    }
    /**
     * 
     *
     * @param string|null $operatorGameType
     *
     * @return self
     */
    public function setOperatorGameType(?string $operatorGameType) : self
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
     * @return int|null
     */
    public function getSalaryCap() : ?int
    {
        return $this->salaryCap;
    }
    /**
     * 
     *
     * @param int|null $salaryCap
     *
     * @return self
     */
    public function setSalaryCap(?int $salaryCap) : self
    {
        $this->salaryCap = $salaryCap;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getVideoGameId() : ?int
    {
        return $this->videoGameId;
    }
    /**
     * 
     *
     * @param int|null $videoGameId
     *
     * @return self
     */
    public function setVideoGameId(?int $videoGameId) : self
    {
        $this->videoGameId = $videoGameId;
        return $this;
    }
}