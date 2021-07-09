<?php

namespace Sportsdata\API\NBA\Model;

class BettingOutcomeResult
{
    /**
     * 
     *
     * @var int
     */
    protected $bettingOutcomeID;
    /**
     * 
     *
     * @var int|null
     */
    protected $bettingResultTypeID;
    /**
     * 
     *
     * @var string|null
     */
    protected $bettingResultType;
    /**
     * 
     *
     * @return int
     */
    public function getBettingOutcomeID() : int
    {
        return $this->bettingOutcomeID;
    }
    /**
     * 
     *
     * @param int $bettingOutcomeID
     *
     * @return self
     */
    public function setBettingOutcomeID(int $bettingOutcomeID) : self
    {
        $this->bettingOutcomeID = $bettingOutcomeID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBettingResultTypeID() : ?int
    {
        return $this->bettingResultTypeID;
    }
    /**
     * 
     *
     * @param int|null $bettingResultTypeID
     *
     * @return self
     */
    public function setBettingResultTypeID(?int $bettingResultTypeID) : self
    {
        $this->bettingResultTypeID = $bettingResultTypeID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBettingResultType() : ?string
    {
        return $this->bettingResultType;
    }
    /**
     * 
     *
     * @param string|null $bettingResultType
     *
     * @return self
     */
    public function setBettingResultType(?string $bettingResultType) : self
    {
        $this->bettingResultType = $bettingResultType;
        return $this;
    }
}