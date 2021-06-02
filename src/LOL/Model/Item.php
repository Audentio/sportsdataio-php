<?php

namespace Sportsdata\API\LOL\Model;

class Item
{
    /**
     * 
     *
     * @var int
     */
    protected $itemId;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var int
     */
    protected $goldBase;
    /**
     * 
     *
     * @var int
     */
    protected $goldTotal;
    /**
     * 
     *
     * @var int
     */
    protected $goldSell;
    /**
     * 
     *
     * @return int
     */
    public function getItemId() : int
    {
        return $this->itemId;
    }
    /**
     * 
     *
     * @param int $itemId
     *
     * @return self
     */
    public function setItemId(int $itemId) : self
    {
        $this->itemId = $itemId;
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
     * @return int
     */
    public function getGoldBase() : int
    {
        return $this->goldBase;
    }
    /**
     * 
     *
     * @param int $goldBase
     *
     * @return self
     */
    public function setGoldBase(int $goldBase) : self
    {
        $this->goldBase = $goldBase;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGoldTotal() : int
    {
        return $this->goldTotal;
    }
    /**
     * 
     *
     * @param int $goldTotal
     *
     * @return self
     */
    public function setGoldTotal(int $goldTotal) : self
    {
        $this->goldTotal = $goldTotal;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGoldSell() : int
    {
        return $this->goldSell;
    }
    /**
     * 
     *
     * @param int $goldSell
     *
     * @return self
     */
    public function setGoldSell(int $goldSell) : self
    {
        $this->goldSell = $goldSell;
        return $this;
    }
}