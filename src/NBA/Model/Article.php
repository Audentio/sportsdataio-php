<?php

namespace Sportsdata\API\NBA\Model;

class Article
{
    /**
     * 
     *
     * @var int
     */
    protected $articleID;
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
     * @var PlayerInfo[]
     */
    protected $players;
    /**
     * 
     *
     * @return int
     */
    public function getArticleID() : int
    {
        return $this->articleID;
    }
    /**
     * 
     *
     * @param int $articleID
     *
     * @return self
     */
    public function setArticleID(int $articleID) : self
    {
        $this->articleID = $articleID;
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
     * @return PlayerInfo[]
     */
    public function getPlayers() : array
    {
        return $this->players;
    }
    /**
     * 
     *
     * @param PlayerInfo[] $players
     *
     * @return self
     */
    public function setPlayers(array $players) : self
    {
        $this->players = $players;
        return $this;
    }
}