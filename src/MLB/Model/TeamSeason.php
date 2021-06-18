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
     * @var int|null
     */
    protected $teamID;
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
    protected $atBats;
    /**
     * 
     *
     * @var float|null
     */
    protected $runs;
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
    protected $singles;
    /**
     * 
     *
     * @var float|null
     */
    protected $doubles;
    /**
     * 
     *
     * @var float|null
     */
    protected $triples;
    /**
     * 
     *
     * @var float|null
     */
    protected $homeRuns;
    /**
     * 
     *
     * @var float|null
     */
    protected $runsBattedIn;
    /**
     * 
     *
     * @var float|null
     */
    protected $battingAverage;
    /**
     * 
     *
     * @var float|null
     */
    protected $outs;
    /**
     * 
     *
     * @var float|null
     */
    protected $strikeouts;
    /**
     * 
     *
     * @var float|null
     */
    protected $walks;
    /**
     * 
     *
     * @var float|null
     */
    protected $hitByPitch;
    /**
     * 
     *
     * @var float|null
     */
    protected $sacrifices;
    /**
     * 
     *
     * @var float|null
     */
    protected $sacrificeFlies;
    /**
     * 
     *
     * @var float|null
     */
    protected $groundIntoDoublePlay;
    /**
     * 
     *
     * @var float|null
     */
    protected $stolenBases;
    /**
     * 
     *
     * @var float|null
     */
    protected $caughtStealing;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchesSeen;
    /**
     * 
     *
     * @var float|null
     */
    protected $onBasePercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $sluggingPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $onBasePlusSlugging;
    /**
     * 
     *
     * @var float|null
     */
    protected $errors;
    /**
     * 
     *
     * @var float|null
     */
    protected $wins;
    /**
     * 
     *
     * @var float|null
     */
    protected $losses;
    /**
     * 
     *
     * @var float|null
     */
    protected $saves;
    /**
     * 
     *
     * @var float|null
     */
    protected $inningsPitchedDecimal;
    /**
     * 
     *
     * @var float|null
     */
    protected $totalOutsPitched;
    /**
     * 
     *
     * @var float|null
     */
    protected $inningsPitchedFull;
    /**
     * 
     *
     * @var float|null
     */
    protected $inningsPitchedOuts;
    /**
     * 
     *
     * @var float|null
     */
    protected $earnedRunAverage;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingHits;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingRuns;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingEarnedRuns;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingWalks;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingStrikeouts;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingHomeRuns;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchesThrown;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchesThrownStrikes;
    /**
     * 
     *
     * @var float|null
     */
    protected $walksHitsPerInningsPitched;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingBattingAverageAgainst;
    /**
     * 
     *
     * @var float|null
     */
    protected $grandSlams;
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
    protected $plateAppearances;
    /**
     * 
     *
     * @var float|null
     */
    protected $totalBases;
    /**
     * 
     *
     * @var float|null
     */
    protected $flyOuts;
    /**
     * 
     *
     * @var float|null
     */
    protected $groundOuts;
    /**
     * 
     *
     * @var float|null
     */
    protected $lineOuts;
    /**
     * 
     *
     * @var float|null
     */
    protected $popOuts;
    /**
     * 
     *
     * @var float|null
     */
    protected $intentionalWalks;
    /**
     * 
     *
     * @var float|null
     */
    protected $reachedOnError;
    /**
     * 
     *
     * @var float|null
     */
    protected $ballsInPlay;
    /**
     * 
     *
     * @var float|null
     */
    protected $battingAverageOnBallsInPlay;
    /**
     * 
     *
     * @var float|null
     */
    protected $weightedOnBasePercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingSingles;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingDoubles;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingTriples;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingGrandSlams;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingHitByPitch;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingSacrifices;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingSacrificeFlies;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingGroundIntoDoublePlay;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingCompleteGames;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingShutOuts;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingNoHitters;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingPerfectGames;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingPlateAppearances;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingTotalBases;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingFlyOuts;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingGroundOuts;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingLineOuts;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingPopOuts;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingIntentionalWalks;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingReachedOnError;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingCatchersInterference;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingBallsInPlay;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingOnBasePercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingSluggingPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingOnBasePlusSlugging;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingStrikeoutsPerNineInnings;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingWalksPerNineInnings;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingBattingAverageOnBallsInPlay;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingWeightedOnBasePercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $doublePlays;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingDoublePlays;
    /**
     * 
     *
     * @var bool|null
     */
    protected $battingOrderConfirmed;
    /**
     * 
     *
     * @var float|null
     */
    protected $isolatedPower;
    /**
     * 
     *
     * @var float|null
     */
    protected $fieldingIndependentPitching;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingQualityStarts;
    /**
     * 
     *
     * @var int|null
     */
    protected $pitchingInningStarted;
    /**
     * 
     *
     * @var float|null
     */
    protected $leftOnBase;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingHolds;
    /**
     * 
     *
     * @var float|null
     */
    protected $pitchingBlownSaves;
    /**
     * 
     *
     * @var int|null
     */
    protected $substituteBattingOrder;
    /**
     * 
     *
     * @var int|null
     */
    protected $substituteBattingOrderSequence;
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
    public function getAtBats() : ?float
    {
        return $this->atBats;
    }
    /**
     * 
     *
     * @param float|null $atBats
     *
     * @return self
     */
    public function setAtBats(?float $atBats) : self
    {
        $this->atBats = $atBats;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRuns() : ?float
    {
        return $this->runs;
    }
    /**
     * 
     *
     * @param float|null $runs
     *
     * @return self
     */
    public function setRuns(?float $runs) : self
    {
        $this->runs = $runs;
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
    public function getSingles() : ?float
    {
        return $this->singles;
    }
    /**
     * 
     *
     * @param float|null $singles
     *
     * @return self
     */
    public function setSingles(?float $singles) : self
    {
        $this->singles = $singles;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDoubles() : ?float
    {
        return $this->doubles;
    }
    /**
     * 
     *
     * @param float|null $doubles
     *
     * @return self
     */
    public function setDoubles(?float $doubles) : self
    {
        $this->doubles = $doubles;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTriples() : ?float
    {
        return $this->triples;
    }
    /**
     * 
     *
     * @param float|null $triples
     *
     * @return self
     */
    public function setTriples(?float $triples) : self
    {
        $this->triples = $triples;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getHomeRuns() : ?float
    {
        return $this->homeRuns;
    }
    /**
     * 
     *
     * @param float|null $homeRuns
     *
     * @return self
     */
    public function setHomeRuns(?float $homeRuns) : self
    {
        $this->homeRuns = $homeRuns;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRunsBattedIn() : ?float
    {
        return $this->runsBattedIn;
    }
    /**
     * 
     *
     * @param float|null $runsBattedIn
     *
     * @return self
     */
    public function setRunsBattedIn(?float $runsBattedIn) : self
    {
        $this->runsBattedIn = $runsBattedIn;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getBattingAverage() : ?float
    {
        return $this->battingAverage;
    }
    /**
     * 
     *
     * @param float|null $battingAverage
     *
     * @return self
     */
    public function setBattingAverage(?float $battingAverage) : self
    {
        $this->battingAverage = $battingAverage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getOuts() : ?float
    {
        return $this->outs;
    }
    /**
     * 
     *
     * @param float|null $outs
     *
     * @return self
     */
    public function setOuts(?float $outs) : self
    {
        $this->outs = $outs;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getStrikeouts() : ?float
    {
        return $this->strikeouts;
    }
    /**
     * 
     *
     * @param float|null $strikeouts
     *
     * @return self
     */
    public function setStrikeouts(?float $strikeouts) : self
    {
        $this->strikeouts = $strikeouts;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getWalks() : ?float
    {
        return $this->walks;
    }
    /**
     * 
     *
     * @param float|null $walks
     *
     * @return self
     */
    public function setWalks(?float $walks) : self
    {
        $this->walks = $walks;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getHitByPitch() : ?float
    {
        return $this->hitByPitch;
    }
    /**
     * 
     *
     * @param float|null $hitByPitch
     *
     * @return self
     */
    public function setHitByPitch(?float $hitByPitch) : self
    {
        $this->hitByPitch = $hitByPitch;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSacrifices() : ?float
    {
        return $this->sacrifices;
    }
    /**
     * 
     *
     * @param float|null $sacrifices
     *
     * @return self
     */
    public function setSacrifices(?float $sacrifices) : self
    {
        $this->sacrifices = $sacrifices;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSacrificeFlies() : ?float
    {
        return $this->sacrificeFlies;
    }
    /**
     * 
     *
     * @param float|null $sacrificeFlies
     *
     * @return self
     */
    public function setSacrificeFlies(?float $sacrificeFlies) : self
    {
        $this->sacrificeFlies = $sacrificeFlies;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getGroundIntoDoublePlay() : ?float
    {
        return $this->groundIntoDoublePlay;
    }
    /**
     * 
     *
     * @param float|null $groundIntoDoublePlay
     *
     * @return self
     */
    public function setGroundIntoDoublePlay(?float $groundIntoDoublePlay) : self
    {
        $this->groundIntoDoublePlay = $groundIntoDoublePlay;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getStolenBases() : ?float
    {
        return $this->stolenBases;
    }
    /**
     * 
     *
     * @param float|null $stolenBases
     *
     * @return self
     */
    public function setStolenBases(?float $stolenBases) : self
    {
        $this->stolenBases = $stolenBases;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getCaughtStealing() : ?float
    {
        return $this->caughtStealing;
    }
    /**
     * 
     *
     * @param float|null $caughtStealing
     *
     * @return self
     */
    public function setCaughtStealing(?float $caughtStealing) : self
    {
        $this->caughtStealing = $caughtStealing;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchesSeen() : ?float
    {
        return $this->pitchesSeen;
    }
    /**
     * 
     *
     * @param float|null $pitchesSeen
     *
     * @return self
     */
    public function setPitchesSeen(?float $pitchesSeen) : self
    {
        $this->pitchesSeen = $pitchesSeen;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getOnBasePercentage() : ?float
    {
        return $this->onBasePercentage;
    }
    /**
     * 
     *
     * @param float|null $onBasePercentage
     *
     * @return self
     */
    public function setOnBasePercentage(?float $onBasePercentage) : self
    {
        $this->onBasePercentage = $onBasePercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSluggingPercentage() : ?float
    {
        return $this->sluggingPercentage;
    }
    /**
     * 
     *
     * @param float|null $sluggingPercentage
     *
     * @return self
     */
    public function setSluggingPercentage(?float $sluggingPercentage) : self
    {
        $this->sluggingPercentage = $sluggingPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getOnBasePlusSlugging() : ?float
    {
        return $this->onBasePlusSlugging;
    }
    /**
     * 
     *
     * @param float|null $onBasePlusSlugging
     *
     * @return self
     */
    public function setOnBasePlusSlugging(?float $onBasePlusSlugging) : self
    {
        $this->onBasePlusSlugging = $onBasePlusSlugging;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getErrors() : ?float
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param float|null $errors
     *
     * @return self
     */
    public function setErrors(?float $errors) : self
    {
        $this->errors = $errors;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getWins() : ?float
    {
        return $this->wins;
    }
    /**
     * 
     *
     * @param float|null $wins
     *
     * @return self
     */
    public function setWins(?float $wins) : self
    {
        $this->wins = $wins;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getLosses() : ?float
    {
        return $this->losses;
    }
    /**
     * 
     *
     * @param float|null $losses
     *
     * @return self
     */
    public function setLosses(?float $losses) : self
    {
        $this->losses = $losses;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSaves() : ?float
    {
        return $this->saves;
    }
    /**
     * 
     *
     * @param float|null $saves
     *
     * @return self
     */
    public function setSaves(?float $saves) : self
    {
        $this->saves = $saves;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getInningsPitchedDecimal() : ?float
    {
        return $this->inningsPitchedDecimal;
    }
    /**
     * 
     *
     * @param float|null $inningsPitchedDecimal
     *
     * @return self
     */
    public function setInningsPitchedDecimal(?float $inningsPitchedDecimal) : self
    {
        $this->inningsPitchedDecimal = $inningsPitchedDecimal;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTotalOutsPitched() : ?float
    {
        return $this->totalOutsPitched;
    }
    /**
     * 
     *
     * @param float|null $totalOutsPitched
     *
     * @return self
     */
    public function setTotalOutsPitched(?float $totalOutsPitched) : self
    {
        $this->totalOutsPitched = $totalOutsPitched;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getInningsPitchedFull() : ?float
    {
        return $this->inningsPitchedFull;
    }
    /**
     * 
     *
     * @param float|null $inningsPitchedFull
     *
     * @return self
     */
    public function setInningsPitchedFull(?float $inningsPitchedFull) : self
    {
        $this->inningsPitchedFull = $inningsPitchedFull;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getInningsPitchedOuts() : ?float
    {
        return $this->inningsPitchedOuts;
    }
    /**
     * 
     *
     * @param float|null $inningsPitchedOuts
     *
     * @return self
     */
    public function setInningsPitchedOuts(?float $inningsPitchedOuts) : self
    {
        $this->inningsPitchedOuts = $inningsPitchedOuts;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getEarnedRunAverage() : ?float
    {
        return $this->earnedRunAverage;
    }
    /**
     * 
     *
     * @param float|null $earnedRunAverage
     *
     * @return self
     */
    public function setEarnedRunAverage(?float $earnedRunAverage) : self
    {
        $this->earnedRunAverage = $earnedRunAverage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingHits() : ?float
    {
        return $this->pitchingHits;
    }
    /**
     * 
     *
     * @param float|null $pitchingHits
     *
     * @return self
     */
    public function setPitchingHits(?float $pitchingHits) : self
    {
        $this->pitchingHits = $pitchingHits;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingRuns() : ?float
    {
        return $this->pitchingRuns;
    }
    /**
     * 
     *
     * @param float|null $pitchingRuns
     *
     * @return self
     */
    public function setPitchingRuns(?float $pitchingRuns) : self
    {
        $this->pitchingRuns = $pitchingRuns;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingEarnedRuns() : ?float
    {
        return $this->pitchingEarnedRuns;
    }
    /**
     * 
     *
     * @param float|null $pitchingEarnedRuns
     *
     * @return self
     */
    public function setPitchingEarnedRuns(?float $pitchingEarnedRuns) : self
    {
        $this->pitchingEarnedRuns = $pitchingEarnedRuns;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingWalks() : ?float
    {
        return $this->pitchingWalks;
    }
    /**
     * 
     *
     * @param float|null $pitchingWalks
     *
     * @return self
     */
    public function setPitchingWalks(?float $pitchingWalks) : self
    {
        $this->pitchingWalks = $pitchingWalks;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingStrikeouts() : ?float
    {
        return $this->pitchingStrikeouts;
    }
    /**
     * 
     *
     * @param float|null $pitchingStrikeouts
     *
     * @return self
     */
    public function setPitchingStrikeouts(?float $pitchingStrikeouts) : self
    {
        $this->pitchingStrikeouts = $pitchingStrikeouts;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingHomeRuns() : ?float
    {
        return $this->pitchingHomeRuns;
    }
    /**
     * 
     *
     * @param float|null $pitchingHomeRuns
     *
     * @return self
     */
    public function setPitchingHomeRuns(?float $pitchingHomeRuns) : self
    {
        $this->pitchingHomeRuns = $pitchingHomeRuns;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchesThrown() : ?float
    {
        return $this->pitchesThrown;
    }
    /**
     * 
     *
     * @param float|null $pitchesThrown
     *
     * @return self
     */
    public function setPitchesThrown(?float $pitchesThrown) : self
    {
        $this->pitchesThrown = $pitchesThrown;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchesThrownStrikes() : ?float
    {
        return $this->pitchesThrownStrikes;
    }
    /**
     * 
     *
     * @param float|null $pitchesThrownStrikes
     *
     * @return self
     */
    public function setPitchesThrownStrikes(?float $pitchesThrownStrikes) : self
    {
        $this->pitchesThrownStrikes = $pitchesThrownStrikes;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getWalksHitsPerInningsPitched() : ?float
    {
        return $this->walksHitsPerInningsPitched;
    }
    /**
     * 
     *
     * @param float|null $walksHitsPerInningsPitched
     *
     * @return self
     */
    public function setWalksHitsPerInningsPitched(?float $walksHitsPerInningsPitched) : self
    {
        $this->walksHitsPerInningsPitched = $walksHitsPerInningsPitched;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingBattingAverageAgainst() : ?float
    {
        return $this->pitchingBattingAverageAgainst;
    }
    /**
     * 
     *
     * @param float|null $pitchingBattingAverageAgainst
     *
     * @return self
     */
    public function setPitchingBattingAverageAgainst(?float $pitchingBattingAverageAgainst) : self
    {
        $this->pitchingBattingAverageAgainst = $pitchingBattingAverageAgainst;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getGrandSlams() : ?float
    {
        return $this->grandSlams;
    }
    /**
     * 
     *
     * @param float|null $grandSlams
     *
     * @return self
     */
    public function setGrandSlams(?float $grandSlams) : self
    {
        $this->grandSlams = $grandSlams;
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
    public function getPlateAppearances() : ?float
    {
        return $this->plateAppearances;
    }
    /**
     * 
     *
     * @param float|null $plateAppearances
     *
     * @return self
     */
    public function setPlateAppearances(?float $plateAppearances) : self
    {
        $this->plateAppearances = $plateAppearances;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTotalBases() : ?float
    {
        return $this->totalBases;
    }
    /**
     * 
     *
     * @param float|null $totalBases
     *
     * @return self
     */
    public function setTotalBases(?float $totalBases) : self
    {
        $this->totalBases = $totalBases;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFlyOuts() : ?float
    {
        return $this->flyOuts;
    }
    /**
     * 
     *
     * @param float|null $flyOuts
     *
     * @return self
     */
    public function setFlyOuts(?float $flyOuts) : self
    {
        $this->flyOuts = $flyOuts;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getGroundOuts() : ?float
    {
        return $this->groundOuts;
    }
    /**
     * 
     *
     * @param float|null $groundOuts
     *
     * @return self
     */
    public function setGroundOuts(?float $groundOuts) : self
    {
        $this->groundOuts = $groundOuts;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getLineOuts() : ?float
    {
        return $this->lineOuts;
    }
    /**
     * 
     *
     * @param float|null $lineOuts
     *
     * @return self
     */
    public function setLineOuts(?float $lineOuts) : self
    {
        $this->lineOuts = $lineOuts;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPopOuts() : ?float
    {
        return $this->popOuts;
    }
    /**
     * 
     *
     * @param float|null $popOuts
     *
     * @return self
     */
    public function setPopOuts(?float $popOuts) : self
    {
        $this->popOuts = $popOuts;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getIntentionalWalks() : ?float
    {
        return $this->intentionalWalks;
    }
    /**
     * 
     *
     * @param float|null $intentionalWalks
     *
     * @return self
     */
    public function setIntentionalWalks(?float $intentionalWalks) : self
    {
        $this->intentionalWalks = $intentionalWalks;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getReachedOnError() : ?float
    {
        return $this->reachedOnError;
    }
    /**
     * 
     *
     * @param float|null $reachedOnError
     *
     * @return self
     */
    public function setReachedOnError(?float $reachedOnError) : self
    {
        $this->reachedOnError = $reachedOnError;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getBallsInPlay() : ?float
    {
        return $this->ballsInPlay;
    }
    /**
     * 
     *
     * @param float|null $ballsInPlay
     *
     * @return self
     */
    public function setBallsInPlay(?float $ballsInPlay) : self
    {
        $this->ballsInPlay = $ballsInPlay;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getBattingAverageOnBallsInPlay() : ?float
    {
        return $this->battingAverageOnBallsInPlay;
    }
    /**
     * 
     *
     * @param float|null $battingAverageOnBallsInPlay
     *
     * @return self
     */
    public function setBattingAverageOnBallsInPlay(?float $battingAverageOnBallsInPlay) : self
    {
        $this->battingAverageOnBallsInPlay = $battingAverageOnBallsInPlay;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getWeightedOnBasePercentage() : ?float
    {
        return $this->weightedOnBasePercentage;
    }
    /**
     * 
     *
     * @param float|null $weightedOnBasePercentage
     *
     * @return self
     */
    public function setWeightedOnBasePercentage(?float $weightedOnBasePercentage) : self
    {
        $this->weightedOnBasePercentage = $weightedOnBasePercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingSingles() : ?float
    {
        return $this->pitchingSingles;
    }
    /**
     * 
     *
     * @param float|null $pitchingSingles
     *
     * @return self
     */
    public function setPitchingSingles(?float $pitchingSingles) : self
    {
        $this->pitchingSingles = $pitchingSingles;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingDoubles() : ?float
    {
        return $this->pitchingDoubles;
    }
    /**
     * 
     *
     * @param float|null $pitchingDoubles
     *
     * @return self
     */
    public function setPitchingDoubles(?float $pitchingDoubles) : self
    {
        $this->pitchingDoubles = $pitchingDoubles;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingTriples() : ?float
    {
        return $this->pitchingTriples;
    }
    /**
     * 
     *
     * @param float|null $pitchingTriples
     *
     * @return self
     */
    public function setPitchingTriples(?float $pitchingTriples) : self
    {
        $this->pitchingTriples = $pitchingTriples;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingGrandSlams() : ?float
    {
        return $this->pitchingGrandSlams;
    }
    /**
     * 
     *
     * @param float|null $pitchingGrandSlams
     *
     * @return self
     */
    public function setPitchingGrandSlams(?float $pitchingGrandSlams) : self
    {
        $this->pitchingGrandSlams = $pitchingGrandSlams;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingHitByPitch() : ?float
    {
        return $this->pitchingHitByPitch;
    }
    /**
     * 
     *
     * @param float|null $pitchingHitByPitch
     *
     * @return self
     */
    public function setPitchingHitByPitch(?float $pitchingHitByPitch) : self
    {
        $this->pitchingHitByPitch = $pitchingHitByPitch;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingSacrifices() : ?float
    {
        return $this->pitchingSacrifices;
    }
    /**
     * 
     *
     * @param float|null $pitchingSacrifices
     *
     * @return self
     */
    public function setPitchingSacrifices(?float $pitchingSacrifices) : self
    {
        $this->pitchingSacrifices = $pitchingSacrifices;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingSacrificeFlies() : ?float
    {
        return $this->pitchingSacrificeFlies;
    }
    /**
     * 
     *
     * @param float|null $pitchingSacrificeFlies
     *
     * @return self
     */
    public function setPitchingSacrificeFlies(?float $pitchingSacrificeFlies) : self
    {
        $this->pitchingSacrificeFlies = $pitchingSacrificeFlies;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingGroundIntoDoublePlay() : ?float
    {
        return $this->pitchingGroundIntoDoublePlay;
    }
    /**
     * 
     *
     * @param float|null $pitchingGroundIntoDoublePlay
     *
     * @return self
     */
    public function setPitchingGroundIntoDoublePlay(?float $pitchingGroundIntoDoublePlay) : self
    {
        $this->pitchingGroundIntoDoublePlay = $pitchingGroundIntoDoublePlay;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingCompleteGames() : ?float
    {
        return $this->pitchingCompleteGames;
    }
    /**
     * 
     *
     * @param float|null $pitchingCompleteGames
     *
     * @return self
     */
    public function setPitchingCompleteGames(?float $pitchingCompleteGames) : self
    {
        $this->pitchingCompleteGames = $pitchingCompleteGames;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingShutOuts() : ?float
    {
        return $this->pitchingShutOuts;
    }
    /**
     * 
     *
     * @param float|null $pitchingShutOuts
     *
     * @return self
     */
    public function setPitchingShutOuts(?float $pitchingShutOuts) : self
    {
        $this->pitchingShutOuts = $pitchingShutOuts;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingNoHitters() : ?float
    {
        return $this->pitchingNoHitters;
    }
    /**
     * 
     *
     * @param float|null $pitchingNoHitters
     *
     * @return self
     */
    public function setPitchingNoHitters(?float $pitchingNoHitters) : self
    {
        $this->pitchingNoHitters = $pitchingNoHitters;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingPerfectGames() : ?float
    {
        return $this->pitchingPerfectGames;
    }
    /**
     * 
     *
     * @param float|null $pitchingPerfectGames
     *
     * @return self
     */
    public function setPitchingPerfectGames(?float $pitchingPerfectGames) : self
    {
        $this->pitchingPerfectGames = $pitchingPerfectGames;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingPlateAppearances() : ?float
    {
        return $this->pitchingPlateAppearances;
    }
    /**
     * 
     *
     * @param float|null $pitchingPlateAppearances
     *
     * @return self
     */
    public function setPitchingPlateAppearances(?float $pitchingPlateAppearances) : self
    {
        $this->pitchingPlateAppearances = $pitchingPlateAppearances;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingTotalBases() : ?float
    {
        return $this->pitchingTotalBases;
    }
    /**
     * 
     *
     * @param float|null $pitchingTotalBases
     *
     * @return self
     */
    public function setPitchingTotalBases(?float $pitchingTotalBases) : self
    {
        $this->pitchingTotalBases = $pitchingTotalBases;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingFlyOuts() : ?float
    {
        return $this->pitchingFlyOuts;
    }
    /**
     * 
     *
     * @param float|null $pitchingFlyOuts
     *
     * @return self
     */
    public function setPitchingFlyOuts(?float $pitchingFlyOuts) : self
    {
        $this->pitchingFlyOuts = $pitchingFlyOuts;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingGroundOuts() : ?float
    {
        return $this->pitchingGroundOuts;
    }
    /**
     * 
     *
     * @param float|null $pitchingGroundOuts
     *
     * @return self
     */
    public function setPitchingGroundOuts(?float $pitchingGroundOuts) : self
    {
        $this->pitchingGroundOuts = $pitchingGroundOuts;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingLineOuts() : ?float
    {
        return $this->pitchingLineOuts;
    }
    /**
     * 
     *
     * @param float|null $pitchingLineOuts
     *
     * @return self
     */
    public function setPitchingLineOuts(?float $pitchingLineOuts) : self
    {
        $this->pitchingLineOuts = $pitchingLineOuts;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingPopOuts() : ?float
    {
        return $this->pitchingPopOuts;
    }
    /**
     * 
     *
     * @param float|null $pitchingPopOuts
     *
     * @return self
     */
    public function setPitchingPopOuts(?float $pitchingPopOuts) : self
    {
        $this->pitchingPopOuts = $pitchingPopOuts;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingIntentionalWalks() : ?float
    {
        return $this->pitchingIntentionalWalks;
    }
    /**
     * 
     *
     * @param float|null $pitchingIntentionalWalks
     *
     * @return self
     */
    public function setPitchingIntentionalWalks(?float $pitchingIntentionalWalks) : self
    {
        $this->pitchingIntentionalWalks = $pitchingIntentionalWalks;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingReachedOnError() : ?float
    {
        return $this->pitchingReachedOnError;
    }
    /**
     * 
     *
     * @param float|null $pitchingReachedOnError
     *
     * @return self
     */
    public function setPitchingReachedOnError(?float $pitchingReachedOnError) : self
    {
        $this->pitchingReachedOnError = $pitchingReachedOnError;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingCatchersInterference() : ?float
    {
        return $this->pitchingCatchersInterference;
    }
    /**
     * 
     *
     * @param float|null $pitchingCatchersInterference
     *
     * @return self
     */
    public function setPitchingCatchersInterference(?float $pitchingCatchersInterference) : self
    {
        $this->pitchingCatchersInterference = $pitchingCatchersInterference;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingBallsInPlay() : ?float
    {
        return $this->pitchingBallsInPlay;
    }
    /**
     * 
     *
     * @param float|null $pitchingBallsInPlay
     *
     * @return self
     */
    public function setPitchingBallsInPlay(?float $pitchingBallsInPlay) : self
    {
        $this->pitchingBallsInPlay = $pitchingBallsInPlay;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingOnBasePercentage() : ?float
    {
        return $this->pitchingOnBasePercentage;
    }
    /**
     * 
     *
     * @param float|null $pitchingOnBasePercentage
     *
     * @return self
     */
    public function setPitchingOnBasePercentage(?float $pitchingOnBasePercentage) : self
    {
        $this->pitchingOnBasePercentage = $pitchingOnBasePercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingSluggingPercentage() : ?float
    {
        return $this->pitchingSluggingPercentage;
    }
    /**
     * 
     *
     * @param float|null $pitchingSluggingPercentage
     *
     * @return self
     */
    public function setPitchingSluggingPercentage(?float $pitchingSluggingPercentage) : self
    {
        $this->pitchingSluggingPercentage = $pitchingSluggingPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingOnBasePlusSlugging() : ?float
    {
        return $this->pitchingOnBasePlusSlugging;
    }
    /**
     * 
     *
     * @param float|null $pitchingOnBasePlusSlugging
     *
     * @return self
     */
    public function setPitchingOnBasePlusSlugging(?float $pitchingOnBasePlusSlugging) : self
    {
        $this->pitchingOnBasePlusSlugging = $pitchingOnBasePlusSlugging;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingStrikeoutsPerNineInnings() : ?float
    {
        return $this->pitchingStrikeoutsPerNineInnings;
    }
    /**
     * 
     *
     * @param float|null $pitchingStrikeoutsPerNineInnings
     *
     * @return self
     */
    public function setPitchingStrikeoutsPerNineInnings(?float $pitchingStrikeoutsPerNineInnings) : self
    {
        $this->pitchingStrikeoutsPerNineInnings = $pitchingStrikeoutsPerNineInnings;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingWalksPerNineInnings() : ?float
    {
        return $this->pitchingWalksPerNineInnings;
    }
    /**
     * 
     *
     * @param float|null $pitchingWalksPerNineInnings
     *
     * @return self
     */
    public function setPitchingWalksPerNineInnings(?float $pitchingWalksPerNineInnings) : self
    {
        $this->pitchingWalksPerNineInnings = $pitchingWalksPerNineInnings;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingBattingAverageOnBallsInPlay() : ?float
    {
        return $this->pitchingBattingAverageOnBallsInPlay;
    }
    /**
     * 
     *
     * @param float|null $pitchingBattingAverageOnBallsInPlay
     *
     * @return self
     */
    public function setPitchingBattingAverageOnBallsInPlay(?float $pitchingBattingAverageOnBallsInPlay) : self
    {
        $this->pitchingBattingAverageOnBallsInPlay = $pitchingBattingAverageOnBallsInPlay;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingWeightedOnBasePercentage() : ?float
    {
        return $this->pitchingWeightedOnBasePercentage;
    }
    /**
     * 
     *
     * @param float|null $pitchingWeightedOnBasePercentage
     *
     * @return self
     */
    public function setPitchingWeightedOnBasePercentage(?float $pitchingWeightedOnBasePercentage) : self
    {
        $this->pitchingWeightedOnBasePercentage = $pitchingWeightedOnBasePercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDoublePlays() : ?float
    {
        return $this->doublePlays;
    }
    /**
     * 
     *
     * @param float|null $doublePlays
     *
     * @return self
     */
    public function setDoublePlays(?float $doublePlays) : self
    {
        $this->doublePlays = $doublePlays;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingDoublePlays() : ?float
    {
        return $this->pitchingDoublePlays;
    }
    /**
     * 
     *
     * @param float|null $pitchingDoublePlays
     *
     * @return self
     */
    public function setPitchingDoublePlays(?float $pitchingDoublePlays) : self
    {
        $this->pitchingDoublePlays = $pitchingDoublePlays;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getBattingOrderConfirmed() : ?bool
    {
        return $this->battingOrderConfirmed;
    }
    /**
     * 
     *
     * @param bool|null $battingOrderConfirmed
     *
     * @return self
     */
    public function setBattingOrderConfirmed(?bool $battingOrderConfirmed) : self
    {
        $this->battingOrderConfirmed = $battingOrderConfirmed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getIsolatedPower() : ?float
    {
        return $this->isolatedPower;
    }
    /**
     * 
     *
     * @param float|null $isolatedPower
     *
     * @return self
     */
    public function setIsolatedPower(?float $isolatedPower) : self
    {
        $this->isolatedPower = $isolatedPower;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFieldingIndependentPitching() : ?float
    {
        return $this->fieldingIndependentPitching;
    }
    /**
     * 
     *
     * @param float|null $fieldingIndependentPitching
     *
     * @return self
     */
    public function setFieldingIndependentPitching(?float $fieldingIndependentPitching) : self
    {
        $this->fieldingIndependentPitching = $fieldingIndependentPitching;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingQualityStarts() : ?float
    {
        return $this->pitchingQualityStarts;
    }
    /**
     * 
     *
     * @param float|null $pitchingQualityStarts
     *
     * @return self
     */
    public function setPitchingQualityStarts(?float $pitchingQualityStarts) : self
    {
        $this->pitchingQualityStarts = $pitchingQualityStarts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPitchingInningStarted() : ?int
    {
        return $this->pitchingInningStarted;
    }
    /**
     * 
     *
     * @param int|null $pitchingInningStarted
     *
     * @return self
     */
    public function setPitchingInningStarted(?int $pitchingInningStarted) : self
    {
        $this->pitchingInningStarted = $pitchingInningStarted;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getLeftOnBase() : ?float
    {
        return $this->leftOnBase;
    }
    /**
     * 
     *
     * @param float|null $leftOnBase
     *
     * @return self
     */
    public function setLeftOnBase(?float $leftOnBase) : self
    {
        $this->leftOnBase = $leftOnBase;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingHolds() : ?float
    {
        return $this->pitchingHolds;
    }
    /**
     * 
     *
     * @param float|null $pitchingHolds
     *
     * @return self
     */
    public function setPitchingHolds(?float $pitchingHolds) : self
    {
        $this->pitchingHolds = $pitchingHolds;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPitchingBlownSaves() : ?float
    {
        return $this->pitchingBlownSaves;
    }
    /**
     * 
     *
     * @param float|null $pitchingBlownSaves
     *
     * @return self
     */
    public function setPitchingBlownSaves(?float $pitchingBlownSaves) : self
    {
        $this->pitchingBlownSaves = $pitchingBlownSaves;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSubstituteBattingOrder() : ?int
    {
        return $this->substituteBattingOrder;
    }
    /**
     * 
     *
     * @param int|null $substituteBattingOrder
     *
     * @return self
     */
    public function setSubstituteBattingOrder(?int $substituteBattingOrder) : self
    {
        $this->substituteBattingOrder = $substituteBattingOrder;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSubstituteBattingOrderSequence() : ?int
    {
        return $this->substituteBattingOrderSequence;
    }
    /**
     * 
     *
     * @param int|null $substituteBattingOrderSequence
     *
     * @return self
     */
    public function setSubstituteBattingOrderSequence(?int $substituteBattingOrderSequence) : self
    {
        $this->substituteBattingOrderSequence = $substituteBattingOrderSequence;
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