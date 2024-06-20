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
            <div class="container-fluid card-title">
                <h4>Catatan Harian penelitian</h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8"></div>
                                    <div class="col-md-4">
                                        <div class="input-group card-header"><button disabled=""
                                                class="btn btn-primary disabled"><i
                                                    class="fa fa-filter"></i></button><select class="form-control"
                                                name="tahun_pelaksanaan">
                                                <option value="">Pilih Tahun Pelaksanaan</option>
                                                <option value="2025">2025</option>
                                                <option value="2024">2024</option>
                                                <option value="2023">2023</option>
                                            </select></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped mt-3 table">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="width: 40px;">No</th>
                                                    <th class="">Skema</th>
                                                    <th class="">Tahun</th>
                                                    <th class="">Judul</th>
                                                    <th class="">Keterangan</th>
                                                    <th class="">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="8" class="text-center">Data tidak tersedia!</td>
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
<?php /**PATH C:\laragon\www\P3M\resources\views/layout/pengabdian/catatan_harian/index.blade.php ENDPATH**/ ?>