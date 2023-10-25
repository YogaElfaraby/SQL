<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" >
    <script src="https://kit.fontawesome.com/83e3234794.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <div class="modal" id="mymodal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title">Delete</h2>
                    </div>
                    <div class="modal-body">
                        aaaaaaaa
                    </div>
                </div>
            </div>
        </div>
        <aside id="sidebar">
            <!-- content for sidebar -->
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">Sahabat Mahasiswa</a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Menu
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fa-solid fa-list"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse" aria-expanded="false"><i class="fa-regular fa-file pe-2"></i>
                            My Day
                        </a>
                        <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Page 1</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Page 2</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#posts" data-bs-toggle="collapse" aria-expanded="false"><i class="fa-solid fa-sliders pe-2"></i>
                            My Lists
                        </a>
                        <ul id="posts" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Schedule</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="/calendar" class="sidebar-link">Calender</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="/AddSchedule" class="sidebar-link ">Add Schedule</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-items dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="images/heru.jpg" class="avatar img-fluid rounded" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Profile</a>
                                <a href="#" class="dropdown-item">Settings</a>
                                <a href="#" class="dropdown-item" onclick="window.location.href='login';">Log Out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h4>Welcome, Arsaq</h4>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-3 m-1">
                                                <h4 class="text-danger">Proting</h4>
                                                <p class="mb-0">9:00 - 11:00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-3 m-1">
                                                <h4>IMK</h4>
                                                <p class="mb-0">12:00 - 14:00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- Table -->
                    <div class="card border-0">
                        <div class="card-header">
                            <h5 class="card-title">
                                Today Schedule
                            </h5>
                            <h6 class="card-subtitle text-mute">
                                July, 26
                            </h6>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Start</th>
                                    <th scope="col">End</th>
                                    <th scope="col"> </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Proting</td>
                                    <td>09:00</td>
                                    <td>11:00</td>
                                    <td><button onclick = "deleteTask()" class="text-bg-danger" style="border-radius: 6px;"><i class="fa-solid fa-trash"></i> Delete</button></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>IMK</td>
                                    <td>12:00</td>
                                    <td>15:00</td>
                                    <td><button onclick = "deleteTask()" class="text-bg-danger" style="border-radius: 6px;"><i class="fa-solid fa-trash"></i> Delete</button></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td>solat</td>
                                    <td>15:00</td>
                                    <td>15:30</td>
                                    <td><button onclick = "deleteTask()" class="text-bg-danger" style="border-radius: 6px;"><i class="fa-solid fa-trash"></i> Delete</button></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">4</th>
                                    <td colspan="3"><a href="/AddSchedule" style="color: green;"> Add Schedule</a></td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
