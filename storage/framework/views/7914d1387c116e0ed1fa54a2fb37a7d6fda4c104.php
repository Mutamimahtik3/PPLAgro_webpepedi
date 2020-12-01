<?php $__env->startSection('content'); ?>
<h3>Jenis Padi : <?php echo e($jenis_padi); ?></h3>
<h3>Varietas : <?php echo e($varietas); ?></h3>
<h3>Proses : <?php echo e($proses); ?></h3>
<br>

<form action="<?php echo e(route('p.i.tanam', ['varietas' => $varietas, 'jenis_padi' => $jenis_padi])); ?>" method="POST">
	<?php echo csrf_field(); ?>
	<?php echo method_field('put'); ?>
	<div class="form-group">
		<label for="lokasi">Lokasi</label>
		<textarea class="form-control" id="lokasi" rows="3" name="lokasi" cols="30" rows="10"><?php echo e(old('lokasi')); ?></textarea>
	</div>
	<?php if ($errors->has('lokasi')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('lokasi'); ?>
		<label><?php echo e(ucwords($message)); ?></label>
	<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
	
	<div class="form-group">
		<label class="small mb-1" for="luas_lahan">Luas Lahan</label>
	<input class="form-control py-4" id="luas_lahan" type="text" placeholder="luas lahan" name="luas_lahan" value="<?php echo e(old('luas_lahan')); ?>"/>
	</div>
	<?php if ($errors->has('luas_lahan')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('luas_lahan'); ?>
		<label><?php echo e(ucwords($message)); ?></label>
	<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
	
	<div class="form-group">
		<label class="small mb-1" for="jenis_tanah">Jenis Tanah</label>
	<input class="form-control py-4" id="jenis_tanah" type="text" placeholder="jenis tanah" name="jenis_tanah" value="<?php echo e(old('jenis_tanah')); ?>"/>
	</div>
	<?php if ($errors->has('jenis_tanah')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('jenis_tanah'); ?>
		<label><?php echo e(ucwords($message)); ?></label>
	<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

	<div class="form-group">
		<label class="small mb-1" for="jenis_pupuk">Jenis Pupuk</label>
	<input class="form-control py-4" id="jenis_pupuk" type="text" placeholder="jenis pupuk" name="jenis_pupuk" value="<?php echo e(old('jenis_pupuk')); ?>"/>
	</div>
	<?php if ($errors->has('jenis_pupuk')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('jenis_pupuk'); ?>
		<label><?php echo e(ucwords($message)); ?></label>
	<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

	<div class="form-group">
		<label class="small mb-1" for="ph_tanah">ph_tnah</label>
	<input class="form-control py-4" id="ph_tanah" type="text" placeholder="ph tanah" name="ph_tanah" value="<?php echo e(old('ph_tanah')); ?>"/>
	</div>
	<?php if ($errors->has('ph_tanah')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('ph_tanah'); ?>
		<label><?php echo e(ucwords($message)); ?></label>
	<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

	<div class="form-group">
		<label class="small mb-1" for="kondisi_tanaman">Kondisi Tanaman</label>
	<input class="form-control py-4" id="kondisi_tanaman" type="text" placeholder="kondisi tanaman" name="kondisi_tanaman" value="<?php echo e(old('kondisi_tanaman')); ?>"/>
	</div>
	<?php if ($errors->has('kondisi_tanaman')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('kondisi_tanaman'); ?>
		<label><?php echo e(ucwords($message)); ?></label>
	<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

	<button class="btn btn-primary" type="submit">Submit</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ppl-agro-main\ppl-agro-main\resources\views/petani/indikator/tanam.blade.php ENDPATH**/ ?>