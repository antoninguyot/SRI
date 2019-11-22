@extends('layouts.panel')

@section('title', 'Mettre en place un semestre à l\'étranger')

@section('content')
    <form action="{{ route('semesters.store') }}" method="post">
        @csrf
        @include('semesters.form')

        <div class="card mt-3">
            <div class="card-body">
                <button type="submit" class="btn btn-primary mr-2">Créer le semestre</button>
                <a class="btn btn-light" href="{{ route('semesters.index') }}">Annuler</a>
            </div>
        </div>
    </form>
@endsection
