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
            <h2 class="card-title text-center mb-4 fs-3">REGISTRO DE ESTUDIANTES</h2>
            <h3 class="fs-4">DATOS PERSONALES</h3>
            <hr>
            <form action="estudianteguardar.php" method="POST">
            <div class="row align-items-start">
              <div class="form mb-3 col-lg-6 col-xl-6 col-md-6">
              <label for="ci" class=" mb-2">Nombre(s)</label> 
                <input type="text" name="nom"  class="form-control" id="nom" required autofocus onkeypress="return sololetras(event)" style="text-transform:uppercase;">                  
              </div>

              <div class="form   mb-3 col-lg-6 col-xl-6 col-md-6">
                <label for="nombre"class="mb-2">Apellido Paterno</label>
                <input type="text"name="pat" class="form-control" id="pat" required autofocus onkeypress="return sololetras(event)" style="text-transform:uppercase;"">
              </div>
              <div class="form mb-3 col-lg-6 col-xl-6 col-md-6">
              <label for="ci" class=" mb-2">Apellido Materno</label> 
                <input type="text" name="mat"  class="form-control" id="mat" required autofocus onkeypress="return sololetras(event)" style="text-transform:uppercase;"">                  
              </div>

              <div class="form   mb-3 col-lg-4 col-xl-4 col-md-4">
                <label for="nombre"class="mb-2">Cedula de Identidad</label>
                <input type="text"name="ci" class="form-control" id="ci"  onkeypress="return solonumeros(event)">
              </div>

              <div class="form mb-3 col-lg-2 col-xl-2 col-md-2">
              <label class="mb-2">Exp.</label>
                <select name="exp" id="exp" class="form-select">  
                <?php
                include 'clases/conexion.php';
                $consulta="select * from expedidos";
                $ejecutar=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));
                ?>
                 
                <option selected>SELECCIONE</option>
          
                <?php foreach ($ejecutar as $opciones): ?>

                  <option value="<?php echo $opciones['id_expedido']?>"><?php echo $opciones['nombre_expedido']?></option>
              
                
                  <?php endforeach ?>
            
                </select>
                  
              </div>
            
              <div class="form mb-3 col-lg-6 col-xl-6 col-md-6">
              <label for="ci" class=" mb-2">Fecha de Nacimiento</label> 
                <input type="date" name="fecnac"  class="form-control" id="fecnac" required autofocus>                  
              </div>

              <div class="form   mb-3 col-lg-6 col-xl-6 col-md-6">
                <label for="nombre"class="mb-2">Ciudad de Nacimiento</label>
                <input type="text"name="ciudad" class="form-control" id="ciudad" required autofocus onkeypress="return sololetras(event)" style="text-transform:uppercase;">
              </div>

          
            <div class="form   mb-3 col-lg-6 col-xl-6 col-md-6">
                <label for="nombre"class="mb-2">Genero</label>
                <br>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="genero" id="genero" value="MASCULINO">
                <label class="form-check-label" for="inlineRadio1">MASCULINO</label>
               </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="genero" id="genero" value="FEMENINO">
                <label class="form-check-label" for="inlineRadio2">FEMENINO</label>
              </div>
            </div>
    
            <div class="form   mb-3 col-lg-6 col-xl-6 col-md-6">
              <label for="nombre"class="mb-2">¿Es una persona con discapacidad?</label>
              <br>
             <div class="form-check form-check-inline">
             <input class="form-check-input" type="radio" name="disca" id="disca" value="SI">
            <label class="form-check-label" for="inlineRadio1">SI</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="disca" id="disca" value="NO">
              <label class="form-check-label" for="inlineRadio2">NO</label>
            </div>
           </div>
      
            
              <div class="form mb-3 col-lg-6 col-xl-6 col-md-6">
              <label for="ci" class=" mb-2">Numero de Celular</label> 
                <input type="text" name="cel"  class="form-control" id="cel" required onkeypress="return solonumeros(event)">                  
              </div>

              <div class="form   mb-3 col-lg-6 col-xl-6 col-md-6">
                <label for="nombre"class="mb-2">Correo Electronico</label>
                <input type="email"name="email" class="form-control" id="email">
              </div>

                       
              <div class="form mb-3 col-lg-6 col-xl-6 col-md-6">
              <label for="ci" class=" mb-2">Nacionalidad</label> 
                <input type="text" name="naci"  class="form-control" id="naci" required autofocus onkeypress="return sololetras(event)" style="text-transform:uppercase;">                  
              </div>

              <div class="form   mb-3 col-lg-6 col-xl-6 col-md-6">
                <label for="nombre"class="mb-2">Dirección</label>
                <input type="text"name="dir" class="form-control" id="dir">
              </div>

              <h3 class="fs-4">DATOS FAMILIARES</h3>
            <hr>
            <div class="form mb-3 col-lg-6 col-xl-6 col-md-6">
              <label for="ci" class=" mb-2">Nombre(s) del Padre</label> 
                <input type="text" name="nompa"  class="form-control" id="nompa" autofocus onkeypress="return sololetras(event)" style="text-transform:uppercase;">               
              </div>

              <div class="form   mb-3 col-lg-6 col-xl-6 col-md-6">
                <label for="nombre"class="mb-2">Apellido Paterno del Padre</label>
                <input type="text"name="patpa" class="form-control" id="patpa"  autofocus onkeypress="return sololetras(event)" style="text-transform:uppercase;"">
              </div>
              <div class="form mb-3 col-lg-6 col-xl-6 col-md-6">
              <label for="ci" class=" mb-2">Apellido Materno del Padre</label> 
                <input type="text" name="matpa"  class="form-control" id="matpa" autofocus onkeypress="return sololetras(event)" style="text-transform:uppercase;"">                  
              </div>

              <div class="form   mb-3 col-lg-4 col-xl-4 col-md-4">
                <label for="nombre"class="mb-2">Cedula de Identidad del Padre</label>
                <input type="text"name="cipa" class="form-control" id="cipa" onkeypress="return solonumeros(event)">
              </div>

              <div class="form mb-3 col-lg-2 col-xl-2 col-md-2">
              <label class="mb-2">Exp.</label>
                <select name="exppa" id="exppa" class="form-select">  
                <?php
                include 'clases/conexion.php';
                $consulta="select * from expedidos";
                $ejecutar=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));
                ?>
                 
                <option selected>SELECCIONE</option>
          
                <?php foreach ($ejecutar as $opciones): ?>

                  <option value="<?php echo $opciones['id_expedido']?>"><?php echo $opciones['nombre_expedido']?></option>
              
                
                  <?php endforeach ?>
            
                </select>
                  
              </div>

              <div class="form mb-3 col-lg-6 col-xl-6 col-md-6">
              <label for="ci" class=" mb-2">Numero de Celular del Padre</label> 
                <input type="text" name="celma"  class="form-control" id="cel" onkeypress="return solonumeros(event)">                  
              </div>

              <div class="form   mb-3 col-lg-6 col-xl-6 col-md-6">
                <label for="nombre"class="mb-2">Dirección del Padre</label>
                <input type="email"name="dirpa" class="form-control" id="dir">
              </div>  
              <div class="form mb-3 col-lg-6 col-xl-6 col-md-6">
              <label for="ci" class=" mb-2">Nombre(s) de la Madre</label> 
                <input type="text" name="nomma"  class="form-control" id="nomma" autofocus onkeypress="return sololetras(event)" style="text-transform:uppercase;">                  
              </div>

              <div class="form   mb-3 col-lg-6 col-xl-6 col-md-6">
                <label for="nombre"class="mb-2">Apellido Paterno de la Madre</label>
                <input type="text"name="patma" class="form-control" id="patma" autofocus onkeypress="return sololetras(event)" style="text-transform:uppercase;">
              </div>
              <div class="form mb-3 col-lg-6 col-xl-6 col-md-6">
              <label for="ci" class=" mb-2">Apellido Materno de la Madre</label> 
                <input type="text" name="matma"  class="form-control" id="matma" autofocus onkeypress="return sololetras(event)" style="text-transform:uppercase;">                  
              </div>

              <div class="form   mb-3 col-lg-4 col-xl-4 col-md-4">
                <label for="nombre"class="mb-2">Cedula de Identidad de la Madre</label>
                <input type="text"name="cima" class="form-control" id="cima" onkeypress="return solonumeros(event)">
              </div>

              <div class="form mb-3 col-lg-2 col-xl-2 col-md-2">
              <label class="mb-2">Exp.</label>
                <select name="expma" id="expma" class="form-select">  
                <?php
                include 'clases/conexion.php';
                $consulta="select * from expedidos";
                $ejecutar=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));
                ?>
                 
                <option selected>SELECCIONE</option>
          
                <?php foreach ($ejecutar as $opciones): ?>

                  <option value="<?php echo $opciones['id_expedido']?>"><?php echo $opciones['nombre_expedido']?></option>
              
                
                  <?php endforeach ?>
            
                </select>
                  
              </div>

              <div class="form mb-3 col-lg-6 col-xl-6 col-md-6">
              <label for="ci" class=" mb-2">Numero de Celular de la Madre</label> 
                <input type="text" name="celma"  class="form-control" id="celma" onkeypress="return solonumeros(event)">                  
              </div>

              <div class="form   mb-3 col-lg-6 col-xl-6 col-md-6">
                <label for="nombre"class="mb-2">Dirección de la Madre</label>
                <input type="email"name="dirma" class="form-control" id="dirma">
              </div>  
              <h3 class="fs-4">DATOS  DE REFERENCIA</h3>
            <hr>
            <div class="form mb-3 col-lg-6 col-xl-6 col-md-6">
              <label for="ci" class=" mb-2">Contacto 1 Nombre Completo</label> 
                <input type="text" name="cont1"  class="form-control" id="cel" required autofocus onkeypress="return sololetras(event)" style="text-transform:uppercase;"">                  
            </div>
            <div class="form mb-3 col-lg-6 col-xl-6 col-md-6">
              <label for="ci" class=" mb-2">Contacto 1 Numero de Celular</label> 
                <input type="text" name="cel1"  class="form-control" id="cel" required onkeypress="return solonumeros(event)">                  
            </div>
            <div class="form mb-3 col-lg-6 col-xl-6 col-md-6">
              <label for="ci" class=" mb-2">Contacto 2 Nombre Completo</label> 
                <input type="text" name="cont2"  class="form-control" id="cel" autofocus onkeypress="return sololetras(event)" style="text-transform:uppercase;">                  
            </div>
            <div class="form mb-3 col-lg-6 col-xl-6 col-md-6">
              <label for="ci" class=" mb-2">Contacto 2 Numero de Celular</label> 
                <input type="text" name="cel2"  class="form-control" id="cel" onkeypress="return solonumeros(event)">                  
            </div>
            <div class="form mb-3 col-lg-6 col-xl-6 col-md-6">
              <label for="ci" class=" mb-2">Contacto 3 Nombre Completo</label> 
                <input type="text" name="cont3"  class="form-control" id="cel" autofocus onkeypress="return sololetras(event)" style="text-transform:uppercase;">                  
            </div>
            <div class="form mb-3 col-lg-6 col-xl-6 col-md-6">
              <label for="ci" class=" mb-2">Contacto 3 Numero de Celular</label> 
                <input type="text" name="cel3"  class="form-control" id="cel"  onkeypress="return solonumeros(event)">                  
            </div>
            
            <h3 class="fs-4">DATOS ACADÉMICOS</h3>
            <hr>
            <div class="form mb-3 col-lg-6 col-xl-6 col-md-6">
              <label for="ci" class=" mb-2">Número de Serie de Titulo de Bachiller</label> 
                <input type="text" name="serie"  class="form-control" id="cel" required onkeypress="return solonumeros(event)">                  
            </div>

            <div class="form mb-3 col-lg-6 col-xl-6 col-md-6">
              <label for="ci" class=" mb-2">Fecha de Egreso</label> 
                <input type="date" name="egreso"  class="form-control" id="fecnac">                  
              </div>
            
              <h3 class="fs-4">DATOS DE INSCRIPCIÓN</h3>
            <hr>
              <div class="form mb-3 col-lg-12 col-xl-12 col-md-12">
              <label class="mb-2">Carrera</label>
                <select name="carrera" id="carrera" class="form-select">  
                <?php
                include 'clases/conexion.php';
                $consulta="select * from carreras";
                $ejecutar=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));
                ?>
                 
                <option selected>SELECCIONE LA CARRERA</option>
          
                <?php foreach ($ejecutar as $opciones): ?>

                  <option value="<?php echo $opciones['id_carrera']?>"><?php echo $opciones['nombre_carrera']?></option>
              
                
                  <?php endforeach ?>
            
                </select>
                  
              </div>
            <div class="form mb-3 col-lg-6 col-xl-6 col-md-6">
              <label for="ci" class=" mb-2">Paralelo</label> 
                <input type="text" name="par"  class="form-control" id="cel" required autofocus onkeypress="return sololetras(event)" style="text-transform:uppercase;">                  
              </div>
            <div class="form mb-3 col-lg-6 col-xl-6 col-md-6">
              <label for="ci" class=" mb-2">matricula</label> 
                <input type="text" name="matri"  class="form-control" id="cel" required onkeypress="return solonumeros(event)">                  
            </div>
            <div class="form mb-3 col-lg-12 col-xl-12 col-md-12">
              <label for="ci" class=" mb-2">Observaciones</label> 
                <textarea type="text" name="par" rows="4" class="form-control" id="cel" autofocus onkeypress="return sololetras(event)"></textarea>                  
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