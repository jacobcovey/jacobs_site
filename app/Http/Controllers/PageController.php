<?php

namespace App\Http\Controllers;

use DB;
use App\Resume;
use App\ResumeEntry;
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
    return view('portfolio_page');
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
