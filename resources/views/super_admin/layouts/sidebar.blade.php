<section class="msa-sidebar">
    <div class="msa-sidebar-close-btn-area">
        <button>
            <i class="fa fa-close fa-2x"></i>
        </button>
    </div>
    <div class="msa-sidebar_logo">
        <a href="/">
            <img src="{{ asset('assets/images/logo.png') }}" alt="icon">
        </a>
    </div>
    <ul id="msa__metis__menu" class="msa-navbar_menu">
        <li class="mm-active">
            <a href="{{ route('super-admin.dashboard') }}">
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ route('super-admin.admin.index') }}">
                <span>Admin List</span>
            </a>
        </li>
        <li>
            <a href="{{ route('super-admin.school.index') }}">
                <span>School List</span>
            </a>
        </li>
    </ul>
</section>
