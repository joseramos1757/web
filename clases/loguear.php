<?php
$usu=$_POST['usuario'];
$contra=$_POST['contra'];
session_start();
$_SESSION['usuario']=$usuario;

include("conexion.php");

$consulta="SELECT*FROM usuarios where usuario='$usu' and contra='$contra'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['id_cargo']==1){ //administrador
	$_SESSION['u_usuario'] = $usuario;
    header("location:../admin.php");

}else
if($filas['id_cargo']==2){ //cliente
	$_SESSION['u_usuario'] = $usuario;
header("location:../secretaria.php");
}
else{
    header("location:../login.php");
}
