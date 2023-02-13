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
        
        <div class="header">
            <div class="logo">
                <img src="{{url('storage/logo.png')}}">
            </div>
            <div class="search">
                <form action="{{route('posts.search')}}" method="GET">
                    @csrf
                    <input type="search" name="search">
                    <input type="submit">
                </form>
            </div>
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
        <div class="navbar">
            <div class="home">
                <a href="{{route('posts.index')}}">Home</a>
            </div>

            @auth
            <div class="my_posts">
                <a href="{{route('users.myposts')}}">My posts</a>
            </div>
            @endauth

            <div class="people">
                <a href="{{route('users.index')}}">People</a>
            </div>

            @auth
                <div class="create_post">
                    <a href="{{route('posts.create')}}">Create new post</a>
                </div>
            @endauth
        </div>
        @yield('content')
    </div>
</body>
</html>