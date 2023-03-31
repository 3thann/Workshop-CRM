@extends('layout.app')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Bienvenue sur la page des entreprises</h1>
    </div>
    <!-- Page Heading -->
    <p class="mb-4">Affichage des entreprises et de leurs informations.</p>

    <div id="content">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Nombre de commande</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($companies as $business)
                                <tr>
                                    <td style="width: 33%;">{{$business->name}}</td>
                                    <td style="width: 33%;">{{$business->id}}</td>
                                    <td class="custom-td">
                                        <a href="{{ route('business.edit', $business->id) }}" class="btn btn-light btn-icon-split" spellcheck="false">
                                            <span class="icon text-gray-600">
                                                <i class="far fa-edit"></i>
                                            </span>
                                            <span class="text">Modifier</span>
                                        </a>
                                        <a href="{{ route('business.show', $business->id) }}" class="btn btn-light btn-icon-split" spellcheck="false">
                                        <span class="icon text-gray-600">
                                            <i class="far fa-eye"></i>
                                        </span>
                                        <span class="text">Voir</span>
                                    </a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {{ $companies->links('layout.pagination') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
