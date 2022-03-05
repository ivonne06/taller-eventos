<?php

function __autoload($classname){
    require "class/" . $classname . ".class.php";
}

$nombre = isset($_GET['usuario']) ? $_GET['usuario'] : null;
if(!isset($nombre)){
    header("Location: login.php");
}else{
    session_start();
    if(!isset($_SESSION['data'])){
    $_SESSION['data']=array();
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agenda</title>

    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <form action="array.php" method="POST" class="formulario__login"  name="form1" id="form">              
        <input type="text" name="titulo" placeholder="Titulo del evento">
        <input type="date" id="fecha" name="fecha" value="" min="" max="">
        <input type="text" name="descripcion" placeholder="descripcion">
        <input type="submit" name="agregar" value="guardar evento">
        <input type="hidden" name="valores" value="<?php echo implode(",",$_SESSION['data'])?>">
    </form>     
    
    <?php
    
    
    ?>
</body>
</html>