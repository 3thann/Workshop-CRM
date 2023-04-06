<!-- Sidebar -->

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('generics.home')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-keyboard"></i>
        </div>
        <div class="sidebar-brand-text mx-3" href="{{ route('generics.home') }}" >NK Informatique</div>
    </a>


    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('generics.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Un truc
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('customer.index', 3) }}">
            <i class="fas fa-users"></i>
            <span>Clients</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('customer.index', 2) }}">
            <i class="fas fa-users"></i>
            <span>Prospects</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('customer.index', 1) }}">
            <i class="fas fa-users"></i>
            <span>Leads</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('business.index') }}">
            <i class="fas fa-building"></i>
            <span>Entreprises</span>
        </a>
    </li>
    <div class="sidebar-heading">
        Gestion
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('account.index') }}">
            <i class="fas fa-users-cog"></i>
            <span>Gestion de comptes</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('customer.export')}}">
            <i class="fas fa-file-export"></i>
            <span>Exporter les clients</span>
        </a>
    </li>
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">



</ul>
<!-- End of Sidebar -->
