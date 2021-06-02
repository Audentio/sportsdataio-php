<?php

namespace Sportsdata\API\NFL\Model;

class PlayerKicking
{
    /**
     * 
     *
     * @var int
     */
    protected $playerGameID;
    /**
     * 
     *
     * @var int
     */
    protected $playerID;
    /**
     * 
     *
     * @var string
     */
    protected $shortName;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
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
     * @var string
     */
    protected $position;
    /**
     * 
     *
     * @var string
     */
    protected $positionCategory;
    /**
     * 
     *
     * @var string
     */
    protected $fantasyPosition;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyPoints;
    /**
     * 
     *
     * @var string
     */
    protected $updated;
    /**
     * 
     *
     * @var int
     */
    protected $extraPointsMade;
    /**
     * 
     *
     * @var int
     */
    protected $extraPointsAttempted;
    /**
     * 
     *
     * @var int
     */
    protected $fieldGoalsMade;
    /**
     * 
     *
     * @var int
     */
    protected $fieldGoalsAttempted;
    /**
     * 
     *
     * @var int
     */
    protected $fieldGoalsLongestMade;
    /**
     * 
     *
     * @var float
     */
    protected $fieldGoalPercentage;
    /**
     * 
     *
     * @var int
     */
    protected $fieldGoalsMade0to19;
    /**
     * 
     *
     * @var int
     */
    protected $fieldGoalsMade20to29;
    /**
     * 
     *
     * @var int
     */
    protected $fieldGoalsMade30to39;
    /**
     * 
     *
     * @var int
     */
    protected $fieldGoalsMade40to49;
    /**
     * 
     *
     * @var int
     */
    protected $fieldGoalsMade50Plus;
    /**
     * 
     *
     * @return int
     */
    public function getPlayerGameID() : int
    {
        return $this->playerGameID;
    }
    /**
     * 
     *
     * @param int $playerGameID
     *
     * @return self
     */
    public function setPlayerGameID(int $playerGameID) : self
    {
        $this->playerGameID = $playerGameID;
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
     * @return string
     */
    public function getShortName() : string
    {
        return $this->shortName;
    }
    /**
     * 
     *
     * @param string $shortName
     *
     * @return self
     */
    public function setShortName(string $shortName) : self
    {
        $this->shortName = $shortName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTeam() : string
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param string $team
     *
     * @return self
     */
    public function setTeam(string $team) : self
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
     * @return string
     */
    public function getPosition() : string
    {
        return $this->position;
    }
    /**
     * 
     *
     * @param string $position
     *
     * @return self
     */
    public function setPosition(string $position) : self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPositionCategory() : string
    {
        return $this->positionCategory;
    }
    /**
     * 
     *
     * @param string $positionCategory
     *
     * @return self
     */
    public function setPositionCategory(string $positionCategory) : self
    {
        $this->positionCategory = $positionCategory;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFantasyPosition() : string
    {
        return $this->fantasyPosition;
    }
    /**
     * 
     *
     * @param string $fantasyPosition
     *
     * @return self
     */
    public function setFantasyPosition(string $fantasyPosition) : self
    {
        $this->fantasyPosition = $fantasyPosition;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFantasyPoints() : float
    {
        return $this->fantasyPoints;
    }
    /**
     * 
     *
     * @param float $fantasyPoints
     *
     * @return self
     */
    public function setFantasyPoints(float $fantasyPoints) : self
    {
        $this->fantasyPoints = $fantasyPoints;
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
     * @return int
     */
    public function getExtraPointsMade() : int
    {
        return $this->extraPointsMade;
    }
    /**
     * 
     *
     * @param int $extraPointsMade
     *
     * @return self
     */
    public function setExtraPointsMade(int $extraPointsMade) : self
    {
        $this->extraPointsMade = $extraPointsMade;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getExtraPointsAttempted() : int
    {
        return $this->extraPointsAttempted;
    }
    /**
     * 
     *
     * @param int $extraPointsAttempted
     *
     * @return self
     */
    public function setExtraPointsAttempted(int $extraPointsAttempted) : self
    {
        $this->extraPointsAttempted = $extraPointsAttempted;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFieldGoalsMade() : int
    {
        return $this->fieldGoalsMade;
    }
    /**
     * 
     *
     * @param int $fieldGoalsMade
     *
     * @return self
     */
    public function setFieldGoalsMade(int $fieldGoalsMade) : self
    {
        $this->fieldGoalsMade = $fieldGoalsMade;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFieldGoalsAttempted() : int
    {
        return $this->fieldGoalsAttempted;
    }
    /**
     * 
     *
     * @param int $fieldGoalsAttempted
     *
     * @return self
     */
    public function setFieldGoalsAttempted(int $fieldGoalsAttempted) : self
    {
        $this->fieldGoalsAttempted = $fieldGoalsAttempted;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFieldGoalsLongestMade() : int
    {
        return $this->fieldGoalsLongestMade;
    }
    /**
     * 
     *
     * @param int $fieldGoalsLongestMade
     *
     * @return self
     */
    public function setFieldGoalsLongestMade(int $fieldGoalsLongestMade) : self
    {
        $this->fieldGoalsLongestMade = $fieldGoalsLongestMade;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFieldGoalPercentage() : float
    {
        return $this->fieldGoalPercentage;
    }
    /**
     * 
     *
     * @param float $fieldGoalPercentage
     *
     * @return self
     */
    public function setFieldGoalPercentage(float $fieldGoalPercentage) : self
    {
        $this->fieldGoalPercentage = $fieldGoalPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFieldGoalsMade0to19() : int
    {
        return $this->fieldGoalsMade0to19;
    }
    /**
     * 
     *
     * @param int $fieldGoalsMade0to19
     *
     * @return self
     */
    public function setFieldGoalsMade0to19(int $fieldGoalsMade0to19) : self
    {
        $this->fieldGoalsMade0to19 = $fieldGoalsMade0to19;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFieldGoalsMade20to29() : int
    {
        return $this->fieldGoalsMade20to29;
    }
    /**
     * 
     *
     * @param int $fieldGoalsMade20to29
     *
     * @return self
     */
    public function setFieldGoalsMade20to29(int $fieldGoalsMade20to29) : self
    {
        $this->fieldGoalsMade20to29 = $fieldGoalsMade20to29;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFieldGoalsMade30to39() : int
    {
        return $this->fieldGoalsMade30to39;
    }
    /**
     * 
     *
     * @param int $fieldGoalsMade30to39
     *
     * @return self
     */
    public function setFieldGoalsMade30to39(int $fieldGoalsMade30to39) : self
    {
        $this->fieldGoalsMade30to39 = $fieldGoalsMade30to39;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFieldGoalsMade40to49() : int
    {
        return $this->fieldGoalsMade40to49;
    }
    /**
     * 
     *
     * @param int $fieldGoalsMade40to49
     *
     * @return self
     */
    public function setFieldGoalsMade40to49(int $fieldGoalsMade40to49) : self
    {
        $this->fieldGoalsMade40to49 = $fieldGoalsMade40to49;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFieldGoalsMade50Plus() : int
    {
        return $this->fieldGoalsMade50Plus;
    }
    /**
     * 
     *
     * @param int $fieldGoalsMade50Plus
     *
     * @return self
     */
    public function setFieldGoalsMade50Plus(int $fieldGoalsMade50Plus) : self
    {
        $this->fieldGoalsMade50Plus = $fieldGoalsMade50Plus;
        return $this;
    }
}