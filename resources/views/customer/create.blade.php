@extends('layout.app')

@section('content')
    
<div class="container-fluid">
    <!-- Page Heading -->
    <form action="{{ route('customer.store')}}" method="POST" class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        @csrf
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ajouter un contact</h1>
        </div>
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
            <select name="business_id" class="form-control bg-light border small" aria-label="Search" aria-describedby="basic-addon2" required>
                <option value="null">Choisissez une entreprise :</option>
                @foreach ($businesses as $business)
                    <option value="{{ $business->id }}">{{ $business->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="input-group">
            <div class="custom-control custom-checkbox">
                <input name="contacted" type="checkbox" class="custom-control-input" id="contactedCheck">
                <label class="custom-control-label" for="contactedCheck">Déjà contacté</label>
            </div>
        </div>

        <div class="input-group">
            <div class="custom-control custom-checkbox">
                <input name="lead_dead" type="checkbox" class="custom-control-input" id="leadDeadCheck">
                <label class="custom-control-label" for="leadDeadCheck">Les données sont erronées</label>
            </div>
        </div>

        <div class="input-group">
            <div class="custom-control custom-checkbox">
                <input name="prospect_dead" type="checkbox" class="custom-control-input" id="prospectDeadCheck">
                <label class="custom-control-label" for="prospectDeadCheck">La prospection de vente est refusée</label>
            </div>
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
                        <i class="fas fa-angle-double-left"></i>
                    </span>
            <span class="text">Supprimer</span>
        </button>
    </form>
        </div>
</div>

@endsection