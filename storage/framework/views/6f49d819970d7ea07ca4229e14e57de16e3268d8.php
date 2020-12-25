 

 <?php $__env->startSection('content'); ?>
 <form action="<?php echo e(route('p.padi.store.proses', ['jenis_padi' => $jenis_padi, 'varietas' => $varietas])); ?>" method="POST">
 	<?php echo method_field('put'); ?>
	<?php echo csrf_field(); ?>
		<br>
		<div class="form-group">
			<label class="small mb-1" for="proses">Proses</label>

			<div class="form-check">
			  <input class="form-check-input" type="radio" name="proses" id="r1" value="Pra-Tanam">
			  <label class="form-check-label" for="r1">
			    Pra-Tanam
			  </label>
			</div>
			<div class="form-check">
			  <input class="form-check-input" type="radio" name="proses" id="r2" value="Tanam">
			  <label class="form-check-label" for="r2">
			    Tanam
			  </label>
			</div>
			<div class="form-check">
			  <input class="form-check-input" type="radio" name="proses" id="r3" value="Pasca-Tanam">
			  <label class="form-check-label" for="r3">
			    Pasca-Tanam
			  </label>
			</div>
			<!-- <input class="form-control py-4" id="proses" type="text" placeholder="Varietas" name="varietas" value="<?php echo e(old('proses')); ?>"/> -->
		</div>
		<?php if ($errors->has('proses')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('proses'); ?>
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
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ppl-agro-main\resources\views/petani/padi/proses.blade.php ENDPATH**/ ?>