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
                    <div class="col-12 col-md-12">
                        <h4 class="pb-3 card-title">Usulan Penelitian</h4>
                        <div class="rounded card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8"></div>
                                    <div class="col-md-4">
                                        <div class="mb-0 mb-3"><label for="thn_pelaksanaan"
                                                class="form-label card-title">Tahun
                                                Pelaksanaan</label>
                                            <div class="input-group"><button disabled=""
                                                    class="btn btn-primary disabled"><i
                                                        class="fa fa-filter"></i></button><select class="form-control"
                                                    name="thn_pelaksanaan">
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
                                                    <th class="" style="text-align: center;">Status Usulan</th>
                                                    <th class="" style="text-align: center;">Hasil Penilaian</th>
                                                    <th class="" style="text-align: center;">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $list_penelitian_usulan_baru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penelitian_usulan_baru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
<?php $component = App\View\Components\Button\Delete::resolve(['id' => ''.e($penelitian_usulan_baru->id).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                                                        <td><?php echo e($penelitian_usulan_baru->ketua); ?></td>
                                                        <td><?php echo e($penelitian_usulan_baru->judul); ?></td>
                                                        <td><?php echo e($penelitian_usulan_baru->tempat_lahir); ?></td>
                                                        <td><?php echo e($penelitian_usulan_baru->tanggal_lahir); ?></td>
                                                        <td><?php echo e($penelitian_usulan_baru->program_studi); ?></td>
                                                        <td><?php echo e($penelitian_usulan_baru->jabatan_akademik); ?></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                
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
<?php /**PATH C:\laragon\www\P3M\resources\views/layout/penelitian/usulan_baru/index.blade.php ENDPATH**/ ?>