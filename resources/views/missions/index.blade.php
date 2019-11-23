@extends('layouts.panel')

@section('title', 'Toutes les missions')

@section('title-right')
    <a class="btn btn-primary" href="{{ route('missions.create') }}">
        <i data-feather="plus"></i> Nouvelle mission
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
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Motif</th>
                        <th>Lieu</th>
                        <th>Coût</th>
                        <th>Statut</th>
                        <th>Dates</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($missions->isEmpty())
                        <tr>
                            <td colspan="8" class="text-center">
                                Aucune mission pour l'instant... Ajoutez-en une maintenant.
                            </td>
                        </tr>
                    @endif
                    @foreach($missions as $mission)
                        <tr>
                            <th>{{ $mission->last_name }}</th>
                            <th>{{ $mission->first_name }}</th>
                            <td>{{ $mission->purpose }}</td>
                            <td>{{ $mission->location }}</td>
                            <td>{{ $mission->cost }} {{ config('app.currency.symbol') }}</td>
                            <td>{!! $mission->badge !!}</td>
                            <td>{{ $mission->begins_at }} au {{ $mission->ends_at }}</td>
                            <td class="text-right w-10">
                                <a href="{{ route('missions.edit', $mission->id) }}" class="btn btn-primary">
                                    <i class="feather-16" data-feather="edit"></i> Modifier
                                </a>
                                <button class="btn btn-danger" data-toggle="modal" data-target="#delete-modal"
                                        data-delete="missions" data-id="{{ $mission->id }}">
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


