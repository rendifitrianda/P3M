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
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="col-sm-3">
                        <div class="card-title">
                            Tambah Data
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="card-body">
                    <form action="<?php echo e(url('dosen/usulan')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Ketua</b></label>
                                    <input type="text" name="ketua" class="form-control"required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Judul</b></label>
                                    <input type="text" name="judul" class="form-control"required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Bidang Fokus</b></label>
                                    <input type="text" name="bidang_fokus" class="form-control"required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Instiusi</b></label>
                                    <input type="text" name="Institusi" class="form-control"required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Tahun Pelaksanaan</b></label>
                                    <input type="number" name="tahun_pelaksanaan" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Peran</b></label>
                                    <input type="text" name="peran" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Status Usulan</b></label>
                                    <input type="text" name="status_usulan" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b> Hasil Penilaian</b></label>
                                    <input type="text" name="hasil_penilaian" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md- mt-4">
                                <button class="float-end btn btn-primary"> <i class="fas fa-save"></i>Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
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
<?php /**PATH C:\laragon\www\P3M\resources\views/dosen/usulan/create.blade.php ENDPATH**/ ?>