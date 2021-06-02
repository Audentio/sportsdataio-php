<?php

namespace Sportsdata\API\Golf\Model;

class Leaderboard
{
    /**
     * 
     *
     * @var Tournament
     */
    protected $tournament;
    /**
     * 
     *
     * @var PlayerTournament[]
     */
    protected $players;
    /**
     * 
     *
     * @return Tournament
     */
    public function getTournament() : Tournament
    {
        return $this->tournament;
    }
    /**
     * 
     *
     * @param Tournament $tournament
     *
     * @return self
     */
    public function setTournament(Tournament $tournament) : self
    {
        $this->tournament = $tournament;
        return $this;
    }
    /**
     * 
     *
     * @return PlayerTournament[]
     */
    public function getPlayers() : array
    {
        return $this->players;
    }
    /**
     * 
     *
     * @param PlayerTournament[] $players
     *
     * @return self
     */
    public function setPlayers(array $players) : self
    {
        $this->players = $players;
        return $this;
    }
}