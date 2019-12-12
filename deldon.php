<?php

include 'serv.php';
include 'conecta.php';

 $id= $_POST['eq-id'];

$connection = new ejecutarSQL();
$connection->conectar();

$cons =  "select * from equipo where id_equipo='$id'";
$result = mysqli_query($connection->myconn, $cons);

$totalequipos = mysqli_num_rows($result);
 
 if($totalequipos>0)
 {
    $vereq =  "select * from equipo where id_equipo='".$id."'";
    $result2 = mysqli_query($connection->myconn, $vereq);

    while($fila = mysqli_fetch_assoc($result2)) 
    {
        $eqborrar = $fila['id_equipo'];
        $borrar =  "DELETE FROM equipo where id_equipo='".$id."' && '$id'='$eqborrar'";
    
        if(mysqli_query($connection->myconn, $borrar))
        {
            echo("<script type='text/javascript'>alert('Ha borrado el equipo de computo seleccionado!');</script>");
            echo("<script type='text/javascript'>window.location='pdonador.php';</script>");
        }
        else
        {
            echo "Error, intente de nuevo!";
        }
    }
 }

 else
 {
     echo("<script type='text/javascript'>alert('Error, intente mas tarde!');</script>");
     echo("<script type='text/javascript'>window.location='pdonador.php';</script>");
 }