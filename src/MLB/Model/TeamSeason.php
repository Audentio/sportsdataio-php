<?php

namespace Sportsdata\API\MLB\Model;

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
    protected $globalTeamID;
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
    protected $atBats;
    /**
     * 
     *
     * @var float
     */
    protected $runs;
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
    protected $singles;
    /**
     * 
     *
     * @var float
     */
    protected $doubles;
    /**
     * 
     *
     * @var float
     */
    protected $triples;
    /**
     * 
     *
     * @var float
     */
    protected $homeRuns;
    /**
     * 
     *
     * @var float
     */
    protected $runsBattedIn;
    /**
     * 
     *
     * @var float
     */
    protected $battingAverage;
    /**
     * 
     *
     * @var float
     */
    protected $outs;
    /**
     * 
     *
     * @var float
     */
    protected $strikeouts;
    /**
     * 
     *
     * @var float
     */
    protected $walks;
    /**
     * 
     *
     * @var float
     */
    protected $hitByPitch;
    /**
     * 
     *
     * @var float
     */
    protected $sacrifices;
    /**
     * 
     *
     * @var float
     */
    protected $sacrificeFlies;
    /**
     * 
     *
     * @var float
     */
    protected $groundIntoDoublePlay;
    /**
     * 
     *
     * @var float
     */
    protected $stolenBases;
    /**
     * 
     *
     * @var float
     */
    protected $caughtStealing;
    /**
     * 
     *
     * @var float
     */
    protected $pitchesSeen;
    /**
     * 
     *
     * @var float
     */
    protected $onBasePercentage;
    /**
     * 
     *
     * @var float
     */
    protected $sluggingPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $onBasePlusSlugging;
    /**
     * 
     *
     * @var float
     */
    protected $errors;
    /**
     * 
     *
     * @var float
     */
    protected $wins;
    /**
     * 
     *
     * @var float
     */
    protected $losses;
    /**
     * 
     *
     * @var float
     */
    protected $saves;
    /**
     * 
     *
     * @var float
     */
    protected $inningsPitchedDecimal;
    /**
     * 
     *
     * @var float
     */
    protected $totalOutsPitched;
    /**
     * 
     *
     * @var float
     */
    protected $inningsPitchedFull;
    /**
     * 
     *
     * @var float
     */
    protected $inningsPitchedOuts;
    /**
     * 
     *
     * @var float
     */
    protected $earnedRunAverage;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingHits;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingRuns;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingEarnedRuns;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingWalks;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingStrikeouts;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingHomeRuns;
    /**
     * 
     *
     * @var float
     */
    protected $pitchesThrown;
    /**
     * 
     *
     * @var float
     */
    protected $pitchesThrownStrikes;
    /**
     * 
     *
     * @var float
     */
    protected $walksHitsPerInningsPitched;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingBattingAverageAgainst;
    /**
     * 
     *
     * @var float
     */
    protected $grandSlams;
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
    protected $plateAppearances;
    /**
     * 
     *
     * @var float
     */
    protected $totalBases;
    /**
     * 
     *
     * @var float
     */
    protected $flyOuts;
    /**
     * 
     *
     * @var float
     */
    protected $groundOuts;
    /**
     * 
     *
     * @var float
     */
    protected $lineOuts;
    /**
     * 
     *
     * @var float
     */
    protected $popOuts;
    /**
     * 
     *
     * @var float
     */
    protected $intentionalWalks;
    /**
     * 
     *
     * @var float
     */
    protected $reachedOnError;
    /**
     * 
     *
     * @var float
     */
    protected $ballsInPlay;
    /**
     * 
     *
     * @var float
     */
    protected $battingAverageOnBallsInPlay;
    /**
     * 
     *
     * @var float
     */
    protected $weightedOnBasePercentage;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingSingles;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingDoubles;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingTriples;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingGrandSlams;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingHitByPitch;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingSacrifices;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingSacrificeFlies;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingGroundIntoDoublePlay;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingCompleteGames;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingShutOuts;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingNoHitters;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingPerfectGames;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingPlateAppearances;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingTotalBases;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingFlyOuts;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingGroundOuts;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingLineOuts;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingPopOuts;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingIntentionalWalks;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingReachedOnError;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingCatchersInterference;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingBallsInPlay;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingOnBasePercentage;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingSluggingPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingOnBasePlusSlugging;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingStrikeoutsPerNineInnings;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingWalksPerNineInnings;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingBattingAverageOnBallsInPlay;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingWeightedOnBasePercentage;
    /**
     * 
     *
     * @var float
     */
    protected $doublePlays;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingDoublePlays;
    /**
     * 
     *
     * @var bool
     */
    protected $battingOrderConfirmed;
    /**
     * 
     *
     * @var float
     */
    protected $isolatedPower;
    /**
     * 
     *
     * @var float
     */
    protected $fieldingIndependentPitching;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingQualityStarts;
    /**
     * 
     *
     * @var int
     */
    protected $pitchingInningStarted;
    /**
     * 
     *
     * @var float
     */
    protected $leftOnBase;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingHolds;
    /**
     * 
     *
     * @var float
     */
    protected $pitchingBlownSaves;
    /**
     * 
     *
     * @var int
     */
    protected $substituteBattingOrder;
    /**
     * 
     *
     * @var int
     */
    protected $substituteBattingOrderSequence;
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
    public function getAtBats() : float
    {
        return $this->atBats;
    }
    /**
     * 
     *
     * @param float $atBats
     *
     * @return self
     */
    public function setAtBats(float $atBats) : self
    {
        $this->atBats = $atBats;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRuns() : float
    {
        return $this->runs;
    }
    /**
     * 
     *
     * @param float $runs
     *
     * @return self
     */
    public function setRuns(float $runs) : self
    {
        $this->runs = $runs;
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
    public function getSingles() : float
    {
        return $this->singles;
    }
    /**
     * 
     *
     * @param float $singles
     *
     * @return self
     */
    public function setSingles(float $singles) : self
    {
        $this->singles = $singles;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDoubles() : float
    {
        return $this->doubles;
    }
    /**
     * 
     *
     * @param float $doubles
     *
     * @return self
     */
    public function setDoubles(float $doubles) : self
    {
        $this->doubles = $doubles;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTriples() : float
    {
        return $this->triples;
    }
    /**
     * 
     *
     * @param float $triples
     *
     * @return self
     */
    public function setTriples(float $triples) : self
    {
        $this->triples = $triples;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHomeRuns() : float
    {
        return $this->homeRuns;
    }
    /**
     * 
     *
     * @param float $homeRuns
     *
     * @return self
     */
    public function setHomeRuns(float $homeRuns) : self
    {
        $this->homeRuns = $homeRuns;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRunsBattedIn() : float
    {
        return $this->runsBattedIn;
    }
    /**
     * 
     *
     * @param float $runsBattedIn
     *
     * @return self
     */
    public function setRunsBattedIn(float $runsBattedIn) : self
    {
        $this->runsBattedIn = $runsBattedIn;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBattingAverage() : float
    {
        return $this->battingAverage;
    }
    /**
     * 
     *
     * @param float $battingAverage
     *
     * @return self
     */
    public function setBattingAverage(float $battingAverage) : self
    {
        $this->battingAverage = $battingAverage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOuts() : float
    {
        return $this->outs;
    }
    /**
     * 
     *
     * @param float $outs
     *
     * @return self
     */
    public function setOuts(float $outs) : self
    {
        $this->outs = $outs;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getStrikeouts() : float
    {
        return $this->strikeouts;
    }
    /**
     * 
     *
     * @param float $strikeouts
     *
     * @return self
     */
    public function setStrikeouts(float $strikeouts) : self
    {
        $this->strikeouts = $strikeouts;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getWalks() : float
    {
        return $this->walks;
    }
    /**
     * 
     *
     * @param float $walks
     *
     * @return self
     */
    public function setWalks(float $walks) : self
    {
        $this->walks = $walks;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHitByPitch() : float
    {
        return $this->hitByPitch;
    }
    /**
     * 
     *
     * @param float $hitByPitch
     *
     * @return self
     */
    public function setHitByPitch(float $hitByPitch) : self
    {
        $this->hitByPitch = $hitByPitch;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSacrifices() : float
    {
        return $this->sacrifices;
    }
    /**
     * 
     *
     * @param float $sacrifices
     *
     * @return self
     */
    public function setSacrifices(float $sacrifices) : self
    {
        $this->sacrifices = $sacrifices;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSacrificeFlies() : float
    {
        return $this->sacrificeFlies;
    }
    /**
     * 
     *
     * @param float $sacrificeFlies
     *
     * @return self
     */
    public function setSacrificeFlies(float $sacrificeFlies) : self
    {
        $this->sacrificeFlies = $sacrificeFlies;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getGroundIntoDoublePlay() : float
    {
        return $this->groundIntoDoublePlay;
    }
    /**
     * 
     *
     * @param float $groundIntoDoublePlay
     *
     * @return self
     */
    public function setGroundIntoDoublePlay(float $groundIntoDoublePlay) : self
    {
        $this->groundIntoDoublePlay = $groundIntoDoublePlay;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getStolenBases() : float
    {
        return $this->stolenBases;
    }
    /**
     * 
     *
     * @param float $stolenBases
     *
     * @return self
     */
    public function setStolenBases(float $stolenBases) : self
    {
        $this->stolenBases = $stolenBases;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCaughtStealing() : float
    {
        return $this->caughtStealing;
    }
    /**
     * 
     *
     * @param float $caughtStealing
     *
     * @return self
     */
    public function setCaughtStealing(float $caughtStealing) : self
    {
        $this->caughtStealing = $caughtStealing;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchesSeen() : float
    {
        return $this->pitchesSeen;
    }
    /**
     * 
     *
     * @param float $pitchesSeen
     *
     * @return self
     */
    public function setPitchesSeen(float $pitchesSeen) : self
    {
        $this->pitchesSeen = $pitchesSeen;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOnBasePercentage() : float
    {
        return $this->onBasePercentage;
    }
    /**
     * 
     *
     * @param float $onBasePercentage
     *
     * @return self
     */
    public function setOnBasePercentage(float $onBasePercentage) : self
    {
        $this->onBasePercentage = $onBasePercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSluggingPercentage() : float
    {
        return $this->sluggingPercentage;
    }
    /**
     * 
     *
     * @param float $sluggingPercentage
     *
     * @return self
     */
    public function setSluggingPercentage(float $sluggingPercentage) : self
    {
        $this->sluggingPercentage = $sluggingPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOnBasePlusSlugging() : float
    {
        return $this->onBasePlusSlugging;
    }
    /**
     * 
     *
     * @param float $onBasePlusSlugging
     *
     * @return self
     */
    public function setOnBasePlusSlugging(float $onBasePlusSlugging) : self
    {
        $this->onBasePlusSlugging = $onBasePlusSlugging;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getErrors() : float
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param float $errors
     *
     * @return self
     */
    public function setErrors(float $errors) : self
    {
        $this->errors = $errors;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getWins() : float
    {
        return $this->wins;
    }
    /**
     * 
     *
     * @param float $wins
     *
     * @return self
     */
    public function setWins(float $wins) : self
    {
        $this->wins = $wins;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getLosses() : float
    {
        return $this->losses;
    }
    /**
     * 
     *
     * @param float $losses
     *
     * @return self
     */
    public function setLosses(float $losses) : self
    {
        $this->losses = $losses;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSaves() : float
    {
        return $this->saves;
    }
    /**
     * 
     *
     * @param float $saves
     *
     * @return self
     */
    public function setSaves(float $saves) : self
    {
        $this->saves = $saves;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getInningsPitchedDecimal() : float
    {
        return $this->inningsPitchedDecimal;
    }
    /**
     * 
     *
     * @param float $inningsPitchedDecimal
     *
     * @return self
     */
    public function setInningsPitchedDecimal(float $inningsPitchedDecimal) : self
    {
        $this->inningsPitchedDecimal = $inningsPitchedDecimal;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalOutsPitched() : float
    {
        return $this->totalOutsPitched;
    }
    /**
     * 
     *
     * @param float $totalOutsPitched
     *
     * @return self
     */
    public function setTotalOutsPitched(float $totalOutsPitched) : self
    {
        $this->totalOutsPitched = $totalOutsPitched;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getInningsPitchedFull() : float
    {
        return $this->inningsPitchedFull;
    }
    /**
     * 
     *
     * @param float $inningsPitchedFull
     *
     * @return self
     */
    public function setInningsPitchedFull(float $inningsPitchedFull) : self
    {
        $this->inningsPitchedFull = $inningsPitchedFull;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getInningsPitchedOuts() : float
    {
        return $this->inningsPitchedOuts;
    }
    /**
     * 
     *
     * @param float $inningsPitchedOuts
     *
     * @return self
     */
    public function setInningsPitchedOuts(float $inningsPitchedOuts) : self
    {
        $this->inningsPitchedOuts = $inningsPitchedOuts;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getEarnedRunAverage() : float
    {
        return $this->earnedRunAverage;
    }
    /**
     * 
     *
     * @param float $earnedRunAverage
     *
     * @return self
     */
    public function setEarnedRunAverage(float $earnedRunAverage) : self
    {
        $this->earnedRunAverage = $earnedRunAverage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingHits() : float
    {
        return $this->pitchingHits;
    }
    /**
     * 
     *
     * @param float $pitchingHits
     *
     * @return self
     */
    public function setPitchingHits(float $pitchingHits) : self
    {
        $this->pitchingHits = $pitchingHits;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingRuns() : float
    {
        return $this->pitchingRuns;
    }
    /**
     * 
     *
     * @param float $pitchingRuns
     *
     * @return self
     */
    public function setPitchingRuns(float $pitchingRuns) : self
    {
        $this->pitchingRuns = $pitchingRuns;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingEarnedRuns() : float
    {
        return $this->pitchingEarnedRuns;
    }
    /**
     * 
     *
     * @param float $pitchingEarnedRuns
     *
     * @return self
     */
    public function setPitchingEarnedRuns(float $pitchingEarnedRuns) : self
    {
        $this->pitchingEarnedRuns = $pitchingEarnedRuns;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingWalks() : float
    {
        return $this->pitchingWalks;
    }
    /**
     * 
     *
     * @param float $pitchingWalks
     *
     * @return self
     */
    public function setPitchingWalks(float $pitchingWalks) : self
    {
        $this->pitchingWalks = $pitchingWalks;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingStrikeouts() : float
    {
        return $this->pitchingStrikeouts;
    }
    /**
     * 
     *
     * @param float $pitchingStrikeouts
     *
     * @return self
     */
    public function setPitchingStrikeouts(float $pitchingStrikeouts) : self
    {
        $this->pitchingStrikeouts = $pitchingStrikeouts;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingHomeRuns() : float
    {
        return $this->pitchingHomeRuns;
    }
    /**
     * 
     *
     * @param float $pitchingHomeRuns
     *
     * @return self
     */
    public function setPitchingHomeRuns(float $pitchingHomeRuns) : self
    {
        $this->pitchingHomeRuns = $pitchingHomeRuns;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchesThrown() : float
    {
        return $this->pitchesThrown;
    }
    /**
     * 
     *
     * @param float $pitchesThrown
     *
     * @return self
     */
    public function setPitchesThrown(float $pitchesThrown) : self
    {
        $this->pitchesThrown = $pitchesThrown;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchesThrownStrikes() : float
    {
        return $this->pitchesThrownStrikes;
    }
    /**
     * 
     *
     * @param float $pitchesThrownStrikes
     *
     * @return self
     */
    public function setPitchesThrownStrikes(float $pitchesThrownStrikes) : self
    {
        $this->pitchesThrownStrikes = $pitchesThrownStrikes;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getWalksHitsPerInningsPitched() : float
    {
        return $this->walksHitsPerInningsPitched;
    }
    /**
     * 
     *
     * @param float $walksHitsPerInningsPitched
     *
     * @return self
     */
    public function setWalksHitsPerInningsPitched(float $walksHitsPerInningsPitched) : self
    {
        $this->walksHitsPerInningsPitched = $walksHitsPerInningsPitched;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingBattingAverageAgainst() : float
    {
        return $this->pitchingBattingAverageAgainst;
    }
    /**
     * 
     *
     * @param float $pitchingBattingAverageAgainst
     *
     * @return self
     */
    public function setPitchingBattingAverageAgainst(float $pitchingBattingAverageAgainst) : self
    {
        $this->pitchingBattingAverageAgainst = $pitchingBattingAverageAgainst;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getGrandSlams() : float
    {
        return $this->grandSlams;
    }
    /**
     * 
     *
     * @param float $grandSlams
     *
     * @return self
     */
    public function setGrandSlams(float $grandSlams) : self
    {
        $this->grandSlams = $grandSlams;
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
    public function getPlateAppearances() : float
    {
        return $this->plateAppearances;
    }
    /**
     * 
     *
     * @param float $plateAppearances
     *
     * @return self
     */
    public function setPlateAppearances(float $plateAppearances) : self
    {
        $this->plateAppearances = $plateAppearances;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalBases() : float
    {
        return $this->totalBases;
    }
    /**
     * 
     *
     * @param float $totalBases
     *
     * @return self
     */
    public function setTotalBases(float $totalBases) : self
    {
        $this->totalBases = $totalBases;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFlyOuts() : float
    {
        return $this->flyOuts;
    }
    /**
     * 
     *
     * @param float $flyOuts
     *
     * @return self
     */
    public function setFlyOuts(float $flyOuts) : self
    {
        $this->flyOuts = $flyOuts;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getGroundOuts() : float
    {
        return $this->groundOuts;
    }
    /**
     * 
     *
     * @param float $groundOuts
     *
     * @return self
     */
    public function setGroundOuts(float $groundOuts) : self
    {
        $this->groundOuts = $groundOuts;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getLineOuts() : float
    {
        return $this->lineOuts;
    }
    /**
     * 
     *
     * @param float $lineOuts
     *
     * @return self
     */
    public function setLineOuts(float $lineOuts) : self
    {
        $this->lineOuts = $lineOuts;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPopOuts() : float
    {
        return $this->popOuts;
    }
    /**
     * 
     *
     * @param float $popOuts
     *
     * @return self
     */
    public function setPopOuts(float $popOuts) : self
    {
        $this->popOuts = $popOuts;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getIntentionalWalks() : float
    {
        return $this->intentionalWalks;
    }
    /**
     * 
     *
     * @param float $intentionalWalks
     *
     * @return self
     */
    public function setIntentionalWalks(float $intentionalWalks) : self
    {
        $this->intentionalWalks = $intentionalWalks;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getReachedOnError() : float
    {
        return $this->reachedOnError;
    }
    /**
     * 
     *
     * @param float $reachedOnError
     *
     * @return self
     */
    public function setReachedOnError(float $reachedOnError) : self
    {
        $this->reachedOnError = $reachedOnError;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBallsInPlay() : float
    {
        return $this->ballsInPlay;
    }
    /**
     * 
     *
     * @param float $ballsInPlay
     *
     * @return self
     */
    public function setBallsInPlay(float $ballsInPlay) : self
    {
        $this->ballsInPlay = $ballsInPlay;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBattingAverageOnBallsInPlay() : float
    {
        return $this->battingAverageOnBallsInPlay;
    }
    /**
     * 
     *
     * @param float $battingAverageOnBallsInPlay
     *
     * @return self
     */
    public function setBattingAverageOnBallsInPlay(float $battingAverageOnBallsInPlay) : self
    {
        $this->battingAverageOnBallsInPlay = $battingAverageOnBallsInPlay;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getWeightedOnBasePercentage() : float
    {
        return $this->weightedOnBasePercentage;
    }
    /**
     * 
     *
     * @param float $weightedOnBasePercentage
     *
     * @return self
     */
    public function setWeightedOnBasePercentage(float $weightedOnBasePercentage) : self
    {
        $this->weightedOnBasePercentage = $weightedOnBasePercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingSingles() : float
    {
        return $this->pitchingSingles;
    }
    /**
     * 
     *
     * @param float $pitchingSingles
     *
     * @return self
     */
    public function setPitchingSingles(float $pitchingSingles) : self
    {
        $this->pitchingSingles = $pitchingSingles;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingDoubles() : float
    {
        return $this->pitchingDoubles;
    }
    /**
     * 
     *
     * @param float $pitchingDoubles
     *
     * @return self
     */
    public function setPitchingDoubles(float $pitchingDoubles) : self
    {
        $this->pitchingDoubles = $pitchingDoubles;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingTriples() : float
    {
        return $this->pitchingTriples;
    }
    /**
     * 
     *
     * @param float $pitchingTriples
     *
     * @return self
     */
    public function setPitchingTriples(float $pitchingTriples) : self
    {
        $this->pitchingTriples = $pitchingTriples;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingGrandSlams() : float
    {
        return $this->pitchingGrandSlams;
    }
    /**
     * 
     *
     * @param float $pitchingGrandSlams
     *
     * @return self
     */
    public function setPitchingGrandSlams(float $pitchingGrandSlams) : self
    {
        $this->pitchingGrandSlams = $pitchingGrandSlams;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingHitByPitch() : float
    {
        return $this->pitchingHitByPitch;
    }
    /**
     * 
     *
     * @param float $pitchingHitByPitch
     *
     * @return self
     */
    public function setPitchingHitByPitch(float $pitchingHitByPitch) : self
    {
        $this->pitchingHitByPitch = $pitchingHitByPitch;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingSacrifices() : float
    {
        return $this->pitchingSacrifices;
    }
    /**
     * 
     *
     * @param float $pitchingSacrifices
     *
     * @return self
     */
    public function setPitchingSacrifices(float $pitchingSacrifices) : self
    {
        $this->pitchingSacrifices = $pitchingSacrifices;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingSacrificeFlies() : float
    {
        return $this->pitchingSacrificeFlies;
    }
    /**
     * 
     *
     * @param float $pitchingSacrificeFlies
     *
     * @return self
     */
    public function setPitchingSacrificeFlies(float $pitchingSacrificeFlies) : self
    {
        $this->pitchingSacrificeFlies = $pitchingSacrificeFlies;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingGroundIntoDoublePlay() : float
    {
        return $this->pitchingGroundIntoDoublePlay;
    }
    /**
     * 
     *
     * @param float $pitchingGroundIntoDoublePlay
     *
     * @return self
     */
    public function setPitchingGroundIntoDoublePlay(float $pitchingGroundIntoDoublePlay) : self
    {
        $this->pitchingGroundIntoDoublePlay = $pitchingGroundIntoDoublePlay;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingCompleteGames() : float
    {
        return $this->pitchingCompleteGames;
    }
    /**
     * 
     *
     * @param float $pitchingCompleteGames
     *
     * @return self
     */
    public function setPitchingCompleteGames(float $pitchingCompleteGames) : self
    {
        $this->pitchingCompleteGames = $pitchingCompleteGames;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingShutOuts() : float
    {
        return $this->pitchingShutOuts;
    }
    /**
     * 
     *
     * @param float $pitchingShutOuts
     *
     * @return self
     */
    public function setPitchingShutOuts(float $pitchingShutOuts) : self
    {
        $this->pitchingShutOuts = $pitchingShutOuts;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingNoHitters() : float
    {
        return $this->pitchingNoHitters;
    }
    /**
     * 
     *
     * @param float $pitchingNoHitters
     *
     * @return self
     */
    public function setPitchingNoHitters(float $pitchingNoHitters) : self
    {
        $this->pitchingNoHitters = $pitchingNoHitters;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingPerfectGames() : float
    {
        return $this->pitchingPerfectGames;
    }
    /**
     * 
     *
     * @param float $pitchingPerfectGames
     *
     * @return self
     */
    public function setPitchingPerfectGames(float $pitchingPerfectGames) : self
    {
        $this->pitchingPerfectGames = $pitchingPerfectGames;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingPlateAppearances() : float
    {
        return $this->pitchingPlateAppearances;
    }
    /**
     * 
     *
     * @param float $pitchingPlateAppearances
     *
     * @return self
     */
    public function setPitchingPlateAppearances(float $pitchingPlateAppearances) : self
    {
        $this->pitchingPlateAppearances = $pitchingPlateAppearances;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingTotalBases() : float
    {
        return $this->pitchingTotalBases;
    }
    /**
     * 
     *
     * @param float $pitchingTotalBases
     *
     * @return self
     */
    public function setPitchingTotalBases(float $pitchingTotalBases) : self
    {
        $this->pitchingTotalBases = $pitchingTotalBases;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingFlyOuts() : float
    {
        return $this->pitchingFlyOuts;
    }
    /**
     * 
     *
     * @param float $pitchingFlyOuts
     *
     * @return self
     */
    public function setPitchingFlyOuts(float $pitchingFlyOuts) : self
    {
        $this->pitchingFlyOuts = $pitchingFlyOuts;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingGroundOuts() : float
    {
        return $this->pitchingGroundOuts;
    }
    /**
     * 
     *
     * @param float $pitchingGroundOuts
     *
     * @return self
     */
    public function setPitchingGroundOuts(float $pitchingGroundOuts) : self
    {
        $this->pitchingGroundOuts = $pitchingGroundOuts;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingLineOuts() : float
    {
        return $this->pitchingLineOuts;
    }
    /**
     * 
     *
     * @param float $pitchingLineOuts
     *
     * @return self
     */
    public function setPitchingLineOuts(float $pitchingLineOuts) : self
    {
        $this->pitchingLineOuts = $pitchingLineOuts;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingPopOuts() : float
    {
        return $this->pitchingPopOuts;
    }
    /**
     * 
     *
     * @param float $pitchingPopOuts
     *
     * @return self
     */
    public function setPitchingPopOuts(float $pitchingPopOuts) : self
    {
        $this->pitchingPopOuts = $pitchingPopOuts;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingIntentionalWalks() : float
    {
        return $this->pitchingIntentionalWalks;
    }
    /**
     * 
     *
     * @param float $pitchingIntentionalWalks
     *
     * @return self
     */
    public function setPitchingIntentionalWalks(float $pitchingIntentionalWalks) : self
    {
        $this->pitchingIntentionalWalks = $pitchingIntentionalWalks;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingReachedOnError() : float
    {
        return $this->pitchingReachedOnError;
    }
    /**
     * 
     *
     * @param float $pitchingReachedOnError
     *
     * @return self
     */
    public function setPitchingReachedOnError(float $pitchingReachedOnError) : self
    {
        $this->pitchingReachedOnError = $pitchingReachedOnError;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingCatchersInterference() : float
    {
        return $this->pitchingCatchersInterference;
    }
    /**
     * 
     *
     * @param float $pitchingCatchersInterference
     *
     * @return self
     */
    public function setPitchingCatchersInterference(float $pitchingCatchersInterference) : self
    {
        $this->pitchingCatchersInterference = $pitchingCatchersInterference;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingBallsInPlay() : float
    {
        return $this->pitchingBallsInPlay;
    }
    /**
     * 
     *
     * @param float $pitchingBallsInPlay
     *
     * @return self
     */
    public function setPitchingBallsInPlay(float $pitchingBallsInPlay) : self
    {
        $this->pitchingBallsInPlay = $pitchingBallsInPlay;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingOnBasePercentage() : float
    {
        return $this->pitchingOnBasePercentage;
    }
    /**
     * 
     *
     * @param float $pitchingOnBasePercentage
     *
     * @return self
     */
    public function setPitchingOnBasePercentage(float $pitchingOnBasePercentage) : self
    {
        $this->pitchingOnBasePercentage = $pitchingOnBasePercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingSluggingPercentage() : float
    {
        return $this->pitchingSluggingPercentage;
    }
    /**
     * 
     *
     * @param float $pitchingSluggingPercentage
     *
     * @return self
     */
    public function setPitchingSluggingPercentage(float $pitchingSluggingPercentage) : self
    {
        $this->pitchingSluggingPercentage = $pitchingSluggingPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingOnBasePlusSlugging() : float
    {
        return $this->pitchingOnBasePlusSlugging;
    }
    /**
     * 
     *
     * @param float $pitchingOnBasePlusSlugging
     *
     * @return self
     */
    public function setPitchingOnBasePlusSlugging(float $pitchingOnBasePlusSlugging) : self
    {
        $this->pitchingOnBasePlusSlugging = $pitchingOnBasePlusSlugging;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingStrikeoutsPerNineInnings() : float
    {
        return $this->pitchingStrikeoutsPerNineInnings;
    }
    /**
     * 
     *
     * @param float $pitchingStrikeoutsPerNineInnings
     *
     * @return self
     */
    public function setPitchingStrikeoutsPerNineInnings(float $pitchingStrikeoutsPerNineInnings) : self
    {
        $this->pitchingStrikeoutsPerNineInnings = $pitchingStrikeoutsPerNineInnings;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingWalksPerNineInnings() : float
    {
        return $this->pitchingWalksPerNineInnings;
    }
    /**
     * 
     *
     * @param float $pitchingWalksPerNineInnings
     *
     * @return self
     */
    public function setPitchingWalksPerNineInnings(float $pitchingWalksPerNineInnings) : self
    {
        $this->pitchingWalksPerNineInnings = $pitchingWalksPerNineInnings;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingBattingAverageOnBallsInPlay() : float
    {
        return $this->pitchingBattingAverageOnBallsInPlay;
    }
    /**
     * 
     *
     * @param float $pitchingBattingAverageOnBallsInPlay
     *
     * @return self
     */
    public function setPitchingBattingAverageOnBallsInPlay(float $pitchingBattingAverageOnBallsInPlay) : self
    {
        $this->pitchingBattingAverageOnBallsInPlay = $pitchingBattingAverageOnBallsInPlay;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingWeightedOnBasePercentage() : float
    {
        return $this->pitchingWeightedOnBasePercentage;
    }
    /**
     * 
     *
     * @param float $pitchingWeightedOnBasePercentage
     *
     * @return self
     */
    public function setPitchingWeightedOnBasePercentage(float $pitchingWeightedOnBasePercentage) : self
    {
        $this->pitchingWeightedOnBasePercentage = $pitchingWeightedOnBasePercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDoublePlays() : float
    {
        return $this->doublePlays;
    }
    /**
     * 
     *
     * @param float $doublePlays
     *
     * @return self
     */
    public function setDoublePlays(float $doublePlays) : self
    {
        $this->doublePlays = $doublePlays;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingDoublePlays() : float
    {
        return $this->pitchingDoublePlays;
    }
    /**
     * 
     *
     * @param float $pitchingDoublePlays
     *
     * @return self
     */
    public function setPitchingDoublePlays(float $pitchingDoublePlays) : self
    {
        $this->pitchingDoublePlays = $pitchingDoublePlays;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getBattingOrderConfirmed() : bool
    {
        return $this->battingOrderConfirmed;
    }
    /**
     * 
     *
     * @param bool $battingOrderConfirmed
     *
     * @return self
     */
    public function setBattingOrderConfirmed(bool $battingOrderConfirmed) : self
    {
        $this->battingOrderConfirmed = $battingOrderConfirmed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getIsolatedPower() : float
    {
        return $this->isolatedPower;
    }
    /**
     * 
     *
     * @param float $isolatedPower
     *
     * @return self
     */
    public function setIsolatedPower(float $isolatedPower) : self
    {
        $this->isolatedPower = $isolatedPower;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFieldingIndependentPitching() : float
    {
        return $this->fieldingIndependentPitching;
    }
    /**
     * 
     *
     * @param float $fieldingIndependentPitching
     *
     * @return self
     */
    public function setFieldingIndependentPitching(float $fieldingIndependentPitching) : self
    {
        $this->fieldingIndependentPitching = $fieldingIndependentPitching;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingQualityStarts() : float
    {
        return $this->pitchingQualityStarts;
    }
    /**
     * 
     *
     * @param float $pitchingQualityStarts
     *
     * @return self
     */
    public function setPitchingQualityStarts(float $pitchingQualityStarts) : self
    {
        $this->pitchingQualityStarts = $pitchingQualityStarts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPitchingInningStarted() : int
    {
        return $this->pitchingInningStarted;
    }
    /**
     * 
     *
     * @param int $pitchingInningStarted
     *
     * @return self
     */
    public function setPitchingInningStarted(int $pitchingInningStarted) : self
    {
        $this->pitchingInningStarted = $pitchingInningStarted;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getLeftOnBase() : float
    {
        return $this->leftOnBase;
    }
    /**
     * 
     *
     * @param float $leftOnBase
     *
     * @return self
     */
    public function setLeftOnBase(float $leftOnBase) : self
    {
        $this->leftOnBase = $leftOnBase;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingHolds() : float
    {
        return $this->pitchingHolds;
    }
    /**
     * 
     *
     * @param float $pitchingHolds
     *
     * @return self
     */
    public function setPitchingHolds(float $pitchingHolds) : self
    {
        $this->pitchingHolds = $pitchingHolds;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPitchingBlownSaves() : float
    {
        return $this->pitchingBlownSaves;
    }
    /**
     * 
     *
     * @param float $pitchingBlownSaves
     *
     * @return self
     */
    public function setPitchingBlownSaves(float $pitchingBlownSaves) : self
    {
        $this->pitchingBlownSaves = $pitchingBlownSaves;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSubstituteBattingOrder() : int
    {
        return $this->substituteBattingOrder;
    }
    /**
     * 
     *
     * @param int $substituteBattingOrder
     *
     * @return self
     */
    public function setSubstituteBattingOrder(int $substituteBattingOrder) : self
    {
        $this->substituteBattingOrder = $substituteBattingOrder;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSubstituteBattingOrderSequence() : int
    {
        return $this->substituteBattingOrderSequence;
    }
    /**
     * 
     *
     * @param int $substituteBattingOrderSequence
     *
     * @return self
     */
    public function setSubstituteBattingOrderSequence(int $substituteBattingOrderSequence) : self
    {
        $this->substituteBattingOrderSequence = $substituteBattingOrderSequence;
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