<?php

namespace Sportsdata\API\Golf\Model;

class Tournament
{
    /**
     * 
     *
     * @var int
     */
    protected $tournamentID;
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
    protected $startDate;
    /**
     * 
     *
     * @var string
     */
    protected $endDate;
    /**
     * 
     *
     * @var bool
     */
    protected $isOver;
    /**
     * 
     *
     * @var bool
     */
    protected $isInProgress;
    /**
     * 
     *
     * @var string
     */
    protected $venue;
    /**
     * 
     *
     * @var string
     */
    protected $location;
    /**
     * 
     *
     * @var int
     */
    protected $par;
    /**
     * 
     *
     * @var int
     */
    protected $yards;
    /**
     * 
     *
     * @var float
     */
    protected $purse;
    /**
     * 
     *
     * @var string
     */
    protected $startDateTime;
    /**
     * 
     *
     * @var bool
     */
    protected $canceled;
    /**
     * 
     *
     * @var bool
     */
    protected $covered;
    /**
     * 
     *
     * @var string
     */
    protected $city;
    /**
     * 
     *
     * @var string
     */
    protected $state;
    /**
     * 
     *
     * @var string
     */
    protected $zipCode;
    /**
     * 
     *
     * @var string
     */
    protected $country;
    /**
     * 
     *
     * @var string
     */
    protected $timeZone;
    /**
     * 
     *
     * @var string
     */
    protected $format;
    /**
     * 
     *
     * @var Round[]
     */
    protected $rounds;
    /**
     * 
     *
     * @var string
     */
    protected $sportRadarTournamentID;
    /**
     * 
     *
     * @return int
     */
    public function getTournamentID() : int
    {
        return $this->tournamentID;
    }
    /**
     * 
     *
     * @param int $tournamentID
     *
     * @return self
     */
    public function setTournamentID(int $tournamentID) : self
    {
        $this->tournamentID = $tournamentID;
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
    public function getStartDate() : string
    {
        return $this->startDate;
    }
    /**
     * 
     *
     * @param string $startDate
     *
     * @return self
     */
    public function setStartDate(string $startDate) : self
    {
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEndDate() : string
    {
        return $this->endDate;
    }
    /**
     * 
     *
     * @param string $endDate
     *
     * @return self
     */
    public function setEndDate(string $endDate) : self
    {
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsOver() : bool
    {
        return $this->isOver;
    }
    /**
     * 
     *
     * @param bool $isOver
     *
     * @return self
     */
    public function setIsOver(bool $isOver) : self
    {
        $this->isOver = $isOver;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsInProgress() : bool
    {
        return $this->isInProgress;
    }
    /**
     * 
     *
     * @param bool $isInProgress
     *
     * @return self
     */
    public function setIsInProgress(bool $isInProgress) : self
    {
        $this->isInProgress = $isInProgress;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVenue() : string
    {
        return $this->venue;
    }
    /**
     * 
     *
     * @param string $venue
     *
     * @return self
     */
    public function setVenue(string $venue) : self
    {
        $this->venue = $venue;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLocation() : string
    {
        return $this->location;
    }
    /**
     * 
     *
     * @param string $location
     *
     * @return self
     */
    public function setLocation(string $location) : self
    {
        $this->location = $location;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPar() : int
    {
        return $this->par;
    }
    /**
     * 
     *
     * @param int $par
     *
     * @return self
     */
    public function setPar(int $par) : self
    {
        $this->par = $par;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getYards() : int
    {
        return $this->yards;
    }
    /**
     * 
     *
     * @param int $yards
     *
     * @return self
     */
    public function setYards(int $yards) : self
    {
        $this->yards = $yards;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPurse() : float
    {
        return $this->purse;
    }
    /**
     * 
     *
     * @param float $purse
     *
     * @return self
     */
    public function setPurse(float $purse) : self
    {
        $this->purse = $purse;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStartDateTime() : string
    {
        return $this->startDateTime;
    }
    /**
     * 
     *
     * @param string $startDateTime
     *
     * @return self
     */
    public function setStartDateTime(string $startDateTime) : self
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getCanceled() : bool
    {
        return $this->canceled;
    }
    /**
     * 
     *
     * @param bool $canceled
     *
     * @return self
     */
    public function setCanceled(bool $canceled) : self
    {
        $this->canceled = $canceled;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getCovered() : bool
    {
        return $this->covered;
    }
    /**
     * 
     *
     * @param bool $covered
     *
     * @return self
     */
    public function setCovered(bool $covered) : self
    {
        $this->covered = $covered;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * 
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city) : self
    {
        $this->city = $city;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * 
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getZipCode() : string
    {
        return $this->zipCode;
    }
    /**
     * 
     *
     * @param string $zipCode
     *
     * @return self
     */
    public function setZipCode(string $zipCode) : self
    {
        $this->zipCode = $zipCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCountry() : string
    {
        return $this->country;
    }
    /**
     * 
     *
     * @param string $country
     *
     * @return self
     */
    public function setCountry(string $country) : self
    {
        $this->country = $country;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTimeZone() : string
    {
        return $this->timeZone;
    }
    /**
     * 
     *
     * @param string $timeZone
     *
     * @return self
     */
    public function setTimeZone(string $timeZone) : self
    {
        $this->timeZone = $timeZone;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFormat() : string
    {
        return $this->format;
    }
    /**
     * 
     *
     * @param string $format
     *
     * @return self
     */
    public function setFormat(string $format) : self
    {
        $this->format = $format;
        return $this;
    }
    /**
     * 
     *
     * @return Round[]
     */
    public function getRounds() : array
    {
        return $this->rounds;
    }
    /**
     * 
     *
     * @param Round[] $rounds
     *
     * @return self
     */
    public function setRounds(array $rounds) : self
    {
        $this->rounds = $rounds;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSportRadarTournamentID() : string
    {
        return $this->sportRadarTournamentID;
    }
    /**
     * 
     *
     * @param string $sportRadarTournamentID
     *
     * @return self
     */
    public function setSportRadarTournamentID(string $sportRadarTournamentID) : self
    {
        $this->sportRadarTournamentID = $sportRadarTournamentID;
        return $this;
    }
}