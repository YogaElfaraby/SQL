@extends('layout')
@section('title', 'Login')
@section('content')
    <title>Login Page</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            background-image: url('{{ asset('images/background.jpg') }}');
            background-repeat: no-repeat;
            background-size: cover;

        }
        .navbar {
            background-color: #FF7360;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar-logo img {
            padding: 2px;
            padding-left: 10px;
            width: 40px; 
            height: 40px;
        }
        .navbar a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }
        .login-container {
            width: 300px;
            margin: 50px auto 0; 
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }
        .login-container h2 {
            margin-bottom: 20px;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            height: 30px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .login-container input[type="submit"] {
            background-color: #FF7360;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 3px;
        }

        h2 {
        line-height: 5px;
        }

        input {
            margin-top: 20px;
            margin-bottom: -10px;
            padding: 5px;
            align-items: center;
            width: 250px;
        }

        input:focus {
            background-color: #f1aca3;
        }

        input:hover {
            color: #f1aca3;
            transition: border-color 0.5s, color 0.5s;
        }

        .username input[type="text"]:hover {
            border-bottom: solid #f1aca3;
        }

        .password input[type="password"]:hover {
            border-bottom: solid #f1aca3;
        }

        .username input[type="text"] {
            border-top: none;
            border-right: none;
            border-left: none;
            border-bottom: 3px solid #ddd;
            font-size: 16px;
        }

        .password input[type="password"] {
            border-top: none;
            border-right: none;
            border-left: none;
            border-bottom: 3px solid #ddd;
            font-size: 16px;
        }

        .button .btn:hover {
            background-color: #f1aca3;
            cursor: pointer;
            color: #ddd;
        }

        .button .btn {
            height: 40px;
            width: 70px;
            background-color: #fff;
            border-radius: 5px;
        }

    </style>
</head>
<body>
    <div class="navbar">
        <div class="navbar-logo">
            <img src="{{ URL ('images/school_1.png') }}" alt="">
        </div>
        <div class="navbar-links">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </div>
    </div>
    <div class="login-container">
        <h2>Login</h2>
        <form action="process_login.php" method="POST">
            <div class="username">
                    <input type="text" placeholder="Username" name="Masukan Username">
                </div>
                <div class="password">
                    <input type="password" placeholder="Password" name="Masukan Password">
                </div>
                <div class="button">
                    <input type="submit" class="btn" value="Login">
                </div>
        </form>
    </div>
@endsection
