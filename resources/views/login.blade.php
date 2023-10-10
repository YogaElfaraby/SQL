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
        <h2>Sahabat Mahasiswa</h2>
        <h2>Login</h2>
        <form action="process_login.php" method="POST">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" value="Login">
        </form>
    </div>
@endsection