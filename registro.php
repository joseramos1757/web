<?php
session_start();
if (isset($_SESSION["u_usuario"])) {
 ?>
<script>
	function sololetras(e)
	{
		key=e.keyCode|| e.which;
		tecla= String.fromCharCode(key).toLowerCase();
		letras="áéíóúabcdefghijklmnñopqrstuvwxyz ";
		especiales="8-37-39-46";
		tecla_especial=false;
		for (var i in especiales) 
		{   
			if (key==especiales[i]) 
			{
				tecla_especial=true;
				break;
			}
		}
		if (letras.indexOf(tecla)==-1&& !tecla_especial) 
			{
				return false;
			}
      }
</script>
<script>
	function solonumeros(e)
	{
		key=e.keyCode|| e.which;
		tecla= String.fromCharCode(key).toLowerCase();
		numeros="1234567890";
		especiales="8-37-39-46";
		tecla_especial=false;
		for (var i in especiales) 
		{   
			if (key==especiales[i]) 
			{
				tecla_especial=true;
				break;
			}
		}
		if (numeros.indexOf(tecla)==-1&& !tecla_especial) 
			{
				return false;
			}
      }
      </script>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>INSTITUTO TÉCNICO BERLIN</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/berlin1.png" rel="icon">
  <link href="assets/img/berlin.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="public/css/carreras.css">
  <link rel="stylesheet" href="public/css/registro.css">
    <link href="assets/css/style.css" rel="stylesheet">


</head>
<header id="header" class="fixed-top" >
  <div class="container d-flex align-items-center">

    <h1 class="logo me-auto"><a href="index.html">INSTITUTO TÉCNICO BERLIN</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar" >
      <ul>
        <li></li>
        <li><a class="getstarted scrollto" href="login.php">VOLVER</a></li>
        <li><a class="getstarted scrollto" href="clases/cerrar_sesion.php">CERRAR SESIÓN</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
  
</header><!-- End Header -->

<body>
<body>
  <hr>
  <hr>
  <div class="container">
    <div class="row align-items-start">
      <div class="col-lg-12 col-xl-12 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
  
          <div class="card-body p-4 p-sm-3">
            <h2 class="card-title text-center mb-5 fw-light fs-3">REGISTRO DE USUARIOS</h2>
            
            <form action="registroguardar.php" method="POST">
            <div class="row align-items-start">
              <div class="form-floating mb-3 col-lg-4 col-xl-4 col-md-4">
                <input type="text" name="ci"  class="form-control" id="ci" placeholder="nombre" required autofocus onkeypress="return solonumeros(event)"> 
                <label for="ci">CARNET DE IDENTIDAD</label>  
              </div>

              <div class="form-floating mb-3 col-lg-4 col-xl-4 col-md-4">
                <input type="text"name="nom" class="form-control" id="nombre" style="text-transform:uppercase;" placeholder="NOMBRES" onkeypress="return sololetras(event)">
                <label for="nombre">NOMBRE(S)</label>
              </div>
            
              <div class="form-floating mb-3 col-lg-4 col-xl-4 col-md-4">
                <input type="text"name="ap" class="form-control" id="apellidos" placeholder="apellidos" style="text-transform:uppercase;" onkeypress="return sololetras(event)">
                <label for="apellidos">APELLIDO(S)</label>
              </div>
              </div>
              <div class="row align-items-start">
              <div class="form-floating mb-3 col-lg-4 col-xl-4 col-md-4">
                <input type="text"name="cel" class="form-control" id="celular" placeholder="celular" required autofocus onkeypress="return solonumeros(event)">
                <label for="nombre">CELULAR</label>
              </div>

              <div class="form-floating mb-3 col-lg-4 col-xl-4 col-md-4">
                <input type="text" name="contra" class="form-control" id="email" placeholder="contraseña">
                <label for="contraseña">CONTRASEÑA</label>
              </div>
       

              <div class="form-floating mb-3 col-lg-4 col-xl-4 col-md-4">
            
                <select name="cargo" id="cargo" class="form-select" placeholder="cargo">  
                <?php
                include 'clases/conexion.php';
                $consulta="select * from cargo";
                $ejecutar=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));
                ?>
                  <option selected>SELECCIONE EL CARGO</option>
          
                <?php 
                while ($mostrar=mysqli_fetch_assoc($ejecutar)){ ?>

                  <option value="<?php echo $mostrar['id']?>"><?php echo $mostrar['tipo']?></option>
              
                
                  <?php }?>
            
                CARGO</select>
                <label for="password">CARGO</label>
                  
              </div>
              </div>
            
      
              <hr>

              <div class="d-grid mb-2 col-sm-4 col-lg-2 col-xl-2 mx-auto">
                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase btn-center" type="submit">REGISTRAR</button>
              </div>

            </form>
          </div>
        </div>

       </div>
    </div>
    </div>

    
  </div>
    <div class="col-xs-col-sm-12 col-md-12">
      <div class="cajontablas">
      <h2 class=" text-center mb-3 fw-light fs-3">USUARIOS REGISTRADOS</h2>
      <?php 	
                  include("clases/conexion.php");
                  $sql="select * from usuarios u INNER JOIN cargo c ON u.id_cargo = c.id";
                  $resultados=$conexion->query($sql);
       ?>
  <div class="table-responsive">
              <table class="table table-striped border-primary">
                    <thead class="bg-primary text-light">
                      <tr>
                        <th scope="col">CARNET DE IDENTIDAD</th>
                        <th scope="col">NOMBRES</th>
                        <th scope="col">APELLIDOS</th>
                        <th scope="col">CELULAR</th>
                        <th scope="col">CONTRASEÑA</th>
                        <th scope="col">CARGO</th>
                        <th colspan="2"><b> <center>	 OPERACIONES</center></b></th>
                      </tr>
                    </thead>
                    <?php 
                    foreach ($resultados as $fila) {
         	          ?>
                    <tbody class="bg-white">
          	        <tr>
                      <td><?php echo $fila['usuario']; ?></td>
                      <td><?php echo $fila['nombre']; ?></td>
                      <td><?php echo $fila['apellido']; ?></td>
                      <td><?php echo $fila['celular']; ?></td>
                      <td><?php echo $fila['contra']; ?></td>
                      <td><?php echo $fila['tipo']; ?></td>
                      <td><a href="registromodificar.php?i=<?php echo $fila["id_usuario"]; ?>"><button type="button" class="btn btn-success">EDITAR </button></a></td>
                     <td><a href="registroeliminar.php?i=<?php echo $fila["id_usuario"]; ?>"><button type="button" class="btn btn-danger">ELIMINAR </button></a></td>
                    </tr>
                    </tbody>
                          <?php
                         }
                          mysqli_close($conexion); 

                           ?>
                  </table>
            </div>
            <center><a href="registroreporte.php"   class="btn btn-danger"> GENERAR REPORTE </a></center>
        </div>
    </div>
</body>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>
<?php 

}
else
{
	header("Location:index.html");
}
?>