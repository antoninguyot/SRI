@extends('layouts.panel')

@section('title', 'Ajouter une virement')

@section('content')
    <form action="{{ route('transfers.store') }}" method="post">
        @csrf
        @include('transfers.form')

        <div class="card mt-3">
            <div class="card-body">
                <button type="submit" class="btn btn-primary mr-2">Créer le virement</button>
                <a class="btn btn-light" href="{{ route('transfers.index') }}">Annuler</a>
            </div>
        </div>
    </form>
@endsection
