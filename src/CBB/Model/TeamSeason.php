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
    protected $wins;
    /**
     * 
     *
     * @var int|null
     */
    protected $losses;
    /**
     * 
     *
     * @var int|null
     */
    protected $conferenceWins;
    /**
     * 
     *
     * @var int|null
     */
    protected $conferenceLosses;
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
    protected $possessions;
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
     * @var int|null
     */
    protected $minutes;
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
    protected $fieldGoalsAttempted;
    /**
     * 
     *
     * @var float|null
     */
    protected $fieldGoalsPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $effectiveFieldGoalsPercentage;
    /**
     * 
     *
     * @var int|null
     */
    protected $twoPointersMade;
    /**
     * 
     *
     * @var int|null
     */
    protected $twoPointersAttempted;
    /**
     * 
     *
     * @var float|null
     */
    protected $twoPointersPercentage;
    /**
     * 
     *
     * @var int|null
     */
    protected $threePointersMade;
    /**
     * 
     *
     * @var int|null
     */
    protected $threePointersAttempted;
    /**
     * 
     *
     * @var float|null
     */
    protected $threePointersPercentage;
    /**
     * 
     *
     * @var int|null
     */
    protected $freeThrowsMade;
    /**
     * 
     *
     * @var int|null
     */
    protected $freeThrowsAttempted;
    /**
     * 
     *
     * @var float|null
     */
    protected $freeThrowsPercentage;
    /**
     * 
     *
     * @var int|null
     */
    protected $offensiveRebounds;
    /**
     * 
     *
     * @var int|null
     */
    protected $defensiveRebounds;
    /**
     * 
     *
     * @var int|null
     */
    protected $rebounds;
    /**
     * 
     *
     * @var float|null
     */
    protected $offensiveReboundsPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $defensiveReboundsPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $totalReboundsPercentage;
    /**
     * 
     *
     * @var int|null
     */
    protected $assists;
    /**
     * 
     *
     * @var int|null
     */
    protected $steals;
    /**
     * 
     *
     * @var int|null
     */
    protected $blockedShots;
    /**
     * 
     *
     * @var int|null
     */
    protected $turnovers;
    /**
     * 
     *
     * @var int|null
     */
    protected $personalFouls;
    /**
     * 
     *
     * @var int|null
     */
    protected $points;
    /**
     * 
     *
     * @var float|null
     */
    protected $trueShootingAttempts;
    /**
     * 
     *
     * @var float|null
     */
    protected $trueShootingPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $playerEfficiencyRating;
    /**
     * 
     *
     * @var float|null
     */
    protected $assistsPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $stealsPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $blocksPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $turnOversPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $usageRatePercentage;
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
    public function getWins() : ?int
    {
        return $this->wins;
    }
    /**
     * 
     *
     * @param int|null $wins
     *
     * @return self
     */
    public function setWins(?int $wins) : self
    {
        $this->wins = $wins;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLosses() : ?int
    {
        return $this->losses;
    }
    /**
     * 
     *
     * @param int|null $losses
     *
     * @return self
     */
    public function setLosses(?int $losses) : self
    {
        $this->losses = $losses;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getConferenceWins() : ?int
    {
        return $this->conferenceWins;
    }
    /**
     * 
     *
     * @param int|null $conferenceWins
     *
     * @return self
     */
    public function setConferenceWins(?int $conferenceWins) : self
    {
        $this->conferenceWins = $conferenceWins;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getConferenceLosses() : ?int
    {
        return $this->conferenceLosses;
    }
    /**
     * 
     *
     * @param int|null $conferenceLosses
     *
     * @return self
     */
    public function setConferenceLosses(?int $conferenceLosses) : self
    {
        $this->conferenceLosses = $conferenceLosses;
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
    public function getPossessions() : ?float
    {
        return $this->possessions;
    }
    /**
     * 
     *
     * @param float|null $possessions
     *
     * @return self
     */
    public function setPossessions(?float $possessions) : self
    {
        $this->possessions = $possessions;
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
     * @return int|null
     */
    public function getMinutes() : ?int
    {
        return $this->minutes;
    }
    /**
     * 
     *
     * @param int|null $minutes
     *
     * @return self
     */
    public function setMinutes(?int $minutes) : self
    {
        $this->minutes = $minutes;
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
    public function getFieldGoalsAttempted() : ?int
    {
        return $this->fieldGoalsAttempted;
    }
    /**
     * 
     *
     * @param int|null $fieldGoalsAttempted
     *
     * @return self
     */
    public function setFieldGoalsAttempted(?int $fieldGoalsAttempted) : self
    {
        $this->fieldGoalsAttempted = $fieldGoalsAttempted;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFieldGoalsPercentage() : ?float
    {
        return $this->fieldGoalsPercentage;
    }
    /**
     * 
     *
     * @param float|null $fieldGoalsPercentage
     *
     * @return self
     */
    public function setFieldGoalsPercentage(?float $fieldGoalsPercentage) : self
    {
        $this->fieldGoalsPercentage = $fieldGoalsPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getEffectiveFieldGoalsPercentage() : ?float
    {
        return $this->effectiveFieldGoalsPercentage;
    }
    /**
     * 
     *
     * @param float|null $effectiveFieldGoalsPercentage
     *
     * @return self
     */
    public function setEffectiveFieldGoalsPercentage(?float $effectiveFieldGoalsPercentage) : self
    {
        $this->effectiveFieldGoalsPercentage = $effectiveFieldGoalsPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTwoPointersMade() : ?int
    {
        return $this->twoPointersMade;
    }
    /**
     * 
     *
     * @param int|null $twoPointersMade
     *
     * @return self
     */
    public function setTwoPointersMade(?int $twoPointersMade) : self
    {
        $this->twoPointersMade = $twoPointersMade;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTwoPointersAttempted() : ?int
    {
        return $this->twoPointersAttempted;
    }
    /**
     * 
     *
     * @param int|null $twoPointersAttempted
     *
     * @return self
     */
    public function setTwoPointersAttempted(?int $twoPointersAttempted) : self
    {
        $this->twoPointersAttempted = $twoPointersAttempted;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTwoPointersPercentage() : ?float
    {
        return $this->twoPointersPercentage;
    }
    /**
     * 
     *
     * @param float|null $twoPointersPercentage
     *
     * @return self
     */
    public function setTwoPointersPercentage(?float $twoPointersPercentage) : self
    {
        $this->twoPointersPercentage = $twoPointersPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getThreePointersMade() : ?int
    {
        return $this->threePointersMade;
    }
    /**
     * 
     *
     * @param int|null $threePointersMade
     *
     * @return self
     */
    public function setThreePointersMade(?int $threePointersMade) : self
    {
        $this->threePointersMade = $threePointersMade;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getThreePointersAttempted() : ?int
    {
        return $this->threePointersAttempted;
    }
    /**
     * 
     *
     * @param int|null $threePointersAttempted
     *
     * @return self
     */
    public function setThreePointersAttempted(?int $threePointersAttempted) : self
    {
        $this->threePointersAttempted = $threePointersAttempted;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getThreePointersPercentage() : ?float
    {
        return $this->threePointersPercentage;
    }
    /**
     * 
     *
     * @param float|null $threePointersPercentage
     *
     * @return self
     */
    public function setThreePointersPercentage(?float $threePointersPercentage) : self
    {
        $this->threePointersPercentage = $threePointersPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFreeThrowsMade() : ?int
    {
        return $this->freeThrowsMade;
    }
    /**
     * 
     *
     * @param int|null $freeThrowsMade
     *
     * @return self
     */
    public function setFreeThrowsMade(?int $freeThrowsMade) : self
    {
        $this->freeThrowsMade = $freeThrowsMade;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFreeThrowsAttempted() : ?int
    {
        return $this->freeThrowsAttempted;
    }
    /**
     * 
     *
     * @param int|null $freeThrowsAttempted
     *
     * @return self
     */
    public function setFreeThrowsAttempted(?int $freeThrowsAttempted) : self
    {
        $this->freeThrowsAttempted = $freeThrowsAttempted;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFreeThrowsPercentage() : ?float
    {
        return $this->freeThrowsPercentage;
    }
    /**
     * 
     *
     * @param float|null $freeThrowsPercentage
     *
     * @return self
     */
    public function setFreeThrowsPercentage(?float $freeThrowsPercentage) : self
    {
        $this->freeThrowsPercentage = $freeThrowsPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOffensiveRebounds() : ?int
    {
        return $this->offensiveRebounds;
    }
    /**
     * 
     *
     * @param int|null $offensiveRebounds
     *
     * @return self
     */
    public function setOffensiveRebounds(?int $offensiveRebounds) : self
    {
        $this->offensiveRebounds = $offensiveRebounds;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDefensiveRebounds() : ?int
    {
        return $this->defensiveRebounds;
    }
    /**
     * 
     *
     * @param int|null $defensiveRebounds
     *
     * @return self
     */
    public function setDefensiveRebounds(?int $defensiveRebounds) : self
    {
        $this->defensiveRebounds = $defensiveRebounds;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRebounds() : ?int
    {
        return $this->rebounds;
    }
    /**
     * 
     *
     * @param int|null $rebounds
     *
     * @return self
     */
    public function setRebounds(?int $rebounds) : self
    {
        $this->rebounds = $rebounds;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getOffensiveReboundsPercentage() : ?float
    {
        return $this->offensiveReboundsPercentage;
    }
    /**
     * 
     *
     * @param float|null $offensiveReboundsPercentage
     *
     * @return self
     */
    public function setOffensiveReboundsPercentage(?float $offensiveReboundsPercentage) : self
    {
        $this->offensiveReboundsPercentage = $offensiveReboundsPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDefensiveReboundsPercentage() : ?float
    {
        return $this->defensiveReboundsPercentage;
    }
    /**
     * 
     *
     * @param float|null $defensiveReboundsPercentage
     *
     * @return self
     */
    public function setDefensiveReboundsPercentage(?float $defensiveReboundsPercentage) : self
    {
        $this->defensiveReboundsPercentage = $defensiveReboundsPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTotalReboundsPercentage() : ?float
    {
        return $this->totalReboundsPercentage;
    }
    /**
     * 
     *
     * @param float|null $totalReboundsPercentage
     *
     * @return self
     */
    public function setTotalReboundsPercentage(?float $totalReboundsPercentage) : self
    {
        $this->totalReboundsPercentage = $totalReboundsPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAssists() : ?int
    {
        return $this->assists;
    }
    /**
     * 
     *
     * @param int|null $assists
     *
     * @return self
     */
    public function setAssists(?int $assists) : self
    {
        $this->assists = $assists;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSteals() : ?int
    {
        return $this->steals;
    }
    /**
     * 
     *
     * @param int|null $steals
     *
     * @return self
     */
    public function setSteals(?int $steals) : self
    {
        $this->steals = $steals;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBlockedShots() : ?int
    {
        return $this->blockedShots;
    }
    /**
     * 
     *
     * @param int|null $blockedShots
     *
     * @return self
     */
    public function setBlockedShots(?int $blockedShots) : self
    {
        $this->blockedShots = $blockedShots;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTurnovers() : ?int
    {
        return $this->turnovers;
    }
    /**
     * 
     *
     * @param int|null $turnovers
     *
     * @return self
     */
    public function setTurnovers(?int $turnovers) : self
    {
        $this->turnovers = $turnovers;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPersonalFouls() : ?int
    {
        return $this->personalFouls;
    }
    /**
     * 
     *
     * @param int|null $personalFouls
     *
     * @return self
     */
    public function setPersonalFouls(?int $personalFouls) : self
    {
        $this->personalFouls = $personalFouls;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPoints() : ?int
    {
        return $this->points;
    }
    /**
     * 
     *
     * @param int|null $points
     *
     * @return self
     */
    public function setPoints(?int $points) : self
    {
        $this->points = $points;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTrueShootingAttempts() : ?float
    {
        return $this->trueShootingAttempts;
    }
    /**
     * 
     *
     * @param float|null $trueShootingAttempts
     *
     * @return self
     */
    public function setTrueShootingAttempts(?float $trueShootingAttempts) : self
    {
        $this->trueShootingAttempts = $trueShootingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTrueShootingPercentage() : ?float
    {
        return $this->trueShootingPercentage;
    }
    /**
     * 
     *
     * @param float|null $trueShootingPercentage
     *
     * @return self
     */
    public function setTrueShootingPercentage(?float $trueShootingPercentage) : self
    {
        $this->trueShootingPercentage = $trueShootingPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPlayerEfficiencyRating() : ?float
    {
        return $this->playerEfficiencyRating;
    }
    /**
     * 
     *
     * @param float|null $playerEfficiencyRating
     *
     * @return self
     */
    public function setPlayerEfficiencyRating(?float $playerEfficiencyRating) : self
    {
        $this->playerEfficiencyRating = $playerEfficiencyRating;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAssistsPercentage() : ?float
    {
        return $this->assistsPercentage;
    }
    /**
     * 
     *
     * @param float|null $assistsPercentage
     *
     * @return self
     */
    public function setAssistsPercentage(?float $assistsPercentage) : self
    {
        $this->assistsPercentage = $assistsPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getStealsPercentage() : ?float
    {
        return $this->stealsPercentage;
    }
    /**
     * 
     *
     * @param float|null $stealsPercentage
     *
     * @return self
     */
    public function setStealsPercentage(?float $stealsPercentage) : self
    {
        $this->stealsPercentage = $stealsPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getBlocksPercentage() : ?float
    {
        return $this->blocksPercentage;
    }
    /**
     * 
     *
     * @param float|null $blocksPercentage
     *
     * @return self
     */
    public function setBlocksPercentage(?float $blocksPercentage) : self
    {
        $this->blocksPercentage = $blocksPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTurnOversPercentage() : ?float
    {
        return $this->turnOversPercentage;
    }
    /**
     * 
     *
     * @param float|null $turnOversPercentage
     *
     * @return self
     */
    public function setTurnOversPercentage(?float $turnOversPercentage) : self
    {
        $this->turnOversPercentage = $turnOversPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getUsageRatePercentage() : ?float
    {
        return $this->usageRatePercentage;
    }
    /**
     * 
     *
     * @param float|null $usageRatePercentage
     *
     * @return self
     */
    public function setUsageRatePercentage(?float $usageRatePercentage) : self
    {
        $this->usageRatePercentage = $usageRatePercentage;
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
}