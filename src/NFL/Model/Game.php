<?php

namespace Sportsdata\API\NFL\Model;

class Game
{
    /**
     * 
     *
     * @var string|null
     */
    protected $gameKey;
    /**
     * 
     *
     * @var string|null
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
     * @var string|null
     */
    protected $stadium;
    /**
     * 
     *
     * @var string|null
     */
    protected $playingSurface;
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
     * @var string|null
     */
    protected $awayTeam;
    /**
     * 
     *
     * @var string|null
     */
    protected $homeTeam;
    /**
     * 
     *
     * @var int
     */
    protected $awayScore;
    /**
     * 
     *
     * @var int
     */
    protected $homeScore;
    /**
     * 
     *
     * @var int|null
     */
    protected $totalScore;
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
    protected $awayScoreQuarter1;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayScoreQuarter2;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayScoreQuarter3;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayScoreQuarter4;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayScoreOvertime;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeScoreQuarter1;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeScoreQuarter2;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeScoreQuarter3;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeScoreQuarter4;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeScoreOvertime;
    /**
     * 
     *
     * @var string|null
     */
    protected $awayTimeOfPossession;
    /**
     * 
     *
     * @var string|null
     */
    protected $homeTimeOfPossession;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayFirstDowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeFirstDowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayFirstDownsByRushing;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeFirstDownsByRushing;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayFirstDownsByPassing;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeFirstDownsByPassing;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayFirstDownsByPenalty;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeFirstDownsByPenalty;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayOffensivePlays;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeOffensivePlays;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayOffensiveYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeOffensiveYards;
    /**
     * 
     *
     * @var float|null
     */
    protected $awayOffensiveYardsPerPlay;
    /**
     * 
     *
     * @var float|null
     */
    protected $homeOffensiveYardsPerPlay;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayRushingAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeRushingAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayRushingYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeRushingYards;
    /**
     * 
     *
     * @var float|null
     */
    protected $awayRushingYardsPerAttempt;
    /**
     * 
     *
     * @var float|null
     */
    protected $homeRushingYardsPerAttempt;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayRushingTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeRushingTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayPassingAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $homePassingAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayPassingCompletions;
    /**
     * 
     *
     * @var int|null
     */
    protected $homePassingCompletions;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayPassingYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $homePassingYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayPassingTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $homePassingTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayPassingInterceptions;
    /**
     * 
     *
     * @var int|null
     */
    protected $homePassingInterceptions;
    /**
     * 
     *
     * @var float|null
     */
    protected $awayPassingYardsPerAttempt;
    /**
     * 
     *
     * @var float|null
     */
    protected $homePassingYardsPerAttempt;
    /**
     * 
     *
     * @var float|null
     */
    protected $awayPassingYardsPerCompletion;
    /**
     * 
     *
     * @var float|null
     */
    protected $homePassingYardsPerCompletion;
    /**
     * 
     *
     * @var float|null
     */
    protected $awayCompletionPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $homeCompletionPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $awayPasserRating;
    /**
     * 
     *
     * @var float|null
     */
    protected $homePasserRating;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayThirdDownAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeThirdDownAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayThirdDownConversions;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeThirdDownConversions;
    /**
     * 
     *
     * @var float|null
     */
    protected $awayThirdDownPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $homeThirdDownPercentage;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayFourthDownAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeFourthDownAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayFourthDownConversions;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeFourthDownConversions;
    /**
     * 
     *
     * @var float|null
     */
    protected $awayFourthDownPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $homeFourthDownPercentage;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayRedZoneAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeRedZoneAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayRedZoneConversions;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeRedZoneConversions;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayGoalToGoAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeGoalToGoAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayGoalToGoConversions;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeGoalToGoConversions;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayReturnYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeReturnYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayPenalties;
    /**
     * 
     *
     * @var int|null
     */
    protected $homePenalties;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayPenaltyYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $homePenaltyYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayFumbles;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeFumbles;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayFumblesLost;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeFumblesLost;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayTimesSacked;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeTimesSacked;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayTimesSackedYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeTimesSackedYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $awaySafeties;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeSafeties;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayPunts;
    /**
     * 
     *
     * @var int|null
     */
    protected $homePunts;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayPuntYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $homePuntYards;
    /**
     * 
     *
     * @var float|null
     */
    protected $awayPuntAverage;
    /**
     * 
     *
     * @var float|null
     */
    protected $homePuntAverage;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayGiveaways;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeGiveaways;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayTakeaways;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeTakeaways;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayTurnoverDifferential;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeTurnoverDifferential;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayKickoffs;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeKickoffs;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayKickoffsInEndZone;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeKickoffsInEndZone;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayKickoffTouchbacks;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeKickoffTouchbacks;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayPuntsHadBlocked;
    /**
     * 
     *
     * @var int|null
     */
    protected $homePuntsHadBlocked;
    /**
     * 
     *
     * @var float|null
     */
    protected $awayPuntNetAverage;
    /**
     * 
     *
     * @var float|null
     */
    protected $homePuntNetAverage;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayExtraPointKickingAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeExtraPointKickingAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayExtraPointKickingConversions;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeExtraPointKickingConversions;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayExtraPointsHadBlocked;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeExtraPointsHadBlocked;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayExtraPointPassingAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeExtraPointPassingAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayExtraPointPassingConversions;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeExtraPointPassingConversions;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayExtraPointRushingAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeExtraPointRushingAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayExtraPointRushingConversions;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeExtraPointRushingConversions;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayFieldGoalAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeFieldGoalAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayFieldGoalsMade;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeFieldGoalsMade;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayFieldGoalsHadBlocked;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeFieldGoalsHadBlocked;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayPuntReturns;
    /**
     * 
     *
     * @var int|null
     */
    protected $homePuntReturns;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayPuntReturnYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $homePuntReturnYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayKickReturns;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeKickReturns;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayKickReturnYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeKickReturnYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayInterceptionReturns;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeInterceptionReturns;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayInterceptionReturnYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeInterceptionReturnYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $awaySoloTackles;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayAssistedTackles;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayQuarterbackHits;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayTacklesForLoss;
    /**
     * 
     *
     * @var int|null
     */
    protected $awaySacks;
    /**
     * 
     *
     * @var int|null
     */
    protected $awaySackYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayPassesDefended;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayFumblesForced;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayFumblesRecovered;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayFumbleReturnYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayFumbleReturnTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayInterceptionReturnTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayBlockedKicks;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayPuntReturnTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayPuntReturnLong;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayKickReturnTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayKickReturnLong;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayBlockedKickReturnYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayBlockedKickReturnTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayFieldGoalReturnYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayFieldGoalReturnTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayPuntNetYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeSoloTackles;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeAssistedTackles;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeQuarterbackHits;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeTacklesForLoss;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeSacks;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeSackYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $homePassesDefended;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeFumblesForced;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeFumblesRecovered;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeFumbleReturnYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeFumbleReturnTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeInterceptionReturnTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeBlockedKicks;
    /**
     * 
     *
     * @var int|null
     */
    protected $homePuntReturnTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $homePuntReturnLong;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeKickReturnTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeKickReturnLong;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeBlockedKickReturnYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeBlockedKickReturnTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeFieldGoalReturnYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeFieldGoalReturnTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $homePuntNetYards;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isGameOver;
    /**
     * 
     *
     * @var int
     */
    protected $gameID;
    /**
     * 
     *
     * @var int|null
     */
    protected $stadiumID;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayTwoPointConversionReturns;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeTwoPointConversionReturns;
    /**
     * 
     *
     * @var int
     */
    protected $scoreID;
    /**
     * 
     *
     * @var Stadium
     */
    protected $stadiumDetails;
    /**
     * 
     *
     * @return string|null
     */
    public function getGameKey() : ?string
    {
        return $this->gameKey;
    }
    /**
     * 
     *
     * @param string|null $gameKey
     *
     * @return self
     */
    public function setGameKey(?string $gameKey) : self
    {
        $this->gameKey = $gameKey;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDate() : ?string
    {
        return $this->date;
    }
    /**
     * 
     *
     * @param string|null $date
     *
     * @return self
     */
    public function setDate(?string $date) : self
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
     * @return string|null
     */
    public function getStadium() : ?string
    {
        return $this->stadium;
    }
    /**
     * 
     *
     * @param string|null $stadium
     *
     * @return self
     */
    public function setStadium(?string $stadium) : self
    {
        $this->stadium = $stadium;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPlayingSurface() : ?string
    {
        return $this->playingSurface;
    }
    /**
     * 
     *
     * @param string|null $playingSurface
     *
     * @return self
     */
    public function setPlayingSurface(?string $playingSurface) : self
    {
        $this->playingSurface = $playingSurface;
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
     * @return string|null
     */
    public function getAwayTeam() : ?string
    {
        return $this->awayTeam;
    }
    /**
     * 
     *
     * @param string|null $awayTeam
     *
     * @return self
     */
    public function setAwayTeam(?string $awayTeam) : self
    {
        $this->awayTeam = $awayTeam;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHomeTeam() : ?string
    {
        return $this->homeTeam;
    }
    /**
     * 
     *
     * @param string|null $homeTeam
     *
     * @return self
     */
    public function setHomeTeam(?string $homeTeam) : self
    {
        $this->homeTeam = $homeTeam;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayScore() : int
    {
        return $this->awayScore;
    }
    /**
     * 
     *
     * @param int $awayScore
     *
     * @return self
     */
    public function setAwayScore(int $awayScore) : self
    {
        $this->awayScore = $awayScore;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeScore() : int
    {
        return $this->homeScore;
    }
    /**
     * 
     *
     * @param int $homeScore
     *
     * @return self
     */
    public function setHomeScore(int $homeScore) : self
    {
        $this->homeScore = $homeScore;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTotalScore() : ?int
    {
        return $this->totalScore;
    }
    /**
     * 
     *
     * @param int|null $totalScore
     *
     * @return self
     */
    public function setTotalScore(?int $totalScore) : self
    {
        $this->totalScore = $totalScore;
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
    public function getAwayScoreQuarter1() : ?int
    {
        return $this->awayScoreQuarter1;
    }
    /**
     * 
     *
     * @param int|null $awayScoreQuarter1
     *
     * @return self
     */
    public function setAwayScoreQuarter1(?int $awayScoreQuarter1) : self
    {
        $this->awayScoreQuarter1 = $awayScoreQuarter1;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayScoreQuarter2() : ?int
    {
        return $this->awayScoreQuarter2;
    }
    /**
     * 
     *
     * @param int|null $awayScoreQuarter2
     *
     * @return self
     */
    public function setAwayScoreQuarter2(?int $awayScoreQuarter2) : self
    {
        $this->awayScoreQuarter2 = $awayScoreQuarter2;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayScoreQuarter3() : ?int
    {
        return $this->awayScoreQuarter3;
    }
    /**
     * 
     *
     * @param int|null $awayScoreQuarter3
     *
     * @return self
     */
    public function setAwayScoreQuarter3(?int $awayScoreQuarter3) : self
    {
        $this->awayScoreQuarter3 = $awayScoreQuarter3;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayScoreQuarter4() : ?int
    {
        return $this->awayScoreQuarter4;
    }
    /**
     * 
     *
     * @param int|null $awayScoreQuarter4
     *
     * @return self
     */
    public function setAwayScoreQuarter4(?int $awayScoreQuarter4) : self
    {
        $this->awayScoreQuarter4 = $awayScoreQuarter4;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayScoreOvertime() : ?int
    {
        return $this->awayScoreOvertime;
    }
    /**
     * 
     *
     * @param int|null $awayScoreOvertime
     *
     * @return self
     */
    public function setAwayScoreOvertime(?int $awayScoreOvertime) : self
    {
        $this->awayScoreOvertime = $awayScoreOvertime;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeScoreQuarter1() : ?int
    {
        return $this->homeScoreQuarter1;
    }
    /**
     * 
     *
     * @param int|null $homeScoreQuarter1
     *
     * @return self
     */
    public function setHomeScoreQuarter1(?int $homeScoreQuarter1) : self
    {
        $this->homeScoreQuarter1 = $homeScoreQuarter1;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeScoreQuarter2() : ?int
    {
        return $this->homeScoreQuarter2;
    }
    /**
     * 
     *
     * @param int|null $homeScoreQuarter2
     *
     * @return self
     */
    public function setHomeScoreQuarter2(?int $homeScoreQuarter2) : self
    {
        $this->homeScoreQuarter2 = $homeScoreQuarter2;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeScoreQuarter3() : ?int
    {
        return $this->homeScoreQuarter3;
    }
    /**
     * 
     *
     * @param int|null $homeScoreQuarter3
     *
     * @return self
     */
    public function setHomeScoreQuarter3(?int $homeScoreQuarter3) : self
    {
        $this->homeScoreQuarter3 = $homeScoreQuarter3;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeScoreQuarter4() : ?int
    {
        return $this->homeScoreQuarter4;
    }
    /**
     * 
     *
     * @param int|null $homeScoreQuarter4
     *
     * @return self
     */
    public function setHomeScoreQuarter4(?int $homeScoreQuarter4) : self
    {
        $this->homeScoreQuarter4 = $homeScoreQuarter4;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeScoreOvertime() : ?int
    {
        return $this->homeScoreOvertime;
    }
    /**
     * 
     *
     * @param int|null $homeScoreOvertime
     *
     * @return self
     */
    public function setHomeScoreOvertime(?int $homeScoreOvertime) : self
    {
        $this->homeScoreOvertime = $homeScoreOvertime;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAwayTimeOfPossession() : ?string
    {
        return $this->awayTimeOfPossession;
    }
    /**
     * 
     *
     * @param string|null $awayTimeOfPossession
     *
     * @return self
     */
    public function setAwayTimeOfPossession(?string $awayTimeOfPossession) : self
    {
        $this->awayTimeOfPossession = $awayTimeOfPossession;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHomeTimeOfPossession() : ?string
    {
        return $this->homeTimeOfPossession;
    }
    /**
     * 
     *
     * @param string|null $homeTimeOfPossession
     *
     * @return self
     */
    public function setHomeTimeOfPossession(?string $homeTimeOfPossession) : self
    {
        $this->homeTimeOfPossession = $homeTimeOfPossession;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayFirstDowns() : ?int
    {
        return $this->awayFirstDowns;
    }
    /**
     * 
     *
     * @param int|null $awayFirstDowns
     *
     * @return self
     */
    public function setAwayFirstDowns(?int $awayFirstDowns) : self
    {
        $this->awayFirstDowns = $awayFirstDowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeFirstDowns() : ?int
    {
        return $this->homeFirstDowns;
    }
    /**
     * 
     *
     * @param int|null $homeFirstDowns
     *
     * @return self
     */
    public function setHomeFirstDowns(?int $homeFirstDowns) : self
    {
        $this->homeFirstDowns = $homeFirstDowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayFirstDownsByRushing() : ?int
    {
        return $this->awayFirstDownsByRushing;
    }
    /**
     * 
     *
     * @param int|null $awayFirstDownsByRushing
     *
     * @return self
     */
    public function setAwayFirstDownsByRushing(?int $awayFirstDownsByRushing) : self
    {
        $this->awayFirstDownsByRushing = $awayFirstDownsByRushing;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeFirstDownsByRushing() : ?int
    {
        return $this->homeFirstDownsByRushing;
    }
    /**
     * 
     *
     * @param int|null $homeFirstDownsByRushing
     *
     * @return self
     */
    public function setHomeFirstDownsByRushing(?int $homeFirstDownsByRushing) : self
    {
        $this->homeFirstDownsByRushing = $homeFirstDownsByRushing;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayFirstDownsByPassing() : ?int
    {
        return $this->awayFirstDownsByPassing;
    }
    /**
     * 
     *
     * @param int|null $awayFirstDownsByPassing
     *
     * @return self
     */
    public function setAwayFirstDownsByPassing(?int $awayFirstDownsByPassing) : self
    {
        $this->awayFirstDownsByPassing = $awayFirstDownsByPassing;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeFirstDownsByPassing() : ?int
    {
        return $this->homeFirstDownsByPassing;
    }
    /**
     * 
     *
     * @param int|null $homeFirstDownsByPassing
     *
     * @return self
     */
    public function setHomeFirstDownsByPassing(?int $homeFirstDownsByPassing) : self
    {
        $this->homeFirstDownsByPassing = $homeFirstDownsByPassing;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayFirstDownsByPenalty() : ?int
    {
        return $this->awayFirstDownsByPenalty;
    }
    /**
     * 
     *
     * @param int|null $awayFirstDownsByPenalty
     *
     * @return self
     */
    public function setAwayFirstDownsByPenalty(?int $awayFirstDownsByPenalty) : self
    {
        $this->awayFirstDownsByPenalty = $awayFirstDownsByPenalty;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeFirstDownsByPenalty() : ?int
    {
        return $this->homeFirstDownsByPenalty;
    }
    /**
     * 
     *
     * @param int|null $homeFirstDownsByPenalty
     *
     * @return self
     */
    public function setHomeFirstDownsByPenalty(?int $homeFirstDownsByPenalty) : self
    {
        $this->homeFirstDownsByPenalty = $homeFirstDownsByPenalty;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayOffensivePlays() : ?int
    {
        return $this->awayOffensivePlays;
    }
    /**
     * 
     *
     * @param int|null $awayOffensivePlays
     *
     * @return self
     */
    public function setAwayOffensivePlays(?int $awayOffensivePlays) : self
    {
        $this->awayOffensivePlays = $awayOffensivePlays;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeOffensivePlays() : ?int
    {
        return $this->homeOffensivePlays;
    }
    /**
     * 
     *
     * @param int|null $homeOffensivePlays
     *
     * @return self
     */
    public function setHomeOffensivePlays(?int $homeOffensivePlays) : self
    {
        $this->homeOffensivePlays = $homeOffensivePlays;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayOffensiveYards() : ?int
    {
        return $this->awayOffensiveYards;
    }
    /**
     * 
     *
     * @param int|null $awayOffensiveYards
     *
     * @return self
     */
    public function setAwayOffensiveYards(?int $awayOffensiveYards) : self
    {
        $this->awayOffensiveYards = $awayOffensiveYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeOffensiveYards() : ?int
    {
        return $this->homeOffensiveYards;
    }
    /**
     * 
     *
     * @param int|null $homeOffensiveYards
     *
     * @return self
     */
    public function setHomeOffensiveYards(?int $homeOffensiveYards) : self
    {
        $this->homeOffensiveYards = $homeOffensiveYards;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAwayOffensiveYardsPerPlay() : ?float
    {
        return $this->awayOffensiveYardsPerPlay;
    }
    /**
     * 
     *
     * @param float|null $awayOffensiveYardsPerPlay
     *
     * @return self
     */
    public function setAwayOffensiveYardsPerPlay(?float $awayOffensiveYardsPerPlay) : self
    {
        $this->awayOffensiveYardsPerPlay = $awayOffensiveYardsPerPlay;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getHomeOffensiveYardsPerPlay() : ?float
    {
        return $this->homeOffensiveYardsPerPlay;
    }
    /**
     * 
     *
     * @param float|null $homeOffensiveYardsPerPlay
     *
     * @return self
     */
    public function setHomeOffensiveYardsPerPlay(?float $homeOffensiveYardsPerPlay) : self
    {
        $this->homeOffensiveYardsPerPlay = $homeOffensiveYardsPerPlay;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayTouchdowns() : ?int
    {
        return $this->awayTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $awayTouchdowns
     *
     * @return self
     */
    public function setAwayTouchdowns(?int $awayTouchdowns) : self
    {
        $this->awayTouchdowns = $awayTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeTouchdowns() : ?int
    {
        return $this->homeTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $homeTouchdowns
     *
     * @return self
     */
    public function setHomeTouchdowns(?int $homeTouchdowns) : self
    {
        $this->homeTouchdowns = $homeTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayRushingAttempts() : ?int
    {
        return $this->awayRushingAttempts;
    }
    /**
     * 
     *
     * @param int|null $awayRushingAttempts
     *
     * @return self
     */
    public function setAwayRushingAttempts(?int $awayRushingAttempts) : self
    {
        $this->awayRushingAttempts = $awayRushingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeRushingAttempts() : ?int
    {
        return $this->homeRushingAttempts;
    }
    /**
     * 
     *
     * @param int|null $homeRushingAttempts
     *
     * @return self
     */
    public function setHomeRushingAttempts(?int $homeRushingAttempts) : self
    {
        $this->homeRushingAttempts = $homeRushingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayRushingYards() : ?int
    {
        return $this->awayRushingYards;
    }
    /**
     * 
     *
     * @param int|null $awayRushingYards
     *
     * @return self
     */
    public function setAwayRushingYards(?int $awayRushingYards) : self
    {
        $this->awayRushingYards = $awayRushingYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeRushingYards() : ?int
    {
        return $this->homeRushingYards;
    }
    /**
     * 
     *
     * @param int|null $homeRushingYards
     *
     * @return self
     */
    public function setHomeRushingYards(?int $homeRushingYards) : self
    {
        $this->homeRushingYards = $homeRushingYards;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAwayRushingYardsPerAttempt() : ?float
    {
        return $this->awayRushingYardsPerAttempt;
    }
    /**
     * 
     *
     * @param float|null $awayRushingYardsPerAttempt
     *
     * @return self
     */
    public function setAwayRushingYardsPerAttempt(?float $awayRushingYardsPerAttempt) : self
    {
        $this->awayRushingYardsPerAttempt = $awayRushingYardsPerAttempt;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getHomeRushingYardsPerAttempt() : ?float
    {
        return $this->homeRushingYardsPerAttempt;
    }
    /**
     * 
     *
     * @param float|null $homeRushingYardsPerAttempt
     *
     * @return self
     */
    public function setHomeRushingYardsPerAttempt(?float $homeRushingYardsPerAttempt) : self
    {
        $this->homeRushingYardsPerAttempt = $homeRushingYardsPerAttempt;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayRushingTouchdowns() : ?int
    {
        return $this->awayRushingTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $awayRushingTouchdowns
     *
     * @return self
     */
    public function setAwayRushingTouchdowns(?int $awayRushingTouchdowns) : self
    {
        $this->awayRushingTouchdowns = $awayRushingTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeRushingTouchdowns() : ?int
    {
        return $this->homeRushingTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $homeRushingTouchdowns
     *
     * @return self
     */
    public function setHomeRushingTouchdowns(?int $homeRushingTouchdowns) : self
    {
        $this->homeRushingTouchdowns = $homeRushingTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayPassingAttempts() : ?int
    {
        return $this->awayPassingAttempts;
    }
    /**
     * 
     *
     * @param int|null $awayPassingAttempts
     *
     * @return self
     */
    public function setAwayPassingAttempts(?int $awayPassingAttempts) : self
    {
        $this->awayPassingAttempts = $awayPassingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomePassingAttempts() : ?int
    {
        return $this->homePassingAttempts;
    }
    /**
     * 
     *
     * @param int|null $homePassingAttempts
     *
     * @return self
     */
    public function setHomePassingAttempts(?int $homePassingAttempts) : self
    {
        $this->homePassingAttempts = $homePassingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayPassingCompletions() : ?int
    {
        return $this->awayPassingCompletions;
    }
    /**
     * 
     *
     * @param int|null $awayPassingCompletions
     *
     * @return self
     */
    public function setAwayPassingCompletions(?int $awayPassingCompletions) : self
    {
        $this->awayPassingCompletions = $awayPassingCompletions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomePassingCompletions() : ?int
    {
        return $this->homePassingCompletions;
    }
    /**
     * 
     *
     * @param int|null $homePassingCompletions
     *
     * @return self
     */
    public function setHomePassingCompletions(?int $homePassingCompletions) : self
    {
        $this->homePassingCompletions = $homePassingCompletions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayPassingYards() : ?int
    {
        return $this->awayPassingYards;
    }
    /**
     * 
     *
     * @param int|null $awayPassingYards
     *
     * @return self
     */
    public function setAwayPassingYards(?int $awayPassingYards) : self
    {
        $this->awayPassingYards = $awayPassingYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomePassingYards() : ?int
    {
        return $this->homePassingYards;
    }
    /**
     * 
     *
     * @param int|null $homePassingYards
     *
     * @return self
     */
    public function setHomePassingYards(?int $homePassingYards) : self
    {
        $this->homePassingYards = $homePassingYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayPassingTouchdowns() : ?int
    {
        return $this->awayPassingTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $awayPassingTouchdowns
     *
     * @return self
     */
    public function setAwayPassingTouchdowns(?int $awayPassingTouchdowns) : self
    {
        $this->awayPassingTouchdowns = $awayPassingTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomePassingTouchdowns() : ?int
    {
        return $this->homePassingTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $homePassingTouchdowns
     *
     * @return self
     */
    public function setHomePassingTouchdowns(?int $homePassingTouchdowns) : self
    {
        $this->homePassingTouchdowns = $homePassingTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayPassingInterceptions() : ?int
    {
        return $this->awayPassingInterceptions;
    }
    /**
     * 
     *
     * @param int|null $awayPassingInterceptions
     *
     * @return self
     */
    public function setAwayPassingInterceptions(?int $awayPassingInterceptions) : self
    {
        $this->awayPassingInterceptions = $awayPassingInterceptions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomePassingInterceptions() : ?int
    {
        return $this->homePassingInterceptions;
    }
    /**
     * 
     *
     * @param int|null $homePassingInterceptions
     *
     * @return self
     */
    public function setHomePassingInterceptions(?int $homePassingInterceptions) : self
    {
        $this->homePassingInterceptions = $homePassingInterceptions;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAwayPassingYardsPerAttempt() : ?float
    {
        return $this->awayPassingYardsPerAttempt;
    }
    /**
     * 
     *
     * @param float|null $awayPassingYardsPerAttempt
     *
     * @return self
     */
    public function setAwayPassingYardsPerAttempt(?float $awayPassingYardsPerAttempt) : self
    {
        $this->awayPassingYardsPerAttempt = $awayPassingYardsPerAttempt;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getHomePassingYardsPerAttempt() : ?float
    {
        return $this->homePassingYardsPerAttempt;
    }
    /**
     * 
     *
     * @param float|null $homePassingYardsPerAttempt
     *
     * @return self
     */
    public function setHomePassingYardsPerAttempt(?float $homePassingYardsPerAttempt) : self
    {
        $this->homePassingYardsPerAttempt = $homePassingYardsPerAttempt;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAwayPassingYardsPerCompletion() : ?float
    {
        return $this->awayPassingYardsPerCompletion;
    }
    /**
     * 
     *
     * @param float|null $awayPassingYardsPerCompletion
     *
     * @return self
     */
    public function setAwayPassingYardsPerCompletion(?float $awayPassingYardsPerCompletion) : self
    {
        $this->awayPassingYardsPerCompletion = $awayPassingYardsPerCompletion;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getHomePassingYardsPerCompletion() : ?float
    {
        return $this->homePassingYardsPerCompletion;
    }
    /**
     * 
     *
     * @param float|null $homePassingYardsPerCompletion
     *
     * @return self
     */
    public function setHomePassingYardsPerCompletion(?float $homePassingYardsPerCompletion) : self
    {
        $this->homePassingYardsPerCompletion = $homePassingYardsPerCompletion;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAwayCompletionPercentage() : ?float
    {
        return $this->awayCompletionPercentage;
    }
    /**
     * 
     *
     * @param float|null $awayCompletionPercentage
     *
     * @return self
     */
    public function setAwayCompletionPercentage(?float $awayCompletionPercentage) : self
    {
        $this->awayCompletionPercentage = $awayCompletionPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getHomeCompletionPercentage() : ?float
    {
        return $this->homeCompletionPercentage;
    }
    /**
     * 
     *
     * @param float|null $homeCompletionPercentage
     *
     * @return self
     */
    public function setHomeCompletionPercentage(?float $homeCompletionPercentage) : self
    {
        $this->homeCompletionPercentage = $homeCompletionPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAwayPasserRating() : ?float
    {
        return $this->awayPasserRating;
    }
    /**
     * 
     *
     * @param float|null $awayPasserRating
     *
     * @return self
     */
    public function setAwayPasserRating(?float $awayPasserRating) : self
    {
        $this->awayPasserRating = $awayPasserRating;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getHomePasserRating() : ?float
    {
        return $this->homePasserRating;
    }
    /**
     * 
     *
     * @param float|null $homePasserRating
     *
     * @return self
     */
    public function setHomePasserRating(?float $homePasserRating) : self
    {
        $this->homePasserRating = $homePasserRating;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayThirdDownAttempts() : ?int
    {
        return $this->awayThirdDownAttempts;
    }
    /**
     * 
     *
     * @param int|null $awayThirdDownAttempts
     *
     * @return self
     */
    public function setAwayThirdDownAttempts(?int $awayThirdDownAttempts) : self
    {
        $this->awayThirdDownAttempts = $awayThirdDownAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeThirdDownAttempts() : ?int
    {
        return $this->homeThirdDownAttempts;
    }
    /**
     * 
     *
     * @param int|null $homeThirdDownAttempts
     *
     * @return self
     */
    public function setHomeThirdDownAttempts(?int $homeThirdDownAttempts) : self
    {
        $this->homeThirdDownAttempts = $homeThirdDownAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayThirdDownConversions() : ?int
    {
        return $this->awayThirdDownConversions;
    }
    /**
     * 
     *
     * @param int|null $awayThirdDownConversions
     *
     * @return self
     */
    public function setAwayThirdDownConversions(?int $awayThirdDownConversions) : self
    {
        $this->awayThirdDownConversions = $awayThirdDownConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeThirdDownConversions() : ?int
    {
        return $this->homeThirdDownConversions;
    }
    /**
     * 
     *
     * @param int|null $homeThirdDownConversions
     *
     * @return self
     */
    public function setHomeThirdDownConversions(?int $homeThirdDownConversions) : self
    {
        $this->homeThirdDownConversions = $homeThirdDownConversions;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAwayThirdDownPercentage() : ?float
    {
        return $this->awayThirdDownPercentage;
    }
    /**
     * 
     *
     * @param float|null $awayThirdDownPercentage
     *
     * @return self
     */
    public function setAwayThirdDownPercentage(?float $awayThirdDownPercentage) : self
    {
        $this->awayThirdDownPercentage = $awayThirdDownPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getHomeThirdDownPercentage() : ?float
    {
        return $this->homeThirdDownPercentage;
    }
    /**
     * 
     *
     * @param float|null $homeThirdDownPercentage
     *
     * @return self
     */
    public function setHomeThirdDownPercentage(?float $homeThirdDownPercentage) : self
    {
        $this->homeThirdDownPercentage = $homeThirdDownPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayFourthDownAttempts() : ?int
    {
        return $this->awayFourthDownAttempts;
    }
    /**
     * 
     *
     * @param int|null $awayFourthDownAttempts
     *
     * @return self
     */
    public function setAwayFourthDownAttempts(?int $awayFourthDownAttempts) : self
    {
        $this->awayFourthDownAttempts = $awayFourthDownAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeFourthDownAttempts() : ?int
    {
        return $this->homeFourthDownAttempts;
    }
    /**
     * 
     *
     * @param int|null $homeFourthDownAttempts
     *
     * @return self
     */
    public function setHomeFourthDownAttempts(?int $homeFourthDownAttempts) : self
    {
        $this->homeFourthDownAttempts = $homeFourthDownAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayFourthDownConversions() : ?int
    {
        return $this->awayFourthDownConversions;
    }
    /**
     * 
     *
     * @param int|null $awayFourthDownConversions
     *
     * @return self
     */
    public function setAwayFourthDownConversions(?int $awayFourthDownConversions) : self
    {
        $this->awayFourthDownConversions = $awayFourthDownConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeFourthDownConversions() : ?int
    {
        return $this->homeFourthDownConversions;
    }
    /**
     * 
     *
     * @param int|null $homeFourthDownConversions
     *
     * @return self
     */
    public function setHomeFourthDownConversions(?int $homeFourthDownConversions) : self
    {
        $this->homeFourthDownConversions = $homeFourthDownConversions;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAwayFourthDownPercentage() : ?float
    {
        return $this->awayFourthDownPercentage;
    }
    /**
     * 
     *
     * @param float|null $awayFourthDownPercentage
     *
     * @return self
     */
    public function setAwayFourthDownPercentage(?float $awayFourthDownPercentage) : self
    {
        $this->awayFourthDownPercentage = $awayFourthDownPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getHomeFourthDownPercentage() : ?float
    {
        return $this->homeFourthDownPercentage;
    }
    /**
     * 
     *
     * @param float|null $homeFourthDownPercentage
     *
     * @return self
     */
    public function setHomeFourthDownPercentage(?float $homeFourthDownPercentage) : self
    {
        $this->homeFourthDownPercentage = $homeFourthDownPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayRedZoneAttempts() : ?int
    {
        return $this->awayRedZoneAttempts;
    }
    /**
     * 
     *
     * @param int|null $awayRedZoneAttempts
     *
     * @return self
     */
    public function setAwayRedZoneAttempts(?int $awayRedZoneAttempts) : self
    {
        $this->awayRedZoneAttempts = $awayRedZoneAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeRedZoneAttempts() : ?int
    {
        return $this->homeRedZoneAttempts;
    }
    /**
     * 
     *
     * @param int|null $homeRedZoneAttempts
     *
     * @return self
     */
    public function setHomeRedZoneAttempts(?int $homeRedZoneAttempts) : self
    {
        $this->homeRedZoneAttempts = $homeRedZoneAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayRedZoneConversions() : ?int
    {
        return $this->awayRedZoneConversions;
    }
    /**
     * 
     *
     * @param int|null $awayRedZoneConversions
     *
     * @return self
     */
    public function setAwayRedZoneConversions(?int $awayRedZoneConversions) : self
    {
        $this->awayRedZoneConversions = $awayRedZoneConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeRedZoneConversions() : ?int
    {
        return $this->homeRedZoneConversions;
    }
    /**
     * 
     *
     * @param int|null $homeRedZoneConversions
     *
     * @return self
     */
    public function setHomeRedZoneConversions(?int $homeRedZoneConversions) : self
    {
        $this->homeRedZoneConversions = $homeRedZoneConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayGoalToGoAttempts() : ?int
    {
        return $this->awayGoalToGoAttempts;
    }
    /**
     * 
     *
     * @param int|null $awayGoalToGoAttempts
     *
     * @return self
     */
    public function setAwayGoalToGoAttempts(?int $awayGoalToGoAttempts) : self
    {
        $this->awayGoalToGoAttempts = $awayGoalToGoAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeGoalToGoAttempts() : ?int
    {
        return $this->homeGoalToGoAttempts;
    }
    /**
     * 
     *
     * @param int|null $homeGoalToGoAttempts
     *
     * @return self
     */
    public function setHomeGoalToGoAttempts(?int $homeGoalToGoAttempts) : self
    {
        $this->homeGoalToGoAttempts = $homeGoalToGoAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayGoalToGoConversions() : ?int
    {
        return $this->awayGoalToGoConversions;
    }
    /**
     * 
     *
     * @param int|null $awayGoalToGoConversions
     *
     * @return self
     */
    public function setAwayGoalToGoConversions(?int $awayGoalToGoConversions) : self
    {
        $this->awayGoalToGoConversions = $awayGoalToGoConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeGoalToGoConversions() : ?int
    {
        return $this->homeGoalToGoConversions;
    }
    /**
     * 
     *
     * @param int|null $homeGoalToGoConversions
     *
     * @return self
     */
    public function setHomeGoalToGoConversions(?int $homeGoalToGoConversions) : self
    {
        $this->homeGoalToGoConversions = $homeGoalToGoConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayReturnYards() : ?int
    {
        return $this->awayReturnYards;
    }
    /**
     * 
     *
     * @param int|null $awayReturnYards
     *
     * @return self
     */
    public function setAwayReturnYards(?int $awayReturnYards) : self
    {
        $this->awayReturnYards = $awayReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeReturnYards() : ?int
    {
        return $this->homeReturnYards;
    }
    /**
     * 
     *
     * @param int|null $homeReturnYards
     *
     * @return self
     */
    public function setHomeReturnYards(?int $homeReturnYards) : self
    {
        $this->homeReturnYards = $homeReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayPenalties() : ?int
    {
        return $this->awayPenalties;
    }
    /**
     * 
     *
     * @param int|null $awayPenalties
     *
     * @return self
     */
    public function setAwayPenalties(?int $awayPenalties) : self
    {
        $this->awayPenalties = $awayPenalties;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomePenalties() : ?int
    {
        return $this->homePenalties;
    }
    /**
     * 
     *
     * @param int|null $homePenalties
     *
     * @return self
     */
    public function setHomePenalties(?int $homePenalties) : self
    {
        $this->homePenalties = $homePenalties;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayPenaltyYards() : ?int
    {
        return $this->awayPenaltyYards;
    }
    /**
     * 
     *
     * @param int|null $awayPenaltyYards
     *
     * @return self
     */
    public function setAwayPenaltyYards(?int $awayPenaltyYards) : self
    {
        $this->awayPenaltyYards = $awayPenaltyYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomePenaltyYards() : ?int
    {
        return $this->homePenaltyYards;
    }
    /**
     * 
     *
     * @param int|null $homePenaltyYards
     *
     * @return self
     */
    public function setHomePenaltyYards(?int $homePenaltyYards) : self
    {
        $this->homePenaltyYards = $homePenaltyYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayFumbles() : ?int
    {
        return $this->awayFumbles;
    }
    /**
     * 
     *
     * @param int|null $awayFumbles
     *
     * @return self
     */
    public function setAwayFumbles(?int $awayFumbles) : self
    {
        $this->awayFumbles = $awayFumbles;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeFumbles() : ?int
    {
        return $this->homeFumbles;
    }
    /**
     * 
     *
     * @param int|null $homeFumbles
     *
     * @return self
     */
    public function setHomeFumbles(?int $homeFumbles) : self
    {
        $this->homeFumbles = $homeFumbles;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayFumblesLost() : ?int
    {
        return $this->awayFumblesLost;
    }
    /**
     * 
     *
     * @param int|null $awayFumblesLost
     *
     * @return self
     */
    public function setAwayFumblesLost(?int $awayFumblesLost) : self
    {
        $this->awayFumblesLost = $awayFumblesLost;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeFumblesLost() : ?int
    {
        return $this->homeFumblesLost;
    }
    /**
     * 
     *
     * @param int|null $homeFumblesLost
     *
     * @return self
     */
    public function setHomeFumblesLost(?int $homeFumblesLost) : self
    {
        $this->homeFumblesLost = $homeFumblesLost;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayTimesSacked() : ?int
    {
        return $this->awayTimesSacked;
    }
    /**
     * 
     *
     * @param int|null $awayTimesSacked
     *
     * @return self
     */
    public function setAwayTimesSacked(?int $awayTimesSacked) : self
    {
        $this->awayTimesSacked = $awayTimesSacked;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeTimesSacked() : ?int
    {
        return $this->homeTimesSacked;
    }
    /**
     * 
     *
     * @param int|null $homeTimesSacked
     *
     * @return self
     */
    public function setHomeTimesSacked(?int $homeTimesSacked) : self
    {
        $this->homeTimesSacked = $homeTimesSacked;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayTimesSackedYards() : ?int
    {
        return $this->awayTimesSackedYards;
    }
    /**
     * 
     *
     * @param int|null $awayTimesSackedYards
     *
     * @return self
     */
    public function setAwayTimesSackedYards(?int $awayTimesSackedYards) : self
    {
        $this->awayTimesSackedYards = $awayTimesSackedYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeTimesSackedYards() : ?int
    {
        return $this->homeTimesSackedYards;
    }
    /**
     * 
     *
     * @param int|null $homeTimesSackedYards
     *
     * @return self
     */
    public function setHomeTimesSackedYards(?int $homeTimesSackedYards) : self
    {
        $this->homeTimesSackedYards = $homeTimesSackedYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwaySafeties() : ?int
    {
        return $this->awaySafeties;
    }
    /**
     * 
     *
     * @param int|null $awaySafeties
     *
     * @return self
     */
    public function setAwaySafeties(?int $awaySafeties) : self
    {
        $this->awaySafeties = $awaySafeties;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeSafeties() : ?int
    {
        return $this->homeSafeties;
    }
    /**
     * 
     *
     * @param int|null $homeSafeties
     *
     * @return self
     */
    public function setHomeSafeties(?int $homeSafeties) : self
    {
        $this->homeSafeties = $homeSafeties;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayPunts() : ?int
    {
        return $this->awayPunts;
    }
    /**
     * 
     *
     * @param int|null $awayPunts
     *
     * @return self
     */
    public function setAwayPunts(?int $awayPunts) : self
    {
        $this->awayPunts = $awayPunts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomePunts() : ?int
    {
        return $this->homePunts;
    }
    /**
     * 
     *
     * @param int|null $homePunts
     *
     * @return self
     */
    public function setHomePunts(?int $homePunts) : self
    {
        $this->homePunts = $homePunts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayPuntYards() : ?int
    {
        return $this->awayPuntYards;
    }
    /**
     * 
     *
     * @param int|null $awayPuntYards
     *
     * @return self
     */
    public function setAwayPuntYards(?int $awayPuntYards) : self
    {
        $this->awayPuntYards = $awayPuntYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomePuntYards() : ?int
    {
        return $this->homePuntYards;
    }
    /**
     * 
     *
     * @param int|null $homePuntYards
     *
     * @return self
     */
    public function setHomePuntYards(?int $homePuntYards) : self
    {
        $this->homePuntYards = $homePuntYards;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAwayPuntAverage() : ?float
    {
        return $this->awayPuntAverage;
    }
    /**
     * 
     *
     * @param float|null $awayPuntAverage
     *
     * @return self
     */
    public function setAwayPuntAverage(?float $awayPuntAverage) : self
    {
        $this->awayPuntAverage = $awayPuntAverage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getHomePuntAverage() : ?float
    {
        return $this->homePuntAverage;
    }
    /**
     * 
     *
     * @param float|null $homePuntAverage
     *
     * @return self
     */
    public function setHomePuntAverage(?float $homePuntAverage) : self
    {
        $this->homePuntAverage = $homePuntAverage;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayGiveaways() : ?int
    {
        return $this->awayGiveaways;
    }
    /**
     * 
     *
     * @param int|null $awayGiveaways
     *
     * @return self
     */
    public function setAwayGiveaways(?int $awayGiveaways) : self
    {
        $this->awayGiveaways = $awayGiveaways;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeGiveaways() : ?int
    {
        return $this->homeGiveaways;
    }
    /**
     * 
     *
     * @param int|null $homeGiveaways
     *
     * @return self
     */
    public function setHomeGiveaways(?int $homeGiveaways) : self
    {
        $this->homeGiveaways = $homeGiveaways;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayTakeaways() : ?int
    {
        return $this->awayTakeaways;
    }
    /**
     * 
     *
     * @param int|null $awayTakeaways
     *
     * @return self
     */
    public function setAwayTakeaways(?int $awayTakeaways) : self
    {
        $this->awayTakeaways = $awayTakeaways;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeTakeaways() : ?int
    {
        return $this->homeTakeaways;
    }
    /**
     * 
     *
     * @param int|null $homeTakeaways
     *
     * @return self
     */
    public function setHomeTakeaways(?int $homeTakeaways) : self
    {
        $this->homeTakeaways = $homeTakeaways;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayTurnoverDifferential() : ?int
    {
        return $this->awayTurnoverDifferential;
    }
    /**
     * 
     *
     * @param int|null $awayTurnoverDifferential
     *
     * @return self
     */
    public function setAwayTurnoverDifferential(?int $awayTurnoverDifferential) : self
    {
        $this->awayTurnoverDifferential = $awayTurnoverDifferential;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeTurnoverDifferential() : ?int
    {
        return $this->homeTurnoverDifferential;
    }
    /**
     * 
     *
     * @param int|null $homeTurnoverDifferential
     *
     * @return self
     */
    public function setHomeTurnoverDifferential(?int $homeTurnoverDifferential) : self
    {
        $this->homeTurnoverDifferential = $homeTurnoverDifferential;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayKickoffs() : ?int
    {
        return $this->awayKickoffs;
    }
    /**
     * 
     *
     * @param int|null $awayKickoffs
     *
     * @return self
     */
    public function setAwayKickoffs(?int $awayKickoffs) : self
    {
        $this->awayKickoffs = $awayKickoffs;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeKickoffs() : ?int
    {
        return $this->homeKickoffs;
    }
    /**
     * 
     *
     * @param int|null $homeKickoffs
     *
     * @return self
     */
    public function setHomeKickoffs(?int $homeKickoffs) : self
    {
        $this->homeKickoffs = $homeKickoffs;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayKickoffsInEndZone() : ?int
    {
        return $this->awayKickoffsInEndZone;
    }
    /**
     * 
     *
     * @param int|null $awayKickoffsInEndZone
     *
     * @return self
     */
    public function setAwayKickoffsInEndZone(?int $awayKickoffsInEndZone) : self
    {
        $this->awayKickoffsInEndZone = $awayKickoffsInEndZone;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeKickoffsInEndZone() : ?int
    {
        return $this->homeKickoffsInEndZone;
    }
    /**
     * 
     *
     * @param int|null $homeKickoffsInEndZone
     *
     * @return self
     */
    public function setHomeKickoffsInEndZone(?int $homeKickoffsInEndZone) : self
    {
        $this->homeKickoffsInEndZone = $homeKickoffsInEndZone;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayKickoffTouchbacks() : ?int
    {
        return $this->awayKickoffTouchbacks;
    }
    /**
     * 
     *
     * @param int|null $awayKickoffTouchbacks
     *
     * @return self
     */
    public function setAwayKickoffTouchbacks(?int $awayKickoffTouchbacks) : self
    {
        $this->awayKickoffTouchbacks = $awayKickoffTouchbacks;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeKickoffTouchbacks() : ?int
    {
        return $this->homeKickoffTouchbacks;
    }
    /**
     * 
     *
     * @param int|null $homeKickoffTouchbacks
     *
     * @return self
     */
    public function setHomeKickoffTouchbacks(?int $homeKickoffTouchbacks) : self
    {
        $this->homeKickoffTouchbacks = $homeKickoffTouchbacks;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayPuntsHadBlocked() : ?int
    {
        return $this->awayPuntsHadBlocked;
    }
    /**
     * 
     *
     * @param int|null $awayPuntsHadBlocked
     *
     * @return self
     */
    public function setAwayPuntsHadBlocked(?int $awayPuntsHadBlocked) : self
    {
        $this->awayPuntsHadBlocked = $awayPuntsHadBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomePuntsHadBlocked() : ?int
    {
        return $this->homePuntsHadBlocked;
    }
    /**
     * 
     *
     * @param int|null $homePuntsHadBlocked
     *
     * @return self
     */
    public function setHomePuntsHadBlocked(?int $homePuntsHadBlocked) : self
    {
        $this->homePuntsHadBlocked = $homePuntsHadBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAwayPuntNetAverage() : ?float
    {
        return $this->awayPuntNetAverage;
    }
    /**
     * 
     *
     * @param float|null $awayPuntNetAverage
     *
     * @return self
     */
    public function setAwayPuntNetAverage(?float $awayPuntNetAverage) : self
    {
        $this->awayPuntNetAverage = $awayPuntNetAverage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getHomePuntNetAverage() : ?float
    {
        return $this->homePuntNetAverage;
    }
    /**
     * 
     *
     * @param float|null $homePuntNetAverage
     *
     * @return self
     */
    public function setHomePuntNetAverage(?float $homePuntNetAverage) : self
    {
        $this->homePuntNetAverage = $homePuntNetAverage;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayExtraPointKickingAttempts() : ?int
    {
        return $this->awayExtraPointKickingAttempts;
    }
    /**
     * 
     *
     * @param int|null $awayExtraPointKickingAttempts
     *
     * @return self
     */
    public function setAwayExtraPointKickingAttempts(?int $awayExtraPointKickingAttempts) : self
    {
        $this->awayExtraPointKickingAttempts = $awayExtraPointKickingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeExtraPointKickingAttempts() : ?int
    {
        return $this->homeExtraPointKickingAttempts;
    }
    /**
     * 
     *
     * @param int|null $homeExtraPointKickingAttempts
     *
     * @return self
     */
    public function setHomeExtraPointKickingAttempts(?int $homeExtraPointKickingAttempts) : self
    {
        $this->homeExtraPointKickingAttempts = $homeExtraPointKickingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayExtraPointKickingConversions() : ?int
    {
        return $this->awayExtraPointKickingConversions;
    }
    /**
     * 
     *
     * @param int|null $awayExtraPointKickingConversions
     *
     * @return self
     */
    public function setAwayExtraPointKickingConversions(?int $awayExtraPointKickingConversions) : self
    {
        $this->awayExtraPointKickingConversions = $awayExtraPointKickingConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeExtraPointKickingConversions() : ?int
    {
        return $this->homeExtraPointKickingConversions;
    }
    /**
     * 
     *
     * @param int|null $homeExtraPointKickingConversions
     *
     * @return self
     */
    public function setHomeExtraPointKickingConversions(?int $homeExtraPointKickingConversions) : self
    {
        $this->homeExtraPointKickingConversions = $homeExtraPointKickingConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayExtraPointsHadBlocked() : ?int
    {
        return $this->awayExtraPointsHadBlocked;
    }
    /**
     * 
     *
     * @param int|null $awayExtraPointsHadBlocked
     *
     * @return self
     */
    public function setAwayExtraPointsHadBlocked(?int $awayExtraPointsHadBlocked) : self
    {
        $this->awayExtraPointsHadBlocked = $awayExtraPointsHadBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeExtraPointsHadBlocked() : ?int
    {
        return $this->homeExtraPointsHadBlocked;
    }
    /**
     * 
     *
     * @param int|null $homeExtraPointsHadBlocked
     *
     * @return self
     */
    public function setHomeExtraPointsHadBlocked(?int $homeExtraPointsHadBlocked) : self
    {
        $this->homeExtraPointsHadBlocked = $homeExtraPointsHadBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayExtraPointPassingAttempts() : ?int
    {
        return $this->awayExtraPointPassingAttempts;
    }
    /**
     * 
     *
     * @param int|null $awayExtraPointPassingAttempts
     *
     * @return self
     */
    public function setAwayExtraPointPassingAttempts(?int $awayExtraPointPassingAttempts) : self
    {
        $this->awayExtraPointPassingAttempts = $awayExtraPointPassingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeExtraPointPassingAttempts() : ?int
    {
        return $this->homeExtraPointPassingAttempts;
    }
    /**
     * 
     *
     * @param int|null $homeExtraPointPassingAttempts
     *
     * @return self
     */
    public function setHomeExtraPointPassingAttempts(?int $homeExtraPointPassingAttempts) : self
    {
        $this->homeExtraPointPassingAttempts = $homeExtraPointPassingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayExtraPointPassingConversions() : ?int
    {
        return $this->awayExtraPointPassingConversions;
    }
    /**
     * 
     *
     * @param int|null $awayExtraPointPassingConversions
     *
     * @return self
     */
    public function setAwayExtraPointPassingConversions(?int $awayExtraPointPassingConversions) : self
    {
        $this->awayExtraPointPassingConversions = $awayExtraPointPassingConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeExtraPointPassingConversions() : ?int
    {
        return $this->homeExtraPointPassingConversions;
    }
    /**
     * 
     *
     * @param int|null $homeExtraPointPassingConversions
     *
     * @return self
     */
    public function setHomeExtraPointPassingConversions(?int $homeExtraPointPassingConversions) : self
    {
        $this->homeExtraPointPassingConversions = $homeExtraPointPassingConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayExtraPointRushingAttempts() : ?int
    {
        return $this->awayExtraPointRushingAttempts;
    }
    /**
     * 
     *
     * @param int|null $awayExtraPointRushingAttempts
     *
     * @return self
     */
    public function setAwayExtraPointRushingAttempts(?int $awayExtraPointRushingAttempts) : self
    {
        $this->awayExtraPointRushingAttempts = $awayExtraPointRushingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeExtraPointRushingAttempts() : ?int
    {
        return $this->homeExtraPointRushingAttempts;
    }
    /**
     * 
     *
     * @param int|null $homeExtraPointRushingAttempts
     *
     * @return self
     */
    public function setHomeExtraPointRushingAttempts(?int $homeExtraPointRushingAttempts) : self
    {
        $this->homeExtraPointRushingAttempts = $homeExtraPointRushingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayExtraPointRushingConversions() : ?int
    {
        return $this->awayExtraPointRushingConversions;
    }
    /**
     * 
     *
     * @param int|null $awayExtraPointRushingConversions
     *
     * @return self
     */
    public function setAwayExtraPointRushingConversions(?int $awayExtraPointRushingConversions) : self
    {
        $this->awayExtraPointRushingConversions = $awayExtraPointRushingConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeExtraPointRushingConversions() : ?int
    {
        return $this->homeExtraPointRushingConversions;
    }
    /**
     * 
     *
     * @param int|null $homeExtraPointRushingConversions
     *
     * @return self
     */
    public function setHomeExtraPointRushingConversions(?int $homeExtraPointRushingConversions) : self
    {
        $this->homeExtraPointRushingConversions = $homeExtraPointRushingConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayFieldGoalAttempts() : ?int
    {
        return $this->awayFieldGoalAttempts;
    }
    /**
     * 
     *
     * @param int|null $awayFieldGoalAttempts
     *
     * @return self
     */
    public function setAwayFieldGoalAttempts(?int $awayFieldGoalAttempts) : self
    {
        $this->awayFieldGoalAttempts = $awayFieldGoalAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeFieldGoalAttempts() : ?int
    {
        return $this->homeFieldGoalAttempts;
    }
    /**
     * 
     *
     * @param int|null $homeFieldGoalAttempts
     *
     * @return self
     */
    public function setHomeFieldGoalAttempts(?int $homeFieldGoalAttempts) : self
    {
        $this->homeFieldGoalAttempts = $homeFieldGoalAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayFieldGoalsMade() : ?int
    {
        return $this->awayFieldGoalsMade;
    }
    /**
     * 
     *
     * @param int|null $awayFieldGoalsMade
     *
     * @return self
     */
    public function setAwayFieldGoalsMade(?int $awayFieldGoalsMade) : self
    {
        $this->awayFieldGoalsMade = $awayFieldGoalsMade;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeFieldGoalsMade() : ?int
    {
        return $this->homeFieldGoalsMade;
    }
    /**
     * 
     *
     * @param int|null $homeFieldGoalsMade
     *
     * @return self
     */
    public function setHomeFieldGoalsMade(?int $homeFieldGoalsMade) : self
    {
        $this->homeFieldGoalsMade = $homeFieldGoalsMade;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayFieldGoalsHadBlocked() : ?int
    {
        return $this->awayFieldGoalsHadBlocked;
    }
    /**
     * 
     *
     * @param int|null $awayFieldGoalsHadBlocked
     *
     * @return self
     */
    public function setAwayFieldGoalsHadBlocked(?int $awayFieldGoalsHadBlocked) : self
    {
        $this->awayFieldGoalsHadBlocked = $awayFieldGoalsHadBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeFieldGoalsHadBlocked() : ?int
    {
        return $this->homeFieldGoalsHadBlocked;
    }
    /**
     * 
     *
     * @param int|null $homeFieldGoalsHadBlocked
     *
     * @return self
     */
    public function setHomeFieldGoalsHadBlocked(?int $homeFieldGoalsHadBlocked) : self
    {
        $this->homeFieldGoalsHadBlocked = $homeFieldGoalsHadBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayPuntReturns() : ?int
    {
        return $this->awayPuntReturns;
    }
    /**
     * 
     *
     * @param int|null $awayPuntReturns
     *
     * @return self
     */
    public function setAwayPuntReturns(?int $awayPuntReturns) : self
    {
        $this->awayPuntReturns = $awayPuntReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomePuntReturns() : ?int
    {
        return $this->homePuntReturns;
    }
    /**
     * 
     *
     * @param int|null $homePuntReturns
     *
     * @return self
     */
    public function setHomePuntReturns(?int $homePuntReturns) : self
    {
        $this->homePuntReturns = $homePuntReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayPuntReturnYards() : ?int
    {
        return $this->awayPuntReturnYards;
    }
    /**
     * 
     *
     * @param int|null $awayPuntReturnYards
     *
     * @return self
     */
    public function setAwayPuntReturnYards(?int $awayPuntReturnYards) : self
    {
        $this->awayPuntReturnYards = $awayPuntReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomePuntReturnYards() : ?int
    {
        return $this->homePuntReturnYards;
    }
    /**
     * 
     *
     * @param int|null $homePuntReturnYards
     *
     * @return self
     */
    public function setHomePuntReturnYards(?int $homePuntReturnYards) : self
    {
        $this->homePuntReturnYards = $homePuntReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayKickReturns() : ?int
    {
        return $this->awayKickReturns;
    }
    /**
     * 
     *
     * @param int|null $awayKickReturns
     *
     * @return self
     */
    public function setAwayKickReturns(?int $awayKickReturns) : self
    {
        $this->awayKickReturns = $awayKickReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeKickReturns() : ?int
    {
        return $this->homeKickReturns;
    }
    /**
     * 
     *
     * @param int|null $homeKickReturns
     *
     * @return self
     */
    public function setHomeKickReturns(?int $homeKickReturns) : self
    {
        $this->homeKickReturns = $homeKickReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayKickReturnYards() : ?int
    {
        return $this->awayKickReturnYards;
    }
    /**
     * 
     *
     * @param int|null $awayKickReturnYards
     *
     * @return self
     */
    public function setAwayKickReturnYards(?int $awayKickReturnYards) : self
    {
        $this->awayKickReturnYards = $awayKickReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeKickReturnYards() : ?int
    {
        return $this->homeKickReturnYards;
    }
    /**
     * 
     *
     * @param int|null $homeKickReturnYards
     *
     * @return self
     */
    public function setHomeKickReturnYards(?int $homeKickReturnYards) : self
    {
        $this->homeKickReturnYards = $homeKickReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayInterceptionReturns() : ?int
    {
        return $this->awayInterceptionReturns;
    }
    /**
     * 
     *
     * @param int|null $awayInterceptionReturns
     *
     * @return self
     */
    public function setAwayInterceptionReturns(?int $awayInterceptionReturns) : self
    {
        $this->awayInterceptionReturns = $awayInterceptionReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeInterceptionReturns() : ?int
    {
        return $this->homeInterceptionReturns;
    }
    /**
     * 
     *
     * @param int|null $homeInterceptionReturns
     *
     * @return self
     */
    public function setHomeInterceptionReturns(?int $homeInterceptionReturns) : self
    {
        $this->homeInterceptionReturns = $homeInterceptionReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayInterceptionReturnYards() : ?int
    {
        return $this->awayInterceptionReturnYards;
    }
    /**
     * 
     *
     * @param int|null $awayInterceptionReturnYards
     *
     * @return self
     */
    public function setAwayInterceptionReturnYards(?int $awayInterceptionReturnYards) : self
    {
        $this->awayInterceptionReturnYards = $awayInterceptionReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeInterceptionReturnYards() : ?int
    {
        return $this->homeInterceptionReturnYards;
    }
    /**
     * 
     *
     * @param int|null $homeInterceptionReturnYards
     *
     * @return self
     */
    public function setHomeInterceptionReturnYards(?int $homeInterceptionReturnYards) : self
    {
        $this->homeInterceptionReturnYards = $homeInterceptionReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwaySoloTackles() : ?int
    {
        return $this->awaySoloTackles;
    }
    /**
     * 
     *
     * @param int|null $awaySoloTackles
     *
     * @return self
     */
    public function setAwaySoloTackles(?int $awaySoloTackles) : self
    {
        $this->awaySoloTackles = $awaySoloTackles;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayAssistedTackles() : ?int
    {
        return $this->awayAssistedTackles;
    }
    /**
     * 
     *
     * @param int|null $awayAssistedTackles
     *
     * @return self
     */
    public function setAwayAssistedTackles(?int $awayAssistedTackles) : self
    {
        $this->awayAssistedTackles = $awayAssistedTackles;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayQuarterbackHits() : ?int
    {
        return $this->awayQuarterbackHits;
    }
    /**
     * 
     *
     * @param int|null $awayQuarterbackHits
     *
     * @return self
     */
    public function setAwayQuarterbackHits(?int $awayQuarterbackHits) : self
    {
        $this->awayQuarterbackHits = $awayQuarterbackHits;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayTacklesForLoss() : ?int
    {
        return $this->awayTacklesForLoss;
    }
    /**
     * 
     *
     * @param int|null $awayTacklesForLoss
     *
     * @return self
     */
    public function setAwayTacklesForLoss(?int $awayTacklesForLoss) : self
    {
        $this->awayTacklesForLoss = $awayTacklesForLoss;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwaySacks() : ?int
    {
        return $this->awaySacks;
    }
    /**
     * 
     *
     * @param int|null $awaySacks
     *
     * @return self
     */
    public function setAwaySacks(?int $awaySacks) : self
    {
        $this->awaySacks = $awaySacks;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwaySackYards() : ?int
    {
        return $this->awaySackYards;
    }
    /**
     * 
     *
     * @param int|null $awaySackYards
     *
     * @return self
     */
    public function setAwaySackYards(?int $awaySackYards) : self
    {
        $this->awaySackYards = $awaySackYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayPassesDefended() : ?int
    {
        return $this->awayPassesDefended;
    }
    /**
     * 
     *
     * @param int|null $awayPassesDefended
     *
     * @return self
     */
    public function setAwayPassesDefended(?int $awayPassesDefended) : self
    {
        $this->awayPassesDefended = $awayPassesDefended;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayFumblesForced() : ?int
    {
        return $this->awayFumblesForced;
    }
    /**
     * 
     *
     * @param int|null $awayFumblesForced
     *
     * @return self
     */
    public function setAwayFumblesForced(?int $awayFumblesForced) : self
    {
        $this->awayFumblesForced = $awayFumblesForced;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayFumblesRecovered() : ?int
    {
        return $this->awayFumblesRecovered;
    }
    /**
     * 
     *
     * @param int|null $awayFumblesRecovered
     *
     * @return self
     */
    public function setAwayFumblesRecovered(?int $awayFumblesRecovered) : self
    {
        $this->awayFumblesRecovered = $awayFumblesRecovered;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayFumbleReturnYards() : ?int
    {
        return $this->awayFumbleReturnYards;
    }
    /**
     * 
     *
     * @param int|null $awayFumbleReturnYards
     *
     * @return self
     */
    public function setAwayFumbleReturnYards(?int $awayFumbleReturnYards) : self
    {
        $this->awayFumbleReturnYards = $awayFumbleReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayFumbleReturnTouchdowns() : ?int
    {
        return $this->awayFumbleReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $awayFumbleReturnTouchdowns
     *
     * @return self
     */
    public function setAwayFumbleReturnTouchdowns(?int $awayFumbleReturnTouchdowns) : self
    {
        $this->awayFumbleReturnTouchdowns = $awayFumbleReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayInterceptionReturnTouchdowns() : ?int
    {
        return $this->awayInterceptionReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $awayInterceptionReturnTouchdowns
     *
     * @return self
     */
    public function setAwayInterceptionReturnTouchdowns(?int $awayInterceptionReturnTouchdowns) : self
    {
        $this->awayInterceptionReturnTouchdowns = $awayInterceptionReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayBlockedKicks() : ?int
    {
        return $this->awayBlockedKicks;
    }
    /**
     * 
     *
     * @param int|null $awayBlockedKicks
     *
     * @return self
     */
    public function setAwayBlockedKicks(?int $awayBlockedKicks) : self
    {
        $this->awayBlockedKicks = $awayBlockedKicks;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayPuntReturnTouchdowns() : ?int
    {
        return $this->awayPuntReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $awayPuntReturnTouchdowns
     *
     * @return self
     */
    public function setAwayPuntReturnTouchdowns(?int $awayPuntReturnTouchdowns) : self
    {
        $this->awayPuntReturnTouchdowns = $awayPuntReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayPuntReturnLong() : ?int
    {
        return $this->awayPuntReturnLong;
    }
    /**
     * 
     *
     * @param int|null $awayPuntReturnLong
     *
     * @return self
     */
    public function setAwayPuntReturnLong(?int $awayPuntReturnLong) : self
    {
        $this->awayPuntReturnLong = $awayPuntReturnLong;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayKickReturnTouchdowns() : ?int
    {
        return $this->awayKickReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $awayKickReturnTouchdowns
     *
     * @return self
     */
    public function setAwayKickReturnTouchdowns(?int $awayKickReturnTouchdowns) : self
    {
        $this->awayKickReturnTouchdowns = $awayKickReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayKickReturnLong() : ?int
    {
        return $this->awayKickReturnLong;
    }
    /**
     * 
     *
     * @param int|null $awayKickReturnLong
     *
     * @return self
     */
    public function setAwayKickReturnLong(?int $awayKickReturnLong) : self
    {
        $this->awayKickReturnLong = $awayKickReturnLong;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayBlockedKickReturnYards() : ?int
    {
        return $this->awayBlockedKickReturnYards;
    }
    /**
     * 
     *
     * @param int|null $awayBlockedKickReturnYards
     *
     * @return self
     */
    public function setAwayBlockedKickReturnYards(?int $awayBlockedKickReturnYards) : self
    {
        $this->awayBlockedKickReturnYards = $awayBlockedKickReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayBlockedKickReturnTouchdowns() : ?int
    {
        return $this->awayBlockedKickReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $awayBlockedKickReturnTouchdowns
     *
     * @return self
     */
    public function setAwayBlockedKickReturnTouchdowns(?int $awayBlockedKickReturnTouchdowns) : self
    {
        $this->awayBlockedKickReturnTouchdowns = $awayBlockedKickReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayFieldGoalReturnYards() : ?int
    {
        return $this->awayFieldGoalReturnYards;
    }
    /**
     * 
     *
     * @param int|null $awayFieldGoalReturnYards
     *
     * @return self
     */
    public function setAwayFieldGoalReturnYards(?int $awayFieldGoalReturnYards) : self
    {
        $this->awayFieldGoalReturnYards = $awayFieldGoalReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayFieldGoalReturnTouchdowns() : ?int
    {
        return $this->awayFieldGoalReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $awayFieldGoalReturnTouchdowns
     *
     * @return self
     */
    public function setAwayFieldGoalReturnTouchdowns(?int $awayFieldGoalReturnTouchdowns) : self
    {
        $this->awayFieldGoalReturnTouchdowns = $awayFieldGoalReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayPuntNetYards() : ?int
    {
        return $this->awayPuntNetYards;
    }
    /**
     * 
     *
     * @param int|null $awayPuntNetYards
     *
     * @return self
     */
    public function setAwayPuntNetYards(?int $awayPuntNetYards) : self
    {
        $this->awayPuntNetYards = $awayPuntNetYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeSoloTackles() : ?int
    {
        return $this->homeSoloTackles;
    }
    /**
     * 
     *
     * @param int|null $homeSoloTackles
     *
     * @return self
     */
    public function setHomeSoloTackles(?int $homeSoloTackles) : self
    {
        $this->homeSoloTackles = $homeSoloTackles;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeAssistedTackles() : ?int
    {
        return $this->homeAssistedTackles;
    }
    /**
     * 
     *
     * @param int|null $homeAssistedTackles
     *
     * @return self
     */
    public function setHomeAssistedTackles(?int $homeAssistedTackles) : self
    {
        $this->homeAssistedTackles = $homeAssistedTackles;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeQuarterbackHits() : ?int
    {
        return $this->homeQuarterbackHits;
    }
    /**
     * 
     *
     * @param int|null $homeQuarterbackHits
     *
     * @return self
     */
    public function setHomeQuarterbackHits(?int $homeQuarterbackHits) : self
    {
        $this->homeQuarterbackHits = $homeQuarterbackHits;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeTacklesForLoss() : ?int
    {
        return $this->homeTacklesForLoss;
    }
    /**
     * 
     *
     * @param int|null $homeTacklesForLoss
     *
     * @return self
     */
    public function setHomeTacklesForLoss(?int $homeTacklesForLoss) : self
    {
        $this->homeTacklesForLoss = $homeTacklesForLoss;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeSacks() : ?int
    {
        return $this->homeSacks;
    }
    /**
     * 
     *
     * @param int|null $homeSacks
     *
     * @return self
     */
    public function setHomeSacks(?int $homeSacks) : self
    {
        $this->homeSacks = $homeSacks;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeSackYards() : ?int
    {
        return $this->homeSackYards;
    }
    /**
     * 
     *
     * @param int|null $homeSackYards
     *
     * @return self
     */
    public function setHomeSackYards(?int $homeSackYards) : self
    {
        $this->homeSackYards = $homeSackYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomePassesDefended() : ?int
    {
        return $this->homePassesDefended;
    }
    /**
     * 
     *
     * @param int|null $homePassesDefended
     *
     * @return self
     */
    public function setHomePassesDefended(?int $homePassesDefended) : self
    {
        $this->homePassesDefended = $homePassesDefended;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeFumblesForced() : ?int
    {
        return $this->homeFumblesForced;
    }
    /**
     * 
     *
     * @param int|null $homeFumblesForced
     *
     * @return self
     */
    public function setHomeFumblesForced(?int $homeFumblesForced) : self
    {
        $this->homeFumblesForced = $homeFumblesForced;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeFumblesRecovered() : ?int
    {
        return $this->homeFumblesRecovered;
    }
    /**
     * 
     *
     * @param int|null $homeFumblesRecovered
     *
     * @return self
     */
    public function setHomeFumblesRecovered(?int $homeFumblesRecovered) : self
    {
        $this->homeFumblesRecovered = $homeFumblesRecovered;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeFumbleReturnYards() : ?int
    {
        return $this->homeFumbleReturnYards;
    }
    /**
     * 
     *
     * @param int|null $homeFumbleReturnYards
     *
     * @return self
     */
    public function setHomeFumbleReturnYards(?int $homeFumbleReturnYards) : self
    {
        $this->homeFumbleReturnYards = $homeFumbleReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeFumbleReturnTouchdowns() : ?int
    {
        return $this->homeFumbleReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $homeFumbleReturnTouchdowns
     *
     * @return self
     */
    public function setHomeFumbleReturnTouchdowns(?int $homeFumbleReturnTouchdowns) : self
    {
        $this->homeFumbleReturnTouchdowns = $homeFumbleReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeInterceptionReturnTouchdowns() : ?int
    {
        return $this->homeInterceptionReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $homeInterceptionReturnTouchdowns
     *
     * @return self
     */
    public function setHomeInterceptionReturnTouchdowns(?int $homeInterceptionReturnTouchdowns) : self
    {
        $this->homeInterceptionReturnTouchdowns = $homeInterceptionReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeBlockedKicks() : ?int
    {
        return $this->homeBlockedKicks;
    }
    /**
     * 
     *
     * @param int|null $homeBlockedKicks
     *
     * @return self
     */
    public function setHomeBlockedKicks(?int $homeBlockedKicks) : self
    {
        $this->homeBlockedKicks = $homeBlockedKicks;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomePuntReturnTouchdowns() : ?int
    {
        return $this->homePuntReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $homePuntReturnTouchdowns
     *
     * @return self
     */
    public function setHomePuntReturnTouchdowns(?int $homePuntReturnTouchdowns) : self
    {
        $this->homePuntReturnTouchdowns = $homePuntReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomePuntReturnLong() : ?int
    {
        return $this->homePuntReturnLong;
    }
    /**
     * 
     *
     * @param int|null $homePuntReturnLong
     *
     * @return self
     */
    public function setHomePuntReturnLong(?int $homePuntReturnLong) : self
    {
        $this->homePuntReturnLong = $homePuntReturnLong;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeKickReturnTouchdowns() : ?int
    {
        return $this->homeKickReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $homeKickReturnTouchdowns
     *
     * @return self
     */
    public function setHomeKickReturnTouchdowns(?int $homeKickReturnTouchdowns) : self
    {
        $this->homeKickReturnTouchdowns = $homeKickReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeKickReturnLong() : ?int
    {
        return $this->homeKickReturnLong;
    }
    /**
     * 
     *
     * @param int|null $homeKickReturnLong
     *
     * @return self
     */
    public function setHomeKickReturnLong(?int $homeKickReturnLong) : self
    {
        $this->homeKickReturnLong = $homeKickReturnLong;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeBlockedKickReturnYards() : ?int
    {
        return $this->homeBlockedKickReturnYards;
    }
    /**
     * 
     *
     * @param int|null $homeBlockedKickReturnYards
     *
     * @return self
     */
    public function setHomeBlockedKickReturnYards(?int $homeBlockedKickReturnYards) : self
    {
        $this->homeBlockedKickReturnYards = $homeBlockedKickReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeBlockedKickReturnTouchdowns() : ?int
    {
        return $this->homeBlockedKickReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $homeBlockedKickReturnTouchdowns
     *
     * @return self
     */
    public function setHomeBlockedKickReturnTouchdowns(?int $homeBlockedKickReturnTouchdowns) : self
    {
        $this->homeBlockedKickReturnTouchdowns = $homeBlockedKickReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeFieldGoalReturnYards() : ?int
    {
        return $this->homeFieldGoalReturnYards;
    }
    /**
     * 
     *
     * @param int|null $homeFieldGoalReturnYards
     *
     * @return self
     */
    public function setHomeFieldGoalReturnYards(?int $homeFieldGoalReturnYards) : self
    {
        $this->homeFieldGoalReturnYards = $homeFieldGoalReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeFieldGoalReturnTouchdowns() : ?int
    {
        return $this->homeFieldGoalReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $homeFieldGoalReturnTouchdowns
     *
     * @return self
     */
    public function setHomeFieldGoalReturnTouchdowns(?int $homeFieldGoalReturnTouchdowns) : self
    {
        $this->homeFieldGoalReturnTouchdowns = $homeFieldGoalReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomePuntNetYards() : ?int
    {
        return $this->homePuntNetYards;
    }
    /**
     * 
     *
     * @param int|null $homePuntNetYards
     *
     * @return self
     */
    public function setHomePuntNetYards(?int $homePuntNetYards) : self
    {
        $this->homePuntNetYards = $homePuntNetYards;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsGameOver() : ?bool
    {
        return $this->isGameOver;
    }
    /**
     * 
     *
     * @param bool|null $isGameOver
     *
     * @return self
     */
    public function setIsGameOver(?bool $isGameOver) : self
    {
        $this->isGameOver = $isGameOver;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGameID() : int
    {
        return $this->gameID;
    }
    /**
     * 
     *
     * @param int $gameID
     *
     * @return self
     */
    public function setGameID(int $gameID) : self
    {
        $this->gameID = $gameID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getStadiumID() : ?int
    {
        return $this->stadiumID;
    }
    /**
     * 
     *
     * @param int|null $stadiumID
     *
     * @return self
     */
    public function setStadiumID(?int $stadiumID) : self
    {
        $this->stadiumID = $stadiumID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayTwoPointConversionReturns() : ?int
    {
        return $this->awayTwoPointConversionReturns;
    }
    /**
     * 
     *
     * @param int|null $awayTwoPointConversionReturns
     *
     * @return self
     */
    public function setAwayTwoPointConversionReturns(?int $awayTwoPointConversionReturns) : self
    {
        $this->awayTwoPointConversionReturns = $awayTwoPointConversionReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeTwoPointConversionReturns() : ?int
    {
        return $this->homeTwoPointConversionReturns;
    }
    /**
     * 
     *
     * @param int|null $homeTwoPointConversionReturns
     *
     * @return self
     */
    public function setHomeTwoPointConversionReturns(?int $homeTwoPointConversionReturns) : self
    {
        $this->homeTwoPointConversionReturns = $homeTwoPointConversionReturns;
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
    /**
     * 
     *
     * @return Stadium
     */
    public function getStadiumDetails() : Stadium
    {
        return $this->stadiumDetails;
    }
    /**
     * 
     *
     * @param Stadium $stadiumDetails
     *
     * @return self
     */
    public function setStadiumDetails(Stadium $stadiumDetails) : self
    {
        $this->stadiumDetails = $stadiumDetails;
        return $this;
    }
}