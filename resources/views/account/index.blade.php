@extends('layout.app')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ici vous pouvez gérer les utilisateurs</h1>
        </div>
    </div>
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
{{--            <h1 class="h3 mb-0 text-gray-800">Bienvenue sur la page des {{ strtolower($customers[0]->status->name); }}s</h1>--}}
        </div>
        <!-- Page Heading -->
        <p class="mb-4">Affichage des clients et de leurs informations.</p>
        <p class="mb-4">Pour ajouter un client, cliquer sur le bouton ci-dessous :</p>
        <form action="{{ route('account.store')}}" method="POST" class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            @csrf
            <div class="input-group">
                <input type="text" name="name" class="form-control bg-light border small" value="{{old('name')}}" placeholder="Nom de l'utilisateur" aria-label="Search" aria-describedby="basic-addon2" required>
                <input type="email" name="email" class="form-control bg-light border small" value="{{old('email')}}" placeholder="Email de l'utilisateur" aria-label="Search" aria-describedby="basic-addon2" required>
                <input type="text" name="password" class="form-control bg-light border small" value="{{old('password')}}" placeholder="Mot de passe provisoire" aria-label="Search" aria-describedby="basic-addon2" required>

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
                        <table class="table table-bordered"  width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Nom d'utilisateur</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td style="width: 25%;">{{$user->name}}</td>
                                    <td style="width: 25%;">{{$user->email}}</td>
                                    <td style="width: 25%;">
                                        <a href="{{ route('account.edit', $user->id) }}  " class="btn btn-light btn-icon-split" spellcheck="false">
                                            <span class="icon text-gray-600">
                                                <i class="far fa-edit"></i>
                                            </span>
                                            <span class="text">Modifier</span>
                                        </a>
                                    </td>
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
