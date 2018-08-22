<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
	
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>

    <ul>
    <li><a href="reset-password.php" class="btn btn-secondary" style="float: left;">Cambiar contraseña</a></li>
	<li><a href="register.php" class="btn btn-secondary" style="float: left;">Dar de alta a un usuario nuevo</a></li>
	<li><a href="index.php" class="btn btn-secondary" style="float: right;">Regresar</a></li>
	<li><a href="logout.php" class="btn btn-secondary" style="float: right;">Cerrar sesión</a></li>
    </ul>

    <div class="page-header" style="display:inline-block;">
		<h1 id="logo"></h1>
        <h1 id="colors" hidden>Hola, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>! Bienvenido a la nueva plataforma de contabilidad.</h1>
    </div>

	
	<html>
<div class="wrapper">

</div>
</html>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/rainbowvis.js"></script>
	<script src="js/colors.js"></script>
</body>
</html>