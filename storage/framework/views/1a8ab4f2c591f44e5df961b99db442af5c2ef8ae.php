<?php $__env->startSection('content'); ?>
<h3>Jenis Padi : <?php echo e($jenis_padi); ?></h3>
<h3>Varietas : <?php echo e($varietas); ?></h3>
<h3>Proses : <?php echo e($proses); ?></h3>
<br>

<form action="<?php echo e(route('p.i.pratanam', ['varietas' => $varietas, 'jenis_padi' => $jenis_padi])); ?>" method="POST">
	<?php echo csrf_field(); ?>
	<?php echo method_field('put'); ?>
	<div class="form-group">
		<label class="small mb-1" for="tgl_persemaian">Tanggal Persemaian</label>
	<input class="form-control py-4" id="tgl_persemaian" type="date" placeholder="tanggal" name="tgl_persemaian" value="<?php echo e(old('tgl_persemaian')); ?>"/>
	</div>
	<?php if ($errors->has('tgl_persemaian')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('tgl_persemaian'); ?>
		<label><?php echo e(ucwords($message)); ?></label>
	<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
	
	<div class="form-group">
		<label class="small mb-1" for="banyak_benih">Banyak Benih</label>
	<input class="form-control py-4" id="banyak_benih" type="number" placeholder="banyak benih" name="banyak_benih" value="<?php echo e(old('banyak_benih')); ?>"/>
	</div>
	<?php if ($errors->has('banyak_benih')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('banyak_benih'); ?>
		<label><?php echo e(ucwords($message)); ?></label>
	<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
	
	<div class="form-group">
		<label class="small mb-1" for="jenis_tanah">Jenis Tanah</label>
	<input class="form-control py-4" id="banyak_benih" type="text" placeholder="jenis tanah" name="jenis_tanah" value="<?php echo e(old('jenis_tanah')); ?>"/>
	</div>
	<?php if ($errors->has('jenis_tanah')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('jenis_tanah'); ?>
		<label><?php echo e(ucwords($message)); ?></label>
	<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

	<button class="btn btn-primary" type="submit">Submit</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ppl-agro-main\ppl-agro-main\resources\views/petani/indikator/pratanam.blade.php ENDPATH**/ ?>