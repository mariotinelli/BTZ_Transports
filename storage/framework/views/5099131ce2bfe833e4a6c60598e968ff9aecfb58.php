
<?php $__env->startSection('title', 'BTZ Transports'); ?>
<?php $__env->startSection('content'); ?>

<div class="col-md-10 offset-md-1 dashboard-events-container">
    <h1>Combustíveis</h1>
    <div class="row p-3">
        <div class="col-10">
            <a href="/fuels/create" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Cadastrar um Novo</a>
        </div>
        <div class="col text-right"> 
            <form action="/fuels/dashboard" method="GET">
                <input type="text" id="search" name="search" class="form-control" placeholder="Buscar por nome">
            </form>
        </div>
    </div>
    <table class='table'>
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Ações</th>

            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $fuels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fuel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td scropt="row"> <?php echo e($fuel->typeFuel); ?> </a></td>
                <td> <?php echo e($fuel->price); ?> </td>
                <td>
                    <a href="/fuels/edit/<?php echo e($fuel->id); ?>" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon></a> 
                    <form action="/fuels/<?php echo e($fuel->id); ?>" method="POST">
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mário\Documents\ProjetoBTZ\btztransports\resources\views/fuels/dashboard.blade.php ENDPATH**/ ?>