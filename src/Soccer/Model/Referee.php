<?php

namespace Sportsdata\API\Soccer\Model;

class Referee
{
    /**
     * 
     *
     * @var int
     */
    protected $refereeId;
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
     * @var string|null
     */
    protected $shortName;
    /**
     * 
     *
     * @var string|null
     */
    protected $nationality;
    /**
     * 
     *
     * @return int
     */
    public function getRefereeId() : int
    {
        return $this->refereeId;
    }
    /**
     * 
     *
     * @param int $refereeId
     *
     * @return self
     */
    public function setRefereeId(int $refereeId) : self
    {
        $this->refereeId = $refereeId;
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
     * @return string|null
     */
    public function getShortName() : ?string
    {
        return $this->shortName;
    }
    /**
     * 
     *
     * @param string|null $shortName
     *
     * @return self
     */
    public function setShortName(?string $shortName) : self
    {
        $this->shortName = $shortName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNationality() : ?string
    {
        return $this->nationality;
    }
    /**
     * 
     *
     * @param string|null $nationality
     *
     * @return self
     */
    public function setNationality(?string $nationality) : self
    {
        $this->nationality = $nationality;
        return $this;
    }
}