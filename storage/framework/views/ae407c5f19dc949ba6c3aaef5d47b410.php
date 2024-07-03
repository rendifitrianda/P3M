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
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <span><?php echo e($jumlah_dosen); ?></span>
                            <h2 class="card-title">JUMLAH DOSEN</h2>
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
<?php /**PATH C:\laragon\www\P3M\resources\views/operator/dashboard.blade.php ENDPATH**/ ?>