

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Edit Anggota</h2>

    <form action="<?php echo e(route('anggota.update', $anggota->id_anggota)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" value="<?php echo e($anggota->nama); ?>" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" value="<?php echo e($anggota->alamat); ?>" required>
        </div>

        <div class="form-group">
            <label for="no_telp">No Telp</label>
            <input type="text" name="no_telp" class="form-control" value="<?php echo e($anggota->no_telp); ?>" required>
        </div>

        <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control" value="<?php echo e($anggota->tgl_lahir); ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Anggota</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\perpustakaan\resources\views/edit-anggota.blade.php ENDPATH**/ ?>