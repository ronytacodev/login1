<?php
    if (!empty($_POST["btnIngresar"])) {
        if (empty($_POST["usuario"]) and empty($_POST["password"])) {
            echo '<div class="alert alert-danger">LOS CAMPOS ESTAN VACIOS</div>';
        } else {
            $usuario = $_POST["usuario"];
            $clave = $_POST["password"];
            $sql = $conexion-> query("SELECT * FROM USUARIOS WHERE USUARIO = '$usuario' AND CLAVE  = '$clave'");
            if ($datos = $sql-> fetch_object()) {
                header("location:inicio.php");
            } else {
                echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
            }
            

        }
        
    }

?>