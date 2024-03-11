<?php 
include("clases/conexion.php");
    $id=$_REQUEST['c'];
    $usuario=$_POST['ci']; 
    $nomb=strtoupper($_POST['nom']); 
    $ape=strtoupper($_POST['ap']); 
    $cel=$_POST['cel'];
    $contra=$_POST['contra'];
    $cargo=$_POST['cargo'];  
        $query="UPDATE usuarios SET usuario='$usuario',nombre='$nomb',apellido='$ape',celular='$cel',contra='$contra',id_cargo='$cargo' WHERE id_usuario='$id'";
        //no es precisa realizar la variable siguiente pero sirve para comprobar si se inserto datos
      $resultado=$conexion->query($query);
        if ($resultado) {
                echo '<script language = javascript>alert("EL USUARIO '.$nomb.' HA SIDO ACTUALIZADO EXITOSAMENTE")
self.location="registro.php"
</script>';
            #
        	# code...
        }
        else
        { 
        	echo "insercion no exitosa";
        }

 ?>
