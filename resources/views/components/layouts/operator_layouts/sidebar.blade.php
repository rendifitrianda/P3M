<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('operator/dashboard') }}">
                <i class="ri-dashboard-line"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('operator/dosen') }}">
                <i class="bi bi-person-plus"></i>
                <span>Tambah dosen</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-laptop"></i><span>Monitoring</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url('operator/reguler') }}">
                        <i class="bi bi-circle"></i><span>Usulan Regular</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('operator/usulan') }}">
                        <i class="bi bi-circle"></i><span>Perbaikan Usulan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('operator/laporan_kemajuan') }}">
                        <i class="bi bi-circle"></i><span>Laporan Kemajuan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('operator/laporan_akhir') }}">
                        <i class="bi bi-circle"></i><span>Laporan Akhir</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('operator/catatan_harian') }}">
                        <i class="bi bi-circle"></i><span>Catatan Harian</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Tables Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Data Pendukung</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="profile_lembaga">
                        <i class="bi bi-circle"></i><span>Profile lembaga</span>
                    </a>
                </li>
                <li>
                    <a href="cari_akun">
                        <i class="bi bi-circle"></i><span>Cari Akun</span>
                    </a>
                </li>
                <li>
                    <a href="singkronasi_prodi">
                        <i class="bi bi-circle"></i><span>Singkronasi Prodi</span>
                    </a>
                </li>
                <li>
                    <a href="singkronasi_dosen">
                        <i class="bi bi-circle"></i>Singkronasi Dosen</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->
    </ul>
</aside><!-- End Sidebar-->
