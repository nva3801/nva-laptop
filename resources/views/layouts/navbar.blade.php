<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.slider.index') }}">
            <i class="fa-solid fa-bars"></i>
            <span>Quản Lý Slide</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.category.index') }}">
            <i class="fa-solid fa-bars"></i>
            <span>Quản Lý Danh Mục</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.categorydetail.index') }}">
            <i class="fa-solid fa-list-ul"></i>
            <span>Chi Tiết Danh Mục</span>
        </a>
    </li>
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.product.index') }}"></i>
            <i class="fa-solid fa-laptop"></i>
            <span>Quản Lý Sản Phẩm</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.productslider.index') }}"></i>
            <i class="fa-solid fa-laptop"></i>
            <span>Quản Lý Slide Sản Phẩm</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('admin/bill') }}"></i>
            <i class="fa-solid fa-money-bill-1-wave"></i>
            <span>Quản Lý Đơn Hàng</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.faq.index') }}"></i>
            <i class="fa-solid fa-book-open"></i>
            <span>Quản Lý FAQ</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.news.index') }}"></i>
            <i class="fa-solid fa-newspaper"></i>
            <span>Quản Lý Tin Tức</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Quản Lý Người Dùng
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.admin.index') }}"></i>
            <i class="fa-solid fa-user-lock"></i>
            <span>Quản Lý Admin</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.user.index') }}"></i>
            <i class="fa-solid fa-user"></i>
            <span>Quản Lý Khách Hàng</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->


</ul>
