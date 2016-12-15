<?php

namespace App;

class Link
{
    private $title;
    private $link;

    function __construct($title,$link){
        $this->title = $title;
        $this->link = $link;
    }

    function getTitle(){
      return $this->title;
    }
    function getLink(){
      return $this->link;
    }
}
