<?php
include("clases/conexion.php");

$usuario=$_POST['ci']; 
$nomb=strtoupper($_POST['nom']); 
$ape=strtoupper($_POST['ap']); 
$cel=$_POST['cel'];
$contra=$_POST['contra'];
$cargo=$_POST['cargo']; 



$sql="INSERT INTO usuarios set usuario='$usuario',nombre='$nomb',apellido='$ape',celular='$cel',contra='$contra',id_cargo='$cargo'";

$resultado=$conexion->query($sql);
        if ($resultado) {
        echo '<script language = javascript>alert("EL USUARIO '.$nomb.' CON CARGO HA SIDO GUARDADO EXITOSAMENTE")
self.location="registro.php"
</script>';
        	# code...
        }
        else
        {
        	echo '<script language = javascript>alert("ERROR AL INSERTAR AL USUARIO")
self.location="registro.php"
</script>';
        }

 ?>
