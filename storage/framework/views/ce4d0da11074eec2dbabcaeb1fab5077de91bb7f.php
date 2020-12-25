<?php $__env->startSection('content'); ?>
<center>
	<table class="table table-bordered table-stripped col-md-7" align="center">
		<!-- <tr>
			<td>Status</td>
			<td><?php echo e(ucwords($data->status)); ?></td>
		</tr> -->
		<tr>
			<td>Jenis Padi</td>
			<td><?php echo e($data->padi->jenis_padi); ?></td>
		</tr>
		<tr>
			<td>Varietas</td>
			<td><?php echo e($data->padi->varietas); ?></td>
		</tr>
		<tr>
			<td>lokasi</td>
			<td><?php echo e($data->lokasi); ?></td>
		</tr>
		<tr>
			<td>luas lahan</td>
			<td><?php echo e($data->luas_lahan); ?></td>
		</tr>
		<tr>
			<td>jenis tanah</td>
			<td><?php echo e($data->jenis_tanah); ?></td>
		</tr>
		<tr>
			<td>jenis pupuk</td>
			<td><?php echo e($data->jenis_pupuk); ?></td>
		</tr>
		<tr>
			<td>ph tanah</td>
			<td><?php echo e($data->ph_tanah); ?></td>
		</tr>
		<tr>
			<td>kondisi tanaman</td>
			<td><?php echo e($data->kondisi_tanaman); ?></td>
		</tr>
	</table>

	<?php if(Auth::user()->role=='konsultan'): ?>
	<a href="<?php echo e(route('k.i.tn.edit', ['id' => $data->id])); ?>" class="btn btn-primary">Tambah Rekomendasi</a>
	<?php endif; ?>
	<br>
	<hr>
	<h2>Rekomendasi Penjadwalan</h2>
	<table class="table table-bordered table-stripped" width="70%" align="center">
		<thead>
			<th>No</th>
			<th>Nama Proses</th>
			<th>Tanggal</th>
			<th>Waktu</th>
			<th>Tips dan Trik</th>
			<th>Catatan</th>
			<th>Status</th>
			<?php if(Auth::user()->role=='konsultan'): ?>
			<th>#</th>
			<?php endif; ?>
		</thead>
		<tbody>
			<?php $__empty_1 = true; $__currentLoopData = $data->penjadwalan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $jadwal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
			<tr>
				<td><?php echo e(($index +1)); ?></td>
				<td><?php echo e($jadwal->nama_proses); ?></td>
				<td><?php echo e($jadwal->tanggal); ?></td>
				<td><?php echo e($jadwal->waktu); ?></td>
				<td><?php echo e($jadwal->tips_dan_trik); ?></td>
				<td><?php echo e($jadwal->catatan); ?></td>
				<td><?php echo e($jadwal->status); ?></td>
				<?php if(Auth::user()->role=='konsultan'): ?>
				<td>
					<a href="<?php echo e(route('k.i.tn.ubah.jadwal', ['id' => $data->id, 'idjadwal' => $jadwal->id])); ?>">Ubah</a>
				</td>
				<?php endif; ?>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
				<h3>Belum ada rekomendasi penjadwalan</h3>
			<?php endif; ?>
		</tbody>
	</table>
</center>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ppl-agro-main\ppl-agro-main\resources\views/admin/tanam/show.blade.php ENDPATH**/ ?>