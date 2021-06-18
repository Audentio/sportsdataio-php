<?php

namespace Sportsdata\API\Soccer\Model;

class PlayerSeason
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
     * @var int|null
     */
    protected $roundId;
    /**
     * 
     *
     * @var int|null
     */
    protected $teamId;
    /**
     * 
     *
     * @var int|null
     */
    protected $playerId;
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
    protected $shortName;
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
    protected $positionCategory;
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
    protected $globalTeamId;
    /**
     * 
     *
     * @var string|null
     */
    protected $updated;
    /**
     * 
     *
     * @var string|null
     */
    protected $updatedUtc;
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
     * @var float|null
     */
    protected $fantasyPointsMondogoal;
    /**
     * 
     *
     * @var float|null
     */
    protected $minutes;
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
    protected $shots;
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
    protected $yellowCards;
    /**
     * 
     *
     * @var float|null
     */
    protected $redCards;
    /**
     * 
     *
     * @var float|null
     */
    protected $yellowRedCards;
    /**
     * 
     *
     * @var float|null
     */
    protected $crosses;
    /**
     * 
     *
     * @var float|null
     */
    protected $tacklesWon;
    /**
     * 
     *
     * @var float|null
     */
    protected $interceptions;
    /**
     * 
     *
     * @var float|null
     */
    protected $ownGoals;
    /**
     * 
     *
     * @var float|null
     */
    protected $fouls;
    /**
     * 
     *
     * @var float|null
     */
    protected $fouled;
    /**
     * 
     *
     * @var float|null
     */
    protected $offsides;
    /**
     * 
     *
     * @var float|null
     */
    protected $passes;
    /**
     * 
     *
     * @var float|null
     */
    protected $passesCompleted;
    /**
     * 
     *
     * @var float|null
     */
    protected $lastManTackle;
    /**
     * 
     *
     * @var float|null
     */
    protected $cornersWon;
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
    protected $touches;
    /**
     * 
     *
     * @var float|null
     */
    protected $defenderCleanSheets;
    /**
     * 
     *
     * @var float|null
     */
    protected $goalkeeperSaves;
    /**
     * 
     *
     * @var float|null
     */
    protected $goalkeeperGoalsAgainst;
    /**
     * 
     *
     * @var float|null
     */
    protected $goalkeeperSingleGoalAgainst;
    /**
     * 
     *
     * @var float|null
     */
    protected $goalkeeperCleanSheets;
    /**
     * 
     *
     * @var float|null
     */
    protected $goalkeeperWins;
    /**
     * 
     *
     * @var float|null
     */
    protected $penaltyKickGoals;
    /**
     * 
     *
     * @var float|null
     */
    protected $penaltyKickMisses;
    /**
     * 
     *
     * @var float|null
     */
    protected $penaltyKickSaves;
    /**
     * 
     *
     * @var float|null
     */
    protected $penaltiesWon;
    /**
     * 
     *
     * @var float|null
     */
    protected $penaltiesConceded;
    /**
     * 
     *
     * @var float|null
     */
    protected $score;
    /**
     * 
     *
     * @var float|null
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
     * @return int|null
     */
    public function getRoundId() : ?int
    {
        return $this->roundId;
    }
    /**
     * 
     *
     * @param int|null $roundId
     *
     * @return self
     */
    public function setRoundId(?int $roundId) : self
    {
        $this->roundId = $roundId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTeamId() : ?int
    {
        return $this->teamId;
    }
    /**
     * 
     *
     * @param int|null $teamId
     *
     * @return self
     */
    public function setTeamId(?int $teamId) : self
    {
        $this->teamId = $teamId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPlayerId() : ?int
    {
        return $this->playerId;
    }
    /**
     * 
     *
     * @param int|null $playerId
     *
     * @return self
     */
    public function setPlayerId(?int $playerId) : self
    {
        $this->playerId = $playerId;
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
    public function getShortName() : ?string
    {
        return $this->shortName;
    }
    /**
     * 
     *
     * @param string|null $shortName
     *
     * @return self
     */
    public function setShortName(?string $shortName) : self
    {
        $this->shortName = $shortName;
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
    public function getPositionCategory() : ?string
    {
        return $this->positionCategory;
    }
    /**
     * 
     *
     * @param string|null $positionCategory
     *
     * @return self
     */
    public function setPositionCategory(?string $positionCategory) : self
    {
        $this->positionCategory = $positionCategory;
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
    public function getGlobalTeamId() : ?int
    {
        return $this->globalTeamId;
    }
    /**
     * 
     *
     * @param int|null $globalTeamId
     *
     * @return self
     */
    public function setGlobalTeamId(?int $globalTeamId) : self
    {
        $this->globalTeamId = $globalTeamId;
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
     * @return string|null
     */
    public function getUpdatedUtc() : ?string
    {
        return $this->updatedUtc;
    }
    /**
     * 
     *
     * @param string|null $updatedUtc
     *
     * @return self
     */
    public function setUpdatedUtc(?string $updatedUtc) : self
    {
        $this->updatedUtc = $updatedUtc;
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
     * @return float|null
     */
    public function getFantasyPointsMondogoal() : ?float
    {
        return $this->fantasyPointsMondogoal;
    }
    /**
     * 
     *
     * @param float|null $fantasyPointsMondogoal
     *
     * @return self
     */
    public function setFantasyPointsMondogoal(?float $fantasyPointsMondogoal) : self
    {
        $this->fantasyPointsMondogoal = $fantasyPointsMondogoal;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getMinutes() : ?float
    {
        return $this->minutes;
    }
    /**
     * 
     *
     * @param float|null $minutes
     *
     * @return self
     */
    public function setMinutes(?float $minutes) : self
    {
        $this->minutes = $minutes;
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
    public function getShots() : ?float
    {
        return $this->shots;
    }
    /**
     * 
     *
     * @param float|null $shots
     *
     * @return self
     */
    public function setShots(?float $shots) : self
    {
        $this->shots = $shots;
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
    public function getYellowCards() : ?float
    {
        return $this->yellowCards;
    }
    /**
     * 
     *
     * @param float|null $yellowCards
     *
     * @return self
     */
    public function setYellowCards(?float $yellowCards) : self
    {
        $this->yellowCards = $yellowCards;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRedCards() : ?float
    {
        return $this->redCards;
    }
    /**
     * 
     *
     * @param float|null $redCards
     *
     * @return self
     */
    public function setRedCards(?float $redCards) : self
    {
        $this->redCards = $redCards;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getYellowRedCards() : ?float
    {
        return $this->yellowRedCards;
    }
    /**
     * 
     *
     * @param float|null $yellowRedCards
     *
     * @return self
     */
    public function setYellowRedCards(?float $yellowRedCards) : self
    {
        $this->yellowRedCards = $yellowRedCards;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getCrosses() : ?float
    {
        return $this->crosses;
    }
    /**
     * 
     *
     * @param float|null $crosses
     *
     * @return self
     */
    public function setCrosses(?float $crosses) : self
    {
        $this->crosses = $crosses;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTacklesWon() : ?float
    {
        return $this->tacklesWon;
    }
    /**
     * 
     *
     * @param float|null $tacklesWon
     *
     * @return self
     */
    public function setTacklesWon(?float $tacklesWon) : self
    {
        $this->tacklesWon = $tacklesWon;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getInterceptions() : ?float
    {
        return $this->interceptions;
    }
    /**
     * 
     *
     * @param float|null $interceptions
     *
     * @return self
     */
    public function setInterceptions(?float $interceptions) : self
    {
        $this->interceptions = $interceptions;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getOwnGoals() : ?float
    {
        return $this->ownGoals;
    }
    /**
     * 
     *
     * @param float|null $ownGoals
     *
     * @return self
     */
    public function setOwnGoals(?float $ownGoals) : self
    {
        $this->ownGoals = $ownGoals;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFouls() : ?float
    {
        return $this->fouls;
    }
    /**
     * 
     *
     * @param float|null $fouls
     *
     * @return self
     */
    public function setFouls(?float $fouls) : self
    {
        $this->fouls = $fouls;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFouled() : ?float
    {
        return $this->fouled;
    }
    /**
     * 
     *
     * @param float|null $fouled
     *
     * @return self
     */
    public function setFouled(?float $fouled) : self
    {
        $this->fouled = $fouled;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getOffsides() : ?float
    {
        return $this->offsides;
    }
    /**
     * 
     *
     * @param float|null $offsides
     *
     * @return self
     */
    public function setOffsides(?float $offsides) : self
    {
        $this->offsides = $offsides;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPasses() : ?float
    {
        return $this->passes;
    }
    /**
     * 
     *
     * @param float|null $passes
     *
     * @return self
     */
    public function setPasses(?float $passes) : self
    {
        $this->passes = $passes;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPassesCompleted() : ?float
    {
        return $this->passesCompleted;
    }
    /**
     * 
     *
     * @param float|null $passesCompleted
     *
     * @return self
     */
    public function setPassesCompleted(?float $passesCompleted) : self
    {
        $this->passesCompleted = $passesCompleted;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getLastManTackle() : ?float
    {
        return $this->lastManTackle;
    }
    /**
     * 
     *
     * @param float|null $lastManTackle
     *
     * @return self
     */
    public function setLastManTackle(?float $lastManTackle) : self
    {
        $this->lastManTackle = $lastManTackle;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getCornersWon() : ?float
    {
        return $this->cornersWon;
    }
    /**
     * 
     *
     * @param float|null $cornersWon
     *
     * @return self
     */
    public function setCornersWon(?float $cornersWon) : self
    {
        $this->cornersWon = $cornersWon;
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
    public function getTouches() : ?float
    {
        return $this->touches;
    }
    /**
     * 
     *
     * @param float|null $touches
     *
     * @return self
     */
    public function setTouches(?float $touches) : self
    {
        $this->touches = $touches;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDefenderCleanSheets() : ?float
    {
        return $this->defenderCleanSheets;
    }
    /**
     * 
     *
     * @param float|null $defenderCleanSheets
     *
     * @return self
     */
    public function setDefenderCleanSheets(?float $defenderCleanSheets) : self
    {
        $this->defenderCleanSheets = $defenderCleanSheets;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getGoalkeeperSaves() : ?float
    {
        return $this->goalkeeperSaves;
    }
    /**
     * 
     *
     * @param float|null $goalkeeperSaves
     *
     * @return self
     */
    public function setGoalkeeperSaves(?float $goalkeeperSaves) : self
    {
        $this->goalkeeperSaves = $goalkeeperSaves;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getGoalkeeperGoalsAgainst() : ?float
    {
        return $this->goalkeeperGoalsAgainst;
    }
    /**
     * 
     *
     * @param float|null $goalkeeperGoalsAgainst
     *
     * @return self
     */
    public function setGoalkeeperGoalsAgainst(?float $goalkeeperGoalsAgainst) : self
    {
        $this->goalkeeperGoalsAgainst = $goalkeeperGoalsAgainst;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getGoalkeeperSingleGoalAgainst() : ?float
    {
        return $this->goalkeeperSingleGoalAgainst;
    }
    /**
     * 
     *
     * @param float|null $goalkeeperSingleGoalAgainst
     *
     * @return self
     */
    public function setGoalkeeperSingleGoalAgainst(?float $goalkeeperSingleGoalAgainst) : self
    {
        $this->goalkeeperSingleGoalAgainst = $goalkeeperSingleGoalAgainst;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getGoalkeeperCleanSheets() : ?float
    {
        return $this->goalkeeperCleanSheets;
    }
    /**
     * 
     *
     * @param float|null $goalkeeperCleanSheets
     *
     * @return self
     */
    public function setGoalkeeperCleanSheets(?float $goalkeeperCleanSheets) : self
    {
        $this->goalkeeperCleanSheets = $goalkeeperCleanSheets;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getGoalkeeperWins() : ?float
    {
        return $this->goalkeeperWins;
    }
    /**
     * 
     *
     * @param float|null $goalkeeperWins
     *
     * @return self
     */
    public function setGoalkeeperWins(?float $goalkeeperWins) : self
    {
        $this->goalkeeperWins = $goalkeeperWins;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPenaltyKickGoals() : ?float
    {
        return $this->penaltyKickGoals;
    }
    /**
     * 
     *
     * @param float|null $penaltyKickGoals
     *
     * @return self
     */
    public function setPenaltyKickGoals(?float $penaltyKickGoals) : self
    {
        $this->penaltyKickGoals = $penaltyKickGoals;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPenaltyKickMisses() : ?float
    {
        return $this->penaltyKickMisses;
    }
    /**
     * 
     *
     * @param float|null $penaltyKickMisses
     *
     * @return self
     */
    public function setPenaltyKickMisses(?float $penaltyKickMisses) : self
    {
        $this->penaltyKickMisses = $penaltyKickMisses;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPenaltyKickSaves() : ?float
    {
        return $this->penaltyKickSaves;
    }
    /**
     * 
     *
     * @param float|null $penaltyKickSaves
     *
     * @return self
     */
    public function setPenaltyKickSaves(?float $penaltyKickSaves) : self
    {
        $this->penaltyKickSaves = $penaltyKickSaves;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPenaltiesWon() : ?float
    {
        return $this->penaltiesWon;
    }
    /**
     * 
     *
     * @param float|null $penaltiesWon
     *
     * @return self
     */
    public function setPenaltiesWon(?float $penaltiesWon) : self
    {
        $this->penaltiesWon = $penaltiesWon;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPenaltiesConceded() : ?float
    {
        return $this->penaltiesConceded;
    }
    /**
     * 
     *
     * @param float|null $penaltiesConceded
     *
     * @return self
     */
    public function setPenaltiesConceded(?float $penaltiesConceded) : self
    {
        $this->penaltiesConceded = $penaltiesConceded;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getScore() : ?float
    {
        return $this->score;
    }
    /**
     * 
     *
     * @param float|null $score
     *
     * @return self
     */
    public function setScore(?float $score) : self
    {
        $this->score = $score;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getOpponentScore() : ?float
    {
        return $this->opponentScore;
    }
    /**
     * 
     *
     * @param float|null $opponentScore
     *
     * @return self
     */
    public function setOpponentScore(?float $opponentScore) : self
    {
        $this->opponentScore = $opponentScore;
        return $this;
    }
}