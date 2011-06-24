<?php

namespace Documents;

/** @MongoDB\Document(collection="users") */
class User
{    
    /** @MongoDB\Id */
    private $id;
    
    /** @MongoDB\String */
    private $drupalId;
    
     /** @MongoDB\String */
    private $username;

    /** @MongoDB\BinDataMD5 */
    private $password;
    
    /** @EmbedOne(targetDocument="Profile") */
    private $profile = array();

    public function getId()
    {
        return $this->id;
    }
    
    public function setDrupalId($drupalId)
    {
        $this->drupalId = $drupalId;
    }

    public function getDrupalId()
    {
        return $this->drupalId;
    }
    
    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setPassword($password)
    {
        $this->password = md5($password);
    }

    public function checkPassword($password)
    {
        return $this->password === md5($password) ? true : false;
    }
    
    public function setProfile($profile)
    {
    	$this->profile = $profile;
    }
    
    public function getProfile()
    {
    	return $this->profile;
    }
}