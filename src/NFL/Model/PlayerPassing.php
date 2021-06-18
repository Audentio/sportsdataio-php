<?php

namespace Sportsdata\API\NFL\Model;

class PlayerPassing
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
    protected $passingAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $passingCompletions;
    /**
     * 
     *
     * @var int
     */
    protected $passingYards;
    /**
     * 
     *
     * @var int
     */
    protected $passingTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $passingInterceptions;
    /**
     * 
     *
     * @var int
     */
    protected $passingLong;
    /**
     * 
     *
     * @var int
     */
    protected $passingSacks;
    /**
     * 
     *
     * @var int
     */
    protected $passingSackYards;
    /**
     * 
     *
     * @var float
     */
    protected $passingCompletionPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $passingYardsPerAttempt;
    /**
     * 
     *
     * @var float
     */
    protected $passingYardsPerCompletion;
    /**
     * 
     *
     * @var float
     */
    protected $passingRating;
    /**
     * 
     *
     * @var int
     */
    protected $twoPointConversionPasses;
    /**
     * 
     *
     * @var int
     */
    protected $fumblesLost;
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
    public function getPassingAttempts() : int
    {
        return $this->passingAttempts;
    }
    /**
     * 
     *
     * @param int $passingAttempts
     *
     * @return self
     */
    public function setPassingAttempts(int $passingAttempts) : self
    {
        $this->passingAttempts = $passingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPassingCompletions() : int
    {
        return $this->passingCompletions;
    }
    /**
     * 
     *
     * @param int $passingCompletions
     *
     * @return self
     */
    public function setPassingCompletions(int $passingCompletions) : self
    {
        $this->passingCompletions = $passingCompletions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPassingYards() : int
    {
        return $this->passingYards;
    }
    /**
     * 
     *
     * @param int $passingYards
     *
     * @return self
     */
    public function setPassingYards(int $passingYards) : self
    {
        $this->passingYards = $passingYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPassingTouchdowns() : int
    {
        return $this->passingTouchdowns;
    }
    /**
     * 
     *
     * @param int $passingTouchdowns
     *
     * @return self
     */
    public function setPassingTouchdowns(int $passingTouchdowns) : self
    {
        $this->passingTouchdowns = $passingTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPassingInterceptions() : int
    {
        return $this->passingInterceptions;
    }
    /**
     * 
     *
     * @param int $passingInterceptions
     *
     * @return self
     */
    public function setPassingInterceptions(int $passingInterceptions) : self
    {
        $this->passingInterceptions = $passingInterceptions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPassingLong() : int
    {
        return $this->passingLong;
    }
    /**
     * 
     *
     * @param int $passingLong
     *
     * @return self
     */
    public function setPassingLong(int $passingLong) : self
    {
        $this->passingLong = $passingLong;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPassingSacks() : int
    {
        return $this->passingSacks;
    }
    /**
     * 
     *
     * @param int $passingSacks
     *
     * @return self
     */
    public function setPassingSacks(int $passingSacks) : self
    {
        $this->passingSacks = $passingSacks;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPassingSackYards() : int
    {
        return $this->passingSackYards;
    }
    /**
     * 
     *
     * @param int $passingSackYards
     *
     * @return self
     */
    public function setPassingSackYards(int $passingSackYards) : self
    {
        $this->passingSackYards = $passingSackYards;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPassingCompletionPercentage() : float
    {
        return $this->passingCompletionPercentage;
    }
    /**
     * 
     *
     * @param float $passingCompletionPercentage
     *
     * @return self
     */
    public function setPassingCompletionPercentage(float $passingCompletionPercentage) : self
    {
        $this->passingCompletionPercentage = $passingCompletionPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPassingYardsPerAttempt() : float
    {
        return $this->passingYardsPerAttempt;
    }
    /**
     * 
     *
     * @param float $passingYardsPerAttempt
     *
     * @return self
     */
    public function setPassingYardsPerAttempt(float $passingYardsPerAttempt) : self
    {
        $this->passingYardsPerAttempt = $passingYardsPerAttempt;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPassingYardsPerCompletion() : float
    {
        return $this->passingYardsPerCompletion;
    }
    /**
     * 
     *
     * @param float $passingYardsPerCompletion
     *
     * @return self
     */
    public function setPassingYardsPerCompletion(float $passingYardsPerCompletion) : self
    {
        $this->passingYardsPerCompletion = $passingYardsPerCompletion;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPassingRating() : float
    {
        return $this->passingRating;
    }
    /**
     * 
     *
     * @param float $passingRating
     *
     * @return self
     */
    public function setPassingRating(float $passingRating) : self
    {
        $this->passingRating = $passingRating;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTwoPointConversionPasses() : int
    {
        return $this->twoPointConversionPasses;
    }
    /**
     * 
     *
     * @param int $twoPointConversionPasses
     *
     * @return self
     */
    public function setTwoPointConversionPasses(int $twoPointConversionPasses) : self
    {
        $this->twoPointConversionPasses = $twoPointConversionPasses;
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
}