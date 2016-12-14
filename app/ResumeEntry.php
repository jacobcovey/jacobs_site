<?php

namespace App;

class ResumeEntry
{
    protected $type;
    protected $organization;
    protected $position;
    protected $city;
    protected $state;
    protected $start_date;
    protected $end_date;
    protected $bullets = array();

    function __construct($type, $organization, $position, $city, $state, $start_date, $end_date){
      // $this->bullets = array();
      $this->type = $type;
      $this->organization = $organization;
      $this->position = $position;
      $this->city = $city;
      $this->state = $state;
      $this->start_date = $start_date;
      $this->end_date = $end_date;
    }

    function addBullet($bullet){
      array_push($this->bullets, $bullet);
    }
    function getBullets(){
      return $this->bullets;
    }

    function getType(){
      return $this->type;
    }
    function getOrganization(){
      return $this->organization;
    }
    function getPosition(){
      return $this->position;
    }
    function getCity(){
      return $this->city;
    }
    function getState(){
      return $this->state;
    }
    function getStartDate(){
      return $this->start_date;
    }
    function getEndDate(){
      return $this->end_date;
    }
}
