@extends('layout')

@section('content')
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
    @endsection
