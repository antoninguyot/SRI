@extends('layouts.panel')

@section('title', 'Tous les stages à l\'étranger')

@section('title-right')
    <a class="btn btn-primary" href="{{ route('internships.create') }}">
        <i data-feather="plus"></i> Nouveau stage
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
                            <th>{{ $internship->student->first_name }}</th>
                            <th>{{ $internship->student->last_name}}</th>
                            <td>{{ $internship->company }}</td>
                            <td>{{ config('cc.' . $internship->country) }}</td>
                            <td>{!! $internship->badge !!}</td>
                            <td class="text-right w-10">
                                <a href="{{ route('internships.edit', $internship->id) }}" class="btn btn-primary">
                                    <i class="feather-16" data-feather="edit"></i> Modifier
                                </a>
                                <a href="{{ route('internships.destroy', $internship->id) }}" class="btn btn-danger">
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


