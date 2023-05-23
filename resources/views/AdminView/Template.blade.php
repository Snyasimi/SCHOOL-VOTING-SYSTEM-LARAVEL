<!DOCTYPE html>
<html lang="en" class="has-navbar-fixed-top">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

    <style>

.full-height-menu {
    height: 100%;
    display: flex;
    flex-direction: column;
  }

  .menu-list {
    flex: 1;
    overflow-y: auto;
  }

    </style>

    <title>Home Page</title>
</head>
{{-- <header>
    <h1 class="title is-1 has-text-centered has-background-link has-text-white"> MOUNT KENYA UNIVERSITY VOTING SITE</h1>
</header> --}}


<nav class="navbar is-link is-fixed-top">
    <div class="navbar-brand ">
        
        <figure class="image">

            <a href="#" class="navbar-item">
                <img src="{{asset('storage/download.png')}}" alt="Mount Kenya University Logo"  width="130" >
        </a>

        </figure>

    </div>
   
    <div class="container">

        <div class="navbar-menu">
           <div class="container">

            <p class="title is-size-1 has-text-centered has-text-white">
                MOUNT KENYA UNIVERSITY
            </p>

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

<div class="tile is-ancestor full-height-tile">
    
    <div class="tile is-3 box">

        <div class="tile is-parent">

            <div class="tile is-child ">

                <aside class="menu full-height-menu ">

                    <p class="menu-label is-active is-size-4 ">NAVIGATION</p>
            
                    <ul class="menu-list">
                        <li><a href="{{ route('view_candidates') }}">CANDIDATES</a></li>
                        <li><a href="{{ route('Position.create') }}">POSITIONS</a></li>
                        <li><a href="{{ route('view_applications') }}">APPLICATIONS</a></li>
                        <li><a href="{{ route('admin_home') }}">ADMINS</a></li>
                    </ul>
            
                </aside>

            </div>

        </div>

    </div>
    
    @yield('content')

</div>
    


<footer class="footer  ">
    <div class="content has-text-centered ">
      <p class="has-text-info">
       <strong class="has-text-info ">MOUNT KENYA UNIVERSITY E-VOTING</strong>
       <p ><a class="has-text-info" href="#">visit our website</a></p>
       <p ><a class="has-text-info" href="#">Contact Us</a></p>
      </p>
    </div>
</footer>
</body>
</html>