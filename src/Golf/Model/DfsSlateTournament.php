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
     * @var int|null
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
     * @var int|null
     */
    protected $operatorTournamentID;
    /**
     * 
     *
     * @var bool|null
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
     * @return int|null
     */
    public function getTournamentID() : ?int
    {
        return $this->tournamentID;
    }
    /**
     * 
     *
     * @param int|null $tournamentID
     *
     * @return self
     */
    public function setTournamentID(?int $tournamentID) : self
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
     * @return int|null
     */
    public function getOperatorTournamentID() : ?int
    {
        return $this->operatorTournamentID;
    }
    /**
     * 
     *
     * @param int|null $operatorTournamentID
     *
     * @return self
     */
    public function setOperatorTournamentID(?int $operatorTournamentID) : self
    {
        $this->operatorTournamentID = $operatorTournamentID;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getRemovedByOperator() : ?bool
    {
        return $this->removedByOperator;
    }
    /**
     * 
     *
     * @param bool|null $removedByOperator
     *
     * @return self
     */
    public function setRemovedByOperator(?bool $removedByOperator) : self
    {
        $this->removedByOperator = $removedByOperator;
        return $this;
    }
}