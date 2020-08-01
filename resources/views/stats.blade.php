@extends('layouts.panel')

@section('title', 'Service des relations internationales')

@push('js')
    <script>
        new Chart($('#distrib'), {
            type: 'pie',
            data: {
                datasets: [{
                    data: [{{ $semesters_count }}, {{ $internships_count }}],
                    backgroundColor: ["#4d8af0", "#f77eb9"],
                }],
                labels: ['Semestres', 'Stages'],
            }
        });
    </script>
@endpush

@section('content')
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="font-weight-bold">Répartition des relations à l'étranger</h5>
                </div>
                <div class="card-body">
                    <canvas id="distrib"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="font-weight-bold">Formations les plus fréquentées à {{ config('app.university') }}</h5>
                </div>
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

