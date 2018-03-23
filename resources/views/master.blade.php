<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">

    <title>@yield('title')</title>
  </head>

  <body data-spy="scroll" data-target="#navScrollspy">
    <nav class="navbar bg-dark navbar-dark navbar-expand-sm">
      <div class="container">
      <a href="/" class="navbar-brand">FaceApp</a>
      <button type="button" class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul id="navScrollspy"class="navbar-nav ml-auto">
          @auth
            <li class="nav-item">
              <a href="/uploads" class="nav-link">Uploads</a>
            </li>
            <li class="nav-item">
              <a href="/directory" class="nav-link">Directory</a>
            </li>
            <li class="nav-item">
              <a href="/settings" class="nav-link">Account</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/logout') }}" class="nav-link">Logout</a>
            </li>
          @endauth
          @guest
            <li class="nav-item">
              <a href="{{ url('/login') }}" class="nav-link">Sign In</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/register') }}" class="nav-link">Register</a>
            </li>
          @endguest
        </ul>
      </div>
      </div>
    </nav>
    <div class="container-fluid px-0 test">
        @yield('content')
    </div>

    {{-- Footer --}}
    <div id="footer">
      <footer class="py-5 bg-dark">
        <div class="container">
          <p class="m-0 text-center text-white">Copyright &copy; FaceApp 2018</p>
        </div>
      </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
@yield('javascript')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
