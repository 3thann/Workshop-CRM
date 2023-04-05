@extends('layout.app')


@section('content')
    <div>
        <h1 class="h3 mb-0 text-gray-800">Bienvenue sur le dashboard</h1>
    </div>
    <div>
        <div class="dasboard">
            <div class="canva_all_div">
                <div class="all_canva">
                    <div class="canvas_donuts">
                        <canvas id="donuts_chart"></canvas>
                    </div>
                </div>
            </div>

            <div class="side_bar">
                <div class="sidebar-heading">
                    Section
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('customer.index', 3) }}">
                        <i class="fas fa-users"></i>
                        <span>Clients</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('customer.index', 2) }}">
                        <i class="fas fa-users"></i>
                        <span>Prospects</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('customer.index', 1) }}">
                        <i class="fas fa-users"></i>
                        <span>Leads</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('business.index') }}">
                        <i class="fas fa-building"></i>
                        <span>Entreprises</span>
                    </a>
                </li>

                </ul>
            </div>
        </div>
        <div class="canvas_all_line">
            <div class="canvas_line">
                <canvas id="line_chart"></canvas>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>

@endsection
