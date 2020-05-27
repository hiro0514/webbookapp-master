

<?php $__env->startSection('title', '会員登録画面'); ?>

<?php $__env->startSection('content'); ?>

<form action="/member_register" method="post">
    <?php echo csrf_field(); ?>
    <table class="confirm_table">
        <tr><th class="form_item">名前</th><td><input type="text" name="user_name" value="<?php echo e(old('user_name')); ?>" required><br>
        <?php $__errorArgs = ['user_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="errorMsg"><?php echo e($message); ?></span></td>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></tr>
        <tr><th class="form_item">住所</th><td><input type="text" name="user_address" value="<?php echo e(old('user_address')); ?>" required><br>
        <?php $__errorArgs = ['user_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="errorMsg"><?php echo e($message); ?></span></td>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></tr>
        <tr><th class="form_item">電話番号</th><td><input type="tel" name="user_tel" value="<?php echo e(old('user_tel')); ?>" required><br>
        <?php $__errorArgs = ['user_tel'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="errorMsg"><?php echo e($message); ?></span></td>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></tr>
        <tr><th class="form_item">メールアドレス</th><td><input type="email" name="user_email" value="<?php echo e(old('user_email')); ?>" required><br>
        <?php $__errorArgs = ['user_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="errorMsg"><?php echo e($message); ?></span></td>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></tr>
        <tr><th class="form_item">生年月日</th><td><input type="text" name="user_birthday" value="<?php echo e(old('user_birthday')); ?>" placeholder="例)1990/01/01" required><br>
        <?php $__errorArgs = ['user_birthday'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="errorMsg"><?php echo e($message); ?></span></td>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></tr>
    </table>
    <p><input type="submit" value="確認画面へ" class="button next_button"></p>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\student\Desktop\webbookapp-master\resources\views/member_register.blade.php ENDPATH**/ ?>