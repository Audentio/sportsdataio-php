<?php

namespace Sportsdata\API\CSGO\Model;

class PlayerGameProjection
{
    /**
     * 
     *
     * @var int|null
     */
    protected $playerId;
    /**
     * 
     *
     * @var int|null
     */
    protected $teamId;
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
    protected $matchName;
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
    protected $gameId;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentId;
    /**
     * 
     *
     * @var string|null
     */
    protected $opponent;
    /**
     * 
     *
     * @var string|null
     */
    protected $day;
    /**
     * 
     *
     * @var string|null
     */
    protected $dateTime;
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
    protected $updatedUtc;
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
    protected $maps;
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
    protected $kills;
    /**
     * 
     *
     * @var float|null
     */
    protected $assists;
    /**
     * 
     *
     * @var float|null
     */
    protected $deaths;
    /**
     * 
     *
     * @var float|null
     */
    protected $headshots;
    /**
     * 
     *
     * @var float|null
     */
    protected $averageDamagePerRound;
    /**
     * 
     *
     * @var float|null
     */
    protected $kast;
    /**
     * 
     *
     * @var float|null
     */
    protected $rating;
    /**
     * 
     *
     * @var float|null
     */
    protected $entryKills;
    /**
     * 
     *
     * @var float|null
     */
    protected $quadKills;
    /**
     * 
     *
     * @var float|null
     */
    protected $aces;
    /**
     * 
     *
     * @var float|null
     */
    protected $clutch1v2s;
    /**
     * 
     *
     * @var float|null
     */
    protected $clutch1v3s;
    /**
     * 
     *
     * @var float|null
     */
    protected $clutch1v4s;
    /**
     * 
     *
     * @var float|null
     */
    protected $clutch1v5s;
    /**
     * 
     *
     * @return int|null
     */
    public function getPlayerId() : ?int
    {
        return $this->playerId;
    }
    /**
     * 
     *
     * @param int|null $playerId
     *
     * @return self
     */
    public function setPlayerId(?int $playerId) : self
    {
        $this->playerId = $playerId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTeamId() : ?int
    {
        return $this->teamId;
    }
    /**
     * 
     *
     * @param int|null $teamId
     *
     * @return self
     */
    public function setTeamId(?int $teamId) : self
    {
        $this->teamId = $teamId;
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
    public function getMatchName() : ?string
    {
        return $this->matchName;
    }
    /**
     * 
     *
     * @param string|null $matchName
     *
     * @return self
     */
    public function setMatchName(?string $matchName) : self
    {
        $this->matchName = $matchName;
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
    public function getGameId() : ?int
    {
        return $this->gameId;
    }
    /**
     * 
     *
     * @param int|null $gameId
     *
     * @return self
     */
    public function setGameId(?int $gameId) : self
    {
        $this->gameId = $gameId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentId() : ?int
    {
        return $this->opponentId;
    }
    /**
     * 
     *
     * @param int|null $opponentId
     *
     * @return self
     */
    public function setOpponentId(?int $opponentId) : self
    {
        $this->opponentId = $opponentId;
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
     * @return string|null
     */
    public function getDay() : ?string
    {
        return $this->day;
    }
    /**
     * 
     *
     * @param string|null $day
     *
     * @return self
     */
    public function setDay(?string $day) : self
    {
        $this->day = $day;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDateTime() : ?string
    {
        return $this->dateTime;
    }
    /**
     * 
     *
     * @param string|null $dateTime
     *
     * @return self
     */
    public function setDateTime(?string $dateTime) : self
    {
        $this->dateTime = $dateTime;
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
    public function getUpdatedUtc() : ?string
    {
        return $this->updatedUtc;
    }
    /**
     * 
     *
     * @param string|null $updatedUtc
     *
     * @return self
     */
    public function setUpdatedUtc(?string $updatedUtc) : self
    {
        $this->updatedUtc = $updatedUtc;
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
    public function getMaps() : ?float
    {
        return $this->maps;
    }
    /**
     * 
     *
     * @param float|null $maps
     *
     * @return self
     */
    public function setMaps(?float $maps) : self
    {
        $this->maps = $maps;
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
    public function getKills() : ?float
    {
        return $this->kills;
    }
    /**
     * 
     *
     * @param float|null $kills
     *
     * @return self
     */
    public function setKills(?float $kills) : self
    {
        $this->kills = $kills;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAssists() : ?float
    {
        return $this->assists;
    }
    /**
     * 
     *
     * @param float|null $assists
     *
     * @return self
     */
    public function setAssists(?float $assists) : self
    {
        $this->assists = $assists;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDeaths() : ?float
    {
        return $this->deaths;
    }
    /**
     * 
     *
     * @param float|null $deaths
     *
     * @return self
     */
    public function setDeaths(?float $deaths) : self
    {
        $this->deaths = $deaths;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getHeadshots() : ?float
    {
        return $this->headshots;
    }
    /**
     * 
     *
     * @param float|null $headshots
     *
     * @return self
     */
    public function setHeadshots(?float $headshots) : self
    {
        $this->headshots = $headshots;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAverageDamagePerRound() : ?float
    {
        return $this->averageDamagePerRound;
    }
    /**
     * 
     *
     * @param float|null $averageDamagePerRound
     *
     * @return self
     */
    public function setAverageDamagePerRound(?float $averageDamagePerRound) : self
    {
        $this->averageDamagePerRound = $averageDamagePerRound;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getKast() : ?float
    {
        return $this->kast;
    }
    /**
     * 
     *
     * @param float|null $kast
     *
     * @return self
     */
    public function setKast(?float $kast) : self
    {
        $this->kast = $kast;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRating() : ?float
    {
        return $this->rating;
    }
    /**
     * 
     *
     * @param float|null $rating
     *
     * @return self
     */
    public function setRating(?float $rating) : self
    {
        $this->rating = $rating;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getEntryKills() : ?float
    {
        return $this->entryKills;
    }
    /**
     * 
     *
     * @param float|null $entryKills
     *
     * @return self
     */
    public function setEntryKills(?float $entryKills) : self
    {
        $this->entryKills = $entryKills;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getQuadKills() : ?float
    {
        return $this->quadKills;
    }
    /**
     * 
     *
     * @param float|null $quadKills
     *
     * @return self
     */
    public function setQuadKills(?float $quadKills) : self
    {
        $this->quadKills = $quadKills;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAces() : ?float
    {
        return $this->aces;
    }
    /**
     * 
     *
     * @param float|null $aces
     *
     * @return self
     */
    public function setAces(?float $aces) : self
    {
        $this->aces = $aces;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getClutch1v2s() : ?float
    {
        return $this->clutch1v2s;
    }
    /**
     * 
     *
     * @param float|null $clutch1v2s
     *
     * @return self
     */
    public function setClutch1v2s(?float $clutch1v2s) : self
    {
        $this->clutch1v2s = $clutch1v2s;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getClutch1v3s() : ?float
    {
        return $this->clutch1v3s;
    }
    /**
     * 
     *
     * @param float|null $clutch1v3s
     *
     * @return self
     */
    public function setClutch1v3s(?float $clutch1v3s) : self
    {
        $this->clutch1v3s = $clutch1v3s;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getClutch1v4s() : ?float
    {
        return $this->clutch1v4s;
    }
    /**
     * 
     *
     * @param float|null $clutch1v4s
     *
     * @return self
     */
    public function setClutch1v4s(?float $clutch1v4s) : self
    {
        $this->clutch1v4s = $clutch1v4s;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getClutch1v5s() : ?float
    {
        return $this->clutch1v5s;
    }
    /**
     * 
     *
     * @param float|null $clutch1v5s
     *
     * @return self
     */
    public function setClutch1v5s(?float $clutch1v5s) : self
    {
        $this->clutch1v5s = $clutch1v5s;
        return $this;
    }
}