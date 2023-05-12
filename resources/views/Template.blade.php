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


<nav class="navbar  is-link is-fixed-top">
    <div class="navbar-brand">
        <a href="#" class="navbar-item">
                <img src="{{asset('storage/images.png')}}" alt="Mount Kenya University Logo"  width="130" >
        </a>
    </div>
   <div class="navbar-menu">
        <div class="navbar-start">
            <a href="#" class="navbar-item ">Home</a>
            <a href="#" class="navbar-item">Vote</a>
            <a href="#" class="navbar-item">Profile</a>
        </div>
        <div class="navbar-end">
            
            <div class="buttons">


                <a class="button is-info">
                  <strong>Sign up</strong>
                </a>

                <a class="button  is-info">
                  <strong>Log in</strong>
                </a>

                <a href="#" class="button is-info">
                    <strong>Logout</strong>
                </a>

              </div>
            </div>

            
        </div>
   </div>
</nav>
<body>
    @yield('content')
</body>
</html>