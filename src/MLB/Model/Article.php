<?php

namespace Sportsdata\API\MLB\Model;

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
     * @var string|null
     */
    protected $title;
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