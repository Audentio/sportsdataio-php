<?php

namespace Sportsdata\API\NFL\Model;

class PlayerSeasonRedZone
{
    /**
     * 
     *
     * @var int|null
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
     * @var string|null
     */
    protected $team;
    /**
     * 
     *
     * @var int
     */
    protected $number;
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
    protected $position;
    /**
     * 
     *
     * @var string|null
     */
    protected $positionCategory;
    /**
     * 
     *
     * @var int
     */
    protected $activated;
    /**
     * 
     *
     * @var int
     */
    protected $played;
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
    protected $passingAttempts;
    /**
     * 
     *
     * @var float
     */
    protected $passingCompletions;
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
    protected $passingCompletionPercentage;
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
    protected $passingYardsPerCompletion;
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
    protected $passingInterceptions;
    /**
     * 
     *
     * @var float
     */
    protected $passingRating;
    /**
     * 
     *
     * @var float
     */
    protected $passingLong;
    /**
     * 
     *
     * @var float
     */
    protected $passingSacks;
    /**
     * 
     *
     * @var float
     */
    protected $passingSackYards;
    /**
     * 
     *
     * @var float
     */
    protected $rushingAttempts;
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
    protected $rushingYardsPerAttempt;
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
    protected $rushingLong;
    /**
     * 
     *
     * @var float|null
     */
    protected $receivingTargets;
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
    protected $receivingYardsPerReception;
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
    protected $receivingLong;
    /**
     * 
     *
     * @var float
     */
    protected $fumbles;
    /**
     * 
     *
     * @var float|null
     */
    protected $fumblesLost;
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
    protected $puntReturnYardsPerAttempt;
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
    protected $kickReturnYardsPerAttempt;
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
     * @var float|null
     */
    protected $tacklesForLoss;
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
     * @var float|null
     */
    protected $quarterbackHits;
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
    protected $specialTeamsSoloTackles;
    /**
     * 
     *
     * @var float
     */
    protected $specialTeamsAssistedTackles;
    /**
     * 
     *
     * @var float
     */
    protected $miscSoloTackles;
    /**
     * 
     *
     * @var float
     */
    protected $miscAssistedTackles;
    /**
     * 
     *
     * @var float
     */
    protected $punts;
    /**
     * 
     *
     * @var float
     */
    protected $puntYards;
    /**
     * 
     *
     * @var float
     */
    protected $puntAverage;
    /**
     * 
     *
     * @var float
     */
    protected $fieldGoalsAttempted;
    /**
     * 
     *
     * @var float
     */
    protected $fieldGoalsMade;
    /**
     * 
     *
     * @var float
     */
    protected $fieldGoalsLongestMade;
    /**
     * 
     *
     * @var float
     */
    protected $extraPointsMade;
    /**
     * 
     *
     * @var float
     */
    protected $twoPointConversionPasses;
    /**
     * 
     *
     * @var float
     */
    protected $twoPointConversionRuns;
    /**
     * 
     *
     * @var float
     */
    protected $twoPointConversionReceptions;
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
    protected $fantasyPointsPPR;
    /**
     * 
     *
     * @var float
     */
    protected $receptionPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $receivingYardsPerTarget;
    /**
     * 
     *
     * @var float
     */
    protected $tackles;
    /**
     * 
     *
     * @var float
     */
    protected $offensiveTouchdowns;
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
     * @var float
     */
    protected $touchdowns;
    /**
     * 
     *
     * @var string|null
     */
    protected $fantasyPosition;
    /**
     * 
     *
     * @var float
     */
    protected $fieldGoalPercentage;
    /**
     * 
     *
     * @var int
     */
    protected $playerSeasonID;
    /**
     * 
     *
     * @var float|null
     */
    protected $fumblesOwnRecoveries;
    /**
     * 
     *
     * @var float|null
     */
    protected $fumblesOutOfBounds;
    /**
     * 
     *
     * @var float|null
     */
    protected $kickReturnFairCatches;
    /**
     * 
     *
     * @var float|null
     */
    protected $puntReturnFairCatches;
    /**
     * 
     *
     * @var float|null
     */
    protected $puntTouchbacks;
    /**
     * 
     *
     * @var float|null
     */
    protected $puntInside20;
    /**
     * 
     *
     * @var float|null
     */
    protected $puntNetAverage;
    /**
     * 
     *
     * @var float|null
     */
    protected $extraPointsAttempted;
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
    protected $safeties;
    /**
     * 
     *
     * @var float|null
     */
    protected $fieldGoalsHadBlocked;
    /**
     * 
     *
     * @var float|null
     */
    protected $puntsHadBlocked;
    /**
     * 
     *
     * @var float|null
     */
    protected $extraPointsHadBlocked;
    /**
     * 
     *
     * @var float|null
     */
    protected $puntLong;
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
    protected $puntNetYards;
    /**
     * 
     *
     * @var float|null
     */
    protected $specialTeamsFumblesForced;
    /**
     * 
     *
     * @var float|null
     */
    protected $specialTeamsFumblesRecovered;
    /**
     * 
     *
     * @var float|null
     */
    protected $miscFumblesForced;
    /**
     * 
     *
     * @var float|null
     */
    protected $miscFumblesRecovered;
    /**
     * 
     *
     * @var string|null
     */
    protected $shortName;
    /**
     * 
     *
     * @var float|null
     */
    protected $safetiesAllowed;
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
     * @var int|null
     */
    protected $offensiveSnapsPlayed;
    /**
     * 
     *
     * @var int|null
     */
    protected $defensiveSnapsPlayed;
    /**
     * 
     *
     * @var int|null
     */
    protected $specialTeamsSnapsPlayed;
    /**
     * 
     *
     * @var int|null
     */
    protected $offensiveTeamSnaps;
    /**
     * 
     *
     * @var int|null
     */
    protected $defensiveTeamSnaps;
    /**
     * 
     *
     * @var int|null
     */
    protected $specialTeamsTeamSnaps;
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
    protected $fieldGoalsMade0to19;
    /**
     * 
     *
     * @var float|null
     */
    protected $fieldGoalsMade20to29;
    /**
     * 
     *
     * @var float|null
     */
    protected $fieldGoalsMade30to39;
    /**
     * 
     *
     * @var float|null
     */
    protected $fieldGoalsMade40to49;
    /**
     * 
     *
     * @var float|null
     */
    protected $fieldGoalsMade50Plus;
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
    protected $fantasyPointsFantasyDraft;
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
    protected $averageDraftPositionRookie;
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
     * @return int
     */
    public function getNumber() : int
    {
        return $this->number;
    }
    /**
     * 
     *
     * @param int $number
     *
     * @return self
     */
    public function setNumber(int $number) : self
    {
        $this->number = $number;
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
     * @return int
     */
    public function getActivated() : int
    {
        return $this->activated;
    }
    /**
     * 
     *
     * @param int $activated
     *
     * @return self
     */
    public function setActivated(int $activated) : self
    {
        $this->activated = $activated;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPlayed() : int
    {
        return $this->played;
    }
    /**
     * 
     *
     * @param int $played
     *
     * @return self
     */
    public function setPlayed(int $played) : self
    {
        $this->played = $played;
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
    public function getPassingCompletions() : float
    {
        return $this->passingCompletions;
    }
    /**
     * 
     *
     * @param float $passingCompletions
     *
     * @return self
     */
    public function setPassingCompletions(float $passingCompletions) : self
    {
        $this->passingCompletions = $passingCompletions;
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
    public function getPassingCompletionPercentage() : float
    {
        return $this->passingCompletionPercentage;
    }
    /**
     * 
     *
     * @param float $passingCompletionPercentage
     *
     * @return self
     */
    public function setPassingCompletionPercentage(float $passingCompletionPercentage) : self
    {
        $this->passingCompletionPercentage = $passingCompletionPercentage;
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
    public function getPassingYardsPerCompletion() : float
    {
        return $this->passingYardsPerCompletion;
    }
    /**
     * 
     *
     * @param float $passingYardsPerCompletion
     *
     * @return self
     */
    public function setPassingYardsPerCompletion(float $passingYardsPerCompletion) : self
    {
        $this->passingYardsPerCompletion = $passingYardsPerCompletion;
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
    public function getPassingInterceptions() : float
    {
        return $this->passingInterceptions;
    }
    /**
     * 
     *
     * @param float $passingInterceptions
     *
     * @return self
     */
    public function setPassingInterceptions(float $passingInterceptions) : self
    {
        $this->passingInterceptions = $passingInterceptions;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPassingRating() : float
    {
        return $this->passingRating;
    }
    /**
     * 
     *
     * @param float $passingRating
     *
     * @return self
     */
    public function setPassingRating(float $passingRating) : self
    {
        $this->passingRating = $passingRating;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPassingLong() : float
    {
        return $this->passingLong;
    }
    /**
     * 
     *
     * @param float $passingLong
     *
     * @return self
     */
    public function setPassingLong(float $passingLong) : self
    {
        $this->passingLong = $passingLong;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPassingSacks() : float
    {
        return $this->passingSacks;
    }
    /**
     * 
     *
     * @param float $passingSacks
     *
     * @return self
     */
    public function setPassingSacks(float $passingSacks) : self
    {
        $this->passingSacks = $passingSacks;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPassingSackYards() : float
    {
        return $this->passingSackYards;
    }
    /**
     * 
     *
     * @param float $passingSackYards
     *
     * @return self
     */
    public function setPassingSackYards(float $passingSackYards) : self
    {
        $this->passingSackYards = $passingSackYards;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRushingAttempts() : float
    {
        return $this->rushingAttempts;
    }
    /**
     * 
     *
     * @param float $rushingAttempts
     *
     * @return self
     */
    public function setRushingAttempts(float $rushingAttempts) : self
    {
        $this->rushingAttempts = $rushingAttempts;
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
    public function getRushingYardsPerAttempt() : float
    {
        return $this->rushingYardsPerAttempt;
    }
    /**
     * 
     *
     * @param float $rushingYardsPerAttempt
     *
     * @return self
     */
    public function setRushingYardsPerAttempt(float $rushingYardsPerAttempt) : self
    {
        $this->rushingYardsPerAttempt = $rushingYardsPerAttempt;
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
    public function getRushingLong() : float
    {
        return $this->rushingLong;
    }
    /**
     * 
     *
     * @param float $rushingLong
     *
     * @return self
     */
    public function setRushingLong(float $rushingLong) : self
    {
        $this->rushingLong = $rushingLong;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getReceivingTargets() : ?float
    {
        return $this->receivingTargets;
    }
    /**
     * 
     *
     * @param float|null $receivingTargets
     *
     * @return self
     */
    public function setReceivingTargets(?float $receivingTargets) : self
    {
        $this->receivingTargets = $receivingTargets;
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
    public function getReceivingYardsPerReception() : float
    {
        return $this->receivingYardsPerReception;
    }
    /**
     * 
     *
     * @param float $receivingYardsPerReception
     *
     * @return self
     */
    public function setReceivingYardsPerReception(float $receivingYardsPerReception) : self
    {
        $this->receivingYardsPerReception = $receivingYardsPerReception;
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
    public function getReceivingLong() : float
    {
        return $this->receivingLong;
    }
    /**
     * 
     *
     * @param float $receivingLong
     *
     * @return self
     */
    public function setReceivingLong(float $receivingLong) : self
    {
        $this->receivingLong = $receivingLong;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFumbles() : float
    {
        return $this->fumbles;
    }
    /**
     * 
     *
     * @param float $fumbles
     *
     * @return self
     */
    public function setFumbles(float $fumbles) : self
    {
        $this->fumbles = $fumbles;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFumblesLost() : ?float
    {
        return $this->fumblesLost;
    }
    /**
     * 
     *
     * @param float|null $fumblesLost
     *
     * @return self
     */
    public function setFumblesLost(?float $fumblesLost) : self
    {
        $this->fumblesLost = $fumblesLost;
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
    public function getPuntReturnYardsPerAttempt() : float
    {
        return $this->puntReturnYardsPerAttempt;
    }
    /**
     * 
     *
     * @param float $puntReturnYardsPerAttempt
     *
     * @return self
     */
    public function setPuntReturnYardsPerAttempt(float $puntReturnYardsPerAttempt) : self
    {
        $this->puntReturnYardsPerAttempt = $puntReturnYardsPerAttempt;
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
    public function getKickReturnYardsPerAttempt() : float
    {
        return $this->kickReturnYardsPerAttempt;
    }
    /**
     * 
     *
     * @param float $kickReturnYardsPerAttempt
     *
     * @return self
     */
    public function setKickReturnYardsPerAttempt(float $kickReturnYardsPerAttempt) : self
    {
        $this->kickReturnYardsPerAttempt = $kickReturnYardsPerAttempt;
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
    public function getSpecialTeamsSoloTackles() : float
    {
        return $this->specialTeamsSoloTackles;
    }
    /**
     * 
     *
     * @param float $specialTeamsSoloTackles
     *
     * @return self
     */
    public function setSpecialTeamsSoloTackles(float $specialTeamsSoloTackles) : self
    {
        $this->specialTeamsSoloTackles = $specialTeamsSoloTackles;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSpecialTeamsAssistedTackles() : float
    {
        return $this->specialTeamsAssistedTackles;
    }
    /**
     * 
     *
     * @param float $specialTeamsAssistedTackles
     *
     * @return self
     */
    public function setSpecialTeamsAssistedTackles(float $specialTeamsAssistedTackles) : self
    {
        $this->specialTeamsAssistedTackles = $specialTeamsAssistedTackles;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getMiscSoloTackles() : float
    {
        return $this->miscSoloTackles;
    }
    /**
     * 
     *
     * @param float $miscSoloTackles
     *
     * @return self
     */
    public function setMiscSoloTackles(float $miscSoloTackles) : self
    {
        $this->miscSoloTackles = $miscSoloTackles;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getMiscAssistedTackles() : float
    {
        return $this->miscAssistedTackles;
    }
    /**
     * 
     *
     * @param float $miscAssistedTackles
     *
     * @return self
     */
    public function setMiscAssistedTackles(float $miscAssistedTackles) : self
    {
        $this->miscAssistedTackles = $miscAssistedTackles;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPunts() : float
    {
        return $this->punts;
    }
    /**
     * 
     *
     * @param float $punts
     *
     * @return self
     */
    public function setPunts(float $punts) : self
    {
        $this->punts = $punts;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPuntYards() : float
    {
        return $this->puntYards;
    }
    /**
     * 
     *
     * @param float $puntYards
     *
     * @return self
     */
    public function setPuntYards(float $puntYards) : self
    {
        $this->puntYards = $puntYards;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPuntAverage() : float
    {
        return $this->puntAverage;
    }
    /**
     * 
     *
     * @param float $puntAverage
     *
     * @return self
     */
    public function setPuntAverage(float $puntAverage) : self
    {
        $this->puntAverage = $puntAverage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFieldGoalsAttempted() : float
    {
        return $this->fieldGoalsAttempted;
    }
    /**
     * 
     *
     * @param float $fieldGoalsAttempted
     *
     * @return self
     */
    public function setFieldGoalsAttempted(float $fieldGoalsAttempted) : self
    {
        $this->fieldGoalsAttempted = $fieldGoalsAttempted;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFieldGoalsMade() : float
    {
        return $this->fieldGoalsMade;
    }
    /**
     * 
     *
     * @param float $fieldGoalsMade
     *
     * @return self
     */
    public function setFieldGoalsMade(float $fieldGoalsMade) : self
    {
        $this->fieldGoalsMade = $fieldGoalsMade;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFieldGoalsLongestMade() : float
    {
        return $this->fieldGoalsLongestMade;
    }
    /**
     * 
     *
     * @param float $fieldGoalsLongestMade
     *
     * @return self
     */
    public function setFieldGoalsLongestMade(float $fieldGoalsLongestMade) : self
    {
        $this->fieldGoalsLongestMade = $fieldGoalsLongestMade;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getExtraPointsMade() : float
    {
        return $this->extraPointsMade;
    }
    /**
     * 
     *
     * @param float $extraPointsMade
     *
     * @return self
     */
    public function setExtraPointsMade(float $extraPointsMade) : self
    {
        $this->extraPointsMade = $extraPointsMade;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTwoPointConversionPasses() : float
    {
        return $this->twoPointConversionPasses;
    }
    /**
     * 
     *
     * @param float $twoPointConversionPasses
     *
     * @return self
     */
    public function setTwoPointConversionPasses(float $twoPointConversionPasses) : self
    {
        $this->twoPointConversionPasses = $twoPointConversionPasses;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTwoPointConversionRuns() : float
    {
        return $this->twoPointConversionRuns;
    }
    /**
     * 
     *
     * @param float $twoPointConversionRuns
     *
     * @return self
     */
    public function setTwoPointConversionRuns(float $twoPointConversionRuns) : self
    {
        $this->twoPointConversionRuns = $twoPointConversionRuns;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTwoPointConversionReceptions() : float
    {
        return $this->twoPointConversionReceptions;
    }
    /**
     * 
     *
     * @param float $twoPointConversionReceptions
     *
     * @return self
     */
    public function setTwoPointConversionReceptions(float $twoPointConversionReceptions) : self
    {
        $this->twoPointConversionReceptions = $twoPointConversionReceptions;
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
    public function getFantasyPointsPPR() : float
    {
        return $this->fantasyPointsPPR;
    }
    /**
     * 
     *
     * @param float $fantasyPointsPPR
     *
     * @return self
     */
    public function setFantasyPointsPPR(float $fantasyPointsPPR) : self
    {
        $this->fantasyPointsPPR = $fantasyPointsPPR;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getReceptionPercentage() : float
    {
        return $this->receptionPercentage;
    }
    /**
     * 
     *
     * @param float $receptionPercentage
     *
     * @return self
     */
    public function setReceptionPercentage(float $receptionPercentage) : self
    {
        $this->receptionPercentage = $receptionPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getReceivingYardsPerTarget() : float
    {
        return $this->receivingYardsPerTarget;
    }
    /**
     * 
     *
     * @param float $receivingYardsPerTarget
     *
     * @return self
     */
    public function setReceivingYardsPerTarget(float $receivingYardsPerTarget) : self
    {
        $this->receivingYardsPerTarget = $receivingYardsPerTarget;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTackles() : float
    {
        return $this->tackles;
    }
    /**
     * 
     *
     * @param float $tackles
     *
     * @return self
     */
    public function setTackles(float $tackles) : self
    {
        $this->tackles = $tackles;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOffensiveTouchdowns() : float
    {
        return $this->offensiveTouchdowns;
    }
    /**
     * 
     *
     * @param float $offensiveTouchdowns
     *
     * @return self
     */
    public function setOffensiveTouchdowns(float $offensiveTouchdowns) : self
    {
        $this->offensiveTouchdowns = $offensiveTouchdowns;
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
     * @return float
     */
    public function getTouchdowns() : float
    {
        return $this->touchdowns;
    }
    /**
     * 
     *
     * @param float $touchdowns
     *
     * @return self
     */
    public function setTouchdowns(float $touchdowns) : self
    {
        $this->touchdowns = $touchdowns;
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
     * @return float
     */
    public function getFieldGoalPercentage() : float
    {
        return $this->fieldGoalPercentage;
    }
    /**
     * 
     *
     * @param float $fieldGoalPercentage
     *
     * @return self
     */
    public function setFieldGoalPercentage(float $fieldGoalPercentage) : self
    {
        $this->fieldGoalPercentage = $fieldGoalPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPlayerSeasonID() : int
    {
        return $this->playerSeasonID;
    }
    /**
     * 
     *
     * @param int $playerSeasonID
     *
     * @return self
     */
    public function setPlayerSeasonID(int $playerSeasonID) : self
    {
        $this->playerSeasonID = $playerSeasonID;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFumblesOwnRecoveries() : ?float
    {
        return $this->fumblesOwnRecoveries;
    }
    /**
     * 
     *
     * @param float|null $fumblesOwnRecoveries
     *
     * @return self
     */
    public function setFumblesOwnRecoveries(?float $fumblesOwnRecoveries) : self
    {
        $this->fumblesOwnRecoveries = $fumblesOwnRecoveries;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFumblesOutOfBounds() : ?float
    {
        return $this->fumblesOutOfBounds;
    }
    /**
     * 
     *
     * @param float|null $fumblesOutOfBounds
     *
     * @return self
     */
    public function setFumblesOutOfBounds(?float $fumblesOutOfBounds) : self
    {
        $this->fumblesOutOfBounds = $fumblesOutOfBounds;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getKickReturnFairCatches() : ?float
    {
        return $this->kickReturnFairCatches;
    }
    /**
     * 
     *
     * @param float|null $kickReturnFairCatches
     *
     * @return self
     */
    public function setKickReturnFairCatches(?float $kickReturnFairCatches) : self
    {
        $this->kickReturnFairCatches = $kickReturnFairCatches;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPuntReturnFairCatches() : ?float
    {
        return $this->puntReturnFairCatches;
    }
    /**
     * 
     *
     * @param float|null $puntReturnFairCatches
     *
     * @return self
     */
    public function setPuntReturnFairCatches(?float $puntReturnFairCatches) : self
    {
        $this->puntReturnFairCatches = $puntReturnFairCatches;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPuntTouchbacks() : ?float
    {
        return $this->puntTouchbacks;
    }
    /**
     * 
     *
     * @param float|null $puntTouchbacks
     *
     * @return self
     */
    public function setPuntTouchbacks(?float $puntTouchbacks) : self
    {
        $this->puntTouchbacks = $puntTouchbacks;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPuntInside20() : ?float
    {
        return $this->puntInside20;
    }
    /**
     * 
     *
     * @param float|null $puntInside20
     *
     * @return self
     */
    public function setPuntInside20(?float $puntInside20) : self
    {
        $this->puntInside20 = $puntInside20;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPuntNetAverage() : ?float
    {
        return $this->puntNetAverage;
    }
    /**
     * 
     *
     * @param float|null $puntNetAverage
     *
     * @return self
     */
    public function setPuntNetAverage(?float $puntNetAverage) : self
    {
        $this->puntNetAverage = $puntNetAverage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getExtraPointsAttempted() : ?float
    {
        return $this->extraPointsAttempted;
    }
    /**
     * 
     *
     * @param float|null $extraPointsAttempted
     *
     * @return self
     */
    public function setExtraPointsAttempted(?float $extraPointsAttempted) : self
    {
        $this->extraPointsAttempted = $extraPointsAttempted;
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
    public function getSafeties() : ?float
    {
        return $this->safeties;
    }
    /**
     * 
     *
     * @param float|null $safeties
     *
     * @return self
     */
    public function setSafeties(?float $safeties) : self
    {
        $this->safeties = $safeties;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFieldGoalsHadBlocked() : ?float
    {
        return $this->fieldGoalsHadBlocked;
    }
    /**
     * 
     *
     * @param float|null $fieldGoalsHadBlocked
     *
     * @return self
     */
    public function setFieldGoalsHadBlocked(?float $fieldGoalsHadBlocked) : self
    {
        $this->fieldGoalsHadBlocked = $fieldGoalsHadBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPuntsHadBlocked() : ?float
    {
        return $this->puntsHadBlocked;
    }
    /**
     * 
     *
     * @param float|null $puntsHadBlocked
     *
     * @return self
     */
    public function setPuntsHadBlocked(?float $puntsHadBlocked) : self
    {
        $this->puntsHadBlocked = $puntsHadBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getExtraPointsHadBlocked() : ?float
    {
        return $this->extraPointsHadBlocked;
    }
    /**
     * 
     *
     * @param float|null $extraPointsHadBlocked
     *
     * @return self
     */
    public function setExtraPointsHadBlocked(?float $extraPointsHadBlocked) : self
    {
        $this->extraPointsHadBlocked = $extraPointsHadBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPuntLong() : ?float
    {
        return $this->puntLong;
    }
    /**
     * 
     *
     * @param float|null $puntLong
     *
     * @return self
     */
    public function setPuntLong(?float $puntLong) : self
    {
        $this->puntLong = $puntLong;
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
    public function getPuntNetYards() : ?float
    {
        return $this->puntNetYards;
    }
    /**
     * 
     *
     * @param float|null $puntNetYards
     *
     * @return self
     */
    public function setPuntNetYards(?float $puntNetYards) : self
    {
        $this->puntNetYards = $puntNetYards;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSpecialTeamsFumblesForced() : ?float
    {
        return $this->specialTeamsFumblesForced;
    }
    /**
     * 
     *
     * @param float|null $specialTeamsFumblesForced
     *
     * @return self
     */
    public function setSpecialTeamsFumblesForced(?float $specialTeamsFumblesForced) : self
    {
        $this->specialTeamsFumblesForced = $specialTeamsFumblesForced;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSpecialTeamsFumblesRecovered() : ?float
    {
        return $this->specialTeamsFumblesRecovered;
    }
    /**
     * 
     *
     * @param float|null $specialTeamsFumblesRecovered
     *
     * @return self
     */
    public function setSpecialTeamsFumblesRecovered(?float $specialTeamsFumblesRecovered) : self
    {
        $this->specialTeamsFumblesRecovered = $specialTeamsFumblesRecovered;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getMiscFumblesForced() : ?float
    {
        return $this->miscFumblesForced;
    }
    /**
     * 
     *
     * @param float|null $miscFumblesForced
     *
     * @return self
     */
    public function setMiscFumblesForced(?float $miscFumblesForced) : self
    {
        $this->miscFumblesForced = $miscFumblesForced;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getMiscFumblesRecovered() : ?float
    {
        return $this->miscFumblesRecovered;
    }
    /**
     * 
     *
     * @param float|null $miscFumblesRecovered
     *
     * @return self
     */
    public function setMiscFumblesRecovered(?float $miscFumblesRecovered) : self
    {
        $this->miscFumblesRecovered = $miscFumblesRecovered;
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
     * @return float|null
     */
    public function getSafetiesAllowed() : ?float
    {
        return $this->safetiesAllowed;
    }
    /**
     * 
     *
     * @param float|null $safetiesAllowed
     *
     * @return self
     */
    public function setSafetiesAllowed(?float $safetiesAllowed) : self
    {
        $this->safetiesAllowed = $safetiesAllowed;
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
     * @return int|null
     */
    public function getOffensiveSnapsPlayed() : ?int
    {
        return $this->offensiveSnapsPlayed;
    }
    /**
     * 
     *
     * @param int|null $offensiveSnapsPlayed
     *
     * @return self
     */
    public function setOffensiveSnapsPlayed(?int $offensiveSnapsPlayed) : self
    {
        $this->offensiveSnapsPlayed = $offensiveSnapsPlayed;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDefensiveSnapsPlayed() : ?int
    {
        return $this->defensiveSnapsPlayed;
    }
    /**
     * 
     *
     * @param int|null $defensiveSnapsPlayed
     *
     * @return self
     */
    public function setDefensiveSnapsPlayed(?int $defensiveSnapsPlayed) : self
    {
        $this->defensiveSnapsPlayed = $defensiveSnapsPlayed;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSpecialTeamsSnapsPlayed() : ?int
    {
        return $this->specialTeamsSnapsPlayed;
    }
    /**
     * 
     *
     * @param int|null $specialTeamsSnapsPlayed
     *
     * @return self
     */
    public function setSpecialTeamsSnapsPlayed(?int $specialTeamsSnapsPlayed) : self
    {
        $this->specialTeamsSnapsPlayed = $specialTeamsSnapsPlayed;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOffensiveTeamSnaps() : ?int
    {
        return $this->offensiveTeamSnaps;
    }
    /**
     * 
     *
     * @param int|null $offensiveTeamSnaps
     *
     * @return self
     */
    public function setOffensiveTeamSnaps(?int $offensiveTeamSnaps) : self
    {
        $this->offensiveTeamSnaps = $offensiveTeamSnaps;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDefensiveTeamSnaps() : ?int
    {
        return $this->defensiveTeamSnaps;
    }
    /**
     * 
     *
     * @param int|null $defensiveTeamSnaps
     *
     * @return self
     */
    public function setDefensiveTeamSnaps(?int $defensiveTeamSnaps) : self
    {
        $this->defensiveTeamSnaps = $defensiveTeamSnaps;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSpecialTeamsTeamSnaps() : ?int
    {
        return $this->specialTeamsTeamSnaps;
    }
    /**
     * 
     *
     * @param int|null $specialTeamsTeamSnaps
     *
     * @return self
     */
    public function setSpecialTeamsTeamSnaps(?int $specialTeamsTeamSnaps) : self
    {
        $this->specialTeamsTeamSnaps = $specialTeamsTeamSnaps;
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
    public function getFieldGoalsMade0to19() : ?float
    {
        return $this->fieldGoalsMade0to19;
    }
    /**
     * 
     *
     * @param float|null $fieldGoalsMade0to19
     *
     * @return self
     */
    public function setFieldGoalsMade0to19(?float $fieldGoalsMade0to19) : self
    {
        $this->fieldGoalsMade0to19 = $fieldGoalsMade0to19;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFieldGoalsMade20to29() : ?float
    {
        return $this->fieldGoalsMade20to29;
    }
    /**
     * 
     *
     * @param float|null $fieldGoalsMade20to29
     *
     * @return self
     */
    public function setFieldGoalsMade20to29(?float $fieldGoalsMade20to29) : self
    {
        $this->fieldGoalsMade20to29 = $fieldGoalsMade20to29;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFieldGoalsMade30to39() : ?float
    {
        return $this->fieldGoalsMade30to39;
    }
    /**
     * 
     *
     * @param float|null $fieldGoalsMade30to39
     *
     * @return self
     */
    public function setFieldGoalsMade30to39(?float $fieldGoalsMade30to39) : self
    {
        $this->fieldGoalsMade30to39 = $fieldGoalsMade30to39;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFieldGoalsMade40to49() : ?float
    {
        return $this->fieldGoalsMade40to49;
    }
    /**
     * 
     *
     * @param float|null $fieldGoalsMade40to49
     *
     * @return self
     */
    public function setFieldGoalsMade40to49(?float $fieldGoalsMade40to49) : self
    {
        $this->fieldGoalsMade40to49 = $fieldGoalsMade40to49;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFieldGoalsMade50Plus() : ?float
    {
        return $this->fieldGoalsMade50Plus;
    }
    /**
     * 
     *
     * @param float|null $fieldGoalsMade50Plus
     *
     * @return self
     */
    public function setFieldGoalsMade50Plus(?float $fieldGoalsMade50Plus) : self
    {
        $this->fieldGoalsMade50Plus = $fieldGoalsMade50Plus;
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
    public function getAverageDraftPositionRookie() : ?float
    {
        return $this->averageDraftPositionRookie;
    }
    /**
     * 
     *
     * @param float|null $averageDraftPositionRookie
     *
     * @return self
     */
    public function setAverageDraftPositionRookie(?float $averageDraftPositionRookie) : self
    {
        $this->averageDraftPositionRookie = $averageDraftPositionRookie;
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