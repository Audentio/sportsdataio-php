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
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $startDate;
    /**
     * 
     *
     * @var string|null
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
     * @var string|null
     */
    protected $venue;
    /**
     * 
     *
     * @var string|null
     */
    protected $location;
    /**
     * 
     *
     * @var int|null
     */
    protected $par;
    /**
     * 
     *
     * @var int|null
     */
    protected $yards;
    /**
     * 
     *
     * @var float|null
     */
    protected $purse;
    /**
     * 
     *
     * @var string|null
     */
    protected $startDateTime;
    /**
     * 
     *
     * @var bool|null
     */
    protected $canceled;
    /**
     * 
     *
     * @var bool|null
     */
    protected $covered;
    /**
     * 
     *
     * @var string|null
     */
    protected $city;
    /**
     * 
     *
     * @var string|null
     */
    protected $state;
    /**
     * 
     *
     * @var string|null
     */
    protected $zipCode;
    /**
     * 
     *
     * @var string|null
     */
    protected $country;
    /**
     * 
     *
     * @var string|null
     */
    protected $timeZone;
    /**
     * 
     *
     * @var string|null
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
     * @var string|null
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
    public function getStartDate() : ?string
    {
        return $this->startDate;
    }
    /**
     * 
     *
     * @param string|null $startDate
     *
     * @return self
     */
    public function setStartDate(?string $startDate) : self
    {
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEndDate() : ?string
    {
        return $this->endDate;
    }
    /**
     * 
     *
     * @param string|null $endDate
     *
     * @return self
     */
    public function setEndDate(?string $endDate) : self
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
     * @return string|null
     */
    public function getVenue() : ?string
    {
        return $this->venue;
    }
    /**
     * 
     *
     * @param string|null $venue
     *
     * @return self
     */
    public function setVenue(?string $venue) : self
    {
        $this->venue = $venue;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLocation() : ?string
    {
        return $this->location;
    }
    /**
     * 
     *
     * @param string|null $location
     *
     * @return self
     */
    public function setLocation(?string $location) : self
    {
        $this->location = $location;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPar() : ?int
    {
        return $this->par;
    }
    /**
     * 
     *
     * @param int|null $par
     *
     * @return self
     */
    public function setPar(?int $par) : self
    {
        $this->par = $par;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getYards() : ?int
    {
        return $this->yards;
    }
    /**
     * 
     *
     * @param int|null $yards
     *
     * @return self
     */
    public function setYards(?int $yards) : self
    {
        $this->yards = $yards;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPurse() : ?float
    {
        return $this->purse;
    }
    /**
     * 
     *
     * @param float|null $purse
     *
     * @return self
     */
    public function setPurse(?float $purse) : self
    {
        $this->purse = $purse;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStartDateTime() : ?string
    {
        return $this->startDateTime;
    }
    /**
     * 
     *
     * @param string|null $startDateTime
     *
     * @return self
     */
    public function setStartDateTime(?string $startDateTime) : self
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getCanceled() : ?bool
    {
        return $this->canceled;
    }
    /**
     * 
     *
     * @param bool|null $canceled
     *
     * @return self
     */
    public function setCanceled(?bool $canceled) : self
    {
        $this->canceled = $canceled;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getCovered() : ?bool
    {
        return $this->covered;
    }
    /**
     * 
     *
     * @param bool|null $covered
     *
     * @return self
     */
    public function setCovered(?bool $covered) : self
    {
        $this->covered = $covered;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCity() : ?string
    {
        return $this->city;
    }
    /**
     * 
     *
     * @param string|null $city
     *
     * @return self
     */
    public function setCity(?string $city) : self
    {
        $this->city = $city;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getState() : ?string
    {
        return $this->state;
    }
    /**
     * 
     *
     * @param string|null $state
     *
     * @return self
     */
    public function setState(?string $state) : self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getZipCode() : ?string
    {
        return $this->zipCode;
    }
    /**
     * 
     *
     * @param string|null $zipCode
     *
     * @return self
     */
    public function setZipCode(?string $zipCode) : self
    {
        $this->zipCode = $zipCode;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCountry() : ?string
    {
        return $this->country;
    }
    /**
     * 
     *
     * @param string|null $country
     *
     * @return self
     */
    public function setCountry(?string $country) : self
    {
        $this->country = $country;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTimeZone() : ?string
    {
        return $this->timeZone;
    }
    /**
     * 
     *
     * @param string|null $timeZone
     *
     * @return self
     */
    public function setTimeZone(?string $timeZone) : self
    {
        $this->timeZone = $timeZone;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFormat() : ?string
    {
        return $this->format;
    }
    /**
     * 
     *
     * @param string|null $format
     *
     * @return self
     */
    public function setFormat(?string $format) : self
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
     * @return string|null
     */
    public function getSportRadarTournamentID() : ?string
    {
        return $this->sportRadarTournamentID;
    }
    /**
     * 
     *
     * @param string|null $sportRadarTournamentID
     *
     * @return self
     */
    public function setSportRadarTournamentID(?string $sportRadarTournamentID) : self
    {
        $this->sportRadarTournamentID = $sportRadarTournamentID;
        return $this;
    }
}