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
     * @var string|null
     */
    protected $quarterName;
    /**
     * 
     *
     * @var int|null
     */
    protected $sequence;
    /**
     * 
     *
     * @var int|null
     */
    protected $timeRemainingMinutes;
    /**
     * 
     *
     * @var int|null
     */
    protected $timeRemainingSeconds;
    /**
     * 
     *
     * @var string|null
     */
    protected $playTime;
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
     * @var string|null
     */
    protected $team;
    /**
     * 
     *
     * @var string|null
     */
    protected $opponent;
    /**
     * 
     *
     * @var int|null
     */
    protected $down;
    /**
     * 
     *
     * @var int|null
     */
    protected $distance;
    /**
     * 
     *
     * @var int|null
     */
    protected $yardLine;
    /**
     * 
     *
     * @var string|null
     */
    protected $yardLineTerritory;
    /**
     * 
     *
     * @var int|null
     */
    protected $yardsToEndZone;
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
    /**
     * 
     *
     * @var int|null
     */
    protected $yardsGained;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var bool|null
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
     * @return string|null
     */
    public function getQuarterName() : ?string
    {
        return $this->quarterName;
    }
    /**
     * 
     *
     * @param string|null $quarterName
     *
     * @return self
     */
    public function setQuarterName(?string $quarterName) : self
    {
        $this->quarterName = $quarterName;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSequence() : ?int
    {
        return $this->sequence;
    }
    /**
     * 
     *
     * @param int|null $sequence
     *
     * @return self
     */
    public function setSequence(?int $sequence) : self
    {
        $this->sequence = $sequence;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTimeRemainingMinutes() : ?int
    {
        return $this->timeRemainingMinutes;
    }
    /**
     * 
     *
     * @param int|null $timeRemainingMinutes
     *
     * @return self
     */
    public function setTimeRemainingMinutes(?int $timeRemainingMinutes) : self
    {
        $this->timeRemainingMinutes = $timeRemainingMinutes;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTimeRemainingSeconds() : ?int
    {
        return $this->timeRemainingSeconds;
    }
    /**
     * 
     *
     * @param int|null $timeRemainingSeconds
     *
     * @return self
     */
    public function setTimeRemainingSeconds(?int $timeRemainingSeconds) : self
    {
        $this->timeRemainingSeconds = $timeRemainingSeconds;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPlayTime() : ?string
    {
        return $this->playTime;
    }
    /**
     * 
     *
     * @param string|null $playTime
     *
     * @return self
     */
    public function setPlayTime(?string $playTime) : self
    {
        $this->playTime = $playTime;
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
    public function getOpponent() : ?string
    {
        return $this->opponent;
    }
    /**
     * 
     *
     * @param string|null $opponent
     *
     * @return self
     */
    public function setOpponent(?string $opponent) : self
    {
        $this->opponent = $opponent;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDown() : ?int
    {
        return $this->down;
    }
    /**
     * 
     *
     * @param int|null $down
     *
     * @return self
     */
    public function setDown(?int $down) : self
    {
        $this->down = $down;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDistance() : ?int
    {
        return $this->distance;
    }
    /**
     * 
     *
     * @param int|null $distance
     *
     * @return self
     */
    public function setDistance(?int $distance) : self
    {
        $this->distance = $distance;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getYardLine() : ?int
    {
        return $this->yardLine;
    }
    /**
     * 
     *
     * @param int|null $yardLine
     *
     * @return self
     */
    public function setYardLine(?int $yardLine) : self
    {
        $this->yardLine = $yardLine;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getYardLineTerritory() : ?string
    {
        return $this->yardLineTerritory;
    }
    /**
     * 
     *
     * @param string|null $yardLineTerritory
     *
     * @return self
     */
    public function setYardLineTerritory(?string $yardLineTerritory) : self
    {
        $this->yardLineTerritory = $yardLineTerritory;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getYardsToEndZone() : ?int
    {
        return $this->yardsToEndZone;
    }
    /**
     * 
     *
     * @param int|null $yardsToEndZone
     *
     * @return self
     */
    public function setYardsToEndZone(?int $yardsToEndZone) : self
    {
        $this->yardsToEndZone = $yardsToEndZone;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getYardsGained() : ?int
    {
        return $this->yardsGained;
    }
    /**
     * 
     *
     * @param int|null $yardsGained
     *
     * @return self
     */
    public function setYardsGained(?int $yardsGained) : self
    {
        $this->yardsGained = $yardsGained;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsScoringPlay() : ?bool
    {
        return $this->isScoringPlay;
    }
    /**
     * 
     *
     * @param bool|null $isScoringPlay
     *
     * @return self
     */
    public function setIsScoringPlay(?bool $isScoringPlay) : self
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