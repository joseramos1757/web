<?php

         $servidor='localhost';
         $usuario='root';
         $password='';
         $db='berlin';

        $conexion=mysqli_connect($servidor,$usuario,$password,$db) or die (mysqli_error());
    
?>