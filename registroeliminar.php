
<?php 
include("clases/conexion.php");
    $id=$_REQUEST['i'];


        $query="DELETE FROM usuarios WHERE id_usuario='$id'";
        //no es precisa realizar la variable siguiente pero sirve para comprobar si se inserto datos
      $resultado=$conexion->query($query);
        if ($resultado) {


        echo '<script language = javascript>alert("EL USUARIO SE ELIMINO CORRECTAMENTE DEL SISTEMA")
self.location="registro.php"
</script>';
        }
        else
        {
        	    echo '<script language = javascript>alert("EL PRODUCTO NO SE ELIMINO")
self.location="registro.php"
</script>';
        }

 ?>

