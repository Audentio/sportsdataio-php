<?php

namespace Sportsdata\API\NFL\Model;

class PlayerPunting
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
    protected $punts;
    /**
     * 
     *
     * @var float
     */
    protected $puntAverage;
    /**
     * 
     *
     * @var int
     */
    protected $puntInside20;
    /**
     * 
     *
     * @var int
     */
    protected $puntTouchbacks;
    /**
     * 
     *
     * @var int
     */
    protected $puntYards;
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
    public function getPunts() : int
    {
        return $this->punts;
    }
    /**
     * 
     *
     * @param int $punts
     *
     * @return self
     */
    public function setPunts(int $punts) : self
    {
        $this->punts = $punts;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPuntAverage() : float
    {
        return $this->puntAverage;
    }
    /**
     * 
     *
     * @param float $puntAverage
     *
     * @return self
     */
    public function setPuntAverage(float $puntAverage) : self
    {
        $this->puntAverage = $puntAverage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPuntInside20() : int
    {
        return $this->puntInside20;
    }
    /**
     * 
     *
     * @param int $puntInside20
     *
     * @return self
     */
    public function setPuntInside20(int $puntInside20) : self
    {
        $this->puntInside20 = $puntInside20;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPuntTouchbacks() : int
    {
        return $this->puntTouchbacks;
    }
    /**
     * 
     *
     * @param int $puntTouchbacks
     *
     * @return self
     */
    public function setPuntTouchbacks(int $puntTouchbacks) : self
    {
        $this->puntTouchbacks = $puntTouchbacks;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPuntYards() : int
    {
        return $this->puntYards;
    }
    /**
     * 
     *
     * @param int $puntYards
     *
     * @return self
     */
    public function setPuntYards(int $puntYards) : self
    {
        $this->puntYards = $puntYards;
        return $this;
    }
}