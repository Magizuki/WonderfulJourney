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
                        @if($Name == 'home' || $Name == 'fullstory' || $Name == 'blogcategory')
                            <li class="nav-item">
                                <a class="nav-link" id="Active-Nav" href="/" >Home</a>
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
                            <li><a class="dropdown-item" href="category/1">Beach</a></li>
                            <li><a class="dropdown-item" href="category/2">Mountain</a></li>
                            <li><a class="dropdown-item" href="category/3">Museum</a></li>
                            <li><a class="dropdown-item" href="category/4">Temple</a></li>
                            <li><a class="dropdown-item" href="category/5">Zoo</a></li>
                            <li><a class="dropdown-item" href="category/6">Lake</a></li>
                            <li><a class="dropdown-item" href="category/7">National Park</a></li>
                            <li><a class="dropdown-item" href="category/8">Waterfall</a></li>
                            <li><a class="dropdown-item" href="category/9">Crater</a></li>
                          </ul>
                        </li>
                        <li class="nav-item">
                            @if ($Name == 'aboutUs')
                                <a class="nav-link" id="Active-Nav" href="/wonderful-world/about-us">About Us</a>
                            @else
                                <a class="nav-link" href="/wonderful-world/about-us">About Us</a>
                            @endif
                            
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                      <div class="d-flex">
                        <li class="nav-item">
                            @if ($Name == 'register')
                                <a class="nav-link" href="/wonderful-world/register" id="Active-Nav">Sign Up</a>
                            @else
                                <a class="nav-link" href="/wonderful-world/register">Sign Up</a>
                            @endif
                            
                        </li>
                        <li class="nav-item">
                            @if ($Name == 'login')
                                <a class="nav-link" href="/wonderful-world/login" id="Active-Nav">Login</a>
                            @else
                                <a class="nav-link" href="/wonderful-world/login">Login</a>
                            @endif
                        </li>
                      </div> 
                    </ul>
                </div>
          </nav>    
        @endguest
        
        @if (Auth::check())
            @if (Auth::user()->role == 'Admin')
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
                            <li class="nav-item">
                                @if($Name == 'greeting')
                                    <li class="nav-item">
                                        <a class="nav-link" id="Active-Nav" href="/greeting" >Home</a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="/greeting">Home</a>
                                    </li>
                                @endif
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="" >Admin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="" >User</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <div class="d-flex">
                                <li class="nav-item">
                                    <a class="nav-link" href="/logout">Logout</a>
                                </li>
                            </div> 
                        </ul>
                    </div>
                </nav>   
            @endif
        @endif

        @if (Auth::check())
            @if (Auth::user()->role == 'User')
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
                            <li class="nav-item">
                                @if($Name == 'greeting')
                                    <li class="nav-item">
                                        <a class="nav-link" id="Active-Nav" href="/greeting" >Home</a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="/greeting">Home</a>
                                    </li>
                                @endif
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="" >Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="" >Blog</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <div class="d-flex">
                                <li class="nav-item">
                                    <a class="nav-link" href="/logout">Logout</a>
                                </li>
                            </div> 
                        </ul>
                    </div>
                </nav>  
            @endif
        @endif

    </div>

    @yield('content')

</body>
</html>