 
 <?php $__env->startSection('content'); ?>
 <form action="<?php echo e(route('p.i.pra.update', ['id' => $data->id])); ?>" method="POST">
	<?php echo csrf_field(); ?>
	<?php echo method_field('put'); ?>
		<div class="form-group">
			<label class="small mb-1" for="padi">Jenis Padi</label>
		<input class="form-control py-4" id="padi" type="text" placeholder="Jenis Padi" name="jenis_padi" value="<?php echo e($data->padi->jenis_padi); ?>"/>
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
		<input class="form-control py-4" id="varietas" type="text" placeholder="Varietas" name="varietas" value="<?php echo e($data->padi->varietas); ?>"/>
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

		<div class="form-group">
			<label class="small mb-1" for="a">Tanggal Semai</label>
		<input class="form-control py-4" id="a" type="date" name="tgl_persemaian" value="<?php echo e($data->tgl_persemaian); ?>"/>
		</div>
		<?php if ($errors->has('tgl_persemaian')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('tgl_persemaian'); ?>
		<small class="text-danger">
			<?php echo e(ucwords($message)); ?>

		</small>
		<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
		<br>

		<div class="form-group">
			<label class="small mb-1" for="k">Banyak Benih</label>
		<input class="form-control py-4" id="k" type="number" placeholder="Kondisi Gabar" name="banyak_benih" value="<?php echo e($data->banyak_benih); ?>"/>
		</div>
		<?php if ($errors->has('banyak_benih')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('banyak_benih'); ?>
		<small class="text-danger">
			<?php echo e(ucwords($message)); ?>

		</small>
		<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
		<br>

		<div class="form-group">
			<label class="small mb-1" for="2">Jenis Tanah</label>
		<input class="form-control py-4" id="2" type="text" placeholder="Kondisi Gabar" name="jenis_tanah" value="<?php echo e($data->jenis_tanah); ?>"/>
		</div>
		<?php if ($errors->has('jenis_tanah')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('jenis_tanah'); ?>
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
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ppl-agro-main\ppl-agro-main\resources\views/petani/pratanam/edit.blade.php ENDPATH**/ ?>