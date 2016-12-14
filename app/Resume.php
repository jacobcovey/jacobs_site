<?php

namespace App;

class Resume
{
    protected $experincesArray = array();
    protected $educationArray = array();
    protected $volunteerArray = array();
    protected $skillsAndIntrestsArray = array();

    function __construct(){
      $this->experincesArray = array();
      $this->educationArray = array();
      $this->volunteerArray = array();
      $this->skillsAndIntrestsArray = array();
    }

    function AddToExperiences($experience){
      if ($this->experincesArray == null ){
        $this->experincesArray = array();
      }
      array_push($this->experincesArray,$experience);
    }
    function AddToEducation($education){
      if ($this->educationArray == null ){
        $this->educationArray = array();
      }
      array_push($this->educationArray,$education);
    }
    function AddToVolunteer($volunteer){
      if ($this->volunteerArray == null ){
        $this->volunteerArray = array();
      }
      array_push($this->volunteerArray,$volunteer);
    }
    function AddToSkillsAndIntrests($skill){
      if ($this->skillsAndIntrestsArray == null ){
        $this->skillsAndIntrestsArray = array();
      }
      array_push($this->skillsAndIntrestsArray,$skill);
    }
    function getExperincesArray(){
      return $this->experincesArray;
    }
    function getEducationArray(){
      return $this->educationArray;
    }
    function getVolunteerArray(){
      return $this->volunteerArray;
    }
    function getSkillsAndIntrestsArray(){
      return $this->skillsAndIntrestsArray;
    }
}
