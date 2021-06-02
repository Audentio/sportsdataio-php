<?php

namespace Sportsdata\API\NHL\Model;

class Game
{
    /**
     * 
     *
     * @var int
     */
    protected $gameID;
    /**
     * 
     *
     * @var int
     */
    protected $season;
    /**
     * 
     *
     * @var int
     */
    protected $seasonType;
    /**
     * 
     *
     * @var string
     */
    protected $status;
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
     * @var bool
     */
    protected $isClosed;
    /**
     * 
     *
     * @var string
     */
    protected $awayTeam;
    /**
     * 
     *
     * @var string
     */
    protected $homeTeam;
    /**
     * 
     *
     * @var int
     */
    protected $awayTeamID;
    /**
     * 
     *
     * @var int
     */
    protected $homeTeamID;
    /**
     * 
     *
     * @var int
     */
    protected $stadiumID;
    /**
     * 
     *
     * @var string
     */
    protected $channel;
    /**
     * 
     *
     * @var int
     */
    protected $attendance;
    /**
     * 
     *
     * @var int
     */
    protected $awayTeamScore;
    /**
     * 
     *
     * @var int
     */
    protected $homeTeamScore;
    /**
     * 
     *
     * @var string
     */
    protected $period;
    /**
     * 
     *
     * @var int
     */
    protected $timeRemainingMinutes;
    /**
     * 
     *
     * @var int
     */
    protected $timeRemainingSeconds;
    /**
     * 
     *
     * @var int
     */
    protected $awayTeamMoneyLine;
    /**
     * 
     *
     * @var int
     */
    protected $homeTeamMoneyLine;
    /**
     * 
     *
     * @var float
     */
    protected $pointSpread;
    /**
     * 
     *
     * @var float
     */
    protected $overUnder;
    /**
     * 
     *
     * @var int
     */
    protected $globalGameID;
    /**
     * 
     *
     * @var int
     */
    protected $globalAwayTeamID;
    /**
     * 
     *
     * @var int
     */
    protected $globalHomeTeamID;
    /**
     * 
     *
     * @var int
     */
    protected $pointSpreadAwayTeamMoneyLine;
    /**
     * 
     *
     * @var int
     */
    protected $pointSpreadHomeTeamMoneyLine;
    /**
     * 
     *
     * @var string
     */
    protected $lastPlay;
    /**
     * 
     *
     * @var Period[]
     */
    protected $periods;
    /**
     * 
     *
     * @var string
     */
    protected $gameEndDateTime;
    /**
     * 
     *
     * @var int
     */
    protected $homeRotationNumber;
    /**
     * 
     *
     * @var int
     */
    protected $awayRotationNumber;
    /**
     * 
     *
     * @var bool
     */
    protected $neutralVenue;
    /**
     * 
     *
     * @var int
     */
    protected $overPayout;
    /**
     * 
     *
     * @var int
     */
    protected $underPayout;
    /**
     * 
     *
     * @return int
     */
    public function getGameID() : int
    {
        return $this->gameID;
    }
    /**
     * 
     *
     * @param int $gameID
     *
     * @return self
     */
    public function setGameID(int $gameID) : self
    {
        $this->gameID = $gameID;
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
     * @return int
     */
    public function getSeasonType() : int
    {
        return $this->seasonType;
    }
    /**
     * 
     *
     * @param int $seasonType
     *
     * @return self
     */
    public function setSeasonType(int $seasonType) : self
    {
        $this->seasonType = $seasonType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
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
     * @return bool
     */
    public function getIsClosed() : bool
    {
        return $this->isClosed;
    }
    /**
     * 
     *
     * @param bool $isClosed
     *
     * @return self
     */
    public function setIsClosed(bool $isClosed) : self
    {
        $this->isClosed = $isClosed;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAwayTeam() : string
    {
        return $this->awayTeam;
    }
    /**
     * 
     *
     * @param string $awayTeam
     *
     * @return self
     */
    public function setAwayTeam(string $awayTeam) : self
    {
        $this->awayTeam = $awayTeam;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHomeTeam() : string
    {
        return $this->homeTeam;
    }
    /**
     * 
     *
     * @param string $homeTeam
     *
     * @return self
     */
    public function setHomeTeam(string $homeTeam) : self
    {
        $this->homeTeam = $homeTeam;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayTeamID() : int
    {
        return $this->awayTeamID;
    }
    /**
     * 
     *
     * @param int $awayTeamID
     *
     * @return self
     */
    public function setAwayTeamID(int $awayTeamID) : self
    {
        $this->awayTeamID = $awayTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeTeamID() : int
    {
        return $this->homeTeamID;
    }
    /**
     * 
     *
     * @param int $homeTeamID
     *
     * @return self
     */
    public function setHomeTeamID(int $homeTeamID) : self
    {
        $this->homeTeamID = $homeTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStadiumID() : int
    {
        return $this->stadiumID;
    }
    /**
     * 
     *
     * @param int $stadiumID
     *
     * @return self
     */
    public function setStadiumID(int $stadiumID) : self
    {
        $this->stadiumID = $stadiumID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getChannel() : string
    {
        return $this->channel;
    }
    /**
     * 
     *
     * @param string $channel
     *
     * @return self
     */
    public function setChannel(string $channel) : self
    {
        $this->channel = $channel;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAttendance() : int
    {
        return $this->attendance;
    }
    /**
     * 
     *
     * @param int $attendance
     *
     * @return self
     */
    public function setAttendance(int $attendance) : self
    {
        $this->attendance = $attendance;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayTeamScore() : int
    {
        return $this->awayTeamScore;
    }
    /**
     * 
     *
     * @param int $awayTeamScore
     *
     * @return self
     */
    public function setAwayTeamScore(int $awayTeamScore) : self
    {
        $this->awayTeamScore = $awayTeamScore;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeTeamScore() : int
    {
        return $this->homeTeamScore;
    }
    /**
     * 
     *
     * @param int $homeTeamScore
     *
     * @return self
     */
    public function setHomeTeamScore(int $homeTeamScore) : self
    {
        $this->homeTeamScore = $homeTeamScore;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPeriod() : string
    {
        return $this->period;
    }
    /**
     * 
     *
     * @param string $period
     *
     * @return self
     */
    public function setPeriod(string $period) : self
    {
        $this->period = $period;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTimeRemainingMinutes() : int
    {
        return $this->timeRemainingMinutes;
    }
    /**
     * 
     *
     * @param int $timeRemainingMinutes
     *
     * @return self
     */
    public function setTimeRemainingMinutes(int $timeRemainingMinutes) : self
    {
        $this->timeRemainingMinutes = $timeRemainingMinutes;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTimeRemainingSeconds() : int
    {
        return $this->timeRemainingSeconds;
    }
    /**
     * 
     *
     * @param int $timeRemainingSeconds
     *
     * @return self
     */
    public function setTimeRemainingSeconds(int $timeRemainingSeconds) : self
    {
        $this->timeRemainingSeconds = $timeRemainingSeconds;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayTeamMoneyLine() : int
    {
        return $this->awayTeamMoneyLine;
    }
    /**
     * 
     *
     * @param int $awayTeamMoneyLine
     *
     * @return self
     */
    public function setAwayTeamMoneyLine(int $awayTeamMoneyLine) : self
    {
        $this->awayTeamMoneyLine = $awayTeamMoneyLine;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeTeamMoneyLine() : int
    {
        return $this->homeTeamMoneyLine;
    }
    /**
     * 
     *
     * @param int $homeTeamMoneyLine
     *
     * @return self
     */
    public function setHomeTeamMoneyLine(int $homeTeamMoneyLine) : self
    {
        $this->homeTeamMoneyLine = $homeTeamMoneyLine;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPointSpread() : float
    {
        return $this->pointSpread;
    }
    /**
     * 
     *
     * @param float $pointSpread
     *
     * @return self
     */
    public function setPointSpread(float $pointSpread) : self
    {
        $this->pointSpread = $pointSpread;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOverUnder() : float
    {
        return $this->overUnder;
    }
    /**
     * 
     *
     * @param float $overUnder
     *
     * @return self
     */
    public function setOverUnder(float $overUnder) : self
    {
        $this->overUnder = $overUnder;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGlobalGameID() : int
    {
        return $this->globalGameID;
    }
    /**
     * 
     *
     * @param int $globalGameID
     *
     * @return self
     */
    public function setGlobalGameID(int $globalGameID) : self
    {
        $this->globalGameID = $globalGameID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGlobalAwayTeamID() : int
    {
        return $this->globalAwayTeamID;
    }
    /**
     * 
     *
     * @param int $globalAwayTeamID
     *
     * @return self
     */
    public function setGlobalAwayTeamID(int $globalAwayTeamID) : self
    {
        $this->globalAwayTeamID = $globalAwayTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGlobalHomeTeamID() : int
    {
        return $this->globalHomeTeamID;
    }
    /**
     * 
     *
     * @param int $globalHomeTeamID
     *
     * @return self
     */
    public function setGlobalHomeTeamID(int $globalHomeTeamID) : self
    {
        $this->globalHomeTeamID = $globalHomeTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPointSpreadAwayTeamMoneyLine() : int
    {
        return $this->pointSpreadAwayTeamMoneyLine;
    }
    /**
     * 
     *
     * @param int $pointSpreadAwayTeamMoneyLine
     *
     * @return self
     */
    public function setPointSpreadAwayTeamMoneyLine(int $pointSpreadAwayTeamMoneyLine) : self
    {
        $this->pointSpreadAwayTeamMoneyLine = $pointSpreadAwayTeamMoneyLine;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPointSpreadHomeTeamMoneyLine() : int
    {
        return $this->pointSpreadHomeTeamMoneyLine;
    }
    /**
     * 
     *
     * @param int $pointSpreadHomeTeamMoneyLine
     *
     * @return self
     */
    public function setPointSpreadHomeTeamMoneyLine(int $pointSpreadHomeTeamMoneyLine) : self
    {
        $this->pointSpreadHomeTeamMoneyLine = $pointSpreadHomeTeamMoneyLine;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastPlay() : string
    {
        return $this->lastPlay;
    }
    /**
     * 
     *
     * @param string $lastPlay
     *
     * @return self
     */
    public function setLastPlay(string $lastPlay) : self
    {
        $this->lastPlay = $lastPlay;
        return $this;
    }
    /**
     * 
     *
     * @return Period[]
     */
    public function getPeriods() : array
    {
        return $this->periods;
    }
    /**
     * 
     *
     * @param Period[] $periods
     *
     * @return self
     */
    public function setPeriods(array $periods) : self
    {
        $this->periods = $periods;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGameEndDateTime() : string
    {
        return $this->gameEndDateTime;
    }
    /**
     * 
     *
     * @param string $gameEndDateTime
     *
     * @return self
     */
    public function setGameEndDateTime(string $gameEndDateTime) : self
    {
        $this->gameEndDateTime = $gameEndDateTime;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeRotationNumber() : int
    {
        return $this->homeRotationNumber;
    }
    /**
     * 
     *
     * @param int $homeRotationNumber
     *
     * @return self
     */
    public function setHomeRotationNumber(int $homeRotationNumber) : self
    {
        $this->homeRotationNumber = $homeRotationNumber;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayRotationNumber() : int
    {
        return $this->awayRotationNumber;
    }
    /**
     * 
     *
     * @param int $awayRotationNumber
     *
     * @return self
     */
    public function setAwayRotationNumber(int $awayRotationNumber) : self
    {
        $this->awayRotationNumber = $awayRotationNumber;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getNeutralVenue() : bool
    {
        return $this->neutralVenue;
    }
    /**
     * 
     *
     * @param bool $neutralVenue
     *
     * @return self
     */
    public function setNeutralVenue(bool $neutralVenue) : self
    {
        $this->neutralVenue = $neutralVenue;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOverPayout() : int
    {
        return $this->overPayout;
    }
    /**
     * 
     *
     * @param int $overPayout
     *
     * @return self
     */
    public function setOverPayout(int $overPayout) : self
    {
        $this->overPayout = $overPayout;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUnderPayout() : int
    {
        return $this->underPayout;
    }
    /**
     * 
     *
     * @param int $underPayout
     *
     * @return self
     */
    public function setUnderPayout(int $underPayout) : self
    {
        $this->underPayout = $underPayout;
        return $this;
    }
}