<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function home(){
    return view('resume_page');
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
