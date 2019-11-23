@extends('layouts.panel')

@section('title', 'Modifier un virement')

@section('content')
    <form action="{{ route('transfers.update', $transfer->id) }}" method="post">
        @csrf
        @method('patch')

        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @include('transfers.form')

        <div class="card mt-3">
            <div class="card-body">
                <button type="submit" class="btn btn-primary mr-2">Modifier le virement</button>
                <a class="btn btn-light" href="{{ route('transfers.index') }}">Annuler</a>
            </div>
        </div>
    </form>
@endsection
