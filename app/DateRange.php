<?php

namespace App;

class DateRange
{
      private $startYear;
      private $startMonth;
      private $endYear;
      private $endMonth;
      private $current;

    function __construct($startYear,$startMonth,$endYear,$endMonth){
        $this->startYear = $startYear;
        $this->startMonth = $startMonth;
        $this->endYear = $endYear;
        $this->endMonth = $endMonth;
        if ($endMonth == 13){
          $this->current = TRUE;
        }
        else{
          $this->current = FALSE;
        }
    }
    // public static function presentConstruct($startYear,$startMonth){
    //     $this->startYear = $startYear;
    //     $this->startMonth = $startMonth;
    //     $this->current = TRUE;
    // }

    function toString(){
      if ($this->current == FALSE ){
        $result = $this->getMonthName($this->startMonth) . " " . $this->startYear .
                  " - " . $this->getMonthName($this->endMonth) . " " . $this->endYear;
      }
      else {
        $result = $this->getMonthName($this->startMonth) . " " . $this->startYear . " - " . "Present";
      }
      return $result;
    }

    function getMonthName($num){
      $result;
      switch ($num){
        case 1:
          $result = "Jan";
          break;
        case 2:
          $result = "Feb";
          break;
        case 3:
          $result = "Mar";
          break;
        case 4:
          $result = "Apr";
          break;
        case 5:
          $result = "May";
          break;
        case 6:
          $result = "June";
          break;
        case 7:
          $result = "July";
          break;
        case 8:
          $result = "Aug";
          break;
        case 9:
          $result = "Sept";
          break;
        case 10:
          $result = "Oct";
          break;
        case 11:
          $result = "Nov";
          break;
        case 12:
          $result = "Dec";
          break;
      }
      return $result;
    }

    function getStartYear(){
      return $this->startYear;
    }
    function getStartMonth(){
      return $this->startMonth;
    }
    function getEndYear(){
      return $this->endYear;
    }
    function getEndMonth(){
      return $this->endMonth;
    }
    function isCurrent(){
      return $this->current;
    }
}
