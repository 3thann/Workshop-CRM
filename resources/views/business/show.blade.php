@extends('layout.app')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Information de l'entreprise {{ $business->name}}</h1>
    </div>
    <!-- Page Heading -->
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
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nom du contact</th>
                                <th>Nombre de commande</th>
                                <th>Statut du contact</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($business->customers as $customer)
                                <tr>
                                    <td style="width: 33%;">{{ $customer->first_name }} {{ $customer->last_name }}</td>
                                    <td style="width: 33%;">{{ count($customer->orderlink) }}</td>
                                    <td style="width: 33%;">{{ $customer->status->name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Contact</th>
                                <th>Commande</th>
                                <th>Quantité</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($business->customers as $customer)
                                @foreach ($customer->orderlink as $orderlink)
                                    <tr>
                                        <td style="width: 35%;">{{ $customer->first_name }} {{ $customer->last_name }}</td>
                                        <td style="width: 35%;">{{ $orderlink->order->name }}</td>
                                        <td style="width: 10%;">{{ $orderlink->order->quantity }}</td>
                                        <td style="width: 20%;">{{ $orderlink->order->date }}</td>
                                    </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection
