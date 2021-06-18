<?php

namespace Sportsdata\API\NBA\Model;

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
     * @var int|null
     */
    protected $teamID;
    /**
     * 
     *
     * @var int|null
     */
    protected $playerID;
    /**
     * 
     *
     * @var int|null
     */
    protected $seasonType;
    /**
     * 
     *
     * @var int|null
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
    protected $team;
    /**
     * 
     *
     * @var string|null
     */
    protected $position;
    /**
     * 
     *
     * @var int|null
     */
    protected $started;
    /**
     * 
     *
     * @var int|null
     */
    protected $fanDuelSalary;
    /**
     * 
     *
     * @var int|null
     */
    protected $draftKingsSalary;
    /**
     * 
     *
     * @var int|null
     */
    protected $fantasyDataSalary;
    /**
     * 
     *
     * @var int|null
     */
    protected $yahooSalary;
    /**
     * 
     *
     * @var string|null
     */
    protected $injuryStatus;
    /**
     * 
     *
     * @var string|null
     */
    protected $injuryBodyPart;
    /**
     * 
     *
     * @var string|null
     */
    protected $injuryStartDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $injuryNotes;
    /**
     * 
     *
     * @var string|null
     */
    protected $fanDuelPosition;
    /**
     * 
     *
     * @var string|null
     */
    protected $draftKingsPosition;
    /**
     * 
     *
     * @var string|null
     */
    protected $yahooPosition;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentRank;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentPositionRank;
    /**
     * 
     *
     * @var int|null
     */
    protected $globalTeamID;
    /**
     * 
     *
     * @var int|null
     */
    protected $fantasyDraftSalary;
    /**
     * 
     *
     * @var string|null
     */
    protected $fantasyDraftPosition;
    /**
     * 
     *
     * @var int|null
     */
    protected $gameID;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentID;
    /**
     * 
     *
     * @var string|null
     */
    protected $opponent;
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
     * @var int|null
     */
    protected $globalGameID;
    /**
     * 
     *
     * @var int|null
     */
    protected $globalOpponentID;
    /**
     * 
     *
     * @var string|null
     */
    protected $updated;
    /**
     * 
     *
     * @var int|null
     */
    protected $games;
    /**
     * 
     *
     * @var float|null
     */
    protected $fantasyPoints;
    /**
     * 
     *
     * @var int|null
     */
    protected $minutes;
    /**
     * 
     *
     * @var int|null
     */
    protected $seconds;
    /**
     * 
     *
     * @var float|null
     */
    protected $fieldGoalsMade;
    /**
     * 
     *
     * @var float|null
     */
    protected $fieldGoalsAttempted;
    /**
     * 
     *
     * @var float|null
     */
    protected $fieldGoalsPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $effectiveFieldGoalsPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $twoPointersMade;
    /**
     * 
     *
     * @var float|null
     */
    protected $twoPointersAttempted;
    /**
     * 
     *
     * @var float|null
     */
    protected $twoPointersPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $threePointersMade;
    /**
     * 
     *
     * @var float|null
     */
    protected $threePointersAttempted;
    /**
     * 
     *
     * @var float|null
     */
    protected $threePointersPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $freeThrowsMade;
    /**
     * 
     *
     * @var float|null
     */
    protected $freeThrowsAttempted;
    /**
     * 
     *
     * @var float|null
     */
    protected $freeThrowsPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $offensiveRebounds;
    /**
     * 
     *
     * @var float|null
     */
    protected $defensiveRebounds;
    /**
     * 
     *
     * @var float|null
     */
    protected $rebounds;
    /**
     * 
     *
     * @var float|null
     */
    protected $offensiveReboundsPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $defensiveReboundsPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $totalReboundsPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $assists;
    /**
     * 
     *
     * @var float|null
     */
    protected $steals;
    /**
     * 
     *
     * @var float|null
     */
    protected $blockedShots;
    /**
     * 
     *
     * @var float|null
     */
    protected $turnovers;
    /**
     * 
     *
     * @var float|null
     */
    protected $personalFouls;
    /**
     * 
     *
     * @var float|null
     */
    protected $points;
    /**
     * 
     *
     * @var float|null
     */
    protected $trueShootingAttempts;
    /**
     * 
     *
     * @var float|null
     */
    protected $trueShootingPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $playerEfficiencyRating;
    /**
     * 
     *
     * @var float|null
     */
    protected $assistsPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $stealsPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $blocksPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $turnOversPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $usageRatePercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $fantasyPointsFanDuel;
    /**
     * 
     *
     * @var float|null
     */
    protected $fantasyPointsDraftKings;
    /**
     * 
     *
     * @var float|null
     */
    protected $fantasyPointsYahoo;
    /**
     * 
     *
     * @var float|null
     */
    protected $plusMinus;
    /**
     * 
     *
     * @var float|null
     */
    protected $doubleDoubles;
    /**
     * 
     *
     * @var float|null
     */
    protected $tripleDoubles;
    /**
     * 
     *
     * @var float|null
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
     * @var bool|null
     */
    protected $lineupConfirmed;
    /**
     * 
     *
     * @var string|null
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
     * @return int|null
     */
    public function getTeamID() : ?int
    {
        return $this->teamID;
    }
    /**
     * 
     *
     * @param int|null $teamID
     *
     * @return self
     */
    public function setTeamID(?int $teamID) : self
    {
        $this->teamID = $teamID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPlayerID() : ?int
    {
        return $this->playerID;
    }
    /**
     * 
     *
     * @param int|null $playerID
     *
     * @return self
     */
    public function setPlayerID(?int $playerID) : self
    {
        $this->playerID = $playerID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSeasonType() : ?int
    {
        return $this->seasonType;
    }
    /**
     * 
     *
     * @param int|null $seasonType
     *
     * @return self
     */
    public function setSeasonType(?int $seasonType) : self
    {
        $this->seasonType = $seasonType;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSeason() : ?int
    {
        return $this->season;
    }
    /**
     * 
     *
     * @param int|null $season
     *
     * @return self
     */
    public function setSeason(?int $season) : self
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
    public function getTeam() : ?string
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param string|null $team
     *
     * @return self
     */
    public function setTeam(?string $team) : self
    {
        $this->team = $team;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPosition() : ?string
    {
        return $this->position;
    }
    /**
     * 
     *
     * @param string|null $position
     *
     * @return self
     */
    public function setPosition(?string $position) : self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getStarted() : ?int
    {
        return $this->started;
    }
    /**
     * 
     *
     * @param int|null $started
     *
     * @return self
     */
    public function setStarted(?int $started) : self
    {
        $this->started = $started;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFanDuelSalary() : ?int
    {
        return $this->fanDuelSalary;
    }
    /**
     * 
     *
     * @param int|null $fanDuelSalary
     *
     * @return self
     */
    public function setFanDuelSalary(?int $fanDuelSalary) : self
    {
        $this->fanDuelSalary = $fanDuelSalary;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDraftKingsSalary() : ?int
    {
        return $this->draftKingsSalary;
    }
    /**
     * 
     *
     * @param int|null $draftKingsSalary
     *
     * @return self
     */
    public function setDraftKingsSalary(?int $draftKingsSalary) : self
    {
        $this->draftKingsSalary = $draftKingsSalary;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFantasyDataSalary() : ?int
    {
        return $this->fantasyDataSalary;
    }
    /**
     * 
     *
     * @param int|null $fantasyDataSalary
     *
     * @return self
     */
    public function setFantasyDataSalary(?int $fantasyDataSalary) : self
    {
        $this->fantasyDataSalary = $fantasyDataSalary;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getYahooSalary() : ?int
    {
        return $this->yahooSalary;
    }
    /**
     * 
     *
     * @param int|null $yahooSalary
     *
     * @return self
     */
    public function setYahooSalary(?int $yahooSalary) : self
    {
        $this->yahooSalary = $yahooSalary;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInjuryStatus() : ?string
    {
        return $this->injuryStatus;
    }
    /**
     * 
     *
     * @param string|null $injuryStatus
     *
     * @return self
     */
    public function setInjuryStatus(?string $injuryStatus) : self
    {
        $this->injuryStatus = $injuryStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInjuryBodyPart() : ?string
    {
        return $this->injuryBodyPart;
    }
    /**
     * 
     *
     * @param string|null $injuryBodyPart
     *
     * @return self
     */
    public function setInjuryBodyPart(?string $injuryBodyPart) : self
    {
        $this->injuryBodyPart = $injuryBodyPart;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInjuryStartDate() : ?string
    {
        return $this->injuryStartDate;
    }
    /**
     * 
     *
     * @param string|null $injuryStartDate
     *
     * @return self
     */
    public function setInjuryStartDate(?string $injuryStartDate) : self
    {
        $this->injuryStartDate = $injuryStartDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInjuryNotes() : ?string
    {
        return $this->injuryNotes;
    }
    /**
     * 
     *
     * @param string|null $injuryNotes
     *
     * @return self
     */
    public function setInjuryNotes(?string $injuryNotes) : self
    {
        $this->injuryNotes = $injuryNotes;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFanDuelPosition() : ?string
    {
        return $this->fanDuelPosition;
    }
    /**
     * 
     *
     * @param string|null $fanDuelPosition
     *
     * @return self
     */
    public function setFanDuelPosition(?string $fanDuelPosition) : self
    {
        $this->fanDuelPosition = $fanDuelPosition;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDraftKingsPosition() : ?string
    {
        return $this->draftKingsPosition;
    }
    /**
     * 
     *
     * @param string|null $draftKingsPosition
     *
     * @return self
     */
    public function setDraftKingsPosition(?string $draftKingsPosition) : self
    {
        $this->draftKingsPosition = $draftKingsPosition;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getYahooPosition() : ?string
    {
        return $this->yahooPosition;
    }
    /**
     * 
     *
     * @param string|null $yahooPosition
     *
     * @return self
     */
    public function setYahooPosition(?string $yahooPosition) : self
    {
        $this->yahooPosition = $yahooPosition;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentRank() : ?int
    {
        return $this->opponentRank;
    }
    /**
     * 
     *
     * @param int|null $opponentRank
     *
     * @return self
     */
    public function setOpponentRank(?int $opponentRank) : self
    {
        $this->opponentRank = $opponentRank;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentPositionRank() : ?int
    {
        return $this->opponentPositionRank;
    }
    /**
     * 
     *
     * @param int|null $opponentPositionRank
     *
     * @return self
     */
    public function setOpponentPositionRank(?int $opponentPositionRank) : self
    {
        $this->opponentPositionRank = $opponentPositionRank;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getGlobalTeamID() : ?int
    {
        return $this->globalTeamID;
    }
    /**
     * 
     *
     * @param int|null $globalTeamID
     *
     * @return self
     */
    public function setGlobalTeamID(?int $globalTeamID) : self
    {
        $this->globalTeamID = $globalTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFantasyDraftSalary() : ?int
    {
        return $this->fantasyDraftSalary;
    }
    /**
     * 
     *
     * @param int|null $fantasyDraftSalary
     *
     * @return self
     */
    public function setFantasyDraftSalary(?int $fantasyDraftSalary) : self
    {
        $this->fantasyDraftSalary = $fantasyDraftSalary;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFantasyDraftPosition() : ?string
    {
        return $this->fantasyDraftPosition;
    }
    /**
     * 
     *
     * @param string|null $fantasyDraftPosition
     *
     * @return self
     */
    public function setFantasyDraftPosition(?string $fantasyDraftPosition) : self
    {
        $this->fantasyDraftPosition = $fantasyDraftPosition;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getGameID() : ?int
    {
        return $this->gameID;
    }
    /**
     * 
     *
     * @param int|null $gameID
     *
     * @return self
     */
    public function setGameID(?int $gameID) : self
    {
        $this->gameID = $gameID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentID() : ?int
    {
        return $this->opponentID;
    }
    /**
     * 
     *
     * @param int|null $opponentID
     *
     * @return self
     */
    public function setOpponentID(?int $opponentID) : self
    {
        $this->opponentID = $opponentID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOpponent() : ?string
    {
        return $this->opponent;
    }
    /**
     * 
     *
     * @param string|null $opponent
     *
     * @return self
     */
    public function setOpponent(?string $opponent) : self
    {
        $this->opponent = $opponent;
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
    public function getHomeOrAway() : ?string
    {
        return $this->homeOrAway;
    }
    /**
     * 
     *
     * @param string|null $homeOrAway
     *
     * @return self
     */
    public function setHomeOrAway(?string $homeOrAway) : self
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
     * @return int|null
     */
    public function getGlobalGameID() : ?int
    {
        return $this->globalGameID;
    }
    /**
     * 
     *
     * @param int|null $globalGameID
     *
     * @return self
     */
    public function setGlobalGameID(?int $globalGameID) : self
    {
        $this->globalGameID = $globalGameID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getGlobalOpponentID() : ?int
    {
        return $this->globalOpponentID;
    }
    /**
     * 
     *
     * @param int|null $globalOpponentID
     *
     * @return self
     */
    public function setGlobalOpponentID(?int $globalOpponentID) : self
    {
        $this->globalOpponentID = $globalOpponentID;
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
     * @return int|null
     */
    public function getGames() : ?int
    {
        return $this->games;
    }
    /**
     * 
     *
     * @param int|null $games
     *
     * @return self
     */
    public function setGames(?int $games) : self
    {
        $this->games = $games;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFantasyPoints() : ?float
    {
        return $this->fantasyPoints;
    }
    /**
     * 
     *
     * @param float|null $fantasyPoints
     *
     * @return self
     */
    public function setFantasyPoints(?float $fantasyPoints) : self
    {
        $this->fantasyPoints = $fantasyPoints;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMinutes() : ?int
    {
        return $this->minutes;
    }
    /**
     * 
     *
     * @param int|null $minutes
     *
     * @return self
     */
    public function setMinutes(?int $minutes) : self
    {
        $this->minutes = $minutes;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSeconds() : ?int
    {
        return $this->seconds;
    }
    /**
     * 
     *
     * @param int|null $seconds
     *
     * @return self
     */
    public function setSeconds(?int $seconds) : self
    {
        $this->seconds = $seconds;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFieldGoalsMade() : ?float
    {
        return $this->fieldGoalsMade;
    }
    /**
     * 
     *
     * @param float|null $fieldGoalsMade
     *
     * @return self
     */
    public function setFieldGoalsMade(?float $fieldGoalsMade) : self
    {
        $this->fieldGoalsMade = $fieldGoalsMade;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFieldGoalsAttempted() : ?float
    {
        return $this->fieldGoalsAttempted;
    }
    /**
     * 
     *
     * @param float|null $fieldGoalsAttempted
     *
     * @return self
     */
    public function setFieldGoalsAttempted(?float $fieldGoalsAttempted) : self
    {
        $this->fieldGoalsAttempted = $fieldGoalsAttempted;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFieldGoalsPercentage() : ?float
    {
        return $this->fieldGoalsPercentage;
    }
    /**
     * 
     *
     * @param float|null $fieldGoalsPercentage
     *
     * @return self
     */
    public function setFieldGoalsPercentage(?float $fieldGoalsPercentage) : self
    {
        $this->fieldGoalsPercentage = $fieldGoalsPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getEffectiveFieldGoalsPercentage() : ?float
    {
        return $this->effectiveFieldGoalsPercentage;
    }
    /**
     * 
     *
     * @param float|null $effectiveFieldGoalsPercentage
     *
     * @return self
     */
    public function setEffectiveFieldGoalsPercentage(?float $effectiveFieldGoalsPercentage) : self
    {
        $this->effectiveFieldGoalsPercentage = $effectiveFieldGoalsPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTwoPointersMade() : ?float
    {
        return $this->twoPointersMade;
    }
    /**
     * 
     *
     * @param float|null $twoPointersMade
     *
     * @return self
     */
    public function setTwoPointersMade(?float $twoPointersMade) : self
    {
        $this->twoPointersMade = $twoPointersMade;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTwoPointersAttempted() : ?float
    {
        return $this->twoPointersAttempted;
    }
    /**
     * 
     *
     * @param float|null $twoPointersAttempted
     *
     * @return self
     */
    public function setTwoPointersAttempted(?float $twoPointersAttempted) : self
    {
        $this->twoPointersAttempted = $twoPointersAttempted;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTwoPointersPercentage() : ?float
    {
        return $this->twoPointersPercentage;
    }
    /**
     * 
     *
     * @param float|null $twoPointersPercentage
     *
     * @return self
     */
    public function setTwoPointersPercentage(?float $twoPointersPercentage) : self
    {
        $this->twoPointersPercentage = $twoPointersPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getThreePointersMade() : ?float
    {
        return $this->threePointersMade;
    }
    /**
     * 
     *
     * @param float|null $threePointersMade
     *
     * @return self
     */
    public function setThreePointersMade(?float $threePointersMade) : self
    {
        $this->threePointersMade = $threePointersMade;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getThreePointersAttempted() : ?float
    {
        return $this->threePointersAttempted;
    }
    /**
     * 
     *
     * @param float|null $threePointersAttempted
     *
     * @return self
     */
    public function setThreePointersAttempted(?float $threePointersAttempted) : self
    {
        $this->threePointersAttempted = $threePointersAttempted;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getThreePointersPercentage() : ?float
    {
        return $this->threePointersPercentage;
    }
    /**
     * 
     *
     * @param float|null $threePointersPercentage
     *
     * @return self
     */
    public function setThreePointersPercentage(?float $threePointersPercentage) : self
    {
        $this->threePointersPercentage = $threePointersPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFreeThrowsMade() : ?float
    {
        return $this->freeThrowsMade;
    }
    /**
     * 
     *
     * @param float|null $freeThrowsMade
     *
     * @return self
     */
    public function setFreeThrowsMade(?float $freeThrowsMade) : self
    {
        $this->freeThrowsMade = $freeThrowsMade;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFreeThrowsAttempted() : ?float
    {
        return $this->freeThrowsAttempted;
    }
    /**
     * 
     *
     * @param float|null $freeThrowsAttempted
     *
     * @return self
     */
    public function setFreeThrowsAttempted(?float $freeThrowsAttempted) : self
    {
        $this->freeThrowsAttempted = $freeThrowsAttempted;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFreeThrowsPercentage() : ?float
    {
        return $this->freeThrowsPercentage;
    }
    /**
     * 
     *
     * @param float|null $freeThrowsPercentage
     *
     * @return self
     */
    public function setFreeThrowsPercentage(?float $freeThrowsPercentage) : self
    {
        $this->freeThrowsPercentage = $freeThrowsPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getOffensiveRebounds() : ?float
    {
        return $this->offensiveRebounds;
    }
    /**
     * 
     *
     * @param float|null $offensiveRebounds
     *
     * @return self
     */
    public function setOffensiveRebounds(?float $offensiveRebounds) : self
    {
        $this->offensiveRebounds = $offensiveRebounds;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDefensiveRebounds() : ?float
    {
        return $this->defensiveRebounds;
    }
    /**
     * 
     *
     * @param float|null $defensiveRebounds
     *
     * @return self
     */
    public function setDefensiveRebounds(?float $defensiveRebounds) : self
    {
        $this->defensiveRebounds = $defensiveRebounds;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRebounds() : ?float
    {
        return $this->rebounds;
    }
    /**
     * 
     *
     * @param float|null $rebounds
     *
     * @return self
     */
    public function setRebounds(?float $rebounds) : self
    {
        $this->rebounds = $rebounds;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getOffensiveReboundsPercentage() : ?float
    {
        return $this->offensiveReboundsPercentage;
    }
    /**
     * 
     *
     * @param float|null $offensiveReboundsPercentage
     *
     * @return self
     */
    public function setOffensiveReboundsPercentage(?float $offensiveReboundsPercentage) : self
    {
        $this->offensiveReboundsPercentage = $offensiveReboundsPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDefensiveReboundsPercentage() : ?float
    {
        return $this->defensiveReboundsPercentage;
    }
    /**
     * 
     *
     * @param float|null $defensiveReboundsPercentage
     *
     * @return self
     */
    public function setDefensiveReboundsPercentage(?float $defensiveReboundsPercentage) : self
    {
        $this->defensiveReboundsPercentage = $defensiveReboundsPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTotalReboundsPercentage() : ?float
    {
        return $this->totalReboundsPercentage;
    }
    /**
     * 
     *
     * @param float|null $totalReboundsPercentage
     *
     * @return self
     */
    public function setTotalReboundsPercentage(?float $totalReboundsPercentage) : self
    {
        $this->totalReboundsPercentage = $totalReboundsPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAssists() : ?float
    {
        return $this->assists;
    }
    /**
     * 
     *
     * @param float|null $assists
     *
     * @return self
     */
    public function setAssists(?float $assists) : self
    {
        $this->assists = $assists;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSteals() : ?float
    {
        return $this->steals;
    }
    /**
     * 
     *
     * @param float|null $steals
     *
     * @return self
     */
    public function setSteals(?float $steals) : self
    {
        $this->steals = $steals;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getBlockedShots() : ?float
    {
        return $this->blockedShots;
    }
    /**
     * 
     *
     * @param float|null $blockedShots
     *
     * @return self
     */
    public function setBlockedShots(?float $blockedShots) : self
    {
        $this->blockedShots = $blockedShots;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTurnovers() : ?float
    {
        return $this->turnovers;
    }
    /**
     * 
     *
     * @param float|null $turnovers
     *
     * @return self
     */
    public function setTurnovers(?float $turnovers) : self
    {
        $this->turnovers = $turnovers;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPersonalFouls() : ?float
    {
        return $this->personalFouls;
    }
    /**
     * 
     *
     * @param float|null $personalFouls
     *
     * @return self
     */
    public function setPersonalFouls(?float $personalFouls) : self
    {
        $this->personalFouls = $personalFouls;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPoints() : ?float
    {
        return $this->points;
    }
    /**
     * 
     *
     * @param float|null $points
     *
     * @return self
     */
    public function setPoints(?float $points) : self
    {
        $this->points = $points;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTrueShootingAttempts() : ?float
    {
        return $this->trueShootingAttempts;
    }
    /**
     * 
     *
     * @param float|null $trueShootingAttempts
     *
     * @return self
     */
    public function setTrueShootingAttempts(?float $trueShootingAttempts) : self
    {
        $this->trueShootingAttempts = $trueShootingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTrueShootingPercentage() : ?float
    {
        return $this->trueShootingPercentage;
    }
    /**
     * 
     *
     * @param float|null $trueShootingPercentage
     *
     * @return self
     */
    public function setTrueShootingPercentage(?float $trueShootingPercentage) : self
    {
        $this->trueShootingPercentage = $trueShootingPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPlayerEfficiencyRating() : ?float
    {
        return $this->playerEfficiencyRating;
    }
    /**
     * 
     *
     * @param float|null $playerEfficiencyRating
     *
     * @return self
     */
    public function setPlayerEfficiencyRating(?float $playerEfficiencyRating) : self
    {
        $this->playerEfficiencyRating = $playerEfficiencyRating;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAssistsPercentage() : ?float
    {
        return $this->assistsPercentage;
    }
    /**
     * 
     *
     * @param float|null $assistsPercentage
     *
     * @return self
     */
    public function setAssistsPercentage(?float $assistsPercentage) : self
    {
        $this->assistsPercentage = $assistsPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getStealsPercentage() : ?float
    {
        return $this->stealsPercentage;
    }
    /**
     * 
     *
     * @param float|null $stealsPercentage
     *
     * @return self
     */
    public function setStealsPercentage(?float $stealsPercentage) : self
    {
        $this->stealsPercentage = $stealsPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getBlocksPercentage() : ?float
    {
        return $this->blocksPercentage;
    }
    /**
     * 
     *
     * @param float|null $blocksPercentage
     *
     * @return self
     */
    public function setBlocksPercentage(?float $blocksPercentage) : self
    {
        $this->blocksPercentage = $blocksPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTurnOversPercentage() : ?float
    {
        return $this->turnOversPercentage;
    }
    /**
     * 
     *
     * @param float|null $turnOversPercentage
     *
     * @return self
     */
    public function setTurnOversPercentage(?float $turnOversPercentage) : self
    {
        $this->turnOversPercentage = $turnOversPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getUsageRatePercentage() : ?float
    {
        return $this->usageRatePercentage;
    }
    /**
     * 
     *
     * @param float|null $usageRatePercentage
     *
     * @return self
     */
    public function setUsageRatePercentage(?float $usageRatePercentage) : self
    {
        $this->usageRatePercentage = $usageRatePercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFantasyPointsFanDuel() : ?float
    {
        return $this->fantasyPointsFanDuel;
    }
    /**
     * 
     *
     * @param float|null $fantasyPointsFanDuel
     *
     * @return self
     */
    public function setFantasyPointsFanDuel(?float $fantasyPointsFanDuel) : self
    {
        $this->fantasyPointsFanDuel = $fantasyPointsFanDuel;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFantasyPointsDraftKings() : ?float
    {
        return $this->fantasyPointsDraftKings;
    }
    /**
     * 
     *
     * @param float|null $fantasyPointsDraftKings
     *
     * @return self
     */
    public function setFantasyPointsDraftKings(?float $fantasyPointsDraftKings) : self
    {
        $this->fantasyPointsDraftKings = $fantasyPointsDraftKings;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFantasyPointsYahoo() : ?float
    {
        return $this->fantasyPointsYahoo;
    }
    /**
     * 
     *
     * @param float|null $fantasyPointsYahoo
     *
     * @return self
     */
    public function setFantasyPointsYahoo(?float $fantasyPointsYahoo) : self
    {
        $this->fantasyPointsYahoo = $fantasyPointsYahoo;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPlusMinus() : ?float
    {
        return $this->plusMinus;
    }
    /**
     * 
     *
     * @param float|null $plusMinus
     *
     * @return self
     */
    public function setPlusMinus(?float $plusMinus) : self
    {
        $this->plusMinus = $plusMinus;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDoubleDoubles() : ?float
    {
        return $this->doubleDoubles;
    }
    /**
     * 
     *
     * @param float|null $doubleDoubles
     *
     * @return self
     */
    public function setDoubleDoubles(?float $doubleDoubles) : self
    {
        $this->doubleDoubles = $doubleDoubles;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTripleDoubles() : ?float
    {
        return $this->tripleDoubles;
    }
    /**
     * 
     *
     * @param float|null $tripleDoubles
     *
     * @return self
     */
    public function setTripleDoubles(?float $tripleDoubles) : self
    {
        $this->tripleDoubles = $tripleDoubles;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFantasyPointsFantasyDraft() : ?float
    {
        return $this->fantasyPointsFantasyDraft;
    }
    /**
     * 
     *
     * @param float|null $fantasyPointsFantasyDraft
     *
     * @return self
     */
    public function setFantasyPointsFantasyDraft(?float $fantasyPointsFantasyDraft) : self
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
     * @return bool|null
     */
    public function getLineupConfirmed() : ?bool
    {
        return $this->lineupConfirmed;
    }
    /**
     * 
     *
     * @param bool|null $lineupConfirmed
     *
     * @return self
     */
    public function setLineupConfirmed(?bool $lineupConfirmed) : self
    {
        $this->lineupConfirmed = $lineupConfirmed;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLineupStatus() : ?string
    {
        return $this->lineupStatus;
    }
    /**
     * 
     *
     * @param string|null $lineupStatus
     *
     * @return self
     */
    public function setLineupStatus(?string $lineupStatus) : self
    {
        $this->lineupStatus = $lineupStatus;
        return $this;
    }
}