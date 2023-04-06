@extends('layout.app')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Bienvenue sur la page des entreprises</h1>
    </div>
    <!-- Page Heading -->
    <p class="mb-4">Affichage des entreprises et de leurs informations.</p>
    <p class="mb-4">Pour ajouter une entreprise, veuillez remplir le formulaire ci-dessous :</p>
    <form action="{{ route('business.store')}}" method="POST" class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        @csrf
        <div class="input-group">
            <input type="text" name="name" class="form-control bg-light border small" value="{{old('name')}}" placeholder="Nom de l'entreprise" aria-label="Search" aria-describedby="basic-addon2" required>

            <div class="input-group-append">
                <button type="submit" class="btn btn-success btn-icon-split" spellcheck="false">
                    <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Ajouter</span>
                </button>
            </div>
        </div>
    </form>

    <div id="content">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($businesses as $business)
                                <tr>
                                    <td style="width: 66%;">{{ $business->name }}</td>
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
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
