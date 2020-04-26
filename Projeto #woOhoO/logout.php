<?php
	session_start();
	unset($_SESSION["email"]);
	unset($_SESSION["senha"]);
	unset($_SESSION["usuario"]);
	unset($_SESSION["id_usuario"]);
	header("Location: index.php");
?>
