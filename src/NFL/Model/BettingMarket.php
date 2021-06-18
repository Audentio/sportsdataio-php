<?php

namespace Sportsdata\API\NFL\Model;

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
     * @var int|null
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
     * @var int|null
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
     * @var int|null
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
     * @var string|null
     */
    protected $created;
    /**
     * 
     *
     * @var string|null
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
     * @var bool|null
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
     * @return int|null
     */
    public function getBettingMarketTypeID() : ?int
    {
        return $this->bettingMarketTypeID;
    }
    /**
     * 
     *
     * @param int|null $bettingMarketTypeID
     *
     * @return self
     */
    public function setBettingMarketTypeID(?int $bettingMarketTypeID) : self
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
     * @return int|null
     */
    public function getBettingBetTypeID() : ?int
    {
        return $this->bettingBetTypeID;
    }
    /**
     * 
     *
     * @param int|null $bettingBetTypeID
     *
     * @return self
     */
    public function setBettingBetTypeID(?int $bettingBetTypeID) : self
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
     * @return int|null
     */
    public function getBettingPeriodTypeID() : ?int
    {
        return $this->bettingPeriodTypeID;
    }
    /**
     * 
     *
     * @param int|null $bettingPeriodTypeID
     *
     * @return self
     */
    public function setBettingPeriodTypeID(?int $bettingPeriodTypeID) : self
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
     * @return string|null
     */
    public function getCreated() : ?string
    {
        return $this->created;
    }
    /**
     * 
     *
     * @param string|null $created
     *
     * @return self
     */
    public function setCreated(?string $created) : self
    {
        $this->created = $created;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUpdated() : ?string
    {
        return $this->updated;
    }
    /**
     * 
     *
     * @param string|null $updated
     *
     * @return self
     */
    public function setUpdated(?string $updated) : self
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
     * @return bool|null
     */
    public function getAnyBetsAvailable() : ?bool
    {
        return $this->anyBetsAvailable;
    }
    /**
     * 
     *
     * @param bool|null $anyBetsAvailable
     *
     * @return self
     */
    public function setAnyBetsAvailable(?bool $anyBetsAvailable) : self
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