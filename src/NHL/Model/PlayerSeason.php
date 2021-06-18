<?php

namespace Sportsdata\API\NHL\Model;

class PlayerSeason
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
    protected $globalTeamID;
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
    protected $goals;
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
    protected $shotsOnGoal;
    /**
     * 
     *
     * @var float|null
     */
    protected $powerPlayGoals;
    /**
     * 
     *
     * @var float|null
     */
    protected $shortHandedGoals;
    /**
     * 
     *
     * @var float|null
     */
    protected $emptyNetGoals;
    /**
     * 
     *
     * @var float|null
     */
    protected $powerPlayAssists;
    /**
     * 
     *
     * @var float|null
     */
    protected $shortHandedAssists;
    /**
     * 
     *
     * @var float|null
     */
    protected $hatTricks;
    /**
     * 
     *
     * @var float|null
     */
    protected $shootoutGoals;
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
    protected $penaltyMinutes;
    /**
     * 
     *
     * @var float|null
     */
    protected $blocks;
    /**
     * 
     *
     * @var float|null
     */
    protected $hits;
    /**
     * 
     *
     * @var float|null
     */
    protected $takeaways;
    /**
     * 
     *
     * @var float|null
     */
    protected $giveaways;
    /**
     * 
     *
     * @var float|null
     */
    protected $faceoffsWon;
    /**
     * 
     *
     * @var float|null
     */
    protected $faceoffsLost;
    /**
     * 
     *
     * @var float|null
     */
    protected $shifts;
    /**
     * 
     *
     * @var int|null
     */
    protected $goaltendingMinutes;
    /**
     * 
     *
     * @var int|null
     */
    protected $goaltendingSeconds;
    /**
     * 
     *
     * @var float|null
     */
    protected $goaltendingShotsAgainst;
    /**
     * 
     *
     * @var float|null
     */
    protected $goaltendingGoalsAgainst;
    /**
     * 
     *
     * @var float|null
     */
    protected $goaltendingSaves;
    /**
     * 
     *
     * @var float|null
     */
    protected $goaltendingWins;
    /**
     * 
     *
     * @var float|null
     */
    protected $goaltendingLosses;
    /**
     * 
     *
     * @var float|null
     */
    protected $goaltendingShutouts;
    /**
     * 
     *
     * @var int|null
     */
    protected $started;
    /**
     * 
     *
     * @var float|null
     */
    protected $benchPenaltyMinutes;
    /**
     * 
     *
     * @var float|null
     */
    protected $goaltendingOvertimeLosses;
    /**
     * 
     *
     * @var float|null
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
    public function getGoals() : ?float
    {
        return $this->goals;
    }
    /**
     * 
     *
     * @param float|null $goals
     *
     * @return self
     */
    public function setGoals(?float $goals) : self
    {
        $this->goals = $goals;
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
    public function getShotsOnGoal() : ?float
    {
        return $this->shotsOnGoal;
    }
    /**
     * 
     *
     * @param float|null $shotsOnGoal
     *
     * @return self
     */
    public function setShotsOnGoal(?float $shotsOnGoal) : self
    {
        $this->shotsOnGoal = $shotsOnGoal;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPowerPlayGoals() : ?float
    {
        return $this->powerPlayGoals;
    }
    /**
     * 
     *
     * @param float|null $powerPlayGoals
     *
     * @return self
     */
    public function setPowerPlayGoals(?float $powerPlayGoals) : self
    {
        $this->powerPlayGoals = $powerPlayGoals;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getShortHandedGoals() : ?float
    {
        return $this->shortHandedGoals;
    }
    /**
     * 
     *
     * @param float|null $shortHandedGoals
     *
     * @return self
     */
    public function setShortHandedGoals(?float $shortHandedGoals) : self
    {
        $this->shortHandedGoals = $shortHandedGoals;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getEmptyNetGoals() : ?float
    {
        return $this->emptyNetGoals;
    }
    /**
     * 
     *
     * @param float|null $emptyNetGoals
     *
     * @return self
     */
    public function setEmptyNetGoals(?float $emptyNetGoals) : self
    {
        $this->emptyNetGoals = $emptyNetGoals;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPowerPlayAssists() : ?float
    {
        return $this->powerPlayAssists;
    }
    /**
     * 
     *
     * @param float|null $powerPlayAssists
     *
     * @return self
     */
    public function setPowerPlayAssists(?float $powerPlayAssists) : self
    {
        $this->powerPlayAssists = $powerPlayAssists;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getShortHandedAssists() : ?float
    {
        return $this->shortHandedAssists;
    }
    /**
     * 
     *
     * @param float|null $shortHandedAssists
     *
     * @return self
     */
    public function setShortHandedAssists(?float $shortHandedAssists) : self
    {
        $this->shortHandedAssists = $shortHandedAssists;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getHatTricks() : ?float
    {
        return $this->hatTricks;
    }
    /**
     * 
     *
     * @param float|null $hatTricks
     *
     * @return self
     */
    public function setHatTricks(?float $hatTricks) : self
    {
        $this->hatTricks = $hatTricks;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getShootoutGoals() : ?float
    {
        return $this->shootoutGoals;
    }
    /**
     * 
     *
     * @param float|null $shootoutGoals
     *
     * @return self
     */
    public function setShootoutGoals(?float $shootoutGoals) : self
    {
        $this->shootoutGoals = $shootoutGoals;
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
    public function getPenaltyMinutes() : ?float
    {
        return $this->penaltyMinutes;
    }
    /**
     * 
     *
     * @param float|null $penaltyMinutes
     *
     * @return self
     */
    public function setPenaltyMinutes(?float $penaltyMinutes) : self
    {
        $this->penaltyMinutes = $penaltyMinutes;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getBlocks() : ?float
    {
        return $this->blocks;
    }
    /**
     * 
     *
     * @param float|null $blocks
     *
     * @return self
     */
    public function setBlocks(?float $blocks) : self
    {
        $this->blocks = $blocks;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getHits() : ?float
    {
        return $this->hits;
    }
    /**
     * 
     *
     * @param float|null $hits
     *
     * @return self
     */
    public function setHits(?float $hits) : self
    {
        $this->hits = $hits;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTakeaways() : ?float
    {
        return $this->takeaways;
    }
    /**
     * 
     *
     * @param float|null $takeaways
     *
     * @return self
     */
    public function setTakeaways(?float $takeaways) : self
    {
        $this->takeaways = $takeaways;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getGiveaways() : ?float
    {
        return $this->giveaways;
    }
    /**
     * 
     *
     * @param float|null $giveaways
     *
     * @return self
     */
    public function setGiveaways(?float $giveaways) : self
    {
        $this->giveaways = $giveaways;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFaceoffsWon() : ?float
    {
        return $this->faceoffsWon;
    }
    /**
     * 
     *
     * @param float|null $faceoffsWon
     *
     * @return self
     */
    public function setFaceoffsWon(?float $faceoffsWon) : self
    {
        $this->faceoffsWon = $faceoffsWon;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFaceoffsLost() : ?float
    {
        return $this->faceoffsLost;
    }
    /**
     * 
     *
     * @param float|null $faceoffsLost
     *
     * @return self
     */
    public function setFaceoffsLost(?float $faceoffsLost) : self
    {
        $this->faceoffsLost = $faceoffsLost;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getShifts() : ?float
    {
        return $this->shifts;
    }
    /**
     * 
     *
     * @param float|null $shifts
     *
     * @return self
     */
    public function setShifts(?float $shifts) : self
    {
        $this->shifts = $shifts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getGoaltendingMinutes() : ?int
    {
        return $this->goaltendingMinutes;
    }
    /**
     * 
     *
     * @param int|null $goaltendingMinutes
     *
     * @return self
     */
    public function setGoaltendingMinutes(?int $goaltendingMinutes) : self
    {
        $this->goaltendingMinutes = $goaltendingMinutes;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getGoaltendingSeconds() : ?int
    {
        return $this->goaltendingSeconds;
    }
    /**
     * 
     *
     * @param int|null $goaltendingSeconds
     *
     * @return self
     */
    public function setGoaltendingSeconds(?int $goaltendingSeconds) : self
    {
        $this->goaltendingSeconds = $goaltendingSeconds;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getGoaltendingShotsAgainst() : ?float
    {
        return $this->goaltendingShotsAgainst;
    }
    /**
     * 
     *
     * @param float|null $goaltendingShotsAgainst
     *
     * @return self
     */
    public function setGoaltendingShotsAgainst(?float $goaltendingShotsAgainst) : self
    {
        $this->goaltendingShotsAgainst = $goaltendingShotsAgainst;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getGoaltendingGoalsAgainst() : ?float
    {
        return $this->goaltendingGoalsAgainst;
    }
    /**
     * 
     *
     * @param float|null $goaltendingGoalsAgainst
     *
     * @return self
     */
    public function setGoaltendingGoalsAgainst(?float $goaltendingGoalsAgainst) : self
    {
        $this->goaltendingGoalsAgainst = $goaltendingGoalsAgainst;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getGoaltendingSaves() : ?float
    {
        return $this->goaltendingSaves;
    }
    /**
     * 
     *
     * @param float|null $goaltendingSaves
     *
     * @return self
     */
    public function setGoaltendingSaves(?float $goaltendingSaves) : self
    {
        $this->goaltendingSaves = $goaltendingSaves;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getGoaltendingWins() : ?float
    {
        return $this->goaltendingWins;
    }
    /**
     * 
     *
     * @param float|null $goaltendingWins
     *
     * @return self
     */
    public function setGoaltendingWins(?float $goaltendingWins) : self
    {
        $this->goaltendingWins = $goaltendingWins;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getGoaltendingLosses() : ?float
    {
        return $this->goaltendingLosses;
    }
    /**
     * 
     *
     * @param float|null $goaltendingLosses
     *
     * @return self
     */
    public function setGoaltendingLosses(?float $goaltendingLosses) : self
    {
        $this->goaltendingLosses = $goaltendingLosses;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getGoaltendingShutouts() : ?float
    {
        return $this->goaltendingShutouts;
    }
    /**
     * 
     *
     * @param float|null $goaltendingShutouts
     *
     * @return self
     */
    public function setGoaltendingShutouts(?float $goaltendingShutouts) : self
    {
        $this->goaltendingShutouts = $goaltendingShutouts;
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
     * @return float|null
     */
    public function getBenchPenaltyMinutes() : ?float
    {
        return $this->benchPenaltyMinutes;
    }
    /**
     * 
     *
     * @param float|null $benchPenaltyMinutes
     *
     * @return self
     */
    public function setBenchPenaltyMinutes(?float $benchPenaltyMinutes) : self
    {
        $this->benchPenaltyMinutes = $benchPenaltyMinutes;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getGoaltendingOvertimeLosses() : ?float
    {
        return $this->goaltendingOvertimeLosses;
    }
    /**
     * 
     *
     * @param float|null $goaltendingOvertimeLosses
     *
     * @return self
     */
    public function setGoaltendingOvertimeLosses(?float $goaltendingOvertimeLosses) : self
    {
        $this->goaltendingOvertimeLosses = $goaltendingOvertimeLosses;
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
}