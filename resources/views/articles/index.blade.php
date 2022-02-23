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
            @foreach($articles as $article)
            <!-- Column1-->
            <div class="col">
                <div class="h-100 card text-center bg-dark bg-gradient text-white border border-5 border-dark">
                    <div class="card-header">
                        <h5 class="card-title">{{$article->title}}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            {{$article->excerpt}}
                        </p>
                        <a href="/articles/{{$article->id}}" class="btn btn-light btn-outline-secondary" target="_blank">Read More</a>
                    </div>
                    <div class="card-footer">
                        <small class="">Last updated: {{$article->updated_at}}</small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- /Row -->

    </main>
@endsection
