<?php

namespace Sportsdata\API\Soccer\Model;

class Competition
{
    /**
     * 
     *
     * @var int
     */
    protected $competitionId;
    /**
     * 
     *
     * @var int
     */
    protected $areaId;
    /**
     * 
     *
     * @var string
     */
    protected $areaName;
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
    protected $gender;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var string
     */
    protected $format;
    /**
     * 
     *
     * @var Season[]
     */
    protected $seasons;
    /**
     * 
     *
     * @var string
     */
    protected $key;
    /**
     * 
     *
     * @return int
     */
    public function getCompetitionId() : int
    {
        return $this->competitionId;
    }
    /**
     * 
     *
     * @param int $competitionId
     *
     * @return self
     */
    public function setCompetitionId(int $competitionId) : self
    {
        $this->competitionId = $competitionId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAreaId() : int
    {
        return $this->areaId;
    }
    /**
     * 
     *
     * @param int $areaId
     *
     * @return self
     */
    public function setAreaId(int $areaId) : self
    {
        $this->areaId = $areaId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAreaName() : string
    {
        return $this->areaName;
    }
    /**
     * 
     *
     * @param string $areaName
     *
     * @return self
     */
    public function setAreaName(string $areaName) : self
    {
        $this->areaName = $areaName;
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
    public function getGender() : string
    {
        return $this->gender;
    }
    /**
     * 
     *
     * @param string $gender
     *
     * @return self
     */
    public function setGender(string $gender) : self
    {
        $this->gender = $gender;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFormat() : string
    {
        return $this->format;
    }
    /**
     * 
     *
     * @param string $format
     *
     * @return self
     */
    public function setFormat(string $format) : self
    {
        $this->format = $format;
        return $this;
    }
    /**
     * 
     *
     * @return Season[]
     */
    public function getSeasons() : array
    {
        return $this->seasons;
    }
    /**
     * 
     *
     * @param Season[] $seasons
     *
     * @return self
     */
    public function setSeasons(array $seasons) : self
    {
        $this->seasons = $seasons;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKey() : string
    {
        return $this->key;
    }
    /**
     * 
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key) : self
    {
        $this->key = $key;
        return $this;
    }
}