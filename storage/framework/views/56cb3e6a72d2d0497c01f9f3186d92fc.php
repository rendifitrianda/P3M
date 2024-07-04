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
    <div class="card">
        <div class="card-header">
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <div class="bg-white container">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <h4 class="text-uppercase font-size-20 card-title">Cari Akun Dosen</h4>
                                </div>
                                <div class="text-right col-md-6">
                                    <div class="d-flex gap-1"><input id="text" name="nidn"
                                            placeholder="Cari NIDN" required="" type="text" class="form-control"
                                            value=""><button type="button" disabled=""
                                            class="btn btn-primary disabled">Cari</button></div>
                                </div>
                            </div>
                            <div class="my-3 card">
                                <div style="background-color: rgb(85, 85, 255)">
                                    <div class="row" style="height: 100px;">
                                        <div class="col-8">
                                            <div class="text-black p-3">
                                                <h5 class="text-black bold">Nama</h5>
                                                <p class="mb-0">Program Studi</p>
                                            </div>
                                        </div>
                                        <div class="text-right col-4"><img src="/static/media/blank_avatar.b909b106.png"
                                                alt="" style="height: 100px;"></div>
                                    </div>
                                </div>
                                <div class="pt-3 card-body">
                                    <div class="row">
                                        <div class="col-md-6"><b>Username :</b></div>
                                        <div class="col-md-6">
                                            <p>-</p>
                                        </div>
                                        <div class="col-md-6"><b>Password :</b></div>
                                        <div class="col-md-6">
                                            <p>-</p>
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
<?php if (isset($__attributesOriginalfc295a45e885bd4bf50b27cf4a5c3753)): ?>
<?php $attributes = $__attributesOriginalfc295a45e885bd4bf50b27cf4a5c3753; ?>
<?php unset($__attributesOriginalfc295a45e885bd4bf50b27cf4a5c3753); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc295a45e885bd4bf50b27cf4a5c3753)): ?>
<?php $component = $__componentOriginalfc295a45e885bd4bf50b27cf4a5c3753; ?>
<?php unset($__componentOriginalfc295a45e885bd4bf50b27cf4a5c3753); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\P3M\resources\views/operator/cari_akun/index.blade.php ENDPATH**/ ?>