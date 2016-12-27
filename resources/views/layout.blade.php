
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
      <meta charset="utf-8">
      <title>@yield('pageTitle')</title>
      <link rel = "stylesheet" href="/css/style.css">
      <script type = "text/javascript" src="{{('js/bookreview.js')}}"></script>
    </head>
    <body>
      <div id="header">
        <h1 id="name">Jacob P. Covey</h1>
        <p id="subDesc"> Problem Solver | Programmer | Student of Life </p>
      </div>
      <div id="sideBar">
        <a href="/resume"> @yield('Resume') </a><br>
        <a href="/portfolio"> @yield('Portfolio') </a><br>
        <a href="/book_review"> @yield('BookReview') </a><br>
        <a href="/about"> @yield('About') </a><br>
        <a href="/contact"> @yield('Contact') </a><br>
        <a href="https://www.linkedin.com/pub/jacob-covey/99/788/653" target="_blank" style="text-decoration:none;">
        <span style="font: 80% Arial,sans-serif;">
        <img src="https://static.licdn.com/scds/common/u/img/webpromo/btn_in_20x15.png" width="21" height="15.75" alt="View Jacob Covey's LinkedIn profile" style="vertical-align:middle;" border="0">&nbsp;View profile</span></a>
        <br>
        <a href="https://github.com/jacobcovey" target="_blank">
        <span style="font: 80% Arial,sans-serif;">
          <img src="\img\GitHub-Mark-32px.png" width="20" height="20" alt="View Jacob Covey's Github profile" style="vertical-align:middle;" border="0">&nbsp;View profile</span></a>

      </div>
      <div id="pageContent">
      @yield('content')
    </body>
</html>
