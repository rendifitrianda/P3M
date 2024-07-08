<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?php echo e(url('dosen/dashboard')); ?>">
                <i class="ri-dashboard-line"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Penelitian</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?php echo e(url('dosen/usulan')); ?>">
                        <i class="bi bi-circle"></i><span>Usulan Baru</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(url('dosen/perbaikan_usulan')); ?>">
                        <i class="bi bi-circle"></i><span>Perbaikan Usulan</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(url('dosen/laporan_kemajuan')); ?>">
                        <i class="bi bi-circle"></i><span>laporan kemajuan</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(url('dosen/laporan_akhir')); ?>">
                        <i class="bi bi-circle"></i><span>Laporan Akhir</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(url('dosen/catatan_harian')); ?>">
                        <i class="bi bi-circle"></i><span>Catatan Harian</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Tables Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="ri-layout-line"></i><span>Pengabdian</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="usulan_baru">
                        <i class="bi bi-circle"></i><span>Usulan Baru</span>
                    </a>
                </li>
                <li>
                    <a href="perbaikan_usulan">
                        <i class="bi bi-circle"></i><span>Perbaikan Usulan</span>
                    </a>
                </li>
                <li>
                    <a href="laporan_kemajuan">
                        <i class="bi bi-circle"></i><span>Laporan Kemajuan</span>
                    </a>
                </li>
                <li>
                    <a href="laporan_akhir">
                        <i class="bi bi-circle"></i><span>Laporan Akhir</span>
                    </a>
                </li>
                <li>
                    <a href="catatan_harian">
                        <i class="bi bi-circle"></i><span>Catatan Harian</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->
    </ul>
</aside><!-- End Sidebar-->
<?php /**PATH C:\laragon\www\P3M\resources\views/components/layouts/dosen_layouts/sidebar.blade.php ENDPATH**/ ?>