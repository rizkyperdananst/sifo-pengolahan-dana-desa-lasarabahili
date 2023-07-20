<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         {{-- <div class="sidebar-brand-icon rotate-n-15">
             <i class="fas fa-laugh-wink"></i>
         </div> --}}
         <div class="sidebar-brand-text mx-3">Pengelolaan Dana Desa Lasarabahili</div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item {{ Request()->is('admin/dashboard*') ? 'active' : '' }}">
         <a class="nav-link" href="{{ route('dashboard') }}">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         Interface
     </div>

     <!-- Nav Item - Pemasukan -->
     <li class="nav-item {{ Request()->is('admin/pemasukan*') ? 'active' : '' }}">
        <a class="nav-link mb-0 pb-0" href="{{ route('pemasukan.index') }}">
            <i class="fa-solid fa-right-to-bracket"></i>
            <span>Pemasukan</span></a>
    </li>

     <!-- Nav Item - Pemasukan -->
     <li class="nav-item {{ Request()->is('admin/pengeluaran*') ? 'active' : '' }}">
        <a class="nav-link mb-0 pb-0" href="{{ route('pengeluaran.index') }}">
            <i class="fa-solid fa-right-to-bracket fa-rotate-180"></i>
            <span>Pengeluaran</span></a>
     </li>

     <!-- Nav Item - Akun -->
     <li class="nav-item {{ Request()->is('admin/akun*') ? 'active' : '' }}">
        <a class="nav-link mb-0 pb-0" href="{{ route('akun.index') }}">
            <i class="fa-solid fa-user"></i>
            <span>Akun</span></a>
     </li>

     <!-- Divider -->
     {{-- <hr class="sidebar-divider"> --}}

     <!-- Heading -->
     {{-- <div class="sidebar-heading">
         Setting
     </div> --}}

     <!-- Nav Item - Pages Collapse Menu -->
     {{-- <li class="nav-item {{ Request()->is('admin/akun*') ? 'active' : '' }}">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
             aria-expanded="true" aria-controls="collapsePages">
             <i class="fas fa-fw fa-gear"></i>
             <span>Setting</span>
         </a>
         <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="{{ route('akun.index') }}">Akun</a>
             </div>
         </div>
     </li> --}}

     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

 </ul>