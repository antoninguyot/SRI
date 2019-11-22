@extends('layouts.panel')

@section('title', 'Service des relations internationales')

@section('content')
    <div class="row">
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <h6 class="card-title mb-0">Étudiants à l'étranger</h6>
                            <h3 class="mb-2">10</h3>
                        </div>
                        <div class="col-4 text-center my-auto">
                            <i class="link-icon feather-48" data-feather="users"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <h6 class="card-title mb-0">Heures à l'étranger</h6>
                            <h3 class="mb-2">{{ $total_abroad_hours }} h</h3>
                        </div>
                        <div class="col-4 text-center my-auto">
                            <i class="link-icon feather-48" data-feather="arrow-up"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <h6 class="card-title mb-0">Heures passées ici</h6>
                            <h3 class="mb-2">250 h</h3>
                        </div>
                        <div class="col-4 text-center my-auto">
                            <i class="link-icon feather-48" data-feather="arrow-down"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <h5 class="card-title">Formations les plus fréquentées à {{ config('app.university') }}</h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table datatable">
                            <thead>
                            <tr>
                                <th>Intitulé</th>
                                <th>Échanges</th>
                                <th>Nombre d'heures total</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($top_local_studies->isEmpty())
                                <tr>
                                    <td colspan="6" class="text-center">
                                        Aucune formation pour l'instant... Ajoutez-en une maintenant.
                                    </td>
                                </tr>
                            @endif
                            @foreach($top_local_studies as $study)
                                <tr>
                                    <th>{{ $study->name }}</th>
                                    <td>{{ $study->exchanges_count }}</td>
                                    <td>{{ $study->exchanges_count * $study->duration }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

