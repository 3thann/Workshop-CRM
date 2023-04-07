@extends('layout.app')

@section('content')
    
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Modifier le client {{ $customer->first_name }} {{ $customer->last_name }}</h1>
    </div>
    
    <!-- Page Heading -->
    <form action="{{ route('customer.update', $customer->id) }}" method="POST" class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        @method('PUT')
        @csrf
        <div class="input-group">
            <input type="text" name="first_name" value="{{ $customer->first_name }}" class="form-control bg-light border small" aria-label="Search" aria-describedby="basic-addon2" required>
        </div>
        <div class="input-group">
            <input type="text" name="last_name" value="{{ $customer->last_name }}" class="form-control bg-light border small" aria-label="Search" aria-describedby="basic-addon2" required>
        </div>
        <div class="input-group">
            <input type="email" name="email" value="{{ $customer->email }}" class="form-control bg-light border small" aria-label="Search" aria-describedby="basic-addon2" required>
        </div>
        <div class="input-group">
            <input type="tel" name="phone_number" value="{{ $customer->phone_number }}" class="form-control bg-light border small" aria-label="Search" aria-describedby="basic-addon2" required>
        </div>

        <div class="input-group">
            <select name="business_id" class="form-control bg-light border small" aria-label="Search" aria-describedby="basic-addon2">
                <option value="{{ $customer->business_id }}">{{ $customer->business->name }}</option>
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
            <span class="text">Annuler</span>
        </button>
    </form>
        </div>
</div>

<div class="container-fluid">
    <form action="{{ route('customer.destroy') }}" method="POST" class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        @method('delete')
        @csrf
        <input type="hidden" name="customer_id" value="{{ $customer->id }}">
        <input type="hidden" name="status_id_old" value="{{ $customer->status_id }}">
        <button type="submit" class="btn btn-danger btn-icon-split" spellcheck="false">
            <span class="icon text-white-50">
                <i class="fas fa-trash"></i>
            </span>
            <span class="text">Supprimer</span>
        </button>
    </form>
</div>

@endsection