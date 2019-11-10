@extends('layouts.panel')

@section('title', 'Modifier une actualité')

@section('content')
    <form action="{{ route('news.update', $news->id) }}" method="post">
        @csrf
        @method('patch')

        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @include('news.form')

        <div class="card mt-3">
            <div class="card-body">
                <button type="submit" class="btn btn-primary mr-2">Modifier l'actualité</button>
                <a class="btn btn-light" href="{{ route('news.index') }}">Annuler</a>
            </div>
        </div>
    </form>
@endsection
