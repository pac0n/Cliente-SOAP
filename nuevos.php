<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="XJGV" content="">
     <link rel="stylesheet" href="styles.css">

    <title>DDPC</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

   
    
  </head>
  

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top nav-bar-teal">
        <a class="navbar-brand" href="#">DDPC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">¿Quiénes somos?</a>
            </li>
          </ul>
        </div>
      </nav>
      <script type="text/javascript">     
function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if ( (charCode > 31 && charCode < 48) || charCode > 57) {
            return false;
        }
        return true;
    }
</script>
    </header>
      
    <body>
      <div class="container">
        <br><br><br>

    <h1>Bienvenido</h1>
    <br><br>
    <h5>Seleccione el tipo de usuario que desea registrar</h5>  
    <br><br>

    <!-- Bootstrap CSS -->
<!-- jQuery first, then Bootstrap JS. -->
<!-- Nav tabs -->

<ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link" href="#estudiante" role="tab" data-toggle="tab">Estudiante</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#universidad" role="tab" data-toggle="tab">Universidad</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#donadorunico" role="tab" data-toggle="tab">Donador civil</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#donadorins" role="tab" data-toggle="tab">Donador Institucional</a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="estudiante">
  <br><br>
        <form action="est.php" role="form" method="post">
   
          <h1>Crear cuenta de beneficiado estudiante universitario</h1> 
            <br>
            <label for="full-names"><b>Nombre</b></label>
            <input type="text" placeholder="Ingresa tu nombre(s) completo(s)" name="nombre" required>

            <label for="full-names"><b>Nickname</b></label>
            <input type="text" placeholder="Ingresa tu nickname" name="nickname" required>

            <label for="full-names"><b>Contraseña</b></label>
            <input type="text" placeholder="Ingresa tu password" name="psw" required>

            <input type="hidden" name="estatus" value="activo" required>

<!--
            <label for="full-names"><b>Apellido paterno</b></label>
            <input type="text" placeholder="Ingresa tu apellido paterno" name="apaterno" required>

            <label for="full-names"><b>Apellido materno</b></label>
            <input type="text" placeholder="Ingresa tu apellido materno" name="amaterno" required>

            <label for="full-names"><b>Ciudad</b></label>
            <input type="text" placeholder="Ingresa tu ciudad de procedencia" name="ciudad" required>

            <label for="full-names"><b>Dirección</b></label>
            <input type="text" placeholder="Ingresa tu dirección completa" name="direc" required>

            <label for="full-names"><b>Universidad</b></label>
            <input type="text" placeholder="Ingresa el nombre de tu universidad" name="univ" required>

            <label for="email"><b>Correo </b></label>
            <input type="email" placeholder="Ingresa tu e-mail" name="email" required>

            <label for="password"><b>Contraseña</b></label>
            <input type="password" placeholder="Ingresa tu contraseña" name="pass" required>
              
-->
            <button type="submit" class="login-button">Registrarse</button>

        </form>    
  </div>


  <div role="tabpanel" class="tab-pane fade" id="universidad">

      <br><br>
        <form action="uni.php" role="form" method="post">
   
          <h1>Crear cuenta para universidad publica beneficiada</h1> 
            <br>

            <label for="full-names"><b>Nombre</b></label>
            <input type="text" placeholder="Ingrese nombre de la universidad beneficiada" name="nombre" required>

            <label for="full-names"><b>Nickname</b></label>
            <input type="text" placeholder="Ingrese nickname de la universidad beneficiada" name="nickname" required>

            <label for="password"><b>Contraseña</b></label>
            <input type="password" placeholder="Ingrese la contraseña" name="psw" required>

            <input type="hidden" name="estatus" value="activo" required>
<!--
            <label for="full-names"><b>Ciudad</b></label>
            <input type="text" placeholder="Ingrese la ciudad de procedencia" name="ciudadu" required>

            <label for="full-names"><b>Dirección</b></label>
            <input type="text" placeholder="Ingrese la dirección de la universidad" name="direcu" required>

            <label for="full-names"><b>Telefono</b></label>
            <input type="text" placeholder="Ingrese numero de telefono de la universidad" name="telu" required>

            <label for="email"><b>Correo institucional</b></label>
            <input type="email" placeholder="Ingrese el e-mail del la universidad" name="emailu" required>

            <label for="full-names"><b>Nombre del responsable</b></label>
            <input type="text" placeholder="Ingrese el nombre(s) del responsable" name="nombreur" required>

            <label for="full-names"><b>Apellido paterno</b></label>
            <input type="text" placeholder="Ingrese el apellido paterno del responsable" name="apaternour" required>

            <label for="full-names"><b>Apellido materno</b></label>
            <input type="text" placeholder="Ingresa el apellido materno del responsable" name="amaternour" required>

     -->         
            <button type="submit" class="login-button">Registrarse</button>

        </form>    

  </div>
  <div role="tabpanel" class="tab-pane fade" id="donadorunico">
      <br><br>
        <form action="civ.php" role="form" method="post">
   
          <h1>Crear cuenta de donador civil</h1> 
            <br>

            <label for="full-names"><b>Nombre</b></label>
            <input type="text" placeholder="Ingresa tu nombre(s) completo(s)" name="nombre" required>

            <label for="full-names"><b>Nickname</b></label>
            <input type="text" placeholder="Ingresa nickname" name="nickname" required>

            <label for="password"><b>Contraseña</b></label>
            <input type="password" placeholder="Ingrese la contraseña deseada" name="psw" required>

            <label for="full-names"><b>Whatsapp</b></label>
            <input type="text" placeholder="Ingrese el numero de celular con whatsapp" name="wa" onkeypress="return isNumber(event)" required>

            <input type="hidden" name="estatus" value="activo" required>
<!--
            <label for="full-names"><b>Apellido paterno</b></label>
            <input type="text" placeholder="Ingresa tu apellido paterno" name="apaternod" required>

            <label for="full-names"><b>Apellido materno</b></label>
            <input type="text" placeholder="Ingresa tu apellido materno" name="amaternod" required>

            <label for="full-names"><b>Telefono celular</b></label>
            <input type="text" placeholder="Ingresa tu numero de telefono cel." name="celd" required>

            <label for="full-names"><b>Ciudad</b></label>
            <input type="text" placeholder="Ingresa tu ciudad de procedencia" name="ciudadd" required>

            <label for="full-names"><b>Dirección</b></label>
            <input type="text" placeholder="Ingresa tu dirección completa" name="direcd" required>

            <label for="email"><b>Correo</b></label>
            <input type="email" placeholder="Ingresa tu e-mail" name="emaild" required>

            <label for="password"><b>Contraseña</b></label>
            <input type="password" placeholder="Ingresa tu contraseña" name="passd" required>
  -->            
            <button type="submit" class="login-button">Registrarse</button>

        </form>    
  </div>
  <div role="tabpanel" class="tab-pane fade" id="donadorins">
    
      <br><br>
        <form action="emp.php" role="form" method="post">
   
          <h1>Crear cuenta para donador institucional - empresarial</h1> 
            <br>

            <label for="full-names"><b>Nombre</b></label>
            <input type="text" placeholder="Ingrese nombre(s) de la empresa" name="nombre" required>

            <label for="full-names"><b>Nickname</b></label>
            <input type="text" placeholder="Ingrese nickname de la empresa" name="nickname" required>

            <label for="password"><b>Contraseña</b></label>
            <input type="password" placeholder="Ingrese la contraseña deseada" name="psw" required>

            <label for="full-names"><b>Whatsapp</b></label>
            <input type="text" placeholder="Ingrese el numero de celular con whatsapp" name="wa" onkeypress="return isNumber(event)" required>

            <input type="hidden" name="estatus" value="activo" required>
<!--
            <label for="full-names"><b>Ciudad</b></label>
            <input type="text" placeholder="Ingrese la ciudad de la empresa" name="ciudadde" required>

            <label for="full-names"><b>Dirección</b></label>
            <input type="text" placeholder="Ingrese la dirección de la empresa" name="direcde" required>

            <label for="full-names"><b>Telefono</b></label>
            <input type="text" placeholder="Ingrese numero de telefono de la empresa" name="telde" required>

            <label for="email"><b>Correo empresarial</b></label>
            <input type="email" placeholder="Ingrese el e-mail del la empresa o del responsable" name="emailde" required>

            <label for="password"><b>Contraseña</b></label>
            <input type="password" placeholder="Ingrese la contraseña" name="passu" required>

            <label for="full-names"><b>Nombre del responsable</b></label>
            <input type="text" placeholder="Ingrese el nombre(s) del responsable" name="nombrede" required>

            <label for="full-names"><b>Apellido paterno</b></label>
            <input type="text" placeholder="Ingrese el apellido paterno del responsable" name="apaternode" required>

            <label for="full-names"><b>Apellido materno</b></label>
            <input type="text" placeholder="Ingresa el apellido materno del responsable" name="amaternode" required>
-->
              
            <button type="submit" class="login-button">Registrarse</button>

        </form>    
  </div>
</div>

  
         
    </body>  
      

      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right teal"><a href="#">Arriba</a></p>
        <p>&copy; 2018 DDPC &middot; <a href="#">Términos y condiciones</a> &middot; </p>
      </footer>
    </main>

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>
