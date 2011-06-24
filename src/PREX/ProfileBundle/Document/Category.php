<?php

namespace Documents;

/** @Document(collection="categories") */
class Category
{
    /** @String */
    private $title;
    
    /** @EmbedOne(targetDocument="Category") */
 	private $main_category;

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getMainCategory()
    {
    	return $this->main_category;
    }

    public function setMainCategory($category)
    {
    	$this->category = $category;
    }
    
    public function __toString()
    {
        return $this->title;
    }    
}