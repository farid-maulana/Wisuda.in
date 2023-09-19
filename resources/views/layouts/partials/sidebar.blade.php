<div class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-logo">
            <img src="{{ Vite::asset('resources/images/logo-text.svg') }}" alt="logo">
        </a>
    </div><!-- sidebar-header -->
    <div id="sidebarMenu" class="sidebar-body">
        <div class="nav-group show">
            <a href="#" class="nav-label">Dashboard</a>
            <ul class="nav nav-sidebar">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ Request::segment(1) == 'dashboard' ? 'active' : '' }}"><i class="ri-dashboard-line"></i> <span>Dashboard</span></a>
                </li>
            </ul>
        </div><!-- nav-group -->
        <div class="nav-group show">
            <a href="#" class="nav-label">Data Master</a>
            <ul class="nav nav-sidebar">
                <li class="nav-item">
                    <a href="{{ route('departments.index') }}" class="nav-link {{ Request::segment(1) == 'departments' ? 'active' : '' }}"><i class="ri-building-line"></i> <span>Data Jurusan & Prodi</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('graduations.index') }}" class="nav-link {{ Request::segment(1) == 'graduations' ? 'active' : '' }}"><i class="ri-graduation-cap-line"></i> <span>Data Wisuda</span></a>
                </li>
            </ul>
        </div><!-- nav-group -->
    </div><!-- sidebar-body -->
</div><!-- sidebar -->
