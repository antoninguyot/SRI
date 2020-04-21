@extends('layouts.panel')

@section('title', 'Toutes les semaines internationales')

@section('title-right')
    <a class="btn btn-primary" href="{{ route('weeks.create') }}">
        <i data-feather="plus"></i> Nouvelle semaine internationale
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
                        <th>Type</th>
                        <th>Frais</th>
                        <th>Étudiants</th>
                        <th>Coût</th>
                        <th>Statut</th>
                        <th>Dates</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($weeks->isEmpty())
                        <tr>
                            <td colspan="8" class="text-center">
                                Aucune semaine internationale pour l'instant... Ajoutez-en une maintenant.
                            </td>
                        </tr>
                    @endif
                    @foreach($weeks as $week)
                        <tr>
                            <th>{{ $week->name }}</th>
                            <td>{{ $week->f_type }}</td>
                            <td>{{ $week->fee }} {{ config('app.currency.symbol') }}</td>
                            <td>{{ $week->students }}</td>
                            <td>{{ $week->f_cost }} {{ config('app.currency.symbol') }}</td>
                            <td>{!! $week->badge !!}</td>
                            <td>{{ $week->begins_at }} au {{ $week->ends_at }}</td>
                            <td class="text-right w-10">
                                <a href="{{ route('weeks.edit', $week->id) }}" class="btn btn-primary">
                                    <i class="feather-16" data-feather="edit"></i> Modifier
                                </a>
                                <button class="btn btn-danger" data-toggle="modal" data-target="#delete-modal"
                                        data-delete="weeks" data-id="{{ $week->id }}">
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


