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
                    <form action="<?php echo e(url('layout/usulan_baru')); ?>" method="POST">
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
                                    <label for="" class="control-label"><b>Hasil Penelitian</b></label>
                                    <input type="text" name="hasil_penelitian" class="form-control" required>
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
<?php if (isset($__attributesOriginalc852197415d233a452a914d6dce29771)): ?>
<?php $attributes = $__attributesOriginalc852197415d233a452a914d6dce29771; ?>
<?php unset($__attributesOriginalc852197415d233a452a914d6dce29771); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc852197415d233a452a914d6dce29771)): ?>
<?php $component = $__componentOriginalc852197415d233a452a914d6dce29771; ?>
<?php unset($__componentOriginalc852197415d233a452a914d6dce29771); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\P3M\resources\views/layout/penelitian/usulan_baru/create.blade.php ENDPATH**/ ?>