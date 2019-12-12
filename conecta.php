<?php
  
/* Clase para ejecutar las consultas a la Base de Datos*/
class ejecutarSQL  {
    var $host = 'localhost';
    var $user = 'root';
    var $pass = '';
    var $db = 'dec';
    var $myconn;

    function conectar() 
    {
        $con = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if (!$con) 
        {
            die('Could not connect to database!');
        }

         else 
         {
            $this->myconn = $con;
            //echo 'Connection established!';
        }
        return $this->myconn;
    }

    public static function consultar($query) {
        if (!$consul = mysqli_query($query, ejecutarSQL::conectar())) {
            die(mysql_error().'Error en la consulta SQL ejecutada');
        }
        return $consul;
}

    function close() {
        mysqli_close($myconn);
         echo 'Connection closed!';
    }

}
/* Clase para hacer las consultas Insertar, Eliminar y Actualizar */
class consultasSQL{
    public static function InsertSQL($tabla, $campos, $valores) {
        if (!$consul = ejecutarSQL::consultar("insert into $tabla ($campos) VALUES($valores)")) {
            die("Ha ocurrido un error al insertar los datos en la tabla $tabla");
        }
        return $consul;
    }
    public static function DeleteSQL($tabla, $condicion) {
        if (!$consul = ejecutarSQL::consultar("delete from $tabla where $condicion")) {
            die("Ha ocurrido un error al eliminar los registros en la tabla $tabla");
        }
        return $consul;
    }
    public static function UpdateSQL($tabla, $campos, $condicion) {
        if (!$consul = ejecutarSQL::consultar("update $tabla set $campos where $condicion")) {
            die("Ha ocurrido un error al actualizar los datos en la tabla $tabla");
        }
        return $consul;
    }
}
