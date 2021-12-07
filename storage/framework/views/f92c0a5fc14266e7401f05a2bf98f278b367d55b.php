
<?php $__env->startSection('title', 'BTZ Transports'); ?>
<?php $__env->startSection('content'); ?>



<div id="driver-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastro de Veículos</h1>
    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>
    <form action="/vehicles" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="board">Placa:</label>
            <input type="text" class="form-control" id="board" name="board" placeholder="Apenas letras e números.">
        </div>
        <div class="form-group">
            <label for="vehicleName">Nome:</label>
            <input type="text" class="form-control" id="vehicleName" name="vehicleName" placeholder="Nome do veículo">
        </div>
        <div class="form-group">
            <label for="fuel_id">Tipo do combustível</label>
            <select name="fuel_id" id="fuel_id" class="form-control">
            <option value="<?php echo e(null); ?>">Selecione</option>
                <?php $__currentLoopData = $fuels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fuel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($fuel->id); ?>"> <?php echo e($fuel->typeFuel); ?> </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <label for="manufacturer">Fabricante</label>
            <input type="text" class="form-control" id="manufacturer" name="manufacturer" placeholder="Fabricante">
        </div>
        <div class="form-group">
            <label for="yearManufacturer">Ano de fabricação:</label>
            <input type="text" class="form-control" id="yearManufacturer" name="yearManufacturer" placeholder="Ano de fabricação">
        </div>
        <div class="form-group">
            <label for="maximumTankCapacity">Capacidade máxima do tanque:</label>
            <input type="text" class="form-control" id="maximumTankCapacity" name="maximumTankCapacity" placeholder="Capacidade máxima do tanque em litros">
        </div>
        <div class="form-group">
            <label for="comments">Observações:</label>
            <textarea class="form-control" id="comments" name="comments" placeholder="Observações..."></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar Veículo">
    </form>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mário\Documents\ProjetoBTZ\btztransports\resources\views/vehicles/create.blade.php ENDPATH**/ ?>