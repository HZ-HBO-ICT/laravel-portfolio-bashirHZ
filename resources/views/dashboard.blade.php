<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css" />
</head>

<body>
<div class="container-fluid">
    <!-- HEADER+NAVIGATITION -->
    <header>
        <div class="conatiner-fluid">
            <nav class="navbar navbar-expand-md navbar-fixed-top navbar-light" aria-label="Main navigation">
                <img class="d-inline-block align-top mb-0" src="img/hz.png" alt="HZ-logo" width="50" height="50" />
                <a class="navbar-brand mb-0 h1" href="#"> Bashir Ahmed </a>
                <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- NAV LIST & ITEMS -->
                <div class=" navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-justified ms-auto me-5 mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/faq">FAQ</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                Links
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="https://hz.nl/en/about-hz/rules-and-regulations">HZ CER</a></li>
                                <li><a class="dropdown-item"
                                       href="https://hz.nl/uploads/documents/Regelingen/OERS/2020-2021/9.-Implementation-Regulations-ICT-Fulltime-2020-2021.pdf">HBO-ICT
                                        IR</a></li>
                                <li><a class="dropdown-item" href="https://learn.hz.nl/my/">HZ LEARN</a></li>
                                <li><a class="dropdown-item"
                                       href="https://teams.microsoft.com/l/channel/19%3a2e2afa0286b04932be16cb8ad2d9d2c0%40thread.skype/General?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c">TEAMS</a>
                                </li>
                                <li><a class="dropdown-item"
                                       href="https://apps.hz.nl/angular/studievoortgang/studievoortgang">PROGRESS</a></li>
                                <li><a class="dropdown-item" href="https://github.com/bashirHZ/bashirHZ.github.io">GITHUB</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /NAV LIST & ITEMS -->
            </nav>
        </div>
    </header>
    <!-- /HEADER+NAVIGATION -->
    <!-- MAIN CONTENT -->
    <main class="mt-5">
        <!-- Page Title -->
        <div class="mb-5 align-items-center">
            <div class="container-fluid py-5">
                <h1 class="display-1 fw-bolder text-center">My Study Monitor</h1>
            </div>
        </div>
        <!-- Page Title -->
        <div class="container">
            <!-- Progress bar -->
            <h4>NBSA:</h4>
            <div class="progress" data-label="0%" style="--width: 0"></div>
            <!-- /Progress bar -->
            <div class="table-responsive table-bordered mt-5 rounded">
                <table class="table table-hover dashboard-table table-dark ">
                    <thead>
                    <tr>
                        <th scope="col">Quartile</th>
                        <th scope="col">Courses</th>
                        <th scope="col">EC</th>
                        <th scope="col">Exam</th>
                        <th scope="col">Grade</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td rowspan="3" rows>1</td>
                        <td>Programme and Career Orientation</td>
                        <td>2.5</td>
                        <td>Assesment</td>
                        <td>8.6</td>
                    </tr>

                    <tr>
                        <td>Computer Science Basics</td>
                        <td>5</td>
                        <td>Written Exam</td>
                        <td>7.0</td>
                    </tr>

                    <tr>
                        <td>Programming Basics</td>
                        <td>5</td>
                        <td>Case Study Exam</td>
                        <td>9.0</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Object Oriented Programming</td>
                        <td>10</td>
                        <td>Case Study & Project</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td rowspan="2">3</td>
                        <td>Framework Development 1</td>
                        <td>5</td>
                        <td>Case Study</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td>Framework Project 1</td>
                        <td>7.5</td>
                        <td>Project, Assesment & Report</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>Framework Project 2</td>
                        <td>10</td>
                        <td>Portofolio, Project & Assesment</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td>Entire Year</td>
                        <td>Personal Professional Development</td>
                        <td>12.5</td>
                        <td>Portofolio</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td>Whenever</td>
                        <td>Personality 1</td>
                        <td>1.25</td>
                        <td>Portofolio</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Whenever</td>
                        <td>Personality 2</td>
                        <td>1.25</td>
                        <td>Portofolio</td>
                        <td>-</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <!-- /MAIN CONTENT -->
</div>
<!-- FOOTER -->
<div class="footer sticky-bottom py-3">
    <p class="text-center text-muted" id="copyright">
        Copyright © 2021 Bashir Ahmed. All rights reserved.
    </p>
</div>
<!-- /FOOTER -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>
