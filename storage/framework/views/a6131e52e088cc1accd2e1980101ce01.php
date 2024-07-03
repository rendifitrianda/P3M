<?php if (isset($component)) { $__componentOriginal2fb16f50ad47a7bebe8d927b7a60de61 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2fb16f50ad47a7bebe8d927b7a60de61 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.dosen_layouts.app','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.dosen_layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="card">
        <div class="card-header">
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row pengusul">
                            <h4 class="text-bold font-size-16 text-uppercase"
                                style="color: rgb(73, 80, 87); font-weight: bold;">
                                Dashboard Pengusul</h4>
                            <form action="<?php echo e(url('dashboard')); ?>" method="get">

                            </form>
                            <div class="col-sm-12">
                                <div class="pengusul_overlay p-5 text-center bg-image rounded-3"
                                    style="background-image: url(&quot;/static/media/jumbotron-biru.914d0c2a.svg&quot;);">
                                    <div class="mask text-white">
                                        <div class="d-flex justify-content-start align-items-center h-100">
                                            <p class="font-size-14 text-white text-left" style="font-weight: 400;">Anda
                                                dapat
                                                mengajukan usulan <br>terkait dengan layanan berikut :</p>
                                        </div>
                                    </div>
                                    <div
                                        class="pengusul_wrapper d-flex align-items-center justify-content-center gap-3">
                                        <a class="card pengusul_card mini-stats-wid px-1 py-1 px-sm-5 py-sm-3"
                                            href="/penelitian/usulan/v2">
                                            <div class="pengusul_card_body card-body mt-3">
                                                <div class="d-flex text-primary gap-2 align-items-center"
                                                    style="font-weight: bold;"><i
                                                        class="bx bx-search-alt-2 font-size-24 text-primary"></i>Penelitian
                                                </div>
                                            </div>
                                        </a><a class="card pengusul_card mini-stats-wid px-1 py-1 px-sm-5 py-sm-3"
                                            href="/pengabdian/usulan/v2">
                                            <div class="pengusul_card_body card-body mt-3">
                                                <div class="d-flex text-primary gap-2 align-items-center"
                                                    style="font-weight: bold;"><i
                                                        class="bx bx-star font-size-24 text-primary"></i>Pengabdian
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h4 class="text-primary text-uppercase font-size-12 mb-4 ">Status usulan terakhir</h4>
                            <div class="col-lg-12">
                                <div class="card card-body">
                                    <div class="row">
                                        <div class="mx-auto col-lg-10">
                                            <div class="h3 mt-0 font-size-12 mb-1 card-title">Usulan Penelitian</div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h3 class="font-size-14 mb-4 text-truncate"
                                                        style="font-weight: bold; color: rgb(73, 80, 87);">Pemetaan
                                                        Wilayah
                                                        Rawan Banjir Menggunakan Sistem Informasi Geografis Dalam
                                                        Mitigasi
                                                        Bencana di Kabupaten Ketapang</h3>
                                                </div>
                                            </div>
                                            <div class="wizard">
                                                <div class="wizard-steps-wrapper">
                                                    <div class="wizard-steps completed">
                                                        <div class="wizard-steps-dot"><i class="fa fa-check"></i></div>
                                                        <div class="wizard-steps-line first"></div>
                                                        <div class="wizard-steps-line second"></div>
                                                        <div>
                                                            <div><label class="text-primary font-size-12 mb-0 ">Tahapan
                                                                    Seleksi/Usulan</label></div>
                                                            <div><label class="text-muted block font-size-10">-</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wizard-steps completed">
                                                        <div class="wizard-steps-dot"><i class="fa fa-check"></i></div>
                                                        <div class="wizard-steps-line first"></div>
                                                        <div class="wizard-steps-line second"></div>
                                                        <div>
                                                            <div><label class="text-primary font-size-12 mb-0 ">Tahapan
                                                                    Pelaksanaan Kegiatan</label></div>
                                                            <div><label class="text-muted block font-size-10">-</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wizard-steps completed">
                                                        <div class="wizard-steps-dot"><i class="fa fa-check"></i></div>
                                                        <div class="wizard-steps-line first"></div>
                                                        <div class="wizard-steps-line second"></div>
                                                        <div>
                                                            <div><label class="text-primary font-size-12 mb-0 ">Tahapan
                                                                    Seleksi
                                                                    Lanjutan</label></div>
                                                            <div><label class="text-muted block font-size-10">-</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wizard-steps completed">
                                                        <div class="wizard-steps-dot"><i class="fa fa-check"></i></div>
                                                        <div class="wizard-steps-line first"></div>
                                                        <div class="wizard-steps-line second"></div>
                                                        <div>
                                                            <div><label class="text-primary font-size-12 mb-0 ">Tahapan
                                                                    Pasca
                                                                    Pelaksanaan Kegiatan</label></div>
                                                            <div><label
                                                                    class="text-muted block font-size-10">21-04-2024</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h5 class="text-primary font-size-14 text-uppercase">profil anda</h5>
                            <div class="col-md-6 col-lg-4"><a href="/identitas">
                                    <div class="mini-stats-wid card">
                                        <div class="menu_profile_items card-body">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <p class="text-muted fw-medium menu_profile_title">Identitas</p>
                                                    <h4 class="mb-0 menu_profile_desc">DARMANTO</h4>
                                                </div>
                                                <div class="icon" style="font-size: 50px;">
                                                    <i class="ri-account-circle-line"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="col-md-6 col-lg-4"><a href="/riwayat-penelitian">
                                    <div class="mini-stats-wid card">
                                        <div class="menu_profile_items card-body">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <p class="text-muted fw-medium menu_profile_title">Penelitian</p>
                                                    <h4 class="mb-0 menu_profile_desc">2</h4>
                                                </div>
                                                <div class="icon" style="font-size: 50px;">
                                                    <i class="ri-account-circle-line"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="col-md-6 col-lg-4"><a href="/riwayat-pengabdian">
                                    <div class="mini-stats-wid card">
                                        <div class="menu_profile_items card-body">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <p class="text-muted fw-medium menu_profile_title">Pengabdian</p>
                                                    <h4 class="mb-0 menu_profile_desc">0</h4>
                                                </div>
                                                <div class="icon" style="font-size: 50px;">
                                                    <i class="ri-account-circle-line"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="col-md-6 col-lg-4">
                                <div class="mini-stats-wid card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium menu_profile_title">Artikel pada Jurnal
                                                    Internasional Bereputasi</p>
                                                <h4 class="mb-0 menu_profile_desc">0</h4>
                                            </div>
                                            <div class="icon" style="font-size: 50px;">
                                                <i class="ri-account-circle-line"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4"><a href="/sinta">
                                    <div class="mini-stats-wid card">
                                        <div class="menu_profile_items card-body">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <p class="text-muted fw-medium menu_profile_title">Sinta Skor
                                                        Overall</p>
                                                    <h4 class="mb-0 menu_profile_desc">124</h4>
                                                </div>
                                                <div class="icon" style="font-size: 50px;">
                                                    <i class="ri-account-circle-line"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="col-md-6 col-lg-4">
                                <div class="mini-stats-wid card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium menu_profile_title">HKI</p>
                                                <h4 class="mb-0 menu_profile_desc">3</h4>
                                            </div>
                                            <div class="icon" style="font-size: 50px;">
                                                <i class="ri-account-circle-line"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="mini-stats-wid card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium menu_profile_title">Buku</p>
                                                <h4 class="mb-0 menu_profile_desc">1</h4>
                                            </div>
                                            <div class="icon" style="font-size: 50px;">
                                                <i class="ri-account-circle-line"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="mini-stats-wid card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium menu_profile_title">Sinta Skor 3Yr</p>
                                                <h4 class="mb-0 menu_profile_desc">112</h4>
                                            </div>
                                            <div class="icon" style="font-size: 50px;">
                                                <i class="ri-account-circle-line"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="mini-stats-wid card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium menu_profile_title">Scopus H-Index</p>
                                                <h4 class="mb-0 menu_profile_desc">0</h4>
                                            </div>
                                            <div class="icon" style="font-size: 50px;">
                                                <i class="ri-account-circle-line"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="overflow-hidden card">
                            <div class=" ">
                                <div class="row" style="height: 100px;">

                                    <div class="col-8">
                                        <div class="text-primary p-3">
                                            <h5 class="text-primary fw-semibold"><?php echo e($dosen->nama); ?></h5>
                                            <p class="mb-0 fw-semibold">Program Studi <?php echo e($dosen->program_studi); ?>

                                            </p>
                                        </div>
                                    </div>
                                    <div class="text-right col-4"><img src="/static/media/blank_avatar.b909b106.png"
                                            alt="" style="height: 100px;">
                                    </div>
                                </div>
                            </div>
                            <div class="pt-0 card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pt-4">
                                            <div class="row">
                                                <div class="row">

                                                    <div class="col-12 col-sm-6">
                                                        <p class="text-muted mb-0">NIDN/NIDK</p>
                                                        <h5 class="font-size-12 mb-3 text-primary">
                                                            <?php echo e($dosen->nidn); ?>

                                                        </h5>

                                                        <p class="text-muted mb-0">Klaster</p>
                                                        <h5 class="font-size-12 mb-3 text-primary">
                                                            <?php echo e($dosen->klaster); ?>

                                                        </h5>

                                                        <p class="text-muted mb-0">Institusi</p>
                                                        <h5 class="font-size-12 mb-3 text-primary">
                                                            <?php echo e($dosen->institusi); ?>

                                                        </h5>

                                                        <p class="text-muted mb-0">Program Studi</p>
                                                        <h5 class="font-size-12 mb-3 text-primary">
                                                            <?php echo e($dosen->program_studi); ?>

                                                        </h5>

                                                        <p class="text-muted mb-0">Jenjang Pendidikan</p>
                                                        <h5 class="font-size-12 mb-3 text-primary">
                                                            <?php echo e($dosen->jenjang_pendidikan); ?>

                                                        </h5>

                                                        <p class="text-muted mb-0">Jabatan Akademik</p>
                                                        <h5 class="font-size-12 mb-3 text-primary">
                                                            <?php echo e($dosen->jabatan_akademik); ?>

                                                        </h5>

                                                        <p class="text-muted mb-0">Alamat</p>
                                                        <h5 class="font-size-12 mb-3 text-primary"><?php echo e($dosen->alamat); ?>

                                                        </h5>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <p class="text-muted mb-0">Tempat Tanggal Lahir</p>
                                                        <h5 class="font-size-12 mb-3 text-primary">
                                                            <?php echo e($dosen->tempat_lahir); ?>,<?php echo e($dosen->tanggal_lahir); ?>

                                                        </h5>
                                                        <p class="text-muted mb-0">No KTP</p>
                                                        <h5 class="font-size-12 mb-3 text-primary">
                                                            <?php echo e($dosen->nomor_ktp); ?>

                                                        </h5>

                                                        <p class="text-muted mb-0">No HP</p>
                                                        <h5 class="font-size-12 mb-3 text-primary">
                                                            <?php echo e($dosen->nomor_hp); ?>

                                                        </h5>
                                                        <p class="text-muted mb-0">Alamat Surel</p>
                                                        <h5 class="font-size-12 mb-3 text-primary">
                                                            <?php echo e($dosen->alamat_surel); ?>

                                                        </h5>
                                                        <p class="text-muted mb-0">Website Personal</p>
                                                        <h5 class="font-size-12 mb-3 text-primary">
                                                            <?php echo e($dosen->website_personal); ?></h5>
                                                    </div>

                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2fb16f50ad47a7bebe8d927b7a60de61)): ?>
<?php $attributes = $__attributesOriginal2fb16f50ad47a7bebe8d927b7a60de61; ?>
<?php unset($__attributesOriginal2fb16f50ad47a7bebe8d927b7a60de61); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2fb16f50ad47a7bebe8d927b7a60de61)): ?>
<?php $component = $__componentOriginal2fb16f50ad47a7bebe8d927b7a60de61; ?>
<?php unset($__componentOriginal2fb16f50ad47a7bebe8d927b7a60de61); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\P3M\resources\views/dosen/dashboard.blade.php ENDPATH**/ ?>