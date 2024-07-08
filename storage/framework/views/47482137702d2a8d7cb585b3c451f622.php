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
    <section class="content">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-sm-2">
                    <div class="card-title">
                        <a href="<?php echo e(url('operator/dosen/create')); ?>" class="btn btn-primary">
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
                                            <?php $__currentLoopData = $dosen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dosen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($loop->iteration); ?></td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="<?php echo e(url('operator/dosen/show', $dosen->id)); ?>"
                                                                class="btn btn-info">
                                                                <i class="ri-file-info-line"></i>
                                                            </a>
                                                            <a href="<?php echo e(url('operator/dosen/edit', $dosen->id)); ?>"
                                                                class="btn btn-warning">
                                                                <i class="ri-edit-circle-line"></i>
                                                            </a>
                                                            <button class="btn btn-danger" type="button"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#hapus<?php echo e($dosen->id); ?>">
                                                                <i class="ri-chat-delete-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                    <td><?php echo e($dosen->nama); ?></td>
                                                    <td><?php echo e($dosen->alamat); ?></td>
                                                    <td><?php echo e($dosen->tempat_lahir); ?></td>
                                                    <td><?php echo e($dosen->tanggal_lahir); ?></td>
                                                    <td><?php echo e($dosen->program_studi); ?></td>
                                                    <td><?php echo e($dosen->jabatan_akademik); ?></td>
                                                </tr>
                                                <?php if (isset($component)) { $__componentOriginal11ac01a1fe73c63548607805568e4b7a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal11ac01a1fe73c63548607805568e4b7a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.delete','data' => ['id' => 'hapus'.e($dosen->id).'','action' => ''.e(url('operator/dosen/delete', $dosen->id)).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.delete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'hapus'.e($dosen->id).'','action' => ''.e(url('operator/dosen/delete', $dosen->id)).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal11ac01a1fe73c63548607805568e4b7a)): ?>
<?php $attributes = $__attributesOriginal11ac01a1fe73c63548607805568e4b7a; ?>
<?php unset($__attributesOriginal11ac01a1fe73c63548607805568e4b7a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal11ac01a1fe73c63548607805568e4b7a)): ?>
<?php $component = $__componentOriginal11ac01a1fe73c63548607805568e4b7a; ?>
<?php unset($__componentOriginal11ac01a1fe73c63548607805568e4b7a); ?>
<?php endif; ?>
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
<?php if (isset($__attributesOriginalfc295a45e885bd4bf50b27cf4a5c3753)): ?>
<?php $attributes = $__attributesOriginalfc295a45e885bd4bf50b27cf4a5c3753; ?>
<?php unset($__attributesOriginalfc295a45e885bd4bf50b27cf4a5c3753); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc295a45e885bd4bf50b27cf4a5c3753)): ?>
<?php $component = $__componentOriginalfc295a45e885bd4bf50b27cf4a5c3753; ?>
<?php unset($__componentOriginalfc295a45e885bd4bf50b27cf4a5c3753); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\P3M\resources\views/operator/dosen/index.blade.php ENDPATH**/ ?>