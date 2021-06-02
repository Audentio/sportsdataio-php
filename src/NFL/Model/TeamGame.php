<?php

namespace Sportsdata\API\NFL\Model;

class TeamGame
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
     * @var string
     */
    protected $date;
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
     * @var string
     */
    protected $homeOrAway;
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
     * @var string
     */
    protected $stadium;
    /**
     * 
     *
     * @var string
     */
    protected $playingSurface;
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
    protected $overUnder;
    /**
     * 
     *
     * @var float
     */
    protected $pointSpread;
    /**
     * 
     *
     * @var int
     */
    protected $scoreQuarter1;
    /**
     * 
     *
     * @var int
     */
    protected $scoreQuarter2;
    /**
     * 
     *
     * @var int
     */
    protected $scoreQuarter3;
    /**
     * 
     *
     * @var int
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
     * @var int
     */
    protected $timeOfPossessionMinutes;
    /**
     * 
     *
     * @var int
     */
    protected $timeOfPossessionSeconds;
    /**
     * 
     *
     * @var string
     */
    protected $timeOfPossession;
    /**
     * 
     *
     * @var int
     */
    protected $firstDowns;
    /**
     * 
     *
     * @var int
     */
    protected $firstDownsByRushing;
    /**
     * 
     *
     * @var int
     */
    protected $firstDownsByPassing;
    /**
     * 
     *
     * @var int
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
     * @var int
     */
    protected $touchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $rushingAttempts;
    /**
     * 
     *
     * @var int
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
     * @var int
     */
    protected $rushingTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $passingAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $passingCompletions;
    /**
     * 
     *
     * @var int
     */
    protected $passingYards;
    /**
     * 
     *
     * @var int
     */
    protected $passingTouchdowns;
    /**
     * 
     *
     * @var int
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
     * @var float
     */
    protected $passerRating;
    /**
     * 
     *
     * @var int
     */
    protected $thirdDownAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $thirdDownConversions;
    /**
     * 
     *
     * @var float
     */
    protected $thirdDownPercentage;
    /**
     * 
     *
     * @var int
     */
    protected $fourthDownAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $fourthDownConversions;
    /**
     * 
     *
     * @var float
     */
    protected $fourthDownPercentage;
    /**
     * 
     *
     * @var int
     */
    protected $redZoneAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $redZoneConversions;
    /**
     * 
     *
     * @var int
     */
    protected $goalToGoAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $goalToGoConversions;
    /**
     * 
     *
     * @var int
     */
    protected $returnYards;
    /**
     * 
     *
     * @var int
     */
    protected $penalties;
    /**
     * 
     *
     * @var int
     */
    protected $penaltyYards;
    /**
     * 
     *
     * @var int
     */
    protected $fumbles;
    /**
     * 
     *
     * @var int
     */
    protected $fumblesLost;
    /**
     * 
     *
     * @var int
     */
    protected $timesSacked;
    /**
     * 
     *
     * @var int
     */
    protected $timesSackedYards;
    /**
     * 
     *
     * @var int
     */
    protected $quarterbackHits;
    /**
     * 
     *
     * @var int
     */
    protected $tacklesForLoss;
    /**
     * 
     *
     * @var int
     */
    protected $safeties;
    /**
     * 
     *
     * @var int
     */
    protected $punts;
    /**
     * 
     *
     * @var int
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
     * @var int
     */
    protected $opponentScoreQuarter1;
    /**
     * 
     *
     * @var int
     */
    protected $opponentScoreQuarter2;
    /**
     * 
     *
     * @var int
     */
    protected $opponentScoreQuarter3;
    /**
     * 
     *
     * @var int
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
     * @var int
     */
    protected $opponentTimeOfPossessionMinutes;
    /**
     * 
     *
     * @var int
     */
    protected $opponentTimeOfPossessionSeconds;
    /**
     * 
     *
     * @var string
     */
    protected $opponentTimeOfPossession;
    /**
     * 
     *
     * @var int
     */
    protected $opponentFirstDowns;
    /**
     * 
     *
     * @var int
     */
    protected $opponentFirstDownsByRushing;
    /**
     * 
     *
     * @var int
     */
    protected $opponentFirstDownsByPassing;
    /**
     * 
     *
     * @var int
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
     * @var int
     */
    protected $opponentTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $opponentRushingAttempts;
    /**
     * 
     *
     * @var int
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
     * @var int
     */
    protected $opponentRushingTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $opponentPassingAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $opponentPassingCompletions;
    /**
     * 
     *
     * @var int
     */
    protected $opponentPassingYards;
    /**
     * 
     *
     * @var int
     */
    protected $opponentPassingTouchdowns;
    /**
     * 
     *
     * @var int
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
     * @var float
     */
    protected $opponentPasserRating;
    /**
     * 
     *
     * @var int
     */
    protected $opponentThirdDownAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $opponentThirdDownConversions;
    /**
     * 
     *
     * @var float
     */
    protected $opponentThirdDownPercentage;
    /**
     * 
     *
     * @var int
     */
    protected $opponentFourthDownAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $opponentFourthDownConversions;
    /**
     * 
     *
     * @var float
     */
    protected $opponentFourthDownPercentage;
    /**
     * 
     *
     * @var int
     */
    protected $opponentRedZoneAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $opponentRedZoneConversions;
    /**
     * 
     *
     * @var int
     */
    protected $opponentGoalToGoAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $opponentGoalToGoConversions;
    /**
     * 
     *
     * @var int
     */
    protected $opponentReturnYards;
    /**
     * 
     *
     * @var int
     */
    protected $opponentPenalties;
    /**
     * 
     *
     * @var int
     */
    protected $opponentPenaltyYards;
    /**
     * 
     *
     * @var int
     */
    protected $opponentFumbles;
    /**
     * 
     *
     * @var int
     */
    protected $opponentFumblesLost;
    /**
     * 
     *
     * @var int
     */
    protected $opponentTimesSacked;
    /**
     * 
     *
     * @var int
     */
    protected $opponentTimesSackedYards;
    /**
     * 
     *
     * @var int
     */
    protected $opponentQuarterbackHits;
    /**
     * 
     *
     * @var int
     */
    protected $opponentTacklesForLoss;
    /**
     * 
     *
     * @var int
     */
    protected $opponentSafeties;
    /**
     * 
     *
     * @var int
     */
    protected $opponentPunts;
    /**
     * 
     *
     * @var int
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
     * @var float
     */
    protected $redZonePercentage;
    /**
     * 
     *
     * @var float
     */
    protected $goalToGoPercentage;
    /**
     * 
     *
     * @var int
     */
    protected $quarterbackHitsDifferential;
    /**
     * 
     *
     * @var int
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
     * @var float
     */
    protected $tacklesForLossPercentage;
    /**
     * 
     *
     * @var float
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
     * @var float
     */
    protected $opponentRedZonePercentage;
    /**
     * 
     *
     * @var float
     */
    protected $opponentGoalToGoPercentage;
    /**
     * 
     *
     * @var int
     */
    protected $opponentQuarterbackHitsDifferential;
    /**
     * 
     *
     * @var int
     */
    protected $opponentTacklesForLossDifferential;
    /**
     * 
     *
     * @var int
     */
    protected $opponentQuarterbackSacksDifferential;
    /**
     * 
     *
     * @var float
     */
    protected $opponentTacklesForLossPercentage;
    /**
     * 
     *
     * @var float
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
     * @var int
     */
    protected $kickoffs;
    /**
     * 
     *
     * @var int
     */
    protected $kickoffsInEndZone;
    /**
     * 
     *
     * @var int
     */
    protected $kickoffTouchbacks;
    /**
     * 
     *
     * @var int
     */
    protected $puntsHadBlocked;
    /**
     * 
     *
     * @var float
     */
    protected $puntNetAverage;
    /**
     * 
     *
     * @var int
     */
    protected $extraPointKickingAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $extraPointKickingConversions;
    /**
     * 
     *
     * @var int
     */
    protected $extraPointsHadBlocked;
    /**
     * 
     *
     * @var int
     */
    protected $extraPointPassingAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $extraPointPassingConversions;
    /**
     * 
     *
     * @var int
     */
    protected $extraPointRushingAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $extraPointRushingConversions;
    /**
     * 
     *
     * @var int
     */
    protected $fieldGoalAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $fieldGoalsMade;
    /**
     * 
     *
     * @var int
     */
    protected $fieldGoalsHadBlocked;
    /**
     * 
     *
     * @var int
     */
    protected $puntReturns;
    /**
     * 
     *
     * @var int
     */
    protected $puntReturnYards;
    /**
     * 
     *
     * @var int
     */
    protected $kickReturns;
    /**
     * 
     *
     * @var int
     */
    protected $kickReturnYards;
    /**
     * 
     *
     * @var int
     */
    protected $interceptionReturns;
    /**
     * 
     *
     * @var int
     */
    protected $interceptionReturnYards;
    /**
     * 
     *
     * @var int
     */
    protected $opponentKickoffs;
    /**
     * 
     *
     * @var int
     */
    protected $opponentKickoffsInEndZone;
    /**
     * 
     *
     * @var int
     */
    protected $opponentKickoffTouchbacks;
    /**
     * 
     *
     * @var int
     */
    protected $opponentPuntsHadBlocked;
    /**
     * 
     *
     * @var float
     */
    protected $opponentPuntNetAverage;
    /**
     * 
     *
     * @var int
     */
    protected $opponentExtraPointKickingAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $opponentExtraPointKickingConversions;
    /**
     * 
     *
     * @var int
     */
    protected $opponentExtraPointsHadBlocked;
    /**
     * 
     *
     * @var int
     */
    protected $opponentExtraPointPassingAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $opponentExtraPointPassingConversions;
    /**
     * 
     *
     * @var int
     */
    protected $opponentExtraPointRushingAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $opponentExtraPointRushingConversions;
    /**
     * 
     *
     * @var int
     */
    protected $opponentFieldGoalAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $opponentFieldGoalsMade;
    /**
     * 
     *
     * @var int
     */
    protected $opponentFieldGoalsHadBlocked;
    /**
     * 
     *
     * @var int
     */
    protected $opponentPuntReturns;
    /**
     * 
     *
     * @var int
     */
    protected $opponentPuntReturnYards;
    /**
     * 
     *
     * @var int
     */
    protected $opponentKickReturns;
    /**
     * 
     *
     * @var int
     */
    protected $opponentKickReturnYards;
    /**
     * 
     *
     * @var int
     */
    protected $opponentInterceptionReturns;
    /**
     * 
     *
     * @var int
     */
    protected $opponentInterceptionReturnYards;
    /**
     * 
     *
     * @var int
     */
    protected $soloTackles;
    /**
     * 
     *
     * @var int
     */
    protected $assistedTackles;
    /**
     * 
     *
     * @var int
     */
    protected $sacks;
    /**
     * 
     *
     * @var int
     */
    protected $sackYards;
    /**
     * 
     *
     * @var int
     */
    protected $passesDefended;
    /**
     * 
     *
     * @var int
     */
    protected $fumblesForced;
    /**
     * 
     *
     * @var int
     */
    protected $fumblesRecovered;
    /**
     * 
     *
     * @var int
     */
    protected $fumbleReturnYards;
    /**
     * 
     *
     * @var int
     */
    protected $fumbleReturnTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $interceptionReturnTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $blockedKicks;
    /**
     * 
     *
     * @var int
     */
    protected $puntReturnTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $puntReturnLong;
    /**
     * 
     *
     * @var int
     */
    protected $kickReturnTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $kickReturnLong;
    /**
     * 
     *
     * @var int
     */
    protected $blockedKickReturnYards;
    /**
     * 
     *
     * @var int
     */
    protected $blockedKickReturnTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $fieldGoalReturnYards;
    /**
     * 
     *
     * @var int
     */
    protected $fieldGoalReturnTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $puntNetYards;
    /**
     * 
     *
     * @var int
     */
    protected $opponentSoloTackles;
    /**
     * 
     *
     * @var int
     */
    protected $opponentAssistedTackles;
    /**
     * 
     *
     * @var int
     */
    protected $opponentSacks;
    /**
     * 
     *
     * @var int
     */
    protected $opponentSackYards;
    /**
     * 
     *
     * @var int
     */
    protected $opponentPassesDefended;
    /**
     * 
     *
     * @var int
     */
    protected $opponentFumblesForced;
    /**
     * 
     *
     * @var int
     */
    protected $opponentFumblesRecovered;
    /**
     * 
     *
     * @var int
     */
    protected $opponentFumbleReturnYards;
    /**
     * 
     *
     * @var int
     */
    protected $opponentFumbleReturnTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $opponentInterceptionReturnTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $opponentBlockedKicks;
    /**
     * 
     *
     * @var int
     */
    protected $opponentPuntReturnTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $opponentPuntReturnLong;
    /**
     * 
     *
     * @var int
     */
    protected $opponentKickReturnTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $opponentKickReturnLong;
    /**
     * 
     *
     * @var int
     */
    protected $opponentBlockedKickReturnYards;
    /**
     * 
     *
     * @var int
     */
    protected $opponentBlockedKickReturnTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $opponentFieldGoalReturnYards;
    /**
     * 
     *
     * @var int
     */
    protected $opponentFieldGoalReturnTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $opponentPuntNetYards;
    /**
     * 
     *
     * @var bool
     */
    protected $isGameOver;
    /**
     * 
     *
     * @var string
     */
    protected $teamName;
    /**
     * 
     *
     * @var string
     */
    protected $dayOfWeek;
    /**
     * 
     *
     * @var int
     */
    protected $passingDropbacks;
    /**
     * 
     *
     * @var int
     */
    protected $opponentPassingDropbacks;
    /**
     * 
     *
     * @var int
     */
    protected $teamGameID;
    /**
     * 
     *
     * @var int
     */
    protected $pointDifferential;
    /**
     * 
     *
     * @var float
     */
    protected $passingInterceptionPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $puntReturnAverage;
    /**
     * 
     *
     * @var float
     */
    protected $kickReturnAverage;
    /**
     * 
     *
     * @var float
     */
    protected $extraPointPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $fieldGoalPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $opponentPassingInterceptionPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $opponentPuntReturnAverage;
    /**
     * 
     *
     * @var float
     */
    protected $opponentKickReturnAverage;
    /**
     * 
     *
     * @var float
     */
    protected $opponentExtraPointPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $opponentFieldGoalPercentage;
    /**
     * 
     *
     * @var int
     */
    protected $penaltyYardDifferential;
    /**
     * 
     *
     * @var int
     */
    protected $puntReturnYardDifferential;
    /**
     * 
     *
     * @var int
     */
    protected $kickReturnYardDifferential;
    /**
     * 
     *
     * @var int
     */
    protected $twoPointConversionReturns;
    /**
     * 
     *
     * @var int
     */
    protected $opponentTwoPointConversionReturns;
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
     * @var int
     */
    protected $scoreID;
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
     * @return string
     */
    public function getPlayingSurface() : string
    {
        return $this->playingSurface;
    }
    /**
     * 
     *
     * @param string $playingSurface
     *
     * @return self
     */
    public function setPlayingSurface(string $playingSurface) : self
    {
        $this->playingSurface = $playingSurface;
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
    public function getOverUnder() : float
    {
        return $this->overUnder;
    }
    /**
     * 
     *
     * @param float $overUnder
     *
     * @return self
     */
    public function setOverUnder(float $overUnder) : self
    {
        $this->overUnder = $overUnder;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPointSpread() : float
    {
        return $this->pointSpread;
    }
    /**
     * 
     *
     * @param float $pointSpread
     *
     * @return self
     */
    public function setPointSpread(float $pointSpread) : self
    {
        $this->pointSpread = $pointSpread;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getScoreQuarter1() : int
    {
        return $this->scoreQuarter1;
    }
    /**
     * 
     *
     * @param int $scoreQuarter1
     *
     * @return self
     */
    public function setScoreQuarter1(int $scoreQuarter1) : self
    {
        $this->scoreQuarter1 = $scoreQuarter1;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getScoreQuarter2() : int
    {
        return $this->scoreQuarter2;
    }
    /**
     * 
     *
     * @param int $scoreQuarter2
     *
     * @return self
     */
    public function setScoreQuarter2(int $scoreQuarter2) : self
    {
        $this->scoreQuarter2 = $scoreQuarter2;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getScoreQuarter3() : int
    {
        return $this->scoreQuarter3;
    }
    /**
     * 
     *
     * @param int $scoreQuarter3
     *
     * @return self
     */
    public function setScoreQuarter3(int $scoreQuarter3) : self
    {
        $this->scoreQuarter3 = $scoreQuarter3;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getScoreQuarter4() : int
    {
        return $this->scoreQuarter4;
    }
    /**
     * 
     *
     * @param int $scoreQuarter4
     *
     * @return self
     */
    public function setScoreQuarter4(int $scoreQuarter4) : self
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
     * @return int
     */
    public function getTimeOfPossessionMinutes() : int
    {
        return $this->timeOfPossessionMinutes;
    }
    /**
     * 
     *
     * @param int $timeOfPossessionMinutes
     *
     * @return self
     */
    public function setTimeOfPossessionMinutes(int $timeOfPossessionMinutes) : self
    {
        $this->timeOfPossessionMinutes = $timeOfPossessionMinutes;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTimeOfPossessionSeconds() : int
    {
        return $this->timeOfPossessionSeconds;
    }
    /**
     * 
     *
     * @param int $timeOfPossessionSeconds
     *
     * @return self
     */
    public function setTimeOfPossessionSeconds(int $timeOfPossessionSeconds) : self
    {
        $this->timeOfPossessionSeconds = $timeOfPossessionSeconds;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTimeOfPossession() : string
    {
        return $this->timeOfPossession;
    }
    /**
     * 
     *
     * @param string $timeOfPossession
     *
     * @return self
     */
    public function setTimeOfPossession(string $timeOfPossession) : self
    {
        $this->timeOfPossession = $timeOfPossession;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFirstDowns() : int
    {
        return $this->firstDowns;
    }
    /**
     * 
     *
     * @param int $firstDowns
     *
     * @return self
     */
    public function setFirstDowns(int $firstDowns) : self
    {
        $this->firstDowns = $firstDowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFirstDownsByRushing() : int
    {
        return $this->firstDownsByRushing;
    }
    /**
     * 
     *
     * @param int $firstDownsByRushing
     *
     * @return self
     */
    public function setFirstDownsByRushing(int $firstDownsByRushing) : self
    {
        $this->firstDownsByRushing = $firstDownsByRushing;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFirstDownsByPassing() : int
    {
        return $this->firstDownsByPassing;
    }
    /**
     * 
     *
     * @param int $firstDownsByPassing
     *
     * @return self
     */
    public function setFirstDownsByPassing(int $firstDownsByPassing) : self
    {
        $this->firstDownsByPassing = $firstDownsByPassing;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFirstDownsByPenalty() : int
    {
        return $this->firstDownsByPenalty;
    }
    /**
     * 
     *
     * @param int $firstDownsByPenalty
     *
     * @return self
     */
    public function setFirstDownsByPenalty(int $firstDownsByPenalty) : self
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
     * @return int
     */
    public function getTouchdowns() : int
    {
        return $this->touchdowns;
    }
    /**
     * 
     *
     * @param int $touchdowns
     *
     * @return self
     */
    public function setTouchdowns(int $touchdowns) : self
    {
        $this->touchdowns = $touchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRushingAttempts() : int
    {
        return $this->rushingAttempts;
    }
    /**
     * 
     *
     * @param int $rushingAttempts
     *
     * @return self
     */
    public function setRushingAttempts(int $rushingAttempts) : self
    {
        $this->rushingAttempts = $rushingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRushingYards() : int
    {
        return $this->rushingYards;
    }
    /**
     * 
     *
     * @param int $rushingYards
     *
     * @return self
     */
    public function setRushingYards(int $rushingYards) : self
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
     * @return int
     */
    public function getRushingTouchdowns() : int
    {
        return $this->rushingTouchdowns;
    }
    /**
     * 
     *
     * @param int $rushingTouchdowns
     *
     * @return self
     */
    public function setRushingTouchdowns(int $rushingTouchdowns) : self
    {
        $this->rushingTouchdowns = $rushingTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPassingAttempts() : int
    {
        return $this->passingAttempts;
    }
    /**
     * 
     *
     * @param int $passingAttempts
     *
     * @return self
     */
    public function setPassingAttempts(int $passingAttempts) : self
    {
        $this->passingAttempts = $passingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPassingCompletions() : int
    {
        return $this->passingCompletions;
    }
    /**
     * 
     *
     * @param int $passingCompletions
     *
     * @return self
     */
    public function setPassingCompletions(int $passingCompletions) : self
    {
        $this->passingCompletions = $passingCompletions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPassingYards() : int
    {
        return $this->passingYards;
    }
    /**
     * 
     *
     * @param int $passingYards
     *
     * @return self
     */
    public function setPassingYards(int $passingYards) : self
    {
        $this->passingYards = $passingYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPassingTouchdowns() : int
    {
        return $this->passingTouchdowns;
    }
    /**
     * 
     *
     * @param int $passingTouchdowns
     *
     * @return self
     */
    public function setPassingTouchdowns(int $passingTouchdowns) : self
    {
        $this->passingTouchdowns = $passingTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPassingInterceptions() : int
    {
        return $this->passingInterceptions;
    }
    /**
     * 
     *
     * @param int $passingInterceptions
     *
     * @return self
     */
    public function setPassingInterceptions(int $passingInterceptions) : self
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
     * @return float
     */
    public function getPasserRating() : float
    {
        return $this->passerRating;
    }
    /**
     * 
     *
     * @param float $passerRating
     *
     * @return self
     */
    public function setPasserRating(float $passerRating) : self
    {
        $this->passerRating = $passerRating;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getThirdDownAttempts() : int
    {
        return $this->thirdDownAttempts;
    }
    /**
     * 
     *
     * @param int $thirdDownAttempts
     *
     * @return self
     */
    public function setThirdDownAttempts(int $thirdDownAttempts) : self
    {
        $this->thirdDownAttempts = $thirdDownAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getThirdDownConversions() : int
    {
        return $this->thirdDownConversions;
    }
    /**
     * 
     *
     * @param int $thirdDownConversions
     *
     * @return self
     */
    public function setThirdDownConversions(int $thirdDownConversions) : self
    {
        $this->thirdDownConversions = $thirdDownConversions;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getThirdDownPercentage() : float
    {
        return $this->thirdDownPercentage;
    }
    /**
     * 
     *
     * @param float $thirdDownPercentage
     *
     * @return self
     */
    public function setThirdDownPercentage(float $thirdDownPercentage) : self
    {
        $this->thirdDownPercentage = $thirdDownPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFourthDownAttempts() : int
    {
        return $this->fourthDownAttempts;
    }
    /**
     * 
     *
     * @param int $fourthDownAttempts
     *
     * @return self
     */
    public function setFourthDownAttempts(int $fourthDownAttempts) : self
    {
        $this->fourthDownAttempts = $fourthDownAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFourthDownConversions() : int
    {
        return $this->fourthDownConversions;
    }
    /**
     * 
     *
     * @param int $fourthDownConversions
     *
     * @return self
     */
    public function setFourthDownConversions(int $fourthDownConversions) : self
    {
        $this->fourthDownConversions = $fourthDownConversions;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFourthDownPercentage() : float
    {
        return $this->fourthDownPercentage;
    }
    /**
     * 
     *
     * @param float $fourthDownPercentage
     *
     * @return self
     */
    public function setFourthDownPercentage(float $fourthDownPercentage) : self
    {
        $this->fourthDownPercentage = $fourthDownPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRedZoneAttempts() : int
    {
        return $this->redZoneAttempts;
    }
    /**
     * 
     *
     * @param int $redZoneAttempts
     *
     * @return self
     */
    public function setRedZoneAttempts(int $redZoneAttempts) : self
    {
        $this->redZoneAttempts = $redZoneAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRedZoneConversions() : int
    {
        return $this->redZoneConversions;
    }
    /**
     * 
     *
     * @param int $redZoneConversions
     *
     * @return self
     */
    public function setRedZoneConversions(int $redZoneConversions) : self
    {
        $this->redZoneConversions = $redZoneConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGoalToGoAttempts() : int
    {
        return $this->goalToGoAttempts;
    }
    /**
     * 
     *
     * @param int $goalToGoAttempts
     *
     * @return self
     */
    public function setGoalToGoAttempts(int $goalToGoAttempts) : self
    {
        $this->goalToGoAttempts = $goalToGoAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGoalToGoConversions() : int
    {
        return $this->goalToGoConversions;
    }
    /**
     * 
     *
     * @param int $goalToGoConversions
     *
     * @return self
     */
    public function setGoalToGoConversions(int $goalToGoConversions) : self
    {
        $this->goalToGoConversions = $goalToGoConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getReturnYards() : int
    {
        return $this->returnYards;
    }
    /**
     * 
     *
     * @param int $returnYards
     *
     * @return self
     */
    public function setReturnYards(int $returnYards) : self
    {
        $this->returnYards = $returnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPenalties() : int
    {
        return $this->penalties;
    }
    /**
     * 
     *
     * @param int $penalties
     *
     * @return self
     */
    public function setPenalties(int $penalties) : self
    {
        $this->penalties = $penalties;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPenaltyYards() : int
    {
        return $this->penaltyYards;
    }
    /**
     * 
     *
     * @param int $penaltyYards
     *
     * @return self
     */
    public function setPenaltyYards(int $penaltyYards) : self
    {
        $this->penaltyYards = $penaltyYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFumbles() : int
    {
        return $this->fumbles;
    }
    /**
     * 
     *
     * @param int $fumbles
     *
     * @return self
     */
    public function setFumbles(int $fumbles) : self
    {
        $this->fumbles = $fumbles;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFumblesLost() : int
    {
        return $this->fumblesLost;
    }
    /**
     * 
     *
     * @param int $fumblesLost
     *
     * @return self
     */
    public function setFumblesLost(int $fumblesLost) : self
    {
        $this->fumblesLost = $fumblesLost;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTimesSacked() : int
    {
        return $this->timesSacked;
    }
    /**
     * 
     *
     * @param int $timesSacked
     *
     * @return self
     */
    public function setTimesSacked(int $timesSacked) : self
    {
        $this->timesSacked = $timesSacked;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTimesSackedYards() : int
    {
        return $this->timesSackedYards;
    }
    /**
     * 
     *
     * @param int $timesSackedYards
     *
     * @return self
     */
    public function setTimesSackedYards(int $timesSackedYards) : self
    {
        $this->timesSackedYards = $timesSackedYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getQuarterbackHits() : int
    {
        return $this->quarterbackHits;
    }
    /**
     * 
     *
     * @param int $quarterbackHits
     *
     * @return self
     */
    public function setQuarterbackHits(int $quarterbackHits) : self
    {
        $this->quarterbackHits = $quarterbackHits;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTacklesForLoss() : int
    {
        return $this->tacklesForLoss;
    }
    /**
     * 
     *
     * @param int $tacklesForLoss
     *
     * @return self
     */
    public function setTacklesForLoss(int $tacklesForLoss) : self
    {
        $this->tacklesForLoss = $tacklesForLoss;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSafeties() : int
    {
        return $this->safeties;
    }
    /**
     * 
     *
     * @param int $safeties
     *
     * @return self
     */
    public function setSafeties(int $safeties) : self
    {
        $this->safeties = $safeties;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPunts() : int
    {
        return $this->punts;
    }
    /**
     * 
     *
     * @param int $punts
     *
     * @return self
     */
    public function setPunts(int $punts) : self
    {
        $this->punts = $punts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPuntYards() : int
    {
        return $this->puntYards;
    }
    /**
     * 
     *
     * @param int $puntYards
     *
     * @return self
     */
    public function setPuntYards(int $puntYards) : self
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
     * @return int
     */
    public function getOpponentScoreQuarter1() : int
    {
        return $this->opponentScoreQuarter1;
    }
    /**
     * 
     *
     * @param int $opponentScoreQuarter1
     *
     * @return self
     */
    public function setOpponentScoreQuarter1(int $opponentScoreQuarter1) : self
    {
        $this->opponentScoreQuarter1 = $opponentScoreQuarter1;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentScoreQuarter2() : int
    {
        return $this->opponentScoreQuarter2;
    }
    /**
     * 
     *
     * @param int $opponentScoreQuarter2
     *
     * @return self
     */
    public function setOpponentScoreQuarter2(int $opponentScoreQuarter2) : self
    {
        $this->opponentScoreQuarter2 = $opponentScoreQuarter2;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentScoreQuarter3() : int
    {
        return $this->opponentScoreQuarter3;
    }
    /**
     * 
     *
     * @param int $opponentScoreQuarter3
     *
     * @return self
     */
    public function setOpponentScoreQuarter3(int $opponentScoreQuarter3) : self
    {
        $this->opponentScoreQuarter3 = $opponentScoreQuarter3;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentScoreQuarter4() : int
    {
        return $this->opponentScoreQuarter4;
    }
    /**
     * 
     *
     * @param int $opponentScoreQuarter4
     *
     * @return self
     */
    public function setOpponentScoreQuarter4(int $opponentScoreQuarter4) : self
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
     * @return int
     */
    public function getOpponentTimeOfPossessionMinutes() : int
    {
        return $this->opponentTimeOfPossessionMinutes;
    }
    /**
     * 
     *
     * @param int $opponentTimeOfPossessionMinutes
     *
     * @return self
     */
    public function setOpponentTimeOfPossessionMinutes(int $opponentTimeOfPossessionMinutes) : self
    {
        $this->opponentTimeOfPossessionMinutes = $opponentTimeOfPossessionMinutes;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentTimeOfPossessionSeconds() : int
    {
        return $this->opponentTimeOfPossessionSeconds;
    }
    /**
     * 
     *
     * @param int $opponentTimeOfPossessionSeconds
     *
     * @return self
     */
    public function setOpponentTimeOfPossessionSeconds(int $opponentTimeOfPossessionSeconds) : self
    {
        $this->opponentTimeOfPossessionSeconds = $opponentTimeOfPossessionSeconds;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOpponentTimeOfPossession() : string
    {
        return $this->opponentTimeOfPossession;
    }
    /**
     * 
     *
     * @param string $opponentTimeOfPossession
     *
     * @return self
     */
    public function setOpponentTimeOfPossession(string $opponentTimeOfPossession) : self
    {
        $this->opponentTimeOfPossession = $opponentTimeOfPossession;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentFirstDowns() : int
    {
        return $this->opponentFirstDowns;
    }
    /**
     * 
     *
     * @param int $opponentFirstDowns
     *
     * @return self
     */
    public function setOpponentFirstDowns(int $opponentFirstDowns) : self
    {
        $this->opponentFirstDowns = $opponentFirstDowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentFirstDownsByRushing() : int
    {
        return $this->opponentFirstDownsByRushing;
    }
    /**
     * 
     *
     * @param int $opponentFirstDownsByRushing
     *
     * @return self
     */
    public function setOpponentFirstDownsByRushing(int $opponentFirstDownsByRushing) : self
    {
        $this->opponentFirstDownsByRushing = $opponentFirstDownsByRushing;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentFirstDownsByPassing() : int
    {
        return $this->opponentFirstDownsByPassing;
    }
    /**
     * 
     *
     * @param int $opponentFirstDownsByPassing
     *
     * @return self
     */
    public function setOpponentFirstDownsByPassing(int $opponentFirstDownsByPassing) : self
    {
        $this->opponentFirstDownsByPassing = $opponentFirstDownsByPassing;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentFirstDownsByPenalty() : int
    {
        return $this->opponentFirstDownsByPenalty;
    }
    /**
     * 
     *
     * @param int $opponentFirstDownsByPenalty
     *
     * @return self
     */
    public function setOpponentFirstDownsByPenalty(int $opponentFirstDownsByPenalty) : self
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
     * @return int
     */
    public function getOpponentTouchdowns() : int
    {
        return $this->opponentTouchdowns;
    }
    /**
     * 
     *
     * @param int $opponentTouchdowns
     *
     * @return self
     */
    public function setOpponentTouchdowns(int $opponentTouchdowns) : self
    {
        $this->opponentTouchdowns = $opponentTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentRushingAttempts() : int
    {
        return $this->opponentRushingAttempts;
    }
    /**
     * 
     *
     * @param int $opponentRushingAttempts
     *
     * @return self
     */
    public function setOpponentRushingAttempts(int $opponentRushingAttempts) : self
    {
        $this->opponentRushingAttempts = $opponentRushingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentRushingYards() : int
    {
        return $this->opponentRushingYards;
    }
    /**
     * 
     *
     * @param int $opponentRushingYards
     *
     * @return self
     */
    public function setOpponentRushingYards(int $opponentRushingYards) : self
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
     * @return int
     */
    public function getOpponentRushingTouchdowns() : int
    {
        return $this->opponentRushingTouchdowns;
    }
    /**
     * 
     *
     * @param int $opponentRushingTouchdowns
     *
     * @return self
     */
    public function setOpponentRushingTouchdowns(int $opponentRushingTouchdowns) : self
    {
        $this->opponentRushingTouchdowns = $opponentRushingTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentPassingAttempts() : int
    {
        return $this->opponentPassingAttempts;
    }
    /**
     * 
     *
     * @param int $opponentPassingAttempts
     *
     * @return self
     */
    public function setOpponentPassingAttempts(int $opponentPassingAttempts) : self
    {
        $this->opponentPassingAttempts = $opponentPassingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentPassingCompletions() : int
    {
        return $this->opponentPassingCompletions;
    }
    /**
     * 
     *
     * @param int $opponentPassingCompletions
     *
     * @return self
     */
    public function setOpponentPassingCompletions(int $opponentPassingCompletions) : self
    {
        $this->opponentPassingCompletions = $opponentPassingCompletions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentPassingYards() : int
    {
        return $this->opponentPassingYards;
    }
    /**
     * 
     *
     * @param int $opponentPassingYards
     *
     * @return self
     */
    public function setOpponentPassingYards(int $opponentPassingYards) : self
    {
        $this->opponentPassingYards = $opponentPassingYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentPassingTouchdowns() : int
    {
        return $this->opponentPassingTouchdowns;
    }
    /**
     * 
     *
     * @param int $opponentPassingTouchdowns
     *
     * @return self
     */
    public function setOpponentPassingTouchdowns(int $opponentPassingTouchdowns) : self
    {
        $this->opponentPassingTouchdowns = $opponentPassingTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentPassingInterceptions() : int
    {
        return $this->opponentPassingInterceptions;
    }
    /**
     * 
     *
     * @param int $opponentPassingInterceptions
     *
     * @return self
     */
    public function setOpponentPassingInterceptions(int $opponentPassingInterceptions) : self
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
     * @return float
     */
    public function getOpponentPasserRating() : float
    {
        return $this->opponentPasserRating;
    }
    /**
     * 
     *
     * @param float $opponentPasserRating
     *
     * @return self
     */
    public function setOpponentPasserRating(float $opponentPasserRating) : self
    {
        $this->opponentPasserRating = $opponentPasserRating;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentThirdDownAttempts() : int
    {
        return $this->opponentThirdDownAttempts;
    }
    /**
     * 
     *
     * @param int $opponentThirdDownAttempts
     *
     * @return self
     */
    public function setOpponentThirdDownAttempts(int $opponentThirdDownAttempts) : self
    {
        $this->opponentThirdDownAttempts = $opponentThirdDownAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentThirdDownConversions() : int
    {
        return $this->opponentThirdDownConversions;
    }
    /**
     * 
     *
     * @param int $opponentThirdDownConversions
     *
     * @return self
     */
    public function setOpponentThirdDownConversions(int $opponentThirdDownConversions) : self
    {
        $this->opponentThirdDownConversions = $opponentThirdDownConversions;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOpponentThirdDownPercentage() : float
    {
        return $this->opponentThirdDownPercentage;
    }
    /**
     * 
     *
     * @param float $opponentThirdDownPercentage
     *
     * @return self
     */
    public function setOpponentThirdDownPercentage(float $opponentThirdDownPercentage) : self
    {
        $this->opponentThirdDownPercentage = $opponentThirdDownPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentFourthDownAttempts() : int
    {
        return $this->opponentFourthDownAttempts;
    }
    /**
     * 
     *
     * @param int $opponentFourthDownAttempts
     *
     * @return self
     */
    public function setOpponentFourthDownAttempts(int $opponentFourthDownAttempts) : self
    {
        $this->opponentFourthDownAttempts = $opponentFourthDownAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentFourthDownConversions() : int
    {
        return $this->opponentFourthDownConversions;
    }
    /**
     * 
     *
     * @param int $opponentFourthDownConversions
     *
     * @return self
     */
    public function setOpponentFourthDownConversions(int $opponentFourthDownConversions) : self
    {
        $this->opponentFourthDownConversions = $opponentFourthDownConversions;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOpponentFourthDownPercentage() : float
    {
        return $this->opponentFourthDownPercentage;
    }
    /**
     * 
     *
     * @param float $opponentFourthDownPercentage
     *
     * @return self
     */
    public function setOpponentFourthDownPercentage(float $opponentFourthDownPercentage) : self
    {
        $this->opponentFourthDownPercentage = $opponentFourthDownPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentRedZoneAttempts() : int
    {
        return $this->opponentRedZoneAttempts;
    }
    /**
     * 
     *
     * @param int $opponentRedZoneAttempts
     *
     * @return self
     */
    public function setOpponentRedZoneAttempts(int $opponentRedZoneAttempts) : self
    {
        $this->opponentRedZoneAttempts = $opponentRedZoneAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentRedZoneConversions() : int
    {
        return $this->opponentRedZoneConversions;
    }
    /**
     * 
     *
     * @param int $opponentRedZoneConversions
     *
     * @return self
     */
    public function setOpponentRedZoneConversions(int $opponentRedZoneConversions) : self
    {
        $this->opponentRedZoneConversions = $opponentRedZoneConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentGoalToGoAttempts() : int
    {
        return $this->opponentGoalToGoAttempts;
    }
    /**
     * 
     *
     * @param int $opponentGoalToGoAttempts
     *
     * @return self
     */
    public function setOpponentGoalToGoAttempts(int $opponentGoalToGoAttempts) : self
    {
        $this->opponentGoalToGoAttempts = $opponentGoalToGoAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentGoalToGoConversions() : int
    {
        return $this->opponentGoalToGoConversions;
    }
    /**
     * 
     *
     * @param int $opponentGoalToGoConversions
     *
     * @return self
     */
    public function setOpponentGoalToGoConversions(int $opponentGoalToGoConversions) : self
    {
        $this->opponentGoalToGoConversions = $opponentGoalToGoConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentReturnYards() : int
    {
        return $this->opponentReturnYards;
    }
    /**
     * 
     *
     * @param int $opponentReturnYards
     *
     * @return self
     */
    public function setOpponentReturnYards(int $opponentReturnYards) : self
    {
        $this->opponentReturnYards = $opponentReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentPenalties() : int
    {
        return $this->opponentPenalties;
    }
    /**
     * 
     *
     * @param int $opponentPenalties
     *
     * @return self
     */
    public function setOpponentPenalties(int $opponentPenalties) : self
    {
        $this->opponentPenalties = $opponentPenalties;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentPenaltyYards() : int
    {
        return $this->opponentPenaltyYards;
    }
    /**
     * 
     *
     * @param int $opponentPenaltyYards
     *
     * @return self
     */
    public function setOpponentPenaltyYards(int $opponentPenaltyYards) : self
    {
        $this->opponentPenaltyYards = $opponentPenaltyYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentFumbles() : int
    {
        return $this->opponentFumbles;
    }
    /**
     * 
     *
     * @param int $opponentFumbles
     *
     * @return self
     */
    public function setOpponentFumbles(int $opponentFumbles) : self
    {
        $this->opponentFumbles = $opponentFumbles;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentFumblesLost() : int
    {
        return $this->opponentFumblesLost;
    }
    /**
     * 
     *
     * @param int $opponentFumblesLost
     *
     * @return self
     */
    public function setOpponentFumblesLost(int $opponentFumblesLost) : self
    {
        $this->opponentFumblesLost = $opponentFumblesLost;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentTimesSacked() : int
    {
        return $this->opponentTimesSacked;
    }
    /**
     * 
     *
     * @param int $opponentTimesSacked
     *
     * @return self
     */
    public function setOpponentTimesSacked(int $opponentTimesSacked) : self
    {
        $this->opponentTimesSacked = $opponentTimesSacked;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentTimesSackedYards() : int
    {
        return $this->opponentTimesSackedYards;
    }
    /**
     * 
     *
     * @param int $opponentTimesSackedYards
     *
     * @return self
     */
    public function setOpponentTimesSackedYards(int $opponentTimesSackedYards) : self
    {
        $this->opponentTimesSackedYards = $opponentTimesSackedYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentQuarterbackHits() : int
    {
        return $this->opponentQuarterbackHits;
    }
    /**
     * 
     *
     * @param int $opponentQuarterbackHits
     *
     * @return self
     */
    public function setOpponentQuarterbackHits(int $opponentQuarterbackHits) : self
    {
        $this->opponentQuarterbackHits = $opponentQuarterbackHits;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentTacklesForLoss() : int
    {
        return $this->opponentTacklesForLoss;
    }
    /**
     * 
     *
     * @param int $opponentTacklesForLoss
     *
     * @return self
     */
    public function setOpponentTacklesForLoss(int $opponentTacklesForLoss) : self
    {
        $this->opponentTacklesForLoss = $opponentTacklesForLoss;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentSafeties() : int
    {
        return $this->opponentSafeties;
    }
    /**
     * 
     *
     * @param int $opponentSafeties
     *
     * @return self
     */
    public function setOpponentSafeties(int $opponentSafeties) : self
    {
        $this->opponentSafeties = $opponentSafeties;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentPunts() : int
    {
        return $this->opponentPunts;
    }
    /**
     * 
     *
     * @param int $opponentPunts
     *
     * @return self
     */
    public function setOpponentPunts(int $opponentPunts) : self
    {
        $this->opponentPunts = $opponentPunts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentPuntYards() : int
    {
        return $this->opponentPuntYards;
    }
    /**
     * 
     *
     * @param int $opponentPuntYards
     *
     * @return self
     */
    public function setOpponentPuntYards(int $opponentPuntYards) : self
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
     * @return float
     */
    public function getRedZonePercentage() : float
    {
        return $this->redZonePercentage;
    }
    /**
     * 
     *
     * @param float $redZonePercentage
     *
     * @return self
     */
    public function setRedZonePercentage(float $redZonePercentage) : self
    {
        $this->redZonePercentage = $redZonePercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getGoalToGoPercentage() : float
    {
        return $this->goalToGoPercentage;
    }
    /**
     * 
     *
     * @param float $goalToGoPercentage
     *
     * @return self
     */
    public function setGoalToGoPercentage(float $goalToGoPercentage) : self
    {
        $this->goalToGoPercentage = $goalToGoPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getQuarterbackHitsDifferential() : int
    {
        return $this->quarterbackHitsDifferential;
    }
    /**
     * 
     *
     * @param int $quarterbackHitsDifferential
     *
     * @return self
     */
    public function setQuarterbackHitsDifferential(int $quarterbackHitsDifferential) : self
    {
        $this->quarterbackHitsDifferential = $quarterbackHitsDifferential;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTacklesForLossDifferential() : int
    {
        return $this->tacklesForLossDifferential;
    }
    /**
     * 
     *
     * @param int $tacklesForLossDifferential
     *
     * @return self
     */
    public function setTacklesForLossDifferential(int $tacklesForLossDifferential) : self
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
     * @return float
     */
    public function getTacklesForLossPercentage() : float
    {
        return $this->tacklesForLossPercentage;
    }
    /**
     * 
     *
     * @param float $tacklesForLossPercentage
     *
     * @return self
     */
    public function setTacklesForLossPercentage(float $tacklesForLossPercentage) : self
    {
        $this->tacklesForLossPercentage = $tacklesForLossPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getQuarterbackHitsPercentage() : float
    {
        return $this->quarterbackHitsPercentage;
    }
    /**
     * 
     *
     * @param float $quarterbackHitsPercentage
     *
     * @return self
     */
    public function setQuarterbackHitsPercentage(float $quarterbackHitsPercentage) : self
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
     * @return float
     */
    public function getOpponentRedZonePercentage() : float
    {
        return $this->opponentRedZonePercentage;
    }
    /**
     * 
     *
     * @param float $opponentRedZonePercentage
     *
     * @return self
     */
    public function setOpponentRedZonePercentage(float $opponentRedZonePercentage) : self
    {
        $this->opponentRedZonePercentage = $opponentRedZonePercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOpponentGoalToGoPercentage() : float
    {
        return $this->opponentGoalToGoPercentage;
    }
    /**
     * 
     *
     * @param float $opponentGoalToGoPercentage
     *
     * @return self
     */
    public function setOpponentGoalToGoPercentage(float $opponentGoalToGoPercentage) : self
    {
        $this->opponentGoalToGoPercentage = $opponentGoalToGoPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentQuarterbackHitsDifferential() : int
    {
        return $this->opponentQuarterbackHitsDifferential;
    }
    /**
     * 
     *
     * @param int $opponentQuarterbackHitsDifferential
     *
     * @return self
     */
    public function setOpponentQuarterbackHitsDifferential(int $opponentQuarterbackHitsDifferential) : self
    {
        $this->opponentQuarterbackHitsDifferential = $opponentQuarterbackHitsDifferential;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentTacklesForLossDifferential() : int
    {
        return $this->opponentTacklesForLossDifferential;
    }
    /**
     * 
     *
     * @param int $opponentTacklesForLossDifferential
     *
     * @return self
     */
    public function setOpponentTacklesForLossDifferential(int $opponentTacklesForLossDifferential) : self
    {
        $this->opponentTacklesForLossDifferential = $opponentTacklesForLossDifferential;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentQuarterbackSacksDifferential() : int
    {
        return $this->opponentQuarterbackSacksDifferential;
    }
    /**
     * 
     *
     * @param int $opponentQuarterbackSacksDifferential
     *
     * @return self
     */
    public function setOpponentQuarterbackSacksDifferential(int $opponentQuarterbackSacksDifferential) : self
    {
        $this->opponentQuarterbackSacksDifferential = $opponentQuarterbackSacksDifferential;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOpponentTacklesForLossPercentage() : float
    {
        return $this->opponentTacklesForLossPercentage;
    }
    /**
     * 
     *
     * @param float $opponentTacklesForLossPercentage
     *
     * @return self
     */
    public function setOpponentTacklesForLossPercentage(float $opponentTacklesForLossPercentage) : self
    {
        $this->opponentTacklesForLossPercentage = $opponentTacklesForLossPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOpponentQuarterbackHitsPercentage() : float
    {
        return $this->opponentQuarterbackHitsPercentage;
    }
    /**
     * 
     *
     * @param float $opponentQuarterbackHitsPercentage
     *
     * @return self
     */
    public function setOpponentQuarterbackHitsPercentage(float $opponentQuarterbackHitsPercentage) : self
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
     * @return int
     */
    public function getKickoffs() : int
    {
        return $this->kickoffs;
    }
    /**
     * 
     *
     * @param int $kickoffs
     *
     * @return self
     */
    public function setKickoffs(int $kickoffs) : self
    {
        $this->kickoffs = $kickoffs;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getKickoffsInEndZone() : int
    {
        return $this->kickoffsInEndZone;
    }
    /**
     * 
     *
     * @param int $kickoffsInEndZone
     *
     * @return self
     */
    public function setKickoffsInEndZone(int $kickoffsInEndZone) : self
    {
        $this->kickoffsInEndZone = $kickoffsInEndZone;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getKickoffTouchbacks() : int
    {
        return $this->kickoffTouchbacks;
    }
    /**
     * 
     *
     * @param int $kickoffTouchbacks
     *
     * @return self
     */
    public function setKickoffTouchbacks(int $kickoffTouchbacks) : self
    {
        $this->kickoffTouchbacks = $kickoffTouchbacks;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPuntsHadBlocked() : int
    {
        return $this->puntsHadBlocked;
    }
    /**
     * 
     *
     * @param int $puntsHadBlocked
     *
     * @return self
     */
    public function setPuntsHadBlocked(int $puntsHadBlocked) : self
    {
        $this->puntsHadBlocked = $puntsHadBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPuntNetAverage() : float
    {
        return $this->puntNetAverage;
    }
    /**
     * 
     *
     * @param float $puntNetAverage
     *
     * @return self
     */
    public function setPuntNetAverage(float $puntNetAverage) : self
    {
        $this->puntNetAverage = $puntNetAverage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getExtraPointKickingAttempts() : int
    {
        return $this->extraPointKickingAttempts;
    }
    /**
     * 
     *
     * @param int $extraPointKickingAttempts
     *
     * @return self
     */
    public function setExtraPointKickingAttempts(int $extraPointKickingAttempts) : self
    {
        $this->extraPointKickingAttempts = $extraPointKickingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getExtraPointKickingConversions() : int
    {
        return $this->extraPointKickingConversions;
    }
    /**
     * 
     *
     * @param int $extraPointKickingConversions
     *
     * @return self
     */
    public function setExtraPointKickingConversions(int $extraPointKickingConversions) : self
    {
        $this->extraPointKickingConversions = $extraPointKickingConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getExtraPointsHadBlocked() : int
    {
        return $this->extraPointsHadBlocked;
    }
    /**
     * 
     *
     * @param int $extraPointsHadBlocked
     *
     * @return self
     */
    public function setExtraPointsHadBlocked(int $extraPointsHadBlocked) : self
    {
        $this->extraPointsHadBlocked = $extraPointsHadBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getExtraPointPassingAttempts() : int
    {
        return $this->extraPointPassingAttempts;
    }
    /**
     * 
     *
     * @param int $extraPointPassingAttempts
     *
     * @return self
     */
    public function setExtraPointPassingAttempts(int $extraPointPassingAttempts) : self
    {
        $this->extraPointPassingAttempts = $extraPointPassingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getExtraPointPassingConversions() : int
    {
        return $this->extraPointPassingConversions;
    }
    /**
     * 
     *
     * @param int $extraPointPassingConversions
     *
     * @return self
     */
    public function setExtraPointPassingConversions(int $extraPointPassingConversions) : self
    {
        $this->extraPointPassingConversions = $extraPointPassingConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getExtraPointRushingAttempts() : int
    {
        return $this->extraPointRushingAttempts;
    }
    /**
     * 
     *
     * @param int $extraPointRushingAttempts
     *
     * @return self
     */
    public function setExtraPointRushingAttempts(int $extraPointRushingAttempts) : self
    {
        $this->extraPointRushingAttempts = $extraPointRushingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getExtraPointRushingConversions() : int
    {
        return $this->extraPointRushingConversions;
    }
    /**
     * 
     *
     * @param int $extraPointRushingConversions
     *
     * @return self
     */
    public function setExtraPointRushingConversions(int $extraPointRushingConversions) : self
    {
        $this->extraPointRushingConversions = $extraPointRushingConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFieldGoalAttempts() : int
    {
        return $this->fieldGoalAttempts;
    }
    /**
     * 
     *
     * @param int $fieldGoalAttempts
     *
     * @return self
     */
    public function setFieldGoalAttempts(int $fieldGoalAttempts) : self
    {
        $this->fieldGoalAttempts = $fieldGoalAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFieldGoalsMade() : int
    {
        return $this->fieldGoalsMade;
    }
    /**
     * 
     *
     * @param int $fieldGoalsMade
     *
     * @return self
     */
    public function setFieldGoalsMade(int $fieldGoalsMade) : self
    {
        $this->fieldGoalsMade = $fieldGoalsMade;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFieldGoalsHadBlocked() : int
    {
        return $this->fieldGoalsHadBlocked;
    }
    /**
     * 
     *
     * @param int $fieldGoalsHadBlocked
     *
     * @return self
     */
    public function setFieldGoalsHadBlocked(int $fieldGoalsHadBlocked) : self
    {
        $this->fieldGoalsHadBlocked = $fieldGoalsHadBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPuntReturns() : int
    {
        return $this->puntReturns;
    }
    /**
     * 
     *
     * @param int $puntReturns
     *
     * @return self
     */
    public function setPuntReturns(int $puntReturns) : self
    {
        $this->puntReturns = $puntReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPuntReturnYards() : int
    {
        return $this->puntReturnYards;
    }
    /**
     * 
     *
     * @param int $puntReturnYards
     *
     * @return self
     */
    public function setPuntReturnYards(int $puntReturnYards) : self
    {
        $this->puntReturnYards = $puntReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getKickReturns() : int
    {
        return $this->kickReturns;
    }
    /**
     * 
     *
     * @param int $kickReturns
     *
     * @return self
     */
    public function setKickReturns(int $kickReturns) : self
    {
        $this->kickReturns = $kickReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getKickReturnYards() : int
    {
        return $this->kickReturnYards;
    }
    /**
     * 
     *
     * @param int $kickReturnYards
     *
     * @return self
     */
    public function setKickReturnYards(int $kickReturnYards) : self
    {
        $this->kickReturnYards = $kickReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getInterceptionReturns() : int
    {
        return $this->interceptionReturns;
    }
    /**
     * 
     *
     * @param int $interceptionReturns
     *
     * @return self
     */
    public function setInterceptionReturns(int $interceptionReturns) : self
    {
        $this->interceptionReturns = $interceptionReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getInterceptionReturnYards() : int
    {
        return $this->interceptionReturnYards;
    }
    /**
     * 
     *
     * @param int $interceptionReturnYards
     *
     * @return self
     */
    public function setInterceptionReturnYards(int $interceptionReturnYards) : self
    {
        $this->interceptionReturnYards = $interceptionReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentKickoffs() : int
    {
        return $this->opponentKickoffs;
    }
    /**
     * 
     *
     * @param int $opponentKickoffs
     *
     * @return self
     */
    public function setOpponentKickoffs(int $opponentKickoffs) : self
    {
        $this->opponentKickoffs = $opponentKickoffs;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentKickoffsInEndZone() : int
    {
        return $this->opponentKickoffsInEndZone;
    }
    /**
     * 
     *
     * @param int $opponentKickoffsInEndZone
     *
     * @return self
     */
    public function setOpponentKickoffsInEndZone(int $opponentKickoffsInEndZone) : self
    {
        $this->opponentKickoffsInEndZone = $opponentKickoffsInEndZone;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentKickoffTouchbacks() : int
    {
        return $this->opponentKickoffTouchbacks;
    }
    /**
     * 
     *
     * @param int $opponentKickoffTouchbacks
     *
     * @return self
     */
    public function setOpponentKickoffTouchbacks(int $opponentKickoffTouchbacks) : self
    {
        $this->opponentKickoffTouchbacks = $opponentKickoffTouchbacks;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentPuntsHadBlocked() : int
    {
        return $this->opponentPuntsHadBlocked;
    }
    /**
     * 
     *
     * @param int $opponentPuntsHadBlocked
     *
     * @return self
     */
    public function setOpponentPuntsHadBlocked(int $opponentPuntsHadBlocked) : self
    {
        $this->opponentPuntsHadBlocked = $opponentPuntsHadBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOpponentPuntNetAverage() : float
    {
        return $this->opponentPuntNetAverage;
    }
    /**
     * 
     *
     * @param float $opponentPuntNetAverage
     *
     * @return self
     */
    public function setOpponentPuntNetAverage(float $opponentPuntNetAverage) : self
    {
        $this->opponentPuntNetAverage = $opponentPuntNetAverage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentExtraPointKickingAttempts() : int
    {
        return $this->opponentExtraPointKickingAttempts;
    }
    /**
     * 
     *
     * @param int $opponentExtraPointKickingAttempts
     *
     * @return self
     */
    public function setOpponentExtraPointKickingAttempts(int $opponentExtraPointKickingAttempts) : self
    {
        $this->opponentExtraPointKickingAttempts = $opponentExtraPointKickingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentExtraPointKickingConversions() : int
    {
        return $this->opponentExtraPointKickingConversions;
    }
    /**
     * 
     *
     * @param int $opponentExtraPointKickingConversions
     *
     * @return self
     */
    public function setOpponentExtraPointKickingConversions(int $opponentExtraPointKickingConversions) : self
    {
        $this->opponentExtraPointKickingConversions = $opponentExtraPointKickingConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentExtraPointsHadBlocked() : int
    {
        return $this->opponentExtraPointsHadBlocked;
    }
    /**
     * 
     *
     * @param int $opponentExtraPointsHadBlocked
     *
     * @return self
     */
    public function setOpponentExtraPointsHadBlocked(int $opponentExtraPointsHadBlocked) : self
    {
        $this->opponentExtraPointsHadBlocked = $opponentExtraPointsHadBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentExtraPointPassingAttempts() : int
    {
        return $this->opponentExtraPointPassingAttempts;
    }
    /**
     * 
     *
     * @param int $opponentExtraPointPassingAttempts
     *
     * @return self
     */
    public function setOpponentExtraPointPassingAttempts(int $opponentExtraPointPassingAttempts) : self
    {
        $this->opponentExtraPointPassingAttempts = $opponentExtraPointPassingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentExtraPointPassingConversions() : int
    {
        return $this->opponentExtraPointPassingConversions;
    }
    /**
     * 
     *
     * @param int $opponentExtraPointPassingConversions
     *
     * @return self
     */
    public function setOpponentExtraPointPassingConversions(int $opponentExtraPointPassingConversions) : self
    {
        $this->opponentExtraPointPassingConversions = $opponentExtraPointPassingConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentExtraPointRushingAttempts() : int
    {
        return $this->opponentExtraPointRushingAttempts;
    }
    /**
     * 
     *
     * @param int $opponentExtraPointRushingAttempts
     *
     * @return self
     */
    public function setOpponentExtraPointRushingAttempts(int $opponentExtraPointRushingAttempts) : self
    {
        $this->opponentExtraPointRushingAttempts = $opponentExtraPointRushingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentExtraPointRushingConversions() : int
    {
        return $this->opponentExtraPointRushingConversions;
    }
    /**
     * 
     *
     * @param int $opponentExtraPointRushingConversions
     *
     * @return self
     */
    public function setOpponentExtraPointRushingConversions(int $opponentExtraPointRushingConversions) : self
    {
        $this->opponentExtraPointRushingConversions = $opponentExtraPointRushingConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentFieldGoalAttempts() : int
    {
        return $this->opponentFieldGoalAttempts;
    }
    /**
     * 
     *
     * @param int $opponentFieldGoalAttempts
     *
     * @return self
     */
    public function setOpponentFieldGoalAttempts(int $opponentFieldGoalAttempts) : self
    {
        $this->opponentFieldGoalAttempts = $opponentFieldGoalAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentFieldGoalsMade() : int
    {
        return $this->opponentFieldGoalsMade;
    }
    /**
     * 
     *
     * @param int $opponentFieldGoalsMade
     *
     * @return self
     */
    public function setOpponentFieldGoalsMade(int $opponentFieldGoalsMade) : self
    {
        $this->opponentFieldGoalsMade = $opponentFieldGoalsMade;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentFieldGoalsHadBlocked() : int
    {
        return $this->opponentFieldGoalsHadBlocked;
    }
    /**
     * 
     *
     * @param int $opponentFieldGoalsHadBlocked
     *
     * @return self
     */
    public function setOpponentFieldGoalsHadBlocked(int $opponentFieldGoalsHadBlocked) : self
    {
        $this->opponentFieldGoalsHadBlocked = $opponentFieldGoalsHadBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentPuntReturns() : int
    {
        return $this->opponentPuntReturns;
    }
    /**
     * 
     *
     * @param int $opponentPuntReturns
     *
     * @return self
     */
    public function setOpponentPuntReturns(int $opponentPuntReturns) : self
    {
        $this->opponentPuntReturns = $opponentPuntReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentPuntReturnYards() : int
    {
        return $this->opponentPuntReturnYards;
    }
    /**
     * 
     *
     * @param int $opponentPuntReturnYards
     *
     * @return self
     */
    public function setOpponentPuntReturnYards(int $opponentPuntReturnYards) : self
    {
        $this->opponentPuntReturnYards = $opponentPuntReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentKickReturns() : int
    {
        return $this->opponentKickReturns;
    }
    /**
     * 
     *
     * @param int $opponentKickReturns
     *
     * @return self
     */
    public function setOpponentKickReturns(int $opponentKickReturns) : self
    {
        $this->opponentKickReturns = $opponentKickReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentKickReturnYards() : int
    {
        return $this->opponentKickReturnYards;
    }
    /**
     * 
     *
     * @param int $opponentKickReturnYards
     *
     * @return self
     */
    public function setOpponentKickReturnYards(int $opponentKickReturnYards) : self
    {
        $this->opponentKickReturnYards = $opponentKickReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentInterceptionReturns() : int
    {
        return $this->opponentInterceptionReturns;
    }
    /**
     * 
     *
     * @param int $opponentInterceptionReturns
     *
     * @return self
     */
    public function setOpponentInterceptionReturns(int $opponentInterceptionReturns) : self
    {
        $this->opponentInterceptionReturns = $opponentInterceptionReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentInterceptionReturnYards() : int
    {
        return $this->opponentInterceptionReturnYards;
    }
    /**
     * 
     *
     * @param int $opponentInterceptionReturnYards
     *
     * @return self
     */
    public function setOpponentInterceptionReturnYards(int $opponentInterceptionReturnYards) : self
    {
        $this->opponentInterceptionReturnYards = $opponentInterceptionReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSoloTackles() : int
    {
        return $this->soloTackles;
    }
    /**
     * 
     *
     * @param int $soloTackles
     *
     * @return self
     */
    public function setSoloTackles(int $soloTackles) : self
    {
        $this->soloTackles = $soloTackles;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAssistedTackles() : int
    {
        return $this->assistedTackles;
    }
    /**
     * 
     *
     * @param int $assistedTackles
     *
     * @return self
     */
    public function setAssistedTackles(int $assistedTackles) : self
    {
        $this->assistedTackles = $assistedTackles;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSacks() : int
    {
        return $this->sacks;
    }
    /**
     * 
     *
     * @param int $sacks
     *
     * @return self
     */
    public function setSacks(int $sacks) : self
    {
        $this->sacks = $sacks;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSackYards() : int
    {
        return $this->sackYards;
    }
    /**
     * 
     *
     * @param int $sackYards
     *
     * @return self
     */
    public function setSackYards(int $sackYards) : self
    {
        $this->sackYards = $sackYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPassesDefended() : int
    {
        return $this->passesDefended;
    }
    /**
     * 
     *
     * @param int $passesDefended
     *
     * @return self
     */
    public function setPassesDefended(int $passesDefended) : self
    {
        $this->passesDefended = $passesDefended;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFumblesForced() : int
    {
        return $this->fumblesForced;
    }
    /**
     * 
     *
     * @param int $fumblesForced
     *
     * @return self
     */
    public function setFumblesForced(int $fumblesForced) : self
    {
        $this->fumblesForced = $fumblesForced;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFumblesRecovered() : int
    {
        return $this->fumblesRecovered;
    }
    /**
     * 
     *
     * @param int $fumblesRecovered
     *
     * @return self
     */
    public function setFumblesRecovered(int $fumblesRecovered) : self
    {
        $this->fumblesRecovered = $fumblesRecovered;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFumbleReturnYards() : int
    {
        return $this->fumbleReturnYards;
    }
    /**
     * 
     *
     * @param int $fumbleReturnYards
     *
     * @return self
     */
    public function setFumbleReturnYards(int $fumbleReturnYards) : self
    {
        $this->fumbleReturnYards = $fumbleReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFumbleReturnTouchdowns() : int
    {
        return $this->fumbleReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int $fumbleReturnTouchdowns
     *
     * @return self
     */
    public function setFumbleReturnTouchdowns(int $fumbleReturnTouchdowns) : self
    {
        $this->fumbleReturnTouchdowns = $fumbleReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getInterceptionReturnTouchdowns() : int
    {
        return $this->interceptionReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int $interceptionReturnTouchdowns
     *
     * @return self
     */
    public function setInterceptionReturnTouchdowns(int $interceptionReturnTouchdowns) : self
    {
        $this->interceptionReturnTouchdowns = $interceptionReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBlockedKicks() : int
    {
        return $this->blockedKicks;
    }
    /**
     * 
     *
     * @param int $blockedKicks
     *
     * @return self
     */
    public function setBlockedKicks(int $blockedKicks) : self
    {
        $this->blockedKicks = $blockedKicks;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPuntReturnTouchdowns() : int
    {
        return $this->puntReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int $puntReturnTouchdowns
     *
     * @return self
     */
    public function setPuntReturnTouchdowns(int $puntReturnTouchdowns) : self
    {
        $this->puntReturnTouchdowns = $puntReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPuntReturnLong() : int
    {
        return $this->puntReturnLong;
    }
    /**
     * 
     *
     * @param int $puntReturnLong
     *
     * @return self
     */
    public function setPuntReturnLong(int $puntReturnLong) : self
    {
        $this->puntReturnLong = $puntReturnLong;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getKickReturnTouchdowns() : int
    {
        return $this->kickReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int $kickReturnTouchdowns
     *
     * @return self
     */
    public function setKickReturnTouchdowns(int $kickReturnTouchdowns) : self
    {
        $this->kickReturnTouchdowns = $kickReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getKickReturnLong() : int
    {
        return $this->kickReturnLong;
    }
    /**
     * 
     *
     * @param int $kickReturnLong
     *
     * @return self
     */
    public function setKickReturnLong(int $kickReturnLong) : self
    {
        $this->kickReturnLong = $kickReturnLong;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBlockedKickReturnYards() : int
    {
        return $this->blockedKickReturnYards;
    }
    /**
     * 
     *
     * @param int $blockedKickReturnYards
     *
     * @return self
     */
    public function setBlockedKickReturnYards(int $blockedKickReturnYards) : self
    {
        $this->blockedKickReturnYards = $blockedKickReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBlockedKickReturnTouchdowns() : int
    {
        return $this->blockedKickReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int $blockedKickReturnTouchdowns
     *
     * @return self
     */
    public function setBlockedKickReturnTouchdowns(int $blockedKickReturnTouchdowns) : self
    {
        $this->blockedKickReturnTouchdowns = $blockedKickReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFieldGoalReturnYards() : int
    {
        return $this->fieldGoalReturnYards;
    }
    /**
     * 
     *
     * @param int $fieldGoalReturnYards
     *
     * @return self
     */
    public function setFieldGoalReturnYards(int $fieldGoalReturnYards) : self
    {
        $this->fieldGoalReturnYards = $fieldGoalReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFieldGoalReturnTouchdowns() : int
    {
        return $this->fieldGoalReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int $fieldGoalReturnTouchdowns
     *
     * @return self
     */
    public function setFieldGoalReturnTouchdowns(int $fieldGoalReturnTouchdowns) : self
    {
        $this->fieldGoalReturnTouchdowns = $fieldGoalReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPuntNetYards() : int
    {
        return $this->puntNetYards;
    }
    /**
     * 
     *
     * @param int $puntNetYards
     *
     * @return self
     */
    public function setPuntNetYards(int $puntNetYards) : self
    {
        $this->puntNetYards = $puntNetYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentSoloTackles() : int
    {
        return $this->opponentSoloTackles;
    }
    /**
     * 
     *
     * @param int $opponentSoloTackles
     *
     * @return self
     */
    public function setOpponentSoloTackles(int $opponentSoloTackles) : self
    {
        $this->opponentSoloTackles = $opponentSoloTackles;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentAssistedTackles() : int
    {
        return $this->opponentAssistedTackles;
    }
    /**
     * 
     *
     * @param int $opponentAssistedTackles
     *
     * @return self
     */
    public function setOpponentAssistedTackles(int $opponentAssistedTackles) : self
    {
        $this->opponentAssistedTackles = $opponentAssistedTackles;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentSacks() : int
    {
        return $this->opponentSacks;
    }
    /**
     * 
     *
     * @param int $opponentSacks
     *
     * @return self
     */
    public function setOpponentSacks(int $opponentSacks) : self
    {
        $this->opponentSacks = $opponentSacks;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentSackYards() : int
    {
        return $this->opponentSackYards;
    }
    /**
     * 
     *
     * @param int $opponentSackYards
     *
     * @return self
     */
    public function setOpponentSackYards(int $opponentSackYards) : self
    {
        $this->opponentSackYards = $opponentSackYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentPassesDefended() : int
    {
        return $this->opponentPassesDefended;
    }
    /**
     * 
     *
     * @param int $opponentPassesDefended
     *
     * @return self
     */
    public function setOpponentPassesDefended(int $opponentPassesDefended) : self
    {
        $this->opponentPassesDefended = $opponentPassesDefended;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentFumblesForced() : int
    {
        return $this->opponentFumblesForced;
    }
    /**
     * 
     *
     * @param int $opponentFumblesForced
     *
     * @return self
     */
    public function setOpponentFumblesForced(int $opponentFumblesForced) : self
    {
        $this->opponentFumblesForced = $opponentFumblesForced;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentFumblesRecovered() : int
    {
        return $this->opponentFumblesRecovered;
    }
    /**
     * 
     *
     * @param int $opponentFumblesRecovered
     *
     * @return self
     */
    public function setOpponentFumblesRecovered(int $opponentFumblesRecovered) : self
    {
        $this->opponentFumblesRecovered = $opponentFumblesRecovered;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentFumbleReturnYards() : int
    {
        return $this->opponentFumbleReturnYards;
    }
    /**
     * 
     *
     * @param int $opponentFumbleReturnYards
     *
     * @return self
     */
    public function setOpponentFumbleReturnYards(int $opponentFumbleReturnYards) : self
    {
        $this->opponentFumbleReturnYards = $opponentFumbleReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentFumbleReturnTouchdowns() : int
    {
        return $this->opponentFumbleReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int $opponentFumbleReturnTouchdowns
     *
     * @return self
     */
    public function setOpponentFumbleReturnTouchdowns(int $opponentFumbleReturnTouchdowns) : self
    {
        $this->opponentFumbleReturnTouchdowns = $opponentFumbleReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentInterceptionReturnTouchdowns() : int
    {
        return $this->opponentInterceptionReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int $opponentInterceptionReturnTouchdowns
     *
     * @return self
     */
    public function setOpponentInterceptionReturnTouchdowns(int $opponentInterceptionReturnTouchdowns) : self
    {
        $this->opponentInterceptionReturnTouchdowns = $opponentInterceptionReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentBlockedKicks() : int
    {
        return $this->opponentBlockedKicks;
    }
    /**
     * 
     *
     * @param int $opponentBlockedKicks
     *
     * @return self
     */
    public function setOpponentBlockedKicks(int $opponentBlockedKicks) : self
    {
        $this->opponentBlockedKicks = $opponentBlockedKicks;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentPuntReturnTouchdowns() : int
    {
        return $this->opponentPuntReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int $opponentPuntReturnTouchdowns
     *
     * @return self
     */
    public function setOpponentPuntReturnTouchdowns(int $opponentPuntReturnTouchdowns) : self
    {
        $this->opponentPuntReturnTouchdowns = $opponentPuntReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentPuntReturnLong() : int
    {
        return $this->opponentPuntReturnLong;
    }
    /**
     * 
     *
     * @param int $opponentPuntReturnLong
     *
     * @return self
     */
    public function setOpponentPuntReturnLong(int $opponentPuntReturnLong) : self
    {
        $this->opponentPuntReturnLong = $opponentPuntReturnLong;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentKickReturnTouchdowns() : int
    {
        return $this->opponentKickReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int $opponentKickReturnTouchdowns
     *
     * @return self
     */
    public function setOpponentKickReturnTouchdowns(int $opponentKickReturnTouchdowns) : self
    {
        $this->opponentKickReturnTouchdowns = $opponentKickReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentKickReturnLong() : int
    {
        return $this->opponentKickReturnLong;
    }
    /**
     * 
     *
     * @param int $opponentKickReturnLong
     *
     * @return self
     */
    public function setOpponentKickReturnLong(int $opponentKickReturnLong) : self
    {
        $this->opponentKickReturnLong = $opponentKickReturnLong;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentBlockedKickReturnYards() : int
    {
        return $this->opponentBlockedKickReturnYards;
    }
    /**
     * 
     *
     * @param int $opponentBlockedKickReturnYards
     *
     * @return self
     */
    public function setOpponentBlockedKickReturnYards(int $opponentBlockedKickReturnYards) : self
    {
        $this->opponentBlockedKickReturnYards = $opponentBlockedKickReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentBlockedKickReturnTouchdowns() : int
    {
        return $this->opponentBlockedKickReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int $opponentBlockedKickReturnTouchdowns
     *
     * @return self
     */
    public function setOpponentBlockedKickReturnTouchdowns(int $opponentBlockedKickReturnTouchdowns) : self
    {
        $this->opponentBlockedKickReturnTouchdowns = $opponentBlockedKickReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentFieldGoalReturnYards() : int
    {
        return $this->opponentFieldGoalReturnYards;
    }
    /**
     * 
     *
     * @param int $opponentFieldGoalReturnYards
     *
     * @return self
     */
    public function setOpponentFieldGoalReturnYards(int $opponentFieldGoalReturnYards) : self
    {
        $this->opponentFieldGoalReturnYards = $opponentFieldGoalReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentFieldGoalReturnTouchdowns() : int
    {
        return $this->opponentFieldGoalReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int $opponentFieldGoalReturnTouchdowns
     *
     * @return self
     */
    public function setOpponentFieldGoalReturnTouchdowns(int $opponentFieldGoalReturnTouchdowns) : self
    {
        $this->opponentFieldGoalReturnTouchdowns = $opponentFieldGoalReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentPuntNetYards() : int
    {
        return $this->opponentPuntNetYards;
    }
    /**
     * 
     *
     * @param int $opponentPuntNetYards
     *
     * @return self
     */
    public function setOpponentPuntNetYards(int $opponentPuntNetYards) : self
    {
        $this->opponentPuntNetYards = $opponentPuntNetYards;
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
     * @return string
     */
    public function getTeamName() : string
    {
        return $this->teamName;
    }
    /**
     * 
     *
     * @param string $teamName
     *
     * @return self
     */
    public function setTeamName(string $teamName) : self
    {
        $this->teamName = $teamName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDayOfWeek() : string
    {
        return $this->dayOfWeek;
    }
    /**
     * 
     *
     * @param string $dayOfWeek
     *
     * @return self
     */
    public function setDayOfWeek(string $dayOfWeek) : self
    {
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPassingDropbacks() : int
    {
        return $this->passingDropbacks;
    }
    /**
     * 
     *
     * @param int $passingDropbacks
     *
     * @return self
     */
    public function setPassingDropbacks(int $passingDropbacks) : self
    {
        $this->passingDropbacks = $passingDropbacks;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentPassingDropbacks() : int
    {
        return $this->opponentPassingDropbacks;
    }
    /**
     * 
     *
     * @param int $opponentPassingDropbacks
     *
     * @return self
     */
    public function setOpponentPassingDropbacks(int $opponentPassingDropbacks) : self
    {
        $this->opponentPassingDropbacks = $opponentPassingDropbacks;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTeamGameID() : int
    {
        return $this->teamGameID;
    }
    /**
     * 
     *
     * @param int $teamGameID
     *
     * @return self
     */
    public function setTeamGameID(int $teamGameID) : self
    {
        $this->teamGameID = $teamGameID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPointDifferential() : int
    {
        return $this->pointDifferential;
    }
    /**
     * 
     *
     * @param int $pointDifferential
     *
     * @return self
     */
    public function setPointDifferential(int $pointDifferential) : self
    {
        $this->pointDifferential = $pointDifferential;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPassingInterceptionPercentage() : float
    {
        return $this->passingInterceptionPercentage;
    }
    /**
     * 
     *
     * @param float $passingInterceptionPercentage
     *
     * @return self
     */
    public function setPassingInterceptionPercentage(float $passingInterceptionPercentage) : self
    {
        $this->passingInterceptionPercentage = $passingInterceptionPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPuntReturnAverage() : float
    {
        return $this->puntReturnAverage;
    }
    /**
     * 
     *
     * @param float $puntReturnAverage
     *
     * @return self
     */
    public function setPuntReturnAverage(float $puntReturnAverage) : self
    {
        $this->puntReturnAverage = $puntReturnAverage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getKickReturnAverage() : float
    {
        return $this->kickReturnAverage;
    }
    /**
     * 
     *
     * @param float $kickReturnAverage
     *
     * @return self
     */
    public function setKickReturnAverage(float $kickReturnAverage) : self
    {
        $this->kickReturnAverage = $kickReturnAverage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getExtraPointPercentage() : float
    {
        return $this->extraPointPercentage;
    }
    /**
     * 
     *
     * @param float $extraPointPercentage
     *
     * @return self
     */
    public function setExtraPointPercentage(float $extraPointPercentage) : self
    {
        $this->extraPointPercentage = $extraPointPercentage;
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
     * @return float
     */
    public function getOpponentPassingInterceptionPercentage() : float
    {
        return $this->opponentPassingInterceptionPercentage;
    }
    /**
     * 
     *
     * @param float $opponentPassingInterceptionPercentage
     *
     * @return self
     */
    public function setOpponentPassingInterceptionPercentage(float $opponentPassingInterceptionPercentage) : self
    {
        $this->opponentPassingInterceptionPercentage = $opponentPassingInterceptionPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOpponentPuntReturnAverage() : float
    {
        return $this->opponentPuntReturnAverage;
    }
    /**
     * 
     *
     * @param float $opponentPuntReturnAverage
     *
     * @return self
     */
    public function setOpponentPuntReturnAverage(float $opponentPuntReturnAverage) : self
    {
        $this->opponentPuntReturnAverage = $opponentPuntReturnAverage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOpponentKickReturnAverage() : float
    {
        return $this->opponentKickReturnAverage;
    }
    /**
     * 
     *
     * @param float $opponentKickReturnAverage
     *
     * @return self
     */
    public function setOpponentKickReturnAverage(float $opponentKickReturnAverage) : self
    {
        $this->opponentKickReturnAverage = $opponentKickReturnAverage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOpponentExtraPointPercentage() : float
    {
        return $this->opponentExtraPointPercentage;
    }
    /**
     * 
     *
     * @param float $opponentExtraPointPercentage
     *
     * @return self
     */
    public function setOpponentExtraPointPercentage(float $opponentExtraPointPercentage) : self
    {
        $this->opponentExtraPointPercentage = $opponentExtraPointPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOpponentFieldGoalPercentage() : float
    {
        return $this->opponentFieldGoalPercentage;
    }
    /**
     * 
     *
     * @param float $opponentFieldGoalPercentage
     *
     * @return self
     */
    public function setOpponentFieldGoalPercentage(float $opponentFieldGoalPercentage) : self
    {
        $this->opponentFieldGoalPercentage = $opponentFieldGoalPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPenaltyYardDifferential() : int
    {
        return $this->penaltyYardDifferential;
    }
    /**
     * 
     *
     * @param int $penaltyYardDifferential
     *
     * @return self
     */
    public function setPenaltyYardDifferential(int $penaltyYardDifferential) : self
    {
        $this->penaltyYardDifferential = $penaltyYardDifferential;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPuntReturnYardDifferential() : int
    {
        return $this->puntReturnYardDifferential;
    }
    /**
     * 
     *
     * @param int $puntReturnYardDifferential
     *
     * @return self
     */
    public function setPuntReturnYardDifferential(int $puntReturnYardDifferential) : self
    {
        $this->puntReturnYardDifferential = $puntReturnYardDifferential;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getKickReturnYardDifferential() : int
    {
        return $this->kickReturnYardDifferential;
    }
    /**
     * 
     *
     * @param int $kickReturnYardDifferential
     *
     * @return self
     */
    public function setKickReturnYardDifferential(int $kickReturnYardDifferential) : self
    {
        $this->kickReturnYardDifferential = $kickReturnYardDifferential;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTwoPointConversionReturns() : int
    {
        return $this->twoPointConversionReturns;
    }
    /**
     * 
     *
     * @param int $twoPointConversionReturns
     *
     * @return self
     */
    public function setTwoPointConversionReturns(int $twoPointConversionReturns) : self
    {
        $this->twoPointConversionReturns = $twoPointConversionReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentTwoPointConversionReturns() : int
    {
        return $this->opponentTwoPointConversionReturns;
    }
    /**
     * 
     *
     * @param int $opponentTwoPointConversionReturns
     *
     * @return self
     */
    public function setOpponentTwoPointConversionReturns(int $opponentTwoPointConversionReturns) : self
    {
        $this->opponentTwoPointConversionReturns = $opponentTwoPointConversionReturns;
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
}