<?php

namespace Sportsdata\API\NFL\Model;

class PlayerReceiving
{
    /**
     * 
     *
     * @var int|null
     */
    protected $playerGameID;
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
    protected $shortName;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $team;
    /**
     * 
     *
     * @var int
     */
    protected $number;
    /**
     * 
     *
     * @var string|null
     */
    protected $position;
    /**
     * 
     *
     * @var string|null
     */
    protected $positionCategory;
    /**
     * 
     *
     * @var string|null
     */
    protected $fantasyPosition;
    /**
     * 
     *
     * @var float|null
     */
    protected $fantasyPoints;
    /**
     * 
     *
     * @var string|null
     */
    protected $updated;
    /**
     * 
     *
     * @var int
     */
    protected $receptions;
    /**
     * 
     *
     * @var int
     */
    protected $receivingTargets;
    /**
     * 
     *
     * @var int
     */
    protected $receivingYards;
    /**
     * 
     *
     * @var int
     */
    protected $receivingTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $receivingLong;
    /**
     * 
     *
     * @var float
     */
    protected $receivingYardsPerReception;
    /**
     * 
     *
     * @var float
     */
    protected $receivingYardsPerTarget;
    /**
     * 
     *
     * @var float
     */
    protected $receptionPercentage;
    /**
     * 
     *
     * @var int
     */
    protected $fumblesLost;
    /**
     * 
     *
     * @var int
     */
    protected $twoPointConversionReceptions;
    /**
     * 
     *
     * @return int|null
     */
    public function getPlayerGameID() : ?int
    {
        return $this->playerGameID;
    }
    /**
     * 
     *
     * @param int|null $playerGameID
     *
     * @return self
     */
    public function setPlayerGameID(?int $playerGameID) : self
    {
        $this->playerGameID = $playerGameID;
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
    public function getShortName() : ?string
    {
        return $this->shortName;
    }
    /**
     * 
     *
     * @param string|null $shortName
     *
     * @return self
     */
    public function setShortName(?string $shortName) : self
    {
        $this->shortName = $shortName;
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
     * @return string|null
     */
    public function getTeam() : ?string
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param string|null $team
     *
     * @return self
     */
    public function setTeam(?string $team) : self
    {
        $this->team = $team;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNumber() : int
    {
        return $this->number;
    }
    /**
     * 
     *
     * @param int $number
     *
     * @return self
     */
    public function setNumber(int $number) : self
    {
        $this->number = $number;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPosition() : ?string
    {
        return $this->position;
    }
    /**
     * 
     *
     * @param string|null $position
     *
     * @return self
     */
    public function setPosition(?string $position) : self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPositionCategory() : ?string
    {
        return $this->positionCategory;
    }
    /**
     * 
     *
     * @param string|null $positionCategory
     *
     * @return self
     */
    public function setPositionCategory(?string $positionCategory) : self
    {
        $this->positionCategory = $positionCategory;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFantasyPosition() : ?string
    {
        return $this->fantasyPosition;
    }
    /**
     * 
     *
     * @param string|null $fantasyPosition
     *
     * @return self
     */
    public function setFantasyPosition(?string $fantasyPosition) : self
    {
        $this->fantasyPosition = $fantasyPosition;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFantasyPoints() : ?float
    {
        return $this->fantasyPoints;
    }
    /**
     * 
     *
     * @param float|null $fantasyPoints
     *
     * @return self
     */
    public function setFantasyPoints(?float $fantasyPoints) : self
    {
        $this->fantasyPoints = $fantasyPoints;
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
     * @return int
     */
    public function getReceptions() : int
    {
        return $this->receptions;
    }
    /**
     * 
     *
     * @param int $receptions
     *
     * @return self
     */
    public function setReceptions(int $receptions) : self
    {
        $this->receptions = $receptions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getReceivingTargets() : int
    {
        return $this->receivingTargets;
    }
    /**
     * 
     *
     * @param int $receivingTargets
     *
     * @return self
     */
    public function setReceivingTargets(int $receivingTargets) : self
    {
        $this->receivingTargets = $receivingTargets;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getReceivingYards() : int
    {
        return $this->receivingYards;
    }
    /**
     * 
     *
     * @param int $receivingYards
     *
     * @return self
     */
    public function setReceivingYards(int $receivingYards) : self
    {
        $this->receivingYards = $receivingYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getReceivingTouchdowns() : int
    {
        return $this->receivingTouchdowns;
    }
    /**
     * 
     *
     * @param int $receivingTouchdowns
     *
     * @return self
     */
    public function setReceivingTouchdowns(int $receivingTouchdowns) : self
    {
        $this->receivingTouchdowns = $receivingTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getReceivingLong() : int
    {
        return $this->receivingLong;
    }
    /**
     * 
     *
     * @param int $receivingLong
     *
     * @return self
     */
    public function setReceivingLong(int $receivingLong) : self
    {
        $this->receivingLong = $receivingLong;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getReceivingYardsPerReception() : float
    {
        return $this->receivingYardsPerReception;
    }
    /**
     * 
     *
     * @param float $receivingYardsPerReception
     *
     * @return self
     */
    public function setReceivingYardsPerReception(float $receivingYardsPerReception) : self
    {
        $this->receivingYardsPerReception = $receivingYardsPerReception;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getReceivingYardsPerTarget() : float
    {
        return $this->receivingYardsPerTarget;
    }
    /**
     * 
     *
     * @param float $receivingYardsPerTarget
     *
     * @return self
     */
    public function setReceivingYardsPerTarget(float $receivingYardsPerTarget) : self
    {
        $this->receivingYardsPerTarget = $receivingYardsPerTarget;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getReceptionPercentage() : float
    {
        return $this->receptionPercentage;
    }
    /**
     * 
     *
     * @param float $receptionPercentage
     *
     * @return self
     */
    public function setReceptionPercentage(float $receptionPercentage) : self
    {
        $this->receptionPercentage = $receptionPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFumblesLost() : int
    {
        return $this->fumblesLost;
    }
    /**
     * 
     *
     * @param int $fumblesLost
     *
     * @return self
     */
    public function setFumblesLost(int $fumblesLost) : self
    {
        $this->fumblesLost = $fumblesLost;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTwoPointConversionReceptions() : int
    {
        return $this->twoPointConversionReceptions;
    }
    /**
     * 
     *
     * @param int $twoPointConversionReceptions
     *
     * @return self
     */
    public function setTwoPointConversionReceptions(int $twoPointConversionReceptions) : self
    {
        $this->twoPointConversionReceptions = $twoPointConversionReceptions;
        return $this;
    }
}