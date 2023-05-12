<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>

<nav class="navbar  is-link  mb-3" >
    <div class="navbar-brand">
        <a href="#" class="navbar-item">
                <img src="{{asset('storage/images.png')}}" alt="Mount Kenya University Logo"  width="130" >
        </a>
    </div>

    <div class="navbar-start">
        <a href="#" class="navbar-item ">Home</a>
        <a href="#" class="navbar-item ">About</a>
    </div>

    <div class="navbar-end">
            
        <div class="buttons">


            <a class="button is-info">
              <strong>Sign up</strong>
            </a>

          </div>
        </div>

        
    </div>
</nav>

<body>
@yield('body')

</body>
</html>