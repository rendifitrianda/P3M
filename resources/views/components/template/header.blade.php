 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top d-flex align-items-center" style="background: #053070">

     <div class="d-flex align-items-center justify-content-between">
         <a href="index.html" class="logo d-flex align-items-center">
             <img src="{{ url('assets') }}/assets/img/logo.png" alt="">
             <span class="d-none d-lg-block" style="color: white">P3M</span>
         </a>
         <i class="bi bi-list toggle-sidebar-btn" style="color: white"></i>
     </div><!-- End Logo -->
     <span style="width: 120px">
         <div>
             <div type="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white">
                 Dashboard
             </div>
         </div>
     </span>
     <span style="width: 150px">
         <div class="dropdown">
             <a class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                 style="color: white">
                 Monitoring
             </a>
             <ul class="dropdown-menu">
                 <li><a class="dropdown-item" href="#">Usulan Reguler</a></li>
                 <li><a class="dropdown-item" href="#">Perbaikan Usulan</a></li>
                 <li><a class="dropdown-item" href="#">Catatan Harian</a></li>
                 <li><a class="dropdown-item" href="#">Laporan Kemajuan</a></li>
                 <li><a class="dropdown-item" href="#">Laporan Akhir</a></li>
             </ul>
         </div>
     </span>
     <span style="width: 150px">
         <div class="dropdown">
             <a class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                 style="color: white">
                 Data Pendukung
             </a>

             <ul class="dropdown-menu">
                 <li><a class="dropdown-item" href="#">Profile Lembaga</a></li>
                 <li><a class="dropdown-item" href="#">Cari akun</a></li>
                 <li><a class="dropdown-item" href="#">Singkronasi Prodi</a></li>
                 <li><a class="dropdown-item" href="#">Singkronasi Dosen</a></li>
             </ul>
         </div>
     </span>
     <nav class="header-nav ms-auto">
         <ul class="d-flex align-items-center">
             <li class="nav-item d-block d-lg-none">
                 <a class="nav-link nav-icon search-bar-toggle " href="#">
                     <i class="bi bi-search"></i>
                 </a>
             </li><!-- End Search Icon-->
             <li class="nav-item dropdown pe-3">
                 <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                     data-bs-toggle="dropdown">
                     <img src="{{ url('assets') }}/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                     <span class="d-none d-md-block dropdown-toggle ps-2" style="color: white">K. Anderson</span>
                 </a><!-- End Profile Iamge Icon -->

                 <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                     <li class="dropdown-header">
                         <h6>Kevin Anderson</h6>
                         <span>Web Designer</span>
                     </li>
                     <li>
                         <hr class="dropdown-divider">
                     </li>

                     <li>
                         <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                             <i class="bi bi-person"></i>
                             <span>My Profile</span>
                         </a>
                     </li>
                     <li>
                         <hr class="dropdown-divider">
                     </li>

                     <li>
                         <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                             <i class="bi bi-gear"></i>
                             <span>Account Settings</span>
                         </a>
                     </li>
                     <li>
                         <hr class="dropdown-divider">
                     </li>

                     <li>
                         <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                             <i class="bi bi-question-circle"></i>
                             <span>Need Help?</span>
                         </a>
                     </li>
                     <li>
                         <hr class="dropdown-divider">
                     </li>

                     <li>
                         <a class="dropdown-item d-flex align-items-center" href="#">
                             <i class="bi bi-box-arrow-right"></i>
                             <span>Sign Out</span>
                         </a>
                     </li>

                 </ul><!-- End Profile Dropdown Items -->
             </li><!-- End Profile Nav -->

         </ul>
     </nav><!-- End Icons Navigation -->
 </header><!-- End Header -->
