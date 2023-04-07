@extends('layout.app')


@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Bienvenue sur la page des {{ strtolower($status->name); }}s</h1>
    </div>
    <!-- Page Heading -->
    <p class="mb-4">Affichage des {{ strtolower($status->name); }}s et de leurs informations.</p>
    <p class="mb-4">Pour ajouter un contact, cliquer sur le bouton ci-dessous :</p>

    <form action="{{ route('customer.create')}}" class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        @csrf
        <div class="input-group">
            <button type="submit" class="btn btn-success btn-icon-split" spellcheck="false">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Ajouter un contact</span>
            </button>
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
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customers as $customer)
                                <tr>
                                    <td style="width: 25%;">{{$customer->first_name}} {{$customer->last_name}}</td>
                                    <td style="width: 25%;">{{$customer->email}}</td>
                                    <td style="width: 25%;">{{$customer->phone_number}}</td>
                                    <td class="custom-td">
                                        <a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-light btn-icon-split" spellcheck="false">
                                            <span class="icon text-gray-600">
                                                <i class="far fa-edit"></i>
                                            </span>
                                            <span class="text">Modifier</span>
                                        </a>
                                        <a href="{{ route('customer.show', $customer->id) }}" class="btn btn-light btn-icon-split" spellcheck="false">
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

<script type="text/javascript">

    document.addEventListener('DOMContentLoaded', function() {
        var instances = M.FormSelect.init(elems, options);

    });
    $(document).ready(function(){
        $('select').formSelect();
        $('#dataTable').DataTable({
            pageLength: 500,
            paging: true,
            select: false,
            scrollY: 700,
            columns: [
                null,
                null,
                null,
                null,
                null,
                { className: "tabSearch" }
            ],
        });
    });

</script>


@endsection
