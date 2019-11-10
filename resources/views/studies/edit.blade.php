@extends('layouts.panel')

@section('title', 'Modifier une formation')

@section('content')
    <form action="{{ route('studies.update', $study->id) }}" method="post">
        @csrf
        @method('patch')

        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @include('studies.form')

        <div class="card mt-3">
            <div class="card-body">
                <button type="submit" class="btn btn-primary mr-2">Modifier la formation</button>
                <a class="btn btn-light" href="{{ route('studies.index') }}">Annuler</a>
            </div>
        </div>
    </form>
@endsection
