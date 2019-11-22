@extends('layouts.panel')

@section('title', 'Ajouter une commande')

@section('content')
    <form action="{{ route('orders.store') }}" method="post">
        @csrf
        @include('orders.form')

        <div class="card mt-3">
            <div class="card-body">
                <button type="submit" class="btn btn-primary mr-2">Créer la commande</button>
                <a class="btn btn-light" href="{{ route('orders.index') }}">Annuler</a>
            </div>
        </div>
    </form>
@endsection
