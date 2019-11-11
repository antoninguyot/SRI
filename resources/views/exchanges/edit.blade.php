@extends('layouts.panel')

@section('title', 'Modifier un échange')

@section('content')
    <form action="{{ route('exchanges.update', $exchange->id) }}" method="post">
        @csrf
        @method('patch')

        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @include('exchanges.form')

        <div class="card mt-3">
            <div class="card-body">
                <button type="submit" class="btn btn-primary mr-2">Modifier l'échange</button>
                <a class="btn btn-light" href="{{ route('exchanges.index') }}">Annuler</a>
            </div>
        </div>
    </form>
@endsection
