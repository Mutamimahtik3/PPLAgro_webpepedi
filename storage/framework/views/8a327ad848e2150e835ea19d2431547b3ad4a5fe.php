<?php $__env->startSection('content'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<h3>Jenis Padi : <?php echo e(ucwords($jenis_padi)); ?></h3>
<h3>Varietas : <?php echo e(ucwords($varietas)); ?></h3>
<h3>Tipe Padi : <?php echo e(ucwords($tipe_padi)); ?></h3>
<h3>Proses : <?php echo e(ucwords($proses)); ?></h3>
<br>

<form action="<?php echo e(route('p.i.pascatanam', ['varietas' => $varietas, 'jenis_padi' => $jenis_padi,'tipe_padi' => $tipe_padi])); ?>" method="POST">
	<?php echo csrf_field(); ?>
	<?php echo method_field('put'); ?>
	

	<div class="form-group">
		<label class="small mb-1" for="tgl_panen">Tanggal Panen</label>
		<input required class="form-control py-4" id="tgl_panen" type="date" placeholder="tgl_panen" name="tgl_panen" value="<?php echo e(old('tgl_panen')); ?>"/>
	</div>
	<?php if ($errors->has('tgl_panen')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('tgl_panen'); ?>
		<label><?php echo e(ucwords($message)); ?></label>
	<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

	<div class="form-group">
		<label for="kondisi_gabah">Kondisi Gabah</label>
		<select required class="form-control" id="kondisi_gabah" name="kondisi_gabah">
			<option disabled selected>Pilih Kondisi Gabah</option>
			<option value="kadar air tinggi">Kadar Air Tinggi</option>
			<option value="kadar air rendah">Kadar Air Rendah</option>
		</select>
		<?php if ($errors->has('kondisi_gabah')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('kondisi_gabah'); ?>
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
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ppl-agro-main\ppl-agro-main\resources\views/petani/indikator/pascatanam.blade.php ENDPATH**/ ?>