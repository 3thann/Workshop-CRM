@extends('layout.app')

@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ajouter une commande avec {{ $customer->first_name }} {{ $customer->last_name }}</h1>
    </div>
    
    <!-- Page Heading -->
    <form action="{{ route('order.store', $customer->id) }}" method="POST" class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        @csrf

        <div id="add-order"></div>

        <div class="input-group">
            <button type="button" onclick="addOrderField();" class="btn btn-light btn-icon-split border" spellcheck="false">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Ajouter une commande</span>
            </button>
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
            <span class="text">Retourner en arrière</span>
        </button>
    </form>
        </div>
</div>

@endsection