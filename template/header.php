<?php $home = "https://localhost/prestamo/" ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de prestamo</title>

    <!-- style cotumize -->
    <link rel="stylesheet" href="<?= $home ?>css/estilos.css">
   <!--  <link rel="stylesheet" href="css/datatables.css" />  -->

     <!-- JS QUERY -->
     <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- DATATABLE -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.4/css/dataTables.dataTables.css" />
    <!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <script src="https://cdn.datatables.net/2.0.4/js/dataTables.js"></script>

    <!-- fontawesome para los iconos -->
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    
</head>
<body id="body">
    
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fa-regular fa-user"></i>
            <h4>Default user</h4>
        </div>

        <div class="options__menu">	

            <a href="<?= $home ?>" class="links_menu selected inicio">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h4>Inicio</h4>
                </div>
            </a>

            <a href="<?= $home ?>View/usuario/" class="links_menu usuario">
                <div class="option">
                    <i class="fa-solid fa-users" title="Usuario"></i>
                    <h4>Usuario</h4>
                </div>
            </a>
            
            <a href="<?= $home ?>View/cliente/" class="links_menu cliente">
                <div class="option">
                    <i class="fa-solid fa-user-tag" title="Cliente"></i>
                    <h4>Cliente</h4>
                </div>
            </a>

            <a href="<?= $home ?>View/prestamo/" class="links_menu prestamo">
                <div class="option">
                    <i class="fa-solid fa-sack-dollar" title="Prestamo"></i>
                    <h4>Prestamo</h4>
                </div>
            </a>

            <a href="<?= $home ?>View/cuotas/" class="links_menu cuotas">
                <div class="option">
                    <i class="fa-solid fa-wallet" title="Cuotas"></i>
                    <h4>Cuotas</h4>
                </div>
            </a>

            <a href="<?= $home ?>View/pagos/" class="links_menu pagos">
                <div class="option">
                    <i class="fa-solid fa-piggy-bank" title="Pagos"></i>
                    <h4>Pagos</h4>
                </div>
            </a>

        </div>

    </div>

    <main>