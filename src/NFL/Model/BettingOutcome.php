<?php

namespace Sportsdata\API\NFL\Model;

class BettingOutcome
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
     * @var int
     */
    protected $bettingMarketID;
    /**
     * 
     *
     * @var Sportsbook
     */
    protected $sportsBook;
    /**
     * 
     *
     * @var int
     */
    protected $bettingOutcomeTypeID;
    /**
     * 
     *
     * @var string
     */
    protected $bettingOutcomeType;
    /**
     * 
     *
     * @var int
     */
    protected $payoutAmerican;
    /**
     * 
     *
     * @var float
     */
    protected $payoutDecimal;
    /**
     * 
     *
     * @var float
     */
    protected $value;
    /**
     * 
     *
     * @var string
     */
    protected $participant;
    /**
     * 
     *
     * @var bool
     */
    protected $isAvailable;
    /**
     * 
     *
     * @var bool
     */
    protected $isAlternate;
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
     * @var string
     */
    protected $unlisted;
    /**
     * 
     *
     * @var int
     */
    protected $teamID;
    /**
     * 
     *
     * @var int
     */
    protected $playerID;
    /**
     * 
     *
     * @var int
     */
    protected $globalTeamID;
    /**
     * 
     *
     * @var string
     */
    protected $sportsbookUrl;
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
     * @return Sportsbook
     */
    public function getSportsBook() : Sportsbook
    {
        return $this->sportsBook;
    }
    /**
     * 
     *
     * @param Sportsbook $sportsBook
     *
     * @return self
     */
    public function setSportsBook(Sportsbook $sportsBook) : self
    {
        $this->sportsBook = $sportsBook;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBettingOutcomeTypeID() : int
    {
        return $this->bettingOutcomeTypeID;
    }
    /**
     * 
     *
     * @param int $bettingOutcomeTypeID
     *
     * @return self
     */
    public function setBettingOutcomeTypeID(int $bettingOutcomeTypeID) : self
    {
        $this->bettingOutcomeTypeID = $bettingOutcomeTypeID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBettingOutcomeType() : string
    {
        return $this->bettingOutcomeType;
    }
    /**
     * 
     *
     * @param string $bettingOutcomeType
     *
     * @return self
     */
    public function setBettingOutcomeType(string $bettingOutcomeType) : self
    {
        $this->bettingOutcomeType = $bettingOutcomeType;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPayoutAmerican() : int
    {
        return $this->payoutAmerican;
    }
    /**
     * 
     *
     * @param int $payoutAmerican
     *
     * @return self
     */
    public function setPayoutAmerican(int $payoutAmerican) : self
    {
        $this->payoutAmerican = $payoutAmerican;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPayoutDecimal() : float
    {
        return $this->payoutDecimal;
    }
    /**
     * 
     *
     * @param float $payoutDecimal
     *
     * @return self
     */
    public function setPayoutDecimal(float $payoutDecimal) : self
    {
        $this->payoutDecimal = $payoutDecimal;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getValue() : float
    {
        return $this->value;
    }
    /**
     * 
     *
     * @param float $value
     *
     * @return self
     */
    public function setValue(float $value) : self
    {
        $this->value = $value;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getParticipant() : string
    {
        return $this->participant;
    }
    /**
     * 
     *
     * @param string $participant
     *
     * @return self
     */
    public function setParticipant(string $participant) : self
    {
        $this->participant = $participant;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsAvailable() : bool
    {
        return $this->isAvailable;
    }
    /**
     * 
     *
     * @param bool $isAvailable
     *
     * @return self
     */
    public function setIsAvailable(bool $isAvailable) : self
    {
        $this->isAvailable = $isAvailable;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsAlternate() : bool
    {
        return $this->isAlternate;
    }
    /**
     * 
     *
     * @param bool $isAlternate
     *
     * @return self
     */
    public function setIsAlternate(bool $isAlternate) : self
    {
        $this->isAlternate = $isAlternate;
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
     * @return string
     */
    public function getUnlisted() : string
    {
        return $this->unlisted;
    }
    /**
     * 
     *
     * @param string $unlisted
     *
     * @return self
     */
    public function setUnlisted(string $unlisted) : self
    {
        $this->unlisted = $unlisted;
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
     * @return int
     */
    public function getGlobalTeamID() : int
    {
        return $this->globalTeamID;
    }
    /**
     * 
     *
     * @param int $globalTeamID
     *
     * @return self
     */
    public function setGlobalTeamID(int $globalTeamID) : self
    {
        $this->globalTeamID = $globalTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSportsbookUrl() : string
    {
        return $this->sportsbookUrl;
    }
    /**
     * 
     *
     * @param string $sportsbookUrl
     *
     * @return self
     */
    public function setSportsbookUrl(string $sportsbookUrl) : self
    {
        $this->sportsbookUrl = $sportsbookUrl;
        return $this;
    }
}