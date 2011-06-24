<?php

namespace Documents;

/** @MongoDB\Document(collection="main_categories") */
class MainCategory
{
    /** @MongoDB\String */
    private $title;

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function __toString()
    {
        return $this->title;
    }
}