<?php

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

$txtNombre = isset($_POST['txtNombre']) ? $_POST['txtNombre'] : '';
$txtAp = isset($_POST['txtAp']) ? $_POST['txtAp'] : '';
$txtAm = isset($_POST['txtAm']) ? $_POST['txtAm'] : '';
$txtApo = isset($_POST['txtApo']) ? $_POST['txtApo'] : '';
$txtCorreo = isset($_POST['txtCorreo']) ? $_POST['txtCorreo'] : '';
$txtPws = isset($_POST['txtPws']) ? $_POST['txtPws'] : '';

$criptPws = md5($txtPws);

         $con = new SQLite3("animes.db") or die("problemas para conectar");
         $cs = $con -> query("INSERT INTO usuarios(nombre,apellidoP,apellidoM,apodo,correo,cont) VALUES('$txtNombre','$txtAp','$txtAm','$txtApo','$txtCorreo','$criptPws');");

        echo '
        <script>alert("Registro Exitoso!");</script>
        <script>window.location="login.html";</script>
        ';

        $con -> close();
        ?>