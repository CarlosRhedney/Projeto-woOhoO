<?php
	session_start();
	unset($_SESSION["email"]);
	unset($_SESSION["senha"]);
	unset($_SESSION["usuario"]);
	unset($_SESSION["id_usuario"]);
	unset($_SESSION["data_nasc"]);
	header("Location: index.php");
?>