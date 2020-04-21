@extends('layouts.panel')

@section('title', 'Modifier une semaine internationale')

@section('content')
    <form action="{{ route('weeks.update', $week->id) }}" method="post">
        @csrf
        @method('patch')

        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @include('weeks.form')

        <div class="card mt-3">
            <div class="card-body">
                <button type="submit" class="btn btn-primary mr-2">Modifier la semaine internationale</button>
                <a class="btn btn-light" href="{{ route('weeks.index') }}">Annuler</a>
            </div>
        </div>
    </form>
@endsection
