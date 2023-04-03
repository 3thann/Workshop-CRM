@extends('layout.app')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Bienvenue sur la informations de : {{ $customer->first_name}}</h1>
    </div>

    <div id="content">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Mail</th>
                                <th>Numéro de téléphone</th>
                                <th>Entreprise</th>
                                <th>Statut</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>                                    
                                <td style="width: 13%;">{{$customer->first_name}}</td>
                                <td style="width: 13%;">{{$customer->last_name}}</td>
                                <td style="width: 13%;">{{$customer->email}}</td>
                                <td style="width: 13%;">{{$customer->phone_number}}</td>
                                <td style="width: 13%;">{{$customer->business->name}}</td>
                                <td style="width: 13%;">{{$customer->status->name}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection