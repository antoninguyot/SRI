@extends('layouts.panel')

@section('title', 'Tous les échanges')

@section('title-right')
    <a class="btn btn-primary" href="{{ route('exchanges.create') }}">
        <i data-feather="plus"></i> Nouvel échange
    </a>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table datatable">
                    <thead>
                    <tr>
                        <th>Étudiant</th>
                        <th>Formation</th>
                        <th>Dispensée par</th>
                        <th>Durée (heures)</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($exchanges->isEmpty())
                        <tr>
                            <td colspan="5" class="text-center">
                                Aucun échange pour l'instant... Ajoutez-en un maintenant.
                            </td>
                        </tr>
                    @endif
                    @foreach($exchanges as $exchange)
                        <tr>
                            <th>{{ $exchange->student->name }}</th>
                            <td>{{ $exchange->study->name }}</td>
                            <td>Université Paris 13</td>
                            <td>{{ $exchange->study->duration }}</td>
                            <td class="text-right w-10">
                                <a href="{{ route('exchanges.edit', $exchange->id) }}" class="btn btn-primary">
                                    <i class="feather-16" data-feather="edit"></i> Modifier
                                </a>
                                <a href="{{ route('exchanges.destroy', $exchange->id) }}" class="btn btn-danger">
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


