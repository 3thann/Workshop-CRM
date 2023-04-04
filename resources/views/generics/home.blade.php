@extends('layout.app')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Bienvenue sur le dashboard</h1>
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
