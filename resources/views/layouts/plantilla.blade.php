<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

<!-- nav bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand"></a>
  <a class="navbar-brand" href="{{route('home')}}">
    <img src="{{asset('img/LogoAppMini.jpg')}}" width="30" height="30" class="d-inline-block align-top" alt="Logo">
    HOTEL GOLD *****
  </a>


  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      
      <li class="nav-item active">
        <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
      </li>

      <!--dashboard-->
      <li class="nav-item active">
        <a class="nav-link" href="{{route('cool.home')}}">Dashboard <span class="sr-only">(current)</span></a>
      </li>
   
        <!--ROOMS-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Rooms:
          </a>

          <!-- ELEMENTOS DESPLEGABLES -->
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{route('rooms.show')}}">Show</a> 
            <a class="dropdown-item" href="{{route('rooms.create')}}">Create</a>
          </div>
        </li>

        
        <!--RESERVATIONS-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Reservations:
          </a>

          <!-- ELEMENTOS DESPLEGABLES -->
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{route('reservations.show')}}">Show</a> 
            <a class="dropdown-item" href="{{route('reservations.create')}}">Create</a>
          </div>
        </li>
        <!--FIN RESERVATIONS-->

        <!--FIN ROOMS-->
      </ul>
  </div>
</nav>
<!-- FIN nav bar -->


  @yield('content')

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
