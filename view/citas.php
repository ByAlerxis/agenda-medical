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
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	  <script src="https://kit.fontawesome.com/32f69680ca.js" crossorigin="anonymous"></script>

	<link rel="stylesheet"  href="../css/estilocitas.css">
  </head>

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


   <body onload="listar()">

    <div id="your" >
      <h1 id="c" style="text-align: center;" ><span> <i class="fas fa-notes-medical"></span></i> Your apoiments</h1>  
    </div>
  <div id="container" >

  <div id="demo"></div>
   <script>
    function listar(){

      $.get("../controller/citascontrolador.php", function(data, status){

        console.log(data);
       var myObj = JSON.parse(data);
        console.log(myObj);
        var txt = "";
        var i = 0;

        txt += "<table class='table'" +
                  "<thead>" +
                    "<tr>" +
                      "<th>Fecha</th>"+
                      "<th>Hora</th>"+
                      "<th>Medico</th>"+
                      "<th>Fecha de cancelacion</th>"+
                      "<th></th>" +
                    "</tr>"+
                  "</thead>"+
                  "<tbody>";

        for (;myObj[i];){

          txt += "<tr><td>" + myObj[i].Fecha + "</td>"+
                "<td>" + myObj[i].Hora + "</td>"+
                "<td>" + myObj[i].Nombre + "</td>"+
                "<td>" + myObj[i].Fecha_Cancelacion + "</td>"+
                "<td><a href='../model/pdf.php?id=' class='botton2 zoom' id='pdf' name='pdf'>PDF</a>" + "</td>" +
                "<td><a href='../model/pdf.php?id=<>' class='botton2 zoom' id='delete' name='delete'>Delete</a>" + "</td></tr>";
            i++;
        }
        
          txt += " </tbody>" +
              "</table>";
          document.getElementById("demo").innerHTML = txt;
        
      }); 
    }
  </script>
</div>



		

  <div class="jumbotron text-center final" style="margin-bottom:0">
    <img src="../imagenes/LogoAppWeb.png" class="logo">
    <p style="-webkit-text-fill-color: white;font-size: 12px;">Copyright © 2020 AGHH. Derechos asociados y reservados por la clínica S.A de C.V.</p>
  </div>




  </body>
  </html>