<?php

namespace Sportsdata\API\LOL\Model;

class Match
{
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
    protected $number;
    /**
     * 
     *
     * @var string
     */
    protected $mapName;
    /**
     * 
     *
     * @var int
     */
    protected $winningTeamId;
    /**
     * 
     *
     * @var string
     */
    protected $gameVersion;
    /**
     * 
     *
     * @var MatchBan[]
     */
    protected $matchBans;
    /**
     * 
     *
     * @var PlayerMatch[]
     */
    protected $playerMatches;
    /**
     * 
     *
     * @var TeamMatch[]
     */
    protected $teamMatches;
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
    public function getNumber() : int
    {
        return $this->number;
    }
    /**
     * 
     *
     * @param int $number
     *
     * @return self
     */
    public function setNumber(int $number) : self
    {
        $this->number = $number;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMapName() : string
    {
        return $this->mapName;
    }
    /**
     * 
     *
     * @param string $mapName
     *
     * @return self
     */
    public function setMapName(string $mapName) : self
    {
        $this->mapName = $mapName;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getWinningTeamId() : int
    {
        return $this->winningTeamId;
    }
    /**
     * 
     *
     * @param int $winningTeamId
     *
     * @return self
     */
    public function setWinningTeamId(int $winningTeamId) : self
    {
        $this->winningTeamId = $winningTeamId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGameVersion() : string
    {
        return $this->gameVersion;
    }
    /**
     * 
     *
     * @param string $gameVersion
     *
     * @return self
     */
    public function setGameVersion(string $gameVersion) : self
    {
        $this->gameVersion = $gameVersion;
        return $this;
    }
    /**
     * 
     *
     * @return MatchBan[]
     */
    public function getMatchBans() : array
    {
        return $this->matchBans;
    }
    /**
     * 
     *
     * @param MatchBan[] $matchBans
     *
     * @return self
     */
    public function setMatchBans(array $matchBans) : self
    {
        $this->matchBans = $matchBans;
        return $this;
    }
    /**
     * 
     *
     * @return PlayerMatch[]
     */
    public function getPlayerMatches() : array
    {
        return $this->playerMatches;
    }
    /**
     * 
     *
     * @param PlayerMatch[] $playerMatches
     *
     * @return self
     */
    public function setPlayerMatches(array $playerMatches) : self
    {
        $this->playerMatches = $playerMatches;
        return $this;
    }
    /**
     * 
     *
     * @return TeamMatch[]
     */
    public function getTeamMatches() : array
    {
        return $this->teamMatches;
    }
    /**
     * 
     *
     * @param TeamMatch[] $teamMatches
     *
     * @return self
     */
    public function setTeamMatches(array $teamMatches) : self
    {
        $this->teamMatches = $teamMatches;
        return $this;
    }
}