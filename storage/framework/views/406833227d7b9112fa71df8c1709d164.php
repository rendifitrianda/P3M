<?php if (isset($component)) { $__componentOriginalc852197415d233a452a914d6dce29771 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc852197415d233a452a914d6dce29771 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.starter','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('starter'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-8 card-title">
                        <h4 class="pb-3">Daftar Usulan Penelitian didanai</h4>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped mt-3 table">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="width: 40px;">No</th>
                                                    <th class="">Skema</th>
                                                    <th class="">Judul</th>
                                                    <th class="">Tahun Pelaksanaan</th>
                                                    <th class="">Dana Disetujui</th>
                                                    <th class="text-center">Dokumen</th>
                                                    <th class="">Status</th>
                                                    <th class="">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="">
                                                    <td class="text-center">1</td>
                                                    <td class="">Penelitian Dasar - Penelitian Dosen Pemula</td>
                                                    <td class="">Pengembangan Sistem Deteksi Plagiarisme Tugas
                                                        Akhir Mahasiswa Berbasis Natural Language Processing Menggunakan
                                                        Algoritma Jaro-Winkler dan TF-IDF</td>
                                                    <td class="">2023</td>
                                                    <td class="">15,120,000</td>
                                                    <td class="text-center"><button type="button"
                                                            class="btn-sm btn btn-info"><span
                                                                class="fa fa-download"></span></button></td>
                                                    <td class=""><span class="badge bg-success">Sudah Di
                                                            Perbaiki</span></td>
                                                    <td class=""><button type="button"
                                                            class="btn btn-primary btn-sm"><span
                                                                class="fa fa-edit"></span></button></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="text-center">2</td>
                                                    <td class="">Penelitian Dasar - Penelitian Dosen Pemula</td>
                                                    <td class="">Pemetaan Wilayah Rawan Banjir Menggunakan Sistem
                                                        Informasi Geografis Dalam Mitigasi Bencana di Kabupaten Ketapang
                                                    </td>
                                                    <td class="">2022</td>
                                                    <td class="">11,001,000</td>
                                                    <td class="text-center"><button type="button"
                                                            class="btn-sm btn btn-info"><span
                                                                class="fa fa-download"></span></button></td>
                                                    <td class=""><span class="badge bg-danger">Belum
                                                            Selesai</span></td>
                                                    <td class=""><button type="button"
                                                            class="btn btn-primary btn-sm"><span
                                                                class="fa fa-edit"></span></button></td>
                                                </tr>
                                            </tbody>
                                        </table>
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
<?php if (isset($__attributesOriginalc852197415d233a452a914d6dce29771)): ?>
<?php $attributes = $__attributesOriginalc852197415d233a452a914d6dce29771; ?>
<?php unset($__attributesOriginalc852197415d233a452a914d6dce29771); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc852197415d233a452a914d6dce29771)): ?>
<?php $component = $__componentOriginalc852197415d233a452a914d6dce29771; ?>
<?php unset($__componentOriginalc852197415d233a452a914d6dce29771); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\P3M\resources\views/layout/penelitian/perbaikan_usulan/index.blade.php ENDPATH**/ ?>