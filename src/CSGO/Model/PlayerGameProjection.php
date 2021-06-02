<?php

namespace Sportsdata\API\CSGO\Model;

class PlayerGameProjection
{
    /**
     * 
     *
     * @var int
     */
    protected $playerId;
    /**
     * 
     *
     * @var int
     */
    protected $teamId;
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
    protected $matchName;
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
    protected $gameId;
    /**
     * 
     *
     * @var int
     */
    protected $opponentId;
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
     * @var string
     */
    protected $updated;
    /**
     * 
     *
     * @var string
     */
    protected $updatedUtc;
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
    protected $maps;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyPoints;
    /**
     * 
     *
     * @var float
     */
    protected $kills;
    /**
     * 
     *
     * @var float
     */
    protected $assists;
    /**
     * 
     *
     * @var float
     */
    protected $deaths;
    /**
     * 
     *
     * @var float
     */
    protected $headshots;
    /**
     * 
     *
     * @var float
     */
    protected $averageDamagePerRound;
    /**
     * 
     *
     * @var float
     */
    protected $kast;
    /**
     * 
     *
     * @var float
     */
    protected $rating;
    /**
     * 
     *
     * @var float
     */
    protected $entryKills;
    /**
     * 
     *
     * @var float
     */
    protected $quadKills;
    /**
     * 
     *
     * @var float
     */
    protected $aces;
    /**
     * 
     *
     * @var float
     */
    protected $clutch1v2s;
    /**
     * 
     *
     * @var float
     */
    protected $clutch1v3s;
    /**
     * 
     *
     * @var float
     */
    protected $clutch1v4s;
    /**
     * 
     *
     * @var float
     */
    protected $clutch1v5s;
    /**
     * 
     *
     * @return int
     */
    public function getPlayerId() : int
    {
        return $this->playerId;
    }
    /**
     * 
     *
     * @param int $playerId
     *
     * @return self
     */
    public function setPlayerId(int $playerId) : self
    {
        $this->playerId = $playerId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTeamId() : int
    {
        return $this->teamId;
    }
    /**
     * 
     *
     * @param int $teamId
     *
     * @return self
     */
    public function setTeamId(int $teamId) : self
    {
        $this->teamId = $teamId;
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
    public function getMatchName() : string
    {
        return $this->matchName;
    }
    /**
     * 
     *
     * @param string $matchName
     *
     * @return self
     */
    public function setMatchName(string $matchName) : self
    {
        $this->matchName = $matchName;
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
    public function getGameId() : int
    {
        return $this->gameId;
    }
    /**
     * 
     *
     * @param int $gameId
     *
     * @return self
     */
    public function setGameId(int $gameId) : self
    {
        $this->gameId = $gameId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentId() : int
    {
        return $this->opponentId;
    }
    /**
     * 
     *
     * @param int $opponentId
     *
     * @return self
     */
    public function setOpponentId(int $opponentId) : self
    {
        $this->opponentId = $opponentId;
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
    public function getUpdatedUtc() : string
    {
        return $this->updatedUtc;
    }
    /**
     * 
     *
     * @param string $updatedUtc
     *
     * @return self
     */
    public function setUpdatedUtc(string $updatedUtc) : self
    {
        $this->updatedUtc = $updatedUtc;
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
    public function getMaps() : float
    {
        return $this->maps;
    }
    /**
     * 
     *
     * @param float $maps
     *
     * @return self
     */
    public function setMaps(float $maps) : self
    {
        $this->maps = $maps;
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
     * @return float
     */
    public function getKills() : float
    {
        return $this->kills;
    }
    /**
     * 
     *
     * @param float $kills
     *
     * @return self
     */
    public function setKills(float $kills) : self
    {
        $this->kills = $kills;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAssists() : float
    {
        return $this->assists;
    }
    /**
     * 
     *
     * @param float $assists
     *
     * @return self
     */
    public function setAssists(float $assists) : self
    {
        $this->assists = $assists;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDeaths() : float
    {
        return $this->deaths;
    }
    /**
     * 
     *
     * @param float $deaths
     *
     * @return self
     */
    public function setDeaths(float $deaths) : self
    {
        $this->deaths = $deaths;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHeadshots() : float
    {
        return $this->headshots;
    }
    /**
     * 
     *
     * @param float $headshots
     *
     * @return self
     */
    public function setHeadshots(float $headshots) : self
    {
        $this->headshots = $headshots;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAverageDamagePerRound() : float
    {
        return $this->averageDamagePerRound;
    }
    /**
     * 
     *
     * @param float $averageDamagePerRound
     *
     * @return self
     */
    public function setAverageDamagePerRound(float $averageDamagePerRound) : self
    {
        $this->averageDamagePerRound = $averageDamagePerRound;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getKast() : float
    {
        return $this->kast;
    }
    /**
     * 
     *
     * @param float $kast
     *
     * @return self
     */
    public function setKast(float $kast) : self
    {
        $this->kast = $kast;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRating() : float
    {
        return $this->rating;
    }
    /**
     * 
     *
     * @param float $rating
     *
     * @return self
     */
    public function setRating(float $rating) : self
    {
        $this->rating = $rating;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getEntryKills() : float
    {
        return $this->entryKills;
    }
    /**
     * 
     *
     * @param float $entryKills
     *
     * @return self
     */
    public function setEntryKills(float $entryKills) : self
    {
        $this->entryKills = $entryKills;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getQuadKills() : float
    {
        return $this->quadKills;
    }
    /**
     * 
     *
     * @param float $quadKills
     *
     * @return self
     */
    public function setQuadKills(float $quadKills) : self
    {
        $this->quadKills = $quadKills;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAces() : float
    {
        return $this->aces;
    }
    /**
     * 
     *
     * @param float $aces
     *
     * @return self
     */
    public function setAces(float $aces) : self
    {
        $this->aces = $aces;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getClutch1v2s() : float
    {
        return $this->clutch1v2s;
    }
    /**
     * 
     *
     * @param float $clutch1v2s
     *
     * @return self
     */
    public function setClutch1v2s(float $clutch1v2s) : self
    {
        $this->clutch1v2s = $clutch1v2s;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getClutch1v3s() : float
    {
        return $this->clutch1v3s;
    }
    /**
     * 
     *
     * @param float $clutch1v3s
     *
     * @return self
     */
    public function setClutch1v3s(float $clutch1v3s) : self
    {
        $this->clutch1v3s = $clutch1v3s;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getClutch1v4s() : float
    {
        return $this->clutch1v4s;
    }
    /**
     * 
     *
     * @param float $clutch1v4s
     *
     * @return self
     */
    public function setClutch1v4s(float $clutch1v4s) : self
    {
        $this->clutch1v4s = $clutch1v4s;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getClutch1v5s() : float
    {
        return $this->clutch1v5s;
    }
    /**
     * 
     *
     * @param float $clutch1v5s
     *
     * @return self
     */
    public function setClutch1v5s(float $clutch1v5s) : self
    {
        $this->clutch1v5s = $clutch1v5s;
        return $this;
    }
}