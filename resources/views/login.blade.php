<!DOCTYPE html>
<html>

<head>
    <title>login form</title>
    <link rel="stylesheet" type="text/css" href="/css/lstyle.css">

</head>

<body>
    <div class="login-form">
        @if(session('error'))<p class="error">{{session('error')}}</p> @endif
        <h1>login form</h1>
        <form action="{{ route('auth.check') }}" method="post">
            @csrf

            <p>Email</p>
            <input required type="email" name="email" placeholder="" value="{{old('email')}}">
            @error('email') <p class="error">{{$message}}</p> @enderror
            <p>password</p>
            <input required type="password" name="password" placeholder="password">
            @error('password') <p class="error">{{$message}}</p> @enderror
            <button type="submit"  >login</button>
            <br>
            <a href="{{ route('auth.register') }}">I don't have an account, create new</a>
        </form>
</body>

</html>
