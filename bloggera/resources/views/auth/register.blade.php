<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>

    <div class="container">
        @auth
        <p>Heloooooooo!</p>
        @endauth
        <form action="{{route('register.store')}}" method="POST">
            @csrf
            <label for="">Name</label>
            <input type="text" name="name">
            <label for="">Email</label>
            <input type="text" name="email">
            <label for="">Password</label>
            <input type="password" name="password">
            <input type="submit">
        </form>
    </div>
</body>
</html>