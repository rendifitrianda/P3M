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
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="card-title">
                            <h4 class="pb-3">Usulan Penelitian</h4>
                        </div>
                        <div class="rounded card">
                            <div class="card-header">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-8 mt-2">
                                            <div class="card-title">
                                                <a href="<?php echo e(url('dosen/usulan/create')); ?>" class="btn btn-primary">
                                                    <i class="fas fa-plus">Tambah Data</i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card-title">
                                                <div class="mb-0 mb-0">
                                                    <label for="thn_pelaksanaan" class="form-label">Tahun
                                                        Pelaksanaan
                                                    </label>
                                                    <div class="input-group"><button disabled=""
                                                            class="btn btn-primary disabled"><i
                                                                class="fa fa-filter"></i></button><select
                                                            class="form-control" name="thn_pelaksanaan">
                                                            <option>Pilih Tahun</option>
                                                            <option value="2025">2025</option>
                                                            <option value="2024">2024</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2020">2020</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped mt-3 table">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" style="width: 40px;">No</th>
                                                        <th class="">Ketua</th>
                                                        <th class="">Judul</th>
                                                        <th class="">Bidang Fokus</th>
                                                        <th class="" style="text-align: center;">Tahun Pelaksanaan
                                                        </th>
                                                        <th class="" style="text-align: center;">Peran</th>
                                                        <th class="" style="text-align: center;">Status Usulan
                                                        </th>
                                                        <th class="" style="text-align: center;">Hasil Penilaian
                                                        </th>
                                                        <th class="" style="text-align: center;">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $Usulan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usulan_penelitian_baru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($loop->iteration); ?></td>

                                                            <td>
                                                                <div class="btn-group">
                                                                    <a href="<?php echo e(url('operator/dosen/show', $usulan_penelitian_baru->id)); ?>"
                                                                        class="btn btn-info">
                                                                        <i class="ri-file-info-line"></i>
                                                                    </a>
                                                                    <a href="<?php echo e(url('operator/dosen/edit', $usulan_penelitian_baru->id)); ?>"
                                                                        class="btn btn-warning">
                                                                        <i class="ri-edit-circle-line"></i>
                                                                    </a>
                                                                    <button class="btn btn-danger" type="button"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#hapus<?php echo e($usulan_penelitian_baru->id); ?>">
                                                                        <i class="ri-chat-delete-line"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td><?php echo e($usulan_penelitian_baru->ketua); ?></td>
                                                            <td><?php echo e($usulan_penelitian_baru->judul); ?></td>
                                                            <td><?php echo e($usulan_penelitian_baru->bidang_fokus); ?></td>
                                                            <td><?php echo e($usulan_penelitian_baru->tahun_pelaksanaan); ?></td>
                                                            <td><?php echo e($usulan_penelitian_baru->peran); ?></td>
                                                            <td><?php echo e($usulan_penelitian_baru->status_usulan); ?></td>
                                                            <td><?php echo e($usulan_penelitian_baru->hasil_penilaian); ?></td>
                                                        </tr>
                                                        <?php if (isset($component)) { $__componentOriginal11ac01a1fe73c63548607805568e4b7a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal11ac01a1fe73c63548607805568e4b7a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.delete','data' => ['id' => 'hapus'.e($usulan_penelitian_baru->id).'','action' => ''.e(url('operator/dosen/delete', $usulan_penelitian_baru->id)).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.delete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'hapus'.e($usulan_penelitian_baru->id).'','action' => ''.e(url('operator/dosen/delete', $usulan_penelitian_baru->id)).'']); ?>
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
                                                    <tr>
                                                        <td colspan="11" class="text-center">Data tidak
                                                            tersedia!
                                                        </td>
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
<?php /**PATH C:\laragon\www\P3M\resources\views/dosen/usulan/index.blade.php ENDPATH**/ ?>