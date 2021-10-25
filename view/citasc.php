<?php
	
	$conexion=mysqli_connect('localhost','root','password','agenda_medica');
?>
  <?php
if (!isset($_COOKIE['sesion'])){
  header("location: login.php");
}
/* if ($_COOKIE['sesion'] != "token") {
  header("location: login.php");
  
 }*/


?>

<!DOCTYPE html>
<html>
<head>
  	<title>citas</title>
  	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/vercitas.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	  <script src="https://kit.fontawesome.com/32f69680ca.js" crossorigin="anonymous"></script>
  </head>
</head>
<body>

	<header>
      <nav>
        <ul>
          <img src="../imagenes/LogoAppWeb.png" class="logo">
          <a href="../index.php" class="bottonh">Home</a>
          <a href="create_appointment.php" class="bottonh">Query</a>
          <a href="calendar.php" class="bottonh">Calendar</a>
          <a href="aboutus.php" class="bottonh">About us</a>
          <a href="perfil.php" class="logout">Profile</a>
        </ul>
      </nav>
    </header>

    <div>
		<h1 class="mid1">  <span> <i class="fas fa-notes-medical"></span></i> Your apoiments</h1>  
	</div>

	<div class="container mid">
		<table style="text-align: center" class="letrasP">
			<tr class="letras">
				<td>APPOINTMENT ID</td>
				<td>DATE</td>
				<td>HOUR</td>
				<td>CANCELLATION DATE</td>
			</tr>
		<?php

			$datos=$_COOKIE["sesion"];
			$datos=json_decode($datos);

			$ID=$datos[0]->Id_Paciente;
			$sql="SELECT Id_Cita, Fecha, Hora, Año_c FROM citascanceladas where Id_Paciente=$ID";
			$result=mysqli_query($conexion,$sql);
			while($mostrar=mysqli_fetch_array($result)){
				?>
				<tr>
					<td><?php echo $mostrar['Id_Cita']?></td>
					<td><?php echo $mostrar['Fecha']?></td>
					<td><?php echo $mostrar['Hora']?></td>
					<td><?php echo $mostrar['Año_c']?></td>
				</tr>
				<?php
			}
		?>
		</table>

<br><br><br>
	<a href="citas0.php" class="botton1">Back</a>
	</div>


	<div class="jumbotron text-center final" style="margin-bottom:0">
      <img src="../imagenes/LogoAppWeb.png" class="logo">
      <p style="-webkit-text-fill-color: white;font-size: 12px;">Copyright © 2020 AGHH. Derechos asociados y reservados por la clínica S.A de C.V.</p>
    </div>

</body>
</html>
