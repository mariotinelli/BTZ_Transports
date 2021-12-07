<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $__env->yieldContent('title'); ?></title>

        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"></script>
        
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <img src="/img/2021 - Teste PHP - BTZ Transportes.png" alt="BTZ Transports">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Inicio</a>
                        </li>
                        <?php if(auth()->guard()->guest()): ?>
                        <li class="nav-item">
                            <a href="/login" class="nav-link">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/register" class="nav-link">Registrar</a>
                        </li>
                        <?php endif; ?>
                        <?php if(auth()->guard()->check()): ?>
                        <li class="nav-item">
                            <a href="/supplies/dashboard" class="nav-link">Abastecimento</a>
                        </li>
                        <li class="nav-item">
                            <a href="/vehicles/dashboard" class="nav-link">Veículos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/drivers/dashboard" class="nav-link">Motoristas</a>
                        </li>
                        <li class="nav-item">
                            <a href="/fuels/dashboard" class="nav-link">Combustível</a>
                        </li>
                        <li class="nav-item">
                            <form action="/logout" method="POST">
                                <?php echo csrf_field(); ?>
                                <a href="/logout" 
                                class="nav-link" 
                                onclick="event.preventDefault();
                                this.closest('form').submit();">
                                Sair 
                                </a>
                            </form>
                        </li>
                        <?php endif; ?>                        
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="container-fluid">
                <div id="row">
                    <?php if(session('msg')): ?>
                        <p class="msg"><?php echo e(session('msg')); ?> </p>
                    <?php endif; ?>
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
        </main>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
<?php /**PATH C:\Users\Mário\Documents\ProjetoBTZ\btztransports\resources\views/layouts/main.blade.php ENDPATH**/ ?>