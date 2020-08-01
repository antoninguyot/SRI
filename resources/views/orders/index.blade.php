@extends('layouts.panel')

@section('title', 'Toutes les commandes')

@section('title-right')
    <a class="btn btn-primary" href="{{ route('orders.create') }}">
        <i data-feather="plus"></i> Nouvelle commande
    </a>
@endsection

@section('content')
    @include('layouts.delete-modal')

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table datatable" data-export-name="Export Commandes SRI {{ \Carbon\Carbon::now()->format('d/m/Y H:i') }}">
                    <thead>
                    <tr>
                        <th>Désignation</th>
                        <th>Fournisseur</th>
                        <th>Total</th>
                        <th>Quantité</th>
                        <th>Date</th>
                        <th class="noExport"></th>
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
                            <td>{{ $order->total }} {{ config('app.currency.symbol') }}</td>
                            <td>{{ $order->quantity }}</td>
                            <td>{{ $order->date }}</td>
                            <td class="text-right w-10">
                                <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-primary">
                                    <i class="feather-16" data-feather="edit"></i> Modifier
                                </a>
                                <button class="btn btn-danger" data-toggle="modal" data-target="#delete-modal"
                                        data-delete="orders" data-id="{{ $order->id }}">
                                    <i class="feather-16" data-feather="trash"></i> Supprimer
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


