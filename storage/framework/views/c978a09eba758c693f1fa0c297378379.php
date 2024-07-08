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
            <div class="container-fluid card-title">
                <h4>Laporan Kemajuan</h4>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="mb-1 col-md-8"></div>
                                    <div class="col-md-4">
                                        <div class="input-group card-header"><button disabled=""
                                                class="btn btn-primary disabled"><i
                                                    class="fa fa-filter"></i></button><select class="form-control"
                                                name="tahun_pelaksanaan">
                                                <option value="pilih">Pilih Tahun Pelaksanaan</option>
                                                <option value="2024">2024</option>
                                                <option value="2023">2023</option>
                                                <option value="2022">2022</option>
                                                <option value="2021">2021</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                                <option value="2017">2017</option>
                                                <option value="2016">2016</option>
                                            </select></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped mt-3 table">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="width: 40px;">No</th>
                                                    <th class="">Program</th>
                                                    <th class="">Judul</th>
                                                    <th>Berkas</th>
                                                    <th class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="5" class="text-center">Data tidak tersedia!</td>
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
<?php if (isset($__attributesOriginal2fb16f50ad47a7bebe8d927b7a60de61)): ?>
<?php $attributes = $__attributesOriginal2fb16f50ad47a7bebe8d927b7a60de61; ?>
<?php unset($__attributesOriginal2fb16f50ad47a7bebe8d927b7a60de61); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2fb16f50ad47a7bebe8d927b7a60de61)): ?>
<?php $component = $__componentOriginal2fb16f50ad47a7bebe8d927b7a60de61; ?>
<?php unset($__componentOriginal2fb16f50ad47a7bebe8d927b7a60de61); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\P3M\resources\views/dosen/laporan_kemajuan/index.blade.php ENDPATH**/ ?>