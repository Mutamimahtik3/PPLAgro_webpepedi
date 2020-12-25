<?php $__env->startSection('content'); ?>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>
<div class="card-body">
    <div class="table-responsive">
        <form action="<?php echo e(route('a.artikel.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
            <label class="small mb-1" for="judul">Judul</label>
            <input class="form-control py-4" id="judul" type="text" placeholder="Judul Artikel" name="judul" value="<?php echo e(old('judul')); ?>"/>
            </div>
            <?php if ($errors->has('judul')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('judul'); ?>
            <span>
                <?php echo e(ucwords($message)); ?>

            </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

            <div class="form-group">
            <label class="small mb-1" for="gambar">Gambar</label>
            <input class="form-control" id="gambar" type="file" name="gambar" accept="image/*" value="<?php echo e(old('gambar')); ?>"/>
            </div>
            <?php if ($errors->has('gambar')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('gambar'); ?>
            <span>
                <?php echo e(ucwords($message)); ?>

            </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

            <div class="form-group">
            <label class="small mb-1" for="kategori">Kategori</label>
            <select name="kategori" id="kategori" class="form-control">
            	<option disabled selected>Pilih Kategori</option>
            	<option value="artikel"><?php echo e(ucwords('artikel')); ?></option>
            	<option value="berita"><?php echo e(ucwords('berita')); ?></option>
            </select>
            </div>
            <?php if ($errors->has('kategori')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('kategori'); ?>
            <span>
                <?php echo e(ucwords($message)); ?>

            </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
            <div class="form-group">
            <label class="small mb-1" for="summernote">Konten</label>
            <textarea id="summernote" name="konten" cols="30"></textarea>
            </div>
            <?php if ($errors->has('konten')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('konten'); ?>
            <span>
                <?php echo e(ucwords($message)); ?>

            </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
            
			<button type="submit" class="btn btn-primary">
				Submit
			</button>


       </form>
   </div>
</div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ppl-agro-main\ppl-agro-main\resources\views/admin/artikel/create.blade.php ENDPATH**/ ?>