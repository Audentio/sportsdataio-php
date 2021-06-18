<?php

namespace Sportsdata\API\NFL\Model;

class News
{
    /**
     * 
     *
     * @var int
     */
    protected $newsID;
    /**
     * 
     *
     * @var string|null
     */
    protected $source;
    /**
     * 
     *
     * @var string|null
     */
    protected $updated;
    /**
     * 
     *
     * @var string|null
     */
    protected $timeAgo;
    /**
     * 
     *
     * @var string|null
     */
    protected $title;
    /**
     * 
     *
     * @var string|null
     */
    protected $content;
    /**
     * 
     *
     * @var string|null
     */
    protected $url;
    /**
     * 
     *
     * @var string|null
     */
    protected $termsOfUse;
    /**
     * 
     *
     * @var string|null
     */
    protected $author;
    /**
     * 
     *
     * @var string|null
     */
    protected $categories;
    /**
     * 
     *
     * @var int|null
     */
    protected $playerID;
    /**
     * 
     *
     * @var int|null
     */
    protected $teamID;
    /**
     * 
     *
     * @var string|null
     */
    protected $team;
    /**
     * 
     *
     * @var int|null
     */
    protected $playerID2;
    /**
     * 
     *
     * @var int|null
     */
    protected $teamID2;
    /**
     * 
     *
     * @var string|null
     */
    protected $team2;
    /**
     * 
     *
     * @var string|null
     */
    protected $originalSource;
    /**
     * 
     *
     * @var string|null
     */
    protected $originalSourceUrl;
    /**
     * 
     *
     * @return int
     */
    public function getNewsID() : int
    {
        return $this->newsID;
    }
    /**
     * 
     *
     * @param int $newsID
     *
     * @return self
     */
    public function setNewsID(int $newsID) : self
    {
        $this->newsID = $newsID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSource() : ?string
    {
        return $this->source;
    }
    /**
     * 
     *
     * @param string|null $source
     *
     * @return self
     */
    public function setSource(?string $source) : self
    {
        $this->source = $source;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUpdated() : ?string
    {
        return $this->updated;
    }
    /**
     * 
     *
     * @param string|null $updated
     *
     * @return self
     */
    public function setUpdated(?string $updated) : self
    {
        $this->updated = $updated;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTimeAgo() : ?string
    {
        return $this->timeAgo;
    }
    /**
     * 
     *
     * @param string|null $timeAgo
     *
     * @return self
     */
    public function setTimeAgo(?string $timeAgo) : self
    {
        $this->timeAgo = $timeAgo;
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
    /**
     * 
     *
     * @return string|null
     */
    public function getContent() : ?string
    {
        return $this->content;
    }
    /**
     * 
     *
     * @param string|null $content
     *
     * @return self
     */
    public function setContent(?string $content) : self
    {
        $this->content = $content;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string|null $url
     *
     * @return self
     */
    public function setUrl(?string $url) : self
    {
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTermsOfUse() : ?string
    {
        return $this->termsOfUse;
    }
    /**
     * 
     *
     * @param string|null $termsOfUse
     *
     * @return self
     */
    public function setTermsOfUse(?string $termsOfUse) : self
    {
        $this->termsOfUse = $termsOfUse;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAuthor() : ?string
    {
        return $this->author;
    }
    /**
     * 
     *
     * @param string|null $author
     *
     * @return self
     */
    public function setAuthor(?string $author) : self
    {
        $this->author = $author;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCategories() : ?string
    {
        return $this->categories;
    }
    /**
     * 
     *
     * @param string|null $categories
     *
     * @return self
     */
    public function setCategories(?string $categories) : self
    {
        $this->categories = $categories;
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
     * @return int|null
     */
    public function getTeamID() : ?int
    {
        return $this->teamID;
    }
    /**
     * 
     *
     * @param int|null $teamID
     *
     * @return self
     */
    public function setTeamID(?int $teamID) : self
    {
        $this->teamID = $teamID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTeam() : ?string
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param string|null $team
     *
     * @return self
     */
    public function setTeam(?string $team) : self
    {
        $this->team = $team;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPlayerID2() : ?int
    {
        return $this->playerID2;
    }
    /**
     * 
     *
     * @param int|null $playerID2
     *
     * @return self
     */
    public function setPlayerID2(?int $playerID2) : self
    {
        $this->playerID2 = $playerID2;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTeamID2() : ?int
    {
        return $this->teamID2;
    }
    /**
     * 
     *
     * @param int|null $teamID2
     *
     * @return self
     */
    public function setTeamID2(?int $teamID2) : self
    {
        $this->teamID2 = $teamID2;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTeam2() : ?string
    {
        return $this->team2;
    }
    /**
     * 
     *
     * @param string|null $team2
     *
     * @return self
     */
    public function setTeam2(?string $team2) : self
    {
        $this->team2 = $team2;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOriginalSource() : ?string
    {
        return $this->originalSource;
    }
    /**
     * 
     *
     * @param string|null $originalSource
     *
     * @return self
     */
    public function setOriginalSource(?string $originalSource) : self
    {
        $this->originalSource = $originalSource;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOriginalSourceUrl() : ?string
    {
        return $this->originalSourceUrl;
    }
    /**
     * 
     *
     * @param string|null $originalSourceUrl
     *
     * @return self
     */
    public function setOriginalSourceUrl(?string $originalSourceUrl) : self
    {
        $this->originalSourceUrl = $originalSourceUrl;
        return $this;
    }
}