@extends('layouts.panel')

@section('title', 'Ajouter une actualité')

@section('content')
    <form action="{{ route('news.store') }}" method="post">
        @csrf
        @include('news.form')

        <div class="card mt-3">
            <div class="card-body">
                <button type="submit" class="btn btn-primary mr-2">Ajouter l'actualité</button>
                <a class="btn btn-light" href="{{ route('news.index') }}">Annuler</a>
            </div>
        </div>
    </form>
@endsection
