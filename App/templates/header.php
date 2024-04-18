
<header>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo constant('URL_PATH'); ?>index" >LSC Software</a>
                <img src="/adso/public/assets/img/logo.png" alt="logo" id="#logo" style="width: 40px; height: 40px;">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <!-- Cambié me-auto a mx-auto para centrar los elementos -->
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo constant('URL_PATH'); ?>index">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo constant('URL_PATH'); ?>traductor">Traductor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="<?php echo constant('URL_PATH'); ?>nosotros">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo constant('URL_PATH'); ?>contactenos">Contactenos</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        <a class="btn btn-primary" href="<?php echo constant('URL_PATH'); ?>inicio_sesion">Iniciar sesion</a>
                        <a class="btn btn-primary" href="<?php echo constant('URL_PATH'); ?>registro">Crear cuenta</a>
                    </span>
                </div>
            </div>
        </nav>

</header>