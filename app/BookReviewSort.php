<?php

namespace App;

class BookReviewSort
{
    private $ratingValue;
    private $dateValue;
    private $authorValue;

    public function __construct(){
        $this->ratingValue = "";
        $this->dateValue = "";
        $this->authorValue = "";
    }

    public function setRatingValueToSelected(){
      $this->ratingValue = "book_review_sort";
    }
    public function setDateValueToSelected(){
      $this->dateValue = "book_review_sort";
    }
    public function setAuthorValueToSelected(){
      $this->authorValue = "book_review_sort";
    }
    public function getRatingValue(){
      return $this->ratingValue;
    }
    public function getDateValue(){
      return $this->dateValue;
    }
    public function getAuthorValue(){
      return $this->authorValue;
    }
}
