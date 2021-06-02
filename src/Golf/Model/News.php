<?php

namespace Sportsdata\API\Golf\Model;

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
     * @var int
     */
    protected $playerID;
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
    protected $source;
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
    protected $updated;
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