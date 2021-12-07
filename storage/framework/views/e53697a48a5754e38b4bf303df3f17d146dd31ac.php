
<?php $__env->startSection('title', 'BTZ Transports'); ?>
<?php $__env->startSection('content'); ?>



<div id="driver-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastro de Combustível</h1>
    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>
    <form action="/fuels" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="typeFuel">Nome:</label>
            <input type="text" class="form-control" id="typeFuel" name="typeFuel" placeholder="Nome do combustível">
        </div>
        <div class="form-group">
            <label for="price">Preço:</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Preço do combustível">
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar Combustível">
    </form>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mário\Documents\ProjetoBTZ\btztransports\resources\views/fuels/create.blade.php ENDPATH**/ ?>