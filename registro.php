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
        background-image: url(imagenes_de_apoyo/meowVentana.gif);
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
            <form class="row g-3">
                <!--logo de la empresa-->
              <div class="text-end text-center ">
                <img src="logos/logo.png" width="48" alt="">
              </div>
              <h2 class="fw-bold text-center py-5">Welcome to MangaKase</h2>
              <!--Nombre de la persona-->
                <div class="col-md-6">
                    <label for="validationServer01" class="form-label">Nombre</label>
                    <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Mark" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                </div>
                <!--Apellidos de la persona-->
                <div class="col-md-6">
                    <label for="validationServer02" class="form-label">Apellidos</label>
                    <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Otto" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                </div>
                <!--E-mail de la persona-->
                <div class="col-md-8">
                    <label for="validationServerUsername" class="form-label">E-mail</label>
                    <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend3">@</span>
                    <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        Por favor ingrese su correo
                    </div>

                    </div>
                </div>
                <!--pass de la persona-->
                <div class="row g-3 align-items-center col-md-12">
                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">Password</label>
                    </div>
                    <div class="col-auto">
                        <input type="password" id="inputPassword6" class="form-control is-invalid" aria-describedby="passwordHelpInline" required>
                    </div>
                    <div class="col-auto">
                        <span id="passwordHelpInline" class="form-text">
                        Ingrese caracteres mayores a 8 - 20
                        </span>
                    </div>
                    <div class="invalid-feedback">
                        Must be 8-20 characters long.
                    </div>
                </div>
                <!--ciudad de la persona-->
                <div class="col-md-6">
                    <label for="validationServer03" class="form-label">Ciudad</label>
                    <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                    Por favor inserte su ciudad
                    </div>
                </div>
                <!--Genero de la persona-->
                <div class="col-md-6">
                    <label for="validationServer04" class="form-label">Genero</label>
                    <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
                    <option>Masculino</option>
                    <option>Femenino</option>
                    <option>Helicoptero Apache Ruso</option>
                    </select>
                    <div id="validationServer04Feedback" class="invalid-feedback">
                    Por favor seleccione su genero
                    </div>
                </div>
                <!--Numero de la persona-->
                <div class="col-md-6">
                    <label for="validationServer05" class="form-label">Numero</label>
                    <input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
                    <div id="validationServer05Feedback" class="invalid-feedback">
                    Por favor ingrese su numero
                    </div>
                </div>
                <!--Terminos y condiciones -->
                <div class="col-12">
                    <div class="form-check">
                    <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                    <label class="form-check-label" for="invalidCheck3">
                        Acepto los terminos y condiciones
                    </label>
                    <div id="invalidCheck3Feedback" class="invalid-feedback">
                        Acepte para continuar 
                    </div>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary w-50" type="submit">Registrarse</button>
                </div>
                </form>
            <!--fin del formulario-->
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