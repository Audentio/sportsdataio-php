<?php

namespace Sportsdata\API\NFL\Model;

class TeamSeason
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
     * @var int
     */
    protected $score;
    /**
     * 
     *
     * @var int
     */
    protected $opponentScore;
    /**
     * 
     *
     * @var int
     */
    protected $totalScore;
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
    protected $overUnder;
    /**
     * 
     *
     * @var float|null
     */
    protected $pointSpread;
    /**
     * 
     *
     * @var int|null
     */
    protected $scoreQuarter1;
    /**
     * 
     *
     * @var int|null
     */
    protected $scoreQuarter2;
    /**
     * 
     *
     * @var int|null
     */
    protected $scoreQuarter3;
    /**
     * 
     *
     * @var int|null
     */
    protected $scoreQuarter4;
    /**
     * 
     *
     * @var int
     */
    protected $scoreOvertime;
    /**
     * 
     *
     * @var string|null
     */
    protected $timeOfPossession;
    /**
     * 
     *
     * @var int|null
     */
    protected $firstDowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $firstDownsByRushing;
    /**
     * 
     *
     * @var int|null
     */
    protected $firstDownsByPassing;
    /**
     * 
     *
     * @var int|null
     */
    protected $firstDownsByPenalty;
    /**
     * 
     *
     * @var int
     */
    protected $offensivePlays;
    /**
     * 
     *
     * @var int
     */
    protected $offensiveYards;
    /**
     * 
     *
     * @var float
     */
    protected $offensiveYardsPerPlay;
    /**
     * 
     *
     * @var int|null
     */
    protected $touchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $rushingAttempts;
    /**
     * 
     *
     * @var int|null
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
     * @var int|null
     */
    protected $rushingTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $passingAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $passingCompletions;
    /**
     * 
     *
     * @var int|null
     */
    protected $passingYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $passingTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $passingInterceptions;
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
    protected $completionPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $passerRating;
    /**
     * 
     *
     * @var int|null
     */
    protected $thirdDownAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $thirdDownConversions;
    /**
     * 
     *
     * @var float|null
     */
    protected $thirdDownPercentage;
    /**
     * 
     *
     * @var int|null
     */
    protected $fourthDownAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $fourthDownConversions;
    /**
     * 
     *
     * @var float|null
     */
    protected $fourthDownPercentage;
    /**
     * 
     *
     * @var int|null
     */
    protected $redZoneAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $redZoneConversions;
    /**
     * 
     *
     * @var int|null
     */
    protected $goalToGoAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $goalToGoConversions;
    /**
     * 
     *
     * @var int|null
     */
    protected $returnYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $penalties;
    /**
     * 
     *
     * @var int|null
     */
    protected $penaltyYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $fumbles;
    /**
     * 
     *
     * @var int|null
     */
    protected $fumblesLost;
    /**
     * 
     *
     * @var int|null
     */
    protected $timesSacked;
    /**
     * 
     *
     * @var int|null
     */
    protected $timesSackedYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $quarterbackHits;
    /**
     * 
     *
     * @var int|null
     */
    protected $tacklesForLoss;
    /**
     * 
     *
     * @var int|null
     */
    protected $safeties;
    /**
     * 
     *
     * @var int|null
     */
    protected $punts;
    /**
     * 
     *
     * @var int|null
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
     * @var int
     */
    protected $giveaways;
    /**
     * 
     *
     * @var int
     */
    protected $takeaways;
    /**
     * 
     *
     * @var int
     */
    protected $turnoverDifferential;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentScoreQuarter1;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentScoreQuarter2;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentScoreQuarter3;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentScoreQuarter4;
    /**
     * 
     *
     * @var int
     */
    protected $opponentScoreOvertime;
    /**
     * 
     *
     * @var string|null
     */
    protected $opponentTimeOfPossession;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentFirstDowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentFirstDownsByRushing;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentFirstDownsByPassing;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentFirstDownsByPenalty;
    /**
     * 
     *
     * @var int
     */
    protected $opponentOffensivePlays;
    /**
     * 
     *
     * @var int
     */
    protected $opponentOffensiveYards;
    /**
     * 
     *
     * @var float
     */
    protected $opponentOffensiveYardsPerPlay;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentRushingAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentRushingYards;
    /**
     * 
     *
     * @var float
     */
    protected $opponentRushingYardsPerAttempt;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentRushingTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentPassingAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentPassingCompletions;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentPassingYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentPassingTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentPassingInterceptions;
    /**
     * 
     *
     * @var float
     */
    protected $opponentPassingYardsPerAttempt;
    /**
     * 
     *
     * @var float
     */
    protected $opponentPassingYardsPerCompletion;
    /**
     * 
     *
     * @var float
     */
    protected $opponentCompletionPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $opponentPasserRating;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentThirdDownAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentThirdDownConversions;
    /**
     * 
     *
     * @var float|null
     */
    protected $opponentThirdDownPercentage;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentFourthDownAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentFourthDownConversions;
    /**
     * 
     *
     * @var float|null
     */
    protected $opponentFourthDownPercentage;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentRedZoneAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentRedZoneConversions;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentGoalToGoAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentGoalToGoConversions;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentReturnYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentPenalties;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentPenaltyYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentFumbles;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentFumblesLost;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentTimesSacked;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentTimesSackedYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentQuarterbackHits;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentTacklesForLoss;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentSafeties;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentPunts;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentPuntYards;
    /**
     * 
     *
     * @var float
     */
    protected $opponentPuntAverage;
    /**
     * 
     *
     * @var int
     */
    protected $opponentGiveaways;
    /**
     * 
     *
     * @var int
     */
    protected $opponentTakeaways;
    /**
     * 
     *
     * @var int
     */
    protected $opponentTurnoverDifferential;
    /**
     * 
     *
     * @var float|null
     */
    protected $redZonePercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $goalToGoPercentage;
    /**
     * 
     *
     * @var int|null
     */
    protected $quarterbackHitsDifferential;
    /**
     * 
     *
     * @var int|null
     */
    protected $tacklesForLossDifferential;
    /**
     * 
     *
     * @var int
     */
    protected $quarterbackSacksDifferential;
    /**
     * 
     *
     * @var float|null
     */
    protected $tacklesForLossPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $quarterbackHitsPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $timesSackedPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $opponentRedZonePercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $opponentGoalToGoPercentage;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentQuarterbackHitsDifferential;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentTacklesForLossDifferential;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentQuarterbackSacksDifferential;
    /**
     * 
     *
     * @var float|null
     */
    protected $opponentTacklesForLossPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $opponentQuarterbackHitsPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $opponentTimesSackedPercentage;
    /**
     * 
     *
     * @var int|null
     */
    protected $kickoffs;
    /**
     * 
     *
     * @var int|null
     */
    protected $kickoffsInEndZone;
    /**
     * 
     *
     * @var int|null
     */
    protected $kickoffTouchbacks;
    /**
     * 
     *
     * @var int|null
     */
    protected $puntsHadBlocked;
    /**
     * 
     *
     * @var float|null
     */
    protected $puntNetAverage;
    /**
     * 
     *
     * @var int|null
     */
    protected $extraPointKickingAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $extraPointKickingConversions;
    /**
     * 
     *
     * @var int|null
     */
    protected $extraPointsHadBlocked;
    /**
     * 
     *
     * @var int|null
     */
    protected $extraPointPassingAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $extraPointPassingConversions;
    /**
     * 
     *
     * @var int|null
     */
    protected $extraPointRushingAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $extraPointRushingConversions;
    /**
     * 
     *
     * @var int|null
     */
    protected $fieldGoalAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $fieldGoalsMade;
    /**
     * 
     *
     * @var int|null
     */
    protected $fieldGoalsHadBlocked;
    /**
     * 
     *
     * @var int|null
     */
    protected $puntReturns;
    /**
     * 
     *
     * @var int|null
     */
    protected $puntReturnYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $kickReturns;
    /**
     * 
     *
     * @var int|null
     */
    protected $kickReturnYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $interceptionReturns;
    /**
     * 
     *
     * @var int|null
     */
    protected $interceptionReturnYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentKickoffs;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentKickoffsInEndZone;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentKickoffTouchbacks;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentPuntsHadBlocked;
    /**
     * 
     *
     * @var float|null
     */
    protected $opponentPuntNetAverage;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentExtraPointKickingAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentExtraPointKickingConversions;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentExtraPointsHadBlocked;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentExtraPointPassingAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentExtraPointPassingConversions;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentExtraPointRushingAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentExtraPointRushingConversions;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentFieldGoalAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentFieldGoalsMade;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentFieldGoalsHadBlocked;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentPuntReturns;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentPuntReturnYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentKickReturns;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentKickReturnYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentInterceptionReturns;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentInterceptionReturnYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $soloTackles;
    /**
     * 
     *
     * @var int|null
     */
    protected $assistedTackles;
    /**
     * 
     *
     * @var int|null
     */
    protected $sacks;
    /**
     * 
     *
     * @var int|null
     */
    protected $sackYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $passesDefended;
    /**
     * 
     *
     * @var int|null
     */
    protected $fumblesForced;
    /**
     * 
     *
     * @var int|null
     */
    protected $fumblesRecovered;
    /**
     * 
     *
     * @var int|null
     */
    protected $fumbleReturnYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $fumbleReturnTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $interceptionReturnTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $blockedKicks;
    /**
     * 
     *
     * @var int|null
     */
    protected $puntReturnTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $puntReturnLong;
    /**
     * 
     *
     * @var int|null
     */
    protected $kickReturnTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $kickReturnLong;
    /**
     * 
     *
     * @var int|null
     */
    protected $blockedKickReturnYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $blockedKickReturnTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $fieldGoalReturnYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $fieldGoalReturnTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $puntNetYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentSoloTackles;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentAssistedTackles;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentSacks;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentSackYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentPassesDefended;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentFumblesForced;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentFumblesRecovered;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentFumbleReturnYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentFumbleReturnTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentInterceptionReturnTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentBlockedKicks;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentPuntReturnTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentPuntReturnLong;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentKickReturnTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentKickReturnLong;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentBlockedKickReturnYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentBlockedKickReturnTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentFieldGoalReturnYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentFieldGoalReturnTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentPuntNetYards;
    /**
     * 
     *
     * @var string|null
     */
    protected $teamName;
    /**
     * 
     *
     * @var int|null
     */
    protected $games;
    /**
     * 
     *
     * @var int|null
     */
    protected $passingDropbacks;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentPassingDropbacks;
    /**
     * 
     *
     * @var int
     */
    protected $teamSeasonID;
    /**
     * 
     *
     * @var int|null
     */
    protected $pointDifferential;
    /**
     * 
     *
     * @var float|null
     */
    protected $passingInterceptionPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $puntReturnAverage;
    /**
     * 
     *
     * @var float|null
     */
    protected $kickReturnAverage;
    /**
     * 
     *
     * @var float|null
     */
    protected $extraPointPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $fieldGoalPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $opponentPassingInterceptionPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $opponentPuntReturnAverage;
    /**
     * 
     *
     * @var float|null
     */
    protected $opponentKickReturnAverage;
    /**
     * 
     *
     * @var float|null
     */
    protected $opponentExtraPointPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $opponentFieldGoalPercentage;
    /**
     * 
     *
     * @var int|null
     */
    protected $penaltyYardDifferential;
    /**
     * 
     *
     * @var int|null
     */
    protected $puntReturnYardDifferential;
    /**
     * 
     *
     * @var int|null
     */
    protected $kickReturnYardDifferential;
    /**
     * 
     *
     * @var int|null
     */
    protected $twoPointConversionReturns;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentTwoPointConversionReturns;
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
     * @var int
     */
    protected $teamStatID;
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
    public function getScore() : int
    {
        return $this->score;
    }
    /**
     * 
     *
     * @param int $score
     *
     * @return self
     */
    public function setScore(int $score) : self
    {
        $this->score = $score;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentScore() : int
    {
        return $this->opponentScore;
    }
    /**
     * 
     *
     * @param int $opponentScore
     *
     * @return self
     */
    public function setOpponentScore(int $opponentScore) : self
    {
        $this->opponentScore = $opponentScore;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotalScore() : int
    {
        return $this->totalScore;
    }
    /**
     * 
     *
     * @param int $totalScore
     *
     * @return self
     */
    public function setTotalScore(int $totalScore) : self
    {
        $this->totalScore = $totalScore;
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
    public function getOverUnder() : ?float
    {
        return $this->overUnder;
    }
    /**
     * 
     *
     * @param float|null $overUnder
     *
     * @return self
     */
    public function setOverUnder(?float $overUnder) : self
    {
        $this->overUnder = $overUnder;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPointSpread() : ?float
    {
        return $this->pointSpread;
    }
    /**
     * 
     *
     * @param float|null $pointSpread
     *
     * @return self
     */
    public function setPointSpread(?float $pointSpread) : self
    {
        $this->pointSpread = $pointSpread;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getScoreQuarter1() : ?int
    {
        return $this->scoreQuarter1;
    }
    /**
     * 
     *
     * @param int|null $scoreQuarter1
     *
     * @return self
     */
    public function setScoreQuarter1(?int $scoreQuarter1) : self
    {
        $this->scoreQuarter1 = $scoreQuarter1;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getScoreQuarter2() : ?int
    {
        return $this->scoreQuarter2;
    }
    /**
     * 
     *
     * @param int|null $scoreQuarter2
     *
     * @return self
     */
    public function setScoreQuarter2(?int $scoreQuarter2) : self
    {
        $this->scoreQuarter2 = $scoreQuarter2;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getScoreQuarter3() : ?int
    {
        return $this->scoreQuarter3;
    }
    /**
     * 
     *
     * @param int|null $scoreQuarter3
     *
     * @return self
     */
    public function setScoreQuarter3(?int $scoreQuarter3) : self
    {
        $this->scoreQuarter3 = $scoreQuarter3;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getScoreQuarter4() : ?int
    {
        return $this->scoreQuarter4;
    }
    /**
     * 
     *
     * @param int|null $scoreQuarter4
     *
     * @return self
     */
    public function setScoreQuarter4(?int $scoreQuarter4) : self
    {
        $this->scoreQuarter4 = $scoreQuarter4;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getScoreOvertime() : int
    {
        return $this->scoreOvertime;
    }
    /**
     * 
     *
     * @param int $scoreOvertime
     *
     * @return self
     */
    public function setScoreOvertime(int $scoreOvertime) : self
    {
        $this->scoreOvertime = $scoreOvertime;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTimeOfPossession() : ?string
    {
        return $this->timeOfPossession;
    }
    /**
     * 
     *
     * @param string|null $timeOfPossession
     *
     * @return self
     */
    public function setTimeOfPossession(?string $timeOfPossession) : self
    {
        $this->timeOfPossession = $timeOfPossession;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFirstDowns() : ?int
    {
        return $this->firstDowns;
    }
    /**
     * 
     *
     * @param int|null $firstDowns
     *
     * @return self
     */
    public function setFirstDowns(?int $firstDowns) : self
    {
        $this->firstDowns = $firstDowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFirstDownsByRushing() : ?int
    {
        return $this->firstDownsByRushing;
    }
    /**
     * 
     *
     * @param int|null $firstDownsByRushing
     *
     * @return self
     */
    public function setFirstDownsByRushing(?int $firstDownsByRushing) : self
    {
        $this->firstDownsByRushing = $firstDownsByRushing;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFirstDownsByPassing() : ?int
    {
        return $this->firstDownsByPassing;
    }
    /**
     * 
     *
     * @param int|null $firstDownsByPassing
     *
     * @return self
     */
    public function setFirstDownsByPassing(?int $firstDownsByPassing) : self
    {
        $this->firstDownsByPassing = $firstDownsByPassing;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFirstDownsByPenalty() : ?int
    {
        return $this->firstDownsByPenalty;
    }
    /**
     * 
     *
     * @param int|null $firstDownsByPenalty
     *
     * @return self
     */
    public function setFirstDownsByPenalty(?int $firstDownsByPenalty) : self
    {
        $this->firstDownsByPenalty = $firstDownsByPenalty;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOffensivePlays() : int
    {
        return $this->offensivePlays;
    }
    /**
     * 
     *
     * @param int $offensivePlays
     *
     * @return self
     */
    public function setOffensivePlays(int $offensivePlays) : self
    {
        $this->offensivePlays = $offensivePlays;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOffensiveYards() : int
    {
        return $this->offensiveYards;
    }
    /**
     * 
     *
     * @param int $offensiveYards
     *
     * @return self
     */
    public function setOffensiveYards(int $offensiveYards) : self
    {
        $this->offensiveYards = $offensiveYards;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOffensiveYardsPerPlay() : float
    {
        return $this->offensiveYardsPerPlay;
    }
    /**
     * 
     *
     * @param float $offensiveYardsPerPlay
     *
     * @return self
     */
    public function setOffensiveYardsPerPlay(float $offensiveYardsPerPlay) : self
    {
        $this->offensiveYardsPerPlay = $offensiveYardsPerPlay;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTouchdowns() : ?int
    {
        return $this->touchdowns;
    }
    /**
     * 
     *
     * @param int|null $touchdowns
     *
     * @return self
     */
    public function setTouchdowns(?int $touchdowns) : self
    {
        $this->touchdowns = $touchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRushingAttempts() : ?int
    {
        return $this->rushingAttempts;
    }
    /**
     * 
     *
     * @param int|null $rushingAttempts
     *
     * @return self
     */
    public function setRushingAttempts(?int $rushingAttempts) : self
    {
        $this->rushingAttempts = $rushingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRushingYards() : ?int
    {
        return $this->rushingYards;
    }
    /**
     * 
     *
     * @param int|null $rushingYards
     *
     * @return self
     */
    public function setRushingYards(?int $rushingYards) : self
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
     * @return int|null
     */
    public function getRushingTouchdowns() : ?int
    {
        return $this->rushingTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $rushingTouchdowns
     *
     * @return self
     */
    public function setRushingTouchdowns(?int $rushingTouchdowns) : self
    {
        $this->rushingTouchdowns = $rushingTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPassingAttempts() : ?int
    {
        return $this->passingAttempts;
    }
    /**
     * 
     *
     * @param int|null $passingAttempts
     *
     * @return self
     */
    public function setPassingAttempts(?int $passingAttempts) : self
    {
        $this->passingAttempts = $passingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPassingCompletions() : ?int
    {
        return $this->passingCompletions;
    }
    /**
     * 
     *
     * @param int|null $passingCompletions
     *
     * @return self
     */
    public function setPassingCompletions(?int $passingCompletions) : self
    {
        $this->passingCompletions = $passingCompletions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPassingYards() : ?int
    {
        return $this->passingYards;
    }
    /**
     * 
     *
     * @param int|null $passingYards
     *
     * @return self
     */
    public function setPassingYards(?int $passingYards) : self
    {
        $this->passingYards = $passingYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPassingTouchdowns() : ?int
    {
        return $this->passingTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $passingTouchdowns
     *
     * @return self
     */
    public function setPassingTouchdowns(?int $passingTouchdowns) : self
    {
        $this->passingTouchdowns = $passingTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPassingInterceptions() : ?int
    {
        return $this->passingInterceptions;
    }
    /**
     * 
     *
     * @param int|null $passingInterceptions
     *
     * @return self
     */
    public function setPassingInterceptions(?int $passingInterceptions) : self
    {
        $this->passingInterceptions = $passingInterceptions;
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
     * @return float|null
     */
    public function getPasserRating() : ?float
    {
        return $this->passerRating;
    }
    /**
     * 
     *
     * @param float|null $passerRating
     *
     * @return self
     */
    public function setPasserRating(?float $passerRating) : self
    {
        $this->passerRating = $passerRating;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getThirdDownAttempts() : ?int
    {
        return $this->thirdDownAttempts;
    }
    /**
     * 
     *
     * @param int|null $thirdDownAttempts
     *
     * @return self
     */
    public function setThirdDownAttempts(?int $thirdDownAttempts) : self
    {
        $this->thirdDownAttempts = $thirdDownAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getThirdDownConversions() : ?int
    {
        return $this->thirdDownConversions;
    }
    /**
     * 
     *
     * @param int|null $thirdDownConversions
     *
     * @return self
     */
    public function setThirdDownConversions(?int $thirdDownConversions) : self
    {
        $this->thirdDownConversions = $thirdDownConversions;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getThirdDownPercentage() : ?float
    {
        return $this->thirdDownPercentage;
    }
    /**
     * 
     *
     * @param float|null $thirdDownPercentage
     *
     * @return self
     */
    public function setThirdDownPercentage(?float $thirdDownPercentage) : self
    {
        $this->thirdDownPercentage = $thirdDownPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFourthDownAttempts() : ?int
    {
        return $this->fourthDownAttempts;
    }
    /**
     * 
     *
     * @param int|null $fourthDownAttempts
     *
     * @return self
     */
    public function setFourthDownAttempts(?int $fourthDownAttempts) : self
    {
        $this->fourthDownAttempts = $fourthDownAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFourthDownConversions() : ?int
    {
        return $this->fourthDownConversions;
    }
    /**
     * 
     *
     * @param int|null $fourthDownConversions
     *
     * @return self
     */
    public function setFourthDownConversions(?int $fourthDownConversions) : self
    {
        $this->fourthDownConversions = $fourthDownConversions;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFourthDownPercentage() : ?float
    {
        return $this->fourthDownPercentage;
    }
    /**
     * 
     *
     * @param float|null $fourthDownPercentage
     *
     * @return self
     */
    public function setFourthDownPercentage(?float $fourthDownPercentage) : self
    {
        $this->fourthDownPercentage = $fourthDownPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRedZoneAttempts() : ?int
    {
        return $this->redZoneAttempts;
    }
    /**
     * 
     *
     * @param int|null $redZoneAttempts
     *
     * @return self
     */
    public function setRedZoneAttempts(?int $redZoneAttempts) : self
    {
        $this->redZoneAttempts = $redZoneAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRedZoneConversions() : ?int
    {
        return $this->redZoneConversions;
    }
    /**
     * 
     *
     * @param int|null $redZoneConversions
     *
     * @return self
     */
    public function setRedZoneConversions(?int $redZoneConversions) : self
    {
        $this->redZoneConversions = $redZoneConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getGoalToGoAttempts() : ?int
    {
        return $this->goalToGoAttempts;
    }
    /**
     * 
     *
     * @param int|null $goalToGoAttempts
     *
     * @return self
     */
    public function setGoalToGoAttempts(?int $goalToGoAttempts) : self
    {
        $this->goalToGoAttempts = $goalToGoAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getGoalToGoConversions() : ?int
    {
        return $this->goalToGoConversions;
    }
    /**
     * 
     *
     * @param int|null $goalToGoConversions
     *
     * @return self
     */
    public function setGoalToGoConversions(?int $goalToGoConversions) : self
    {
        $this->goalToGoConversions = $goalToGoConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getReturnYards() : ?int
    {
        return $this->returnYards;
    }
    /**
     * 
     *
     * @param int|null $returnYards
     *
     * @return self
     */
    public function setReturnYards(?int $returnYards) : self
    {
        $this->returnYards = $returnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPenalties() : ?int
    {
        return $this->penalties;
    }
    /**
     * 
     *
     * @param int|null $penalties
     *
     * @return self
     */
    public function setPenalties(?int $penalties) : self
    {
        $this->penalties = $penalties;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPenaltyYards() : ?int
    {
        return $this->penaltyYards;
    }
    /**
     * 
     *
     * @param int|null $penaltyYards
     *
     * @return self
     */
    public function setPenaltyYards(?int $penaltyYards) : self
    {
        $this->penaltyYards = $penaltyYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFumbles() : ?int
    {
        return $this->fumbles;
    }
    /**
     * 
     *
     * @param int|null $fumbles
     *
     * @return self
     */
    public function setFumbles(?int $fumbles) : self
    {
        $this->fumbles = $fumbles;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFumblesLost() : ?int
    {
        return $this->fumblesLost;
    }
    /**
     * 
     *
     * @param int|null $fumblesLost
     *
     * @return self
     */
    public function setFumblesLost(?int $fumblesLost) : self
    {
        $this->fumblesLost = $fumblesLost;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTimesSacked() : ?int
    {
        return $this->timesSacked;
    }
    /**
     * 
     *
     * @param int|null $timesSacked
     *
     * @return self
     */
    public function setTimesSacked(?int $timesSacked) : self
    {
        $this->timesSacked = $timesSacked;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTimesSackedYards() : ?int
    {
        return $this->timesSackedYards;
    }
    /**
     * 
     *
     * @param int|null $timesSackedYards
     *
     * @return self
     */
    public function setTimesSackedYards(?int $timesSackedYards) : self
    {
        $this->timesSackedYards = $timesSackedYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getQuarterbackHits() : ?int
    {
        return $this->quarterbackHits;
    }
    /**
     * 
     *
     * @param int|null $quarterbackHits
     *
     * @return self
     */
    public function setQuarterbackHits(?int $quarterbackHits) : self
    {
        $this->quarterbackHits = $quarterbackHits;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTacklesForLoss() : ?int
    {
        return $this->tacklesForLoss;
    }
    /**
     * 
     *
     * @param int|null $tacklesForLoss
     *
     * @return self
     */
    public function setTacklesForLoss(?int $tacklesForLoss) : self
    {
        $this->tacklesForLoss = $tacklesForLoss;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSafeties() : ?int
    {
        return $this->safeties;
    }
    /**
     * 
     *
     * @param int|null $safeties
     *
     * @return self
     */
    public function setSafeties(?int $safeties) : self
    {
        $this->safeties = $safeties;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPunts() : ?int
    {
        return $this->punts;
    }
    /**
     * 
     *
     * @param int|null $punts
     *
     * @return self
     */
    public function setPunts(?int $punts) : self
    {
        $this->punts = $punts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPuntYards() : ?int
    {
        return $this->puntYards;
    }
    /**
     * 
     *
     * @param int|null $puntYards
     *
     * @return self
     */
    public function setPuntYards(?int $puntYards) : self
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
     * @return int
     */
    public function getGiveaways() : int
    {
        return $this->giveaways;
    }
    /**
     * 
     *
     * @param int $giveaways
     *
     * @return self
     */
    public function setGiveaways(int $giveaways) : self
    {
        $this->giveaways = $giveaways;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTakeaways() : int
    {
        return $this->takeaways;
    }
    /**
     * 
     *
     * @param int $takeaways
     *
     * @return self
     */
    public function setTakeaways(int $takeaways) : self
    {
        $this->takeaways = $takeaways;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTurnoverDifferential() : int
    {
        return $this->turnoverDifferential;
    }
    /**
     * 
     *
     * @param int $turnoverDifferential
     *
     * @return self
     */
    public function setTurnoverDifferential(int $turnoverDifferential) : self
    {
        $this->turnoverDifferential = $turnoverDifferential;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentScoreQuarter1() : ?int
    {
        return $this->opponentScoreQuarter1;
    }
    /**
     * 
     *
     * @param int|null $opponentScoreQuarter1
     *
     * @return self
     */
    public function setOpponentScoreQuarter1(?int $opponentScoreQuarter1) : self
    {
        $this->opponentScoreQuarter1 = $opponentScoreQuarter1;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentScoreQuarter2() : ?int
    {
        return $this->opponentScoreQuarter2;
    }
    /**
     * 
     *
     * @param int|null $opponentScoreQuarter2
     *
     * @return self
     */
    public function setOpponentScoreQuarter2(?int $opponentScoreQuarter2) : self
    {
        $this->opponentScoreQuarter2 = $opponentScoreQuarter2;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentScoreQuarter3() : ?int
    {
        return $this->opponentScoreQuarter3;
    }
    /**
     * 
     *
     * @param int|null $opponentScoreQuarter3
     *
     * @return self
     */
    public function setOpponentScoreQuarter3(?int $opponentScoreQuarter3) : self
    {
        $this->opponentScoreQuarter3 = $opponentScoreQuarter3;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentScoreQuarter4() : ?int
    {
        return $this->opponentScoreQuarter4;
    }
    /**
     * 
     *
     * @param int|null $opponentScoreQuarter4
     *
     * @return self
     */
    public function setOpponentScoreQuarter4(?int $opponentScoreQuarter4) : self
    {
        $this->opponentScoreQuarter4 = $opponentScoreQuarter4;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentScoreOvertime() : int
    {
        return $this->opponentScoreOvertime;
    }
    /**
     * 
     *
     * @param int $opponentScoreOvertime
     *
     * @return self
     */
    public function setOpponentScoreOvertime(int $opponentScoreOvertime) : self
    {
        $this->opponentScoreOvertime = $opponentScoreOvertime;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOpponentTimeOfPossession() : ?string
    {
        return $this->opponentTimeOfPossession;
    }
    /**
     * 
     *
     * @param string|null $opponentTimeOfPossession
     *
     * @return self
     */
    public function setOpponentTimeOfPossession(?string $opponentTimeOfPossession) : self
    {
        $this->opponentTimeOfPossession = $opponentTimeOfPossession;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentFirstDowns() : ?int
    {
        return $this->opponentFirstDowns;
    }
    /**
     * 
     *
     * @param int|null $opponentFirstDowns
     *
     * @return self
     */
    public function setOpponentFirstDowns(?int $opponentFirstDowns) : self
    {
        $this->opponentFirstDowns = $opponentFirstDowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentFirstDownsByRushing() : ?int
    {
        return $this->opponentFirstDownsByRushing;
    }
    /**
     * 
     *
     * @param int|null $opponentFirstDownsByRushing
     *
     * @return self
     */
    public function setOpponentFirstDownsByRushing(?int $opponentFirstDownsByRushing) : self
    {
        $this->opponentFirstDownsByRushing = $opponentFirstDownsByRushing;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentFirstDownsByPassing() : ?int
    {
        return $this->opponentFirstDownsByPassing;
    }
    /**
     * 
     *
     * @param int|null $opponentFirstDownsByPassing
     *
     * @return self
     */
    public function setOpponentFirstDownsByPassing(?int $opponentFirstDownsByPassing) : self
    {
        $this->opponentFirstDownsByPassing = $opponentFirstDownsByPassing;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentFirstDownsByPenalty() : ?int
    {
        return $this->opponentFirstDownsByPenalty;
    }
    /**
     * 
     *
     * @param int|null $opponentFirstDownsByPenalty
     *
     * @return self
     */
    public function setOpponentFirstDownsByPenalty(?int $opponentFirstDownsByPenalty) : self
    {
        $this->opponentFirstDownsByPenalty = $opponentFirstDownsByPenalty;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentOffensivePlays() : int
    {
        return $this->opponentOffensivePlays;
    }
    /**
     * 
     *
     * @param int $opponentOffensivePlays
     *
     * @return self
     */
    public function setOpponentOffensivePlays(int $opponentOffensivePlays) : self
    {
        $this->opponentOffensivePlays = $opponentOffensivePlays;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentOffensiveYards() : int
    {
        return $this->opponentOffensiveYards;
    }
    /**
     * 
     *
     * @param int $opponentOffensiveYards
     *
     * @return self
     */
    public function setOpponentOffensiveYards(int $opponentOffensiveYards) : self
    {
        $this->opponentOffensiveYards = $opponentOffensiveYards;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOpponentOffensiveYardsPerPlay() : float
    {
        return $this->opponentOffensiveYardsPerPlay;
    }
    /**
     * 
     *
     * @param float $opponentOffensiveYardsPerPlay
     *
     * @return self
     */
    public function setOpponentOffensiveYardsPerPlay(float $opponentOffensiveYardsPerPlay) : self
    {
        $this->opponentOffensiveYardsPerPlay = $opponentOffensiveYardsPerPlay;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentTouchdowns() : ?int
    {
        return $this->opponentTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $opponentTouchdowns
     *
     * @return self
     */
    public function setOpponentTouchdowns(?int $opponentTouchdowns) : self
    {
        $this->opponentTouchdowns = $opponentTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentRushingAttempts() : ?int
    {
        return $this->opponentRushingAttempts;
    }
    /**
     * 
     *
     * @param int|null $opponentRushingAttempts
     *
     * @return self
     */
    public function setOpponentRushingAttempts(?int $opponentRushingAttempts) : self
    {
        $this->opponentRushingAttempts = $opponentRushingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentRushingYards() : ?int
    {
        return $this->opponentRushingYards;
    }
    /**
     * 
     *
     * @param int|null $opponentRushingYards
     *
     * @return self
     */
    public function setOpponentRushingYards(?int $opponentRushingYards) : self
    {
        $this->opponentRushingYards = $opponentRushingYards;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOpponentRushingYardsPerAttempt() : float
    {
        return $this->opponentRushingYardsPerAttempt;
    }
    /**
     * 
     *
     * @param float $opponentRushingYardsPerAttempt
     *
     * @return self
     */
    public function setOpponentRushingYardsPerAttempt(float $opponentRushingYardsPerAttempt) : self
    {
        $this->opponentRushingYardsPerAttempt = $opponentRushingYardsPerAttempt;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentRushingTouchdowns() : ?int
    {
        return $this->opponentRushingTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $opponentRushingTouchdowns
     *
     * @return self
     */
    public function setOpponentRushingTouchdowns(?int $opponentRushingTouchdowns) : self
    {
        $this->opponentRushingTouchdowns = $opponentRushingTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentPassingAttempts() : ?int
    {
        return $this->opponentPassingAttempts;
    }
    /**
     * 
     *
     * @param int|null $opponentPassingAttempts
     *
     * @return self
     */
    public function setOpponentPassingAttempts(?int $opponentPassingAttempts) : self
    {
        $this->opponentPassingAttempts = $opponentPassingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentPassingCompletions() : ?int
    {
        return $this->opponentPassingCompletions;
    }
    /**
     * 
     *
     * @param int|null $opponentPassingCompletions
     *
     * @return self
     */
    public function setOpponentPassingCompletions(?int $opponentPassingCompletions) : self
    {
        $this->opponentPassingCompletions = $opponentPassingCompletions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentPassingYards() : ?int
    {
        return $this->opponentPassingYards;
    }
    /**
     * 
     *
     * @param int|null $opponentPassingYards
     *
     * @return self
     */
    public function setOpponentPassingYards(?int $opponentPassingYards) : self
    {
        $this->opponentPassingYards = $opponentPassingYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentPassingTouchdowns() : ?int
    {
        return $this->opponentPassingTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $opponentPassingTouchdowns
     *
     * @return self
     */
    public function setOpponentPassingTouchdowns(?int $opponentPassingTouchdowns) : self
    {
        $this->opponentPassingTouchdowns = $opponentPassingTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentPassingInterceptions() : ?int
    {
        return $this->opponentPassingInterceptions;
    }
    /**
     * 
     *
     * @param int|null $opponentPassingInterceptions
     *
     * @return self
     */
    public function setOpponentPassingInterceptions(?int $opponentPassingInterceptions) : self
    {
        $this->opponentPassingInterceptions = $opponentPassingInterceptions;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOpponentPassingYardsPerAttempt() : float
    {
        return $this->opponentPassingYardsPerAttempt;
    }
    /**
     * 
     *
     * @param float $opponentPassingYardsPerAttempt
     *
     * @return self
     */
    public function setOpponentPassingYardsPerAttempt(float $opponentPassingYardsPerAttempt) : self
    {
        $this->opponentPassingYardsPerAttempt = $opponentPassingYardsPerAttempt;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOpponentPassingYardsPerCompletion() : float
    {
        return $this->opponentPassingYardsPerCompletion;
    }
    /**
     * 
     *
     * @param float $opponentPassingYardsPerCompletion
     *
     * @return self
     */
    public function setOpponentPassingYardsPerCompletion(float $opponentPassingYardsPerCompletion) : self
    {
        $this->opponentPassingYardsPerCompletion = $opponentPassingYardsPerCompletion;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOpponentCompletionPercentage() : float
    {
        return $this->opponentCompletionPercentage;
    }
    /**
     * 
     *
     * @param float $opponentCompletionPercentage
     *
     * @return self
     */
    public function setOpponentCompletionPercentage(float $opponentCompletionPercentage) : self
    {
        $this->opponentCompletionPercentage = $opponentCompletionPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getOpponentPasserRating() : ?float
    {
        return $this->opponentPasserRating;
    }
    /**
     * 
     *
     * @param float|null $opponentPasserRating
     *
     * @return self
     */
    public function setOpponentPasserRating(?float $opponentPasserRating) : self
    {
        $this->opponentPasserRating = $opponentPasserRating;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentThirdDownAttempts() : ?int
    {
        return $this->opponentThirdDownAttempts;
    }
    /**
     * 
     *
     * @param int|null $opponentThirdDownAttempts
     *
     * @return self
     */
    public function setOpponentThirdDownAttempts(?int $opponentThirdDownAttempts) : self
    {
        $this->opponentThirdDownAttempts = $opponentThirdDownAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentThirdDownConversions() : ?int
    {
        return $this->opponentThirdDownConversions;
    }
    /**
     * 
     *
     * @param int|null $opponentThirdDownConversions
     *
     * @return self
     */
    public function setOpponentThirdDownConversions(?int $opponentThirdDownConversions) : self
    {
        $this->opponentThirdDownConversions = $opponentThirdDownConversions;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getOpponentThirdDownPercentage() : ?float
    {
        return $this->opponentThirdDownPercentage;
    }
    /**
     * 
     *
     * @param float|null $opponentThirdDownPercentage
     *
     * @return self
     */
    public function setOpponentThirdDownPercentage(?float $opponentThirdDownPercentage) : self
    {
        $this->opponentThirdDownPercentage = $opponentThirdDownPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentFourthDownAttempts() : ?int
    {
        return $this->opponentFourthDownAttempts;
    }
    /**
     * 
     *
     * @param int|null $opponentFourthDownAttempts
     *
     * @return self
     */
    public function setOpponentFourthDownAttempts(?int $opponentFourthDownAttempts) : self
    {
        $this->opponentFourthDownAttempts = $opponentFourthDownAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentFourthDownConversions() : ?int
    {
        return $this->opponentFourthDownConversions;
    }
    /**
     * 
     *
     * @param int|null $opponentFourthDownConversions
     *
     * @return self
     */
    public function setOpponentFourthDownConversions(?int $opponentFourthDownConversions) : self
    {
        $this->opponentFourthDownConversions = $opponentFourthDownConversions;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getOpponentFourthDownPercentage() : ?float
    {
        return $this->opponentFourthDownPercentage;
    }
    /**
     * 
     *
     * @param float|null $opponentFourthDownPercentage
     *
     * @return self
     */
    public function setOpponentFourthDownPercentage(?float $opponentFourthDownPercentage) : self
    {
        $this->opponentFourthDownPercentage = $opponentFourthDownPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentRedZoneAttempts() : ?int
    {
        return $this->opponentRedZoneAttempts;
    }
    /**
     * 
     *
     * @param int|null $opponentRedZoneAttempts
     *
     * @return self
     */
    public function setOpponentRedZoneAttempts(?int $opponentRedZoneAttempts) : self
    {
        $this->opponentRedZoneAttempts = $opponentRedZoneAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentRedZoneConversions() : ?int
    {
        return $this->opponentRedZoneConversions;
    }
    /**
     * 
     *
     * @param int|null $opponentRedZoneConversions
     *
     * @return self
     */
    public function setOpponentRedZoneConversions(?int $opponentRedZoneConversions) : self
    {
        $this->opponentRedZoneConversions = $opponentRedZoneConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentGoalToGoAttempts() : ?int
    {
        return $this->opponentGoalToGoAttempts;
    }
    /**
     * 
     *
     * @param int|null $opponentGoalToGoAttempts
     *
     * @return self
     */
    public function setOpponentGoalToGoAttempts(?int $opponentGoalToGoAttempts) : self
    {
        $this->opponentGoalToGoAttempts = $opponentGoalToGoAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentGoalToGoConversions() : ?int
    {
        return $this->opponentGoalToGoConversions;
    }
    /**
     * 
     *
     * @param int|null $opponentGoalToGoConversions
     *
     * @return self
     */
    public function setOpponentGoalToGoConversions(?int $opponentGoalToGoConversions) : self
    {
        $this->opponentGoalToGoConversions = $opponentGoalToGoConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentReturnYards() : ?int
    {
        return $this->opponentReturnYards;
    }
    /**
     * 
     *
     * @param int|null $opponentReturnYards
     *
     * @return self
     */
    public function setOpponentReturnYards(?int $opponentReturnYards) : self
    {
        $this->opponentReturnYards = $opponentReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentPenalties() : ?int
    {
        return $this->opponentPenalties;
    }
    /**
     * 
     *
     * @param int|null $opponentPenalties
     *
     * @return self
     */
    public function setOpponentPenalties(?int $opponentPenalties) : self
    {
        $this->opponentPenalties = $opponentPenalties;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentPenaltyYards() : ?int
    {
        return $this->opponentPenaltyYards;
    }
    /**
     * 
     *
     * @param int|null $opponentPenaltyYards
     *
     * @return self
     */
    public function setOpponentPenaltyYards(?int $opponentPenaltyYards) : self
    {
        $this->opponentPenaltyYards = $opponentPenaltyYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentFumbles() : ?int
    {
        return $this->opponentFumbles;
    }
    /**
     * 
     *
     * @param int|null $opponentFumbles
     *
     * @return self
     */
    public function setOpponentFumbles(?int $opponentFumbles) : self
    {
        $this->opponentFumbles = $opponentFumbles;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentFumblesLost() : ?int
    {
        return $this->opponentFumblesLost;
    }
    /**
     * 
     *
     * @param int|null $opponentFumblesLost
     *
     * @return self
     */
    public function setOpponentFumblesLost(?int $opponentFumblesLost) : self
    {
        $this->opponentFumblesLost = $opponentFumblesLost;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentTimesSacked() : ?int
    {
        return $this->opponentTimesSacked;
    }
    /**
     * 
     *
     * @param int|null $opponentTimesSacked
     *
     * @return self
     */
    public function setOpponentTimesSacked(?int $opponentTimesSacked) : self
    {
        $this->opponentTimesSacked = $opponentTimesSacked;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentTimesSackedYards() : ?int
    {
        return $this->opponentTimesSackedYards;
    }
    /**
     * 
     *
     * @param int|null $opponentTimesSackedYards
     *
     * @return self
     */
    public function setOpponentTimesSackedYards(?int $opponentTimesSackedYards) : self
    {
        $this->opponentTimesSackedYards = $opponentTimesSackedYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentQuarterbackHits() : ?int
    {
        return $this->opponentQuarterbackHits;
    }
    /**
     * 
     *
     * @param int|null $opponentQuarterbackHits
     *
     * @return self
     */
    public function setOpponentQuarterbackHits(?int $opponentQuarterbackHits) : self
    {
        $this->opponentQuarterbackHits = $opponentQuarterbackHits;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentTacklesForLoss() : ?int
    {
        return $this->opponentTacklesForLoss;
    }
    /**
     * 
     *
     * @param int|null $opponentTacklesForLoss
     *
     * @return self
     */
    public function setOpponentTacklesForLoss(?int $opponentTacklesForLoss) : self
    {
        $this->opponentTacklesForLoss = $opponentTacklesForLoss;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentSafeties() : ?int
    {
        return $this->opponentSafeties;
    }
    /**
     * 
     *
     * @param int|null $opponentSafeties
     *
     * @return self
     */
    public function setOpponentSafeties(?int $opponentSafeties) : self
    {
        $this->opponentSafeties = $opponentSafeties;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentPunts() : ?int
    {
        return $this->opponentPunts;
    }
    /**
     * 
     *
     * @param int|null $opponentPunts
     *
     * @return self
     */
    public function setOpponentPunts(?int $opponentPunts) : self
    {
        $this->opponentPunts = $opponentPunts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentPuntYards() : ?int
    {
        return $this->opponentPuntYards;
    }
    /**
     * 
     *
     * @param int|null $opponentPuntYards
     *
     * @return self
     */
    public function setOpponentPuntYards(?int $opponentPuntYards) : self
    {
        $this->opponentPuntYards = $opponentPuntYards;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOpponentPuntAverage() : float
    {
        return $this->opponentPuntAverage;
    }
    /**
     * 
     *
     * @param float $opponentPuntAverage
     *
     * @return self
     */
    public function setOpponentPuntAverage(float $opponentPuntAverage) : self
    {
        $this->opponentPuntAverage = $opponentPuntAverage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentGiveaways() : int
    {
        return $this->opponentGiveaways;
    }
    /**
     * 
     *
     * @param int $opponentGiveaways
     *
     * @return self
     */
    public function setOpponentGiveaways(int $opponentGiveaways) : self
    {
        $this->opponentGiveaways = $opponentGiveaways;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentTakeaways() : int
    {
        return $this->opponentTakeaways;
    }
    /**
     * 
     *
     * @param int $opponentTakeaways
     *
     * @return self
     */
    public function setOpponentTakeaways(int $opponentTakeaways) : self
    {
        $this->opponentTakeaways = $opponentTakeaways;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentTurnoverDifferential() : int
    {
        return $this->opponentTurnoverDifferential;
    }
    /**
     * 
     *
     * @param int $opponentTurnoverDifferential
     *
     * @return self
     */
    public function setOpponentTurnoverDifferential(int $opponentTurnoverDifferential) : self
    {
        $this->opponentTurnoverDifferential = $opponentTurnoverDifferential;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRedZonePercentage() : ?float
    {
        return $this->redZonePercentage;
    }
    /**
     * 
     *
     * @param float|null $redZonePercentage
     *
     * @return self
     */
    public function setRedZonePercentage(?float $redZonePercentage) : self
    {
        $this->redZonePercentage = $redZonePercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getGoalToGoPercentage() : ?float
    {
        return $this->goalToGoPercentage;
    }
    /**
     * 
     *
     * @param float|null $goalToGoPercentage
     *
     * @return self
     */
    public function setGoalToGoPercentage(?float $goalToGoPercentage) : self
    {
        $this->goalToGoPercentage = $goalToGoPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getQuarterbackHitsDifferential() : ?int
    {
        return $this->quarterbackHitsDifferential;
    }
    /**
     * 
     *
     * @param int|null $quarterbackHitsDifferential
     *
     * @return self
     */
    public function setQuarterbackHitsDifferential(?int $quarterbackHitsDifferential) : self
    {
        $this->quarterbackHitsDifferential = $quarterbackHitsDifferential;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTacklesForLossDifferential() : ?int
    {
        return $this->tacklesForLossDifferential;
    }
    /**
     * 
     *
     * @param int|null $tacklesForLossDifferential
     *
     * @return self
     */
    public function setTacklesForLossDifferential(?int $tacklesForLossDifferential) : self
    {
        $this->tacklesForLossDifferential = $tacklesForLossDifferential;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getQuarterbackSacksDifferential() : int
    {
        return $this->quarterbackSacksDifferential;
    }
    /**
     * 
     *
     * @param int $quarterbackSacksDifferential
     *
     * @return self
     */
    public function setQuarterbackSacksDifferential(int $quarterbackSacksDifferential) : self
    {
        $this->quarterbackSacksDifferential = $quarterbackSacksDifferential;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTacklesForLossPercentage() : ?float
    {
        return $this->tacklesForLossPercentage;
    }
    /**
     * 
     *
     * @param float|null $tacklesForLossPercentage
     *
     * @return self
     */
    public function setTacklesForLossPercentage(?float $tacklesForLossPercentage) : self
    {
        $this->tacklesForLossPercentage = $tacklesForLossPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getQuarterbackHitsPercentage() : ?float
    {
        return $this->quarterbackHitsPercentage;
    }
    /**
     * 
     *
     * @param float|null $quarterbackHitsPercentage
     *
     * @return self
     */
    public function setQuarterbackHitsPercentage(?float $quarterbackHitsPercentage) : self
    {
        $this->quarterbackHitsPercentage = $quarterbackHitsPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTimesSackedPercentage() : float
    {
        return $this->timesSackedPercentage;
    }
    /**
     * 
     *
     * @param float $timesSackedPercentage
     *
     * @return self
     */
    public function setTimesSackedPercentage(float $timesSackedPercentage) : self
    {
        $this->timesSackedPercentage = $timesSackedPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getOpponentRedZonePercentage() : ?float
    {
        return $this->opponentRedZonePercentage;
    }
    /**
     * 
     *
     * @param float|null $opponentRedZonePercentage
     *
     * @return self
     */
    public function setOpponentRedZonePercentage(?float $opponentRedZonePercentage) : self
    {
        $this->opponentRedZonePercentage = $opponentRedZonePercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getOpponentGoalToGoPercentage() : ?float
    {
        return $this->opponentGoalToGoPercentage;
    }
    /**
     * 
     *
     * @param float|null $opponentGoalToGoPercentage
     *
     * @return self
     */
    public function setOpponentGoalToGoPercentage(?float $opponentGoalToGoPercentage) : self
    {
        $this->opponentGoalToGoPercentage = $opponentGoalToGoPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentQuarterbackHitsDifferential() : ?int
    {
        return $this->opponentQuarterbackHitsDifferential;
    }
    /**
     * 
     *
     * @param int|null $opponentQuarterbackHitsDifferential
     *
     * @return self
     */
    public function setOpponentQuarterbackHitsDifferential(?int $opponentQuarterbackHitsDifferential) : self
    {
        $this->opponentQuarterbackHitsDifferential = $opponentQuarterbackHitsDifferential;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentTacklesForLossDifferential() : ?int
    {
        return $this->opponentTacklesForLossDifferential;
    }
    /**
     * 
     *
     * @param int|null $opponentTacklesForLossDifferential
     *
     * @return self
     */
    public function setOpponentTacklesForLossDifferential(?int $opponentTacklesForLossDifferential) : self
    {
        $this->opponentTacklesForLossDifferential = $opponentTacklesForLossDifferential;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentQuarterbackSacksDifferential() : ?int
    {
        return $this->opponentQuarterbackSacksDifferential;
    }
    /**
     * 
     *
     * @param int|null $opponentQuarterbackSacksDifferential
     *
     * @return self
     */
    public function setOpponentQuarterbackSacksDifferential(?int $opponentQuarterbackSacksDifferential) : self
    {
        $this->opponentQuarterbackSacksDifferential = $opponentQuarterbackSacksDifferential;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getOpponentTacklesForLossPercentage() : ?float
    {
        return $this->opponentTacklesForLossPercentage;
    }
    /**
     * 
     *
     * @param float|null $opponentTacklesForLossPercentage
     *
     * @return self
     */
    public function setOpponentTacklesForLossPercentage(?float $opponentTacklesForLossPercentage) : self
    {
        $this->opponentTacklesForLossPercentage = $opponentTacklesForLossPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getOpponentQuarterbackHitsPercentage() : ?float
    {
        return $this->opponentQuarterbackHitsPercentage;
    }
    /**
     * 
     *
     * @param float|null $opponentQuarterbackHitsPercentage
     *
     * @return self
     */
    public function setOpponentQuarterbackHitsPercentage(?float $opponentQuarterbackHitsPercentage) : self
    {
        $this->opponentQuarterbackHitsPercentage = $opponentQuarterbackHitsPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOpponentTimesSackedPercentage() : float
    {
        return $this->opponentTimesSackedPercentage;
    }
    /**
     * 
     *
     * @param float $opponentTimesSackedPercentage
     *
     * @return self
     */
    public function setOpponentTimesSackedPercentage(float $opponentTimesSackedPercentage) : self
    {
        $this->opponentTimesSackedPercentage = $opponentTimesSackedPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getKickoffs() : ?int
    {
        return $this->kickoffs;
    }
    /**
     * 
     *
     * @param int|null $kickoffs
     *
     * @return self
     */
    public function setKickoffs(?int $kickoffs) : self
    {
        $this->kickoffs = $kickoffs;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getKickoffsInEndZone() : ?int
    {
        return $this->kickoffsInEndZone;
    }
    /**
     * 
     *
     * @param int|null $kickoffsInEndZone
     *
     * @return self
     */
    public function setKickoffsInEndZone(?int $kickoffsInEndZone) : self
    {
        $this->kickoffsInEndZone = $kickoffsInEndZone;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getKickoffTouchbacks() : ?int
    {
        return $this->kickoffTouchbacks;
    }
    /**
     * 
     *
     * @param int|null $kickoffTouchbacks
     *
     * @return self
     */
    public function setKickoffTouchbacks(?int $kickoffTouchbacks) : self
    {
        $this->kickoffTouchbacks = $kickoffTouchbacks;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPuntsHadBlocked() : ?int
    {
        return $this->puntsHadBlocked;
    }
    /**
     * 
     *
     * @param int|null $puntsHadBlocked
     *
     * @return self
     */
    public function setPuntsHadBlocked(?int $puntsHadBlocked) : self
    {
        $this->puntsHadBlocked = $puntsHadBlocked;
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
     * @return int|null
     */
    public function getExtraPointKickingAttempts() : ?int
    {
        return $this->extraPointKickingAttempts;
    }
    /**
     * 
     *
     * @param int|null $extraPointKickingAttempts
     *
     * @return self
     */
    public function setExtraPointKickingAttempts(?int $extraPointKickingAttempts) : self
    {
        $this->extraPointKickingAttempts = $extraPointKickingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getExtraPointKickingConversions() : ?int
    {
        return $this->extraPointKickingConversions;
    }
    /**
     * 
     *
     * @param int|null $extraPointKickingConversions
     *
     * @return self
     */
    public function setExtraPointKickingConversions(?int $extraPointKickingConversions) : self
    {
        $this->extraPointKickingConversions = $extraPointKickingConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getExtraPointsHadBlocked() : ?int
    {
        return $this->extraPointsHadBlocked;
    }
    /**
     * 
     *
     * @param int|null $extraPointsHadBlocked
     *
     * @return self
     */
    public function setExtraPointsHadBlocked(?int $extraPointsHadBlocked) : self
    {
        $this->extraPointsHadBlocked = $extraPointsHadBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getExtraPointPassingAttempts() : ?int
    {
        return $this->extraPointPassingAttempts;
    }
    /**
     * 
     *
     * @param int|null $extraPointPassingAttempts
     *
     * @return self
     */
    public function setExtraPointPassingAttempts(?int $extraPointPassingAttempts) : self
    {
        $this->extraPointPassingAttempts = $extraPointPassingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getExtraPointPassingConversions() : ?int
    {
        return $this->extraPointPassingConversions;
    }
    /**
     * 
     *
     * @param int|null $extraPointPassingConversions
     *
     * @return self
     */
    public function setExtraPointPassingConversions(?int $extraPointPassingConversions) : self
    {
        $this->extraPointPassingConversions = $extraPointPassingConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getExtraPointRushingAttempts() : ?int
    {
        return $this->extraPointRushingAttempts;
    }
    /**
     * 
     *
     * @param int|null $extraPointRushingAttempts
     *
     * @return self
     */
    public function setExtraPointRushingAttempts(?int $extraPointRushingAttempts) : self
    {
        $this->extraPointRushingAttempts = $extraPointRushingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getExtraPointRushingConversions() : ?int
    {
        return $this->extraPointRushingConversions;
    }
    /**
     * 
     *
     * @param int|null $extraPointRushingConversions
     *
     * @return self
     */
    public function setExtraPointRushingConversions(?int $extraPointRushingConversions) : self
    {
        $this->extraPointRushingConversions = $extraPointRushingConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFieldGoalAttempts() : ?int
    {
        return $this->fieldGoalAttempts;
    }
    /**
     * 
     *
     * @param int|null $fieldGoalAttempts
     *
     * @return self
     */
    public function setFieldGoalAttempts(?int $fieldGoalAttempts) : self
    {
        $this->fieldGoalAttempts = $fieldGoalAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFieldGoalsMade() : ?int
    {
        return $this->fieldGoalsMade;
    }
    /**
     * 
     *
     * @param int|null $fieldGoalsMade
     *
     * @return self
     */
    public function setFieldGoalsMade(?int $fieldGoalsMade) : self
    {
        $this->fieldGoalsMade = $fieldGoalsMade;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFieldGoalsHadBlocked() : ?int
    {
        return $this->fieldGoalsHadBlocked;
    }
    /**
     * 
     *
     * @param int|null $fieldGoalsHadBlocked
     *
     * @return self
     */
    public function setFieldGoalsHadBlocked(?int $fieldGoalsHadBlocked) : self
    {
        $this->fieldGoalsHadBlocked = $fieldGoalsHadBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPuntReturns() : ?int
    {
        return $this->puntReturns;
    }
    /**
     * 
     *
     * @param int|null $puntReturns
     *
     * @return self
     */
    public function setPuntReturns(?int $puntReturns) : self
    {
        $this->puntReturns = $puntReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPuntReturnYards() : ?int
    {
        return $this->puntReturnYards;
    }
    /**
     * 
     *
     * @param int|null $puntReturnYards
     *
     * @return self
     */
    public function setPuntReturnYards(?int $puntReturnYards) : self
    {
        $this->puntReturnYards = $puntReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getKickReturns() : ?int
    {
        return $this->kickReturns;
    }
    /**
     * 
     *
     * @param int|null $kickReturns
     *
     * @return self
     */
    public function setKickReturns(?int $kickReturns) : self
    {
        $this->kickReturns = $kickReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getKickReturnYards() : ?int
    {
        return $this->kickReturnYards;
    }
    /**
     * 
     *
     * @param int|null $kickReturnYards
     *
     * @return self
     */
    public function setKickReturnYards(?int $kickReturnYards) : self
    {
        $this->kickReturnYards = $kickReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getInterceptionReturns() : ?int
    {
        return $this->interceptionReturns;
    }
    /**
     * 
     *
     * @param int|null $interceptionReturns
     *
     * @return self
     */
    public function setInterceptionReturns(?int $interceptionReturns) : self
    {
        $this->interceptionReturns = $interceptionReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getInterceptionReturnYards() : ?int
    {
        return $this->interceptionReturnYards;
    }
    /**
     * 
     *
     * @param int|null $interceptionReturnYards
     *
     * @return self
     */
    public function setInterceptionReturnYards(?int $interceptionReturnYards) : self
    {
        $this->interceptionReturnYards = $interceptionReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentKickoffs() : ?int
    {
        return $this->opponentKickoffs;
    }
    /**
     * 
     *
     * @param int|null $opponentKickoffs
     *
     * @return self
     */
    public function setOpponentKickoffs(?int $opponentKickoffs) : self
    {
        $this->opponentKickoffs = $opponentKickoffs;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentKickoffsInEndZone() : ?int
    {
        return $this->opponentKickoffsInEndZone;
    }
    /**
     * 
     *
     * @param int|null $opponentKickoffsInEndZone
     *
     * @return self
     */
    public function setOpponentKickoffsInEndZone(?int $opponentKickoffsInEndZone) : self
    {
        $this->opponentKickoffsInEndZone = $opponentKickoffsInEndZone;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentKickoffTouchbacks() : ?int
    {
        return $this->opponentKickoffTouchbacks;
    }
    /**
     * 
     *
     * @param int|null $opponentKickoffTouchbacks
     *
     * @return self
     */
    public function setOpponentKickoffTouchbacks(?int $opponentKickoffTouchbacks) : self
    {
        $this->opponentKickoffTouchbacks = $opponentKickoffTouchbacks;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentPuntsHadBlocked() : ?int
    {
        return $this->opponentPuntsHadBlocked;
    }
    /**
     * 
     *
     * @param int|null $opponentPuntsHadBlocked
     *
     * @return self
     */
    public function setOpponentPuntsHadBlocked(?int $opponentPuntsHadBlocked) : self
    {
        $this->opponentPuntsHadBlocked = $opponentPuntsHadBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getOpponentPuntNetAverage() : ?float
    {
        return $this->opponentPuntNetAverage;
    }
    /**
     * 
     *
     * @param float|null $opponentPuntNetAverage
     *
     * @return self
     */
    public function setOpponentPuntNetAverage(?float $opponentPuntNetAverage) : self
    {
        $this->opponentPuntNetAverage = $opponentPuntNetAverage;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentExtraPointKickingAttempts() : ?int
    {
        return $this->opponentExtraPointKickingAttempts;
    }
    /**
     * 
     *
     * @param int|null $opponentExtraPointKickingAttempts
     *
     * @return self
     */
    public function setOpponentExtraPointKickingAttempts(?int $opponentExtraPointKickingAttempts) : self
    {
        $this->opponentExtraPointKickingAttempts = $opponentExtraPointKickingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentExtraPointKickingConversions() : ?int
    {
        return $this->opponentExtraPointKickingConversions;
    }
    /**
     * 
     *
     * @param int|null $opponentExtraPointKickingConversions
     *
     * @return self
     */
    public function setOpponentExtraPointKickingConversions(?int $opponentExtraPointKickingConversions) : self
    {
        $this->opponentExtraPointKickingConversions = $opponentExtraPointKickingConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentExtraPointsHadBlocked() : ?int
    {
        return $this->opponentExtraPointsHadBlocked;
    }
    /**
     * 
     *
     * @param int|null $opponentExtraPointsHadBlocked
     *
     * @return self
     */
    public function setOpponentExtraPointsHadBlocked(?int $opponentExtraPointsHadBlocked) : self
    {
        $this->opponentExtraPointsHadBlocked = $opponentExtraPointsHadBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentExtraPointPassingAttempts() : ?int
    {
        return $this->opponentExtraPointPassingAttempts;
    }
    /**
     * 
     *
     * @param int|null $opponentExtraPointPassingAttempts
     *
     * @return self
     */
    public function setOpponentExtraPointPassingAttempts(?int $opponentExtraPointPassingAttempts) : self
    {
        $this->opponentExtraPointPassingAttempts = $opponentExtraPointPassingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentExtraPointPassingConversions() : ?int
    {
        return $this->opponentExtraPointPassingConversions;
    }
    /**
     * 
     *
     * @param int|null $opponentExtraPointPassingConversions
     *
     * @return self
     */
    public function setOpponentExtraPointPassingConversions(?int $opponentExtraPointPassingConversions) : self
    {
        $this->opponentExtraPointPassingConversions = $opponentExtraPointPassingConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentExtraPointRushingAttempts() : ?int
    {
        return $this->opponentExtraPointRushingAttempts;
    }
    /**
     * 
     *
     * @param int|null $opponentExtraPointRushingAttempts
     *
     * @return self
     */
    public function setOpponentExtraPointRushingAttempts(?int $opponentExtraPointRushingAttempts) : self
    {
        $this->opponentExtraPointRushingAttempts = $opponentExtraPointRushingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentExtraPointRushingConversions() : ?int
    {
        return $this->opponentExtraPointRushingConversions;
    }
    /**
     * 
     *
     * @param int|null $opponentExtraPointRushingConversions
     *
     * @return self
     */
    public function setOpponentExtraPointRushingConversions(?int $opponentExtraPointRushingConversions) : self
    {
        $this->opponentExtraPointRushingConversions = $opponentExtraPointRushingConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentFieldGoalAttempts() : ?int
    {
        return $this->opponentFieldGoalAttempts;
    }
    /**
     * 
     *
     * @param int|null $opponentFieldGoalAttempts
     *
     * @return self
     */
    public function setOpponentFieldGoalAttempts(?int $opponentFieldGoalAttempts) : self
    {
        $this->opponentFieldGoalAttempts = $opponentFieldGoalAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentFieldGoalsMade() : ?int
    {
        return $this->opponentFieldGoalsMade;
    }
    /**
     * 
     *
     * @param int|null $opponentFieldGoalsMade
     *
     * @return self
     */
    public function setOpponentFieldGoalsMade(?int $opponentFieldGoalsMade) : self
    {
        $this->opponentFieldGoalsMade = $opponentFieldGoalsMade;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentFieldGoalsHadBlocked() : ?int
    {
        return $this->opponentFieldGoalsHadBlocked;
    }
    /**
     * 
     *
     * @param int|null $opponentFieldGoalsHadBlocked
     *
     * @return self
     */
    public function setOpponentFieldGoalsHadBlocked(?int $opponentFieldGoalsHadBlocked) : self
    {
        $this->opponentFieldGoalsHadBlocked = $opponentFieldGoalsHadBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentPuntReturns() : ?int
    {
        return $this->opponentPuntReturns;
    }
    /**
     * 
     *
     * @param int|null $opponentPuntReturns
     *
     * @return self
     */
    public function setOpponentPuntReturns(?int $opponentPuntReturns) : self
    {
        $this->opponentPuntReturns = $opponentPuntReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentPuntReturnYards() : ?int
    {
        return $this->opponentPuntReturnYards;
    }
    /**
     * 
     *
     * @param int|null $opponentPuntReturnYards
     *
     * @return self
     */
    public function setOpponentPuntReturnYards(?int $opponentPuntReturnYards) : self
    {
        $this->opponentPuntReturnYards = $opponentPuntReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentKickReturns() : ?int
    {
        return $this->opponentKickReturns;
    }
    /**
     * 
     *
     * @param int|null $opponentKickReturns
     *
     * @return self
     */
    public function setOpponentKickReturns(?int $opponentKickReturns) : self
    {
        $this->opponentKickReturns = $opponentKickReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentKickReturnYards() : ?int
    {
        return $this->opponentKickReturnYards;
    }
    /**
     * 
     *
     * @param int|null $opponentKickReturnYards
     *
     * @return self
     */
    public function setOpponentKickReturnYards(?int $opponentKickReturnYards) : self
    {
        $this->opponentKickReturnYards = $opponentKickReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentInterceptionReturns() : ?int
    {
        return $this->opponentInterceptionReturns;
    }
    /**
     * 
     *
     * @param int|null $opponentInterceptionReturns
     *
     * @return self
     */
    public function setOpponentInterceptionReturns(?int $opponentInterceptionReturns) : self
    {
        $this->opponentInterceptionReturns = $opponentInterceptionReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentInterceptionReturnYards() : ?int
    {
        return $this->opponentInterceptionReturnYards;
    }
    /**
     * 
     *
     * @param int|null $opponentInterceptionReturnYards
     *
     * @return self
     */
    public function setOpponentInterceptionReturnYards(?int $opponentInterceptionReturnYards) : self
    {
        $this->opponentInterceptionReturnYards = $opponentInterceptionReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSoloTackles() : ?int
    {
        return $this->soloTackles;
    }
    /**
     * 
     *
     * @param int|null $soloTackles
     *
     * @return self
     */
    public function setSoloTackles(?int $soloTackles) : self
    {
        $this->soloTackles = $soloTackles;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAssistedTackles() : ?int
    {
        return $this->assistedTackles;
    }
    /**
     * 
     *
     * @param int|null $assistedTackles
     *
     * @return self
     */
    public function setAssistedTackles(?int $assistedTackles) : self
    {
        $this->assistedTackles = $assistedTackles;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSacks() : ?int
    {
        return $this->sacks;
    }
    /**
     * 
     *
     * @param int|null $sacks
     *
     * @return self
     */
    public function setSacks(?int $sacks) : self
    {
        $this->sacks = $sacks;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSackYards() : ?int
    {
        return $this->sackYards;
    }
    /**
     * 
     *
     * @param int|null $sackYards
     *
     * @return self
     */
    public function setSackYards(?int $sackYards) : self
    {
        $this->sackYards = $sackYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPassesDefended() : ?int
    {
        return $this->passesDefended;
    }
    /**
     * 
     *
     * @param int|null $passesDefended
     *
     * @return self
     */
    public function setPassesDefended(?int $passesDefended) : self
    {
        $this->passesDefended = $passesDefended;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFumblesForced() : ?int
    {
        return $this->fumblesForced;
    }
    /**
     * 
     *
     * @param int|null $fumblesForced
     *
     * @return self
     */
    public function setFumblesForced(?int $fumblesForced) : self
    {
        $this->fumblesForced = $fumblesForced;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFumblesRecovered() : ?int
    {
        return $this->fumblesRecovered;
    }
    /**
     * 
     *
     * @param int|null $fumblesRecovered
     *
     * @return self
     */
    public function setFumblesRecovered(?int $fumblesRecovered) : self
    {
        $this->fumblesRecovered = $fumblesRecovered;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFumbleReturnYards() : ?int
    {
        return $this->fumbleReturnYards;
    }
    /**
     * 
     *
     * @param int|null $fumbleReturnYards
     *
     * @return self
     */
    public function setFumbleReturnYards(?int $fumbleReturnYards) : self
    {
        $this->fumbleReturnYards = $fumbleReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFumbleReturnTouchdowns() : ?int
    {
        return $this->fumbleReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $fumbleReturnTouchdowns
     *
     * @return self
     */
    public function setFumbleReturnTouchdowns(?int $fumbleReturnTouchdowns) : self
    {
        $this->fumbleReturnTouchdowns = $fumbleReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getInterceptionReturnTouchdowns() : ?int
    {
        return $this->interceptionReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $interceptionReturnTouchdowns
     *
     * @return self
     */
    public function setInterceptionReturnTouchdowns(?int $interceptionReturnTouchdowns) : self
    {
        $this->interceptionReturnTouchdowns = $interceptionReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBlockedKicks() : ?int
    {
        return $this->blockedKicks;
    }
    /**
     * 
     *
     * @param int|null $blockedKicks
     *
     * @return self
     */
    public function setBlockedKicks(?int $blockedKicks) : self
    {
        $this->blockedKicks = $blockedKicks;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPuntReturnTouchdowns() : ?int
    {
        return $this->puntReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $puntReturnTouchdowns
     *
     * @return self
     */
    public function setPuntReturnTouchdowns(?int $puntReturnTouchdowns) : self
    {
        $this->puntReturnTouchdowns = $puntReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPuntReturnLong() : ?int
    {
        return $this->puntReturnLong;
    }
    /**
     * 
     *
     * @param int|null $puntReturnLong
     *
     * @return self
     */
    public function setPuntReturnLong(?int $puntReturnLong) : self
    {
        $this->puntReturnLong = $puntReturnLong;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getKickReturnTouchdowns() : ?int
    {
        return $this->kickReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $kickReturnTouchdowns
     *
     * @return self
     */
    public function setKickReturnTouchdowns(?int $kickReturnTouchdowns) : self
    {
        $this->kickReturnTouchdowns = $kickReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getKickReturnLong() : ?int
    {
        return $this->kickReturnLong;
    }
    /**
     * 
     *
     * @param int|null $kickReturnLong
     *
     * @return self
     */
    public function setKickReturnLong(?int $kickReturnLong) : self
    {
        $this->kickReturnLong = $kickReturnLong;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBlockedKickReturnYards() : ?int
    {
        return $this->blockedKickReturnYards;
    }
    /**
     * 
     *
     * @param int|null $blockedKickReturnYards
     *
     * @return self
     */
    public function setBlockedKickReturnYards(?int $blockedKickReturnYards) : self
    {
        $this->blockedKickReturnYards = $blockedKickReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBlockedKickReturnTouchdowns() : ?int
    {
        return $this->blockedKickReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $blockedKickReturnTouchdowns
     *
     * @return self
     */
    public function setBlockedKickReturnTouchdowns(?int $blockedKickReturnTouchdowns) : self
    {
        $this->blockedKickReturnTouchdowns = $blockedKickReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFieldGoalReturnYards() : ?int
    {
        return $this->fieldGoalReturnYards;
    }
    /**
     * 
     *
     * @param int|null $fieldGoalReturnYards
     *
     * @return self
     */
    public function setFieldGoalReturnYards(?int $fieldGoalReturnYards) : self
    {
        $this->fieldGoalReturnYards = $fieldGoalReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFieldGoalReturnTouchdowns() : ?int
    {
        return $this->fieldGoalReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $fieldGoalReturnTouchdowns
     *
     * @return self
     */
    public function setFieldGoalReturnTouchdowns(?int $fieldGoalReturnTouchdowns) : self
    {
        $this->fieldGoalReturnTouchdowns = $fieldGoalReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPuntNetYards() : ?int
    {
        return $this->puntNetYards;
    }
    /**
     * 
     *
     * @param int|null $puntNetYards
     *
     * @return self
     */
    public function setPuntNetYards(?int $puntNetYards) : self
    {
        $this->puntNetYards = $puntNetYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentSoloTackles() : ?int
    {
        return $this->opponentSoloTackles;
    }
    /**
     * 
     *
     * @param int|null $opponentSoloTackles
     *
     * @return self
     */
    public function setOpponentSoloTackles(?int $opponentSoloTackles) : self
    {
        $this->opponentSoloTackles = $opponentSoloTackles;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentAssistedTackles() : ?int
    {
        return $this->opponentAssistedTackles;
    }
    /**
     * 
     *
     * @param int|null $opponentAssistedTackles
     *
     * @return self
     */
    public function setOpponentAssistedTackles(?int $opponentAssistedTackles) : self
    {
        $this->opponentAssistedTackles = $opponentAssistedTackles;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentSacks() : ?int
    {
        return $this->opponentSacks;
    }
    /**
     * 
     *
     * @param int|null $opponentSacks
     *
     * @return self
     */
    public function setOpponentSacks(?int $opponentSacks) : self
    {
        $this->opponentSacks = $opponentSacks;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentSackYards() : ?int
    {
        return $this->opponentSackYards;
    }
    /**
     * 
     *
     * @param int|null $opponentSackYards
     *
     * @return self
     */
    public function setOpponentSackYards(?int $opponentSackYards) : self
    {
        $this->opponentSackYards = $opponentSackYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentPassesDefended() : ?int
    {
        return $this->opponentPassesDefended;
    }
    /**
     * 
     *
     * @param int|null $opponentPassesDefended
     *
     * @return self
     */
    public function setOpponentPassesDefended(?int $opponentPassesDefended) : self
    {
        $this->opponentPassesDefended = $opponentPassesDefended;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentFumblesForced() : ?int
    {
        return $this->opponentFumblesForced;
    }
    /**
     * 
     *
     * @param int|null $opponentFumblesForced
     *
     * @return self
     */
    public function setOpponentFumblesForced(?int $opponentFumblesForced) : self
    {
        $this->opponentFumblesForced = $opponentFumblesForced;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentFumblesRecovered() : ?int
    {
        return $this->opponentFumblesRecovered;
    }
    /**
     * 
     *
     * @param int|null $opponentFumblesRecovered
     *
     * @return self
     */
    public function setOpponentFumblesRecovered(?int $opponentFumblesRecovered) : self
    {
        $this->opponentFumblesRecovered = $opponentFumblesRecovered;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentFumbleReturnYards() : ?int
    {
        return $this->opponentFumbleReturnYards;
    }
    /**
     * 
     *
     * @param int|null $opponentFumbleReturnYards
     *
     * @return self
     */
    public function setOpponentFumbleReturnYards(?int $opponentFumbleReturnYards) : self
    {
        $this->opponentFumbleReturnYards = $opponentFumbleReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentFumbleReturnTouchdowns() : ?int
    {
        return $this->opponentFumbleReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $opponentFumbleReturnTouchdowns
     *
     * @return self
     */
    public function setOpponentFumbleReturnTouchdowns(?int $opponentFumbleReturnTouchdowns) : self
    {
        $this->opponentFumbleReturnTouchdowns = $opponentFumbleReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentInterceptionReturnTouchdowns() : ?int
    {
        return $this->opponentInterceptionReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $opponentInterceptionReturnTouchdowns
     *
     * @return self
     */
    public function setOpponentInterceptionReturnTouchdowns(?int $opponentInterceptionReturnTouchdowns) : self
    {
        $this->opponentInterceptionReturnTouchdowns = $opponentInterceptionReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentBlockedKicks() : ?int
    {
        return $this->opponentBlockedKicks;
    }
    /**
     * 
     *
     * @param int|null $opponentBlockedKicks
     *
     * @return self
     */
    public function setOpponentBlockedKicks(?int $opponentBlockedKicks) : self
    {
        $this->opponentBlockedKicks = $opponentBlockedKicks;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentPuntReturnTouchdowns() : ?int
    {
        return $this->opponentPuntReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $opponentPuntReturnTouchdowns
     *
     * @return self
     */
    public function setOpponentPuntReturnTouchdowns(?int $opponentPuntReturnTouchdowns) : self
    {
        $this->opponentPuntReturnTouchdowns = $opponentPuntReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentPuntReturnLong() : ?int
    {
        return $this->opponentPuntReturnLong;
    }
    /**
     * 
     *
     * @param int|null $opponentPuntReturnLong
     *
     * @return self
     */
    public function setOpponentPuntReturnLong(?int $opponentPuntReturnLong) : self
    {
        $this->opponentPuntReturnLong = $opponentPuntReturnLong;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentKickReturnTouchdowns() : ?int
    {
        return $this->opponentKickReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $opponentKickReturnTouchdowns
     *
     * @return self
     */
    public function setOpponentKickReturnTouchdowns(?int $opponentKickReturnTouchdowns) : self
    {
        $this->opponentKickReturnTouchdowns = $opponentKickReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentKickReturnLong() : ?int
    {
        return $this->opponentKickReturnLong;
    }
    /**
     * 
     *
     * @param int|null $opponentKickReturnLong
     *
     * @return self
     */
    public function setOpponentKickReturnLong(?int $opponentKickReturnLong) : self
    {
        $this->opponentKickReturnLong = $opponentKickReturnLong;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentBlockedKickReturnYards() : ?int
    {
        return $this->opponentBlockedKickReturnYards;
    }
    /**
     * 
     *
     * @param int|null $opponentBlockedKickReturnYards
     *
     * @return self
     */
    public function setOpponentBlockedKickReturnYards(?int $opponentBlockedKickReturnYards) : self
    {
        $this->opponentBlockedKickReturnYards = $opponentBlockedKickReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentBlockedKickReturnTouchdowns() : ?int
    {
        return $this->opponentBlockedKickReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $opponentBlockedKickReturnTouchdowns
     *
     * @return self
     */
    public function setOpponentBlockedKickReturnTouchdowns(?int $opponentBlockedKickReturnTouchdowns) : self
    {
        $this->opponentBlockedKickReturnTouchdowns = $opponentBlockedKickReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentFieldGoalReturnYards() : ?int
    {
        return $this->opponentFieldGoalReturnYards;
    }
    /**
     * 
     *
     * @param int|null $opponentFieldGoalReturnYards
     *
     * @return self
     */
    public function setOpponentFieldGoalReturnYards(?int $opponentFieldGoalReturnYards) : self
    {
        $this->opponentFieldGoalReturnYards = $opponentFieldGoalReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentFieldGoalReturnTouchdowns() : ?int
    {
        return $this->opponentFieldGoalReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $opponentFieldGoalReturnTouchdowns
     *
     * @return self
     */
    public function setOpponentFieldGoalReturnTouchdowns(?int $opponentFieldGoalReturnTouchdowns) : self
    {
        $this->opponentFieldGoalReturnTouchdowns = $opponentFieldGoalReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentPuntNetYards() : ?int
    {
        return $this->opponentPuntNetYards;
    }
    /**
     * 
     *
     * @param int|null $opponentPuntNetYards
     *
     * @return self
     */
    public function setOpponentPuntNetYards(?int $opponentPuntNetYards) : self
    {
        $this->opponentPuntNetYards = $opponentPuntNetYards;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTeamName() : ?string
    {
        return $this->teamName;
    }
    /**
     * 
     *
     * @param string|null $teamName
     *
     * @return self
     */
    public function setTeamName(?string $teamName) : self
    {
        $this->teamName = $teamName;
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
     * @return int|null
     */
    public function getPassingDropbacks() : ?int
    {
        return $this->passingDropbacks;
    }
    /**
     * 
     *
     * @param int|null $passingDropbacks
     *
     * @return self
     */
    public function setPassingDropbacks(?int $passingDropbacks) : self
    {
        $this->passingDropbacks = $passingDropbacks;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentPassingDropbacks() : ?int
    {
        return $this->opponentPassingDropbacks;
    }
    /**
     * 
     *
     * @param int|null $opponentPassingDropbacks
     *
     * @return self
     */
    public function setOpponentPassingDropbacks(?int $opponentPassingDropbacks) : self
    {
        $this->opponentPassingDropbacks = $opponentPassingDropbacks;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTeamSeasonID() : int
    {
        return $this->teamSeasonID;
    }
    /**
     * 
     *
     * @param int $teamSeasonID
     *
     * @return self
     */
    public function setTeamSeasonID(int $teamSeasonID) : self
    {
        $this->teamSeasonID = $teamSeasonID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPointDifferential() : ?int
    {
        return $this->pointDifferential;
    }
    /**
     * 
     *
     * @param int|null $pointDifferential
     *
     * @return self
     */
    public function setPointDifferential(?int $pointDifferential) : self
    {
        $this->pointDifferential = $pointDifferential;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPassingInterceptionPercentage() : ?float
    {
        return $this->passingInterceptionPercentage;
    }
    /**
     * 
     *
     * @param float|null $passingInterceptionPercentage
     *
     * @return self
     */
    public function setPassingInterceptionPercentage(?float $passingInterceptionPercentage) : self
    {
        $this->passingInterceptionPercentage = $passingInterceptionPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPuntReturnAverage() : ?float
    {
        return $this->puntReturnAverage;
    }
    /**
     * 
     *
     * @param float|null $puntReturnAverage
     *
     * @return self
     */
    public function setPuntReturnAverage(?float $puntReturnAverage) : self
    {
        $this->puntReturnAverage = $puntReturnAverage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getKickReturnAverage() : ?float
    {
        return $this->kickReturnAverage;
    }
    /**
     * 
     *
     * @param float|null $kickReturnAverage
     *
     * @return self
     */
    public function setKickReturnAverage(?float $kickReturnAverage) : self
    {
        $this->kickReturnAverage = $kickReturnAverage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getExtraPointPercentage() : ?float
    {
        return $this->extraPointPercentage;
    }
    /**
     * 
     *
     * @param float|null $extraPointPercentage
     *
     * @return self
     */
    public function setExtraPointPercentage(?float $extraPointPercentage) : self
    {
        $this->extraPointPercentage = $extraPointPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFieldGoalPercentage() : ?float
    {
        return $this->fieldGoalPercentage;
    }
    /**
     * 
     *
     * @param float|null $fieldGoalPercentage
     *
     * @return self
     */
    public function setFieldGoalPercentage(?float $fieldGoalPercentage) : self
    {
        $this->fieldGoalPercentage = $fieldGoalPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getOpponentPassingInterceptionPercentage() : ?float
    {
        return $this->opponentPassingInterceptionPercentage;
    }
    /**
     * 
     *
     * @param float|null $opponentPassingInterceptionPercentage
     *
     * @return self
     */
    public function setOpponentPassingInterceptionPercentage(?float $opponentPassingInterceptionPercentage) : self
    {
        $this->opponentPassingInterceptionPercentage = $opponentPassingInterceptionPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getOpponentPuntReturnAverage() : ?float
    {
        return $this->opponentPuntReturnAverage;
    }
    /**
     * 
     *
     * @param float|null $opponentPuntReturnAverage
     *
     * @return self
     */
    public function setOpponentPuntReturnAverage(?float $opponentPuntReturnAverage) : self
    {
        $this->opponentPuntReturnAverage = $opponentPuntReturnAverage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getOpponentKickReturnAverage() : ?float
    {
        return $this->opponentKickReturnAverage;
    }
    /**
     * 
     *
     * @param float|null $opponentKickReturnAverage
     *
     * @return self
     */
    public function setOpponentKickReturnAverage(?float $opponentKickReturnAverage) : self
    {
        $this->opponentKickReturnAverage = $opponentKickReturnAverage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getOpponentExtraPointPercentage() : ?float
    {
        return $this->opponentExtraPointPercentage;
    }
    /**
     * 
     *
     * @param float|null $opponentExtraPointPercentage
     *
     * @return self
     */
    public function setOpponentExtraPointPercentage(?float $opponentExtraPointPercentage) : self
    {
        $this->opponentExtraPointPercentage = $opponentExtraPointPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getOpponentFieldGoalPercentage() : ?float
    {
        return $this->opponentFieldGoalPercentage;
    }
    /**
     * 
     *
     * @param float|null $opponentFieldGoalPercentage
     *
     * @return self
     */
    public function setOpponentFieldGoalPercentage(?float $opponentFieldGoalPercentage) : self
    {
        $this->opponentFieldGoalPercentage = $opponentFieldGoalPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPenaltyYardDifferential() : ?int
    {
        return $this->penaltyYardDifferential;
    }
    /**
     * 
     *
     * @param int|null $penaltyYardDifferential
     *
     * @return self
     */
    public function setPenaltyYardDifferential(?int $penaltyYardDifferential) : self
    {
        $this->penaltyYardDifferential = $penaltyYardDifferential;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPuntReturnYardDifferential() : ?int
    {
        return $this->puntReturnYardDifferential;
    }
    /**
     * 
     *
     * @param int|null $puntReturnYardDifferential
     *
     * @return self
     */
    public function setPuntReturnYardDifferential(?int $puntReturnYardDifferential) : self
    {
        $this->puntReturnYardDifferential = $puntReturnYardDifferential;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getKickReturnYardDifferential() : ?int
    {
        return $this->kickReturnYardDifferential;
    }
    /**
     * 
     *
     * @param int|null $kickReturnYardDifferential
     *
     * @return self
     */
    public function setKickReturnYardDifferential(?int $kickReturnYardDifferential) : self
    {
        $this->kickReturnYardDifferential = $kickReturnYardDifferential;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTwoPointConversionReturns() : ?int
    {
        return $this->twoPointConversionReturns;
    }
    /**
     * 
     *
     * @param int|null $twoPointConversionReturns
     *
     * @return self
     */
    public function setTwoPointConversionReturns(?int $twoPointConversionReturns) : self
    {
        $this->twoPointConversionReturns = $twoPointConversionReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentTwoPointConversionReturns() : ?int
    {
        return $this->opponentTwoPointConversionReturns;
    }
    /**
     * 
     *
     * @param int|null $opponentTwoPointConversionReturns
     *
     * @return self
     */
    public function setOpponentTwoPointConversionReturns(?int $opponentTwoPointConversionReturns) : self
    {
        $this->opponentTwoPointConversionReturns = $opponentTwoPointConversionReturns;
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
     * @return int
     */
    public function getTeamStatID() : int
    {
        return $this->teamStatID;
    }
    /**
     * 
     *
     * @param int $teamStatID
     *
     * @return self
     */
    public function setTeamStatID(int $teamStatID) : self
    {
        $this->teamStatID = $teamStatID;
        return $this;
    }
}