<?php

namespace Sportsdata\API\LOL\Model;

class MatchBan
{
    /**
     * 
     *
     * @var int
     */
    protected $matchId;
    /**
     * 
     *
     * @var int
     */
    protected $teamId;
    /**
     * 
     *
     * @var int|null
     */
    protected $championId;
    /**
     * 
     *
     * @var ChampionInfo
     */
    protected $champion;
    /**
     * 
     *
     * @return int
     */
    public function getMatchId() : int
    {
        return $this->matchId;
    }
    /**
     * 
     *
     * @param int $matchId
     *
     * @return self
     */
    public function setMatchId(int $matchId) : self
    {
        $this->matchId = $matchId;
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
     * @return int|null
     */
    public function getChampionId() : ?int
    {
        return $this->championId;
    }
    /**
     * 
     *
     * @param int|null $championId
     *
     * @return self
     */
    public function setChampionId(?int $championId) : self
    {
        $this->championId = $championId;
        return $this;
    }
    /**
     * 
     *
     * @return ChampionInfo
     */
    public function getChampion() : ChampionInfo
    {
        return $this->champion;
    }
    /**
     * 
     *
     * @param ChampionInfo $champion
     *
     * @return self
     */
    public function setChampion(ChampionInfo $champion) : self
    {
        $this->champion = $champion;
        return $this;
    }
}