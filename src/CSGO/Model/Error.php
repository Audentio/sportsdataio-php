<?php

namespace Sportsdata\API\CSGO\Model;

class Error
{
    /**
     * 
     *
     * @var string
     */
    protected $message;
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
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->message = $message;
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