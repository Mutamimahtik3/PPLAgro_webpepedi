<?php $__env->startSection('content'); ?>
<h3>Indikator Tanam</h3>
<center>
	<table width="70%" class="table table-bordered table-stripped">
		<thead>
			<th>No</th>
			<th>Nama</th>
			<th>Varietas</th>
			<th>lokasi</th>
			<th>luas_lahan</th>
			<th>jenis_tanah</th>
			<th>jenis_pupuk</th>
			<th>ph_tanah</th>
			<th>kondisi_tanaman</th>
			<th>#</th>
		</thead>
		<tbody>
			<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e(($index + 1)); ?></td>
				<td><?php echo e($data->padi->jenis_padi); ?></td>
				<td><?php echo e($data->padi->varietas); ?></td>
				<td><?php echo e($data->lokasi); ?></td>
				<td><?php echo e($data->luas_lahan); ?></td>
				<td><?php echo e($data->jenis_tanah); ?></td>
				<td><?php echo e($data->jenis_pupuk); ?></td>
				<td><?php echo e($data->ph_tanah); ?></td>
				<td><?php echo e($data->kondisi_tanaman); ?></td>
				<td>
					<a href="<?php echo e(route('k.i.tn.show', ['id' => $data->id])); ?>">Detail</a>
				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
</center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ppl-agro-main\ppl-agro-main\resources\views/konsultan/tanam/index.blade.php ENDPATH**/ ?>