<?php

namespace Sportsdata\API\Soccer\Model;

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
     * @var string|null
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
     * @var string|null
     */
    protected $created;
    /**
     * 
     *
     * @var string|null
     */
    protected $updated;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeMoneyLine;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayMoneyLine;
    /**
     * 
     *
     * @var int|null
     */
    protected $drawMoneyLine;
    /**
     * 
     *
     * @var float|null
     */
    protected $homePointSpread;
    /**
     * 
     *
     * @var float|null
     */
    protected $awayPointSpread;
    /**
     * 
     *
     * @var int|null
     */
    protected $homePointSpreadPayout;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayPointSpreadPayout;
    /**
     * 
     *
     * @var float|null
     */
    protected $overUnder;
    /**
     * 
     *
     * @var int|null
     */
    protected $overPayout;
    /**
     * 
     *
     * @var int|null
     */
    protected $underPayout;
    /**
     * 
     *
     * @var int|null
     */
    protected $sportsbookId;
    /**
     * 
     *
     * @var string|null
     */
    protected $sportsbookUrl;
    /**
     * 
     *
     * @var float|null
     */
    protected $homeTeamAsianHandicap;
    /**
     * 
     *
     * @var float|null
     */
    protected $awayTeamAsianHandicap;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeTeamAsianHandicapPayout;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayTeamAsianHandicapPayout;
    /**
     * 
     *
     * @var float|null
     */
    protected $asianTotal;
    /**
     * 
     *
     * @var int|null
     */
    protected $asianTotalOverPayout;
    /**
     * 
     *
     * @var int|null
     */
    protected $asianTotalUnderPayout;
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
     * @return string|null
     */
    public function getSportsbook() : ?string
    {
        return $this->sportsbook;
    }
    /**
     * 
     *
     * @param string|null $sportsbook
     *
     * @return self
     */
    public function setSportsbook(?string $sportsbook) : self
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
     * @return string|null
     */
    public function getCreated() : ?string
    {
        return $this->created;
    }
    /**
     * 
     *
     * @param string|null $created
     *
     * @return self
     */
    public function setCreated(?string $created) : self
    {
        $this->created = $created;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUpdated() : ?string
    {
        return $this->updated;
    }
    /**
     * 
     *
     * @param string|null $updated
     *
     * @return self
     */
    public function setUpdated(?string $updated) : self
    {
        $this->updated = $updated;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeMoneyLine() : ?int
    {
        return $this->homeMoneyLine;
    }
    /**
     * 
     *
     * @param int|null $homeMoneyLine
     *
     * @return self
     */
    public function setHomeMoneyLine(?int $homeMoneyLine) : self
    {
        $this->homeMoneyLine = $homeMoneyLine;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayMoneyLine() : ?int
    {
        return $this->awayMoneyLine;
    }
    /**
     * 
     *
     * @param int|null $awayMoneyLine
     *
     * @return self
     */
    public function setAwayMoneyLine(?int $awayMoneyLine) : self
    {
        $this->awayMoneyLine = $awayMoneyLine;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDrawMoneyLine() : ?int
    {
        return $this->drawMoneyLine;
    }
    /**
     * 
     *
     * @param int|null $drawMoneyLine
     *
     * @return self
     */
    public function setDrawMoneyLine(?int $drawMoneyLine) : self
    {
        $this->drawMoneyLine = $drawMoneyLine;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getHomePointSpread() : ?float
    {
        return $this->homePointSpread;
    }
    /**
     * 
     *
     * @param float|null $homePointSpread
     *
     * @return self
     */
    public function setHomePointSpread(?float $homePointSpread) : self
    {
        $this->homePointSpread = $homePointSpread;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAwayPointSpread() : ?float
    {
        return $this->awayPointSpread;
    }
    /**
     * 
     *
     * @param float|null $awayPointSpread
     *
     * @return self
     */
    public function setAwayPointSpread(?float $awayPointSpread) : self
    {
        $this->awayPointSpread = $awayPointSpread;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomePointSpreadPayout() : ?int
    {
        return $this->homePointSpreadPayout;
    }
    /**
     * 
     *
     * @param int|null $homePointSpreadPayout
     *
     * @return self
     */
    public function setHomePointSpreadPayout(?int $homePointSpreadPayout) : self
    {
        $this->homePointSpreadPayout = $homePointSpreadPayout;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayPointSpreadPayout() : ?int
    {
        return $this->awayPointSpreadPayout;
    }
    /**
     * 
     *
     * @param int|null $awayPointSpreadPayout
     *
     * @return self
     */
    public function setAwayPointSpreadPayout(?int $awayPointSpreadPayout) : self
    {
        $this->awayPointSpreadPayout = $awayPointSpreadPayout;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getOverUnder() : ?float
    {
        return $this->overUnder;
    }
    /**
     * 
     *
     * @param float|null $overUnder
     *
     * @return self
     */
    public function setOverUnder(?float $overUnder) : self
    {
        $this->overUnder = $overUnder;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOverPayout() : ?int
    {
        return $this->overPayout;
    }
    /**
     * 
     *
     * @param int|null $overPayout
     *
     * @return self
     */
    public function setOverPayout(?int $overPayout) : self
    {
        $this->overPayout = $overPayout;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUnderPayout() : ?int
    {
        return $this->underPayout;
    }
    /**
     * 
     *
     * @param int|null $underPayout
     *
     * @return self
     */
    public function setUnderPayout(?int $underPayout) : self
    {
        $this->underPayout = $underPayout;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSportsbookId() : ?int
    {
        return $this->sportsbookId;
    }
    /**
     * 
     *
     * @param int|null $sportsbookId
     *
     * @return self
     */
    public function setSportsbookId(?int $sportsbookId) : self
    {
        $this->sportsbookId = $sportsbookId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSportsbookUrl() : ?string
    {
        return $this->sportsbookUrl;
    }
    /**
     * 
     *
     * @param string|null $sportsbookUrl
     *
     * @return self
     */
    public function setSportsbookUrl(?string $sportsbookUrl) : self
    {
        $this->sportsbookUrl = $sportsbookUrl;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getHomeTeamAsianHandicap() : ?float
    {
        return $this->homeTeamAsianHandicap;
    }
    /**
     * 
     *
     * @param float|null $homeTeamAsianHandicap
     *
     * @return self
     */
    public function setHomeTeamAsianHandicap(?float $homeTeamAsianHandicap) : self
    {
        $this->homeTeamAsianHandicap = $homeTeamAsianHandicap;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAwayTeamAsianHandicap() : ?float
    {
        return $this->awayTeamAsianHandicap;
    }
    /**
     * 
     *
     * @param float|null $awayTeamAsianHandicap
     *
     * @return self
     */
    public function setAwayTeamAsianHandicap(?float $awayTeamAsianHandicap) : self
    {
        $this->awayTeamAsianHandicap = $awayTeamAsianHandicap;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeTeamAsianHandicapPayout() : ?int
    {
        return $this->homeTeamAsianHandicapPayout;
    }
    /**
     * 
     *
     * @param int|null $homeTeamAsianHandicapPayout
     *
     * @return self
     */
    public function setHomeTeamAsianHandicapPayout(?int $homeTeamAsianHandicapPayout) : self
    {
        $this->homeTeamAsianHandicapPayout = $homeTeamAsianHandicapPayout;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayTeamAsianHandicapPayout() : ?int
    {
        return $this->awayTeamAsianHandicapPayout;
    }
    /**
     * 
     *
     * @param int|null $awayTeamAsianHandicapPayout
     *
     * @return self
     */
    public function setAwayTeamAsianHandicapPayout(?int $awayTeamAsianHandicapPayout) : self
    {
        $this->awayTeamAsianHandicapPayout = $awayTeamAsianHandicapPayout;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAsianTotal() : ?float
    {
        return $this->asianTotal;
    }
    /**
     * 
     *
     * @param float|null $asianTotal
     *
     * @return self
     */
    public function setAsianTotal(?float $asianTotal) : self
    {
        $this->asianTotal = $asianTotal;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAsianTotalOverPayout() : ?int
    {
        return $this->asianTotalOverPayout;
    }
    /**
     * 
     *
     * @param int|null $asianTotalOverPayout
     *
     * @return self
     */
    public function setAsianTotalOverPayout(?int $asianTotalOverPayout) : self
    {
        $this->asianTotalOverPayout = $asianTotalOverPayout;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAsianTotalUnderPayout() : ?int
    {
        return $this->asianTotalUnderPayout;
    }
    /**
     * 
     *
     * @param int|null $asianTotalUnderPayout
     *
     * @return self
     */
    public function setAsianTotalUnderPayout(?int $asianTotalUnderPayout) : self
    {
        $this->asianTotalUnderPayout = $asianTotalUnderPayout;
        return $this;
    }
}