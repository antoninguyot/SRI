@extends('layouts.panel')

@section('title', 'Modifier un stage à l\'étranger')

@section('content')
    <form action="{{ route('internships.update', $internship->id) }}" method="post">
        @csrf
        @method('patch')

        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @include('internships.form')

        <div class="card mt-3">
            <div class="card-body">
                <button type="submit" class="btn btn-primary mr-2">Modifier le stage</button>
                <a class="btn btn-light" href="{{ route('internships.index') }}">Annuler</a>
            </div>
        </div>
    </form>
@endsection
