@extends('layouts.app')

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
                        @foreach($news as $new)
                            <div class="card w-100 mb-4">
                                <div class="card-title mt-3 ml-4 mb-0">{{ $new->title }}</div>
                                <div class="card-body md-render">
                                    {{ $new->content }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-center">
                        {{ $news->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
