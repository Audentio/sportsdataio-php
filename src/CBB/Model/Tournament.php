<?php

namespace Sportsdata\API\CBB\Model;

class Tournament
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
    protected $season;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $location;
    /**
     * 
     *
     * @var Game[]
     */
    protected $games;
    /**
     * 
     *
     * @var string
     */
    protected $leftTopBracketConference;
    /**
     * 
     *
     * @var string
     */
    protected $leftBottomBracketConference;
    /**
     * 
     *
     * @var string
     */
    protected $rightTopBracketConference;
    /**
     * 
     *
     * @var string
     */
    protected $rightBottomBracketConference;
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
    public function getSeason() : int
    {
        return $this->season;
    }
    /**
     * 
     *
     * @param int $season
     *
     * @return self
     */
    public function setSeason(int $season) : self
    {
        $this->season = $season;
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
     * @return string
     */
    public function getLocation() : string
    {
        return $this->location;
    }
    /**
     * 
     *
     * @param string $location
     *
     * @return self
     */
    public function setLocation(string $location) : self
    {
        $this->location = $location;
        return $this;
    }
    /**
     * 
     *
     * @return Game[]
     */
    public function getGames() : array
    {
        return $this->games;
    }
    /**
     * 
     *
     * @param Game[] $games
     *
     * @return self
     */
    public function setGames(array $games) : self
    {
        $this->games = $games;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLeftTopBracketConference() : string
    {
        return $this->leftTopBracketConference;
    }
    /**
     * 
     *
     * @param string $leftTopBracketConference
     *
     * @return self
     */
    public function setLeftTopBracketConference(string $leftTopBracketConference) : self
    {
        $this->leftTopBracketConference = $leftTopBracketConference;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLeftBottomBracketConference() : string
    {
        return $this->leftBottomBracketConference;
    }
    /**
     * 
     *
     * @param string $leftBottomBracketConference
     *
     * @return self
     */
    public function setLeftBottomBracketConference(string $leftBottomBracketConference) : self
    {
        $this->leftBottomBracketConference = $leftBottomBracketConference;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRightTopBracketConference() : string
    {
        return $this->rightTopBracketConference;
    }
    /**
     * 
     *
     * @param string $rightTopBracketConference
     *
     * @return self
     */
    public function setRightTopBracketConference(string $rightTopBracketConference) : self
    {
        $this->rightTopBracketConference = $rightTopBracketConference;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRightBottomBracketConference() : string
    {
        return $this->rightBottomBracketConference;
    }
    /**
     * 
     *
     * @param string $rightBottomBracketConference
     *
     * @return self
     */
    public function setRightBottomBracketConference(string $rightBottomBracketConference) : self
    {
        $this->rightBottomBracketConference = $rightBottomBracketConference;
        return $this;
    }
}