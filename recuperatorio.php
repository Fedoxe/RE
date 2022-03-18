<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://kit.fontawesome.com/5e9d7f01f0.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body>

	<div class="principal">
		<nav class="minimenu">
			<span>info@veterinaria.com.ar </span>
			<span>Tel: +54912354678</span>
			<i class="fab fa-facebook-f"></i>
			<i class="fab fa-instagram"></i>
		</nav>
		<header>
		<input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
			<img src="img/vete.jpg" alt="logo">
			<div class="menu">
			<ul>
            <li><a href="#">INICIO</a></li>
            <li><a href="#">QUIENES SOMOS</a></li>
            <li><a href="#">SERVICIOS</a></li>
            <li><a href="#">BLOG</a></li>
			<li><a href="#">CONTACTENOS</a></li>
        </ul>
	
			</div>
			
		</header>
		<section class="inicio">
			<img src=".jpg" alt="fondoincio">
			<h1>VETERINARIA </h1>
			<h4>HOMEOPATIA Y FISIOTERAPIA NATURAL</h4>
			<a href="" class="btn btn-primary">VER MAS</a>
		</section>
		<section class="suscribirse">
			<p>Aprende todo lo que hay que saber sobre la salud de tu mascota</p>
			<form action="recuperatorio.php" method="post">
				<input type="text" name="name" placeholder="Nombre">
				<input type="text" name="mail" placeholder="Gmail">
				<input type="submit" name="enviar" value="Enviar" class="btn btn-primary">
			</form>	
		</section>
        <?php
	 $host='localhost';
     $user='root';
     $password='';
     $basededatos='veterinaria';
     $conexion=mysqli_connect($host,$user,$password,$basededatos);
     
     if(isset($_POST['enviar'])) 
       {
        $name=$_POST["name"];
        $mail=$_POST["mail"];

             $consulta=mysqli_query($conexion,"INSERT INTO suscripcion(nombre, mail) VALUES ('$name', '$mail')");
        	
            if ($consulta==TRUE){
                echo"<script>alert('Te Has Suscripto Con Exito');
                </script>";
			    }
        }   
    ?>

		<section class="planes">
			<h2>NUESTROS PLANES</h2>			
		</section>
		<section class="servicios">

			<div class="cuadro">
				
				<h3>PLAN SIMPLE</h3>
				<p>Lorem, ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam, corporis. Odio sunt placeat eaque ea tempore harum sapiente quo magnam totam quam sint exercitationem, corporis autem qui tempora! Omnis, error.
				</p>
				<div class="precio">
					<h3>$1500</h3>
				</div>
				<div class="item">
					<ul>
						<li>Hasta 2 años</li>
						<li>Internacion 50%</li>
						<li>Atencion las 24hs</li>
					</ul>
				</div>
				<div class="boton">
					<a href="http://localhost/fede/RE/pago.html">
						<button class="btn btn-primary">CONTRATAR</button>
				</a>
				</div>
				
			</div>
			<div class="cuadro">
				
				<h3>PLAN MEDIO</h3>
				<p>Lorem, ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam, corporis. Odio sunt placeat eaque ea tempore harum sapiente quo magnam totam quam sint exercitationem, corporis autem qui tempora! Omnis, error.
				</p>
				<div class="precio">
					<h3>$2500</h3>
				</div>
				<div class="item">
					<ul>
						<li>Hasta 5 años</li>
						<li>Internacion 75%</li>
						<li>Atencion las 24hs</li>
					</ul>
				</div>
				<div class="boton">
				<a href="http://localhost/fede/RE/pago.html">
					<button class="btn btn-primary">CONTRATAR</button>
	</a>
				</div>
				
			</div>
			<div class="cuadro">
								
				<h3>PLAN ORO</h3>
				<p>Lorem, ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam, corporis. Odio sunt placeat eaque ea tempore harum sapiente quo magnam totam quam sint exercitationem, corporis autem qui tempora! Omnis, error.
				</p>
				<div class="precio">
					<h3>$3500</h3>
				</div>
				<div class="item">
					<ul>
						<li>Hasta 10 años</li>
						<li>Internacion 100%</li>
						<li>Atencion las 24hs</li>
					</ul>
				</div>
				<div class="boton">
				<a href="http://localhost/fede/RE/pago.html">
					<button class="btn btn-primary">CONTRATAR</button>
	</a>
				</div>
			</div>
	</div>
		</section>
	
		<section class="titulo">

    <div class="menu1">
		<h3>Noticias</h3></div>

		<?php
$host="localhost";
$user="root";
$password="";
$basededatos="veterinaria";
$conexion=mysqli_connect($host,$user,$password,$basededatos)or die(mysqli_error());
$consulta=mysqli_query($conexion,"SELECT * FROM noticias ORDER BY id_nombre DESC");
while ($mostrar=mysqli_fetch_array($consulta)){
?>

<section class="noticias">
	<div class="nombre">
		<h2> <?php echo $mostrar['nombre']?></h2> 
	</div>
    <div class="des">
        <h3><?php echo $mostrar['des']?></h3>
    </section>
</div>
</div>
</div>
    <?php
    
}
?>
</section>

		<footer>
			<span>EXAMEN RECUPERATORIO</span>
			<span>||</span>
			<span>DERECHOS RESERVADOS - 2022 &copy;</span>

		</footer>


	
	
</body>
</html>