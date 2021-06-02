<?php

namespace Sportsdata\API\NFL\Model;

class Play
{
    /**
     * 
     *
     * @var int
     */
    protected $playID;
    /**
     * 
     *
     * @var int
     */
    protected $quarterID;
    /**
     * 
     *
     * @var string
     */
    protected $quarterName;
    /**
     * 
     *
     * @var int
     */
    protected $sequence;
    /**
     * 
     *
     * @var int
     */
    protected $timeRemainingMinutes;
    /**
     * 
     *
     * @var int
     */
    protected $timeRemainingSeconds;
    /**
     * 
     *
     * @var string
     */
    protected $playTime;
    /**
     * 
     *
     * @var string
     */
    protected $updated;
    /**
     * 
     *
     * @var string
     */
    protected $created;
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
     * @var int
     */
    protected $down;
    /**
     * 
     *
     * @var int
     */
    protected $distance;
    /**
     * 
     *
     * @var int
     */
    protected $yardLine;
    /**
     * 
     *
     * @var string
     */
    protected $yardLineTerritory;
    /**
     * 
     *
     * @var int
     */
    protected $yardsToEndZone;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var int
     */
    protected $yardsGained;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var bool
     */
    protected $isScoringPlay;
    /**
     * 
     *
     * @var ScoringPlay
     */
    protected $scoringPlay;
    /**
     * 
     *
     * @var PlayStat[]
     */
    protected $playStats;
    /**
     * 
     *
     * @return int
     */
    public function getPlayID() : int
    {
        return $this->playID;
    }
    /**
     * 
     *
     * @param int $playID
     *
     * @return self
     */
    public function setPlayID(int $playID) : self
    {
        $this->playID = $playID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getQuarterID() : int
    {
        return $this->quarterID;
    }
    /**
     * 
     *
     * @param int $quarterID
     *
     * @return self
     */
    public function setQuarterID(int $quarterID) : self
    {
        $this->quarterID = $quarterID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getQuarterName() : string
    {
        return $this->quarterName;
    }
    /**
     * 
     *
     * @param string $quarterName
     *
     * @return self
     */
    public function setQuarterName(string $quarterName) : self
    {
        $this->quarterName = $quarterName;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSequence() : int
    {
        return $this->sequence;
    }
    /**
     * 
     *
     * @param int $sequence
     *
     * @return self
     */
    public function setSequence(int $sequence) : self
    {
        $this->sequence = $sequence;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTimeRemainingMinutes() : int
    {
        return $this->timeRemainingMinutes;
    }
    /**
     * 
     *
     * @param int $timeRemainingMinutes
     *
     * @return self
     */
    public function setTimeRemainingMinutes(int $timeRemainingMinutes) : self
    {
        $this->timeRemainingMinutes = $timeRemainingMinutes;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTimeRemainingSeconds() : int
    {
        return $this->timeRemainingSeconds;
    }
    /**
     * 
     *
     * @param int $timeRemainingSeconds
     *
     * @return self
     */
    public function setTimeRemainingSeconds(int $timeRemainingSeconds) : self
    {
        $this->timeRemainingSeconds = $timeRemainingSeconds;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPlayTime() : string
    {
        return $this->playTime;
    }
    /**
     * 
     *
     * @param string $playTime
     *
     * @return self
     */
    public function setPlayTime(string $playTime) : self
    {
        $this->playTime = $playTime;
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
     * @return string
     */
    public function getCreated() : string
    {
        return $this->created;
    }
    /**
     * 
     *
     * @param string $created
     *
     * @return self
     */
    public function setCreated(string $created) : self
    {
        $this->created = $created;
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
     * @return int
     */
    public function getDown() : int
    {
        return $this->down;
    }
    /**
     * 
     *
     * @param int $down
     *
     * @return self
     */
    public function setDown(int $down) : self
    {
        $this->down = $down;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDistance() : int
    {
        return $this->distance;
    }
    /**
     * 
     *
     * @param int $distance
     *
     * @return self
     */
    public function setDistance(int $distance) : self
    {
        $this->distance = $distance;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getYardLine() : int
    {
        return $this->yardLine;
    }
    /**
     * 
     *
     * @param int $yardLine
     *
     * @return self
     */
    public function setYardLine(int $yardLine) : self
    {
        $this->yardLine = $yardLine;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getYardLineTerritory() : string
    {
        return $this->yardLineTerritory;
    }
    /**
     * 
     *
     * @param string $yardLineTerritory
     *
     * @return self
     */
    public function setYardLineTerritory(string $yardLineTerritory) : self
    {
        $this->yardLineTerritory = $yardLineTerritory;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getYardsToEndZone() : int
    {
        return $this->yardsToEndZone;
    }
    /**
     * 
     *
     * @param int $yardsToEndZone
     *
     * @return self
     */
    public function setYardsToEndZone(int $yardsToEndZone) : self
    {
        $this->yardsToEndZone = $yardsToEndZone;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getYardsGained() : int
    {
        return $this->yardsGained;
    }
    /**
     * 
     *
     * @param int $yardsGained
     *
     * @return self
     */
    public function setYardsGained(int $yardsGained) : self
    {
        $this->yardsGained = $yardsGained;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsScoringPlay() : bool
    {
        return $this->isScoringPlay;
    }
    /**
     * 
     *
     * @param bool $isScoringPlay
     *
     * @return self
     */
    public function setIsScoringPlay(bool $isScoringPlay) : self
    {
        $this->isScoringPlay = $isScoringPlay;
        return $this;
    }
    /**
     * 
     *
     * @return ScoringPlay
     */
    public function getScoringPlay() : ScoringPlay
    {
        return $this->scoringPlay;
    }
    /**
     * 
     *
     * @param ScoringPlay $scoringPlay
     *
     * @return self
     */
    public function setScoringPlay(ScoringPlay $scoringPlay) : self
    {
        $this->scoringPlay = $scoringPlay;
        return $this;
    }
    /**
     * 
     *
     * @return PlayStat[]
     */
    public function getPlayStats() : array
    {
        return $this->playStats;
    }
    /**
     * 
     *
     * @param PlayStat[] $playStats
     *
     * @return self
     */
    public function setPlayStats(array $playStats) : self
    {
        $this->playStats = $playStats;
        return $this;
    }
}