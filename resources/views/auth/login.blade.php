<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #0F0F10;
        }
        .login-box {
            max-width: 400px;
            margin: 100px auto;
            background-color: #1D1D1D;
            border-radius: 5px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            border: 5px solid #FDDD2D;

        }
        .login-box h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        .login-box .form-group {
            margin-bottom: 20px;
        }
        .login-box .form-control {
            border-radius: 3px;
        }
        .login-box .btn-warning {
            display: block;
            width: 70%;
            margin: 0 auto;
        }
        .login-box .text-center .small {
            font-size: 14px;
            color: white;
            text-decoration: none;
        }

        .login-box .entrance{
            color: white;
        }

        .login-box .text-center .small:hover  {
            color: white;
            text-decoration: underline;
        }
        .login-box .google-btn {
            display: block;
            text-align: center;
            margin-top: 20px;
        }
        @media (max-width: 576px) {
            .login-box {
                margin: 50px auto;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2 class="entrance">Вход</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <form action="{{ route('auth.login') }}"   method="post">
            @csrf
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Введите email">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Введите пароль">
            </div>
            <button type="submit" class="btn btn-warning">Войти</button>
                <a href="{{ url('login/google') }}" class="google-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="30px" height="30px"><path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"/><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"/><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"/><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"/>
                    </svg>
                </a>
            {{-- <div class="text-center mt-3">
                    <a href="{{ url('register') }}" class="small">Регистрация</a>
            </div> --}}
    </div>
</body>
</html>
