<!DOCTYPE html>
<html>

<head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="/css/lstyle.css">

</head>

<body>
    <div class="signup-box">
        <h1>Sign Up</h1>
        <form action="{{ route('auth.save') }}" method="post">
            @csrf
            @if(session('error'))<p class="error">{{session('error')}}</p> @endif

            <p>Name</p>
            <input required type="text" name="name" placeholder="">
            @error('name') <p class="error">{{$message}}</p> @enderror
            <p>Age</p>
            <input required type="text" name="age" placeholder="">
            @error('age') <p class="error">{{$message}}</p> @enderror
            <p>Email</p>
            <input required type="email" name="email" placeholder="">
            @error('email') <p class="error">{{$message}}</p> @enderror
            <p>password</p>
            <input required type="password" name="password" placeholder="">
            @error('password') <p class="error">{{$message}}</p> @enderror

            <button type="submit" href='/mylist'>submit</button>
            <br>
            <a href="{{ route('auth.login') }}"> I already have an account, sign in</a>

        </form>
</body>

</html>
