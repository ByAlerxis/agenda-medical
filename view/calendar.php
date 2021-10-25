<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/calendar.css">

    <title>Our Schedule</title>
</head>
<body>

    <header><!--BARRA DE NAVEGACION-->
            <nav class="barra">
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

    <h1 class="title fontf">Our Schedule</h1>
    <div class="row">
        <div class="col-8">
            <div class="calendar miv">
                <div class="calendar__info">
                    <div class="calendar__prev" id="prev-month">&#9664;</div>
                    <div class="calendar__month negras" id="month"></div>
                    <div class="calendar__year negras" id="year"></div>
                    <div class="calendar__next" id="next-month">&#9654;</div>
                </div>

                <div class="calendar__week  negras">
                    <div class="calendar__day calendar__item">Monday</div>
                    <div class="calendar__day calendar__item">Tuesday</div>
                    <div class="calendar__day calendar__item">Wednesday</div>
                    <div class="calendar__day calendar__item">Thursday</div>
                    <div class="calendar__day calendar__item">Friday</div>
                    <div class="calendar__day calendar__item">Saturday</div>
                    <div class="calendar__day calendar__item">Sunday</div>
                </div>
                <div class="calendar__dates" id="dates"></div>
            </div>
        </div>

        
        <div class="col-4">
            <div class="container mid horas miv2">
              <br>  <p class="horas2">Our hours are from Monday to Friday</p>
                <h6>10:00 to 13:00</h6>
                <h6>and</h6>
                <h6>16:00 to 19:00</h6>
            </div>
        </div>

    </div>

    <script src="../js/scripts.js"></script>

    <div class="jumbotron text-center final" style="margin-bottom:0"><!--BARRA INFERIOR-->
        <img src="../imagenes/LogoAppWeb.png" class="logo">
        <p style="-webkit-text-fill-color: white;font-size: 12px;">Copyright © 2020 AGHH. Derechos asociados y reservados por la clínica S.A de C.V.</p>
    </div>

</body>
</html>
