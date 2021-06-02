<?php

namespace Sportsdata\API\NHL\Model;

class PlayerLine
{
    /**
     * 
     *
     * @var int
     */
    protected $lineNumber;
    /**
     * 
     *
     * @var string
     */
    protected $position;
    /**
     * 
     *
     * @var int
     */
    protected $playerID;
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
    protected $shoots;
    /**
     * 
     *
     * @var string
     */
    protected $lineType;
    /**
     * 
     *
     * @return int
     */
    public function getLineNumber() : int
    {
        return $this->lineNumber;
    }
    /**
     * 
     *
     * @param int $lineNumber
     *
     * @return self
     */
    public function setLineNumber(int $lineNumber) : self
    {
        $this->lineNumber = $lineNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPosition() : string
    {
        return $this->position;
    }
    /**
     * 
     *
     * @param string $position
     *
     * @return self
     */
    public function setPosition(string $position) : self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPlayerID() : int
    {
        return $this->playerID;
    }
    /**
     * 
     *
     * @param int $playerID
     *
     * @return self
     */
    public function setPlayerID(int $playerID) : self
    {
        $this->playerID = $playerID;
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
    public function getShoots() : string
    {
        return $this->shoots;
    }
    /**
     * 
     *
     * @param string $shoots
     *
     * @return self
     */
    public function setShoots(string $shoots) : self
    {
        $this->shoots = $shoots;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLineType() : string
    {
        return $this->lineType;
    }
    /**
     * 
     *
     * @param string $lineType
     *
     * @return self
     */
    public function setLineType(string $lineType) : self
    {
        $this->lineType = $lineType;
        return $this;
    }
}