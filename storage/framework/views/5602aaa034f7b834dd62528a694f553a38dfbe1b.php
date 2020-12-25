<?php $__env->startSection('content'); ?>
<h3>Indikator Pascatanam</h3>
<center>
	<table width="70%" class="table table-bordered table-stripped">
		<thead>
			<th>No</th>
			<th>Nama</th>
			<th>Varietas</th>
			<th>Tanggal Panen</th>
			<th>Kondisi Gabah</th>
			<th>#</th>
		</thead>
		<tbody>
			<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e(($index + 1)); ?></td>
				<td><?php echo e($data->padi->jenis_padi); ?></td>
				<td><?php echo e($data->padi->varietas); ?></td>
				<td><?php echo e($data->tgl_panen); ?></td>
				<td><?php echo e($data->kondisi_gabah); ?></td>
				<td>
					<a href="<?php echo e(route('a.i.ps.show', ['id' => $data->id])); ?>">Detail</a>
				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
</center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ppl-agro-main\resources\views/admin/pascatanam/index.blade.php ENDPATH**/ ?>