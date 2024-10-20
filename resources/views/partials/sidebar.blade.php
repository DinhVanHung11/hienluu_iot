<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
        <img src="/template/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">My Admin</span>
    </a>

    <div class="sidebar">
        <div class="pb-3 mt-3 mb-3 user-panel d-flex">
            <div class="image">
                {{-- <img src="{{$user->image}}" class="img-circle elevation-2" alt="{{$user->name}}"> --}}
            </div>
            <div class="info">
                {{-- <a href="javascript:void(0)" class="d-block">{{$user->name}}</a> --}}
                <a href="javascript:void(0)" class="d-block">Admin</a>
            </div>
        </div>

        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
            </ul>
        </nav>
    </div>
</aside>
