<?php

namespace App\Http\Controllers;

use DB;
use App\Resume;
use App\ResumeEntry;
use App\Link;
use App\DateRange;
use App\PortfolioItem;
use Illuminate\Http\Request;

class PageController extends Controller
{
  public function home(){
    $resume = new Resume();
    $skills = DB::table('skills_and_intrest')->get();
    $entries = DB::table('resume_entry')->get();
    $entryBullets = DB::table('resume_entry_bullets')->get();

    foreach ($skills as $skill){
      $resume->AddToSkillsAndIntrests($skill->description);
    }
    foreach ($entries as $entry){
      $currentEntry = new ResumeEntry($entry->type,$entry->orginization,$entry->position,$entry->city,
        $entry->state,$entry->start_date,$entry->end_date);
        foreach ($entryBullets as $bullet){
          if ($bullet->event_id == $entry->id){
            $currentEntry->addBullet($bullet->content);
          }
        }
        if ($entry->type == 'education'){
          $resume->AddToEducation($currentEntry);
        }
        else if ($entry->type == 'experience'){
          $resume->AddToExperiences($currentEntry);
        }
        else if ($entry->type == 'service'){
          $resume->AddToVolunteer($currentEntry);
        }
    }

    return view('resume_page', compact('resume'));
  }
  public function portfolio(){
    $items = DB::table('portfolio_items')->get();
    $rawLinks = DB::table('portfolio_links')->get();
    $rawTechnologies = DB::table('portfolio_technologies')->get();
    $portfolioItems = array();
    foreach ($items as $item) {
      $links = array();
      $technologies = array();
      foreach ($rawLinks as $rawlink){
        if ($rawlink->item_id == $item->id){
          $link = new Link($rawlink->type,$rawlink->link);
          array_push($links, $link);
        }
      }
      foreach($rawTechnologies as $rawTech){
        if($rawTech->item_id == $item->id){
          array_push($technologies, $rawTech->title);
        }
      }
      $dateRange = new DateRange($item->startYear, $item->startMonth, $item->endYear, $item->endMonth);
      $portfolioItem = new PortfolioItem($item->title,$item->imgPath,$dateRange,$technologies,$links,$item->descripton,$item->title);
      $portfolioItems = array_values($portfolioItems);
      array_push($portfolioItems,$portfolioItem);
    }
    usort($portfolioItems, array("App\PortfolioItem","cmp_obj"));
    return view('portfolio_page', compact('portfolioItems'));
  }
  public function BookReview(){
    return view('book_review_page');
  }
  public function about(){
    return view('about_page');
  }
  public function contact(){
    return view('contact_page');
  }
}
