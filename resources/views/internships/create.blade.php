@extends('layouts.panel')

@section('title', 'Mettre en place un stage à l\'étranger')

@section('content')
    <form action="{{ route('internships.store') }}" method="post">
        @csrf
        @include('internships.form')

        <div class="card mt-3">
            <div class="card-body">
                <button type="submit" class="btn btn-primary mr-2">Créer le stage</button>
                <a class="btn btn-light" href="{{ route('internships.index') }}">Annuler</a>
            </div>
        </div>
    </form>
@endsection
