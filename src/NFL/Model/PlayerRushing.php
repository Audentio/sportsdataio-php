<?php

namespace Sportsdata\API\NFL\Model;

class PlayerRushing
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
    protected $rushingAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $rushingYards;
    /**
     * 
     *
     * @var int
     */
    protected $rushingTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $rushingLong;
    /**
     * 
     *
     * @var float
     */
    protected $rushingYardsPerAttempt;
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
    protected $twoPointConversionRuns;
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
    public function getRushingAttempts() : int
    {
        return $this->rushingAttempts;
    }
    /**
     * 
     *
     * @param int $rushingAttempts
     *
     * @return self
     */
    public function setRushingAttempts(int $rushingAttempts) : self
    {
        $this->rushingAttempts = $rushingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRushingYards() : int
    {
        return $this->rushingYards;
    }
    /**
     * 
     *
     * @param int $rushingYards
     *
     * @return self
     */
    public function setRushingYards(int $rushingYards) : self
    {
        $this->rushingYards = $rushingYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRushingTouchdowns() : int
    {
        return $this->rushingTouchdowns;
    }
    /**
     * 
     *
     * @param int $rushingTouchdowns
     *
     * @return self
     */
    public function setRushingTouchdowns(int $rushingTouchdowns) : self
    {
        $this->rushingTouchdowns = $rushingTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRushingLong() : int
    {
        return $this->rushingLong;
    }
    /**
     * 
     *
     * @param int $rushingLong
     *
     * @return self
     */
    public function setRushingLong(int $rushingLong) : self
    {
        $this->rushingLong = $rushingLong;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRushingYardsPerAttempt() : float
    {
        return $this->rushingYardsPerAttempt;
    }
    /**
     * 
     *
     * @param float $rushingYardsPerAttempt
     *
     * @return self
     */
    public function setRushingYardsPerAttempt(float $rushingYardsPerAttempt) : self
    {
        $this->rushingYardsPerAttempt = $rushingYardsPerAttempt;
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
    public function getTwoPointConversionRuns() : int
    {
        return $this->twoPointConversionRuns;
    }
    /**
     * 
     *
     * @param int $twoPointConversionRuns
     *
     * @return self
     */
    public function setTwoPointConversionRuns(int $twoPointConversionRuns) : self
    {
        $this->twoPointConversionRuns = $twoPointConversionRuns;
        return $this;
    }
}