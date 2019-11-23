@extends('layouts.panel')

@section('title', 'Tous les stages à l\'étranger')

@section('title-right')
    <a class="btn btn-primary" href="{{ route('internships.create') }}">
        <i data-feather="plus"></i> Nouveau stage
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
                        <th>Entreprise</th>
                        <th>Pays</th>
                        <th>Statut</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($internships->isEmpty())
                        <tr>
                            <td colspan="6" class="text-center">
                                Aucun stage pour l'instant... Ajoutez-en un maintenant.
                            </td>
                        </tr>
                    @endif
                    @foreach($internships as $internship)
                        <tr>
                            <th>{{ $internship->student->first_name ?? 'Pas de prénom' }}</th>
                            <th>{{ $internship->student->last_name ?? 'Pas de nom' }}</th>
                            <td>{{ $internship->company }}</td>
                            <td>{{ config('cc.' . $internship->country) }}</td>
                            <td>{!! $internship->badge !!}</td>
                            <td class="text-right w-10">
                                <a href="{{ route('internships.edit', $internship->id) }}" class="btn btn-primary">
                                    <i class="feather-16" data-feather="edit"></i> Modifier
                                </a>
                                <button class="btn btn-danger" data-toggle="modal" data-target="#delete-modal"
                                        data-delete="internships" data-id="{{ $internship->id }}">
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


