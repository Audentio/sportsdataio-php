<?php

namespace Sportsdata\API\NFL\Model;

class FantasyDefenseGame
{
    /**
     * 
     *
     * @var string
     */
    protected $gameKey;
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
    protected $week;
    /**
     * 
     *
     * @var string
     */
    protected $date;
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
    protected $opponent;
    /**
     * 
     *
     * @var float
     */
    protected $pointsAllowed;
    /**
     * 
     *
     * @var float
     */
    protected $touchdownsScored;
    /**
     * 
     *
     * @var float
     */
    protected $soloTackles;
    /**
     * 
     *
     * @var float
     */
    protected $assistedTackles;
    /**
     * 
     *
     * @var float
     */
    protected $sacks;
    /**
     * 
     *
     * @var float
     */
    protected $sackYards;
    /**
     * 
     *
     * @var float
     */
    protected $passesDefended;
    /**
     * 
     *
     * @var float
     */
    protected $fumblesForced;
    /**
     * 
     *
     * @var float
     */
    protected $fumblesRecovered;
    /**
     * 
     *
     * @var float
     */
    protected $fumbleReturnYards;
    /**
     * 
     *
     * @var float
     */
    protected $fumbleReturnTouchdowns;
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
    protected $interceptionReturnYards;
    /**
     * 
     *
     * @var float
     */
    protected $interceptionReturnTouchdowns;
    /**
     * 
     *
     * @var float
     */
    protected $blockedKicks;
    /**
     * 
     *
     * @var float
     */
    protected $safeties;
    /**
     * 
     *
     * @var float
     */
    protected $puntReturns;
    /**
     * 
     *
     * @var float
     */
    protected $puntReturnYards;
    /**
     * 
     *
     * @var float
     */
    protected $puntReturnTouchdowns;
    /**
     * 
     *
     * @var float
     */
    protected $puntReturnLong;
    /**
     * 
     *
     * @var float
     */
    protected $kickReturns;
    /**
     * 
     *
     * @var float
     */
    protected $kickReturnYards;
    /**
     * 
     *
     * @var float
     */
    protected $kickReturnTouchdowns;
    /**
     * 
     *
     * @var float
     */
    protected $kickReturnLong;
    /**
     * 
     *
     * @var float
     */
    protected $blockedKickReturnTouchdowns;
    /**
     * 
     *
     * @var float
     */
    protected $fieldGoalReturnTouchdowns;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyPointsAllowed;
    /**
     * 
     *
     * @var float
     */
    protected $quarterbackFantasyPointsAllowed;
    /**
     * 
     *
     * @var float
     */
    protected $runningbackFantasyPointsAllowed;
    /**
     * 
     *
     * @var float
     */
    protected $wideReceiverFantasyPointsAllowed;
    /**
     * 
     *
     * @var float
     */
    protected $tightEndFantasyPointsAllowed;
    /**
     * 
     *
     * @var float
     */
    protected $kickerFantasyPointsAllowed;
    /**
     * 
     *
     * @var float
     */
    protected $blockedKickReturnYards;
    /**
     * 
     *
     * @var float
     */
    protected $fieldGoalReturnYards;
    /**
     * 
     *
     * @var float
     */
    protected $quarterbackHits;
    /**
     * 
     *
     * @var float
     */
    protected $tacklesForLoss;
    /**
     * 
     *
     * @var float
     */
    protected $defensiveTouchdowns;
    /**
     * 
     *
     * @var float
     */
    protected $specialTeamsTouchdowns;
    /**
     * 
     *
     * @var bool
     */
    protected $isGameOver;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyPoints;
    /**
     * 
     *
     * @var string
     */
    protected $stadium;
    /**
     * 
     *
     * @var int
     */
    protected $temperature;
    /**
     * 
     *
     * @var int
     */
    protected $humidity;
    /**
     * 
     *
     * @var int
     */
    protected $windSpeed;
    /**
     * 
     *
     * @var float
     */
    protected $thirdDownAttempts;
    /**
     * 
     *
     * @var float
     */
    protected $thirdDownConversions;
    /**
     * 
     *
     * @var float
     */
    protected $fourthDownAttempts;
    /**
     * 
     *
     * @var float
     */
    protected $fourthDownConversions;
    /**
     * 
     *
     * @var float
     */
    protected $pointsAllowedByDefenseSpecialTeams;
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
    protected $victivSalary;
    /**
     * 
     *
     * @var float
     */
    protected $twoPointConversionReturns;
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
    protected $offensiveYardsAllowed;
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
    protected $playerID;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyPointsYahoo;
    /**
     * 
     *
     * @var string
     */
    protected $homeOrAway;
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
    protected $fantasyDraftSalary;
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
    protected $opponentID;
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
     * @var int
     */
    protected $globalGameID;
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
    protected $globalOpponentID;
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
    protected $fanDuelPosition;
    /**
     * 
     *
     * @var string
     */
    protected $fantasyDraftPosition;
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
    protected $fantasyDefenseID;
    /**
     * 
     *
     * @var int
     */
    protected $scoreID;
    /**
     * 
     *
     * @var float
     */
    protected $fanDuelFantasyPointsAllowed;
    /**
     * 
     *
     * @var float
     */
    protected $fanDuelQuarterbackFantasyPointsAllowed;
    /**
     * 
     *
     * @var float
     */
    protected $fanDuelRunningbackFantasyPointsAllowed;
    /**
     * 
     *
     * @var float
     */
    protected $fanDuelWideReceiverFantasyPointsAllowed;
    /**
     * 
     *
     * @var float
     */
    protected $fanDuelTightEndFantasyPointsAllowed;
    /**
     * 
     *
     * @var float
     */
    protected $fanDuelKickerFantasyPointsAllowed;
    /**
     * 
     *
     * @var float
     */
    protected $draftKingsFantasyPointsAllowed;
    /**
     * 
     *
     * @var float
     */
    protected $draftKingsQuarterbackFantasyPointsAllowed;
    /**
     * 
     *
     * @var float
     */
    protected $draftKingsRunningbackFantasyPointsAllowed;
    /**
     * 
     *
     * @var float
     */
    protected $draftKingsWideReceiverFantasyPointsAllowed;
    /**
     * 
     *
     * @var float
     */
    protected $draftKingsTightEndFantasyPointsAllowed;
    /**
     * 
     *
     * @var float
     */
    protected $draftKingsKickerFantasyPointsAllowed;
    /**
     * 
     *
     * @var float
     */
    protected $yahooFantasyPointsAllowed;
    /**
     * 
     *
     * @var float
     */
    protected $yahooQuarterbackFantasyPointsAllowed;
    /**
     * 
     *
     * @var float
     */
    protected $yahooRunningbackFantasyPointsAllowed;
    /**
     * 
     *
     * @var float
     */
    protected $yahooWideReceiverFantasyPointsAllowed;
    /**
     * 
     *
     * @var float
     */
    protected $yahooTightEndFantasyPointsAllowed;
    /**
     * 
     *
     * @var float
     */
    protected $yahooKickerFantasyPointsAllowed;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyPointsFantasyDraft;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyDraftFantasyPointsAllowed;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyDraftQuarterbackFantasyPointsAllowed;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyDraftRunningbackFantasyPointsAllowed;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyDraftWideReceiverFantasyPointsAllowed;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyDraftTightEndFantasyPointsAllowed;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyDraftKickerFantasyPointsAllowed;
    /**
     * 
     *
     * @var ScoringDetail[]
     */
    protected $scoringDetails;
    /**
     * 
     *
     * @return string
     */
    public function getGameKey() : string
    {
        return $this->gameKey;
    }
    /**
     * 
     *
     * @param string $gameKey
     *
     * @return self
     */
    public function setGameKey(string $gameKey) : self
    {
        $this->gameKey = $gameKey;
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
    public function getWeek() : int
    {
        return $this->week;
    }
    /**
     * 
     *
     * @param int $week
     *
     * @return self
     */
    public function setWeek(int $week) : self
    {
        $this->week = $week;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDate() : string
    {
        return $this->date;
    }
    /**
     * 
     *
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date) : self
    {
        $this->date = $date;
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
     * @return float
     */
    public function getPointsAllowed() : float
    {
        return $this->pointsAllowed;
    }
    /**
     * 
     *
     * @param float $pointsAllowed
     *
     * @return self
     */
    public function setPointsAllowed(float $pointsAllowed) : self
    {
        $this->pointsAllowed = $pointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTouchdownsScored() : float
    {
        return $this->touchdownsScored;
    }
    /**
     * 
     *
     * @param float $touchdownsScored
     *
     * @return self
     */
    public function setTouchdownsScored(float $touchdownsScored) : self
    {
        $this->touchdownsScored = $touchdownsScored;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSoloTackles() : float
    {
        return $this->soloTackles;
    }
    /**
     * 
     *
     * @param float $soloTackles
     *
     * @return self
     */
    public function setSoloTackles(float $soloTackles) : self
    {
        $this->soloTackles = $soloTackles;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAssistedTackles() : float
    {
        return $this->assistedTackles;
    }
    /**
     * 
     *
     * @param float $assistedTackles
     *
     * @return self
     */
    public function setAssistedTackles(float $assistedTackles) : self
    {
        $this->assistedTackles = $assistedTackles;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSacks() : float
    {
        return $this->sacks;
    }
    /**
     * 
     *
     * @param float $sacks
     *
     * @return self
     */
    public function setSacks(float $sacks) : self
    {
        $this->sacks = $sacks;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSackYards() : float
    {
        return $this->sackYards;
    }
    /**
     * 
     *
     * @param float $sackYards
     *
     * @return self
     */
    public function setSackYards(float $sackYards) : self
    {
        $this->sackYards = $sackYards;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPassesDefended() : float
    {
        return $this->passesDefended;
    }
    /**
     * 
     *
     * @param float $passesDefended
     *
     * @return self
     */
    public function setPassesDefended(float $passesDefended) : self
    {
        $this->passesDefended = $passesDefended;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFumblesForced() : float
    {
        return $this->fumblesForced;
    }
    /**
     * 
     *
     * @param float $fumblesForced
     *
     * @return self
     */
    public function setFumblesForced(float $fumblesForced) : self
    {
        $this->fumblesForced = $fumblesForced;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFumblesRecovered() : float
    {
        return $this->fumblesRecovered;
    }
    /**
     * 
     *
     * @param float $fumblesRecovered
     *
     * @return self
     */
    public function setFumblesRecovered(float $fumblesRecovered) : self
    {
        $this->fumblesRecovered = $fumblesRecovered;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFumbleReturnYards() : float
    {
        return $this->fumbleReturnYards;
    }
    /**
     * 
     *
     * @param float $fumbleReturnYards
     *
     * @return self
     */
    public function setFumbleReturnYards(float $fumbleReturnYards) : self
    {
        $this->fumbleReturnYards = $fumbleReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFumbleReturnTouchdowns() : float
    {
        return $this->fumbleReturnTouchdowns;
    }
    /**
     * 
     *
     * @param float $fumbleReturnTouchdowns
     *
     * @return self
     */
    public function setFumbleReturnTouchdowns(float $fumbleReturnTouchdowns) : self
    {
        $this->fumbleReturnTouchdowns = $fumbleReturnTouchdowns;
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
    public function getInterceptionReturnYards() : float
    {
        return $this->interceptionReturnYards;
    }
    /**
     * 
     *
     * @param float $interceptionReturnYards
     *
     * @return self
     */
    public function setInterceptionReturnYards(float $interceptionReturnYards) : self
    {
        $this->interceptionReturnYards = $interceptionReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getInterceptionReturnTouchdowns() : float
    {
        return $this->interceptionReturnTouchdowns;
    }
    /**
     * 
     *
     * @param float $interceptionReturnTouchdowns
     *
     * @return self
     */
    public function setInterceptionReturnTouchdowns(float $interceptionReturnTouchdowns) : self
    {
        $this->interceptionReturnTouchdowns = $interceptionReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBlockedKicks() : float
    {
        return $this->blockedKicks;
    }
    /**
     * 
     *
     * @param float $blockedKicks
     *
     * @return self
     */
    public function setBlockedKicks(float $blockedKicks) : self
    {
        $this->blockedKicks = $blockedKicks;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSafeties() : float
    {
        return $this->safeties;
    }
    /**
     * 
     *
     * @param float $safeties
     *
     * @return self
     */
    public function setSafeties(float $safeties) : self
    {
        $this->safeties = $safeties;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPuntReturns() : float
    {
        return $this->puntReturns;
    }
    /**
     * 
     *
     * @param float $puntReturns
     *
     * @return self
     */
    public function setPuntReturns(float $puntReturns) : self
    {
        $this->puntReturns = $puntReturns;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPuntReturnYards() : float
    {
        return $this->puntReturnYards;
    }
    /**
     * 
     *
     * @param float $puntReturnYards
     *
     * @return self
     */
    public function setPuntReturnYards(float $puntReturnYards) : self
    {
        $this->puntReturnYards = $puntReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPuntReturnTouchdowns() : float
    {
        return $this->puntReturnTouchdowns;
    }
    /**
     * 
     *
     * @param float $puntReturnTouchdowns
     *
     * @return self
     */
    public function setPuntReturnTouchdowns(float $puntReturnTouchdowns) : self
    {
        $this->puntReturnTouchdowns = $puntReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPuntReturnLong() : float
    {
        return $this->puntReturnLong;
    }
    /**
     * 
     *
     * @param float $puntReturnLong
     *
     * @return self
     */
    public function setPuntReturnLong(float $puntReturnLong) : self
    {
        $this->puntReturnLong = $puntReturnLong;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getKickReturns() : float
    {
        return $this->kickReturns;
    }
    /**
     * 
     *
     * @param float $kickReturns
     *
     * @return self
     */
    public function setKickReturns(float $kickReturns) : self
    {
        $this->kickReturns = $kickReturns;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getKickReturnYards() : float
    {
        return $this->kickReturnYards;
    }
    /**
     * 
     *
     * @param float $kickReturnYards
     *
     * @return self
     */
    public function setKickReturnYards(float $kickReturnYards) : self
    {
        $this->kickReturnYards = $kickReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getKickReturnTouchdowns() : float
    {
        return $this->kickReturnTouchdowns;
    }
    /**
     * 
     *
     * @param float $kickReturnTouchdowns
     *
     * @return self
     */
    public function setKickReturnTouchdowns(float $kickReturnTouchdowns) : self
    {
        $this->kickReturnTouchdowns = $kickReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getKickReturnLong() : float
    {
        return $this->kickReturnLong;
    }
    /**
     * 
     *
     * @param float $kickReturnLong
     *
     * @return self
     */
    public function setKickReturnLong(float $kickReturnLong) : self
    {
        $this->kickReturnLong = $kickReturnLong;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBlockedKickReturnTouchdowns() : float
    {
        return $this->blockedKickReturnTouchdowns;
    }
    /**
     * 
     *
     * @param float $blockedKickReturnTouchdowns
     *
     * @return self
     */
    public function setBlockedKickReturnTouchdowns(float $blockedKickReturnTouchdowns) : self
    {
        $this->blockedKickReturnTouchdowns = $blockedKickReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFieldGoalReturnTouchdowns() : float
    {
        return $this->fieldGoalReturnTouchdowns;
    }
    /**
     * 
     *
     * @param float $fieldGoalReturnTouchdowns
     *
     * @return self
     */
    public function setFieldGoalReturnTouchdowns(float $fieldGoalReturnTouchdowns) : self
    {
        $this->fieldGoalReturnTouchdowns = $fieldGoalReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFantasyPointsAllowed() : float
    {
        return $this->fantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float $fantasyPointsAllowed
     *
     * @return self
     */
    public function setFantasyPointsAllowed(float $fantasyPointsAllowed) : self
    {
        $this->fantasyPointsAllowed = $fantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getQuarterbackFantasyPointsAllowed() : float
    {
        return $this->quarterbackFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float $quarterbackFantasyPointsAllowed
     *
     * @return self
     */
    public function setQuarterbackFantasyPointsAllowed(float $quarterbackFantasyPointsAllowed) : self
    {
        $this->quarterbackFantasyPointsAllowed = $quarterbackFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRunningbackFantasyPointsAllowed() : float
    {
        return $this->runningbackFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float $runningbackFantasyPointsAllowed
     *
     * @return self
     */
    public function setRunningbackFantasyPointsAllowed(float $runningbackFantasyPointsAllowed) : self
    {
        $this->runningbackFantasyPointsAllowed = $runningbackFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getWideReceiverFantasyPointsAllowed() : float
    {
        return $this->wideReceiverFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float $wideReceiverFantasyPointsAllowed
     *
     * @return self
     */
    public function setWideReceiverFantasyPointsAllowed(float $wideReceiverFantasyPointsAllowed) : self
    {
        $this->wideReceiverFantasyPointsAllowed = $wideReceiverFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTightEndFantasyPointsAllowed() : float
    {
        return $this->tightEndFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float $tightEndFantasyPointsAllowed
     *
     * @return self
     */
    public function setTightEndFantasyPointsAllowed(float $tightEndFantasyPointsAllowed) : self
    {
        $this->tightEndFantasyPointsAllowed = $tightEndFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getKickerFantasyPointsAllowed() : float
    {
        return $this->kickerFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float $kickerFantasyPointsAllowed
     *
     * @return self
     */
    public function setKickerFantasyPointsAllowed(float $kickerFantasyPointsAllowed) : self
    {
        $this->kickerFantasyPointsAllowed = $kickerFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBlockedKickReturnYards() : float
    {
        return $this->blockedKickReturnYards;
    }
    /**
     * 
     *
     * @param float $blockedKickReturnYards
     *
     * @return self
     */
    public function setBlockedKickReturnYards(float $blockedKickReturnYards) : self
    {
        $this->blockedKickReturnYards = $blockedKickReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFieldGoalReturnYards() : float
    {
        return $this->fieldGoalReturnYards;
    }
    /**
     * 
     *
     * @param float $fieldGoalReturnYards
     *
     * @return self
     */
    public function setFieldGoalReturnYards(float $fieldGoalReturnYards) : self
    {
        $this->fieldGoalReturnYards = $fieldGoalReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getQuarterbackHits() : float
    {
        return $this->quarterbackHits;
    }
    /**
     * 
     *
     * @param float $quarterbackHits
     *
     * @return self
     */
    public function setQuarterbackHits(float $quarterbackHits) : self
    {
        $this->quarterbackHits = $quarterbackHits;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTacklesForLoss() : float
    {
        return $this->tacklesForLoss;
    }
    /**
     * 
     *
     * @param float $tacklesForLoss
     *
     * @return self
     */
    public function setTacklesForLoss(float $tacklesForLoss) : self
    {
        $this->tacklesForLoss = $tacklesForLoss;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDefensiveTouchdowns() : float
    {
        return $this->defensiveTouchdowns;
    }
    /**
     * 
     *
     * @param float $defensiveTouchdowns
     *
     * @return self
     */
    public function setDefensiveTouchdowns(float $defensiveTouchdowns) : self
    {
        $this->defensiveTouchdowns = $defensiveTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSpecialTeamsTouchdowns() : float
    {
        return $this->specialTeamsTouchdowns;
    }
    /**
     * 
     *
     * @param float $specialTeamsTouchdowns
     *
     * @return self
     */
    public function setSpecialTeamsTouchdowns(float $specialTeamsTouchdowns) : self
    {
        $this->specialTeamsTouchdowns = $specialTeamsTouchdowns;
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
     * @return string
     */
    public function getStadium() : string
    {
        return $this->stadium;
    }
    /**
     * 
     *
     * @param string $stadium
     *
     * @return self
     */
    public function setStadium(string $stadium) : self
    {
        $this->stadium = $stadium;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTemperature() : int
    {
        return $this->temperature;
    }
    /**
     * 
     *
     * @param int $temperature
     *
     * @return self
     */
    public function setTemperature(int $temperature) : self
    {
        $this->temperature = $temperature;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHumidity() : int
    {
        return $this->humidity;
    }
    /**
     * 
     *
     * @param int $humidity
     *
     * @return self
     */
    public function setHumidity(int $humidity) : self
    {
        $this->humidity = $humidity;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getWindSpeed() : int
    {
        return $this->windSpeed;
    }
    /**
     * 
     *
     * @param int $windSpeed
     *
     * @return self
     */
    public function setWindSpeed(int $windSpeed) : self
    {
        $this->windSpeed = $windSpeed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getThirdDownAttempts() : float
    {
        return $this->thirdDownAttempts;
    }
    /**
     * 
     *
     * @param float $thirdDownAttempts
     *
     * @return self
     */
    public function setThirdDownAttempts(float $thirdDownAttempts) : self
    {
        $this->thirdDownAttempts = $thirdDownAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getThirdDownConversions() : float
    {
        return $this->thirdDownConversions;
    }
    /**
     * 
     *
     * @param float $thirdDownConversions
     *
     * @return self
     */
    public function setThirdDownConversions(float $thirdDownConversions) : self
    {
        $this->thirdDownConversions = $thirdDownConversions;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFourthDownAttempts() : float
    {
        return $this->fourthDownAttempts;
    }
    /**
     * 
     *
     * @param float $fourthDownAttempts
     *
     * @return self
     */
    public function setFourthDownAttempts(float $fourthDownAttempts) : self
    {
        $this->fourthDownAttempts = $fourthDownAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFourthDownConversions() : float
    {
        return $this->fourthDownConversions;
    }
    /**
     * 
     *
     * @param float $fourthDownConversions
     *
     * @return self
     */
    public function setFourthDownConversions(float $fourthDownConversions) : self
    {
        $this->fourthDownConversions = $fourthDownConversions;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPointsAllowedByDefenseSpecialTeams() : float
    {
        return $this->pointsAllowedByDefenseSpecialTeams;
    }
    /**
     * 
     *
     * @param float $pointsAllowedByDefenseSpecialTeams
     *
     * @return self
     */
    public function setPointsAllowedByDefenseSpecialTeams(float $pointsAllowedByDefenseSpecialTeams) : self
    {
        $this->pointsAllowedByDefenseSpecialTeams = $pointsAllowedByDefenseSpecialTeams;
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
    public function getVictivSalary() : int
    {
        return $this->victivSalary;
    }
    /**
     * 
     *
     * @param int $victivSalary
     *
     * @return self
     */
    public function setVictivSalary(int $victivSalary) : self
    {
        $this->victivSalary = $victivSalary;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTwoPointConversionReturns() : float
    {
        return $this->twoPointConversionReturns;
    }
    /**
     * 
     *
     * @param float $twoPointConversionReturns
     *
     * @return self
     */
    public function setTwoPointConversionReturns(float $twoPointConversionReturns) : self
    {
        $this->twoPointConversionReturns = $twoPointConversionReturns;
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
    public function getOffensiveYardsAllowed() : float
    {
        return $this->offensiveYardsAllowed;
    }
    /**
     * 
     *
     * @param float $offensiveYardsAllowed
     *
     * @return self
     */
    public function setOffensiveYardsAllowed(float $offensiveYardsAllowed) : self
    {
        $this->offensiveYardsAllowed = $offensiveYardsAllowed;
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
    public function getFantasyDraftSalary() : int
    {
        return $this->fantasyDraftSalary;
    }
    /**
     * 
     *
     * @param int $fantasyDraftSalary
     *
     * @return self
     */
    public function setFantasyDraftSalary(int $fantasyDraftSalary) : self
    {
        $this->fantasyDraftSalary = $fantasyDraftSalary;
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
    public function getFantasyDraftPosition() : string
    {
        return $this->fantasyDraftPosition;
    }
    /**
     * 
     *
     * @param string $fantasyDraftPosition
     *
     * @return self
     */
    public function setFantasyDraftPosition(string $fantasyDraftPosition) : self
    {
        $this->fantasyDraftPosition = $fantasyDraftPosition;
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
    public function getFantasyDefenseID() : int
    {
        return $this->fantasyDefenseID;
    }
    /**
     * 
     *
     * @param int $fantasyDefenseID
     *
     * @return self
     */
    public function setFantasyDefenseID(int $fantasyDefenseID) : self
    {
        $this->fantasyDefenseID = $fantasyDefenseID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getScoreID() : int
    {
        return $this->scoreID;
    }
    /**
     * 
     *
     * @param int $scoreID
     *
     * @return self
     */
    public function setScoreID(int $scoreID) : self
    {
        $this->scoreID = $scoreID;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFanDuelFantasyPointsAllowed() : float
    {
        return $this->fanDuelFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float $fanDuelFantasyPointsAllowed
     *
     * @return self
     */
    public function setFanDuelFantasyPointsAllowed(float $fanDuelFantasyPointsAllowed) : self
    {
        $this->fanDuelFantasyPointsAllowed = $fanDuelFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFanDuelQuarterbackFantasyPointsAllowed() : float
    {
        return $this->fanDuelQuarterbackFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float $fanDuelQuarterbackFantasyPointsAllowed
     *
     * @return self
     */
    public function setFanDuelQuarterbackFantasyPointsAllowed(float $fanDuelQuarterbackFantasyPointsAllowed) : self
    {
        $this->fanDuelQuarterbackFantasyPointsAllowed = $fanDuelQuarterbackFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFanDuelRunningbackFantasyPointsAllowed() : float
    {
        return $this->fanDuelRunningbackFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float $fanDuelRunningbackFantasyPointsAllowed
     *
     * @return self
     */
    public function setFanDuelRunningbackFantasyPointsAllowed(float $fanDuelRunningbackFantasyPointsAllowed) : self
    {
        $this->fanDuelRunningbackFantasyPointsAllowed = $fanDuelRunningbackFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFanDuelWideReceiverFantasyPointsAllowed() : float
    {
        return $this->fanDuelWideReceiverFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float $fanDuelWideReceiverFantasyPointsAllowed
     *
     * @return self
     */
    public function setFanDuelWideReceiverFantasyPointsAllowed(float $fanDuelWideReceiverFantasyPointsAllowed) : self
    {
        $this->fanDuelWideReceiverFantasyPointsAllowed = $fanDuelWideReceiverFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFanDuelTightEndFantasyPointsAllowed() : float
    {
        return $this->fanDuelTightEndFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float $fanDuelTightEndFantasyPointsAllowed
     *
     * @return self
     */
    public function setFanDuelTightEndFantasyPointsAllowed(float $fanDuelTightEndFantasyPointsAllowed) : self
    {
        $this->fanDuelTightEndFantasyPointsAllowed = $fanDuelTightEndFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFanDuelKickerFantasyPointsAllowed() : float
    {
        return $this->fanDuelKickerFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float $fanDuelKickerFantasyPointsAllowed
     *
     * @return self
     */
    public function setFanDuelKickerFantasyPointsAllowed(float $fanDuelKickerFantasyPointsAllowed) : self
    {
        $this->fanDuelKickerFantasyPointsAllowed = $fanDuelKickerFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDraftKingsFantasyPointsAllowed() : float
    {
        return $this->draftKingsFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float $draftKingsFantasyPointsAllowed
     *
     * @return self
     */
    public function setDraftKingsFantasyPointsAllowed(float $draftKingsFantasyPointsAllowed) : self
    {
        $this->draftKingsFantasyPointsAllowed = $draftKingsFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDraftKingsQuarterbackFantasyPointsAllowed() : float
    {
        return $this->draftKingsQuarterbackFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float $draftKingsQuarterbackFantasyPointsAllowed
     *
     * @return self
     */
    public function setDraftKingsQuarterbackFantasyPointsAllowed(float $draftKingsQuarterbackFantasyPointsAllowed) : self
    {
        $this->draftKingsQuarterbackFantasyPointsAllowed = $draftKingsQuarterbackFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDraftKingsRunningbackFantasyPointsAllowed() : float
    {
        return $this->draftKingsRunningbackFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float $draftKingsRunningbackFantasyPointsAllowed
     *
     * @return self
     */
    public function setDraftKingsRunningbackFantasyPointsAllowed(float $draftKingsRunningbackFantasyPointsAllowed) : self
    {
        $this->draftKingsRunningbackFantasyPointsAllowed = $draftKingsRunningbackFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDraftKingsWideReceiverFantasyPointsAllowed() : float
    {
        return $this->draftKingsWideReceiverFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float $draftKingsWideReceiverFantasyPointsAllowed
     *
     * @return self
     */
    public function setDraftKingsWideReceiverFantasyPointsAllowed(float $draftKingsWideReceiverFantasyPointsAllowed) : self
    {
        $this->draftKingsWideReceiverFantasyPointsAllowed = $draftKingsWideReceiverFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDraftKingsTightEndFantasyPointsAllowed() : float
    {
        return $this->draftKingsTightEndFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float $draftKingsTightEndFantasyPointsAllowed
     *
     * @return self
     */
    public function setDraftKingsTightEndFantasyPointsAllowed(float $draftKingsTightEndFantasyPointsAllowed) : self
    {
        $this->draftKingsTightEndFantasyPointsAllowed = $draftKingsTightEndFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDraftKingsKickerFantasyPointsAllowed() : float
    {
        return $this->draftKingsKickerFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float $draftKingsKickerFantasyPointsAllowed
     *
     * @return self
     */
    public function setDraftKingsKickerFantasyPointsAllowed(float $draftKingsKickerFantasyPointsAllowed) : self
    {
        $this->draftKingsKickerFantasyPointsAllowed = $draftKingsKickerFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getYahooFantasyPointsAllowed() : float
    {
        return $this->yahooFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float $yahooFantasyPointsAllowed
     *
     * @return self
     */
    public function setYahooFantasyPointsAllowed(float $yahooFantasyPointsAllowed) : self
    {
        $this->yahooFantasyPointsAllowed = $yahooFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getYahooQuarterbackFantasyPointsAllowed() : float
    {
        return $this->yahooQuarterbackFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float $yahooQuarterbackFantasyPointsAllowed
     *
     * @return self
     */
    public function setYahooQuarterbackFantasyPointsAllowed(float $yahooQuarterbackFantasyPointsAllowed) : self
    {
        $this->yahooQuarterbackFantasyPointsAllowed = $yahooQuarterbackFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getYahooRunningbackFantasyPointsAllowed() : float
    {
        return $this->yahooRunningbackFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float $yahooRunningbackFantasyPointsAllowed
     *
     * @return self
     */
    public function setYahooRunningbackFantasyPointsAllowed(float $yahooRunningbackFantasyPointsAllowed) : self
    {
        $this->yahooRunningbackFantasyPointsAllowed = $yahooRunningbackFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getYahooWideReceiverFantasyPointsAllowed() : float
    {
        return $this->yahooWideReceiverFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float $yahooWideReceiverFantasyPointsAllowed
     *
     * @return self
     */
    public function setYahooWideReceiverFantasyPointsAllowed(float $yahooWideReceiverFantasyPointsAllowed) : self
    {
        $this->yahooWideReceiverFantasyPointsAllowed = $yahooWideReceiverFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getYahooTightEndFantasyPointsAllowed() : float
    {
        return $this->yahooTightEndFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float $yahooTightEndFantasyPointsAllowed
     *
     * @return self
     */
    public function setYahooTightEndFantasyPointsAllowed(float $yahooTightEndFantasyPointsAllowed) : self
    {
        $this->yahooTightEndFantasyPointsAllowed = $yahooTightEndFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getYahooKickerFantasyPointsAllowed() : float
    {
        return $this->yahooKickerFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float $yahooKickerFantasyPointsAllowed
     *
     * @return self
     */
    public function setYahooKickerFantasyPointsAllowed(float $yahooKickerFantasyPointsAllowed) : self
    {
        $this->yahooKickerFantasyPointsAllowed = $yahooKickerFantasyPointsAllowed;
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
     * @return float
     */
    public function getFantasyDraftFantasyPointsAllowed() : float
    {
        return $this->fantasyDraftFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float $fantasyDraftFantasyPointsAllowed
     *
     * @return self
     */
    public function setFantasyDraftFantasyPointsAllowed(float $fantasyDraftFantasyPointsAllowed) : self
    {
        $this->fantasyDraftFantasyPointsAllowed = $fantasyDraftFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFantasyDraftQuarterbackFantasyPointsAllowed() : float
    {
        return $this->fantasyDraftQuarterbackFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float $fantasyDraftQuarterbackFantasyPointsAllowed
     *
     * @return self
     */
    public function setFantasyDraftQuarterbackFantasyPointsAllowed(float $fantasyDraftQuarterbackFantasyPointsAllowed) : self
    {
        $this->fantasyDraftQuarterbackFantasyPointsAllowed = $fantasyDraftQuarterbackFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFantasyDraftRunningbackFantasyPointsAllowed() : float
    {
        return $this->fantasyDraftRunningbackFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float $fantasyDraftRunningbackFantasyPointsAllowed
     *
     * @return self
     */
    public function setFantasyDraftRunningbackFantasyPointsAllowed(float $fantasyDraftRunningbackFantasyPointsAllowed) : self
    {
        $this->fantasyDraftRunningbackFantasyPointsAllowed = $fantasyDraftRunningbackFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFantasyDraftWideReceiverFantasyPointsAllowed() : float
    {
        return $this->fantasyDraftWideReceiverFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float $fantasyDraftWideReceiverFantasyPointsAllowed
     *
     * @return self
     */
    public function setFantasyDraftWideReceiverFantasyPointsAllowed(float $fantasyDraftWideReceiverFantasyPointsAllowed) : self
    {
        $this->fantasyDraftWideReceiverFantasyPointsAllowed = $fantasyDraftWideReceiverFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFantasyDraftTightEndFantasyPointsAllowed() : float
    {
        return $this->fantasyDraftTightEndFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float $fantasyDraftTightEndFantasyPointsAllowed
     *
     * @return self
     */
    public function setFantasyDraftTightEndFantasyPointsAllowed(float $fantasyDraftTightEndFantasyPointsAllowed) : self
    {
        $this->fantasyDraftTightEndFantasyPointsAllowed = $fantasyDraftTightEndFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFantasyDraftKickerFantasyPointsAllowed() : float
    {
        return $this->fantasyDraftKickerFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float $fantasyDraftKickerFantasyPointsAllowed
     *
     * @return self
     */
    public function setFantasyDraftKickerFantasyPointsAllowed(float $fantasyDraftKickerFantasyPointsAllowed) : self
    {
        $this->fantasyDraftKickerFantasyPointsAllowed = $fantasyDraftKickerFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return ScoringDetail[]
     */
    public function getScoringDetails() : array
    {
        return $this->scoringDetails;
    }
    /**
     * 
     *
     * @param ScoringDetail[] $scoringDetails
     *
     * @return self
     */
    public function setScoringDetails(array $scoringDetails) : self
    {
        $this->scoringDetails = $scoringDetails;
        return $this;
    }
}