<?php

  
include 'serv.php';
include 'conecta.php';

$marca = $_POST['marca'];
$descripcion = $_POST['descrip'];
$whats = $_POST['wa'];
$nick = $_POST['nick'];




if(!$marca=="" && !$descripcion=="" && !$nick=="" && !$whats=="")
{
    $connection = new ejecutarSQL();
    $connection->conectar();

    $verificar =  "select * from equipo where marca='".$marca."'";
    $result = mysqli_query($connection->myconn, $verificar);
    $verificaltotal = mysqli_num_rows($result);
    
    if($verificaltotal!=0 || $verificaltotal==0)
    {
        $sql = "INSERT INTO equipo(marca,descripcion,wa,donador) VALUES('$marca','$descripcion','$whats','$nick')";
 
 
        if(mysqli_query($connection->myconn, $sql))
        {
            echo("<script type='text/javascript'>alert('Ha logrado donar un equipo de computo!');</script>");
            echo("<script type='text/javascript'>window.location='pdonador.php';</script>");
           
        }

        else
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($connection);
            echo '<img src="assets/img/error.png" class="center-all-contens"><br>Ha ocurrido un error.<br>Por favor intente nuevamente'; 
        }
    }

    else
    {

    }

    
}

else
{
    echo '<img src="assets/img/error.png" class="center-all-contens"><br>Error los campos no deben de estar vacíos';
}


?>