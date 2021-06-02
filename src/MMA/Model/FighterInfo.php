<?php

namespace Sportsdata\API\MMA\Model;

class FighterInfo
{
    /**
     * 
     *
     * @var int
     */
    protected $fighterId;
    /**
     * 
     *
     * @var string
     */
    protected $firstName;
    /**
     * 
     *
     * @var string
     */
    protected $lastName;
    /**
     * 
     *
     * @var int
     */
    protected $preFightWins;
    /**
     * 
     *
     * @var int
     */
    protected $preFightLosses;
    /**
     * 
     *
     * @var int
     */
    protected $preFightDraws;
    /**
     * 
     *
     * @var int
     */
    protected $preFightNoContests;
    /**
     * 
     *
     * @var bool
     */
    protected $winner;
    /**
     * 
     *
     * @var int
     */
    protected $moneyline;
    /**
     * 
     *
     * @var bool
     */
    protected $active;
    /**
     * 
     *
     * @return int
     */
    public function getFighterId() : int
    {
        return $this->fighterId;
    }
    /**
     * 
     *
     * @param int $fighterId
     *
     * @return self
     */
    public function setFighterId(int $fighterId) : self
    {
        $this->fighterId = $fighterId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFirstName() : string
    {
        return $this->firstName;
    }
    /**
     * 
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName) : self
    {
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastName() : string
    {
        return $this->lastName;
    }
    /**
     * 
     *
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(string $lastName) : self
    {
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPreFightWins() : int
    {
        return $this->preFightWins;
    }
    /**
     * 
     *
     * @param int $preFightWins
     *
     * @return self
     */
    public function setPreFightWins(int $preFightWins) : self
    {
        $this->preFightWins = $preFightWins;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPreFightLosses() : int
    {
        return $this->preFightLosses;
    }
    /**
     * 
     *
     * @param int $preFightLosses
     *
     * @return self
     */
    public function setPreFightLosses(int $preFightLosses) : self
    {
        $this->preFightLosses = $preFightLosses;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPreFightDraws() : int
    {
        return $this->preFightDraws;
    }
    /**
     * 
     *
     * @param int $preFightDraws
     *
     * @return self
     */
    public function setPreFightDraws(int $preFightDraws) : self
    {
        $this->preFightDraws = $preFightDraws;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPreFightNoContests() : int
    {
        return $this->preFightNoContests;
    }
    /**
     * 
     *
     * @param int $preFightNoContests
     *
     * @return self
     */
    public function setPreFightNoContests(int $preFightNoContests) : self
    {
        $this->preFightNoContests = $preFightNoContests;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getWinner() : bool
    {
        return $this->winner;
    }
    /**
     * 
     *
     * @param bool $winner
     *
     * @return self
     */
    public function setWinner(bool $winner) : self
    {
        $this->winner = $winner;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMoneyline() : int
    {
        return $this->moneyline;
    }
    /**
     * 
     *
     * @param int $moneyline
     *
     * @return self
     */
    public function setMoneyline(int $moneyline) : self
    {
        $this->moneyline = $moneyline;
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
}