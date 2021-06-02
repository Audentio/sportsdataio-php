<?php

namespace Sportsdata\API\NHL\Model;

class TeamSeason
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
     * @var int
     */
    protected $overtimeLosses;
    /**
     * 
     *
     * @var string
     */
    protected $opponentPosition;
    /**
     * 
     *
     * @var int
     */
    protected $globalTeamID;
    /**
     * 
     *
     * @var OpponentSeason
     */
    protected $opponentStat;
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
    protected $shotsOnGoal;
    /**
     * 
     *
     * @var float
     */
    protected $powerPlayGoals;
    /**
     * 
     *
     * @var float
     */
    protected $shortHandedGoals;
    /**
     * 
     *
     * @var float
     */
    protected $emptyNetGoals;
    /**
     * 
     *
     * @var float
     */
    protected $powerPlayAssists;
    /**
     * 
     *
     * @var float
     */
    protected $shortHandedAssists;
    /**
     * 
     *
     * @var float
     */
    protected $hatTricks;
    /**
     * 
     *
     * @var float
     */
    protected $shootoutGoals;
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
    protected $penaltyMinutes;
    /**
     * 
     *
     * @var float
     */
    protected $blocks;
    /**
     * 
     *
     * @var float
     */
    protected $hits;
    /**
     * 
     *
     * @var float
     */
    protected $takeaways;
    /**
     * 
     *
     * @var float
     */
    protected $giveaways;
    /**
     * 
     *
     * @var float
     */
    protected $faceoffsWon;
    /**
     * 
     *
     * @var float
     */
    protected $faceoffsLost;
    /**
     * 
     *
     * @var float
     */
    protected $shifts;
    /**
     * 
     *
     * @var int
     */
    protected $goaltendingMinutes;
    /**
     * 
     *
     * @var int
     */
    protected $goaltendingSeconds;
    /**
     * 
     *
     * @var float
     */
    protected $goaltendingShotsAgainst;
    /**
     * 
     *
     * @var float
     */
    protected $goaltendingGoalsAgainst;
    /**
     * 
     *
     * @var float
     */
    protected $goaltendingSaves;
    /**
     * 
     *
     * @var float
     */
    protected $goaltendingWins;
    /**
     * 
     *
     * @var float
     */
    protected $goaltendingLosses;
    /**
     * 
     *
     * @var float
     */
    protected $goaltendingShutouts;
    /**
     * 
     *
     * @var int
     */
    protected $started;
    /**
     * 
     *
     * @var float
     */
    protected $benchPenaltyMinutes;
    /**
     * 
     *
     * @var float
     */
    protected $goaltendingOvertimeLosses;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyPointsFantasyDraft;
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
     * @return int
     */
    public function getOvertimeLosses() : int
    {
        return $this->overtimeLosses;
    }
    /**
     * 
     *
     * @param int $overtimeLosses
     *
     * @return self
     */
    public function setOvertimeLosses(int $overtimeLosses) : self
    {
        $this->overtimeLosses = $overtimeLosses;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOpponentPosition() : string
    {
        return $this->opponentPosition;
    }
    /**
     * 
     *
     * @param string $opponentPosition
     *
     * @return self
     */
    public function setOpponentPosition(string $opponentPosition) : self
    {
        $this->opponentPosition = $opponentPosition;
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
     * @return OpponentSeason
     */
    public function getOpponentStat() : OpponentSeason
    {
        return $this->opponentStat;
    }
    /**
     * 
     *
     * @param OpponentSeason $opponentStat
     *
     * @return self
     */
    public function setOpponentStat(OpponentSeason $opponentStat) : self
    {
        $this->opponentStat = $opponentStat;
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
    public function getPowerPlayGoals() : float
    {
        return $this->powerPlayGoals;
    }
    /**
     * 
     *
     * @param float $powerPlayGoals
     *
     * @return self
     */
    public function setPowerPlayGoals(float $powerPlayGoals) : self
    {
        $this->powerPlayGoals = $powerPlayGoals;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getShortHandedGoals() : float
    {
        return $this->shortHandedGoals;
    }
    /**
     * 
     *
     * @param float $shortHandedGoals
     *
     * @return self
     */
    public function setShortHandedGoals(float $shortHandedGoals) : self
    {
        $this->shortHandedGoals = $shortHandedGoals;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getEmptyNetGoals() : float
    {
        return $this->emptyNetGoals;
    }
    /**
     * 
     *
     * @param float $emptyNetGoals
     *
     * @return self
     */
    public function setEmptyNetGoals(float $emptyNetGoals) : self
    {
        $this->emptyNetGoals = $emptyNetGoals;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPowerPlayAssists() : float
    {
        return $this->powerPlayAssists;
    }
    /**
     * 
     *
     * @param float $powerPlayAssists
     *
     * @return self
     */
    public function setPowerPlayAssists(float $powerPlayAssists) : self
    {
        $this->powerPlayAssists = $powerPlayAssists;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getShortHandedAssists() : float
    {
        return $this->shortHandedAssists;
    }
    /**
     * 
     *
     * @param float $shortHandedAssists
     *
     * @return self
     */
    public function setShortHandedAssists(float $shortHandedAssists) : self
    {
        $this->shortHandedAssists = $shortHandedAssists;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHatTricks() : float
    {
        return $this->hatTricks;
    }
    /**
     * 
     *
     * @param float $hatTricks
     *
     * @return self
     */
    public function setHatTricks(float $hatTricks) : self
    {
        $this->hatTricks = $hatTricks;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getShootoutGoals() : float
    {
        return $this->shootoutGoals;
    }
    /**
     * 
     *
     * @param float $shootoutGoals
     *
     * @return self
     */
    public function setShootoutGoals(float $shootoutGoals) : self
    {
        $this->shootoutGoals = $shootoutGoals;
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
    public function getPenaltyMinutes() : float
    {
        return $this->penaltyMinutes;
    }
    /**
     * 
     *
     * @param float $penaltyMinutes
     *
     * @return self
     */
    public function setPenaltyMinutes(float $penaltyMinutes) : self
    {
        $this->penaltyMinutes = $penaltyMinutes;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBlocks() : float
    {
        return $this->blocks;
    }
    /**
     * 
     *
     * @param float $blocks
     *
     * @return self
     */
    public function setBlocks(float $blocks) : self
    {
        $this->blocks = $blocks;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHits() : float
    {
        return $this->hits;
    }
    /**
     * 
     *
     * @param float $hits
     *
     * @return self
     */
    public function setHits(float $hits) : self
    {
        $this->hits = $hits;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTakeaways() : float
    {
        return $this->takeaways;
    }
    /**
     * 
     *
     * @param float $takeaways
     *
     * @return self
     */
    public function setTakeaways(float $takeaways) : self
    {
        $this->takeaways = $takeaways;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getGiveaways() : float
    {
        return $this->giveaways;
    }
    /**
     * 
     *
     * @param float $giveaways
     *
     * @return self
     */
    public function setGiveaways(float $giveaways) : self
    {
        $this->giveaways = $giveaways;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFaceoffsWon() : float
    {
        return $this->faceoffsWon;
    }
    /**
     * 
     *
     * @param float $faceoffsWon
     *
     * @return self
     */
    public function setFaceoffsWon(float $faceoffsWon) : self
    {
        $this->faceoffsWon = $faceoffsWon;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFaceoffsLost() : float
    {
        return $this->faceoffsLost;
    }
    /**
     * 
     *
     * @param float $faceoffsLost
     *
     * @return self
     */
    public function setFaceoffsLost(float $faceoffsLost) : self
    {
        $this->faceoffsLost = $faceoffsLost;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getShifts() : float
    {
        return $this->shifts;
    }
    /**
     * 
     *
     * @param float $shifts
     *
     * @return self
     */
    public function setShifts(float $shifts) : self
    {
        $this->shifts = $shifts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGoaltendingMinutes() : int
    {
        return $this->goaltendingMinutes;
    }
    /**
     * 
     *
     * @param int $goaltendingMinutes
     *
     * @return self
     */
    public function setGoaltendingMinutes(int $goaltendingMinutes) : self
    {
        $this->goaltendingMinutes = $goaltendingMinutes;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGoaltendingSeconds() : int
    {
        return $this->goaltendingSeconds;
    }
    /**
     * 
     *
     * @param int $goaltendingSeconds
     *
     * @return self
     */
    public function setGoaltendingSeconds(int $goaltendingSeconds) : self
    {
        $this->goaltendingSeconds = $goaltendingSeconds;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getGoaltendingShotsAgainst() : float
    {
        return $this->goaltendingShotsAgainst;
    }
    /**
     * 
     *
     * @param float $goaltendingShotsAgainst
     *
     * @return self
     */
    public function setGoaltendingShotsAgainst(float $goaltendingShotsAgainst) : self
    {
        $this->goaltendingShotsAgainst = $goaltendingShotsAgainst;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getGoaltendingGoalsAgainst() : float
    {
        return $this->goaltendingGoalsAgainst;
    }
    /**
     * 
     *
     * @param float $goaltendingGoalsAgainst
     *
     * @return self
     */
    public function setGoaltendingGoalsAgainst(float $goaltendingGoalsAgainst) : self
    {
        $this->goaltendingGoalsAgainst = $goaltendingGoalsAgainst;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getGoaltendingSaves() : float
    {
        return $this->goaltendingSaves;
    }
    /**
     * 
     *
     * @param float $goaltendingSaves
     *
     * @return self
     */
    public function setGoaltendingSaves(float $goaltendingSaves) : self
    {
        $this->goaltendingSaves = $goaltendingSaves;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getGoaltendingWins() : float
    {
        return $this->goaltendingWins;
    }
    /**
     * 
     *
     * @param float $goaltendingWins
     *
     * @return self
     */
    public function setGoaltendingWins(float $goaltendingWins) : self
    {
        $this->goaltendingWins = $goaltendingWins;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getGoaltendingLosses() : float
    {
        return $this->goaltendingLosses;
    }
    /**
     * 
     *
     * @param float $goaltendingLosses
     *
     * @return self
     */
    public function setGoaltendingLosses(float $goaltendingLosses) : self
    {
        $this->goaltendingLosses = $goaltendingLosses;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getGoaltendingShutouts() : float
    {
        return $this->goaltendingShutouts;
    }
    /**
     * 
     *
     * @param float $goaltendingShutouts
     *
     * @return self
     */
    public function setGoaltendingShutouts(float $goaltendingShutouts) : self
    {
        $this->goaltendingShutouts = $goaltendingShutouts;
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
     * @return float
     */
    public function getBenchPenaltyMinutes() : float
    {
        return $this->benchPenaltyMinutes;
    }
    /**
     * 
     *
     * @param float $benchPenaltyMinutes
     *
     * @return self
     */
    public function setBenchPenaltyMinutes(float $benchPenaltyMinutes) : self
    {
        $this->benchPenaltyMinutes = $benchPenaltyMinutes;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getGoaltendingOvertimeLosses() : float
    {
        return $this->goaltendingOvertimeLosses;
    }
    /**
     * 
     *
     * @param float $goaltendingOvertimeLosses
     *
     * @return self
     */
    public function setGoaltendingOvertimeLosses(float $goaltendingOvertimeLosses) : self
    {
        $this->goaltendingOvertimeLosses = $goaltendingOvertimeLosses;
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
}