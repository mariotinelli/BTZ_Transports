
<?php $__env->startSection('title', 'BTZ Transports'); ?>
<?php $__env->startSection('content'); ?>

<div class="col-md-10 offset-md-1 dashboard-events-container p-5">
    <h1>Abastecimentos</h1>
    <div class="row p-3">
        <div class="col-10">
            <a href="/supplies/create" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Cadastrar um Novo</a>
        </div>
    </div>
    <table class='table'>
        <thead>
            <tr>
                <th scope="col">Veículo</th>
                <th scope="col">Motorista</th>
                <th scope="col">Data</th>
                <th scope="col">Tipo de Combustível</th>
                <th scope="col">Quantidade Abastecida</th>
                <th scope="col">Valor Total</th>
                <th scope="col">Ações</th>

            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $supplies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td scropt="row"> <?php echo e($supply->vehicle->board); ?> </td>
                    <td> <?php echo e($supply->driver->cpf); ?> </td>
                    <td> <?php echo e(date('d/m/Y', strtotime($supply->date))); ?> </td>
                    <td> <?php echo e($supply->fuel->typeFuel); ?> </td>
                    <td> <?php echo e($supply->qtySupplied); ?> </td>
                    <td> <?php echo e($supply->totalValueSupply); ?> </td>
                    <td>
                        <form action="/supplies/<?php echo e($supply->id); ?>" method="POST">
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mário\Documents\ProjetoBTZ\btztransports\resources\views/supplies/dashboard.blade.php ENDPATH**/ ?>