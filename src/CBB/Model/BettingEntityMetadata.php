<?php

namespace Sportsdata\API\CBB\Model;

class BettingEntityMetadata
{
    /**
     * 
     *
     * @var int
     */
    protected $recordId;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @return int
     */
    public function getRecordId() : int
    {
        return $this->recordId;
    }
    /**
     * 
     *
     * @param int $recordId
     *
     * @return self
     */
    public function setRecordId(int $recordId) : self
    {
        $this->recordId = $recordId;
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
}