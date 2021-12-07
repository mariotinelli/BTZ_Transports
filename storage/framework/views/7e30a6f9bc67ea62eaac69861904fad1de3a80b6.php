
<?php $__env->startSection('title', 'Editando: ' . $driver->name); ?>
<?php $__env->startSection('content'); ?>

<div id="driver-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: <?php echo e($driver->name); ?></h1>
    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>
    <form action="/drivers/update/<?php echo e($driver->id); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nome do motorista..." value="<?php echo e($driver->name); ?>">
        </div>
        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF do motorista..." value="<?php echo e($driver->cpf); ?>">
        </div>
        <div class="form-group">
            <label for="cnhNumber">Número da CNH</label>
            <input type="text" class="form-control" id="cnhNumber" name="cnhNumber" placeholder="Número da CNH do motorista..." value="<?php echo e($driver->cnhNumber); ?>">
        </div>
        <div class="form-group">
            <label for="cnhCategory">Categoria da CNH:</label>
            <select name="cnhCategory" id="cnhCategory" class="form-control">
                <option value="<?php echo e($driver->cnhCategory); ?>"><?php echo e($driver->cnhCategory); ?></option>
                <option value="Categoria A">Categoria A</option>
                <option value="Categoria B">Categoria B</option>                
                <option value="Categoria C">Categoria C</option>
                <option value="Categoria D">Categoria D</option>
                <option value="Categoria E">Categoria E</option>
                <option value="Categoria AB">Categoria AB</option>
                <option value="Categoria AC">Categoria AC</option>
                <option value="Categoria AD">Categoria AD</option>
                <option value="Categoria AE">Categoria AE</option>
            </select>
        </div>
        <div class="form-group">
            <label for="birthDate">Data de Nascimento:</label>
            <input type="date" class="form-control" id="birthDate" name="birthDate" palceholder="Data de nascimento do motorista..." value="<?php echo e(date('Y-m-d', strtotime($driver->birthDate))); ?>">
        </div>
        <div class="form-group">
            <label for="status">O motorista está ativo?</label>
            <select name="status" id="status" class="form-control">
                <option value="Inativo">Inativo</option>
                <option value="Ativo" <?php echo e($driver->status == "Ativo" ? "selected='selected'" : ""); ?>> Ativo </option>
            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Editar Motorista">
    </form>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mário\Documents\ProjetoBTZ\btztransports\resources\views/drivers/edit.blade.php ENDPATH**/ ?>