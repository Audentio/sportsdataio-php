<?php

namespace Sportsdata\API\CBB\Model;

class BettingMarket
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
    protected $bettingEventID;
    /**
     * 
     *
     * @var int
     */
    protected $bettingMarketTypeID;
    /**
     * 
     *
     * @var string
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
     * @var string
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
     * @var string
     */
    protected $bettingPeriodType;
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
    protected $teamID;
    /**
     * 
     *
     * @var string
     */
    protected $teamKey;
    /**
     * 
     *
     * @var int
     */
    protected $playerID;
    /**
     * 
     *
     * @var string
     */
    protected $playerName;
    /**
     * 
     *
     * @var string
     */
    protected $created;
    /**
     * 
     *
     * @var string
     */
    protected $updated;
    /**
     * 
     *
     * @var Sportsbook[]
     */
    protected $availableSportsbooks;
    /**
     * 
     *
     * @var bool
     */
    protected $anyBetsAvailable;
    /**
     * 
     *
     * @var BettingOutcome[]
     */
    protected $bettingOutcomes;
    /**
     * 
     *
     * @var ConsensusOutcome[]
     */
    protected $consensusOutcomes;
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
    public function getBettingEventID() : int
    {
        return $this->bettingEventID;
    }
    /**
     * 
     *
     * @param int $bettingEventID
     *
     * @return self
     */
    public function setBettingEventID(int $bettingEventID) : self
    {
        $this->bettingEventID = $bettingEventID;
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
     * @return string
     */
    public function getBettingMarketType() : string
    {
        return $this->bettingMarketType;
    }
    /**
     * 
     *
     * @param string $bettingMarketType
     *
     * @return self
     */
    public function setBettingMarketType(string $bettingMarketType) : self
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
     * @return string
     */
    public function getBettingBetType() : string
    {
        return $this->bettingBetType;
    }
    /**
     * 
     *
     * @param string $bettingBetType
     *
     * @return self
     */
    public function setBettingBetType(string $bettingBetType) : self
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
     * @return string
     */
    public function getBettingPeriodType() : string
    {
        return $this->bettingPeriodType;
    }
    /**
     * 
     *
     * @param string $bettingPeriodType
     *
     * @return self
     */
    public function setBettingPeriodType(string $bettingPeriodType) : self
    {
        $this->bettingPeriodType = $bettingPeriodType;
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
    public function getTeamID() : int
    {
        return $this->teamID;
    }
    /**
     * 
     *
     * @param int $teamID
     *
     * @return self
     */
    public function setTeamID(int $teamID) : self
    {
        $this->teamID = $teamID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTeamKey() : string
    {
        return $this->teamKey;
    }
    /**
     * 
     *
     * @param string $teamKey
     *
     * @return self
     */
    public function setTeamKey(string $teamKey) : self
    {
        $this->teamKey = $teamKey;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPlayerID() : int
    {
        return $this->playerID;
    }
    /**
     * 
     *
     * @param int $playerID
     *
     * @return self
     */
    public function setPlayerID(int $playerID) : self
    {
        $this->playerID = $playerID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPlayerName() : string
    {
        return $this->playerName;
    }
    /**
     * 
     *
     * @param string $playerName
     *
     * @return self
     */
    public function setPlayerName(string $playerName) : self
    {
        $this->playerName = $playerName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCreated() : string
    {
        return $this->created;
    }
    /**
     * 
     *
     * @param string $created
     *
     * @return self
     */
    public function setCreated(string $created) : self
    {
        $this->created = $created;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUpdated() : string
    {
        return $this->updated;
    }
    /**
     * 
     *
     * @param string $updated
     *
     * @return self
     */
    public function setUpdated(string $updated) : self
    {
        $this->updated = $updated;
        return $this;
    }
    /**
     * 
     *
     * @return Sportsbook[]
     */
    public function getAvailableSportsbooks() : array
    {
        return $this->availableSportsbooks;
    }
    /**
     * 
     *
     * @param Sportsbook[] $availableSportsbooks
     *
     * @return self
     */
    public function setAvailableSportsbooks(array $availableSportsbooks) : self
    {
        $this->availableSportsbooks = $availableSportsbooks;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAnyBetsAvailable() : bool
    {
        return $this->anyBetsAvailable;
    }
    /**
     * 
     *
     * @param bool $anyBetsAvailable
     *
     * @return self
     */
    public function setAnyBetsAvailable(bool $anyBetsAvailable) : self
    {
        $this->anyBetsAvailable = $anyBetsAvailable;
        return $this;
    }
    /**
     * 
     *
     * @return BettingOutcome[]
     */
    public function getBettingOutcomes() : array
    {
        return $this->bettingOutcomes;
    }
    /**
     * 
     *
     * @param BettingOutcome[] $bettingOutcomes
     *
     * @return self
     */
    public function setBettingOutcomes(array $bettingOutcomes) : self
    {
        $this->bettingOutcomes = $bettingOutcomes;
        return $this;
    }
    /**
     * 
     *
     * @return ConsensusOutcome[]
     */
    public function getConsensusOutcomes() : array
    {
        return $this->consensusOutcomes;
    }
    /**
     * 
     *
     * @param ConsensusOutcome[] $consensusOutcomes
     *
     * @return self
     */
    public function setConsensusOutcomes(array $consensusOutcomes) : self
    {
        $this->consensusOutcomes = $consensusOutcomes;
        return $this;
    }
}