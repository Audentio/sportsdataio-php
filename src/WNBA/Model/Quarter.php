<?php

namespace Sportsdata\API\WNBA\Model;

class Quarter
{
    /**
     * 
     *
     * @var int
     */
    protected $quarterID;
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
    protected $number;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayScore;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeScore;
    /**
     * 
     *
     * @return int
     */
    public function getQuarterID() : int
    {
        return $this->quarterID;
    }
    /**
     * 
     *
     * @param int $quarterID
     *
     * @return self
     */
    public function setQuarterID(int $quarterID) : self
    {
        $this->quarterID = $quarterID;
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
     * @return int|null
     */
    public function getAwayScore() : ?int
    {
        return $this->awayScore;
    }
    /**
     * 
     *
     * @param int|null $awayScore
     *
     * @return self
     */
    public function setAwayScore(?int $awayScore) : self
    {
        $this->awayScore = $awayScore;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeScore() : ?int
    {
        return $this->homeScore;
    }
    /**
     * 
     *
     * @param int|null $homeScore
     *
     * @return self
     */
    public function setHomeScore(?int $homeScore) : self
    {
        $this->homeScore = $homeScore;
        return $this;
    }
}