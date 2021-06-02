<?php

namespace Sportsdata\API\NBA\Model;

class GameOdd
{
    /**
     * 
     *
     * @var int
     */
    protected $gameOddId;
    /**
     * 
     *
     * @var string
     */
    protected $sportsbook;
    /**
     * 
     *
     * @var int
     */
    protected $gameId;
    /**
     * 
     *
     * @var string
     */
    protected $created;
    /**
     * 
     *
     * @var string
     */
    protected $updated;
    /**
     * 
     *
     * @var int
     */
    protected $homeMoneyLine;
    /**
     * 
     *
     * @var int
     */
    protected $awayMoneyLine;
    /**
     * 
     *
     * @var float
     */
    protected $homePointSpread;
    /**
     * 
     *
     * @var float
     */
    protected $awayPointSpread;
    /**
     * 
     *
     * @var int
     */
    protected $homePointSpreadPayout;
    /**
     * 
     *
     * @var int
     */
    protected $awayPointSpreadPayout;
    /**
     * 
     *
     * @var float
     */
    protected $overUnder;
    /**
     * 
     *
     * @var int
     */
    protected $overPayout;
    /**
     * 
     *
     * @var int
     */
    protected $underPayout;
    /**
     * 
     *
     * @var int
     */
    protected $sportsbookId;
    /**
     * 
     *
     * @var string
     */
    protected $oddType;
    /**
     * 
     *
     * @var string
     */
    protected $sportsbookUrl;
    /**
     * 
     *
     * @return int
     */
    public function getGameOddId() : int
    {
        return $this->gameOddId;
    }
    /**
     * 
     *
     * @param int $gameOddId
     *
     * @return self
     */
    public function setGameOddId(int $gameOddId) : self
    {
        $this->gameOddId = $gameOddId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSportsbook() : string
    {
        return $this->sportsbook;
    }
    /**
     * 
     *
     * @param string $sportsbook
     *
     * @return self
     */
    public function setSportsbook(string $sportsbook) : self
    {
        $this->sportsbook = $sportsbook;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGameId() : int
    {
        return $this->gameId;
    }
    /**
     * 
     *
     * @param int $gameId
     *
     * @return self
     */
    public function setGameId(int $gameId) : self
    {
        $this->gameId = $gameId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCreated() : string
    {
        return $this->created;
    }
    /**
     * 
     *
     * @param string $created
     *
     * @return self
     */
    public function setCreated(string $created) : self
    {
        $this->created = $created;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUpdated() : string
    {
        return $this->updated;
    }
    /**
     * 
     *
     * @param string $updated
     *
     * @return self
     */
    public function setUpdated(string $updated) : self
    {
        $this->updated = $updated;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeMoneyLine() : int
    {
        return $this->homeMoneyLine;
    }
    /**
     * 
     *
     * @param int $homeMoneyLine
     *
     * @return self
     */
    public function setHomeMoneyLine(int $homeMoneyLine) : self
    {
        $this->homeMoneyLine = $homeMoneyLine;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayMoneyLine() : int
    {
        return $this->awayMoneyLine;
    }
    /**
     * 
     *
     * @param int $awayMoneyLine
     *
     * @return self
     */
    public function setAwayMoneyLine(int $awayMoneyLine) : self
    {
        $this->awayMoneyLine = $awayMoneyLine;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHomePointSpread() : float
    {
        return $this->homePointSpread;
    }
    /**
     * 
     *
     * @param float $homePointSpread
     *
     * @return self
     */
    public function setHomePointSpread(float $homePointSpread) : self
    {
        $this->homePointSpread = $homePointSpread;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAwayPointSpread() : float
    {
        return $this->awayPointSpread;
    }
    /**
     * 
     *
     * @param float $awayPointSpread
     *
     * @return self
     */
    public function setAwayPointSpread(float $awayPointSpread) : self
    {
        $this->awayPointSpread = $awayPointSpread;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomePointSpreadPayout() : int
    {
        return $this->homePointSpreadPayout;
    }
    /**
     * 
     *
     * @param int $homePointSpreadPayout
     *
     * @return self
     */
    public function setHomePointSpreadPayout(int $homePointSpreadPayout) : self
    {
        $this->homePointSpreadPayout = $homePointSpreadPayout;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayPointSpreadPayout() : int
    {
        return $this->awayPointSpreadPayout;
    }
    /**
     * 
     *
     * @param int $awayPointSpreadPayout
     *
     * @return self
     */
    public function setAwayPointSpreadPayout(int $awayPointSpreadPayout) : self
    {
        $this->awayPointSpreadPayout = $awayPointSpreadPayout;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOverUnder() : float
    {
        return $this->overUnder;
    }
    /**
     * 
     *
     * @param float $overUnder
     *
     * @return self
     */
    public function setOverUnder(float $overUnder) : self
    {
        $this->overUnder = $overUnder;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOverPayout() : int
    {
        return $this->overPayout;
    }
    /**
     * 
     *
     * @param int $overPayout
     *
     * @return self
     */
    public function setOverPayout(int $overPayout) : self
    {
        $this->overPayout = $overPayout;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUnderPayout() : int
    {
        return $this->underPayout;
    }
    /**
     * 
     *
     * @param int $underPayout
     *
     * @return self
     */
    public function setUnderPayout(int $underPayout) : self
    {
        $this->underPayout = $underPayout;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSportsbookId() : int
    {
        return $this->sportsbookId;
    }
    /**
     * 
     *
     * @param int $sportsbookId
     *
     * @return self
     */
    public function setSportsbookId(int $sportsbookId) : self
    {
        $this->sportsbookId = $sportsbookId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOddType() : string
    {
        return $this->oddType;
    }
    /**
     * 
     *
     * @param string $oddType
     *
     * @return self
     */
    public function setOddType(string $oddType) : self
    {
        $this->oddType = $oddType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSportsbookUrl() : string
    {
        return $this->sportsbookUrl;
    }
    /**
     * 
     *
     * @param string $sportsbookUrl
     *
     * @return self
     */
    public function setSportsbookUrl(string $sportsbookUrl) : self
    {
        $this->sportsbookUrl = $sportsbookUrl;
        return $this;
    }
}