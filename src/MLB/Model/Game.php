<?php

namespace Sportsdata\API\MLB\Model;

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
    protected $rescheduledGameID;
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
    protected $inning;
    /**
     * 
     *
     * @var string
     */
    protected $inningHalf;
    /**
     * 
     *
     * @var int
     */
    protected $awayTeamRuns;
    /**
     * 
     *
     * @var int
     */
    protected $homeTeamRuns;
    /**
     * 
     *
     * @var int
     */
    protected $awayTeamHits;
    /**
     * 
     *
     * @var int
     */
    protected $homeTeamHits;
    /**
     * 
     *
     * @var int
     */
    protected $awayTeamErrors;
    /**
     * 
     *
     * @var int
     */
    protected $homeTeamErrors;
    /**
     * 
     *
     * @var int
     */
    protected $winningPitcherID;
    /**
     * 
     *
     * @var int
     */
    protected $losingPitcherID;
    /**
     * 
     *
     * @var int
     */
    protected $savingPitcherID;
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
    protected $awayTeamProbablePitcherID;
    /**
     * 
     *
     * @var int
     */
    protected $homeTeamProbablePitcherID;
    /**
     * 
     *
     * @var int
     */
    protected $outs;
    /**
     * 
     *
     * @var int
     */
    protected $balls;
    /**
     * 
     *
     * @var int
     */
    protected $strikes;
    /**
     * 
     *
     * @var int
     */
    protected $currentPitcherID;
    /**
     * 
     *
     * @var int
     */
    protected $currentHitterID;
    /**
     * 
     *
     * @var int
     */
    protected $awayTeamStartingPitcherID;
    /**
     * 
     *
     * @var int
     */
    protected $homeTeamStartingPitcherID;
    /**
     * 
     *
     * @var int
     */
    protected $currentPitchingTeamID;
    /**
     * 
     *
     * @var int
     */
    protected $currentHittingTeamID;
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
     * @var int
     */
    protected $forecastTempLow;
    /**
     * 
     *
     * @var int
     */
    protected $forecastTempHigh;
    /**
     * 
     *
     * @var string
     */
    protected $forecastDescription;
    /**
     * 
     *
     * @var int
     */
    protected $forecastWindChill;
    /**
     * 
     *
     * @var int
     */
    protected $forecastWindSpeed;
    /**
     * 
     *
     * @var int
     */
    protected $forecastWindDirection;
    /**
     * 
     *
     * @var int
     */
    protected $rescheduledFromGameID;
    /**
     * 
     *
     * @var bool
     */
    protected $runnerOnFirst;
    /**
     * 
     *
     * @var bool
     */
    protected $runnerOnSecond;
    /**
     * 
     *
     * @var bool
     */
    protected $runnerOnThird;
    /**
     * 
     *
     * @var string
     */
    protected $awayTeamStartingPitcher;
    /**
     * 
     *
     * @var string
     */
    protected $homeTeamStartingPitcher;
    /**
     * 
     *
     * @var string
     */
    protected $currentPitcher;
    /**
     * 
     *
     * @var string
     */
    protected $currentHitter;
    /**
     * 
     *
     * @var string
     */
    protected $winningPitcher;
    /**
     * 
     *
     * @var string
     */
    protected $losingPitcher;
    /**
     * 
     *
     * @var string
     */
    protected $savingPitcher;
    /**
     * 
     *
     * @var int
     */
    protected $dueUpHitterID1;
    /**
     * 
     *
     * @var int
     */
    protected $dueUpHitterID2;
    /**
     * 
     *
     * @var int
     */
    protected $dueUpHitterID3;
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
     * @var bool
     */
    protected $isClosed;
    /**
     * 
     *
     * @var string
     */
    protected $updated;
    /**
     * 
     *
     * @var Inning[]
     */
    protected $innings;
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
     * @var string
     */
    protected $inningDescription;
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
    public function getRescheduledGameID() : int
    {
        return $this->rescheduledGameID;
    }
    /**
     * 
     *
     * @param int $rescheduledGameID
     *
     * @return self
     */
    public function setRescheduledGameID(int $rescheduledGameID) : self
    {
        $this->rescheduledGameID = $rescheduledGameID;
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
    public function getInning() : int
    {
        return $this->inning;
    }
    /**
     * 
     *
     * @param int $inning
     *
     * @return self
     */
    public function setInning(int $inning) : self
    {
        $this->inning = $inning;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInningHalf() : string
    {
        return $this->inningHalf;
    }
    /**
     * 
     *
     * @param string $inningHalf
     *
     * @return self
     */
    public function setInningHalf(string $inningHalf) : self
    {
        $this->inningHalf = $inningHalf;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayTeamRuns() : int
    {
        return $this->awayTeamRuns;
    }
    /**
     * 
     *
     * @param int $awayTeamRuns
     *
     * @return self
     */
    public function setAwayTeamRuns(int $awayTeamRuns) : self
    {
        $this->awayTeamRuns = $awayTeamRuns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeTeamRuns() : int
    {
        return $this->homeTeamRuns;
    }
    /**
     * 
     *
     * @param int $homeTeamRuns
     *
     * @return self
     */
    public function setHomeTeamRuns(int $homeTeamRuns) : self
    {
        $this->homeTeamRuns = $homeTeamRuns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayTeamHits() : int
    {
        return $this->awayTeamHits;
    }
    /**
     * 
     *
     * @param int $awayTeamHits
     *
     * @return self
     */
    public function setAwayTeamHits(int $awayTeamHits) : self
    {
        $this->awayTeamHits = $awayTeamHits;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeTeamHits() : int
    {
        return $this->homeTeamHits;
    }
    /**
     * 
     *
     * @param int $homeTeamHits
     *
     * @return self
     */
    public function setHomeTeamHits(int $homeTeamHits) : self
    {
        $this->homeTeamHits = $homeTeamHits;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayTeamErrors() : int
    {
        return $this->awayTeamErrors;
    }
    /**
     * 
     *
     * @param int $awayTeamErrors
     *
     * @return self
     */
    public function setAwayTeamErrors(int $awayTeamErrors) : self
    {
        $this->awayTeamErrors = $awayTeamErrors;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeTeamErrors() : int
    {
        return $this->homeTeamErrors;
    }
    /**
     * 
     *
     * @param int $homeTeamErrors
     *
     * @return self
     */
    public function setHomeTeamErrors(int $homeTeamErrors) : self
    {
        $this->homeTeamErrors = $homeTeamErrors;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getWinningPitcherID() : int
    {
        return $this->winningPitcherID;
    }
    /**
     * 
     *
     * @param int $winningPitcherID
     *
     * @return self
     */
    public function setWinningPitcherID(int $winningPitcherID) : self
    {
        $this->winningPitcherID = $winningPitcherID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLosingPitcherID() : int
    {
        return $this->losingPitcherID;
    }
    /**
     * 
     *
     * @param int $losingPitcherID
     *
     * @return self
     */
    public function setLosingPitcherID(int $losingPitcherID) : self
    {
        $this->losingPitcherID = $losingPitcherID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSavingPitcherID() : int
    {
        return $this->savingPitcherID;
    }
    /**
     * 
     *
     * @param int $savingPitcherID
     *
     * @return self
     */
    public function setSavingPitcherID(int $savingPitcherID) : self
    {
        $this->savingPitcherID = $savingPitcherID;
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
    public function getAwayTeamProbablePitcherID() : int
    {
        return $this->awayTeamProbablePitcherID;
    }
    /**
     * 
     *
     * @param int $awayTeamProbablePitcherID
     *
     * @return self
     */
    public function setAwayTeamProbablePitcherID(int $awayTeamProbablePitcherID) : self
    {
        $this->awayTeamProbablePitcherID = $awayTeamProbablePitcherID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeTeamProbablePitcherID() : int
    {
        return $this->homeTeamProbablePitcherID;
    }
    /**
     * 
     *
     * @param int $homeTeamProbablePitcherID
     *
     * @return self
     */
    public function setHomeTeamProbablePitcherID(int $homeTeamProbablePitcherID) : self
    {
        $this->homeTeamProbablePitcherID = $homeTeamProbablePitcherID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOuts() : int
    {
        return $this->outs;
    }
    /**
     * 
     *
     * @param int $outs
     *
     * @return self
     */
    public function setOuts(int $outs) : self
    {
        $this->outs = $outs;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBalls() : int
    {
        return $this->balls;
    }
    /**
     * 
     *
     * @param int $balls
     *
     * @return self
     */
    public function setBalls(int $balls) : self
    {
        $this->balls = $balls;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStrikes() : int
    {
        return $this->strikes;
    }
    /**
     * 
     *
     * @param int $strikes
     *
     * @return self
     */
    public function setStrikes(int $strikes) : self
    {
        $this->strikes = $strikes;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCurrentPitcherID() : int
    {
        return $this->currentPitcherID;
    }
    /**
     * 
     *
     * @param int $currentPitcherID
     *
     * @return self
     */
    public function setCurrentPitcherID(int $currentPitcherID) : self
    {
        $this->currentPitcherID = $currentPitcherID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCurrentHitterID() : int
    {
        return $this->currentHitterID;
    }
    /**
     * 
     *
     * @param int $currentHitterID
     *
     * @return self
     */
    public function setCurrentHitterID(int $currentHitterID) : self
    {
        $this->currentHitterID = $currentHitterID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayTeamStartingPitcherID() : int
    {
        return $this->awayTeamStartingPitcherID;
    }
    /**
     * 
     *
     * @param int $awayTeamStartingPitcherID
     *
     * @return self
     */
    public function setAwayTeamStartingPitcherID(int $awayTeamStartingPitcherID) : self
    {
        $this->awayTeamStartingPitcherID = $awayTeamStartingPitcherID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeTeamStartingPitcherID() : int
    {
        return $this->homeTeamStartingPitcherID;
    }
    /**
     * 
     *
     * @param int $homeTeamStartingPitcherID
     *
     * @return self
     */
    public function setHomeTeamStartingPitcherID(int $homeTeamStartingPitcherID) : self
    {
        $this->homeTeamStartingPitcherID = $homeTeamStartingPitcherID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCurrentPitchingTeamID() : int
    {
        return $this->currentPitchingTeamID;
    }
    /**
     * 
     *
     * @param int $currentPitchingTeamID
     *
     * @return self
     */
    public function setCurrentPitchingTeamID(int $currentPitchingTeamID) : self
    {
        $this->currentPitchingTeamID = $currentPitchingTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCurrentHittingTeamID() : int
    {
        return $this->currentHittingTeamID;
    }
    /**
     * 
     *
     * @param int $currentHittingTeamID
     *
     * @return self
     */
    public function setCurrentHittingTeamID(int $currentHittingTeamID) : self
    {
        $this->currentHittingTeamID = $currentHittingTeamID;
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
     * @return int
     */
    public function getForecastTempLow() : int
    {
        return $this->forecastTempLow;
    }
    /**
     * 
     *
     * @param int $forecastTempLow
     *
     * @return self
     */
    public function setForecastTempLow(int $forecastTempLow) : self
    {
        $this->forecastTempLow = $forecastTempLow;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getForecastTempHigh() : int
    {
        return $this->forecastTempHigh;
    }
    /**
     * 
     *
     * @param int $forecastTempHigh
     *
     * @return self
     */
    public function setForecastTempHigh(int $forecastTempHigh) : self
    {
        $this->forecastTempHigh = $forecastTempHigh;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getForecastDescription() : string
    {
        return $this->forecastDescription;
    }
    /**
     * 
     *
     * @param string $forecastDescription
     *
     * @return self
     */
    public function setForecastDescription(string $forecastDescription) : self
    {
        $this->forecastDescription = $forecastDescription;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getForecastWindChill() : int
    {
        return $this->forecastWindChill;
    }
    /**
     * 
     *
     * @param int $forecastWindChill
     *
     * @return self
     */
    public function setForecastWindChill(int $forecastWindChill) : self
    {
        $this->forecastWindChill = $forecastWindChill;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getForecastWindSpeed() : int
    {
        return $this->forecastWindSpeed;
    }
    /**
     * 
     *
     * @param int $forecastWindSpeed
     *
     * @return self
     */
    public function setForecastWindSpeed(int $forecastWindSpeed) : self
    {
        $this->forecastWindSpeed = $forecastWindSpeed;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getForecastWindDirection() : int
    {
        return $this->forecastWindDirection;
    }
    /**
     * 
     *
     * @param int $forecastWindDirection
     *
     * @return self
     */
    public function setForecastWindDirection(int $forecastWindDirection) : self
    {
        $this->forecastWindDirection = $forecastWindDirection;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRescheduledFromGameID() : int
    {
        return $this->rescheduledFromGameID;
    }
    /**
     * 
     *
     * @param int $rescheduledFromGameID
     *
     * @return self
     */
    public function setRescheduledFromGameID(int $rescheduledFromGameID) : self
    {
        $this->rescheduledFromGameID = $rescheduledFromGameID;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getRunnerOnFirst() : bool
    {
        return $this->runnerOnFirst;
    }
    /**
     * 
     *
     * @param bool $runnerOnFirst
     *
     * @return self
     */
    public function setRunnerOnFirst(bool $runnerOnFirst) : self
    {
        $this->runnerOnFirst = $runnerOnFirst;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getRunnerOnSecond() : bool
    {
        return $this->runnerOnSecond;
    }
    /**
     * 
     *
     * @param bool $runnerOnSecond
     *
     * @return self
     */
    public function setRunnerOnSecond(bool $runnerOnSecond) : self
    {
        $this->runnerOnSecond = $runnerOnSecond;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getRunnerOnThird() : bool
    {
        return $this->runnerOnThird;
    }
    /**
     * 
     *
     * @param bool $runnerOnThird
     *
     * @return self
     */
    public function setRunnerOnThird(bool $runnerOnThird) : self
    {
        $this->runnerOnThird = $runnerOnThird;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAwayTeamStartingPitcher() : string
    {
        return $this->awayTeamStartingPitcher;
    }
    /**
     * 
     *
     * @param string $awayTeamStartingPitcher
     *
     * @return self
     */
    public function setAwayTeamStartingPitcher(string $awayTeamStartingPitcher) : self
    {
        $this->awayTeamStartingPitcher = $awayTeamStartingPitcher;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHomeTeamStartingPitcher() : string
    {
        return $this->homeTeamStartingPitcher;
    }
    /**
     * 
     *
     * @param string $homeTeamStartingPitcher
     *
     * @return self
     */
    public function setHomeTeamStartingPitcher(string $homeTeamStartingPitcher) : self
    {
        $this->homeTeamStartingPitcher = $homeTeamStartingPitcher;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCurrentPitcher() : string
    {
        return $this->currentPitcher;
    }
    /**
     * 
     *
     * @param string $currentPitcher
     *
     * @return self
     */
    public function setCurrentPitcher(string $currentPitcher) : self
    {
        $this->currentPitcher = $currentPitcher;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCurrentHitter() : string
    {
        return $this->currentHitter;
    }
    /**
     * 
     *
     * @param string $currentHitter
     *
     * @return self
     */
    public function setCurrentHitter(string $currentHitter) : self
    {
        $this->currentHitter = $currentHitter;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getWinningPitcher() : string
    {
        return $this->winningPitcher;
    }
    /**
     * 
     *
     * @param string $winningPitcher
     *
     * @return self
     */
    public function setWinningPitcher(string $winningPitcher) : self
    {
        $this->winningPitcher = $winningPitcher;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLosingPitcher() : string
    {
        return $this->losingPitcher;
    }
    /**
     * 
     *
     * @param string $losingPitcher
     *
     * @return self
     */
    public function setLosingPitcher(string $losingPitcher) : self
    {
        $this->losingPitcher = $losingPitcher;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSavingPitcher() : string
    {
        return $this->savingPitcher;
    }
    /**
     * 
     *
     * @param string $savingPitcher
     *
     * @return self
     */
    public function setSavingPitcher(string $savingPitcher) : self
    {
        $this->savingPitcher = $savingPitcher;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDueUpHitterID1() : int
    {
        return $this->dueUpHitterID1;
    }
    /**
     * 
     *
     * @param int $dueUpHitterID1
     *
     * @return self
     */
    public function setDueUpHitterID1(int $dueUpHitterID1) : self
    {
        $this->dueUpHitterID1 = $dueUpHitterID1;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDueUpHitterID2() : int
    {
        return $this->dueUpHitterID2;
    }
    /**
     * 
     *
     * @param int $dueUpHitterID2
     *
     * @return self
     */
    public function setDueUpHitterID2(int $dueUpHitterID2) : self
    {
        $this->dueUpHitterID2 = $dueUpHitterID2;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDueUpHitterID3() : int
    {
        return $this->dueUpHitterID3;
    }
    /**
     * 
     *
     * @param int $dueUpHitterID3
     *
     * @return self
     */
    public function setDueUpHitterID3(int $dueUpHitterID3) : self
    {
        $this->dueUpHitterID3 = $dueUpHitterID3;
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
     * @return Inning[]
     */
    public function getInnings() : array
    {
        return $this->innings;
    }
    /**
     * 
     *
     * @param Inning[] $innings
     *
     * @return self
     */
    public function setInnings(array $innings) : self
    {
        $this->innings = $innings;
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
     * @return string
     */
    public function getInningDescription() : string
    {
        return $this->inningDescription;
    }
    /**
     * 
     *
     * @param string $inningDescription
     *
     * @return self
     */
    public function setInningDescription(string $inningDescription) : self
    {
        $this->inningDescription = $inningDescription;
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