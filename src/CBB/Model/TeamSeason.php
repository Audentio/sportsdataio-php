<?php

namespace Sportsdata\API\CBB\Model;

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
    protected $wins;
    /**
     * 
     *
     * @var int
     */
    protected $losses;
    /**
     * 
     *
     * @var int
     */
    protected $conferenceWins;
    /**
     * 
     *
     * @var int
     */
    protected $conferenceLosses;
    /**
     * 
     *
     * @var int
     */
    protected $globalTeamID;
    /**
     * 
     *
     * @var float
     */
    protected $possessions;
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
     * @var int
     */
    protected $minutes;
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
    protected $fieldGoalsAttempted;
    /**
     * 
     *
     * @var float
     */
    protected $fieldGoalsPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $effectiveFieldGoalsPercentage;
    /**
     * 
     *
     * @var int
     */
    protected $twoPointersMade;
    /**
     * 
     *
     * @var int
     */
    protected $twoPointersAttempted;
    /**
     * 
     *
     * @var float
     */
    protected $twoPointersPercentage;
    /**
     * 
     *
     * @var int
     */
    protected $threePointersMade;
    /**
     * 
     *
     * @var int
     */
    protected $threePointersAttempted;
    /**
     * 
     *
     * @var float
     */
    protected $threePointersPercentage;
    /**
     * 
     *
     * @var int
     */
    protected $freeThrowsMade;
    /**
     * 
     *
     * @var int
     */
    protected $freeThrowsAttempted;
    /**
     * 
     *
     * @var float
     */
    protected $freeThrowsPercentage;
    /**
     * 
     *
     * @var int
     */
    protected $offensiveRebounds;
    /**
     * 
     *
     * @var int
     */
    protected $defensiveRebounds;
    /**
     * 
     *
     * @var int
     */
    protected $rebounds;
    /**
     * 
     *
     * @var float
     */
    protected $offensiveReboundsPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $defensiveReboundsPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $totalReboundsPercentage;
    /**
     * 
     *
     * @var int
     */
    protected $assists;
    /**
     * 
     *
     * @var int
     */
    protected $steals;
    /**
     * 
     *
     * @var int
     */
    protected $blockedShots;
    /**
     * 
     *
     * @var int
     */
    protected $turnovers;
    /**
     * 
     *
     * @var int
     */
    protected $personalFouls;
    /**
     * 
     *
     * @var int
     */
    protected $points;
    /**
     * 
     *
     * @var float
     */
    protected $trueShootingAttempts;
    /**
     * 
     *
     * @var float
     */
    protected $trueShootingPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $playerEfficiencyRating;
    /**
     * 
     *
     * @var float
     */
    protected $assistsPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $stealsPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $blocksPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $turnOversPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $usageRatePercentage;
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
    public function getWins() : int
    {
        return $this->wins;
    }
    /**
     * 
     *
     * @param int $wins
     *
     * @return self
     */
    public function setWins(int $wins) : self
    {
        $this->wins = $wins;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLosses() : int
    {
        return $this->losses;
    }
    /**
     * 
     *
     * @param int $losses
     *
     * @return self
     */
    public function setLosses(int $losses) : self
    {
        $this->losses = $losses;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getConferenceWins() : int
    {
        return $this->conferenceWins;
    }
    /**
     * 
     *
     * @param int $conferenceWins
     *
     * @return self
     */
    public function setConferenceWins(int $conferenceWins) : self
    {
        $this->conferenceWins = $conferenceWins;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getConferenceLosses() : int
    {
        return $this->conferenceLosses;
    }
    /**
     * 
     *
     * @param int $conferenceLosses
     *
     * @return self
     */
    public function setConferenceLosses(int $conferenceLosses) : self
    {
        $this->conferenceLosses = $conferenceLosses;
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
     * @return float
     */
    public function getPossessions() : float
    {
        return $this->possessions;
    }
    /**
     * 
     *
     * @param float $possessions
     *
     * @return self
     */
    public function setPossessions(float $possessions) : self
    {
        $this->possessions = $possessions;
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
     * @return int
     */
    public function getMinutes() : int
    {
        return $this->minutes;
    }
    /**
     * 
     *
     * @param int $minutes
     *
     * @return self
     */
    public function setMinutes(int $minutes) : self
    {
        $this->minutes = $minutes;
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
    public function getFieldGoalsAttempted() : int
    {
        return $this->fieldGoalsAttempted;
    }
    /**
     * 
     *
     * @param int $fieldGoalsAttempted
     *
     * @return self
     */
    public function setFieldGoalsAttempted(int $fieldGoalsAttempted) : self
    {
        $this->fieldGoalsAttempted = $fieldGoalsAttempted;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFieldGoalsPercentage() : float
    {
        return $this->fieldGoalsPercentage;
    }
    /**
     * 
     *
     * @param float $fieldGoalsPercentage
     *
     * @return self
     */
    public function setFieldGoalsPercentage(float $fieldGoalsPercentage) : self
    {
        $this->fieldGoalsPercentage = $fieldGoalsPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getEffectiveFieldGoalsPercentage() : float
    {
        return $this->effectiveFieldGoalsPercentage;
    }
    /**
     * 
     *
     * @param float $effectiveFieldGoalsPercentage
     *
     * @return self
     */
    public function setEffectiveFieldGoalsPercentage(float $effectiveFieldGoalsPercentage) : self
    {
        $this->effectiveFieldGoalsPercentage = $effectiveFieldGoalsPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTwoPointersMade() : int
    {
        return $this->twoPointersMade;
    }
    /**
     * 
     *
     * @param int $twoPointersMade
     *
     * @return self
     */
    public function setTwoPointersMade(int $twoPointersMade) : self
    {
        $this->twoPointersMade = $twoPointersMade;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTwoPointersAttempted() : int
    {
        return $this->twoPointersAttempted;
    }
    /**
     * 
     *
     * @param int $twoPointersAttempted
     *
     * @return self
     */
    public function setTwoPointersAttempted(int $twoPointersAttempted) : self
    {
        $this->twoPointersAttempted = $twoPointersAttempted;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTwoPointersPercentage() : float
    {
        return $this->twoPointersPercentage;
    }
    /**
     * 
     *
     * @param float $twoPointersPercentage
     *
     * @return self
     */
    public function setTwoPointersPercentage(float $twoPointersPercentage) : self
    {
        $this->twoPointersPercentage = $twoPointersPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getThreePointersMade() : int
    {
        return $this->threePointersMade;
    }
    /**
     * 
     *
     * @param int $threePointersMade
     *
     * @return self
     */
    public function setThreePointersMade(int $threePointersMade) : self
    {
        $this->threePointersMade = $threePointersMade;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getThreePointersAttempted() : int
    {
        return $this->threePointersAttempted;
    }
    /**
     * 
     *
     * @param int $threePointersAttempted
     *
     * @return self
     */
    public function setThreePointersAttempted(int $threePointersAttempted) : self
    {
        $this->threePointersAttempted = $threePointersAttempted;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getThreePointersPercentage() : float
    {
        return $this->threePointersPercentage;
    }
    /**
     * 
     *
     * @param float $threePointersPercentage
     *
     * @return self
     */
    public function setThreePointersPercentage(float $threePointersPercentage) : self
    {
        $this->threePointersPercentage = $threePointersPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFreeThrowsMade() : int
    {
        return $this->freeThrowsMade;
    }
    /**
     * 
     *
     * @param int $freeThrowsMade
     *
     * @return self
     */
    public function setFreeThrowsMade(int $freeThrowsMade) : self
    {
        $this->freeThrowsMade = $freeThrowsMade;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFreeThrowsAttempted() : int
    {
        return $this->freeThrowsAttempted;
    }
    /**
     * 
     *
     * @param int $freeThrowsAttempted
     *
     * @return self
     */
    public function setFreeThrowsAttempted(int $freeThrowsAttempted) : self
    {
        $this->freeThrowsAttempted = $freeThrowsAttempted;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFreeThrowsPercentage() : float
    {
        return $this->freeThrowsPercentage;
    }
    /**
     * 
     *
     * @param float $freeThrowsPercentage
     *
     * @return self
     */
    public function setFreeThrowsPercentage(float $freeThrowsPercentage) : self
    {
        $this->freeThrowsPercentage = $freeThrowsPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOffensiveRebounds() : int
    {
        return $this->offensiveRebounds;
    }
    /**
     * 
     *
     * @param int $offensiveRebounds
     *
     * @return self
     */
    public function setOffensiveRebounds(int $offensiveRebounds) : self
    {
        $this->offensiveRebounds = $offensiveRebounds;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDefensiveRebounds() : int
    {
        return $this->defensiveRebounds;
    }
    /**
     * 
     *
     * @param int $defensiveRebounds
     *
     * @return self
     */
    public function setDefensiveRebounds(int $defensiveRebounds) : self
    {
        $this->defensiveRebounds = $defensiveRebounds;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRebounds() : int
    {
        return $this->rebounds;
    }
    /**
     * 
     *
     * @param int $rebounds
     *
     * @return self
     */
    public function setRebounds(int $rebounds) : self
    {
        $this->rebounds = $rebounds;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOffensiveReboundsPercentage() : float
    {
        return $this->offensiveReboundsPercentage;
    }
    /**
     * 
     *
     * @param float $offensiveReboundsPercentage
     *
     * @return self
     */
    public function setOffensiveReboundsPercentage(float $offensiveReboundsPercentage) : self
    {
        $this->offensiveReboundsPercentage = $offensiveReboundsPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDefensiveReboundsPercentage() : float
    {
        return $this->defensiveReboundsPercentage;
    }
    /**
     * 
     *
     * @param float $defensiveReboundsPercentage
     *
     * @return self
     */
    public function setDefensiveReboundsPercentage(float $defensiveReboundsPercentage) : self
    {
        $this->defensiveReboundsPercentage = $defensiveReboundsPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalReboundsPercentage() : float
    {
        return $this->totalReboundsPercentage;
    }
    /**
     * 
     *
     * @param float $totalReboundsPercentage
     *
     * @return self
     */
    public function setTotalReboundsPercentage(float $totalReboundsPercentage) : self
    {
        $this->totalReboundsPercentage = $totalReboundsPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAssists() : int
    {
        return $this->assists;
    }
    /**
     * 
     *
     * @param int $assists
     *
     * @return self
     */
    public function setAssists(int $assists) : self
    {
        $this->assists = $assists;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSteals() : int
    {
        return $this->steals;
    }
    /**
     * 
     *
     * @param int $steals
     *
     * @return self
     */
    public function setSteals(int $steals) : self
    {
        $this->steals = $steals;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBlockedShots() : int
    {
        return $this->blockedShots;
    }
    /**
     * 
     *
     * @param int $blockedShots
     *
     * @return self
     */
    public function setBlockedShots(int $blockedShots) : self
    {
        $this->blockedShots = $blockedShots;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTurnovers() : int
    {
        return $this->turnovers;
    }
    /**
     * 
     *
     * @param int $turnovers
     *
     * @return self
     */
    public function setTurnovers(int $turnovers) : self
    {
        $this->turnovers = $turnovers;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPersonalFouls() : int
    {
        return $this->personalFouls;
    }
    /**
     * 
     *
     * @param int $personalFouls
     *
     * @return self
     */
    public function setPersonalFouls(int $personalFouls) : self
    {
        $this->personalFouls = $personalFouls;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPoints() : int
    {
        return $this->points;
    }
    /**
     * 
     *
     * @param int $points
     *
     * @return self
     */
    public function setPoints(int $points) : self
    {
        $this->points = $points;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTrueShootingAttempts() : float
    {
        return $this->trueShootingAttempts;
    }
    /**
     * 
     *
     * @param float $trueShootingAttempts
     *
     * @return self
     */
    public function setTrueShootingAttempts(float $trueShootingAttempts) : self
    {
        $this->trueShootingAttempts = $trueShootingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTrueShootingPercentage() : float
    {
        return $this->trueShootingPercentage;
    }
    /**
     * 
     *
     * @param float $trueShootingPercentage
     *
     * @return self
     */
    public function setTrueShootingPercentage(float $trueShootingPercentage) : self
    {
        $this->trueShootingPercentage = $trueShootingPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPlayerEfficiencyRating() : float
    {
        return $this->playerEfficiencyRating;
    }
    /**
     * 
     *
     * @param float $playerEfficiencyRating
     *
     * @return self
     */
    public function setPlayerEfficiencyRating(float $playerEfficiencyRating) : self
    {
        $this->playerEfficiencyRating = $playerEfficiencyRating;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAssistsPercentage() : float
    {
        return $this->assistsPercentage;
    }
    /**
     * 
     *
     * @param float $assistsPercentage
     *
     * @return self
     */
    public function setAssistsPercentage(float $assistsPercentage) : self
    {
        $this->assistsPercentage = $assistsPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getStealsPercentage() : float
    {
        return $this->stealsPercentage;
    }
    /**
     * 
     *
     * @param float $stealsPercentage
     *
     * @return self
     */
    public function setStealsPercentage(float $stealsPercentage) : self
    {
        $this->stealsPercentage = $stealsPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBlocksPercentage() : float
    {
        return $this->blocksPercentage;
    }
    /**
     * 
     *
     * @param float $blocksPercentage
     *
     * @return self
     */
    public function setBlocksPercentage(float $blocksPercentage) : self
    {
        $this->blocksPercentage = $blocksPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTurnOversPercentage() : float
    {
        return $this->turnOversPercentage;
    }
    /**
     * 
     *
     * @param float $turnOversPercentage
     *
     * @return self
     */
    public function setTurnOversPercentage(float $turnOversPercentage) : self
    {
        $this->turnOversPercentage = $turnOversPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getUsageRatePercentage() : float
    {
        return $this->usageRatePercentage;
    }
    /**
     * 
     *
     * @param float $usageRatePercentage
     *
     * @return self
     */
    public function setUsageRatePercentage(float $usageRatePercentage) : self
    {
        $this->usageRatePercentage = $usageRatePercentage;
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
}