<?php
session_start();
include ('validar.php');

$nickname=$_POST['nickname'];

$passw=$_POST['psw'];


if (!isset($_POST['nickname']) && !isset($_POST['psw'])){ 
      
      session_start();

}
         
        if((!empty($nickname)) & (!empty($passw)))
        {
            $link = new mysqli("localhost", "root", "", "dec");      

            /* comprobar la conexión */
            if ($link->connect_errno) 
            {
                echo "Falló la conexión ".$link->connect_error."</br>";
                exit();
            }
         
            $estatus="activo";
            
            $consulta = $link->query ("SELECT * FROM beneficiado WHERE nickname = '$nickname'");
            $consulta2 = $link->query ("SELECT * FROM donador WHERE nickname = '$nickname'");
            
            
            if(mysqli_num_rows($consulta) == 1 || mysqli_num_rows($consulta2) == 1)
            {
                
                $Bpass = $link->query ("SELECT  * FROM beneficiado WHERE nickname = '$nickname'");
                $Bpas=mysqli_fetch_array($Bpass);
                
                $rbuscandoUSER= mysqli_fetch_array($consulta);
                
                $pass2=$Bpas['pass'];
                $nomb=$Bpas['nickname'];          
                
                $_SESSION['nickname']=$Bpas['nickname'];
                $_SESSION['e_usuario']=$Bpas['estatus'];

                if($pass2==$passw && $nomb==$nickname)
                {
                    
                    $isession=$_SESSION['e_usuario'];
                    if($isession=='activo')
                    {
                        header('Location: principal.php');
                    }

                    if($isession=='deshabilitado')
                    {
                        echo("<script type='text/javascript'>alert('El usuario ha recibido un equipo!!!');</script>");
                        echo("<script type='text/javascript'>window.location='index.html';</script>");
                    }
                
                }
                else
                {
                	////////////////////////////////////////////////////////////////////////


                $Bpass = $link->query ("SELECT  *FROM donador WHERE nickname = '$nickname'");
                $Bpas=mysqli_fetch_array($Bpass);
                
                $rbuscandoUSER= mysqli_fetch_array($consulta2);
                
                $pass2=$Bpas['pass'];
                $nomb=$Bpas['nickname'];
                
                
                
                $_SESSION['nickname']=$Bpas['nickname'];
                $_SESSION['e_usuario']=$Bpas['estatus'];

                if($pass2==$passw && $nomb==$nickname)
                {
                    
                    $isession=$_SESSION['e_usuario'];
                    if($isession=='activo')
                    {
                        header('Location: pdonador.php');
                    }

                    if($isession=='deshabilitado')
                    {
                        echo("<script type='text/javascript'>alert('El usuario esta deshabilitado!');</script>");
                        echo("<script type='text/javascript'>window.location='index.html';</script>");
                    }

                
                }
                else
                {
                    echo "Error al iniciar logeo!!!";

                }                

                //////////////////////////////////////////////////////////////////////// 
                }       
            }
            $link->close();
        }
?>