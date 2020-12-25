<?php $__env->startSection('content'); ?>
<center>
		<form action="<?php echo e(route('k.i.ps.update', ['id' => $data->id])); ?>" method="POST">
		<?php echo csrf_field(); ?>
		<?php echo method_field('put'); ?>	
			<div class="form-group">
				<label class="mb-1" for="nama_proses">Nama Proses</label>
				<input class="form-control py-4" id="nama_proses" type="text" value="<?php echo e(old('nama_proses')); ?>" name="nama_proses"/>
			</div>
			<?php if ($errors->has('nama_proses')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nama_proses'); ?>
				<label><?php echo e(ucwords($message)); ?></label>
			<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
			
			<div class="form-group">
				<label class="mb-1" for="tanggal">Tanggal</label>
				<input class="form-control py-4" id="tanggal" type="date" name="tanggal" value="<?php echo e(old('tanggal')); ?>"/>
			</div>
			<?php if ($errors->has('tanggal')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('tanggal'); ?>
				<label><?php echo e(ucwords($message)); ?></label>
			<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
			
			<div class="form-group">
				<label class="mb-1" for="tanggal">Waktu</label>
				<input class="form-control py-4" id="waktu" type="time" name="waktu" value="<?php echo e(old('waktu')); ?>"/>
			</div>
			<?php if ($errors->has('waktu')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('waktu'); ?>
				<label><?php echo e(ucwords($message)); ?></label>
			<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
			
			<div class="form-group">
				<label class="mb-1" for="tanggal">Tips dan Trik</label>
				<textarea class="form-control" name="tips_dan_trik" cols="30" rows="10"><?php echo e(old('tips_dan_trik')); ?></textarea>
			</div>
			<?php if ($errors->has('tips_dan_trik')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('tips_dan_trik'); ?>
				<label><?php echo e(ucwords($message)); ?></label>
			<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
			<br>
			<button class="btn btn-primary" type="submit">
				Submit
			</button>
		</form>
	</center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ppl-agro-main\ppl-agro-main\resources\views/admin/pascatanam/jadwal.blade.php ENDPATH**/ ?>