<?php
    include('db.php');

    if (isset($_POST['enviar'])) {
        if (strlen($_POST['usuario']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['pwd']) >= 1){
            $usuario = trim($_POST['usuario']);
            $email = trim($_POST['email']);
            $pwd = trim($_POST['pwd']);
            $consulta = "INSERT INTO usuarios!(usuario,email,pwd) VALUES ('$usuario','$email','$pwd')";
            $resultado = mysqli_query($conexion,$consulta);
            
            if ($resultado) {
                ?>
                <h3 class="ok">Te has registrado correctamente!</h3>
                <?php
                header("location:cuenta.html");
            } else {
                ?>
                <h3 class="bad">Ha ocurrido un error!</h3>
                <?php 
            }
        } else {
            ?>
            <h3 class="bad">Por favor complete los campos</h3>
            <?php 
        }
    }
?>