<?php

namespace App;

class PortfolioItem
{
    private $title;
    private $imgPath;
    private $dateRange;
    private $technologies = array();
    private $links = array();
    private $description;
    private $type;

    function __construct($title, $imgPath, $dateRange, $technologies, $links, $description, $type){

        $this->title = $title;
        $this->imgPath = $imgPath;
        $this->dateRange = $dateRange;
        $this->technologies = $technologies;
        $this->links = $links;
        $this->description = $description;
        $this->type = $type;
    }
    // public static function withoutLinks($title, $imgPath, $dateRange, $technologies, $description, $type){
    //     $this->title = $title;
    //     $this->imgPath = $imgPath;
    //     $this->dateRange = $dateRange;
    //     $this->technologies = $technologies;
    //     $this->description = $description;
    //     $this->type = $type;
    // }
    public static function cmp_obj($a,$b){
      $aValue = $a->getEndDateValue($a);
      $bValue = $b->getEndDateValue($b);
      if ($aValue == $bValue){
        return 0;
      }
      return ($aValue > $bValue) ? -1 : +1;
    }
    public static function getEndDateValue($item){
      if ($item->getDateRange()->isCurrent()){
        return 9999;
      }
      return $item->getDateRange()->getEndYear() + ($item->getDateRange()->getEndMonth() * .5);
    }
    function getTitle(){
      return $this->title;
    }
    function getImgPath(){
      return $this->imgPath;
    }
    function getDateRange(){
      return $this->dateRange;
    }
    public function getTechnologies(){
      return $this->technologies;
    }
    function getLinks(){
      return $this->links;
    }
    function getDescription(){
      return $this->description;
    }
    function getType(){
      return $this->type;
    }
}
