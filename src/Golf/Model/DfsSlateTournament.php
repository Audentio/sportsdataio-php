<?php

namespace Sportsdata\API\Golf\Model;

class DfsSlateTournament
{
    /**
     * 
     *
     * @var int
     */
    protected $slateTournamentID;
    /**
     * 
     *
     * @var int
     */
    protected $slateID;
    /**
     * 
     *
     * @var int
     */
    protected $tournamentID;
    /**
     * 
     *
     * @var Tournament
     */
    protected $tournament;
    /**
     * 
     *
     * @var int
     */
    protected $operatorTournamentID;
    /**
     * 
     *
     * @var bool
     */
    protected $removedByOperator;
    /**
     * 
     *
     * @return int
     */
    public function getSlateTournamentID() : int
    {
        return $this->slateTournamentID;
    }
    /**
     * 
     *
     * @param int $slateTournamentID
     *
     * @return self
     */
    public function setSlateTournamentID(int $slateTournamentID) : self
    {
        $this->slateTournamentID = $slateTournamentID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSlateID() : int
    {
        return $this->slateID;
    }
    /**
     * 
     *
     * @param int $slateID
     *
     * @return self
     */
    public function setSlateID(int $slateID) : self
    {
        $this->slateID = $slateID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTournamentID() : int
    {
        return $this->tournamentID;
    }
    /**
     * 
     *
     * @param int $tournamentID
     *
     * @return self
     */
    public function setTournamentID(int $tournamentID) : self
    {
        $this->tournamentID = $tournamentID;
        return $this;
    }
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
     * @return int
     */
    public function getOperatorTournamentID() : int
    {
        return $this->operatorTournamentID;
    }
    /**
     * 
     *
     * @param int $operatorTournamentID
     *
     * @return self
     */
    public function setOperatorTournamentID(int $operatorTournamentID) : self
    {
        $this->operatorTournamentID = $operatorTournamentID;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getRemovedByOperator() : bool
    {
        return $this->removedByOperator;
    }
    /**
     * 
     *
     * @param bool $removedByOperator
     *
     * @return self
     */
    public function setRemovedByOperator(bool $removedByOperator) : self
    {
        $this->removedByOperator = $removedByOperator;
        return $this;
    }
}