<div class="form-group">
    <label for="" class="control-label"><?php echo e($label ?? ''); ?></label>
    <input type="<?php echo e($type ?? 'text'); ?>" name="<?php echo e($name ?? ''); ?>"
        value="<?php if(isset($value)): ?><?php echo e($value); ?><?php else: ?><?php echo e(old($name)); ?><?php endif; ?>"
        class="form-control <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e($placeholder ?? '...'); ?>"
        autocomplete="off">

    <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span><?php echo e($message); ?></span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<?php /**PATH C:\laragon\www\P3M\resources\views/components/input/input.blade.php ENDPATH**/ ?>