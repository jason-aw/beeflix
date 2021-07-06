<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

    <script src="https://kit.fontawesome.com/004d656762.js" crossorigin="anonymous"></script>
</head>
<body>
  <style>
    .footer {
      background-color: #ffcb05;
    }
  </style>
<nav class="navbar navbar-expand navbar-light" style="background-color: #ffcb05;">
    <a class="navbar-brand" href="{{url('')}}">
    <span>
    <img src="{{Storage::url('images/logo.png')}}" alt="" style="height:5vh" class="align-middle">
      <span class="display-4 align-middle" style="font-size: 24pt;">BeeFlix</span>
    </span>
    </a>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{request()->is('/') ? 'active' : ''}}">
        <a class="nav-link" href="{{url('/')}}">All Genre</a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="viewGenre" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          View By Genre
          </a>
          <div class="dropdown-menu" aria-labelledby="viewGenre">
          <a class="nav-link {{request()->is('genre/1') ? 'active' : ''}}" href="{{url('genre/1')}}">Drama</a>
          <a class="nav-link {{request()->is('genre/2') ? 'active' : ''}}" href="{{url('genre/2')}}">Kids</a>
          <a class="nav-link {{request()->is('genre/3') ? 'active' : ''}}" href="{{url('genre/3')}}">TV Shows</a>
          </div>
      </li>
    </ul>
</nav>
    @yield('content')
    <footer class="footer footer-copyright text-center py-3">
      &copy; 2020 Copyright: <strong>BeeFlix</strong>
      <br>
      Logo from <a href="https://www.freepik.com/vectors/abstract">Abstract vector created by sentavio - www.freepik.com</a>
    </footer>
</body>
</html>