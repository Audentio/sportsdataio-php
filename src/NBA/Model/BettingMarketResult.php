<?php

namespace Sportsdata\API\NBA\Model;

class BettingMarketResult
{
    /**
     * 
     *
     * @var int
     */
    protected $bettingMarketID;
    /**
     * 
     *
     * @var int
     */
    protected $bettingMarketTypeID;
    /**
     * 
     *
     * @var string|null
     */
    protected $bettingMarketType;
    /**
     * 
     *
     * @var int
     */
    protected $bettingBetTypeID;
    /**
     * 
     *
     * @var string|null
     */
    protected $bettingBetType;
    /**
     * 
     *
     * @var int
     */
    protected $bettingPeriodTypeID;
    /**
     * 
     *
     * @var string|null
     */
    protected $bettingPeriodType;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var int|null
     */
    protected $teamID;
    /**
     * 
     *
     * @var string|null
     */
    protected $teamKey;
    /**
     * 
     *
     * @var int|null
     */
    protected $playerID;
    /**
     * 
     *
     * @var string|null
     */
    protected $playerName;
    /**
     * 
     *
     * @var BettingOutcomeResult[]
     */
    protected $bettingOutcomeResults;
    /**
     * 
     *
     * @return int
     */
    public function getBettingMarketID() : int
    {
        return $this->bettingMarketID;
    }
    /**
     * 
     *
     * @param int $bettingMarketID
     *
     * @return self
     */
    public function setBettingMarketID(int $bettingMarketID) : self
    {
        $this->bettingMarketID = $bettingMarketID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBettingMarketTypeID() : int
    {
        return $this->bettingMarketTypeID;
    }
    /**
     * 
     *
     * @param int $bettingMarketTypeID
     *
     * @return self
     */
    public function setBettingMarketTypeID(int $bettingMarketTypeID) : self
    {
        $this->bettingMarketTypeID = $bettingMarketTypeID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBettingMarketType() : ?string
    {
        return $this->bettingMarketType;
    }
    /**
     * 
     *
     * @param string|null $bettingMarketType
     *
     * @return self
     */
    public function setBettingMarketType(?string $bettingMarketType) : self
    {
        $this->bettingMarketType = $bettingMarketType;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBettingBetTypeID() : int
    {
        return $this->bettingBetTypeID;
    }
    /**
     * 
     *
     * @param int $bettingBetTypeID
     *
     * @return self
     */
    public function setBettingBetTypeID(int $bettingBetTypeID) : self
    {
        $this->bettingBetTypeID = $bettingBetTypeID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBettingBetType() : ?string
    {
        return $this->bettingBetType;
    }
    /**
     * 
     *
     * @param string|null $bettingBetType
     *
     * @return self
     */
    public function setBettingBetType(?string $bettingBetType) : self
    {
        $this->bettingBetType = $bettingBetType;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBettingPeriodTypeID() : int
    {
        return $this->bettingPeriodTypeID;
    }
    /**
     * 
     *
     * @param int $bettingPeriodTypeID
     *
     * @return self
     */
    public function setBettingPeriodTypeID(int $bettingPeriodTypeID) : self
    {
        $this->bettingPeriodTypeID = $bettingPeriodTypeID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBettingPeriodType() : ?string
    {
        return $this->bettingPeriodType;
    }
    /**
     * 
     *
     * @param string|null $bettingPeriodType
     *
     * @return self
     */
    public function setBettingPeriodType(?string $bettingPeriodType) : self
    {
        $this->bettingPeriodType = $bettingPeriodType;
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
    /**
     * 
     *
     * @return string|null
     */
    public function getTeamKey() : ?string
    {
        return $this->teamKey;
    }
    /**
     * 
     *
     * @param string|null $teamKey
     *
     * @return self
     */
    public function setTeamKey(?string $teamKey) : self
    {
        $this->teamKey = $teamKey;
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
     * @return string|null
     */
    public function getPlayerName() : ?string
    {
        return $this->playerName;
    }
    /**
     * 
     *
     * @param string|null $playerName
     *
     * @return self
     */
    public function setPlayerName(?string $playerName) : self
    {
        $this->playerName = $playerName;
        return $this;
    }
    /**
     * 
     *
     * @return BettingOutcomeResult[]
     */
    public function getBettingOutcomeResults() : array
    {
        return $this->bettingOutcomeResults;
    }
    /**
     * 
     *
     * @param BettingOutcomeResult[] $bettingOutcomeResults
     *
     * @return self
     */
    public function setBettingOutcomeResults(array $bettingOutcomeResults) : self
    {
        $this->bettingOutcomeResults = $bettingOutcomeResults;
        return $this;
    }
}