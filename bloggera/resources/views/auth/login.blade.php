<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <div class="container">
        <form action="{{route('login.verify_user')}}" method="post">
            @csrf
            <label for="">Email</label>
            <input type="text" name="email">
            @error('email')
                <p>{{$message}}</p>
            @enderror
            <label for="">Password</label>
            <input type="Password" name="password">
            <input type="submit">
        </form>
    </div>
</body>
</html>