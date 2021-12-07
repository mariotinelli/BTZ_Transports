
<?php $__env->startSection('title', 'Editando: ' . $fuel->typeFuel); ?>
<?php $__env->startSection('content'); ?>



<div id="driver-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: <?php echo e($fuel->typeFuel); ?></h1>
    <form action="/fuels/update/<?php echo e($fuel->id); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="typeFuel">Nome:</label>
            <input type="text" class="form-control" id="typeFuel" name="typeFuel" placeholder="Nome do combustível..." value="<?php echo e($fuel->typeFuel); ?>">
        </div>
        <div class="form-group">
            <label for="price">Preço:</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Preço do combustível..." value="<?php echo e($fuel->price); ?>">
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar Combustível">
    </form>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mário\Documents\ProjetoBTZ\btztransports\resources\views/fuels/edit.blade.php ENDPATH**/ ?>