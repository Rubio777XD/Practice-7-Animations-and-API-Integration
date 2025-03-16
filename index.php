<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/mystyles.css">
</head>

<body>

    <div id="weather" style="color: white; font-size: 18px; margin-top: 10px;"></div>

    <main>
        <div class="container-all">

            <!--Caja trasera para el login y registro-->
            <div class="back-box">
                <!--Caja trasera para el login-->
                <div class="back-box-login">
                    <h3>I already have an account</h3>
                    <p>Login to use our page</p>
                    <button id="btn__login">Login</button>
                </div>

                <!--Caja trasera para el registro-->
                <div class="back-box-register">
                    <h3>I dont have an account</h3>
                    <p>Make a new account to use our page</p>
                    <button id="btn__register">Register Now</button>
                </div>
            </div>

            <!--Formuklario de login y registro-->
            <div class="container-loginregister">

                <!--Formuklario de login-->
                <form action="" class="form_login">
                    <h2>Login</h2>
                    <input type="text" placeholder="Email">
                    <input type="password" placeholder="Password">
                    <button>Login</button>
                </form>

                <!--Formuklario de registro-->
                <form action= "php/registro_usuario_be.php" method = "POST" class="form_register">
                    <h2>Register Now</h2>
                    <input type="text" placeholder="Full Name" name ="nombre_completo">
                    <input type="text" placeholder="Email" name ="email">
                    <input type="text" placeholder="Username" name ="username">
                    <input type="password" placeholder="Password" name ="contrasena">
                    <button>Register</button>

                </form>
            </div>

        </div>

    </main>

    <script src="assets/js/scripts.js"></script>
</body>

</html>