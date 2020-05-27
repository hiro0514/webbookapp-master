

<?php $__env->startSection('title','資料検索画面'); ?>

<?php $__env->startSection('content'); ?>

<form action="/document_search_result" method="post">
  <?php echo csrf_field(); ?>
  <p>検索したい資料名を入力してください。</p>
  <input type="search" name="catalog_name" placeholder="資料名を入力">
  <input type="submit" value="検索" name="search_button" class="next_button">
 <br>
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
  <?php $__errorArgs = ['no_catalog_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
  <span class="errorMsg"><?php echo e($message); ?></span>
  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </br>
</form>


  <p><button type="button" class="back_button" name="return_button" onclick="location.href='./after_login_top'">戻る</button></p>

<?php $__env->stopSection(); ?>


<!-- <?php echo csrf_field(); ?>
 <p><input type="text" name="user_email" required>
 <input type="submit" class="next_button" value="検索"></p>
<?php $__errorArgs = ['user_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
 <span class="errorMsg"><?php echo e($message); ?></span>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
<?php $__errorArgs = ['no_user_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
 <span class="errorMsg"><?php echo e($message); ?></span>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> -->

<?php echo $__env->make('layouts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\student\Desktop\webbookapp-master\resources\views/document_search.blade.php ENDPATH**/ ?>