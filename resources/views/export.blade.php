@extends('layouts.panel')

@section('title', 'Exporter les opérations')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table datatable-export" data-export-name="Export Opérations SRI {{ \Carbon\Carbon::now()->format('d/m/Y H:i') }}">
                    <thead>
                    <tr>
                        <th>Désignation</th>
                        <th>Montant</th>
                        <th>Date</th>
                        <th>Notes</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($operations as $operation)
                        <tr>
                            <td>{{ $operation->toTitle() }}</td>
                            <td>{{ $operation->toAmount() }}</td>
                            <td>{{ $operation->created_at }}</td>
                            <td>{{ $operation->toNotes() }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


