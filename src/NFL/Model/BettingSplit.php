<?php

namespace Sportsdata\API\NFL\Model;

class BettingSplit
{
    /**
     * 
     *
     * @var int
     */
    protected $bettingMarketSplitID;
    /**
     * 
     *
     * @var int
     */
    protected $bettingMarketID;
    /**
     * 
     *
     * @var int|null
     */
    protected $bettingOutcomeTypeID;
    /**
     * 
     *
     * @var string|null
     */
    protected $bettingOutcomeType;
    /**
     * 
     *
     * @var int|null
     */
    protected $betPercentage;
    /**
     * 
     *
     * @var int|null
     */
    protected $moneyPercentage;
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
    protected $lastSeen;
    /**
     * 
     *
     * @return int
     */
    public function getBettingMarketSplitID() : int
    {
        return $this->bettingMarketSplitID;
    }
    /**
     * 
     *
     * @param int $bettingMarketSplitID
     *
     * @return self
     */
    public function setBettingMarketSplitID(int $bettingMarketSplitID) : self
    {
        $this->bettingMarketSplitID = $bettingMarketSplitID;
        return $this;
    }
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
     * @return int|null
     */
    public function getBettingOutcomeTypeID() : ?int
    {
        return $this->bettingOutcomeTypeID;
    }
    /**
     * 
     *
     * @param int|null $bettingOutcomeTypeID
     *
     * @return self
     */
    public function setBettingOutcomeTypeID(?int $bettingOutcomeTypeID) : self
    {
        $this->bettingOutcomeTypeID = $bettingOutcomeTypeID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBettingOutcomeType() : ?string
    {
        return $this->bettingOutcomeType;
    }
    /**
     * 
     *
     * @param string|null $bettingOutcomeType
     *
     * @return self
     */
    public function setBettingOutcomeType(?string $bettingOutcomeType) : self
    {
        $this->bettingOutcomeType = $bettingOutcomeType;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBetPercentage() : ?int
    {
        return $this->betPercentage;
    }
    /**
     * 
     *
     * @param int|null $betPercentage
     *
     * @return self
     */
    public function setBetPercentage(?int $betPercentage) : self
    {
        $this->betPercentage = $betPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMoneyPercentage() : ?int
    {
        return $this->moneyPercentage;
    }
    /**
     * 
     *
     * @param int|null $moneyPercentage
     *
     * @return self
     */
    public function setMoneyPercentage(?int $moneyPercentage) : self
    {
        $this->moneyPercentage = $moneyPercentage;
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
    public function getLastSeen() : ?string
    {
        return $this->lastSeen;
    }
    /**
     * 
     *
     * @param string|null $lastSeen
     *
     * @return self
     */
    public function setLastSeen(?string $lastSeen) : self
    {
        $this->lastSeen = $lastSeen;
        return $this;
    }
}