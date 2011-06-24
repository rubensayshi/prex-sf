<?php

namespace Documents;

/** @MongoDB\Document(collection="applications") */
class Application
{
    /** 
     * @MongoDB\String 
     */
    private $solution;
    
    /**
     * @MongoDB\Timestamp
     */
    private $created;

    /** 
     * @EmbedOne(targetDocument="Tender") 
     */
 	private $tender;

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

    public function getSolution()
    {
        return $this->solution;
    }

    public function setSolution($solution)
    {
        $this->solution = $solution;
    }

    public function getTender()
    {
    	return $this->tender;
    }

    public function setTender($tender)
    {
    	$this->tender = $tender;
    }

    public function __toString()
    {
        return $this->title;
    }
}