<?php

namespace Documents;

/** @MongoDB\Document(collection="tenders") */
class Tender
{
    /** 
     * @MongoDB\String 
     */
    private $title;

    /** 
     * @MongoDB\String 
     */
    private $body;
    
    /**
     * @MongoDB\Timestamp
     */
    private $created;

    /** 
     * @EmbedOne(targetDocument="Category") 
     */
 	private $category;

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function setCreated($created)
    {
        $this->created = $created;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }

    public function getCategory()
    {
    	return $this->category;
    }

    public function setCategory($category)
    {
    	$this->category = $category;
    }

    public function __toString()
    {
        return $this->title;
    }
}