@extends('layout')

@section('content')
    <main class="mt-5 container">
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
                        <a href="/prof" class="btn btn-light btn-outline-secondary" target="_blank">Read More</a>
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
                        <a href="/feedback" class="btn btn-light btn-outline-secondary" target="_blank">Read More</a>
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

    </main>
@endsection
