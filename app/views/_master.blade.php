<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title',"Developer's Best Friend")</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css" rel="stylesheet">
    @yield('head')

</head>
<body role="document" style="padding-top: 20px;">
    <div class="container" role="main">
      <div class="header">
        <ul class="nav nav-pills ">
          <li><a href="/welcome" class="btn btn-link" role="button">Home</a></li>
        </ul>
      </div>

       @yield('content') 
    </div>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

   @yield('footer') 
</body>
</html>
