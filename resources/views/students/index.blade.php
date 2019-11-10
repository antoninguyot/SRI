@extends('layouts.panel')

@section('title', 'Étudiants inscrits')

@section('title-right')
    <a class="btn btn-primary" href="{{ route('students.create') }}">
        <i data-feather="plus"></i> Nouvel étudiant
    </a>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table datatable">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Adresse mail</th>
                        <th>Nationalité</th>
                        <th>Type</th>
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
                            <th>{{ $student->name }}</th>
                            <td>{{ $student->email ?? 'Aucun email' }}</td>
                            <td>{{ $student->nationality ?? 'Nationalité non spécifiée' }}</td>
                            <td>{{ $student->type }}</td>
                            <td class="text-right w-10">
                                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">
                                    <i class="feather-16" data-feather="edit"></i> Modifier
                                </a>
                                <a href="{{ route('students.destroy', $student->id) }}" class="btn btn-danger">
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


