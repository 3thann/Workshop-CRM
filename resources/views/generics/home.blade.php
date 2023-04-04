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

    <div class="canvas_donuts">
        <canvas id="donuts_chart"></canvas>
    </div>
    <div class="canvas_bar">
        <canvas id="bar_chart"></canvas>
    </div>
    <div class="canvas_line">
        <canvas id="line_chart"></canvas>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>

@endsection
