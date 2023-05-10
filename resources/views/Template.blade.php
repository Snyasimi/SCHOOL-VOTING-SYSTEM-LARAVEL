<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Home Page</title>
</head>
<header>
    <h1 class="title is-1 has-text-centered has-background-info has-text-white"> MOUNT KENYA UNIVERSITY VOTING SITE</h1>
</header>


<nav class="navbar  is-info">
   <div class="navbar-menu">
        <div class="navbar-start">
            <a href="#" class="navbar-item">HOME</a>
            <a href="#" class="navbar-item">VOTE</a>
            <a href="#" class="navbar-item">PROFILE</a>
        </div>
        <div class="navbar-end">
            <a href="#" class="navbar-item">Logout</a>
        </div>
   </div>
</nav>
<body>
    @yield('content')
</body>
</html>