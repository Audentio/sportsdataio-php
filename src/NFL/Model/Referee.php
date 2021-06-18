<?php

namespace Sportsdata\API\NFL\Model;

class Referee
{
    /**
     * 
     *
     * @var int
     */
    protected $refereeID;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var int
     */
    protected $number;
    /**
     * 
     *
     * @var string|null
     */
    protected $position;
    /**
     * 
     *
     * @var string|null
     */
    protected $college;
    /**
     * 
     *
     * @var int
     */
    protected $experience;
    /**
     * 
     *
     * @return int
     */
    public function getRefereeID() : int
    {
        return $this->refereeID;
    }
    /**
     * 
     *
     * @param int $refereeID
     *
     * @return self
     */
    public function setRefereeID(int $refereeID) : self
    {
        $this->refereeID = $refereeID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
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
     * @return string|null
     */
    public function getPosition() : ?string
    {
        return $this->position;
    }
    /**
     * 
     *
     * @param string|null $position
     *
     * @return self
     */
    public function setPosition(?string $position) : self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCollege() : ?string
    {
        return $this->college;
    }
    /**
     * 
     *
     * @param string|null $college
     *
     * @return self
     */
    public function setCollege(?string $college) : self
    {
        $this->college = $college;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getExperience() : int
    {
        return $this->experience;
    }
    /**
     * 
     *
     * @param int $experience
     *
     * @return self
     */
    public function setExperience(int $experience) : self
    {
        $this->experience = $experience;
        return $this;
    }
}