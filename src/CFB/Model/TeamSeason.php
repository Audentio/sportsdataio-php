<?php

namespace Sportsdata\API\CFB\Model;

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
    protected $pointsFor;
    /**
     * 
     *
     * @var int|null
     */
    protected $pointsAgainst;
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
    protected $conferencePointsFor;
    /**
     * 
     *
     * @var int|null
     */
    protected $conferencePointsAgainst;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeWins;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeLosses;
    /**
     * 
     *
     * @var int|null
     */
    protected $roadWins;
    /**
     * 
     *
     * @var int|null
     */
    protected $roadLosses;
    /**
     * 
     *
     * @var int|null
     */
    protected $streak;
    /**
     * 
     *
     * @var int|null
     */
    protected $score;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentScore;
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
    protected $thirdDownConversions;
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
    protected $fourthDownConversions;
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
    protected $timeOfPossessionMinutes;
    /**
     * 
     *
     * @var int|null
     */
    protected $timeOfPossessionSeconds;
    /**
     * 
     *
     * @var int|null
     */
    protected $globalTeamID;
    /**
     * 
     *
     * @var int|null
     */
    protected $conferenceRank;
    /**
     * 
     *
     * @var int|null
     */
    protected $divisionRank;
    /**
     * 
     *
     * @var string|null
     */
    protected $updated;
    /**
     * 
     *
     * @var string|null
     */
    protected $created;
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
    protected $passingAttempts;
    /**
     * 
     *
     * @var float|null
     */
    protected $passingCompletions;
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
    protected $passingCompletionPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $passingYardsPerAttempt;
    /**
     * 
     *
     * @var float|null
     */
    protected $passingYardsPerCompletion;
    /**
     * 
     *
     * @var float|null
     */
    protected $passingTouchdowns;
    /**
     * 
     *
     * @var float|null
     */
    protected $passingInterceptions;
    /**
     * 
     *
     * @var float|null
     */
    protected $passingRating;
    /**
     * 
     *
     * @var float|null
     */
    protected $rushingAttempts;
    /**
     * 
     *
     * @var float|null
     */
    protected $rushingYards;
    /**
     * 
     *
     * @var float|null
     */
    protected $rushingYardsPerAttempt;
    /**
     * 
     *
     * @var float|null
     */
    protected $rushingTouchdowns;
    /**
     * 
     *
     * @var float|null
     */
    protected $rushingLong;
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
    protected $receivingYards;
    /**
     * 
     *
     * @var float|null
     */
    protected $receivingYardsPerReception;
    /**
     * 
     *
     * @var float|null
     */
    protected $receivingTouchdowns;
    /**
     * 
     *
     * @var float|null
     */
    protected $receivingLong;
    /**
     * 
     *
     * @var float|null
     */
    protected $puntReturns;
    /**
     * 
     *
     * @var float|null
     */
    protected $puntReturnYards;
    /**
     * 
     *
     * @var float|null
     */
    protected $puntReturnYardsPerAttempt;
    /**
     * 
     *
     * @var float|null
     */
    protected $puntReturnTouchdowns;
    /**
     * 
     *
     * @var float|null
     */
    protected $puntReturnLong;
    /**
     * 
     *
     * @var float|null
     */
    protected $kickReturns;
    /**
     * 
     *
     * @var float|null
     */
    protected $kickReturnYards;
    /**
     * 
     *
     * @var float|null
     */
    protected $kickReturnYardsPerAttempt;
    /**
     * 
     *
     * @var float|null
     */
    protected $kickReturnTouchdowns;
    /**
     * 
     *
     * @var float|null
     */
    protected $kickReturnLong;
    /**
     * 
     *
     * @var float|null
     */
    protected $punts;
    /**
     * 
     *
     * @var float|null
     */
    protected $puntYards;
    /**
     * 
     *
     * @var float|null
     */
    protected $puntAverage;
    /**
     * 
     *
     * @var float|null
     */
    protected $puntLong;
    /**
     * 
     *
     * @var float|null
     */
    protected $fieldGoalsAttempted;
    /**
     * 
     *
     * @var float|null
     */
    protected $fieldGoalsMade;
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
    protected $fieldGoalsLongestMade;
    /**
     * 
     *
     * @var float|null
     */
    protected $extraPointsAttempted;
    /**
     * 
     *
     * @var float|null
     */
    protected $extraPointsMade;
    /**
     * 
     *
     * @var float|null
     */
    protected $interceptions;
    /**
     * 
     *
     * @var float|null
     */
    protected $interceptionReturnYards;
    /**
     * 
     *
     * @var float|null
     */
    protected $interceptionReturnTouchdowns;
    /**
     * 
     *
     * @var float|null
     */
    protected $soloTackles;
    /**
     * 
     *
     * @var float|null
     */
    protected $assistedTackles;
    /**
     * 
     *
     * @var float|null
     */
    protected $tacklesForLoss;
    /**
     * 
     *
     * @var float|null
     */
    protected $sacks;
    /**
     * 
     *
     * @var float|null
     */
    protected $passesDefended;
    /**
     * 
     *
     * @var float|null
     */
    protected $fumblesRecovered;
    /**
     * 
     *
     * @var float|null
     */
    protected $fumbleReturnTouchdowns;
    /**
     * 
     *
     * @var float|null
     */
    protected $quarterbackHurries;
    /**
     * 
     *
     * @var float|null
     */
    protected $fumbles;
    /**
     * 
     *
     * @var float|null
     */
    protected $fumblesLost;
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
    public function getPointsFor() : ?int
    {
        return $this->pointsFor;
    }
    /**
     * 
     *
     * @param int|null $pointsFor
     *
     * @return self
     */
    public function setPointsFor(?int $pointsFor) : self
    {
        $this->pointsFor = $pointsFor;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPointsAgainst() : ?int
    {
        return $this->pointsAgainst;
    }
    /**
     * 
     *
     * @param int|null $pointsAgainst
     *
     * @return self
     */
    public function setPointsAgainst(?int $pointsAgainst) : self
    {
        $this->pointsAgainst = $pointsAgainst;
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
    public function getConferencePointsFor() : ?int
    {
        return $this->conferencePointsFor;
    }
    /**
     * 
     *
     * @param int|null $conferencePointsFor
     *
     * @return self
     */
    public function setConferencePointsFor(?int $conferencePointsFor) : self
    {
        $this->conferencePointsFor = $conferencePointsFor;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getConferencePointsAgainst() : ?int
    {
        return $this->conferencePointsAgainst;
    }
    /**
     * 
     *
     * @param int|null $conferencePointsAgainst
     *
     * @return self
     */
    public function setConferencePointsAgainst(?int $conferencePointsAgainst) : self
    {
        $this->conferencePointsAgainst = $conferencePointsAgainst;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeWins() : ?int
    {
        return $this->homeWins;
    }
    /**
     * 
     *
     * @param int|null $homeWins
     *
     * @return self
     */
    public function setHomeWins(?int $homeWins) : self
    {
        $this->homeWins = $homeWins;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeLosses() : ?int
    {
        return $this->homeLosses;
    }
    /**
     * 
     *
     * @param int|null $homeLosses
     *
     * @return self
     */
    public function setHomeLosses(?int $homeLosses) : self
    {
        $this->homeLosses = $homeLosses;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRoadWins() : ?int
    {
        return $this->roadWins;
    }
    /**
     * 
     *
     * @param int|null $roadWins
     *
     * @return self
     */
    public function setRoadWins(?int $roadWins) : self
    {
        $this->roadWins = $roadWins;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRoadLosses() : ?int
    {
        return $this->roadLosses;
    }
    /**
     * 
     *
     * @param int|null $roadLosses
     *
     * @return self
     */
    public function setRoadLosses(?int $roadLosses) : self
    {
        $this->roadLosses = $roadLosses;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getStreak() : ?int
    {
        return $this->streak;
    }
    /**
     * 
     *
     * @param int|null $streak
     *
     * @return self
     */
    public function setStreak(?int $streak) : self
    {
        $this->streak = $streak;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getScore() : ?int
    {
        return $this->score;
    }
    /**
     * 
     *
     * @param int|null $score
     *
     * @return self
     */
    public function setScore(?int $score) : self
    {
        $this->score = $score;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentScore() : ?int
    {
        return $this->opponentScore;
    }
    /**
     * 
     *
     * @param int|null $opponentScore
     *
     * @return self
     */
    public function setOpponentScore(?int $opponentScore) : self
    {
        $this->opponentScore = $opponentScore;
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
    public function getTimeOfPossessionMinutes() : ?int
    {
        return $this->timeOfPossessionMinutes;
    }
    /**
     * 
     *
     * @param int|null $timeOfPossessionMinutes
     *
     * @return self
     */
    public function setTimeOfPossessionMinutes(?int $timeOfPossessionMinutes) : self
    {
        $this->timeOfPossessionMinutes = $timeOfPossessionMinutes;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTimeOfPossessionSeconds() : ?int
    {
        return $this->timeOfPossessionSeconds;
    }
    /**
     * 
     *
     * @param int|null $timeOfPossessionSeconds
     *
     * @return self
     */
    public function setTimeOfPossessionSeconds(?int $timeOfPossessionSeconds) : self
    {
        $this->timeOfPossessionSeconds = $timeOfPossessionSeconds;
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
     * @return int|null
     */
    public function getConferenceRank() : ?int
    {
        return $this->conferenceRank;
    }
    /**
     * 
     *
     * @param int|null $conferenceRank
     *
     * @return self
     */
    public function setConferenceRank(?int $conferenceRank) : self
    {
        $this->conferenceRank = $conferenceRank;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDivisionRank() : ?int
    {
        return $this->divisionRank;
    }
    /**
     * 
     *
     * @param int|null $divisionRank
     *
     * @return self
     */
    public function setDivisionRank(?int $divisionRank) : self
    {
        $this->divisionRank = $divisionRank;
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
     * @return string|null
     */
    public function getCreated() : ?string
    {
        return $this->created;
    }
    /**
     * 
     *
     * @param string|null $created
     *
     * @return self
     */
    public function setCreated(?string $created) : self
    {
        $this->created = $created;
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
    public function getPassingCompletions() : ?float
    {
        return $this->passingCompletions;
    }
    /**
     * 
     *
     * @param float|null $passingCompletions
     *
     * @return self
     */
    public function setPassingCompletions(?float $passingCompletions) : self
    {
        $this->passingCompletions = $passingCompletions;
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
    public function getPassingCompletionPercentage() : ?float
    {
        return $this->passingCompletionPercentage;
    }
    /**
     * 
     *
     * @param float|null $passingCompletionPercentage
     *
     * @return self
     */
    public function setPassingCompletionPercentage(?float $passingCompletionPercentage) : self
    {
        $this->passingCompletionPercentage = $passingCompletionPercentage;
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
     * @return float|null
     */
    public function getPassingYardsPerCompletion() : ?float
    {
        return $this->passingYardsPerCompletion;
    }
    /**
     * 
     *
     * @param float|null $passingYardsPerCompletion
     *
     * @return self
     */
    public function setPassingYardsPerCompletion(?float $passingYardsPerCompletion) : self
    {
        $this->passingYardsPerCompletion = $passingYardsPerCompletion;
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
     * @return float|null
     */
    public function getPassingInterceptions() : ?float
    {
        return $this->passingInterceptions;
    }
    /**
     * 
     *
     * @param float|null $passingInterceptions
     *
     * @return self
     */
    public function setPassingInterceptions(?float $passingInterceptions) : self
    {
        $this->passingInterceptions = $passingInterceptions;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPassingRating() : ?float
    {
        return $this->passingRating;
    }
    /**
     * 
     *
     * @param float|null $passingRating
     *
     * @return self
     */
    public function setPassingRating(?float $passingRating) : self
    {
        $this->passingRating = $passingRating;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRushingAttempts() : ?float
    {
        return $this->rushingAttempts;
    }
    /**
     * 
     *
     * @param float|null $rushingAttempts
     *
     * @return self
     */
    public function setRushingAttempts(?float $rushingAttempts) : self
    {
        $this->rushingAttempts = $rushingAttempts;
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
     * @return float|null
     */
    public function getRushingYardsPerAttempt() : ?float
    {
        return $this->rushingYardsPerAttempt;
    }
    /**
     * 
     *
     * @param float|null $rushingYardsPerAttempt
     *
     * @return self
     */
    public function setRushingYardsPerAttempt(?float $rushingYardsPerAttempt) : self
    {
        $this->rushingYardsPerAttempt = $rushingYardsPerAttempt;
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
     * @return float|null
     */
    public function getRushingLong() : ?float
    {
        return $this->rushingLong;
    }
    /**
     * 
     *
     * @param float|null $rushingLong
     *
     * @return self
     */
    public function setRushingLong(?float $rushingLong) : self
    {
        $this->rushingLong = $rushingLong;
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
    public function getReceivingYardsPerReception() : ?float
    {
        return $this->receivingYardsPerReception;
    }
    /**
     * 
     *
     * @param float|null $receivingYardsPerReception
     *
     * @return self
     */
    public function setReceivingYardsPerReception(?float $receivingYardsPerReception) : self
    {
        $this->receivingYardsPerReception = $receivingYardsPerReception;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getReceivingTouchdowns() : ?float
    {
        return $this->receivingTouchdowns;
    }
    /**
     * 
     *
     * @param float|null $receivingTouchdowns
     *
     * @return self
     */
    public function setReceivingTouchdowns(?float $receivingTouchdowns) : self
    {
        $this->receivingTouchdowns = $receivingTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getReceivingLong() : ?float
    {
        return $this->receivingLong;
    }
    /**
     * 
     *
     * @param float|null $receivingLong
     *
     * @return self
     */
    public function setReceivingLong(?float $receivingLong) : self
    {
        $this->receivingLong = $receivingLong;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPuntReturns() : ?float
    {
        return $this->puntReturns;
    }
    /**
     * 
     *
     * @param float|null $puntReturns
     *
     * @return self
     */
    public function setPuntReturns(?float $puntReturns) : self
    {
        $this->puntReturns = $puntReturns;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPuntReturnYards() : ?float
    {
        return $this->puntReturnYards;
    }
    /**
     * 
     *
     * @param float|null $puntReturnYards
     *
     * @return self
     */
    public function setPuntReturnYards(?float $puntReturnYards) : self
    {
        $this->puntReturnYards = $puntReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPuntReturnYardsPerAttempt() : ?float
    {
        return $this->puntReturnYardsPerAttempt;
    }
    /**
     * 
     *
     * @param float|null $puntReturnYardsPerAttempt
     *
     * @return self
     */
    public function setPuntReturnYardsPerAttempt(?float $puntReturnYardsPerAttempt) : self
    {
        $this->puntReturnYardsPerAttempt = $puntReturnYardsPerAttempt;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPuntReturnTouchdowns() : ?float
    {
        return $this->puntReturnTouchdowns;
    }
    /**
     * 
     *
     * @param float|null $puntReturnTouchdowns
     *
     * @return self
     */
    public function setPuntReturnTouchdowns(?float $puntReturnTouchdowns) : self
    {
        $this->puntReturnTouchdowns = $puntReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPuntReturnLong() : ?float
    {
        return $this->puntReturnLong;
    }
    /**
     * 
     *
     * @param float|null $puntReturnLong
     *
     * @return self
     */
    public function setPuntReturnLong(?float $puntReturnLong) : self
    {
        $this->puntReturnLong = $puntReturnLong;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getKickReturns() : ?float
    {
        return $this->kickReturns;
    }
    /**
     * 
     *
     * @param float|null $kickReturns
     *
     * @return self
     */
    public function setKickReturns(?float $kickReturns) : self
    {
        $this->kickReturns = $kickReturns;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getKickReturnYards() : ?float
    {
        return $this->kickReturnYards;
    }
    /**
     * 
     *
     * @param float|null $kickReturnYards
     *
     * @return self
     */
    public function setKickReturnYards(?float $kickReturnYards) : self
    {
        $this->kickReturnYards = $kickReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getKickReturnYardsPerAttempt() : ?float
    {
        return $this->kickReturnYardsPerAttempt;
    }
    /**
     * 
     *
     * @param float|null $kickReturnYardsPerAttempt
     *
     * @return self
     */
    public function setKickReturnYardsPerAttempt(?float $kickReturnYardsPerAttempt) : self
    {
        $this->kickReturnYardsPerAttempt = $kickReturnYardsPerAttempt;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getKickReturnTouchdowns() : ?float
    {
        return $this->kickReturnTouchdowns;
    }
    /**
     * 
     *
     * @param float|null $kickReturnTouchdowns
     *
     * @return self
     */
    public function setKickReturnTouchdowns(?float $kickReturnTouchdowns) : self
    {
        $this->kickReturnTouchdowns = $kickReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getKickReturnLong() : ?float
    {
        return $this->kickReturnLong;
    }
    /**
     * 
     *
     * @param float|null $kickReturnLong
     *
     * @return self
     */
    public function setKickReturnLong(?float $kickReturnLong) : self
    {
        $this->kickReturnLong = $kickReturnLong;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPunts() : ?float
    {
        return $this->punts;
    }
    /**
     * 
     *
     * @param float|null $punts
     *
     * @return self
     */
    public function setPunts(?float $punts) : self
    {
        $this->punts = $punts;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPuntYards() : ?float
    {
        return $this->puntYards;
    }
    /**
     * 
     *
     * @param float|null $puntYards
     *
     * @return self
     */
    public function setPuntYards(?float $puntYards) : self
    {
        $this->puntYards = $puntYards;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPuntAverage() : ?float
    {
        return $this->puntAverage;
    }
    /**
     * 
     *
     * @param float|null $puntAverage
     *
     * @return self
     */
    public function setPuntAverage(?float $puntAverage) : self
    {
        $this->puntAverage = $puntAverage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPuntLong() : ?float
    {
        return $this->puntLong;
    }
    /**
     * 
     *
     * @param float|null $puntLong
     *
     * @return self
     */
    public function setPuntLong(?float $puntLong) : self
    {
        $this->puntLong = $puntLong;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFieldGoalsAttempted() : ?float
    {
        return $this->fieldGoalsAttempted;
    }
    /**
     * 
     *
     * @param float|null $fieldGoalsAttempted
     *
     * @return self
     */
    public function setFieldGoalsAttempted(?float $fieldGoalsAttempted) : self
    {
        $this->fieldGoalsAttempted = $fieldGoalsAttempted;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFieldGoalsMade() : ?float
    {
        return $this->fieldGoalsMade;
    }
    /**
     * 
     *
     * @param float|null $fieldGoalsMade
     *
     * @return self
     */
    public function setFieldGoalsMade(?float $fieldGoalsMade) : self
    {
        $this->fieldGoalsMade = $fieldGoalsMade;
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
    public function getFieldGoalsLongestMade() : ?float
    {
        return $this->fieldGoalsLongestMade;
    }
    /**
     * 
     *
     * @param float|null $fieldGoalsLongestMade
     *
     * @return self
     */
    public function setFieldGoalsLongestMade(?float $fieldGoalsLongestMade) : self
    {
        $this->fieldGoalsLongestMade = $fieldGoalsLongestMade;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getExtraPointsAttempted() : ?float
    {
        return $this->extraPointsAttempted;
    }
    /**
     * 
     *
     * @param float|null $extraPointsAttempted
     *
     * @return self
     */
    public function setExtraPointsAttempted(?float $extraPointsAttempted) : self
    {
        $this->extraPointsAttempted = $extraPointsAttempted;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getExtraPointsMade() : ?float
    {
        return $this->extraPointsMade;
    }
    /**
     * 
     *
     * @param float|null $extraPointsMade
     *
     * @return self
     */
    public function setExtraPointsMade(?float $extraPointsMade) : self
    {
        $this->extraPointsMade = $extraPointsMade;
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
     * @return float|null
     */
    public function getInterceptionReturnYards() : ?float
    {
        return $this->interceptionReturnYards;
    }
    /**
     * 
     *
     * @param float|null $interceptionReturnYards
     *
     * @return self
     */
    public function setInterceptionReturnYards(?float $interceptionReturnYards) : self
    {
        $this->interceptionReturnYards = $interceptionReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getInterceptionReturnTouchdowns() : ?float
    {
        return $this->interceptionReturnTouchdowns;
    }
    /**
     * 
     *
     * @param float|null $interceptionReturnTouchdowns
     *
     * @return self
     */
    public function setInterceptionReturnTouchdowns(?float $interceptionReturnTouchdowns) : self
    {
        $this->interceptionReturnTouchdowns = $interceptionReturnTouchdowns;
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
     * @return float|null
     */
    public function getPassesDefended() : ?float
    {
        return $this->passesDefended;
    }
    /**
     * 
     *
     * @param float|null $passesDefended
     *
     * @return self
     */
    public function setPassesDefended(?float $passesDefended) : self
    {
        $this->passesDefended = $passesDefended;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFumblesRecovered() : ?float
    {
        return $this->fumblesRecovered;
    }
    /**
     * 
     *
     * @param float|null $fumblesRecovered
     *
     * @return self
     */
    public function setFumblesRecovered(?float $fumblesRecovered) : self
    {
        $this->fumblesRecovered = $fumblesRecovered;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFumbleReturnTouchdowns() : ?float
    {
        return $this->fumbleReturnTouchdowns;
    }
    /**
     * 
     *
     * @param float|null $fumbleReturnTouchdowns
     *
     * @return self
     */
    public function setFumbleReturnTouchdowns(?float $fumbleReturnTouchdowns) : self
    {
        $this->fumbleReturnTouchdowns = $fumbleReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getQuarterbackHurries() : ?float
    {
        return $this->quarterbackHurries;
    }
    /**
     * 
     *
     * @param float|null $quarterbackHurries
     *
     * @return self
     */
    public function setQuarterbackHurries(?float $quarterbackHurries) : self
    {
        $this->quarterbackHurries = $quarterbackHurries;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFumbles() : ?float
    {
        return $this->fumbles;
    }
    /**
     * 
     *
     * @param float|null $fumbles
     *
     * @return self
     */
    public function setFumbles(?float $fumbles) : self
    {
        $this->fumbles = $fumbles;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFumblesLost() : ?float
    {
        return $this->fumblesLost;
    }
    /**
     * 
     *
     * @param float|null $fumblesLost
     *
     * @return self
     */
    public function setFumblesLost(?float $fumblesLost) : self
    {
        $this->fumblesLost = $fumblesLost;
        return $this;
    }
}