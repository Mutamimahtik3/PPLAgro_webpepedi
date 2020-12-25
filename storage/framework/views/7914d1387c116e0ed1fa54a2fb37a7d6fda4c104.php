<?php $__env->startSection('content'); ?>
<script type="text/javascript">
    $.ajax({
        method : "GET",
        url : 'https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=3512',
        success : function(e){
            $.each(e.kecamatan, function (i, a) {
                $('#lokasiField').append(`<option value=`+a.nama+`>`+a.nama+`</option>`);
            });
        }
    });
</script>
<h3>Jenis Padi : <?php echo e(ucwords($jenis_padi)); ?></h3>
<h3>Varietas : <?php echo e(ucwords($varietas)); ?></h3>
<h3>Tipe Padi : <?php echo e(ucwords($tipe_padi)); ?></h3>
<h3>Proses : <?php echo e(ucwords($proses)); ?></h3>
<br>

<form action="<?php echo e(route('p.i.tanam', ['varietas' => $varietas, 'jenis_padi' => $jenis_padi,'tipe_padi' => $tipe_padi])); ?>" method="POST">
	<?php echo csrf_field(); ?>
	<?php echo method_field('put'); ?>
	<div class="form-group">
		<label class="small mb-1" for="lokasi">Lokasi</label>
		<select required name="kecamatan" class="form-control" id="lokasiField">
			<option disabled selected>Pilih Lokasi</option>

		</select>
	</div>
	<div class="form-group">
		<label for="lokasi">Detail Lokasi</label>
		<textarea required class="form-control" id="lokasi" rows="3" name="lokasi" cols="30" rows="10"><?php echo e(old('lokasi')); ?></textarea>
	</div>
	<?php if ($errors->has('lokasi')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('lokasi'); ?>
		<label><?php echo e(ucwords($message)); ?></label>
	<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
	
	<div class="form-group">
		<label class="small mb-1" for="luas_lahan">Luas Lahan (per meter persegi)</label>
	<input required class="form-control py-4" id="luas_lahan" type="number" placeholder="luas lahan" name="luas_lahan" value="<?php echo e(old('luas_lahan')); ?>"/>
	</div>
	<?php if ($errors->has('luas_lahan')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('luas_lahan'); ?>
		<label><?php echo e(ucwords($message)); ?></label>
	<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

	<div class="form-group">
		<label for="jenis_tanah">Jenis Tanah</label>
		<select required class="form-control" id="jenis_tanah" name="jenis_tanah">
			<option disabled selected>Pilih Jenis Tanah</option>
			<option value="sawah">Sawah</option>
			<option value="gogorancah">Gogorancah</option>
			<option value="sistem surjan">Sistem Surjan</option>
			<option value="lebak">Lebak</option>
			<option value="pasang surut">Pasang Surut</option>
		</select>
		<?php if ($errors->has('jenis_tanah')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('jenis_tanah'); ?>
		<label class="small mb-1 text-danger">
			<?php echo e(ucwords($message)); ?>

		</label>
		<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
	</div>

	<div class="form-group">
		<label for="jenis_pupuk">Jenis Pupuk</label>
		<select required class="form-control" id="jenis_pupuk" name="jenis_pupuk">
			<option disabled selected>Pilih Jenis Pupuk</option>
			<option value="urea">Urea</option>
			<option value="sp36">SP 36</option>
			<option value="KCL">KCL</option>			
		</select>
		<?php if ($errors->has('ph_tanah')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('ph_tanah'); ?>
		<label class="small mb-1 text-danger">
			<?php echo e(ucwords($message)); ?>

		</label>
		<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
	</div>

	<div class="form-group">
		<label for="jenis_tanah">Ph Tanah</label>
		<select required class="form-control" id="jenis_tanah" name="ph_tanah">
			<option disabled selected>Pilih Kadar Ph</option>
			<option value="3-3.5">3 - 3.5</option>
			<option value="3.5-4">3.5 - 4</option>
			<option value="4-4.5">4 - 4.5</option>
			<option value="4.5-5">4.5 - 5</option>
			<option value="5-5.5">5 - 5.5</option>
			<option value="5.5-6">5.5 - 6</option>
			<option value="6-6.5">6 - 6.5</option>
			<option value="6.5-7">6.5 - 7</option>
		</select>
		<?php if ($errors->has('ph_tanah')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('ph_tanah'); ?>
		<label class="small mb-1 text-danger">
			<?php echo e(ucwords($message)); ?>

		</label>
		<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
	</div>

	<div class="form-group">
		<label class="small mb-1" for="kondisi_tanaman">Kondisi Tanaman</label>
	<input required class="form-control py-4" id="kondisi_tanaman" type="text" placeholder="kondisi tanaman" name="kondisi_tanaman" value="<?php echo e(old('kondisi_tanaman')); ?>"/>
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