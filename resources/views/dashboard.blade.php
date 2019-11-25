@extends('layouts.panel')

@section('title', 'Service des relations internationales : ' . config('app.university'))

@section('content')
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Derniers stages créés</div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Entreprise</th>
                                        <th>Pays</th>
                                        <th>Statut</th>
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
                                            <th>{{ $internship->student->name ?? 'Pas de nom' }}</th>
                                            <td>{{ $internship->company }}</td>
                                            <td>{{ config('cc.' . $internship->country) }}</td>
                                            <td>{!! $internship->badge !!}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">État des comptes</h6>
                            <table class="w-100">
                                <tr>
                                    <td>Ouverts</td>
                                    <td class="text-success">+ {{ $budget }} {{ config('app.currency.symbol') }}</td>
                                </tr>
                                <tr>
                                    <td class="pt-3">Commandes</td>
                                    <td class="pt-3 text-danger">
                                        - {{ $orders }} {{ config('app.currency.symbol') }}</td>
                                </tr>
                                <tr>
                                    <td>Missions</td>
                                    <td class="text-danger">- {{ $missions }} {{ config('app.currency.symbol') }}</td>
                                </tr>
                                <tr>
                                    <td>Virements</td>
                                    <td class="text-danger">- {{ $transfers }} {{ config('app.currency.symbol') }}</td>
                                </tr>
                                <tr>
                                    <td class="pt-3">Total</td>
                                    @if($total > 0)
                                        <td class="pt-3 text-success">
                                            + {{ $total }} {{ config('app.currency.symbol') }}</td>
                                    @else
                                        <td class="pt-3 text-danger">
                                            - {{ $total }} {{ config('app.currency.symbol') }}</td>
                                    @endif
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Titre</th>
                                        <th>Date</th>
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
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Derniers semstres à l'étranger créés</div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Lieu</th>
                                        <th>Formation</th>
                                        <th>Statut</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($semesters->isEmpty())
                                        <tr>
                                            <td colspan="6" class="text-center">
                                                Aucun échange pour l'instant... Ajoutez-en un maintenant.
                                            </td>
                                        </tr>
                                    @endif
                                    @foreach($semesters as $semester)
                                        <tr>
                                            <th>{{ $semester->student->name ?? 'Pas de nom' }}</th>
                                            <td>{{ $semester->study->university }}</td>
                                            <td>{{ $semester->study->name }}</td>
                                            <td>{!! $semester->badge !!}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Formations les plus fréquentées à {{ config('app.university') }}</h5>
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
        </div>
    </div>
@endsection

