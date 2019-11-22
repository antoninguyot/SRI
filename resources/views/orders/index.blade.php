@extends('layouts.panel')

@section('title', 'Toutes les commandes')

@section('title-right')
    <a class="btn btn-primary" href="{{ route('orders.create') }}">
        <i data-feather="plus"></i> Nouvelle commande
    </a>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table datatable">
                    <thead>
                    <tr>
                        <th>Désignation</th>
                        <th>Fournisseur</th>
                        <th>Valeur</th>
                        <th>Quantité</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($orders->isEmpty())
                        <tr>
                            <td colspan="6" class="text-center">
                                Aucune commande pour l'instant... Ajoutez-en une maintenant.
                            </td>
                        </tr>
                    @endif
                    @foreach($orders as $order)
                        <tr>
                            <th>{{ $order->designation }}</th>
                            <td>{{ $order->supplier }}</td>
                            <td>{{ $order->value }} {{ $order->currency }}</td>
                            <td>{{ $order->quantity }}</td>
                            <td class="text-right w-10">
                                <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-primary">
                                    <i class="feather-16" data-feather="edit"></i> Modifier
                                </a>
                                <a href="{{ route('orders.destroy', $order->id) }}" class="btn btn-danger">
                                    <i class="feather-16" data-feather="trash"></i> Supprimer
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


