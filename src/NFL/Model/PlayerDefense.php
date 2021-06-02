<?php

namespace Sportsdata\API\NFL\Model;

class PlayerDefense
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
    protected $tackles;
    /**
     * 
     *
     * @var int
     */
    protected $soloTackles;
    /**
     * 
     *
     * @var int
     */
    protected $assistedTackles;
    /**
     * 
     *
     * @var float
     */
    protected $sacks;
    /**
     * 
     *
     * @var int
     */
    protected $sackYards;
    /**
     * 
     *
     * @var int
     */
    protected $fumblesForced;
    /**
     * 
     *
     * @var int
     */
    protected $fumblesRecovered;
    /**
     * 
     *
     * @var int
     */
    protected $passesDefended;
    /**
     * 
     *
     * @var int
     */
    protected $interceptions;
    /**
     * 
     *
     * @var int
     */
    protected $interceptionReturnYards;
    /**
     * 
     *
     * @var int
     */
    protected $interceptionReturnTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $tacklesForLoss;
    /**
     * 
     *
     * @var int
     */
    protected $quarterbackHits;
    /**
     * 
     *
     * @var int
     */
    protected $fumbleReturnTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $safeties;
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
    public function getTackles() : int
    {
        return $this->tackles;
    }
    /**
     * 
     *
     * @param int $tackles
     *
     * @return self
     */
    public function setTackles(int $tackles) : self
    {
        $this->tackles = $tackles;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSoloTackles() : int
    {
        return $this->soloTackles;
    }
    /**
     * 
     *
     * @param int $soloTackles
     *
     * @return self
     */
    public function setSoloTackles(int $soloTackles) : self
    {
        $this->soloTackles = $soloTackles;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAssistedTackles() : int
    {
        return $this->assistedTackles;
    }
    /**
     * 
     *
     * @param int $assistedTackles
     *
     * @return self
     */
    public function setAssistedTackles(int $assistedTackles) : self
    {
        $this->assistedTackles = $assistedTackles;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSacks() : float
    {
        return $this->sacks;
    }
    /**
     * 
     *
     * @param float $sacks
     *
     * @return self
     */
    public function setSacks(float $sacks) : self
    {
        $this->sacks = $sacks;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSackYards() : int
    {
        return $this->sackYards;
    }
    /**
     * 
     *
     * @param int $sackYards
     *
     * @return self
     */
    public function setSackYards(int $sackYards) : self
    {
        $this->sackYards = $sackYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFumblesForced() : int
    {
        return $this->fumblesForced;
    }
    /**
     * 
     *
     * @param int $fumblesForced
     *
     * @return self
     */
    public function setFumblesForced(int $fumblesForced) : self
    {
        $this->fumblesForced = $fumblesForced;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFumblesRecovered() : int
    {
        return $this->fumblesRecovered;
    }
    /**
     * 
     *
     * @param int $fumblesRecovered
     *
     * @return self
     */
    public function setFumblesRecovered(int $fumblesRecovered) : self
    {
        $this->fumblesRecovered = $fumblesRecovered;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPassesDefended() : int
    {
        return $this->passesDefended;
    }
    /**
     * 
     *
     * @param int $passesDefended
     *
     * @return self
     */
    public function setPassesDefended(int $passesDefended) : self
    {
        $this->passesDefended = $passesDefended;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getInterceptions() : int
    {
        return $this->interceptions;
    }
    /**
     * 
     *
     * @param int $interceptions
     *
     * @return self
     */
    public function setInterceptions(int $interceptions) : self
    {
        $this->interceptions = $interceptions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getInterceptionReturnYards() : int
    {
        return $this->interceptionReturnYards;
    }
    /**
     * 
     *
     * @param int $interceptionReturnYards
     *
     * @return self
     */
    public function setInterceptionReturnYards(int $interceptionReturnYards) : self
    {
        $this->interceptionReturnYards = $interceptionReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getInterceptionReturnTouchdowns() : int
    {
        return $this->interceptionReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int $interceptionReturnTouchdowns
     *
     * @return self
     */
    public function setInterceptionReturnTouchdowns(int $interceptionReturnTouchdowns) : self
    {
        $this->interceptionReturnTouchdowns = $interceptionReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTacklesForLoss() : int
    {
        return $this->tacklesForLoss;
    }
    /**
     * 
     *
     * @param int $tacklesForLoss
     *
     * @return self
     */
    public function setTacklesForLoss(int $tacklesForLoss) : self
    {
        $this->tacklesForLoss = $tacklesForLoss;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getQuarterbackHits() : int
    {
        return $this->quarterbackHits;
    }
    /**
     * 
     *
     * @param int $quarterbackHits
     *
     * @return self
     */
    public function setQuarterbackHits(int $quarterbackHits) : self
    {
        $this->quarterbackHits = $quarterbackHits;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFumbleReturnTouchdowns() : int
    {
        return $this->fumbleReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int $fumbleReturnTouchdowns
     *
     * @return self
     */
    public function setFumbleReturnTouchdowns(int $fumbleReturnTouchdowns) : self
    {
        $this->fumbleReturnTouchdowns = $fumbleReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSafeties() : int
    {
        return $this->safeties;
    }
    /**
     * 
     *
     * @param int $safeties
     *
     * @return self
     */
    public function setSafeties(int $safeties) : self
    {
        $this->safeties = $safeties;
        return $this;
    }
}