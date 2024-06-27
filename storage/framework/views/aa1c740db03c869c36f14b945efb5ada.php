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
    <section class="content">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-sm-2">
                    <div class="card-title">
                        <a href="<?php echo e(url('frontend/dashboard/create')); ?>" class="btn btn-primary">
                            <i class="fas fa-info">Tambah Data</i>
                        </a>
                    </div>
                </div>
                <?php echo csrf_field(); ?>
                <div class="mb-5 row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <!-- Default Table -->
                                <div class="table-responsive ">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Action</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Tempat Lahir</th>
                                                <th scope="col">Tgl Lahir</th>
                                                <th scope="col">Program Studi</th>
                                                <th scope="col">Jabatan Akademik</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $list_dosen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dosen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($loop->iteration); ?></td>

                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="<?php echo e(url('frontend/dashboard/show', $dosen->id)); ?>"
                                                                class="btn btn-info">
                                                                <i class="ri-file-info-line"></i>
                                                            </a>
                                                            <a href="<?php echo e(url('frontend/dashboard/edit', $dosen->id)); ?>"
                                                                class="btn btn-warning">
                                                                <i class="ri-edit-circle-line"></i>
                                                            </a>
                                                            <?php if (isset($component)) { $__componentOriginalec24a1d3733c1f4eaf5690893195cfcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalec24a1d3733c1f4eaf5690893195cfcb = $attributes; } ?>
<?php $component = App\View\Components\Button\Delete::resolve(['id' => ''.e($dosen->id).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button.delete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Button\Delete::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalec24a1d3733c1f4eaf5690893195cfcb)): ?>
<?php $attributes = $__attributesOriginalec24a1d3733c1f4eaf5690893195cfcb; ?>
<?php unset($__attributesOriginalec24a1d3733c1f4eaf5690893195cfcb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalec24a1d3733c1f4eaf5690893195cfcb)): ?>
<?php $component = $__componentOriginalec24a1d3733c1f4eaf5690893195cfcb; ?>
<?php unset($__componentOriginalec24a1d3733c1f4eaf5690893195cfcb); ?>
<?php endif; ?>
                                                        </div>
                                                    </td>
                                                    <td><?php echo e($dosen->nama); ?></td>
                                                    <td><?php echo e($dosen->alamat); ?></td>
                                                    <td><?php echo e($dosen->tempat_lahir); ?></td>
                                                    <td><?php echo e($dosen->tanggal_lahir); ?></td>
                                                    <td><?php echo e($dosen->program_studi); ?></td>
                                                    <td><?php echo e($dosen->jabatan_akademik); ?></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                    <!-- End Default Table Example -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
<?php /**PATH C:\laragon\www\P3M\resources\views/frontend/dashboard/index.blade.php ENDPATH**/ ?>