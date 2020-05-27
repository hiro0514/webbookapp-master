

<?php $__env->startSection('title','資料変更画面'); ?>

<?php $__env->startSection('content'); ?>


<form action="document_change_confirming" method="post">
<?php echo csrf_field(); ?>
<input type="hidden" name="catalog_number" value="<?php echo e($register_data->catalog_number); ?>">
<table>
  <tr>
    <th>資料ID</th>
    <td><input type="text" name="catalog_id" value="<?php echo e($register_data->catalog_id); ?>">
    <?php $__errorArgs = ['catalog_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <span class="errorMsg"><?php echo e($message); ?></span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </td>
  </tr>
  <tr>
    <th>資料名</th>
    <td><input type="text" name="catalog_name" value="<?php echo e($register_data->catalog_name); ?>">
    <?php $__errorArgs = ['catalog_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <span class="errorMsg"><?php echo e($message); ?></span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </td>
  </tr>
  <tr>
    <th>廃棄年月日</th>
    <td><input type="text" name="disposal_date" value="<?php echo e($register_data->disposal_date); ?>">
    <br>
    <?php $__errorArgs = ['disposal_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <span class="errorMsg"><?php echo e($message); ?></span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </td>
  </tr>
  <tr>
    <th>備考</th>
    <td><input type="text" name="catalog_remark" value="<?php echo e($register_data->catalog_remark); ?>">
    <?php $__errorArgs = ['catalog_remark'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <span class="errorMsg"><?php echo e($message); ?></span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </td>
  </tr>
</table>
<div class="button_wrap">
<p><button type="button" name="search_button" class="back_button" onclick="history.back()">戻る</button></p>
<p><input type="submit" value="変更"  class="next_button"></p>
</div>
</form>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\student\Desktop\webbookapp-master\resources\views/document_change.blade.php ENDPATH**/ ?>