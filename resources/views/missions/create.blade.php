@extends('layouts.panel')

@section('title', 'Ajouter une mission')

@section('content')
    <form action="{{ route('missions.store') }}" method="post">
        @csrf
        @include('missions.form')

        <div class="card mt-3">
            <div class="card-body">
                <button type="submit" class="btn btn-primary mr-2">Créer la mission</button>
                <a class="btn btn-light" href="{{ route('missions.index') }}">Annuler</a>
            </div>
        </div>
    </form>
@endsection
