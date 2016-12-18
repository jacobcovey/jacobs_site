@extends('layout')
@section('pageTitle') Jacob P. Covey @stop
@section('Resume') <font color="#5288DB">Resume</font> @stop
@section('Portfolio') Portfolio @stop
@section('BookReview') Book Review @stop
@section('About') About @stop
@section('Contact') Contact @stop

@section('content')
<h1> EDUCATION </h1>
<div class="resume_containers">
  @foreach ($resume->getEducationArray() as $entry)
    <div>
      <p id="resume_orginization">{{ $entry->getOrganization()}}</p><br>
      <p id="resume_position"> {{ $entry->getPosition() }}:</p>
      <p id="resume_date"> {{ $entry->getStartDate() }} - {{ $entry->getEndDate() }}</p><br>
      <ul>
      @foreach ($entry->getBullets() as $bullet)
        <li>{{$bullet}}</li>
      @endforeach
    </ul>
    </div>
  @endforeach

</div>
<h1> EXPERIENCE </h1>
<div class="resume_containers">
  @foreach ($resume->getExperincesArray() as $entry)
    <div>
      <p id="resume_orginization"> {{ $entry->getOrganization() }} </p><br>
      <p id="resume_position"> {{ $entry->getPosition() }}:</p>
      <p id="resume_date"> {{ $entry->getStartDate() }} - {{ $entry->getEndDate() }}</p><br>
      <ul>
      @foreach ($entry->getBullets() as $bullet)
        <li>{{$bullet}}</li>
      @endforeach
    </ul>
    </div>
  @endforeach
</div>
<h1> VOLUNTEER SERVICE </h1>
<div class="resume_containers">
  @foreach ($resume->getVolunteerArray() as $entry)
    <div>
      <p id="resume_orginization"> {{ $entry->getOrganization() }} </p><br>
      <p id="resume_position"> {{ $entry->getPosition() }}:</p>
      <p id="resume_date"> {{ $entry->getStartDate() }} - {{ $entry->getEndDate() }}</p><br>
      <ul>
      @foreach ($entry->getBullets() as $bullet)
        <li>{{$bullet}}</li>
      @endforeach
    </ul>
    </div>
  @endforeach
</div>
<h1> SKILLS & INTRESTS </h1>
<div class="resume_containers">
  <ul>
  @foreach ($resume->getSkillsAndIntrestsArray() as $skills)
    <li>{{$skills}}</li>
  @endforeach
  </ul>
</div>
@stop
