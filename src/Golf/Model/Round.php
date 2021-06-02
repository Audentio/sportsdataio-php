<?php

namespace Sportsdata\API\Golf\Model;

class Round
{
    /**
     * 
     *
     * @var int
     */
    protected $tournamentID;
    /**
     * 
     *
     * @var int
     */
    protected $roundID;
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
    protected $day;
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
     * @return int
     */
    public function getRoundID() : int
    {
        return $this->roundID;
    }
    /**
     * 
     *
     * @param int $roundID
     *
     * @return self
     */
    public function setRoundID(int $roundID) : self
    {
        $this->roundID = $roundID;
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
}