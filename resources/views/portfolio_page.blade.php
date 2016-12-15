@extends('layout')
@section('pageTitle') Portfolio @stop
@section('Resume') Resume @stop
@section('Portfolio') <font color="#5288DB">Portfolio</font> @stop
@section('BookReview') Book Review @stop
@section('About') About @stop
@section('Contact') Contact @stop

@section('content')
  @foreach ($portfolioItems as $item)
  <div id="portfolioItemContainer">
    <a href ="{{$item->getLinks()[0]->getLink()}}"><img src="{{$item->getImgPath()}}" id="portfolio_Pic"></a>
    <div id="Portfolio_information">
      <p id ="portfolio_title"> {{$item->getTitle()}} </p><br>
      <p id="portfolio_dateRange"> {{$item->getDateRange()->toString()}}</p><br>
      @foreach ($item->getTechnologies() as $technology)
        <p id="portfolio_technologies"> {{$technology}}</p>
      @endforeach
      <br>
      @foreach ($item->getLinks() as $link)
        <a href="{{$link->getLink()}}"> {{$link->getTitle()}} </a>&emsp;
      @endforeach
    </div>
  </div>
  @endforeach
@stop
