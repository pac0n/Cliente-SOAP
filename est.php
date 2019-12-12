<?php

include("nusoap.php");

$nombree = $_POST['nombre'];
$nickname = $_POST['nickname'];
$pass = $_POST['psw'];
$estatus = $_POST['estatus'];

$cliente = new soapclient("http://localhost:8080/Proyecto_SW/publicar_SW?wsdl",true);


if(!$nombree=="" && !$nickname=="" && !$pass=="")
{

		$datos = array ('nombre'=>$nombree,'nickname'=>$nickname,'pass'=>$pass, 'estatus'=>$estatus);
		$cliente->call("registrar_beneficiado",$datos);
		echo("<script type='text/javascript'>alert('El registro se completo con éxito!');</script>");
        echo("<script type='text/javascript'>window.location='index.html';</script>");

}

else
{
    echo '<img src="assets/img/error.png" class="center-all-contens"><br>Error los campos no deben de estar vacíos';
}