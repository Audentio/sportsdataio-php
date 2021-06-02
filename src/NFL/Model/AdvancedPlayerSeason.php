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
    protected $games;
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
     * @var int
     */
    protected $snapShareRank;
    /**
     * 
     *
     * @var float
     */
    protected $slotRate;
    /**
     * 
     *
     * @var int
     */
    protected $slotRateRank;
    /**
     * 
     *
     * @var float
     */
    protected $targetSeparation;
    /**
     * 
     *
     * @var int
     */
    protected $targetSeparationRank;
    /**
     * 
     *
     * @var float
     */
    protected $burnRate;
    /**
     * 
     *
     * @var float
     */
    protected $airYards;
    /**
     * 
     *
     * @var float
     */
    protected $airYardsPerGame;
    /**
     * 
     *
     * @var int
     */
    protected $airYardsRank;
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
    protected $carriesInside10;
    /**
     * 
     *
     * @var float
     */
    protected $carriesInside10PerGame;
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
    protected $carriesInside5PerGame;
    /**
     * 
     *
     * @var float
     */
    protected $carriesPerGame;
    /**
     * 
     *
     * @var int
     */
    protected $carriesPerGameRank;
    /**
     * 
     *
     * @var int
     */
    protected $carriesRank;
    /**
     * 
     *
     * @var float
     */
    protected $gameScript;
    /**
     * 
     *
     * @var int
     */
    protected $gameScriptRank;
    /**
     * 
     *
     * @var float
     */
    protected $goalLineCarries;
    /**
     * 
     *
     * @var float
     */
    protected $goalLineCarriesPerGame;
    /**
     * 
     *
     * @var int
     */
    protected $goalLineCarriesPerGameRank;
    /**
     * 
     *
     * @var int
     */
    protected $goalLineCarriesRank;
    /**
     * 
     *
     * @var float
     */
    protected $productionPremium;
    /**
     * 
     *
     * @var int
     */
    protected $productionPremiumRank;
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
    protected $redZoneCarriesPerGame;
    /**
     * 
     *
     * @var int
     */
    protected $redZoneCarriesPerGameRank;
    /**
     * 
     *
     * @var int
     */
    protected $redZoneCarriesRank;
    /**
     * 
     *
     * @var float
     */
    protected $rushingTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $rushingTouchdownsRank;
    /**
     * 
     *
     * @var float
     */
    protected $rushingYards;
    /**
     * 
     *
     * @var int
     */
    protected $rushingYardsRank;
    /**
     * 
     *
     * @var float
     */
    protected $rushYardsPerGame;
    /**
     * 
     *
     * @var float
     */
    protected $redZoneSnaps;
    /**
     * 
     *
     * @var float
     */
    protected $runSnaps;
    /**
     * 
     *
     * @var float
     */
    protected $passSnaps;
    /**
     * 
     *
     * @var float
     */
    protected $snapweightedGameScript;
    /**
     * 
     *
     * @var int
     */
    protected $snapweightedGameScriptRank;
    /**
     * 
     *
     * @var float
     */
    protected $teamPassPlays;
    /**
     * 
     *
     * @var int
     */
    protected $teamPassPlaysRank;
    /**
     * 
     *
     * @var float
     */
    protected $touchdownRate;
    /**
     * 
     *
     * @var float
     */
    protected $weeklyVolatility;
    /**
     * 
     *
     * @var int
     */
    protected $weeklyVolatilityRank;
    /**
     * 
     *
     * @var float
     */
    protected $vOS;
    /**
     * 
     *
     * @var int
     */
    protected $vOSRank;
    /**
     * 
     *
     * @var float
     */
    protected $yardsPerTarget;
    /**
     * 
     *
     * @var int
     */
    protected $yardsPerTargetRank;
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
    protected $yardsAfterCatch;
    /**
     * 
     *
     * @var float
     */
    protected $yardsAfterCatchPerGame;
    /**
     * 
     *
     * @var float
     */
    protected $yardsAfterCatchPerReception;
    /**
     * 
     *
     * @var float
     */
    protected $yardsAfterCatchPerTarget;
    /**
     * 
     *
     * @var int
     */
    protected $yardsAfterCatchRank;
    /**
     * 
     *
     * @var float
     */
    protected $totalTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $totalTouchdownsRank;
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
    protected $totalYards;
    /**
     * 
     *
     * @var float
     */
    protected $totalYardsPerGame;
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
    protected $targetShare;
    /**
     * 
     *
     * @var int
     */
    protected $targetShareRank;
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
    protected $targetsInside10PerGame;
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
    protected $targetsInside5PerGame;
    /**
     * 
     *
     * @var float
     */
    protected $targetsPerGame;
    /**
     * 
     *
     * @var int
     */
    protected $targetsPerGameRank;
    /**
     * 
     *
     * @var int
     */
    protected $targetsRank;
    /**
     * 
     *
     * @var float
     */
    protected $slotSnaps;
    /**
     * 
     *
     * @var float
     */
    protected $slotYPR;
    /**
     * 
     *
     * @var int
     */
    protected $slotYPRRank;
    /**
     * 
     *
     * @var float
     */
    protected $slotYPT;
    /**
     * 
     *
     * @var int
     */
    protected $slotYPTRank;
    /**
     * 
     *
     * @var float
     */
    protected $redZoneSnapShare;
    /**
     * 
     *
     * @var int
     */
    protected $redZoneSnapShareRank;
    /**
     * 
     *
     * @var float
     */
    protected $routeParticipation;
    /**
     * 
     *
     * @var int
     */
    protected $routeParticipationRank;
    /**
     * 
     *
     * @var float
     */
    protected $passRoutes;
    /**
     * 
     *
     * @var float
     */
    protected $passRoutesPerGame;
    /**
     * 
     *
     * @var int
     */
    protected $passRoutesPerGameRank;
    /**
     * 
     *
     * @var float
     */
    protected $redZoneReceptions;
    /**
     * 
     *
     * @var int
     */
    protected $redZoneReceptionsRank;
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
    protected $redZoneTargetShare;
    /**
     * 
     *
     * @var int
     */
    protected $redZoneTargetShareRank;
    /**
     * 
     *
     * @var int
     */
    protected $redZoneTargetsRank;
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
    protected $redZoneTouchesPerGame;
    /**
     * 
     *
     * @var float
     */
    protected $qBRatingWhenTargeted;
    /**
     * 
     *
     * @var int
     */
    protected $qBRatingWhenTargetedRank;
    /**
     * 
     *
     * @var float
     */
    protected $receivingTDs;
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
    protected $receivingYardsPerGame;
    /**
     * 
     *
     * @var int
     */
    protected $receivingYardsPerGameRank;
    /**
     * 
     *
     * @var int
     */
    protected $receivingYardsRank;
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
    protected $receptionsPerGame;
    /**
     * 
     *
     * @var int
     */
    protected $receptionsPerGameRank;
    /**
     * 
     *
     * @var int
     */
    protected $receptionsRank;
    /**
     * 
     *
     * @var float
     */
    protected $redZoneCatchRate;
    /**
     * 
     *
     * @var int
     */
    protected $redZoneCatchRateRank;
    /**
     * 
     *
     * @var float
     */
    protected $catchableTargetRate;
    /**
     * 
     *
     * @var int
     */
    protected $catchableTargetRateRank;
    /**
     * 
     *
     * @var float
     */
    protected $catchableTargets;
    /**
     * 
     *
     * @var float
     */
    protected $catchRate;
    /**
     * 
     *
     * @var int
     */
    protected $catchRateRank;
    /**
     * 
     *
     * @var float
     */
    protected $dominatorRating;
    /**
     * 
     *
     * @var int
     */
    protected $dominatorRatingRank;
    /**
     * 
     *
     * @var float
     */
    protected $drops;
    /**
     * 
     *
     * @var float
     */
    protected $dropsPerGame;
    /**
     * 
     *
     * @var int
     */
    protected $dropsPerGameRank;
    /**
     * 
     *
     * @var float
     */
    protected $dropRate;
    /**
     * 
     *
     * @var int
     */
    protected $dropRateRank;
    /**
     * 
     *
     * @var int
     */
    protected $dropsRank;
    /**
     * 
     *
     * @var float
     */
    protected $endzoneTargets;
    /**
     * 
     *
     * @var float
     */
    protected $endzoneTargetShare;
    /**
     * 
     *
     * @var int
     */
    protected $endzoneTargetShareRank;
    /**
     * 
     *
     * @var float
     */
    protected $accuracyRating;
    /**
     * 
     *
     * @var int
     */
    protected $accuracyRatingRank;
    /**
     * 
     *
     * @var float
     */
    protected $adjustedAttempts;
    /**
     * 
     *
     * @var float
     */
    protected $adjustedYardsPerAttempt;
    /**
     * 
     *
     * @var int
     */
    protected $adjustedYardsPerAttemptRank;
    /**
     * 
     *
     * @var float
     */
    protected $airYardsPerAttempt;
    /**
     * 
     *
     * @var int
     */
    protected $airYardsPerAttemptRank;
    /**
     * 
     *
     * @var float
     */
    protected $attemptsInside10;
    /**
     * 
     *
     * @var float
     */
    protected $attemptsInside10PerGame;
    /**
     * 
     *
     * @var float
     */
    protected $attemptsInside5;
    /**
     * 
     *
     * @var float
     */
    protected $attemptsInside5PerGame;
    /**
     * 
     *
     * @var float
     */
    protected $attemptsPerGame;
    /**
     * 
     *
     * @var float
     */
    protected $catchablePasses;
    /**
     * 
     *
     * @var float
     */
    protected $catchablePassesPerGame;
    /**
     * 
     *
     * @var int
     */
    protected $catchablePassesRank;
    /**
     * 
     *
     * @var float
     */
    protected $completionPercentage;
    /**
     * 
     *
     * @var int
     */
    protected $completionPercentageRank;
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
    protected $dangerPlays;
    /**
     * 
     *
     * @var float
     */
    protected $dangerPlaysPerGame;
    /**
     * 
     *
     * @var int
     */
    protected $dangerPlaysRank;
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
    protected $deepBallAttemptsPerGame;
    /**
     * 
     *
     * @var int
     */
    protected $deepBallAttemptsPerGameRank;
    /**
     * 
     *
     * @var int
     */
    protected $deepBallAttemptsRank;
    /**
     * 
     *
     * @var float
     */
    protected $deepBallCompletionPercentage;
    /**
     * 
     *
     * @var int
     */
    protected $deepBallCompletionPercentageRank;
    /**
     * 
     *
     * @var float
     */
    protected $deepBallCompletions;
    /**
     * 
     *
     * @var int
     */
    protected $deepBallCompletionsRank;
    /**
     * 
     *
     * @var float
     */
    protected $droppedPasses;
    /**
     * 
     *
     * @var int
     */
    protected $droppedPassesRank;
    /**
     * 
     *
     * @var float
     */
    protected $droppedPassesPerGame;
    /**
     * 
     *
     * @var float
     */
    protected $dropsPerAttempt;
    /**
     * 
     *
     * @var int
     */
    protected $dropsPerAttemptRank;
    /**
     * 
     *
     * @var float
     */
    protected $dropBacks;
    /**
     * 
     *
     * @var float
     */
    protected $interceptablePasses;
    /**
     * 
     *
     * @var float
     */
    protected $interceptablePassesPerGame;
    /**
     * 
     *
     * @var int
     */
    protected $interceptablePassesRank;
    /**
     * 
     *
     * @var float
     */
    protected $moneyThrows;
    /**
     * 
     *
     * @var float
     */
    protected $moneyThrowsPerGame;
    /**
     * 
     *
     * @var int
     */
    protected $moneyThrowsRank;
    /**
     * 
     *
     * @var float
     */
    protected $passAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $passAttemptsRank;
    /**
     * 
     *
     * @var float
     */
    protected $passAttemptDistance;
    /**
     * 
     *
     * @var int
     */
    protected $passAttemptDistanceRank;
    /**
     * 
     *
     * @var float
     */
    protected $passAttemptDistancePerAttempt;
    /**
     * 
     *
     * @var int
     */
    protected $passAttemptDistancePerAttemptRank;
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
    protected $passingTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $passingTouchdownsRank;
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
     * @var int
     */
    protected $passingYardsPerAttemptRank;
    /**
     * 
     *
     * @var float
     */
    protected $passingYardsPerGame;
    /**
     * 
     *
     * @var int
     */
    protected $passingYardsPerGameRank;
    /**
     * 
     *
     * @var int
     */
    protected $passingYardsRank;
    /**
     * 
     *
     * @var float
     */
    protected $playactionPassAttempts;
    /**
     * 
     *
     * @var float
     */
    protected $playactionPassAttemptsPerGame;
    /**
     * 
     *
     * @var int
     */
    protected $playactionPassAttemptsRank;
    /**
     * 
     *
     * @var float
     */
    protected $playactionPassCompletionPercentage;
    /**
     * 
     *
     * @var int
     */
    protected $playactionPassCompletionPercentageRank;
    /**
     * 
     *
     * @var float
     */
    protected $protectionRate;
    /**
     * 
     *
     * @var int
     */
    protected $protectionRateRank;
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
    protected $redZoneAttemptsPerGame;
    /**
     * 
     *
     * @var int
     */
    protected $redZoneAttemptsRank;
    /**
     * 
     *
     * @var float
     */
    protected $redZoneCompletionPercentage;
    /**
     * 
     *
     * @var int
     */
    protected $redZoneCompletionPercentageRank;
    /**
     * 
     *
     * @var float
     */
    protected $redZoneTDtoINTRatio;
    /**
     * 
     *
     * @var float
     */
    protected $rushingTDs;
    /**
     * 
     *
     * @var int
     */
    protected $rushingYardsPerGameRank;
    /**
     * 
     *
     * @var float
     */
    protected $shotgunCompletionPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $shotgunSnaps;
    /**
     * 
     *
     * @var float
     */
    protected $underCenterCompletionPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $underCenterSnaps;
    /**
     * 
     *
     * @var float
     */
    protected $receiverContestedCatchRate;
    /**
     * 
     *
     * @var int
     */
    protected $receiverContestedCatchRateRank;
    /**
     * 
     *
     * @var float
     */
    protected $receiverTargetSeparation;
    /**
     * 
     *
     * @var int
     */
    protected $receiverTargetSeparationRank;
    /**
     * 
     *
     * @var float
     */
    protected $receiverYardsAfterTheCatch;
    /**
     * 
     *
     * @var int
     */
    protected $receiverYardsAfterTheCatchRank;
    /**
     * 
     *
     * @var float
     */
    protected $receiverYardsAfterTheCatchPerTarget;
    /**
     * 
     *
     * @var float
     */
    protected $supportingCastEfficiency;
    /**
     * 
     *
     * @var int
     */
    protected $supportingCastEfficiencyRank;
    /**
     * 
     *
     * @var float
     */
    protected $totalQBR;
    /**
     * 
     *
     * @var int
     */
    protected $totalQBRRank;
    /**
     * 
     *
     * @var float
     */
    protected $trueCompletionPercentage;
    /**
     * 
     *
     * @var int
     */
    protected $trueCompletionPercentageRank;
    /**
     * 
     *
     * @var float
     */
    protected $truePasserRating;
    /**
     * 
     *
     * @var int
     */
    protected $truePasserRatingRank;
    /**
     * 
     *
     * @var float
     */
    protected $uncatchablePasses;
    /**
     * 
     *
     * @var float
     */
    protected $uncatchablePassesPerGame;
    /**
     * 
     *
     * @var int
     */
    protected $uncatchablePassesRank;
    /**
     * 
     *
     * @var float
     */
    protected $underPressureAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $underPressureAttemptsRank;
    /**
     * 
     *
     * @var float
     */
    protected $underPressureAttemptsPerGame;
    /**
     * 
     *
     * @var float
     */
    protected $pressuredCompletionPercentage;
    /**
     * 
     *
     * @var int
     */
    protected $pressuredCompletionPercentageRank;
    /**
     * 
     *
     * @var float
     */
    protected $averageDefendersInTheBox;
    /**
     * 
     *
     * @var int
     */
    protected $averageDefendersInTheBoxRank;
    /**
     * 
     *
     * @var float
     */
    protected $baseFrontCarryRate;
    /**
     * 
     *
     * @var int
     */
    protected $baseFrontCarryRateRank;
    /**
     * 
     *
     * @var float
     */
    protected $baseFrontYardsPerCarry;
    /**
     * 
     *
     * @var int
     */
    protected $baseFrontYardsPerCarryRank;
    /**
     * 
     *
     * @var float
     */
    protected $breakawayRunRate;
    /**
     * 
     *
     * @var int
     */
    protected $breakawayRunRateRank;
    /**
     * 
     *
     * @var float
     */
    protected $breakawayRuns;
    /**
     * 
     *
     * @var float
     */
    protected $breakawayRunsPerGame;
    /**
     * 
     *
     * @var int
     */
    protected $breakawayRunsPerGameRank;
    /**
     * 
     *
     * @var int
     */
    protected $breakawayRunsRank;
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
    protected $evadedTacklesPerGame;
    /**
     * 
     *
     * @var int
     */
    protected $evadedTacklesPerGameRank;
    /**
     * 
     *
     * @var int
     */
    protected $evadedTacklesRank;
    /**
     * 
     *
     * @var float
     */
    protected $jukeRate;
    /**
     * 
     *
     * @var int
     */
    protected $jukeRateRank;
    /**
     * 
     *
     * @var float
     */
    protected $lightFrontCarryRate;
    /**
     * 
     *
     * @var int
     */
    protected $lightFrontCarryRateRank;
    /**
     * 
     *
     * @var float
     */
    protected $lightFrontYardsPerCarry;
    /**
     * 
     *
     * @var int
     */
    protected $lightFrontYardsPerCarryRank;
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
     * @var int
     */
    protected $opportunityShareRank;
    /**
     * 
     *
     * @var float
     */
    protected $redZoneOpportunities;
    /**
     * 
     *
     * @var int
     */
    protected $redZoneTouchesPerGameRank;
    /**
     * 
     *
     * @var int
     */
    protected $redZoneTouchesRank;
    /**
     * 
     *
     * @var float
     */
    protected $runBlockingEfficiency;
    /**
     * 
     *
     * @var int
     */
    protected $runBlockingEfficiencyRank;
    /**
     * 
     *
     * @var int
     */
    protected $rushYardsPerGameRank;
    /**
     * 
     *
     * @var float
     */
    protected $shotgunCarryRate;
    /**
     * 
     *
     * @var int
     */
    protected $shotgunCarryRateRank;
    /**
     * 
     *
     * @var float
     */
    protected $shotgunYardsPerCarry;
    /**
     * 
     *
     * @var int
     */
    protected $shotgunYardsPerCarryRank;
    /**
     * 
     *
     * @var float
     */
    protected $redZoneOpportunityShare;
    /**
     * 
     *
     * @var int
     */
    protected $redZoneOpportunityShareRank;
    /**
     * 
     *
     * @var float
     */
    protected $redZoneTDConversionRate;
    /**
     * 
     *
     * @var int
     */
    protected $redZoneTDConversionRateRank;
    /**
     * 
     *
     * @var float
     */
    protected $stackedFrontCarryRate;
    /**
     * 
     *
     * @var int
     */
    protected $stackedFrontCarryRateRank;
    /**
     * 
     *
     * @var float
     */
    protected $stackedFrontYardsPerCarry;
    /**
     * 
     *
     * @var int
     */
    protected $stackedFrontYardsPerCarryRank;
    /**
     * 
     *
     * @var float
     */
    protected $stuffedRuns;
    /**
     * 
     *
     * @var int
     */
    protected $stuffedRunsRank;
    /**
     * 
     *
     * @var float
     */
    protected $stuffedRunRate;
    /**
     * 
     *
     * @var int
     */
    protected $stuffedRunRateRank;
    /**
     * 
     *
     * @var float
     */
    protected $teamRunPlays;
    /**
     * 
     *
     * @var int
     */
    protected $teamRunPlaysRank;
    /**
     * 
     *
     * @var int
     */
    protected $totalYardsPerGameRank;
    /**
     * 
     *
     * @var int
     */
    protected $totalYardsRank;
    /**
     * 
     *
     * @var float
     */
    protected $trueYardsPerCarry;
    /**
     * 
     *
     * @var int
     */
    protected $trueYardsPerCarryRank;
    /**
     * 
     *
     * @var float
     */
    protected $underCenterCarryRate;
    /**
     * 
     *
     * @var int
     */
    protected $underCenterCarryRateRank;
    /**
     * 
     *
     * @var float
     */
    protected $underCenterYardsPerCarry;
    /**
     * 
     *
     * @var int
     */
    protected $underCenterYardsPerCarryRank;
    /**
     * 
     *
     * @var float
     */
    protected $weightedOpportunities;
    /**
     * 
     *
     * @var int
     */
    protected $weightedOpportunitiesRank;
    /**
     * 
     *
     * @var float
     */
    protected $weightedOpportunitiesPerGame;
    /**
     * 
     *
     * @var int
     */
    protected $weightedOpportunitiesPerGameRank;
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
    protected $yardsCreatedPerGame;
    /**
     * 
     *
     * @var int
     */
    protected $yardsCreatedPerGameRank;
    /**
     * 
     *
     * @var float
     */
    protected $yardsCreatedPerCarry;
    /**
     * 
     *
     * @var int
     */
    protected $yardsCreatedPerCarryRank;
    /**
     * 
     *
     * @var int
     */
    protected $yardsCreatedRank;
    /**
     * 
     *
     * @var float
     */
    protected $yardsPerCarry;
    /**
     * 
     *
     * @var int
     */
    protected $yardsPerCarryRank;
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
    protected $yardsPerRouteRun;
    /**
     * 
     *
     * @var int
     */
    protected $yardsPerRouteRunRank;
    /**
     * 
     *
     * @var float
     */
    protected $yardsPerTouch;
    /**
     * 
     *
     * @var int
     */
    protected $yardsPerTouchRank;
    /**
     * 
     *
     * @var float
     */
    protected $airYardsPerReception;
    /**
     * 
     *
     * @var float
     */
    protected $airYardsPerTarget;
    /**
     * 
     *
     * @var float
     */
    protected $cushion;
    /**
     * 
     *
     * @var int
     */
    protected $cushionRank;
    /**
     * 
     *
     * @var float
     */
    protected $averageTargetDistance;
    /**
     * 
     *
     * @var int
     */
    protected $averageTargetDistanceRank;
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
    protected $catchableTargetsPerGame;
    /**
     * 
     *
     * @var int
     */
    protected $catchableTargetsRank;
    /**
     * 
     *
     * @var float
     */
    protected $contestedCatchConversionRate;
    /**
     * 
     *
     * @var int
     */
    protected $contestedCatchConversionRateRank;
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
    protected $contestedTargets;
    /**
     * 
     *
     * @var float
     */
    protected $hogRate;
    /**
     * 
     *
     * @var int
     */
    protected $hogRateRank;
    /**
     * 
     *
     * @var int
     */
    protected $passSnapsRank;
    /**
     * 
     *
     * @var int
     */
    protected $runSnapsRank;
    /**
     * 
     *
     * @var float
     */
    protected $slotCatchRate;
    /**
     * 
     *
     * @var int
     */
    protected $slotCatchRateRank;
    /**
     * 
     *
     * @var int
     */
    protected $slotSnapsRank;
    /**
     * 
     *
     * @var float
     */
    protected $snapweighedGameScript;
    /**
     * 
     *
     * @var int
     */
    protected $snapweighedGameScriptRank;
    /**
     * 
     *
     * @var float
     */
    protected $targetPremium;
    /**
     * 
     *
     * @var int
     */
    protected $targetPremiumRank;
    /**
     * 
     *
     * @var float
     */
    protected $targetQualityRating;
    /**
     * 
     *
     * @var int
     */
    protected $targetQualityRatingRank;
    /**
     * 
     *
     * @var float
     */
    protected $targetAccuracy;
    /**
     * 
     *
     * @var int
     */
    protected $targetAccuracyRank;
    /**
     * 
     *
     * @var float
     */
    protected $targetDistance;
    /**
     * 
     *
     * @var float
     */
    protected $targetDistancePerGame;
    /**
     * 
     *
     * @var int
     */
    protected $targetDistanceRank;
    /**
     * 
     *
     * @var float
     */
    protected $trueCatchRate;
    /**
     * 
     *
     * @var int
     */
    protected $trueCatchRateRank;
    /**
     * 
     *
     * @var float
     */
    protected $uncatchableTargets;
    /**
     * 
     *
     * @var float
     */
    protected $uncatchableTargetsGame;
    /**
     * 
     *
     * @var int
     */
    protected $yardsPerReceptionRank;
    /**
     * 
     *
     * @var float
     */
    protected $yardsPerPassRoute;
    /**
     * 
     *
     * @var int
     */
    protected $yardsPerPassRouteRank;
    /**
     * 
     *
     * @var float
     */
    protected $teamDefensiveSnaps;
    /**
     * 
     *
     * @var float
     */
    protected $soloTackles;
    /**
     * 
     *
     * @var int
     */
    protected $soloTacklesRank;
    /**
     * 
     *
     * @var float
     */
    protected $soloTacklesPerGame;
    /**
     * 
     *
     * @var float
     */
    protected $assistedTackles;
    /**
     * 
     *
     * @var int
     */
    protected $assistedTacklesRank;
    /**
     * 
     *
     * @var float
     */
    protected $assistedTacklesPerGame;
    /**
     * 
     *
     * @var float
     */
    protected $totalTackles;
    /**
     * 
     *
     * @var int
     */
    protected $totalTacklesRank;
    /**
     * 
     *
     * @var float
     */
    protected $totalTacklesPerGame;
    /**
     * 
     *
     * @var float
     */
    protected $sacks;
    /**
     * 
     *
     * @var int
     */
    protected $sacksRank;
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
    protected $forcedFumbles;
    /**
     * 
     *
     * @var int
     */
    protected $forcedFumblesRank;
    /**
     * 
     *
     * @var float
     */
    protected $fumbleRecoveries;
    /**
     * 
     *
     * @var int
     */
    protected $fumbleRecoveriesRank;
    /**
     * 
     *
     * @var float
     */
    protected $battedPasses;
    /**
     * 
     *
     * @var int
     */
    protected $battedPassesRank;
    /**
     * 
     *
     * @var float
     */
    protected $tacklesForLoss;
    /**
     * 
     *
     * @var int
     */
    protected $tacklesForLossRank;
    /**
     * 
     *
     * @var float
     */
    protected $runStuffs;
    /**
     * 
     *
     * @var int
     */
    protected $runStuffsRank;
    /**
     * 
     *
     * @var float
     */
    protected $passBreakups;
    /**
     * 
     *
     * @var int
     */
    protected $passBreakupsRank;
    /**
     * 
     *
     * @var float
     */
    protected $passBreakupsPerGame;
    /**
     * 
     *
     * @var int
     */
    protected $passBreakupsPerGameRank;
    /**
     * 
     *
     * @var float
     */
    protected $passBreakupsPerTarget;
    /**
     * 
     *
     * @var int
     */
    protected $passBreakupsPerTargetRank;
    /**
     * 
     *
     * @var float
     */
    protected $interceptions;
    /**
     * 
     *
     * @var int
     */
    protected $interceptionsRank;
    /**
     * 
     *
     * @var float
     */
    protected $targetsAllowed;
    /**
     * 
     *
     * @var int
     */
    protected $targetsAllowedRank;
    /**
     * 
     *
     * @var float
     */
    protected $receptionsAllowed;
    /**
     * 
     *
     * @var int
     */
    protected $receptionsAllowedRank;
    /**
     * 
     *
     * @var float
     */
    protected $yardsAllowed;
    /**
     * 
     *
     * @var int
     */
    protected $yardsAllowedRank;
    /**
     * 
     *
     * @var float
     */
    protected $yardsAllowedPerGame;
    /**
     * 
     *
     * @var int
     */
    protected $yardsAllowedPerGameRank;
    /**
     * 
     *
     * @var float
     */
    protected $yardsPerReceptionAllowed;
    /**
     * 
     *
     * @var int
     */
    protected $yardsPerReceptionAllowedRank;
    /**
     * 
     *
     * @var float
     */
    protected $catchRateAllowed;
    /**
     * 
     *
     * @var int
     */
    protected $catchRateAllowedRank;
    /**
     * 
     *
     * @var float
     */
    protected $passerRatingAllowed;
    /**
     * 
     *
     * @var int
     */
    protected $passerRatingAllowedRank;
    /**
     * 
     *
     * @var float
     */
    protected $touchdownsAllowed;
    /**
     * 
     *
     * @var int
     */
    protected $touchdownsAllowedRank;
    /**
     * 
     *
     * @var float
     */
    protected $interceptionsPerTarget;
    /**
     * 
     *
     * @var int
     */
    protected $interceptionsPerTargetRank;
    /**
     * 
     *
     * @var float
     */
    protected $coverageRating;
    /**
     * 
     *
     * @var int
     */
    protected $coverageRatingRank;
    /**
     * 
     *
     * @var float
     */
    protected $runPlayStops;
    /**
     * 
     *
     * @var int
     */
    protected $runPlayStopsRank;
    /**
     * 
     *
     * @var float
     */
    protected $targetsAllowedPerGame;
    /**
     * 
     *
     * @var int
     */
    protected $targetsAllowedPerGameRank;
    /**
     * 
     *
     * @var float
     */
    protected $receptionsAllowedPerGame;
    /**
     * 
     *
     * @var int
     */
    protected $receptionsAllowedPerGameRank;
    /**
     * 
     *
     * @var float
     */
    protected $targetRate;
    /**
     * 
     *
     * @var int
     */
    protected $targetRateRank;
    /**
     * 
     *
     * @var int
     */
    protected $burnRateRank;
    /**
     * 
     *
     * @var float
     */
    protected $averageCushion;
    /**
     * 
     *
     * @var int
     */
    protected $averageCushionRank;
    /**
     * 
     *
     * @var float
     */
    protected $yardsPerTargetAllowed;
    /**
     * 
     *
     * @var int
     */
    protected $yardsPerTargetAllowedRank;
    /**
     * 
     *
     * @var float
     */
    protected $routesDefended;
    /**
     * 
     *
     * @var int
     */
    protected $routesDefendedRank;
    /**
     * 
     *
     * @var float
     */
    protected $routesDefendedPerGame;
    /**
     * 
     *
     * @var int
     */
    protected $routesDefendedPerGameRank;
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
    protected $fantasyPointsPerAttempt;
    /**
     * 
     *
     * @var int
     */
    protected $fantasyPointsPerAttemptRank;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyPointsPerDropBack;
    /**
     * 
     *
     * @var int
     */
    protected $fantasyPointsPerDropBackRank;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyPointsPerGame;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyPointsPerGameDifferential;
    /**
     * 
     *
     * @var int
     */
    protected $fantasyPointsPerGameRank;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyPointsPerOpportunity;
    /**
     * 
     *
     * @var int
     */
    protected $fantasyPointsPerOpportunityRank;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyPointsPerSnap;
    /**
     * 
     *
     * @var int
     */
    protected $fantasyPointsPerSnapRank;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyPointsPerPassRoute;
    /**
     * 
     *
     * @var int
     */
    protected $fantasyPointsPerPassRouteRank;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyPointsPerTarget;
    /**
     * 
     *
     * @var int
     */
    protected $fantasyPointsPerTargetRank;
    /**
     * 
     *
     * @var float
     */
    protected $slotFantasyPoints;
    /**
     * 
     *
     * @var int
     */
    protected $slotFantasyPointsRank;
    /**
     * 
     *
     * @var float
     */
    protected $slotFantasyPointsPerGame;
    /**
     * 
     *
     * @var int
     */
    protected $slotFantasyPointsPerGameRank;
    /**
     * 
     *
     * @var float
     */
    protected $slotFantasyPointsPerTarget;
    /**
     * 
     *
     * @var int
     */
    protected $slotFantasyPointsPerTargetRank;
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
    protected $fantasyPointsAllowedPerTarget;
    /**
     * 
     *
     * @var int
     */
    protected $fantasyPointsAllowedPerTargetRank;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyPointsAllowedPerGame;
    /**
     * 
     *
     * @var int
     */
    protected $fantasyPointsAllowedPerGameRank;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyPointsAllowedPerSnap;
    /**
     * 
     *
     * @var int
     */
    protected $fantasyPointsAllowedPerSnapRank;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyPointsAllowedPerCoverSnap;
    /**
     * 
     *
     * @var int
     */
    protected $fantasyPointsAllowedPerCoverSnapRank;
    /**
     * 
     *
     * @var float
     */
    protected $expectedFantasyPoints;
    /**
     * 
     *
     * @var int
     */
    protected $expectedFantasyPointsRank;
    /**
     * 
     *
     * @var float
     */
    protected $expectedFantasyPointsPerGame;
    /**
     * 
     *
     * @var int
     */
    protected $expectedFantasyPointsPerGameRank;
    /**
     * 
     *
     * @var float
     */
    protected $normalizedFantasyPointsPerGame;
    /**
     * 
     *
     * @var int
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
     * @return int
     */
    public function getSnapShareRank() : int
    {
        return $this->snapShareRank;
    }
    /**
     * 
     *
     * @param int $snapShareRank
     *
     * @return self
     */
    public function setSnapShareRank(int $snapShareRank) : self
    {
        $this->snapShareRank = $snapShareRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSlotRate() : float
    {
        return $this->slotRate;
    }
    /**
     * 
     *
     * @param float $slotRate
     *
     * @return self
     */
    public function setSlotRate(float $slotRate) : self
    {
        $this->slotRate = $slotRate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSlotRateRank() : int
    {
        return $this->slotRateRank;
    }
    /**
     * 
     *
     * @param int $slotRateRank
     *
     * @return self
     */
    public function setSlotRateRank(int $slotRateRank) : self
    {
        $this->slotRateRank = $slotRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTargetSeparation() : float
    {
        return $this->targetSeparation;
    }
    /**
     * 
     *
     * @param float $targetSeparation
     *
     * @return self
     */
    public function setTargetSeparation(float $targetSeparation) : self
    {
        $this->targetSeparation = $targetSeparation;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTargetSeparationRank() : int
    {
        return $this->targetSeparationRank;
    }
    /**
     * 
     *
     * @param int $targetSeparationRank
     *
     * @return self
     */
    public function setTargetSeparationRank(int $targetSeparationRank) : self
    {
        $this->targetSeparationRank = $targetSeparationRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBurnRate() : float
    {
        return $this->burnRate;
    }
    /**
     * 
     *
     * @param float $burnRate
     *
     * @return self
     */
    public function setBurnRate(float $burnRate) : self
    {
        $this->burnRate = $burnRate;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAirYards() : float
    {
        return $this->airYards;
    }
    /**
     * 
     *
     * @param float $airYards
     *
     * @return self
     */
    public function setAirYards(float $airYards) : self
    {
        $this->airYards = $airYards;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAirYardsPerGame() : float
    {
        return $this->airYardsPerGame;
    }
    /**
     * 
     *
     * @param float $airYardsPerGame
     *
     * @return self
     */
    public function setAirYardsPerGame(float $airYardsPerGame) : self
    {
        $this->airYardsPerGame = $airYardsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAirYardsRank() : int
    {
        return $this->airYardsRank;
    }
    /**
     * 
     *
     * @param int $airYardsRank
     *
     * @return self
     */
    public function setAirYardsRank(int $airYardsRank) : self
    {
        $this->airYardsRank = $airYardsRank;
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
    public function getCarriesInside10PerGame() : float
    {
        return $this->carriesInside10PerGame;
    }
    /**
     * 
     *
     * @param float $carriesInside10PerGame
     *
     * @return self
     */
    public function setCarriesInside10PerGame(float $carriesInside10PerGame) : self
    {
        $this->carriesInside10PerGame = $carriesInside10PerGame;
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
    public function getCarriesInside5PerGame() : float
    {
        return $this->carriesInside5PerGame;
    }
    /**
     * 
     *
     * @param float $carriesInside5PerGame
     *
     * @return self
     */
    public function setCarriesInside5PerGame(float $carriesInside5PerGame) : self
    {
        $this->carriesInside5PerGame = $carriesInside5PerGame;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCarriesPerGame() : float
    {
        return $this->carriesPerGame;
    }
    /**
     * 
     *
     * @param float $carriesPerGame
     *
     * @return self
     */
    public function setCarriesPerGame(float $carriesPerGame) : self
    {
        $this->carriesPerGame = $carriesPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCarriesPerGameRank() : int
    {
        return $this->carriesPerGameRank;
    }
    /**
     * 
     *
     * @param int $carriesPerGameRank
     *
     * @return self
     */
    public function setCarriesPerGameRank(int $carriesPerGameRank) : self
    {
        $this->carriesPerGameRank = $carriesPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCarriesRank() : int
    {
        return $this->carriesRank;
    }
    /**
     * 
     *
     * @param int $carriesRank
     *
     * @return self
     */
    public function setCarriesRank(int $carriesRank) : self
    {
        $this->carriesRank = $carriesRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getGameScript() : float
    {
        return $this->gameScript;
    }
    /**
     * 
     *
     * @param float $gameScript
     *
     * @return self
     */
    public function setGameScript(float $gameScript) : self
    {
        $this->gameScript = $gameScript;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGameScriptRank() : int
    {
        return $this->gameScriptRank;
    }
    /**
     * 
     *
     * @param int $gameScriptRank
     *
     * @return self
     */
    public function setGameScriptRank(int $gameScriptRank) : self
    {
        $this->gameScriptRank = $gameScriptRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getGoalLineCarries() : float
    {
        return $this->goalLineCarries;
    }
    /**
     * 
     *
     * @param float $goalLineCarries
     *
     * @return self
     */
    public function setGoalLineCarries(float $goalLineCarries) : self
    {
        $this->goalLineCarries = $goalLineCarries;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getGoalLineCarriesPerGame() : float
    {
        return $this->goalLineCarriesPerGame;
    }
    /**
     * 
     *
     * @param float $goalLineCarriesPerGame
     *
     * @return self
     */
    public function setGoalLineCarriesPerGame(float $goalLineCarriesPerGame) : self
    {
        $this->goalLineCarriesPerGame = $goalLineCarriesPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGoalLineCarriesPerGameRank() : int
    {
        return $this->goalLineCarriesPerGameRank;
    }
    /**
     * 
     *
     * @param int $goalLineCarriesPerGameRank
     *
     * @return self
     */
    public function setGoalLineCarriesPerGameRank(int $goalLineCarriesPerGameRank) : self
    {
        $this->goalLineCarriesPerGameRank = $goalLineCarriesPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGoalLineCarriesRank() : int
    {
        return $this->goalLineCarriesRank;
    }
    /**
     * 
     *
     * @param int $goalLineCarriesRank
     *
     * @return self
     */
    public function setGoalLineCarriesRank(int $goalLineCarriesRank) : self
    {
        $this->goalLineCarriesRank = $goalLineCarriesRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getProductionPremium() : float
    {
        return $this->productionPremium;
    }
    /**
     * 
     *
     * @param float $productionPremium
     *
     * @return self
     */
    public function setProductionPremium(float $productionPremium) : self
    {
        $this->productionPremium = $productionPremium;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getProductionPremiumRank() : int
    {
        return $this->productionPremiumRank;
    }
    /**
     * 
     *
     * @param int $productionPremiumRank
     *
     * @return self
     */
    public function setProductionPremiumRank(int $productionPremiumRank) : self
    {
        $this->productionPremiumRank = $productionPremiumRank;
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
    public function getRedZoneCarriesPerGame() : float
    {
        return $this->redZoneCarriesPerGame;
    }
    /**
     * 
     *
     * @param float $redZoneCarriesPerGame
     *
     * @return self
     */
    public function setRedZoneCarriesPerGame(float $redZoneCarriesPerGame) : self
    {
        $this->redZoneCarriesPerGame = $redZoneCarriesPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRedZoneCarriesPerGameRank() : int
    {
        return $this->redZoneCarriesPerGameRank;
    }
    /**
     * 
     *
     * @param int $redZoneCarriesPerGameRank
     *
     * @return self
     */
    public function setRedZoneCarriesPerGameRank(int $redZoneCarriesPerGameRank) : self
    {
        $this->redZoneCarriesPerGameRank = $redZoneCarriesPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRedZoneCarriesRank() : int
    {
        return $this->redZoneCarriesRank;
    }
    /**
     * 
     *
     * @param int $redZoneCarriesRank
     *
     * @return self
     */
    public function setRedZoneCarriesRank(int $redZoneCarriesRank) : self
    {
        $this->redZoneCarriesRank = $redZoneCarriesRank;
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
     * @return int
     */
    public function getRushingTouchdownsRank() : int
    {
        return $this->rushingTouchdownsRank;
    }
    /**
     * 
     *
     * @param int $rushingTouchdownsRank
     *
     * @return self
     */
    public function setRushingTouchdownsRank(int $rushingTouchdownsRank) : self
    {
        $this->rushingTouchdownsRank = $rushingTouchdownsRank;
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
     * @return int
     */
    public function getRushingYardsRank() : int
    {
        return $this->rushingYardsRank;
    }
    /**
     * 
     *
     * @param int $rushingYardsRank
     *
     * @return self
     */
    public function setRushingYardsRank(int $rushingYardsRank) : self
    {
        $this->rushingYardsRank = $rushingYardsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRushYardsPerGame() : float
    {
        return $this->rushYardsPerGame;
    }
    /**
     * 
     *
     * @param float $rushYardsPerGame
     *
     * @return self
     */
    public function setRushYardsPerGame(float $rushYardsPerGame) : self
    {
        $this->rushYardsPerGame = $rushYardsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRedZoneSnaps() : float
    {
        return $this->redZoneSnaps;
    }
    /**
     * 
     *
     * @param float $redZoneSnaps
     *
     * @return self
     */
    public function setRedZoneSnaps(float $redZoneSnaps) : self
    {
        $this->redZoneSnaps = $redZoneSnaps;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRunSnaps() : float
    {
        return $this->runSnaps;
    }
    /**
     * 
     *
     * @param float $runSnaps
     *
     * @return self
     */
    public function setRunSnaps(float $runSnaps) : self
    {
        $this->runSnaps = $runSnaps;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPassSnaps() : float
    {
        return $this->passSnaps;
    }
    /**
     * 
     *
     * @param float $passSnaps
     *
     * @return self
     */
    public function setPassSnaps(float $passSnaps) : self
    {
        $this->passSnaps = $passSnaps;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSnapweightedGameScript() : float
    {
        return $this->snapweightedGameScript;
    }
    /**
     * 
     *
     * @param float $snapweightedGameScript
     *
     * @return self
     */
    public function setSnapweightedGameScript(float $snapweightedGameScript) : self
    {
        $this->snapweightedGameScript = $snapweightedGameScript;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSnapweightedGameScriptRank() : int
    {
        return $this->snapweightedGameScriptRank;
    }
    /**
     * 
     *
     * @param int $snapweightedGameScriptRank
     *
     * @return self
     */
    public function setSnapweightedGameScriptRank(int $snapweightedGameScriptRank) : self
    {
        $this->snapweightedGameScriptRank = $snapweightedGameScriptRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTeamPassPlays() : float
    {
        return $this->teamPassPlays;
    }
    /**
     * 
     *
     * @param float $teamPassPlays
     *
     * @return self
     */
    public function setTeamPassPlays(float $teamPassPlays) : self
    {
        $this->teamPassPlays = $teamPassPlays;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTeamPassPlaysRank() : int
    {
        return $this->teamPassPlaysRank;
    }
    /**
     * 
     *
     * @param int $teamPassPlaysRank
     *
     * @return self
     */
    public function setTeamPassPlaysRank(int $teamPassPlaysRank) : self
    {
        $this->teamPassPlaysRank = $teamPassPlaysRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTouchdownRate() : float
    {
        return $this->touchdownRate;
    }
    /**
     * 
     *
     * @param float $touchdownRate
     *
     * @return self
     */
    public function setTouchdownRate(float $touchdownRate) : self
    {
        $this->touchdownRate = $touchdownRate;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getWeeklyVolatility() : float
    {
        return $this->weeklyVolatility;
    }
    /**
     * 
     *
     * @param float $weeklyVolatility
     *
     * @return self
     */
    public function setWeeklyVolatility(float $weeklyVolatility) : self
    {
        $this->weeklyVolatility = $weeklyVolatility;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getWeeklyVolatilityRank() : int
    {
        return $this->weeklyVolatilityRank;
    }
    /**
     * 
     *
     * @param int $weeklyVolatilityRank
     *
     * @return self
     */
    public function setWeeklyVolatilityRank(int $weeklyVolatilityRank) : self
    {
        $this->weeklyVolatilityRank = $weeklyVolatilityRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getVOS() : float
    {
        return $this->vOS;
    }
    /**
     * 
     *
     * @param float $vOS
     *
     * @return self
     */
    public function setVOS(float $vOS) : self
    {
        $this->vOS = $vOS;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getVOSRank() : int
    {
        return $this->vOSRank;
    }
    /**
     * 
     *
     * @param int $vOSRank
     *
     * @return self
     */
    public function setVOSRank(int $vOSRank) : self
    {
        $this->vOSRank = $vOSRank;
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
     * @return int
     */
    public function getYardsPerTargetRank() : int
    {
        return $this->yardsPerTargetRank;
    }
    /**
     * 
     *
     * @param int $yardsPerTargetRank
     *
     * @return self
     */
    public function setYardsPerTargetRank(int $yardsPerTargetRank) : self
    {
        $this->yardsPerTargetRank = $yardsPerTargetRank;
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
    public function getYardsAfterCatch() : float
    {
        return $this->yardsAfterCatch;
    }
    /**
     * 
     *
     * @param float $yardsAfterCatch
     *
     * @return self
     */
    public function setYardsAfterCatch(float $yardsAfterCatch) : self
    {
        $this->yardsAfterCatch = $yardsAfterCatch;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getYardsAfterCatchPerGame() : float
    {
        return $this->yardsAfterCatchPerGame;
    }
    /**
     * 
     *
     * @param float $yardsAfterCatchPerGame
     *
     * @return self
     */
    public function setYardsAfterCatchPerGame(float $yardsAfterCatchPerGame) : self
    {
        $this->yardsAfterCatchPerGame = $yardsAfterCatchPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getYardsAfterCatchPerReception() : float
    {
        return $this->yardsAfterCatchPerReception;
    }
    /**
     * 
     *
     * @param float $yardsAfterCatchPerReception
     *
     * @return self
     */
    public function setYardsAfterCatchPerReception(float $yardsAfterCatchPerReception) : self
    {
        $this->yardsAfterCatchPerReception = $yardsAfterCatchPerReception;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getYardsAfterCatchPerTarget() : float
    {
        return $this->yardsAfterCatchPerTarget;
    }
    /**
     * 
     *
     * @param float $yardsAfterCatchPerTarget
     *
     * @return self
     */
    public function setYardsAfterCatchPerTarget(float $yardsAfterCatchPerTarget) : self
    {
        $this->yardsAfterCatchPerTarget = $yardsAfterCatchPerTarget;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getYardsAfterCatchRank() : int
    {
        return $this->yardsAfterCatchRank;
    }
    /**
     * 
     *
     * @param int $yardsAfterCatchRank
     *
     * @return self
     */
    public function setYardsAfterCatchRank(int $yardsAfterCatchRank) : self
    {
        $this->yardsAfterCatchRank = $yardsAfterCatchRank;
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
     * @return int
     */
    public function getTotalTouchdownsRank() : int
    {
        return $this->totalTouchdownsRank;
    }
    /**
     * 
     *
     * @param int $totalTouchdownsRank
     *
     * @return self
     */
    public function setTotalTouchdownsRank(int $totalTouchdownsRank) : self
    {
        $this->totalTouchdownsRank = $totalTouchdownsRank;
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
    public function getTotalYardsPerGame() : float
    {
        return $this->totalYardsPerGame;
    }
    /**
     * 
     *
     * @param float $totalYardsPerGame
     *
     * @return self
     */
    public function setTotalYardsPerGame(float $totalYardsPerGame) : self
    {
        $this->totalYardsPerGame = $totalYardsPerGame;
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
     * @return int
     */
    public function getTargetShareRank() : int
    {
        return $this->targetShareRank;
    }
    /**
     * 
     *
     * @param int $targetShareRank
     *
     * @return self
     */
    public function setTargetShareRank(int $targetShareRank) : self
    {
        $this->targetShareRank = $targetShareRank;
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
    public function getTargetsInside10PerGame() : float
    {
        return $this->targetsInside10PerGame;
    }
    /**
     * 
     *
     * @param float $targetsInside10PerGame
     *
     * @return self
     */
    public function setTargetsInside10PerGame(float $targetsInside10PerGame) : self
    {
        $this->targetsInside10PerGame = $targetsInside10PerGame;
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
    public function getTargetsInside5PerGame() : float
    {
        return $this->targetsInside5PerGame;
    }
    /**
     * 
     *
     * @param float $targetsInside5PerGame
     *
     * @return self
     */
    public function setTargetsInside5PerGame(float $targetsInside5PerGame) : self
    {
        $this->targetsInside5PerGame = $targetsInside5PerGame;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTargetsPerGame() : float
    {
        return $this->targetsPerGame;
    }
    /**
     * 
     *
     * @param float $targetsPerGame
     *
     * @return self
     */
    public function setTargetsPerGame(float $targetsPerGame) : self
    {
        $this->targetsPerGame = $targetsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTargetsPerGameRank() : int
    {
        return $this->targetsPerGameRank;
    }
    /**
     * 
     *
     * @param int $targetsPerGameRank
     *
     * @return self
     */
    public function setTargetsPerGameRank(int $targetsPerGameRank) : self
    {
        $this->targetsPerGameRank = $targetsPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTargetsRank() : int
    {
        return $this->targetsRank;
    }
    /**
     * 
     *
     * @param int $targetsRank
     *
     * @return self
     */
    public function setTargetsRank(int $targetsRank) : self
    {
        $this->targetsRank = $targetsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSlotSnaps() : float
    {
        return $this->slotSnaps;
    }
    /**
     * 
     *
     * @param float $slotSnaps
     *
     * @return self
     */
    public function setSlotSnaps(float $slotSnaps) : self
    {
        $this->slotSnaps = $slotSnaps;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSlotYPR() : float
    {
        return $this->slotYPR;
    }
    /**
     * 
     *
     * @param float $slotYPR
     *
     * @return self
     */
    public function setSlotYPR(float $slotYPR) : self
    {
        $this->slotYPR = $slotYPR;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSlotYPRRank() : int
    {
        return $this->slotYPRRank;
    }
    /**
     * 
     *
     * @param int $slotYPRRank
     *
     * @return self
     */
    public function setSlotYPRRank(int $slotYPRRank) : self
    {
        $this->slotYPRRank = $slotYPRRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSlotYPT() : float
    {
        return $this->slotYPT;
    }
    /**
     * 
     *
     * @param float $slotYPT
     *
     * @return self
     */
    public function setSlotYPT(float $slotYPT) : self
    {
        $this->slotYPT = $slotYPT;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSlotYPTRank() : int
    {
        return $this->slotYPTRank;
    }
    /**
     * 
     *
     * @param int $slotYPTRank
     *
     * @return self
     */
    public function setSlotYPTRank(int $slotYPTRank) : self
    {
        $this->slotYPTRank = $slotYPTRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRedZoneSnapShare() : float
    {
        return $this->redZoneSnapShare;
    }
    /**
     * 
     *
     * @param float $redZoneSnapShare
     *
     * @return self
     */
    public function setRedZoneSnapShare(float $redZoneSnapShare) : self
    {
        $this->redZoneSnapShare = $redZoneSnapShare;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRedZoneSnapShareRank() : int
    {
        return $this->redZoneSnapShareRank;
    }
    /**
     * 
     *
     * @param int $redZoneSnapShareRank
     *
     * @return self
     */
    public function setRedZoneSnapShareRank(int $redZoneSnapShareRank) : self
    {
        $this->redZoneSnapShareRank = $redZoneSnapShareRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRouteParticipation() : float
    {
        return $this->routeParticipation;
    }
    /**
     * 
     *
     * @param float $routeParticipation
     *
     * @return self
     */
    public function setRouteParticipation(float $routeParticipation) : self
    {
        $this->routeParticipation = $routeParticipation;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRouteParticipationRank() : int
    {
        return $this->routeParticipationRank;
    }
    /**
     * 
     *
     * @param int $routeParticipationRank
     *
     * @return self
     */
    public function setRouteParticipationRank(int $routeParticipationRank) : self
    {
        $this->routeParticipationRank = $routeParticipationRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPassRoutes() : float
    {
        return $this->passRoutes;
    }
    /**
     * 
     *
     * @param float $passRoutes
     *
     * @return self
     */
    public function setPassRoutes(float $passRoutes) : self
    {
        $this->passRoutes = $passRoutes;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPassRoutesPerGame() : float
    {
        return $this->passRoutesPerGame;
    }
    /**
     * 
     *
     * @param float $passRoutesPerGame
     *
     * @return self
     */
    public function setPassRoutesPerGame(float $passRoutesPerGame) : self
    {
        $this->passRoutesPerGame = $passRoutesPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPassRoutesPerGameRank() : int
    {
        return $this->passRoutesPerGameRank;
    }
    /**
     * 
     *
     * @param int $passRoutesPerGameRank
     *
     * @return self
     */
    public function setPassRoutesPerGameRank(int $passRoutesPerGameRank) : self
    {
        $this->passRoutesPerGameRank = $passRoutesPerGameRank;
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
     * @return int
     */
    public function getRedZoneReceptionsRank() : int
    {
        return $this->redZoneReceptionsRank;
    }
    /**
     * 
     *
     * @param int $redZoneReceptionsRank
     *
     * @return self
     */
    public function setRedZoneReceptionsRank(int $redZoneReceptionsRank) : self
    {
        $this->redZoneReceptionsRank = $redZoneReceptionsRank;
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
    public function getRedZoneTargetShare() : float
    {
        return $this->redZoneTargetShare;
    }
    /**
     * 
     *
     * @param float $redZoneTargetShare
     *
     * @return self
     */
    public function setRedZoneTargetShare(float $redZoneTargetShare) : self
    {
        $this->redZoneTargetShare = $redZoneTargetShare;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRedZoneTargetShareRank() : int
    {
        return $this->redZoneTargetShareRank;
    }
    /**
     * 
     *
     * @param int $redZoneTargetShareRank
     *
     * @return self
     */
    public function setRedZoneTargetShareRank(int $redZoneTargetShareRank) : self
    {
        $this->redZoneTargetShareRank = $redZoneTargetShareRank;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRedZoneTargetsRank() : int
    {
        return $this->redZoneTargetsRank;
    }
    /**
     * 
     *
     * @param int $redZoneTargetsRank
     *
     * @return self
     */
    public function setRedZoneTargetsRank(int $redZoneTargetsRank) : self
    {
        $this->redZoneTargetsRank = $redZoneTargetsRank;
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
    public function getRedZoneTouchesPerGame() : float
    {
        return $this->redZoneTouchesPerGame;
    }
    /**
     * 
     *
     * @param float $redZoneTouchesPerGame
     *
     * @return self
     */
    public function setRedZoneTouchesPerGame(float $redZoneTouchesPerGame) : self
    {
        $this->redZoneTouchesPerGame = $redZoneTouchesPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getQBRatingWhenTargeted() : float
    {
        return $this->qBRatingWhenTargeted;
    }
    /**
     * 
     *
     * @param float $qBRatingWhenTargeted
     *
     * @return self
     */
    public function setQBRatingWhenTargeted(float $qBRatingWhenTargeted) : self
    {
        $this->qBRatingWhenTargeted = $qBRatingWhenTargeted;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getQBRatingWhenTargetedRank() : int
    {
        return $this->qBRatingWhenTargetedRank;
    }
    /**
     * 
     *
     * @param int $qBRatingWhenTargetedRank
     *
     * @return self
     */
    public function setQBRatingWhenTargetedRank(int $qBRatingWhenTargetedRank) : self
    {
        $this->qBRatingWhenTargetedRank = $qBRatingWhenTargetedRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getReceivingTDs() : float
    {
        return $this->receivingTDs;
    }
    /**
     * 
     *
     * @param float $receivingTDs
     *
     * @return self
     */
    public function setReceivingTDs(float $receivingTDs) : self
    {
        $this->receivingTDs = $receivingTDs;
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
    public function getReceivingYardsPerGame() : float
    {
        return $this->receivingYardsPerGame;
    }
    /**
     * 
     *
     * @param float $receivingYardsPerGame
     *
     * @return self
     */
    public function setReceivingYardsPerGame(float $receivingYardsPerGame) : self
    {
        $this->receivingYardsPerGame = $receivingYardsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getReceivingYardsPerGameRank() : int
    {
        return $this->receivingYardsPerGameRank;
    }
    /**
     * 
     *
     * @param int $receivingYardsPerGameRank
     *
     * @return self
     */
    public function setReceivingYardsPerGameRank(int $receivingYardsPerGameRank) : self
    {
        $this->receivingYardsPerGameRank = $receivingYardsPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getReceivingYardsRank() : int
    {
        return $this->receivingYardsRank;
    }
    /**
     * 
     *
     * @param int $receivingYardsRank
     *
     * @return self
     */
    public function setReceivingYardsRank(int $receivingYardsRank) : self
    {
        $this->receivingYardsRank = $receivingYardsRank;
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
    public function getReceptionsPerGame() : float
    {
        return $this->receptionsPerGame;
    }
    /**
     * 
     *
     * @param float $receptionsPerGame
     *
     * @return self
     */
    public function setReceptionsPerGame(float $receptionsPerGame) : self
    {
        $this->receptionsPerGame = $receptionsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getReceptionsPerGameRank() : int
    {
        return $this->receptionsPerGameRank;
    }
    /**
     * 
     *
     * @param int $receptionsPerGameRank
     *
     * @return self
     */
    public function setReceptionsPerGameRank(int $receptionsPerGameRank) : self
    {
        $this->receptionsPerGameRank = $receptionsPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getReceptionsRank() : int
    {
        return $this->receptionsRank;
    }
    /**
     * 
     *
     * @param int $receptionsRank
     *
     * @return self
     */
    public function setReceptionsRank(int $receptionsRank) : self
    {
        $this->receptionsRank = $receptionsRank;
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
     * @return int
     */
    public function getRedZoneCatchRateRank() : int
    {
        return $this->redZoneCatchRateRank;
    }
    /**
     * 
     *
     * @param int $redZoneCatchRateRank
     *
     * @return self
     */
    public function setRedZoneCatchRateRank(int $redZoneCatchRateRank) : self
    {
        $this->redZoneCatchRateRank = $redZoneCatchRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCatchableTargetRate() : float
    {
        return $this->catchableTargetRate;
    }
    /**
     * 
     *
     * @param float $catchableTargetRate
     *
     * @return self
     */
    public function setCatchableTargetRate(float $catchableTargetRate) : self
    {
        $this->catchableTargetRate = $catchableTargetRate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCatchableTargetRateRank() : int
    {
        return $this->catchableTargetRateRank;
    }
    /**
     * 
     *
     * @param int $catchableTargetRateRank
     *
     * @return self
     */
    public function setCatchableTargetRateRank(int $catchableTargetRateRank) : self
    {
        $this->catchableTargetRateRank = $catchableTargetRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCatchableTargets() : float
    {
        return $this->catchableTargets;
    }
    /**
     * 
     *
     * @param float $catchableTargets
     *
     * @return self
     */
    public function setCatchableTargets(float $catchableTargets) : self
    {
        $this->catchableTargets = $catchableTargets;
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
     * @return int
     */
    public function getCatchRateRank() : int
    {
        return $this->catchRateRank;
    }
    /**
     * 
     *
     * @param int $catchRateRank
     *
     * @return self
     */
    public function setCatchRateRank(int $catchRateRank) : self
    {
        $this->catchRateRank = $catchRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDominatorRating() : float
    {
        return $this->dominatorRating;
    }
    /**
     * 
     *
     * @param float $dominatorRating
     *
     * @return self
     */
    public function setDominatorRating(float $dominatorRating) : self
    {
        $this->dominatorRating = $dominatorRating;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDominatorRatingRank() : int
    {
        return $this->dominatorRatingRank;
    }
    /**
     * 
     *
     * @param int $dominatorRatingRank
     *
     * @return self
     */
    public function setDominatorRatingRank(int $dominatorRatingRank) : self
    {
        $this->dominatorRatingRank = $dominatorRatingRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDrops() : float
    {
        return $this->drops;
    }
    /**
     * 
     *
     * @param float $drops
     *
     * @return self
     */
    public function setDrops(float $drops) : self
    {
        $this->drops = $drops;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDropsPerGame() : float
    {
        return $this->dropsPerGame;
    }
    /**
     * 
     *
     * @param float $dropsPerGame
     *
     * @return self
     */
    public function setDropsPerGame(float $dropsPerGame) : self
    {
        $this->dropsPerGame = $dropsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDropsPerGameRank() : int
    {
        return $this->dropsPerGameRank;
    }
    /**
     * 
     *
     * @param int $dropsPerGameRank
     *
     * @return self
     */
    public function setDropsPerGameRank(int $dropsPerGameRank) : self
    {
        $this->dropsPerGameRank = $dropsPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDropRate() : float
    {
        return $this->dropRate;
    }
    /**
     * 
     *
     * @param float $dropRate
     *
     * @return self
     */
    public function setDropRate(float $dropRate) : self
    {
        $this->dropRate = $dropRate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDropRateRank() : int
    {
        return $this->dropRateRank;
    }
    /**
     * 
     *
     * @param int $dropRateRank
     *
     * @return self
     */
    public function setDropRateRank(int $dropRateRank) : self
    {
        $this->dropRateRank = $dropRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDropsRank() : int
    {
        return $this->dropsRank;
    }
    /**
     * 
     *
     * @param int $dropsRank
     *
     * @return self
     */
    public function setDropsRank(int $dropsRank) : self
    {
        $this->dropsRank = $dropsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getEndzoneTargets() : float
    {
        return $this->endzoneTargets;
    }
    /**
     * 
     *
     * @param float $endzoneTargets
     *
     * @return self
     */
    public function setEndzoneTargets(float $endzoneTargets) : self
    {
        $this->endzoneTargets = $endzoneTargets;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getEndzoneTargetShare() : float
    {
        return $this->endzoneTargetShare;
    }
    /**
     * 
     *
     * @param float $endzoneTargetShare
     *
     * @return self
     */
    public function setEndzoneTargetShare(float $endzoneTargetShare) : self
    {
        $this->endzoneTargetShare = $endzoneTargetShare;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getEndzoneTargetShareRank() : int
    {
        return $this->endzoneTargetShareRank;
    }
    /**
     * 
     *
     * @param int $endzoneTargetShareRank
     *
     * @return self
     */
    public function setEndzoneTargetShareRank(int $endzoneTargetShareRank) : self
    {
        $this->endzoneTargetShareRank = $endzoneTargetShareRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAccuracyRating() : float
    {
        return $this->accuracyRating;
    }
    /**
     * 
     *
     * @param float $accuracyRating
     *
     * @return self
     */
    public function setAccuracyRating(float $accuracyRating) : self
    {
        $this->accuracyRating = $accuracyRating;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAccuracyRatingRank() : int
    {
        return $this->accuracyRatingRank;
    }
    /**
     * 
     *
     * @param int $accuracyRatingRank
     *
     * @return self
     */
    public function setAccuracyRatingRank(int $accuracyRatingRank) : self
    {
        $this->accuracyRatingRank = $accuracyRatingRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAdjustedAttempts() : float
    {
        return $this->adjustedAttempts;
    }
    /**
     * 
     *
     * @param float $adjustedAttempts
     *
     * @return self
     */
    public function setAdjustedAttempts(float $adjustedAttempts) : self
    {
        $this->adjustedAttempts = $adjustedAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAdjustedYardsPerAttempt() : float
    {
        return $this->adjustedYardsPerAttempt;
    }
    /**
     * 
     *
     * @param float $adjustedYardsPerAttempt
     *
     * @return self
     */
    public function setAdjustedYardsPerAttempt(float $adjustedYardsPerAttempt) : self
    {
        $this->adjustedYardsPerAttempt = $adjustedYardsPerAttempt;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAdjustedYardsPerAttemptRank() : int
    {
        return $this->adjustedYardsPerAttemptRank;
    }
    /**
     * 
     *
     * @param int $adjustedYardsPerAttemptRank
     *
     * @return self
     */
    public function setAdjustedYardsPerAttemptRank(int $adjustedYardsPerAttemptRank) : self
    {
        $this->adjustedYardsPerAttemptRank = $adjustedYardsPerAttemptRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAirYardsPerAttempt() : float
    {
        return $this->airYardsPerAttempt;
    }
    /**
     * 
     *
     * @param float $airYardsPerAttempt
     *
     * @return self
     */
    public function setAirYardsPerAttempt(float $airYardsPerAttempt) : self
    {
        $this->airYardsPerAttempt = $airYardsPerAttempt;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAirYardsPerAttemptRank() : int
    {
        return $this->airYardsPerAttemptRank;
    }
    /**
     * 
     *
     * @param int $airYardsPerAttemptRank
     *
     * @return self
     */
    public function setAirYardsPerAttemptRank(int $airYardsPerAttemptRank) : self
    {
        $this->airYardsPerAttemptRank = $airYardsPerAttemptRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAttemptsInside10() : float
    {
        return $this->attemptsInside10;
    }
    /**
     * 
     *
     * @param float $attemptsInside10
     *
     * @return self
     */
    public function setAttemptsInside10(float $attemptsInside10) : self
    {
        $this->attemptsInside10 = $attemptsInside10;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAttemptsInside10PerGame() : float
    {
        return $this->attemptsInside10PerGame;
    }
    /**
     * 
     *
     * @param float $attemptsInside10PerGame
     *
     * @return self
     */
    public function setAttemptsInside10PerGame(float $attemptsInside10PerGame) : self
    {
        $this->attemptsInside10PerGame = $attemptsInside10PerGame;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAttemptsInside5() : float
    {
        return $this->attemptsInside5;
    }
    /**
     * 
     *
     * @param float $attemptsInside5
     *
     * @return self
     */
    public function setAttemptsInside5(float $attemptsInside5) : self
    {
        $this->attemptsInside5 = $attemptsInside5;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAttemptsInside5PerGame() : float
    {
        return $this->attemptsInside5PerGame;
    }
    /**
     * 
     *
     * @param float $attemptsInside5PerGame
     *
     * @return self
     */
    public function setAttemptsInside5PerGame(float $attemptsInside5PerGame) : self
    {
        $this->attemptsInside5PerGame = $attemptsInside5PerGame;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAttemptsPerGame() : float
    {
        return $this->attemptsPerGame;
    }
    /**
     * 
     *
     * @param float $attemptsPerGame
     *
     * @return self
     */
    public function setAttemptsPerGame(float $attemptsPerGame) : self
    {
        $this->attemptsPerGame = $attemptsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCatchablePasses() : float
    {
        return $this->catchablePasses;
    }
    /**
     * 
     *
     * @param float $catchablePasses
     *
     * @return self
     */
    public function setCatchablePasses(float $catchablePasses) : self
    {
        $this->catchablePasses = $catchablePasses;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCatchablePassesPerGame() : float
    {
        return $this->catchablePassesPerGame;
    }
    /**
     * 
     *
     * @param float $catchablePassesPerGame
     *
     * @return self
     */
    public function setCatchablePassesPerGame(float $catchablePassesPerGame) : self
    {
        $this->catchablePassesPerGame = $catchablePassesPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCatchablePassesRank() : int
    {
        return $this->catchablePassesRank;
    }
    /**
     * 
     *
     * @param int $catchablePassesRank
     *
     * @return self
     */
    public function setCatchablePassesRank(int $catchablePassesRank) : self
    {
        $this->catchablePassesRank = $catchablePassesRank;
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
     * @return int
     */
    public function getCompletionPercentageRank() : int
    {
        return $this->completionPercentageRank;
    }
    /**
     * 
     *
     * @param int $completionPercentageRank
     *
     * @return self
     */
    public function setCompletionPercentageRank(int $completionPercentageRank) : self
    {
        $this->completionPercentageRank = $completionPercentageRank;
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
    public function getDangerPlays() : float
    {
        return $this->dangerPlays;
    }
    /**
     * 
     *
     * @param float $dangerPlays
     *
     * @return self
     */
    public function setDangerPlays(float $dangerPlays) : self
    {
        $this->dangerPlays = $dangerPlays;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDangerPlaysPerGame() : float
    {
        return $this->dangerPlaysPerGame;
    }
    /**
     * 
     *
     * @param float $dangerPlaysPerGame
     *
     * @return self
     */
    public function setDangerPlaysPerGame(float $dangerPlaysPerGame) : self
    {
        $this->dangerPlaysPerGame = $dangerPlaysPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDangerPlaysRank() : int
    {
        return $this->dangerPlaysRank;
    }
    /**
     * 
     *
     * @param int $dangerPlaysRank
     *
     * @return self
     */
    public function setDangerPlaysRank(int $dangerPlaysRank) : self
    {
        $this->dangerPlaysRank = $dangerPlaysRank;
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
    public function getDeepBallAttemptsPerGame() : float
    {
        return $this->deepBallAttemptsPerGame;
    }
    /**
     * 
     *
     * @param float $deepBallAttemptsPerGame
     *
     * @return self
     */
    public function setDeepBallAttemptsPerGame(float $deepBallAttemptsPerGame) : self
    {
        $this->deepBallAttemptsPerGame = $deepBallAttemptsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDeepBallAttemptsPerGameRank() : int
    {
        return $this->deepBallAttemptsPerGameRank;
    }
    /**
     * 
     *
     * @param int $deepBallAttemptsPerGameRank
     *
     * @return self
     */
    public function setDeepBallAttemptsPerGameRank(int $deepBallAttemptsPerGameRank) : self
    {
        $this->deepBallAttemptsPerGameRank = $deepBallAttemptsPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDeepBallAttemptsRank() : int
    {
        return $this->deepBallAttemptsRank;
    }
    /**
     * 
     *
     * @param int $deepBallAttemptsRank
     *
     * @return self
     */
    public function setDeepBallAttemptsRank(int $deepBallAttemptsRank) : self
    {
        $this->deepBallAttemptsRank = $deepBallAttemptsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDeepBallCompletionPercentage() : float
    {
        return $this->deepBallCompletionPercentage;
    }
    /**
     * 
     *
     * @param float $deepBallCompletionPercentage
     *
     * @return self
     */
    public function setDeepBallCompletionPercentage(float $deepBallCompletionPercentage) : self
    {
        $this->deepBallCompletionPercentage = $deepBallCompletionPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDeepBallCompletionPercentageRank() : int
    {
        return $this->deepBallCompletionPercentageRank;
    }
    /**
     * 
     *
     * @param int $deepBallCompletionPercentageRank
     *
     * @return self
     */
    public function setDeepBallCompletionPercentageRank(int $deepBallCompletionPercentageRank) : self
    {
        $this->deepBallCompletionPercentageRank = $deepBallCompletionPercentageRank;
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
     * @return int
     */
    public function getDeepBallCompletionsRank() : int
    {
        return $this->deepBallCompletionsRank;
    }
    /**
     * 
     *
     * @param int $deepBallCompletionsRank
     *
     * @return self
     */
    public function setDeepBallCompletionsRank(int $deepBallCompletionsRank) : self
    {
        $this->deepBallCompletionsRank = $deepBallCompletionsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDroppedPasses() : float
    {
        return $this->droppedPasses;
    }
    /**
     * 
     *
     * @param float $droppedPasses
     *
     * @return self
     */
    public function setDroppedPasses(float $droppedPasses) : self
    {
        $this->droppedPasses = $droppedPasses;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDroppedPassesRank() : int
    {
        return $this->droppedPassesRank;
    }
    /**
     * 
     *
     * @param int $droppedPassesRank
     *
     * @return self
     */
    public function setDroppedPassesRank(int $droppedPassesRank) : self
    {
        $this->droppedPassesRank = $droppedPassesRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDroppedPassesPerGame() : float
    {
        return $this->droppedPassesPerGame;
    }
    /**
     * 
     *
     * @param float $droppedPassesPerGame
     *
     * @return self
     */
    public function setDroppedPassesPerGame(float $droppedPassesPerGame) : self
    {
        $this->droppedPassesPerGame = $droppedPassesPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDropsPerAttempt() : float
    {
        return $this->dropsPerAttempt;
    }
    /**
     * 
     *
     * @param float $dropsPerAttempt
     *
     * @return self
     */
    public function setDropsPerAttempt(float $dropsPerAttempt) : self
    {
        $this->dropsPerAttempt = $dropsPerAttempt;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDropsPerAttemptRank() : int
    {
        return $this->dropsPerAttemptRank;
    }
    /**
     * 
     *
     * @param int $dropsPerAttemptRank
     *
     * @return self
     */
    public function setDropsPerAttemptRank(int $dropsPerAttemptRank) : self
    {
        $this->dropsPerAttemptRank = $dropsPerAttemptRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDropBacks() : float
    {
        return $this->dropBacks;
    }
    /**
     * 
     *
     * @param float $dropBacks
     *
     * @return self
     */
    public function setDropBacks(float $dropBacks) : self
    {
        $this->dropBacks = $dropBacks;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getInterceptablePasses() : float
    {
        return $this->interceptablePasses;
    }
    /**
     * 
     *
     * @param float $interceptablePasses
     *
     * @return self
     */
    public function setInterceptablePasses(float $interceptablePasses) : self
    {
        $this->interceptablePasses = $interceptablePasses;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getInterceptablePassesPerGame() : float
    {
        return $this->interceptablePassesPerGame;
    }
    /**
     * 
     *
     * @param float $interceptablePassesPerGame
     *
     * @return self
     */
    public function setInterceptablePassesPerGame(float $interceptablePassesPerGame) : self
    {
        $this->interceptablePassesPerGame = $interceptablePassesPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getInterceptablePassesRank() : int
    {
        return $this->interceptablePassesRank;
    }
    /**
     * 
     *
     * @param int $interceptablePassesRank
     *
     * @return self
     */
    public function setInterceptablePassesRank(int $interceptablePassesRank) : self
    {
        $this->interceptablePassesRank = $interceptablePassesRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getMoneyThrows() : float
    {
        return $this->moneyThrows;
    }
    /**
     * 
     *
     * @param float $moneyThrows
     *
     * @return self
     */
    public function setMoneyThrows(float $moneyThrows) : self
    {
        $this->moneyThrows = $moneyThrows;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getMoneyThrowsPerGame() : float
    {
        return $this->moneyThrowsPerGame;
    }
    /**
     * 
     *
     * @param float $moneyThrowsPerGame
     *
     * @return self
     */
    public function setMoneyThrowsPerGame(float $moneyThrowsPerGame) : self
    {
        $this->moneyThrowsPerGame = $moneyThrowsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMoneyThrowsRank() : int
    {
        return $this->moneyThrowsRank;
    }
    /**
     * 
     *
     * @param int $moneyThrowsRank
     *
     * @return self
     */
    public function setMoneyThrowsRank(int $moneyThrowsRank) : self
    {
        $this->moneyThrowsRank = $moneyThrowsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPassAttempts() : float
    {
        return $this->passAttempts;
    }
    /**
     * 
     *
     * @param float $passAttempts
     *
     * @return self
     */
    public function setPassAttempts(float $passAttempts) : self
    {
        $this->passAttempts = $passAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPassAttemptsRank() : int
    {
        return $this->passAttemptsRank;
    }
    /**
     * 
     *
     * @param int $passAttemptsRank
     *
     * @return self
     */
    public function setPassAttemptsRank(int $passAttemptsRank) : self
    {
        $this->passAttemptsRank = $passAttemptsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPassAttemptDistance() : float
    {
        return $this->passAttemptDistance;
    }
    /**
     * 
     *
     * @param float $passAttemptDistance
     *
     * @return self
     */
    public function setPassAttemptDistance(float $passAttemptDistance) : self
    {
        $this->passAttemptDistance = $passAttemptDistance;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPassAttemptDistanceRank() : int
    {
        return $this->passAttemptDistanceRank;
    }
    /**
     * 
     *
     * @param int $passAttemptDistanceRank
     *
     * @return self
     */
    public function setPassAttemptDistanceRank(int $passAttemptDistanceRank) : self
    {
        $this->passAttemptDistanceRank = $passAttemptDistanceRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPassAttemptDistancePerAttempt() : float
    {
        return $this->passAttemptDistancePerAttempt;
    }
    /**
     * 
     *
     * @param float $passAttemptDistancePerAttempt
     *
     * @return self
     */
    public function setPassAttemptDistancePerAttempt(float $passAttemptDistancePerAttempt) : self
    {
        $this->passAttemptDistancePerAttempt = $passAttemptDistancePerAttempt;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPassAttemptDistancePerAttemptRank() : int
    {
        return $this->passAttemptDistancePerAttemptRank;
    }
    /**
     * 
     *
     * @param int $passAttemptDistancePerAttemptRank
     *
     * @return self
     */
    public function setPassAttemptDistancePerAttemptRank(int $passAttemptDistancePerAttemptRank) : self
    {
        $this->passAttemptDistancePerAttemptRank = $passAttemptDistancePerAttemptRank;
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
     * @return int
     */
    public function getPassingTouchdownsRank() : int
    {
        return $this->passingTouchdownsRank;
    }
    /**
     * 
     *
     * @param int $passingTouchdownsRank
     *
     * @return self
     */
    public function setPassingTouchdownsRank(int $passingTouchdownsRank) : self
    {
        $this->passingTouchdownsRank = $passingTouchdownsRank;
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
     * @return int
     */
    public function getPassingYardsPerAttemptRank() : int
    {
        return $this->passingYardsPerAttemptRank;
    }
    /**
     * 
     *
     * @param int $passingYardsPerAttemptRank
     *
     * @return self
     */
    public function setPassingYardsPerAttemptRank(int $passingYardsPerAttemptRank) : self
    {
        $this->passingYardsPerAttemptRank = $passingYardsPerAttemptRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPassingYardsPerGame() : float
    {
        return $this->passingYardsPerGame;
    }
    /**
     * 
     *
     * @param float $passingYardsPerGame
     *
     * @return self
     */
    public function setPassingYardsPerGame(float $passingYardsPerGame) : self
    {
        $this->passingYardsPerGame = $passingYardsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPassingYardsPerGameRank() : int
    {
        return $this->passingYardsPerGameRank;
    }
    /**
     * 
     *
     * @param int $passingYardsPerGameRank
     *
     * @return self
     */
    public function setPassingYardsPerGameRank(int $passingYardsPerGameRank) : self
    {
        $this->passingYardsPerGameRank = $passingYardsPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPassingYardsRank() : int
    {
        return $this->passingYardsRank;
    }
    /**
     * 
     *
     * @param int $passingYardsRank
     *
     * @return self
     */
    public function setPassingYardsRank(int $passingYardsRank) : self
    {
        $this->passingYardsRank = $passingYardsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPlayactionPassAttempts() : float
    {
        return $this->playactionPassAttempts;
    }
    /**
     * 
     *
     * @param float $playactionPassAttempts
     *
     * @return self
     */
    public function setPlayactionPassAttempts(float $playactionPassAttempts) : self
    {
        $this->playactionPassAttempts = $playactionPassAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPlayactionPassAttemptsPerGame() : float
    {
        return $this->playactionPassAttemptsPerGame;
    }
    /**
     * 
     *
     * @param float $playactionPassAttemptsPerGame
     *
     * @return self
     */
    public function setPlayactionPassAttemptsPerGame(float $playactionPassAttemptsPerGame) : self
    {
        $this->playactionPassAttemptsPerGame = $playactionPassAttemptsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPlayactionPassAttemptsRank() : int
    {
        return $this->playactionPassAttemptsRank;
    }
    /**
     * 
     *
     * @param int $playactionPassAttemptsRank
     *
     * @return self
     */
    public function setPlayactionPassAttemptsRank(int $playactionPassAttemptsRank) : self
    {
        $this->playactionPassAttemptsRank = $playactionPassAttemptsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPlayactionPassCompletionPercentage() : float
    {
        return $this->playactionPassCompletionPercentage;
    }
    /**
     * 
     *
     * @param float $playactionPassCompletionPercentage
     *
     * @return self
     */
    public function setPlayactionPassCompletionPercentage(float $playactionPassCompletionPercentage) : self
    {
        $this->playactionPassCompletionPercentage = $playactionPassCompletionPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPlayactionPassCompletionPercentageRank() : int
    {
        return $this->playactionPassCompletionPercentageRank;
    }
    /**
     * 
     *
     * @param int $playactionPassCompletionPercentageRank
     *
     * @return self
     */
    public function setPlayactionPassCompletionPercentageRank(int $playactionPassCompletionPercentageRank) : self
    {
        $this->playactionPassCompletionPercentageRank = $playactionPassCompletionPercentageRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getProtectionRate() : float
    {
        return $this->protectionRate;
    }
    /**
     * 
     *
     * @param float $protectionRate
     *
     * @return self
     */
    public function setProtectionRate(float $protectionRate) : self
    {
        $this->protectionRate = $protectionRate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getProtectionRateRank() : int
    {
        return $this->protectionRateRank;
    }
    /**
     * 
     *
     * @param int $protectionRateRank
     *
     * @return self
     */
    public function setProtectionRateRank(int $protectionRateRank) : self
    {
        $this->protectionRateRank = $protectionRateRank;
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
    public function getRedZoneAttemptsPerGame() : float
    {
        return $this->redZoneAttemptsPerGame;
    }
    /**
     * 
     *
     * @param float $redZoneAttemptsPerGame
     *
     * @return self
     */
    public function setRedZoneAttemptsPerGame(float $redZoneAttemptsPerGame) : self
    {
        $this->redZoneAttemptsPerGame = $redZoneAttemptsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRedZoneAttemptsRank() : int
    {
        return $this->redZoneAttemptsRank;
    }
    /**
     * 
     *
     * @param int $redZoneAttemptsRank
     *
     * @return self
     */
    public function setRedZoneAttemptsRank(int $redZoneAttemptsRank) : self
    {
        $this->redZoneAttemptsRank = $redZoneAttemptsRank;
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
     * @return int
     */
    public function getRedZoneCompletionPercentageRank() : int
    {
        return $this->redZoneCompletionPercentageRank;
    }
    /**
     * 
     *
     * @param int $redZoneCompletionPercentageRank
     *
     * @return self
     */
    public function setRedZoneCompletionPercentageRank(int $redZoneCompletionPercentageRank) : self
    {
        $this->redZoneCompletionPercentageRank = $redZoneCompletionPercentageRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRedZoneTDtoINTRatio() : float
    {
        return $this->redZoneTDtoINTRatio;
    }
    /**
     * 
     *
     * @param float $redZoneTDtoINTRatio
     *
     * @return self
     */
    public function setRedZoneTDtoINTRatio(float $redZoneTDtoINTRatio) : self
    {
        $this->redZoneTDtoINTRatio = $redZoneTDtoINTRatio;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRushingTDs() : float
    {
        return $this->rushingTDs;
    }
    /**
     * 
     *
     * @param float $rushingTDs
     *
     * @return self
     */
    public function setRushingTDs(float $rushingTDs) : self
    {
        $this->rushingTDs = $rushingTDs;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRushingYardsPerGameRank() : int
    {
        return $this->rushingYardsPerGameRank;
    }
    /**
     * 
     *
     * @param int $rushingYardsPerGameRank
     *
     * @return self
     */
    public function setRushingYardsPerGameRank(int $rushingYardsPerGameRank) : self
    {
        $this->rushingYardsPerGameRank = $rushingYardsPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getShotgunCompletionPercentage() : float
    {
        return $this->shotgunCompletionPercentage;
    }
    /**
     * 
     *
     * @param float $shotgunCompletionPercentage
     *
     * @return self
     */
    public function setShotgunCompletionPercentage(float $shotgunCompletionPercentage) : self
    {
        $this->shotgunCompletionPercentage = $shotgunCompletionPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getShotgunSnaps() : float
    {
        return $this->shotgunSnaps;
    }
    /**
     * 
     *
     * @param float $shotgunSnaps
     *
     * @return self
     */
    public function setShotgunSnaps(float $shotgunSnaps) : self
    {
        $this->shotgunSnaps = $shotgunSnaps;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getUnderCenterCompletionPercentage() : float
    {
        return $this->underCenterCompletionPercentage;
    }
    /**
     * 
     *
     * @param float $underCenterCompletionPercentage
     *
     * @return self
     */
    public function setUnderCenterCompletionPercentage(float $underCenterCompletionPercentage) : self
    {
        $this->underCenterCompletionPercentage = $underCenterCompletionPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getUnderCenterSnaps() : float
    {
        return $this->underCenterSnaps;
    }
    /**
     * 
     *
     * @param float $underCenterSnaps
     *
     * @return self
     */
    public function setUnderCenterSnaps(float $underCenterSnaps) : self
    {
        $this->underCenterSnaps = $underCenterSnaps;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getReceiverContestedCatchRate() : float
    {
        return $this->receiverContestedCatchRate;
    }
    /**
     * 
     *
     * @param float $receiverContestedCatchRate
     *
     * @return self
     */
    public function setReceiverContestedCatchRate(float $receiverContestedCatchRate) : self
    {
        $this->receiverContestedCatchRate = $receiverContestedCatchRate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getReceiverContestedCatchRateRank() : int
    {
        return $this->receiverContestedCatchRateRank;
    }
    /**
     * 
     *
     * @param int $receiverContestedCatchRateRank
     *
     * @return self
     */
    public function setReceiverContestedCatchRateRank(int $receiverContestedCatchRateRank) : self
    {
        $this->receiverContestedCatchRateRank = $receiverContestedCatchRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getReceiverTargetSeparation() : float
    {
        return $this->receiverTargetSeparation;
    }
    /**
     * 
     *
     * @param float $receiverTargetSeparation
     *
     * @return self
     */
    public function setReceiverTargetSeparation(float $receiverTargetSeparation) : self
    {
        $this->receiverTargetSeparation = $receiverTargetSeparation;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getReceiverTargetSeparationRank() : int
    {
        return $this->receiverTargetSeparationRank;
    }
    /**
     * 
     *
     * @param int $receiverTargetSeparationRank
     *
     * @return self
     */
    public function setReceiverTargetSeparationRank(int $receiverTargetSeparationRank) : self
    {
        $this->receiverTargetSeparationRank = $receiverTargetSeparationRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getReceiverYardsAfterTheCatch() : float
    {
        return $this->receiverYardsAfterTheCatch;
    }
    /**
     * 
     *
     * @param float $receiverYardsAfterTheCatch
     *
     * @return self
     */
    public function setReceiverYardsAfterTheCatch(float $receiverYardsAfterTheCatch) : self
    {
        $this->receiverYardsAfterTheCatch = $receiverYardsAfterTheCatch;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getReceiverYardsAfterTheCatchRank() : int
    {
        return $this->receiverYardsAfterTheCatchRank;
    }
    /**
     * 
     *
     * @param int $receiverYardsAfterTheCatchRank
     *
     * @return self
     */
    public function setReceiverYardsAfterTheCatchRank(int $receiverYardsAfterTheCatchRank) : self
    {
        $this->receiverYardsAfterTheCatchRank = $receiverYardsAfterTheCatchRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getReceiverYardsAfterTheCatchPerTarget() : float
    {
        return $this->receiverYardsAfterTheCatchPerTarget;
    }
    /**
     * 
     *
     * @param float $receiverYardsAfterTheCatchPerTarget
     *
     * @return self
     */
    public function setReceiverYardsAfterTheCatchPerTarget(float $receiverYardsAfterTheCatchPerTarget) : self
    {
        $this->receiverYardsAfterTheCatchPerTarget = $receiverYardsAfterTheCatchPerTarget;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSupportingCastEfficiency() : float
    {
        return $this->supportingCastEfficiency;
    }
    /**
     * 
     *
     * @param float $supportingCastEfficiency
     *
     * @return self
     */
    public function setSupportingCastEfficiency(float $supportingCastEfficiency) : self
    {
        $this->supportingCastEfficiency = $supportingCastEfficiency;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSupportingCastEfficiencyRank() : int
    {
        return $this->supportingCastEfficiencyRank;
    }
    /**
     * 
     *
     * @param int $supportingCastEfficiencyRank
     *
     * @return self
     */
    public function setSupportingCastEfficiencyRank(int $supportingCastEfficiencyRank) : self
    {
        $this->supportingCastEfficiencyRank = $supportingCastEfficiencyRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalQBR() : float
    {
        return $this->totalQBR;
    }
    /**
     * 
     *
     * @param float $totalQBR
     *
     * @return self
     */
    public function setTotalQBR(float $totalQBR) : self
    {
        $this->totalQBR = $totalQBR;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotalQBRRank() : int
    {
        return $this->totalQBRRank;
    }
    /**
     * 
     *
     * @param int $totalQBRRank
     *
     * @return self
     */
    public function setTotalQBRRank(int $totalQBRRank) : self
    {
        $this->totalQBRRank = $totalQBRRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTrueCompletionPercentage() : float
    {
        return $this->trueCompletionPercentage;
    }
    /**
     * 
     *
     * @param float $trueCompletionPercentage
     *
     * @return self
     */
    public function setTrueCompletionPercentage(float $trueCompletionPercentage) : self
    {
        $this->trueCompletionPercentage = $trueCompletionPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTrueCompletionPercentageRank() : int
    {
        return $this->trueCompletionPercentageRank;
    }
    /**
     * 
     *
     * @param int $trueCompletionPercentageRank
     *
     * @return self
     */
    public function setTrueCompletionPercentageRank(int $trueCompletionPercentageRank) : self
    {
        $this->trueCompletionPercentageRank = $trueCompletionPercentageRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTruePasserRating() : float
    {
        return $this->truePasserRating;
    }
    /**
     * 
     *
     * @param float $truePasserRating
     *
     * @return self
     */
    public function setTruePasserRating(float $truePasserRating) : self
    {
        $this->truePasserRating = $truePasserRating;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTruePasserRatingRank() : int
    {
        return $this->truePasserRatingRank;
    }
    /**
     * 
     *
     * @param int $truePasserRatingRank
     *
     * @return self
     */
    public function setTruePasserRatingRank(int $truePasserRatingRank) : self
    {
        $this->truePasserRatingRank = $truePasserRatingRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getUncatchablePasses() : float
    {
        return $this->uncatchablePasses;
    }
    /**
     * 
     *
     * @param float $uncatchablePasses
     *
     * @return self
     */
    public function setUncatchablePasses(float $uncatchablePasses) : self
    {
        $this->uncatchablePasses = $uncatchablePasses;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getUncatchablePassesPerGame() : float
    {
        return $this->uncatchablePassesPerGame;
    }
    /**
     * 
     *
     * @param float $uncatchablePassesPerGame
     *
     * @return self
     */
    public function setUncatchablePassesPerGame(float $uncatchablePassesPerGame) : self
    {
        $this->uncatchablePassesPerGame = $uncatchablePassesPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUncatchablePassesRank() : int
    {
        return $this->uncatchablePassesRank;
    }
    /**
     * 
     *
     * @param int $uncatchablePassesRank
     *
     * @return self
     */
    public function setUncatchablePassesRank(int $uncatchablePassesRank) : self
    {
        $this->uncatchablePassesRank = $uncatchablePassesRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getUnderPressureAttempts() : float
    {
        return $this->underPressureAttempts;
    }
    /**
     * 
     *
     * @param float $underPressureAttempts
     *
     * @return self
     */
    public function setUnderPressureAttempts(float $underPressureAttempts) : self
    {
        $this->underPressureAttempts = $underPressureAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUnderPressureAttemptsRank() : int
    {
        return $this->underPressureAttemptsRank;
    }
    /**
     * 
     *
     * @param int $underPressureAttemptsRank
     *
     * @return self
     */
    public function setUnderPressureAttemptsRank(int $underPressureAttemptsRank) : self
    {
        $this->underPressureAttemptsRank = $underPressureAttemptsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getUnderPressureAttemptsPerGame() : float
    {
        return $this->underPressureAttemptsPerGame;
    }
    /**
     * 
     *
     * @param float $underPressureAttemptsPerGame
     *
     * @return self
     */
    public function setUnderPressureAttemptsPerGame(float $underPressureAttemptsPerGame) : self
    {
        $this->underPressureAttemptsPerGame = $underPressureAttemptsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPressuredCompletionPercentage() : float
    {
        return $this->pressuredCompletionPercentage;
    }
    /**
     * 
     *
     * @param float $pressuredCompletionPercentage
     *
     * @return self
     */
    public function setPressuredCompletionPercentage(float $pressuredCompletionPercentage) : self
    {
        $this->pressuredCompletionPercentage = $pressuredCompletionPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPressuredCompletionPercentageRank() : int
    {
        return $this->pressuredCompletionPercentageRank;
    }
    /**
     * 
     *
     * @param int $pressuredCompletionPercentageRank
     *
     * @return self
     */
    public function setPressuredCompletionPercentageRank(int $pressuredCompletionPercentageRank) : self
    {
        $this->pressuredCompletionPercentageRank = $pressuredCompletionPercentageRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAverageDefendersInTheBox() : float
    {
        return $this->averageDefendersInTheBox;
    }
    /**
     * 
     *
     * @param float $averageDefendersInTheBox
     *
     * @return self
     */
    public function setAverageDefendersInTheBox(float $averageDefendersInTheBox) : self
    {
        $this->averageDefendersInTheBox = $averageDefendersInTheBox;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAverageDefendersInTheBoxRank() : int
    {
        return $this->averageDefendersInTheBoxRank;
    }
    /**
     * 
     *
     * @param int $averageDefendersInTheBoxRank
     *
     * @return self
     */
    public function setAverageDefendersInTheBoxRank(int $averageDefendersInTheBoxRank) : self
    {
        $this->averageDefendersInTheBoxRank = $averageDefendersInTheBoxRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBaseFrontCarryRate() : float
    {
        return $this->baseFrontCarryRate;
    }
    /**
     * 
     *
     * @param float $baseFrontCarryRate
     *
     * @return self
     */
    public function setBaseFrontCarryRate(float $baseFrontCarryRate) : self
    {
        $this->baseFrontCarryRate = $baseFrontCarryRate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBaseFrontCarryRateRank() : int
    {
        return $this->baseFrontCarryRateRank;
    }
    /**
     * 
     *
     * @param int $baseFrontCarryRateRank
     *
     * @return self
     */
    public function setBaseFrontCarryRateRank(int $baseFrontCarryRateRank) : self
    {
        $this->baseFrontCarryRateRank = $baseFrontCarryRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBaseFrontYardsPerCarry() : float
    {
        return $this->baseFrontYardsPerCarry;
    }
    /**
     * 
     *
     * @param float $baseFrontYardsPerCarry
     *
     * @return self
     */
    public function setBaseFrontYardsPerCarry(float $baseFrontYardsPerCarry) : self
    {
        $this->baseFrontYardsPerCarry = $baseFrontYardsPerCarry;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBaseFrontYardsPerCarryRank() : int
    {
        return $this->baseFrontYardsPerCarryRank;
    }
    /**
     * 
     *
     * @param int $baseFrontYardsPerCarryRank
     *
     * @return self
     */
    public function setBaseFrontYardsPerCarryRank(int $baseFrontYardsPerCarryRank) : self
    {
        $this->baseFrontYardsPerCarryRank = $baseFrontYardsPerCarryRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBreakawayRunRate() : float
    {
        return $this->breakawayRunRate;
    }
    /**
     * 
     *
     * @param float $breakawayRunRate
     *
     * @return self
     */
    public function setBreakawayRunRate(float $breakawayRunRate) : self
    {
        $this->breakawayRunRate = $breakawayRunRate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBreakawayRunRateRank() : int
    {
        return $this->breakawayRunRateRank;
    }
    /**
     * 
     *
     * @param int $breakawayRunRateRank
     *
     * @return self
     */
    public function setBreakawayRunRateRank(int $breakawayRunRateRank) : self
    {
        $this->breakawayRunRateRank = $breakawayRunRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBreakawayRuns() : float
    {
        return $this->breakawayRuns;
    }
    /**
     * 
     *
     * @param float $breakawayRuns
     *
     * @return self
     */
    public function setBreakawayRuns(float $breakawayRuns) : self
    {
        $this->breakawayRuns = $breakawayRuns;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBreakawayRunsPerGame() : float
    {
        return $this->breakawayRunsPerGame;
    }
    /**
     * 
     *
     * @param float $breakawayRunsPerGame
     *
     * @return self
     */
    public function setBreakawayRunsPerGame(float $breakawayRunsPerGame) : self
    {
        $this->breakawayRunsPerGame = $breakawayRunsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBreakawayRunsPerGameRank() : int
    {
        return $this->breakawayRunsPerGameRank;
    }
    /**
     * 
     *
     * @param int $breakawayRunsPerGameRank
     *
     * @return self
     */
    public function setBreakawayRunsPerGameRank(int $breakawayRunsPerGameRank) : self
    {
        $this->breakawayRunsPerGameRank = $breakawayRunsPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBreakawayRunsRank() : int
    {
        return $this->breakawayRunsRank;
    }
    /**
     * 
     *
     * @param int $breakawayRunsRank
     *
     * @return self
     */
    public function setBreakawayRunsRank(int $breakawayRunsRank) : self
    {
        $this->breakawayRunsRank = $breakawayRunsRank;
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
    public function getEvadedTacklesPerGame() : float
    {
        return $this->evadedTacklesPerGame;
    }
    /**
     * 
     *
     * @param float $evadedTacklesPerGame
     *
     * @return self
     */
    public function setEvadedTacklesPerGame(float $evadedTacklesPerGame) : self
    {
        $this->evadedTacklesPerGame = $evadedTacklesPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getEvadedTacklesPerGameRank() : int
    {
        return $this->evadedTacklesPerGameRank;
    }
    /**
     * 
     *
     * @param int $evadedTacklesPerGameRank
     *
     * @return self
     */
    public function setEvadedTacklesPerGameRank(int $evadedTacklesPerGameRank) : self
    {
        $this->evadedTacklesPerGameRank = $evadedTacklesPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getEvadedTacklesRank() : int
    {
        return $this->evadedTacklesRank;
    }
    /**
     * 
     *
     * @param int $evadedTacklesRank
     *
     * @return self
     */
    public function setEvadedTacklesRank(int $evadedTacklesRank) : self
    {
        $this->evadedTacklesRank = $evadedTacklesRank;
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
     * @return int
     */
    public function getJukeRateRank() : int
    {
        return $this->jukeRateRank;
    }
    /**
     * 
     *
     * @param int $jukeRateRank
     *
     * @return self
     */
    public function setJukeRateRank(int $jukeRateRank) : self
    {
        $this->jukeRateRank = $jukeRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getLightFrontCarryRate() : float
    {
        return $this->lightFrontCarryRate;
    }
    /**
     * 
     *
     * @param float $lightFrontCarryRate
     *
     * @return self
     */
    public function setLightFrontCarryRate(float $lightFrontCarryRate) : self
    {
        $this->lightFrontCarryRate = $lightFrontCarryRate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLightFrontCarryRateRank() : int
    {
        return $this->lightFrontCarryRateRank;
    }
    /**
     * 
     *
     * @param int $lightFrontCarryRateRank
     *
     * @return self
     */
    public function setLightFrontCarryRateRank(int $lightFrontCarryRateRank) : self
    {
        $this->lightFrontCarryRateRank = $lightFrontCarryRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getLightFrontYardsPerCarry() : float
    {
        return $this->lightFrontYardsPerCarry;
    }
    /**
     * 
     *
     * @param float $lightFrontYardsPerCarry
     *
     * @return self
     */
    public function setLightFrontYardsPerCarry(float $lightFrontYardsPerCarry) : self
    {
        $this->lightFrontYardsPerCarry = $lightFrontYardsPerCarry;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLightFrontYardsPerCarryRank() : int
    {
        return $this->lightFrontYardsPerCarryRank;
    }
    /**
     * 
     *
     * @param int $lightFrontYardsPerCarryRank
     *
     * @return self
     */
    public function setLightFrontYardsPerCarryRank(int $lightFrontYardsPerCarryRank) : self
    {
        $this->lightFrontYardsPerCarryRank = $lightFrontYardsPerCarryRank;
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
     * @return int
     */
    public function getOpportunityShareRank() : int
    {
        return $this->opportunityShareRank;
    }
    /**
     * 
     *
     * @param int $opportunityShareRank
     *
     * @return self
     */
    public function setOpportunityShareRank(int $opportunityShareRank) : self
    {
        $this->opportunityShareRank = $opportunityShareRank;
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
     * @return int
     */
    public function getRedZoneTouchesPerGameRank() : int
    {
        return $this->redZoneTouchesPerGameRank;
    }
    /**
     * 
     *
     * @param int $redZoneTouchesPerGameRank
     *
     * @return self
     */
    public function setRedZoneTouchesPerGameRank(int $redZoneTouchesPerGameRank) : self
    {
        $this->redZoneTouchesPerGameRank = $redZoneTouchesPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRedZoneTouchesRank() : int
    {
        return $this->redZoneTouchesRank;
    }
    /**
     * 
     *
     * @param int $redZoneTouchesRank
     *
     * @return self
     */
    public function setRedZoneTouchesRank(int $redZoneTouchesRank) : self
    {
        $this->redZoneTouchesRank = $redZoneTouchesRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRunBlockingEfficiency() : float
    {
        return $this->runBlockingEfficiency;
    }
    /**
     * 
     *
     * @param float $runBlockingEfficiency
     *
     * @return self
     */
    public function setRunBlockingEfficiency(float $runBlockingEfficiency) : self
    {
        $this->runBlockingEfficiency = $runBlockingEfficiency;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRunBlockingEfficiencyRank() : int
    {
        return $this->runBlockingEfficiencyRank;
    }
    /**
     * 
     *
     * @param int $runBlockingEfficiencyRank
     *
     * @return self
     */
    public function setRunBlockingEfficiencyRank(int $runBlockingEfficiencyRank) : self
    {
        $this->runBlockingEfficiencyRank = $runBlockingEfficiencyRank;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRushYardsPerGameRank() : int
    {
        return $this->rushYardsPerGameRank;
    }
    /**
     * 
     *
     * @param int $rushYardsPerGameRank
     *
     * @return self
     */
    public function setRushYardsPerGameRank(int $rushYardsPerGameRank) : self
    {
        $this->rushYardsPerGameRank = $rushYardsPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getShotgunCarryRate() : float
    {
        return $this->shotgunCarryRate;
    }
    /**
     * 
     *
     * @param float $shotgunCarryRate
     *
     * @return self
     */
    public function setShotgunCarryRate(float $shotgunCarryRate) : self
    {
        $this->shotgunCarryRate = $shotgunCarryRate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getShotgunCarryRateRank() : int
    {
        return $this->shotgunCarryRateRank;
    }
    /**
     * 
     *
     * @param int $shotgunCarryRateRank
     *
     * @return self
     */
    public function setShotgunCarryRateRank(int $shotgunCarryRateRank) : self
    {
        $this->shotgunCarryRateRank = $shotgunCarryRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getShotgunYardsPerCarry() : float
    {
        return $this->shotgunYardsPerCarry;
    }
    /**
     * 
     *
     * @param float $shotgunYardsPerCarry
     *
     * @return self
     */
    public function setShotgunYardsPerCarry(float $shotgunYardsPerCarry) : self
    {
        $this->shotgunYardsPerCarry = $shotgunYardsPerCarry;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getShotgunYardsPerCarryRank() : int
    {
        return $this->shotgunYardsPerCarryRank;
    }
    /**
     * 
     *
     * @param int $shotgunYardsPerCarryRank
     *
     * @return self
     */
    public function setShotgunYardsPerCarryRank(int $shotgunYardsPerCarryRank) : self
    {
        $this->shotgunYardsPerCarryRank = $shotgunYardsPerCarryRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRedZoneOpportunityShare() : float
    {
        return $this->redZoneOpportunityShare;
    }
    /**
     * 
     *
     * @param float $redZoneOpportunityShare
     *
     * @return self
     */
    public function setRedZoneOpportunityShare(float $redZoneOpportunityShare) : self
    {
        $this->redZoneOpportunityShare = $redZoneOpportunityShare;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRedZoneOpportunityShareRank() : int
    {
        return $this->redZoneOpportunityShareRank;
    }
    /**
     * 
     *
     * @param int $redZoneOpportunityShareRank
     *
     * @return self
     */
    public function setRedZoneOpportunityShareRank(int $redZoneOpportunityShareRank) : self
    {
        $this->redZoneOpportunityShareRank = $redZoneOpportunityShareRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRedZoneTDConversionRate() : float
    {
        return $this->redZoneTDConversionRate;
    }
    /**
     * 
     *
     * @param float $redZoneTDConversionRate
     *
     * @return self
     */
    public function setRedZoneTDConversionRate(float $redZoneTDConversionRate) : self
    {
        $this->redZoneTDConversionRate = $redZoneTDConversionRate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRedZoneTDConversionRateRank() : int
    {
        return $this->redZoneTDConversionRateRank;
    }
    /**
     * 
     *
     * @param int $redZoneTDConversionRateRank
     *
     * @return self
     */
    public function setRedZoneTDConversionRateRank(int $redZoneTDConversionRateRank) : self
    {
        $this->redZoneTDConversionRateRank = $redZoneTDConversionRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getStackedFrontCarryRate() : float
    {
        return $this->stackedFrontCarryRate;
    }
    /**
     * 
     *
     * @param float $stackedFrontCarryRate
     *
     * @return self
     */
    public function setStackedFrontCarryRate(float $stackedFrontCarryRate) : self
    {
        $this->stackedFrontCarryRate = $stackedFrontCarryRate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStackedFrontCarryRateRank() : int
    {
        return $this->stackedFrontCarryRateRank;
    }
    /**
     * 
     *
     * @param int $stackedFrontCarryRateRank
     *
     * @return self
     */
    public function setStackedFrontCarryRateRank(int $stackedFrontCarryRateRank) : self
    {
        $this->stackedFrontCarryRateRank = $stackedFrontCarryRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getStackedFrontYardsPerCarry() : float
    {
        return $this->stackedFrontYardsPerCarry;
    }
    /**
     * 
     *
     * @param float $stackedFrontYardsPerCarry
     *
     * @return self
     */
    public function setStackedFrontYardsPerCarry(float $stackedFrontYardsPerCarry) : self
    {
        $this->stackedFrontYardsPerCarry = $stackedFrontYardsPerCarry;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStackedFrontYardsPerCarryRank() : int
    {
        return $this->stackedFrontYardsPerCarryRank;
    }
    /**
     * 
     *
     * @param int $stackedFrontYardsPerCarryRank
     *
     * @return self
     */
    public function setStackedFrontYardsPerCarryRank(int $stackedFrontYardsPerCarryRank) : self
    {
        $this->stackedFrontYardsPerCarryRank = $stackedFrontYardsPerCarryRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getStuffedRuns() : float
    {
        return $this->stuffedRuns;
    }
    /**
     * 
     *
     * @param float $stuffedRuns
     *
     * @return self
     */
    public function setStuffedRuns(float $stuffedRuns) : self
    {
        $this->stuffedRuns = $stuffedRuns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStuffedRunsRank() : int
    {
        return $this->stuffedRunsRank;
    }
    /**
     * 
     *
     * @param int $stuffedRunsRank
     *
     * @return self
     */
    public function setStuffedRunsRank(int $stuffedRunsRank) : self
    {
        $this->stuffedRunsRank = $stuffedRunsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getStuffedRunRate() : float
    {
        return $this->stuffedRunRate;
    }
    /**
     * 
     *
     * @param float $stuffedRunRate
     *
     * @return self
     */
    public function setStuffedRunRate(float $stuffedRunRate) : self
    {
        $this->stuffedRunRate = $stuffedRunRate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStuffedRunRateRank() : int
    {
        return $this->stuffedRunRateRank;
    }
    /**
     * 
     *
     * @param int $stuffedRunRateRank
     *
     * @return self
     */
    public function setStuffedRunRateRank(int $stuffedRunRateRank) : self
    {
        $this->stuffedRunRateRank = $stuffedRunRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTeamRunPlays() : float
    {
        return $this->teamRunPlays;
    }
    /**
     * 
     *
     * @param float $teamRunPlays
     *
     * @return self
     */
    public function setTeamRunPlays(float $teamRunPlays) : self
    {
        $this->teamRunPlays = $teamRunPlays;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTeamRunPlaysRank() : int
    {
        return $this->teamRunPlaysRank;
    }
    /**
     * 
     *
     * @param int $teamRunPlaysRank
     *
     * @return self
     */
    public function setTeamRunPlaysRank(int $teamRunPlaysRank) : self
    {
        $this->teamRunPlaysRank = $teamRunPlaysRank;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotalYardsPerGameRank() : int
    {
        return $this->totalYardsPerGameRank;
    }
    /**
     * 
     *
     * @param int $totalYardsPerGameRank
     *
     * @return self
     */
    public function setTotalYardsPerGameRank(int $totalYardsPerGameRank) : self
    {
        $this->totalYardsPerGameRank = $totalYardsPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotalYardsRank() : int
    {
        return $this->totalYardsRank;
    }
    /**
     * 
     *
     * @param int $totalYardsRank
     *
     * @return self
     */
    public function setTotalYardsRank(int $totalYardsRank) : self
    {
        $this->totalYardsRank = $totalYardsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTrueYardsPerCarry() : float
    {
        return $this->trueYardsPerCarry;
    }
    /**
     * 
     *
     * @param float $trueYardsPerCarry
     *
     * @return self
     */
    public function setTrueYardsPerCarry(float $trueYardsPerCarry) : self
    {
        $this->trueYardsPerCarry = $trueYardsPerCarry;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTrueYardsPerCarryRank() : int
    {
        return $this->trueYardsPerCarryRank;
    }
    /**
     * 
     *
     * @param int $trueYardsPerCarryRank
     *
     * @return self
     */
    public function setTrueYardsPerCarryRank(int $trueYardsPerCarryRank) : self
    {
        $this->trueYardsPerCarryRank = $trueYardsPerCarryRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getUnderCenterCarryRate() : float
    {
        return $this->underCenterCarryRate;
    }
    /**
     * 
     *
     * @param float $underCenterCarryRate
     *
     * @return self
     */
    public function setUnderCenterCarryRate(float $underCenterCarryRate) : self
    {
        $this->underCenterCarryRate = $underCenterCarryRate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUnderCenterCarryRateRank() : int
    {
        return $this->underCenterCarryRateRank;
    }
    /**
     * 
     *
     * @param int $underCenterCarryRateRank
     *
     * @return self
     */
    public function setUnderCenterCarryRateRank(int $underCenterCarryRateRank) : self
    {
        $this->underCenterCarryRateRank = $underCenterCarryRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getUnderCenterYardsPerCarry() : float
    {
        return $this->underCenterYardsPerCarry;
    }
    /**
     * 
     *
     * @param float $underCenterYardsPerCarry
     *
     * @return self
     */
    public function setUnderCenterYardsPerCarry(float $underCenterYardsPerCarry) : self
    {
        $this->underCenterYardsPerCarry = $underCenterYardsPerCarry;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUnderCenterYardsPerCarryRank() : int
    {
        return $this->underCenterYardsPerCarryRank;
    }
    /**
     * 
     *
     * @param int $underCenterYardsPerCarryRank
     *
     * @return self
     */
    public function setUnderCenterYardsPerCarryRank(int $underCenterYardsPerCarryRank) : self
    {
        $this->underCenterYardsPerCarryRank = $underCenterYardsPerCarryRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getWeightedOpportunities() : float
    {
        return $this->weightedOpportunities;
    }
    /**
     * 
     *
     * @param float $weightedOpportunities
     *
     * @return self
     */
    public function setWeightedOpportunities(float $weightedOpportunities) : self
    {
        $this->weightedOpportunities = $weightedOpportunities;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getWeightedOpportunitiesRank() : int
    {
        return $this->weightedOpportunitiesRank;
    }
    /**
     * 
     *
     * @param int $weightedOpportunitiesRank
     *
     * @return self
     */
    public function setWeightedOpportunitiesRank(int $weightedOpportunitiesRank) : self
    {
        $this->weightedOpportunitiesRank = $weightedOpportunitiesRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getWeightedOpportunitiesPerGame() : float
    {
        return $this->weightedOpportunitiesPerGame;
    }
    /**
     * 
     *
     * @param float $weightedOpportunitiesPerGame
     *
     * @return self
     */
    public function setWeightedOpportunitiesPerGame(float $weightedOpportunitiesPerGame) : self
    {
        $this->weightedOpportunitiesPerGame = $weightedOpportunitiesPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getWeightedOpportunitiesPerGameRank() : int
    {
        return $this->weightedOpportunitiesPerGameRank;
    }
    /**
     * 
     *
     * @param int $weightedOpportunitiesPerGameRank
     *
     * @return self
     */
    public function setWeightedOpportunitiesPerGameRank(int $weightedOpportunitiesPerGameRank) : self
    {
        $this->weightedOpportunitiesPerGameRank = $weightedOpportunitiesPerGameRank;
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
    public function getYardsCreatedPerGame() : float
    {
        return $this->yardsCreatedPerGame;
    }
    /**
     * 
     *
     * @param float $yardsCreatedPerGame
     *
     * @return self
     */
    public function setYardsCreatedPerGame(float $yardsCreatedPerGame) : self
    {
        $this->yardsCreatedPerGame = $yardsCreatedPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getYardsCreatedPerGameRank() : int
    {
        return $this->yardsCreatedPerGameRank;
    }
    /**
     * 
     *
     * @param int $yardsCreatedPerGameRank
     *
     * @return self
     */
    public function setYardsCreatedPerGameRank(int $yardsCreatedPerGameRank) : self
    {
        $this->yardsCreatedPerGameRank = $yardsCreatedPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getYardsCreatedPerCarry() : float
    {
        return $this->yardsCreatedPerCarry;
    }
    /**
     * 
     *
     * @param float $yardsCreatedPerCarry
     *
     * @return self
     */
    public function setYardsCreatedPerCarry(float $yardsCreatedPerCarry) : self
    {
        $this->yardsCreatedPerCarry = $yardsCreatedPerCarry;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getYardsCreatedPerCarryRank() : int
    {
        return $this->yardsCreatedPerCarryRank;
    }
    /**
     * 
     *
     * @param int $yardsCreatedPerCarryRank
     *
     * @return self
     */
    public function setYardsCreatedPerCarryRank(int $yardsCreatedPerCarryRank) : self
    {
        $this->yardsCreatedPerCarryRank = $yardsCreatedPerCarryRank;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getYardsCreatedRank() : int
    {
        return $this->yardsCreatedRank;
    }
    /**
     * 
     *
     * @param int $yardsCreatedRank
     *
     * @return self
     */
    public function setYardsCreatedRank(int $yardsCreatedRank) : self
    {
        $this->yardsCreatedRank = $yardsCreatedRank;
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
     * @return int
     */
    public function getYardsPerCarryRank() : int
    {
        return $this->yardsPerCarryRank;
    }
    /**
     * 
     *
     * @param int $yardsPerCarryRank
     *
     * @return self
     */
    public function setYardsPerCarryRank(int $yardsPerCarryRank) : self
    {
        $this->yardsPerCarryRank = $yardsPerCarryRank;
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
    public function getYardsPerRouteRun() : float
    {
        return $this->yardsPerRouteRun;
    }
    /**
     * 
     *
     * @param float $yardsPerRouteRun
     *
     * @return self
     */
    public function setYardsPerRouteRun(float $yardsPerRouteRun) : self
    {
        $this->yardsPerRouteRun = $yardsPerRouteRun;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getYardsPerRouteRunRank() : int
    {
        return $this->yardsPerRouteRunRank;
    }
    /**
     * 
     *
     * @param int $yardsPerRouteRunRank
     *
     * @return self
     */
    public function setYardsPerRouteRunRank(int $yardsPerRouteRunRank) : self
    {
        $this->yardsPerRouteRunRank = $yardsPerRouteRunRank;
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
     * @return int
     */
    public function getYardsPerTouchRank() : int
    {
        return $this->yardsPerTouchRank;
    }
    /**
     * 
     *
     * @param int $yardsPerTouchRank
     *
     * @return self
     */
    public function setYardsPerTouchRank(int $yardsPerTouchRank) : self
    {
        $this->yardsPerTouchRank = $yardsPerTouchRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAirYardsPerReception() : float
    {
        return $this->airYardsPerReception;
    }
    /**
     * 
     *
     * @param float $airYardsPerReception
     *
     * @return self
     */
    public function setAirYardsPerReception(float $airYardsPerReception) : self
    {
        $this->airYardsPerReception = $airYardsPerReception;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAirYardsPerTarget() : float
    {
        return $this->airYardsPerTarget;
    }
    /**
     * 
     *
     * @param float $airYardsPerTarget
     *
     * @return self
     */
    public function setAirYardsPerTarget(float $airYardsPerTarget) : self
    {
        $this->airYardsPerTarget = $airYardsPerTarget;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCushion() : float
    {
        return $this->cushion;
    }
    /**
     * 
     *
     * @param float $cushion
     *
     * @return self
     */
    public function setCushion(float $cushion) : self
    {
        $this->cushion = $cushion;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCushionRank() : int
    {
        return $this->cushionRank;
    }
    /**
     * 
     *
     * @param int $cushionRank
     *
     * @return self
     */
    public function setCushionRank(int $cushionRank) : self
    {
        $this->cushionRank = $cushionRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAverageTargetDistance() : float
    {
        return $this->averageTargetDistance;
    }
    /**
     * 
     *
     * @param float $averageTargetDistance
     *
     * @return self
     */
    public function setAverageTargetDistance(float $averageTargetDistance) : self
    {
        $this->averageTargetDistance = $averageTargetDistance;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAverageTargetDistanceRank() : int
    {
        return $this->averageTargetDistanceRank;
    }
    /**
     * 
     *
     * @param int $averageTargetDistanceRank
     *
     * @return self
     */
    public function setAverageTargetDistanceRank(int $averageTargetDistanceRank) : self
    {
        $this->averageTargetDistanceRank = $averageTargetDistanceRank;
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
    public function getCatchableTargetsPerGame() : float
    {
        return $this->catchableTargetsPerGame;
    }
    /**
     * 
     *
     * @param float $catchableTargetsPerGame
     *
     * @return self
     */
    public function setCatchableTargetsPerGame(float $catchableTargetsPerGame) : self
    {
        $this->catchableTargetsPerGame = $catchableTargetsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCatchableTargetsRank() : int
    {
        return $this->catchableTargetsRank;
    }
    /**
     * 
     *
     * @param int $catchableTargetsRank
     *
     * @return self
     */
    public function setCatchableTargetsRank(int $catchableTargetsRank) : self
    {
        $this->catchableTargetsRank = $catchableTargetsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getContestedCatchConversionRate() : float
    {
        return $this->contestedCatchConversionRate;
    }
    /**
     * 
     *
     * @param float $contestedCatchConversionRate
     *
     * @return self
     */
    public function setContestedCatchConversionRate(float $contestedCatchConversionRate) : self
    {
        $this->contestedCatchConversionRate = $contestedCatchConversionRate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getContestedCatchConversionRateRank() : int
    {
        return $this->contestedCatchConversionRateRank;
    }
    /**
     * 
     *
     * @param int $contestedCatchConversionRateRank
     *
     * @return self
     */
    public function setContestedCatchConversionRateRank(int $contestedCatchConversionRateRank) : self
    {
        $this->contestedCatchConversionRateRank = $contestedCatchConversionRateRank;
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
     * @return int
     */
    public function getHogRateRank() : int
    {
        return $this->hogRateRank;
    }
    /**
     * 
     *
     * @param int $hogRateRank
     *
     * @return self
     */
    public function setHogRateRank(int $hogRateRank) : self
    {
        $this->hogRateRank = $hogRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPassSnapsRank() : int
    {
        return $this->passSnapsRank;
    }
    /**
     * 
     *
     * @param int $passSnapsRank
     *
     * @return self
     */
    public function setPassSnapsRank(int $passSnapsRank) : self
    {
        $this->passSnapsRank = $passSnapsRank;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRunSnapsRank() : int
    {
        return $this->runSnapsRank;
    }
    /**
     * 
     *
     * @param int $runSnapsRank
     *
     * @return self
     */
    public function setRunSnapsRank(int $runSnapsRank) : self
    {
        $this->runSnapsRank = $runSnapsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSlotCatchRate() : float
    {
        return $this->slotCatchRate;
    }
    /**
     * 
     *
     * @param float $slotCatchRate
     *
     * @return self
     */
    public function setSlotCatchRate(float $slotCatchRate) : self
    {
        $this->slotCatchRate = $slotCatchRate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSlotCatchRateRank() : int
    {
        return $this->slotCatchRateRank;
    }
    /**
     * 
     *
     * @param int $slotCatchRateRank
     *
     * @return self
     */
    public function setSlotCatchRateRank(int $slotCatchRateRank) : self
    {
        $this->slotCatchRateRank = $slotCatchRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSlotSnapsRank() : int
    {
        return $this->slotSnapsRank;
    }
    /**
     * 
     *
     * @param int $slotSnapsRank
     *
     * @return self
     */
    public function setSlotSnapsRank(int $slotSnapsRank) : self
    {
        $this->slotSnapsRank = $slotSnapsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSnapweighedGameScript() : float
    {
        return $this->snapweighedGameScript;
    }
    /**
     * 
     *
     * @param float $snapweighedGameScript
     *
     * @return self
     */
    public function setSnapweighedGameScript(float $snapweighedGameScript) : self
    {
        $this->snapweighedGameScript = $snapweighedGameScript;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSnapweighedGameScriptRank() : int
    {
        return $this->snapweighedGameScriptRank;
    }
    /**
     * 
     *
     * @param int $snapweighedGameScriptRank
     *
     * @return self
     */
    public function setSnapweighedGameScriptRank(int $snapweighedGameScriptRank) : self
    {
        $this->snapweighedGameScriptRank = $snapweighedGameScriptRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTargetPremium() : float
    {
        return $this->targetPremium;
    }
    /**
     * 
     *
     * @param float $targetPremium
     *
     * @return self
     */
    public function setTargetPremium(float $targetPremium) : self
    {
        $this->targetPremium = $targetPremium;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTargetPremiumRank() : int
    {
        return $this->targetPremiumRank;
    }
    /**
     * 
     *
     * @param int $targetPremiumRank
     *
     * @return self
     */
    public function setTargetPremiumRank(int $targetPremiumRank) : self
    {
        $this->targetPremiumRank = $targetPremiumRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTargetQualityRating() : float
    {
        return $this->targetQualityRating;
    }
    /**
     * 
     *
     * @param float $targetQualityRating
     *
     * @return self
     */
    public function setTargetQualityRating(float $targetQualityRating) : self
    {
        $this->targetQualityRating = $targetQualityRating;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTargetQualityRatingRank() : int
    {
        return $this->targetQualityRatingRank;
    }
    /**
     * 
     *
     * @param int $targetQualityRatingRank
     *
     * @return self
     */
    public function setTargetQualityRatingRank(int $targetQualityRatingRank) : self
    {
        $this->targetQualityRatingRank = $targetQualityRatingRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTargetAccuracy() : float
    {
        return $this->targetAccuracy;
    }
    /**
     * 
     *
     * @param float $targetAccuracy
     *
     * @return self
     */
    public function setTargetAccuracy(float $targetAccuracy) : self
    {
        $this->targetAccuracy = $targetAccuracy;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTargetAccuracyRank() : int
    {
        return $this->targetAccuracyRank;
    }
    /**
     * 
     *
     * @param int $targetAccuracyRank
     *
     * @return self
     */
    public function setTargetAccuracyRank(int $targetAccuracyRank) : self
    {
        $this->targetAccuracyRank = $targetAccuracyRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTargetDistance() : float
    {
        return $this->targetDistance;
    }
    /**
     * 
     *
     * @param float $targetDistance
     *
     * @return self
     */
    public function setTargetDistance(float $targetDistance) : self
    {
        $this->targetDistance = $targetDistance;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTargetDistancePerGame() : float
    {
        return $this->targetDistancePerGame;
    }
    /**
     * 
     *
     * @param float $targetDistancePerGame
     *
     * @return self
     */
    public function setTargetDistancePerGame(float $targetDistancePerGame) : self
    {
        $this->targetDistancePerGame = $targetDistancePerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTargetDistanceRank() : int
    {
        return $this->targetDistanceRank;
    }
    /**
     * 
     *
     * @param int $targetDistanceRank
     *
     * @return self
     */
    public function setTargetDistanceRank(int $targetDistanceRank) : self
    {
        $this->targetDistanceRank = $targetDistanceRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTrueCatchRate() : float
    {
        return $this->trueCatchRate;
    }
    /**
     * 
     *
     * @param float $trueCatchRate
     *
     * @return self
     */
    public function setTrueCatchRate(float $trueCatchRate) : self
    {
        $this->trueCatchRate = $trueCatchRate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTrueCatchRateRank() : int
    {
        return $this->trueCatchRateRank;
    }
    /**
     * 
     *
     * @param int $trueCatchRateRank
     *
     * @return self
     */
    public function setTrueCatchRateRank(int $trueCatchRateRank) : self
    {
        $this->trueCatchRateRank = $trueCatchRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getUncatchableTargets() : float
    {
        return $this->uncatchableTargets;
    }
    /**
     * 
     *
     * @param float $uncatchableTargets
     *
     * @return self
     */
    public function setUncatchableTargets(float $uncatchableTargets) : self
    {
        $this->uncatchableTargets = $uncatchableTargets;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getUncatchableTargetsGame() : float
    {
        return $this->uncatchableTargetsGame;
    }
    /**
     * 
     *
     * @param float $uncatchableTargetsGame
     *
     * @return self
     */
    public function setUncatchableTargetsGame(float $uncatchableTargetsGame) : self
    {
        $this->uncatchableTargetsGame = $uncatchableTargetsGame;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getYardsPerReceptionRank() : int
    {
        return $this->yardsPerReceptionRank;
    }
    /**
     * 
     *
     * @param int $yardsPerReceptionRank
     *
     * @return self
     */
    public function setYardsPerReceptionRank(int $yardsPerReceptionRank) : self
    {
        $this->yardsPerReceptionRank = $yardsPerReceptionRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getYardsPerPassRoute() : float
    {
        return $this->yardsPerPassRoute;
    }
    /**
     * 
     *
     * @param float $yardsPerPassRoute
     *
     * @return self
     */
    public function setYardsPerPassRoute(float $yardsPerPassRoute) : self
    {
        $this->yardsPerPassRoute = $yardsPerPassRoute;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getYardsPerPassRouteRank() : int
    {
        return $this->yardsPerPassRouteRank;
    }
    /**
     * 
     *
     * @param int $yardsPerPassRouteRank
     *
     * @return self
     */
    public function setYardsPerPassRouteRank(int $yardsPerPassRouteRank) : self
    {
        $this->yardsPerPassRouteRank = $yardsPerPassRouteRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTeamDefensiveSnaps() : float
    {
        return $this->teamDefensiveSnaps;
    }
    /**
     * 
     *
     * @param float $teamDefensiveSnaps
     *
     * @return self
     */
    public function setTeamDefensiveSnaps(float $teamDefensiveSnaps) : self
    {
        $this->teamDefensiveSnaps = $teamDefensiveSnaps;
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
     * @return int
     */
    public function getSoloTacklesRank() : int
    {
        return $this->soloTacklesRank;
    }
    /**
     * 
     *
     * @param int $soloTacklesRank
     *
     * @return self
     */
    public function setSoloTacklesRank(int $soloTacklesRank) : self
    {
        $this->soloTacklesRank = $soloTacklesRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSoloTacklesPerGame() : float
    {
        return $this->soloTacklesPerGame;
    }
    /**
     * 
     *
     * @param float $soloTacklesPerGame
     *
     * @return self
     */
    public function setSoloTacklesPerGame(float $soloTacklesPerGame) : self
    {
        $this->soloTacklesPerGame = $soloTacklesPerGame;
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
     * @return int
     */
    public function getAssistedTacklesRank() : int
    {
        return $this->assistedTacklesRank;
    }
    /**
     * 
     *
     * @param int $assistedTacklesRank
     *
     * @return self
     */
    public function setAssistedTacklesRank(int $assistedTacklesRank) : self
    {
        $this->assistedTacklesRank = $assistedTacklesRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAssistedTacklesPerGame() : float
    {
        return $this->assistedTacklesPerGame;
    }
    /**
     * 
     *
     * @param float $assistedTacklesPerGame
     *
     * @return self
     */
    public function setAssistedTacklesPerGame(float $assistedTacklesPerGame) : self
    {
        $this->assistedTacklesPerGame = $assistedTacklesPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalTackles() : float
    {
        return $this->totalTackles;
    }
    /**
     * 
     *
     * @param float $totalTackles
     *
     * @return self
     */
    public function setTotalTackles(float $totalTackles) : self
    {
        $this->totalTackles = $totalTackles;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotalTacklesRank() : int
    {
        return $this->totalTacklesRank;
    }
    /**
     * 
     *
     * @param int $totalTacklesRank
     *
     * @return self
     */
    public function setTotalTacklesRank(int $totalTacklesRank) : self
    {
        $this->totalTacklesRank = $totalTacklesRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalTacklesPerGame() : float
    {
        return $this->totalTacklesPerGame;
    }
    /**
     * 
     *
     * @param float $totalTacklesPerGame
     *
     * @return self
     */
    public function setTotalTacklesPerGame(float $totalTacklesPerGame) : self
    {
        $this->totalTacklesPerGame = $totalTacklesPerGame;
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
     * @return int
     */
    public function getSacksRank() : int
    {
        return $this->sacksRank;
    }
    /**
     * 
     *
     * @param int $sacksRank
     *
     * @return self
     */
    public function setSacksRank(int $sacksRank) : self
    {
        $this->sacksRank = $sacksRank;
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
    public function getForcedFumbles() : float
    {
        return $this->forcedFumbles;
    }
    /**
     * 
     *
     * @param float $forcedFumbles
     *
     * @return self
     */
    public function setForcedFumbles(float $forcedFumbles) : self
    {
        $this->forcedFumbles = $forcedFumbles;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getForcedFumblesRank() : int
    {
        return $this->forcedFumblesRank;
    }
    /**
     * 
     *
     * @param int $forcedFumblesRank
     *
     * @return self
     */
    public function setForcedFumblesRank(int $forcedFumblesRank) : self
    {
        $this->forcedFumblesRank = $forcedFumblesRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFumbleRecoveries() : float
    {
        return $this->fumbleRecoveries;
    }
    /**
     * 
     *
     * @param float $fumbleRecoveries
     *
     * @return self
     */
    public function setFumbleRecoveries(float $fumbleRecoveries) : self
    {
        $this->fumbleRecoveries = $fumbleRecoveries;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFumbleRecoveriesRank() : int
    {
        return $this->fumbleRecoveriesRank;
    }
    /**
     * 
     *
     * @param int $fumbleRecoveriesRank
     *
     * @return self
     */
    public function setFumbleRecoveriesRank(int $fumbleRecoveriesRank) : self
    {
        $this->fumbleRecoveriesRank = $fumbleRecoveriesRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBattedPasses() : float
    {
        return $this->battedPasses;
    }
    /**
     * 
     *
     * @param float $battedPasses
     *
     * @return self
     */
    public function setBattedPasses(float $battedPasses) : self
    {
        $this->battedPasses = $battedPasses;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBattedPassesRank() : int
    {
        return $this->battedPassesRank;
    }
    /**
     * 
     *
     * @param int $battedPassesRank
     *
     * @return self
     */
    public function setBattedPassesRank(int $battedPassesRank) : self
    {
        $this->battedPassesRank = $battedPassesRank;
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
     * @return int
     */
    public function getTacklesForLossRank() : int
    {
        return $this->tacklesForLossRank;
    }
    /**
     * 
     *
     * @param int $tacklesForLossRank
     *
     * @return self
     */
    public function setTacklesForLossRank(int $tacklesForLossRank) : self
    {
        $this->tacklesForLossRank = $tacklesForLossRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRunStuffs() : float
    {
        return $this->runStuffs;
    }
    /**
     * 
     *
     * @param float $runStuffs
     *
     * @return self
     */
    public function setRunStuffs(float $runStuffs) : self
    {
        $this->runStuffs = $runStuffs;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRunStuffsRank() : int
    {
        return $this->runStuffsRank;
    }
    /**
     * 
     *
     * @param int $runStuffsRank
     *
     * @return self
     */
    public function setRunStuffsRank(int $runStuffsRank) : self
    {
        $this->runStuffsRank = $runStuffsRank;
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
     * @return int
     */
    public function getPassBreakupsRank() : int
    {
        return $this->passBreakupsRank;
    }
    /**
     * 
     *
     * @param int $passBreakupsRank
     *
     * @return self
     */
    public function setPassBreakupsRank(int $passBreakupsRank) : self
    {
        $this->passBreakupsRank = $passBreakupsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPassBreakupsPerGame() : float
    {
        return $this->passBreakupsPerGame;
    }
    /**
     * 
     *
     * @param float $passBreakupsPerGame
     *
     * @return self
     */
    public function setPassBreakupsPerGame(float $passBreakupsPerGame) : self
    {
        $this->passBreakupsPerGame = $passBreakupsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPassBreakupsPerGameRank() : int
    {
        return $this->passBreakupsPerGameRank;
    }
    /**
     * 
     *
     * @param int $passBreakupsPerGameRank
     *
     * @return self
     */
    public function setPassBreakupsPerGameRank(int $passBreakupsPerGameRank) : self
    {
        $this->passBreakupsPerGameRank = $passBreakupsPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPassBreakupsPerTarget() : float
    {
        return $this->passBreakupsPerTarget;
    }
    /**
     * 
     *
     * @param float $passBreakupsPerTarget
     *
     * @return self
     */
    public function setPassBreakupsPerTarget(float $passBreakupsPerTarget) : self
    {
        $this->passBreakupsPerTarget = $passBreakupsPerTarget;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPassBreakupsPerTargetRank() : int
    {
        return $this->passBreakupsPerTargetRank;
    }
    /**
     * 
     *
     * @param int $passBreakupsPerTargetRank
     *
     * @return self
     */
    public function setPassBreakupsPerTargetRank(int $passBreakupsPerTargetRank) : self
    {
        $this->passBreakupsPerTargetRank = $passBreakupsPerTargetRank;
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
     * @return int
     */
    public function getInterceptionsRank() : int
    {
        return $this->interceptionsRank;
    }
    /**
     * 
     *
     * @param int $interceptionsRank
     *
     * @return self
     */
    public function setInterceptionsRank(int $interceptionsRank) : self
    {
        $this->interceptionsRank = $interceptionsRank;
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
     * @return int
     */
    public function getTargetsAllowedRank() : int
    {
        return $this->targetsAllowedRank;
    }
    /**
     * 
     *
     * @param int $targetsAllowedRank
     *
     * @return self
     */
    public function setTargetsAllowedRank(int $targetsAllowedRank) : self
    {
        $this->targetsAllowedRank = $targetsAllowedRank;
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
     * @return int
     */
    public function getReceptionsAllowedRank() : int
    {
        return $this->receptionsAllowedRank;
    }
    /**
     * 
     *
     * @param int $receptionsAllowedRank
     *
     * @return self
     */
    public function setReceptionsAllowedRank(int $receptionsAllowedRank) : self
    {
        $this->receptionsAllowedRank = $receptionsAllowedRank;
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
     * @return int
     */
    public function getYardsAllowedRank() : int
    {
        return $this->yardsAllowedRank;
    }
    /**
     * 
     *
     * @param int $yardsAllowedRank
     *
     * @return self
     */
    public function setYardsAllowedRank(int $yardsAllowedRank) : self
    {
        $this->yardsAllowedRank = $yardsAllowedRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getYardsAllowedPerGame() : float
    {
        return $this->yardsAllowedPerGame;
    }
    /**
     * 
     *
     * @param float $yardsAllowedPerGame
     *
     * @return self
     */
    public function setYardsAllowedPerGame(float $yardsAllowedPerGame) : self
    {
        $this->yardsAllowedPerGame = $yardsAllowedPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getYardsAllowedPerGameRank() : int
    {
        return $this->yardsAllowedPerGameRank;
    }
    /**
     * 
     *
     * @param int $yardsAllowedPerGameRank
     *
     * @return self
     */
    public function setYardsAllowedPerGameRank(int $yardsAllowedPerGameRank) : self
    {
        $this->yardsAllowedPerGameRank = $yardsAllowedPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getYardsPerReceptionAllowed() : float
    {
        return $this->yardsPerReceptionAllowed;
    }
    /**
     * 
     *
     * @param float $yardsPerReceptionAllowed
     *
     * @return self
     */
    public function setYardsPerReceptionAllowed(float $yardsPerReceptionAllowed) : self
    {
        $this->yardsPerReceptionAllowed = $yardsPerReceptionAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getYardsPerReceptionAllowedRank() : int
    {
        return $this->yardsPerReceptionAllowedRank;
    }
    /**
     * 
     *
     * @param int $yardsPerReceptionAllowedRank
     *
     * @return self
     */
    public function setYardsPerReceptionAllowedRank(int $yardsPerReceptionAllowedRank) : self
    {
        $this->yardsPerReceptionAllowedRank = $yardsPerReceptionAllowedRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCatchRateAllowed() : float
    {
        return $this->catchRateAllowed;
    }
    /**
     * 
     *
     * @param float $catchRateAllowed
     *
     * @return self
     */
    public function setCatchRateAllowed(float $catchRateAllowed) : self
    {
        $this->catchRateAllowed = $catchRateAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCatchRateAllowedRank() : int
    {
        return $this->catchRateAllowedRank;
    }
    /**
     * 
     *
     * @param int $catchRateAllowedRank
     *
     * @return self
     */
    public function setCatchRateAllowedRank(int $catchRateAllowedRank) : self
    {
        $this->catchRateAllowedRank = $catchRateAllowedRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPasserRatingAllowed() : float
    {
        return $this->passerRatingAllowed;
    }
    /**
     * 
     *
     * @param float $passerRatingAllowed
     *
     * @return self
     */
    public function setPasserRatingAllowed(float $passerRatingAllowed) : self
    {
        $this->passerRatingAllowed = $passerRatingAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPasserRatingAllowedRank() : int
    {
        return $this->passerRatingAllowedRank;
    }
    /**
     * 
     *
     * @param int $passerRatingAllowedRank
     *
     * @return self
     */
    public function setPasserRatingAllowedRank(int $passerRatingAllowedRank) : self
    {
        $this->passerRatingAllowedRank = $passerRatingAllowedRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTouchdownsAllowed() : float
    {
        return $this->touchdownsAllowed;
    }
    /**
     * 
     *
     * @param float $touchdownsAllowed
     *
     * @return self
     */
    public function setTouchdownsAllowed(float $touchdownsAllowed) : self
    {
        $this->touchdownsAllowed = $touchdownsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTouchdownsAllowedRank() : int
    {
        return $this->touchdownsAllowedRank;
    }
    /**
     * 
     *
     * @param int $touchdownsAllowedRank
     *
     * @return self
     */
    public function setTouchdownsAllowedRank(int $touchdownsAllowedRank) : self
    {
        $this->touchdownsAllowedRank = $touchdownsAllowedRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getInterceptionsPerTarget() : float
    {
        return $this->interceptionsPerTarget;
    }
    /**
     * 
     *
     * @param float $interceptionsPerTarget
     *
     * @return self
     */
    public function setInterceptionsPerTarget(float $interceptionsPerTarget) : self
    {
        $this->interceptionsPerTarget = $interceptionsPerTarget;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getInterceptionsPerTargetRank() : int
    {
        return $this->interceptionsPerTargetRank;
    }
    /**
     * 
     *
     * @param int $interceptionsPerTargetRank
     *
     * @return self
     */
    public function setInterceptionsPerTargetRank(int $interceptionsPerTargetRank) : self
    {
        $this->interceptionsPerTargetRank = $interceptionsPerTargetRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCoverageRating() : float
    {
        return $this->coverageRating;
    }
    /**
     * 
     *
     * @param float $coverageRating
     *
     * @return self
     */
    public function setCoverageRating(float $coverageRating) : self
    {
        $this->coverageRating = $coverageRating;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCoverageRatingRank() : int
    {
        return $this->coverageRatingRank;
    }
    /**
     * 
     *
     * @param int $coverageRatingRank
     *
     * @return self
     */
    public function setCoverageRatingRank(int $coverageRatingRank) : self
    {
        $this->coverageRatingRank = $coverageRatingRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRunPlayStops() : float
    {
        return $this->runPlayStops;
    }
    /**
     * 
     *
     * @param float $runPlayStops
     *
     * @return self
     */
    public function setRunPlayStops(float $runPlayStops) : self
    {
        $this->runPlayStops = $runPlayStops;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRunPlayStopsRank() : int
    {
        return $this->runPlayStopsRank;
    }
    /**
     * 
     *
     * @param int $runPlayStopsRank
     *
     * @return self
     */
    public function setRunPlayStopsRank(int $runPlayStopsRank) : self
    {
        $this->runPlayStopsRank = $runPlayStopsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTargetsAllowedPerGame() : float
    {
        return $this->targetsAllowedPerGame;
    }
    /**
     * 
     *
     * @param float $targetsAllowedPerGame
     *
     * @return self
     */
    public function setTargetsAllowedPerGame(float $targetsAllowedPerGame) : self
    {
        $this->targetsAllowedPerGame = $targetsAllowedPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTargetsAllowedPerGameRank() : int
    {
        return $this->targetsAllowedPerGameRank;
    }
    /**
     * 
     *
     * @param int $targetsAllowedPerGameRank
     *
     * @return self
     */
    public function setTargetsAllowedPerGameRank(int $targetsAllowedPerGameRank) : self
    {
        $this->targetsAllowedPerGameRank = $targetsAllowedPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getReceptionsAllowedPerGame() : float
    {
        return $this->receptionsAllowedPerGame;
    }
    /**
     * 
     *
     * @param float $receptionsAllowedPerGame
     *
     * @return self
     */
    public function setReceptionsAllowedPerGame(float $receptionsAllowedPerGame) : self
    {
        $this->receptionsAllowedPerGame = $receptionsAllowedPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getReceptionsAllowedPerGameRank() : int
    {
        return $this->receptionsAllowedPerGameRank;
    }
    /**
     * 
     *
     * @param int $receptionsAllowedPerGameRank
     *
     * @return self
     */
    public function setReceptionsAllowedPerGameRank(int $receptionsAllowedPerGameRank) : self
    {
        $this->receptionsAllowedPerGameRank = $receptionsAllowedPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTargetRate() : float
    {
        return $this->targetRate;
    }
    /**
     * 
     *
     * @param float $targetRate
     *
     * @return self
     */
    public function setTargetRate(float $targetRate) : self
    {
        $this->targetRate = $targetRate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTargetRateRank() : int
    {
        return $this->targetRateRank;
    }
    /**
     * 
     *
     * @param int $targetRateRank
     *
     * @return self
     */
    public function setTargetRateRank(int $targetRateRank) : self
    {
        $this->targetRateRank = $targetRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBurnRateRank() : int
    {
        return $this->burnRateRank;
    }
    /**
     * 
     *
     * @param int $burnRateRank
     *
     * @return self
     */
    public function setBurnRateRank(int $burnRateRank) : self
    {
        $this->burnRateRank = $burnRateRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAverageCushion() : float
    {
        return $this->averageCushion;
    }
    /**
     * 
     *
     * @param float $averageCushion
     *
     * @return self
     */
    public function setAverageCushion(float $averageCushion) : self
    {
        $this->averageCushion = $averageCushion;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAverageCushionRank() : int
    {
        return $this->averageCushionRank;
    }
    /**
     * 
     *
     * @param int $averageCushionRank
     *
     * @return self
     */
    public function setAverageCushionRank(int $averageCushionRank) : self
    {
        $this->averageCushionRank = $averageCushionRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getYardsPerTargetAllowed() : float
    {
        return $this->yardsPerTargetAllowed;
    }
    /**
     * 
     *
     * @param float $yardsPerTargetAllowed
     *
     * @return self
     */
    public function setYardsPerTargetAllowed(float $yardsPerTargetAllowed) : self
    {
        $this->yardsPerTargetAllowed = $yardsPerTargetAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getYardsPerTargetAllowedRank() : int
    {
        return $this->yardsPerTargetAllowedRank;
    }
    /**
     * 
     *
     * @param int $yardsPerTargetAllowedRank
     *
     * @return self
     */
    public function setYardsPerTargetAllowedRank(int $yardsPerTargetAllowedRank) : self
    {
        $this->yardsPerTargetAllowedRank = $yardsPerTargetAllowedRank;
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
     * @return int
     */
    public function getRoutesDefendedRank() : int
    {
        return $this->routesDefendedRank;
    }
    /**
     * 
     *
     * @param int $routesDefendedRank
     *
     * @return self
     */
    public function setRoutesDefendedRank(int $routesDefendedRank) : self
    {
        $this->routesDefendedRank = $routesDefendedRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRoutesDefendedPerGame() : float
    {
        return $this->routesDefendedPerGame;
    }
    /**
     * 
     *
     * @param float $routesDefendedPerGame
     *
     * @return self
     */
    public function setRoutesDefendedPerGame(float $routesDefendedPerGame) : self
    {
        $this->routesDefendedPerGame = $routesDefendedPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRoutesDefendedPerGameRank() : int
    {
        return $this->routesDefendedPerGameRank;
    }
    /**
     * 
     *
     * @param int $routesDefendedPerGameRank
     *
     * @return self
     */
    public function setRoutesDefendedPerGameRank(int $routesDefendedPerGameRank) : self
    {
        $this->routesDefendedPerGameRank = $routesDefendedPerGameRank;
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
     * @return int
     */
    public function getFantasyPointsPerAttemptRank() : int
    {
        return $this->fantasyPointsPerAttemptRank;
    }
    /**
     * 
     *
     * @param int $fantasyPointsPerAttemptRank
     *
     * @return self
     */
    public function setFantasyPointsPerAttemptRank(int $fantasyPointsPerAttemptRank) : self
    {
        $this->fantasyPointsPerAttemptRank = $fantasyPointsPerAttemptRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFantasyPointsPerDropBack() : float
    {
        return $this->fantasyPointsPerDropBack;
    }
    /**
     * 
     *
     * @param float $fantasyPointsPerDropBack
     *
     * @return self
     */
    public function setFantasyPointsPerDropBack(float $fantasyPointsPerDropBack) : self
    {
        $this->fantasyPointsPerDropBack = $fantasyPointsPerDropBack;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFantasyPointsPerDropBackRank() : int
    {
        return $this->fantasyPointsPerDropBackRank;
    }
    /**
     * 
     *
     * @param int $fantasyPointsPerDropBackRank
     *
     * @return self
     */
    public function setFantasyPointsPerDropBackRank(int $fantasyPointsPerDropBackRank) : self
    {
        $this->fantasyPointsPerDropBackRank = $fantasyPointsPerDropBackRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFantasyPointsPerGame() : float
    {
        return $this->fantasyPointsPerGame;
    }
    /**
     * 
     *
     * @param float $fantasyPointsPerGame
     *
     * @return self
     */
    public function setFantasyPointsPerGame(float $fantasyPointsPerGame) : self
    {
        $this->fantasyPointsPerGame = $fantasyPointsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFantasyPointsPerGameDifferential() : float
    {
        return $this->fantasyPointsPerGameDifferential;
    }
    /**
     * 
     *
     * @param float $fantasyPointsPerGameDifferential
     *
     * @return self
     */
    public function setFantasyPointsPerGameDifferential(float $fantasyPointsPerGameDifferential) : self
    {
        $this->fantasyPointsPerGameDifferential = $fantasyPointsPerGameDifferential;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFantasyPointsPerGameRank() : int
    {
        return $this->fantasyPointsPerGameRank;
    }
    /**
     * 
     *
     * @param int $fantasyPointsPerGameRank
     *
     * @return self
     */
    public function setFantasyPointsPerGameRank(int $fantasyPointsPerGameRank) : self
    {
        $this->fantasyPointsPerGameRank = $fantasyPointsPerGameRank;
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
     * @return int
     */
    public function getFantasyPointsPerOpportunityRank() : int
    {
        return $this->fantasyPointsPerOpportunityRank;
    }
    /**
     * 
     *
     * @param int $fantasyPointsPerOpportunityRank
     *
     * @return self
     */
    public function setFantasyPointsPerOpportunityRank(int $fantasyPointsPerOpportunityRank) : self
    {
        $this->fantasyPointsPerOpportunityRank = $fantasyPointsPerOpportunityRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFantasyPointsPerSnap() : float
    {
        return $this->fantasyPointsPerSnap;
    }
    /**
     * 
     *
     * @param float $fantasyPointsPerSnap
     *
     * @return self
     */
    public function setFantasyPointsPerSnap(float $fantasyPointsPerSnap) : self
    {
        $this->fantasyPointsPerSnap = $fantasyPointsPerSnap;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFantasyPointsPerSnapRank() : int
    {
        return $this->fantasyPointsPerSnapRank;
    }
    /**
     * 
     *
     * @param int $fantasyPointsPerSnapRank
     *
     * @return self
     */
    public function setFantasyPointsPerSnapRank(int $fantasyPointsPerSnapRank) : self
    {
        $this->fantasyPointsPerSnapRank = $fantasyPointsPerSnapRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFantasyPointsPerPassRoute() : float
    {
        return $this->fantasyPointsPerPassRoute;
    }
    /**
     * 
     *
     * @param float $fantasyPointsPerPassRoute
     *
     * @return self
     */
    public function setFantasyPointsPerPassRoute(float $fantasyPointsPerPassRoute) : self
    {
        $this->fantasyPointsPerPassRoute = $fantasyPointsPerPassRoute;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFantasyPointsPerPassRouteRank() : int
    {
        return $this->fantasyPointsPerPassRouteRank;
    }
    /**
     * 
     *
     * @param int $fantasyPointsPerPassRouteRank
     *
     * @return self
     */
    public function setFantasyPointsPerPassRouteRank(int $fantasyPointsPerPassRouteRank) : self
    {
        $this->fantasyPointsPerPassRouteRank = $fantasyPointsPerPassRouteRank;
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
     * @return int
     */
    public function getFantasyPointsPerTargetRank() : int
    {
        return $this->fantasyPointsPerTargetRank;
    }
    /**
     * 
     *
     * @param int $fantasyPointsPerTargetRank
     *
     * @return self
     */
    public function setFantasyPointsPerTargetRank(int $fantasyPointsPerTargetRank) : self
    {
        $this->fantasyPointsPerTargetRank = $fantasyPointsPerTargetRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSlotFantasyPoints() : float
    {
        return $this->slotFantasyPoints;
    }
    /**
     * 
     *
     * @param float $slotFantasyPoints
     *
     * @return self
     */
    public function setSlotFantasyPoints(float $slotFantasyPoints) : self
    {
        $this->slotFantasyPoints = $slotFantasyPoints;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSlotFantasyPointsRank() : int
    {
        return $this->slotFantasyPointsRank;
    }
    /**
     * 
     *
     * @param int $slotFantasyPointsRank
     *
     * @return self
     */
    public function setSlotFantasyPointsRank(int $slotFantasyPointsRank) : self
    {
        $this->slotFantasyPointsRank = $slotFantasyPointsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSlotFantasyPointsPerGame() : float
    {
        return $this->slotFantasyPointsPerGame;
    }
    /**
     * 
     *
     * @param float $slotFantasyPointsPerGame
     *
     * @return self
     */
    public function setSlotFantasyPointsPerGame(float $slotFantasyPointsPerGame) : self
    {
        $this->slotFantasyPointsPerGame = $slotFantasyPointsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSlotFantasyPointsPerGameRank() : int
    {
        return $this->slotFantasyPointsPerGameRank;
    }
    /**
     * 
     *
     * @param int $slotFantasyPointsPerGameRank
     *
     * @return self
     */
    public function setSlotFantasyPointsPerGameRank(int $slotFantasyPointsPerGameRank) : self
    {
        $this->slotFantasyPointsPerGameRank = $slotFantasyPointsPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSlotFantasyPointsPerTarget() : float
    {
        return $this->slotFantasyPointsPerTarget;
    }
    /**
     * 
     *
     * @param float $slotFantasyPointsPerTarget
     *
     * @return self
     */
    public function setSlotFantasyPointsPerTarget(float $slotFantasyPointsPerTarget) : self
    {
        $this->slotFantasyPointsPerTarget = $slotFantasyPointsPerTarget;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSlotFantasyPointsPerTargetRank() : int
    {
        return $this->slotFantasyPointsPerTargetRank;
    }
    /**
     * 
     *
     * @param int $slotFantasyPointsPerTargetRank
     *
     * @return self
     */
    public function setSlotFantasyPointsPerTargetRank(int $slotFantasyPointsPerTargetRank) : self
    {
        $this->slotFantasyPointsPerTargetRank = $slotFantasyPointsPerTargetRank;
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
    public function getFantasyPointsAllowedPerTarget() : float
    {
        return $this->fantasyPointsAllowedPerTarget;
    }
    /**
     * 
     *
     * @param float $fantasyPointsAllowedPerTarget
     *
     * @return self
     */
    public function setFantasyPointsAllowedPerTarget(float $fantasyPointsAllowedPerTarget) : self
    {
        $this->fantasyPointsAllowedPerTarget = $fantasyPointsAllowedPerTarget;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFantasyPointsAllowedPerTargetRank() : int
    {
        return $this->fantasyPointsAllowedPerTargetRank;
    }
    /**
     * 
     *
     * @param int $fantasyPointsAllowedPerTargetRank
     *
     * @return self
     */
    public function setFantasyPointsAllowedPerTargetRank(int $fantasyPointsAllowedPerTargetRank) : self
    {
        $this->fantasyPointsAllowedPerTargetRank = $fantasyPointsAllowedPerTargetRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFantasyPointsAllowedPerGame() : float
    {
        return $this->fantasyPointsAllowedPerGame;
    }
    /**
     * 
     *
     * @param float $fantasyPointsAllowedPerGame
     *
     * @return self
     */
    public function setFantasyPointsAllowedPerGame(float $fantasyPointsAllowedPerGame) : self
    {
        $this->fantasyPointsAllowedPerGame = $fantasyPointsAllowedPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFantasyPointsAllowedPerGameRank() : int
    {
        return $this->fantasyPointsAllowedPerGameRank;
    }
    /**
     * 
     *
     * @param int $fantasyPointsAllowedPerGameRank
     *
     * @return self
     */
    public function setFantasyPointsAllowedPerGameRank(int $fantasyPointsAllowedPerGameRank) : self
    {
        $this->fantasyPointsAllowedPerGameRank = $fantasyPointsAllowedPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFantasyPointsAllowedPerSnap() : float
    {
        return $this->fantasyPointsAllowedPerSnap;
    }
    /**
     * 
     *
     * @param float $fantasyPointsAllowedPerSnap
     *
     * @return self
     */
    public function setFantasyPointsAllowedPerSnap(float $fantasyPointsAllowedPerSnap) : self
    {
        $this->fantasyPointsAllowedPerSnap = $fantasyPointsAllowedPerSnap;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFantasyPointsAllowedPerSnapRank() : int
    {
        return $this->fantasyPointsAllowedPerSnapRank;
    }
    /**
     * 
     *
     * @param int $fantasyPointsAllowedPerSnapRank
     *
     * @return self
     */
    public function setFantasyPointsAllowedPerSnapRank(int $fantasyPointsAllowedPerSnapRank) : self
    {
        $this->fantasyPointsAllowedPerSnapRank = $fantasyPointsAllowedPerSnapRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFantasyPointsAllowedPerCoverSnap() : float
    {
        return $this->fantasyPointsAllowedPerCoverSnap;
    }
    /**
     * 
     *
     * @param float $fantasyPointsAllowedPerCoverSnap
     *
     * @return self
     */
    public function setFantasyPointsAllowedPerCoverSnap(float $fantasyPointsAllowedPerCoverSnap) : self
    {
        $this->fantasyPointsAllowedPerCoverSnap = $fantasyPointsAllowedPerCoverSnap;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFantasyPointsAllowedPerCoverSnapRank() : int
    {
        return $this->fantasyPointsAllowedPerCoverSnapRank;
    }
    /**
     * 
     *
     * @param int $fantasyPointsAllowedPerCoverSnapRank
     *
     * @return self
     */
    public function setFantasyPointsAllowedPerCoverSnapRank(int $fantasyPointsAllowedPerCoverSnapRank) : self
    {
        $this->fantasyPointsAllowedPerCoverSnapRank = $fantasyPointsAllowedPerCoverSnapRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getExpectedFantasyPoints() : float
    {
        return $this->expectedFantasyPoints;
    }
    /**
     * 
     *
     * @param float $expectedFantasyPoints
     *
     * @return self
     */
    public function setExpectedFantasyPoints(float $expectedFantasyPoints) : self
    {
        $this->expectedFantasyPoints = $expectedFantasyPoints;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getExpectedFantasyPointsRank() : int
    {
        return $this->expectedFantasyPointsRank;
    }
    /**
     * 
     *
     * @param int $expectedFantasyPointsRank
     *
     * @return self
     */
    public function setExpectedFantasyPointsRank(int $expectedFantasyPointsRank) : self
    {
        $this->expectedFantasyPointsRank = $expectedFantasyPointsRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getExpectedFantasyPointsPerGame() : float
    {
        return $this->expectedFantasyPointsPerGame;
    }
    /**
     * 
     *
     * @param float $expectedFantasyPointsPerGame
     *
     * @return self
     */
    public function setExpectedFantasyPointsPerGame(float $expectedFantasyPointsPerGame) : self
    {
        $this->expectedFantasyPointsPerGame = $expectedFantasyPointsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getExpectedFantasyPointsPerGameRank() : int
    {
        return $this->expectedFantasyPointsPerGameRank;
    }
    /**
     * 
     *
     * @param int $expectedFantasyPointsPerGameRank
     *
     * @return self
     */
    public function setExpectedFantasyPointsPerGameRank(int $expectedFantasyPointsPerGameRank) : self
    {
        $this->expectedFantasyPointsPerGameRank = $expectedFantasyPointsPerGameRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getNormalizedFantasyPointsPerGame() : float
    {
        return $this->normalizedFantasyPointsPerGame;
    }
    /**
     * 
     *
     * @param float $normalizedFantasyPointsPerGame
     *
     * @return self
     */
    public function setNormalizedFantasyPointsPerGame(float $normalizedFantasyPointsPerGame) : self
    {
        $this->normalizedFantasyPointsPerGame = $normalizedFantasyPointsPerGame;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNormalizedFantasyPointsPerGameRank() : int
    {
        return $this->normalizedFantasyPointsPerGameRank;
    }
    /**
     * 
     *
     * @param int $normalizedFantasyPointsPerGameRank
     *
     * @return self
     */
    public function setNormalizedFantasyPointsPerGameRank(int $normalizedFantasyPointsPerGameRank) : self
    {
        $this->normalizedFantasyPointsPerGameRank = $normalizedFantasyPointsPerGameRank;
        return $this;
    }
}