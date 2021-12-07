
<?php $__env->startSection('title', 'BTZ Transports'); ?>
<?php $__env->startSection('content'); ?>

<div class="col-md-10 offset-md-1 dashboard-events-container p-5">
    <h1>Motoristas</h1>
    <div class="row p-3">
        <div class="col-10">
            <a href="/drivers/create" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Cadastrar um Novo</a>
        </div>
        <div class="col text-right"> 
            <form action="/drivers/dashboard" method="GET">
                <input type="text" id="search" name="search" class="form-control" placeholder="Buscar por nome">
            </form>
        </div>
    </div>
    <table class='table'>   
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Número da CNH</th>
                <th scope="col">Categoria da CNH</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">Status</th>
                <th scope="col">Ações</th>

            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $drivers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td scropt="row"> <?php echo e($driver->name); ?> </a></td>
                <td> <?php echo e($driver->cpf); ?> </td>
                <td> <?php echo e($driver->cnhNumber); ?> </td>
                <td> <?php echo e($driver->cnhCategory); ?> </td>
                <td> <?php echo e(date('d/m/Y', strtotime($driver->birthDate))); ?> </td>               
                <td> <?php echo e($driver->status); ?></td>

                <td>
                    <a href="/drivers/edit/<?php echo e($driver->id); ?>" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon></a> 
                    <form action="/drivers/<?php echo e($driver->id); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon></button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mário\Documents\ProjetoBTZ\btztransports\resources\views/drivers/dashboard.blade.php ENDPATH**/ ?>