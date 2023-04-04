@extends('layout.app')

@section('content')
    
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ajouter une action avec {{ $customer->first_name }} {{ $customer->last_name }}</h1>
    </div>
    
    <!-- Page Heading -->
    <form action="{{ route('action.store', $customer->id) }}" method="POST" class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        @csrf
        <div class="input-group">
            <input type="text" name="description[]" placeholder="Action" class="form-control bg-light border small" aria-label="Search" aria-describedby="basic-addon2">
        </div>
        <div class="input-group">
            <input type="text" name="answer[]" placeholder="Réponse" class="form-control bg-light border small" aria-label="Search" aria-describedby="basic-addon2">
        </div>

        <div id="add-action"></div>

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
            <span class="text">Retourner en arrière</span>
        </button>
    </form>
        </div>
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