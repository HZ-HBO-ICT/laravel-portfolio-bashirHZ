@extends('layout')

@section('content')
    <main class="mt-5 mb-3">
        <div class="conatainer">
            <div class="row">
                <div class="col">
                    <!-- Post content -->
                    <div class="container fluid">
                        <div class="card bg-light">
                            <div class="card-body">
                                <div class="card-title mb-4">
                                    <h1 class="fw-bolder mb-1">First Feedback</h1>
                                </div>
                                <div><img src="img/website.png" alt="" class="img-fluid" style="width: 600px; height: 300px;"></div><br>
                                <p class="fs-5 mb-4">A couple of weeks ago I received some feedback for my showcase website. I had a pretty simple design but overal good my code looked professional but i had some tiny indenting mistakes.</p>
                                <p class="fs-5">Some feedback that i received:</p>
                                <ul class="fs-5">
                                    <li>Adjust some FAQ answers</li>
                                    <li>More color and overall styling</li>
                                    <li>Fix indentation mistakes</li>
                                    <li>Look at pro website for inspiration</li>
                                    <li>HZ-logo smaller</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
