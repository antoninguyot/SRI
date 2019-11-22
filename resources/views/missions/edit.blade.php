@extends('layouts.panel')

@section('title', 'Modifier une mission')

@section('content')
    <form action="{{ route('missions.update', $mission->id) }}" method="post">
        @csrf
        @method('patch')

        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @include('missions.form')

        <div class="card mt-3">
            <div class="card-body">
                <button type="submit" class="btn btn-primary mr-2">Modifier la mission</button>
                <a class="btn btn-light" href="{{ route('missions.index') }}">Annuler</a>
            </div>
        </div>
    </form>
@endsection
