@extends('layout')

@section('content')
    <main class="mt-5">
        <!-- Page Title -->
        <div class=" mb-5 align-items-center">
            <div class="container-fluid py-5">
                <h1 class="display-1 fw-bolder text-center">About Me</h1>
            </div>
        </div>
        <!-- /Page Title -->
        <div class="container">
            <!-- Row 1 -->
            <div class="row row-cols align-items-center">
                <!-- Col 1 -->
                <div class="col-md">
                    <div class="card">
                        <div class="p-5 rounded-3">
                            <h2>WHO AM I</h2>
                            <p class="fs-5">
                                Hi, my name is Bashir Ahmed and I'm 18 years old. I'm from the
                                Netherlands and originally from Somalia. My hobby's are gaming, watching youtube, sleeping, learning
                                and most importantly drinking coffee.
                            </p><br>
                            <h2>Previous education</h2>
                            <p class="fs-5">
                                Prior to HZ I did HAVO at Nehalennia Breeweg in Middelburg.
                            </p>
                            <h2>Few things about me:</h2>
                            <p class="fs-5">
                            <ul class="thumbs-up">
                                <li>Patient</li>
                                <li>Open Minded</li>
                                <li>Adaptable</li>
                                <li>Curious</li>
                                <li>Love learning new skills</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /Col1 -->
                <!-- Col2 -->
                <div class="col">
                    <img src="img/notme.jpg" alt="" class="float-end" width="450px" height="550px">
                </div>
                <!-- /Col 2 -->
            </div>
            <!-- /Row 1 -->
        </div>
    </main>
@endsection

