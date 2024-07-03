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
                            <div class="mb-3 col-md-6">
                                <h4 class="text-uppercase font-size-20 card-title">Catatan Harian</h4>
                            </div>
                            <div class="col-md-3"><select class="form-select form-select-md">
                                    <option value="1">Penelitian</option>
                                    <option value="2">Pengabdian</option>
                                    <option value="141">Prototipe</option>
                                    <option value="143">Kosabangsa</option>
                                </select></div>
                            <div class="col-md-3"><select class="form-control form-select form-select-md">
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
                        <div class="row">
                            <div class="card-body">
                                <h5 class="card-title">Default Table</h5>

                                <!-- Default Table -->
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Skema</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Brandon Jacob</td>
                                            <td>Designer</td>
                                            <td>28</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Bridie Kessler</td>
                                            <td>Developer</td>
                                            <td>35</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Ashleigh Langosh</td>
                                            <td>Finance</td>
                                            <td>45</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Angus Grady</td>
                                            <td>HR</td>
                                            <td>34</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Raheem Lehner</td>
                                            <td>Dynamic Division Officer</td>
                                            <td>47</td>
                                        </tr>
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
<?php /**PATH C:\laragon\www\P3M\resources\views/operator/catatan_harian/index.blade.php ENDPATH**/ ?>