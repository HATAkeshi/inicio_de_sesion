<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <!--llamado a bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--llamdo a sweetAlert-->
    <link rel="stylesheet" href="SweetAlert/sweetalert2.min.css">
    <!--Agregando la imagen de la izquierda-->
    <style>
      .bg{
        background-image: url(imagenes_de_apoyo/1.gif);
        background-position: center center;
        background-repeat: no-repeat;
        background-size:100%;
      }
    </style>
</head>
<body class="bg-dark text-light">
   <!--hacemos las rows-->
    <div class="container mb-5" >
      <div class="row aling-items-center mt-4 ">
        <!--columna que contiene la imagen-->
        <div class="col col-md-6 bg"></div>
        <div class="col-md-6 ">
            <!--comenzamos con el formulario-->
            <form action="" method="post">
              <!--logo de la empresa-->
              <div class="text-end text-center ">
                <img src="logos/logo.png" width="48" alt="">
              </div>
              <h2 class="fw-bold text-center py-5">Welcome to MangaKase</h2>
              
              <!--cuadro de email-->
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-labe">Email address</label>
                <input type="email" class="form-control  "  id="exampleInputEmail1" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
                <!--cuadro de password-->
              <label for="inputPassword5" class="form-label">Password</label>
              <input type="password" id="inputPassword5" class="form-control " aria-describedby="passwordHelpBlock" required>
              <div id="passwordHelpBlock" class="form-text">
                Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
              </div>
                <!--checbox de los terminos y condiciones-->
              <div class="mb-3 form-check ">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" required >
                <label class="form-check-label" for="exampleCheck1"> <a href="#">Terminos y condiciones</a> </label>
              </div>
              <!--Boton de iniciar sesion-->
              <div class="d-grid gap-2 col-6 mx-star">
                <button class="btn btn-primary" type="submit">Iniciar Sesión</button>
              </div>
              <!--por si no tiene cuenta-->
              <div class="my-3">
                <span>No tienes cuenta? <a href="registro.php">Registrate</a> </span><br>
                <!--si olvida la contraseña-->
                <span> <a href="#">Olvide mi contraseña</a> </span>
              </div>
            </form action="" method="post" id="formRegistro">
            <!--fin del formulario-->

            <!--login con redes sociales-->
            <div class="conatiner w-100 my-5">
              <div class="row">
                <div class="col-12">
                  <p class="fw-bold">Iniciar sesión por otros medios</p>
                </div>
                <!--Comenzando Botones-->
                <div class="row">
                  <!--Boton de Facebook-->
                  <div class="col">
                    <!--facebook-->
                    <button class="btn btn-outline-primary w-100 my-1">
                      <div class="row aling-items-center">
                        <div class="col-2 ">
                          <img src="imagenes_de_apoyo/facebook.png" width="32" alt="">
                        </div>
                        <!--titulo de facebook-->
                        <div class="col-10 text-center">
                          Facebook
                        </div>
                      </div>
                    </button>
                  </div>
                  <!--Botono de Google-->
                  <div class="col">
                    <button class="btn btn-outline-danger w-100 my-1">
                        <div class="row aling-items-center">
                          <div class="col-2">
                            <img src="imagenes_de_apoyo/google.png" width="32" alt="">
                          </div>
                          <!--titulo de Google-->
                          <div class="col-10 text-center">
                            Google
                          </div>
                        </div>
                      </button>
                  </div>
                  <!--Fin del boton de google-->

                </div>
              </div>
            </div>
            <!--Fin de los botones-->
        </div>
      </div>
    </div>
<hr>
  <!--pie de pagina-->
    <footer>
    <div class="container mt-5">
        <div class="row ">
        <div class="col-lg-4">
            <h3>Enlaces</h3>
            <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="#">Acerca de</a></li>
            <li><a href="#">Contacto</a></li>
            </ul>
        </div>
        <div class="col-lg-4">
            <h3>Contacto</h3>
            <p>Correo electrónico: for.all.today123@gmail.com</p>
            <p>Teléfono: +591 79123133</p>
        </div>
        <div class="col-lg-4">
            <h3>Derechos de autor</h3>
            <p>(c) 2023 MangaKase. Todos los derechos reservados.</p>
        </div>
        </div>
    </div>
    </footer>
<!--fin de footer-->

    <!--comection to js for bootstrap-->
  <script src="js/bootstrap.bundle.min.js"></script>
  <!--conection to js for JQuery-->
  <script src="jQuery/jquery-3.7.1.min.js"></script>
  <!--conecction to js for pooper-->
  <script src="pooper/popper.min.js"></script>
  <!--conecction to js for SweetAlert-->
  <script src="SweetAlert/sweetalert2.all.min.js"></script>
  <!--conection a my js-->
  <script src="codigo.js"></script>
</body>
</html>