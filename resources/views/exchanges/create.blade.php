@extends('layouts.panel')

@section('title', 'Mettre en place un échange')

@section('content')
    <form action="{{ route('exchanges.store') }}" method="post">
        @csrf
        @include('exchanges.form')

        <div class="card mt-3">
            <div class="card-body">
                <button type="submit" class="btn btn-primary mr-2">Créer l'échange</button>
                <a class="btn btn-light" href="{{ route('exchanges.index') }}">Annuler</a>
            </div>
        </div>
    </form>
@endsection
