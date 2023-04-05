@extends('layout.app')

@section('content')
    
<div class="container-fluid">
    <!-- Page Heading -->
    <form action="{{ route('customer.store')}}" method="POST" class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        @csrf
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ajouter un client</h1>
        </div>
        <div>
        <div class="input-group">
            <input type="text" name="first_name" class="form-control bg-light border small" placeholder="Prénom" aria-label="Search" aria-describedby="basic-addon2" required>
        </div>
        <div class="input-group">
            <input type="text" name="last_name" class="form-control bg-light border small" placeholder="Nom" aria-label="Search" aria-describedby="basic-addon2" required>
        </div>
        <div class="input-group">
            <input type="email" name="email" class="form-control bg-light border small" placeholder="Email" aria-label="Search" aria-describedby="basic-addon2" required>
        </div>
        <div class="input-group">
            <input type="tel" name="phone_number" class="form-control bg-light border small" placeholder="Numéro de téléphone" aria-label="Search" aria-describedby="basic-addon2" required>
        </div>
        <div class="input-group">
            <select name="status_id" class="form-control bg-light border small" aria-label="Search" aria-describedby="basic-addon2" required>
                <option value="1">Statut par defaut : Lead</option>
                @foreach ($statuses as $status)
                    <option value="{{ $status->id }}">{{ $status->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="input-group">
            <select name="business_id" class="form-control bg-light border small" aria-label="Search" aria-describedby="basic-addon2" required>
                <option value="null">Choisissez une entreprise :</option>
                @foreach ($businesses as $business)
                    <option value="{{ $business->id }}">{{ $business->name }}</option>
                @endforeach
            </select>
        </div>
        
        {{-- @if()
        @else
        @endif --}}

        <div class="input-group">
            <select name="is_dead" class="form-control bg-light border small" aria-label="Search" aria-describedby="basic-addon2" required>
                <option value="0">Le contact est mort : Non</option>
                <option value="1">Le contact est mort : Oui</option>
            </select>
        </div>

        <div class="input-group">
            <button type="submit" class="btn btn-success btn-icon-split" spellcheck="false">
                <span class="icon text-white-50">
                    <i class="fas fa-check"></i>
                </span>
                <span class="text">Valider</span>
            </button>
    </form>
    <form action="{{ url()->previous() }}" class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <button type="submit" class="btn btn-danger btn-icon-split" spellcheck="false">
                    <span class="icon text-white-50">
                        <i class="fas fa-trash"></i>
                    </span>
            <span class="text">Supprimer</span>
        </button>
    </form>
        </div>
</div>

@endsection