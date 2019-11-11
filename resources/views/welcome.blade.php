@extends('layouts.app')

@push('js')
    <script src="{{ asset('js/simplemde.js') }}"></script>
@endpush

@push('css')
    <link rel="stylesheet" href="{{ asset('css/simplemde.css') }}">
@endpush

@section('body')
    <div class="main-wrapper">
        <div class="page-wrapper ml-0 w-100">

            <nav class="navbar w-100" style="left: 0px">
                <div class="navbar-content">
                    <div class="search-form">
                        <p>Service des relations internationales : {{ config('app.university') }}</p>
                    </div>
                </div>
            </nav>

            <div class="page-content">
                <div class="container">
                    <div class="d-flex flex-wrap">
                        @foreach(\App\News::all() as $news)
                            <div class="card w-100 mb-4">
                                <div class="card-title mt-3 ml-4 mb-0">{{ $news->title }}</div>
                                <div class="card-body md-render">
                                    {{ $news->content }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @yield('content')
            </div>
        </div>
    </div>
@endsection
