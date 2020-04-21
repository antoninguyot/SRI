@extends('layouts.panel')

@section('title', 'Étudiants inscrits')

@section('title-right')
    <a class="btn btn-primary" href="{{ route('students.create') }}">
        <i data-feather="plus"></i> Nouvel étudiant
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
                        <th>Nationalité</th>
                        <th>Type</th>
                        <th>Statut boursier</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($students->isEmpty())
                        <tr>
                            <td colspan="5" class="text-center">
                                Aucun étudiant pour l'instant... Ajoutez-en un maintenant.
                            </td>
                        </tr>
                    @endif
                    @foreach($students as $student)
                        <tr>
                            <th>{{ $student->last_name }}</th>
                            <th>{{ $student->first_name }}</th>
                            <td>{{ $student->nationality ?? 'Nationalité non spécifiée' }}</td>
                            <td>{{ $student->type }}</td>
                            <td>{{ $student->scholarship ? 'Boursier' : 'Non boursier' }}</td>
                            <td class="text-right w-10">
                                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">
                                    <i class="feather-16" data-feather="edit"></i> Modifier
                                </a>
                                <button class="btn btn-danger" data-toggle="modal" data-target="#delete-modal"
                                        data-delete="students" data-id="{{ $student->id }}">
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


