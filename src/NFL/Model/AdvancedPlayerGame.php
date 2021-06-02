<?php

namespace Sportsdata\API\NFL\Model;

class AdvancedPlayerGame
{
    /**
     * 
     *
     * @var int
     */
    protected $playerID;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var int
     */
    protected $teamID;
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
     * @var string
     */
    protected $fantasyPosition;
    /**
     * 
     *
     * @var string
     */
    protected $positionGroup;
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
     * @var int
     */
    protected $week;
    /**
     * 
     *
     * @var string
     */
    protected $opponent;
    /**
     * 
     *
     * @var int
     */
    protected $opponentID;
    /**
     * 
     *
     * @var float
     */
    protected $snaps;
    /**
     * 
     *
     * @var float
     */
    protected $snapShare;
    /**
     * 
     *
     * @var float
     */
    protected $passingAttempts;
    /**
     * 
     *
     * @var float
     */
    protected $completions;
    /**
     * 
     *
     * @var float
     */
    protected $completionPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $passingYards;
    /**
     * 
     *
     * @var float
     */
    protected $passingYardsPerAttempt;
    /**
     * 
     *
     * @var float
     */
    protected $passingTouchdowns;
    /**
     * 
     *
     * @var float
     */
    protected $passingTDs;
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
    protected $redZoneAttempts;
    /**
     * 
     *
     * @var float
     */
    protected $redZoneCompletionPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $deepBallAttempts;
    /**
     * 
     *
     * @var float
     */
    protected $deepBallCompletions;
    /**
     * 
     *
     * @var float
     */
    protected $carries;
    /**
     * 
     *
     * @var float
     */
    protected $rushingYards;
    /**
     * 
     *
     * @var float
     */
    protected $rushingTouchdowns;
    /**
     * 
     *
     * @var float
     */
    protected $targets;
    /**
     * 
     *
     * @var float
     */
    protected $receptions;
    /**
     * 
     *
     * @var float
     */
    protected $receivingYards;
    /**
     * 
     *
     * @var float
     */
    protected $receivingTouchdowns;
    /**
     * 
     *
     * @var float
     */
    protected $totalYards;
    /**
     * 
     *
     * @var float
     */
    protected $totalTouches;
    /**
     * 
     *
     * @var float
     */
    protected $yardsPerTouch;
    /**
     * 
     *
     * @var float
     */
    protected $opportunities;
    /**
     * 
     *
     * @var float
     */
    protected $opportunityShare;
    /**
     * 
     *
     * @var float
     */
    protected $totalTouchdowns;
    /**
     * 
     *
     * @var float
     */
    protected $evadedTackles;
    /**
     * 
     *
     * @var float
     */
    protected $jukeRate;
    /**
     * 
     *
     * @var float
     */
    protected $catchRate;
    /**
     * 
     *
     * @var float
     */
    protected $targetShare;
    /**
     * 
     *
     * @var float
     */
    protected $hogRate;
    /**
     * 
     *
     * @var float
     */
    protected $contestedTargets;
    /**
     * 
     *
     * @var float
     */
    protected $contestedCatches;
    /**
     * 
     *
     * @var float
     */
    protected $redZoneCarries;
    /**
     * 
     *
     * @var float
     */
    protected $redZoneTargets;
    /**
     * 
     *
     * @var float
     */
    protected $redZoneOpportunities;
    /**
     * 
     *
     * @var float
     */
    protected $redZoneTouches;
    /**
     * 
     *
     * @var float
     */
    protected $redZoneReceptions;
    /**
     * 
     *
     * @var float
     */
    protected $redZoneCatchRate;
    /**
     * 
     *
     * @var float
     */
    protected $yardsPerCarry;
    /**
     * 
     *
     * @var float
     */
    protected $yardsPerTarget;
    /**
     * 
     *
     * @var float
     */
    protected $yardsPerOpportunity;
    /**
     * 
     *
     * @var float
     */
    protected $yardsPerReception;
    /**
     * 
     *
     * @var float
     */
    protected $endZoneTargets;
    /**
     * 
     *
     * @var float
     */
    protected $routesRun;
    /**
     * 
     *
     * @var float
     */
    protected $burns;
    /**
     * 
     *
     * @var float
     */
    protected $hurries;
    /**
     * 
     *
     * @var float
     */
    protected $yardsCreated;
    /**
     * 
     *
     * @var float
     */
    protected $passAttemptsInside5;
    /**
     * 
     *
     * @var float
     */
    protected $passAttemptsInside10;
    /**
     * 
     *
     * @var float
     */
    protected $carriesInside5;
    /**
     * 
     *
     * @var float
     */
    protected $carriesInside10;
    /**
     * 
     *
     * @var float
     */
    protected $targetsInside5;
    /**
     * 
     *
     * @var float
     */
    protected $targetsInside10;
    /**
     * 
     *
     * @var float
     */
    protected $primaryCorner;
    /**
     * 
     *
     * @var float
     */
    protected $routesDefended;
    /**
     * 
     *
     * @var float
     */
    protected $targetsAllowed;
    /**
     * 
     *
     * @var float
     */
    protected $receptionsAllowed;
    /**
     * 
     *
     * @var float
     */
    protected $yardsAllowed;
    /**
     * 
     *
     * @var float
     */
    protected $burnsCB;
    /**
     * 
     *
     * @var float
     */
    protected $passBreakups;
    /**
     * 
     *
     * @var float
     */
    protected $interceptionsCB;
    /**
     * 
     *
     * @var float
     */
    protected $wRMatchup;
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
    protected $fantasyPointsRank;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyPointsPerAttempt;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyPointsPerTarget;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyPointsPerOpportunity;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyPointsAllowed;
    /**
     * 
     *
     * @var int
     */
    protected $fantasyPointsAllowedWeekRank;
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
     * @return string
     */
    public function getFantasyPosition() : string
    {
        return $this->fantasyPosition;
    }
    /**
     * 
     *
     * @param string $fantasyPosition
     *
     * @return self
     */
    public function setFantasyPosition(string $fantasyPosition) : self
    {
        $this->fantasyPosition = $fantasyPosition;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPositionGroup() : string
    {
        return $this->positionGroup;
    }
    /**
     * 
     *
     * @param string $positionGroup
     *
     * @return self
     */
    public function setPositionGroup(string $positionGroup) : self
    {
        $this->positionGroup = $positionGroup;
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
     * @return float
     */
    public function getSnaps() : float
    {
        return $this->snaps;
    }
    /**
     * 
     *
     * @param float $snaps
     *
     * @return self
     */
    public function setSnaps(float $snaps) : self
    {
        $this->snaps = $snaps;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSnapShare() : float
    {
        return $this->snapShare;
    }
    /**
     * 
     *
     * @param float $snapShare
     *
     * @return self
     */
    public function setSnapShare(float $snapShare) : self
    {
        $this->snapShare = $snapShare;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPassingAttempts() : float
    {
        return $this->passingAttempts;
    }
    /**
     * 
     *
     * @param float $passingAttempts
     *
     * @return self
     */
    public function setPassingAttempts(float $passingAttempts) : self
    {
        $this->passingAttempts = $passingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCompletions() : float
    {
        return $this->completions;
    }
    /**
     * 
     *
     * @param float $completions
     *
     * @return self
     */
    public function setCompletions(float $completions) : self
    {
        $this->completions = $completions;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCompletionPercentage() : float
    {
        return $this->completionPercentage;
    }
    /**
     * 
     *
     * @param float $completionPercentage
     *
     * @return self
     */
    public function setCompletionPercentage(float $completionPercentage) : self
    {
        $this->completionPercentage = $completionPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPassingYards() : float
    {
        return $this->passingYards;
    }
    /**
     * 
     *
     * @param float $passingYards
     *
     * @return self
     */
    public function setPassingYards(float $passingYards) : self
    {
        $this->passingYards = $passingYards;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPassingYardsPerAttempt() : float
    {
        return $this->passingYardsPerAttempt;
    }
    /**
     * 
     *
     * @param float $passingYardsPerAttempt
     *
     * @return self
     */
    public function setPassingYardsPerAttempt(float $passingYardsPerAttempt) : self
    {
        $this->passingYardsPerAttempt = $passingYardsPerAttempt;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPassingTouchdowns() : float
    {
        return $this->passingTouchdowns;
    }
    /**
     * 
     *
     * @param float $passingTouchdowns
     *
     * @return self
     */
    public function setPassingTouchdowns(float $passingTouchdowns) : self
    {
        $this->passingTouchdowns = $passingTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPassingTDs() : float
    {
        return $this->passingTDs;
    }
    /**
     * 
     *
     * @param float $passingTDs
     *
     * @return self
     */
    public function setPassingTDs(float $passingTDs) : self
    {
        $this->passingTDs = $passingTDs;
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
    public function getRedZoneAttempts() : float
    {
        return $this->redZoneAttempts;
    }
    /**
     * 
     *
     * @param float $redZoneAttempts
     *
     * @return self
     */
    public function setRedZoneAttempts(float $redZoneAttempts) : self
    {
        $this->redZoneAttempts = $redZoneAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRedZoneCompletionPercentage() : float
    {
        return $this->redZoneCompletionPercentage;
    }
    /**
     * 
     *
     * @param float $redZoneCompletionPercentage
     *
     * @return self
     */
    public function setRedZoneCompletionPercentage(float $redZoneCompletionPercentage) : self
    {
        $this->redZoneCompletionPercentage = $redZoneCompletionPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDeepBallAttempts() : float
    {
        return $this->deepBallAttempts;
    }
    /**
     * 
     *
     * @param float $deepBallAttempts
     *
     * @return self
     */
    public function setDeepBallAttempts(float $deepBallAttempts) : self
    {
        $this->deepBallAttempts = $deepBallAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDeepBallCompletions() : float
    {
        return $this->deepBallCompletions;
    }
    /**
     * 
     *
     * @param float $deepBallCompletions
     *
     * @return self
     */
    public function setDeepBallCompletions(float $deepBallCompletions) : self
    {
        $this->deepBallCompletions = $deepBallCompletions;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCarries() : float
    {
        return $this->carries;
    }
    /**
     * 
     *
     * @param float $carries
     *
     * @return self
     */
    public function setCarries(float $carries) : self
    {
        $this->carries = $carries;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRushingYards() : float
    {
        return $this->rushingYards;
    }
    /**
     * 
     *
     * @param float $rushingYards
     *
     * @return self
     */
    public function setRushingYards(float $rushingYards) : self
    {
        $this->rushingYards = $rushingYards;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRushingTouchdowns() : float
    {
        return $this->rushingTouchdowns;
    }
    /**
     * 
     *
     * @param float $rushingTouchdowns
     *
     * @return self
     */
    public function setRushingTouchdowns(float $rushingTouchdowns) : self
    {
        $this->rushingTouchdowns = $rushingTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTargets() : float
    {
        return $this->targets;
    }
    /**
     * 
     *
     * @param float $targets
     *
     * @return self
     */
    public function setTargets(float $targets) : self
    {
        $this->targets = $targets;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getReceptions() : float
    {
        return $this->receptions;
    }
    /**
     * 
     *
     * @param float $receptions
     *
     * @return self
     */
    public function setReceptions(float $receptions) : self
    {
        $this->receptions = $receptions;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getReceivingYards() : float
    {
        return $this->receivingYards;
    }
    /**
     * 
     *
     * @param float $receivingYards
     *
     * @return self
     */
    public function setReceivingYards(float $receivingYards) : self
    {
        $this->receivingYards = $receivingYards;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getReceivingTouchdowns() : float
    {
        return $this->receivingTouchdowns;
    }
    /**
     * 
     *
     * @param float $receivingTouchdowns
     *
     * @return self
     */
    public function setReceivingTouchdowns(float $receivingTouchdowns) : self
    {
        $this->receivingTouchdowns = $receivingTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalYards() : float
    {
        return $this->totalYards;
    }
    /**
     * 
     *
     * @param float $totalYards
     *
     * @return self
     */
    public function setTotalYards(float $totalYards) : self
    {
        $this->totalYards = $totalYards;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalTouches() : float
    {
        return $this->totalTouches;
    }
    /**
     * 
     *
     * @param float $totalTouches
     *
     * @return self
     */
    public function setTotalTouches(float $totalTouches) : self
    {
        $this->totalTouches = $totalTouches;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getYardsPerTouch() : float
    {
        return $this->yardsPerTouch;
    }
    /**
     * 
     *
     * @param float $yardsPerTouch
     *
     * @return self
     */
    public function setYardsPerTouch(float $yardsPerTouch) : self
    {
        $this->yardsPerTouch = $yardsPerTouch;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOpportunities() : float
    {
        return $this->opportunities;
    }
    /**
     * 
     *
     * @param float $opportunities
     *
     * @return self
     */
    public function setOpportunities(float $opportunities) : self
    {
        $this->opportunities = $opportunities;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOpportunityShare() : float
    {
        return $this->opportunityShare;
    }
    /**
     * 
     *
     * @param float $opportunityShare
     *
     * @return self
     */
    public function setOpportunityShare(float $opportunityShare) : self
    {
        $this->opportunityShare = $opportunityShare;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalTouchdowns() : float
    {
        return $this->totalTouchdowns;
    }
    /**
     * 
     *
     * @param float $totalTouchdowns
     *
     * @return self
     */
    public function setTotalTouchdowns(float $totalTouchdowns) : self
    {
        $this->totalTouchdowns = $totalTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getEvadedTackles() : float
    {
        return $this->evadedTackles;
    }
    /**
     * 
     *
     * @param float $evadedTackles
     *
     * @return self
     */
    public function setEvadedTackles(float $evadedTackles) : self
    {
        $this->evadedTackles = $evadedTackles;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getJukeRate() : float
    {
        return $this->jukeRate;
    }
    /**
     * 
     *
     * @param float $jukeRate
     *
     * @return self
     */
    public function setJukeRate(float $jukeRate) : self
    {
        $this->jukeRate = $jukeRate;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCatchRate() : float
    {
        return $this->catchRate;
    }
    /**
     * 
     *
     * @param float $catchRate
     *
     * @return self
     */
    public function setCatchRate(float $catchRate) : self
    {
        $this->catchRate = $catchRate;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTargetShare() : float
    {
        return $this->targetShare;
    }
    /**
     * 
     *
     * @param float $targetShare
     *
     * @return self
     */
    public function setTargetShare(float $targetShare) : self
    {
        $this->targetShare = $targetShare;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHogRate() : float
    {
        return $this->hogRate;
    }
    /**
     * 
     *
     * @param float $hogRate
     *
     * @return self
     */
    public function setHogRate(float $hogRate) : self
    {
        $this->hogRate = $hogRate;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getContestedTargets() : float
    {
        return $this->contestedTargets;
    }
    /**
     * 
     *
     * @param float $contestedTargets
     *
     * @return self
     */
    public function setContestedTargets(float $contestedTargets) : self
    {
        $this->contestedTargets = $contestedTargets;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getContestedCatches() : float
    {
        return $this->contestedCatches;
    }
    /**
     * 
     *
     * @param float $contestedCatches
     *
     * @return self
     */
    public function setContestedCatches(float $contestedCatches) : self
    {
        $this->contestedCatches = $contestedCatches;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRedZoneCarries() : float
    {
        return $this->redZoneCarries;
    }
    /**
     * 
     *
     * @param float $redZoneCarries
     *
     * @return self
     */
    public function setRedZoneCarries(float $redZoneCarries) : self
    {
        $this->redZoneCarries = $redZoneCarries;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRedZoneTargets() : float
    {
        return $this->redZoneTargets;
    }
    /**
     * 
     *
     * @param float $redZoneTargets
     *
     * @return self
     */
    public function setRedZoneTargets(float $redZoneTargets) : self
    {
        $this->redZoneTargets = $redZoneTargets;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRedZoneOpportunities() : float
    {
        return $this->redZoneOpportunities;
    }
    /**
     * 
     *
     * @param float $redZoneOpportunities
     *
     * @return self
     */
    public function setRedZoneOpportunities(float $redZoneOpportunities) : self
    {
        $this->redZoneOpportunities = $redZoneOpportunities;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRedZoneTouches() : float
    {
        return $this->redZoneTouches;
    }
    /**
     * 
     *
     * @param float $redZoneTouches
     *
     * @return self
     */
    public function setRedZoneTouches(float $redZoneTouches) : self
    {
        $this->redZoneTouches = $redZoneTouches;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRedZoneReceptions() : float
    {
        return $this->redZoneReceptions;
    }
    /**
     * 
     *
     * @param float $redZoneReceptions
     *
     * @return self
     */
    public function setRedZoneReceptions(float $redZoneReceptions) : self
    {
        $this->redZoneReceptions = $redZoneReceptions;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRedZoneCatchRate() : float
    {
        return $this->redZoneCatchRate;
    }
    /**
     * 
     *
     * @param float $redZoneCatchRate
     *
     * @return self
     */
    public function setRedZoneCatchRate(float $redZoneCatchRate) : self
    {
        $this->redZoneCatchRate = $redZoneCatchRate;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getYardsPerCarry() : float
    {
        return $this->yardsPerCarry;
    }
    /**
     * 
     *
     * @param float $yardsPerCarry
     *
     * @return self
     */
    public function setYardsPerCarry(float $yardsPerCarry) : self
    {
        $this->yardsPerCarry = $yardsPerCarry;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getYardsPerTarget() : float
    {
        return $this->yardsPerTarget;
    }
    /**
     * 
     *
     * @param float $yardsPerTarget
     *
     * @return self
     */
    public function setYardsPerTarget(float $yardsPerTarget) : self
    {
        $this->yardsPerTarget = $yardsPerTarget;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getYardsPerOpportunity() : float
    {
        return $this->yardsPerOpportunity;
    }
    /**
     * 
     *
     * @param float $yardsPerOpportunity
     *
     * @return self
     */
    public function setYardsPerOpportunity(float $yardsPerOpportunity) : self
    {
        $this->yardsPerOpportunity = $yardsPerOpportunity;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getYardsPerReception() : float
    {
        return $this->yardsPerReception;
    }
    /**
     * 
     *
     * @param float $yardsPerReception
     *
     * @return self
     */
    public function setYardsPerReception(float $yardsPerReception) : self
    {
        $this->yardsPerReception = $yardsPerReception;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getEndZoneTargets() : float
    {
        return $this->endZoneTargets;
    }
    /**
     * 
     *
     * @param float $endZoneTargets
     *
     * @return self
     */
    public function setEndZoneTargets(float $endZoneTargets) : self
    {
        $this->endZoneTargets = $endZoneTargets;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRoutesRun() : float
    {
        return $this->routesRun;
    }
    /**
     * 
     *
     * @param float $routesRun
     *
     * @return self
     */
    public function setRoutesRun(float $routesRun) : self
    {
        $this->routesRun = $routesRun;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBurns() : float
    {
        return $this->burns;
    }
    /**
     * 
     *
     * @param float $burns
     *
     * @return self
     */
    public function setBurns(float $burns) : self
    {
        $this->burns = $burns;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHurries() : float
    {
        return $this->hurries;
    }
    /**
     * 
     *
     * @param float $hurries
     *
     * @return self
     */
    public function setHurries(float $hurries) : self
    {
        $this->hurries = $hurries;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getYardsCreated() : float
    {
        return $this->yardsCreated;
    }
    /**
     * 
     *
     * @param float $yardsCreated
     *
     * @return self
     */
    public function setYardsCreated(float $yardsCreated) : self
    {
        $this->yardsCreated = $yardsCreated;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPassAttemptsInside5() : float
    {
        return $this->passAttemptsInside5;
    }
    /**
     * 
     *
     * @param float $passAttemptsInside5
     *
     * @return self
     */
    public function setPassAttemptsInside5(float $passAttemptsInside5) : self
    {
        $this->passAttemptsInside5 = $passAttemptsInside5;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPassAttemptsInside10() : float
    {
        return $this->passAttemptsInside10;
    }
    /**
     * 
     *
     * @param float $passAttemptsInside10
     *
     * @return self
     */
    public function setPassAttemptsInside10(float $passAttemptsInside10) : self
    {
        $this->passAttemptsInside10 = $passAttemptsInside10;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCarriesInside5() : float
    {
        return $this->carriesInside5;
    }
    /**
     * 
     *
     * @param float $carriesInside5
     *
     * @return self
     */
    public function setCarriesInside5(float $carriesInside5) : self
    {
        $this->carriesInside5 = $carriesInside5;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCarriesInside10() : float
    {
        return $this->carriesInside10;
    }
    /**
     * 
     *
     * @param float $carriesInside10
     *
     * @return self
     */
    public function setCarriesInside10(float $carriesInside10) : self
    {
        $this->carriesInside10 = $carriesInside10;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTargetsInside5() : float
    {
        return $this->targetsInside5;
    }
    /**
     * 
     *
     * @param float $targetsInside5
     *
     * @return self
     */
    public function setTargetsInside5(float $targetsInside5) : self
    {
        $this->targetsInside5 = $targetsInside5;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTargetsInside10() : float
    {
        return $this->targetsInside10;
    }
    /**
     * 
     *
     * @param float $targetsInside10
     *
     * @return self
     */
    public function setTargetsInside10(float $targetsInside10) : self
    {
        $this->targetsInside10 = $targetsInside10;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPrimaryCorner() : float
    {
        return $this->primaryCorner;
    }
    /**
     * 
     *
     * @param float $primaryCorner
     *
     * @return self
     */
    public function setPrimaryCorner(float $primaryCorner) : self
    {
        $this->primaryCorner = $primaryCorner;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRoutesDefended() : float
    {
        return $this->routesDefended;
    }
    /**
     * 
     *
     * @param float $routesDefended
     *
     * @return self
     */
    public function setRoutesDefended(float $routesDefended) : self
    {
        $this->routesDefended = $routesDefended;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTargetsAllowed() : float
    {
        return $this->targetsAllowed;
    }
    /**
     * 
     *
     * @param float $targetsAllowed
     *
     * @return self
     */
    public function setTargetsAllowed(float $targetsAllowed) : self
    {
        $this->targetsAllowed = $targetsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getReceptionsAllowed() : float
    {
        return $this->receptionsAllowed;
    }
    /**
     * 
     *
     * @param float $receptionsAllowed
     *
     * @return self
     */
    public function setReceptionsAllowed(float $receptionsAllowed) : self
    {
        $this->receptionsAllowed = $receptionsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getYardsAllowed() : float
    {
        return $this->yardsAllowed;
    }
    /**
     * 
     *
     * @param float $yardsAllowed
     *
     * @return self
     */
    public function setYardsAllowed(float $yardsAllowed) : self
    {
        $this->yardsAllowed = $yardsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBurnsCB() : float
    {
        return $this->burnsCB;
    }
    /**
     * 
     *
     * @param float $burnsCB
     *
     * @return self
     */
    public function setBurnsCB(float $burnsCB) : self
    {
        $this->burnsCB = $burnsCB;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPassBreakups() : float
    {
        return $this->passBreakups;
    }
    /**
     * 
     *
     * @param float $passBreakups
     *
     * @return self
     */
    public function setPassBreakups(float $passBreakups) : self
    {
        $this->passBreakups = $passBreakups;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getInterceptionsCB() : float
    {
        return $this->interceptionsCB;
    }
    /**
     * 
     *
     * @param float $interceptionsCB
     *
     * @return self
     */
    public function setInterceptionsCB(float $interceptionsCB) : self
    {
        $this->interceptionsCB = $interceptionsCB;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getWRMatchup() : float
    {
        return $this->wRMatchup;
    }
    /**
     * 
     *
     * @param float $wRMatchup
     *
     * @return self
     */
    public function setWRMatchup(float $wRMatchup) : self
    {
        $this->wRMatchup = $wRMatchup;
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
    public function getFantasyPointsRank() : int
    {
        return $this->fantasyPointsRank;
    }
    /**
     * 
     *
     * @param int $fantasyPointsRank
     *
     * @return self
     */
    public function setFantasyPointsRank(int $fantasyPointsRank) : self
    {
        $this->fantasyPointsRank = $fantasyPointsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFantasyPointsPerAttempt() : float
    {
        return $this->fantasyPointsPerAttempt;
    }
    /**
     * 
     *
     * @param float $fantasyPointsPerAttempt
     *
     * @return self
     */
    public function setFantasyPointsPerAttempt(float $fantasyPointsPerAttempt) : self
    {
        $this->fantasyPointsPerAttempt = $fantasyPointsPerAttempt;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFantasyPointsPerTarget() : float
    {
        return $this->fantasyPointsPerTarget;
    }
    /**
     * 
     *
     * @param float $fantasyPointsPerTarget
     *
     * @return self
     */
    public function setFantasyPointsPerTarget(float $fantasyPointsPerTarget) : self
    {
        $this->fantasyPointsPerTarget = $fantasyPointsPerTarget;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFantasyPointsPerOpportunity() : float
    {
        return $this->fantasyPointsPerOpportunity;
    }
    /**
     * 
     *
     * @param float $fantasyPointsPerOpportunity
     *
     * @return self
     */
    public function setFantasyPointsPerOpportunity(float $fantasyPointsPerOpportunity) : self
    {
        $this->fantasyPointsPerOpportunity = $fantasyPointsPerOpportunity;
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
     * @return int
     */
    public function getFantasyPointsAllowedWeekRank() : int
    {
        return $this->fantasyPointsAllowedWeekRank;
    }
    /**
     * 
     *
     * @param int $fantasyPointsAllowedWeekRank
     *
     * @return self
     */
    public function setFantasyPointsAllowedWeekRank(int $fantasyPointsAllowedWeekRank) : self
    {
        $this->fantasyPointsAllowedWeekRank = $fantasyPointsAllowedWeekRank;
        return $this;
    }
}