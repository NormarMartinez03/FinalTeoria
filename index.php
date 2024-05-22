<?php include ("template/header.php") ?>
        <script>
                const links_menu = document.querySelectorAll(".links_menu");
                const inicio =document.querySelector(".inicio");

                links_menu.forEach(links => {
                        links.classList.remove("selected");
                })
                inicio.classList.add("selected");
        </script>
        
        <div class="box-perfil">
                <div class="card">
                        <div class="card-header">
                                <img src="imgs/perfil_profesional.webp" alt="Foto de Perfil" class="profile-img">
                        </div>
                        <div class="card-body">
                                <h2>Juan Pérez</h2>
                                <h4>Asesor Financiero</h4>
                                <p>Especializado en préstamos personales y empresariales. Estoy aquí para ayudarte a alcanzar tus metas financieras de manera rápida y sencilla.</p>
                        </div>
                        <div class="card-footer">
                                <a href="mailto:juan.perez@prestamos.com" class="email">juan.perez@prestamos.com</a>
                                <a href="tel:+123456789" class="phone">+1 (234) 567-89</a>
                        </div>
                </div>
        </div>

<?php include ("template/footer.php") ?>