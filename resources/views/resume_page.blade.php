@extends('layout')
@section('pageTitle') Jacob P. Covey @stop
@section('Resume') <font color="#5288DB">Resume</font> @stop
@section('Portfolio') Portfolio @stop
@section('BookReview') Book Review @stop
@section('About') About @stop
@section('Contact') Contact @stop

@section('content')
<h1> EDUCATION </h1>
<div id="education">
  @foreach ($resume->getEducationArray() as $entry)
    <div>
      <p id="orginization"> {{ $entry->getOrganization() }} </p><br>
      <p id="position"> {{ $entry->getPosition() }}:</p>
      <p id="start_date"> {{ $entry->getStartDate() }} - </p>
      <p id="end_date"> {{ $entry->getEndDate() }}</p><br>
      <ul>
      @foreach ($entry->getBullets() as $bullet)
        <li>{{$bullet}}</li>
      @endforeach
    </ul>
    </div>
  @endforeach

</div>
<h1> EXPERIENCE </h1>
<div id="experience">
  @foreach ($resume->getExperincesArray() as $entry)
    <div>
      <p id="orginization"> {{ $entry->getOrganization() }} </p><br>
      <p id="position"> {{ $entry->getPosition() }}:</p>
      <p id="start_date"> {{ $entry->getStartDate() }} - </p>
      <p id="end_date"> {{ $entry->getEndDate() }}</p><br>
      <ul>
      @foreach ($entry->getBullets() as $bullet)
        <li>{{$bullet}}</li>
      @endforeach
    </ul>
    </div>
  @endforeach
</div>
<h1> VOLUNTEER SERVICE </h1>
<div id="volunteerService">
  @foreach ($resume->getVolunteerArray() as $entry)
    <div>
      <p id="orginization"> {{ $entry->getOrganization() }} </p><br>
      <p id="position"> {{ $entry->getPosition() }}:</p>
      <p id="start_date"> {{ $entry->getStartDate() }} - </p>
      <p id="end_date"> {{ $entry->getEndDate() }}</p><br>
      <ul>
      @foreach ($entry->getBullets() as $bullet)
        <li>{{$bullet}}</li>
      @endforeach
    </ul>
    </div>
  @endforeach
</div>
<h1> SKILLS & INTRESTS </h1>
<div id="SkillsAndIntrests">
  <ul>
  @foreach ($resume->getSkillsAndIntrestsArray() as $skills)
    <li>{{$skills}}</li>
  @endforeach
  </ul>
</div>
@stop
