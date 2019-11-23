@extends('layouts.panel')

@section('title', 'Vue d\'ensemble du budget RI')

@push('js')
    <script>
        new Chart($('#spent'), {
            type: 'pie',
            data: {
                datasets: [{
                    data: [{{ $budget }}, {{ $spent }}],
                    backgroundColor: ["#4d8af0", "#f77eb9"],
                }],
                labels: ['Ouverts', 'Dépensés'],
            }
        });

        new Chart($('#distrib'), {
            type: 'pie',
            data: {
                datasets: [{
                    data: [{{ $orders }}, {{ $missions }}, {{ $transfers }}],
                    backgroundColor: ["#7ee5e5", "#f77eb9", "#4d8af0"],
                }],
                labels: ['Commandes', 'Missions', 'Virements'],
            }
        });
    </script>
@endpush

@section('content')

    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="row">
                <div class="col-12">
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
                            <h6 class="card-title">Distribution des dépenses</h6>
                            <canvas id="distrib"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Visualisation des dépenses</h6>
                    <canvas id="spent"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection

