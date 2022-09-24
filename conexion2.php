<?php
    $host = "byhnmppudorboh5kknxv-mysql.services.clever-cloud.com";
    $usuario = "uu0klxxnazgb4gal";
    $contrasena = "vWdvHsIo8U0YXNO6PTOf";
    $base_de_datos = "byhnmppudorboh5kknxv";
    
    $conexion2= new mysqli($host, $usuario, $contrasena, $base_de_datos);
    //comprobar conexion
    if(mysqli_connect_errno())   
    {
    printf("Fallo la conexion");
    }
    else{
    //printf("estas conectado");
    }
?>