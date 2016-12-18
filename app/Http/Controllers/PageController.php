<?php

namespace App\Http\Controllers;

use DB;
use App\Resume;
use App\ResumeEntry;
use App\Link;
use App\DateRange;
use App\PortfolioItem;
use App\BookReview;
use App\BookReviewSort;
use Illuminate\Http\Request;

class PageController extends Controller
{
  public function home(){
    $resume = self::loadResumeModelClasses();
    return view('resume_page', compact('resume'));
  }
  public function portfolio(){
    $portfolioItems = self::loadPortfolioModelClasses();
    usort($portfolioItems, array("App\PortfolioItem","cmp_obj"));
    return view('portfolio_page', compact('portfolioItems'));
  }
  public function BookReview(){
    $bookReviews = self::loadBookReviewModelClass();
    usort($bookReviews, array("App\BookReview","compareByRate"));
    return view('book_review_page', compact('bookReviews'));
  }
  public function BookReviewRating(){
    $bookReviews = self::loadBookReviewModelClass();
    usort($bookReviews, array("App\BookReview","compareByRate"));
    $sorting = new BookReviewSort();
    $sorting->setRatingValueToSelected();
    return view('book_review_page', compact('bookReviews'),compact('sorting'));
  }
  public function BookReviewDate(){
    $bookReviews = self::loadBookReviewModelClass();
    usort($bookReviews, array("App\BookReview","compareByDate"));
    $sorting = new BookReviewSort();
    $sorting->setDateValueToSelected();
    return view('book_review_page', compact('bookReviews'),compact('sorting'));
  }
  public function BookReviewAuthor(){
    $bookReviews = self::loadBookReviewModelClass();
    usort($bookReviews, array("App\BookReview","compareByAuthor"));
    $sorting = new BookReviewSort();
    $sorting->setAuthorValueToSelected();
    return view('book_review_page', compact('bookReviews'),compact('sorting'));
  }
  public function about(){
    return view('about_page');
  }
  public function contact(){
    return view('contact_page');
  }


  public static function loadResumeModelClasses(){
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
    return $resume;
  }

  public static function loadPortfolioModelClasses(){
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
    return $portfolioItems;
  }

  public static function loadBookReviewModelClass(){
    $reviews = DB::table('book_reviews')->get();
    $bookReviews = array();
    foreach($reviews as $review){
      $bookReview = new BookReview($review->title,$review->authorFirstName,$review->authorLastName,$review->rating,$review->month,
                                    $review->year,$review->link,$review->review,$review->imgPath,$review->genre);
      array_push($bookReviews,$bookReview);
    }
    return $bookReviews;
  }
}
