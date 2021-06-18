<?php

namespace Sportsdata\API\MMA\Model;

class FighterInfo
{
    /**
     * 
     *
     * @var int|null
     */
    protected $fighterId;
    /**
     * 
     *
     * @var string|null
     */
    protected $firstName;
    /**
     * 
     *
     * @var string|null
     */
    protected $lastName;
    /**
     * 
     *
     * @var int|null
     */
    protected $preFightWins;
    /**
     * 
     *
     * @var int|null
     */
    protected $preFightLosses;
    /**
     * 
     *
     * @var int|null
     */
    protected $preFightDraws;
    /**
     * 
     *
     * @var int|null
     */
    protected $preFightNoContests;
    /**
     * 
     *
     * @var bool|null
     */
    protected $winner;
    /**
     * 
     *
     * @var int|null
     */
    protected $moneyline;
    /**
     * 
     *
     * @var bool|null
     */
    protected $active;
    /**
     * 
     *
     * @return int|null
     */
    public function getFighterId() : ?int
    {
        return $this->fighterId;
    }
    /**
     * 
     *
     * @param int|null $fighterId
     *
     * @return self
     */
    public function setFighterId(?int $fighterId) : self
    {
        $this->fighterId = $fighterId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFirstName() : ?string
    {
        return $this->firstName;
    }
    /**
     * 
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setFirstName(?string $firstName) : self
    {
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLastName() : ?string
    {
        return $this->lastName;
    }
    /**
     * 
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setLastName(?string $lastName) : self
    {
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPreFightWins() : ?int
    {
        return $this->preFightWins;
    }
    /**
     * 
     *
     * @param int|null $preFightWins
     *
     * @return self
     */
    public function setPreFightWins(?int $preFightWins) : self
    {
        $this->preFightWins = $preFightWins;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPreFightLosses() : ?int
    {
        return $this->preFightLosses;
    }
    /**
     * 
     *
     * @param int|null $preFightLosses
     *
     * @return self
     */
    public function setPreFightLosses(?int $preFightLosses) : self
    {
        $this->preFightLosses = $preFightLosses;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPreFightDraws() : ?int
    {
        return $this->preFightDraws;
    }
    /**
     * 
     *
     * @param int|null $preFightDraws
     *
     * @return self
     */
    public function setPreFightDraws(?int $preFightDraws) : self
    {
        $this->preFightDraws = $preFightDraws;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPreFightNoContests() : ?int
    {
        return $this->preFightNoContests;
    }
    /**
     * 
     *
     * @param int|null $preFightNoContests
     *
     * @return self
     */
    public function setPreFightNoContests(?int $preFightNoContests) : self
    {
        $this->preFightNoContests = $preFightNoContests;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getWinner() : ?bool
    {
        return $this->winner;
    }
    /**
     * 
     *
     * @param bool|null $winner
     *
     * @return self
     */
    public function setWinner(?bool $winner) : self
    {
        $this->winner = $winner;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMoneyline() : ?int
    {
        return $this->moneyline;
    }
    /**
     * 
     *
     * @param int|null $moneyline
     *
     * @return self
     */
    public function setMoneyline(?int $moneyline) : self
    {
        $this->moneyline = $moneyline;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getActive() : ?bool
    {
        return $this->active;
    }
    /**
     * 
     *
     * @param bool|null $active
     *
     * @return self
     */
    public function setActive(?bool $active) : self
    {
        $this->active = $active;
        return $this;
    }
}