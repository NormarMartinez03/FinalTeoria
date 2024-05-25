<?php $home = "https://localhost/propuesta/" ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propuesta de Investigacion</title>

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
    <!-- actividad -->
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
            <h4>Name investigador</h4>
        </div>

        <div class="options__menu">	

            <ul class="selected">
                <a href="<?=$home?>">
                    <div class="option">
                        <div class="icon_title">
                            <i class="fas fa-home" title="Inicio"></i>
                            <h4>Inicio</h4>
                        </div>
                    </div>
                </a>
               
               
            </ul>
           <!--  <a href="" class="links_menu selected inicio">
                <div class="option">
                    <div class="icon_title">
                        <i class="fas fa-home" title="Inicio"></i>
                        <h4>Inicio</h4>
                    </div>
                </div>
            </a> -->

            <ul class="selected">
                <div class="option">
                    <a href="<?=$home?>/view/investigador/">
                        <div class="icon_title">
                            <i class="fa-solid fa-file-pen" title="Investigador"></i>
                            <h4>Investigador</h4>
                        </div>
                    </a>
                    
                    <ul class="sub-menu hidden">
                        <li><a href="<?=$home?>view/investigador/categoria">Categoria</a></li>
                        <li><a href="#">Institucion</a></li>
                        <li><a href="#">Formacion</a></li>
                    </ul>
                </div>
            </ul>

           <!--  <a href="view/investigador/" class="links_menu investigador">
                <div class="option">
                    <div class="icon_title">
                        <i class="fa-solid fa-file-pen" title="Investigador"></i>
                        <h4>Investigador</h4>
                    </div>
                    
                    <div class="submenu hidden">
                        <a href="#">Item I</a>
                        <a href="#">Item II</a>
                        <a href="#">Item III</a>
                        <a href="#">Item IV</a>
                    </div>
                </div>
                
            </a> -->
            <ul class="selected">
                <div class="option">
                    <a href="<?=$home?>view/propuesta">
                        <div class="icon_title">
                            <i class="fa-solid fa-pen-nib" title="Propuesta"></i>
                            <h4>Propuesta</h4>
                        </div>
                    </a>
                   
                    <ul class="sub-menu hidden">
                        <li><a href="#">Item I</a></li>
                        <li><a href="#">Item II</a></li>
                        <li><a href="#">Item III</a></li>
                    </ul>
                </div>
            </ul>
            
          <!--   <a href="view/propuesta/" class="links_menu propuesta">
                <div class="option">
                    <div class="icon_title">
                        <i class="fa-solid fa-pen-nib" title="Propuesta"></i>
                        <h4>Propuesta</h4>
                    </div>
                    <div class="submenu hidden">
                        <h4>Item I</h4>
                        <h4>Item II</h4>
                        <h4>Item III</h4>
                        <h4>Item IV</h4>
                    </div>
                </div>
            </a> -->
            <ul class="selected">
                <div class="option">
                    <a href="<?=$home?>view/fuente">
                        <div class="icon_title">
                            <i class="fa-solid fa-scale-unbalanced-flip" title="Fuente Legal"></i>
                            <h4>Fuente Legal</h4>
                        </div>
                    </a>
                    
                    <ul class="sub-menu hidden">
                        <li><a href="#">Item I</a></li>
                        <li><a href="#">Item II</a></li>
                        <li><a href="#">Item III</a></li>
                    </ul>
                </div>
            </ul>

           <!--  <ul class="selected">
                <div class="option">
                    <div class="icon_title">
                        <i class="fa-solid fa-scale-unbalanced-flip" title="Fuente Legal"></i>
                        <h4>Fuente Legal</h4>
                    </div>
                    <ul class="sub-menu hidden">
                        <li><a href="#">Item I</a></li>
                        <li><a href="#">Item II</a></li>
                        <li><a href="#">Item III</a></li>
                    </ul>
                </div>
            </ul> -->
            <ul class="selected">
                <div class="option">
                    <a href="<?=$home?>view/propuesta">
                        <div class="icon_title">
                            <i class="fa-solid fa-landmark" title="Facultad"></i>
                            <h4>Facultad</h4>
                        </div>
                    </a>
                    
                    <ul class="sub-menu hidden">
                        <li><a href="#">Item I</a></li>
                        <li><a href="#">Item II</a></li>
                        <li><a href="#">Item III</a></li>
                    </ul>
                </div>
            </ul>

          <!--   <a href="view/fuente/" class="links_menu fuente-legal">
                <div class="option">
                    <div class="icon_title">
                        <i class="fa-solid fa-scale-unbalanced-flip" title="Fuente Legal"></i>
                        <h4>Fuente Legal</h4>
                    </div>
                    <div class="submenu hidden">
                        <h4>Item I</h4>
                        <h4>Item II</h4>
                        <h4>Item III</h4>
                        <h4>Item IV</h4>
                    </div>
                </div>
            </a> -->

            <!-- <a href="view/facultad/" class="links_menu facultad">
                <div class="option">
                    <div class="icon_title">
                        <i class="fa-solid fa-landmark" title="Facultad"></i>
                        <h4>Facultad</h4>
                    </div>
                    <div class="submenu hidden">
                        <h4 href="#mamao">Item I</h4>
                        <h4>Item II</h4>
                        <h4>Item III</h4>
                        <h4>Item IV</h4>
                    </div>
                </div>
            </a> -->
            <ul class="selected">
                <div class="option">
                    <a href="<?=$home?>view/propuesta">
                        <div class="icon_title">
                            <i class="fa-solid fa-building" title="Organismo"></i>
                            <h4>Organismo</h4>
                        </div>
                    </a>
                    
                    <ul class="sub-menu hidden">
                        <li><a href="#">Item I</a></li>
                        <li><a href="#">Item II</a></li>
                        <li><a href="#">Item III</a></li>
                    </ul>
                </div>
            </ul>
<!-- 
            <a href="view/organismo/" class="links_menu organismo">
                <div class="option">
                    <div class="icon_title">
                        <i class="fa-solid fa-building" title="Organismo"></i>
                        <h4>Organismo</h4>
                    </div>
                    <div class="submenu hidden">
                        <h4>Item I</h4>
                        <h4>Item II</h4>
                        <h4>Item III</h4>
                        <h4>Item IV</h4>
                    </div>
                     Organismo son las fuente de organizacion  el finaciamente y demas depende de este, incluir submenu para finaciamiento

                </div>
            </a>-->
        </div>

    </div>

    <main>