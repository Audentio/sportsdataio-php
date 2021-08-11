<?php

namespace Sportsdata\API\CBB\Model;

class Error
{
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var int
     */
    protected $code;
    /**
     * 
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCode() : int
    {
        return $this->code;
    }
    /**
     * 
     *
     * @param int $code
     *
     * @return self
     */
    public function setCode(int $code) : self
    {
        $this->code = $code;
        return $this;
    }
}