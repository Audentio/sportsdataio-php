<?php

namespace Sportsdata\API\NFL\Model;

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
     * @var string|null
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
}