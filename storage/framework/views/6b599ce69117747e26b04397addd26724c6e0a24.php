
<?php $__env->startSection('title', 'BTZ Transports'); ?>
<?php $__env->startSection('content'); ?>

<div class="col-md-10 offset-md-1 dashboard-events-container">

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

                <tr>
                    <td scropt="row">  </td>
                    <td><a href="">  </a></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Editar</a> 
                        <form action="" method="POST'">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon>Deletar</button>
                        </form>
                    </td>
                </tr>

        </tbody>
    </table>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mário\Documents\ProjetoBTZ\btztransports\resources\views//drivers/dashboard.blade.php ENDPATH**/ ?>