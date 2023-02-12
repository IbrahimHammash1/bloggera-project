<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title??'bloggera'}}</title>
</head>
<body>
    <div class="container">
        
        <div class="nav-bar">
            
            @guest
                <p>You are a guest</p>
                <div class="register">
                    <a href="/register">Register</a>
                </div>
                <div class="login">
                    <a href="/login">Login</a>
                </div>
            @endguest

            @auth
                <p>You are a user</p>
                <div class="logout">
                <a href="/logout">Logout</a>
              @endauth

            </div>
        </div>
        @yield('content')
    </div>
</body>
</html>