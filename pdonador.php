<!doctype html>
<?php 

include 'serv.php';
include 'conecta.php';
session_start();

 ?>
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
    <div class="row">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top nav-bar-teal">
        <!-- boton de apertura del sidebar -->
        
      
        <div id="mySidenav" class="sidenav">
          
          
          
        </div>
        <a class="navbar-brand" href="#">DDPC</a>
        <?php 
        
        if (isset($_SESSION['nickname'])) 
        {
          $nick=$_SESSION['nickname'];

          echo '&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge badge-warning">Bienvenido</span>&nbsp;&nbsp;&nbsp;<h4><span class="badge badge-success">'.$nick.'</h4>';
         
         } ?>
        <a href="elimina.php" style="position: absolute; right: 0;" class="btn btn-secondary btn-lg">Cerrar sesion</a>
        
        <br><br>
      </nav>
      <div>
    </header>
      
    <body>
      <div class="container">
        <br><br><br>

    <br><br>
    <h1>Panel de donadores</h1>  
    <br><br>

    <!-- Bootstrap CSS -->
<!-- jQuery first, then Bootstrap JS. -->
<!-- Nav tabs -->



<!-- Lista de equipos -->
<div class="container">

<?php 

  
            $link = new mysqli("localhost", "root", "", "dec");      

            /* comprobar la conexión */
            if ($link->connect_errno) 
            {
                echo "Falló la conexión ".$link->connect_error."</br>";
                exit();
            }


            

            $consulta = $link->query ("SELECT  * FROM donador WHERE nickname = '$nick'");
            $ewa=mysqli_fetch_array($consulta);
            $whats=$ewa['wa']; 
                            
 ?>

<form action="dona.php" role="form" method="post">
   
          <h1>Ingrese datos del equipo de computo</h1> 
            <br>
            <label for="full-names"><b>Marca</b></label>
            <input type="text" placeholder="Ingrese marca del equipo a donar" name="marca" required>

            <label for="full-names"><b>Descripcion</b></label>
            <input type="text" placeholder="Ingrese la descripcion del equipo que va a donar (disco duro, RAM, procesador, etc...)" name="descrip" required>

            <input type="hidden" name="nick" value="<?php echo $nick;?>" required>

            <input type="hidden" name="wa" value="<?php echo $whats;?>" required>


            <button type="submit" class="login-button">Registrar equipo</button>

        </form>   
  
</div>
<br><br><br><br><br>
<h1>Equipos que ha donado</h1>
<br><br>
<?php
                            $connection2 = new ejecutarSQL();
                            $connection2->conectar();                                 

                            $consulta = "select * from equipo where donador = '".$nick."'";
                            $result2 = mysqli_query($connection2->myconn, $consulta);
                            $total_e = mysqli_num_rows($result2);
                            if($total_e>0){
                                while($fila=mysqli_fetch_assoc($result2)){
                                   echo '
                                  <div class="class="card-container"">
                                       <div class="column">
                                         <div class="card text-white bg-success mb-3 card-style" style="max-width: 18rem;">
                                           <div class="card-header"><h3>'.$fila['marca'].'</h3></div>
                                           <div class="card-body">
                                           <p>Descripcion:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$fila['descripcion'].'</p>
                                           <p>Donador:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$fila['donador'].'</p>
                                           </div>
                                         </div>
                                       </div>
                                   </div>     
                                   ';
                               }   
                            }else{
                                echo '<h2>No ha donado equipos</h2>';
                            }  

                        ?>

                        <br><br><br>
                        <h1>Eliminar publicacion de donación</h1>
                        <br><br>
                        <form action="deldon.php" method="post" role="form">
                                 <div class="form-group">
                                     <select class="form-control" name="eq-id">
                                         <?php 
                                             $delequipo = "select * from equipo where donador = '".$nick."'";
                                             $result3 = mysqli_query($connection2->myconn, $delequipo);

                                             while($eq=mysqli_fetch_assoc($result3))
                                             {
                                                 echo '<option value="'.$eq['id_equipo'].'">'.$eq['marca'].'-'.$eq['descripcion'].'</option>';
                                             }
                                         ?>
                                     </select>
                                 </div>
                                 <p class="text-center"><button type="submit" class="btn btn-danger">Eliminar</button></p>
                                 <br>
                                 <div id="res-form-del-prod" style="width: 100%; text-align: center; margin: 0;"></div>
                             </form>

  <br><br><br><br><br>
         
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
