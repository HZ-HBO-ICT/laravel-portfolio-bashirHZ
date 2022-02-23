@extends('layout')

@section('content')
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
@endsection
