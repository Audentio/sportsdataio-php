<?php

namespace Sportsdata\API\LOL\Model;

class ChampionInfo
{
    /**
     * 
     *
     * @var int
     */
    protected $championId;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $title;
    /**
     * 
     *
     * @return int
     */
    public function getChampionId() : int
    {
        return $this->championId;
    }
    /**
     * 
     *
     * @param int $championId
     *
     * @return self
     */
    public function setChampionId(int $championId) : self
    {
        $this->championId = $championId;
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
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title) : self
    {
        $this->title = $title;
        return $this;
    }
}