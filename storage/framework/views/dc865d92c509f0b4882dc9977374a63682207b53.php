

<?php $__env->startSection('title', '貸出画面'); ?>

<?php $__env->startSection('content'); ?>
<form action="circulation" method="post">
    <?php echo csrf_field(); ?>
    <table border="1" class="confirm_table">
        <tr><th>会員ID</th><td><input type="number" name="user_id" value="<?php echo e(old('user_id')); ?>"><br>
        <?php $__errorArgs = ['user_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="errorMsg"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <?php $__errorArgs = ['no_member'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="errorMsg"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </td></tr>
    </table>
    <p><input type="submit" value="次へ" name="next" class="next_button"></p>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\student\Desktop\webbookapp-master\resources\views/circulation.blade.php ENDPATH**/ ?>