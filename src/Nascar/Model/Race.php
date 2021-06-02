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
     * @var string
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
     * @var string
     */
    protected $name;
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
    protected $track;
    /**
     * 
     *
     * @var string
     */
    protected $broadcast;
    /**
     * 
     *
     * @var int
     */
    protected $winnerID;
    /**
     * 
     *
     * @var int
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
     * @var string
     */
    protected $rescheduledDay;
    /**
     * 
     *
     * @var string
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
     * @return string
     */
    public function getSeriesName() : string
    {
        return $this->seriesName;
    }
    /**
     * 
     *
     * @param string $seriesName
     *
     * @return self
     */
    public function setSeriesName(string $seriesName) : self
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
    public function getTrack() : string
    {
        return $this->track;
    }
    /**
     * 
     *
     * @param string $track
     *
     * @return self
     */
    public function setTrack(string $track) : self
    {
        $this->track = $track;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBroadcast() : string
    {
        return $this->broadcast;
    }
    /**
     * 
     *
     * @param string $broadcast
     *
     * @return self
     */
    public function setBroadcast(string $broadcast) : self
    {
        $this->broadcast = $broadcast;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getWinnerID() : int
    {
        return $this->winnerID;
    }
    /**
     * 
     *
     * @param int $winnerID
     *
     * @return self
     */
    public function setWinnerID(int $winnerID) : self
    {
        $this->winnerID = $winnerID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPoleWinnerID() : int
    {
        return $this->poleWinnerID;
    }
    /**
     * 
     *
     * @param int $poleWinnerID
     *
     * @return self
     */
    public function setPoleWinnerID(int $poleWinnerID) : self
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
     * @return string
     */
    public function getRescheduledDay() : string
    {
        return $this->rescheduledDay;
    }
    /**
     * 
     *
     * @param string $rescheduledDay
     *
     * @return self
     */
    public function setRescheduledDay(string $rescheduledDay) : self
    {
        $this->rescheduledDay = $rescheduledDay;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRescheduledDateTime() : string
    {
        return $this->rescheduledDateTime;
    }
    /**
     * 
     *
     * @param string $rescheduledDateTime
     *
     * @return self
     */
    public function setRescheduledDateTime(string $rescheduledDateTime) : self
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