
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.dashboard')}}">

        <div class="sidebar-brand-text ">Devletimiz Admin </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item @if(Request::segment(2)=="panel") active @endif">
        <a class="nav-link" href="{{route('admin.dashboard')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Panel</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        İçerik Yönetimi
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link  @if(Request::segment(2)=="makaleler") in @else collapsed @endif" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-edit"></i>
          <span>Makaleler</span>
        </a>
        <div id="collapseTwo" class="collapse @if(Request::segment(2)=="makaleler") show @endif" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Makale İşlemleri:</h6>
            <a class="collapse-item @if(Request::segment(2)=="makaleler" and !Request::segment(3)) active @endif" href="{{route('admin.makaleler.index')}}">Tüm Makaleler</a>
            <a class="collapse-item  @if(Request::segment(2)=="makaleler" and Request::segment(3)=="create") active @endif" href="{{route('admin.makaleler.create')}}">Makale Oluştur</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed @if(Request::segment(2)=="kategoriler") text-white  @endif" href="{{route('admin.category.index')}}" aria-controls="collapseUtilities">
          <i class="fas fa-list @if(Request::segment(2)=="kategoriler") text-white  @endif"></i>
          <span>Kategoriler</span>
        </a>

      </li>
      <li class="nav-item">
        <a class="nav-link collapsed @if(Request::segment(2)=="yaptiranlar") text-white  @endif" href="{{route('admin.maker.index')}}" aria-controls="collapseUtilities">
          <i class="fas fa-list @if(Request::segment(2)=="yaptiranlar") text-white  @endif"></i>
          <span>Yaptıranlar</span>
        </a>

      </li>
      <li class="nav-item">
        <a class="nav-link collapsed @if(Request::segment(2)=="padisahlar") text-white  @endif" href="{{route('admin.padisah.index')}}" aria-controls="collapseUtilities">
          <i class="fas fa-list @if(Request::segment(2)=="padisahlar") text-white  @endif"></i>
          <span>Padişahlar</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed @if(Request::segment(2)=="seyhulislamlar") text-white  @endif" href="{{route('admin.seyhulislam.index')}}" aria-controls="collapseUtilities">
          <i class="fas fa-list @if(Request::segment(2)=="seyhulislamlar") text-white  @endif"></i>
          <span>Şeyhülislamlar</span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed @if(Request::segment(2)=="mimarlar") text-white  @endif" href="{{route('admin.architect.index')}}" aria-controls="collapseUtilities">
          <i class="fas fa-list @if(Request::segment(2)=="mimarlar") text-white  @endif"></i>
          <span>Mimarlar</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed @if(Request::segment(2)=="yuzyillar") text-white  @endif" href="{{route('admin.century.index')}}" aria-controls="collapseUtilities">
          <i class="fas fa-list @if(Request::segment(2)=="yuzyillar") text-white  @endif"></i>
          <span>Yüzyıllar</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed @if(Request::segment(2)=="durum") text-white  @endif" href="{{route('admin.status.index')}}" aria-controls="collapseUtilities">
          <i class="fas fa-list @if(Request::segment(2)=="durum") text-white  @endif"></i>
          <span>Durumlar</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed @if(Request::segment(2)=="ulkeler") text-white  @endif" href="{{route('admin.country.index')}}" aria-controls="collapseUtilities">
          <i class="fas fa-list @if(Request::segment(2)=="mimarlar") text-white  @endif"></i>
          <span>Ülkeler</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed @if(Request::segment(2)=="sehirler") text-white  @endif" href="{{route('admin.city.index')}}" aria-controls="collapseUtilities">
          <i class="fas fa-list @if(Request::segment(2)=="mimarlar") text-white  @endif"></i>
          <span>Şehirler</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed @if(Request::segment(2)=="semt") text-white  @endif" href="{{route('admin.semt.index')}}" aria-controls="collapseUtilities">
          <i class="fas fa-list @if(Request::segment(2)=="semt") text-white  @endif"></i>
          <span>Semt</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed @if(Request::segment(2)=="ilçe") text-white  @endif" href="{{route('admin.district.index')}}" aria-controls="collapseUtilities">
          <i class="fas fa-list @if(Request::segment(2)=="ilçe") text-white  @endif"></i>
          <span>İlçe</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed @if(Request::segment(2)=="koy") text-white  @endif" href="{{route('admin.village.index')}}" aria-controls="collapseUtilities">
          <i class="fas fa-list @if(Request::segment(2)=="koy") text-white  @endif"></i>
          <span>Köy</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed @if(Request::segment(2)=="mahalle") text-white  @endif" href="{{route('admin.neighborhood.index')}}" aria-controls="collapseUtilities">
          <i class="fas fa-list @if(Request::segment(2)=="mahalle") text-white  @endif"></i>
          <span>Mahalle</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed @if(Request::segment(2)=="cadde") text-white  @endif" href="{{route('admin.avenue.index')}}" aria-controls="collapseUtilities">
          <i class="fas fa-list @if(Request::segment(2)=="cadde") text-white  @endif"></i>
          <span>Cadde</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed @if(Request::segment(2)=="sokak") text-white  @endif" href="{{route('admin.street.index')}}" aria-controls="collapseUtilities">
          <i class="fas fa-list @if(Request::segment(2)=="sokak") text-white  @endif"></i>
          <span>Sokak</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link  @if(Request::segment(2)=="sayfalar") in @else collapsed @endif" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true" aria-controls="collapsePage">
          <i class="fas fa-fw fa-folder"></i>
          <span>Sayfalar</span>
        </a>
        <div id="collapsePage" class="collapse @if(Request::segment(2)=="sayfalar") show @endif" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sayfa İşlemleri:</h6>
            <a class="collapse-item @if(Request::segment(2)=="sayfalar" and !Request::segment(3)) active @endif" href="{{route('admin.page.index')}}">Tüm Sayfalar</a>
            <a class="collapse-item  @if(Request::segment(2)=="sayfalar" and Request::segment(3)=="create") active @endif" href="{{route('admin.page.create')}}">Sayfa Oluştur</a>
          </div>
        </div>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Site Ayarları
      </div>
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.config.index')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Ayarlar</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>


            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}}</span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">


                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Çıkış Yap
                </a>
              </div>
            </li>

          </ul>

        </nav>

               <!-- End of Topbar -->

               <!-- Begin Page Content -->
               <div class="container-fluid">

                 <!-- Page Heading -->
                 <div class="d-sm-flex align-items-center justify-content-between mb-4">
                   <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
                   <a href="{{route('homepage')}}" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-globe fa-sm text-white-50"></i> Siteyi Görüntüle</a>
                 </div>
