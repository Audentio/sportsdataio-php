<?php

namespace Sportsdata\API\NFL\Model;

class PlayerKickPuntReturns
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
    protected $kickReturns;
    /**
     * 
     *
     * @var int
     */
    protected $kickReturnYards;
    /**
     * 
     *
     * @var float
     */
    protected $kickReturnYardsPerAttempt;
    /**
     * 
     *
     * @var int
     */
    protected $kickReturnLong;
    /**
     * 
     *
     * @var int
     */
    protected $kickReturnTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $puntReturns;
    /**
     * 
     *
     * @var int
     */
    protected $puntReturnYards;
    /**
     * 
     *
     * @var float
     */
    protected $puntReturnYardsPerAttempt;
    /**
     * 
     *
     * @var int
     */
    protected $puntReturnLong;
    /**
     * 
     *
     * @var int
     */
    protected $puntReturnTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $fumblesLost;
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
    public function getKickReturns() : int
    {
        return $this->kickReturns;
    }
    /**
     * 
     *
     * @param int $kickReturns
     *
     * @return self
     */
    public function setKickReturns(int $kickReturns) : self
    {
        $this->kickReturns = $kickReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getKickReturnYards() : int
    {
        return $this->kickReturnYards;
    }
    /**
     * 
     *
     * @param int $kickReturnYards
     *
     * @return self
     */
    public function setKickReturnYards(int $kickReturnYards) : self
    {
        $this->kickReturnYards = $kickReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getKickReturnYardsPerAttempt() : float
    {
        return $this->kickReturnYardsPerAttempt;
    }
    /**
     * 
     *
     * @param float $kickReturnYardsPerAttempt
     *
     * @return self
     */
    public function setKickReturnYardsPerAttempt(float $kickReturnYardsPerAttempt) : self
    {
        $this->kickReturnYardsPerAttempt = $kickReturnYardsPerAttempt;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getKickReturnLong() : int
    {
        return $this->kickReturnLong;
    }
    /**
     * 
     *
     * @param int $kickReturnLong
     *
     * @return self
     */
    public function setKickReturnLong(int $kickReturnLong) : self
    {
        $this->kickReturnLong = $kickReturnLong;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getKickReturnTouchdowns() : int
    {
        return $this->kickReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int $kickReturnTouchdowns
     *
     * @return self
     */
    public function setKickReturnTouchdowns(int $kickReturnTouchdowns) : self
    {
        $this->kickReturnTouchdowns = $kickReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPuntReturns() : int
    {
        return $this->puntReturns;
    }
    /**
     * 
     *
     * @param int $puntReturns
     *
     * @return self
     */
    public function setPuntReturns(int $puntReturns) : self
    {
        $this->puntReturns = $puntReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPuntReturnYards() : int
    {
        return $this->puntReturnYards;
    }
    /**
     * 
     *
     * @param int $puntReturnYards
     *
     * @return self
     */
    public function setPuntReturnYards(int $puntReturnYards) : self
    {
        $this->puntReturnYards = $puntReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPuntReturnYardsPerAttempt() : float
    {
        return $this->puntReturnYardsPerAttempt;
    }
    /**
     * 
     *
     * @param float $puntReturnYardsPerAttempt
     *
     * @return self
     */
    public function setPuntReturnYardsPerAttempt(float $puntReturnYardsPerAttempt) : self
    {
        $this->puntReturnYardsPerAttempt = $puntReturnYardsPerAttempt;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPuntReturnLong() : int
    {
        return $this->puntReturnLong;
    }
    /**
     * 
     *
     * @param int $puntReturnLong
     *
     * @return self
     */
    public function setPuntReturnLong(int $puntReturnLong) : self
    {
        $this->puntReturnLong = $puntReturnLong;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPuntReturnTouchdowns() : int
    {
        return $this->puntReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int $puntReturnTouchdowns
     *
     * @return self
     */
    public function setPuntReturnTouchdowns(int $puntReturnTouchdowns) : self
    {
        $this->puntReturnTouchdowns = $puntReturnTouchdowns;
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