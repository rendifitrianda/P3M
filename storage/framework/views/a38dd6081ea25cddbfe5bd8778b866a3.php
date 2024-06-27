<?php if (isset($component)) { $__componentOriginal7ae6b45c011e855a5545a671a7f3568e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7ae6b45c011e855a5545a671a7f3568e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="card">
        <div class="pt-4 card-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="pt-4">
                        <div class="row">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <p class="text-muted mb-0">NAMA</p>
                                    <h5 class="font-size-12 mb-3 text-primary"><?php echo e($dosen->nama); ?></h5>
                                    <p class="text-muted mb-0">NIDN/NIDK</p>
                                    <h5 class="font-size-12 mb-3 text-primary"><?php echo e($dosen->nidn); ?></h5>
                                    <p class="text-muted mb-0">Klaster</p>
                                    <h5 class="font-size-12 mb-3 text-primary">Kelompok PT Madya
                                    </h5>
                                    <p class="text-muted mb-0">Institusi</p>
                                    <h5 class="font-size-12 mb-3 text-primary"><?php echo e($dosen->institusi); ?></h5>
                                    <p class="text-muted mb-0">Program Studi</p>
                                    <h5 class="font-size-12 mb-3 text-primary"><?php echo e($dosen->program_studi); ?></h5>
                                    <p class="text-muted mb-0">Jenjang Pendidikan</p>
                                    <h5 class="font-size-12 mb-3 text-primary"><?php echo e($dosen->jenjang_pendidikan); ?></h5>
                                    <p class="text-muted mb-0">Jabatan Akademik</p>
                                    <h5 class="font-size-12 mb-3 text-primary"><?php echo e($dosen->jabatan_akademik); ?></h5>
                                    <p class="text-muted mb-0">Alamat</p>
                                    <h5 class="font-size-12 mb-3 text-primary"><?php echo e($dosen->alamat); ?></h5>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <p class="text-muted mb-0">Tempat Tanggal Lahir</p>
                                    <h5 class="font-size-12 mb-3 text-primary">
                                        <?php echo e($dosen->tempat_lahir); ?>,<?php echo e($dosen->tanggal_lahir); ?></h5>
                                    <p class="text-muted mb-0">No KTP</p>
                                    <h5 class="font-size-12 mb-3 text-primary"><?php echo e($dosen->nomor_ktp); ?></h5>
                                    <p class="text-muted mb-0">No HP</p>
                                    <h5 class="font-size-12 mb-3 text-primary"><?php echo e($dosen->nomor_hp); ?></h5>
                                    <p class="text-muted mb-0">Alamat Surel</p>
                                    <h5 class="font-size-12 mb-3 text-primary"><?php echo e($dosen->alamat_surel); ?></h5>
                                    <p class="text-muted mb-0">Website Personal</p>
                                    <h5 class="font-size-12 mb-3 text-primary"><?php echo e($dosen->website_personal); ?></h5>
                                </div>
                            </div>
                            <div class="text-right col-sm-12">
                                <hr><a class="btn btn-warning "
                                    href="<?php echo e(url('frontend/dashboard/edit', $dosen->id)); ?>"><i
                                        class="fas fa-pen"></i>Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7ae6b45c011e855a5545a671a7f3568e)): ?>
<?php $attributes = $__attributesOriginal7ae6b45c011e855a5545a671a7f3568e; ?>
<?php unset($__attributesOriginal7ae6b45c011e855a5545a671a7f3568e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7ae6b45c011e855a5545a671a7f3568e)): ?>
<?php $component = $__componentOriginal7ae6b45c011e855a5545a671a7f3568e; ?>
<?php unset($__componentOriginal7ae6b45c011e855a5545a671a7f3568e); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\P3M\resources\views/frontend/dashboard/show.blade.php ENDPATH**/ ?>