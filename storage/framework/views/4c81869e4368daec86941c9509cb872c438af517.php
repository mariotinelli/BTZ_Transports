
<?php $__env->startSection('title', 'BTZ Transports'); ?>
<?php $__env->startSection('content'); ?>

<div class="col-md-10 offset-md-1 dashboard-events-container p-5">
    <h1>Veículos</h1>
    <div class="row p-3">
        <div class="col-10">
            <a href="/vehicles/create" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Cadastrar um Novo</a>
        </div>
        <div class="col text-right"> 
            <form action="/vehicles/dashboard" method="GET">
                <input type="text" id="search" name="search" class="form-control" placeholder="Buscar placa">
            </form>
        </div>
    </div>
    <table class='table table-striped'>
        <thead>
            <tr>
                <th scope="col">Placa</th>
                <th scope="col">Nome</th>
                <th scope="col">Tipo de Combustível</th>
                <th scope="col">Fabricante</th>
                <th scope="col">Ano de Fabricação</th>
                <th scope="col">Capacidade Máxima do Tanque</th>
                <th scope="col">Observações</th>
                <th scope="col">Ações</th>

            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td scropt="row"> <?php echo e($vehicle->board); ?> </td>
                    <td> <?php echo e($vehicle->vehicleName); ?> </td>
                    <td> <?php echo e($vehicle->fuel->typeFuel); ?> </td>
                    <td> <?php echo e($vehicle->manufacturer); ?> </td>
                    <td> <?php echo e($vehicle->yearManufacturer); ?> </td>
                    <td> <?php echo e($vehicle->maximumTankCapacity); ?> </td>
                    <td> <?php echo e($vehicle->comments); ?> </td>
                    <td>
                    <a href="/vehicles/edit/<?php echo e($vehicle->id); ?>" class="btn btn-info edit-btn btn-sm"><ion-icon name="create-outline"></ion-icon></a> 
                    <form action="/vehicles/<?php echo e($vehicle->id); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger delete-btn btn-sm"><ion-icon name="trash-outline"></ion-icon></button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mário\Documents\ProjetoBTZ\btztransports\resources\views/vehicles/dashboard.blade.php ENDPATH**/ ?>