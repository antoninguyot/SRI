@extends('layouts.panel')

@section('title', 'Modifier un semestre à l\'étranger')

@section('content')
    <form action="{{ route('semesters.update', $semester->id) }}" method="post">
        @csrf
        @method('patch')

        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @include('semesters.form')

        <div class="card mt-3">
            <div class="card-body">
                <button type="submit" class="btn btn-primary mr-2">Modifier le semestre</button>
                <a class="btn btn-light" href="{{ route('semesters.index') }}">Annuler</a>
            </div>
        </div>
    </form>
@endsection
