<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FAQ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css"/>
</head>
<body>
<div class="container-fluid">
    <!-- HEADER+NAVIGATITION -->
    <div class="conatiner-fluid">
        <header>
            <nav class="navbar navbar-expand-md navbar-fixed-top navbar-light">
                <img class="d-inline-block align-top mb-0" src="img/hz.png" alt="HZ-logo" width="50" height="50"/>
                <a class="navbar-brand mb-0 h1" href="#">Bashir Ahmed</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                            <a class="nav-link" href="/blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/faq">FAQ</a>
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
        </header>
    </div>
    <!-- /HEADER+NAVIGATION -->
    <!-- MAIN CONTENT -->
    <main class="mt-5">
        <div class="mb-5 align-items-center">
            <div class="container-fluid py-5">
                <h1 class="display-1 fw-bold text-center">FAQ</h1>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <ul>
                        <!-- ITEM -->
                    @foreach($faqs as $faq)
                            <div class="accordion-item">
                                <!-- QUESTION -->
                                <h2 class="accordion-header" id="flush-heading{{ $faq->id }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapse{{ $faq->id }}" aria-expanded="false"
                                            aria-controls="flush-collapse{{ $faq->id }}">
                                        {{ $faq->question }}
                                    </button>
                                </h2>
                                <div id="flush-collapse{{ $faq->id }}" class="accordion-collapse collapse"
                                     aria-labelledby="flush-heading{{ $faq->id }}" data-bs-parent="#accordionFlushExample">
                                    <!-- ANSWER -->
                                    <div class="accordion-body">
                                        {{ $faq->answer }}
                                        @if($faq->link)
                                            <a
                                                href="{{ $faq->link }}">link</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </main>
    <!-- /MAIN CONTENT -->
</div>
<!-- FOOTER -->
<div class="footer sticky-bottom mt-5 py-3">
    <p class="text-center text-muted" id="copyright">
        Copyright © 2021 Bashir Ahmed. All rights reserved.
    </p>
</div>
<!-- /FOOTER -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
