<?php $__env->startSection('content'); ?>
    <div class="mt-6 mb-40">
        <br>
        <h1 class="font-semibold my-12"><?php echo e($data->judul); ?> </h1>
        <br>
        <?php if($data->file && $data->file !== 'tidak ada file'): ?>
            <div class="flex justify-center">
                <img src="<?php echo e(config('app.eksternal_link')); ?>/storage/data/<?php echo e($data->file); ?>" alt="<?php echo e($data->judul); ?>">
            </div>
        <?php endif; ?>

        <div class="justify-center text-justify mx-40 my-12" align="center">
            <div class="row">
                <div class="col-2">

                </div>
                <div class="col-8">
                <br> <?php echo $data->ket; ?> <?php echo e($data); ?>

                </div>
                <div class="col-2">

                </div>
            </div>
            
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ineza/Desktop/kotabogor/front/resources/views/halaman.blade.php ENDPATH**/ ?>