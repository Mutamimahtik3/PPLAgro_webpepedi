 

 <?php $__env->startSection('content'); ?>
 <form action="<?php echo e(route('p.padi.store')); ?>" method="POST">
	<?php echo csrf_field(); ?>
		<div class="form-group">
			<label class="small mb-1" for="padi">Jenis Padi</label>
		<input class="form-control py-4" id="padi" type="text" placeholder="Jenis Padi" name="jenis_padi" value="<?php echo e(old('jenis_padi')); ?>"/>
		</div>
		<?php if ($errors->has('jenis_padi')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('jenis_padi'); ?>
		<small class="text-danger">
			<?php echo e(ucwords($message)); ?>

		</small>
		<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
		
		<div class="form-group">
			<label class="small mb-1" for="varietas">Varietas</label>
		<input class="form-control py-4" id="varietas" type="text" placeholder="Varietas" name="varietas" value="<?php echo e(old('varietas')); ?>"/>
		</div>
		<?php if ($errors->has('varietas')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('varietas'); ?>
		<small class="text-danger">
			<?php echo e(ucwords($message)); ?>

		</small>
		<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
		<br>
		<button class="btn btn-primary" type="submit">Submit</button>
	</form>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ppl-agro-main\resources\views/petani/padi/create.blade.php ENDPATH**/ ?>