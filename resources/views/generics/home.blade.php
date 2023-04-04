@extends('layout.app')


@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Bienvenue sur le dashboard</h1>
        </div>
    </div>

    <div id="content">
        <div class="card shadow mb-4">
            <div class="card-body">
                <canvas id="Chart1" style="display: block; height: 160px; width: 44px;" width="55" height="200" class="chartjs-render-monitor"></canvas>
            </div>
        </div>
    </div>
@endsection
