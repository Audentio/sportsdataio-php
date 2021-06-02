<?php

namespace Sportsdata\API\MLB\Model;

class Inning
{
    /**
     * 
     *
     * @var int
     */
    protected $inningID;
    /**
     * 
     *
     * @var int
     */
    protected $gameID;
    /**
     * 
     *
     * @var int
     */
    protected $inningNumber;
    /**
     * 
     *
     * @var int
     */
    protected $awayTeamRuns;
    /**
     * 
     *
     * @var int
     */
    protected $homeTeamRuns;
    /**
     * 
     *
     * @return int
     */
    public function getInningID() : int
    {
        return $this->inningID;
    }
    /**
     * 
     *
     * @param int $inningID
     *
     * @return self
     */
    public function setInningID(int $inningID) : self
    {
        $this->inningID = $inningID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGameID() : int
    {
        return $this->gameID;
    }
    /**
     * 
     *
     * @param int $gameID
     *
     * @return self
     */
    public function setGameID(int $gameID) : self
    {
        $this->gameID = $gameID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getInningNumber() : int
    {
        return $this->inningNumber;
    }
    /**
     * 
     *
     * @param int $inningNumber
     *
     * @return self
     */
    public function setInningNumber(int $inningNumber) : self
    {
        $this->inningNumber = $inningNumber;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayTeamRuns() : int
    {
        return $this->awayTeamRuns;
    }
    /**
     * 
     *
     * @param int $awayTeamRuns
     *
     * @return self
     */
    public function setAwayTeamRuns(int $awayTeamRuns) : self
    {
        $this->awayTeamRuns = $awayTeamRuns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeTeamRuns() : int
    {
        return $this->homeTeamRuns;
    }
    /**
     * 
     *
     * @param int $homeTeamRuns
     *
     * @return self
     */
    public function setHomeTeamRuns(int $homeTeamRuns) : self
    {
        $this->homeTeamRuns = $homeTeamRuns;
        return $this;
    }
}