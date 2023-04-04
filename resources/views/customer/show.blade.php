@extends('layout.app')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Information sur {{ $customer->first_name }} {{ $customer->last_name }}</h1>
    </div>

    <div id="content">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" cellspacing="0">

                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Mail</th>
                                <th>Téléphone</th>
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
                                <td style="width: 13%;">
                                    @if (isset ($customers->business_id))
                                        <option value="{{ $customer->business_id }}">{{ $customer->business->name }}</option>
                                    @else <option value="">Pas d'entreprise</option>
                                    @endif
                                <td style="width: 13%;">{{$customer->status->name}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Action</th>
                                <th>Réponse</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($actions as $action)
                                    <td style="width: 50%;">{{ $action->description}}</td>
                                    <td style="width: 50%;">{{ $action->answer}}</td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
