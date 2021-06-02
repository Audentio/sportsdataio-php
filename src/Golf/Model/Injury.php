<?php

namespace Sportsdata\API\Golf\Model;

class Injury
{
    /**
     * 
     *
     * @var int
     */
    protected $injuryID;
    /**
     * 
     *
     * @var int
     */
    protected $playerID;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var bool
     */
    protected $active;
    /**
     * 
     *
     * @var string
     */
    protected $startDate;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var string
     */
    protected $bodyPart;
    /**
     * 
     *
     * @var string
     */
    protected $expectedReturn;
    /**
     * 
     *
     * @return int
     */
    public function getInjuryID() : int
    {
        return $this->injuryID;
    }
    /**
     * 
     *
     * @param int $injuryID
     *
     * @return self
     */
    public function setInjuryID(int $injuryID) : self
    {
        $this->injuryID = $injuryID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPlayerID() : int
    {
        return $this->playerID;
    }
    /**
     * 
     *
     * @param int $playerID
     *
     * @return self
     */
    public function setPlayerID(int $playerID) : self
    {
        $this->playerID = $playerID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
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
    /**
     * 
     *
     * @return string
     */
    public function getStartDate() : string
    {
        return $this->startDate;
    }
    /**
     * 
     *
     * @param string $startDate
     *
     * @return self
     */
    public function setStartDate(string $startDate) : self
    {
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBodyPart() : string
    {
        return $this->bodyPart;
    }
    /**
     * 
     *
     * @param string $bodyPart
     *
     * @return self
     */
    public function setBodyPart(string $bodyPart) : self
    {
        $this->bodyPart = $bodyPart;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getExpectedReturn() : string
    {
        return $this->expectedReturn;
    }
    /**
     * 
     *
     * @param string $expectedReturn
     *
     * @return self
     */
    public function setExpectedReturn(string $expectedReturn) : self
    {
        $this->expectedReturn = $expectedReturn;
        return $this;
    }
}