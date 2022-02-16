<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
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
                <a class="navbar-brand mb-0" href="#"> Bashir Ahmed </a>
                <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- NAV LIST & ITEMS -->
                <div class=" navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-justified ms-auto me-5 mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/faq">FAQ</a>
                        </li>
                        <!-- Dropdown Links -->
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
    <main class="mt-0">
        <div class="container">
            <!-- Intro -->
            <div class="p-5 mb-5 align-items-center">
                <div class="container-fluid py-5">
                    <h1 class="display-1 text-center fw-bolder ">Welcome!</h1>
                    <p class="col fs-4 text-center intro-p">I'm Bashir this is my Portfolio website. HBO-ICT student at <a
                            class="text-decoration-none fst-italic hz-link" href="http://hz.nl" target="_blank">HZ University of
                            Applied Sciences.</a></p>
                </div>
            </div>
            <!-- Items -->
            <div class="row align-items-md-stretch">
                <!-- Item 1 -->
                <div class="col-md">
                    <div class="h-100 p-5 bg-light rounded-3">
                        <h2>Why HBO-ICT</h2>
                        <p>In my previous education I have experienced a little bit of HTML and CSS for a year and ever since I
                            have been interested in coding/programming. I know ICT is more than just programming but it is one of
                            the core aspects and I am willing to expand my knowledge on this subject. I chose this course because
                            majority of it is practical, implenting what you learnt directly to projects and that suits my learning
                            style</p>
                        <p>Check out my profile my page!</p>
                        <a href="/about" class="btn btn-outline-secondary">Profile</a>
                    </div>
                </div>
                <!-- /Item1 -->
                <!-- Item 2 -->
                <div class="col-md">
                    <div class="h-100 p-5 bg-light border rounded-3">
                        <h2>My Motivation</h2>
                        <p>My motivation for choosing this course is that it will help me improve my creativity, self-discipline,
                            and communication through programming. And because ICT is so vast, you learn a lot of new things every
                            day and keep evolving. I have always been interested in ICT and programming all my life.</p>
                        <p>Check out my Blog for more!</p>
                        <a href="/blog" class="btn btn-outline-secondary">Blog</a>
                    </div>
                </div>
                <!-- /Item 2 -->
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
