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
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var int|null
     */
    protected $teamID;
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
     * @var string|null
     */
    protected $fantasyPosition;
    /**
     * 
     *
     * @var string|null
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
     * @var string|null
     */
    protected $opponent;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentID;
    /**
     * 
     *
     * @var float|null
     */
    protected $snaps;
    /**
     * 
     *
     * @var float|null
     */
    protected $snapShare;
    /**
     * 
     *
     * @var float|null
     */
    protected $passingAttempts;
    /**
     * 
     *
     * @var float|null
     */
    protected $completions;
    /**
     * 
     *
     * @var float|null
     */
    protected $completionPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $passingYards;
    /**
     * 
     *
     * @var float|null
     */
    protected $passingYardsPerAttempt;
    /**
     * 
     *
     * @var float|null
     */
    protected $passingTouchdowns;
    /**
     * 
     *
     * @var float|null
     */
    protected $passingTDs;
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
    protected $redZoneAttempts;
    /**
     * 
     *
     * @var float|null
     */
    protected $redZoneCompletionPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $deepBallAttempts;
    /**
     * 
     *
     * @var float|null
     */
    protected $deepBallCompletions;
    /**
     * 
     *
     * @var float|null
     */
    protected $carries;
    /**
     * 
     *
     * @var float|null
     */
    protected $rushingYards;
    /**
     * 
     *
     * @var float|null
     */
    protected $rushingTouchdowns;
    /**
     * 
     *
     * @var float|null
     */
    protected $targets;
    /**
     * 
     *
     * @var float|null
     */
    protected $receptions;
    /**
     * 
     *
     * @var float|null
     */
    protected $receivingYards;
    /**
     * 
     *
     * @var float|null
     */
    protected $receivingTouchdowns;
    /**
     * 
     *
     * @var float|null
     */
    protected $totalYards;
    /**
     * 
     *
     * @var float|null
     */
    protected $totalTouches;
    /**
     * 
     *
     * @var float|null
     */
    protected $yardsPerTouch;
    /**
     * 
     *
     * @var float|null
     */
    protected $opportunities;
    /**
     * 
     *
     * @var float|null
     */
    protected $opportunityShare;
    /**
     * 
     *
     * @var float|null
     */
    protected $totalTouchdowns;
    /**
     * 
     *
     * @var float|null
     */
    protected $evadedTackles;
    /**
     * 
     *
     * @var float|null
     */
    protected $jukeRate;
    /**
     * 
     *
     * @var float|null
     */
    protected $catchRate;
    /**
     * 
     *
     * @var float|null
     */
    protected $targetShare;
    /**
     * 
     *
     * @var float|null
     */
    protected $hogRate;
    /**
     * 
     *
     * @var float|null
     */
    protected $contestedTargets;
    /**
     * 
     *
     * @var float|null
     */
    protected $contestedCatches;
    /**
     * 
     *
     * @var float|null
     */
    protected $redZoneCarries;
    /**
     * 
     *
     * @var float|null
     */
    protected $redZoneTargets;
    /**
     * 
     *
     * @var float|null
     */
    protected $redZoneOpportunities;
    /**
     * 
     *
     * @var float|null
     */
    protected $redZoneTouches;
    /**
     * 
     *
     * @var float|null
     */
    protected $redZoneReceptions;
    /**
     * 
     *
     * @var float|null
     */
    protected $redZoneCatchRate;
    /**
     * 
     *
     * @var float|null
     */
    protected $yardsPerCarry;
    /**
     * 
     *
     * @var float|null
     */
    protected $yardsPerTarget;
    /**
     * 
     *
     * @var float|null
     */
    protected $yardsPerOpportunity;
    /**
     * 
     *
     * @var float|null
     */
    protected $yardsPerReception;
    /**
     * 
     *
     * @var float|null
     */
    protected $endZoneTargets;
    /**
     * 
     *
     * @var float|null
     */
    protected $routesRun;
    /**
     * 
     *
     * @var float|null
     */
    protected $burns;
    /**
     * 
     *
     * @var float|null
     */
    protected $hurries;
    /**
     * 
     *
     * @var float|null
     */
    protected $yardsCreated;
    /**
     * 
     *
     * @var float|null
     */
    protected $passAttemptsInside5;
    /**
     * 
     *
     * @var float|null
     */
    protected $passAttemptsInside10;
    /**
     * 
     *
     * @var float|null
     */
    protected $carriesInside5;
    /**
     * 
     *
     * @var float|null
     */
    protected $carriesInside10;
    /**
     * 
     *
     * @var float|null
     */
    protected $targetsInside5;
    /**
     * 
     *
     * @var float|null
     */
    protected $targetsInside10;
    /**
     * 
     *
     * @var float|null
     */
    protected $primaryCorner;
    /**
     * 
     *
     * @var float|null
     */
    protected $routesDefended;
    /**
     * 
     *
     * @var float|null
     */
    protected $targetsAllowed;
    /**
     * 
     *
     * @var float|null
     */
    protected $receptionsAllowed;
    /**
     * 
     *
     * @var float|null
     */
    protected $yardsAllowed;
    /**
     * 
     *
     * @var float|null
     */
    protected $burnsCB;
    /**
     * 
     *
     * @var float|null
     */
    protected $passBreakups;
    /**
     * 
     *
     * @var float|null
     */
    protected $interceptionsCB;
    /**
     * 
     *
     * @var float|null
     */
    protected $wRMatchup;
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
    protected $fantasyPointsRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $fantasyPointsPerAttempt;
    /**
     * 
     *
     * @var float|null
     */
    protected $fantasyPointsPerTarget;
    /**
     * 
     *
     * @var float|null
     */
    protected $fantasyPointsPerOpportunity;
    /**
     * 
     *
     * @var float|null
     */
    protected $fantasyPointsAllowed;
    /**
     * 
     *
     * @var int|null
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
     * @return string|null
     */
    public function getFantasyPosition() : ?string
    {
        return $this->fantasyPosition;
    }
    /**
     * 
     *
     * @param string|null $fantasyPosition
     *
     * @return self
     */
    public function setFantasyPosition(?string $fantasyPosition) : self
    {
        $this->fantasyPosition = $fantasyPosition;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPositionGroup() : ?string
    {
        return $this->positionGroup;
    }
    /**
     * 
     *
     * @param string|null $positionGroup
     *
     * @return self
     */
    public function setPositionGroup(?string $positionGroup) : self
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
     * @return float|null
     */
    public function getSnaps() : ?float
    {
        return $this->snaps;
    }
    /**
     * 
     *
     * @param float|null $snaps
     *
     * @return self
     */
    public function setSnaps(?float $snaps) : self
    {
        $this->snaps = $snaps;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSnapShare() : ?float
    {
        return $this->snapShare;
    }
    /**
     * 
     *
     * @param float|null $snapShare
     *
     * @return self
     */
    public function setSnapShare(?float $snapShare) : self
    {
        $this->snapShare = $snapShare;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPassingAttempts() : ?float
    {
        return $this->passingAttempts;
    }
    /**
     * 
     *
     * @param float|null $passingAttempts
     *
     * @return self
     */
    public function setPassingAttempts(?float $passingAttempts) : self
    {
        $this->passingAttempts = $passingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getCompletions() : ?float
    {
        return $this->completions;
    }
    /**
     * 
     *
     * @param float|null $completions
     *
     * @return self
     */
    public function setCompletions(?float $completions) : self
    {
        $this->completions = $completions;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getCompletionPercentage() : ?float
    {
        return $this->completionPercentage;
    }
    /**
     * 
     *
     * @param float|null $completionPercentage
     *
     * @return self
     */
    public function setCompletionPercentage(?float $completionPercentage) : self
    {
        $this->completionPercentage = $completionPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPassingYards() : ?float
    {
        return $this->passingYards;
    }
    /**
     * 
     *
     * @param float|null $passingYards
     *
     * @return self
     */
    public function setPassingYards(?float $passingYards) : self
    {
        $this->passingYards = $passingYards;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPassingYardsPerAttempt() : ?float
    {
        return $this->passingYardsPerAttempt;
    }
    /**
     * 
     *
     * @param float|null $passingYardsPerAttempt
     *
     * @return self
     */
    public function setPassingYardsPerAttempt(?float $passingYardsPerAttempt) : self
    {
        $this->passingYardsPerAttempt = $passingYardsPerAttempt;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPassingTouchdowns() : ?float
    {
        return $this->passingTouchdowns;
    }
    /**
     * 
     *
     * @param float|null $passingTouchdowns
     *
     * @return self
     */
    public function setPassingTouchdowns(?float $passingTouchdowns) : self
    {
        $this->passingTouchdowns = $passingTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPassingTDs() : ?float
    {
        return $this->passingTDs;
    }
    /**
     * 
     *
     * @param float|null $passingTDs
     *
     * @return self
     */
    public function setPassingTDs(?float $passingTDs) : self
    {
        $this->passingTDs = $passingTDs;
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
    public function getRedZoneAttempts() : ?float
    {
        return $this->redZoneAttempts;
    }
    /**
     * 
     *
     * @param float|null $redZoneAttempts
     *
     * @return self
     */
    public function setRedZoneAttempts(?float $redZoneAttempts) : self
    {
        $this->redZoneAttempts = $redZoneAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRedZoneCompletionPercentage() : ?float
    {
        return $this->redZoneCompletionPercentage;
    }
    /**
     * 
     *
     * @param float|null $redZoneCompletionPercentage
     *
     * @return self
     */
    public function setRedZoneCompletionPercentage(?float $redZoneCompletionPercentage) : self
    {
        $this->redZoneCompletionPercentage = $redZoneCompletionPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDeepBallAttempts() : ?float
    {
        return $this->deepBallAttempts;
    }
    /**
     * 
     *
     * @param float|null $deepBallAttempts
     *
     * @return self
     */
    public function setDeepBallAttempts(?float $deepBallAttempts) : self
    {
        $this->deepBallAttempts = $deepBallAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDeepBallCompletions() : ?float
    {
        return $this->deepBallCompletions;
    }
    /**
     * 
     *
     * @param float|null $deepBallCompletions
     *
     * @return self
     */
    public function setDeepBallCompletions(?float $deepBallCompletions) : self
    {
        $this->deepBallCompletions = $deepBallCompletions;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getCarries() : ?float
    {
        return $this->carries;
    }
    /**
     * 
     *
     * @param float|null $carries
     *
     * @return self
     */
    public function setCarries(?float $carries) : self
    {
        $this->carries = $carries;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRushingYards() : ?float
    {
        return $this->rushingYards;
    }
    /**
     * 
     *
     * @param float|null $rushingYards
     *
     * @return self
     */
    public function setRushingYards(?float $rushingYards) : self
    {
        $this->rushingYards = $rushingYards;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRushingTouchdowns() : ?float
    {
        return $this->rushingTouchdowns;
    }
    /**
     * 
     *
     * @param float|null $rushingTouchdowns
     *
     * @return self
     */
    public function setRushingTouchdowns(?float $rushingTouchdowns) : self
    {
        $this->rushingTouchdowns = $rushingTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTargets() : ?float
    {
        return $this->targets;
    }
    /**
     * 
     *
     * @param float|null $targets
     *
     * @return self
     */
    public function setTargets(?float $targets) : self
    {
        $this->targets = $targets;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getReceptions() : ?float
    {
        return $this->receptions;
    }
    /**
     * 
     *
     * @param float|null $receptions
     *
     * @return self
     */
    public function setReceptions(?float $receptions) : self
    {
        $this->receptions = $receptions;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getReceivingYards() : ?float
    {
        return $this->receivingYards;
    }
    /**
     * 
     *
     * @param float|null $receivingYards
     *
     * @return self
     */
    public function setReceivingYards(?float $receivingYards) : self
    {
        $this->receivingYards = $receivingYards;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getReceivingTouchdowns() : ?float
    {
        return $this->receivingTouchdowns;
    }
    /**
     * 
     *
     * @param float|null $receivingTouchdowns
     *
     * @return self
     */
    public function setReceivingTouchdowns(?float $receivingTouchdowns) : self
    {
        $this->receivingTouchdowns = $receivingTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTotalYards() : ?float
    {
        return $this->totalYards;
    }
    /**
     * 
     *
     * @param float|null $totalYards
     *
     * @return self
     */
    public function setTotalYards(?float $totalYards) : self
    {
        $this->totalYards = $totalYards;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTotalTouches() : ?float
    {
        return $this->totalTouches;
    }
    /**
     * 
     *
     * @param float|null $totalTouches
     *
     * @return self
     */
    public function setTotalTouches(?float $totalTouches) : self
    {
        $this->totalTouches = $totalTouches;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getYardsPerTouch() : ?float
    {
        return $this->yardsPerTouch;
    }
    /**
     * 
     *
     * @param float|null $yardsPerTouch
     *
     * @return self
     */
    public function setYardsPerTouch(?float $yardsPerTouch) : self
    {
        $this->yardsPerTouch = $yardsPerTouch;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getOpportunities() : ?float
    {
        return $this->opportunities;
    }
    /**
     * 
     *
     * @param float|null $opportunities
     *
     * @return self
     */
    public function setOpportunities(?float $opportunities) : self
    {
        $this->opportunities = $opportunities;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getOpportunityShare() : ?float
    {
        return $this->opportunityShare;
    }
    /**
     * 
     *
     * @param float|null $opportunityShare
     *
     * @return self
     */
    public function setOpportunityShare(?float $opportunityShare) : self
    {
        $this->opportunityShare = $opportunityShare;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTotalTouchdowns() : ?float
    {
        return $this->totalTouchdowns;
    }
    /**
     * 
     *
     * @param float|null $totalTouchdowns
     *
     * @return self
     */
    public function setTotalTouchdowns(?float $totalTouchdowns) : self
    {
        $this->totalTouchdowns = $totalTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getEvadedTackles() : ?float
    {
        return $this->evadedTackles;
    }
    /**
     * 
     *
     * @param float|null $evadedTackles
     *
     * @return self
     */
    public function setEvadedTackles(?float $evadedTackles) : self
    {
        $this->evadedTackles = $evadedTackles;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getJukeRate() : ?float
    {
        return $this->jukeRate;
    }
    /**
     * 
     *
     * @param float|null $jukeRate
     *
     * @return self
     */
    public function setJukeRate(?float $jukeRate) : self
    {
        $this->jukeRate = $jukeRate;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getCatchRate() : ?float
    {
        return $this->catchRate;
    }
    /**
     * 
     *
     * @param float|null $catchRate
     *
     * @return self
     */
    public function setCatchRate(?float $catchRate) : self
    {
        $this->catchRate = $catchRate;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTargetShare() : ?float
    {
        return $this->targetShare;
    }
    /**
     * 
     *
     * @param float|null $targetShare
     *
     * @return self
     */
    public function setTargetShare(?float $targetShare) : self
    {
        $this->targetShare = $targetShare;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getHogRate() : ?float
    {
        return $this->hogRate;
    }
    /**
     * 
     *
     * @param float|null $hogRate
     *
     * @return self
     */
    public function setHogRate(?float $hogRate) : self
    {
        $this->hogRate = $hogRate;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getContestedTargets() : ?float
    {
        return $this->contestedTargets;
    }
    /**
     * 
     *
     * @param float|null $contestedTargets
     *
     * @return self
     */
    public function setContestedTargets(?float $contestedTargets) : self
    {
        $this->contestedTargets = $contestedTargets;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getContestedCatches() : ?float
    {
        return $this->contestedCatches;
    }
    /**
     * 
     *
     * @param float|null $contestedCatches
     *
     * @return self
     */
    public function setContestedCatches(?float $contestedCatches) : self
    {
        $this->contestedCatches = $contestedCatches;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRedZoneCarries() : ?float
    {
        return $this->redZoneCarries;
    }
    /**
     * 
     *
     * @param float|null $redZoneCarries
     *
     * @return self
     */
    public function setRedZoneCarries(?float $redZoneCarries) : self
    {
        $this->redZoneCarries = $redZoneCarries;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRedZoneTargets() : ?float
    {
        return $this->redZoneTargets;
    }
    /**
     * 
     *
     * @param float|null $redZoneTargets
     *
     * @return self
     */
    public function setRedZoneTargets(?float $redZoneTargets) : self
    {
        $this->redZoneTargets = $redZoneTargets;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRedZoneOpportunities() : ?float
    {
        return $this->redZoneOpportunities;
    }
    /**
     * 
     *
     * @param float|null $redZoneOpportunities
     *
     * @return self
     */
    public function setRedZoneOpportunities(?float $redZoneOpportunities) : self
    {
        $this->redZoneOpportunities = $redZoneOpportunities;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRedZoneTouches() : ?float
    {
        return $this->redZoneTouches;
    }
    /**
     * 
     *
     * @param float|null $redZoneTouches
     *
     * @return self
     */
    public function setRedZoneTouches(?float $redZoneTouches) : self
    {
        $this->redZoneTouches = $redZoneTouches;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRedZoneReceptions() : ?float
    {
        return $this->redZoneReceptions;
    }
    /**
     * 
     *
     * @param float|null $redZoneReceptions
     *
     * @return self
     */
    public function setRedZoneReceptions(?float $redZoneReceptions) : self
    {
        $this->redZoneReceptions = $redZoneReceptions;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRedZoneCatchRate() : ?float
    {
        return $this->redZoneCatchRate;
    }
    /**
     * 
     *
     * @param float|null $redZoneCatchRate
     *
     * @return self
     */
    public function setRedZoneCatchRate(?float $redZoneCatchRate) : self
    {
        $this->redZoneCatchRate = $redZoneCatchRate;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getYardsPerCarry() : ?float
    {
        return $this->yardsPerCarry;
    }
    /**
     * 
     *
     * @param float|null $yardsPerCarry
     *
     * @return self
     */
    public function setYardsPerCarry(?float $yardsPerCarry) : self
    {
        $this->yardsPerCarry = $yardsPerCarry;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getYardsPerTarget() : ?float
    {
        return $this->yardsPerTarget;
    }
    /**
     * 
     *
     * @param float|null $yardsPerTarget
     *
     * @return self
     */
    public function setYardsPerTarget(?float $yardsPerTarget) : self
    {
        $this->yardsPerTarget = $yardsPerTarget;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getYardsPerOpportunity() : ?float
    {
        return $this->yardsPerOpportunity;
    }
    /**
     * 
     *
     * @param float|null $yardsPerOpportunity
     *
     * @return self
     */
    public function setYardsPerOpportunity(?float $yardsPerOpportunity) : self
    {
        $this->yardsPerOpportunity = $yardsPerOpportunity;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getYardsPerReception() : ?float
    {
        return $this->yardsPerReception;
    }
    /**
     * 
     *
     * @param float|null $yardsPerReception
     *
     * @return self
     */
    public function setYardsPerReception(?float $yardsPerReception) : self
    {
        $this->yardsPerReception = $yardsPerReception;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getEndZoneTargets() : ?float
    {
        return $this->endZoneTargets;
    }
    /**
     * 
     *
     * @param float|null $endZoneTargets
     *
     * @return self
     */
    public function setEndZoneTargets(?float $endZoneTargets) : self
    {
        $this->endZoneTargets = $endZoneTargets;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRoutesRun() : ?float
    {
        return $this->routesRun;
    }
    /**
     * 
     *
     * @param float|null $routesRun
     *
     * @return self
     */
    public function setRoutesRun(?float $routesRun) : self
    {
        $this->routesRun = $routesRun;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getBurns() : ?float
    {
        return $this->burns;
    }
    /**
     * 
     *
     * @param float|null $burns
     *
     * @return self
     */
    public function setBurns(?float $burns) : self
    {
        $this->burns = $burns;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getHurries() : ?float
    {
        return $this->hurries;
    }
    /**
     * 
     *
     * @param float|null $hurries
     *
     * @return self
     */
    public function setHurries(?float $hurries) : self
    {
        $this->hurries = $hurries;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getYardsCreated() : ?float
    {
        return $this->yardsCreated;
    }
    /**
     * 
     *
     * @param float|null $yardsCreated
     *
     * @return self
     */
    public function setYardsCreated(?float $yardsCreated) : self
    {
        $this->yardsCreated = $yardsCreated;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPassAttemptsInside5() : ?float
    {
        return $this->passAttemptsInside5;
    }
    /**
     * 
     *
     * @param float|null $passAttemptsInside5
     *
     * @return self
     */
    public function setPassAttemptsInside5(?float $passAttemptsInside5) : self
    {
        $this->passAttemptsInside5 = $passAttemptsInside5;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPassAttemptsInside10() : ?float
    {
        return $this->passAttemptsInside10;
    }
    /**
     * 
     *
     * @param float|null $passAttemptsInside10
     *
     * @return self
     */
    public function setPassAttemptsInside10(?float $passAttemptsInside10) : self
    {
        $this->passAttemptsInside10 = $passAttemptsInside10;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getCarriesInside5() : ?float
    {
        return $this->carriesInside5;
    }
    /**
     * 
     *
     * @param float|null $carriesInside5
     *
     * @return self
     */
    public function setCarriesInside5(?float $carriesInside5) : self
    {
        $this->carriesInside5 = $carriesInside5;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getCarriesInside10() : ?float
    {
        return $this->carriesInside10;
    }
    /**
     * 
     *
     * @param float|null $carriesInside10
     *
     * @return self
     */
    public function setCarriesInside10(?float $carriesInside10) : self
    {
        $this->carriesInside10 = $carriesInside10;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTargetsInside5() : ?float
    {
        return $this->targetsInside5;
    }
    /**
     * 
     *
     * @param float|null $targetsInside5
     *
     * @return self
     */
    public function setTargetsInside5(?float $targetsInside5) : self
    {
        $this->targetsInside5 = $targetsInside5;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTargetsInside10() : ?float
    {
        return $this->targetsInside10;
    }
    /**
     * 
     *
     * @param float|null $targetsInside10
     *
     * @return self
     */
    public function setTargetsInside10(?float $targetsInside10) : self
    {
        $this->targetsInside10 = $targetsInside10;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPrimaryCorner() : ?float
    {
        return $this->primaryCorner;
    }
    /**
     * 
     *
     * @param float|null $primaryCorner
     *
     * @return self
     */
    public function setPrimaryCorner(?float $primaryCorner) : self
    {
        $this->primaryCorner = $primaryCorner;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRoutesDefended() : ?float
    {
        return $this->routesDefended;
    }
    /**
     * 
     *
     * @param float|null $routesDefended
     *
     * @return self
     */
    public function setRoutesDefended(?float $routesDefended) : self
    {
        $this->routesDefended = $routesDefended;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTargetsAllowed() : ?float
    {
        return $this->targetsAllowed;
    }
    /**
     * 
     *
     * @param float|null $targetsAllowed
     *
     * @return self
     */
    public function setTargetsAllowed(?float $targetsAllowed) : self
    {
        $this->targetsAllowed = $targetsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getReceptionsAllowed() : ?float
    {
        return $this->receptionsAllowed;
    }
    /**
     * 
     *
     * @param float|null $receptionsAllowed
     *
     * @return self
     */
    public function setReceptionsAllowed(?float $receptionsAllowed) : self
    {
        $this->receptionsAllowed = $receptionsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getYardsAllowed() : ?float
    {
        return $this->yardsAllowed;
    }
    /**
     * 
     *
     * @param float|null $yardsAllowed
     *
     * @return self
     */
    public function setYardsAllowed(?float $yardsAllowed) : self
    {
        $this->yardsAllowed = $yardsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getBurnsCB() : ?float
    {
        return $this->burnsCB;
    }
    /**
     * 
     *
     * @param float|null $burnsCB
     *
     * @return self
     */
    public function setBurnsCB(?float $burnsCB) : self
    {
        $this->burnsCB = $burnsCB;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPassBreakups() : ?float
    {
        return $this->passBreakups;
    }
    /**
     * 
     *
     * @param float|null $passBreakups
     *
     * @return self
     */
    public function setPassBreakups(?float $passBreakups) : self
    {
        $this->passBreakups = $passBreakups;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getInterceptionsCB() : ?float
    {
        return $this->interceptionsCB;
    }
    /**
     * 
     *
     * @param float|null $interceptionsCB
     *
     * @return self
     */
    public function setInterceptionsCB(?float $interceptionsCB) : self
    {
        $this->interceptionsCB = $interceptionsCB;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getWRMatchup() : ?float
    {
        return $this->wRMatchup;
    }
    /**
     * 
     *
     * @param float|null $wRMatchup
     *
     * @return self
     */
    public function setWRMatchup(?float $wRMatchup) : self
    {
        $this->wRMatchup = $wRMatchup;
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
    public function getFantasyPointsRank() : ?int
    {
        return $this->fantasyPointsRank;
    }
    /**
     * 
     *
     * @param int|null $fantasyPointsRank
     *
     * @return self
     */
    public function setFantasyPointsRank(?int $fantasyPointsRank) : self
    {
        $this->fantasyPointsRank = $fantasyPointsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFantasyPointsPerAttempt() : ?float
    {
        return $this->fantasyPointsPerAttempt;
    }
    /**
     * 
     *
     * @param float|null $fantasyPointsPerAttempt
     *
     * @return self
     */
    public function setFantasyPointsPerAttempt(?float $fantasyPointsPerAttempt) : self
    {
        $this->fantasyPointsPerAttempt = $fantasyPointsPerAttempt;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFantasyPointsPerTarget() : ?float
    {
        return $this->fantasyPointsPerTarget;
    }
    /**
     * 
     *
     * @param float|null $fantasyPointsPerTarget
     *
     * @return self
     */
    public function setFantasyPointsPerTarget(?float $fantasyPointsPerTarget) : self
    {
        $this->fantasyPointsPerTarget = $fantasyPointsPerTarget;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFantasyPointsPerOpportunity() : ?float
    {
        return $this->fantasyPointsPerOpportunity;
    }
    /**
     * 
     *
     * @param float|null $fantasyPointsPerOpportunity
     *
     * @return self
     */
    public function setFantasyPointsPerOpportunity(?float $fantasyPointsPerOpportunity) : self
    {
        $this->fantasyPointsPerOpportunity = $fantasyPointsPerOpportunity;
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
     * @return int|null
     */
    public function getFantasyPointsAllowedWeekRank() : ?int
    {
        return $this->fantasyPointsAllowedWeekRank;
    }
    /**
     * 
     *
     * @param int|null $fantasyPointsAllowedWeekRank
     *
     * @return self
     */
    public function setFantasyPointsAllowedWeekRank(?int $fantasyPointsAllowedWeekRank) : self
    {
        $this->fantasyPointsAllowedWeekRank = $fantasyPointsAllowedWeekRank;
        return $this;
    }
}