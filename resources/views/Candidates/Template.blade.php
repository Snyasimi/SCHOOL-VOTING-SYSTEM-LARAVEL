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


<nav class="navbar is-link is-fixed-top">
    <div class="navbar-brand ">
        
    
            <a href="{{ route('Home')}}" class="navbar-item">
                <img src="{{asset('storage/download.png')}}" alt="Mount Kenya University Logo"  width="130" >
            </a>

        

        <a role="button" class="navbar-burger">
        <span ></span>
        <span ></span>
        <span ></span>
      </a>

    </div>
   
    <div class="container">

        <div class="navbar-menu is-active ">


            <div class="navbar-start">

                <a href="{{ route('Home') }}" class="navbar-item ">Home</a>

                @auth

                    @unless(auth()->user()->Has_voted)
                        <a href="{{ route('Candidate.index')}}" class="navbar-item">Vote</a>
                    @endunless
                    <a href="{{ route('Candidate.create')}}" class="navbar-item">Apply</a>
                @endauth
               

            </div>

           

            
            <div class="navbar-end">
                
                <div class="buttons">
    
                    
                    
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

<footer class="footer has-background-info">
    <div class="content has-text-centered ">
      <p class="has-text-white">
       <strong class="has-text-white">MOUNT KENYA UNIVERSITY E-VOTING</strong>
       <p ><a class="has-text-white" href="#">visit our website</a></p>
       <p ><a class="has-text-white" href="#">Contact Us</a></p>
      </p>
    </div>
  </footer>

</html>