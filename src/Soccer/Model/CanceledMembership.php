<?php

namespace Sportsdata\API\Soccer\Model;

class CanceledMembership
{
    /**
     * 
     *
     * @var int
     */
    protected $canceledMembershipId;
    /**
     * 
     *
     * @var int
     */
    protected $membershipId;
    /**
     * 
     *
     * @var int
     */
    protected $teamId;
    /**
     * 
     *
     * @var int
     */
    protected $playerID;
    /**
     * 
     *
     * @var string|null
     */
    protected $created;
    /**
     * 
     *
     * @return int
     */
    public function getCanceledMembershipId() : int
    {
        return $this->canceledMembershipId;
    }
    /**
     * 
     *
     * @param int $canceledMembershipId
     *
     * @return self
     */
    public function setCanceledMembershipId(int $canceledMembershipId) : self
    {
        $this->canceledMembershipId = $canceledMembershipId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMembershipId() : int
    {
        return $this->membershipId;
    }
    /**
     * 
     *
     * @param int $membershipId
     *
     * @return self
     */
    public function setMembershipId(int $membershipId) : self
    {
        $this->membershipId = $membershipId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTeamId() : int
    {
        return $this->teamId;
    }
    /**
     * 
     *
     * @param int $teamId
     *
     * @return self
     */
    public function setTeamId(int $teamId) : self
    {
        $this->teamId = $teamId;
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
}