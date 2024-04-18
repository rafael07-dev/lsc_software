<!DOCTYPE html>
<html>

<head>
    <title>LSC Software</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


</head>

<body>

    <?php
    require '../App/templates/header.php';
    ?>

    <div class="container py-4">
    <div class="card bg-light">
                <div class="card-header">
                    <h4>Crear usuario en LSC SOFTWARE</h4>
                </div>
                <div class="card-body">
                    <form action="#" method="post">
                        <div class="form-group row">
                            <div class="col">
                                <input class="form-control" type="text" placeholder="Nombres">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm">
                                <input class="form-control" type="email" placeholder="Apellidos">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm">
                                <input class="form-control" type="text" placeholder="Correo">
                            </div>

                        </div>

                        <div class="form-group row">
                            <div class="col-sm">
                                <input class="form-control" type="password" placeholder="Contraseña">
                            </div>

                        </div>

                        <div class="form-group row">
                            <div class="col-sm">
                                <input class="form-control" placeholder="Cedula"></input>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm">
                                <label for="fecha_nacimiento">Fecha nacimiento</label>
                                <input id="fecha_nacimiento" class="form-control" type="date">
                            </div>

                        </div>

                        <div class="form-group row">
                            <div class="col-sm">
                                <button class="form-control btn btn-primary">Iniciar sesion</button>
                            </div>
                        </div>
                    </form>


            <div class="additional-links">
                <a href="#">¿Olvidaste tu contraseña?</a><br>
                <a href="<?php echo constant('URL_PATH'); ?>registro">Crear un Nuevo Usuario</a>
            </div>

        </div>


    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>