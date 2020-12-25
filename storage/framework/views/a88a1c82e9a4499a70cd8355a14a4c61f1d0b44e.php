<?php $__env->startSection('content'); ?>
<div class="card mb-4">
    <div class="card-header">
        Hasil Rekomendasi Penjadwalan
        <!-- <a href="<?php echo e(route('p.i.ps.show.edit', ['id' => $data->id])); ?>" class="btn btn-primary btn-sm">
            Ubah
        </a> -->

    </div>
    <div class="card-body col-md-12">
        <div class="row justify-content-md-center">
            <table class="table table-bordered table-stripped text-center col-md-7">
                <tbody>
                    <tr>
                        <td>Status</td>
                        <td><?php echo e(ucwords($data->status)); ?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
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
                </tbody>
            </table>
        </div>
        <table class="table table-bordered table-stripped text-center">
            <thead>
                <th>No</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Nama Proses</th>
                <th>Tips dan Trik</th>
                <th>Catatan</th>
                <th>Ubah Catatan</th>
                <th>Status</th>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $data->penjadwalan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $jadwal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e(($index+1)); ?></td>
                    <td><?php echo e($jadwal->tanggal); ?></td>
                    <td><?php echo e($jadwal->waktu); ?></td>
                    <td><?php echo e($jadwal->nama_proses); ?></td>
                    <td><?php echo e($jadwal->tips_dan_trik); ?></td>
                    <td><?php echo e($jadwal->catatan); ?></td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#md<?php echo e($jadwal->id); ?>"><?php echo e($jadwal->catatan==null?'Tambah':'Ubah'); ?> Catatan</button>
                        <div class="modal fade" id="md<?php echo e($jadwal->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <form method="POST" action="<?php echo e(route('catatan',['id'=>$jadwal->id])); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('put'); ?>
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><?php echo e($jadwal->catatan==null?'Tambah':'Ubah'); ?> Catatan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                  <div class="form-group">
                                    <label for="message-text" class="col-form-label">Catatan</label>
                                    <textarea class="form-control" id="message-text" name="catatan"><?php echo e($jadwal->catatan); ?></textarea>
                                  </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary"><?php echo e($jadwal->catatan==null?'Tambah':'Ubah'); ?> Catatan</button>
                              </div>
                            </form>
                            </div>
                          </div>
                    </td>
                    <td>
                        <button type="button" class="btn btn-link btn-sm" data-toggle="modal" data-target="#mdS<?php echo e($jadwal->id); ?>"><?php echo e(ucwords($jadwal->status)); ?></button>
                        <div class="modal fade" id="mdS<?php echo e($jadwal->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <form method="POST" action="<?php echo e(route('status',['id'=>$jadwal->id])); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('put'); ?>
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ubah Status</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                  <div class="form-group">
                                    <label for="message-text" class="col-form-label">Status</label>
                                    <select name="status" class="form-control">
                                        <option value="sudah dilakukan" <?php echo e($jadwal->status=='sudah dilakukan'?'selected':''); ?>><?php echo e(ucwords('sudah dilakukan')); ?></option>
                                        <option value="belum dilakukan"<?php echo e($jadwal->status=='belum dilakukan'?'selected':''); ?>><?php echo e(ucwords('belum dilakukan')); ?></option>
                                        <option value="gagal"<?php echo e($jadwal->status=='gagal'?'selected':''); ?>><?php echo e(ucwords('gagal')); ?></option>
                                    </select>
                                  </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Ubah Status</button>
                              </div>
                            </form>
                            </div>
                          </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="8">Belum ada saran</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ppl-agro-main\ppl-agro-main\resources\views/petani/pascatanam/show.blade.php ENDPATH**/ ?>