<div class="header-main px-3 px-lg-4">
    <a id="menuSidebar" href="#" class="menu-link me-3 me-lg-4"><i class="ri-menu-2-fill"></i></a>

    <div class="form-search me-auto">
        <input type="text" class="form-control" placeholder="Search">
        <i class="ri-search-line"></i>
    </div><!-- form-search -->

    <div class="dropdown dropdown-notification ms-3 ms-xl-4">
        <a href="" class="dropdown-link" data-bs-toggle="dropdown" data-bs-auto-close="outside"><small>1</small><i class="ri-notification-3-line"></i></a>
        <div class="dropdown-menu dropdown-menu-end mt-10-f me--10-f">
            <div class="dropdown-menu-header">
                <h6 class="dropdown-menu-title">Notifications</h6>
            </div><!-- dropdown-menu-header -->
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="avatar"><span class="avatar-initial bg-primary">a</span></div>
                    <div class="list-group-body">
                        <p>New listings were added that match your search alert <strong>house for rent</strong></p>
                        <span>Aug 15 08:10pm</span>
                    </div><!-- list-group-body -->
                </li>
            </ul>
            <div class="dropdown-menu-footer"><a href="">Show all Notifications</a></div>
        </div><!-- dropdown-menu -->
    </div><!-- dropdown -->
    <div class="dropdown dropdown-profile ms-3 ms-xl-4">
        <a href="" class="dropdown-link" data-bs-toggle="dropdown" data-bs-auto-close="outside"><div class="avatar online"><img src="{{ Vite::asset('resources/images/user.png') }}" alt=""></div></a>
        <div class="dropdown-menu dropdown-menu-end mt-10-f">
            <div class="dropdown-menu-body">
                <div class="avatar avatar-xl online mb-3"><img src="{{ Vite::asset('resources/images/user.png') }}" alt=""></div>
                <h5 class="mb-1 text-dark fw-semibold">{{ Auth::user()->name }}</h5>

                <nav class="nav">
                    <a href=""><i class="ri-edit-2-line"></i> Edit Profile</a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="ri-logout-box-r-line"></i> Log Out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </nav>
            </div><!-- dropdown-menu-body -->
        </div><!-- dropdown-menu -->
    </div><!-- dropdown -->
</div><!-- header-main -->
