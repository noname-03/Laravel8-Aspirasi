<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <h2>ASPIRASI</h2>
        {{-- <div class="sidebar-brand-text mx-3"> <img src={{ asset('img/logo_haus.png') }} width="100" /></div> --}}
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    {{-- <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    {{-- <div class="sidebar-heading">
        Interface
    </div> --}}

    <!-- Nav Item - Pages Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="buttons.html">Buttons</a>
                <a class="collapse-item" href="cards.html">Cards</a>
            </div>
        </div>
    </li> --}}

    <!-- Nav Item - Utilities Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a>
            </div>
        </div>
    </li> --}}

    <!-- Divider -->
    {{-- <hr class="sidebar-divider"> --}}

    <!-- Heading -->
    <div class="sidebar-heading">
        Data
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    {{-- @if (Auth::user()->role == 'admin') --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Data</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data:</h6>
                {{-- <a class="collapse-item" href="{{ route('admin.class_education.index') }}">Data Kelas</a> --}}
                {{-- <a class="collapse-item" href="{{ route('admin.attendances.index') }}">Data Absensi</a> --}}
                <a class="collapse-item" href="{{ route('admin.category.index') }}">Data Kategori</a>
                <a class="collapse-item" href="{{ route('admin.dprd.index') }}">Data Dprd</a>
                <a class="collapse-item" href="{{ route('admin.aspiration.index') }}">Data Aspirasi</a>
                <a class="collapse-item" href="{{ route('admin.suggestion.index') }}">Data Saran</a>
                {{-- <a class="collapse-item" href="{{ route('admin.cabang.index') }}">Data Cabang</a>
                    <a class="collapse-item" href="{{ route('admin.user.index') }}">Data User</a>
                    <a class="collapse-item" href="{{ route('transaction.index') }}">Data Transaksi</a> --}}
                {{-- <a class="collapse-item" href="{{ route('admin.user.index') }}">Data Yang Sudah Disetujui</a> --}}
            </div>
            <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Laporan:</h6>
                    <a class="collapse-item" href="{{ route('report.category') }}">Laporan Kategori</a>
                    <a class="collapse-item" href="{{ route('report.cabang') }}">Laporan Cabang</a>
                    <a class="collapse-item" href="{{ route('report.user') }}">Laporan User</a>
                    <a class="collapse-item" href="{{ route('report.productAdmin') }}">Laporan Product</a>
                    <a class="collapse-item" href="{{ route('report.transaction') }}">Laporan Transaksi</a> --}}
                {{-- <a class="collapse-item" href="{{ route('transaction.index') }}">Data Transaksi</a> --}}
                {{-- <a class="collapse-item" href="{{ route('admin.user.index') }}">Data Yang Sudah Disetujui</a> --}}
            </div>
        </div>
    </li>
    {{-- @else
        <li class="nav-item active">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Data</span>
            </a>
            <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Data:User</h6>
                    <a class="collapse-item" href="{{ route('user.product.index', Auth::user()->id) }}">Data Produk</a>
                    <a class="collapse-item" href="{{ route('user.transaction.index') }}">Data Transaksi</a>
                </div>

                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Laporan:</h6>
                    <a class="collapse-item" href="{{ route('report.product.out') }}">Laporan Barang Keluar</a>
                    <a class="collapse-item" href="{{ route('report.product.in') }}">Laporan Barang Masuk</a>
                    <a class="collapse-item" href="{{ route('report.product', Auth::user()->id) }}">Laporan Produk</a>
                </div>
            </div>
        </li>
    @endif --}}

    <!-- Nav Item - Charts -->
    {{-- <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li> --}}

    <!-- Nav Item - Tables -->
    {{-- <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.class_education.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Kelas</span></a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
