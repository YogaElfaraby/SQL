<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" >

</head>
<body>
    <div class="navbar">
        <div class="navbar-logo">
            <img src="images/school_1.png">
        </div>
        <div class="navbar-title">
            <h1>Sahabat Mahasiswa</h1>
        </div>
        <div class="navbar-links">
            <a href="about">About</a>
            <a href="#">Contact</a>
        </div>
    </div>
    <div class="Box">
        <h2>Login</h2>
        <form>
            <div class="username">
                <input type="text" placeholder="Username@student.telkomuniversity.ac.id" name="Masukan Username">
            </div>
            <div class="password">
                <input type="password" placeholder="Password" name="Masukan Password">
            </div>
            <div class="button">
                <input type="button" class="btn" value="Login" onclick="window.location.href='dashboard';">
            </div>
        </form>
    </div>
</body>
</html>