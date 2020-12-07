<?php $__env->startSection('content'); ?>
<center>
	<table class="table table-bordered table-stripped col-md-7" align="center">
		<tr>
			<td>Jenis Padi</td>
			<td><?php echo e($data->padi->jenis_padi); ?></td>
		</tr>
		<tr>
			<td>Varietas</td>
			<td><?php echo e($data->padi->varietas); ?></td>
		</tr>
		<tr>
			<td>Tanggal Panen</td>
			<td><?php echo e($data->tgl_panen); ?></td>
		</tr>
		<tr>
			<td>Kondisi Gabah</td>
			<td><?php echo e($data->kondisi_gabah); ?></td>
		</tr>
		
	</table>

	
	<a href="<?php echo e(route('a.i.ps.edit', ['id' => $data->id])); ?>" class="btn btn-primary">Tambah Rekomendasi</a>
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
			<th>#</th>
		</thead>
		<tbody>
			<?php $__empty_1 = true; $__currentLoopData = $data->penjadwalan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $jadwal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
			<tr>
				<td><?php echo e(($index +1)); ?></td>
				<td><?php echo e($jadwal->nama_proses); ?></td>
				<td><?php echo e($jadwal->tanggal); ?></td>
				<td><?php echo e($jadwal->waktu); ?></td>
				<td><?php echo e($jadwal->tips_dan_trik); ?></td>
				<td>
					<a href="<?php echo e(route('a.i.ps.ubah.jadwal', ['id' => $data->id, 'idjadwal' => $jadwal->id])); ?>">Ubah</a>
				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
				<h3>Belum ada rekomendasi penjadwalan</h3>
			<?php endif; ?>
		</tbody>
	</table>
	</center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ppl-agro-main\ppl-agro-main\resources\views/admin/pascatanam/show.blade.php ENDPATH**/ ?>