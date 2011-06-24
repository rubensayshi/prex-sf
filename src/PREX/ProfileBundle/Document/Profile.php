<?php

namespace Documents;

/** @MongoDB\Document(collection="profiles") */
class Profile
{
    /** 
     * @MongoDB\Id 
     */
    private $id;

    /**
     * @MongoDB\String
     */
    private $firstname;
    
    /** 
     * @EmbedMany(targetDocument="Category")
     */
 	private $categories;
    
    public function getId()
    {
        return $this->id;
    }
    
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }
    
    public function setCategories($categories)
    {
        $this->categories = $categories;
    }
    
    public function addCategory($category)
    {
        $this->categories[] = $category;
    }

    public function getCategories()
    {
        return $this->categories;
    }
}