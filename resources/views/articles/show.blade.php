@extends('layout')

@section('content')
    <main class="mt-0">
        <div class="container">
            <!-- Intro -->
            <div class="p-5 mb-5 align-items-center">
                <div class="container-fluid py-5">
                    <h1 class="display-1 text-center fw-bolder "> {{$article->title}} </h1>
                </div>
            </div>
            <!-- Items -->
            <div class="row align-items-md-stretch">
                <div class="col-md">
                    <!-- Item 1 -->
                    <div class="col-md">
                        <div class="h-100 p-5 bg-light rounded-3">
                            {{$article->body}}
                        </div>
                    </div>
                    <!-- /Item1 -->

                </div>


            </div>

        </div>
    </main>
@endsection
