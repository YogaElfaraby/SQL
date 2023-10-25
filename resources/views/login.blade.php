<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" >
    <script src="https://kit.fontawesome.com/83e3234794.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="bg-light"></div>
    <div class="container d-flex justify-content-center align-item-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">

        <div class="col-md-6 rounded-4 d-flex justify-content-center align-item-center flex-column left-box" style="background:#FF7360;">
            <div class="featured-image">
                <img src="images/Schedule.png" class="img-fluid">
            </div> 
        </div>

        <div class="col-md-6">
            <div class="row d-flex justify-content-center align-item-center">
                <div class="header-text text-center mb-4 mt-4">
                    <h2>Sahabat Mahasiswa</h2>
                    <h3>Login</h3>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="username@student.telkomuniversity.ac.id">
                </div>
                <div class="input-group mb-5">
                    <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="password">
                </div>
                <div class="input-group">
                   <button class="btn btn-lg w-100 fs-6" style="background-color:#FF7360" onclick="window.location.href='dashboard';" >
                        Login
                   </button>
                </div>
            </div>
        </div>
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>