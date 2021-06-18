<?php

namespace Sportsdata\API\MLB\Model;

class BettingOutcome
{
    /**
     * 
     *
     * @var int|null
     */
    protected $bettingOutcomeID;
    /**
     * 
     *
     * @var int|null
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
    protected $payoutAmerican;
    /**
     * 
     *
     * @var float|null
     */
    protected $payoutDecimal;
    /**
     * 
     *
     * @var float|null
     */
    protected $value;
    /**
     * 
     *
     * @var string|null
     */
    protected $participant;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isAvailable;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isAlternate;
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
     * @var string|null
     */
    protected $unlisted;
    /**
     * 
     *
     * @var int|null
     */
    protected $teamID;
    /**
     * 
     *
     * @var int|null
     */
    protected $playerID;
    /**
     * 
     *
     * @var int|null
     */
    protected $globalTeamID;
    /**
     * 
     *
     * @var string|null
     */
    protected $sportsbookUrl;
    /**
     * 
     *
     * @return int|null
     */
    public function getBettingOutcomeID() : ?int
    {
        return $this->bettingOutcomeID;
    }
    /**
     * 
     *
     * @param int|null $bettingOutcomeID
     *
     * @return self
     */
    public function setBettingOutcomeID(?int $bettingOutcomeID) : self
    {
        $this->bettingOutcomeID = $bettingOutcomeID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBettingMarketID() : ?int
    {
        return $this->bettingMarketID;
    }
    /**
     * 
     *
     * @param int|null $bettingMarketID
     *
     * @return self
     */
    public function setBettingMarketID(?int $bettingMarketID) : self
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
    public function getPayoutAmerican() : ?int
    {
        return $this->payoutAmerican;
    }
    /**
     * 
     *
     * @param int|null $payoutAmerican
     *
     * @return self
     */
    public function setPayoutAmerican(?int $payoutAmerican) : self
    {
        $this->payoutAmerican = $payoutAmerican;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPayoutDecimal() : ?float
    {
        return $this->payoutDecimal;
    }
    /**
     * 
     *
     * @param float|null $payoutDecimal
     *
     * @return self
     */
    public function setPayoutDecimal(?float $payoutDecimal) : self
    {
        $this->payoutDecimal = $payoutDecimal;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getValue() : ?float
    {
        return $this->value;
    }
    /**
     * 
     *
     * @param float|null $value
     *
     * @return self
     */
    public function setValue(?float $value) : self
    {
        $this->value = $value;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getParticipant() : ?string
    {
        return $this->participant;
    }
    /**
     * 
     *
     * @param string|null $participant
     *
     * @return self
     */
    public function setParticipant(?string $participant) : self
    {
        $this->participant = $participant;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsAvailable() : ?bool
    {
        return $this->isAvailable;
    }
    /**
     * 
     *
     * @param bool|null $isAvailable
     *
     * @return self
     */
    public function setIsAvailable(?bool $isAvailable) : self
    {
        $this->isAvailable = $isAvailable;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsAlternate() : ?bool
    {
        return $this->isAlternate;
    }
    /**
     * 
     *
     * @param bool|null $isAlternate
     *
     * @return self
     */
    public function setIsAlternate(?bool $isAlternate) : self
    {
        $this->isAlternate = $isAlternate;
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
     * @return string|null
     */
    public function getUnlisted() : ?string
    {
        return $this->unlisted;
    }
    /**
     * 
     *
     * @param string|null $unlisted
     *
     * @return self
     */
    public function setUnlisted(?string $unlisted) : self
    {
        $this->unlisted = $unlisted;
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
     * @return int|null
     */
    public function getGlobalTeamID() : ?int
    {
        return $this->globalTeamID;
    }
    /**
     * 
     *
     * @param int|null $globalTeamID
     *
     * @return self
     */
    public function setGlobalTeamID(?int $globalTeamID) : self
    {
        $this->globalTeamID = $globalTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSportsbookUrl() : ?string
    {
        return $this->sportsbookUrl;
    }
    /**
     * 
     *
     * @param string|null $sportsbookUrl
     *
     * @return self
     */
    public function setSportsbookUrl(?string $sportsbookUrl) : self
    {
        $this->sportsbookUrl = $sportsbookUrl;
        return $this;
    }
}