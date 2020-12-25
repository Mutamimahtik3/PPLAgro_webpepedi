<?php $__env->startSection('content'); ?>
<h3>Indikator Pratanam</h3>
<center>
	<table width="70%" class="table table-bordered table-stripped">
		<thead>
			<th>No</th>
			<th>Jenis Padi</th>
			<th>Tipe Padi</th>
			<th>Varietas</th>
			<th>Tanggal Persemaian</th>
			<th>Banyak Benih</th>
			<th>Jenis Tanah</th>
			<th>#</th>
		</thead>
		<tbody>
			<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e(($index + 1)); ?></td>
				<td><?php echo e($data->padi->jenis_padi); ?></td>
				<td><?php echo e($data->padi->tipe_padi); ?></td>
				<td><?php echo e($data->padi->varietas); ?></td>
				<td><?php echo e($data->tgl_persemaian); ?></td>
				<td><?php echo e($data->banyak_benih); ?></td>
				<td><?php echo e($data->jenis_tanah); ?></td>
				<td>
					<?php if(Auth::user()->role=='konsultan'): ?>
					<a href="<?php echo e(route('k.i.pr.show', ['id' => $data->id])); ?>">Detail</a>
					<?php elseif(Auth::user()->role=='admin'): ?>
					<a href="<?php echo e(route('a.i.pr.show', ['id' => $data->id])); ?>">Detail</a>
					<?php endif; ?>
				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
</center>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ppl-agro-main\ppl-agro-main\resources\views/admin/pratanam/index.blade.php ENDPATH**/ ?>