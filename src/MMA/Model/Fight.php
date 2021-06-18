<?php

namespace Sportsdata\API\MMA\Model;

class Fight
{
    /**
     * 
     *
     * @var int
     */
    protected $fightId;
    /**
     * 
     *
     * @var int|null
     */
    protected $order;
    /**
     * 
     *
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @var string|null
     */
    protected $weightClass;
    /**
     * 
     *
     * @var string|null
     */
    protected $cardSegment;
    /**
     * 
     *
     * @var string|null
     */
    protected $referee;
    /**
     * 
     *
     * @var int|null
     */
    protected $rounds;
    /**
     * 
     *
     * @var int|null
     */
    protected $resultClock;
    /**
     * 
     *
     * @var int|null
     */
    protected $resultRound;
    /**
     * 
     *
     * @var string|null
     */
    protected $resultType;
    /**
     * 
     *
     * @var int|null
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
     * @var bool|null
     */
    protected $active;
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
     * @return int|null
     */
    public function getOrder() : ?int
    {
        return $this->order;
    }
    /**
     * 
     *
     * @param int|null $order
     *
     * @return self
     */
    public function setOrder(?int $order) : self
    {
        $this->order = $order;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getWeightClass() : ?string
    {
        return $this->weightClass;
    }
    /**
     * 
     *
     * @param string|null $weightClass
     *
     * @return self
     */
    public function setWeightClass(?string $weightClass) : self
    {
        $this->weightClass = $weightClass;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCardSegment() : ?string
    {
        return $this->cardSegment;
    }
    /**
     * 
     *
     * @param string|null $cardSegment
     *
     * @return self
     */
    public function setCardSegment(?string $cardSegment) : self
    {
        $this->cardSegment = $cardSegment;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getReferee() : ?string
    {
        return $this->referee;
    }
    /**
     * 
     *
     * @param string|null $referee
     *
     * @return self
     */
    public function setReferee(?string $referee) : self
    {
        $this->referee = $referee;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRounds() : ?int
    {
        return $this->rounds;
    }
    /**
     * 
     *
     * @param int|null $rounds
     *
     * @return self
     */
    public function setRounds(?int $rounds) : self
    {
        $this->rounds = $rounds;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getResultClock() : ?int
    {
        return $this->resultClock;
    }
    /**
     * 
     *
     * @param int|null $resultClock
     *
     * @return self
     */
    public function setResultClock(?int $resultClock) : self
    {
        $this->resultClock = $resultClock;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getResultRound() : ?int
    {
        return $this->resultRound;
    }
    /**
     * 
     *
     * @param int|null $resultRound
     *
     * @return self
     */
    public function setResultRound(?int $resultRound) : self
    {
        $this->resultRound = $resultRound;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getResultType() : ?string
    {
        return $this->resultType;
    }
    /**
     * 
     *
     * @param string|null $resultType
     *
     * @return self
     */
    public function setResultType(?string $resultType) : self
    {
        $this->resultType = $resultType;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getWinnerId() : ?int
    {
        return $this->winnerId;
    }
    /**
     * 
     *
     * @param int|null $winnerId
     *
     * @return self
     */
    public function setWinnerId(?int $winnerId) : self
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
     * @return bool|null
     */
    public function getActive() : ?bool
    {
        return $this->active;
    }
    /**
     * 
     *
     * @param bool|null $active
     *
     * @return self
     */
    public function setActive(?bool $active) : self
    {
        $this->active = $active;
        return $this;
    }
}