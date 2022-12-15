<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- iconos font-awesome -->
    <script src="https://kit.fontawesome.com/9d0ecd6d4d.js" crossorigin="anonymous"></script>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

    <img class="nave" src="img/nave.png">
    <div class="container">
        <div class="img">

        </div>
        <div class="login-content">
            <form action="" method="post">
                <img src="img/avatar.svg">
                <h2 class="title">BIENVENIDO</h2>

                <?php 
                    include("conexion_bd.php");
                    include("controlador.php");
                ?>

                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Usuario</h5>
                        <input type="text" id="usuario" class="input" name="usuario">
                    </div>
                </div>

                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Contraseña</h5>
                        <input type="password" id="input" class="input" name="password">
                    </div>
                </div>

                <div class="view">
                    <div class="fas fa-eye verPassWord" onclick="vista()" id="verPasword"></div>
                </div>

                <div class="text-center">
                    <a href="#" class="font-italic">Olvidé mi contraseña</a>
                </div>
                <input type="submit" class="btn" name="btnIngresar" value="INICIAR SESION">
            </form>
        </div>

    </div>


    <!-- <div class="container">
        <h1>Acceso</h1>
        <form action="">
            <div class="form__group form__div">
                <span><i class="fa-solid fa-envelope"></i></span>
                <input class="campo" type="email" placeholder="Direccion de correo electronico">
            </div>
            <div class="form__group form__div">
                <span><i class="fa-solid fa-lock"></i></span>
                <input class="campo" type="password" placeholder="Contraseña">
            </div>
            <div class="form__group">
                <button type="submit">Acceso</button>
            </div>
            <div class="form__group__enlace">
                <a class="enlace" href="#">¿Olvidaste tu contraseña?</a>
            </div>
        </form>
        <hr>
        <p>Inicie sesión con su cuenta de redes sociales</p>
        <div class="div__group">
            <a class="redes" href="#"><i class="fa-brands fa-twitter"></i></a>
            <a class="redes" href="#"><i class="fa-brands fa-facebook"></i></a>
        </div>
    </div> -->


    <script src="js/main.js"></script>
</body>

</html>