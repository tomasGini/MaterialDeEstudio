<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="material de estudio,cuenta">
        <title>Material de estudio - Cuenta</title>
        <link rel="stylesheet" type="text/css" href="normalize.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="canonical" href="https://materialdeestudio.com/">
        <link rel="shortlink" href="https://materialdeestudio.com/">
        <link rel="icon" href="https://materialdeestudio.com/wp-content/uploads/2022/03/cropped-simbolo-color@2x-32x32.png" sizes="32x32">
        <script src="https://kit.fontawesome.com/d9aeb1352a.js" crossorigin="anonymous"></script>
    </head>
    <body class="general">
        <header>
            <nav class="nav">
                <ul class="nav__ul">
                    <div class="buscar">
                        <input type="text" placeholder="Buscar.." required>
                        <div class="button-busqueda">
                            <i class="fa-solid fa-magnifying-glass icon"></i>
                        </div>
                    </div>
                    <div class="nav__ul-li">
                    <li class="nav__li" ><a class="button-li" href="index.html"><span class="fa-solid fa-house"></span></a></li>
                        <li class="nav__li" ><a class="button-li" href="subir.html"><span class="fa-solid fa-file-arrow-up"></span></a></li>
                        <li class="nav__li" ><a class="button-li" href="cuenta.html"><span class="fa-solid fa-user"></span></a></li>
                    </div>
                </ul>
            </nav>
        </header>
        <form method="post">
            <section class="form-login">
                <h5>Registro</h5>
                <input class="controls" type="text" name="usuario" value=""placeholder="Usuario">
                <input class="controls" type="email" name="email" value=""placeholder="Email">
                <input class="controls" type="password" name="pwd" value=""placeholder="Contraseña">
                <input class="buttons" type="submit" name="enviar" value="Enviar">
            </section>
        </form>
            <?php include("registro.php");?>
        <footer>
            <div>
                <h4 class="copy">Copyright© - Todos los derechos reservados</h4>
            </div>
        </footer>   
    </body>
</html> 