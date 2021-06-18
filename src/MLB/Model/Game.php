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
     * @var string|null
     */
    protected $status;
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
    protected $awayTeam;
    /**
     * 
     *
     * @var string|null
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
     * @var int|null
     */
    protected $rescheduledGameID;
    /**
     * 
     *
     * @var int|null
     */
    protected $stadiumID;
    /**
     * 
     *
     * @var string|null
     */
    protected $channel;
    /**
     * 
     *
     * @var int|null
     */
    protected $inning;
    /**
     * 
     *
     * @var string|null
     */
    protected $inningHalf;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayTeamRuns;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeTeamRuns;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayTeamHits;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeTeamHits;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayTeamErrors;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeTeamErrors;
    /**
     * 
     *
     * @var int|null
     */
    protected $winningPitcherID;
    /**
     * 
     *
     * @var int|null
     */
    protected $losingPitcherID;
    /**
     * 
     *
     * @var int|null
     */
    protected $savingPitcherID;
    /**
     * 
     *
     * @var int|null
     */
    protected $attendance;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayTeamProbablePitcherID;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeTeamProbablePitcherID;
    /**
     * 
     *
     * @var int|null
     */
    protected $outs;
    /**
     * 
     *
     * @var int|null
     */
    protected $balls;
    /**
     * 
     *
     * @var int|null
     */
    protected $strikes;
    /**
     * 
     *
     * @var int|null
     */
    protected $currentPitcherID;
    /**
     * 
     *
     * @var int|null
     */
    protected $currentHitterID;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayTeamStartingPitcherID;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeTeamStartingPitcherID;
    /**
     * 
     *
     * @var int|null
     */
    protected $currentPitchingTeamID;
    /**
     * 
     *
     * @var int|null
     */
    protected $currentHittingTeamID;
    /**
     * 
     *
     * @var float|null
     */
    protected $pointSpread;
    /**
     * 
     *
     * @var float|null
     */
    protected $overUnder;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayTeamMoneyLine;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeTeamMoneyLine;
    /**
     * 
     *
     * @var int|null
     */
    protected $forecastTempLow;
    /**
     * 
     *
     * @var int|null
     */
    protected $forecastTempHigh;
    /**
     * 
     *
     * @var string|null
     */
    protected $forecastDescription;
    /**
     * 
     *
     * @var int|null
     */
    protected $forecastWindChill;
    /**
     * 
     *
     * @var int|null
     */
    protected $forecastWindSpeed;
    /**
     * 
     *
     * @var int|null
     */
    protected $forecastWindDirection;
    /**
     * 
     *
     * @var int|null
     */
    protected $rescheduledFromGameID;
    /**
     * 
     *
     * @var bool|null
     */
    protected $runnerOnFirst;
    /**
     * 
     *
     * @var bool|null
     */
    protected $runnerOnSecond;
    /**
     * 
     *
     * @var bool|null
     */
    protected $runnerOnThird;
    /**
     * 
     *
     * @var string|null
     */
    protected $awayTeamStartingPitcher;
    /**
     * 
     *
     * @var string|null
     */
    protected $homeTeamStartingPitcher;
    /**
     * 
     *
     * @var string|null
     */
    protected $currentPitcher;
    /**
     * 
     *
     * @var string|null
     */
    protected $currentHitter;
    /**
     * 
     *
     * @var string|null
     */
    protected $winningPitcher;
    /**
     * 
     *
     * @var string|null
     */
    protected $losingPitcher;
    /**
     * 
     *
     * @var string|null
     */
    protected $savingPitcher;
    /**
     * 
     *
     * @var int|null
     */
    protected $dueUpHitterID1;
    /**
     * 
     *
     * @var int|null
     */
    protected $dueUpHitterID2;
    /**
     * 
     *
     * @var int|null
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
     * @var int|null
     */
    protected $pointSpreadAwayTeamMoneyLine;
    /**
     * 
     *
     * @var int|null
     */
    protected $pointSpreadHomeTeamMoneyLine;
    /**
     * 
     *
     * @var string|null
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
     * @var string|null
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
     * @var string|null
     */
    protected $gameEndDateTime;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeRotationNumber;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayRotationNumber;
    /**
     * 
     *
     * @var bool|null
     */
    protected $neutralVenue;
    /**
     * 
     *
     * @var string|null
     */
    protected $inningDescription;
    /**
     * 
     *
     * @var int|null
     */
    protected $overPayout;
    /**
     * 
     *
     * @var int|null
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
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status) : self
    {
        $this->status = $status;
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
    public function getAwayTeam() : ?string
    {
        return $this->awayTeam;
    }
    /**
     * 
     *
     * @param string|null $awayTeam
     *
     * @return self
     */
    public function setAwayTeam(?string $awayTeam) : self
    {
        $this->awayTeam = $awayTeam;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHomeTeam() : ?string
    {
        return $this->homeTeam;
    }
    /**
     * 
     *
     * @param string|null $homeTeam
     *
     * @return self
     */
    public function setHomeTeam(?string $homeTeam) : self
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
     * @return int|null
     */
    public function getRescheduledGameID() : ?int
    {
        return $this->rescheduledGameID;
    }
    /**
     * 
     *
     * @param int|null $rescheduledGameID
     *
     * @return self
     */
    public function setRescheduledGameID(?int $rescheduledGameID) : self
    {
        $this->rescheduledGameID = $rescheduledGameID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getStadiumID() : ?int
    {
        return $this->stadiumID;
    }
    /**
     * 
     *
     * @param int|null $stadiumID
     *
     * @return self
     */
    public function setStadiumID(?int $stadiumID) : self
    {
        $this->stadiumID = $stadiumID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getChannel() : ?string
    {
        return $this->channel;
    }
    /**
     * 
     *
     * @param string|null $channel
     *
     * @return self
     */
    public function setChannel(?string $channel) : self
    {
        $this->channel = $channel;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getInning() : ?int
    {
        return $this->inning;
    }
    /**
     * 
     *
     * @param int|null $inning
     *
     * @return self
     */
    public function setInning(?int $inning) : self
    {
        $this->inning = $inning;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInningHalf() : ?string
    {
        return $this->inningHalf;
    }
    /**
     * 
     *
     * @param string|null $inningHalf
     *
     * @return self
     */
    public function setInningHalf(?string $inningHalf) : self
    {
        $this->inningHalf = $inningHalf;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayTeamRuns() : ?int
    {
        return $this->awayTeamRuns;
    }
    /**
     * 
     *
     * @param int|null $awayTeamRuns
     *
     * @return self
     */
    public function setAwayTeamRuns(?int $awayTeamRuns) : self
    {
        $this->awayTeamRuns = $awayTeamRuns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeTeamRuns() : ?int
    {
        return $this->homeTeamRuns;
    }
    /**
     * 
     *
     * @param int|null $homeTeamRuns
     *
     * @return self
     */
    public function setHomeTeamRuns(?int $homeTeamRuns) : self
    {
        $this->homeTeamRuns = $homeTeamRuns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayTeamHits() : ?int
    {
        return $this->awayTeamHits;
    }
    /**
     * 
     *
     * @param int|null $awayTeamHits
     *
     * @return self
     */
    public function setAwayTeamHits(?int $awayTeamHits) : self
    {
        $this->awayTeamHits = $awayTeamHits;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeTeamHits() : ?int
    {
        return $this->homeTeamHits;
    }
    /**
     * 
     *
     * @param int|null $homeTeamHits
     *
     * @return self
     */
    public function setHomeTeamHits(?int $homeTeamHits) : self
    {
        $this->homeTeamHits = $homeTeamHits;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayTeamErrors() : ?int
    {
        return $this->awayTeamErrors;
    }
    /**
     * 
     *
     * @param int|null $awayTeamErrors
     *
     * @return self
     */
    public function setAwayTeamErrors(?int $awayTeamErrors) : self
    {
        $this->awayTeamErrors = $awayTeamErrors;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeTeamErrors() : ?int
    {
        return $this->homeTeamErrors;
    }
    /**
     * 
     *
     * @param int|null $homeTeamErrors
     *
     * @return self
     */
    public function setHomeTeamErrors(?int $homeTeamErrors) : self
    {
        $this->homeTeamErrors = $homeTeamErrors;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getWinningPitcherID() : ?int
    {
        return $this->winningPitcherID;
    }
    /**
     * 
     *
     * @param int|null $winningPitcherID
     *
     * @return self
     */
    public function setWinningPitcherID(?int $winningPitcherID) : self
    {
        $this->winningPitcherID = $winningPitcherID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLosingPitcherID() : ?int
    {
        return $this->losingPitcherID;
    }
    /**
     * 
     *
     * @param int|null $losingPitcherID
     *
     * @return self
     */
    public function setLosingPitcherID(?int $losingPitcherID) : self
    {
        $this->losingPitcherID = $losingPitcherID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSavingPitcherID() : ?int
    {
        return $this->savingPitcherID;
    }
    /**
     * 
     *
     * @param int|null $savingPitcherID
     *
     * @return self
     */
    public function setSavingPitcherID(?int $savingPitcherID) : self
    {
        $this->savingPitcherID = $savingPitcherID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAttendance() : ?int
    {
        return $this->attendance;
    }
    /**
     * 
     *
     * @param int|null $attendance
     *
     * @return self
     */
    public function setAttendance(?int $attendance) : self
    {
        $this->attendance = $attendance;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayTeamProbablePitcherID() : ?int
    {
        return $this->awayTeamProbablePitcherID;
    }
    /**
     * 
     *
     * @param int|null $awayTeamProbablePitcherID
     *
     * @return self
     */
    public function setAwayTeamProbablePitcherID(?int $awayTeamProbablePitcherID) : self
    {
        $this->awayTeamProbablePitcherID = $awayTeamProbablePitcherID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeTeamProbablePitcherID() : ?int
    {
        return $this->homeTeamProbablePitcherID;
    }
    /**
     * 
     *
     * @param int|null $homeTeamProbablePitcherID
     *
     * @return self
     */
    public function setHomeTeamProbablePitcherID(?int $homeTeamProbablePitcherID) : self
    {
        $this->homeTeamProbablePitcherID = $homeTeamProbablePitcherID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOuts() : ?int
    {
        return $this->outs;
    }
    /**
     * 
     *
     * @param int|null $outs
     *
     * @return self
     */
    public function setOuts(?int $outs) : self
    {
        $this->outs = $outs;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBalls() : ?int
    {
        return $this->balls;
    }
    /**
     * 
     *
     * @param int|null $balls
     *
     * @return self
     */
    public function setBalls(?int $balls) : self
    {
        $this->balls = $balls;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getStrikes() : ?int
    {
        return $this->strikes;
    }
    /**
     * 
     *
     * @param int|null $strikes
     *
     * @return self
     */
    public function setStrikes(?int $strikes) : self
    {
        $this->strikes = $strikes;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCurrentPitcherID() : ?int
    {
        return $this->currentPitcherID;
    }
    /**
     * 
     *
     * @param int|null $currentPitcherID
     *
     * @return self
     */
    public function setCurrentPitcherID(?int $currentPitcherID) : self
    {
        $this->currentPitcherID = $currentPitcherID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCurrentHitterID() : ?int
    {
        return $this->currentHitterID;
    }
    /**
     * 
     *
     * @param int|null $currentHitterID
     *
     * @return self
     */
    public function setCurrentHitterID(?int $currentHitterID) : self
    {
        $this->currentHitterID = $currentHitterID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayTeamStartingPitcherID() : ?int
    {
        return $this->awayTeamStartingPitcherID;
    }
    /**
     * 
     *
     * @param int|null $awayTeamStartingPitcherID
     *
     * @return self
     */
    public function setAwayTeamStartingPitcherID(?int $awayTeamStartingPitcherID) : self
    {
        $this->awayTeamStartingPitcherID = $awayTeamStartingPitcherID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeTeamStartingPitcherID() : ?int
    {
        return $this->homeTeamStartingPitcherID;
    }
    /**
     * 
     *
     * @param int|null $homeTeamStartingPitcherID
     *
     * @return self
     */
    public function setHomeTeamStartingPitcherID(?int $homeTeamStartingPitcherID) : self
    {
        $this->homeTeamStartingPitcherID = $homeTeamStartingPitcherID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCurrentPitchingTeamID() : ?int
    {
        return $this->currentPitchingTeamID;
    }
    /**
     * 
     *
     * @param int|null $currentPitchingTeamID
     *
     * @return self
     */
    public function setCurrentPitchingTeamID(?int $currentPitchingTeamID) : self
    {
        $this->currentPitchingTeamID = $currentPitchingTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCurrentHittingTeamID() : ?int
    {
        return $this->currentHittingTeamID;
    }
    /**
     * 
     *
     * @param int|null $currentHittingTeamID
     *
     * @return self
     */
    public function setCurrentHittingTeamID(?int $currentHittingTeamID) : self
    {
        $this->currentHittingTeamID = $currentHittingTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPointSpread() : ?float
    {
        return $this->pointSpread;
    }
    /**
     * 
     *
     * @param float|null $pointSpread
     *
     * @return self
     */
    public function setPointSpread(?float $pointSpread) : self
    {
        $this->pointSpread = $pointSpread;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getOverUnder() : ?float
    {
        return $this->overUnder;
    }
    /**
     * 
     *
     * @param float|null $overUnder
     *
     * @return self
     */
    public function setOverUnder(?float $overUnder) : self
    {
        $this->overUnder = $overUnder;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayTeamMoneyLine() : ?int
    {
        return $this->awayTeamMoneyLine;
    }
    /**
     * 
     *
     * @param int|null $awayTeamMoneyLine
     *
     * @return self
     */
    public function setAwayTeamMoneyLine(?int $awayTeamMoneyLine) : self
    {
        $this->awayTeamMoneyLine = $awayTeamMoneyLine;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeTeamMoneyLine() : ?int
    {
        return $this->homeTeamMoneyLine;
    }
    /**
     * 
     *
     * @param int|null $homeTeamMoneyLine
     *
     * @return self
     */
    public function setHomeTeamMoneyLine(?int $homeTeamMoneyLine) : self
    {
        $this->homeTeamMoneyLine = $homeTeamMoneyLine;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getForecastTempLow() : ?int
    {
        return $this->forecastTempLow;
    }
    /**
     * 
     *
     * @param int|null $forecastTempLow
     *
     * @return self
     */
    public function setForecastTempLow(?int $forecastTempLow) : self
    {
        $this->forecastTempLow = $forecastTempLow;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getForecastTempHigh() : ?int
    {
        return $this->forecastTempHigh;
    }
    /**
     * 
     *
     * @param int|null $forecastTempHigh
     *
     * @return self
     */
    public function setForecastTempHigh(?int $forecastTempHigh) : self
    {
        $this->forecastTempHigh = $forecastTempHigh;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getForecastDescription() : ?string
    {
        return $this->forecastDescription;
    }
    /**
     * 
     *
     * @param string|null $forecastDescription
     *
     * @return self
     */
    public function setForecastDescription(?string $forecastDescription) : self
    {
        $this->forecastDescription = $forecastDescription;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getForecastWindChill() : ?int
    {
        return $this->forecastWindChill;
    }
    /**
     * 
     *
     * @param int|null $forecastWindChill
     *
     * @return self
     */
    public function setForecastWindChill(?int $forecastWindChill) : self
    {
        $this->forecastWindChill = $forecastWindChill;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getForecastWindSpeed() : ?int
    {
        return $this->forecastWindSpeed;
    }
    /**
     * 
     *
     * @param int|null $forecastWindSpeed
     *
     * @return self
     */
    public function setForecastWindSpeed(?int $forecastWindSpeed) : self
    {
        $this->forecastWindSpeed = $forecastWindSpeed;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getForecastWindDirection() : ?int
    {
        return $this->forecastWindDirection;
    }
    /**
     * 
     *
     * @param int|null $forecastWindDirection
     *
     * @return self
     */
    public function setForecastWindDirection(?int $forecastWindDirection) : self
    {
        $this->forecastWindDirection = $forecastWindDirection;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRescheduledFromGameID() : ?int
    {
        return $this->rescheduledFromGameID;
    }
    /**
     * 
     *
     * @param int|null $rescheduledFromGameID
     *
     * @return self
     */
    public function setRescheduledFromGameID(?int $rescheduledFromGameID) : self
    {
        $this->rescheduledFromGameID = $rescheduledFromGameID;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getRunnerOnFirst() : ?bool
    {
        return $this->runnerOnFirst;
    }
    /**
     * 
     *
     * @param bool|null $runnerOnFirst
     *
     * @return self
     */
    public function setRunnerOnFirst(?bool $runnerOnFirst) : self
    {
        $this->runnerOnFirst = $runnerOnFirst;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getRunnerOnSecond() : ?bool
    {
        return $this->runnerOnSecond;
    }
    /**
     * 
     *
     * @param bool|null $runnerOnSecond
     *
     * @return self
     */
    public function setRunnerOnSecond(?bool $runnerOnSecond) : self
    {
        $this->runnerOnSecond = $runnerOnSecond;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getRunnerOnThird() : ?bool
    {
        return $this->runnerOnThird;
    }
    /**
     * 
     *
     * @param bool|null $runnerOnThird
     *
     * @return self
     */
    public function setRunnerOnThird(?bool $runnerOnThird) : self
    {
        $this->runnerOnThird = $runnerOnThird;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAwayTeamStartingPitcher() : ?string
    {
        return $this->awayTeamStartingPitcher;
    }
    /**
     * 
     *
     * @param string|null $awayTeamStartingPitcher
     *
     * @return self
     */
    public function setAwayTeamStartingPitcher(?string $awayTeamStartingPitcher) : self
    {
        $this->awayTeamStartingPitcher = $awayTeamStartingPitcher;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHomeTeamStartingPitcher() : ?string
    {
        return $this->homeTeamStartingPitcher;
    }
    /**
     * 
     *
     * @param string|null $homeTeamStartingPitcher
     *
     * @return self
     */
    public function setHomeTeamStartingPitcher(?string $homeTeamStartingPitcher) : self
    {
        $this->homeTeamStartingPitcher = $homeTeamStartingPitcher;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCurrentPitcher() : ?string
    {
        return $this->currentPitcher;
    }
    /**
     * 
     *
     * @param string|null $currentPitcher
     *
     * @return self
     */
    public function setCurrentPitcher(?string $currentPitcher) : self
    {
        $this->currentPitcher = $currentPitcher;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCurrentHitter() : ?string
    {
        return $this->currentHitter;
    }
    /**
     * 
     *
     * @param string|null $currentHitter
     *
     * @return self
     */
    public function setCurrentHitter(?string $currentHitter) : self
    {
        $this->currentHitter = $currentHitter;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getWinningPitcher() : ?string
    {
        return $this->winningPitcher;
    }
    /**
     * 
     *
     * @param string|null $winningPitcher
     *
     * @return self
     */
    public function setWinningPitcher(?string $winningPitcher) : self
    {
        $this->winningPitcher = $winningPitcher;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLosingPitcher() : ?string
    {
        return $this->losingPitcher;
    }
    /**
     * 
     *
     * @param string|null $losingPitcher
     *
     * @return self
     */
    public function setLosingPitcher(?string $losingPitcher) : self
    {
        $this->losingPitcher = $losingPitcher;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSavingPitcher() : ?string
    {
        return $this->savingPitcher;
    }
    /**
     * 
     *
     * @param string|null $savingPitcher
     *
     * @return self
     */
    public function setSavingPitcher(?string $savingPitcher) : self
    {
        $this->savingPitcher = $savingPitcher;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDueUpHitterID1() : ?int
    {
        return $this->dueUpHitterID1;
    }
    /**
     * 
     *
     * @param int|null $dueUpHitterID1
     *
     * @return self
     */
    public function setDueUpHitterID1(?int $dueUpHitterID1) : self
    {
        $this->dueUpHitterID1 = $dueUpHitterID1;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDueUpHitterID2() : ?int
    {
        return $this->dueUpHitterID2;
    }
    /**
     * 
     *
     * @param int|null $dueUpHitterID2
     *
     * @return self
     */
    public function setDueUpHitterID2(?int $dueUpHitterID2) : self
    {
        $this->dueUpHitterID2 = $dueUpHitterID2;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDueUpHitterID3() : ?int
    {
        return $this->dueUpHitterID3;
    }
    /**
     * 
     *
     * @param int|null $dueUpHitterID3
     *
     * @return self
     */
    public function setDueUpHitterID3(?int $dueUpHitterID3) : self
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
     * @return int|null
     */
    public function getPointSpreadAwayTeamMoneyLine() : ?int
    {
        return $this->pointSpreadAwayTeamMoneyLine;
    }
    /**
     * 
     *
     * @param int|null $pointSpreadAwayTeamMoneyLine
     *
     * @return self
     */
    public function setPointSpreadAwayTeamMoneyLine(?int $pointSpreadAwayTeamMoneyLine) : self
    {
        $this->pointSpreadAwayTeamMoneyLine = $pointSpreadAwayTeamMoneyLine;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPointSpreadHomeTeamMoneyLine() : ?int
    {
        return $this->pointSpreadHomeTeamMoneyLine;
    }
    /**
     * 
     *
     * @param int|null $pointSpreadHomeTeamMoneyLine
     *
     * @return self
     */
    public function setPointSpreadHomeTeamMoneyLine(?int $pointSpreadHomeTeamMoneyLine) : self
    {
        $this->pointSpreadHomeTeamMoneyLine = $pointSpreadHomeTeamMoneyLine;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLastPlay() : ?string
    {
        return $this->lastPlay;
    }
    /**
     * 
     *
     * @param string|null $lastPlay
     *
     * @return self
     */
    public function setLastPlay(?string $lastPlay) : self
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
     * @return string|null
     */
    public function getGameEndDateTime() : ?string
    {
        return $this->gameEndDateTime;
    }
    /**
     * 
     *
     * @param string|null $gameEndDateTime
     *
     * @return self
     */
    public function setGameEndDateTime(?string $gameEndDateTime) : self
    {
        $this->gameEndDateTime = $gameEndDateTime;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeRotationNumber() : ?int
    {
        return $this->homeRotationNumber;
    }
    /**
     * 
     *
     * @param int|null $homeRotationNumber
     *
     * @return self
     */
    public function setHomeRotationNumber(?int $homeRotationNumber) : self
    {
        $this->homeRotationNumber = $homeRotationNumber;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayRotationNumber() : ?int
    {
        return $this->awayRotationNumber;
    }
    /**
     * 
     *
     * @param int|null $awayRotationNumber
     *
     * @return self
     */
    public function setAwayRotationNumber(?int $awayRotationNumber) : self
    {
        $this->awayRotationNumber = $awayRotationNumber;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getNeutralVenue() : ?bool
    {
        return $this->neutralVenue;
    }
    /**
     * 
     *
     * @param bool|null $neutralVenue
     *
     * @return self
     */
    public function setNeutralVenue(?bool $neutralVenue) : self
    {
        $this->neutralVenue = $neutralVenue;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInningDescription() : ?string
    {
        return $this->inningDescription;
    }
    /**
     * 
     *
     * @param string|null $inningDescription
     *
     * @return self
     */
    public function setInningDescription(?string $inningDescription) : self
    {
        $this->inningDescription = $inningDescription;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOverPayout() : ?int
    {
        return $this->overPayout;
    }
    /**
     * 
     *
     * @param int|null $overPayout
     *
     * @return self
     */
    public function setOverPayout(?int $overPayout) : self
    {
        $this->overPayout = $overPayout;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUnderPayout() : ?int
    {
        return $this->underPayout;
    }
    /**
     * 
     *
     * @param int|null $underPayout
     *
     * @return self
     */
    public function setUnderPayout(?int $underPayout) : self
    {
        $this->underPayout = $underPayout;
        return $this;
    }
}