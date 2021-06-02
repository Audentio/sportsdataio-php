<?php

namespace Sportsdata\API\NBA\Model;

class TeamGame
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
    protected $teamID;
    /**
     * 
     *
     * @var int
     */
    protected $seasonType;
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
    protected $team;
    /**
     * 
     *
     * @var int
     */
    protected $wins;
    /**
     * 
     *
     * @var int
     */
    protected $losses;
    /**
     * 
     *
     * @var float
     */
    protected $possessions;
    /**
     * 
     *
     * @var int
     */
    protected $globalTeamID;
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
    protected $opponentID;
    /**
     * 
     *
     * @var string
     */
    protected $opponent;
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
    protected $homeOrAway;
    /**
     * 
     *
     * @var bool
     */
    protected $isGameOver;
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
    protected $globalOpponentID;
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
    protected $games;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyPoints;
    /**
     * 
     *
     * @var int
     */
    protected $minutes;
    /**
     * 
     *
     * @var int
     */
    protected $seconds;
    /**
     * 
     *
     * @var float
     */
    protected $fieldGoalsMade;
    /**
     * 
     *
     * @var float
     */
    protected $fieldGoalsAttempted;
    /**
     * 
     *
     * @var float
     */
    protected $fieldGoalsPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $effectiveFieldGoalsPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $twoPointersMade;
    /**
     * 
     *
     * @var float
     */
    protected $twoPointersAttempted;
    /**
     * 
     *
     * @var float
     */
    protected $twoPointersPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $threePointersMade;
    /**
     * 
     *
     * @var float
     */
    protected $threePointersAttempted;
    /**
     * 
     *
     * @var float
     */
    protected $threePointersPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $freeThrowsMade;
    /**
     * 
     *
     * @var float
     */
    protected $freeThrowsAttempted;
    /**
     * 
     *
     * @var float
     */
    protected $freeThrowsPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $offensiveRebounds;
    /**
     * 
     *
     * @var float
     */
    protected $defensiveRebounds;
    /**
     * 
     *
     * @var float
     */
    protected $rebounds;
    /**
     * 
     *
     * @var float
     */
    protected $offensiveReboundsPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $defensiveReboundsPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $totalReboundsPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $assists;
    /**
     * 
     *
     * @var float
     */
    protected $steals;
    /**
     * 
     *
     * @var float
     */
    protected $blockedShots;
    /**
     * 
     *
     * @var float
     */
    protected $turnovers;
    /**
     * 
     *
     * @var float
     */
    protected $personalFouls;
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
    protected $trueShootingAttempts;
    /**
     * 
     *
     * @var float
     */
    protected $trueShootingPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $playerEfficiencyRating;
    /**
     * 
     *
     * @var float
     */
    protected $assistsPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $stealsPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $blocksPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $turnOversPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $usageRatePercentage;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyPointsFanDuel;
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
    protected $fantasyPointsYahoo;
    /**
     * 
     *
     * @var float
     */
    protected $plusMinus;
    /**
     * 
     *
     * @var float
     */
    protected $doubleDoubles;
    /**
     * 
     *
     * @var float
     */
    protected $tripleDoubles;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyPointsFantasyDraft;
    /**
     * 
     *
     * @var bool
     */
    protected $isClosed;
    /**
     * 
     *
     * @var bool
     */
    protected $lineupConfirmed;
    /**
     * 
     *
     * @var string
     */
    protected $lineupStatus;
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
    public function getTeamID() : int
    {
        return $this->teamID;
    }
    /**
     * 
     *
     * @param int $teamID
     *
     * @return self
     */
    public function setTeamID(int $teamID) : self
    {
        $this->teamID = $teamID;
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
    public function getWins() : int
    {
        return $this->wins;
    }
    /**
     * 
     *
     * @param int $wins
     *
     * @return self
     */
    public function setWins(int $wins) : self
    {
        $this->wins = $wins;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLosses() : int
    {
        return $this->losses;
    }
    /**
     * 
     *
     * @param int $losses
     *
     * @return self
     */
    public function setLosses(int $losses) : self
    {
        $this->losses = $losses;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPossessions() : float
    {
        return $this->possessions;
    }
    /**
     * 
     *
     * @param float $possessions
     *
     * @return self
     */
    public function setPossessions(float $possessions) : self
    {
        $this->possessions = $possessions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGlobalTeamID() : int
    {
        return $this->globalTeamID;
    }
    /**
     * 
     *
     * @param int $globalTeamID
     *
     * @return self
     */
    public function setGlobalTeamID(int $globalTeamID) : self
    {
        $this->globalTeamID = $globalTeamID;
        return $this;
    }
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
    public function getOpponentID() : int
    {
        return $this->opponentID;
    }
    /**
     * 
     *
     * @param int $opponentID
     *
     * @return self
     */
    public function setOpponentID(int $opponentID) : self
    {
        $this->opponentID = $opponentID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOpponent() : string
    {
        return $this->opponent;
    }
    /**
     * 
     *
     * @param string $opponent
     *
     * @return self
     */
    public function setOpponent(string $opponent) : self
    {
        $this->opponent = $opponent;
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
    public function getHomeOrAway() : string
    {
        return $this->homeOrAway;
    }
    /**
     * 
     *
     * @param string $homeOrAway
     *
     * @return self
     */
    public function setHomeOrAway(string $homeOrAway) : self
    {
        $this->homeOrAway = $homeOrAway;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsGameOver() : bool
    {
        return $this->isGameOver;
    }
    /**
     * 
     *
     * @param bool $isGameOver
     *
     * @return self
     */
    public function setIsGameOver(bool $isGameOver) : self
    {
        $this->isGameOver = $isGameOver;
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
    public function getGlobalOpponentID() : int
    {
        return $this->globalOpponentID;
    }
    /**
     * 
     *
     * @param int $globalOpponentID
     *
     * @return self
     */
    public function setGlobalOpponentID(int $globalOpponentID) : self
    {
        $this->globalOpponentID = $globalOpponentID;
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
    public function getGames() : int
    {
        return $this->games;
    }
    /**
     * 
     *
     * @param int $games
     *
     * @return self
     */
    public function setGames(int $games) : self
    {
        $this->games = $games;
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
     * @return int
     */
    public function getMinutes() : int
    {
        return $this->minutes;
    }
    /**
     * 
     *
     * @param int $minutes
     *
     * @return self
     */
    public function setMinutes(int $minutes) : self
    {
        $this->minutes = $minutes;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSeconds() : int
    {
        return $this->seconds;
    }
    /**
     * 
     *
     * @param int $seconds
     *
     * @return self
     */
    public function setSeconds(int $seconds) : self
    {
        $this->seconds = $seconds;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFieldGoalsMade() : float
    {
        return $this->fieldGoalsMade;
    }
    /**
     * 
     *
     * @param float $fieldGoalsMade
     *
     * @return self
     */
    public function setFieldGoalsMade(float $fieldGoalsMade) : self
    {
        $this->fieldGoalsMade = $fieldGoalsMade;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFieldGoalsAttempted() : float
    {
        return $this->fieldGoalsAttempted;
    }
    /**
     * 
     *
     * @param float $fieldGoalsAttempted
     *
     * @return self
     */
    public function setFieldGoalsAttempted(float $fieldGoalsAttempted) : self
    {
        $this->fieldGoalsAttempted = $fieldGoalsAttempted;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFieldGoalsPercentage() : float
    {
        return $this->fieldGoalsPercentage;
    }
    /**
     * 
     *
     * @param float $fieldGoalsPercentage
     *
     * @return self
     */
    public function setFieldGoalsPercentage(float $fieldGoalsPercentage) : self
    {
        $this->fieldGoalsPercentage = $fieldGoalsPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getEffectiveFieldGoalsPercentage() : float
    {
        return $this->effectiveFieldGoalsPercentage;
    }
    /**
     * 
     *
     * @param float $effectiveFieldGoalsPercentage
     *
     * @return self
     */
    public function setEffectiveFieldGoalsPercentage(float $effectiveFieldGoalsPercentage) : self
    {
        $this->effectiveFieldGoalsPercentage = $effectiveFieldGoalsPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTwoPointersMade() : float
    {
        return $this->twoPointersMade;
    }
    /**
     * 
     *
     * @param float $twoPointersMade
     *
     * @return self
     */
    public function setTwoPointersMade(float $twoPointersMade) : self
    {
        $this->twoPointersMade = $twoPointersMade;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTwoPointersAttempted() : float
    {
        return $this->twoPointersAttempted;
    }
    /**
     * 
     *
     * @param float $twoPointersAttempted
     *
     * @return self
     */
    public function setTwoPointersAttempted(float $twoPointersAttempted) : self
    {
        $this->twoPointersAttempted = $twoPointersAttempted;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTwoPointersPercentage() : float
    {
        return $this->twoPointersPercentage;
    }
    /**
     * 
     *
     * @param float $twoPointersPercentage
     *
     * @return self
     */
    public function setTwoPointersPercentage(float $twoPointersPercentage) : self
    {
        $this->twoPointersPercentage = $twoPointersPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getThreePointersMade() : float
    {
        return $this->threePointersMade;
    }
    /**
     * 
     *
     * @param float $threePointersMade
     *
     * @return self
     */
    public function setThreePointersMade(float $threePointersMade) : self
    {
        $this->threePointersMade = $threePointersMade;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getThreePointersAttempted() : float
    {
        return $this->threePointersAttempted;
    }
    /**
     * 
     *
     * @param float $threePointersAttempted
     *
     * @return self
     */
    public function setThreePointersAttempted(float $threePointersAttempted) : self
    {
        $this->threePointersAttempted = $threePointersAttempted;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getThreePointersPercentage() : float
    {
        return $this->threePointersPercentage;
    }
    /**
     * 
     *
     * @param float $threePointersPercentage
     *
     * @return self
     */
    public function setThreePointersPercentage(float $threePointersPercentage) : self
    {
        $this->threePointersPercentage = $threePointersPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFreeThrowsMade() : float
    {
        return $this->freeThrowsMade;
    }
    /**
     * 
     *
     * @param float $freeThrowsMade
     *
     * @return self
     */
    public function setFreeThrowsMade(float $freeThrowsMade) : self
    {
        $this->freeThrowsMade = $freeThrowsMade;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFreeThrowsAttempted() : float
    {
        return $this->freeThrowsAttempted;
    }
    /**
     * 
     *
     * @param float $freeThrowsAttempted
     *
     * @return self
     */
    public function setFreeThrowsAttempted(float $freeThrowsAttempted) : self
    {
        $this->freeThrowsAttempted = $freeThrowsAttempted;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFreeThrowsPercentage() : float
    {
        return $this->freeThrowsPercentage;
    }
    /**
     * 
     *
     * @param float $freeThrowsPercentage
     *
     * @return self
     */
    public function setFreeThrowsPercentage(float $freeThrowsPercentage) : self
    {
        $this->freeThrowsPercentage = $freeThrowsPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOffensiveRebounds() : float
    {
        return $this->offensiveRebounds;
    }
    /**
     * 
     *
     * @param float $offensiveRebounds
     *
     * @return self
     */
    public function setOffensiveRebounds(float $offensiveRebounds) : self
    {
        $this->offensiveRebounds = $offensiveRebounds;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDefensiveRebounds() : float
    {
        return $this->defensiveRebounds;
    }
    /**
     * 
     *
     * @param float $defensiveRebounds
     *
     * @return self
     */
    public function setDefensiveRebounds(float $defensiveRebounds) : self
    {
        $this->defensiveRebounds = $defensiveRebounds;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRebounds() : float
    {
        return $this->rebounds;
    }
    /**
     * 
     *
     * @param float $rebounds
     *
     * @return self
     */
    public function setRebounds(float $rebounds) : self
    {
        $this->rebounds = $rebounds;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOffensiveReboundsPercentage() : float
    {
        return $this->offensiveReboundsPercentage;
    }
    /**
     * 
     *
     * @param float $offensiveReboundsPercentage
     *
     * @return self
     */
    public function setOffensiveReboundsPercentage(float $offensiveReboundsPercentage) : self
    {
        $this->offensiveReboundsPercentage = $offensiveReboundsPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDefensiveReboundsPercentage() : float
    {
        return $this->defensiveReboundsPercentage;
    }
    /**
     * 
     *
     * @param float $defensiveReboundsPercentage
     *
     * @return self
     */
    public function setDefensiveReboundsPercentage(float $defensiveReboundsPercentage) : self
    {
        $this->defensiveReboundsPercentage = $defensiveReboundsPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalReboundsPercentage() : float
    {
        return $this->totalReboundsPercentage;
    }
    /**
     * 
     *
     * @param float $totalReboundsPercentage
     *
     * @return self
     */
    public function setTotalReboundsPercentage(float $totalReboundsPercentage) : self
    {
        $this->totalReboundsPercentage = $totalReboundsPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAssists() : float
    {
        return $this->assists;
    }
    /**
     * 
     *
     * @param float $assists
     *
     * @return self
     */
    public function setAssists(float $assists) : self
    {
        $this->assists = $assists;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSteals() : float
    {
        return $this->steals;
    }
    /**
     * 
     *
     * @param float $steals
     *
     * @return self
     */
    public function setSteals(float $steals) : self
    {
        $this->steals = $steals;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBlockedShots() : float
    {
        return $this->blockedShots;
    }
    /**
     * 
     *
     * @param float $blockedShots
     *
     * @return self
     */
    public function setBlockedShots(float $blockedShots) : self
    {
        $this->blockedShots = $blockedShots;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTurnovers() : float
    {
        return $this->turnovers;
    }
    /**
     * 
     *
     * @param float $turnovers
     *
     * @return self
     */
    public function setTurnovers(float $turnovers) : self
    {
        $this->turnovers = $turnovers;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPersonalFouls() : float
    {
        return $this->personalFouls;
    }
    /**
     * 
     *
     * @param float $personalFouls
     *
     * @return self
     */
    public function setPersonalFouls(float $personalFouls) : self
    {
        $this->personalFouls = $personalFouls;
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
    public function getTrueShootingAttempts() : float
    {
        return $this->trueShootingAttempts;
    }
    /**
     * 
     *
     * @param float $trueShootingAttempts
     *
     * @return self
     */
    public function setTrueShootingAttempts(float $trueShootingAttempts) : self
    {
        $this->trueShootingAttempts = $trueShootingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTrueShootingPercentage() : float
    {
        return $this->trueShootingPercentage;
    }
    /**
     * 
     *
     * @param float $trueShootingPercentage
     *
     * @return self
     */
    public function setTrueShootingPercentage(float $trueShootingPercentage) : self
    {
        $this->trueShootingPercentage = $trueShootingPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPlayerEfficiencyRating() : float
    {
        return $this->playerEfficiencyRating;
    }
    /**
     * 
     *
     * @param float $playerEfficiencyRating
     *
     * @return self
     */
    public function setPlayerEfficiencyRating(float $playerEfficiencyRating) : self
    {
        $this->playerEfficiencyRating = $playerEfficiencyRating;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAssistsPercentage() : float
    {
        return $this->assistsPercentage;
    }
    /**
     * 
     *
     * @param float $assistsPercentage
     *
     * @return self
     */
    public function setAssistsPercentage(float $assistsPercentage) : self
    {
        $this->assistsPercentage = $assistsPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getStealsPercentage() : float
    {
        return $this->stealsPercentage;
    }
    /**
     * 
     *
     * @param float $stealsPercentage
     *
     * @return self
     */
    public function setStealsPercentage(float $stealsPercentage) : self
    {
        $this->stealsPercentage = $stealsPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBlocksPercentage() : float
    {
        return $this->blocksPercentage;
    }
    /**
     * 
     *
     * @param float $blocksPercentage
     *
     * @return self
     */
    public function setBlocksPercentage(float $blocksPercentage) : self
    {
        $this->blocksPercentage = $blocksPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTurnOversPercentage() : float
    {
        return $this->turnOversPercentage;
    }
    /**
     * 
     *
     * @param float $turnOversPercentage
     *
     * @return self
     */
    public function setTurnOversPercentage(float $turnOversPercentage) : self
    {
        $this->turnOversPercentage = $turnOversPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getUsageRatePercentage() : float
    {
        return $this->usageRatePercentage;
    }
    /**
     * 
     *
     * @param float $usageRatePercentage
     *
     * @return self
     */
    public function setUsageRatePercentage(float $usageRatePercentage) : self
    {
        $this->usageRatePercentage = $usageRatePercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFantasyPointsFanDuel() : float
    {
        return $this->fantasyPointsFanDuel;
    }
    /**
     * 
     *
     * @param float $fantasyPointsFanDuel
     *
     * @return self
     */
    public function setFantasyPointsFanDuel(float $fantasyPointsFanDuel) : self
    {
        $this->fantasyPointsFanDuel = $fantasyPointsFanDuel;
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
    public function getFantasyPointsYahoo() : float
    {
        return $this->fantasyPointsYahoo;
    }
    /**
     * 
     *
     * @param float $fantasyPointsYahoo
     *
     * @return self
     */
    public function setFantasyPointsYahoo(float $fantasyPointsYahoo) : self
    {
        $this->fantasyPointsYahoo = $fantasyPointsYahoo;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPlusMinus() : float
    {
        return $this->plusMinus;
    }
    /**
     * 
     *
     * @param float $plusMinus
     *
     * @return self
     */
    public function setPlusMinus(float $plusMinus) : self
    {
        $this->plusMinus = $plusMinus;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDoubleDoubles() : float
    {
        return $this->doubleDoubles;
    }
    /**
     * 
     *
     * @param float $doubleDoubles
     *
     * @return self
     */
    public function setDoubleDoubles(float $doubleDoubles) : self
    {
        $this->doubleDoubles = $doubleDoubles;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTripleDoubles() : float
    {
        return $this->tripleDoubles;
    }
    /**
     * 
     *
     * @param float $tripleDoubles
     *
     * @return self
     */
    public function setTripleDoubles(float $tripleDoubles) : self
    {
        $this->tripleDoubles = $tripleDoubles;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFantasyPointsFantasyDraft() : float
    {
        return $this->fantasyPointsFantasyDraft;
    }
    /**
     * 
     *
     * @param float $fantasyPointsFantasyDraft
     *
     * @return self
     */
    public function setFantasyPointsFantasyDraft(float $fantasyPointsFantasyDraft) : self
    {
        $this->fantasyPointsFantasyDraft = $fantasyPointsFantasyDraft;
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
     * @return bool
     */
    public function getLineupConfirmed() : bool
    {
        return $this->lineupConfirmed;
    }
    /**
     * 
     *
     * @param bool $lineupConfirmed
     *
     * @return self
     */
    public function setLineupConfirmed(bool $lineupConfirmed) : self
    {
        $this->lineupConfirmed = $lineupConfirmed;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLineupStatus() : string
    {
        return $this->lineupStatus;
    }
    /**
     * 
     *
     * @param string $lineupStatus
     *
     * @return self
     */
    public function setLineupStatus(string $lineupStatus) : self
    {
        $this->lineupStatus = $lineupStatus;
        return $this;
    }
}