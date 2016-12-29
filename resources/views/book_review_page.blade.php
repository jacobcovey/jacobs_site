@php
use App\Filter;
@endphp
@extends('layout')
@section('pageTitle') Book Review @stop
@section('Resume') Resume @stop
@section('Portfolio') Portfolio @stop
@section('BookReview') <font color="#5288DB">Book Review</font> @stop
@section('About') Welcome @stop
@section('Contact') Contact @stop

@section('content')
@php ($filters = new Filter())

Sort By: <a href="/book_review/rating"><p id="{{$sorting->getRatingValue()}}">Rateing</p></a>&emsp;
<a href="/book_review/date"><p id="{{$sorting->getDateValue()}}">Date Read</p></a> &emsp;
<a href="/book_review/author"><p id="{{$sorting->getAuthorValue()}}">Author</p></a><br>
<!-- Filters: Non-Fiction<label class="switch">
  <input id="nonFictionFilter" type="checkbox" onchange="changeNonfiction();" {{$filters->getNonfictionStatus()}}> <div class="slider round"></div>
  </label>
Fiction<label class="switch">
  <input id="FictionFilter" type="checkbox" onchange="changeFiction();" {{$filters->getFictionStatus()}}> <div class="slider round"></div>
  </label>
Biographical<label class="switch">
  <input id="biographicalFilter" type="checkbox" onchange="changeBiographical();" {{$filters->getBiographicalStatus()}}> <div class="slider round"></div>
  </label>
Sci-fi<label class="switch">
  <input id="scifiFilter" type="checkbox" onchange="changeSciFi();" {{$filters->getScifiStatus()}}> <div class="slider round"></div>
  </label> -->
  @foreach ($bookReviews as $bookReview)
  @if($bookReview->isIncluded($filters))
  <div id="bookReviewItemContainer">
    <a href ="{{$bookReview->getLink()}}" target="_blank"><img src="{{$bookReview->getImgPath()}}" id="book_review_pic"></a>
    <div id="book_review_information">
        <a href ="{{$bookReview->getLink()}}" target="_blank"><p id ="book_review_title"> {{$bookReview->getTitle()}}</p></a><br>
      <p id="book_review_author"> {{$bookReview->getAuthorFirstName()}} {{$bookReview->getAuthorLastName()}}</p><br>
      <p id="book_review_ratingAndDate">RATING: {{$bookReview->getRate()}}/10 READ: {{$bookReview->getReadMonth()}}-{{$bookReview->getReadYear()}}</p><br>
      <p id="book_review_review"> {{$bookReview->getReview()}}</p>
    </div>
  </div>
  @endif
  @endforeach
  @stop
