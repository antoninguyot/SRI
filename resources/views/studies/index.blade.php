@extends('layouts.panel')

@section('title', 'Formations proposées')

@section('title-right')
    <a class="btn btn-primary" href="{{ route('studies.create') }}">
        <i data-feather="plus"></i> Nouvelle formation
    </a>
@endsection

@section('content')
    @include('layouts.delete-modal')

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table datatable">
                    <thead>
                    <tr>
                        <th>Intitulé</th>
                        <th>Dispensée par</th>
                        <th>Étudiants inscrits</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($studies->isEmpty())
                        <tr>
                            <td colspan="6" class="text-center">
                                Aucune formation pour l'instant... Ajoutez-en une maintenant.
                            </td>
                        </tr>
                    @endif
                    @foreach($studies as $study)
                        <tr>
                            <th>{{ $study->name }}</th>
                            <td>{{ $study->university }}</td>
                            <td>1</td>
                            <td class="text-right w-10">
                                <a href="{{ route('studies.edit', $study->id) }}" class="btn btn-primary">
                                    <i class="feather-16" data-feather="edit"></i> Modifier
                                </a>
                                <button class="btn btn-danger" data-toggle="modal" data-target="#delete-modal"
                                        data-delete="studies" data-id="{{ $study->id }}">
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


