<?php

namespace Sportsdata\API\CFB\Model;

class Team
{
    /**
     * 
     *
     * @var int
     */
    protected $teamID;
    /**
     * 
     *
     * @var string|null
     */
    protected $key;
    /**
     * 
     *
     * @var bool
     */
    protected $active;
    /**
     * 
     *
     * @var string|null
     */
    protected $school;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var int
     */
    protected $stadiumID;
    /**
     * 
     *
     * @var int|null
     */
    protected $apRank;
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
     * @var int
     */
    protected $globalTeamID;
    /**
     * 
     *
     * @var int|null
     */
    protected $coachesRank;
    /**
     * 
     *
     * @var int|null
     */
    protected $playoffRank;
    /**
     * 
     *
     * @var string|null
     */
    protected $teamLogoUrl;
    /**
     * 
     *
     * @var int|null
     */
    protected $conferenceID;
    /**
     * 
     *
     * @var string|null
     */
    protected $conference;
    /**
     * 
     *
     * @var string|null
     */
    protected $shortDisplayName;
    /**
     * 
     *
     * @var int|null
     */
    protected $rankWeek;
    /**
     * 
     *
     * @var int|null
     */
    protected $rankSeason;
    /**
     * 
     *
     * @var int|null
     */
    protected $rankSeasonType;
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
     * @return string|null
     */
    public function getKey() : ?string
    {
        return $this->key;
    }
    /**
     * 
     *
     * @param string|null $key
     *
     * @return self
     */
    public function setKey(?string $key) : self
    {
        $this->key = $key;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getActive() : bool
    {
        return $this->active;
    }
    /**
     * 
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active) : self
    {
        $this->active = $active;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSchool() : ?string
    {
        return $this->school;
    }
    /**
     * 
     *
     * @param string|null $school
     *
     * @return self
     */
    public function setSchool(?string $school) : self
    {
        $this->school = $school;
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
     * @return int|null
     */
    public function getApRank() : ?int
    {
        return $this->apRank;
    }
    /**
     * 
     *
     * @param int|null $apRank
     *
     * @return self
     */
    public function setApRank(?int $apRank) : self
    {
        $this->apRank = $apRank;
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
     * @return int|null
     */
    public function getCoachesRank() : ?int
    {
        return $this->coachesRank;
    }
    /**
     * 
     *
     * @param int|null $coachesRank
     *
     * @return self
     */
    public function setCoachesRank(?int $coachesRank) : self
    {
        $this->coachesRank = $coachesRank;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPlayoffRank() : ?int
    {
        return $this->playoffRank;
    }
    /**
     * 
     *
     * @param int|null $playoffRank
     *
     * @return self
     */
    public function setPlayoffRank(?int $playoffRank) : self
    {
        $this->playoffRank = $playoffRank;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTeamLogoUrl() : ?string
    {
        return $this->teamLogoUrl;
    }
    /**
     * 
     *
     * @param string|null $teamLogoUrl
     *
     * @return self
     */
    public function setTeamLogoUrl(?string $teamLogoUrl) : self
    {
        $this->teamLogoUrl = $teamLogoUrl;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getConferenceID() : ?int
    {
        return $this->conferenceID;
    }
    /**
     * 
     *
     * @param int|null $conferenceID
     *
     * @return self
     */
    public function setConferenceID(?int $conferenceID) : self
    {
        $this->conferenceID = $conferenceID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getConference() : ?string
    {
        return $this->conference;
    }
    /**
     * 
     *
     * @param string|null $conference
     *
     * @return self
     */
    public function setConference(?string $conference) : self
    {
        $this->conference = $conference;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getShortDisplayName() : ?string
    {
        return $this->shortDisplayName;
    }
    /**
     * 
     *
     * @param string|null $shortDisplayName
     *
     * @return self
     */
    public function setShortDisplayName(?string $shortDisplayName) : self
    {
        $this->shortDisplayName = $shortDisplayName;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRankWeek() : ?int
    {
        return $this->rankWeek;
    }
    /**
     * 
     *
     * @param int|null $rankWeek
     *
     * @return self
     */
    public function setRankWeek(?int $rankWeek) : self
    {
        $this->rankWeek = $rankWeek;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRankSeason() : ?int
    {
        return $this->rankSeason;
    }
    /**
     * 
     *
     * @param int|null $rankSeason
     *
     * @return self
     */
    public function setRankSeason(?int $rankSeason) : self
    {
        $this->rankSeason = $rankSeason;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRankSeasonType() : ?int
    {
        return $this->rankSeasonType;
    }
    /**
     * 
     *
     * @param int|null $rankSeasonType
     *
     * @return self
     */
    public function setRankSeasonType(?int $rankSeasonType) : self
    {
        $this->rankSeasonType = $rankSeasonType;
        return $this;
    }
}