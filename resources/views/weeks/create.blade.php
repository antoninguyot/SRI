@extends('layouts.panel')

@section('title', 'Ajouter une semaine internationale')

@section('content')
    <form action="{{ route('weeks.store') }}" method="post">
        @csrf
        @include('weeks.form')

        <div class="card mt-3">
            <div class="card-body">
                <button type="submit" class="btn btn-primary mr-2">Créer la semaine internationale</button>
                <a class="btn btn-light" href="{{ route('weeks.index') }}">Annuler</a>
            </div>
        </div>
    </form>
@endsection
