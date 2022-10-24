<?php
  include("functions.php");

  $cuenta =$_POST['cuenta'];
  $pass = $_POST['pass'];

  $resultset=ejecutarSQLCommand("INSERT INTO usuarios (idUsuario, cuenta, pass ) VALUES (0,'$cuenta', '$pass')");
?>

  