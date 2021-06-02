<?php

namespace Sportsdata\API\Soccer\Model;

class PlayerGameProjection
{
    /**
     * 
     *
     * @var int
     */
    protected $statId;
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
     * @var int
     */
    protected $roundId;
    /**
     * 
     *
     * @var int
     */
    protected $teamId;
    /**
     * 
     *
     * @var int
     */
    protected $playerId;
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
    protected $shortName;
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
    protected $positionCategory;
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
    protected $jersey;
    /**
     * 
     *
     * @var int
     */
    protected $started;
    /**
     * 
     *
     * @var bool
     */
    protected $captain;
    /**
     * 
     *
     * @var bool
     */
    protected $suspension;
    /**
     * 
     *
     * @var string
     */
    protected $suspensionReason;
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
    protected $yahooSalary;
    /**
     * 
     *
     * @var int
     */
    protected $mondogoalSalary;
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
     * @var string
     */
    protected $mondogoalPosition;
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
    protected $injuryNotes;
    /**
     * 
     *
     * @var string
     */
    protected $injuryStartDate;
    /**
     * 
     *
     * @var int
     */
    protected $globalTeamId;
    /**
     * 
     *
     * @var int
     */
    protected $gameId;
    /**
     * 
     *
     * @var int
     */
    protected $opponentId;
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
    protected $globalGameId;
    /**
     * 
     *
     * @var int
     */
    protected $globalOpponentId;
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
    protected $updatedUtc;
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
    protected $fantasyPointsMondogoal;
    /**
     * 
     *
     * @var float
     */
    protected $minutes;
    /**
     * 
     *
     * @var float
     */
    protected $goals;
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
    protected $shots;
    /**
     * 
     *
     * @var float
     */
    protected $shotsOnGoal;
    /**
     * 
     *
     * @var float
     */
    protected $yellowCards;
    /**
     * 
     *
     * @var float
     */
    protected $redCards;
    /**
     * 
     *
     * @var float
     */
    protected $yellowRedCards;
    /**
     * 
     *
     * @var float
     */
    protected $crosses;
    /**
     * 
     *
     * @var float
     */
    protected $tacklesWon;
    /**
     * 
     *
     * @var float
     */
    protected $interceptions;
    /**
     * 
     *
     * @var float
     */
    protected $ownGoals;
    /**
     * 
     *
     * @var float
     */
    protected $fouls;
    /**
     * 
     *
     * @var float
     */
    protected $fouled;
    /**
     * 
     *
     * @var float
     */
    protected $offsides;
    /**
     * 
     *
     * @var float
     */
    protected $passes;
    /**
     * 
     *
     * @var float
     */
    protected $passesCompleted;
    /**
     * 
     *
     * @var float
     */
    protected $lastManTackle;
    /**
     * 
     *
     * @var float
     */
    protected $cornersWon;
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
    protected $touches;
    /**
     * 
     *
     * @var float
     */
    protected $defenderCleanSheets;
    /**
     * 
     *
     * @var float
     */
    protected $goalkeeperSaves;
    /**
     * 
     *
     * @var float
     */
    protected $goalkeeperGoalsAgainst;
    /**
     * 
     *
     * @var float
     */
    protected $goalkeeperSingleGoalAgainst;
    /**
     * 
     *
     * @var float
     */
    protected $goalkeeperCleanSheets;
    /**
     * 
     *
     * @var float
     */
    protected $goalkeeperWins;
    /**
     * 
     *
     * @var float
     */
    protected $penaltyKickGoals;
    /**
     * 
     *
     * @var float
     */
    protected $penaltyKickMisses;
    /**
     * 
     *
     * @var float
     */
    protected $penaltyKickSaves;
    /**
     * 
     *
     * @var float
     */
    protected $penaltiesWon;
    /**
     * 
     *
     * @var float
     */
    protected $penaltiesConceded;
    /**
     * 
     *
     * @var float
     */
    protected $score;
    /**
     * 
     *
     * @var float
     */
    protected $opponentScore;
    /**
     * 
     *
     * @return int
     */
    public function getStatId() : int
    {
        return $this->statId;
    }
    /**
     * 
     *
     * @param int $statId
     *
     * @return self
     */
    public function setStatId(int $statId) : self
    {
        $this->statId = $statId;
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
     * @return int
     */
    public function getRoundId() : int
    {
        return $this->roundId;
    }
    /**
     * 
     *
     * @param int $roundId
     *
     * @return self
     */
    public function setRoundId(int $roundId) : self
    {
        $this->roundId = $roundId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTeamId() : int
    {
        return $this->teamId;
    }
    /**
     * 
     *
     * @param int $teamId
     *
     * @return self
     */
    public function setTeamId(int $teamId) : self
    {
        $this->teamId = $teamId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPlayerId() : int
    {
        return $this->playerId;
    }
    /**
     * 
     *
     * @param int $playerId
     *
     * @return self
     */
    public function setPlayerId(int $playerId) : self
    {
        $this->playerId = $playerId;
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
    public function getShortName() : string
    {
        return $this->shortName;
    }
    /**
     * 
     *
     * @param string $shortName
     *
     * @return self
     */
    public function setShortName(string $shortName) : self
    {
        $this->shortName = $shortName;
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
    public function getPositionCategory() : string
    {
        return $this->positionCategory;
    }
    /**
     * 
     *
     * @param string $positionCategory
     *
     * @return self
     */
    public function setPositionCategory(string $positionCategory) : self
    {
        $this->positionCategory = $positionCategory;
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
    public function getJersey() : int
    {
        return $this->jersey;
    }
    /**
     * 
     *
     * @param int $jersey
     *
     * @return self
     */
    public function setJersey(int $jersey) : self
    {
        $this->jersey = $jersey;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStarted() : int
    {
        return $this->started;
    }
    /**
     * 
     *
     * @param int $started
     *
     * @return self
     */
    public function setStarted(int $started) : self
    {
        $this->started = $started;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getCaptain() : bool
    {
        return $this->captain;
    }
    /**
     * 
     *
     * @param bool $captain
     *
     * @return self
     */
    public function setCaptain(bool $captain) : self
    {
        $this->captain = $captain;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSuspension() : bool
    {
        return $this->suspension;
    }
    /**
     * 
     *
     * @param bool $suspension
     *
     * @return self
     */
    public function setSuspension(bool $suspension) : self
    {
        $this->suspension = $suspension;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSuspensionReason() : string
    {
        return $this->suspensionReason;
    }
    /**
     * 
     *
     * @param string $suspensionReason
     *
     * @return self
     */
    public function setSuspensionReason(string $suspensionReason) : self
    {
        $this->suspensionReason = $suspensionReason;
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
     * @return int
     */
    public function getMondogoalSalary() : int
    {
        return $this->mondogoalSalary;
    }
    /**
     * 
     *
     * @param int $mondogoalSalary
     *
     * @return self
     */
    public function setMondogoalSalary(int $mondogoalSalary) : self
    {
        $this->mondogoalSalary = $mondogoalSalary;
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
     * @return string
     */
    public function getMondogoalPosition() : string
    {
        return $this->mondogoalPosition;
    }
    /**
     * 
     *
     * @param string $mondogoalPosition
     *
     * @return self
     */
    public function setMondogoalPosition(string $mondogoalPosition) : self
    {
        $this->mondogoalPosition = $mondogoalPosition;
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
     * @return int
     */
    public function getGlobalTeamId() : int
    {
        return $this->globalTeamId;
    }
    /**
     * 
     *
     * @param int $globalTeamId
     *
     * @return self
     */
    public function setGlobalTeamId(int $globalTeamId) : self
    {
        $this->globalTeamId = $globalTeamId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGameId() : int
    {
        return $this->gameId;
    }
    /**
     * 
     *
     * @param int $gameId
     *
     * @return self
     */
    public function setGameId(int $gameId) : self
    {
        $this->gameId = $gameId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentId() : int
    {
        return $this->opponentId;
    }
    /**
     * 
     *
     * @param int $opponentId
     *
     * @return self
     */
    public function setOpponentId(int $opponentId) : self
    {
        $this->opponentId = $opponentId;
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
    public function getGlobalGameId() : int
    {
        return $this->globalGameId;
    }
    /**
     * 
     *
     * @param int $globalGameId
     *
     * @return self
     */
    public function setGlobalGameId(int $globalGameId) : self
    {
        $this->globalGameId = $globalGameId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGlobalOpponentId() : int
    {
        return $this->globalOpponentId;
    }
    /**
     * 
     *
     * @param int $globalOpponentId
     *
     * @return self
     */
    public function setGlobalOpponentId(int $globalOpponentId) : self
    {
        $this->globalOpponentId = $globalOpponentId;
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
    public function getUpdatedUtc() : string
    {
        return $this->updatedUtc;
    }
    /**
     * 
     *
     * @param string $updatedUtc
     *
     * @return self
     */
    public function setUpdatedUtc(string $updatedUtc) : self
    {
        $this->updatedUtc = $updatedUtc;
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
    public function getFantasyPointsMondogoal() : float
    {
        return $this->fantasyPointsMondogoal;
    }
    /**
     * 
     *
     * @param float $fantasyPointsMondogoal
     *
     * @return self
     */
    public function setFantasyPointsMondogoal(float $fantasyPointsMondogoal) : self
    {
        $this->fantasyPointsMondogoal = $fantasyPointsMondogoal;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getMinutes() : float
    {
        return $this->minutes;
    }
    /**
     * 
     *
     * @param float $minutes
     *
     * @return self
     */
    public function setMinutes(float $minutes) : self
    {
        $this->minutes = $minutes;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getGoals() : float
    {
        return $this->goals;
    }
    /**
     * 
     *
     * @param float $goals
     *
     * @return self
     */
    public function setGoals(float $goals) : self
    {
        $this->goals = $goals;
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
    public function getShots() : float
    {
        return $this->shots;
    }
    /**
     * 
     *
     * @param float $shots
     *
     * @return self
     */
    public function setShots(float $shots) : self
    {
        $this->shots = $shots;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getShotsOnGoal() : float
    {
        return $this->shotsOnGoal;
    }
    /**
     * 
     *
     * @param float $shotsOnGoal
     *
     * @return self
     */
    public function setShotsOnGoal(float $shotsOnGoal) : self
    {
        $this->shotsOnGoal = $shotsOnGoal;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getYellowCards() : float
    {
        return $this->yellowCards;
    }
    /**
     * 
     *
     * @param float $yellowCards
     *
     * @return self
     */
    public function setYellowCards(float $yellowCards) : self
    {
        $this->yellowCards = $yellowCards;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRedCards() : float
    {
        return $this->redCards;
    }
    /**
     * 
     *
     * @param float $redCards
     *
     * @return self
     */
    public function setRedCards(float $redCards) : self
    {
        $this->redCards = $redCards;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getYellowRedCards() : float
    {
        return $this->yellowRedCards;
    }
    /**
     * 
     *
     * @param float $yellowRedCards
     *
     * @return self
     */
    public function setYellowRedCards(float $yellowRedCards) : self
    {
        $this->yellowRedCards = $yellowRedCards;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCrosses() : float
    {
        return $this->crosses;
    }
    /**
     * 
     *
     * @param float $crosses
     *
     * @return self
     */
    public function setCrosses(float $crosses) : self
    {
        $this->crosses = $crosses;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTacklesWon() : float
    {
        return $this->tacklesWon;
    }
    /**
     * 
     *
     * @param float $tacklesWon
     *
     * @return self
     */
    public function setTacklesWon(float $tacklesWon) : self
    {
        $this->tacklesWon = $tacklesWon;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getInterceptions() : float
    {
        return $this->interceptions;
    }
    /**
     * 
     *
     * @param float $interceptions
     *
     * @return self
     */
    public function setInterceptions(float $interceptions) : self
    {
        $this->interceptions = $interceptions;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOwnGoals() : float
    {
        return $this->ownGoals;
    }
    /**
     * 
     *
     * @param float $ownGoals
     *
     * @return self
     */
    public function setOwnGoals(float $ownGoals) : self
    {
        $this->ownGoals = $ownGoals;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFouls() : float
    {
        return $this->fouls;
    }
    /**
     * 
     *
     * @param float $fouls
     *
     * @return self
     */
    public function setFouls(float $fouls) : self
    {
        $this->fouls = $fouls;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFouled() : float
    {
        return $this->fouled;
    }
    /**
     * 
     *
     * @param float $fouled
     *
     * @return self
     */
    public function setFouled(float $fouled) : self
    {
        $this->fouled = $fouled;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOffsides() : float
    {
        return $this->offsides;
    }
    /**
     * 
     *
     * @param float $offsides
     *
     * @return self
     */
    public function setOffsides(float $offsides) : self
    {
        $this->offsides = $offsides;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPasses() : float
    {
        return $this->passes;
    }
    /**
     * 
     *
     * @param float $passes
     *
     * @return self
     */
    public function setPasses(float $passes) : self
    {
        $this->passes = $passes;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPassesCompleted() : float
    {
        return $this->passesCompleted;
    }
    /**
     * 
     *
     * @param float $passesCompleted
     *
     * @return self
     */
    public function setPassesCompleted(float $passesCompleted) : self
    {
        $this->passesCompleted = $passesCompleted;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getLastManTackle() : float
    {
        return $this->lastManTackle;
    }
    /**
     * 
     *
     * @param float $lastManTackle
     *
     * @return self
     */
    public function setLastManTackle(float $lastManTackle) : self
    {
        $this->lastManTackle = $lastManTackle;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCornersWon() : float
    {
        return $this->cornersWon;
    }
    /**
     * 
     *
     * @param float $cornersWon
     *
     * @return self
     */
    public function setCornersWon(float $cornersWon) : self
    {
        $this->cornersWon = $cornersWon;
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
    public function getTouches() : float
    {
        return $this->touches;
    }
    /**
     * 
     *
     * @param float $touches
     *
     * @return self
     */
    public function setTouches(float $touches) : self
    {
        $this->touches = $touches;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDefenderCleanSheets() : float
    {
        return $this->defenderCleanSheets;
    }
    /**
     * 
     *
     * @param float $defenderCleanSheets
     *
     * @return self
     */
    public function setDefenderCleanSheets(float $defenderCleanSheets) : self
    {
        $this->defenderCleanSheets = $defenderCleanSheets;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getGoalkeeperSaves() : float
    {
        return $this->goalkeeperSaves;
    }
    /**
     * 
     *
     * @param float $goalkeeperSaves
     *
     * @return self
     */
    public function setGoalkeeperSaves(float $goalkeeperSaves) : self
    {
        $this->goalkeeperSaves = $goalkeeperSaves;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getGoalkeeperGoalsAgainst() : float
    {
        return $this->goalkeeperGoalsAgainst;
    }
    /**
     * 
     *
     * @param float $goalkeeperGoalsAgainst
     *
     * @return self
     */
    public function setGoalkeeperGoalsAgainst(float $goalkeeperGoalsAgainst) : self
    {
        $this->goalkeeperGoalsAgainst = $goalkeeperGoalsAgainst;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getGoalkeeperSingleGoalAgainst() : float
    {
        return $this->goalkeeperSingleGoalAgainst;
    }
    /**
     * 
     *
     * @param float $goalkeeperSingleGoalAgainst
     *
     * @return self
     */
    public function setGoalkeeperSingleGoalAgainst(float $goalkeeperSingleGoalAgainst) : self
    {
        $this->goalkeeperSingleGoalAgainst = $goalkeeperSingleGoalAgainst;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getGoalkeeperCleanSheets() : float
    {
        return $this->goalkeeperCleanSheets;
    }
    /**
     * 
     *
     * @param float $goalkeeperCleanSheets
     *
     * @return self
     */
    public function setGoalkeeperCleanSheets(float $goalkeeperCleanSheets) : self
    {
        $this->goalkeeperCleanSheets = $goalkeeperCleanSheets;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getGoalkeeperWins() : float
    {
        return $this->goalkeeperWins;
    }
    /**
     * 
     *
     * @param float $goalkeeperWins
     *
     * @return self
     */
    public function setGoalkeeperWins(float $goalkeeperWins) : self
    {
        $this->goalkeeperWins = $goalkeeperWins;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPenaltyKickGoals() : float
    {
        return $this->penaltyKickGoals;
    }
    /**
     * 
     *
     * @param float $penaltyKickGoals
     *
     * @return self
     */
    public function setPenaltyKickGoals(float $penaltyKickGoals) : self
    {
        $this->penaltyKickGoals = $penaltyKickGoals;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPenaltyKickMisses() : float
    {
        return $this->penaltyKickMisses;
    }
    /**
     * 
     *
     * @param float $penaltyKickMisses
     *
     * @return self
     */
    public function setPenaltyKickMisses(float $penaltyKickMisses) : self
    {
        $this->penaltyKickMisses = $penaltyKickMisses;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPenaltyKickSaves() : float
    {
        return $this->penaltyKickSaves;
    }
    /**
     * 
     *
     * @param float $penaltyKickSaves
     *
     * @return self
     */
    public function setPenaltyKickSaves(float $penaltyKickSaves) : self
    {
        $this->penaltyKickSaves = $penaltyKickSaves;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPenaltiesWon() : float
    {
        return $this->penaltiesWon;
    }
    /**
     * 
     *
     * @param float $penaltiesWon
     *
     * @return self
     */
    public function setPenaltiesWon(float $penaltiesWon) : self
    {
        $this->penaltiesWon = $penaltiesWon;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPenaltiesConceded() : float
    {
        return $this->penaltiesConceded;
    }
    /**
     * 
     *
     * @param float $penaltiesConceded
     *
     * @return self
     */
    public function setPenaltiesConceded(float $penaltiesConceded) : self
    {
        $this->penaltiesConceded = $penaltiesConceded;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getScore() : float
    {
        return $this->score;
    }
    /**
     * 
     *
     * @param float $score
     *
     * @return self
     */
    public function setScore(float $score) : self
    {
        $this->score = $score;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOpponentScore() : float
    {
        return $this->opponentScore;
    }
    /**
     * 
     *
     * @param float $opponentScore
     *
     * @return self
     */
    public function setOpponentScore(float $opponentScore) : self
    {
        $this->opponentScore = $opponentScore;
        return $this;
    }
}