
<?php $__env->startSection('title', '資料追加確認画面'); ?>

<?php $__env->startSection('content'); ?>

<form class="document_add_confirming_form" action="/document_add_last_confirming" method="post">
  <?php echo csrf_field(); ?>
  <table>
  <tr><th>ISBN</th><td><?php echo e($add_document_data['catalog_number']); ?></td></tr>
  <tr><th class="form_items">入荷年月日</th><td><input type="text" name="arrival_date" value="<?=date("Y/m/d")?>" required><br>
  <?php $__errorArgs = ['arrival_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
  <span class="errorMsg"><?php echo e($message); ?></span>
  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></td></tr>
  <input type="hidden" name="catalog_number" value="<?php echo e($add_document_data['catalog_number']); ?>" required>
  <tr><th class="form_items">資料名</th><td><input type="text" name="catalog_name" value="<?php echo e($add_document_data['catalog_name']); ?>" required><br>
  <?php $__errorArgs = ['catalog_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <span class="errorMsg"><?php echo e($message); ?></span>
  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></td></tr>
  <tr><th class="form_items">分類コード</th><td><input type="number" name="catalog_code" value="<?php echo e($add_document_data['catalog_code']); ?>" required><br>
  <?php $__errorArgs = ['catalog_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <span class="errorMsg"><?php echo e($message); ?></span>
  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></td></tr>
  <tr><th class="form_items">著者</th><td><input type="text" name="catalog_author" value="<?php echo e($add_document_data['catalog_author']); ?>" required><br>
  <?php $__errorArgs = ['catalog_author'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <span class="errorMsg"><?php echo e($message); ?></span>
  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></td></tr>
  <tr><th class="form_items">出版社</th><td><input type="text" name="catalog_publishername" value="<?php echo e($add_document_data['catalog_publishername']); ?>" required><br>
  <?php $__errorArgs = ['catalog_publishername'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <span class="errorMsg"><?php echo e($message); ?></span>
  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></td></tr>
  <tr><th class="form_items">出版日</th><td><input type="text" name="catalog_publication" value="<?php echo e($add_document_data['catalog_publication']); ?>" required><br>
  <?php $__errorArgs = ['catalog_publication'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <span class="errorMsg"><?php echo e($message); ?></span>
  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></td></tr>
</table>
<p><button type="button" name="back_document_add" class="back_button" onclick="history.back()">戻る</button>
    <input type="submit" class="next_button" value="最終確認画面へ"></p>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\student\Desktop\webbookapp-master\resources\views/document_add_confirming.blade.php ENDPATH**/ ?>