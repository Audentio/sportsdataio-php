<?php

namespace Sportsdata\API\Nascar\Model;

class Race
{
    /**
     * 
     *
     * @var int
     */
    protected $raceID;
    /**
     * 
     *
     * @var int
     */
    protected $seriesID;
    /**
     * 
     *
     * @var string|null
     */
    protected $seriesName;
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
    protected $track;
    /**
     * 
     *
     * @var string|null
     */
    protected $broadcast;
    /**
     * 
     *
     * @var int|null
     */
    protected $winnerID;
    /**
     * 
     *
     * @var int|null
     */
    protected $poleWinnerID;
    /**
     * 
     *
     * @var bool
     */
    protected $isInProgress;
    /**
     * 
     *
     * @var bool
     */
    protected $isOver;
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
     * @var string|null
     */
    protected $rescheduledDay;
    /**
     * 
     *
     * @var string|null
     */
    protected $rescheduledDateTime;
    /**
     * 
     *
     * @var bool
     */
    protected $canceled;
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
     * @return int
     */
    public function getSeriesID() : int
    {
        return $this->seriesID;
    }
    /**
     * 
     *
     * @param int $seriesID
     *
     * @return self
     */
    public function setSeriesID(int $seriesID) : self
    {
        $this->seriesID = $seriesID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSeriesName() : ?string
    {
        return $this->seriesName;
    }
    /**
     * 
     *
     * @param string|null $seriesName
     *
     * @return self
     */
    public function setSeriesName(?string $seriesName) : self
    {
        $this->seriesName = $seriesName;
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
    public function getTrack() : ?string
    {
        return $this->track;
    }
    /**
     * 
     *
     * @param string|null $track
     *
     * @return self
     */
    public function setTrack(?string $track) : self
    {
        $this->track = $track;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBroadcast() : ?string
    {
        return $this->broadcast;
    }
    /**
     * 
     *
     * @param string|null $broadcast
     *
     * @return self
     */
    public function setBroadcast(?string $broadcast) : self
    {
        $this->broadcast = $broadcast;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getWinnerID() : ?int
    {
        return $this->winnerID;
    }
    /**
     * 
     *
     * @param int|null $winnerID
     *
     * @return self
     */
    public function setWinnerID(?int $winnerID) : self
    {
        $this->winnerID = $winnerID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPoleWinnerID() : ?int
    {
        return $this->poleWinnerID;
    }
    /**
     * 
     *
     * @param int|null $poleWinnerID
     *
     * @return self
     */
    public function setPoleWinnerID(?int $poleWinnerID) : self
    {
        $this->poleWinnerID = $poleWinnerID;
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
     * @return string|null
     */
    public function getRescheduledDay() : ?string
    {
        return $this->rescheduledDay;
    }
    /**
     * 
     *
     * @param string|null $rescheduledDay
     *
     * @return self
     */
    public function setRescheduledDay(?string $rescheduledDay) : self
    {
        $this->rescheduledDay = $rescheduledDay;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRescheduledDateTime() : ?string
    {
        return $this->rescheduledDateTime;
    }
    /**
     * 
     *
     * @param string|null $rescheduledDateTime
     *
     * @return self
     */
    public function setRescheduledDateTime(?string $rescheduledDateTime) : self
    {
        $this->rescheduledDateTime = $rescheduledDateTime;
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
}