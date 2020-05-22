<?php
    session_start();

    $conn = mysqli_connect(
        'localhost', # el servidor
        'root', # usuario
        '', # contrasenia
        'php_mysql_crud' # nombre de la bd   
    );
?>