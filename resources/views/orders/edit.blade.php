@extends('layouts.panel')

@section('title', 'Modifier une commande')

@section('content')
    <form action="{{ route('orders.update', $order->id) }}" method="post">
        @csrf
        @method('patch')

        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @include('orders.form')

        <div class="card mt-3">
            <div class="card-body">
                <button type="submit" class="btn btn-primary mr-2">Modifier la commande</button>
                <a class="btn btn-light" href="{{ route('orders.index') }}">Annuler</a>
            </div>
        </div>
    </form>
@endsection
