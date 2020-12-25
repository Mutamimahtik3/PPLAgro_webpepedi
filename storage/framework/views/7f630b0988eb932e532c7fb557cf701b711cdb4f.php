 

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
			<label for="exampleFormControlSelect1">Varietas</label>
			<select class="form-control" id="exampleFormControlSelect1" name="varietas">
				<option disabled selected>Pilih Varietas</option>
				<option value="hibrida">Hibrida</option>
				<option value="unggul">Unggul</option>
				<option value="padi lokal">Padi Lokal</option>
			</select>
			<?php if ($errors->has('varietas')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('varietas'); ?>
			<label class="small mb-1 text-danger">
				<?php echo e(ucwords($message)); ?>

			</label>
			<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
		</div>

		<div class="form-group">
			<label for="tipe_padi">Tipe Padi</label>
			<select class="form-control" id="tipe_padi" name="tipe_padi">
				<option disabled selected>Pilih Tipe Padi</option>
				<option value="padi wangi">Padi Wangi</option>
				<option value="padi pera">Padi Pera</option>
				<option value="padi pulen">Padi Pulen</option>			
			</select>
			<?php if ($errors->has('tipe_padi')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('tipe_padi'); ?>
			<label class="small mb-1 text-danger">
				<?php echo e(ucwords($message)); ?>

			</label>
			<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
		</div>
	
		<button class="btn btn-primary" type="submit">Submit</button>
	</form>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ppl-agro-main\ppl-agro-main\resources\views/petani/padi/create.blade.php ENDPATH**/ ?>