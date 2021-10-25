<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Simple Chatbot in PHP | CodingNepal</title> -->
    <link rel="stylesheet" href="../css/bot.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet"/>
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

    <div class="wrapper">
        <div class="title">Online Help</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hello there, how can I help you?</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Type something here.." required>
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: '../model/message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script>

    <div class="jumbotron text-center final" style="margin-bottom:0"><!--BARRA INFERIOR-->
        <img src="../imagenes/LogoAppWeb.png" class="logo">
        <p style="-webkit-text-fill-color: white;font-size: 12px;">Copyright © 2020 AGHH. Derechos asociados y reservados por la clínica S.A de C.V.</p>
    </div>


    
</body>
