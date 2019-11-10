@extends('layouts.panel')

@section('title', 'Inscrire un étudiant')

@section('content')
    <form action="{{ route('students.store') }}" method="post">
        @csrf
        @include('students.form')

        <div class="card mt-3">
            <div class="card-body">
                <button type="submit" class="btn btn-primary mr-2">Ajouter l'étudiant</button>
                <a class="btn btn-light" href="{{ route('students.index') }}">Annuler</a>
            </div>
        </div>
    </form>
@endsection
