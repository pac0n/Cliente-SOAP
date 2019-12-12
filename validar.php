<?php 
session_start();
$x=$_SESSION['e_usuario'];
if (!isset($_SESSION['e_usuario']))
{
	header('Location: index.html');
}

if($x=='deshabilitado')
{
	header('Location: index.html');
}

 ?>