@extends('layouts.panel')

@section('title', 'Toutes les actualités')

@section('title-right')
    <a class="btn btn-primary" href="{{ route('news.create') }}">
        <i data-feather="plus"></i> Nouvelle actualité
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
                        <th>Titre</th>
                        <th>Date</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($news->isEmpty())
                        <tr>
                            <td colspan="3" class="text-center">
                                Aucune actualité pour l'instant... Ajoutez-en une maintenant.
                            </td>
                        </tr>
                    @endif
                    @foreach($news as $new)
                        <tr>
                            <th>{{ $new->title }}</th>
                            <td>{{ $new->created_at->format('d/m/Y') }}</td>
                            <td class="text-right w-10">
                                <a href="{{ route('news.edit', $new->id) }}" class="btn btn-primary">
                                    <i class="feather-16" data-feather="edit"></i> Modifier
                                </a>
                                <button class="btn btn-danger" data-toggle="modal" data-target="#delete-modal"
                                        data-delete="news" data-id="{{ $new->id }}">
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


