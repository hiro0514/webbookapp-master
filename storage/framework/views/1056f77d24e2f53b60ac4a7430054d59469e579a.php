

<?php $__env->startSection('title','資料削除画面'); ?>

<?php $__env->startSection('content'); ?>
<table border="1" class="confirm_table">
  <tr>
   <th>ISBN番号</th>
   <td><?php echo e($item->catalog_number); ?></td>
  </tr>
  <tr>
   <th>資料名</th>
   <td><?php echo e($item->catalog_name); ?></td>
  </tr>
  <tr>
   <th>分類コード</th>
   <td><?php echo e($item->catalog_code); ?></td>
  </tr>
  <tr>
   <th>著者</th>
   <td><?php echo e($item->catalog_author); ?></td>
  </tr>
  <tr>
   <th>出版社</th>
   <td><?php echo e($item->catalog_publishername); ?></td>
  </tr>
  <tr>
   <th>出版日</th>
   <td><?php echo e($item->catalog_publication); ?></td>
  </tr>
  <tr>
   <th>資料ID</th>
   <td><?php echo e($item->catalog_id); ?></td>
  </tr>
<form class="" action="document_delete_complete" method="post">
  <?php echo csrf_field(); ?>
    <tr>
      <th>廃棄年月日</th><td><input type="text" name="disposal_date" value="<?php echo date('Y/m/j');?>" required><br>
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
      <th>備考</th><td><textarea name="catalog_remark" rows="4" cols="22"></textarea><br>
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
    <input type="hidden" name="catalog_id" value="<?php echo e($item->catalog_id); ?>">
  </table>
  <div class="button_wrap">
    <p><button type="button" name="search_button" class="back_button" onclick="history.back()">戻る</button></p>
    <p><input type="submit" class="next_button" value="削除する"></p>
  </div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\student\Desktop\webbookapp-master\resources\views/document_delete.blade.php ENDPATH**/ ?>