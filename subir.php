<?php
    include('db.php');

    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $desc = $_POST['desc'];
    $route = "public/pdfs/".$file_name;
        
    move_uploaded_file($file_tmp,$route);

    $sql = "INSERT INTO archivos(nombre, descripcion) VALUES('$file_name','$desc')";

    $sql_query = mysqli_query($conexion,$sql); 
    header("location:index.html");
?> 