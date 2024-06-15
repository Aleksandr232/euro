<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
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

        .login-box .entrance{
            color: white;
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
        <h2 class="entrance" >Регистрация</h2>
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
        <form action="{{ route('auth.register_create') }}" method="post">
            @csrf
            <div class="form-group">
                <input type="name" name="name" class="form-control" placeholder="Введите имя">
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Введите email">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Введите пароль">
            </div>
            <button type="submit" class="btn btn-warning">Зарегистрироваться</button>
    </div>
</body>
</html>
