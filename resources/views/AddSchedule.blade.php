<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/83e3234794.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
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
                        <a href="/dashboard" class="sidebar-link">
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
                                <a href="#" class="sidebar-link">Scedule</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="/calendar" class="sidebar-link">Calender</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="/AddSchedule" class="sidebar-link">Add Schedule</a>
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
                                <a href="#" class="dropdown-item">Log Out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="content px-3 py-2">
                    <!-- Table -->
                    <div class="card border-0">
                        <div class="card-header">
                            <h5 class="card-title">
                                Add Schedule
                            </h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="NamaJad">Name</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter Nama">
                                  </div>
                                <div class="form-group">
                                    <label for="tanggal">Date</label>
                                    <input type="date" class="form-control" id="tanggal" aria-describedby="date">
                                  </div>
                                  <div class="form-group">
                                    <label for="time">start time</label>
                                    <input type="time" class="form-control" id="sTime" aria-describedby="sTime">
                                  </div>
                                  <div class="form-group">
                                    <label for="time">end time</label>
                                    <input type="time" class="form-control" id="eTime" aria-describedby="eTime">
                                  </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </form>
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
