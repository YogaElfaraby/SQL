<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calender</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/83e3234794.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
                    <a href="#">
                        <img src="images/Logo_Panjang.png" alt="logo" style="width: 10vw;">
                    </a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Menu
                    </li>
                    <li class="sidebar-item">
                        <a href="dashboard.html" class="sidebar-link">
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
                                <a href="#" class="sidebar-link">Calender</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Add Schedule</a>
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
                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                        <div class="container-fluid">
                            <div class="navbar-collapse navbar">
                                <ul class="navbar-nav">
                                    <li class="nav-items dropdown">
                                        <a class="navbar-brand"href="#" data-bs-toggle="dropdown">
                                        2023
                                        </a>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">2022</a>
                                            <a href="#" class="dropdown-item">2021</a>
                                            <a href="#" class="dropdown-item">2020</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                          <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                              <li class="nav-item">
                                <a class="nav-link" href="#">January</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">February</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">March</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">April</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">May</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">June</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link active fw-bolder" aria-current="page">July</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">August</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">September</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">October</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">November</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">December</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </nav>
                      <div class="container mt-5">
                        <div class="row">
                            <!-- Days of the Week Header -->
                            <div class="col border text-center">Sun</div>
                            <div class="col border text-center">Mon</div>
                            <div class="col border text-center">Tue</div>
                            <div class="col border text-center">Wed</div>
                            <div class="col border text-center">Thu</div>
                            <div class="col border text-center">Fri</div>
                            <div class="col border text-center">Sat</div>
                        </div>
                        <div class="row">
                            <div class="col border text-center text-muted">25</div>
                            <div class="col border text-center text-muted">26</div>
                            <div class="col border text-center text-muted">27</div>
                            <div class="col border text-center text-muted">28</div>
                            <div class="col border text-center text-muted">29</div>
                            <div class="col border text-center text-muted">30</div>
                            <div class="col border text-center" id="day1">1</div>
                        </div>
                        <div class="row">
                            <div class="col border text-center" id="day2">2</div>
                            <div class="col border text-center" id="day3">3</div>
                            <div class="col border text-center" id="day4">4</div>
                            <div class="col border text-center" id="day5">5</div>
                            <div class="col border text-center" id="day6">6</div>
                            <div class="col border text-center" id="day7">7</div>
                            <div class="col border text-center" id="day8">8</div>
                        </div>
                        <div class="row">
                            <div class="col border text-center" id="day9">9</div>
                            <div class="col border text-center" id="day10">10</div>
                            <div class="col border text-center" id="day11">11</div>
                            <div class="col border text-center" id="day12">12</div>
                            <div class="col border text-center" id="day13">13</div>
                            <div class="col border text-center" id="day14">14</div>
                            <div class="col border text-center" id="day15">15</div>
                        </div>
                        <div class="row">
                            <div class="col border text-center" id="day16">16</div>
                            <div class="col border text-center" id="day17">17</div>
                            <div class="col border text-center" id="day18">18</div>
                            <div class="col border text-center" id="day19">19</div>
                            <div class="col border text-center" id="day20">20</div>
                            <div class="col border text-center" id="day21">21</div>
                            <div class="col border text-center" id="day22">22</div>
                        </div>
                        <div class="row">
                            <div class="col border text-center" id="day23">23</div>
                            <div class="col border text-center" id="day24">24</div>
                            <div class="col border text-center" id="day25">25</div>
                            <div class="col border text-center current-day" id="day26">26</div>
                            <div class="col border text-center" id="day27">27</div>
                            <div class="col border text-center" id="day28">28</div>
                            <div class="col border text-center" id="day29">29</div>
                        </div>
                        <div class="row">
                            <div class="col border text-center" id="day30">30</div>
                            <div class="col border text-center" id="day31">31</div>
                            <div class="col border text-center text-muted">1</div>
                            <div class="col border text-center text-muted">2</div>
                            <div class="col border text-center text-muted">3</div>
                            <div class="col border text-center text-muted">4</div>
                            <div class="col border text-center text-muted">5</div>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                <button id="prevDay" class="btn btn-primary">Previous Day</button>
                            </div>
                            <div class="col text-center">
                                <button id="nextDay" class="btn btn-primary">Next Day</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                
                            </div>
                        </div>
                        <div class="card-body">
        <div id="eventInfo">
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
                <td><button class="text-bg-danger" style="border-radius: 6px;"><i class="fa-solid fa-trash"></i> Delete</button></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>IMK</td>
                <td>12:00</td>
                <td>15:00</td>
                <td><button class="text-bg-danger" style="border-radius: 6px;"><i class="fa-solid fa-trash"></i> Delete</button></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>solat</td>
                <td>15:00</td>
                <td>15:30</td>
                <td><button class="text-bg-danger" style="border-radius: 6px;"><i class="fa-solid fa-trash"></i> Delete</button></td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td colspan="4"><a href="/AddSchedule" style="color: green;"> Add Schedule</a></td>
              </tr>
            </tbody>
          </table>
        </div>
        
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
