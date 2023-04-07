@extends('layout.app')

@section('content')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Modification de l'entreprise {{ $business->name }}</h1>
    </div>

    <!-- Page Heading -->
        <form action="{{ route('business.update', $business->id)}}" method="POST" class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            @method("PUT")
            @csrf
            <div class="input-group">
                <input type="text" name="name" class="form-control bg-light border small" placeholder="Changer le nom" aria-label="Search" aria-describedby="basic-addon2" value="{{ $business->name }}" required>

                <input type="hidden" name="business_id" value='{{$business->id}}'>
                <div class="input-group-append">
                    <button type="submit" class="btn btn-success btn-icon-split" spellcheck="false">
                        <span class="icon text-white-50">
                            <i class="fas fa-check"></i>
                        </span>
                        <span class="text">Valider</span>
                    </button>

                </div>
            </div>
        </form>
    <form action="{{ route('business.destroy', $business->id) }}" method="POST" class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        @method("delete")
        @csrf
        <input type="hidden" name="business_id" value="{{ $business->id }}">
        <button type="submit" class="btn btn-danger btn-icon-split" spellcheck="false">
                    <span class="icon text-white-50">
                        <i class="fas fa-trash"></i>
                    </span>
            <span class="text">Supprimer</span>
        </button>
    </form>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@if (\Session::has('error'))
<div class="alert alert-danger">
    <ul>
        <li>{{ \Session::get('error') }}</li>
    </ul>
</div>
@endif

@endsection
