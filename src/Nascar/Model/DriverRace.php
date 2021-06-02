<?php

namespace Sportsdata\API\Nascar\Model;

class DriverRace
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
     * @var string
     */
    protected $name;
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
    protected $numberDisplay;
    /**
     * 
     *
     * @var string
     */
    protected $manufacturer;
    /**
     * 
     *
     * @var int
     */
    protected $draftKingsSalary;
    /**
     * 
     *
     * @var int
     */
    protected $raceID;
    /**
     * 
     *
     * @var string
     */
    protected $day;
    /**
     * 
     *
     * @var string
     */
    protected $dateTime;
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
    protected $created;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyPoints;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyPointsDraftKings;
    /**
     * 
     *
     * @var float
     */
    protected $qualifyingSpeed;
    /**
     * 
     *
     * @var float
     */
    protected $poleFinalPosition;
    /**
     * 
     *
     * @var float
     */
    protected $startPosition;
    /**
     * 
     *
     * @var float
     */
    protected $finalPosition;
    /**
     * 
     *
     * @var float
     */
    protected $positionDifferential;
    /**
     * 
     *
     * @var float
     */
    protected $laps;
    /**
     * 
     *
     * @var float
     */
    protected $lapsLed;
    /**
     * 
     *
     * @var float
     */
    protected $fastestLaps;
    /**
     * 
     *
     * @var float
     */
    protected $points;
    /**
     * 
     *
     * @var float
     */
    protected $bonus;
    /**
     * 
     *
     * @var float
     */
    protected $penalty;
    /**
     * 
     *
     * @var float
     */
    protected $wins;
    /**
     * 
     *
     * @var float
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
    public function getNumberDisplay() : string
    {
        return $this->numberDisplay;
    }
    /**
     * 
     *
     * @param string $numberDisplay
     *
     * @return self
     */
    public function setNumberDisplay(string $numberDisplay) : self
    {
        $this->numberDisplay = $numberDisplay;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getManufacturer() : string
    {
        return $this->manufacturer;
    }
    /**
     * 
     *
     * @param string $manufacturer
     *
     * @return self
     */
    public function setManufacturer(string $manufacturer) : self
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDraftKingsSalary() : int
    {
        return $this->draftKingsSalary;
    }
    /**
     * 
     *
     * @param int $draftKingsSalary
     *
     * @return self
     */
    public function setDraftKingsSalary(int $draftKingsSalary) : self
    {
        $this->draftKingsSalary = $draftKingsSalary;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRaceID() : int
    {
        return $this->raceID;
    }
    /**
     * 
     *
     * @param int $raceID
     *
     * @return self
     */
    public function setRaceID(int $raceID) : self
    {
        $this->raceID = $raceID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDay() : string
    {
        return $this->day;
    }
    /**
     * 
     *
     * @param string $day
     *
     * @return self
     */
    public function setDay(string $day) : self
    {
        $this->day = $day;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDateTime() : string
    {
        return $this->dateTime;
    }
    /**
     * 
     *
     * @param string $dateTime
     *
     * @return self
     */
    public function setDateTime(string $dateTime) : self
    {
        $this->dateTime = $dateTime;
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
     * @return float
     */
    public function getFantasyPointsDraftKings() : float
    {
        return $this->fantasyPointsDraftKings;
    }
    /**
     * 
     *
     * @param float $fantasyPointsDraftKings
     *
     * @return self
     */
    public function setFantasyPointsDraftKings(float $fantasyPointsDraftKings) : self
    {
        $this->fantasyPointsDraftKings = $fantasyPointsDraftKings;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getQualifyingSpeed() : float
    {
        return $this->qualifyingSpeed;
    }
    /**
     * 
     *
     * @param float $qualifyingSpeed
     *
     * @return self
     */
    public function setQualifyingSpeed(float $qualifyingSpeed) : self
    {
        $this->qualifyingSpeed = $qualifyingSpeed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPoleFinalPosition() : float
    {
        return $this->poleFinalPosition;
    }
    /**
     * 
     *
     * @param float $poleFinalPosition
     *
     * @return self
     */
    public function setPoleFinalPosition(float $poleFinalPosition) : self
    {
        $this->poleFinalPosition = $poleFinalPosition;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getStartPosition() : float
    {
        return $this->startPosition;
    }
    /**
     * 
     *
     * @param float $startPosition
     *
     * @return self
     */
    public function setStartPosition(float $startPosition) : self
    {
        $this->startPosition = $startPosition;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFinalPosition() : float
    {
        return $this->finalPosition;
    }
    /**
     * 
     *
     * @param float $finalPosition
     *
     * @return self
     */
    public function setFinalPosition(float $finalPosition) : self
    {
        $this->finalPosition = $finalPosition;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPositionDifferential() : float
    {
        return $this->positionDifferential;
    }
    /**
     * 
     *
     * @param float $positionDifferential
     *
     * @return self
     */
    public function setPositionDifferential(float $positionDifferential) : self
    {
        $this->positionDifferential = $positionDifferential;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getLaps() : float
    {
        return $this->laps;
    }
    /**
     * 
     *
     * @param float $laps
     *
     * @return self
     */
    public function setLaps(float $laps) : self
    {
        $this->laps = $laps;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getLapsLed() : float
    {
        return $this->lapsLed;
    }
    /**
     * 
     *
     * @param float $lapsLed
     *
     * @return self
     */
    public function setLapsLed(float $lapsLed) : self
    {
        $this->lapsLed = $lapsLed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFastestLaps() : float
    {
        return $this->fastestLaps;
    }
    /**
     * 
     *
     * @param float $fastestLaps
     *
     * @return self
     */
    public function setFastestLaps(float $fastestLaps) : self
    {
        $this->fastestLaps = $fastestLaps;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPoints() : float
    {
        return $this->points;
    }
    /**
     * 
     *
     * @param float $points
     *
     * @return self
     */
    public function setPoints(float $points) : self
    {
        $this->points = $points;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBonus() : float
    {
        return $this->bonus;
    }
    /**
     * 
     *
     * @param float $bonus
     *
     * @return self
     */
    public function setBonus(float $bonus) : self
    {
        $this->bonus = $bonus;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPenalty() : float
    {
        return $this->penalty;
    }
    /**
     * 
     *
     * @param float $penalty
     *
     * @return self
     */
    public function setPenalty(float $penalty) : self
    {
        $this->penalty = $penalty;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getWins() : float
    {
        return $this->wins;
    }
    /**
     * 
     *
     * @param float $wins
     *
     * @return self
     */
    public function setWins(float $wins) : self
    {
        $this->wins = $wins;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPoles() : float
    {
        return $this->poles;
    }
    /**
     * 
     *
     * @param float $poles
     *
     * @return self
     */
    public function setPoles(float $poles) : self
    {
        $this->poles = $poles;
        return $this;
    }
}