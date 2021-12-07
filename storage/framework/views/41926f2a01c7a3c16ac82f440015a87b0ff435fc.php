
<?php $__env->startSection('title', 'BTZ Transports'); ?>
<?php $__env->startSection('content'); ?>



<div id="driver-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastro de Abastecimento</h1>
    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>
    <form action="/supplies" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="vehicle_id">Veículo:</label>
            <select name="vehicle_id" id="vehicle_id" class="form-control ">
                <option value="<?php echo e(null); ?>"> Selecione um veículo </option>
                <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($vehicle->id); ?>"> <?php echo e($vehicle->board); ?> </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <label for="driver_id">Motorista:</label>
            <select name="driver_id" id="driver_id" class="form-control">
            <option value="<?php echo e(null); ?>">Selecione</option>
                <?php $__currentLoopData = $drivers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($driver->id); ?>"> <?php echo e($driver->name); ?> </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <label for="date">Data:</label>
            <input type="date" class="form-control" id="date" name="date" >
        </div>
        <div class="form-group">
            <label for="fuel_id">Tipo de combustível:</label>
            <select name="fuel_id" id="fuel_id" class="form-control">
            <option value="<?php echo e(null); ?>">Selecione</option>
                <?php $__currentLoopData = $fuels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fuel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($fuel->typeFuel != "Flex"): ?>
                        <option value="<?php echo e($fuel->id); ?>"> <?php echo e($fuel->typeFuel); ?> </option>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <label for="qtySupplied">Quantidade abastecida:</label>
            <input type="text" class="form-control" id="qtySupplied" name="qtySupplied" placeholder="Quantidade abastecida...">
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar Abastecimento">
    </form>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mário\Documents\ProjetoBTZ\btztransports\resources\views/supplies/create.blade.php ENDPATH**/ ?>