<?php

function connection (){
    $host = "localhost";
    $usr = "root";
    $pass = "";
    $bd = "agenda";
    $puerto = 3306;
    $mysqli = new mysqli ($host, $usr, $pass, $bd, $puerto);
    return $mysqli;
}


?>