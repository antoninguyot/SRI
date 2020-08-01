@extends('layouts.panel')

@section('title', 'Toutes les virements')

@section('title-right')
    <a class="btn btn-primary" href="{{ route('transfers.create') }}">
        <i data-feather="plus"></i> Nouveau virement
    </a>
@endsection

@section('content')
    @include('layouts.delete-modal')

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table datatable" data-export-name="Export Virements SRI {{ \Carbon\Carbon::now()->format('d/m/Y H:i') }}">
                    <thead>
                    <tr>
                        <th>Bénéficiaire</th>
                        <th>Motif</th>
                        <th>Montant</th>
                        <th>Date</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($transfers->isEmpty())
                        <tr>
                            <td colspan="6" class="text-center">
                                Aucun virement pour l'instant... Ajoutez-en un maintenant.
                            </td>
                        </tr>
                    @endif
                    @foreach($transfers as $transfer)
                        <tr>
                            <th>{{ $transfer->payee }}</th>
                            <td>{{ $transfer->purpose }}</td>
                            <td>{{ $transfer->amount }} {{ config('app.currency.symbol') }}</td>
                            <td>{{ $transfer->date }}</td>
                            <td class="text-right w-10">
                                <a href="{{ route('transfers.edit', $transfer->id) }}" class="btn btn-primary">
                                    <i class="feather-16" data-feather="edit"></i> Modifier
                                </a>
                                <button class="btn btn-danger" data-toggle="modal" data-target="#delete-modal"
                                        data-delete="transfers" data-id="{{ $transfer->id }}">
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


