<?php $__env->startSection('content'); ?>
<h3>Jenis Padi : <?php echo e($jenis_padi); ?></h3>
<h3>Varietas : <?php echo e($varietas); ?></h3>
<h3>Proses : <?php echo e($proses); ?></h3>
<br>

<form action="<?php echo e(route('p.i.pascatanam', ['varietas' => $varietas, 'jenis_padi' => $jenis_padi])); ?>" method="POST">
	<?php echo csrf_field(); ?>
	<?php echo method_field('put'); ?>
	<div class="form-group">
		<label class="small mb-1" for="tgl_panen">Tanggal Panen</label>
		<input class="form-control py-4" id="tgl_panen" type="date" placeholder="tgl_panen" name="tgl_panen" value="<?php echo e(old('tgl_panen')); ?>"/>
	</div>
	<?php if ($errors->has('tgl_panen')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('tgl_panen'); ?>
		<label><?php echo e(ucwords($message)); ?></label>
	<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
	
	<div class="form-group">
		<label class="small mb-1" for="kondisi_gabah">Kondisi gabah</label>
		<input class="form-control py-4" id="kondisi_gabah" type="text" placeholder="Kondisi gabah" name="kondisi_gabah" value="<?php echo e(old('kondisi_gabah')); ?>"/>
	</div>
	<?php if ($errors->has('kondisi_gabah')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('kondisi_gabah'); ?>
		<label><?php echo e(ucwords($message)); ?></label>
	<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

	<button class="btn btn-primary" type="submit">Submit</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ppl-agro-main\ppl-agro-main\resources\views/petani/indikator/pascatanam.blade.php ENDPATH**/ ?>