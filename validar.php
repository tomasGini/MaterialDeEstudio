<?php

    include('db.php');
    
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $consulta = "SELECT* FROM usuarios where email = '$email' and pwd = '$pwd'";
    $result = mysqli_query($conexion, $consulta);
    $filas = mysqli_num_rows($result);

    if ($filas) {
        header("location:index.html");
    } else {
        include("index.html");
            ?>
            <h3 class="bad">No estas registrado</h3>
            <?php 
    }
    mysqli_free_result($result);
    mysqli_close($conexion);
?>