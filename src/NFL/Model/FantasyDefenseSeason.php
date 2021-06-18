<?php

namespace Sportsdata\API\NFL\Model;

class FantasyDefenseSeason
{
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
     * @var string|null
     */
    protected $team;
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
     * @var float|null
     */
    protected $blockedKickReturnTouchdowns;
    /**
     * 
     *
     * @var float|null
     */
    protected $fieldGoalReturnTouchdowns;
    /**
     * 
     *
     * @var float|null
     */
    protected $fantasyPointsAllowed;
    /**
     * 
     *
     * @var float|null
     */
    protected $quarterbackFantasyPointsAllowed;
    /**
     * 
     *
     * @var float|null
     */
    protected $runningbackFantasyPointsAllowed;
    /**
     * 
     *
     * @var float|null
     */
    protected $wideReceiverFantasyPointsAllowed;
    /**
     * 
     *
     * @var float|null
     */
    protected $tightEndFantasyPointsAllowed;
    /**
     * 
     *
     * @var float|null
     */
    protected $kickerFantasyPointsAllowed;
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
    protected $blockedKickReturnYards;
    /**
     * 
     *
     * @var float|null
     */
    protected $fieldGoalReturnYards;
    /**
     * 
     *
     * @var float|null
     */
    protected $quarterbackHits;
    /**
     * 
     *
     * @var float|null
     */
    protected $tacklesForLoss;
    /**
     * 
     *
     * @var float|null
     */
    protected $defensiveTouchdowns;
    /**
     * 
     *
     * @var float|null
     */
    protected $specialTeamsTouchdowns;
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
    protected $temperature;
    /**
     * 
     *
     * @var int|null
     */
    protected $humidity;
    /**
     * 
     *
     * @var int|null
     */
    protected $windSpeed;
    /**
     * 
     *
     * @var float|null
     */
    protected $thirdDownAttempts;
    /**
     * 
     *
     * @var float|null
     */
    protected $thirdDownConversions;
    /**
     * 
     *
     * @var float|null
     */
    protected $fourthDownAttempts;
    /**
     * 
     *
     * @var float|null
     */
    protected $fourthDownConversions;
    /**
     * 
     *
     * @var float|null
     */
    protected $pointsAllowedByDefenseSpecialTeams;
    /**
     * 
     *
     * @var float|null
     */
    protected $auctionValue;
    /**
     * 
     *
     * @var float|null
     */
    protected $auctionValuePPR;
    /**
     * 
     *
     * @var float|null
     */
    protected $twoPointConversionReturns;
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
    protected $offensiveYardsAllowed;
    /**
     * 
     *
     * @var int|null
     */
    protected $playerID;
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
    protected $averageDraftPosition;
    /**
     * 
     *
     * @var float|null
     */
    protected $averageDraftPositionPPR;
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
    protected $globalTeamID;
    /**
     * 
     *
     * @var float|null
     */
    protected $fanDuelFantasyPointsAllowed;
    /**
     * 
     *
     * @var float|null
     */
    protected $fanDuelQuarterbackFantasyPointsAllowed;
    /**
     * 
     *
     * @var float|null
     */
    protected $fanDuelRunningbackFantasyPointsAllowed;
    /**
     * 
     *
     * @var float|null
     */
    protected $fanDuelWideReceiverFantasyPointsAllowed;
    /**
     * 
     *
     * @var float|null
     */
    protected $fanDuelTightEndFantasyPointsAllowed;
    /**
     * 
     *
     * @var float|null
     */
    protected $fanDuelKickerFantasyPointsAllowed;
    /**
     * 
     *
     * @var float|null
     */
    protected $draftKingsFantasyPointsAllowed;
    /**
     * 
     *
     * @var float|null
     */
    protected $draftKingsQuarterbackFantasyPointsAllowed;
    /**
     * 
     *
     * @var float|null
     */
    protected $draftKingsRunningbackFantasyPointsAllowed;
    /**
     * 
     *
     * @var float|null
     */
    protected $draftKingsWideReceiverFantasyPointsAllowed;
    /**
     * 
     *
     * @var float|null
     */
    protected $draftKingsTightEndFantasyPointsAllowed;
    /**
     * 
     *
     * @var float|null
     */
    protected $draftKingsKickerFantasyPointsAllowed;
    /**
     * 
     *
     * @var float|null
     */
    protected $yahooFantasyPointsAllowed;
    /**
     * 
     *
     * @var float|null
     */
    protected $yahooQuarterbackFantasyPointsAllowed;
    /**
     * 
     *
     * @var float|null
     */
    protected $yahooRunningbackFantasyPointsAllowed;
    /**
     * 
     *
     * @var float|null
     */
    protected $yahooWideReceiverFantasyPointsAllowed;
    /**
     * 
     *
     * @var float|null
     */
    protected $yahooTightEndFantasyPointsAllowed;
    /**
     * 
     *
     * @var float|null
     */
    protected $yahooKickerFantasyPointsAllowed;
    /**
     * 
     *
     * @var float|null
     */
    protected $fantasyPointsFantasyDraft;
    /**
     * 
     *
     * @var float|null
     */
    protected $fantasyDraftFantasyPointsAllowed;
    /**
     * 
     *
     * @var float|null
     */
    protected $fantasyDraftQuarterbackFantasyPointsAllowed;
    /**
     * 
     *
     * @var float|null
     */
    protected $fantasyDraftRunningbackFantasyPointsAllowed;
    /**
     * 
     *
     * @var float|null
     */
    protected $fantasyDraftWideReceiverFantasyPointsAllowed;
    /**
     * 
     *
     * @var float|null
     */
    protected $fantasyDraftTightEndFantasyPointsAllowed;
    /**
     * 
     *
     * @var float|null
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
     * @var float|null
     */
    protected $averageDraftPositionDynasty;
    /**
     * 
     *
     * @var float|null
     */
    protected $averageDraftPosition2QB;
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
     * @return float|null
     */
    public function getBlockedKickReturnTouchdowns() : ?float
    {
        return $this->blockedKickReturnTouchdowns;
    }
    /**
     * 
     *
     * @param float|null $blockedKickReturnTouchdowns
     *
     * @return self
     */
    public function setBlockedKickReturnTouchdowns(?float $blockedKickReturnTouchdowns) : self
    {
        $this->blockedKickReturnTouchdowns = $blockedKickReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFieldGoalReturnTouchdowns() : ?float
    {
        return $this->fieldGoalReturnTouchdowns;
    }
    /**
     * 
     *
     * @param float|null $fieldGoalReturnTouchdowns
     *
     * @return self
     */
    public function setFieldGoalReturnTouchdowns(?float $fieldGoalReturnTouchdowns) : self
    {
        $this->fieldGoalReturnTouchdowns = $fieldGoalReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFantasyPointsAllowed() : ?float
    {
        return $this->fantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float|null $fantasyPointsAllowed
     *
     * @return self
     */
    public function setFantasyPointsAllowed(?float $fantasyPointsAllowed) : self
    {
        $this->fantasyPointsAllowed = $fantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getQuarterbackFantasyPointsAllowed() : ?float
    {
        return $this->quarterbackFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float|null $quarterbackFantasyPointsAllowed
     *
     * @return self
     */
    public function setQuarterbackFantasyPointsAllowed(?float $quarterbackFantasyPointsAllowed) : self
    {
        $this->quarterbackFantasyPointsAllowed = $quarterbackFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRunningbackFantasyPointsAllowed() : ?float
    {
        return $this->runningbackFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float|null $runningbackFantasyPointsAllowed
     *
     * @return self
     */
    public function setRunningbackFantasyPointsAllowed(?float $runningbackFantasyPointsAllowed) : self
    {
        $this->runningbackFantasyPointsAllowed = $runningbackFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getWideReceiverFantasyPointsAllowed() : ?float
    {
        return $this->wideReceiverFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float|null $wideReceiverFantasyPointsAllowed
     *
     * @return self
     */
    public function setWideReceiverFantasyPointsAllowed(?float $wideReceiverFantasyPointsAllowed) : self
    {
        $this->wideReceiverFantasyPointsAllowed = $wideReceiverFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTightEndFantasyPointsAllowed() : ?float
    {
        return $this->tightEndFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float|null $tightEndFantasyPointsAllowed
     *
     * @return self
     */
    public function setTightEndFantasyPointsAllowed(?float $tightEndFantasyPointsAllowed) : self
    {
        $this->tightEndFantasyPointsAllowed = $tightEndFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getKickerFantasyPointsAllowed() : ?float
    {
        return $this->kickerFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float|null $kickerFantasyPointsAllowed
     *
     * @return self
     */
    public function setKickerFantasyPointsAllowed(?float $kickerFantasyPointsAllowed) : self
    {
        $this->kickerFantasyPointsAllowed = $kickerFantasyPointsAllowed;
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
    public function getBlockedKickReturnYards() : ?float
    {
        return $this->blockedKickReturnYards;
    }
    /**
     * 
     *
     * @param float|null $blockedKickReturnYards
     *
     * @return self
     */
    public function setBlockedKickReturnYards(?float $blockedKickReturnYards) : self
    {
        $this->blockedKickReturnYards = $blockedKickReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFieldGoalReturnYards() : ?float
    {
        return $this->fieldGoalReturnYards;
    }
    /**
     * 
     *
     * @param float|null $fieldGoalReturnYards
     *
     * @return self
     */
    public function setFieldGoalReturnYards(?float $fieldGoalReturnYards) : self
    {
        $this->fieldGoalReturnYards = $fieldGoalReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getQuarterbackHits() : ?float
    {
        return $this->quarterbackHits;
    }
    /**
     * 
     *
     * @param float|null $quarterbackHits
     *
     * @return self
     */
    public function setQuarterbackHits(?float $quarterbackHits) : self
    {
        $this->quarterbackHits = $quarterbackHits;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTacklesForLoss() : ?float
    {
        return $this->tacklesForLoss;
    }
    /**
     * 
     *
     * @param float|null $tacklesForLoss
     *
     * @return self
     */
    public function setTacklesForLoss(?float $tacklesForLoss) : self
    {
        $this->tacklesForLoss = $tacklesForLoss;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDefensiveTouchdowns() : ?float
    {
        return $this->defensiveTouchdowns;
    }
    /**
     * 
     *
     * @param float|null $defensiveTouchdowns
     *
     * @return self
     */
    public function setDefensiveTouchdowns(?float $defensiveTouchdowns) : self
    {
        $this->defensiveTouchdowns = $defensiveTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSpecialTeamsTouchdowns() : ?float
    {
        return $this->specialTeamsTouchdowns;
    }
    /**
     * 
     *
     * @param float|null $specialTeamsTouchdowns
     *
     * @return self
     */
    public function setSpecialTeamsTouchdowns(?float $specialTeamsTouchdowns) : self
    {
        $this->specialTeamsTouchdowns = $specialTeamsTouchdowns;
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
    public function getTemperature() : ?int
    {
        return $this->temperature;
    }
    /**
     * 
     *
     * @param int|null $temperature
     *
     * @return self
     */
    public function setTemperature(?int $temperature) : self
    {
        $this->temperature = $temperature;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHumidity() : ?int
    {
        return $this->humidity;
    }
    /**
     * 
     *
     * @param int|null $humidity
     *
     * @return self
     */
    public function setHumidity(?int $humidity) : self
    {
        $this->humidity = $humidity;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getWindSpeed() : ?int
    {
        return $this->windSpeed;
    }
    /**
     * 
     *
     * @param int|null $windSpeed
     *
     * @return self
     */
    public function setWindSpeed(?int $windSpeed) : self
    {
        $this->windSpeed = $windSpeed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getThirdDownAttempts() : ?float
    {
        return $this->thirdDownAttempts;
    }
    /**
     * 
     *
     * @param float|null $thirdDownAttempts
     *
     * @return self
     */
    public function setThirdDownAttempts(?float $thirdDownAttempts) : self
    {
        $this->thirdDownAttempts = $thirdDownAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getThirdDownConversions() : ?float
    {
        return $this->thirdDownConversions;
    }
    /**
     * 
     *
     * @param float|null $thirdDownConversions
     *
     * @return self
     */
    public function setThirdDownConversions(?float $thirdDownConversions) : self
    {
        $this->thirdDownConversions = $thirdDownConversions;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFourthDownAttempts() : ?float
    {
        return $this->fourthDownAttempts;
    }
    /**
     * 
     *
     * @param float|null $fourthDownAttempts
     *
     * @return self
     */
    public function setFourthDownAttempts(?float $fourthDownAttempts) : self
    {
        $this->fourthDownAttempts = $fourthDownAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFourthDownConversions() : ?float
    {
        return $this->fourthDownConversions;
    }
    /**
     * 
     *
     * @param float|null $fourthDownConversions
     *
     * @return self
     */
    public function setFourthDownConversions(?float $fourthDownConversions) : self
    {
        $this->fourthDownConversions = $fourthDownConversions;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPointsAllowedByDefenseSpecialTeams() : ?float
    {
        return $this->pointsAllowedByDefenseSpecialTeams;
    }
    /**
     * 
     *
     * @param float|null $pointsAllowedByDefenseSpecialTeams
     *
     * @return self
     */
    public function setPointsAllowedByDefenseSpecialTeams(?float $pointsAllowedByDefenseSpecialTeams) : self
    {
        $this->pointsAllowedByDefenseSpecialTeams = $pointsAllowedByDefenseSpecialTeams;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAuctionValue() : ?float
    {
        return $this->auctionValue;
    }
    /**
     * 
     *
     * @param float|null $auctionValue
     *
     * @return self
     */
    public function setAuctionValue(?float $auctionValue) : self
    {
        $this->auctionValue = $auctionValue;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAuctionValuePPR() : ?float
    {
        return $this->auctionValuePPR;
    }
    /**
     * 
     *
     * @param float|null $auctionValuePPR
     *
     * @return self
     */
    public function setAuctionValuePPR(?float $auctionValuePPR) : self
    {
        $this->auctionValuePPR = $auctionValuePPR;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTwoPointConversionReturns() : ?float
    {
        return $this->twoPointConversionReturns;
    }
    /**
     * 
     *
     * @param float|null $twoPointConversionReturns
     *
     * @return self
     */
    public function setTwoPointConversionReturns(?float $twoPointConversionReturns) : self
    {
        $this->twoPointConversionReturns = $twoPointConversionReturns;
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
    public function getOffensiveYardsAllowed() : ?float
    {
        return $this->offensiveYardsAllowed;
    }
    /**
     * 
     *
     * @param float|null $offensiveYardsAllowed
     *
     * @return self
     */
    public function setOffensiveYardsAllowed(?float $offensiveYardsAllowed) : self
    {
        $this->offensiveYardsAllowed = $offensiveYardsAllowed;
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
    public function getAverageDraftPosition() : ?float
    {
        return $this->averageDraftPosition;
    }
    /**
     * 
     *
     * @param float|null $averageDraftPosition
     *
     * @return self
     */
    public function setAverageDraftPosition(?float $averageDraftPosition) : self
    {
        $this->averageDraftPosition = $averageDraftPosition;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAverageDraftPositionPPR() : ?float
    {
        return $this->averageDraftPositionPPR;
    }
    /**
     * 
     *
     * @param float|null $averageDraftPositionPPR
     *
     * @return self
     */
    public function setAverageDraftPositionPPR(?float $averageDraftPositionPPR) : self
    {
        $this->averageDraftPositionPPR = $averageDraftPositionPPR;
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
     * @return float|null
     */
    public function getFanDuelFantasyPointsAllowed() : ?float
    {
        return $this->fanDuelFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float|null $fanDuelFantasyPointsAllowed
     *
     * @return self
     */
    public function setFanDuelFantasyPointsAllowed(?float $fanDuelFantasyPointsAllowed) : self
    {
        $this->fanDuelFantasyPointsAllowed = $fanDuelFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFanDuelQuarterbackFantasyPointsAllowed() : ?float
    {
        return $this->fanDuelQuarterbackFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float|null $fanDuelQuarterbackFantasyPointsAllowed
     *
     * @return self
     */
    public function setFanDuelQuarterbackFantasyPointsAllowed(?float $fanDuelQuarterbackFantasyPointsAllowed) : self
    {
        $this->fanDuelQuarterbackFantasyPointsAllowed = $fanDuelQuarterbackFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFanDuelRunningbackFantasyPointsAllowed() : ?float
    {
        return $this->fanDuelRunningbackFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float|null $fanDuelRunningbackFantasyPointsAllowed
     *
     * @return self
     */
    public function setFanDuelRunningbackFantasyPointsAllowed(?float $fanDuelRunningbackFantasyPointsAllowed) : self
    {
        $this->fanDuelRunningbackFantasyPointsAllowed = $fanDuelRunningbackFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFanDuelWideReceiverFantasyPointsAllowed() : ?float
    {
        return $this->fanDuelWideReceiverFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float|null $fanDuelWideReceiverFantasyPointsAllowed
     *
     * @return self
     */
    public function setFanDuelWideReceiverFantasyPointsAllowed(?float $fanDuelWideReceiverFantasyPointsAllowed) : self
    {
        $this->fanDuelWideReceiverFantasyPointsAllowed = $fanDuelWideReceiverFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFanDuelTightEndFantasyPointsAllowed() : ?float
    {
        return $this->fanDuelTightEndFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float|null $fanDuelTightEndFantasyPointsAllowed
     *
     * @return self
     */
    public function setFanDuelTightEndFantasyPointsAllowed(?float $fanDuelTightEndFantasyPointsAllowed) : self
    {
        $this->fanDuelTightEndFantasyPointsAllowed = $fanDuelTightEndFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFanDuelKickerFantasyPointsAllowed() : ?float
    {
        return $this->fanDuelKickerFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float|null $fanDuelKickerFantasyPointsAllowed
     *
     * @return self
     */
    public function setFanDuelKickerFantasyPointsAllowed(?float $fanDuelKickerFantasyPointsAllowed) : self
    {
        $this->fanDuelKickerFantasyPointsAllowed = $fanDuelKickerFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDraftKingsFantasyPointsAllowed() : ?float
    {
        return $this->draftKingsFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float|null $draftKingsFantasyPointsAllowed
     *
     * @return self
     */
    public function setDraftKingsFantasyPointsAllowed(?float $draftKingsFantasyPointsAllowed) : self
    {
        $this->draftKingsFantasyPointsAllowed = $draftKingsFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDraftKingsQuarterbackFantasyPointsAllowed() : ?float
    {
        return $this->draftKingsQuarterbackFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float|null $draftKingsQuarterbackFantasyPointsAllowed
     *
     * @return self
     */
    public function setDraftKingsQuarterbackFantasyPointsAllowed(?float $draftKingsQuarterbackFantasyPointsAllowed) : self
    {
        $this->draftKingsQuarterbackFantasyPointsAllowed = $draftKingsQuarterbackFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDraftKingsRunningbackFantasyPointsAllowed() : ?float
    {
        return $this->draftKingsRunningbackFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float|null $draftKingsRunningbackFantasyPointsAllowed
     *
     * @return self
     */
    public function setDraftKingsRunningbackFantasyPointsAllowed(?float $draftKingsRunningbackFantasyPointsAllowed) : self
    {
        $this->draftKingsRunningbackFantasyPointsAllowed = $draftKingsRunningbackFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDraftKingsWideReceiverFantasyPointsAllowed() : ?float
    {
        return $this->draftKingsWideReceiverFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float|null $draftKingsWideReceiverFantasyPointsAllowed
     *
     * @return self
     */
    public function setDraftKingsWideReceiverFantasyPointsAllowed(?float $draftKingsWideReceiverFantasyPointsAllowed) : self
    {
        $this->draftKingsWideReceiverFantasyPointsAllowed = $draftKingsWideReceiverFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDraftKingsTightEndFantasyPointsAllowed() : ?float
    {
        return $this->draftKingsTightEndFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float|null $draftKingsTightEndFantasyPointsAllowed
     *
     * @return self
     */
    public function setDraftKingsTightEndFantasyPointsAllowed(?float $draftKingsTightEndFantasyPointsAllowed) : self
    {
        $this->draftKingsTightEndFantasyPointsAllowed = $draftKingsTightEndFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDraftKingsKickerFantasyPointsAllowed() : ?float
    {
        return $this->draftKingsKickerFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float|null $draftKingsKickerFantasyPointsAllowed
     *
     * @return self
     */
    public function setDraftKingsKickerFantasyPointsAllowed(?float $draftKingsKickerFantasyPointsAllowed) : self
    {
        $this->draftKingsKickerFantasyPointsAllowed = $draftKingsKickerFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getYahooFantasyPointsAllowed() : ?float
    {
        return $this->yahooFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float|null $yahooFantasyPointsAllowed
     *
     * @return self
     */
    public function setYahooFantasyPointsAllowed(?float $yahooFantasyPointsAllowed) : self
    {
        $this->yahooFantasyPointsAllowed = $yahooFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getYahooQuarterbackFantasyPointsAllowed() : ?float
    {
        return $this->yahooQuarterbackFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float|null $yahooQuarterbackFantasyPointsAllowed
     *
     * @return self
     */
    public function setYahooQuarterbackFantasyPointsAllowed(?float $yahooQuarterbackFantasyPointsAllowed) : self
    {
        $this->yahooQuarterbackFantasyPointsAllowed = $yahooQuarterbackFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getYahooRunningbackFantasyPointsAllowed() : ?float
    {
        return $this->yahooRunningbackFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float|null $yahooRunningbackFantasyPointsAllowed
     *
     * @return self
     */
    public function setYahooRunningbackFantasyPointsAllowed(?float $yahooRunningbackFantasyPointsAllowed) : self
    {
        $this->yahooRunningbackFantasyPointsAllowed = $yahooRunningbackFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getYahooWideReceiverFantasyPointsAllowed() : ?float
    {
        return $this->yahooWideReceiverFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float|null $yahooWideReceiverFantasyPointsAllowed
     *
     * @return self
     */
    public function setYahooWideReceiverFantasyPointsAllowed(?float $yahooWideReceiverFantasyPointsAllowed) : self
    {
        $this->yahooWideReceiverFantasyPointsAllowed = $yahooWideReceiverFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getYahooTightEndFantasyPointsAllowed() : ?float
    {
        return $this->yahooTightEndFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float|null $yahooTightEndFantasyPointsAllowed
     *
     * @return self
     */
    public function setYahooTightEndFantasyPointsAllowed(?float $yahooTightEndFantasyPointsAllowed) : self
    {
        $this->yahooTightEndFantasyPointsAllowed = $yahooTightEndFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getYahooKickerFantasyPointsAllowed() : ?float
    {
        return $this->yahooKickerFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float|null $yahooKickerFantasyPointsAllowed
     *
     * @return self
     */
    public function setYahooKickerFantasyPointsAllowed(?float $yahooKickerFantasyPointsAllowed) : self
    {
        $this->yahooKickerFantasyPointsAllowed = $yahooKickerFantasyPointsAllowed;
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
     * @return float|null
     */
    public function getFantasyDraftFantasyPointsAllowed() : ?float
    {
        return $this->fantasyDraftFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float|null $fantasyDraftFantasyPointsAllowed
     *
     * @return self
     */
    public function setFantasyDraftFantasyPointsAllowed(?float $fantasyDraftFantasyPointsAllowed) : self
    {
        $this->fantasyDraftFantasyPointsAllowed = $fantasyDraftFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFantasyDraftQuarterbackFantasyPointsAllowed() : ?float
    {
        return $this->fantasyDraftQuarterbackFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float|null $fantasyDraftQuarterbackFantasyPointsAllowed
     *
     * @return self
     */
    public function setFantasyDraftQuarterbackFantasyPointsAllowed(?float $fantasyDraftQuarterbackFantasyPointsAllowed) : self
    {
        $this->fantasyDraftQuarterbackFantasyPointsAllowed = $fantasyDraftQuarterbackFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFantasyDraftRunningbackFantasyPointsAllowed() : ?float
    {
        return $this->fantasyDraftRunningbackFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float|null $fantasyDraftRunningbackFantasyPointsAllowed
     *
     * @return self
     */
    public function setFantasyDraftRunningbackFantasyPointsAllowed(?float $fantasyDraftRunningbackFantasyPointsAllowed) : self
    {
        $this->fantasyDraftRunningbackFantasyPointsAllowed = $fantasyDraftRunningbackFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFantasyDraftWideReceiverFantasyPointsAllowed() : ?float
    {
        return $this->fantasyDraftWideReceiverFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float|null $fantasyDraftWideReceiverFantasyPointsAllowed
     *
     * @return self
     */
    public function setFantasyDraftWideReceiverFantasyPointsAllowed(?float $fantasyDraftWideReceiverFantasyPointsAllowed) : self
    {
        $this->fantasyDraftWideReceiverFantasyPointsAllowed = $fantasyDraftWideReceiverFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFantasyDraftTightEndFantasyPointsAllowed() : ?float
    {
        return $this->fantasyDraftTightEndFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float|null $fantasyDraftTightEndFantasyPointsAllowed
     *
     * @return self
     */
    public function setFantasyDraftTightEndFantasyPointsAllowed(?float $fantasyDraftTightEndFantasyPointsAllowed) : self
    {
        $this->fantasyDraftTightEndFantasyPointsAllowed = $fantasyDraftTightEndFantasyPointsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFantasyDraftKickerFantasyPointsAllowed() : ?float
    {
        return $this->fantasyDraftKickerFantasyPointsAllowed;
    }
    /**
     * 
     *
     * @param float|null $fantasyDraftKickerFantasyPointsAllowed
     *
     * @return self
     */
    public function setFantasyDraftKickerFantasyPointsAllowed(?float $fantasyDraftKickerFantasyPointsAllowed) : self
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
    /**
     * 
     *
     * @return float|null
     */
    public function getAverageDraftPositionDynasty() : ?float
    {
        return $this->averageDraftPositionDynasty;
    }
    /**
     * 
     *
     * @param float|null $averageDraftPositionDynasty
     *
     * @return self
     */
    public function setAverageDraftPositionDynasty(?float $averageDraftPositionDynasty) : self
    {
        $this->averageDraftPositionDynasty = $averageDraftPositionDynasty;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAverageDraftPosition2QB() : ?float
    {
        return $this->averageDraftPosition2QB;
    }
    /**
     * 
     *
     * @param float|null $averageDraftPosition2QB
     *
     * @return self
     */
    public function setAverageDraftPosition2QB(?float $averageDraftPosition2QB) : self
    {
        $this->averageDraftPosition2QB = $averageDraftPosition2QB;
        return $this;
    }
}