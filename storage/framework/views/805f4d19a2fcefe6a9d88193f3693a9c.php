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
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <h4 class="text-uppercase font-size-20 card-title">Laporan Akhir</h4>
                    </div>
                    <div class="col-md-3"><select class="form-select form-select-md">
                            <option value="1">Penelitian</option>
                            <option value="2">Pengabdian</option>
                        </select></div>
                    <div class="col-md-3"><select class="form-select form-select-md">
                            <option value="Pilih Tahun">Pilih Tahun</option>
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                        </select></div>
                </div>
                <div class="mb-2 col-md-2"><button type="button" disabled=""
                        class="btn btn-success btn btn-secondary disabled"><i
                            class="bi bi-file-earmark-excel font-size-10 align-middle me-2"></i>Excel</button>
                </div>
                <div class="mb-5 row">
                    <div>
                        <div class="table-responsive bg-white p-2 shadow-sm">
                            <table class="table mb-0 table">
                                <thead class="text-black"
                                    style="background-color: rgb(248, 249, 250); border-bottom: 1px solid rgb(239, 242, 247);">
                                    <tr>
                                        <th>No.</th>
                                        <th>Skema</th>
                                        <th>Jml. Didanai</th>
                                        <th>Sudah Unggah</th>
                                        <th>Belum Unggah</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            <div class="text-center"><img src=" <?php echo e(url('assets')); ?>/assets/img/gambar-3.png"
                                    class="w-25" alt="Not Found">
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
<?php /**PATH C:\laragon\www\P3M\resources\views/operator/laporan_akhir/index.blade.php ENDPATH**/ ?>