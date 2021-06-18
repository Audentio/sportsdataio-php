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
     * @var string|null
     */
    protected $position;
    /**
     * 
     *
     * @var int|null
     */
    protected $playerID;
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
    protected $shoots;
    /**
     * 
     *
     * @var string|null
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
     * @return string|null
     */
    public function getPosition() : ?string
    {
        return $this->position;
    }
    /**
     * 
     *
     * @param string|null $position
     *
     * @return self
     */
    public function setPosition(?string $position) : self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPlayerID() : ?int
    {
        return $this->playerID;
    }
    /**
     * 
     *
     * @param int|null $playerID
     *
     * @return self
     */
    public function setPlayerID(?int $playerID) : self
    {
        $this->playerID = $playerID;
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
    public function getShoots() : ?string
    {
        return $this->shoots;
    }
    /**
     * 
     *
     * @param string|null $shoots
     *
     * @return self
     */
    public function setShoots(?string $shoots) : self
    {
        $this->shoots = $shoots;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLineType() : ?string
    {
        return $this->lineType;
    }
    /**
     * 
     *
     * @param string|null $lineType
     *
     * @return self
     */
    public function setLineType(?string $lineType) : self
    {
        $this->lineType = $lineType;
        return $this;
    }
}