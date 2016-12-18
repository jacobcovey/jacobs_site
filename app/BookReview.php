<?php

namespace App;

class BookReview
{
    private $title;
    private $authorFirstName;
    private $authorLastName;
    private $rate;
    private $readMonth;
    private $readYear;
    private $link;
    private $review;
    private $imgPath;
    private $genre;

    function __construct($title,$authorFirstName,$authorLastName,$rate,$readMonth,$readYear,$link,$review,$imgPath,$genre){
      $this->title = $title;
      $this->authorFirstName = $authorFirstName;
      $this->authorLastName = $authorLastName;
      $this->rate = $rate;
      $this->readMonth = $readMonth;
      $this->readYear = $readYear;
      $this->link = $link;
      $this->review = $review;
      $this->imgPath = $imgPath;
      $this->genre = $genre;
    }

    public function isIncluded($filter){
      switch ($this->genre) {
        case "nonfiction":
          if ($filter->getNonfiction() == FALSE){
            return FALSE;
          }
          break;
        case "fiction":
          if ($filter->getFiction() == FALSE){
          return FALSE;
          }
          break;
        case "scifi":
          if ($filter->getScifi() == FALSE || $filter->getFiction() == FALSE){
            return FALSE;
          }
          break;
        case "biography":
          if ($filter->getBiographical() == FALSE || $filter->getNonfiction() == FALSE){
            return FALSE;
          }
          break;
      }
      return TRUE;
    }
    public static function compareByRate($a,$b){
      $aValue = $a->getRate();
      $bValue = $b->getRate();
      if ($aValue == $bValue){
        return 0;
      }
      return ($aValue > $bValue) ? -1 : +1;
    }
    public static function compareByDate($a,$b){
      $aValue = $a->getEndDateValue($a);
      $bValue = $b->getEndDateValue($b);
      if ($aValue == $bValue){
        return 0;
      }
      return ($aValue > $bValue) ? -1 : 1;
    }
    public static function compareByAuthor($a,$b){
      $aValue = $a->getAuthorLastName();
      $bValue = $b->getAuthorLastName();
      if (strcmp($aValue,$bValue) == 0){
        return 0;
      }
      return (strcmp($aValue,$bValue) < 0) ? -1 : 1;
    }
    public static function getEndDateValue($review){
      return $review->getReadYear() + ($review->getReadMonth() * .5);
    }
    public function getTitle(){
      return $this->title;
    }
    public function getAuthorFirstName(){
      return $this->authorFirstName;
    }
    public function getAuthorLastName(){
      return $this->authorLastName;
    }
    public function getRate(){
      return $this->rate;
    }
    public function getReadMonth(){
      return $this->readMonth;
    }
    public function getReadYear(){
      return $this->readYear;
    }
    public function getLink(){
      return $this->link;
    }
    public function getReview(){
      return $this->review;
    }
    public function getImgPath(){
      return $this->imgPath;
    }
    public function getGenre(){
      return $this->genre;
    }
}
