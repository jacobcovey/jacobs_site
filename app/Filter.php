<?php

namespace App;

class Filter
{
    private $nonfiction;
    private $fiction;
    private $biographical;
    private $scifi;

    function __construct(){
        $this->nonfiction = TRUE;
        $this->fiction = TRUE;
        $this->biographical = TRUE;
        $this->scifi = TRUE;
    }

    public function getNonfictionStatus(){
      if ($this->nonfiction == TRUE){
        return "checked";
      }
      else {
        return "unchecked";
      }
    }
    public function getFictionStatus(){
      if ($this->fiction == TRUE){
        return "checked";
      }
      else {
        return "unchecked";
      }
    }
    public function getBiographicalStatus(){
      if ($this->biographical == TRUE){
        return "checked";
      }
      else {
        return "unchecked";
      }
    }
    public function getScifiStatus(){
      if ($this->scifi == TRUE){
        return "checked";
      }
      else {
        return "unchecked";
      }
    }
    function getNonfiction(){
      return $this->nonfiction;
    }
    function getFiction(){
      return $this->fiction;
    }
    function getBiographical(){
      return $this->biographical;
    }
    function getScifi(){
      return $this->scifi;
    }
    function switchNonfiction(){
      if ($this->nonfiction == TRUE){
        $this->nonfiction = FALSE;
      }
      else {
        $this->nonfiction = TRUE;
      }
    }
    function switchFiction(){
      if ($this->fiction == TRUE){
        $this->fiction = FALSE;
      }
      else {
        $this->fiction = TRUE;
      }
    }
    function switchBiographical(){
      if ($this->biographical == TRUE){
        $this->biographical = FALSE;
      }
      else {
        $this->biographical = TRUE;
      }
    }
    function switchScifi(){
      if ($this->scifi == TRUE){
        $this->scifi = FALSE;
      }
      else {
        $this->scifi = TRUE;
      }
    }
}
