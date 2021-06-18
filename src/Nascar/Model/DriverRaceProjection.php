<?php

namespace Sportsdata\API\Nascar\Model;

class DriverRaceProjection
{
    /**
     * 
     *
     * @var int
     */
    protected $statID;
    /**
     * 
     *
     * @var int
     */
    protected $driverID;
    /**
     * 
     *
     * @var int
     */
    protected $season;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var int|null
     */
    protected $number;
    /**
     * 
     *
     * @var string|null
     */
    protected $numberDisplay;
    /**
     * 
     *
     * @var string|null
     */
    protected $manufacturer;
    /**
     * 
     *
     * @var int|null
     */
    protected $draftKingsSalary;
    /**
     * 
     *
     * @var int|null
     */
    protected $raceID;
    /**
     * 
     *
     * @var string|null
     */
    protected $day;
    /**
     * 
     *
     * @var string|null
     */
    protected $dateTime;
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
    protected $created;
    /**
     * 
     *
     * @var float|null
     */
    protected $fantasyPoints;
    /**
     * 
     *
     * @var float|null
     */
    protected $fantasyPointsDraftKings;
    /**
     * 
     *
     * @var float|null
     */
    protected $qualifyingSpeed;
    /**
     * 
     *
     * @var float|null
     */
    protected $poleFinalPosition;
    /**
     * 
     *
     * @var float|null
     */
    protected $startPosition;
    /**
     * 
     *
     * @var float|null
     */
    protected $finalPosition;
    /**
     * 
     *
     * @var float|null
     */
    protected $positionDifferential;
    /**
     * 
     *
     * @var float|null
     */
    protected $laps;
    /**
     * 
     *
     * @var float|null
     */
    protected $lapsLed;
    /**
     * 
     *
     * @var float|null
     */
    protected $fastestLaps;
    /**
     * 
     *
     * @var float|null
     */
    protected $points;
    /**
     * 
     *
     * @var float|null
     */
    protected $bonus;
    /**
     * 
     *
     * @var float|null
     */
    protected $penalty;
    /**
     * 
     *
     * @var float|null
     */
    protected $wins;
    /**
     * 
     *
     * @var float|null
     */
    protected $poles;
    /**
     * 
     *
     * @return int
     */
    public function getStatID() : int
    {
        return $this->statID;
    }
    /**
     * 
     *
     * @param int $statID
     *
     * @return self
     */
    public function setStatID(int $statID) : self
    {
        $this->statID = $statID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDriverID() : int
    {
        return $this->driverID;
    }
    /**
     * 
     *
     * @param int $driverID
     *
     * @return self
     */
    public function setDriverID(int $driverID) : self
    {
        $this->driverID = $driverID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSeason() : int
    {
        return $this->season;
    }
    /**
     * 
     *
     * @param int $season
     *
     * @return self
     */
    public function setSeason(int $season) : self
    {
        $this->season = $season;
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
     * @return int|null
     */
    public function getNumber() : ?int
    {
        return $this->number;
    }
    /**
     * 
     *
     * @param int|null $number
     *
     * @return self
     */
    public function setNumber(?int $number) : self
    {
        $this->number = $number;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNumberDisplay() : ?string
    {
        return $this->numberDisplay;
    }
    /**
     * 
     *
     * @param string|null $numberDisplay
     *
     * @return self
     */
    public function setNumberDisplay(?string $numberDisplay) : self
    {
        $this->numberDisplay = $numberDisplay;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getManufacturer() : ?string
    {
        return $this->manufacturer;
    }
    /**
     * 
     *
     * @param string|null $manufacturer
     *
     * @return self
     */
    public function setManufacturer(?string $manufacturer) : self
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDraftKingsSalary() : ?int
    {
        return $this->draftKingsSalary;
    }
    /**
     * 
     *
     * @param int|null $draftKingsSalary
     *
     * @return self
     */
    public function setDraftKingsSalary(?int $draftKingsSalary) : self
    {
        $this->draftKingsSalary = $draftKingsSalary;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRaceID() : ?int
    {
        return $this->raceID;
    }
    /**
     * 
     *
     * @param int|null $raceID
     *
     * @return self
     */
    public function setRaceID(?int $raceID) : self
    {
        $this->raceID = $raceID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDay() : ?string
    {
        return $this->day;
    }
    /**
     * 
     *
     * @param string|null $day
     *
     * @return self
     */
    public function setDay(?string $day) : self
    {
        $this->day = $day;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDateTime() : ?string
    {
        return $this->dateTime;
    }
    /**
     * 
     *
     * @param string|null $dateTime
     *
     * @return self
     */
    public function setDateTime(?string $dateTime) : self
    {
        $this->dateTime = $dateTime;
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
     * @return float|null
     */
    public function getFantasyPointsDraftKings() : ?float
    {
        return $this->fantasyPointsDraftKings;
    }
    /**
     * 
     *
     * @param float|null $fantasyPointsDraftKings
     *
     * @return self
     */
    public function setFantasyPointsDraftKings(?float $fantasyPointsDraftKings) : self
    {
        $this->fantasyPointsDraftKings = $fantasyPointsDraftKings;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getQualifyingSpeed() : ?float
    {
        return $this->qualifyingSpeed;
    }
    /**
     * 
     *
     * @param float|null $qualifyingSpeed
     *
     * @return self
     */
    public function setQualifyingSpeed(?float $qualifyingSpeed) : self
    {
        $this->qualifyingSpeed = $qualifyingSpeed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPoleFinalPosition() : ?float
    {
        return $this->poleFinalPosition;
    }
    /**
     * 
     *
     * @param float|null $poleFinalPosition
     *
     * @return self
     */
    public function setPoleFinalPosition(?float $poleFinalPosition) : self
    {
        $this->poleFinalPosition = $poleFinalPosition;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getStartPosition() : ?float
    {
        return $this->startPosition;
    }
    /**
     * 
     *
     * @param float|null $startPosition
     *
     * @return self
     */
    public function setStartPosition(?float $startPosition) : self
    {
        $this->startPosition = $startPosition;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFinalPosition() : ?float
    {
        return $this->finalPosition;
    }
    /**
     * 
     *
     * @param float|null $finalPosition
     *
     * @return self
     */
    public function setFinalPosition(?float $finalPosition) : self
    {
        $this->finalPosition = $finalPosition;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPositionDifferential() : ?float
    {
        return $this->positionDifferential;
    }
    /**
     * 
     *
     * @param float|null $positionDifferential
     *
     * @return self
     */
    public function setPositionDifferential(?float $positionDifferential) : self
    {
        $this->positionDifferential = $positionDifferential;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getLaps() : ?float
    {
        return $this->laps;
    }
    /**
     * 
     *
     * @param float|null $laps
     *
     * @return self
     */
    public function setLaps(?float $laps) : self
    {
        $this->laps = $laps;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getLapsLed() : ?float
    {
        return $this->lapsLed;
    }
    /**
     * 
     *
     * @param float|null $lapsLed
     *
     * @return self
     */
    public function setLapsLed(?float $lapsLed) : self
    {
        $this->lapsLed = $lapsLed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFastestLaps() : ?float
    {
        return $this->fastestLaps;
    }
    /**
     * 
     *
     * @param float|null $fastestLaps
     *
     * @return self
     */
    public function setFastestLaps(?float $fastestLaps) : self
    {
        $this->fastestLaps = $fastestLaps;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPoints() : ?float
    {
        return $this->points;
    }
    /**
     * 
     *
     * @param float|null $points
     *
     * @return self
     */
    public function setPoints(?float $points) : self
    {
        $this->points = $points;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getBonus() : ?float
    {
        return $this->bonus;
    }
    /**
     * 
     *
     * @param float|null $bonus
     *
     * @return self
     */
    public function setBonus(?float $bonus) : self
    {
        $this->bonus = $bonus;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPenalty() : ?float
    {
        return $this->penalty;
    }
    /**
     * 
     *
     * @param float|null $penalty
     *
     * @return self
     */
    public function setPenalty(?float $penalty) : self
    {
        $this->penalty = $penalty;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getWins() : ?float
    {
        return $this->wins;
    }
    /**
     * 
     *
     * @param float|null $wins
     *
     * @return self
     */
    public function setWins(?float $wins) : self
    {
        $this->wins = $wins;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPoles() : ?float
    {
        return $this->poles;
    }
    /**
     * 
     *
     * @param float|null $poles
     *
     * @return self
     */
    public function setPoles(?float $poles) : self
    {
        $this->poles = $poles;
        return $this;
    }
}