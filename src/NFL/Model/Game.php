<?php

namespace Sportsdata\API\NFL\Model;

class Game
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
     * @var string
     */
    protected $awayTeam;
    /**
     * 
     *
     * @var string
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
     * @var int
     */
    protected $totalScore;
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
    protected $awayScoreQuarter1;
    /**
     * 
     *
     * @var int
     */
    protected $awayScoreQuarter2;
    /**
     * 
     *
     * @var int
     */
    protected $awayScoreQuarter3;
    /**
     * 
     *
     * @var int
     */
    protected $awayScoreQuarter4;
    /**
     * 
     *
     * @var int
     */
    protected $awayScoreOvertime;
    /**
     * 
     *
     * @var int
     */
    protected $homeScoreQuarter1;
    /**
     * 
     *
     * @var int
     */
    protected $homeScoreQuarter2;
    /**
     * 
     *
     * @var int
     */
    protected $homeScoreQuarter3;
    /**
     * 
     *
     * @var int
     */
    protected $homeScoreQuarter4;
    /**
     * 
     *
     * @var int
     */
    protected $homeScoreOvertime;
    /**
     * 
     *
     * @var string
     */
    protected $awayTimeOfPossession;
    /**
     * 
     *
     * @var string
     */
    protected $homeTimeOfPossession;
    /**
     * 
     *
     * @var int
     */
    protected $awayFirstDowns;
    /**
     * 
     *
     * @var int
     */
    protected $homeFirstDowns;
    /**
     * 
     *
     * @var int
     */
    protected $awayFirstDownsByRushing;
    /**
     * 
     *
     * @var int
     */
    protected $homeFirstDownsByRushing;
    /**
     * 
     *
     * @var int
     */
    protected $awayFirstDownsByPassing;
    /**
     * 
     *
     * @var int
     */
    protected $homeFirstDownsByPassing;
    /**
     * 
     *
     * @var int
     */
    protected $awayFirstDownsByPenalty;
    /**
     * 
     *
     * @var int
     */
    protected $homeFirstDownsByPenalty;
    /**
     * 
     *
     * @var int
     */
    protected $awayOffensivePlays;
    /**
     * 
     *
     * @var int
     */
    protected $homeOffensivePlays;
    /**
     * 
     *
     * @var int
     */
    protected $awayOffensiveYards;
    /**
     * 
     *
     * @var int
     */
    protected $homeOffensiveYards;
    /**
     * 
     *
     * @var float
     */
    protected $awayOffensiveYardsPerPlay;
    /**
     * 
     *
     * @var float
     */
    protected $homeOffensiveYardsPerPlay;
    /**
     * 
     *
     * @var int
     */
    protected $awayTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $homeTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $awayRushingAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $homeRushingAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $awayRushingYards;
    /**
     * 
     *
     * @var int
     */
    protected $homeRushingYards;
    /**
     * 
     *
     * @var float
     */
    protected $awayRushingYardsPerAttempt;
    /**
     * 
     *
     * @var float
     */
    protected $homeRushingYardsPerAttempt;
    /**
     * 
     *
     * @var int
     */
    protected $awayRushingTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $homeRushingTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $awayPassingAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $homePassingAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $awayPassingCompletions;
    /**
     * 
     *
     * @var int
     */
    protected $homePassingCompletions;
    /**
     * 
     *
     * @var int
     */
    protected $awayPassingYards;
    /**
     * 
     *
     * @var int
     */
    protected $homePassingYards;
    /**
     * 
     *
     * @var int
     */
    protected $awayPassingTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $homePassingTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $awayPassingInterceptions;
    /**
     * 
     *
     * @var int
     */
    protected $homePassingInterceptions;
    /**
     * 
     *
     * @var float
     */
    protected $awayPassingYardsPerAttempt;
    /**
     * 
     *
     * @var float
     */
    protected $homePassingYardsPerAttempt;
    /**
     * 
     *
     * @var float
     */
    protected $awayPassingYardsPerCompletion;
    /**
     * 
     *
     * @var float
     */
    protected $homePassingYardsPerCompletion;
    /**
     * 
     *
     * @var float
     */
    protected $awayCompletionPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $homeCompletionPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $awayPasserRating;
    /**
     * 
     *
     * @var float
     */
    protected $homePasserRating;
    /**
     * 
     *
     * @var int
     */
    protected $awayThirdDownAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $homeThirdDownAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $awayThirdDownConversions;
    /**
     * 
     *
     * @var int
     */
    protected $homeThirdDownConversions;
    /**
     * 
     *
     * @var float
     */
    protected $awayThirdDownPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $homeThirdDownPercentage;
    /**
     * 
     *
     * @var int
     */
    protected $awayFourthDownAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $homeFourthDownAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $awayFourthDownConversions;
    /**
     * 
     *
     * @var int
     */
    protected $homeFourthDownConversions;
    /**
     * 
     *
     * @var float
     */
    protected $awayFourthDownPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $homeFourthDownPercentage;
    /**
     * 
     *
     * @var int
     */
    protected $awayRedZoneAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $homeRedZoneAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $awayRedZoneConversions;
    /**
     * 
     *
     * @var int
     */
    protected $homeRedZoneConversions;
    /**
     * 
     *
     * @var int
     */
    protected $awayGoalToGoAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $homeGoalToGoAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $awayGoalToGoConversions;
    /**
     * 
     *
     * @var int
     */
    protected $homeGoalToGoConversions;
    /**
     * 
     *
     * @var int
     */
    protected $awayReturnYards;
    /**
     * 
     *
     * @var int
     */
    protected $homeReturnYards;
    /**
     * 
     *
     * @var int
     */
    protected $awayPenalties;
    /**
     * 
     *
     * @var int
     */
    protected $homePenalties;
    /**
     * 
     *
     * @var int
     */
    protected $awayPenaltyYards;
    /**
     * 
     *
     * @var int
     */
    protected $homePenaltyYards;
    /**
     * 
     *
     * @var int
     */
    protected $awayFumbles;
    /**
     * 
     *
     * @var int
     */
    protected $homeFumbles;
    /**
     * 
     *
     * @var int
     */
    protected $awayFumblesLost;
    /**
     * 
     *
     * @var int
     */
    protected $homeFumblesLost;
    /**
     * 
     *
     * @var int
     */
    protected $awayTimesSacked;
    /**
     * 
     *
     * @var int
     */
    protected $homeTimesSacked;
    /**
     * 
     *
     * @var int
     */
    protected $awayTimesSackedYards;
    /**
     * 
     *
     * @var int
     */
    protected $homeTimesSackedYards;
    /**
     * 
     *
     * @var int
     */
    protected $awaySafeties;
    /**
     * 
     *
     * @var int
     */
    protected $homeSafeties;
    /**
     * 
     *
     * @var int
     */
    protected $awayPunts;
    /**
     * 
     *
     * @var int
     */
    protected $homePunts;
    /**
     * 
     *
     * @var int
     */
    protected $awayPuntYards;
    /**
     * 
     *
     * @var int
     */
    protected $homePuntYards;
    /**
     * 
     *
     * @var float
     */
    protected $awayPuntAverage;
    /**
     * 
     *
     * @var float
     */
    protected $homePuntAverage;
    /**
     * 
     *
     * @var int
     */
    protected $awayGiveaways;
    /**
     * 
     *
     * @var int
     */
    protected $homeGiveaways;
    /**
     * 
     *
     * @var int
     */
    protected $awayTakeaways;
    /**
     * 
     *
     * @var int
     */
    protected $homeTakeaways;
    /**
     * 
     *
     * @var int
     */
    protected $awayTurnoverDifferential;
    /**
     * 
     *
     * @var int
     */
    protected $homeTurnoverDifferential;
    /**
     * 
     *
     * @var int
     */
    protected $awayKickoffs;
    /**
     * 
     *
     * @var int
     */
    protected $homeKickoffs;
    /**
     * 
     *
     * @var int
     */
    protected $awayKickoffsInEndZone;
    /**
     * 
     *
     * @var int
     */
    protected $homeKickoffsInEndZone;
    /**
     * 
     *
     * @var int
     */
    protected $awayKickoffTouchbacks;
    /**
     * 
     *
     * @var int
     */
    protected $homeKickoffTouchbacks;
    /**
     * 
     *
     * @var int
     */
    protected $awayPuntsHadBlocked;
    /**
     * 
     *
     * @var int
     */
    protected $homePuntsHadBlocked;
    /**
     * 
     *
     * @var float
     */
    protected $awayPuntNetAverage;
    /**
     * 
     *
     * @var float
     */
    protected $homePuntNetAverage;
    /**
     * 
     *
     * @var int
     */
    protected $awayExtraPointKickingAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $homeExtraPointKickingAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $awayExtraPointKickingConversions;
    /**
     * 
     *
     * @var int
     */
    protected $homeExtraPointKickingConversions;
    /**
     * 
     *
     * @var int
     */
    protected $awayExtraPointsHadBlocked;
    /**
     * 
     *
     * @var int
     */
    protected $homeExtraPointsHadBlocked;
    /**
     * 
     *
     * @var int
     */
    protected $awayExtraPointPassingAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $homeExtraPointPassingAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $awayExtraPointPassingConversions;
    /**
     * 
     *
     * @var int
     */
    protected $homeExtraPointPassingConversions;
    /**
     * 
     *
     * @var int
     */
    protected $awayExtraPointRushingAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $homeExtraPointRushingAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $awayExtraPointRushingConversions;
    /**
     * 
     *
     * @var int
     */
    protected $homeExtraPointRushingConversions;
    /**
     * 
     *
     * @var int
     */
    protected $awayFieldGoalAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $homeFieldGoalAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $awayFieldGoalsMade;
    /**
     * 
     *
     * @var int
     */
    protected $homeFieldGoalsMade;
    /**
     * 
     *
     * @var int
     */
    protected $awayFieldGoalsHadBlocked;
    /**
     * 
     *
     * @var int
     */
    protected $homeFieldGoalsHadBlocked;
    /**
     * 
     *
     * @var int
     */
    protected $awayPuntReturns;
    /**
     * 
     *
     * @var int
     */
    protected $homePuntReturns;
    /**
     * 
     *
     * @var int
     */
    protected $awayPuntReturnYards;
    /**
     * 
     *
     * @var int
     */
    protected $homePuntReturnYards;
    /**
     * 
     *
     * @var int
     */
    protected $awayKickReturns;
    /**
     * 
     *
     * @var int
     */
    protected $homeKickReturns;
    /**
     * 
     *
     * @var int
     */
    protected $awayKickReturnYards;
    /**
     * 
     *
     * @var int
     */
    protected $homeKickReturnYards;
    /**
     * 
     *
     * @var int
     */
    protected $awayInterceptionReturns;
    /**
     * 
     *
     * @var int
     */
    protected $homeInterceptionReturns;
    /**
     * 
     *
     * @var int
     */
    protected $awayInterceptionReturnYards;
    /**
     * 
     *
     * @var int
     */
    protected $homeInterceptionReturnYards;
    /**
     * 
     *
     * @var int
     */
    protected $awaySoloTackles;
    /**
     * 
     *
     * @var int
     */
    protected $awayAssistedTackles;
    /**
     * 
     *
     * @var int
     */
    protected $awayQuarterbackHits;
    /**
     * 
     *
     * @var int
     */
    protected $awayTacklesForLoss;
    /**
     * 
     *
     * @var int
     */
    protected $awaySacks;
    /**
     * 
     *
     * @var int
     */
    protected $awaySackYards;
    /**
     * 
     *
     * @var int
     */
    protected $awayPassesDefended;
    /**
     * 
     *
     * @var int
     */
    protected $awayFumblesForced;
    /**
     * 
     *
     * @var int
     */
    protected $awayFumblesRecovered;
    /**
     * 
     *
     * @var int
     */
    protected $awayFumbleReturnYards;
    /**
     * 
     *
     * @var int
     */
    protected $awayFumbleReturnTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $awayInterceptionReturnTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $awayBlockedKicks;
    /**
     * 
     *
     * @var int
     */
    protected $awayPuntReturnTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $awayPuntReturnLong;
    /**
     * 
     *
     * @var int
     */
    protected $awayKickReturnTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $awayKickReturnLong;
    /**
     * 
     *
     * @var int
     */
    protected $awayBlockedKickReturnYards;
    /**
     * 
     *
     * @var int
     */
    protected $awayBlockedKickReturnTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $awayFieldGoalReturnYards;
    /**
     * 
     *
     * @var int
     */
    protected $awayFieldGoalReturnTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $awayPuntNetYards;
    /**
     * 
     *
     * @var int
     */
    protected $homeSoloTackles;
    /**
     * 
     *
     * @var int
     */
    protected $homeAssistedTackles;
    /**
     * 
     *
     * @var int
     */
    protected $homeQuarterbackHits;
    /**
     * 
     *
     * @var int
     */
    protected $homeTacklesForLoss;
    /**
     * 
     *
     * @var int
     */
    protected $homeSacks;
    /**
     * 
     *
     * @var int
     */
    protected $homeSackYards;
    /**
     * 
     *
     * @var int
     */
    protected $homePassesDefended;
    /**
     * 
     *
     * @var int
     */
    protected $homeFumblesForced;
    /**
     * 
     *
     * @var int
     */
    protected $homeFumblesRecovered;
    /**
     * 
     *
     * @var int
     */
    protected $homeFumbleReturnYards;
    /**
     * 
     *
     * @var int
     */
    protected $homeFumbleReturnTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $homeInterceptionReturnTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $homeBlockedKicks;
    /**
     * 
     *
     * @var int
     */
    protected $homePuntReturnTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $homePuntReturnLong;
    /**
     * 
     *
     * @var int
     */
    protected $homeKickReturnTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $homeKickReturnLong;
    /**
     * 
     *
     * @var int
     */
    protected $homeBlockedKickReturnYards;
    /**
     * 
     *
     * @var int
     */
    protected $homeBlockedKickReturnTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $homeFieldGoalReturnYards;
    /**
     * 
     *
     * @var int
     */
    protected $homeFieldGoalReturnTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $homePuntNetYards;
    /**
     * 
     *
     * @var bool
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
     * @var int
     */
    protected $stadiumID;
    /**
     * 
     *
     * @var int
     */
    protected $awayTwoPointConversionReturns;
    /**
     * 
     *
     * @var int
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
     * @return string
     */
    public function getAwayTeam() : string
    {
        return $this->awayTeam;
    }
    /**
     * 
     *
     * @param string $awayTeam
     *
     * @return self
     */
    public function setAwayTeam(string $awayTeam) : self
    {
        $this->awayTeam = $awayTeam;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHomeTeam() : string
    {
        return $this->homeTeam;
    }
    /**
     * 
     *
     * @param string $homeTeam
     *
     * @return self
     */
    public function setHomeTeam(string $homeTeam) : self
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
    public function getAwayScoreQuarter1() : int
    {
        return $this->awayScoreQuarter1;
    }
    /**
     * 
     *
     * @param int $awayScoreQuarter1
     *
     * @return self
     */
    public function setAwayScoreQuarter1(int $awayScoreQuarter1) : self
    {
        $this->awayScoreQuarter1 = $awayScoreQuarter1;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayScoreQuarter2() : int
    {
        return $this->awayScoreQuarter2;
    }
    /**
     * 
     *
     * @param int $awayScoreQuarter2
     *
     * @return self
     */
    public function setAwayScoreQuarter2(int $awayScoreQuarter2) : self
    {
        $this->awayScoreQuarter2 = $awayScoreQuarter2;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayScoreQuarter3() : int
    {
        return $this->awayScoreQuarter3;
    }
    /**
     * 
     *
     * @param int $awayScoreQuarter3
     *
     * @return self
     */
    public function setAwayScoreQuarter3(int $awayScoreQuarter3) : self
    {
        $this->awayScoreQuarter3 = $awayScoreQuarter3;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayScoreQuarter4() : int
    {
        return $this->awayScoreQuarter4;
    }
    /**
     * 
     *
     * @param int $awayScoreQuarter4
     *
     * @return self
     */
    public function setAwayScoreQuarter4(int $awayScoreQuarter4) : self
    {
        $this->awayScoreQuarter4 = $awayScoreQuarter4;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayScoreOvertime() : int
    {
        return $this->awayScoreOvertime;
    }
    /**
     * 
     *
     * @param int $awayScoreOvertime
     *
     * @return self
     */
    public function setAwayScoreOvertime(int $awayScoreOvertime) : self
    {
        $this->awayScoreOvertime = $awayScoreOvertime;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeScoreQuarter1() : int
    {
        return $this->homeScoreQuarter1;
    }
    /**
     * 
     *
     * @param int $homeScoreQuarter1
     *
     * @return self
     */
    public function setHomeScoreQuarter1(int $homeScoreQuarter1) : self
    {
        $this->homeScoreQuarter1 = $homeScoreQuarter1;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeScoreQuarter2() : int
    {
        return $this->homeScoreQuarter2;
    }
    /**
     * 
     *
     * @param int $homeScoreQuarter2
     *
     * @return self
     */
    public function setHomeScoreQuarter2(int $homeScoreQuarter2) : self
    {
        $this->homeScoreQuarter2 = $homeScoreQuarter2;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeScoreQuarter3() : int
    {
        return $this->homeScoreQuarter3;
    }
    /**
     * 
     *
     * @param int $homeScoreQuarter3
     *
     * @return self
     */
    public function setHomeScoreQuarter3(int $homeScoreQuarter3) : self
    {
        $this->homeScoreQuarter3 = $homeScoreQuarter3;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeScoreQuarter4() : int
    {
        return $this->homeScoreQuarter4;
    }
    /**
     * 
     *
     * @param int $homeScoreQuarter4
     *
     * @return self
     */
    public function setHomeScoreQuarter4(int $homeScoreQuarter4) : self
    {
        $this->homeScoreQuarter4 = $homeScoreQuarter4;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeScoreOvertime() : int
    {
        return $this->homeScoreOvertime;
    }
    /**
     * 
     *
     * @param int $homeScoreOvertime
     *
     * @return self
     */
    public function setHomeScoreOvertime(int $homeScoreOvertime) : self
    {
        $this->homeScoreOvertime = $homeScoreOvertime;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAwayTimeOfPossession() : string
    {
        return $this->awayTimeOfPossession;
    }
    /**
     * 
     *
     * @param string $awayTimeOfPossession
     *
     * @return self
     */
    public function setAwayTimeOfPossession(string $awayTimeOfPossession) : self
    {
        $this->awayTimeOfPossession = $awayTimeOfPossession;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHomeTimeOfPossession() : string
    {
        return $this->homeTimeOfPossession;
    }
    /**
     * 
     *
     * @param string $homeTimeOfPossession
     *
     * @return self
     */
    public function setHomeTimeOfPossession(string $homeTimeOfPossession) : self
    {
        $this->homeTimeOfPossession = $homeTimeOfPossession;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayFirstDowns() : int
    {
        return $this->awayFirstDowns;
    }
    /**
     * 
     *
     * @param int $awayFirstDowns
     *
     * @return self
     */
    public function setAwayFirstDowns(int $awayFirstDowns) : self
    {
        $this->awayFirstDowns = $awayFirstDowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeFirstDowns() : int
    {
        return $this->homeFirstDowns;
    }
    /**
     * 
     *
     * @param int $homeFirstDowns
     *
     * @return self
     */
    public function setHomeFirstDowns(int $homeFirstDowns) : self
    {
        $this->homeFirstDowns = $homeFirstDowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayFirstDownsByRushing() : int
    {
        return $this->awayFirstDownsByRushing;
    }
    /**
     * 
     *
     * @param int $awayFirstDownsByRushing
     *
     * @return self
     */
    public function setAwayFirstDownsByRushing(int $awayFirstDownsByRushing) : self
    {
        $this->awayFirstDownsByRushing = $awayFirstDownsByRushing;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeFirstDownsByRushing() : int
    {
        return $this->homeFirstDownsByRushing;
    }
    /**
     * 
     *
     * @param int $homeFirstDownsByRushing
     *
     * @return self
     */
    public function setHomeFirstDownsByRushing(int $homeFirstDownsByRushing) : self
    {
        $this->homeFirstDownsByRushing = $homeFirstDownsByRushing;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayFirstDownsByPassing() : int
    {
        return $this->awayFirstDownsByPassing;
    }
    /**
     * 
     *
     * @param int $awayFirstDownsByPassing
     *
     * @return self
     */
    public function setAwayFirstDownsByPassing(int $awayFirstDownsByPassing) : self
    {
        $this->awayFirstDownsByPassing = $awayFirstDownsByPassing;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeFirstDownsByPassing() : int
    {
        return $this->homeFirstDownsByPassing;
    }
    /**
     * 
     *
     * @param int $homeFirstDownsByPassing
     *
     * @return self
     */
    public function setHomeFirstDownsByPassing(int $homeFirstDownsByPassing) : self
    {
        $this->homeFirstDownsByPassing = $homeFirstDownsByPassing;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayFirstDownsByPenalty() : int
    {
        return $this->awayFirstDownsByPenalty;
    }
    /**
     * 
     *
     * @param int $awayFirstDownsByPenalty
     *
     * @return self
     */
    public function setAwayFirstDownsByPenalty(int $awayFirstDownsByPenalty) : self
    {
        $this->awayFirstDownsByPenalty = $awayFirstDownsByPenalty;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeFirstDownsByPenalty() : int
    {
        return $this->homeFirstDownsByPenalty;
    }
    /**
     * 
     *
     * @param int $homeFirstDownsByPenalty
     *
     * @return self
     */
    public function setHomeFirstDownsByPenalty(int $homeFirstDownsByPenalty) : self
    {
        $this->homeFirstDownsByPenalty = $homeFirstDownsByPenalty;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayOffensivePlays() : int
    {
        return $this->awayOffensivePlays;
    }
    /**
     * 
     *
     * @param int $awayOffensivePlays
     *
     * @return self
     */
    public function setAwayOffensivePlays(int $awayOffensivePlays) : self
    {
        $this->awayOffensivePlays = $awayOffensivePlays;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeOffensivePlays() : int
    {
        return $this->homeOffensivePlays;
    }
    /**
     * 
     *
     * @param int $homeOffensivePlays
     *
     * @return self
     */
    public function setHomeOffensivePlays(int $homeOffensivePlays) : self
    {
        $this->homeOffensivePlays = $homeOffensivePlays;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayOffensiveYards() : int
    {
        return $this->awayOffensiveYards;
    }
    /**
     * 
     *
     * @param int $awayOffensiveYards
     *
     * @return self
     */
    public function setAwayOffensiveYards(int $awayOffensiveYards) : self
    {
        $this->awayOffensiveYards = $awayOffensiveYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeOffensiveYards() : int
    {
        return $this->homeOffensiveYards;
    }
    /**
     * 
     *
     * @param int $homeOffensiveYards
     *
     * @return self
     */
    public function setHomeOffensiveYards(int $homeOffensiveYards) : self
    {
        $this->homeOffensiveYards = $homeOffensiveYards;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAwayOffensiveYardsPerPlay() : float
    {
        return $this->awayOffensiveYardsPerPlay;
    }
    /**
     * 
     *
     * @param float $awayOffensiveYardsPerPlay
     *
     * @return self
     */
    public function setAwayOffensiveYardsPerPlay(float $awayOffensiveYardsPerPlay) : self
    {
        $this->awayOffensiveYardsPerPlay = $awayOffensiveYardsPerPlay;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHomeOffensiveYardsPerPlay() : float
    {
        return $this->homeOffensiveYardsPerPlay;
    }
    /**
     * 
     *
     * @param float $homeOffensiveYardsPerPlay
     *
     * @return self
     */
    public function setHomeOffensiveYardsPerPlay(float $homeOffensiveYardsPerPlay) : self
    {
        $this->homeOffensiveYardsPerPlay = $homeOffensiveYardsPerPlay;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayTouchdowns() : int
    {
        return $this->awayTouchdowns;
    }
    /**
     * 
     *
     * @param int $awayTouchdowns
     *
     * @return self
     */
    public function setAwayTouchdowns(int $awayTouchdowns) : self
    {
        $this->awayTouchdowns = $awayTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeTouchdowns() : int
    {
        return $this->homeTouchdowns;
    }
    /**
     * 
     *
     * @param int $homeTouchdowns
     *
     * @return self
     */
    public function setHomeTouchdowns(int $homeTouchdowns) : self
    {
        $this->homeTouchdowns = $homeTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayRushingAttempts() : int
    {
        return $this->awayRushingAttempts;
    }
    /**
     * 
     *
     * @param int $awayRushingAttempts
     *
     * @return self
     */
    public function setAwayRushingAttempts(int $awayRushingAttempts) : self
    {
        $this->awayRushingAttempts = $awayRushingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeRushingAttempts() : int
    {
        return $this->homeRushingAttempts;
    }
    /**
     * 
     *
     * @param int $homeRushingAttempts
     *
     * @return self
     */
    public function setHomeRushingAttempts(int $homeRushingAttempts) : self
    {
        $this->homeRushingAttempts = $homeRushingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayRushingYards() : int
    {
        return $this->awayRushingYards;
    }
    /**
     * 
     *
     * @param int $awayRushingYards
     *
     * @return self
     */
    public function setAwayRushingYards(int $awayRushingYards) : self
    {
        $this->awayRushingYards = $awayRushingYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeRushingYards() : int
    {
        return $this->homeRushingYards;
    }
    /**
     * 
     *
     * @param int $homeRushingYards
     *
     * @return self
     */
    public function setHomeRushingYards(int $homeRushingYards) : self
    {
        $this->homeRushingYards = $homeRushingYards;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAwayRushingYardsPerAttempt() : float
    {
        return $this->awayRushingYardsPerAttempt;
    }
    /**
     * 
     *
     * @param float $awayRushingYardsPerAttempt
     *
     * @return self
     */
    public function setAwayRushingYardsPerAttempt(float $awayRushingYardsPerAttempt) : self
    {
        $this->awayRushingYardsPerAttempt = $awayRushingYardsPerAttempt;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHomeRushingYardsPerAttempt() : float
    {
        return $this->homeRushingYardsPerAttempt;
    }
    /**
     * 
     *
     * @param float $homeRushingYardsPerAttempt
     *
     * @return self
     */
    public function setHomeRushingYardsPerAttempt(float $homeRushingYardsPerAttempt) : self
    {
        $this->homeRushingYardsPerAttempt = $homeRushingYardsPerAttempt;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayRushingTouchdowns() : int
    {
        return $this->awayRushingTouchdowns;
    }
    /**
     * 
     *
     * @param int $awayRushingTouchdowns
     *
     * @return self
     */
    public function setAwayRushingTouchdowns(int $awayRushingTouchdowns) : self
    {
        $this->awayRushingTouchdowns = $awayRushingTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeRushingTouchdowns() : int
    {
        return $this->homeRushingTouchdowns;
    }
    /**
     * 
     *
     * @param int $homeRushingTouchdowns
     *
     * @return self
     */
    public function setHomeRushingTouchdowns(int $homeRushingTouchdowns) : self
    {
        $this->homeRushingTouchdowns = $homeRushingTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayPassingAttempts() : int
    {
        return $this->awayPassingAttempts;
    }
    /**
     * 
     *
     * @param int $awayPassingAttempts
     *
     * @return self
     */
    public function setAwayPassingAttempts(int $awayPassingAttempts) : self
    {
        $this->awayPassingAttempts = $awayPassingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomePassingAttempts() : int
    {
        return $this->homePassingAttempts;
    }
    /**
     * 
     *
     * @param int $homePassingAttempts
     *
     * @return self
     */
    public function setHomePassingAttempts(int $homePassingAttempts) : self
    {
        $this->homePassingAttempts = $homePassingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayPassingCompletions() : int
    {
        return $this->awayPassingCompletions;
    }
    /**
     * 
     *
     * @param int $awayPassingCompletions
     *
     * @return self
     */
    public function setAwayPassingCompletions(int $awayPassingCompletions) : self
    {
        $this->awayPassingCompletions = $awayPassingCompletions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomePassingCompletions() : int
    {
        return $this->homePassingCompletions;
    }
    /**
     * 
     *
     * @param int $homePassingCompletions
     *
     * @return self
     */
    public function setHomePassingCompletions(int $homePassingCompletions) : self
    {
        $this->homePassingCompletions = $homePassingCompletions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayPassingYards() : int
    {
        return $this->awayPassingYards;
    }
    /**
     * 
     *
     * @param int $awayPassingYards
     *
     * @return self
     */
    public function setAwayPassingYards(int $awayPassingYards) : self
    {
        $this->awayPassingYards = $awayPassingYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomePassingYards() : int
    {
        return $this->homePassingYards;
    }
    /**
     * 
     *
     * @param int $homePassingYards
     *
     * @return self
     */
    public function setHomePassingYards(int $homePassingYards) : self
    {
        $this->homePassingYards = $homePassingYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayPassingTouchdowns() : int
    {
        return $this->awayPassingTouchdowns;
    }
    /**
     * 
     *
     * @param int $awayPassingTouchdowns
     *
     * @return self
     */
    public function setAwayPassingTouchdowns(int $awayPassingTouchdowns) : self
    {
        $this->awayPassingTouchdowns = $awayPassingTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomePassingTouchdowns() : int
    {
        return $this->homePassingTouchdowns;
    }
    /**
     * 
     *
     * @param int $homePassingTouchdowns
     *
     * @return self
     */
    public function setHomePassingTouchdowns(int $homePassingTouchdowns) : self
    {
        $this->homePassingTouchdowns = $homePassingTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayPassingInterceptions() : int
    {
        return $this->awayPassingInterceptions;
    }
    /**
     * 
     *
     * @param int $awayPassingInterceptions
     *
     * @return self
     */
    public function setAwayPassingInterceptions(int $awayPassingInterceptions) : self
    {
        $this->awayPassingInterceptions = $awayPassingInterceptions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomePassingInterceptions() : int
    {
        return $this->homePassingInterceptions;
    }
    /**
     * 
     *
     * @param int $homePassingInterceptions
     *
     * @return self
     */
    public function setHomePassingInterceptions(int $homePassingInterceptions) : self
    {
        $this->homePassingInterceptions = $homePassingInterceptions;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAwayPassingYardsPerAttempt() : float
    {
        return $this->awayPassingYardsPerAttempt;
    }
    /**
     * 
     *
     * @param float $awayPassingYardsPerAttempt
     *
     * @return self
     */
    public function setAwayPassingYardsPerAttempt(float $awayPassingYardsPerAttempt) : self
    {
        $this->awayPassingYardsPerAttempt = $awayPassingYardsPerAttempt;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHomePassingYardsPerAttempt() : float
    {
        return $this->homePassingYardsPerAttempt;
    }
    /**
     * 
     *
     * @param float $homePassingYardsPerAttempt
     *
     * @return self
     */
    public function setHomePassingYardsPerAttempt(float $homePassingYardsPerAttempt) : self
    {
        $this->homePassingYardsPerAttempt = $homePassingYardsPerAttempt;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAwayPassingYardsPerCompletion() : float
    {
        return $this->awayPassingYardsPerCompletion;
    }
    /**
     * 
     *
     * @param float $awayPassingYardsPerCompletion
     *
     * @return self
     */
    public function setAwayPassingYardsPerCompletion(float $awayPassingYardsPerCompletion) : self
    {
        $this->awayPassingYardsPerCompletion = $awayPassingYardsPerCompletion;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHomePassingYardsPerCompletion() : float
    {
        return $this->homePassingYardsPerCompletion;
    }
    /**
     * 
     *
     * @param float $homePassingYardsPerCompletion
     *
     * @return self
     */
    public function setHomePassingYardsPerCompletion(float $homePassingYardsPerCompletion) : self
    {
        $this->homePassingYardsPerCompletion = $homePassingYardsPerCompletion;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAwayCompletionPercentage() : float
    {
        return $this->awayCompletionPercentage;
    }
    /**
     * 
     *
     * @param float $awayCompletionPercentage
     *
     * @return self
     */
    public function setAwayCompletionPercentage(float $awayCompletionPercentage) : self
    {
        $this->awayCompletionPercentage = $awayCompletionPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHomeCompletionPercentage() : float
    {
        return $this->homeCompletionPercentage;
    }
    /**
     * 
     *
     * @param float $homeCompletionPercentage
     *
     * @return self
     */
    public function setHomeCompletionPercentage(float $homeCompletionPercentage) : self
    {
        $this->homeCompletionPercentage = $homeCompletionPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAwayPasserRating() : float
    {
        return $this->awayPasserRating;
    }
    /**
     * 
     *
     * @param float $awayPasserRating
     *
     * @return self
     */
    public function setAwayPasserRating(float $awayPasserRating) : self
    {
        $this->awayPasserRating = $awayPasserRating;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHomePasserRating() : float
    {
        return $this->homePasserRating;
    }
    /**
     * 
     *
     * @param float $homePasserRating
     *
     * @return self
     */
    public function setHomePasserRating(float $homePasserRating) : self
    {
        $this->homePasserRating = $homePasserRating;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayThirdDownAttempts() : int
    {
        return $this->awayThirdDownAttempts;
    }
    /**
     * 
     *
     * @param int $awayThirdDownAttempts
     *
     * @return self
     */
    public function setAwayThirdDownAttempts(int $awayThirdDownAttempts) : self
    {
        $this->awayThirdDownAttempts = $awayThirdDownAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeThirdDownAttempts() : int
    {
        return $this->homeThirdDownAttempts;
    }
    /**
     * 
     *
     * @param int $homeThirdDownAttempts
     *
     * @return self
     */
    public function setHomeThirdDownAttempts(int $homeThirdDownAttempts) : self
    {
        $this->homeThirdDownAttempts = $homeThirdDownAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayThirdDownConversions() : int
    {
        return $this->awayThirdDownConversions;
    }
    /**
     * 
     *
     * @param int $awayThirdDownConversions
     *
     * @return self
     */
    public function setAwayThirdDownConversions(int $awayThirdDownConversions) : self
    {
        $this->awayThirdDownConversions = $awayThirdDownConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeThirdDownConversions() : int
    {
        return $this->homeThirdDownConversions;
    }
    /**
     * 
     *
     * @param int $homeThirdDownConversions
     *
     * @return self
     */
    public function setHomeThirdDownConversions(int $homeThirdDownConversions) : self
    {
        $this->homeThirdDownConversions = $homeThirdDownConversions;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAwayThirdDownPercentage() : float
    {
        return $this->awayThirdDownPercentage;
    }
    /**
     * 
     *
     * @param float $awayThirdDownPercentage
     *
     * @return self
     */
    public function setAwayThirdDownPercentage(float $awayThirdDownPercentage) : self
    {
        $this->awayThirdDownPercentage = $awayThirdDownPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHomeThirdDownPercentage() : float
    {
        return $this->homeThirdDownPercentage;
    }
    /**
     * 
     *
     * @param float $homeThirdDownPercentage
     *
     * @return self
     */
    public function setHomeThirdDownPercentage(float $homeThirdDownPercentage) : self
    {
        $this->homeThirdDownPercentage = $homeThirdDownPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayFourthDownAttempts() : int
    {
        return $this->awayFourthDownAttempts;
    }
    /**
     * 
     *
     * @param int $awayFourthDownAttempts
     *
     * @return self
     */
    public function setAwayFourthDownAttempts(int $awayFourthDownAttempts) : self
    {
        $this->awayFourthDownAttempts = $awayFourthDownAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeFourthDownAttempts() : int
    {
        return $this->homeFourthDownAttempts;
    }
    /**
     * 
     *
     * @param int $homeFourthDownAttempts
     *
     * @return self
     */
    public function setHomeFourthDownAttempts(int $homeFourthDownAttempts) : self
    {
        $this->homeFourthDownAttempts = $homeFourthDownAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayFourthDownConversions() : int
    {
        return $this->awayFourthDownConversions;
    }
    /**
     * 
     *
     * @param int $awayFourthDownConversions
     *
     * @return self
     */
    public function setAwayFourthDownConversions(int $awayFourthDownConversions) : self
    {
        $this->awayFourthDownConversions = $awayFourthDownConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeFourthDownConversions() : int
    {
        return $this->homeFourthDownConversions;
    }
    /**
     * 
     *
     * @param int $homeFourthDownConversions
     *
     * @return self
     */
    public function setHomeFourthDownConversions(int $homeFourthDownConversions) : self
    {
        $this->homeFourthDownConversions = $homeFourthDownConversions;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAwayFourthDownPercentage() : float
    {
        return $this->awayFourthDownPercentage;
    }
    /**
     * 
     *
     * @param float $awayFourthDownPercentage
     *
     * @return self
     */
    public function setAwayFourthDownPercentage(float $awayFourthDownPercentage) : self
    {
        $this->awayFourthDownPercentage = $awayFourthDownPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHomeFourthDownPercentage() : float
    {
        return $this->homeFourthDownPercentage;
    }
    /**
     * 
     *
     * @param float $homeFourthDownPercentage
     *
     * @return self
     */
    public function setHomeFourthDownPercentage(float $homeFourthDownPercentage) : self
    {
        $this->homeFourthDownPercentage = $homeFourthDownPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayRedZoneAttempts() : int
    {
        return $this->awayRedZoneAttempts;
    }
    /**
     * 
     *
     * @param int $awayRedZoneAttempts
     *
     * @return self
     */
    public function setAwayRedZoneAttempts(int $awayRedZoneAttempts) : self
    {
        $this->awayRedZoneAttempts = $awayRedZoneAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeRedZoneAttempts() : int
    {
        return $this->homeRedZoneAttempts;
    }
    /**
     * 
     *
     * @param int $homeRedZoneAttempts
     *
     * @return self
     */
    public function setHomeRedZoneAttempts(int $homeRedZoneAttempts) : self
    {
        $this->homeRedZoneAttempts = $homeRedZoneAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayRedZoneConversions() : int
    {
        return $this->awayRedZoneConversions;
    }
    /**
     * 
     *
     * @param int $awayRedZoneConversions
     *
     * @return self
     */
    public function setAwayRedZoneConversions(int $awayRedZoneConversions) : self
    {
        $this->awayRedZoneConversions = $awayRedZoneConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeRedZoneConversions() : int
    {
        return $this->homeRedZoneConversions;
    }
    /**
     * 
     *
     * @param int $homeRedZoneConversions
     *
     * @return self
     */
    public function setHomeRedZoneConversions(int $homeRedZoneConversions) : self
    {
        $this->homeRedZoneConversions = $homeRedZoneConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayGoalToGoAttempts() : int
    {
        return $this->awayGoalToGoAttempts;
    }
    /**
     * 
     *
     * @param int $awayGoalToGoAttempts
     *
     * @return self
     */
    public function setAwayGoalToGoAttempts(int $awayGoalToGoAttempts) : self
    {
        $this->awayGoalToGoAttempts = $awayGoalToGoAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeGoalToGoAttempts() : int
    {
        return $this->homeGoalToGoAttempts;
    }
    /**
     * 
     *
     * @param int $homeGoalToGoAttempts
     *
     * @return self
     */
    public function setHomeGoalToGoAttempts(int $homeGoalToGoAttempts) : self
    {
        $this->homeGoalToGoAttempts = $homeGoalToGoAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayGoalToGoConversions() : int
    {
        return $this->awayGoalToGoConversions;
    }
    /**
     * 
     *
     * @param int $awayGoalToGoConversions
     *
     * @return self
     */
    public function setAwayGoalToGoConversions(int $awayGoalToGoConversions) : self
    {
        $this->awayGoalToGoConversions = $awayGoalToGoConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeGoalToGoConversions() : int
    {
        return $this->homeGoalToGoConversions;
    }
    /**
     * 
     *
     * @param int $homeGoalToGoConversions
     *
     * @return self
     */
    public function setHomeGoalToGoConversions(int $homeGoalToGoConversions) : self
    {
        $this->homeGoalToGoConversions = $homeGoalToGoConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayReturnYards() : int
    {
        return $this->awayReturnYards;
    }
    /**
     * 
     *
     * @param int $awayReturnYards
     *
     * @return self
     */
    public function setAwayReturnYards(int $awayReturnYards) : self
    {
        $this->awayReturnYards = $awayReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeReturnYards() : int
    {
        return $this->homeReturnYards;
    }
    /**
     * 
     *
     * @param int $homeReturnYards
     *
     * @return self
     */
    public function setHomeReturnYards(int $homeReturnYards) : self
    {
        $this->homeReturnYards = $homeReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayPenalties() : int
    {
        return $this->awayPenalties;
    }
    /**
     * 
     *
     * @param int $awayPenalties
     *
     * @return self
     */
    public function setAwayPenalties(int $awayPenalties) : self
    {
        $this->awayPenalties = $awayPenalties;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomePenalties() : int
    {
        return $this->homePenalties;
    }
    /**
     * 
     *
     * @param int $homePenalties
     *
     * @return self
     */
    public function setHomePenalties(int $homePenalties) : self
    {
        $this->homePenalties = $homePenalties;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayPenaltyYards() : int
    {
        return $this->awayPenaltyYards;
    }
    /**
     * 
     *
     * @param int $awayPenaltyYards
     *
     * @return self
     */
    public function setAwayPenaltyYards(int $awayPenaltyYards) : self
    {
        $this->awayPenaltyYards = $awayPenaltyYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomePenaltyYards() : int
    {
        return $this->homePenaltyYards;
    }
    /**
     * 
     *
     * @param int $homePenaltyYards
     *
     * @return self
     */
    public function setHomePenaltyYards(int $homePenaltyYards) : self
    {
        $this->homePenaltyYards = $homePenaltyYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayFumbles() : int
    {
        return $this->awayFumbles;
    }
    /**
     * 
     *
     * @param int $awayFumbles
     *
     * @return self
     */
    public function setAwayFumbles(int $awayFumbles) : self
    {
        $this->awayFumbles = $awayFumbles;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeFumbles() : int
    {
        return $this->homeFumbles;
    }
    /**
     * 
     *
     * @param int $homeFumbles
     *
     * @return self
     */
    public function setHomeFumbles(int $homeFumbles) : self
    {
        $this->homeFumbles = $homeFumbles;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayFumblesLost() : int
    {
        return $this->awayFumblesLost;
    }
    /**
     * 
     *
     * @param int $awayFumblesLost
     *
     * @return self
     */
    public function setAwayFumblesLost(int $awayFumblesLost) : self
    {
        $this->awayFumblesLost = $awayFumblesLost;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeFumblesLost() : int
    {
        return $this->homeFumblesLost;
    }
    /**
     * 
     *
     * @param int $homeFumblesLost
     *
     * @return self
     */
    public function setHomeFumblesLost(int $homeFumblesLost) : self
    {
        $this->homeFumblesLost = $homeFumblesLost;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayTimesSacked() : int
    {
        return $this->awayTimesSacked;
    }
    /**
     * 
     *
     * @param int $awayTimesSacked
     *
     * @return self
     */
    public function setAwayTimesSacked(int $awayTimesSacked) : self
    {
        $this->awayTimesSacked = $awayTimesSacked;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeTimesSacked() : int
    {
        return $this->homeTimesSacked;
    }
    /**
     * 
     *
     * @param int $homeTimesSacked
     *
     * @return self
     */
    public function setHomeTimesSacked(int $homeTimesSacked) : self
    {
        $this->homeTimesSacked = $homeTimesSacked;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayTimesSackedYards() : int
    {
        return $this->awayTimesSackedYards;
    }
    /**
     * 
     *
     * @param int $awayTimesSackedYards
     *
     * @return self
     */
    public function setAwayTimesSackedYards(int $awayTimesSackedYards) : self
    {
        $this->awayTimesSackedYards = $awayTimesSackedYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeTimesSackedYards() : int
    {
        return $this->homeTimesSackedYards;
    }
    /**
     * 
     *
     * @param int $homeTimesSackedYards
     *
     * @return self
     */
    public function setHomeTimesSackedYards(int $homeTimesSackedYards) : self
    {
        $this->homeTimesSackedYards = $homeTimesSackedYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwaySafeties() : int
    {
        return $this->awaySafeties;
    }
    /**
     * 
     *
     * @param int $awaySafeties
     *
     * @return self
     */
    public function setAwaySafeties(int $awaySafeties) : self
    {
        $this->awaySafeties = $awaySafeties;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeSafeties() : int
    {
        return $this->homeSafeties;
    }
    /**
     * 
     *
     * @param int $homeSafeties
     *
     * @return self
     */
    public function setHomeSafeties(int $homeSafeties) : self
    {
        $this->homeSafeties = $homeSafeties;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayPunts() : int
    {
        return $this->awayPunts;
    }
    /**
     * 
     *
     * @param int $awayPunts
     *
     * @return self
     */
    public function setAwayPunts(int $awayPunts) : self
    {
        $this->awayPunts = $awayPunts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomePunts() : int
    {
        return $this->homePunts;
    }
    /**
     * 
     *
     * @param int $homePunts
     *
     * @return self
     */
    public function setHomePunts(int $homePunts) : self
    {
        $this->homePunts = $homePunts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayPuntYards() : int
    {
        return $this->awayPuntYards;
    }
    /**
     * 
     *
     * @param int $awayPuntYards
     *
     * @return self
     */
    public function setAwayPuntYards(int $awayPuntYards) : self
    {
        $this->awayPuntYards = $awayPuntYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomePuntYards() : int
    {
        return $this->homePuntYards;
    }
    /**
     * 
     *
     * @param int $homePuntYards
     *
     * @return self
     */
    public function setHomePuntYards(int $homePuntYards) : self
    {
        $this->homePuntYards = $homePuntYards;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAwayPuntAverage() : float
    {
        return $this->awayPuntAverage;
    }
    /**
     * 
     *
     * @param float $awayPuntAverage
     *
     * @return self
     */
    public function setAwayPuntAverage(float $awayPuntAverage) : self
    {
        $this->awayPuntAverage = $awayPuntAverage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHomePuntAverage() : float
    {
        return $this->homePuntAverage;
    }
    /**
     * 
     *
     * @param float $homePuntAverage
     *
     * @return self
     */
    public function setHomePuntAverage(float $homePuntAverage) : self
    {
        $this->homePuntAverage = $homePuntAverage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayGiveaways() : int
    {
        return $this->awayGiveaways;
    }
    /**
     * 
     *
     * @param int $awayGiveaways
     *
     * @return self
     */
    public function setAwayGiveaways(int $awayGiveaways) : self
    {
        $this->awayGiveaways = $awayGiveaways;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeGiveaways() : int
    {
        return $this->homeGiveaways;
    }
    /**
     * 
     *
     * @param int $homeGiveaways
     *
     * @return self
     */
    public function setHomeGiveaways(int $homeGiveaways) : self
    {
        $this->homeGiveaways = $homeGiveaways;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayTakeaways() : int
    {
        return $this->awayTakeaways;
    }
    /**
     * 
     *
     * @param int $awayTakeaways
     *
     * @return self
     */
    public function setAwayTakeaways(int $awayTakeaways) : self
    {
        $this->awayTakeaways = $awayTakeaways;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeTakeaways() : int
    {
        return $this->homeTakeaways;
    }
    /**
     * 
     *
     * @param int $homeTakeaways
     *
     * @return self
     */
    public function setHomeTakeaways(int $homeTakeaways) : self
    {
        $this->homeTakeaways = $homeTakeaways;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayTurnoverDifferential() : int
    {
        return $this->awayTurnoverDifferential;
    }
    /**
     * 
     *
     * @param int $awayTurnoverDifferential
     *
     * @return self
     */
    public function setAwayTurnoverDifferential(int $awayTurnoverDifferential) : self
    {
        $this->awayTurnoverDifferential = $awayTurnoverDifferential;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeTurnoverDifferential() : int
    {
        return $this->homeTurnoverDifferential;
    }
    /**
     * 
     *
     * @param int $homeTurnoverDifferential
     *
     * @return self
     */
    public function setHomeTurnoverDifferential(int $homeTurnoverDifferential) : self
    {
        $this->homeTurnoverDifferential = $homeTurnoverDifferential;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayKickoffs() : int
    {
        return $this->awayKickoffs;
    }
    /**
     * 
     *
     * @param int $awayKickoffs
     *
     * @return self
     */
    public function setAwayKickoffs(int $awayKickoffs) : self
    {
        $this->awayKickoffs = $awayKickoffs;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeKickoffs() : int
    {
        return $this->homeKickoffs;
    }
    /**
     * 
     *
     * @param int $homeKickoffs
     *
     * @return self
     */
    public function setHomeKickoffs(int $homeKickoffs) : self
    {
        $this->homeKickoffs = $homeKickoffs;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayKickoffsInEndZone() : int
    {
        return $this->awayKickoffsInEndZone;
    }
    /**
     * 
     *
     * @param int $awayKickoffsInEndZone
     *
     * @return self
     */
    public function setAwayKickoffsInEndZone(int $awayKickoffsInEndZone) : self
    {
        $this->awayKickoffsInEndZone = $awayKickoffsInEndZone;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeKickoffsInEndZone() : int
    {
        return $this->homeKickoffsInEndZone;
    }
    /**
     * 
     *
     * @param int $homeKickoffsInEndZone
     *
     * @return self
     */
    public function setHomeKickoffsInEndZone(int $homeKickoffsInEndZone) : self
    {
        $this->homeKickoffsInEndZone = $homeKickoffsInEndZone;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayKickoffTouchbacks() : int
    {
        return $this->awayKickoffTouchbacks;
    }
    /**
     * 
     *
     * @param int $awayKickoffTouchbacks
     *
     * @return self
     */
    public function setAwayKickoffTouchbacks(int $awayKickoffTouchbacks) : self
    {
        $this->awayKickoffTouchbacks = $awayKickoffTouchbacks;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeKickoffTouchbacks() : int
    {
        return $this->homeKickoffTouchbacks;
    }
    /**
     * 
     *
     * @param int $homeKickoffTouchbacks
     *
     * @return self
     */
    public function setHomeKickoffTouchbacks(int $homeKickoffTouchbacks) : self
    {
        $this->homeKickoffTouchbacks = $homeKickoffTouchbacks;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayPuntsHadBlocked() : int
    {
        return $this->awayPuntsHadBlocked;
    }
    /**
     * 
     *
     * @param int $awayPuntsHadBlocked
     *
     * @return self
     */
    public function setAwayPuntsHadBlocked(int $awayPuntsHadBlocked) : self
    {
        $this->awayPuntsHadBlocked = $awayPuntsHadBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomePuntsHadBlocked() : int
    {
        return $this->homePuntsHadBlocked;
    }
    /**
     * 
     *
     * @param int $homePuntsHadBlocked
     *
     * @return self
     */
    public function setHomePuntsHadBlocked(int $homePuntsHadBlocked) : self
    {
        $this->homePuntsHadBlocked = $homePuntsHadBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAwayPuntNetAverage() : float
    {
        return $this->awayPuntNetAverage;
    }
    /**
     * 
     *
     * @param float $awayPuntNetAverage
     *
     * @return self
     */
    public function setAwayPuntNetAverage(float $awayPuntNetAverage) : self
    {
        $this->awayPuntNetAverage = $awayPuntNetAverage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHomePuntNetAverage() : float
    {
        return $this->homePuntNetAverage;
    }
    /**
     * 
     *
     * @param float $homePuntNetAverage
     *
     * @return self
     */
    public function setHomePuntNetAverage(float $homePuntNetAverage) : self
    {
        $this->homePuntNetAverage = $homePuntNetAverage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayExtraPointKickingAttempts() : int
    {
        return $this->awayExtraPointKickingAttempts;
    }
    /**
     * 
     *
     * @param int $awayExtraPointKickingAttempts
     *
     * @return self
     */
    public function setAwayExtraPointKickingAttempts(int $awayExtraPointKickingAttempts) : self
    {
        $this->awayExtraPointKickingAttempts = $awayExtraPointKickingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeExtraPointKickingAttempts() : int
    {
        return $this->homeExtraPointKickingAttempts;
    }
    /**
     * 
     *
     * @param int $homeExtraPointKickingAttempts
     *
     * @return self
     */
    public function setHomeExtraPointKickingAttempts(int $homeExtraPointKickingAttempts) : self
    {
        $this->homeExtraPointKickingAttempts = $homeExtraPointKickingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayExtraPointKickingConversions() : int
    {
        return $this->awayExtraPointKickingConversions;
    }
    /**
     * 
     *
     * @param int $awayExtraPointKickingConversions
     *
     * @return self
     */
    public function setAwayExtraPointKickingConversions(int $awayExtraPointKickingConversions) : self
    {
        $this->awayExtraPointKickingConversions = $awayExtraPointKickingConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeExtraPointKickingConversions() : int
    {
        return $this->homeExtraPointKickingConversions;
    }
    /**
     * 
     *
     * @param int $homeExtraPointKickingConversions
     *
     * @return self
     */
    public function setHomeExtraPointKickingConversions(int $homeExtraPointKickingConversions) : self
    {
        $this->homeExtraPointKickingConversions = $homeExtraPointKickingConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayExtraPointsHadBlocked() : int
    {
        return $this->awayExtraPointsHadBlocked;
    }
    /**
     * 
     *
     * @param int $awayExtraPointsHadBlocked
     *
     * @return self
     */
    public function setAwayExtraPointsHadBlocked(int $awayExtraPointsHadBlocked) : self
    {
        $this->awayExtraPointsHadBlocked = $awayExtraPointsHadBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeExtraPointsHadBlocked() : int
    {
        return $this->homeExtraPointsHadBlocked;
    }
    /**
     * 
     *
     * @param int $homeExtraPointsHadBlocked
     *
     * @return self
     */
    public function setHomeExtraPointsHadBlocked(int $homeExtraPointsHadBlocked) : self
    {
        $this->homeExtraPointsHadBlocked = $homeExtraPointsHadBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayExtraPointPassingAttempts() : int
    {
        return $this->awayExtraPointPassingAttempts;
    }
    /**
     * 
     *
     * @param int $awayExtraPointPassingAttempts
     *
     * @return self
     */
    public function setAwayExtraPointPassingAttempts(int $awayExtraPointPassingAttempts) : self
    {
        $this->awayExtraPointPassingAttempts = $awayExtraPointPassingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeExtraPointPassingAttempts() : int
    {
        return $this->homeExtraPointPassingAttempts;
    }
    /**
     * 
     *
     * @param int $homeExtraPointPassingAttempts
     *
     * @return self
     */
    public function setHomeExtraPointPassingAttempts(int $homeExtraPointPassingAttempts) : self
    {
        $this->homeExtraPointPassingAttempts = $homeExtraPointPassingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayExtraPointPassingConversions() : int
    {
        return $this->awayExtraPointPassingConversions;
    }
    /**
     * 
     *
     * @param int $awayExtraPointPassingConversions
     *
     * @return self
     */
    public function setAwayExtraPointPassingConversions(int $awayExtraPointPassingConversions) : self
    {
        $this->awayExtraPointPassingConversions = $awayExtraPointPassingConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeExtraPointPassingConversions() : int
    {
        return $this->homeExtraPointPassingConversions;
    }
    /**
     * 
     *
     * @param int $homeExtraPointPassingConversions
     *
     * @return self
     */
    public function setHomeExtraPointPassingConversions(int $homeExtraPointPassingConversions) : self
    {
        $this->homeExtraPointPassingConversions = $homeExtraPointPassingConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayExtraPointRushingAttempts() : int
    {
        return $this->awayExtraPointRushingAttempts;
    }
    /**
     * 
     *
     * @param int $awayExtraPointRushingAttempts
     *
     * @return self
     */
    public function setAwayExtraPointRushingAttempts(int $awayExtraPointRushingAttempts) : self
    {
        $this->awayExtraPointRushingAttempts = $awayExtraPointRushingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeExtraPointRushingAttempts() : int
    {
        return $this->homeExtraPointRushingAttempts;
    }
    /**
     * 
     *
     * @param int $homeExtraPointRushingAttempts
     *
     * @return self
     */
    public function setHomeExtraPointRushingAttempts(int $homeExtraPointRushingAttempts) : self
    {
        $this->homeExtraPointRushingAttempts = $homeExtraPointRushingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayExtraPointRushingConversions() : int
    {
        return $this->awayExtraPointRushingConversions;
    }
    /**
     * 
     *
     * @param int $awayExtraPointRushingConversions
     *
     * @return self
     */
    public function setAwayExtraPointRushingConversions(int $awayExtraPointRushingConversions) : self
    {
        $this->awayExtraPointRushingConversions = $awayExtraPointRushingConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeExtraPointRushingConversions() : int
    {
        return $this->homeExtraPointRushingConversions;
    }
    /**
     * 
     *
     * @param int $homeExtraPointRushingConversions
     *
     * @return self
     */
    public function setHomeExtraPointRushingConversions(int $homeExtraPointRushingConversions) : self
    {
        $this->homeExtraPointRushingConversions = $homeExtraPointRushingConversions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayFieldGoalAttempts() : int
    {
        return $this->awayFieldGoalAttempts;
    }
    /**
     * 
     *
     * @param int $awayFieldGoalAttempts
     *
     * @return self
     */
    public function setAwayFieldGoalAttempts(int $awayFieldGoalAttempts) : self
    {
        $this->awayFieldGoalAttempts = $awayFieldGoalAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeFieldGoalAttempts() : int
    {
        return $this->homeFieldGoalAttempts;
    }
    /**
     * 
     *
     * @param int $homeFieldGoalAttempts
     *
     * @return self
     */
    public function setHomeFieldGoalAttempts(int $homeFieldGoalAttempts) : self
    {
        $this->homeFieldGoalAttempts = $homeFieldGoalAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayFieldGoalsMade() : int
    {
        return $this->awayFieldGoalsMade;
    }
    /**
     * 
     *
     * @param int $awayFieldGoalsMade
     *
     * @return self
     */
    public function setAwayFieldGoalsMade(int $awayFieldGoalsMade) : self
    {
        $this->awayFieldGoalsMade = $awayFieldGoalsMade;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeFieldGoalsMade() : int
    {
        return $this->homeFieldGoalsMade;
    }
    /**
     * 
     *
     * @param int $homeFieldGoalsMade
     *
     * @return self
     */
    public function setHomeFieldGoalsMade(int $homeFieldGoalsMade) : self
    {
        $this->homeFieldGoalsMade = $homeFieldGoalsMade;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayFieldGoalsHadBlocked() : int
    {
        return $this->awayFieldGoalsHadBlocked;
    }
    /**
     * 
     *
     * @param int $awayFieldGoalsHadBlocked
     *
     * @return self
     */
    public function setAwayFieldGoalsHadBlocked(int $awayFieldGoalsHadBlocked) : self
    {
        $this->awayFieldGoalsHadBlocked = $awayFieldGoalsHadBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeFieldGoalsHadBlocked() : int
    {
        return $this->homeFieldGoalsHadBlocked;
    }
    /**
     * 
     *
     * @param int $homeFieldGoalsHadBlocked
     *
     * @return self
     */
    public function setHomeFieldGoalsHadBlocked(int $homeFieldGoalsHadBlocked) : self
    {
        $this->homeFieldGoalsHadBlocked = $homeFieldGoalsHadBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayPuntReturns() : int
    {
        return $this->awayPuntReturns;
    }
    /**
     * 
     *
     * @param int $awayPuntReturns
     *
     * @return self
     */
    public function setAwayPuntReturns(int $awayPuntReturns) : self
    {
        $this->awayPuntReturns = $awayPuntReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomePuntReturns() : int
    {
        return $this->homePuntReturns;
    }
    /**
     * 
     *
     * @param int $homePuntReturns
     *
     * @return self
     */
    public function setHomePuntReturns(int $homePuntReturns) : self
    {
        $this->homePuntReturns = $homePuntReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayPuntReturnYards() : int
    {
        return $this->awayPuntReturnYards;
    }
    /**
     * 
     *
     * @param int $awayPuntReturnYards
     *
     * @return self
     */
    public function setAwayPuntReturnYards(int $awayPuntReturnYards) : self
    {
        $this->awayPuntReturnYards = $awayPuntReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomePuntReturnYards() : int
    {
        return $this->homePuntReturnYards;
    }
    /**
     * 
     *
     * @param int $homePuntReturnYards
     *
     * @return self
     */
    public function setHomePuntReturnYards(int $homePuntReturnYards) : self
    {
        $this->homePuntReturnYards = $homePuntReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayKickReturns() : int
    {
        return $this->awayKickReturns;
    }
    /**
     * 
     *
     * @param int $awayKickReturns
     *
     * @return self
     */
    public function setAwayKickReturns(int $awayKickReturns) : self
    {
        $this->awayKickReturns = $awayKickReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeKickReturns() : int
    {
        return $this->homeKickReturns;
    }
    /**
     * 
     *
     * @param int $homeKickReturns
     *
     * @return self
     */
    public function setHomeKickReturns(int $homeKickReturns) : self
    {
        $this->homeKickReturns = $homeKickReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayKickReturnYards() : int
    {
        return $this->awayKickReturnYards;
    }
    /**
     * 
     *
     * @param int $awayKickReturnYards
     *
     * @return self
     */
    public function setAwayKickReturnYards(int $awayKickReturnYards) : self
    {
        $this->awayKickReturnYards = $awayKickReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeKickReturnYards() : int
    {
        return $this->homeKickReturnYards;
    }
    /**
     * 
     *
     * @param int $homeKickReturnYards
     *
     * @return self
     */
    public function setHomeKickReturnYards(int $homeKickReturnYards) : self
    {
        $this->homeKickReturnYards = $homeKickReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayInterceptionReturns() : int
    {
        return $this->awayInterceptionReturns;
    }
    /**
     * 
     *
     * @param int $awayInterceptionReturns
     *
     * @return self
     */
    public function setAwayInterceptionReturns(int $awayInterceptionReturns) : self
    {
        $this->awayInterceptionReturns = $awayInterceptionReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeInterceptionReturns() : int
    {
        return $this->homeInterceptionReturns;
    }
    /**
     * 
     *
     * @param int $homeInterceptionReturns
     *
     * @return self
     */
    public function setHomeInterceptionReturns(int $homeInterceptionReturns) : self
    {
        $this->homeInterceptionReturns = $homeInterceptionReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayInterceptionReturnYards() : int
    {
        return $this->awayInterceptionReturnYards;
    }
    /**
     * 
     *
     * @param int $awayInterceptionReturnYards
     *
     * @return self
     */
    public function setAwayInterceptionReturnYards(int $awayInterceptionReturnYards) : self
    {
        $this->awayInterceptionReturnYards = $awayInterceptionReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeInterceptionReturnYards() : int
    {
        return $this->homeInterceptionReturnYards;
    }
    /**
     * 
     *
     * @param int $homeInterceptionReturnYards
     *
     * @return self
     */
    public function setHomeInterceptionReturnYards(int $homeInterceptionReturnYards) : self
    {
        $this->homeInterceptionReturnYards = $homeInterceptionReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwaySoloTackles() : int
    {
        return $this->awaySoloTackles;
    }
    /**
     * 
     *
     * @param int $awaySoloTackles
     *
     * @return self
     */
    public function setAwaySoloTackles(int $awaySoloTackles) : self
    {
        $this->awaySoloTackles = $awaySoloTackles;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayAssistedTackles() : int
    {
        return $this->awayAssistedTackles;
    }
    /**
     * 
     *
     * @param int $awayAssistedTackles
     *
     * @return self
     */
    public function setAwayAssistedTackles(int $awayAssistedTackles) : self
    {
        $this->awayAssistedTackles = $awayAssistedTackles;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayQuarterbackHits() : int
    {
        return $this->awayQuarterbackHits;
    }
    /**
     * 
     *
     * @param int $awayQuarterbackHits
     *
     * @return self
     */
    public function setAwayQuarterbackHits(int $awayQuarterbackHits) : self
    {
        $this->awayQuarterbackHits = $awayQuarterbackHits;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayTacklesForLoss() : int
    {
        return $this->awayTacklesForLoss;
    }
    /**
     * 
     *
     * @param int $awayTacklesForLoss
     *
     * @return self
     */
    public function setAwayTacklesForLoss(int $awayTacklesForLoss) : self
    {
        $this->awayTacklesForLoss = $awayTacklesForLoss;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwaySacks() : int
    {
        return $this->awaySacks;
    }
    /**
     * 
     *
     * @param int $awaySacks
     *
     * @return self
     */
    public function setAwaySacks(int $awaySacks) : self
    {
        $this->awaySacks = $awaySacks;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwaySackYards() : int
    {
        return $this->awaySackYards;
    }
    /**
     * 
     *
     * @param int $awaySackYards
     *
     * @return self
     */
    public function setAwaySackYards(int $awaySackYards) : self
    {
        $this->awaySackYards = $awaySackYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayPassesDefended() : int
    {
        return $this->awayPassesDefended;
    }
    /**
     * 
     *
     * @param int $awayPassesDefended
     *
     * @return self
     */
    public function setAwayPassesDefended(int $awayPassesDefended) : self
    {
        $this->awayPassesDefended = $awayPassesDefended;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayFumblesForced() : int
    {
        return $this->awayFumblesForced;
    }
    /**
     * 
     *
     * @param int $awayFumblesForced
     *
     * @return self
     */
    public function setAwayFumblesForced(int $awayFumblesForced) : self
    {
        $this->awayFumblesForced = $awayFumblesForced;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayFumblesRecovered() : int
    {
        return $this->awayFumblesRecovered;
    }
    /**
     * 
     *
     * @param int $awayFumblesRecovered
     *
     * @return self
     */
    public function setAwayFumblesRecovered(int $awayFumblesRecovered) : self
    {
        $this->awayFumblesRecovered = $awayFumblesRecovered;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayFumbleReturnYards() : int
    {
        return $this->awayFumbleReturnYards;
    }
    /**
     * 
     *
     * @param int $awayFumbleReturnYards
     *
     * @return self
     */
    public function setAwayFumbleReturnYards(int $awayFumbleReturnYards) : self
    {
        $this->awayFumbleReturnYards = $awayFumbleReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayFumbleReturnTouchdowns() : int
    {
        return $this->awayFumbleReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int $awayFumbleReturnTouchdowns
     *
     * @return self
     */
    public function setAwayFumbleReturnTouchdowns(int $awayFumbleReturnTouchdowns) : self
    {
        $this->awayFumbleReturnTouchdowns = $awayFumbleReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayInterceptionReturnTouchdowns() : int
    {
        return $this->awayInterceptionReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int $awayInterceptionReturnTouchdowns
     *
     * @return self
     */
    public function setAwayInterceptionReturnTouchdowns(int $awayInterceptionReturnTouchdowns) : self
    {
        $this->awayInterceptionReturnTouchdowns = $awayInterceptionReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayBlockedKicks() : int
    {
        return $this->awayBlockedKicks;
    }
    /**
     * 
     *
     * @param int $awayBlockedKicks
     *
     * @return self
     */
    public function setAwayBlockedKicks(int $awayBlockedKicks) : self
    {
        $this->awayBlockedKicks = $awayBlockedKicks;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayPuntReturnTouchdowns() : int
    {
        return $this->awayPuntReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int $awayPuntReturnTouchdowns
     *
     * @return self
     */
    public function setAwayPuntReturnTouchdowns(int $awayPuntReturnTouchdowns) : self
    {
        $this->awayPuntReturnTouchdowns = $awayPuntReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayPuntReturnLong() : int
    {
        return $this->awayPuntReturnLong;
    }
    /**
     * 
     *
     * @param int $awayPuntReturnLong
     *
     * @return self
     */
    public function setAwayPuntReturnLong(int $awayPuntReturnLong) : self
    {
        $this->awayPuntReturnLong = $awayPuntReturnLong;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayKickReturnTouchdowns() : int
    {
        return $this->awayKickReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int $awayKickReturnTouchdowns
     *
     * @return self
     */
    public function setAwayKickReturnTouchdowns(int $awayKickReturnTouchdowns) : self
    {
        $this->awayKickReturnTouchdowns = $awayKickReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayKickReturnLong() : int
    {
        return $this->awayKickReturnLong;
    }
    /**
     * 
     *
     * @param int $awayKickReturnLong
     *
     * @return self
     */
    public function setAwayKickReturnLong(int $awayKickReturnLong) : self
    {
        $this->awayKickReturnLong = $awayKickReturnLong;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayBlockedKickReturnYards() : int
    {
        return $this->awayBlockedKickReturnYards;
    }
    /**
     * 
     *
     * @param int $awayBlockedKickReturnYards
     *
     * @return self
     */
    public function setAwayBlockedKickReturnYards(int $awayBlockedKickReturnYards) : self
    {
        $this->awayBlockedKickReturnYards = $awayBlockedKickReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayBlockedKickReturnTouchdowns() : int
    {
        return $this->awayBlockedKickReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int $awayBlockedKickReturnTouchdowns
     *
     * @return self
     */
    public function setAwayBlockedKickReturnTouchdowns(int $awayBlockedKickReturnTouchdowns) : self
    {
        $this->awayBlockedKickReturnTouchdowns = $awayBlockedKickReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayFieldGoalReturnYards() : int
    {
        return $this->awayFieldGoalReturnYards;
    }
    /**
     * 
     *
     * @param int $awayFieldGoalReturnYards
     *
     * @return self
     */
    public function setAwayFieldGoalReturnYards(int $awayFieldGoalReturnYards) : self
    {
        $this->awayFieldGoalReturnYards = $awayFieldGoalReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayFieldGoalReturnTouchdowns() : int
    {
        return $this->awayFieldGoalReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int $awayFieldGoalReturnTouchdowns
     *
     * @return self
     */
    public function setAwayFieldGoalReturnTouchdowns(int $awayFieldGoalReturnTouchdowns) : self
    {
        $this->awayFieldGoalReturnTouchdowns = $awayFieldGoalReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayPuntNetYards() : int
    {
        return $this->awayPuntNetYards;
    }
    /**
     * 
     *
     * @param int $awayPuntNetYards
     *
     * @return self
     */
    public function setAwayPuntNetYards(int $awayPuntNetYards) : self
    {
        $this->awayPuntNetYards = $awayPuntNetYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeSoloTackles() : int
    {
        return $this->homeSoloTackles;
    }
    /**
     * 
     *
     * @param int $homeSoloTackles
     *
     * @return self
     */
    public function setHomeSoloTackles(int $homeSoloTackles) : self
    {
        $this->homeSoloTackles = $homeSoloTackles;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeAssistedTackles() : int
    {
        return $this->homeAssistedTackles;
    }
    /**
     * 
     *
     * @param int $homeAssistedTackles
     *
     * @return self
     */
    public function setHomeAssistedTackles(int $homeAssistedTackles) : self
    {
        $this->homeAssistedTackles = $homeAssistedTackles;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeQuarterbackHits() : int
    {
        return $this->homeQuarterbackHits;
    }
    /**
     * 
     *
     * @param int $homeQuarterbackHits
     *
     * @return self
     */
    public function setHomeQuarterbackHits(int $homeQuarterbackHits) : self
    {
        $this->homeQuarterbackHits = $homeQuarterbackHits;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeTacklesForLoss() : int
    {
        return $this->homeTacklesForLoss;
    }
    /**
     * 
     *
     * @param int $homeTacklesForLoss
     *
     * @return self
     */
    public function setHomeTacklesForLoss(int $homeTacklesForLoss) : self
    {
        $this->homeTacklesForLoss = $homeTacklesForLoss;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeSacks() : int
    {
        return $this->homeSacks;
    }
    /**
     * 
     *
     * @param int $homeSacks
     *
     * @return self
     */
    public function setHomeSacks(int $homeSacks) : self
    {
        $this->homeSacks = $homeSacks;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeSackYards() : int
    {
        return $this->homeSackYards;
    }
    /**
     * 
     *
     * @param int $homeSackYards
     *
     * @return self
     */
    public function setHomeSackYards(int $homeSackYards) : self
    {
        $this->homeSackYards = $homeSackYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomePassesDefended() : int
    {
        return $this->homePassesDefended;
    }
    /**
     * 
     *
     * @param int $homePassesDefended
     *
     * @return self
     */
    public function setHomePassesDefended(int $homePassesDefended) : self
    {
        $this->homePassesDefended = $homePassesDefended;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeFumblesForced() : int
    {
        return $this->homeFumblesForced;
    }
    /**
     * 
     *
     * @param int $homeFumblesForced
     *
     * @return self
     */
    public function setHomeFumblesForced(int $homeFumblesForced) : self
    {
        $this->homeFumblesForced = $homeFumblesForced;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeFumblesRecovered() : int
    {
        return $this->homeFumblesRecovered;
    }
    /**
     * 
     *
     * @param int $homeFumblesRecovered
     *
     * @return self
     */
    public function setHomeFumblesRecovered(int $homeFumblesRecovered) : self
    {
        $this->homeFumblesRecovered = $homeFumblesRecovered;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeFumbleReturnYards() : int
    {
        return $this->homeFumbleReturnYards;
    }
    /**
     * 
     *
     * @param int $homeFumbleReturnYards
     *
     * @return self
     */
    public function setHomeFumbleReturnYards(int $homeFumbleReturnYards) : self
    {
        $this->homeFumbleReturnYards = $homeFumbleReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeFumbleReturnTouchdowns() : int
    {
        return $this->homeFumbleReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int $homeFumbleReturnTouchdowns
     *
     * @return self
     */
    public function setHomeFumbleReturnTouchdowns(int $homeFumbleReturnTouchdowns) : self
    {
        $this->homeFumbleReturnTouchdowns = $homeFumbleReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeInterceptionReturnTouchdowns() : int
    {
        return $this->homeInterceptionReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int $homeInterceptionReturnTouchdowns
     *
     * @return self
     */
    public function setHomeInterceptionReturnTouchdowns(int $homeInterceptionReturnTouchdowns) : self
    {
        $this->homeInterceptionReturnTouchdowns = $homeInterceptionReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeBlockedKicks() : int
    {
        return $this->homeBlockedKicks;
    }
    /**
     * 
     *
     * @param int $homeBlockedKicks
     *
     * @return self
     */
    public function setHomeBlockedKicks(int $homeBlockedKicks) : self
    {
        $this->homeBlockedKicks = $homeBlockedKicks;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomePuntReturnTouchdowns() : int
    {
        return $this->homePuntReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int $homePuntReturnTouchdowns
     *
     * @return self
     */
    public function setHomePuntReturnTouchdowns(int $homePuntReturnTouchdowns) : self
    {
        $this->homePuntReturnTouchdowns = $homePuntReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomePuntReturnLong() : int
    {
        return $this->homePuntReturnLong;
    }
    /**
     * 
     *
     * @param int $homePuntReturnLong
     *
     * @return self
     */
    public function setHomePuntReturnLong(int $homePuntReturnLong) : self
    {
        $this->homePuntReturnLong = $homePuntReturnLong;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeKickReturnTouchdowns() : int
    {
        return $this->homeKickReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int $homeKickReturnTouchdowns
     *
     * @return self
     */
    public function setHomeKickReturnTouchdowns(int $homeKickReturnTouchdowns) : self
    {
        $this->homeKickReturnTouchdowns = $homeKickReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeKickReturnLong() : int
    {
        return $this->homeKickReturnLong;
    }
    /**
     * 
     *
     * @param int $homeKickReturnLong
     *
     * @return self
     */
    public function setHomeKickReturnLong(int $homeKickReturnLong) : self
    {
        $this->homeKickReturnLong = $homeKickReturnLong;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeBlockedKickReturnYards() : int
    {
        return $this->homeBlockedKickReturnYards;
    }
    /**
     * 
     *
     * @param int $homeBlockedKickReturnYards
     *
     * @return self
     */
    public function setHomeBlockedKickReturnYards(int $homeBlockedKickReturnYards) : self
    {
        $this->homeBlockedKickReturnYards = $homeBlockedKickReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeBlockedKickReturnTouchdowns() : int
    {
        return $this->homeBlockedKickReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int $homeBlockedKickReturnTouchdowns
     *
     * @return self
     */
    public function setHomeBlockedKickReturnTouchdowns(int $homeBlockedKickReturnTouchdowns) : self
    {
        $this->homeBlockedKickReturnTouchdowns = $homeBlockedKickReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeFieldGoalReturnYards() : int
    {
        return $this->homeFieldGoalReturnYards;
    }
    /**
     * 
     *
     * @param int $homeFieldGoalReturnYards
     *
     * @return self
     */
    public function setHomeFieldGoalReturnYards(int $homeFieldGoalReturnYards) : self
    {
        $this->homeFieldGoalReturnYards = $homeFieldGoalReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeFieldGoalReturnTouchdowns() : int
    {
        return $this->homeFieldGoalReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int $homeFieldGoalReturnTouchdowns
     *
     * @return self
     */
    public function setHomeFieldGoalReturnTouchdowns(int $homeFieldGoalReturnTouchdowns) : self
    {
        $this->homeFieldGoalReturnTouchdowns = $homeFieldGoalReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomePuntNetYards() : int
    {
        return $this->homePuntNetYards;
    }
    /**
     * 
     *
     * @param int $homePuntNetYards
     *
     * @return self
     */
    public function setHomePuntNetYards(int $homePuntNetYards) : self
    {
        $this->homePuntNetYards = $homePuntNetYards;
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
     * @return int
     */
    public function getStadiumID() : int
    {
        return $this->stadiumID;
    }
    /**
     * 
     *
     * @param int $stadiumID
     *
     * @return self
     */
    public function setStadiumID(int $stadiumID) : self
    {
        $this->stadiumID = $stadiumID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayTwoPointConversionReturns() : int
    {
        return $this->awayTwoPointConversionReturns;
    }
    /**
     * 
     *
     * @param int $awayTwoPointConversionReturns
     *
     * @return self
     */
    public function setAwayTwoPointConversionReturns(int $awayTwoPointConversionReturns) : self
    {
        $this->awayTwoPointConversionReturns = $awayTwoPointConversionReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeTwoPointConversionReturns() : int
    {
        return $this->homeTwoPointConversionReturns;
    }
    /**
     * 
     *
     * @param int $homeTwoPointConversionReturns
     *
     * @return self
     */
    public function setHomeTwoPointConversionReturns(int $homeTwoPointConversionReturns) : self
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