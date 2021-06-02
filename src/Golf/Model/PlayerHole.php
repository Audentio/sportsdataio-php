<?php

namespace Sportsdata\API\Golf\Model;

class PlayerHole
{
    /**
     * 
     *
     * @var int
     */
    protected $playerRoundID;
    /**
     * 
     *
     * @var int
     */
    protected $number;
    /**
     * 
     *
     * @var int
     */
    protected $par;
    /**
     * 
     *
     * @var int
     */
    protected $score;
    /**
     * 
     *
     * @var int
     */
    protected $toPar;
    /**
     * 
     *
     * @var bool
     */
    protected $holeInOne;
    /**
     * 
     *
     * @var bool
     */
    protected $doubleEagle;
    /**
     * 
     *
     * @var bool
     */
    protected $eagle;
    /**
     * 
     *
     * @var bool
     */
    protected $birdie;
    /**
     * 
     *
     * @var bool
     */
    protected $isPar;
    /**
     * 
     *
     * @var bool
     */
    protected $bogey;
    /**
     * 
     *
     * @var bool
     */
    protected $doubleBogey;
    /**
     * 
     *
     * @var bool
     */
    protected $worseThanDoubleBogey;
    /**
     * 
     *
     * @return int
     */
    public function getPlayerRoundID() : int
    {
        return $this->playerRoundID;
    }
    /**
     * 
     *
     * @param int $playerRoundID
     *
     * @return self
     */
    public function setPlayerRoundID(int $playerRoundID) : self
    {
        $this->playerRoundID = $playerRoundID;
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
     * @return int
     */
    public function getPar() : int
    {
        return $this->par;
    }
    /**
     * 
     *
     * @param int $par
     *
     * @return self
     */
    public function setPar(int $par) : self
    {
        $this->par = $par;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getScore() : int
    {
        return $this->score;
    }
    /**
     * 
     *
     * @param int $score
     *
     * @return self
     */
    public function setScore(int $score) : self
    {
        $this->score = $score;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getToPar() : int
    {
        return $this->toPar;
    }
    /**
     * 
     *
     * @param int $toPar
     *
     * @return self
     */
    public function setToPar(int $toPar) : self
    {
        $this->toPar = $toPar;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHoleInOne() : bool
    {
        return $this->holeInOne;
    }
    /**
     * 
     *
     * @param bool $holeInOne
     *
     * @return self
     */
    public function setHoleInOne(bool $holeInOne) : self
    {
        $this->holeInOne = $holeInOne;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDoubleEagle() : bool
    {
        return $this->doubleEagle;
    }
    /**
     * 
     *
     * @param bool $doubleEagle
     *
     * @return self
     */
    public function setDoubleEagle(bool $doubleEagle) : self
    {
        $this->doubleEagle = $doubleEagle;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getEagle() : bool
    {
        return $this->eagle;
    }
    /**
     * 
     *
     * @param bool $eagle
     *
     * @return self
     */
    public function setEagle(bool $eagle) : self
    {
        $this->eagle = $eagle;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getBirdie() : bool
    {
        return $this->birdie;
    }
    /**
     * 
     *
     * @param bool $birdie
     *
     * @return self
     */
    public function setBirdie(bool $birdie) : self
    {
        $this->birdie = $birdie;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsPar() : bool
    {
        return $this->isPar;
    }
    /**
     * 
     *
     * @param bool $isPar
     *
     * @return self
     */
    public function setIsPar(bool $isPar) : self
    {
        $this->isPar = $isPar;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getBogey() : bool
    {
        return $this->bogey;
    }
    /**
     * 
     *
     * @param bool $bogey
     *
     * @return self
     */
    public function setBogey(bool $bogey) : self
    {
        $this->bogey = $bogey;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDoubleBogey() : bool
    {
        return $this->doubleBogey;
    }
    /**
     * 
     *
     * @param bool $doubleBogey
     *
     * @return self
     */
    public function setDoubleBogey(bool $doubleBogey) : self
    {
        $this->doubleBogey = $doubleBogey;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getWorseThanDoubleBogey() : bool
    {
        return $this->worseThanDoubleBogey;
    }
    /**
     * 
     *
     * @param bool $worseThanDoubleBogey
     *
     * @return self
     */
    public function setWorseThanDoubleBogey(bool $worseThanDoubleBogey) : self
    {
        $this->worseThanDoubleBogey = $worseThanDoubleBogey;
        return $this;
    }
}