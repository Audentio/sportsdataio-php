<?php

namespace Sportsdata\API\NFL\Model;

class AdvancedPlayerSeason
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
     * @var int|null
     */
    protected $games;
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
     * @var int|null
     */
    protected $snapShareRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $slotRate;
    /**
     * 
     *
     * @var int|null
     */
    protected $slotRateRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $targetSeparation;
    /**
     * 
     *
     * @var int|null
     */
    protected $targetSeparationRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $burnRate;
    /**
     * 
     *
     * @var float|null
     */
    protected $airYards;
    /**
     * 
     *
     * @var float|null
     */
    protected $airYardsPerGame;
    /**
     * 
     *
     * @var int|null
     */
    protected $airYardsRank;
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
    protected $carriesInside10;
    /**
     * 
     *
     * @var float|null
     */
    protected $carriesInside10PerGame;
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
    protected $carriesInside5PerGame;
    /**
     * 
     *
     * @var float|null
     */
    protected $carriesPerGame;
    /**
     * 
     *
     * @var int|null
     */
    protected $carriesPerGameRank;
    /**
     * 
     *
     * @var int|null
     */
    protected $carriesRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $gameScript;
    /**
     * 
     *
     * @var int|null
     */
    protected $gameScriptRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $goalLineCarries;
    /**
     * 
     *
     * @var float|null
     */
    protected $goalLineCarriesPerGame;
    /**
     * 
     *
     * @var int|null
     */
    protected $goalLineCarriesPerGameRank;
    /**
     * 
     *
     * @var int|null
     */
    protected $goalLineCarriesRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $productionPremium;
    /**
     * 
     *
     * @var int|null
     */
    protected $productionPremiumRank;
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
    protected $redZoneCarriesPerGame;
    /**
     * 
     *
     * @var int|null
     */
    protected $redZoneCarriesPerGameRank;
    /**
     * 
     *
     * @var int|null
     */
    protected $redZoneCarriesRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $rushingTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $rushingTouchdownsRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $rushingYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $rushingYardsRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $rushYardsPerGame;
    /**
     * 
     *
     * @var float|null
     */
    protected $redZoneSnaps;
    /**
     * 
     *
     * @var float|null
     */
    protected $runSnaps;
    /**
     * 
     *
     * @var float|null
     */
    protected $passSnaps;
    /**
     * 
     *
     * @var float|null
     */
    protected $snapweightedGameScript;
    /**
     * 
     *
     * @var int|null
     */
    protected $snapweightedGameScriptRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $teamPassPlays;
    /**
     * 
     *
     * @var int|null
     */
    protected $teamPassPlaysRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $touchdownRate;
    /**
     * 
     *
     * @var float|null
     */
    protected $weeklyVolatility;
    /**
     * 
     *
     * @var int|null
     */
    protected $weeklyVolatilityRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $vOS;
    /**
     * 
     *
     * @var int|null
     */
    protected $vOSRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $yardsPerTarget;
    /**
     * 
     *
     * @var int|null
     */
    protected $yardsPerTargetRank;
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
    protected $yardsAfterCatch;
    /**
     * 
     *
     * @var float|null
     */
    protected $yardsAfterCatchPerGame;
    /**
     * 
     *
     * @var float|null
     */
    protected $yardsAfterCatchPerReception;
    /**
     * 
     *
     * @var float|null
     */
    protected $yardsAfterCatchPerTarget;
    /**
     * 
     *
     * @var int|null
     */
    protected $yardsAfterCatchRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $totalTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $totalTouchdownsRank;
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
    protected $totalYards;
    /**
     * 
     *
     * @var float|null
     */
    protected $totalYardsPerGame;
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
    protected $targetShare;
    /**
     * 
     *
     * @var int|null
     */
    protected $targetShareRank;
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
    protected $targetsInside10PerGame;
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
    protected $targetsInside5PerGame;
    /**
     * 
     *
     * @var float|null
     */
    protected $targetsPerGame;
    /**
     * 
     *
     * @var int|null
     */
    protected $targetsPerGameRank;
    /**
     * 
     *
     * @var int|null
     */
    protected $targetsRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $slotSnaps;
    /**
     * 
     *
     * @var float|null
     */
    protected $slotYPR;
    /**
     * 
     *
     * @var int|null
     */
    protected $slotYPRRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $slotYPT;
    /**
     * 
     *
     * @var int|null
     */
    protected $slotYPTRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $redZoneSnapShare;
    /**
     * 
     *
     * @var int|null
     */
    protected $redZoneSnapShareRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $routeParticipation;
    /**
     * 
     *
     * @var int|null
     */
    protected $routeParticipationRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $passRoutes;
    /**
     * 
     *
     * @var float|null
     */
    protected $passRoutesPerGame;
    /**
     * 
     *
     * @var int|null
     */
    protected $passRoutesPerGameRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $redZoneReceptions;
    /**
     * 
     *
     * @var int|null
     */
    protected $redZoneReceptionsRank;
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
    protected $redZoneTargetShare;
    /**
     * 
     *
     * @var int|null
     */
    protected $redZoneTargetShareRank;
    /**
     * 
     *
     * @var int|null
     */
    protected $redZoneTargetsRank;
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
    protected $redZoneTouchesPerGame;
    /**
     * 
     *
     * @var float|null
     */
    protected $qBRatingWhenTargeted;
    /**
     * 
     *
     * @var int|null
     */
    protected $qBRatingWhenTargetedRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $receivingTDs;
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
    protected $receivingYardsPerGame;
    /**
     * 
     *
     * @var int|null
     */
    protected $receivingYardsPerGameRank;
    /**
     * 
     *
     * @var int|null
     */
    protected $receivingYardsRank;
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
    protected $receptionsPerGame;
    /**
     * 
     *
     * @var int|null
     */
    protected $receptionsPerGameRank;
    /**
     * 
     *
     * @var int|null
     */
    protected $receptionsRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $redZoneCatchRate;
    /**
     * 
     *
     * @var int|null
     */
    protected $redZoneCatchRateRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $catchableTargetRate;
    /**
     * 
     *
     * @var int|null
     */
    protected $catchableTargetRateRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $catchableTargets;
    /**
     * 
     *
     * @var float|null
     */
    protected $catchRate;
    /**
     * 
     *
     * @var int|null
     */
    protected $catchRateRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $dominatorRating;
    /**
     * 
     *
     * @var int|null
     */
    protected $dominatorRatingRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $drops;
    /**
     * 
     *
     * @var float|null
     */
    protected $dropsPerGame;
    /**
     * 
     *
     * @var int|null
     */
    protected $dropsPerGameRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $dropRate;
    /**
     * 
     *
     * @var int|null
     */
    protected $dropRateRank;
    /**
     * 
     *
     * @var int|null
     */
    protected $dropsRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $endzoneTargets;
    /**
     * 
     *
     * @var float|null
     */
    protected $endzoneTargetShare;
    /**
     * 
     *
     * @var int|null
     */
    protected $endzoneTargetShareRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $accuracyRating;
    /**
     * 
     *
     * @var int|null
     */
    protected $accuracyRatingRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $adjustedAttempts;
    /**
     * 
     *
     * @var float|null
     */
    protected $adjustedYardsPerAttempt;
    /**
     * 
     *
     * @var int|null
     */
    protected $adjustedYardsPerAttemptRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $airYardsPerAttempt;
    /**
     * 
     *
     * @var int|null
     */
    protected $airYardsPerAttemptRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $attemptsInside10;
    /**
     * 
     *
     * @var float|null
     */
    protected $attemptsInside10PerGame;
    /**
     * 
     *
     * @var float|null
     */
    protected $attemptsInside5;
    /**
     * 
     *
     * @var float|null
     */
    protected $attemptsInside5PerGame;
    /**
     * 
     *
     * @var float|null
     */
    protected $attemptsPerGame;
    /**
     * 
     *
     * @var float|null
     */
    protected $catchablePasses;
    /**
     * 
     *
     * @var float|null
     */
    protected $catchablePassesPerGame;
    /**
     * 
     *
     * @var int|null
     */
    protected $catchablePassesRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $completionPercentage;
    /**
     * 
     *
     * @var int|null
     */
    protected $completionPercentageRank;
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
    protected $dangerPlays;
    /**
     * 
     *
     * @var float|null
     */
    protected $dangerPlaysPerGame;
    /**
     * 
     *
     * @var int|null
     */
    protected $dangerPlaysRank;
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
    protected $deepBallAttemptsPerGame;
    /**
     * 
     *
     * @var int|null
     */
    protected $deepBallAttemptsPerGameRank;
    /**
     * 
     *
     * @var int|null
     */
    protected $deepBallAttemptsRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $deepBallCompletionPercentage;
    /**
     * 
     *
     * @var int|null
     */
    protected $deepBallCompletionPercentageRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $deepBallCompletions;
    /**
     * 
     *
     * @var int|null
     */
    protected $deepBallCompletionsRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $droppedPasses;
    /**
     * 
     *
     * @var int|null
     */
    protected $droppedPassesRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $droppedPassesPerGame;
    /**
     * 
     *
     * @var float|null
     */
    protected $dropsPerAttempt;
    /**
     * 
     *
     * @var int|null
     */
    protected $dropsPerAttemptRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $dropBacks;
    /**
     * 
     *
     * @var float|null
     */
    protected $interceptablePasses;
    /**
     * 
     *
     * @var float|null
     */
    protected $interceptablePassesPerGame;
    /**
     * 
     *
     * @var int|null
     */
    protected $interceptablePassesRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $moneyThrows;
    /**
     * 
     *
     * @var float|null
     */
    protected $moneyThrowsPerGame;
    /**
     * 
     *
     * @var int|null
     */
    protected $moneyThrowsRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $passAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $passAttemptsRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $passAttemptDistance;
    /**
     * 
     *
     * @var int|null
     */
    protected $passAttemptDistanceRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $passAttemptDistancePerAttempt;
    /**
     * 
     *
     * @var int|null
     */
    protected $passAttemptDistancePerAttemptRank;
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
    protected $passingTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $passingTouchdownsRank;
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
     * @var int|null
     */
    protected $passingYardsPerAttemptRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $passingYardsPerGame;
    /**
     * 
     *
     * @var int|null
     */
    protected $passingYardsPerGameRank;
    /**
     * 
     *
     * @var int|null
     */
    protected $passingYardsRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $playactionPassAttempts;
    /**
     * 
     *
     * @var float|null
     */
    protected $playactionPassAttemptsPerGame;
    /**
     * 
     *
     * @var int|null
     */
    protected $playactionPassAttemptsRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $playactionPassCompletionPercentage;
    /**
     * 
     *
     * @var int|null
     */
    protected $playactionPassCompletionPercentageRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $protectionRate;
    /**
     * 
     *
     * @var int|null
     */
    protected $protectionRateRank;
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
    protected $redZoneAttemptsPerGame;
    /**
     * 
     *
     * @var int|null
     */
    protected $redZoneAttemptsRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $redZoneCompletionPercentage;
    /**
     * 
     *
     * @var int|null
     */
    protected $redZoneCompletionPercentageRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $redZoneTDtoINTRatio;
    /**
     * 
     *
     * @var float|null
     */
    protected $rushingTDs;
    /**
     * 
     *
     * @var int|null
     */
    protected $rushingYardsPerGameRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $shotgunCompletionPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $shotgunSnaps;
    /**
     * 
     *
     * @var float|null
     */
    protected $underCenterCompletionPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $underCenterSnaps;
    /**
     * 
     *
     * @var float|null
     */
    protected $receiverContestedCatchRate;
    /**
     * 
     *
     * @var int|null
     */
    protected $receiverContestedCatchRateRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $receiverTargetSeparation;
    /**
     * 
     *
     * @var int|null
     */
    protected $receiverTargetSeparationRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $receiverYardsAfterTheCatch;
    /**
     * 
     *
     * @var int|null
     */
    protected $receiverYardsAfterTheCatchRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $receiverYardsAfterTheCatchPerTarget;
    /**
     * 
     *
     * @var float|null
     */
    protected $supportingCastEfficiency;
    /**
     * 
     *
     * @var int|null
     */
    protected $supportingCastEfficiencyRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $totalQBR;
    /**
     * 
     *
     * @var int|null
     */
    protected $totalQBRRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $trueCompletionPercentage;
    /**
     * 
     *
     * @var int|null
     */
    protected $trueCompletionPercentageRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $truePasserRating;
    /**
     * 
     *
     * @var int|null
     */
    protected $truePasserRatingRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $uncatchablePasses;
    /**
     * 
     *
     * @var float|null
     */
    protected $uncatchablePassesPerGame;
    /**
     * 
     *
     * @var int|null
     */
    protected $uncatchablePassesRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $underPressureAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $underPressureAttemptsRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $underPressureAttemptsPerGame;
    /**
     * 
     *
     * @var float|null
     */
    protected $pressuredCompletionPercentage;
    /**
     * 
     *
     * @var int|null
     */
    protected $pressuredCompletionPercentageRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $averageDefendersInTheBox;
    /**
     * 
     *
     * @var int|null
     */
    protected $averageDefendersInTheBoxRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $baseFrontCarryRate;
    /**
     * 
     *
     * @var int|null
     */
    protected $baseFrontCarryRateRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $baseFrontYardsPerCarry;
    /**
     * 
     *
     * @var int|null
     */
    protected $baseFrontYardsPerCarryRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $breakawayRunRate;
    /**
     * 
     *
     * @var int|null
     */
    protected $breakawayRunRateRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $breakawayRuns;
    /**
     * 
     *
     * @var float|null
     */
    protected $breakawayRunsPerGame;
    /**
     * 
     *
     * @var int|null
     */
    protected $breakawayRunsPerGameRank;
    /**
     * 
     *
     * @var int|null
     */
    protected $breakawayRunsRank;
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
    protected $evadedTacklesPerGame;
    /**
     * 
     *
     * @var int|null
     */
    protected $evadedTacklesPerGameRank;
    /**
     * 
     *
     * @var int|null
     */
    protected $evadedTacklesRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $jukeRate;
    /**
     * 
     *
     * @var int|null
     */
    protected $jukeRateRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $lightFrontCarryRate;
    /**
     * 
     *
     * @var int|null
     */
    protected $lightFrontCarryRateRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $lightFrontYardsPerCarry;
    /**
     * 
     *
     * @var int|null
     */
    protected $lightFrontYardsPerCarryRank;
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
     * @var int|null
     */
    protected $opportunityShareRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $redZoneOpportunities;
    /**
     * 
     *
     * @var int|null
     */
    protected $redZoneTouchesPerGameRank;
    /**
     * 
     *
     * @var int|null
     */
    protected $redZoneTouchesRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $runBlockingEfficiency;
    /**
     * 
     *
     * @var int|null
     */
    protected $runBlockingEfficiencyRank;
    /**
     * 
     *
     * @var int|null
     */
    protected $rushYardsPerGameRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $shotgunCarryRate;
    /**
     * 
     *
     * @var int|null
     */
    protected $shotgunCarryRateRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $shotgunYardsPerCarry;
    /**
     * 
     *
     * @var int|null
     */
    protected $shotgunYardsPerCarryRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $redZoneOpportunityShare;
    /**
     * 
     *
     * @var int|null
     */
    protected $redZoneOpportunityShareRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $redZoneTDConversionRate;
    /**
     * 
     *
     * @var int|null
     */
    protected $redZoneTDConversionRateRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $stackedFrontCarryRate;
    /**
     * 
     *
     * @var int|null
     */
    protected $stackedFrontCarryRateRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $stackedFrontYardsPerCarry;
    /**
     * 
     *
     * @var int|null
     */
    protected $stackedFrontYardsPerCarryRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $stuffedRuns;
    /**
     * 
     *
     * @var int|null
     */
    protected $stuffedRunsRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $stuffedRunRate;
    /**
     * 
     *
     * @var int|null
     */
    protected $stuffedRunRateRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $teamRunPlays;
    /**
     * 
     *
     * @var int|null
     */
    protected $teamRunPlaysRank;
    /**
     * 
     *
     * @var int|null
     */
    protected $totalYardsPerGameRank;
    /**
     * 
     *
     * @var int|null
     */
    protected $totalYardsRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $trueYardsPerCarry;
    /**
     * 
     *
     * @var int|null
     */
    protected $trueYardsPerCarryRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $underCenterCarryRate;
    /**
     * 
     *
     * @var int|null
     */
    protected $underCenterCarryRateRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $underCenterYardsPerCarry;
    /**
     * 
     *
     * @var int|null
     */
    protected $underCenterYardsPerCarryRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $weightedOpportunities;
    /**
     * 
     *
     * @var int|null
     */
    protected $weightedOpportunitiesRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $weightedOpportunitiesPerGame;
    /**
     * 
     *
     * @var int|null
     */
    protected $weightedOpportunitiesPerGameRank;
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
    protected $yardsCreatedPerGame;
    /**
     * 
     *
     * @var int|null
     */
    protected $yardsCreatedPerGameRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $yardsCreatedPerCarry;
    /**
     * 
     *
     * @var int|null
     */
    protected $yardsCreatedPerCarryRank;
    /**
     * 
     *
     * @var int|null
     */
    protected $yardsCreatedRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $yardsPerCarry;
    /**
     * 
     *
     * @var int|null
     */
    protected $yardsPerCarryRank;
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
    protected $yardsPerRouteRun;
    /**
     * 
     *
     * @var int|null
     */
    protected $yardsPerRouteRunRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $yardsPerTouch;
    /**
     * 
     *
     * @var int|null
     */
    protected $yardsPerTouchRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $airYardsPerReception;
    /**
     * 
     *
     * @var float|null
     */
    protected $airYardsPerTarget;
    /**
     * 
     *
     * @var float|null
     */
    protected $cushion;
    /**
     * 
     *
     * @var int|null
     */
    protected $cushionRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $averageTargetDistance;
    /**
     * 
     *
     * @var int|null
     */
    protected $averageTargetDistanceRank;
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
    protected $catchableTargetsPerGame;
    /**
     * 
     *
     * @var int|null
     */
    protected $catchableTargetsRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $contestedCatchConversionRate;
    /**
     * 
     *
     * @var int|null
     */
    protected $contestedCatchConversionRateRank;
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
    protected $contestedTargets;
    /**
     * 
     *
     * @var float|null
     */
    protected $hogRate;
    /**
     * 
     *
     * @var int|null
     */
    protected $hogRateRank;
    /**
     * 
     *
     * @var int|null
     */
    protected $passSnapsRank;
    /**
     * 
     *
     * @var int|null
     */
    protected $runSnapsRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $slotCatchRate;
    /**
     * 
     *
     * @var int|null
     */
    protected $slotCatchRateRank;
    /**
     * 
     *
     * @var int|null
     */
    protected $slotSnapsRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $snapweighedGameScript;
    /**
     * 
     *
     * @var int|null
     */
    protected $snapweighedGameScriptRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $targetPremium;
    /**
     * 
     *
     * @var int|null
     */
    protected $targetPremiumRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $targetQualityRating;
    /**
     * 
     *
     * @var int|null
     */
    protected $targetQualityRatingRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $targetAccuracy;
    /**
     * 
     *
     * @var int|null
     */
    protected $targetAccuracyRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $targetDistance;
    /**
     * 
     *
     * @var float|null
     */
    protected $targetDistancePerGame;
    /**
     * 
     *
     * @var int|null
     */
    protected $targetDistanceRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $trueCatchRate;
    /**
     * 
     *
     * @var int|null
     */
    protected $trueCatchRateRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $uncatchableTargets;
    /**
     * 
     *
     * @var float|null
     */
    protected $uncatchableTargetsGame;
    /**
     * 
     *
     * @var int|null
     */
    protected $yardsPerReceptionRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $yardsPerPassRoute;
    /**
     * 
     *
     * @var int|null
     */
    protected $yardsPerPassRouteRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $teamDefensiveSnaps;
    /**
     * 
     *
     * @var float|null
     */
    protected $soloTackles;
    /**
     * 
     *
     * @var int|null
     */
    protected $soloTacklesRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $soloTacklesPerGame;
    /**
     * 
     *
     * @var float|null
     */
    protected $assistedTackles;
    /**
     * 
     *
     * @var int|null
     */
    protected $assistedTacklesRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $assistedTacklesPerGame;
    /**
     * 
     *
     * @var float|null
     */
    protected $totalTackles;
    /**
     * 
     *
     * @var int|null
     */
    protected $totalTacklesRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $totalTacklesPerGame;
    /**
     * 
     *
     * @var float|null
     */
    protected $sacks;
    /**
     * 
     *
     * @var int|null
     */
    protected $sacksRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $sackYards;
    /**
     * 
     *
     * @var float|null
     */
    protected $forcedFumbles;
    /**
     * 
     *
     * @var int|null
     */
    protected $forcedFumblesRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $fumbleRecoveries;
    /**
     * 
     *
     * @var int|null
     */
    protected $fumbleRecoveriesRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $battedPasses;
    /**
     * 
     *
     * @var int|null
     */
    protected $battedPassesRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $tacklesForLoss;
    /**
     * 
     *
     * @var int|null
     */
    protected $tacklesForLossRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $runStuffs;
    /**
     * 
     *
     * @var int|null
     */
    protected $runStuffsRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $passBreakups;
    /**
     * 
     *
     * @var int|null
     */
    protected $passBreakupsRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $passBreakupsPerGame;
    /**
     * 
     *
     * @var int|null
     */
    protected $passBreakupsPerGameRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $passBreakupsPerTarget;
    /**
     * 
     *
     * @var int|null
     */
    protected $passBreakupsPerTargetRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $interceptions;
    /**
     * 
     *
     * @var int|null
     */
    protected $interceptionsRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $targetsAllowed;
    /**
     * 
     *
     * @var int|null
     */
    protected $targetsAllowedRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $receptionsAllowed;
    /**
     * 
     *
     * @var int|null
     */
    protected $receptionsAllowedRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $yardsAllowed;
    /**
     * 
     *
     * @var int|null
     */
    protected $yardsAllowedRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $yardsAllowedPerGame;
    /**
     * 
     *
     * @var int|null
     */
    protected $yardsAllowedPerGameRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $yardsPerReceptionAllowed;
    /**
     * 
     *
     * @var int|null
     */
    protected $yardsPerReceptionAllowedRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $catchRateAllowed;
    /**
     * 
     *
     * @var int|null
     */
    protected $catchRateAllowedRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $passerRatingAllowed;
    /**
     * 
     *
     * @var int|null
     */
    protected $passerRatingAllowedRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $touchdownsAllowed;
    /**
     * 
     *
     * @var int|null
     */
    protected $touchdownsAllowedRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $interceptionsPerTarget;
    /**
     * 
     *
     * @var int|null
     */
    protected $interceptionsPerTargetRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $coverageRating;
    /**
     * 
     *
     * @var int|null
     */
    protected $coverageRatingRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $runPlayStops;
    /**
     * 
     *
     * @var int|null
     */
    protected $runPlayStopsRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $targetsAllowedPerGame;
    /**
     * 
     *
     * @var int|null
     */
    protected $targetsAllowedPerGameRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $receptionsAllowedPerGame;
    /**
     * 
     *
     * @var int|null
     */
    protected $receptionsAllowedPerGameRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $targetRate;
    /**
     * 
     *
     * @var int|null
     */
    protected $targetRateRank;
    /**
     * 
     *
     * @var int|null
     */
    protected $burnRateRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $averageCushion;
    /**
     * 
     *
     * @var int|null
     */
    protected $averageCushionRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $yardsPerTargetAllowed;
    /**
     * 
     *
     * @var int|null
     */
    protected $yardsPerTargetAllowedRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $routesDefended;
    /**
     * 
     *
     * @var int|null
     */
    protected $routesDefendedRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $routesDefendedPerGame;
    /**
     * 
     *
     * @var int|null
     */
    protected $routesDefendedPerGameRank;
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
    protected $fantasyPointsPerAttempt;
    /**
     * 
     *
     * @var int|null
     */
    protected $fantasyPointsPerAttemptRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $fantasyPointsPerDropBack;
    /**
     * 
     *
     * @var int|null
     */
    protected $fantasyPointsPerDropBackRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $fantasyPointsPerGame;
    /**
     * 
     *
     * @var float|null
     */
    protected $fantasyPointsPerGameDifferential;
    /**
     * 
     *
     * @var int|null
     */
    protected $fantasyPointsPerGameRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $fantasyPointsPerOpportunity;
    /**
     * 
     *
     * @var int|null
     */
    protected $fantasyPointsPerOpportunityRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $fantasyPointsPerSnap;
    /**
     * 
     *
     * @var int|null
     */
    protected $fantasyPointsPerSnapRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $fantasyPointsPerPassRoute;
    /**
     * 
     *
     * @var int|null
     */
    protected $fantasyPointsPerPassRouteRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $fantasyPointsPerTarget;
    /**
     * 
     *
     * @var int|null
     */
    protected $fantasyPointsPerTargetRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $slotFantasyPoints;
    /**
     * 
     *
     * @var int|null
     */
    protected $slotFantasyPointsRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $slotFantasyPointsPerGame;
    /**
     * 
     *
     * @var int|null
     */
    protected $slotFantasyPointsPerGameRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $slotFantasyPointsPerTarget;
    /**
     * 
     *
     * @var int|null
     */
    protected $slotFantasyPointsPerTargetRank;
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
    protected $fantasyPointsAllowedPerTarget;
    /**
     * 
     *
     * @var int|null
     */
    protected $fantasyPointsAllowedPerTargetRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $fantasyPointsAllowedPerGame;
    /**
     * 
     *
     * @var int|null
     */
    protected $fantasyPointsAllowedPerGameRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $fantasyPointsAllowedPerSnap;
    /**
     * 
     *
     * @var int|null
     */
    protected $fantasyPointsAllowedPerSnapRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $fantasyPointsAllowedPerCoverSnap;
    /**
     * 
     *
     * @var int|null
     */
    protected $fantasyPointsAllowedPerCoverSnapRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $expectedFantasyPoints;
    /**
     * 
     *
     * @var int|null
     */
    protected $expectedFantasyPointsRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $expectedFantasyPointsPerGame;
    /**
     * 
     *
     * @var int|null
     */
    protected $expectedFantasyPointsPerGameRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $normalizedFantasyPointsPerGame;
    /**
     * 
     *
     * @var int|null
     */
    protected $normalizedFantasyPointsPerGameRank;
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
     * @return int|null
     */
    public function getSnapShareRank() : ?int
    {
        return $this->snapShareRank;
    }
    /**
     * 
     *
     * @param int|null $snapShareRank
     *
     * @return self
     */
    public function setSnapShareRank(?int $snapShareRank) : self
    {
        $this->snapShareRank = $snapShareRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSlotRate() : ?float
    {
        return $this->slotRate;
    }
    /**
     * 
     *
     * @param float|null $slotRate
     *
     * @return self
     */
    public function setSlotRate(?float $slotRate) : self
    {
        $this->slotRate = $slotRate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSlotRateRank() : ?int
    {
        return $this->slotRateRank;
    }
    /**
     * 
     *
     * @param int|null $slotRateRank
     *
     * @return self
     */
    public function setSlotRateRank(?int $slotRateRank) : self
    {
        $this->slotRateRank = $slotRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTargetSeparation() : ?float
    {
        return $this->targetSeparation;
    }
    /**
     * 
     *
     * @param float|null $targetSeparation
     *
     * @return self
     */
    public function setTargetSeparation(?float $targetSeparation) : self
    {
        $this->targetSeparation = $targetSeparation;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTargetSeparationRank() : ?int
    {
        return $this->targetSeparationRank;
    }
    /**
     * 
     *
     * @param int|null $targetSeparationRank
     *
     * @return self
     */
    public function setTargetSeparationRank(?int $targetSeparationRank) : self
    {
        $this->targetSeparationRank = $targetSeparationRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getBurnRate() : ?float
    {
        return $this->burnRate;
    }
    /**
     * 
     *
     * @param float|null $burnRate
     *
     * @return self
     */
    public function setBurnRate(?float $burnRate) : self
    {
        $this->burnRate = $burnRate;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAirYards() : ?float
    {
        return $this->airYards;
    }
    /**
     * 
     *
     * @param float|null $airYards
     *
     * @return self
     */
    public function setAirYards(?float $airYards) : self
    {
        $this->airYards = $airYards;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAirYardsPerGame() : ?float
    {
        return $this->airYardsPerGame;
    }
    /**
     * 
     *
     * @param float|null $airYardsPerGame
     *
     * @return self
     */
    public function setAirYardsPerGame(?float $airYardsPerGame) : self
    {
        $this->airYardsPerGame = $airYardsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAirYardsRank() : ?int
    {
        return $this->airYardsRank;
    }
    /**
     * 
     *
     * @param int|null $airYardsRank
     *
     * @return self
     */
    public function setAirYardsRank(?int $airYardsRank) : self
    {
        $this->airYardsRank = $airYardsRank;
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
    public function getCarriesInside10PerGame() : ?float
    {
        return $this->carriesInside10PerGame;
    }
    /**
     * 
     *
     * @param float|null $carriesInside10PerGame
     *
     * @return self
     */
    public function setCarriesInside10PerGame(?float $carriesInside10PerGame) : self
    {
        $this->carriesInside10PerGame = $carriesInside10PerGame;
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
    public function getCarriesInside5PerGame() : ?float
    {
        return $this->carriesInside5PerGame;
    }
    /**
     * 
     *
     * @param float|null $carriesInside5PerGame
     *
     * @return self
     */
    public function setCarriesInside5PerGame(?float $carriesInside5PerGame) : self
    {
        $this->carriesInside5PerGame = $carriesInside5PerGame;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getCarriesPerGame() : ?float
    {
        return $this->carriesPerGame;
    }
    /**
     * 
     *
     * @param float|null $carriesPerGame
     *
     * @return self
     */
    public function setCarriesPerGame(?float $carriesPerGame) : self
    {
        $this->carriesPerGame = $carriesPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCarriesPerGameRank() : ?int
    {
        return $this->carriesPerGameRank;
    }
    /**
     * 
     *
     * @param int|null $carriesPerGameRank
     *
     * @return self
     */
    public function setCarriesPerGameRank(?int $carriesPerGameRank) : self
    {
        $this->carriesPerGameRank = $carriesPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCarriesRank() : ?int
    {
        return $this->carriesRank;
    }
    /**
     * 
     *
     * @param int|null $carriesRank
     *
     * @return self
     */
    public function setCarriesRank(?int $carriesRank) : self
    {
        $this->carriesRank = $carriesRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getGameScript() : ?float
    {
        return $this->gameScript;
    }
    /**
     * 
     *
     * @param float|null $gameScript
     *
     * @return self
     */
    public function setGameScript(?float $gameScript) : self
    {
        $this->gameScript = $gameScript;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getGameScriptRank() : ?int
    {
        return $this->gameScriptRank;
    }
    /**
     * 
     *
     * @param int|null $gameScriptRank
     *
     * @return self
     */
    public function setGameScriptRank(?int $gameScriptRank) : self
    {
        $this->gameScriptRank = $gameScriptRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getGoalLineCarries() : ?float
    {
        return $this->goalLineCarries;
    }
    /**
     * 
     *
     * @param float|null $goalLineCarries
     *
     * @return self
     */
    public function setGoalLineCarries(?float $goalLineCarries) : self
    {
        $this->goalLineCarries = $goalLineCarries;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getGoalLineCarriesPerGame() : ?float
    {
        return $this->goalLineCarriesPerGame;
    }
    /**
     * 
     *
     * @param float|null $goalLineCarriesPerGame
     *
     * @return self
     */
    public function setGoalLineCarriesPerGame(?float $goalLineCarriesPerGame) : self
    {
        $this->goalLineCarriesPerGame = $goalLineCarriesPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getGoalLineCarriesPerGameRank() : ?int
    {
        return $this->goalLineCarriesPerGameRank;
    }
    /**
     * 
     *
     * @param int|null $goalLineCarriesPerGameRank
     *
     * @return self
     */
    public function setGoalLineCarriesPerGameRank(?int $goalLineCarriesPerGameRank) : self
    {
        $this->goalLineCarriesPerGameRank = $goalLineCarriesPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getGoalLineCarriesRank() : ?int
    {
        return $this->goalLineCarriesRank;
    }
    /**
     * 
     *
     * @param int|null $goalLineCarriesRank
     *
     * @return self
     */
    public function setGoalLineCarriesRank(?int $goalLineCarriesRank) : self
    {
        $this->goalLineCarriesRank = $goalLineCarriesRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getProductionPremium() : ?float
    {
        return $this->productionPremium;
    }
    /**
     * 
     *
     * @param float|null $productionPremium
     *
     * @return self
     */
    public function setProductionPremium(?float $productionPremium) : self
    {
        $this->productionPremium = $productionPremium;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getProductionPremiumRank() : ?int
    {
        return $this->productionPremiumRank;
    }
    /**
     * 
     *
     * @param int|null $productionPremiumRank
     *
     * @return self
     */
    public function setProductionPremiumRank(?int $productionPremiumRank) : self
    {
        $this->productionPremiumRank = $productionPremiumRank;
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
    public function getRedZoneCarriesPerGame() : ?float
    {
        return $this->redZoneCarriesPerGame;
    }
    /**
     * 
     *
     * @param float|null $redZoneCarriesPerGame
     *
     * @return self
     */
    public function setRedZoneCarriesPerGame(?float $redZoneCarriesPerGame) : self
    {
        $this->redZoneCarriesPerGame = $redZoneCarriesPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRedZoneCarriesPerGameRank() : ?int
    {
        return $this->redZoneCarriesPerGameRank;
    }
    /**
     * 
     *
     * @param int|null $redZoneCarriesPerGameRank
     *
     * @return self
     */
    public function setRedZoneCarriesPerGameRank(?int $redZoneCarriesPerGameRank) : self
    {
        $this->redZoneCarriesPerGameRank = $redZoneCarriesPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRedZoneCarriesRank() : ?int
    {
        return $this->redZoneCarriesRank;
    }
    /**
     * 
     *
     * @param int|null $redZoneCarriesRank
     *
     * @return self
     */
    public function setRedZoneCarriesRank(?int $redZoneCarriesRank) : self
    {
        $this->redZoneCarriesRank = $redZoneCarriesRank;
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
     * @return int|null
     */
    public function getRushingTouchdownsRank() : ?int
    {
        return $this->rushingTouchdownsRank;
    }
    /**
     * 
     *
     * @param int|null $rushingTouchdownsRank
     *
     * @return self
     */
    public function setRushingTouchdownsRank(?int $rushingTouchdownsRank) : self
    {
        $this->rushingTouchdownsRank = $rushingTouchdownsRank;
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
     * @return int|null
     */
    public function getRushingYardsRank() : ?int
    {
        return $this->rushingYardsRank;
    }
    /**
     * 
     *
     * @param int|null $rushingYardsRank
     *
     * @return self
     */
    public function setRushingYardsRank(?int $rushingYardsRank) : self
    {
        $this->rushingYardsRank = $rushingYardsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRushYardsPerGame() : ?float
    {
        return $this->rushYardsPerGame;
    }
    /**
     * 
     *
     * @param float|null $rushYardsPerGame
     *
     * @return self
     */
    public function setRushYardsPerGame(?float $rushYardsPerGame) : self
    {
        $this->rushYardsPerGame = $rushYardsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRedZoneSnaps() : ?float
    {
        return $this->redZoneSnaps;
    }
    /**
     * 
     *
     * @param float|null $redZoneSnaps
     *
     * @return self
     */
    public function setRedZoneSnaps(?float $redZoneSnaps) : self
    {
        $this->redZoneSnaps = $redZoneSnaps;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRunSnaps() : ?float
    {
        return $this->runSnaps;
    }
    /**
     * 
     *
     * @param float|null $runSnaps
     *
     * @return self
     */
    public function setRunSnaps(?float $runSnaps) : self
    {
        $this->runSnaps = $runSnaps;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPassSnaps() : ?float
    {
        return $this->passSnaps;
    }
    /**
     * 
     *
     * @param float|null $passSnaps
     *
     * @return self
     */
    public function setPassSnaps(?float $passSnaps) : self
    {
        $this->passSnaps = $passSnaps;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSnapweightedGameScript() : ?float
    {
        return $this->snapweightedGameScript;
    }
    /**
     * 
     *
     * @param float|null $snapweightedGameScript
     *
     * @return self
     */
    public function setSnapweightedGameScript(?float $snapweightedGameScript) : self
    {
        $this->snapweightedGameScript = $snapweightedGameScript;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSnapweightedGameScriptRank() : ?int
    {
        return $this->snapweightedGameScriptRank;
    }
    /**
     * 
     *
     * @param int|null $snapweightedGameScriptRank
     *
     * @return self
     */
    public function setSnapweightedGameScriptRank(?int $snapweightedGameScriptRank) : self
    {
        $this->snapweightedGameScriptRank = $snapweightedGameScriptRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTeamPassPlays() : ?float
    {
        return $this->teamPassPlays;
    }
    /**
     * 
     *
     * @param float|null $teamPassPlays
     *
     * @return self
     */
    public function setTeamPassPlays(?float $teamPassPlays) : self
    {
        $this->teamPassPlays = $teamPassPlays;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTeamPassPlaysRank() : ?int
    {
        return $this->teamPassPlaysRank;
    }
    /**
     * 
     *
     * @param int|null $teamPassPlaysRank
     *
     * @return self
     */
    public function setTeamPassPlaysRank(?int $teamPassPlaysRank) : self
    {
        $this->teamPassPlaysRank = $teamPassPlaysRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTouchdownRate() : ?float
    {
        return $this->touchdownRate;
    }
    /**
     * 
     *
     * @param float|null $touchdownRate
     *
     * @return self
     */
    public function setTouchdownRate(?float $touchdownRate) : self
    {
        $this->touchdownRate = $touchdownRate;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getWeeklyVolatility() : ?float
    {
        return $this->weeklyVolatility;
    }
    /**
     * 
     *
     * @param float|null $weeklyVolatility
     *
     * @return self
     */
    public function setWeeklyVolatility(?float $weeklyVolatility) : self
    {
        $this->weeklyVolatility = $weeklyVolatility;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getWeeklyVolatilityRank() : ?int
    {
        return $this->weeklyVolatilityRank;
    }
    /**
     * 
     *
     * @param int|null $weeklyVolatilityRank
     *
     * @return self
     */
    public function setWeeklyVolatilityRank(?int $weeklyVolatilityRank) : self
    {
        $this->weeklyVolatilityRank = $weeklyVolatilityRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getVOS() : ?float
    {
        return $this->vOS;
    }
    /**
     * 
     *
     * @param float|null $vOS
     *
     * @return self
     */
    public function setVOS(?float $vOS) : self
    {
        $this->vOS = $vOS;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getVOSRank() : ?int
    {
        return $this->vOSRank;
    }
    /**
     * 
     *
     * @param int|null $vOSRank
     *
     * @return self
     */
    public function setVOSRank(?int $vOSRank) : self
    {
        $this->vOSRank = $vOSRank;
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
     * @return int|null
     */
    public function getYardsPerTargetRank() : ?int
    {
        return $this->yardsPerTargetRank;
    }
    /**
     * 
     *
     * @param int|null $yardsPerTargetRank
     *
     * @return self
     */
    public function setYardsPerTargetRank(?int $yardsPerTargetRank) : self
    {
        $this->yardsPerTargetRank = $yardsPerTargetRank;
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
    public function getYardsAfterCatch() : ?float
    {
        return $this->yardsAfterCatch;
    }
    /**
     * 
     *
     * @param float|null $yardsAfterCatch
     *
     * @return self
     */
    public function setYardsAfterCatch(?float $yardsAfterCatch) : self
    {
        $this->yardsAfterCatch = $yardsAfterCatch;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getYardsAfterCatchPerGame() : ?float
    {
        return $this->yardsAfterCatchPerGame;
    }
    /**
     * 
     *
     * @param float|null $yardsAfterCatchPerGame
     *
     * @return self
     */
    public function setYardsAfterCatchPerGame(?float $yardsAfterCatchPerGame) : self
    {
        $this->yardsAfterCatchPerGame = $yardsAfterCatchPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getYardsAfterCatchPerReception() : ?float
    {
        return $this->yardsAfterCatchPerReception;
    }
    /**
     * 
     *
     * @param float|null $yardsAfterCatchPerReception
     *
     * @return self
     */
    public function setYardsAfterCatchPerReception(?float $yardsAfterCatchPerReception) : self
    {
        $this->yardsAfterCatchPerReception = $yardsAfterCatchPerReception;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getYardsAfterCatchPerTarget() : ?float
    {
        return $this->yardsAfterCatchPerTarget;
    }
    /**
     * 
     *
     * @param float|null $yardsAfterCatchPerTarget
     *
     * @return self
     */
    public function setYardsAfterCatchPerTarget(?float $yardsAfterCatchPerTarget) : self
    {
        $this->yardsAfterCatchPerTarget = $yardsAfterCatchPerTarget;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getYardsAfterCatchRank() : ?int
    {
        return $this->yardsAfterCatchRank;
    }
    /**
     * 
     *
     * @param int|null $yardsAfterCatchRank
     *
     * @return self
     */
    public function setYardsAfterCatchRank(?int $yardsAfterCatchRank) : self
    {
        $this->yardsAfterCatchRank = $yardsAfterCatchRank;
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
     * @return int|null
     */
    public function getTotalTouchdownsRank() : ?int
    {
        return $this->totalTouchdownsRank;
    }
    /**
     * 
     *
     * @param int|null $totalTouchdownsRank
     *
     * @return self
     */
    public function setTotalTouchdownsRank(?int $totalTouchdownsRank) : self
    {
        $this->totalTouchdownsRank = $totalTouchdownsRank;
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
    public function getTotalYardsPerGame() : ?float
    {
        return $this->totalYardsPerGame;
    }
    /**
     * 
     *
     * @param float|null $totalYardsPerGame
     *
     * @return self
     */
    public function setTotalYardsPerGame(?float $totalYardsPerGame) : self
    {
        $this->totalYardsPerGame = $totalYardsPerGame;
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
     * @return int|null
     */
    public function getTargetShareRank() : ?int
    {
        return $this->targetShareRank;
    }
    /**
     * 
     *
     * @param int|null $targetShareRank
     *
     * @return self
     */
    public function setTargetShareRank(?int $targetShareRank) : self
    {
        $this->targetShareRank = $targetShareRank;
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
    public function getTargetsInside10PerGame() : ?float
    {
        return $this->targetsInside10PerGame;
    }
    /**
     * 
     *
     * @param float|null $targetsInside10PerGame
     *
     * @return self
     */
    public function setTargetsInside10PerGame(?float $targetsInside10PerGame) : self
    {
        $this->targetsInside10PerGame = $targetsInside10PerGame;
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
    public function getTargetsInside5PerGame() : ?float
    {
        return $this->targetsInside5PerGame;
    }
    /**
     * 
     *
     * @param float|null $targetsInside5PerGame
     *
     * @return self
     */
    public function setTargetsInside5PerGame(?float $targetsInside5PerGame) : self
    {
        $this->targetsInside5PerGame = $targetsInside5PerGame;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTargetsPerGame() : ?float
    {
        return $this->targetsPerGame;
    }
    /**
     * 
     *
     * @param float|null $targetsPerGame
     *
     * @return self
     */
    public function setTargetsPerGame(?float $targetsPerGame) : self
    {
        $this->targetsPerGame = $targetsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTargetsPerGameRank() : ?int
    {
        return $this->targetsPerGameRank;
    }
    /**
     * 
     *
     * @param int|null $targetsPerGameRank
     *
     * @return self
     */
    public function setTargetsPerGameRank(?int $targetsPerGameRank) : self
    {
        $this->targetsPerGameRank = $targetsPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTargetsRank() : ?int
    {
        return $this->targetsRank;
    }
    /**
     * 
     *
     * @param int|null $targetsRank
     *
     * @return self
     */
    public function setTargetsRank(?int $targetsRank) : self
    {
        $this->targetsRank = $targetsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSlotSnaps() : ?float
    {
        return $this->slotSnaps;
    }
    /**
     * 
     *
     * @param float|null $slotSnaps
     *
     * @return self
     */
    public function setSlotSnaps(?float $slotSnaps) : self
    {
        $this->slotSnaps = $slotSnaps;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSlotYPR() : ?float
    {
        return $this->slotYPR;
    }
    /**
     * 
     *
     * @param float|null $slotYPR
     *
     * @return self
     */
    public function setSlotYPR(?float $slotYPR) : self
    {
        $this->slotYPR = $slotYPR;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSlotYPRRank() : ?int
    {
        return $this->slotYPRRank;
    }
    /**
     * 
     *
     * @param int|null $slotYPRRank
     *
     * @return self
     */
    public function setSlotYPRRank(?int $slotYPRRank) : self
    {
        $this->slotYPRRank = $slotYPRRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSlotYPT() : ?float
    {
        return $this->slotYPT;
    }
    /**
     * 
     *
     * @param float|null $slotYPT
     *
     * @return self
     */
    public function setSlotYPT(?float $slotYPT) : self
    {
        $this->slotYPT = $slotYPT;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSlotYPTRank() : ?int
    {
        return $this->slotYPTRank;
    }
    /**
     * 
     *
     * @param int|null $slotYPTRank
     *
     * @return self
     */
    public function setSlotYPTRank(?int $slotYPTRank) : self
    {
        $this->slotYPTRank = $slotYPTRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRedZoneSnapShare() : ?float
    {
        return $this->redZoneSnapShare;
    }
    /**
     * 
     *
     * @param float|null $redZoneSnapShare
     *
     * @return self
     */
    public function setRedZoneSnapShare(?float $redZoneSnapShare) : self
    {
        $this->redZoneSnapShare = $redZoneSnapShare;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRedZoneSnapShareRank() : ?int
    {
        return $this->redZoneSnapShareRank;
    }
    /**
     * 
     *
     * @param int|null $redZoneSnapShareRank
     *
     * @return self
     */
    public function setRedZoneSnapShareRank(?int $redZoneSnapShareRank) : self
    {
        $this->redZoneSnapShareRank = $redZoneSnapShareRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRouteParticipation() : ?float
    {
        return $this->routeParticipation;
    }
    /**
     * 
     *
     * @param float|null $routeParticipation
     *
     * @return self
     */
    public function setRouteParticipation(?float $routeParticipation) : self
    {
        $this->routeParticipation = $routeParticipation;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRouteParticipationRank() : ?int
    {
        return $this->routeParticipationRank;
    }
    /**
     * 
     *
     * @param int|null $routeParticipationRank
     *
     * @return self
     */
    public function setRouteParticipationRank(?int $routeParticipationRank) : self
    {
        $this->routeParticipationRank = $routeParticipationRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPassRoutes() : ?float
    {
        return $this->passRoutes;
    }
    /**
     * 
     *
     * @param float|null $passRoutes
     *
     * @return self
     */
    public function setPassRoutes(?float $passRoutes) : self
    {
        $this->passRoutes = $passRoutes;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPassRoutesPerGame() : ?float
    {
        return $this->passRoutesPerGame;
    }
    /**
     * 
     *
     * @param float|null $passRoutesPerGame
     *
     * @return self
     */
    public function setPassRoutesPerGame(?float $passRoutesPerGame) : self
    {
        $this->passRoutesPerGame = $passRoutesPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPassRoutesPerGameRank() : ?int
    {
        return $this->passRoutesPerGameRank;
    }
    /**
     * 
     *
     * @param int|null $passRoutesPerGameRank
     *
     * @return self
     */
    public function setPassRoutesPerGameRank(?int $passRoutesPerGameRank) : self
    {
        $this->passRoutesPerGameRank = $passRoutesPerGameRank;
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
     * @return int|null
     */
    public function getRedZoneReceptionsRank() : ?int
    {
        return $this->redZoneReceptionsRank;
    }
    /**
     * 
     *
     * @param int|null $redZoneReceptionsRank
     *
     * @return self
     */
    public function setRedZoneReceptionsRank(?int $redZoneReceptionsRank) : self
    {
        $this->redZoneReceptionsRank = $redZoneReceptionsRank;
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
    public function getRedZoneTargetShare() : ?float
    {
        return $this->redZoneTargetShare;
    }
    /**
     * 
     *
     * @param float|null $redZoneTargetShare
     *
     * @return self
     */
    public function setRedZoneTargetShare(?float $redZoneTargetShare) : self
    {
        $this->redZoneTargetShare = $redZoneTargetShare;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRedZoneTargetShareRank() : ?int
    {
        return $this->redZoneTargetShareRank;
    }
    /**
     * 
     *
     * @param int|null $redZoneTargetShareRank
     *
     * @return self
     */
    public function setRedZoneTargetShareRank(?int $redZoneTargetShareRank) : self
    {
        $this->redZoneTargetShareRank = $redZoneTargetShareRank;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRedZoneTargetsRank() : ?int
    {
        return $this->redZoneTargetsRank;
    }
    /**
     * 
     *
     * @param int|null $redZoneTargetsRank
     *
     * @return self
     */
    public function setRedZoneTargetsRank(?int $redZoneTargetsRank) : self
    {
        $this->redZoneTargetsRank = $redZoneTargetsRank;
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
    public function getRedZoneTouchesPerGame() : ?float
    {
        return $this->redZoneTouchesPerGame;
    }
    /**
     * 
     *
     * @param float|null $redZoneTouchesPerGame
     *
     * @return self
     */
    public function setRedZoneTouchesPerGame(?float $redZoneTouchesPerGame) : self
    {
        $this->redZoneTouchesPerGame = $redZoneTouchesPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getQBRatingWhenTargeted() : ?float
    {
        return $this->qBRatingWhenTargeted;
    }
    /**
     * 
     *
     * @param float|null $qBRatingWhenTargeted
     *
     * @return self
     */
    public function setQBRatingWhenTargeted(?float $qBRatingWhenTargeted) : self
    {
        $this->qBRatingWhenTargeted = $qBRatingWhenTargeted;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getQBRatingWhenTargetedRank() : ?int
    {
        return $this->qBRatingWhenTargetedRank;
    }
    /**
     * 
     *
     * @param int|null $qBRatingWhenTargetedRank
     *
     * @return self
     */
    public function setQBRatingWhenTargetedRank(?int $qBRatingWhenTargetedRank) : self
    {
        $this->qBRatingWhenTargetedRank = $qBRatingWhenTargetedRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getReceivingTDs() : ?float
    {
        return $this->receivingTDs;
    }
    /**
     * 
     *
     * @param float|null $receivingTDs
     *
     * @return self
     */
    public function setReceivingTDs(?float $receivingTDs) : self
    {
        $this->receivingTDs = $receivingTDs;
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
    public function getReceivingYardsPerGame() : ?float
    {
        return $this->receivingYardsPerGame;
    }
    /**
     * 
     *
     * @param float|null $receivingYardsPerGame
     *
     * @return self
     */
    public function setReceivingYardsPerGame(?float $receivingYardsPerGame) : self
    {
        $this->receivingYardsPerGame = $receivingYardsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getReceivingYardsPerGameRank() : ?int
    {
        return $this->receivingYardsPerGameRank;
    }
    /**
     * 
     *
     * @param int|null $receivingYardsPerGameRank
     *
     * @return self
     */
    public function setReceivingYardsPerGameRank(?int $receivingYardsPerGameRank) : self
    {
        $this->receivingYardsPerGameRank = $receivingYardsPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getReceivingYardsRank() : ?int
    {
        return $this->receivingYardsRank;
    }
    /**
     * 
     *
     * @param int|null $receivingYardsRank
     *
     * @return self
     */
    public function setReceivingYardsRank(?int $receivingYardsRank) : self
    {
        $this->receivingYardsRank = $receivingYardsRank;
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
    public function getReceptionsPerGame() : ?float
    {
        return $this->receptionsPerGame;
    }
    /**
     * 
     *
     * @param float|null $receptionsPerGame
     *
     * @return self
     */
    public function setReceptionsPerGame(?float $receptionsPerGame) : self
    {
        $this->receptionsPerGame = $receptionsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getReceptionsPerGameRank() : ?int
    {
        return $this->receptionsPerGameRank;
    }
    /**
     * 
     *
     * @param int|null $receptionsPerGameRank
     *
     * @return self
     */
    public function setReceptionsPerGameRank(?int $receptionsPerGameRank) : self
    {
        $this->receptionsPerGameRank = $receptionsPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getReceptionsRank() : ?int
    {
        return $this->receptionsRank;
    }
    /**
     * 
     *
     * @param int|null $receptionsRank
     *
     * @return self
     */
    public function setReceptionsRank(?int $receptionsRank) : self
    {
        $this->receptionsRank = $receptionsRank;
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
     * @return int|null
     */
    public function getRedZoneCatchRateRank() : ?int
    {
        return $this->redZoneCatchRateRank;
    }
    /**
     * 
     *
     * @param int|null $redZoneCatchRateRank
     *
     * @return self
     */
    public function setRedZoneCatchRateRank(?int $redZoneCatchRateRank) : self
    {
        $this->redZoneCatchRateRank = $redZoneCatchRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getCatchableTargetRate() : ?float
    {
        return $this->catchableTargetRate;
    }
    /**
     * 
     *
     * @param float|null $catchableTargetRate
     *
     * @return self
     */
    public function setCatchableTargetRate(?float $catchableTargetRate) : self
    {
        $this->catchableTargetRate = $catchableTargetRate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCatchableTargetRateRank() : ?int
    {
        return $this->catchableTargetRateRank;
    }
    /**
     * 
     *
     * @param int|null $catchableTargetRateRank
     *
     * @return self
     */
    public function setCatchableTargetRateRank(?int $catchableTargetRateRank) : self
    {
        $this->catchableTargetRateRank = $catchableTargetRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getCatchableTargets() : ?float
    {
        return $this->catchableTargets;
    }
    /**
     * 
     *
     * @param float|null $catchableTargets
     *
     * @return self
     */
    public function setCatchableTargets(?float $catchableTargets) : self
    {
        $this->catchableTargets = $catchableTargets;
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
     * @return int|null
     */
    public function getCatchRateRank() : ?int
    {
        return $this->catchRateRank;
    }
    /**
     * 
     *
     * @param int|null $catchRateRank
     *
     * @return self
     */
    public function setCatchRateRank(?int $catchRateRank) : self
    {
        $this->catchRateRank = $catchRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDominatorRating() : ?float
    {
        return $this->dominatorRating;
    }
    /**
     * 
     *
     * @param float|null $dominatorRating
     *
     * @return self
     */
    public function setDominatorRating(?float $dominatorRating) : self
    {
        $this->dominatorRating = $dominatorRating;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDominatorRatingRank() : ?int
    {
        return $this->dominatorRatingRank;
    }
    /**
     * 
     *
     * @param int|null $dominatorRatingRank
     *
     * @return self
     */
    public function setDominatorRatingRank(?int $dominatorRatingRank) : self
    {
        $this->dominatorRatingRank = $dominatorRatingRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDrops() : ?float
    {
        return $this->drops;
    }
    /**
     * 
     *
     * @param float|null $drops
     *
     * @return self
     */
    public function setDrops(?float $drops) : self
    {
        $this->drops = $drops;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDropsPerGame() : ?float
    {
        return $this->dropsPerGame;
    }
    /**
     * 
     *
     * @param float|null $dropsPerGame
     *
     * @return self
     */
    public function setDropsPerGame(?float $dropsPerGame) : self
    {
        $this->dropsPerGame = $dropsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDropsPerGameRank() : ?int
    {
        return $this->dropsPerGameRank;
    }
    /**
     * 
     *
     * @param int|null $dropsPerGameRank
     *
     * @return self
     */
    public function setDropsPerGameRank(?int $dropsPerGameRank) : self
    {
        $this->dropsPerGameRank = $dropsPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDropRate() : ?float
    {
        return $this->dropRate;
    }
    /**
     * 
     *
     * @param float|null $dropRate
     *
     * @return self
     */
    public function setDropRate(?float $dropRate) : self
    {
        $this->dropRate = $dropRate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDropRateRank() : ?int
    {
        return $this->dropRateRank;
    }
    /**
     * 
     *
     * @param int|null $dropRateRank
     *
     * @return self
     */
    public function setDropRateRank(?int $dropRateRank) : self
    {
        $this->dropRateRank = $dropRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDropsRank() : ?int
    {
        return $this->dropsRank;
    }
    /**
     * 
     *
     * @param int|null $dropsRank
     *
     * @return self
     */
    public function setDropsRank(?int $dropsRank) : self
    {
        $this->dropsRank = $dropsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getEndzoneTargets() : ?float
    {
        return $this->endzoneTargets;
    }
    /**
     * 
     *
     * @param float|null $endzoneTargets
     *
     * @return self
     */
    public function setEndzoneTargets(?float $endzoneTargets) : self
    {
        $this->endzoneTargets = $endzoneTargets;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getEndzoneTargetShare() : ?float
    {
        return $this->endzoneTargetShare;
    }
    /**
     * 
     *
     * @param float|null $endzoneTargetShare
     *
     * @return self
     */
    public function setEndzoneTargetShare(?float $endzoneTargetShare) : self
    {
        $this->endzoneTargetShare = $endzoneTargetShare;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getEndzoneTargetShareRank() : ?int
    {
        return $this->endzoneTargetShareRank;
    }
    /**
     * 
     *
     * @param int|null $endzoneTargetShareRank
     *
     * @return self
     */
    public function setEndzoneTargetShareRank(?int $endzoneTargetShareRank) : self
    {
        $this->endzoneTargetShareRank = $endzoneTargetShareRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAccuracyRating() : ?float
    {
        return $this->accuracyRating;
    }
    /**
     * 
     *
     * @param float|null $accuracyRating
     *
     * @return self
     */
    public function setAccuracyRating(?float $accuracyRating) : self
    {
        $this->accuracyRating = $accuracyRating;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAccuracyRatingRank() : ?int
    {
        return $this->accuracyRatingRank;
    }
    /**
     * 
     *
     * @param int|null $accuracyRatingRank
     *
     * @return self
     */
    public function setAccuracyRatingRank(?int $accuracyRatingRank) : self
    {
        $this->accuracyRatingRank = $accuracyRatingRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAdjustedAttempts() : ?float
    {
        return $this->adjustedAttempts;
    }
    /**
     * 
     *
     * @param float|null $adjustedAttempts
     *
     * @return self
     */
    public function setAdjustedAttempts(?float $adjustedAttempts) : self
    {
        $this->adjustedAttempts = $adjustedAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAdjustedYardsPerAttempt() : ?float
    {
        return $this->adjustedYardsPerAttempt;
    }
    /**
     * 
     *
     * @param float|null $adjustedYardsPerAttempt
     *
     * @return self
     */
    public function setAdjustedYardsPerAttempt(?float $adjustedYardsPerAttempt) : self
    {
        $this->adjustedYardsPerAttempt = $adjustedYardsPerAttempt;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAdjustedYardsPerAttemptRank() : ?int
    {
        return $this->adjustedYardsPerAttemptRank;
    }
    /**
     * 
     *
     * @param int|null $adjustedYardsPerAttemptRank
     *
     * @return self
     */
    public function setAdjustedYardsPerAttemptRank(?int $adjustedYardsPerAttemptRank) : self
    {
        $this->adjustedYardsPerAttemptRank = $adjustedYardsPerAttemptRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAirYardsPerAttempt() : ?float
    {
        return $this->airYardsPerAttempt;
    }
    /**
     * 
     *
     * @param float|null $airYardsPerAttempt
     *
     * @return self
     */
    public function setAirYardsPerAttempt(?float $airYardsPerAttempt) : self
    {
        $this->airYardsPerAttempt = $airYardsPerAttempt;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAirYardsPerAttemptRank() : ?int
    {
        return $this->airYardsPerAttemptRank;
    }
    /**
     * 
     *
     * @param int|null $airYardsPerAttemptRank
     *
     * @return self
     */
    public function setAirYardsPerAttemptRank(?int $airYardsPerAttemptRank) : self
    {
        $this->airYardsPerAttemptRank = $airYardsPerAttemptRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAttemptsInside10() : ?float
    {
        return $this->attemptsInside10;
    }
    /**
     * 
     *
     * @param float|null $attemptsInside10
     *
     * @return self
     */
    public function setAttemptsInside10(?float $attemptsInside10) : self
    {
        $this->attemptsInside10 = $attemptsInside10;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAttemptsInside10PerGame() : ?float
    {
        return $this->attemptsInside10PerGame;
    }
    /**
     * 
     *
     * @param float|null $attemptsInside10PerGame
     *
     * @return self
     */
    public function setAttemptsInside10PerGame(?float $attemptsInside10PerGame) : self
    {
        $this->attemptsInside10PerGame = $attemptsInside10PerGame;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAttemptsInside5() : ?float
    {
        return $this->attemptsInside5;
    }
    /**
     * 
     *
     * @param float|null $attemptsInside5
     *
     * @return self
     */
    public function setAttemptsInside5(?float $attemptsInside5) : self
    {
        $this->attemptsInside5 = $attemptsInside5;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAttemptsInside5PerGame() : ?float
    {
        return $this->attemptsInside5PerGame;
    }
    /**
     * 
     *
     * @param float|null $attemptsInside5PerGame
     *
     * @return self
     */
    public function setAttemptsInside5PerGame(?float $attemptsInside5PerGame) : self
    {
        $this->attemptsInside5PerGame = $attemptsInside5PerGame;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAttemptsPerGame() : ?float
    {
        return $this->attemptsPerGame;
    }
    /**
     * 
     *
     * @param float|null $attemptsPerGame
     *
     * @return self
     */
    public function setAttemptsPerGame(?float $attemptsPerGame) : self
    {
        $this->attemptsPerGame = $attemptsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getCatchablePasses() : ?float
    {
        return $this->catchablePasses;
    }
    /**
     * 
     *
     * @param float|null $catchablePasses
     *
     * @return self
     */
    public function setCatchablePasses(?float $catchablePasses) : self
    {
        $this->catchablePasses = $catchablePasses;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getCatchablePassesPerGame() : ?float
    {
        return $this->catchablePassesPerGame;
    }
    /**
     * 
     *
     * @param float|null $catchablePassesPerGame
     *
     * @return self
     */
    public function setCatchablePassesPerGame(?float $catchablePassesPerGame) : self
    {
        $this->catchablePassesPerGame = $catchablePassesPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCatchablePassesRank() : ?int
    {
        return $this->catchablePassesRank;
    }
    /**
     * 
     *
     * @param int|null $catchablePassesRank
     *
     * @return self
     */
    public function setCatchablePassesRank(?int $catchablePassesRank) : self
    {
        $this->catchablePassesRank = $catchablePassesRank;
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
     * @return int|null
     */
    public function getCompletionPercentageRank() : ?int
    {
        return $this->completionPercentageRank;
    }
    /**
     * 
     *
     * @param int|null $completionPercentageRank
     *
     * @return self
     */
    public function setCompletionPercentageRank(?int $completionPercentageRank) : self
    {
        $this->completionPercentageRank = $completionPercentageRank;
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
    public function getDangerPlays() : ?float
    {
        return $this->dangerPlays;
    }
    /**
     * 
     *
     * @param float|null $dangerPlays
     *
     * @return self
     */
    public function setDangerPlays(?float $dangerPlays) : self
    {
        $this->dangerPlays = $dangerPlays;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDangerPlaysPerGame() : ?float
    {
        return $this->dangerPlaysPerGame;
    }
    /**
     * 
     *
     * @param float|null $dangerPlaysPerGame
     *
     * @return self
     */
    public function setDangerPlaysPerGame(?float $dangerPlaysPerGame) : self
    {
        $this->dangerPlaysPerGame = $dangerPlaysPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDangerPlaysRank() : ?int
    {
        return $this->dangerPlaysRank;
    }
    /**
     * 
     *
     * @param int|null $dangerPlaysRank
     *
     * @return self
     */
    public function setDangerPlaysRank(?int $dangerPlaysRank) : self
    {
        $this->dangerPlaysRank = $dangerPlaysRank;
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
    public function getDeepBallAttemptsPerGame() : ?float
    {
        return $this->deepBallAttemptsPerGame;
    }
    /**
     * 
     *
     * @param float|null $deepBallAttemptsPerGame
     *
     * @return self
     */
    public function setDeepBallAttemptsPerGame(?float $deepBallAttemptsPerGame) : self
    {
        $this->deepBallAttemptsPerGame = $deepBallAttemptsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDeepBallAttemptsPerGameRank() : ?int
    {
        return $this->deepBallAttemptsPerGameRank;
    }
    /**
     * 
     *
     * @param int|null $deepBallAttemptsPerGameRank
     *
     * @return self
     */
    public function setDeepBallAttemptsPerGameRank(?int $deepBallAttemptsPerGameRank) : self
    {
        $this->deepBallAttemptsPerGameRank = $deepBallAttemptsPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDeepBallAttemptsRank() : ?int
    {
        return $this->deepBallAttemptsRank;
    }
    /**
     * 
     *
     * @param int|null $deepBallAttemptsRank
     *
     * @return self
     */
    public function setDeepBallAttemptsRank(?int $deepBallAttemptsRank) : self
    {
        $this->deepBallAttemptsRank = $deepBallAttemptsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDeepBallCompletionPercentage() : ?float
    {
        return $this->deepBallCompletionPercentage;
    }
    /**
     * 
     *
     * @param float|null $deepBallCompletionPercentage
     *
     * @return self
     */
    public function setDeepBallCompletionPercentage(?float $deepBallCompletionPercentage) : self
    {
        $this->deepBallCompletionPercentage = $deepBallCompletionPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDeepBallCompletionPercentageRank() : ?int
    {
        return $this->deepBallCompletionPercentageRank;
    }
    /**
     * 
     *
     * @param int|null $deepBallCompletionPercentageRank
     *
     * @return self
     */
    public function setDeepBallCompletionPercentageRank(?int $deepBallCompletionPercentageRank) : self
    {
        $this->deepBallCompletionPercentageRank = $deepBallCompletionPercentageRank;
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
     * @return int|null
     */
    public function getDeepBallCompletionsRank() : ?int
    {
        return $this->deepBallCompletionsRank;
    }
    /**
     * 
     *
     * @param int|null $deepBallCompletionsRank
     *
     * @return self
     */
    public function setDeepBallCompletionsRank(?int $deepBallCompletionsRank) : self
    {
        $this->deepBallCompletionsRank = $deepBallCompletionsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDroppedPasses() : ?float
    {
        return $this->droppedPasses;
    }
    /**
     * 
     *
     * @param float|null $droppedPasses
     *
     * @return self
     */
    public function setDroppedPasses(?float $droppedPasses) : self
    {
        $this->droppedPasses = $droppedPasses;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDroppedPassesRank() : ?int
    {
        return $this->droppedPassesRank;
    }
    /**
     * 
     *
     * @param int|null $droppedPassesRank
     *
     * @return self
     */
    public function setDroppedPassesRank(?int $droppedPassesRank) : self
    {
        $this->droppedPassesRank = $droppedPassesRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDroppedPassesPerGame() : ?float
    {
        return $this->droppedPassesPerGame;
    }
    /**
     * 
     *
     * @param float|null $droppedPassesPerGame
     *
     * @return self
     */
    public function setDroppedPassesPerGame(?float $droppedPassesPerGame) : self
    {
        $this->droppedPassesPerGame = $droppedPassesPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDropsPerAttempt() : ?float
    {
        return $this->dropsPerAttempt;
    }
    /**
     * 
     *
     * @param float|null $dropsPerAttempt
     *
     * @return self
     */
    public function setDropsPerAttempt(?float $dropsPerAttempt) : self
    {
        $this->dropsPerAttempt = $dropsPerAttempt;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDropsPerAttemptRank() : ?int
    {
        return $this->dropsPerAttemptRank;
    }
    /**
     * 
     *
     * @param int|null $dropsPerAttemptRank
     *
     * @return self
     */
    public function setDropsPerAttemptRank(?int $dropsPerAttemptRank) : self
    {
        $this->dropsPerAttemptRank = $dropsPerAttemptRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDropBacks() : ?float
    {
        return $this->dropBacks;
    }
    /**
     * 
     *
     * @param float|null $dropBacks
     *
     * @return self
     */
    public function setDropBacks(?float $dropBacks) : self
    {
        $this->dropBacks = $dropBacks;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getInterceptablePasses() : ?float
    {
        return $this->interceptablePasses;
    }
    /**
     * 
     *
     * @param float|null $interceptablePasses
     *
     * @return self
     */
    public function setInterceptablePasses(?float $interceptablePasses) : self
    {
        $this->interceptablePasses = $interceptablePasses;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getInterceptablePassesPerGame() : ?float
    {
        return $this->interceptablePassesPerGame;
    }
    /**
     * 
     *
     * @param float|null $interceptablePassesPerGame
     *
     * @return self
     */
    public function setInterceptablePassesPerGame(?float $interceptablePassesPerGame) : self
    {
        $this->interceptablePassesPerGame = $interceptablePassesPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getInterceptablePassesRank() : ?int
    {
        return $this->interceptablePassesRank;
    }
    /**
     * 
     *
     * @param int|null $interceptablePassesRank
     *
     * @return self
     */
    public function setInterceptablePassesRank(?int $interceptablePassesRank) : self
    {
        $this->interceptablePassesRank = $interceptablePassesRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getMoneyThrows() : ?float
    {
        return $this->moneyThrows;
    }
    /**
     * 
     *
     * @param float|null $moneyThrows
     *
     * @return self
     */
    public function setMoneyThrows(?float $moneyThrows) : self
    {
        $this->moneyThrows = $moneyThrows;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getMoneyThrowsPerGame() : ?float
    {
        return $this->moneyThrowsPerGame;
    }
    /**
     * 
     *
     * @param float|null $moneyThrowsPerGame
     *
     * @return self
     */
    public function setMoneyThrowsPerGame(?float $moneyThrowsPerGame) : self
    {
        $this->moneyThrowsPerGame = $moneyThrowsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMoneyThrowsRank() : ?int
    {
        return $this->moneyThrowsRank;
    }
    /**
     * 
     *
     * @param int|null $moneyThrowsRank
     *
     * @return self
     */
    public function setMoneyThrowsRank(?int $moneyThrowsRank) : self
    {
        $this->moneyThrowsRank = $moneyThrowsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPassAttempts() : ?float
    {
        return $this->passAttempts;
    }
    /**
     * 
     *
     * @param float|null $passAttempts
     *
     * @return self
     */
    public function setPassAttempts(?float $passAttempts) : self
    {
        $this->passAttempts = $passAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPassAttemptsRank() : ?int
    {
        return $this->passAttemptsRank;
    }
    /**
     * 
     *
     * @param int|null $passAttemptsRank
     *
     * @return self
     */
    public function setPassAttemptsRank(?int $passAttemptsRank) : self
    {
        $this->passAttemptsRank = $passAttemptsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPassAttemptDistance() : ?float
    {
        return $this->passAttemptDistance;
    }
    /**
     * 
     *
     * @param float|null $passAttemptDistance
     *
     * @return self
     */
    public function setPassAttemptDistance(?float $passAttemptDistance) : self
    {
        $this->passAttemptDistance = $passAttemptDistance;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPassAttemptDistanceRank() : ?int
    {
        return $this->passAttemptDistanceRank;
    }
    /**
     * 
     *
     * @param int|null $passAttemptDistanceRank
     *
     * @return self
     */
    public function setPassAttemptDistanceRank(?int $passAttemptDistanceRank) : self
    {
        $this->passAttemptDistanceRank = $passAttemptDistanceRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPassAttemptDistancePerAttempt() : ?float
    {
        return $this->passAttemptDistancePerAttempt;
    }
    /**
     * 
     *
     * @param float|null $passAttemptDistancePerAttempt
     *
     * @return self
     */
    public function setPassAttemptDistancePerAttempt(?float $passAttemptDistancePerAttempt) : self
    {
        $this->passAttemptDistancePerAttempt = $passAttemptDistancePerAttempt;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPassAttemptDistancePerAttemptRank() : ?int
    {
        return $this->passAttemptDistancePerAttemptRank;
    }
    /**
     * 
     *
     * @param int|null $passAttemptDistancePerAttemptRank
     *
     * @return self
     */
    public function setPassAttemptDistancePerAttemptRank(?int $passAttemptDistancePerAttemptRank) : self
    {
        $this->passAttemptDistancePerAttemptRank = $passAttemptDistancePerAttemptRank;
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
     * @return int|null
     */
    public function getPassingTouchdownsRank() : ?int
    {
        return $this->passingTouchdownsRank;
    }
    /**
     * 
     *
     * @param int|null $passingTouchdownsRank
     *
     * @return self
     */
    public function setPassingTouchdownsRank(?int $passingTouchdownsRank) : self
    {
        $this->passingTouchdownsRank = $passingTouchdownsRank;
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
     * @return int|null
     */
    public function getPassingYardsPerAttemptRank() : ?int
    {
        return $this->passingYardsPerAttemptRank;
    }
    /**
     * 
     *
     * @param int|null $passingYardsPerAttemptRank
     *
     * @return self
     */
    public function setPassingYardsPerAttemptRank(?int $passingYardsPerAttemptRank) : self
    {
        $this->passingYardsPerAttemptRank = $passingYardsPerAttemptRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPassingYardsPerGame() : ?float
    {
        return $this->passingYardsPerGame;
    }
    /**
     * 
     *
     * @param float|null $passingYardsPerGame
     *
     * @return self
     */
    public function setPassingYardsPerGame(?float $passingYardsPerGame) : self
    {
        $this->passingYardsPerGame = $passingYardsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPassingYardsPerGameRank() : ?int
    {
        return $this->passingYardsPerGameRank;
    }
    /**
     * 
     *
     * @param int|null $passingYardsPerGameRank
     *
     * @return self
     */
    public function setPassingYardsPerGameRank(?int $passingYardsPerGameRank) : self
    {
        $this->passingYardsPerGameRank = $passingYardsPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPassingYardsRank() : ?int
    {
        return $this->passingYardsRank;
    }
    /**
     * 
     *
     * @param int|null $passingYardsRank
     *
     * @return self
     */
    public function setPassingYardsRank(?int $passingYardsRank) : self
    {
        $this->passingYardsRank = $passingYardsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPlayactionPassAttempts() : ?float
    {
        return $this->playactionPassAttempts;
    }
    /**
     * 
     *
     * @param float|null $playactionPassAttempts
     *
     * @return self
     */
    public function setPlayactionPassAttempts(?float $playactionPassAttempts) : self
    {
        $this->playactionPassAttempts = $playactionPassAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPlayactionPassAttemptsPerGame() : ?float
    {
        return $this->playactionPassAttemptsPerGame;
    }
    /**
     * 
     *
     * @param float|null $playactionPassAttemptsPerGame
     *
     * @return self
     */
    public function setPlayactionPassAttemptsPerGame(?float $playactionPassAttemptsPerGame) : self
    {
        $this->playactionPassAttemptsPerGame = $playactionPassAttemptsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPlayactionPassAttemptsRank() : ?int
    {
        return $this->playactionPassAttemptsRank;
    }
    /**
     * 
     *
     * @param int|null $playactionPassAttemptsRank
     *
     * @return self
     */
    public function setPlayactionPassAttemptsRank(?int $playactionPassAttemptsRank) : self
    {
        $this->playactionPassAttemptsRank = $playactionPassAttemptsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPlayactionPassCompletionPercentage() : ?float
    {
        return $this->playactionPassCompletionPercentage;
    }
    /**
     * 
     *
     * @param float|null $playactionPassCompletionPercentage
     *
     * @return self
     */
    public function setPlayactionPassCompletionPercentage(?float $playactionPassCompletionPercentage) : self
    {
        $this->playactionPassCompletionPercentage = $playactionPassCompletionPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPlayactionPassCompletionPercentageRank() : ?int
    {
        return $this->playactionPassCompletionPercentageRank;
    }
    /**
     * 
     *
     * @param int|null $playactionPassCompletionPercentageRank
     *
     * @return self
     */
    public function setPlayactionPassCompletionPercentageRank(?int $playactionPassCompletionPercentageRank) : self
    {
        $this->playactionPassCompletionPercentageRank = $playactionPassCompletionPercentageRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getProtectionRate() : ?float
    {
        return $this->protectionRate;
    }
    /**
     * 
     *
     * @param float|null $protectionRate
     *
     * @return self
     */
    public function setProtectionRate(?float $protectionRate) : self
    {
        $this->protectionRate = $protectionRate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getProtectionRateRank() : ?int
    {
        return $this->protectionRateRank;
    }
    /**
     * 
     *
     * @param int|null $protectionRateRank
     *
     * @return self
     */
    public function setProtectionRateRank(?int $protectionRateRank) : self
    {
        $this->protectionRateRank = $protectionRateRank;
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
    public function getRedZoneAttemptsPerGame() : ?float
    {
        return $this->redZoneAttemptsPerGame;
    }
    /**
     * 
     *
     * @param float|null $redZoneAttemptsPerGame
     *
     * @return self
     */
    public function setRedZoneAttemptsPerGame(?float $redZoneAttemptsPerGame) : self
    {
        $this->redZoneAttemptsPerGame = $redZoneAttemptsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRedZoneAttemptsRank() : ?int
    {
        return $this->redZoneAttemptsRank;
    }
    /**
     * 
     *
     * @param int|null $redZoneAttemptsRank
     *
     * @return self
     */
    public function setRedZoneAttemptsRank(?int $redZoneAttemptsRank) : self
    {
        $this->redZoneAttemptsRank = $redZoneAttemptsRank;
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
     * @return int|null
     */
    public function getRedZoneCompletionPercentageRank() : ?int
    {
        return $this->redZoneCompletionPercentageRank;
    }
    /**
     * 
     *
     * @param int|null $redZoneCompletionPercentageRank
     *
     * @return self
     */
    public function setRedZoneCompletionPercentageRank(?int $redZoneCompletionPercentageRank) : self
    {
        $this->redZoneCompletionPercentageRank = $redZoneCompletionPercentageRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRedZoneTDtoINTRatio() : ?float
    {
        return $this->redZoneTDtoINTRatio;
    }
    /**
     * 
     *
     * @param float|null $redZoneTDtoINTRatio
     *
     * @return self
     */
    public function setRedZoneTDtoINTRatio(?float $redZoneTDtoINTRatio) : self
    {
        $this->redZoneTDtoINTRatio = $redZoneTDtoINTRatio;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRushingTDs() : ?float
    {
        return $this->rushingTDs;
    }
    /**
     * 
     *
     * @param float|null $rushingTDs
     *
     * @return self
     */
    public function setRushingTDs(?float $rushingTDs) : self
    {
        $this->rushingTDs = $rushingTDs;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRushingYardsPerGameRank() : ?int
    {
        return $this->rushingYardsPerGameRank;
    }
    /**
     * 
     *
     * @param int|null $rushingYardsPerGameRank
     *
     * @return self
     */
    public function setRushingYardsPerGameRank(?int $rushingYardsPerGameRank) : self
    {
        $this->rushingYardsPerGameRank = $rushingYardsPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getShotgunCompletionPercentage() : ?float
    {
        return $this->shotgunCompletionPercentage;
    }
    /**
     * 
     *
     * @param float|null $shotgunCompletionPercentage
     *
     * @return self
     */
    public function setShotgunCompletionPercentage(?float $shotgunCompletionPercentage) : self
    {
        $this->shotgunCompletionPercentage = $shotgunCompletionPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getShotgunSnaps() : ?float
    {
        return $this->shotgunSnaps;
    }
    /**
     * 
     *
     * @param float|null $shotgunSnaps
     *
     * @return self
     */
    public function setShotgunSnaps(?float $shotgunSnaps) : self
    {
        $this->shotgunSnaps = $shotgunSnaps;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getUnderCenterCompletionPercentage() : ?float
    {
        return $this->underCenterCompletionPercentage;
    }
    /**
     * 
     *
     * @param float|null $underCenterCompletionPercentage
     *
     * @return self
     */
    public function setUnderCenterCompletionPercentage(?float $underCenterCompletionPercentage) : self
    {
        $this->underCenterCompletionPercentage = $underCenterCompletionPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getUnderCenterSnaps() : ?float
    {
        return $this->underCenterSnaps;
    }
    /**
     * 
     *
     * @param float|null $underCenterSnaps
     *
     * @return self
     */
    public function setUnderCenterSnaps(?float $underCenterSnaps) : self
    {
        $this->underCenterSnaps = $underCenterSnaps;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getReceiverContestedCatchRate() : ?float
    {
        return $this->receiverContestedCatchRate;
    }
    /**
     * 
     *
     * @param float|null $receiverContestedCatchRate
     *
     * @return self
     */
    public function setReceiverContestedCatchRate(?float $receiverContestedCatchRate) : self
    {
        $this->receiverContestedCatchRate = $receiverContestedCatchRate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getReceiverContestedCatchRateRank() : ?int
    {
        return $this->receiverContestedCatchRateRank;
    }
    /**
     * 
     *
     * @param int|null $receiverContestedCatchRateRank
     *
     * @return self
     */
    public function setReceiverContestedCatchRateRank(?int $receiverContestedCatchRateRank) : self
    {
        $this->receiverContestedCatchRateRank = $receiverContestedCatchRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getReceiverTargetSeparation() : ?float
    {
        return $this->receiverTargetSeparation;
    }
    /**
     * 
     *
     * @param float|null $receiverTargetSeparation
     *
     * @return self
     */
    public function setReceiverTargetSeparation(?float $receiverTargetSeparation) : self
    {
        $this->receiverTargetSeparation = $receiverTargetSeparation;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getReceiverTargetSeparationRank() : ?int
    {
        return $this->receiverTargetSeparationRank;
    }
    /**
     * 
     *
     * @param int|null $receiverTargetSeparationRank
     *
     * @return self
     */
    public function setReceiverTargetSeparationRank(?int $receiverTargetSeparationRank) : self
    {
        $this->receiverTargetSeparationRank = $receiverTargetSeparationRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getReceiverYardsAfterTheCatch() : ?float
    {
        return $this->receiverYardsAfterTheCatch;
    }
    /**
     * 
     *
     * @param float|null $receiverYardsAfterTheCatch
     *
     * @return self
     */
    public function setReceiverYardsAfterTheCatch(?float $receiverYardsAfterTheCatch) : self
    {
        $this->receiverYardsAfterTheCatch = $receiverYardsAfterTheCatch;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getReceiverYardsAfterTheCatchRank() : ?int
    {
        return $this->receiverYardsAfterTheCatchRank;
    }
    /**
     * 
     *
     * @param int|null $receiverYardsAfterTheCatchRank
     *
     * @return self
     */
    public function setReceiverYardsAfterTheCatchRank(?int $receiverYardsAfterTheCatchRank) : self
    {
        $this->receiverYardsAfterTheCatchRank = $receiverYardsAfterTheCatchRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getReceiverYardsAfterTheCatchPerTarget() : ?float
    {
        return $this->receiverYardsAfterTheCatchPerTarget;
    }
    /**
     * 
     *
     * @param float|null $receiverYardsAfterTheCatchPerTarget
     *
     * @return self
     */
    public function setReceiverYardsAfterTheCatchPerTarget(?float $receiverYardsAfterTheCatchPerTarget) : self
    {
        $this->receiverYardsAfterTheCatchPerTarget = $receiverYardsAfterTheCatchPerTarget;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSupportingCastEfficiency() : ?float
    {
        return $this->supportingCastEfficiency;
    }
    /**
     * 
     *
     * @param float|null $supportingCastEfficiency
     *
     * @return self
     */
    public function setSupportingCastEfficiency(?float $supportingCastEfficiency) : self
    {
        $this->supportingCastEfficiency = $supportingCastEfficiency;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSupportingCastEfficiencyRank() : ?int
    {
        return $this->supportingCastEfficiencyRank;
    }
    /**
     * 
     *
     * @param int|null $supportingCastEfficiencyRank
     *
     * @return self
     */
    public function setSupportingCastEfficiencyRank(?int $supportingCastEfficiencyRank) : self
    {
        $this->supportingCastEfficiencyRank = $supportingCastEfficiencyRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTotalQBR() : ?float
    {
        return $this->totalQBR;
    }
    /**
     * 
     *
     * @param float|null $totalQBR
     *
     * @return self
     */
    public function setTotalQBR(?float $totalQBR) : self
    {
        $this->totalQBR = $totalQBR;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTotalQBRRank() : ?int
    {
        return $this->totalQBRRank;
    }
    /**
     * 
     *
     * @param int|null $totalQBRRank
     *
     * @return self
     */
    public function setTotalQBRRank(?int $totalQBRRank) : self
    {
        $this->totalQBRRank = $totalQBRRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTrueCompletionPercentage() : ?float
    {
        return $this->trueCompletionPercentage;
    }
    /**
     * 
     *
     * @param float|null $trueCompletionPercentage
     *
     * @return self
     */
    public function setTrueCompletionPercentage(?float $trueCompletionPercentage) : self
    {
        $this->trueCompletionPercentage = $trueCompletionPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTrueCompletionPercentageRank() : ?int
    {
        return $this->trueCompletionPercentageRank;
    }
    /**
     * 
     *
     * @param int|null $trueCompletionPercentageRank
     *
     * @return self
     */
    public function setTrueCompletionPercentageRank(?int $trueCompletionPercentageRank) : self
    {
        $this->trueCompletionPercentageRank = $trueCompletionPercentageRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTruePasserRating() : ?float
    {
        return $this->truePasserRating;
    }
    /**
     * 
     *
     * @param float|null $truePasserRating
     *
     * @return self
     */
    public function setTruePasserRating(?float $truePasserRating) : self
    {
        $this->truePasserRating = $truePasserRating;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTruePasserRatingRank() : ?int
    {
        return $this->truePasserRatingRank;
    }
    /**
     * 
     *
     * @param int|null $truePasserRatingRank
     *
     * @return self
     */
    public function setTruePasserRatingRank(?int $truePasserRatingRank) : self
    {
        $this->truePasserRatingRank = $truePasserRatingRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getUncatchablePasses() : ?float
    {
        return $this->uncatchablePasses;
    }
    /**
     * 
     *
     * @param float|null $uncatchablePasses
     *
     * @return self
     */
    public function setUncatchablePasses(?float $uncatchablePasses) : self
    {
        $this->uncatchablePasses = $uncatchablePasses;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getUncatchablePassesPerGame() : ?float
    {
        return $this->uncatchablePassesPerGame;
    }
    /**
     * 
     *
     * @param float|null $uncatchablePassesPerGame
     *
     * @return self
     */
    public function setUncatchablePassesPerGame(?float $uncatchablePassesPerGame) : self
    {
        $this->uncatchablePassesPerGame = $uncatchablePassesPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUncatchablePassesRank() : ?int
    {
        return $this->uncatchablePassesRank;
    }
    /**
     * 
     *
     * @param int|null $uncatchablePassesRank
     *
     * @return self
     */
    public function setUncatchablePassesRank(?int $uncatchablePassesRank) : self
    {
        $this->uncatchablePassesRank = $uncatchablePassesRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getUnderPressureAttempts() : ?float
    {
        return $this->underPressureAttempts;
    }
    /**
     * 
     *
     * @param float|null $underPressureAttempts
     *
     * @return self
     */
    public function setUnderPressureAttempts(?float $underPressureAttempts) : self
    {
        $this->underPressureAttempts = $underPressureAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUnderPressureAttemptsRank() : ?int
    {
        return $this->underPressureAttemptsRank;
    }
    /**
     * 
     *
     * @param int|null $underPressureAttemptsRank
     *
     * @return self
     */
    public function setUnderPressureAttemptsRank(?int $underPressureAttemptsRank) : self
    {
        $this->underPressureAttemptsRank = $underPressureAttemptsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getUnderPressureAttemptsPerGame() : ?float
    {
        return $this->underPressureAttemptsPerGame;
    }
    /**
     * 
     *
     * @param float|null $underPressureAttemptsPerGame
     *
     * @return self
     */
    public function setUnderPressureAttemptsPerGame(?float $underPressureAttemptsPerGame) : self
    {
        $this->underPressureAttemptsPerGame = $underPressureAttemptsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPressuredCompletionPercentage() : ?float
    {
        return $this->pressuredCompletionPercentage;
    }
    /**
     * 
     *
     * @param float|null $pressuredCompletionPercentage
     *
     * @return self
     */
    public function setPressuredCompletionPercentage(?float $pressuredCompletionPercentage) : self
    {
        $this->pressuredCompletionPercentage = $pressuredCompletionPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPressuredCompletionPercentageRank() : ?int
    {
        return $this->pressuredCompletionPercentageRank;
    }
    /**
     * 
     *
     * @param int|null $pressuredCompletionPercentageRank
     *
     * @return self
     */
    public function setPressuredCompletionPercentageRank(?int $pressuredCompletionPercentageRank) : self
    {
        $this->pressuredCompletionPercentageRank = $pressuredCompletionPercentageRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAverageDefendersInTheBox() : ?float
    {
        return $this->averageDefendersInTheBox;
    }
    /**
     * 
     *
     * @param float|null $averageDefendersInTheBox
     *
     * @return self
     */
    public function setAverageDefendersInTheBox(?float $averageDefendersInTheBox) : self
    {
        $this->averageDefendersInTheBox = $averageDefendersInTheBox;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAverageDefendersInTheBoxRank() : ?int
    {
        return $this->averageDefendersInTheBoxRank;
    }
    /**
     * 
     *
     * @param int|null $averageDefendersInTheBoxRank
     *
     * @return self
     */
    public function setAverageDefendersInTheBoxRank(?int $averageDefendersInTheBoxRank) : self
    {
        $this->averageDefendersInTheBoxRank = $averageDefendersInTheBoxRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getBaseFrontCarryRate() : ?float
    {
        return $this->baseFrontCarryRate;
    }
    /**
     * 
     *
     * @param float|null $baseFrontCarryRate
     *
     * @return self
     */
    public function setBaseFrontCarryRate(?float $baseFrontCarryRate) : self
    {
        $this->baseFrontCarryRate = $baseFrontCarryRate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBaseFrontCarryRateRank() : ?int
    {
        return $this->baseFrontCarryRateRank;
    }
    /**
     * 
     *
     * @param int|null $baseFrontCarryRateRank
     *
     * @return self
     */
    public function setBaseFrontCarryRateRank(?int $baseFrontCarryRateRank) : self
    {
        $this->baseFrontCarryRateRank = $baseFrontCarryRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getBaseFrontYardsPerCarry() : ?float
    {
        return $this->baseFrontYardsPerCarry;
    }
    /**
     * 
     *
     * @param float|null $baseFrontYardsPerCarry
     *
     * @return self
     */
    public function setBaseFrontYardsPerCarry(?float $baseFrontYardsPerCarry) : self
    {
        $this->baseFrontYardsPerCarry = $baseFrontYardsPerCarry;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBaseFrontYardsPerCarryRank() : ?int
    {
        return $this->baseFrontYardsPerCarryRank;
    }
    /**
     * 
     *
     * @param int|null $baseFrontYardsPerCarryRank
     *
     * @return self
     */
    public function setBaseFrontYardsPerCarryRank(?int $baseFrontYardsPerCarryRank) : self
    {
        $this->baseFrontYardsPerCarryRank = $baseFrontYardsPerCarryRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getBreakawayRunRate() : ?float
    {
        return $this->breakawayRunRate;
    }
    /**
     * 
     *
     * @param float|null $breakawayRunRate
     *
     * @return self
     */
    public function setBreakawayRunRate(?float $breakawayRunRate) : self
    {
        $this->breakawayRunRate = $breakawayRunRate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBreakawayRunRateRank() : ?int
    {
        return $this->breakawayRunRateRank;
    }
    /**
     * 
     *
     * @param int|null $breakawayRunRateRank
     *
     * @return self
     */
    public function setBreakawayRunRateRank(?int $breakawayRunRateRank) : self
    {
        $this->breakawayRunRateRank = $breakawayRunRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getBreakawayRuns() : ?float
    {
        return $this->breakawayRuns;
    }
    /**
     * 
     *
     * @param float|null $breakawayRuns
     *
     * @return self
     */
    public function setBreakawayRuns(?float $breakawayRuns) : self
    {
        $this->breakawayRuns = $breakawayRuns;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getBreakawayRunsPerGame() : ?float
    {
        return $this->breakawayRunsPerGame;
    }
    /**
     * 
     *
     * @param float|null $breakawayRunsPerGame
     *
     * @return self
     */
    public function setBreakawayRunsPerGame(?float $breakawayRunsPerGame) : self
    {
        $this->breakawayRunsPerGame = $breakawayRunsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBreakawayRunsPerGameRank() : ?int
    {
        return $this->breakawayRunsPerGameRank;
    }
    /**
     * 
     *
     * @param int|null $breakawayRunsPerGameRank
     *
     * @return self
     */
    public function setBreakawayRunsPerGameRank(?int $breakawayRunsPerGameRank) : self
    {
        $this->breakawayRunsPerGameRank = $breakawayRunsPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBreakawayRunsRank() : ?int
    {
        return $this->breakawayRunsRank;
    }
    /**
     * 
     *
     * @param int|null $breakawayRunsRank
     *
     * @return self
     */
    public function setBreakawayRunsRank(?int $breakawayRunsRank) : self
    {
        $this->breakawayRunsRank = $breakawayRunsRank;
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
    public function getEvadedTacklesPerGame() : ?float
    {
        return $this->evadedTacklesPerGame;
    }
    /**
     * 
     *
     * @param float|null $evadedTacklesPerGame
     *
     * @return self
     */
    public function setEvadedTacklesPerGame(?float $evadedTacklesPerGame) : self
    {
        $this->evadedTacklesPerGame = $evadedTacklesPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getEvadedTacklesPerGameRank() : ?int
    {
        return $this->evadedTacklesPerGameRank;
    }
    /**
     * 
     *
     * @param int|null $evadedTacklesPerGameRank
     *
     * @return self
     */
    public function setEvadedTacklesPerGameRank(?int $evadedTacklesPerGameRank) : self
    {
        $this->evadedTacklesPerGameRank = $evadedTacklesPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getEvadedTacklesRank() : ?int
    {
        return $this->evadedTacklesRank;
    }
    /**
     * 
     *
     * @param int|null $evadedTacklesRank
     *
     * @return self
     */
    public function setEvadedTacklesRank(?int $evadedTacklesRank) : self
    {
        $this->evadedTacklesRank = $evadedTacklesRank;
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
     * @return int|null
     */
    public function getJukeRateRank() : ?int
    {
        return $this->jukeRateRank;
    }
    /**
     * 
     *
     * @param int|null $jukeRateRank
     *
     * @return self
     */
    public function setJukeRateRank(?int $jukeRateRank) : self
    {
        $this->jukeRateRank = $jukeRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getLightFrontCarryRate() : ?float
    {
        return $this->lightFrontCarryRate;
    }
    /**
     * 
     *
     * @param float|null $lightFrontCarryRate
     *
     * @return self
     */
    public function setLightFrontCarryRate(?float $lightFrontCarryRate) : self
    {
        $this->lightFrontCarryRate = $lightFrontCarryRate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLightFrontCarryRateRank() : ?int
    {
        return $this->lightFrontCarryRateRank;
    }
    /**
     * 
     *
     * @param int|null $lightFrontCarryRateRank
     *
     * @return self
     */
    public function setLightFrontCarryRateRank(?int $lightFrontCarryRateRank) : self
    {
        $this->lightFrontCarryRateRank = $lightFrontCarryRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getLightFrontYardsPerCarry() : ?float
    {
        return $this->lightFrontYardsPerCarry;
    }
    /**
     * 
     *
     * @param float|null $lightFrontYardsPerCarry
     *
     * @return self
     */
    public function setLightFrontYardsPerCarry(?float $lightFrontYardsPerCarry) : self
    {
        $this->lightFrontYardsPerCarry = $lightFrontYardsPerCarry;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLightFrontYardsPerCarryRank() : ?int
    {
        return $this->lightFrontYardsPerCarryRank;
    }
    /**
     * 
     *
     * @param int|null $lightFrontYardsPerCarryRank
     *
     * @return self
     */
    public function setLightFrontYardsPerCarryRank(?int $lightFrontYardsPerCarryRank) : self
    {
        $this->lightFrontYardsPerCarryRank = $lightFrontYardsPerCarryRank;
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
     * @return int|null
     */
    public function getOpportunityShareRank() : ?int
    {
        return $this->opportunityShareRank;
    }
    /**
     * 
     *
     * @param int|null $opportunityShareRank
     *
     * @return self
     */
    public function setOpportunityShareRank(?int $opportunityShareRank) : self
    {
        $this->opportunityShareRank = $opportunityShareRank;
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
     * @return int|null
     */
    public function getRedZoneTouchesPerGameRank() : ?int
    {
        return $this->redZoneTouchesPerGameRank;
    }
    /**
     * 
     *
     * @param int|null $redZoneTouchesPerGameRank
     *
     * @return self
     */
    public function setRedZoneTouchesPerGameRank(?int $redZoneTouchesPerGameRank) : self
    {
        $this->redZoneTouchesPerGameRank = $redZoneTouchesPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRedZoneTouchesRank() : ?int
    {
        return $this->redZoneTouchesRank;
    }
    /**
     * 
     *
     * @param int|null $redZoneTouchesRank
     *
     * @return self
     */
    public function setRedZoneTouchesRank(?int $redZoneTouchesRank) : self
    {
        $this->redZoneTouchesRank = $redZoneTouchesRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRunBlockingEfficiency() : ?float
    {
        return $this->runBlockingEfficiency;
    }
    /**
     * 
     *
     * @param float|null $runBlockingEfficiency
     *
     * @return self
     */
    public function setRunBlockingEfficiency(?float $runBlockingEfficiency) : self
    {
        $this->runBlockingEfficiency = $runBlockingEfficiency;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRunBlockingEfficiencyRank() : ?int
    {
        return $this->runBlockingEfficiencyRank;
    }
    /**
     * 
     *
     * @param int|null $runBlockingEfficiencyRank
     *
     * @return self
     */
    public function setRunBlockingEfficiencyRank(?int $runBlockingEfficiencyRank) : self
    {
        $this->runBlockingEfficiencyRank = $runBlockingEfficiencyRank;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRushYardsPerGameRank() : ?int
    {
        return $this->rushYardsPerGameRank;
    }
    /**
     * 
     *
     * @param int|null $rushYardsPerGameRank
     *
     * @return self
     */
    public function setRushYardsPerGameRank(?int $rushYardsPerGameRank) : self
    {
        $this->rushYardsPerGameRank = $rushYardsPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getShotgunCarryRate() : ?float
    {
        return $this->shotgunCarryRate;
    }
    /**
     * 
     *
     * @param float|null $shotgunCarryRate
     *
     * @return self
     */
    public function setShotgunCarryRate(?float $shotgunCarryRate) : self
    {
        $this->shotgunCarryRate = $shotgunCarryRate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getShotgunCarryRateRank() : ?int
    {
        return $this->shotgunCarryRateRank;
    }
    /**
     * 
     *
     * @param int|null $shotgunCarryRateRank
     *
     * @return self
     */
    public function setShotgunCarryRateRank(?int $shotgunCarryRateRank) : self
    {
        $this->shotgunCarryRateRank = $shotgunCarryRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getShotgunYardsPerCarry() : ?float
    {
        return $this->shotgunYardsPerCarry;
    }
    /**
     * 
     *
     * @param float|null $shotgunYardsPerCarry
     *
     * @return self
     */
    public function setShotgunYardsPerCarry(?float $shotgunYardsPerCarry) : self
    {
        $this->shotgunYardsPerCarry = $shotgunYardsPerCarry;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getShotgunYardsPerCarryRank() : ?int
    {
        return $this->shotgunYardsPerCarryRank;
    }
    /**
     * 
     *
     * @param int|null $shotgunYardsPerCarryRank
     *
     * @return self
     */
    public function setShotgunYardsPerCarryRank(?int $shotgunYardsPerCarryRank) : self
    {
        $this->shotgunYardsPerCarryRank = $shotgunYardsPerCarryRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRedZoneOpportunityShare() : ?float
    {
        return $this->redZoneOpportunityShare;
    }
    /**
     * 
     *
     * @param float|null $redZoneOpportunityShare
     *
     * @return self
     */
    public function setRedZoneOpportunityShare(?float $redZoneOpportunityShare) : self
    {
        $this->redZoneOpportunityShare = $redZoneOpportunityShare;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRedZoneOpportunityShareRank() : ?int
    {
        return $this->redZoneOpportunityShareRank;
    }
    /**
     * 
     *
     * @param int|null $redZoneOpportunityShareRank
     *
     * @return self
     */
    public function setRedZoneOpportunityShareRank(?int $redZoneOpportunityShareRank) : self
    {
        $this->redZoneOpportunityShareRank = $redZoneOpportunityShareRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRedZoneTDConversionRate() : ?float
    {
        return $this->redZoneTDConversionRate;
    }
    /**
     * 
     *
     * @param float|null $redZoneTDConversionRate
     *
     * @return self
     */
    public function setRedZoneTDConversionRate(?float $redZoneTDConversionRate) : self
    {
        $this->redZoneTDConversionRate = $redZoneTDConversionRate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRedZoneTDConversionRateRank() : ?int
    {
        return $this->redZoneTDConversionRateRank;
    }
    /**
     * 
     *
     * @param int|null $redZoneTDConversionRateRank
     *
     * @return self
     */
    public function setRedZoneTDConversionRateRank(?int $redZoneTDConversionRateRank) : self
    {
        $this->redZoneTDConversionRateRank = $redZoneTDConversionRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getStackedFrontCarryRate() : ?float
    {
        return $this->stackedFrontCarryRate;
    }
    /**
     * 
     *
     * @param float|null $stackedFrontCarryRate
     *
     * @return self
     */
    public function setStackedFrontCarryRate(?float $stackedFrontCarryRate) : self
    {
        $this->stackedFrontCarryRate = $stackedFrontCarryRate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getStackedFrontCarryRateRank() : ?int
    {
        return $this->stackedFrontCarryRateRank;
    }
    /**
     * 
     *
     * @param int|null $stackedFrontCarryRateRank
     *
     * @return self
     */
    public function setStackedFrontCarryRateRank(?int $stackedFrontCarryRateRank) : self
    {
        $this->stackedFrontCarryRateRank = $stackedFrontCarryRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getStackedFrontYardsPerCarry() : ?float
    {
        return $this->stackedFrontYardsPerCarry;
    }
    /**
     * 
     *
     * @param float|null $stackedFrontYardsPerCarry
     *
     * @return self
     */
    public function setStackedFrontYardsPerCarry(?float $stackedFrontYardsPerCarry) : self
    {
        $this->stackedFrontYardsPerCarry = $stackedFrontYardsPerCarry;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getStackedFrontYardsPerCarryRank() : ?int
    {
        return $this->stackedFrontYardsPerCarryRank;
    }
    /**
     * 
     *
     * @param int|null $stackedFrontYardsPerCarryRank
     *
     * @return self
     */
    public function setStackedFrontYardsPerCarryRank(?int $stackedFrontYardsPerCarryRank) : self
    {
        $this->stackedFrontYardsPerCarryRank = $stackedFrontYardsPerCarryRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getStuffedRuns() : ?float
    {
        return $this->stuffedRuns;
    }
    /**
     * 
     *
     * @param float|null $stuffedRuns
     *
     * @return self
     */
    public function setStuffedRuns(?float $stuffedRuns) : self
    {
        $this->stuffedRuns = $stuffedRuns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getStuffedRunsRank() : ?int
    {
        return $this->stuffedRunsRank;
    }
    /**
     * 
     *
     * @param int|null $stuffedRunsRank
     *
     * @return self
     */
    public function setStuffedRunsRank(?int $stuffedRunsRank) : self
    {
        $this->stuffedRunsRank = $stuffedRunsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getStuffedRunRate() : ?float
    {
        return $this->stuffedRunRate;
    }
    /**
     * 
     *
     * @param float|null $stuffedRunRate
     *
     * @return self
     */
    public function setStuffedRunRate(?float $stuffedRunRate) : self
    {
        $this->stuffedRunRate = $stuffedRunRate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getStuffedRunRateRank() : ?int
    {
        return $this->stuffedRunRateRank;
    }
    /**
     * 
     *
     * @param int|null $stuffedRunRateRank
     *
     * @return self
     */
    public function setStuffedRunRateRank(?int $stuffedRunRateRank) : self
    {
        $this->stuffedRunRateRank = $stuffedRunRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTeamRunPlays() : ?float
    {
        return $this->teamRunPlays;
    }
    /**
     * 
     *
     * @param float|null $teamRunPlays
     *
     * @return self
     */
    public function setTeamRunPlays(?float $teamRunPlays) : self
    {
        $this->teamRunPlays = $teamRunPlays;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTeamRunPlaysRank() : ?int
    {
        return $this->teamRunPlaysRank;
    }
    /**
     * 
     *
     * @param int|null $teamRunPlaysRank
     *
     * @return self
     */
    public function setTeamRunPlaysRank(?int $teamRunPlaysRank) : self
    {
        $this->teamRunPlaysRank = $teamRunPlaysRank;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTotalYardsPerGameRank() : ?int
    {
        return $this->totalYardsPerGameRank;
    }
    /**
     * 
     *
     * @param int|null $totalYardsPerGameRank
     *
     * @return self
     */
    public function setTotalYardsPerGameRank(?int $totalYardsPerGameRank) : self
    {
        $this->totalYardsPerGameRank = $totalYardsPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTotalYardsRank() : ?int
    {
        return $this->totalYardsRank;
    }
    /**
     * 
     *
     * @param int|null $totalYardsRank
     *
     * @return self
     */
    public function setTotalYardsRank(?int $totalYardsRank) : self
    {
        $this->totalYardsRank = $totalYardsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTrueYardsPerCarry() : ?float
    {
        return $this->trueYardsPerCarry;
    }
    /**
     * 
     *
     * @param float|null $trueYardsPerCarry
     *
     * @return self
     */
    public function setTrueYardsPerCarry(?float $trueYardsPerCarry) : self
    {
        $this->trueYardsPerCarry = $trueYardsPerCarry;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTrueYardsPerCarryRank() : ?int
    {
        return $this->trueYardsPerCarryRank;
    }
    /**
     * 
     *
     * @param int|null $trueYardsPerCarryRank
     *
     * @return self
     */
    public function setTrueYardsPerCarryRank(?int $trueYardsPerCarryRank) : self
    {
        $this->trueYardsPerCarryRank = $trueYardsPerCarryRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getUnderCenterCarryRate() : ?float
    {
        return $this->underCenterCarryRate;
    }
    /**
     * 
     *
     * @param float|null $underCenterCarryRate
     *
     * @return self
     */
    public function setUnderCenterCarryRate(?float $underCenterCarryRate) : self
    {
        $this->underCenterCarryRate = $underCenterCarryRate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUnderCenterCarryRateRank() : ?int
    {
        return $this->underCenterCarryRateRank;
    }
    /**
     * 
     *
     * @param int|null $underCenterCarryRateRank
     *
     * @return self
     */
    public function setUnderCenterCarryRateRank(?int $underCenterCarryRateRank) : self
    {
        $this->underCenterCarryRateRank = $underCenterCarryRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getUnderCenterYardsPerCarry() : ?float
    {
        return $this->underCenterYardsPerCarry;
    }
    /**
     * 
     *
     * @param float|null $underCenterYardsPerCarry
     *
     * @return self
     */
    public function setUnderCenterYardsPerCarry(?float $underCenterYardsPerCarry) : self
    {
        $this->underCenterYardsPerCarry = $underCenterYardsPerCarry;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUnderCenterYardsPerCarryRank() : ?int
    {
        return $this->underCenterYardsPerCarryRank;
    }
    /**
     * 
     *
     * @param int|null $underCenterYardsPerCarryRank
     *
     * @return self
     */
    public function setUnderCenterYardsPerCarryRank(?int $underCenterYardsPerCarryRank) : self
    {
        $this->underCenterYardsPerCarryRank = $underCenterYardsPerCarryRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getWeightedOpportunities() : ?float
    {
        return $this->weightedOpportunities;
    }
    /**
     * 
     *
     * @param float|null $weightedOpportunities
     *
     * @return self
     */
    public function setWeightedOpportunities(?float $weightedOpportunities) : self
    {
        $this->weightedOpportunities = $weightedOpportunities;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getWeightedOpportunitiesRank() : ?int
    {
        return $this->weightedOpportunitiesRank;
    }
    /**
     * 
     *
     * @param int|null $weightedOpportunitiesRank
     *
     * @return self
     */
    public function setWeightedOpportunitiesRank(?int $weightedOpportunitiesRank) : self
    {
        $this->weightedOpportunitiesRank = $weightedOpportunitiesRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getWeightedOpportunitiesPerGame() : ?float
    {
        return $this->weightedOpportunitiesPerGame;
    }
    /**
     * 
     *
     * @param float|null $weightedOpportunitiesPerGame
     *
     * @return self
     */
    public function setWeightedOpportunitiesPerGame(?float $weightedOpportunitiesPerGame) : self
    {
        $this->weightedOpportunitiesPerGame = $weightedOpportunitiesPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getWeightedOpportunitiesPerGameRank() : ?int
    {
        return $this->weightedOpportunitiesPerGameRank;
    }
    /**
     * 
     *
     * @param int|null $weightedOpportunitiesPerGameRank
     *
     * @return self
     */
    public function setWeightedOpportunitiesPerGameRank(?int $weightedOpportunitiesPerGameRank) : self
    {
        $this->weightedOpportunitiesPerGameRank = $weightedOpportunitiesPerGameRank;
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
    public function getYardsCreatedPerGame() : ?float
    {
        return $this->yardsCreatedPerGame;
    }
    /**
     * 
     *
     * @param float|null $yardsCreatedPerGame
     *
     * @return self
     */
    public function setYardsCreatedPerGame(?float $yardsCreatedPerGame) : self
    {
        $this->yardsCreatedPerGame = $yardsCreatedPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getYardsCreatedPerGameRank() : ?int
    {
        return $this->yardsCreatedPerGameRank;
    }
    /**
     * 
     *
     * @param int|null $yardsCreatedPerGameRank
     *
     * @return self
     */
    public function setYardsCreatedPerGameRank(?int $yardsCreatedPerGameRank) : self
    {
        $this->yardsCreatedPerGameRank = $yardsCreatedPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getYardsCreatedPerCarry() : ?float
    {
        return $this->yardsCreatedPerCarry;
    }
    /**
     * 
     *
     * @param float|null $yardsCreatedPerCarry
     *
     * @return self
     */
    public function setYardsCreatedPerCarry(?float $yardsCreatedPerCarry) : self
    {
        $this->yardsCreatedPerCarry = $yardsCreatedPerCarry;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getYardsCreatedPerCarryRank() : ?int
    {
        return $this->yardsCreatedPerCarryRank;
    }
    /**
     * 
     *
     * @param int|null $yardsCreatedPerCarryRank
     *
     * @return self
     */
    public function setYardsCreatedPerCarryRank(?int $yardsCreatedPerCarryRank) : self
    {
        $this->yardsCreatedPerCarryRank = $yardsCreatedPerCarryRank;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getYardsCreatedRank() : ?int
    {
        return $this->yardsCreatedRank;
    }
    /**
     * 
     *
     * @param int|null $yardsCreatedRank
     *
     * @return self
     */
    public function setYardsCreatedRank(?int $yardsCreatedRank) : self
    {
        $this->yardsCreatedRank = $yardsCreatedRank;
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
     * @return int|null
     */
    public function getYardsPerCarryRank() : ?int
    {
        return $this->yardsPerCarryRank;
    }
    /**
     * 
     *
     * @param int|null $yardsPerCarryRank
     *
     * @return self
     */
    public function setYardsPerCarryRank(?int $yardsPerCarryRank) : self
    {
        $this->yardsPerCarryRank = $yardsPerCarryRank;
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
    public function getYardsPerRouteRun() : ?float
    {
        return $this->yardsPerRouteRun;
    }
    /**
     * 
     *
     * @param float|null $yardsPerRouteRun
     *
     * @return self
     */
    public function setYardsPerRouteRun(?float $yardsPerRouteRun) : self
    {
        $this->yardsPerRouteRun = $yardsPerRouteRun;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getYardsPerRouteRunRank() : ?int
    {
        return $this->yardsPerRouteRunRank;
    }
    /**
     * 
     *
     * @param int|null $yardsPerRouteRunRank
     *
     * @return self
     */
    public function setYardsPerRouteRunRank(?int $yardsPerRouteRunRank) : self
    {
        $this->yardsPerRouteRunRank = $yardsPerRouteRunRank;
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
     * @return int|null
     */
    public function getYardsPerTouchRank() : ?int
    {
        return $this->yardsPerTouchRank;
    }
    /**
     * 
     *
     * @param int|null $yardsPerTouchRank
     *
     * @return self
     */
    public function setYardsPerTouchRank(?int $yardsPerTouchRank) : self
    {
        $this->yardsPerTouchRank = $yardsPerTouchRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAirYardsPerReception() : ?float
    {
        return $this->airYardsPerReception;
    }
    /**
     * 
     *
     * @param float|null $airYardsPerReception
     *
     * @return self
     */
    public function setAirYardsPerReception(?float $airYardsPerReception) : self
    {
        $this->airYardsPerReception = $airYardsPerReception;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAirYardsPerTarget() : ?float
    {
        return $this->airYardsPerTarget;
    }
    /**
     * 
     *
     * @param float|null $airYardsPerTarget
     *
     * @return self
     */
    public function setAirYardsPerTarget(?float $airYardsPerTarget) : self
    {
        $this->airYardsPerTarget = $airYardsPerTarget;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getCushion() : ?float
    {
        return $this->cushion;
    }
    /**
     * 
     *
     * @param float|null $cushion
     *
     * @return self
     */
    public function setCushion(?float $cushion) : self
    {
        $this->cushion = $cushion;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCushionRank() : ?int
    {
        return $this->cushionRank;
    }
    /**
     * 
     *
     * @param int|null $cushionRank
     *
     * @return self
     */
    public function setCushionRank(?int $cushionRank) : self
    {
        $this->cushionRank = $cushionRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAverageTargetDistance() : ?float
    {
        return $this->averageTargetDistance;
    }
    /**
     * 
     *
     * @param float|null $averageTargetDistance
     *
     * @return self
     */
    public function setAverageTargetDistance(?float $averageTargetDistance) : self
    {
        $this->averageTargetDistance = $averageTargetDistance;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAverageTargetDistanceRank() : ?int
    {
        return $this->averageTargetDistanceRank;
    }
    /**
     * 
     *
     * @param int|null $averageTargetDistanceRank
     *
     * @return self
     */
    public function setAverageTargetDistanceRank(?int $averageTargetDistanceRank) : self
    {
        $this->averageTargetDistanceRank = $averageTargetDistanceRank;
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
    public function getCatchableTargetsPerGame() : ?float
    {
        return $this->catchableTargetsPerGame;
    }
    /**
     * 
     *
     * @param float|null $catchableTargetsPerGame
     *
     * @return self
     */
    public function setCatchableTargetsPerGame(?float $catchableTargetsPerGame) : self
    {
        $this->catchableTargetsPerGame = $catchableTargetsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCatchableTargetsRank() : ?int
    {
        return $this->catchableTargetsRank;
    }
    /**
     * 
     *
     * @param int|null $catchableTargetsRank
     *
     * @return self
     */
    public function setCatchableTargetsRank(?int $catchableTargetsRank) : self
    {
        $this->catchableTargetsRank = $catchableTargetsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getContestedCatchConversionRate() : ?float
    {
        return $this->contestedCatchConversionRate;
    }
    /**
     * 
     *
     * @param float|null $contestedCatchConversionRate
     *
     * @return self
     */
    public function setContestedCatchConversionRate(?float $contestedCatchConversionRate) : self
    {
        $this->contestedCatchConversionRate = $contestedCatchConversionRate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getContestedCatchConversionRateRank() : ?int
    {
        return $this->contestedCatchConversionRateRank;
    }
    /**
     * 
     *
     * @param int|null $contestedCatchConversionRateRank
     *
     * @return self
     */
    public function setContestedCatchConversionRateRank(?int $contestedCatchConversionRateRank) : self
    {
        $this->contestedCatchConversionRateRank = $contestedCatchConversionRateRank;
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
     * @return int|null
     */
    public function getHogRateRank() : ?int
    {
        return $this->hogRateRank;
    }
    /**
     * 
     *
     * @param int|null $hogRateRank
     *
     * @return self
     */
    public function setHogRateRank(?int $hogRateRank) : self
    {
        $this->hogRateRank = $hogRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPassSnapsRank() : ?int
    {
        return $this->passSnapsRank;
    }
    /**
     * 
     *
     * @param int|null $passSnapsRank
     *
     * @return self
     */
    public function setPassSnapsRank(?int $passSnapsRank) : self
    {
        $this->passSnapsRank = $passSnapsRank;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRunSnapsRank() : ?int
    {
        return $this->runSnapsRank;
    }
    /**
     * 
     *
     * @param int|null $runSnapsRank
     *
     * @return self
     */
    public function setRunSnapsRank(?int $runSnapsRank) : self
    {
        $this->runSnapsRank = $runSnapsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSlotCatchRate() : ?float
    {
        return $this->slotCatchRate;
    }
    /**
     * 
     *
     * @param float|null $slotCatchRate
     *
     * @return self
     */
    public function setSlotCatchRate(?float $slotCatchRate) : self
    {
        $this->slotCatchRate = $slotCatchRate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSlotCatchRateRank() : ?int
    {
        return $this->slotCatchRateRank;
    }
    /**
     * 
     *
     * @param int|null $slotCatchRateRank
     *
     * @return self
     */
    public function setSlotCatchRateRank(?int $slotCatchRateRank) : self
    {
        $this->slotCatchRateRank = $slotCatchRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSlotSnapsRank() : ?int
    {
        return $this->slotSnapsRank;
    }
    /**
     * 
     *
     * @param int|null $slotSnapsRank
     *
     * @return self
     */
    public function setSlotSnapsRank(?int $slotSnapsRank) : self
    {
        $this->slotSnapsRank = $slotSnapsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSnapweighedGameScript() : ?float
    {
        return $this->snapweighedGameScript;
    }
    /**
     * 
     *
     * @param float|null $snapweighedGameScript
     *
     * @return self
     */
    public function setSnapweighedGameScript(?float $snapweighedGameScript) : self
    {
        $this->snapweighedGameScript = $snapweighedGameScript;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSnapweighedGameScriptRank() : ?int
    {
        return $this->snapweighedGameScriptRank;
    }
    /**
     * 
     *
     * @param int|null $snapweighedGameScriptRank
     *
     * @return self
     */
    public function setSnapweighedGameScriptRank(?int $snapweighedGameScriptRank) : self
    {
        $this->snapweighedGameScriptRank = $snapweighedGameScriptRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTargetPremium() : ?float
    {
        return $this->targetPremium;
    }
    /**
     * 
     *
     * @param float|null $targetPremium
     *
     * @return self
     */
    public function setTargetPremium(?float $targetPremium) : self
    {
        $this->targetPremium = $targetPremium;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTargetPremiumRank() : ?int
    {
        return $this->targetPremiumRank;
    }
    /**
     * 
     *
     * @param int|null $targetPremiumRank
     *
     * @return self
     */
    public function setTargetPremiumRank(?int $targetPremiumRank) : self
    {
        $this->targetPremiumRank = $targetPremiumRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTargetQualityRating() : ?float
    {
        return $this->targetQualityRating;
    }
    /**
     * 
     *
     * @param float|null $targetQualityRating
     *
     * @return self
     */
    public function setTargetQualityRating(?float $targetQualityRating) : self
    {
        $this->targetQualityRating = $targetQualityRating;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTargetQualityRatingRank() : ?int
    {
        return $this->targetQualityRatingRank;
    }
    /**
     * 
     *
     * @param int|null $targetQualityRatingRank
     *
     * @return self
     */
    public function setTargetQualityRatingRank(?int $targetQualityRatingRank) : self
    {
        $this->targetQualityRatingRank = $targetQualityRatingRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTargetAccuracy() : ?float
    {
        return $this->targetAccuracy;
    }
    /**
     * 
     *
     * @param float|null $targetAccuracy
     *
     * @return self
     */
    public function setTargetAccuracy(?float $targetAccuracy) : self
    {
        $this->targetAccuracy = $targetAccuracy;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTargetAccuracyRank() : ?int
    {
        return $this->targetAccuracyRank;
    }
    /**
     * 
     *
     * @param int|null $targetAccuracyRank
     *
     * @return self
     */
    public function setTargetAccuracyRank(?int $targetAccuracyRank) : self
    {
        $this->targetAccuracyRank = $targetAccuracyRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTargetDistance() : ?float
    {
        return $this->targetDistance;
    }
    /**
     * 
     *
     * @param float|null $targetDistance
     *
     * @return self
     */
    public function setTargetDistance(?float $targetDistance) : self
    {
        $this->targetDistance = $targetDistance;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTargetDistancePerGame() : ?float
    {
        return $this->targetDistancePerGame;
    }
    /**
     * 
     *
     * @param float|null $targetDistancePerGame
     *
     * @return self
     */
    public function setTargetDistancePerGame(?float $targetDistancePerGame) : self
    {
        $this->targetDistancePerGame = $targetDistancePerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTargetDistanceRank() : ?int
    {
        return $this->targetDistanceRank;
    }
    /**
     * 
     *
     * @param int|null $targetDistanceRank
     *
     * @return self
     */
    public function setTargetDistanceRank(?int $targetDistanceRank) : self
    {
        $this->targetDistanceRank = $targetDistanceRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTrueCatchRate() : ?float
    {
        return $this->trueCatchRate;
    }
    /**
     * 
     *
     * @param float|null $trueCatchRate
     *
     * @return self
     */
    public function setTrueCatchRate(?float $trueCatchRate) : self
    {
        $this->trueCatchRate = $trueCatchRate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTrueCatchRateRank() : ?int
    {
        return $this->trueCatchRateRank;
    }
    /**
     * 
     *
     * @param int|null $trueCatchRateRank
     *
     * @return self
     */
    public function setTrueCatchRateRank(?int $trueCatchRateRank) : self
    {
        $this->trueCatchRateRank = $trueCatchRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getUncatchableTargets() : ?float
    {
        return $this->uncatchableTargets;
    }
    /**
     * 
     *
     * @param float|null $uncatchableTargets
     *
     * @return self
     */
    public function setUncatchableTargets(?float $uncatchableTargets) : self
    {
        $this->uncatchableTargets = $uncatchableTargets;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getUncatchableTargetsGame() : ?float
    {
        return $this->uncatchableTargetsGame;
    }
    /**
     * 
     *
     * @param float|null $uncatchableTargetsGame
     *
     * @return self
     */
    public function setUncatchableTargetsGame(?float $uncatchableTargetsGame) : self
    {
        $this->uncatchableTargetsGame = $uncatchableTargetsGame;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getYardsPerReceptionRank() : ?int
    {
        return $this->yardsPerReceptionRank;
    }
    /**
     * 
     *
     * @param int|null $yardsPerReceptionRank
     *
     * @return self
     */
    public function setYardsPerReceptionRank(?int $yardsPerReceptionRank) : self
    {
        $this->yardsPerReceptionRank = $yardsPerReceptionRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getYardsPerPassRoute() : ?float
    {
        return $this->yardsPerPassRoute;
    }
    /**
     * 
     *
     * @param float|null $yardsPerPassRoute
     *
     * @return self
     */
    public function setYardsPerPassRoute(?float $yardsPerPassRoute) : self
    {
        $this->yardsPerPassRoute = $yardsPerPassRoute;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getYardsPerPassRouteRank() : ?int
    {
        return $this->yardsPerPassRouteRank;
    }
    /**
     * 
     *
     * @param int|null $yardsPerPassRouteRank
     *
     * @return self
     */
    public function setYardsPerPassRouteRank(?int $yardsPerPassRouteRank) : self
    {
        $this->yardsPerPassRouteRank = $yardsPerPassRouteRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTeamDefensiveSnaps() : ?float
    {
        return $this->teamDefensiveSnaps;
    }
    /**
     * 
     *
     * @param float|null $teamDefensiveSnaps
     *
     * @return self
     */
    public function setTeamDefensiveSnaps(?float $teamDefensiveSnaps) : self
    {
        $this->teamDefensiveSnaps = $teamDefensiveSnaps;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSoloTackles() : ?float
    {
        return $this->soloTackles;
    }
    /**
     * 
     *
     * @param float|null $soloTackles
     *
     * @return self
     */
    public function setSoloTackles(?float $soloTackles) : self
    {
        $this->soloTackles = $soloTackles;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSoloTacklesRank() : ?int
    {
        return $this->soloTacklesRank;
    }
    /**
     * 
     *
     * @param int|null $soloTacklesRank
     *
     * @return self
     */
    public function setSoloTacklesRank(?int $soloTacklesRank) : self
    {
        $this->soloTacklesRank = $soloTacklesRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSoloTacklesPerGame() : ?float
    {
        return $this->soloTacklesPerGame;
    }
    /**
     * 
     *
     * @param float|null $soloTacklesPerGame
     *
     * @return self
     */
    public function setSoloTacklesPerGame(?float $soloTacklesPerGame) : self
    {
        $this->soloTacklesPerGame = $soloTacklesPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAssistedTackles() : ?float
    {
        return $this->assistedTackles;
    }
    /**
     * 
     *
     * @param float|null $assistedTackles
     *
     * @return self
     */
    public function setAssistedTackles(?float $assistedTackles) : self
    {
        $this->assistedTackles = $assistedTackles;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAssistedTacklesRank() : ?int
    {
        return $this->assistedTacklesRank;
    }
    /**
     * 
     *
     * @param int|null $assistedTacklesRank
     *
     * @return self
     */
    public function setAssistedTacklesRank(?int $assistedTacklesRank) : self
    {
        $this->assistedTacklesRank = $assistedTacklesRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAssistedTacklesPerGame() : ?float
    {
        return $this->assistedTacklesPerGame;
    }
    /**
     * 
     *
     * @param float|null $assistedTacklesPerGame
     *
     * @return self
     */
    public function setAssistedTacklesPerGame(?float $assistedTacklesPerGame) : self
    {
        $this->assistedTacklesPerGame = $assistedTacklesPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTotalTackles() : ?float
    {
        return $this->totalTackles;
    }
    /**
     * 
     *
     * @param float|null $totalTackles
     *
     * @return self
     */
    public function setTotalTackles(?float $totalTackles) : self
    {
        $this->totalTackles = $totalTackles;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTotalTacklesRank() : ?int
    {
        return $this->totalTacklesRank;
    }
    /**
     * 
     *
     * @param int|null $totalTacklesRank
     *
     * @return self
     */
    public function setTotalTacklesRank(?int $totalTacklesRank) : self
    {
        $this->totalTacklesRank = $totalTacklesRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTotalTacklesPerGame() : ?float
    {
        return $this->totalTacklesPerGame;
    }
    /**
     * 
     *
     * @param float|null $totalTacklesPerGame
     *
     * @return self
     */
    public function setTotalTacklesPerGame(?float $totalTacklesPerGame) : self
    {
        $this->totalTacklesPerGame = $totalTacklesPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSacks() : ?float
    {
        return $this->sacks;
    }
    /**
     * 
     *
     * @param float|null $sacks
     *
     * @return self
     */
    public function setSacks(?float $sacks) : self
    {
        $this->sacks = $sacks;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSacksRank() : ?int
    {
        return $this->sacksRank;
    }
    /**
     * 
     *
     * @param int|null $sacksRank
     *
     * @return self
     */
    public function setSacksRank(?int $sacksRank) : self
    {
        $this->sacksRank = $sacksRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSackYards() : ?float
    {
        return $this->sackYards;
    }
    /**
     * 
     *
     * @param float|null $sackYards
     *
     * @return self
     */
    public function setSackYards(?float $sackYards) : self
    {
        $this->sackYards = $sackYards;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getForcedFumbles() : ?float
    {
        return $this->forcedFumbles;
    }
    /**
     * 
     *
     * @param float|null $forcedFumbles
     *
     * @return self
     */
    public function setForcedFumbles(?float $forcedFumbles) : self
    {
        $this->forcedFumbles = $forcedFumbles;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getForcedFumblesRank() : ?int
    {
        return $this->forcedFumblesRank;
    }
    /**
     * 
     *
     * @param int|null $forcedFumblesRank
     *
     * @return self
     */
    public function setForcedFumblesRank(?int $forcedFumblesRank) : self
    {
        $this->forcedFumblesRank = $forcedFumblesRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFumbleRecoveries() : ?float
    {
        return $this->fumbleRecoveries;
    }
    /**
     * 
     *
     * @param float|null $fumbleRecoveries
     *
     * @return self
     */
    public function setFumbleRecoveries(?float $fumbleRecoveries) : self
    {
        $this->fumbleRecoveries = $fumbleRecoveries;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFumbleRecoveriesRank() : ?int
    {
        return $this->fumbleRecoveriesRank;
    }
    /**
     * 
     *
     * @param int|null $fumbleRecoveriesRank
     *
     * @return self
     */
    public function setFumbleRecoveriesRank(?int $fumbleRecoveriesRank) : self
    {
        $this->fumbleRecoveriesRank = $fumbleRecoveriesRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getBattedPasses() : ?float
    {
        return $this->battedPasses;
    }
    /**
     * 
     *
     * @param float|null $battedPasses
     *
     * @return self
     */
    public function setBattedPasses(?float $battedPasses) : self
    {
        $this->battedPasses = $battedPasses;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBattedPassesRank() : ?int
    {
        return $this->battedPassesRank;
    }
    /**
     * 
     *
     * @param int|null $battedPassesRank
     *
     * @return self
     */
    public function setBattedPassesRank(?int $battedPassesRank) : self
    {
        $this->battedPassesRank = $battedPassesRank;
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
     * @return int|null
     */
    public function getTacklesForLossRank() : ?int
    {
        return $this->tacklesForLossRank;
    }
    /**
     * 
     *
     * @param int|null $tacklesForLossRank
     *
     * @return self
     */
    public function setTacklesForLossRank(?int $tacklesForLossRank) : self
    {
        $this->tacklesForLossRank = $tacklesForLossRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRunStuffs() : ?float
    {
        return $this->runStuffs;
    }
    /**
     * 
     *
     * @param float|null $runStuffs
     *
     * @return self
     */
    public function setRunStuffs(?float $runStuffs) : self
    {
        $this->runStuffs = $runStuffs;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRunStuffsRank() : ?int
    {
        return $this->runStuffsRank;
    }
    /**
     * 
     *
     * @param int|null $runStuffsRank
     *
     * @return self
     */
    public function setRunStuffsRank(?int $runStuffsRank) : self
    {
        $this->runStuffsRank = $runStuffsRank;
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
     * @return int|null
     */
    public function getPassBreakupsRank() : ?int
    {
        return $this->passBreakupsRank;
    }
    /**
     * 
     *
     * @param int|null $passBreakupsRank
     *
     * @return self
     */
    public function setPassBreakupsRank(?int $passBreakupsRank) : self
    {
        $this->passBreakupsRank = $passBreakupsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPassBreakupsPerGame() : ?float
    {
        return $this->passBreakupsPerGame;
    }
    /**
     * 
     *
     * @param float|null $passBreakupsPerGame
     *
     * @return self
     */
    public function setPassBreakupsPerGame(?float $passBreakupsPerGame) : self
    {
        $this->passBreakupsPerGame = $passBreakupsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPassBreakupsPerGameRank() : ?int
    {
        return $this->passBreakupsPerGameRank;
    }
    /**
     * 
     *
     * @param int|null $passBreakupsPerGameRank
     *
     * @return self
     */
    public function setPassBreakupsPerGameRank(?int $passBreakupsPerGameRank) : self
    {
        $this->passBreakupsPerGameRank = $passBreakupsPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPassBreakupsPerTarget() : ?float
    {
        return $this->passBreakupsPerTarget;
    }
    /**
     * 
     *
     * @param float|null $passBreakupsPerTarget
     *
     * @return self
     */
    public function setPassBreakupsPerTarget(?float $passBreakupsPerTarget) : self
    {
        $this->passBreakupsPerTarget = $passBreakupsPerTarget;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPassBreakupsPerTargetRank() : ?int
    {
        return $this->passBreakupsPerTargetRank;
    }
    /**
     * 
     *
     * @param int|null $passBreakupsPerTargetRank
     *
     * @return self
     */
    public function setPassBreakupsPerTargetRank(?int $passBreakupsPerTargetRank) : self
    {
        $this->passBreakupsPerTargetRank = $passBreakupsPerTargetRank;
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
     * @return int|null
     */
    public function getInterceptionsRank() : ?int
    {
        return $this->interceptionsRank;
    }
    /**
     * 
     *
     * @param int|null $interceptionsRank
     *
     * @return self
     */
    public function setInterceptionsRank(?int $interceptionsRank) : self
    {
        $this->interceptionsRank = $interceptionsRank;
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
     * @return int|null
     */
    public function getTargetsAllowedRank() : ?int
    {
        return $this->targetsAllowedRank;
    }
    /**
     * 
     *
     * @param int|null $targetsAllowedRank
     *
     * @return self
     */
    public function setTargetsAllowedRank(?int $targetsAllowedRank) : self
    {
        $this->targetsAllowedRank = $targetsAllowedRank;
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
     * @return int|null
     */
    public function getReceptionsAllowedRank() : ?int
    {
        return $this->receptionsAllowedRank;
    }
    /**
     * 
     *
     * @param int|null $receptionsAllowedRank
     *
     * @return self
     */
    public function setReceptionsAllowedRank(?int $receptionsAllowedRank) : self
    {
        $this->receptionsAllowedRank = $receptionsAllowedRank;
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
     * @return int|null
     */
    public function getYardsAllowedRank() : ?int
    {
        return $this->yardsAllowedRank;
    }
    /**
     * 
     *
     * @param int|null $yardsAllowedRank
     *
     * @return self
     */
    public function setYardsAllowedRank(?int $yardsAllowedRank) : self
    {
        $this->yardsAllowedRank = $yardsAllowedRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getYardsAllowedPerGame() : ?float
    {
        return $this->yardsAllowedPerGame;
    }
    /**
     * 
     *
     * @param float|null $yardsAllowedPerGame
     *
     * @return self
     */
    public function setYardsAllowedPerGame(?float $yardsAllowedPerGame) : self
    {
        $this->yardsAllowedPerGame = $yardsAllowedPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getYardsAllowedPerGameRank() : ?int
    {
        return $this->yardsAllowedPerGameRank;
    }
    /**
     * 
     *
     * @param int|null $yardsAllowedPerGameRank
     *
     * @return self
     */
    public function setYardsAllowedPerGameRank(?int $yardsAllowedPerGameRank) : self
    {
        $this->yardsAllowedPerGameRank = $yardsAllowedPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getYardsPerReceptionAllowed() : ?float
    {
        return $this->yardsPerReceptionAllowed;
    }
    /**
     * 
     *
     * @param float|null $yardsPerReceptionAllowed
     *
     * @return self
     */
    public function setYardsPerReceptionAllowed(?float $yardsPerReceptionAllowed) : self
    {
        $this->yardsPerReceptionAllowed = $yardsPerReceptionAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getYardsPerReceptionAllowedRank() : ?int
    {
        return $this->yardsPerReceptionAllowedRank;
    }
    /**
     * 
     *
     * @param int|null $yardsPerReceptionAllowedRank
     *
     * @return self
     */
    public function setYardsPerReceptionAllowedRank(?int $yardsPerReceptionAllowedRank) : self
    {
        $this->yardsPerReceptionAllowedRank = $yardsPerReceptionAllowedRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getCatchRateAllowed() : ?float
    {
        return $this->catchRateAllowed;
    }
    /**
     * 
     *
     * @param float|null $catchRateAllowed
     *
     * @return self
     */
    public function setCatchRateAllowed(?float $catchRateAllowed) : self
    {
        $this->catchRateAllowed = $catchRateAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCatchRateAllowedRank() : ?int
    {
        return $this->catchRateAllowedRank;
    }
    /**
     * 
     *
     * @param int|null $catchRateAllowedRank
     *
     * @return self
     */
    public function setCatchRateAllowedRank(?int $catchRateAllowedRank) : self
    {
        $this->catchRateAllowedRank = $catchRateAllowedRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPasserRatingAllowed() : ?float
    {
        return $this->passerRatingAllowed;
    }
    /**
     * 
     *
     * @param float|null $passerRatingAllowed
     *
     * @return self
     */
    public function setPasserRatingAllowed(?float $passerRatingAllowed) : self
    {
        $this->passerRatingAllowed = $passerRatingAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPasserRatingAllowedRank() : ?int
    {
        return $this->passerRatingAllowedRank;
    }
    /**
     * 
     *
     * @param int|null $passerRatingAllowedRank
     *
     * @return self
     */
    public function setPasserRatingAllowedRank(?int $passerRatingAllowedRank) : self
    {
        $this->passerRatingAllowedRank = $passerRatingAllowedRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTouchdownsAllowed() : ?float
    {
        return $this->touchdownsAllowed;
    }
    /**
     * 
     *
     * @param float|null $touchdownsAllowed
     *
     * @return self
     */
    public function setTouchdownsAllowed(?float $touchdownsAllowed) : self
    {
        $this->touchdownsAllowed = $touchdownsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTouchdownsAllowedRank() : ?int
    {
        return $this->touchdownsAllowedRank;
    }
    /**
     * 
     *
     * @param int|null $touchdownsAllowedRank
     *
     * @return self
     */
    public function setTouchdownsAllowedRank(?int $touchdownsAllowedRank) : self
    {
        $this->touchdownsAllowedRank = $touchdownsAllowedRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getInterceptionsPerTarget() : ?float
    {
        return $this->interceptionsPerTarget;
    }
    /**
     * 
     *
     * @param float|null $interceptionsPerTarget
     *
     * @return self
     */
    public function setInterceptionsPerTarget(?float $interceptionsPerTarget) : self
    {
        $this->interceptionsPerTarget = $interceptionsPerTarget;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getInterceptionsPerTargetRank() : ?int
    {
        return $this->interceptionsPerTargetRank;
    }
    /**
     * 
     *
     * @param int|null $interceptionsPerTargetRank
     *
     * @return self
     */
    public function setInterceptionsPerTargetRank(?int $interceptionsPerTargetRank) : self
    {
        $this->interceptionsPerTargetRank = $interceptionsPerTargetRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getCoverageRating() : ?float
    {
        return $this->coverageRating;
    }
    /**
     * 
     *
     * @param float|null $coverageRating
     *
     * @return self
     */
    public function setCoverageRating(?float $coverageRating) : self
    {
        $this->coverageRating = $coverageRating;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCoverageRatingRank() : ?int
    {
        return $this->coverageRatingRank;
    }
    /**
     * 
     *
     * @param int|null $coverageRatingRank
     *
     * @return self
     */
    public function setCoverageRatingRank(?int $coverageRatingRank) : self
    {
        $this->coverageRatingRank = $coverageRatingRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRunPlayStops() : ?float
    {
        return $this->runPlayStops;
    }
    /**
     * 
     *
     * @param float|null $runPlayStops
     *
     * @return self
     */
    public function setRunPlayStops(?float $runPlayStops) : self
    {
        $this->runPlayStops = $runPlayStops;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRunPlayStopsRank() : ?int
    {
        return $this->runPlayStopsRank;
    }
    /**
     * 
     *
     * @param int|null $runPlayStopsRank
     *
     * @return self
     */
    public function setRunPlayStopsRank(?int $runPlayStopsRank) : self
    {
        $this->runPlayStopsRank = $runPlayStopsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTargetsAllowedPerGame() : ?float
    {
        return $this->targetsAllowedPerGame;
    }
    /**
     * 
     *
     * @param float|null $targetsAllowedPerGame
     *
     * @return self
     */
    public function setTargetsAllowedPerGame(?float $targetsAllowedPerGame) : self
    {
        $this->targetsAllowedPerGame = $targetsAllowedPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTargetsAllowedPerGameRank() : ?int
    {
        return $this->targetsAllowedPerGameRank;
    }
    /**
     * 
     *
     * @param int|null $targetsAllowedPerGameRank
     *
     * @return self
     */
    public function setTargetsAllowedPerGameRank(?int $targetsAllowedPerGameRank) : self
    {
        $this->targetsAllowedPerGameRank = $targetsAllowedPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getReceptionsAllowedPerGame() : ?float
    {
        return $this->receptionsAllowedPerGame;
    }
    /**
     * 
     *
     * @param float|null $receptionsAllowedPerGame
     *
     * @return self
     */
    public function setReceptionsAllowedPerGame(?float $receptionsAllowedPerGame) : self
    {
        $this->receptionsAllowedPerGame = $receptionsAllowedPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getReceptionsAllowedPerGameRank() : ?int
    {
        return $this->receptionsAllowedPerGameRank;
    }
    /**
     * 
     *
     * @param int|null $receptionsAllowedPerGameRank
     *
     * @return self
     */
    public function setReceptionsAllowedPerGameRank(?int $receptionsAllowedPerGameRank) : self
    {
        $this->receptionsAllowedPerGameRank = $receptionsAllowedPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTargetRate() : ?float
    {
        return $this->targetRate;
    }
    /**
     * 
     *
     * @param float|null $targetRate
     *
     * @return self
     */
    public function setTargetRate(?float $targetRate) : self
    {
        $this->targetRate = $targetRate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTargetRateRank() : ?int
    {
        return $this->targetRateRank;
    }
    /**
     * 
     *
     * @param int|null $targetRateRank
     *
     * @return self
     */
    public function setTargetRateRank(?int $targetRateRank) : self
    {
        $this->targetRateRank = $targetRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBurnRateRank() : ?int
    {
        return $this->burnRateRank;
    }
    /**
     * 
     *
     * @param int|null $burnRateRank
     *
     * @return self
     */
    public function setBurnRateRank(?int $burnRateRank) : self
    {
        $this->burnRateRank = $burnRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAverageCushion() : ?float
    {
        return $this->averageCushion;
    }
    /**
     * 
     *
     * @param float|null $averageCushion
     *
     * @return self
     */
    public function setAverageCushion(?float $averageCushion) : self
    {
        $this->averageCushion = $averageCushion;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAverageCushionRank() : ?int
    {
        return $this->averageCushionRank;
    }
    /**
     * 
     *
     * @param int|null $averageCushionRank
     *
     * @return self
     */
    public function setAverageCushionRank(?int $averageCushionRank) : self
    {
        $this->averageCushionRank = $averageCushionRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getYardsPerTargetAllowed() : ?float
    {
        return $this->yardsPerTargetAllowed;
    }
    /**
     * 
     *
     * @param float|null $yardsPerTargetAllowed
     *
     * @return self
     */
    public function setYardsPerTargetAllowed(?float $yardsPerTargetAllowed) : self
    {
        $this->yardsPerTargetAllowed = $yardsPerTargetAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getYardsPerTargetAllowedRank() : ?int
    {
        return $this->yardsPerTargetAllowedRank;
    }
    /**
     * 
     *
     * @param int|null $yardsPerTargetAllowedRank
     *
     * @return self
     */
    public function setYardsPerTargetAllowedRank(?int $yardsPerTargetAllowedRank) : self
    {
        $this->yardsPerTargetAllowedRank = $yardsPerTargetAllowedRank;
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
     * @return int|null
     */
    public function getRoutesDefendedRank() : ?int
    {
        return $this->routesDefendedRank;
    }
    /**
     * 
     *
     * @param int|null $routesDefendedRank
     *
     * @return self
     */
    public function setRoutesDefendedRank(?int $routesDefendedRank) : self
    {
        $this->routesDefendedRank = $routesDefendedRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRoutesDefendedPerGame() : ?float
    {
        return $this->routesDefendedPerGame;
    }
    /**
     * 
     *
     * @param float|null $routesDefendedPerGame
     *
     * @return self
     */
    public function setRoutesDefendedPerGame(?float $routesDefendedPerGame) : self
    {
        $this->routesDefendedPerGame = $routesDefendedPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRoutesDefendedPerGameRank() : ?int
    {
        return $this->routesDefendedPerGameRank;
    }
    /**
     * 
     *
     * @param int|null $routesDefendedPerGameRank
     *
     * @return self
     */
    public function setRoutesDefendedPerGameRank(?int $routesDefendedPerGameRank) : self
    {
        $this->routesDefendedPerGameRank = $routesDefendedPerGameRank;
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
     * @return int|null
     */
    public function getFantasyPointsPerAttemptRank() : ?int
    {
        return $this->fantasyPointsPerAttemptRank;
    }
    /**
     * 
     *
     * @param int|null $fantasyPointsPerAttemptRank
     *
     * @return self
     */
    public function setFantasyPointsPerAttemptRank(?int $fantasyPointsPerAttemptRank) : self
    {
        $this->fantasyPointsPerAttemptRank = $fantasyPointsPerAttemptRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFantasyPointsPerDropBack() : ?float
    {
        return $this->fantasyPointsPerDropBack;
    }
    /**
     * 
     *
     * @param float|null $fantasyPointsPerDropBack
     *
     * @return self
     */
    public function setFantasyPointsPerDropBack(?float $fantasyPointsPerDropBack) : self
    {
        $this->fantasyPointsPerDropBack = $fantasyPointsPerDropBack;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFantasyPointsPerDropBackRank() : ?int
    {
        return $this->fantasyPointsPerDropBackRank;
    }
    /**
     * 
     *
     * @param int|null $fantasyPointsPerDropBackRank
     *
     * @return self
     */
    public function setFantasyPointsPerDropBackRank(?int $fantasyPointsPerDropBackRank) : self
    {
        $this->fantasyPointsPerDropBackRank = $fantasyPointsPerDropBackRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFantasyPointsPerGame() : ?float
    {
        return $this->fantasyPointsPerGame;
    }
    /**
     * 
     *
     * @param float|null $fantasyPointsPerGame
     *
     * @return self
     */
    public function setFantasyPointsPerGame(?float $fantasyPointsPerGame) : self
    {
        $this->fantasyPointsPerGame = $fantasyPointsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFantasyPointsPerGameDifferential() : ?float
    {
        return $this->fantasyPointsPerGameDifferential;
    }
    /**
     * 
     *
     * @param float|null $fantasyPointsPerGameDifferential
     *
     * @return self
     */
    public function setFantasyPointsPerGameDifferential(?float $fantasyPointsPerGameDifferential) : self
    {
        $this->fantasyPointsPerGameDifferential = $fantasyPointsPerGameDifferential;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFantasyPointsPerGameRank() : ?int
    {
        return $this->fantasyPointsPerGameRank;
    }
    /**
     * 
     *
     * @param int|null $fantasyPointsPerGameRank
     *
     * @return self
     */
    public function setFantasyPointsPerGameRank(?int $fantasyPointsPerGameRank) : self
    {
        $this->fantasyPointsPerGameRank = $fantasyPointsPerGameRank;
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
     * @return int|null
     */
    public function getFantasyPointsPerOpportunityRank() : ?int
    {
        return $this->fantasyPointsPerOpportunityRank;
    }
    /**
     * 
     *
     * @param int|null $fantasyPointsPerOpportunityRank
     *
     * @return self
     */
    public function setFantasyPointsPerOpportunityRank(?int $fantasyPointsPerOpportunityRank) : self
    {
        $this->fantasyPointsPerOpportunityRank = $fantasyPointsPerOpportunityRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFantasyPointsPerSnap() : ?float
    {
        return $this->fantasyPointsPerSnap;
    }
    /**
     * 
     *
     * @param float|null $fantasyPointsPerSnap
     *
     * @return self
     */
    public function setFantasyPointsPerSnap(?float $fantasyPointsPerSnap) : self
    {
        $this->fantasyPointsPerSnap = $fantasyPointsPerSnap;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFantasyPointsPerSnapRank() : ?int
    {
        return $this->fantasyPointsPerSnapRank;
    }
    /**
     * 
     *
     * @param int|null $fantasyPointsPerSnapRank
     *
     * @return self
     */
    public function setFantasyPointsPerSnapRank(?int $fantasyPointsPerSnapRank) : self
    {
        $this->fantasyPointsPerSnapRank = $fantasyPointsPerSnapRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFantasyPointsPerPassRoute() : ?float
    {
        return $this->fantasyPointsPerPassRoute;
    }
    /**
     * 
     *
     * @param float|null $fantasyPointsPerPassRoute
     *
     * @return self
     */
    public function setFantasyPointsPerPassRoute(?float $fantasyPointsPerPassRoute) : self
    {
        $this->fantasyPointsPerPassRoute = $fantasyPointsPerPassRoute;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFantasyPointsPerPassRouteRank() : ?int
    {
        return $this->fantasyPointsPerPassRouteRank;
    }
    /**
     * 
     *
     * @param int|null $fantasyPointsPerPassRouteRank
     *
     * @return self
     */
    public function setFantasyPointsPerPassRouteRank(?int $fantasyPointsPerPassRouteRank) : self
    {
        $this->fantasyPointsPerPassRouteRank = $fantasyPointsPerPassRouteRank;
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
     * @return int|null
     */
    public function getFantasyPointsPerTargetRank() : ?int
    {
        return $this->fantasyPointsPerTargetRank;
    }
    /**
     * 
     *
     * @param int|null $fantasyPointsPerTargetRank
     *
     * @return self
     */
    public function setFantasyPointsPerTargetRank(?int $fantasyPointsPerTargetRank) : self
    {
        $this->fantasyPointsPerTargetRank = $fantasyPointsPerTargetRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSlotFantasyPoints() : ?float
    {
        return $this->slotFantasyPoints;
    }
    /**
     * 
     *
     * @param float|null $slotFantasyPoints
     *
     * @return self
     */
    public function setSlotFantasyPoints(?float $slotFantasyPoints) : self
    {
        $this->slotFantasyPoints = $slotFantasyPoints;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSlotFantasyPointsRank() : ?int
    {
        return $this->slotFantasyPointsRank;
    }
    /**
     * 
     *
     * @param int|null $slotFantasyPointsRank
     *
     * @return self
     */
    public function setSlotFantasyPointsRank(?int $slotFantasyPointsRank) : self
    {
        $this->slotFantasyPointsRank = $slotFantasyPointsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSlotFantasyPointsPerGame() : ?float
    {
        return $this->slotFantasyPointsPerGame;
    }
    /**
     * 
     *
     * @param float|null $slotFantasyPointsPerGame
     *
     * @return self
     */
    public function setSlotFantasyPointsPerGame(?float $slotFantasyPointsPerGame) : self
    {
        $this->slotFantasyPointsPerGame = $slotFantasyPointsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSlotFantasyPointsPerGameRank() : ?int
    {
        return $this->slotFantasyPointsPerGameRank;
    }
    /**
     * 
     *
     * @param int|null $slotFantasyPointsPerGameRank
     *
     * @return self
     */
    public function setSlotFantasyPointsPerGameRank(?int $slotFantasyPointsPerGameRank) : self
    {
        $this->slotFantasyPointsPerGameRank = $slotFantasyPointsPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSlotFantasyPointsPerTarget() : ?float
    {
        return $this->slotFantasyPointsPerTarget;
    }
    /**
     * 
     *
     * @param float|null $slotFantasyPointsPerTarget
     *
     * @return self
     */
    public function setSlotFantasyPointsPerTarget(?float $slotFantasyPointsPerTarget) : self
    {
        $this->slotFantasyPointsPerTarget = $slotFantasyPointsPerTarget;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSlotFantasyPointsPerTargetRank() : ?int
    {
        return $this->slotFantasyPointsPerTargetRank;
    }
    /**
     * 
     *
     * @param int|null $slotFantasyPointsPerTargetRank
     *
     * @return self
     */
    public function setSlotFantasyPointsPerTargetRank(?int $slotFantasyPointsPerTargetRank) : self
    {
        $this->slotFantasyPointsPerTargetRank = $slotFantasyPointsPerTargetRank;
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
    public function getFantasyPointsAllowedPerTarget() : ?float
    {
        return $this->fantasyPointsAllowedPerTarget;
    }
    /**
     * 
     *
     * @param float|null $fantasyPointsAllowedPerTarget
     *
     * @return self
     */
    public function setFantasyPointsAllowedPerTarget(?float $fantasyPointsAllowedPerTarget) : self
    {
        $this->fantasyPointsAllowedPerTarget = $fantasyPointsAllowedPerTarget;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFantasyPointsAllowedPerTargetRank() : ?int
    {
        return $this->fantasyPointsAllowedPerTargetRank;
    }
    /**
     * 
     *
     * @param int|null $fantasyPointsAllowedPerTargetRank
     *
     * @return self
     */
    public function setFantasyPointsAllowedPerTargetRank(?int $fantasyPointsAllowedPerTargetRank) : self
    {
        $this->fantasyPointsAllowedPerTargetRank = $fantasyPointsAllowedPerTargetRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFantasyPointsAllowedPerGame() : ?float
    {
        return $this->fantasyPointsAllowedPerGame;
    }
    /**
     * 
     *
     * @param float|null $fantasyPointsAllowedPerGame
     *
     * @return self
     */
    public function setFantasyPointsAllowedPerGame(?float $fantasyPointsAllowedPerGame) : self
    {
        $this->fantasyPointsAllowedPerGame = $fantasyPointsAllowedPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFantasyPointsAllowedPerGameRank() : ?int
    {
        return $this->fantasyPointsAllowedPerGameRank;
    }
    /**
     * 
     *
     * @param int|null $fantasyPointsAllowedPerGameRank
     *
     * @return self
     */
    public function setFantasyPointsAllowedPerGameRank(?int $fantasyPointsAllowedPerGameRank) : self
    {
        $this->fantasyPointsAllowedPerGameRank = $fantasyPointsAllowedPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFantasyPointsAllowedPerSnap() : ?float
    {
        return $this->fantasyPointsAllowedPerSnap;
    }
    /**
     * 
     *
     * @param float|null $fantasyPointsAllowedPerSnap
     *
     * @return self
     */
    public function setFantasyPointsAllowedPerSnap(?float $fantasyPointsAllowedPerSnap) : self
    {
        $this->fantasyPointsAllowedPerSnap = $fantasyPointsAllowedPerSnap;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFantasyPointsAllowedPerSnapRank() : ?int
    {
        return $this->fantasyPointsAllowedPerSnapRank;
    }
    /**
     * 
     *
     * @param int|null $fantasyPointsAllowedPerSnapRank
     *
     * @return self
     */
    public function setFantasyPointsAllowedPerSnapRank(?int $fantasyPointsAllowedPerSnapRank) : self
    {
        $this->fantasyPointsAllowedPerSnapRank = $fantasyPointsAllowedPerSnapRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFantasyPointsAllowedPerCoverSnap() : ?float
    {
        return $this->fantasyPointsAllowedPerCoverSnap;
    }
    /**
     * 
     *
     * @param float|null $fantasyPointsAllowedPerCoverSnap
     *
     * @return self
     */
    public function setFantasyPointsAllowedPerCoverSnap(?float $fantasyPointsAllowedPerCoverSnap) : self
    {
        $this->fantasyPointsAllowedPerCoverSnap = $fantasyPointsAllowedPerCoverSnap;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFantasyPointsAllowedPerCoverSnapRank() : ?int
    {
        return $this->fantasyPointsAllowedPerCoverSnapRank;
    }
    /**
     * 
     *
     * @param int|null $fantasyPointsAllowedPerCoverSnapRank
     *
     * @return self
     */
    public function setFantasyPointsAllowedPerCoverSnapRank(?int $fantasyPointsAllowedPerCoverSnapRank) : self
    {
        $this->fantasyPointsAllowedPerCoverSnapRank = $fantasyPointsAllowedPerCoverSnapRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getExpectedFantasyPoints() : ?float
    {
        return $this->expectedFantasyPoints;
    }
    /**
     * 
     *
     * @param float|null $expectedFantasyPoints
     *
     * @return self
     */
    public function setExpectedFantasyPoints(?float $expectedFantasyPoints) : self
    {
        $this->expectedFantasyPoints = $expectedFantasyPoints;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getExpectedFantasyPointsRank() : ?int
    {
        return $this->expectedFantasyPointsRank;
    }
    /**
     * 
     *
     * @param int|null $expectedFantasyPointsRank
     *
     * @return self
     */
    public function setExpectedFantasyPointsRank(?int $expectedFantasyPointsRank) : self
    {
        $this->expectedFantasyPointsRank = $expectedFantasyPointsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getExpectedFantasyPointsPerGame() : ?float
    {
        return $this->expectedFantasyPointsPerGame;
    }
    /**
     * 
     *
     * @param float|null $expectedFantasyPointsPerGame
     *
     * @return self
     */
    public function setExpectedFantasyPointsPerGame(?float $expectedFantasyPointsPerGame) : self
    {
        $this->expectedFantasyPointsPerGame = $expectedFantasyPointsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getExpectedFantasyPointsPerGameRank() : ?int
    {
        return $this->expectedFantasyPointsPerGameRank;
    }
    /**
     * 
     *
     * @param int|null $expectedFantasyPointsPerGameRank
     *
     * @return self
     */
    public function setExpectedFantasyPointsPerGameRank(?int $expectedFantasyPointsPerGameRank) : self
    {
        $this->expectedFantasyPointsPerGameRank = $expectedFantasyPointsPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getNormalizedFantasyPointsPerGame() : ?float
    {
        return $this->normalizedFantasyPointsPerGame;
    }
    /**
     * 
     *
     * @param float|null $normalizedFantasyPointsPerGame
     *
     * @return self
     */
    public function setNormalizedFantasyPointsPerGame(?float $normalizedFantasyPointsPerGame) : self
    {
        $this->normalizedFantasyPointsPerGame = $normalizedFantasyPointsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getNormalizedFantasyPointsPerGameRank() : ?int
    {
        return $this->normalizedFantasyPointsPerGameRank;
    }
    /**
     * 
     *
     * @param int|null $normalizedFantasyPointsPerGameRank
     *
     * @return self
     */
    public function setNormalizedFantasyPointsPerGameRank(?int $normalizedFantasyPointsPerGameRank) : self
    {
        $this->normalizedFantasyPointsPerGameRank = $normalizedFantasyPointsPerGameRank;
        return $this;
    }
}