<?php

namespace Sportsdata\API\CBB\Model;

class PlayerGameProjection
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
    protected $playerID;
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
     * @var string
     */
    protected $position;
    /**
     * 
     *
     * @var int
     */
    protected $fanDuelSalary;
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
    protected $fantasyDataSalary;
    /**
     * 
     *
     * @var int
     */
    protected $yahooSalary;
    /**
     * 
     *
     * @var string
     */
    protected $injuryStatus;
    /**
     * 
     *
     * @var string
     */
    protected $injuryBodyPart;
    /**
     * 
     *
     * @var string
     */
    protected $injuryStartDate;
    /**
     * 
     *
     * @var string
     */
    protected $injuryNotes;
    /**
     * 
     *
     * @var string
     */
    protected $fanDuelPosition;
    /**
     * 
     *
     * @var string
     */
    protected $draftKingsPosition;
    /**
     * 
     *
     * @var string
     */
    protected $yahooPosition;
    /**
     * 
     *
     * @var int
     */
    protected $opponentRank;
    /**
     * 
     *
     * @var int
     */
    protected $opponentPositionRank;
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
    protected $fieldGoalsMade;
    /**
     * 
     *
     * @var int
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
     * @var int
     */
    protected $twoPointersMade;
    /**
     * 
     *
     * @var int
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
     * @var int
     */
    protected $threePointersMade;
    /**
     * 
     *
     * @var int
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
     * @var int
     */
    protected $freeThrowsMade;
    /**
     * 
     *
     * @var int
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
     * @var int
     */
    protected $offensiveRebounds;
    /**
     * 
     *
     * @var int
     */
    protected $defensiveRebounds;
    /**
     * 
     *
     * @var int
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
     * @var int
     */
    protected $assists;
    /**
     * 
     *
     * @var int
     */
    protected $steals;
    /**
     * 
     *
     * @var int
     */
    protected $blockedShots;
    /**
     * 
     *
     * @var int
     */
    protected $turnovers;
    /**
     * 
     *
     * @var int
     */
    protected $personalFouls;
    /**
     * 
     *
     * @var int
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
    public function getPlayerID() : int
    {
        return $this->playerID;
    }
    /**
     * 
     *
     * @param int $playerID
     *
     * @return self
     */
    public function setPlayerID(int $playerID) : self
    {
        $this->playerID = $playerID;
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
     * @return string
     */
    public function getPosition() : string
    {
        return $this->position;
    }
    /**
     * 
     *
     * @param string $position
     *
     * @return self
     */
    public function setPosition(string $position) : self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFanDuelSalary() : int
    {
        return $this->fanDuelSalary;
    }
    /**
     * 
     *
     * @param int $fanDuelSalary
     *
     * @return self
     */
    public function setFanDuelSalary(int $fanDuelSalary) : self
    {
        $this->fanDuelSalary = $fanDuelSalary;
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
    public function getFantasyDataSalary() : int
    {
        return $this->fantasyDataSalary;
    }
    /**
     * 
     *
     * @param int $fantasyDataSalary
     *
     * @return self
     */
    public function setFantasyDataSalary(int $fantasyDataSalary) : self
    {
        $this->fantasyDataSalary = $fantasyDataSalary;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getYahooSalary() : int
    {
        return $this->yahooSalary;
    }
    /**
     * 
     *
     * @param int $yahooSalary
     *
     * @return self
     */
    public function setYahooSalary(int $yahooSalary) : self
    {
        $this->yahooSalary = $yahooSalary;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInjuryStatus() : string
    {
        return $this->injuryStatus;
    }
    /**
     * 
     *
     * @param string $injuryStatus
     *
     * @return self
     */
    public function setInjuryStatus(string $injuryStatus) : self
    {
        $this->injuryStatus = $injuryStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInjuryBodyPart() : string
    {
        return $this->injuryBodyPart;
    }
    /**
     * 
     *
     * @param string $injuryBodyPart
     *
     * @return self
     */
    public function setInjuryBodyPart(string $injuryBodyPart) : self
    {
        $this->injuryBodyPart = $injuryBodyPart;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInjuryStartDate() : string
    {
        return $this->injuryStartDate;
    }
    /**
     * 
     *
     * @param string $injuryStartDate
     *
     * @return self
     */
    public function setInjuryStartDate(string $injuryStartDate) : self
    {
        $this->injuryStartDate = $injuryStartDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInjuryNotes() : string
    {
        return $this->injuryNotes;
    }
    /**
     * 
     *
     * @param string $injuryNotes
     *
     * @return self
     */
    public function setInjuryNotes(string $injuryNotes) : self
    {
        $this->injuryNotes = $injuryNotes;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFanDuelPosition() : string
    {
        return $this->fanDuelPosition;
    }
    /**
     * 
     *
     * @param string $fanDuelPosition
     *
     * @return self
     */
    public function setFanDuelPosition(string $fanDuelPosition) : self
    {
        $this->fanDuelPosition = $fanDuelPosition;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDraftKingsPosition() : string
    {
        return $this->draftKingsPosition;
    }
    /**
     * 
     *
     * @param string $draftKingsPosition
     *
     * @return self
     */
    public function setDraftKingsPosition(string $draftKingsPosition) : self
    {
        $this->draftKingsPosition = $draftKingsPosition;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getYahooPosition() : string
    {
        return $this->yahooPosition;
    }
    /**
     * 
     *
     * @param string $yahooPosition
     *
     * @return self
     */
    public function setYahooPosition(string $yahooPosition) : self
    {
        $this->yahooPosition = $yahooPosition;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentRank() : int
    {
        return $this->opponentRank;
    }
    /**
     * 
     *
     * @param int $opponentRank
     *
     * @return self
     */
    public function setOpponentRank(int $opponentRank) : self
    {
        $this->opponentRank = $opponentRank;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentPositionRank() : int
    {
        return $this->opponentPositionRank;
    }
    /**
     * 
     *
     * @param int $opponentPositionRank
     *
     * @return self
     */
    public function setOpponentPositionRank(int $opponentPositionRank) : self
    {
        $this->opponentPositionRank = $opponentPositionRank;
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
    public function getFieldGoalsMade() : int
    {
        return $this->fieldGoalsMade;
    }
    /**
     * 
     *
     * @param int $fieldGoalsMade
     *
     * @return self
     */
    public function setFieldGoalsMade(int $fieldGoalsMade) : self
    {
        $this->fieldGoalsMade = $fieldGoalsMade;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFieldGoalsAttempted() : int
    {
        return $this->fieldGoalsAttempted;
    }
    /**
     * 
     *
     * @param int $fieldGoalsAttempted
     *
     * @return self
     */
    public function setFieldGoalsAttempted(int $fieldGoalsAttempted) : self
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
     * @return int
     */
    public function getTwoPointersMade() : int
    {
        return $this->twoPointersMade;
    }
    /**
     * 
     *
     * @param int $twoPointersMade
     *
     * @return self
     */
    public function setTwoPointersMade(int $twoPointersMade) : self
    {
        $this->twoPointersMade = $twoPointersMade;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTwoPointersAttempted() : int
    {
        return $this->twoPointersAttempted;
    }
    /**
     * 
     *
     * @param int $twoPointersAttempted
     *
     * @return self
     */
    public function setTwoPointersAttempted(int $twoPointersAttempted) : self
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
     * @return int
     */
    public function getThreePointersMade() : int
    {
        return $this->threePointersMade;
    }
    /**
     * 
     *
     * @param int $threePointersMade
     *
     * @return self
     */
    public function setThreePointersMade(int $threePointersMade) : self
    {
        $this->threePointersMade = $threePointersMade;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getThreePointersAttempted() : int
    {
        return $this->threePointersAttempted;
    }
    /**
     * 
     *
     * @param int $threePointersAttempted
     *
     * @return self
     */
    public function setThreePointersAttempted(int $threePointersAttempted) : self
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
     * @return int
     */
    public function getFreeThrowsMade() : int
    {
        return $this->freeThrowsMade;
    }
    /**
     * 
     *
     * @param int $freeThrowsMade
     *
     * @return self
     */
    public function setFreeThrowsMade(int $freeThrowsMade) : self
    {
        $this->freeThrowsMade = $freeThrowsMade;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFreeThrowsAttempted() : int
    {
        return $this->freeThrowsAttempted;
    }
    /**
     * 
     *
     * @param int $freeThrowsAttempted
     *
     * @return self
     */
    public function setFreeThrowsAttempted(int $freeThrowsAttempted) : self
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
     * @return int
     */
    public function getOffensiveRebounds() : int
    {
        return $this->offensiveRebounds;
    }
    /**
     * 
     *
     * @param int $offensiveRebounds
     *
     * @return self
     */
    public function setOffensiveRebounds(int $offensiveRebounds) : self
    {
        $this->offensiveRebounds = $offensiveRebounds;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDefensiveRebounds() : int
    {
        return $this->defensiveRebounds;
    }
    /**
     * 
     *
     * @param int $defensiveRebounds
     *
     * @return self
     */
    public function setDefensiveRebounds(int $defensiveRebounds) : self
    {
        $this->defensiveRebounds = $defensiveRebounds;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRebounds() : int
    {
        return $this->rebounds;
    }
    /**
     * 
     *
     * @param int $rebounds
     *
     * @return self
     */
    public function setRebounds(int $rebounds) : self
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
     * @return int
     */
    public function getAssists() : int
    {
        return $this->assists;
    }
    /**
     * 
     *
     * @param int $assists
     *
     * @return self
     */
    public function setAssists(int $assists) : self
    {
        $this->assists = $assists;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSteals() : int
    {
        return $this->steals;
    }
    /**
     * 
     *
     * @param int $steals
     *
     * @return self
     */
    public function setSteals(int $steals) : self
    {
        $this->steals = $steals;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBlockedShots() : int
    {
        return $this->blockedShots;
    }
    /**
     * 
     *
     * @param int $blockedShots
     *
     * @return self
     */
    public function setBlockedShots(int $blockedShots) : self
    {
        $this->blockedShots = $blockedShots;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTurnovers() : int
    {
        return $this->turnovers;
    }
    /**
     * 
     *
     * @param int $turnovers
     *
     * @return self
     */
    public function setTurnovers(int $turnovers) : self
    {
        $this->turnovers = $turnovers;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPersonalFouls() : int
    {
        return $this->personalFouls;
    }
    /**
     * 
     *
     * @param int $personalFouls
     *
     * @return self
     */
    public function setPersonalFouls(int $personalFouls) : self
    {
        $this->personalFouls = $personalFouls;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPoints() : int
    {
        return $this->points;
    }
    /**
     * 
     *
     * @param int $points
     *
     * @return self
     */
    public function setPoints(int $points) : self
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
}