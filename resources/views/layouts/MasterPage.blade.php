<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- css bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    {{-- js bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <title>@yield('title')</title>

    {{-- css inline --}}
    @yield('CSS_Inline')

    <style>

        #titleheader{
            background-color: rgb(195, 198, 201);
        }

        
        #Active-Nav{
            background-color: black;
            color: white;
        }

        h1{
            text-align: center;
        }

        h5{
            text-align: center;
        }

    </style>

</head>
<body>
    <div class="container-fluid" id="titleheader">
        <br>
        <h1>Wonderful Journey</h1>
        <h5>Blog of Indonesia Tourism</h5>
        <br>
    </div>
    <br>
    <div class="container">
        @guest
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
                        @if($Name == 'home')
                            <li class="nav-item" id="Active-Nav">
                                <a class="nav-link" href="/" >Home</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                        @endif
                        
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Beach</a></li>
                            <li><a class="dropdown-item" href="#">Mountain</a></li>
                            <li><a class="dropdown-item" href="#">Museum</a></li>
                            <li><a class="dropdown-item" href="#">Temple</a></li>
                            <li><a class="dropdown-item" href="#">Zoo</a></li>
                            <li><a class="dropdown-item" href="#">Lake</a></li>
                            <li><a class="dropdown-item" href="#">National Park</a></li>
                            <li><a class="dropdown-item" href="#">Waterfall</a></li>
                            <li><a class="dropdown-item" href="#">Crater</a></li>
                          </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                      <div class="d-flex">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sign Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Login</a>
                        </li>
                      </div> 
                    </ul>
                </div>
          </nav>    
        @endguest


    </div>

    @yield('content')

</body>
</html>