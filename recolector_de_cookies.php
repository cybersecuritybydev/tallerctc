<?php
if (isset($_GET["cookie"])) {
    //Esto nos ocasionaría problemas: echo $_GET["cookie"];
    //Aquí tengo una función que PHP 8 ya no utiliza:
    //echo filter_input(INPUT_GET, 'cookie', FILTER_SANITIZE_STRING);
    echo htmlspecialchars($_GET["cookie"]);
}
