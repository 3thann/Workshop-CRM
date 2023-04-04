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
            <input type="text" name="first_name" value="{{ $customer->first_name }}" class="form-control bg-light border small" aria-label="Search" aria-describedby="basic-addon2">
        </div>
        <div class="input-group">
            <input type="text" name="last_name" value="{{ $customer->last_name }}" class="form-control bg-light border small" aria-label="Search" aria-describedby="basic-addon2">
        </div>
        <div class="input-group">
            <input type="email" name="email" value="{{ $customer->email }}" class="form-control bg-light border small" aria-label="Search" aria-describedby="basic-addon2">
        </div>
        <div class="input-group">
            <input type="tel" name="phone_number" value="{{ $customer->phone_number }}" class="form-control bg-light border small" aria-label="Search" aria-describedby="basic-addon2">
        </div>
        <div class="input-group">
            <select name="status_id" class="form-control bg-light border small" aria-label="Search" aria-describedby="basic-addon2">
                <option value="{{ $customer->status_id }}">{{ $customer->status->name }}</option>
                @foreach ($statuses as $status)
                    <option value="{{ $status->id }}">{{ $status->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="input-group">
            <select name="business_id" class="form-control bg-light border small" aria-label="Search" aria-describedby="basic-addon2">
                @if (isset ($customers->business_id))
                    <option value="{{ $customer->business_id }}">{{ $customer->business->name }}</option>
                @else <option value="">Pas d'entreprise</option>
                @endif

                @foreach ($businesses as $business)
                    <option value="{{ $business->id }}">{{ $business->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="input-group">
            <select name="is_dead" class="form-control bg-light border small" aria-label="Search" aria-describedby="basic-addon2">
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

<script>

    function addActionField(actions) {
        var div = document.createElement("div");
        div.classList.add("input-group");

        var input = document.createElement("input");
        input.setAttribute("type", "text");
        input.setAttribute("name", "description[]");
        input.setAttribute("placeholder", "Description");
        input.classList.add("form-control", "bg-light", "border", "small");

        var button = document.createElement("button");
        button.setAttribute("type", "button");
        button.classList.add("btn", "btn-danger", "btn-icon-split");

        button.addEventListener('click', function(event){
            event.preventDefault();
            button.parentNode.remove();
        })

        var span = document.createElement("span");
        span.classList.add("icon", "text-white-50");

        var i = document.createElement("i");
        i.classList.add("fas", "fa-trash");

        span.appendChild(i);
        button.appendChild(span);

        div.appendChild(input);
        div.appendChild(button);
        document.getElementById("add-action").appendChild(div);
    }

    const removeButtons = document.querySelectorAll(".remove-line");
    removeButtons.forEach(function(button){
        button.addEventListener('click', function(event){
            event.preventDefault();
            button.parentNode.remove();
        })
    })

</script>

@endsection