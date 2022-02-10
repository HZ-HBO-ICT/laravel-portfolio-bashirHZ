<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css"/>
</head>
<body>
<div class="container-fluid">
    <!-- HEADER+NAVIGATITION -->
    <header>
        <div class="conatiner-fluid">
            <nav class="navbar navbar-expand-md navbar-fixed-top navbar-light" aria-label="Main navigation">
                <img class="d-inline-block align-top mb-0" src="img/hz.png" alt="HZ-logo" width="50" height="50"/>
                <a class="navbar-brand mb-0" href="#"> Bashir Ahmed </a>
                <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                            <a class="nav-link" href="/dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/faq">FAQ</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Links
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="https://hz.nl/en/about-hz/rules-and-regulations">HZ CER</a></li>
                                <li><a class="dropdown-item" href="https://hz.nl/uploads/documents/Regelingen/OERS/2020-2021/9.-Implementation-Regulations-ICT-Fulltime-2020-2021.pdf">HBO-ICT IR</a></li>
                                <li><a class="dropdown-item" href="https://learn.hz.nl/my/">HZ LEARN</a></li>
                                <li><a class="dropdown-item" href="https://teams.microsoft.com/l/channel/19%3a2e2afa0286b04932be16cb8ad2d9d2c0%40thread.skype/General?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c">TEAMS</a></li>
                                <li><a class="dropdown-item" href="https://apps.hz.nl/angular/studievoortgang/studievoortgang">PROGRESS</a></li>
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
                <h1 class="display-1 fw-bolder text-center">Blog Post's</h1>
            </div>
        </div>
        <!-- /Page Title -->
        <!-- Row -->
        <div class="row row-cols-1 row-cols-md-3 g-4 align-items-md-stretch mt-5">
            <!-- Column 5 -->
            <div class="col">
                <div class="h-100 card text-center bg-dark bg-gradient text-white border border-5 border-dark">
                    <div class="card-header">
                        <h5 class="card-title">Profession</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            Friday, 10-09-2021 went on company safari. I have attended
                            various presentations and done some research. Interested?
                            Click the button below.
                        </p>
                        <a
                            href="/prof"
                            class="btn btn-primary"
                            target="_blank"
                        >Read More</a
                        >
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated never</small>
                    </div>
                </div>
            </div>
            <!-- Column 4 -->
            <div class="col">
                <div class="h-100 card text-center bg-dark bg-gradient text-white border border-5 border-dark">
                    <div class="card-header">
                        <h5 class="card-title">First Feedback</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            Feedback after first assesment.
                        </p>
                        <a href="/feedback" class="btn btn-primary" target="_blank">Read More</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated never</small>
                    </div>
                </div>
            </div>
            <!-- Column 3 -->
            <div class="col">
                <div class="h-100 card text-center bg-dark bg-gradient text-white border border-5 border-dark">
                    <div class="card-header">
                        <h5 class="card-title">Programming Experience</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            I don't have that much of experience as I mentioned before I have little bit of prior knowledge of HTML and CSS.
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated never</small>
                    </div>
                </div>
            </div>
            <!-- Column 2-->
            <div class="col">
                <div class="h-100 card text-center bg-dark bg-gradient text-white border border-5 border-dark">
                    <div class="card-header">
                        <h5 class="card-title">SWOT-Analysis</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            Strengths: Patient, determined and eager to learn new skills.
                        </p>
                        <p>Weakness: Planning</p>
                        <p>
                            Opportunities: I won't be too hasty when working on projects
                            and assignments and I won't give up if I dont understand
                            something yet. And for the planning part I will try to
                            prioritize my tasks and write down a to do list everyday so that I don't get overwhelmed.
                        </p>
                        <p>
                            Threats: Not having a planning is my only threat I gues.
                            <br />
                            <q>If you <b>fail to plan</b>, <b>you plan to fail</b>.</q>
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated never</small>
                    </div>
                </div>
            </div>
            <!-- Column1-->
            <div class="col">
                <div class="h-100 card text-center bg-dark bg-gradient text-white border border-5 border-dark">
                    <div class="card-header">
                        <h5 class="card-title">Study Choice</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            The world of ICT is very appealing to me because it is very broad and threre are so many job opportunities in this field. Literally every company/organization/institute is in need of ICT. I want to specilize in software developing because you often have to solve complex problems and I find that very satisfying and it puts me under pressure and when I'm under pressure I perform better and that motivates me. And there is a constant change in technology whereby you have to larn new programming languages and adapt to new environments. After my studies I would like to work for various companies to gain experience and then evntually become self-employed.
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated never</small>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Row -->
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
