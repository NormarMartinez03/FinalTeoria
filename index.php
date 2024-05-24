<?php include ("template/header.php") ?>
<script>
        const links_menu = document.querySelectorAll(".links_menu");
        const inicio = document.querySelector(".inicio");

        links_menu.forEach(links => {
                links.classList.remove("selected");
        })
        inicio.classList.add("selected");
</script>

<div class="box-perfil">
        <div class="card">
                <div class="card-header">
                        <img src="imgs/log_ciencia.jpg" alt="logo faculta de ciencia" class="profile-img">
                </div>
                <div class="card-body">
                        <div class="body-content">
                                <div class="content-img">
                                        <img src="imgs/perfil-ciencia.jpg" alt="logo faculta de ciencia"
                                                class="profile-descano">
                                </div>
                                <div class="content-desc">
                                        <h2>Mtro. José Ferreira Capellán</h2>
                                        <h4>Decano de la Facultad de Ciencias</h4>
                                        <p>
                                                Desde la Facultad de Ciencias impulsamos los proyectos de invención, la
                                                ciencia y la investigación para aportar en la construcción del
                                                conocimiento necesario para el desarrollo de nuestra nación, la región y
                                                el mundo.
                                        </p>

                                </div>
                        </div>

                </div>
                <!--  <div class="card-body">
                                <h2>Juan Pérez</h2>
                                <h4>Asesor Financiero</h4>
                                <p>Especializado en préstamos personales y empresariales. Estoy aquí para ayudarte a alcanzar tus metas financieras de manera rápida y sencilla.</p>
                        </div> -->
                <div class="card-footer">
                       <!--  <a href="">juan.perez@prestamos.com</a>
                        <a href="tel:+123456789" class="phone">+1 (234) 567-89</a> -->

                        <span class="footer-info">
                                Universidad Autónoma de Santo Domingo - Primada de América, Fundada el 28 de octubre de
                                1538
                                Alma Máter, Santo Domingo, República Dominicana Teléfono: <a href="tel:+18095358273" class="phone">+1 (809) 535-8273</a> | <a href="mailto:juan.perez@prestamos.com"
                                        class="email">info@uasd.edu.do</a>
                        </span>

                </div>
        </div>
</div>

<?php include ("template/footer.php") ?>