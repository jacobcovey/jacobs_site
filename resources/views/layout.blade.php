
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
      <link rel = "stylesheet" href="/css/style.css"
    </head>
    <body>
      <div id="header">
        <h1 id="name">Jacob P. Covey</h1>
        <p id="subDesc"> Problem Solver | Coder | Learner | Personal Finance Geek </p>
      </div>
      <div id="sideBar">
        <a href="/resume"> @yield('Resume') </a><br>
        <a href="/portfolio"> @yield('Portfolio') </a><br>
        <a href="/book_review"> @yield('BookReview') </a><br>
        <a href="/about"> @yield('About') </a><br>
        <a href="/contact"> @yield('Contact') </a><br>
      </div>
      <div id="pageContent">
      @yield('content')
    </div>
    </body>
</html>
