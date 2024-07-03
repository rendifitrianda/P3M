<?php if (isset($component)) { $__componentOriginalfc295a45e885bd4bf50b27cf4a5c3753 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfc295a45e885bd4bf50b27cf4a5c3753 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.operator_layouts.app','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.operator_layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">Rekap Usulan</h4>
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <div class="col-md-12"><label class="font-size-13 mb-1 form-label">
                                            <h9 class="card-title">Jenis Kegiatan</h9>
                                        </label><select class="form-select form-select-md">
                                            <option value="0">Pilih Jenis Kegiatan</option>
                                            <option value="1">Penelitian</option>
                                            <option value="2">Pengabdian</option>
                                            <option value="141">Prototipe</option>
                                            <option value="143">Kosabangsa</option>
                                        </select></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center row">
                            <div class="mb-2 col-md-2"><button type="button" disabled=""
                                    class="btn btn-success btn btn-secondary disabled"><i
                                        class="bi bi-file-earmark-excel font-size-10 align-middle me-2"></i>Excel</button>
                            </div>
                            <div class="d-flex justify-content-end col-md-10">
                                <h9 class="card-title">Jumlah Proposal:0</h9>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="mb-2 row">
                            <div class="col-md-12">
                                <h1 class="card-title">Daftar Usulan</h1>
                            </div>
                        </div>
                        <div>
                            <div class="p-1 card-body">
                                <div class="text-center"><img src=" <?php echo e(url('assets')); ?>/assets/img/gambar-3.png"
                                        class="img-fluid py-5" alt="Page Not Found"></div>
                                <h5 class="mt-3 card-title text-center">Data tidak tersedia</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfc295a45e885bd4bf50b27cf4a5c3753)): ?>
<?php $attributes = $__attributesOriginalfc295a45e885bd4bf50b27cf4a5c3753; ?>
<?php unset($__attributesOriginalfc295a45e885bd4bf50b27cf4a5c3753); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc295a45e885bd4bf50b27cf4a5c3753)): ?>
<?php $component = $__componentOriginalfc295a45e885bd4bf50b27cf4a5c3753; ?>
<?php unset($__componentOriginalfc295a45e885bd4bf50b27cf4a5c3753); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\P3M\resources\views/operator/usulan/index.blade.php ENDPATH**/ ?>