<!DOCTYPE html>
<html lang="en" class="has-navbar-fixed-top">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Home Page</title>
</head>
{{-- <header>
    <h1 class="title is-1 has-text-centered has-background-link has-text-white"> MOUNT KENYA UNIVERSITY VOTING SITE</h1>
</header> --}}


<nav class="navbar is-link is-fixed-top mb-5">
    <div class="navbar-brand ">
        <a href="#" class="navbar-item">
                <img src="{{asset('storage/images.png')}}" alt="Mount Kenya University Logo"  width="130" >
        </a>
    </div>
   
    <div class="container">

        <div class="navbar-menu">
            <div class="navbar-start">
                <!-- <a href="{{ route('Home') }}" class="navbar-item ">Home</a> -->

                @auth
                <a href="{{ route('Candidate.index')}}" class="navbar-item">Vote</a>
                <a href="{{ route('Candidate.create')}}" class="navbar-item">Apply</a>
                @endauth
               
               

            </div>

            <div class="container">

                <p class="has-text-centered is-family-monospace is-size-2">
                    MOUNT KENYA UNIVERSITY E-VOTING
                </p>

            </div>

            <div class="navbar-end">
                
                <div class="buttons">
    
                    
                    <a href="{{ route('Signup') }}" class="button is-info">
                      <strong>Sign up</strong>
                    </a>
    
                    <a href="{{ route('login')}}"class="button  is-info">
                      <strong>Log in</strong>
                    </a>
                    
                    @auth
                    <a href="{{route('logout')}}" class="button is-info">
                        <strong>Logout</strong>
                    </a>
                    @endauth
    
                  </div>
                </div>
    
                
            </div>
       </div>

    </div>
</nav>
<body class="block">
    @yield('content')
</body>
</html>