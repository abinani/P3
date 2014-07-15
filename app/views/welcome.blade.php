@extends('_master')

@section('content')
<div class="jumbotron">
    <h2><strong>Welcome to Developer's Best Friend </strong></h2>
    <p> The website houses a variety of utilities that developers can use in their day-to-day work.  </p>
</div>
<div class="panel panel-default">
  <div class="panel-body">
<h3>Lorem Ipsum Generator</h3>
<blockquote>
  <p>In publishing and graphic design, lorem ipsum is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation. Replacing meaningful content that could be distracting with placeholder text may allow viewers to focus on graphic aspects such as font, typography, and page layout.</p>
</blockquote>
<p><a class="btn btn-lg btn-primary" href="loremipsum-generator" role="button">Generate Random Text</a> </p>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-body">
<h3>Random User Generator</h3>
<blockquote>
  <p>Create random user data for your applications. Like Lorem Ipsum, but for people.</p>
</blockquote>
<p> <a class="btn btn-lg btn-primary" href="user-generator" role="button">Generate Random User</a> </p>
  </div>
</div>

@stop
