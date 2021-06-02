<?php

namespace Sportsdata\API\MMA\Model;

class FightDetail
{
    /**
     * 
     *
     * @var FightStat[]
     */
    protected $fightStats;
    /**
     * 
     *
     * @var int
     */
    protected $fightId;
    /**
     * 
     *
     * @var int
     */
    protected $order;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var string
     */
    protected $weightClass;
    /**
     * 
     *
     * @var string
     */
    protected $cardSegment;
    /**
     * 
     *
     * @var string
     */
    protected $referee;
    /**
     * 
     *
     * @var int
     */
    protected $rounds;
    /**
     * 
     *
     * @var int
     */
    protected $resultClock;
    /**
     * 
     *
     * @var int
     */
    protected $resultRound;
    /**
     * 
     *
     * @var string
     */
    protected $resultType;
    /**
     * 
     *
     * @var int
     */
    protected $winnerId;
    /**
     * 
     *
     * @var FighterInfo[]
     */
    protected $fighters;
    /**
     * 
     *
     * @var bool
     */
    protected $active;
    /**
     * 
     *
     * @return FightStat[]
     */
    public function getFightStats() : array
    {
        return $this->fightStats;
    }
    /**
     * 
     *
     * @param FightStat[] $fightStats
     *
     * @return self
     */
    public function setFightStats(array $fightStats) : self
    {
        $this->fightStats = $fightStats;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFightId() : int
    {
        return $this->fightId;
    }
    /**
     * 
     *
     * @param int $fightId
     *
     * @return self
     */
    public function setFightId(int $fightId) : self
    {
        $this->fightId = $fightId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOrder() : int
    {
        return $this->order;
    }
    /**
     * 
     *
     * @param int $order
     *
     * @return self
     */
    public function setOrder(int $order) : self
    {
        $this->order = $order;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getWeightClass() : string
    {
        return $this->weightClass;
    }
    /**
     * 
     *
     * @param string $weightClass
     *
     * @return self
     */
    public function setWeightClass(string $weightClass) : self
    {
        $this->weightClass = $weightClass;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCardSegment() : string
    {
        return $this->cardSegment;
    }
    /**
     * 
     *
     * @param string $cardSegment
     *
     * @return self
     */
    public function setCardSegment(string $cardSegment) : self
    {
        $this->cardSegment = $cardSegment;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReferee() : string
    {
        return $this->referee;
    }
    /**
     * 
     *
     * @param string $referee
     *
     * @return self
     */
    public function setReferee(string $referee) : self
    {
        $this->referee = $referee;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRounds() : int
    {
        return $this->rounds;
    }
    /**
     * 
     *
     * @param int $rounds
     *
     * @return self
     */
    public function setRounds(int $rounds) : self
    {
        $this->rounds = $rounds;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getResultClock() : int
    {
        return $this->resultClock;
    }
    /**
     * 
     *
     * @param int $resultClock
     *
     * @return self
     */
    public function setResultClock(int $resultClock) : self
    {
        $this->resultClock = $resultClock;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getResultRound() : int
    {
        return $this->resultRound;
    }
    /**
     * 
     *
     * @param int $resultRound
     *
     * @return self
     */
    public function setResultRound(int $resultRound) : self
    {
        $this->resultRound = $resultRound;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getResultType() : string
    {
        return $this->resultType;
    }
    /**
     * 
     *
     * @param string $resultType
     *
     * @return self
     */
    public function setResultType(string $resultType) : self
    {
        $this->resultType = $resultType;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getWinnerId() : int
    {
        return $this->winnerId;
    }
    /**
     * 
     *
     * @param int $winnerId
     *
     * @return self
     */
    public function setWinnerId(int $winnerId) : self
    {
        $this->winnerId = $winnerId;
        return $this;
    }
    /**
     * 
     *
     * @return FighterInfo[]
     */
    public function getFighters() : array
    {
        return $this->fighters;
    }
    /**
     * 
     *
     * @param FighterInfo[] $fighters
     *
     * @return self
     */
    public function setFighters(array $fighters) : self
    {
        $this->fighters = $fighters;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getActive() : bool
    {
        return $this->active;
    }
    /**
     * 
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active) : self
    {
        $this->active = $active;
        return $this;
    }
}