<!doctype html>
<html lang="en">

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
    <main>

        <div class="container">
            <h1>Ingrese su frase a traducir</h1>


            <!-- <div class="textarea-video"> -->

            <textarea cols="70" rows="6"></textarea>
            <div>
                <h6 class="letracheck">Deletrear las palabras que no encuentre</h6>
                <input type="checkbox" class="textarea-video">
            </div>


            <input class="btn btn-primary" type="button" value="Traducir">

            <input class="btn btn-primary" type="button" value="Limpiar">

            <!-- 
                    <video src="../public/assets/img/giflsc.mp4" controls preload poster="../public/assets/img/giflsc.mp4"
                    autoplay muted></video>

                -->


            <!-- </div> -->

            <div>
                <p> La presente herramienta en ningun momento pretende reemplazar el intérprete humano, ya que el estado
                    actual de la tegnología aun no permite hablar de traducciones automáticas o con sentido, es
                    simplemente una ayuda mas. Este aplicativo realiza una búsqueda de señas analizando la frase en su
                    estructura gramatical,
                    haciendo enfasis en el país origen y realizando el deletreo de las palabras en caso de no encontrar
                    equivalencia.</p>
            </div>




        </div>

    </main>

    <footer style="width: 45%; height: 120px;">
        <!-- place footer here " -->

        <div class="container">
            <img src="/adso/public/assets/img/piepagina.png" alt="footer">
        </div>



    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>