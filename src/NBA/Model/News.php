<?php

namespace Sportsdata\API\NBA\Model;

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
     * @var string
     */
    protected $source;
    /**
     * 
     *
     * @var string
     */
    protected $updated;
    /**
     * 
     *
     * @var string
     */
    protected $timeAgo;
    /**
     * 
     *
     * @var string
     */
    protected $title;
    /**
     * 
     *
     * @var string
     */
    protected $content;
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var string
     */
    protected $termsOfUse;
    /**
     * 
     *
     * @var string
     */
    protected $author;
    /**
     * 
     *
     * @var string
     */
    protected $categories;
    /**
     * 
     *
     * @var int
     */
    protected $playerID;
    /**
     * 
     *
     * @var int
     */
    protected $teamID;
    /**
     * 
     *
     * @var string
     */
    protected $team;
    /**
     * 
     *
     * @var int
     */
    protected $playerID2;
    /**
     * 
     *
     * @var int
     */
    protected $teamID2;
    /**
     * 
     *
     * @var string
     */
    protected $team2;
    /**
     * 
     *
     * @var string
     */
    protected $originalSource;
    /**
     * 
     *
     * @var string
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
     * @return string
     */
    public function getSource() : string
    {
        return $this->source;
    }
    /**
     * 
     *
     * @param string $source
     *
     * @return self
     */
    public function setSource(string $source) : self
    {
        $this->source = $source;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUpdated() : string
    {
        return $this->updated;
    }
    /**
     * 
     *
     * @param string $updated
     *
     * @return self
     */
    public function setUpdated(string $updated) : self
    {
        $this->updated = $updated;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTimeAgo() : string
    {
        return $this->timeAgo;
    }
    /**
     * 
     *
     * @param string $timeAgo
     *
     * @return self
     */
    public function setTimeAgo(string $timeAgo) : self
    {
        $this->timeAgo = $timeAgo;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getContent() : string
    {
        return $this->content;
    }
    /**
     * 
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content) : self
    {
        $this->content = $content;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTermsOfUse() : string
    {
        return $this->termsOfUse;
    }
    /**
     * 
     *
     * @param string $termsOfUse
     *
     * @return self
     */
    public function setTermsOfUse(string $termsOfUse) : self
    {
        $this->termsOfUse = $termsOfUse;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAuthor() : string
    {
        return $this->author;
    }
    /**
     * 
     *
     * @param string $author
     *
     * @return self
     */
    public function setAuthor(string $author) : self
    {
        $this->author = $author;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCategories() : string
    {
        return $this->categories;
    }
    /**
     * 
     *
     * @param string $categories
     *
     * @return self
     */
    public function setCategories(string $categories) : self
    {
        $this->categories = $categories;
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
     * @return int
     */
    public function getTeamID() : int
    {
        return $this->teamID;
    }
    /**
     * 
     *
     * @param int $teamID
     *
     * @return self
     */
    public function setTeamID(int $teamID) : self
    {
        $this->teamID = $teamID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTeam() : string
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param string $team
     *
     * @return self
     */
    public function setTeam(string $team) : self
    {
        $this->team = $team;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPlayerID2() : int
    {
        return $this->playerID2;
    }
    /**
     * 
     *
     * @param int $playerID2
     *
     * @return self
     */
    public function setPlayerID2(int $playerID2) : self
    {
        $this->playerID2 = $playerID2;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTeamID2() : int
    {
        return $this->teamID2;
    }
    /**
     * 
     *
     * @param int $teamID2
     *
     * @return self
     */
    public function setTeamID2(int $teamID2) : self
    {
        $this->teamID2 = $teamID2;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTeam2() : string
    {
        return $this->team2;
    }
    /**
     * 
     *
     * @param string $team2
     *
     * @return self
     */
    public function setTeam2(string $team2) : self
    {
        $this->team2 = $team2;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOriginalSource() : string
    {
        return $this->originalSource;
    }
    /**
     * 
     *
     * @param string $originalSource
     *
     * @return self
     */
    public function setOriginalSource(string $originalSource) : self
    {
        $this->originalSource = $originalSource;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOriginalSourceUrl() : string
    {
        return $this->originalSourceUrl;
    }
    /**
     * 
     *
     * @param string $originalSourceUrl
     *
     * @return self
     */
    public function setOriginalSourceUrl(string $originalSourceUrl) : self
    {
        $this->originalSourceUrl = $originalSourceUrl;
        return $this;
    }
}