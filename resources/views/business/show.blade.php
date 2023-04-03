@extends('layout.app')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Bienvenue sur la page des clients de : {{ $business->name}}</h1>
    </div>
    <!-- Page Heading -->
    <form action="{{ route('business.store') }}" method="POST" class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        @csrf
        <div class="input-group">
            
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div id="content">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nom des clients</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($business->customers as $all_customers)
                                <tr>
                                    <td style="width: auto;">{{ $all_customers->first_name}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {{ $customers->links('layout.pagination') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection