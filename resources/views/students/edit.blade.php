@extends('layouts.panel')

@section('title', 'Modifier un étudiant')

@section('content')
    <form action="{{ route('students.update', $student->id) }}" method="post">
        @csrf
        @method('patch')

        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @include('students.form')

        <div class="card mt-3">
            <div class="card-body">
                <button type="submit" class="btn btn-primary mr-2">Modifier l'étudiant</button>
                <a class="btn btn-light" href="{{ route('students.index') }}">Annuler</a>
            </div>
        </div>
    </form>
@endsection
