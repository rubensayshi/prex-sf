<?php

namespace Documents;

/** @Document(collection="profiles") */
class Profile
{
    /** 
     * @Id 
     */
    private $id;

    /**
     * @String
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