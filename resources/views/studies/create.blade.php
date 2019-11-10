@extends('layouts.panel')

@section('title', 'Ajouter une formation')

@section('content')
    <form action="{{ route('studies.store') }}" method="post">
        @csrf
        @include('studies.form')

        <div class="card mt-3">
            <div class="card-body">
                <button type="submit" class="btn btn-primary mr-2">Ajouter la formation</button>
                <a class="btn btn-light" href="{{ route('studies.index') }}">Annuler</a>
            </div>
        </div>
    </form>
@endsection
